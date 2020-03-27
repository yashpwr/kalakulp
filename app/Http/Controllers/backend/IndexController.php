<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request) {
        $data['title'] = "Kulpkala | Admin Index";
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array("apexcharts/apexcharts.min.js");
        $data['js'] = array("pages/dashboard.init.js");
        $data['funinit'] = array();

        return view('backend.pages.index', $data);
    }
}
