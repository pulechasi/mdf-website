<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\User;
use App\Models\Advert;
use App\Models\Command;
use App\Models\Setting;
use App\Models\Commander;
use App\Models\Operation;
use App\Models\CommanderTerm;


use App\Models\StaticText;
use App\Models\SliderSlide;
use App\Models\StaticImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class FrontendController extends Controller
{
    //

    public function index(){
        $posts = Post::orderBy('created_at','desc')->take(3)->get();
        $slides = SliderSlide::all();
        return view('index')->with('posts', $posts)->with('slides', $slides)
        ->with('settings', Setting::first());

    }

    public function airForce(){

        return view('airforce')
        ->with('settings', Setting::first());
    }


    public function independent(){

        return view('independent')
        ->with('settings', Setting::first());;
    }

    public function origins(){

        return view('origins')
        ->with('settings', Setting::first());
    }
    public function OurPeople(){

        return view('our_people')
        ->with('settings', Setting::first());
    }

    public function advertsPage(){
        $adverts = Advert::orderBy('created_at', 'desc')->take(7)->get();
        return view('adverts')
        ->with('adverts', $adverts)
        ->with('settings', Setting::first());
    }


    // public function downloadFile($slug){
    //    $data = DB::table('adverts')->where('slug', $slug)->first();
    //    $filepath = public_path($data->file);
    //    return response()->download($filepath);

    // }



public function downloadFile($slug)
{
    $data = DB::table('adverts')->where('slug', $slug)->first();
    $filepath = public_path($data->file);

    // Check if the file exists
    if (!file_exists($filepath)) {
        abort(404);
    }

    // Get the file's MIME type
    $fileMimeType = mime_content_type($filepath);

    // Check if the file type is a PDF
    if ($fileMimeType === 'application/pdf') {
        // For PDF files, open in a new tab
        return response()->file($filepath, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . basename($filepath) . '"',
        ]);
    } else {
        // For non-PDF files, initiate download
        return response()->download($filepath, basename($filepath));
    }
}

    public function singlePost($slug){

        $post = Post::where('slug', $slug)->first();
        $latest_posts = Post::orderBy('created_at', 'desc')
        ->where('id', '!=', $post->id)->take(5)->get();
        $related_posts = Post::where('title', 'LIKE','%'.$post->title.'%')->take(3)
        ->where('id','!=',$post->id)->get();
        return view('single_post')->with('post', $post)
        ->with('related_posts', $related_posts)
        ->with('latest_posts', $latest_posts)
        ->with('settings', Setting::first());

     }


    public function newsEvents(){
        $news_events  = Post::orderBy('created_at','desc')->whereIn('category', ['News','Events'])->take(5)->get();
        return view('news_events')
        ->with('news_events', $news_events)
        ->with('settings', Setting::first());
    }

    public function directories(){

        return view('directories')
        ->with('settings', Setting::first());
    }


    public function armedForcesCollege(){

        return view('armed_forces_college')
        ->with('settings', Setting::first());
    }

    public function internalOperations(){
        $operation = Operation::where('operation_type', 'Internal')
        ->where('status', 1)->get();
        return view('internal_operations')
        ->with('settings', Setting::first())
        ->with('operation', $operation);
    }

    public function externalOperations(){
        $operation = Operation::where('operation_type', 'External')
        ->where('status', 1)->get();
        return view('external_operations')
        ->with('settings', Setting::first())
        ->with('operation', $operation);
    }

    public function singleInternal($slug){
        $operation = Operation::where('slug', $slug)->first();
        $latest_operations = Operation::orderBy('created_at', 'desc')->where('operation_type', 'Internal')
        ->where('status',1)
        ->where('id', '=',$operation->id)->take(3)->get();
        $archived_operations = Operation::orderBy('created_at', 'desc')->where('operation_type','=', 'Internal')
        ->where('status', '=', 0)->take(4)->get();
        return view('single_internal')
        ->with('operation', $operation)
        ->with('latest_operations', $latest_operations)
        ->with('archived_operations', $archived_operations)
        ->with('settings', Setting::first());
    }


    public function singleExternal($slug){
        $operation = Operation::where('slug', $slug)->first();
        $latest_operations = Operation::orderBy('created_at', 'desc')->where('operation_type', 'External')
        ->where('status',1)->where('id','=',$operation->id)->take(4)->get();
        $archived_operations = Operation::orderBy('created_at', 'desc')->where('operation_type','=', 'External')
        ->where('status', '=',0)->take(4)->get();
        return view('single_external')
        ->with('operation', $operation)
        ->with('latest_operations', $latest_operations)
        ->with('archived_operations', $archived_operations)
        ->with('settings', Setting::first());
    }


    public function landForces(){


        $images = [
            'land-forces' => StaticImages::where('identifier', 'land-forces')->first(),
        ];

        return view('land_forces')
        ->with('settings', Setting::first())->with('images', $images);
    }

    public function maritimeForce(){

        return view('maritime_forces')
        ->with('settings', Setting::first());
    }

    public function serviceCommanders(){
        // $service_commander = Commander::where('commander_type', '!=', 'MDF Commander')
        // ->where('status',1)->get();
        $service_commander = CommanderTerm::where('status', true)
                                ->whereHas('commander', function ($query) {
                                    $query->whereNotIn('commander_type', ['MDF Commander', 'Commander In Chief']);
                                })->get();

        return view('service_commanders')
            ->with('service_commander', $service_commander)
            ->with('settings', Setting::first());

    }

    public function commissionedOfficers(){

        return view('commissioned')
        ->with('settings', Setting::first());
    }

    public function nonCommissioned(){

        return view('non-commissioned')
        ->with('settings', Setting::first());
    }

    public function commandStaffCollege(){

        $staticText = [
            'college_vision' => StaticText::where('identifier', 'college_vision')->first(),
            'college_mission' => StaticText::where('identifier', 'college_mission')->first(),
            'college_core_values' => StaticText::where('identifier', 'college_core_values')->first(),
            'about_college' => StaticText::where('identifier', 'about_college')->first(),
        ];

        $images = [
            'staffcollage' => StaticImages::where('identifier', 'staffcollage')->first(),
            'staff1' => StaticImages::where('identifier', 'staff1')->first(),
            'staff' => StaticImages::where('identifier', 'staff')->first(),
        ];

        return view('command_staff_college')
        ->with('staticText', $staticText)
        ->with('settings', Setting::first())
        ->with('images', $images);

    }

    public function PeaceSupportOperations(){

        return view('Peace_Support_Operations')
        ->with('settings', Setting::first());
    }

    public function command(){
        $commander = Command::where('rank', 'Commander')->first();
        $deputy = Command::where('rank', 'Deputy commander')->first();
        $chief_of_staff = Command::where('rank', 'Chief of staff')->first();
        $deputy_chief_of_staff = Command::where('rank', 'Deputy Chief of staff')->first();
        $sergeant_major = Command::where('rank', 'Sergeant major')->first();

        return view('command')
            ->with('commander', $commander)
            ->with('deputy', $deputy)
            ->with('chief_of_staff', $chief_of_staff)
            ->with('deputy_chief_of_staff', $deputy_chief_of_staff)
            ->with('sergeant_major', $sergeant_major)
            ->with('settings', Setting::first());
    }

    public function commandStructure(){

        $commanderInChief = CommanderTerm::where('status', true)
             ->whereHas('commander', function ($query) {
             $query->where('commander_type', 'Commander In Chief');
            })->first();

        return view('command_structure')
                        ->with('commanderInChief', $commanderInChief)
                        ->with('settings', Setting::first());
    }

    public function careers(){

        return view('careers')
        ->with('settings', Setting::first());
    }

    public function whatWeAre(){

        return view('what_we_are')
        ->with('settings', Setting::first());
    }

    public function national(){

        return view('malawi_nation_service')
        ->with('settings', Setting::first());
    }


	   public function corporate(){

        return view('corparte')
        ->with('settings', Setting::first());
    }

    public function mdfCommanders(){
        //  $current_commander = Commander::where('commander_type', 'MDF Commander')
        //  ->where('status', 1)->first();
         $current_commander = CommanderTerm::where('status', true)
             ->whereHas('commander', function ($query) {
             $query->where('commander_type', 'MDF Commander');
            })->first();
        //  $previous_commanders = Commander::orderBy('created_at','asc')->where('commander_type', 'MDF Commander')
        //  ->where('status', 0)->get();
         $previous_commanders = CommanderTerm::where('status', false)
         ->whereHas('commander', function ($query) {
         $query->where('commander_type', 'MDF Commander');
        })->orderBy('retirement_date', 'asc')->get();

         return view('mdf_commanders')
         ->with('current_commander', $current_commander)
         ->with('previous_commanders', $previous_commanders)
         ->with('settings', Setting::first());
    }

    public function excellence(){

        return view('centers-for-excellence')
        ->with('settings', Setting::first());
    }
    public function pressRelease(){

        $press_release  = Post::orderBy('created_at','desc')->where('category', 'Press release')->take(5)->get();
        return view('press_release')
        ->with('press_release', $press_release);
    }

    // =============== [ Email ] ===================
    public function email() {
        return view("includes.header");
    }

     // ========== [ Compose Email ] ================
     public function composeEmail(Request $request) {
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {

            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = 'helpdesk.gwan@gmail.com';   //  sender username
            $mail->Password = 'lxceiedaxrrmyqcu';                                     // sender password
            $mail->SMTPSecure = 'tls';                  // encryption - ssl/tls
            $mail->Port = 587;                          // port - 587/465

            $mail->setFrom("$request->email", "MDF Feedback Form");
            $mail->addAddress('chainasgsuntche@gmail.com');


            $mail->isHTML(true);                // Set email content format to HTML

            $mail->Subject = "Feedback";
            $mail->Body    = "From : $request->email <br>
                               Name: $request->fname $request->lname <br>
                               Feedback message:<br> $request->feedback ";

            // $mail->AltBody = plain text version of email body;

            if( !$mail->send() ) {
                return back()->with("error", "Email not sent.")->withErrors($mail->ErrorInfo);
            }

            else {
                return back()->with("status", "Email has been sent.");
            }

        } catch (Exception $e) {
             return back()->with('error','Message could not be sent.');
        }
    }


}
