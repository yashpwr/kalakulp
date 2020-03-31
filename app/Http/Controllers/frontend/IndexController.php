<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\model\fabric;
use Illuminate\Http\Request;
use App\model\slider;
use App\model\image;

class IndexController extends Controller
{
    public function index(Request $request) {

        $objSlider = new slider();
        $data['sliders'] = $objSlider->getSlider($request);

        $objFabric = new fabric();
        $data['fabrics'] = $objFabric->getFabric($request);

        $objImage = new image();
        $data['images'] = $objImage->getImage($request);

        $data['title'] = "kalakulp | Index";
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();

        return view('frontend.pages.index',$data);
    }
}