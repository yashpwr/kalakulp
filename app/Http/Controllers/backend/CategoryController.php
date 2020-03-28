<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\category;

class CategoryController extends Controller
{
    public function categorylist(Request $request) {

        $objCategory = new category();
        $data['categories'] = $objCategory->getCategory($request);
        
        $data['title'] = "CrudAjax || Category-List";
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
        $data['js'] = array("category.js");
        $data['funinit'] = array('Category.init();');

        return view('backend.pages.category.categorylist', $data);
    }

    public function addcategory(Request $request) {

        if ($request->isMethod('post')) {
            $objCategory = new category();
            $result = $objCategory->addCategory($request);
            if ($result) {
                $return['status'] = 'success';
                $return['message'] = 'Category Added successfully.';
                $return['redirect'] = route('categorylist');
            } else {
                $return['status'] = 'error';
                $return['message'] = 'Category Not Added.';
            }
            echo json_encode($return);
            exit;
        }

        $data['title'] = "Kalakulp | Add Category";
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array("category.js");
        $data['funinit'] = array("Category.addcategoryy();");

        return view('backend.pages.category.addcategory', $data);
    }

    public function updatecategory(Request $request, $id) {

        $objCategory = new category();
        $data['categories'] = $objCategory->getCategory($request, $id);

        if ($request->isMethod('post')) {
            $objCategory = new category();
            $result = $objCategory->updateCategory($request, $id);
            if ($result) {
                $return['status'] = 'success';
                $return['message'] = 'Category Updated.';
                $return['redirect'] = route('categorylist');
            } else {
                $return['status'] = 'error';
                $return['message'] = 'Category Not updated.';
            }
            echo json_encode($return);
            exit;
        }

        $data['title'] = "Kalakulp | Update Category";
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array("category.js");
        $data['funinit'] = array("Category.addcategoryy();");

        return view('backend.pages.category.updatecategory', $data);
    }

    public function datatableajaxAction(Request $request) {
        $action = $request->input('action');
        switch ($action) {
            case 'deleteCategory':
                $data = $request->input('data');
                $objCategory = new category();
                $res = $objCategory->deleteCategory($data);
                if ($res) {
                    $return['status'] = 'success';
                    $return['message'] = 'Category Deleted successfully.';
                    $return['redirect'] = route('categorylist');
                } else {
                    $return['status'] = 'error';
                    $return['message'] = 'Category Not Deleted.';
                }
                echo json_encode($return);
                break;
        }
    }
}
