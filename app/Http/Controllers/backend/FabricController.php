<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\model\fabric;
use Illuminate\Http\Request;

class FabricController extends Controller
{
    public function FabricList(Request $request) {

         $objFabric = new fabric();
         $data['fabrics'] = $objFabric->getFabric($request);
        
        $data['title'] = "Kalakulp | Fabric-List";
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
        $data['js'] = array("fabric.js");
        $data['funinit'] = array('Fabric.init();');

        return view('backend.pages.fabric.fabriclist', $data);
    }

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
