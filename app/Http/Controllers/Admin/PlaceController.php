<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PlaceController extends Controller
{
    protected $path = "uploads/place/";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = DB::table('places')
                    ->join('images', 'images.place_id', '=', 'places.id')
                    ->select('places.*', 'images.image')
                    ->where('images.flag', '=', 1)
                    ->get();
        return view('admin.tour.tours', compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tour.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = Validator::make($request->all(), [
            // 'images' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' =>  'required|string',
            'description' => 'required|string',
            'duration' => 'required|string',
            'price' => 'required|numeric',
            'run' => 'required|string',
            'type' => 'required|string',
            'included' => 'required|string',
            'excluded' => 'required|string',
        ]);
        if($valid->fails())
        {
            return back()->withInput()->withErrors($valid);
        }else{
            $slug = Str::slug($request->name);
            $id = DB::table('places')->insertGetId([
                'name' => $request->name,
                'description' => $request->description,
                'duration' => $request->duration,
                'price' => $request->price,
                'run' => $request->run,
                'country' => $request->country,
                'type' => $request->type,
                'included' => $request->included,
                'excluded' => $request->excluded,
                'slug' => $slug,
            ]);
            $images = $this->uploadMultiImages($request->file('images'));
            $this->insertImages($images, $id);
        }
        return back()->with('status', 'Tour inserted successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Model  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        return view('admin.tour.view', compact('place'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Model  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        return view('admin.tour.edit', compact('place'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  model  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  model  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        //
    }

    /**
     * Active the specified resource in storage.
     *
     * @param  model  $place
     * @return \Illuminate\Http\Response
     */
    public function active(Place $place)
    {
        $place->status = 1;
        $place->update();
        return back()->with('status', 'Tour is Activated.');
    }

    /**
     * Unactive the specified resource in storage.
     *
     * @param  model  $place
     * @return \Illuminate\Http\Response
     */
    public function unactive(Place $place)
    {
        $place->status = 0;
        $place->update();
        return back()->with('status', 'Tour is Unactivated.');
    }

    /**
     * Upload images.
     *
     * @param  array  $files
     * @return array $images_name
     */
    public function uploadMultiImages(array $files)
    {
        $images_name = [];
        foreach($files as $file)
        {
            $name = Str::random(12) . '.';
            $ext = $file->extension();
            $name = $name . $ext;
            $images_name[] = $name;
            $file->move($this->path, $name);
        }
        return $images_name;
    }

    /**
     * Insert images to DB.
     *
     * @param  array  $names
     * @param  int  $place
     */
    public function insertImages(array $names, int $place)
    {
        $num = 1;
        foreach($names as $name)
        {
            if($num == 1)
            {
                Image::insert([
                    'place_id' => $place,
                    'image'   => $name,
                    'flag'  => 1
                ]);
            }else{
                Image::insert([
                    'place_id' => $place,
                    'image'   => $name,
                ]);
            }
            $num++;
        }
    }
}
