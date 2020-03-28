<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\slider;

class SliderController extends Controller
{
    public function sliderlist(Request $request) {

        $objSlider = new slider();
        $data['sliders'] = $objSlider->getSlider($request);

        $data['title'] = "Kulpkala | Slider List";
        $data['css'] = array();
        $data['plugincss'] = array("datatables.net-bs4/css/dataTables.bootstrap4.min.css",
                                "datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css",
                                "datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css");
        $data['pluginjs'] = array("datatables.net/js/jquery.dataTables.min.js",
                                    "datatables.net-bs4/js/dataTables.bootstrap4.min.js",
                                "datatables.net-buttons/js/dataTables.buttons.min.js",
                            "datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js",
                        "datatables.net-responsive/js/dataTables.responsive.min.js",
                        "datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js");
        $data['js'] = array("slider.js");
        $data['funinit'] = array("Slider.init()");

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

    public function updateslider(Request $request, $id) {

        if ($request->isMethod('post')) {

            $objSlider = new slider();
            $result = $objSlider->editSlider($request, $id);
        }

        $objSlider = new slider();
        $data['sliders'] = $objSlider->get($request, $id);

        $data['title'] = "Kulpkala | Add-Slider";
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array("parsleyjs/parsley.min.js");
        $data['js'] = array("pages/form-validation.init.js");
        $data['funinit'] = array();

        return view('backend.pages.slider.upateslider', $data);
    }

    public function datatableajaxAction(Request $request) {
        $action = $request->input('action');
        switch ($action) {

            case 'deleteSlider':
                $data = $request->input('data');

                $objSlider = new slider();
                $res = $objSlider->deleteSlider($data);
                if ($res) {
                    $return['status'] = 'success';
                    $return['message'] = 'Record Deleted successfully.';
                    $return['redirect'] = route('sliderlist');
                } else {
                    $return['status'] = 'error';
                    $return['message'] = 'Record Not Deleted.';
                }
                echo json_encode($return);
                break;
        }
    }
}
