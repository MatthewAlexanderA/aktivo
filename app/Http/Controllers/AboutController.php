<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::orderBy('id', 'ASC')->first();

        return view('admin.about.index', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $rules = [
            'image_1' => 'image|file',
            'image_2' => 'image|file',
            'image_3' => 'image|file',
            'about_title' => 'required',
            'about_desc' => 'required',
            'story_title' => 'required',
            'story_desc' => 'required',
            'mission_title' => 'required',
            'mission_desc' => 'required',
            'core_title_1' => 'required',
            'core_desc_1' => 'required',
            'core_title_2' => 'required',
            'core_desc_2' => 'required',
            'core_title_3' => 'required',
            'core_desc_3' => 'required',
            'core_title_4' => 'required',
            'core_desc_4' => 'required',
            'core_title_5' => 'required',
            'core_desc_5' => 'required',
        ];

        $validated = $request->validate($rules);

        if ($request->file('image_1')) {
            if ($request->oldImage1) {
                Storage::delete($request->oldImage1);
            }
            $validated['image_1'] = $request->file('image_1')->store('post-images/about');
        };

        if ($request->file('image_2')) {
            if ($request->oldImage2) {
                Storage::delete($request->oldImage2);
            }
            $validated['image_2'] = $request->file('image_2')->store('post-images/about');
        };

        if ($request->file('image_3')) {
            if ($request->oldImage3) {
                Storage::delete($request->oldImage3);
            }
            $validated['image_3'] = $request->file('image_3')->store('post-images/about');
        };

        $about->update($validated);

        return redirect()->route('about.index')
            ->with('success', 'Update Success!');
    }
}
