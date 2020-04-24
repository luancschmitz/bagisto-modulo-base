<?php
namespace VendorName\PackageName\Http\Controllers\Shop;

use App\Http\Controllers\Controller;

class HelloWorldController extends Controller
{
    public function index()
    {
        $myFirstField  = core()->getConfigData('vendorname_menu.settings.general_config.myFirstField');
        return view('helloworld::shop.helloworld', compact('myFirstField'));
    }
}