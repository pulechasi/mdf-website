<?php

namespace App\Http\Controllers;

use App\Models\SliderSlide;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all slides from the database
        $slides = SliderSlide::all();

        // Return the view with the retrieved slides
        return view('slides.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return the create view
        return view('slides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request data (customize this based on your requirements)
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'link_url' => 'max:255',
            'button_text' => 'required|max:255',
        ]);

        // Process and store the uploaded image
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $image->storeAs('public/slider_image', $imageName);

        // Create a new slider slide record
        $sliderSlide = SliderSlide::create([
            'image' => $imageName,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'link_url' => $request->input('link_url'),
            'button_text' => $request->input('button_text'),
        ]);

        // Redirect back with a success message
        return redirect()->route('slides.index')->with('success', 'Slide created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SliderSlide  $sliderSlide
     * @return \Illuminate\Http\Response
     */
    public function edit(SliderSlide $slide)
    {
        // Return the edit view with the specific slide data
        return view('slides.edit', compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SliderSlide  $sliderSlide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SliderSlide $slide)
    {
        // Validate the incoming request data (customize this based on your requirements)
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Optional: Allow image update
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'link_url' => 'max:255',
            'button_text' => 'required|max:255',
        ]);

        // Process and store the uploaded image if a new image is provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('public/slider_image', $imageName);

            // Update the image path in the database
            $slide->image = $imageName;
        }

        // Update other slide properties
        $slide->title = $request->input('title');
        $slide->description = $request->input('description');
        $slide->link_url = $request->input('link_url');
        $slide->button_text = $request->input('button_text');

        // Save the updated slide
        $slide->update();

        // Redirect back with a success message
        return redirect()->route('slides.index')->with('success', 'Slide updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SliderSlide  $sliderSlide
     * @return \Illuminate\Http\Response
     */
    public function destroy(SliderSlide $slide)
    {
        // Delete the slide from the database
        $slide->delete();

        // Redirect back with a success message
        return redirect()->route('slides.index')->with('success', 'Slide deleted successfully');
    }
}