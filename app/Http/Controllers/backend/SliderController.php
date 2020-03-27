<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function sliderlist(Request $request) {

        $data['title'] = "Kulpkala | Slider List";
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();

        return view('backend.pages.slider.sliderlist', $data);
    }

    public function addslider(Request $request) {

        $data['title'] = "Kulpkala | Add Sldier";
        $data['css'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();

        return view('backend.pages.slider.addslider', $data);
    }
}
