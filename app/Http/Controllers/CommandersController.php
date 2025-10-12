<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commander;
use App\Models\CommanderTerm;
use Auth;
use Carbon\Carbon;

class CommandersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $commanders = CommanderTerm::where('status', true)
                        ->orderBy('retirement_date', 'desc')
                        ->paginate(10);

        return view('commanders.index', compact('commanders'))
                    ->with('i', (request()->input('page', 1) - 1) * 10);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('commanders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'commander_roles' => 'required',
            'picture' => 'required|image',
            'commander_type'=> 'required',
            'appointed_date' => 'required'
        ]);

        $picture = $request->picture;
        $picture_new_name = time().$picture->getClientOriginalName();
        $picture->move('uploads/commanders/',$picture_new_name);

        $commander = Commander::create([
            'title' => $request->title,
            'name' => $request->name,
            'slug' => str_slug($request->name),
            'user_id' => Auth::user()->id,
            'commander_roles' => $request->commander_roles,
            'picture' => 'uploads/commanders/'.$picture_new_name,
            'commander_type' => $request->commander_type,
        ]);

        // Create the initial term
        $commander->terms()->create([
            'appointed_date' => $request->appointed_date,
            'status' => true
        ]);
        return redirect()->route('commanders')->with('status', 'New commander added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $commander = Commander::find($id);

        return view('commanders.edit', compact('commander'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'commander_roles' => 'required',
            'picture' => 'sometimes|image',
            'commander_type' => 'required',
            'appointed_date' => 'required',
        ]);

        $commander = Commander::find($id);

        if($request->hasFile('picture')){

            $picture = $request->picture;
            $picture_new_name = time().$picture->getClientOriginalName();
            $picture->move('uploads/commanders/',$picture_new_name);

            $commander->picture = 'uploads/commanders/'.$picture_new_name;
        }

        // $commander->title = $request->title;
        // $commander->name = $request->name;
        // $commander->commander_roles = $request->commander_roles;
        // $commander->commander_type = $request->commander_type;
        // $commander->appointed_date = $request->appointed_date;

        // $commander->save();
        $commander->update([
            'title' => $request->title,
            'name' => $request->name,
            'user_id' => Auth::user()->id,
            'commander_roles' => $request->commander_roles,
            'commander_type' => $request->commander_type,
        ]);
        // Update the current active term
        $currentTerm = $commander->terms()->where('status', true)->first();
        if ($currentTerm) {
            $currentTerm->update([
                'appointed_date' => $request->appointed_date
            ]);
        }
        return redirect()->route('commanders')->with('status', 'Commander updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $commander = Commander::find($id);

        $commander->delete();

        return redirect()->route('commanders')->with('status', 'Commander has been deleted!');
    }

    // Retire commanders
    public function retire(Request $request, Commander $commander)
    {
        // Validate the input
     // Validate the input
        $request->validate([
            'retirement_date' => 'required|date'
        ]);

        $retirementDate = $request->input('retirement_date');
        // Get the current active term
        $currentTerm = $commander->terms()->where('status', true)->first();

        if ($currentTerm) {
            $appointedDate = $currentTerm->appointed_date;

            // Validate that retirement date is later than the appointed date
            if (Carbon::parse($retirementDate)->lt(Carbon::parse($appointedDate))) {
                return redirect()->back()->withErrors(['retirement_date' => 'Retirement date must be later than the appointed date.']);
            }

            // Retire the current term
            $currentTerm->update([
                'retirement_date' => $retirementDate,
                'status' => false
            ]);

            // Check if the commander is reappointed
            // Replace this placeholder with actual logic to determine reappointment
            $reappointed = true; // For example, this could be a form input or a business rule

            if ($reappointed) {
                // Create a new term for the reappointed commander
                $commander->terms()->create([
                    'appointed_date' => $retirementDate,
                    'status' => true
                ]);
            }
}
        return redirect()->route('commanders')->with('status', 'Commander retired successfully.');
    }


    public function showRetiredCommanders(Request $request)
    {

        $commanders = CommanderTerm::where('status', false)
                                    ->whereNotNull('retirement_date')
                                    ->orderBy('retirement_date', 'desc')
                                    ->paginate(10);

        return view('commanders.retired', compact('commanders'))
                   ->with('i', (request()->input('page', 1) - 1) * 10);
    }

}
