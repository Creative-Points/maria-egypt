<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Itinerary;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
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
        if ($valid->fails()) {
            return back()->withInput()->withErrors($valid);
        } else {
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
        $images = DB::table('images')->where('place_id', '=', $place->id)->get();
        $itins = DB::table('itinerary')->where('place_id', '=', $place->id)->get();
        return view('admin.tour.view', compact('place', 'images', 'itins'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Model  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        $images = DB::table('images')->where('place_id', '=', $place->id)->get();
        return view('admin.tour.edit', compact('place', 'images'));
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
        if ($valid->fails()) {
            return back()->withInput()->withErrors($valid);
        } else {
            $slug = Str::slug($request->name);
            $name = $place->name;
            $place->name = $request->name;
            $place->description = $request->description;
            $place->duration = $request->duration;
            $place->price = $request->price;
            $place->run = $request->run;
            $place->country = $request->country;
            $place->type = $request->type;
            $place->included = $request->included;
            $place->excluded = $request->excluded;
            $place->slug = $slug;
            if (isset($request->images) && !empty($request->images)) {
                $this->updateImages($request->file('images'), $place->id);
            }
            $place->update();
        }
        return back()->with('status', $name . '. updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  model  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        $tour = $place->name;
        $images = DB::table('images')->where('place_id', '=', $place->id)->get();
        if (count($images) > 0) {
            foreach ($images as $img) {
                File::delete($this->path . $img->image);
            }
        }
        $place->delete();
        return back()->with('status', $tour . '. Deleted Successfuly.');
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
        return back()->with('status', $place->name . '. is Activated.');
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
        return back()->with('status', $place->name . '. is Unactivated.');
    }

    /**
     * Upload images to server.
     *
     * @param  array  $files
     * @return array $images_name
     */
    public function uploadMultiImages(array $files)
    {
        $images_name = [];
        foreach ($files as $file) {
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
        foreach ($names as $name) {
            if ($num == 1) {
                Image::insert([
                    'place_id' => $place,
                    'image'   => $name,
                    'flag'  => 1
                ]);
            } else {
                Image::insert([
                    'place_id' => $place,
                    'image'   => $name,
                ]);
            }
            $num++;
        }
    }

    /**
     *  Update images in DB.
     *
     * @param  array  $files
     * @param  int  $place
     */
    public function updateImages(array $files, int $place)
    {
        $images = DB::table('images')->where('place_id', '=', $place)->get();
        foreach ($images as $img) {
            $file = $img->image;
            if (File::exists($this->path . $file)) {
                File::delete($this->path . $file);
            }
            DB::table('images')->where('place_id', '=', $place)->delete();
        }
        $images = $this->uploadMultiImages($files);
        $this->insertImages($images, $place);
    }

    /**
     * Add itinerary to tour
     * @param model $place
     */
    public function addItin(Place $place)
    {
        $itins = DB::table('itinerary')->where('place_id', '=', $place->id)->get();
        return view('admin.tour.itinerary', compact('itins', 'place'));
    }

    /**
     * Add itinerary to tour
     * @param \Illuminate\Http\Request  $request
     * @param model $place
     */
    public function storeItin(Request $request, Place $place)
    {
        $valid = Validator::make($request->all(), [
            'day'   => 'required|numeric',
            'title' => 'required|string',
            'description' => 'required|string',
            'lat' => 'required|string',
            'lng' => 'required|string',
        ]);
        if($valid->fails())
        {
            return back()->withInput()->withErrors($valid);
        }else{
            DB::table('itinerary')->insert([
                'day' => $request->day,
                'title' => $request->title,
                'description' => $request->description,
                'lat' => $request->lat,
                'lng' => $request->lng,
                'place_id' => $place->id,
            ]);
        }
        return back()->with('status', 'Day ' . $request->day . ' Added');
    }

    /**
     * Add itinerary to tour
     * @param model $place
     * @param int $itinerary
     */
    public function editItin(Place $place,$itinerar)
    {
        $itins = DB::table('itinerary')->where('place_id', '=', $place->id)->get();
        $itinerar = Itinerary::find($itinerar);
        return view('admin.tour.itinerary', compact('itins', 'place', 'itinerar'));
    }

    /**
     * Add itinerary to tour
     * @param \Illuminate\Http\Request  $request
     * @param model $place
     * @param model $itin
     */
    public function updateItin(Request $request, Place $place, $itin)
    {
        $itin = Itinerary::find($itin);
        $valid = Validator::make($request->all(), [
            'day'   => 'required|numeric',
            'title' => 'required|string',
            'description' => 'required|string',
            'lat' => 'required|string',
            'lng' => 'required|string',
        ]);
        if($valid->fails())
        {
            return back()->withInput()->withErrors($valid);
        }else{
            $itin->day = $request->day;
            $itin->title = $request->title;
            $itin->description = $request->description;
            $itin->lat = $request->lat;
            $itin->lng = $request->lng;
            $itin->update();
        }
        return back()->with('status', 'Day ' . $request->day . ' Added');
    }

    /**
     * Delete Itinerary
     * @param  int  $itin
     * @return \Illuminate\Http\Response
     */

    public function deleteItin($itin)
    {
        $itin = Itinerary::find($itin);
        $day = $itin->day;
        $itin->delete();
        return back()->with('status', 'Day '. $day . ' Deleted.');
    }
}
