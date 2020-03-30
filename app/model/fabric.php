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
            return $result;
        }

        public function getFabric($request) {
            $result = DB::table("fabric")
                    ->get();
            return $result;
        }
        
    }
