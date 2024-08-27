<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use Illuminate\Support\Facades\Storage;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Biodata::all();

        return view('biodata/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biodata/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Biodata();
        $data->full_name = $request->full;
        $data->nik = $request->nik;
        $data->umur = $request->age;
        $data->alamat = $request->address;

        $image = $request->file('file');

        if($image) {
            $imagePath = $image->store('images', 'public');
            if($imagePath) {
                $imageUrl = Storage::disk('public')->url($imagePath);
                $data->file = $imagePath;
                $data->save();
            } else {
                return redirect()->back()->with('error','Failed to upload image');
            }
        }

        return redirect('biodata');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Biodata::find($id);

        return view('biodata/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Biodata::find($id);
        $data->full_name = $request->full;
        $data->nik = $request->nik;
        $data->umur = $request->age;
        $data->alamat = $request->address;
        $data->save();

        return redirect('biodata');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Biodata::find($id)->delete();

        return redirect('biodata');
    }
}
