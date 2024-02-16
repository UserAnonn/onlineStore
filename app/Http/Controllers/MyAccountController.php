<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
class MyAccountController extends Controller
{
public function orders()
{
$viewData = [];
$viewData["title"] = "Mis órdenes - Tienda Online";
$viewData["subtitle"] = "Mis órdenes";
$viewData["orders"] = Order::where('user_id', Auth::user()->id)->get();
return view('myaccount.orders')->with("viewData", $viewData);
}
}