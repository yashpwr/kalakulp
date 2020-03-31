<?php

namespace App\model;
use Illuminate\Support\Facades\DB;  

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $table = 'image';

    public function deleteImage($data) {
        $result = DB::table("image")
                ->where('id', $data['id'])
                ->delete();
        return $result;
    }

    public function getImage($request) {
        $result = DB::table("image")
                //->limit(8)
                ->get();
        return $result;
    }
}
