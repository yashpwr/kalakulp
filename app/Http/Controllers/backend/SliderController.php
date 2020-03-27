<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\slider;

class SliderController extends Controller
{
    public function sliderlist(Request $request) {

        $data['title'] = "Kulpkala | Slider List";
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();

        return view('backend.pages.slider.sliderlist', $data);
    }

    public function addslider(Request $request) {
        if ($request->isMethod('post')) {
            $objSlider = new slider();
            $result = $objSlider->addslider($request);
        }

        $data['title'] = "Kulpkala | Add Sldier";
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array("parsleyjs/parsley.min.js");
        $data['js'] = array("pages/form-validation.init.js");
        $data['funinit'] = array();

        return view('backend.pages.slider.addslider', $data);
    }
}
