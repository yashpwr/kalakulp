<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\model\fabric;
use App\model\image;
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
            if ($result) {
                $return['status'] = 'success';
                $return['message'] = 'Fabric Added successfully.';
                $return['redirect'] = route('FabricList');
            } else {
                $return['status'] = 'error';
                $return['message'] = 'Fabric Not Added.';
            }
            echo json_encode($return);
            exit;
        }
        $data['title'] = "Kulpkala | Add Fabric";
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array("jquery.repeater/jquery.repeater.min.js");
        $data['js'] = array("pages/form-repeater.int.js", "fabric.js");
        $data['funinit'] = array('Fabric.addFab();');

        return view('backend.pages.fabric.addfabric', $data);
    }

    public function updateFabric(Request $request, $id) {

        $objFabric = new fabric();
        $data['fabrics'] = $objFabric->getFab($request, $id);

        $objImage = new fabric();
        $data['images'] = $objImage->getImage($request, $id);

        if ($request->isMethod('post')) {
            $objFabric = new fabric();
            $result = $objFabric->updateFabric($request, $id);
            if ($result) {
                $return['status'] = 'success';
                $return['message'] = 'Fabric Updated.';
                $return['redirect'] = route('FabricList');
            } else {
                $return['status'] = 'error';
                $return['message'] = 'Fabric Not updated.';
            }
            echo json_encode($return);
            exit;
        }

        $data['title'] = "Kalakulp | Update Fabric";
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array("jquery.repeater/jquery.repeater.min.js");
        $data['js'] = array("pages/form-repeater.int.js", "fabric.js");
        $data['funinit'] = array('Fabric.addFab();', 'Fabric.singleDelete();');

        return view('backend.pages.fabric.updatefabric', $data);
    }

    public function datatableajaxAction(Request $request) {
        $action = $request->input('action');
        switch ($action) {
            case 'deleteFabric':
                $data = $request->input('data');
                $objFabric = new fabric();
                $res = $objFabric->deleteFabric($data);
                if ($res) {
                    $return['status'] = 'success';
                    $return['message'] = 'Fabric Deleted successfully.';
                    $return['redirect'] = route('FabricList');
                } else {
                    $return['status'] = 'error';
                    $return['message'] = 'Fabric Not Deleted.';
                }
                echo json_encode($return);
                break;

                case 'SingleFabDelete':
                    $data = $request->input('data');
                    $objImage = new image();
                    $res = $objImage->deleteImage($data);
                    if ($res) {
                        $return['status'] = 'success';
                        $return['message'] = 'Image Deleted successfully.';
                        //$return['redirect'] = route('FabricList');
                    } else {
                        $return['status'] = 'error';
                        $return['message'] = 'Image Not Deleted.';
                    }
                    echo json_encode($return);
                    break;
        }
    }
}
