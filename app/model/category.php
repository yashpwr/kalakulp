<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class category extends Model
{
    protected $table = 'category';

    public function addCategory($request) {

        $objCategory = new category();
        $objCategory->category_name = $request->input('category_name');
        $objCategory->created_at = date("Y-m-d h:i:s");
        $objCategory->updated_at = date("Y-m-d h:i:s");
        return $objCategory->save();
    }
    
    public function getCategory($request) {
        $result = DB::table("category")
                ->get();
        return $result;
    }

    public function updateCategory($request, $id) {

        $objCategory = new category();
        $objCategory = category::find($id);
        $objCategory->category_name = $request->input('category_name');
        $objCategory->updated_at = date("Y-m-d h:i:s");
        return $objCategory->save();
    }

    public function deleteCategory($data) {
        $result = DB::table("category")
                ->where('id', $data['id'])
                ->delete();
        return $result;
    }
}
