<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::all();
        return view('admin.head', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('images.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp,jfif|max:10240', // Before image (single)
            // 'photos' => 'required|array|min:1', // After images (multiple)
            'photo' => 'image|mimes:jpeg,png,jpg,webp,jfif|max:10240', // Each after image
        ]);

        if (!Auth::check()) {
            abort(403, 'You must be logged in to create a gallery entry.');
        }

        // Handle before image (single)

        $path = $request->file('image')->store('gallery/before', 'public_direct');
         $imagePath = 'uploads/' . $path;


        // Handle after images (multiple)
        $Ppath = $request->file('photo')->store('gallery/after', 'public_direct');
         $photoPath = 'uploads/' . $Ppath;

        // Create the gallery entry
        Image::create([
            'title' => $request->title,
            'image' => $imagePath, // Before image
            'photo' => $photoPath, // After image
            'user_id' => Auth::id(),
        ]);

        return redirect('/admin/head')->with('success', 'Gallery entry created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        return view('images.show', compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $image = Image::findOrFail($id);
        return view('images.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:10240', // Before image (optional on update)
            // 'photos' => 'nullable|array', // After images (optional on update)
            'photo' => 'image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        if (!Auth::check()) {
            abort(403, 'You must be logged in to update a gallery entry.');
        }

        $image = Image::findOrFail($id);

        // Update title
        $image->title = $request->title;

        // Handle before image update
        if ($request->hasFile('image')) {
            // Delete old image from public folder
            if ($image->image && file_exists(public_path($image->image))) {
                unlink(public_path($image->image));
            }

            // Save new image using public_direct
            $path = $request->file('image')->store('gallery/before', 'public_direct');
            $data['image'] = 'uploads/' . $path;
        }

        // Handle after images update
        if ($request->hasFile('image')) {
            // Delete old image from public folder
            if ($image->image && file_exists(public_path($image->image))) {
                unlink(public_path($image->image));
            }

            // Save new image using public_direct
            $path = $request->file('image')->store('gallery/after', 'public_direct');
            $data['image'] = 'uploads/' . $path;
        }

        $image->save();

        return redirect('/admin/head')->with('success', 'Gallery entry updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if (!Auth::check()) {
            abort(403, 'You must be logged in to delete a gallery entry.');
        }

        $gallery = Image::findOrFail($id);

        // Delete before image
        if ($gallery->image) {
            $beforePath = str_replace('storage/', '', $gallery->image);
            Storage::disk('public_direct')->delete($beforePath);
        }

        // Delete all after images
        $afterImages = json_decode($gallery->photos, true) ?? [];
        foreach ($afterImages as $afterImage) {
            $afterPath = str_replace('storage/', '', $afterImage);
            Storage::disk('public_direct')->delete($afterPath);
        }

        // Delete the record
        $gallery->delete();

        return redirect('/admin/head')->with('success', 'Gallery entry deleted successfully!');
    }
}
