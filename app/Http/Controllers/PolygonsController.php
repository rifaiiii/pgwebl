<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PolygonsModel;
use App\Models\Polygons;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage; // For file handling

class PolygonsController extends Controller
{
    protected $polygons;

    public function __construct()
    {
        $this->polygons = new PolygonsModel(); // Ensure model name matches
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate request
        $request->validate(
            [
                'name' => 'required|unique:polygons,name',
                'description' => 'required',
                'geom_polygon' => 'required',
                'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'name.required' => 'Name is required',
                'name.unique' => 'Name already exists',
                'description.required' => 'Description is required',
                'geom_polygon.required' => 'Geometry polygon is required',
            ]
        );

        // Create 'images' directory if it doesn't exist
        if (!is_dir(public_path('storage/images'))) {
            mkdir(public_path('storage/images'), 0777, true); // Ensure 'storage/images' exists
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name_image = time() . "_polygon." . strtolower($image->getClientOriginalExtension());

            // Store image using Storage facade
            $image->storeAs('images', $name_image, 'public');
        } else {
            $name_image = null;
        }

        // Prepare data for insertion
        $data = [
            'geom' => $request->geom_polygon,
            'name' => $request->name,
            'description' => $request->description,
            'image' => $name_image,
        ];

        // Create data in the database
        try {
            $this->polygon->create($data);
            return redirect()->route('map')->with('success', 'Polygon has been added');
        } catch (\Exception $e) {
            return redirect()->route('map')->with('error', 'Polygon failed to add');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Implement this if needed
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [
            'title' => 'Edit Polygon',
            'id' => $id,
        ];
        return view('edit-polygon', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Implement this if needed
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $imagefile = $this->polygons->find($id)->image;

        if (!$this->polygons->destroy($id)) {
            return redirect()->route('map')->with('error', 'Polygon failed to delete');
        }

        // Delete image file
        if($imagefile != null){
            if (File::exists('./storage/images/' . $imagefile)) {
                unlink('./storage/images/' . $imagefile);
            }
        }
        return redirect()->route('map')->with('success', 'Polygon has been deleted');
    }
}
