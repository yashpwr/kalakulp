<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\image;
use Illuminate\Support\Facades\DB;

class fabric extends Model
{
    protected $table = 'fabric';

    public function addFabric($request) {
       
            $objFabric = new fabric();
            $objFabric->name = $request->input('fab_name');
            $objFabric->style_no = $request->input('style_no');
            $objFabric->material = $request->input('material');
            $objFabric->width = $request->input('width');
            $objFabric->weight = $request->input('weight');
            $objFabric->feel = $request->input('feel');
            $objFabric->price = $request->input('price');
            $objFabric->quantity = $request->input('quantity');
            $objFabric->stock = 'in_stock';

            $objFabric->created_at = date("Y-m-d h:i:s");
            $objFabric->updated_at = date("Y-m-d h:i:s");

            $result = $objFabric->save();
            $id = $objFabric->id;

            if ($result) {
                $d = $request->file('img');
                if(is_array($d)){
                for ($i = 0; $i < count($d); $i++) 
                {
                    $objImage = new image();
                    $da = substr(str_shuffle('1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'), 0, 6);
                    $name = time() . $da . '.' . $d[$i]->getClientOriginalExtension();
                    $destinationPath = public_path('Uploads/Fabric/');
                    $d[$i]->move($destinationPath, $name);
                    $objImage->img_name = $name;
                    $objImage->post_id = $id;
                    $objImage->img_type = 'fabric';
                    $result = $objImage->save();
                }
            }
            }
            return $result;
        }

        public function updateFabric($request, $id) {

            $objFabric = new fabric();
            $objFabric = fabric::find($id);
            $objFabric->name = $request->input('fab_name');
            $objFabric->style_no = $request->input('style_no');
            $objFabric->material = $request->input('material');
            $objFabric->width = $request->input('width');
            $objFabric->weight = $request->input('weight');
            $objFabric->feel = $request->input('feel');
            $objFabric->price = $request->input('price');
            $objFabric->quantity = $request->input('quantity');
            $objFabric->stock = $request->input('stock');
            $objFabric->updated_at = date("Y-m-d h:i:s");
            $result = $objFabric->save();
            if ($result) {
                $d = $request->file('img');
                if(is_array($d)){
                for ($i = 0; $i < count($d); $i++) 
                {
                    $objImage = new image();
                    $da = substr(str_shuffle('1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'), 0, 6);
                    $name = time() . $da . '.' . $d[$i]->getClientOriginalExtension();
                    $destinationPath = public_path('Uploads/Fabric/');
                    $d[$i]->move($destinationPath, $name);
                    $objImage->img_name = $name;
                    $objImage->post_id = $id;
                    $objImage->img_type = 'fabric';
                    $result = $objImage->save();
                }
            }
        }
            return $result;
        }

        public function getFab($request, $id) {
            $result = DB::table("fabric")
                    ->where('id', $id)
                    ->get();
            return $result;
        }

        public function getImage($request, $id) {
            $result = fabric::select('image.id','image.img_name','image.post_id','image.img_type')
                        ->leftjoin("image", "image.post_id", "=", "fabric.id")
                        ->where('image.post_id', $id)
                    ->get();
            return $result;
        }

        public function getFabric($request) {
            $result = DB::table("fabric")
                    ->get();
            return $result;
        }

        public function deleteFabric($data) {
            $result = DB::table("fabric")
                    ->where('id', $data['id'])
                    ->delete();
            return $result;
        }

    }
