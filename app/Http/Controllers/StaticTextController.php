<?php

namespace App\Http\Controllers;

use App\Models\StaticText;
use Illuminate\Http\Request;

class StaticTextController extends Controller
{
    public function updateText(Request $request, $identifier)
    {
        // Validate and update the text in the database
        $validatedData = $request->validate([
            $identifier => 'required|string', // Use the identifier to specify the input name
        ]);

        // Find or create a StaticText record based on the identifier
        $staticText = StaticText::firstOrNew(['identifier' => $identifier]);
        $staticText->value = $validatedData[$identifier];
        $staticText->save();

        // Redirect back to the same page with a success message
        return redirect()->back()->with('success', 'Text updated successfully.');
    }
}