<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\model\fabric;
use Illuminate\Http\Request;

class FabricController extends Controller
{
    public function addfabric(Request $request) {

        if ($request->isMethod('post')) {
            $objFabric = new fabric();
            $result = $objFabric->addFabric($request);
        }
        $data['title'] = "Kulpkala | Add Fabric";
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array("jquery.repeater/jquery.repeater.min.js");
        $data['js'] = array("pages/form-repeater.int.js");
        $data['funinit'] = array();

        return view('backend.pages.fabric.addfabric', $data);
    }
}
