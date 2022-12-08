<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $path = 'uploads/city/';
    public function index()
    {
        $cities = City::all();
        return view('admin.city.cities', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.city.add');
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' =>  'required|string|unique:cities,name',
        ]);

        if($valid->fails())
        {
            return back()->withInput()->withErrors($valid);
        }else{
            if($request->hasFile('image'))
            {
                $file = $request->file('image');
                $name = $request->name . '.';
                $ext = $file->extension();
                $name = $name . $ext;
                $file->move($this->path, $name);
                $request->image = $name;
            }
            DB::table('cities')->insert([
                'name'  => $request->name,
                'image' => $request->image
            ]);
            return redirect()->back()->with('status', 'City Has Been Added Successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  Model  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        return view('admin.city.view', compact('city'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Model  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        return view('admin.city.edit', compact('city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Model  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $valid = Validator::make($request->all(), [
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' =>  'required|string|unique:cities,name,'.$city->id,
        ]);

        if($valid->fails())
        {
            return back()->withInput()->withErrors($valid);
        }else{
            $city->name = $request->name;
            if(isset($request->image) && !empty($request->image))
            {
                $city->image = $request->image;
            }
            $city->update();
            return back()->with('status', 'City Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Model  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $img = $city->image;
        if(File::exists($this->path . $img))
        {
            File::delete($this->path . $img);
        }
        $city->delete();
        return back()->with('status', 'City has been Deleted is Successfully.');
    }

    public function active(City $city)
    {
        $city->status = 1;
        $city->update();
        return back()->with('status', 'City Activated.');
    }

    public function unactive(City $city)
    {
        $city->status = 0;
        $city->update();
        return back()->with('status', 'City Unactivated.');
    }
}
