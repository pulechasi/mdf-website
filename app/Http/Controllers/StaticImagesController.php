<?php

namespace App\Http\Controllers;

use App\Models\StaticImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class StaticImagesController extends Controller
{
    public function update(Request $request, $identifier)
{
    $image = StaticImages::where('identifier', $identifier)->first();

    if (!$image) {
        return redirect()->back()->with('error', 'Image not found.');
    }

    if ($request->hasFile('new_image')) {
        // Validate the uploaded file (e.g., file type, size, etc.)
        $validatedData = $request->validate([
            'new_image' => 'image', // Removed specific format validation
        ]);

        // Upload the new image
        $newImage = $request->file('new_image');
        $newImageName = uniqid() . '.' . $newImage->getClientOriginalExtension();

        // Use Intervention Image to open and resize the image while maintaining quality
        $compressedImage = Image::make($newImage);
        $compressedImage->resize(2000, 1000, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

        // Save the resized image
        $compressedImage->save(public_path('app/img/static_pages_images/' . $newImageName));

        $oldImagePath = public_path('app/img/static_pages_images/' . $image->filename);
        if (File::exists($oldImagePath)) {
            File::delete($oldImagePath);
        }

        $image->filename = $newImageName;
        $image->save();

        return redirect()->back()->with('success', 'Image updated successfully.');
    } else {
        return redirect()->back()->with('error', 'No new image uploaded.');
    }
}



}
