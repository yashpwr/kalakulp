<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\slider;

class IndexController extends Controller
{
    public function index(Request $request) {

        $objSlider = new slider();
        $data['sliders'] = $objSlider->getSlider($request);

        $data['title'] = "kalakulp | Index";
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();

        return view('frontend.pages.index',$data);
    }
}