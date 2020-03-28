<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class slider extends Model
{
    protected $table = 'slider';

    public function addSlider($request) {
        
        if ($request->file()) {
            $image = $request->file('img');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('Uploads/Slider/');
            $image->move($destinationPath, $name);
            $objSlider = new slider();
            $objSlider->img = $name;
            $objSlider->title = $request->input('title');
            $objSlider->description = $request->input('description');
            $objSlider->created_at = date("Y-m-d h:i:s");
            $objSlider->updated_at = date("Y-m-d h:i:s");
            return $objSlider->save();
        } else {
            return false;
        }
    }

    public function getSlider($request) {
        $result = DB::table("slider")
                ->get();
        return $result;
    }

    public function get($request, $id) {
        $result = DB::table("slider")
                ->where('id', $id)
                ->get();
        return $result;
    }
    public function deleteSlider($data) {
        $result = DB::table("slider")
                ->where('id', $data['id'])
                ->delete();
        return $result;
    }

    public function editSlider($request, $id) {

        $objSlider = new slider();
        $objSlider = slider::find($id);
        if ($request->file()) {
            $image = $request->file('img');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('Uploads/Slider/');
            $image->move($destinationPath, $name);
            $objSlider->img = $name;
        }
        $objSlider->title = $request->input('title');
        $objSlider->description = $request->input('description');
        $objSlider->updated_at = date("Y-m-d h:i:s");
        return $objSlider->save();
    }

    
}
