<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class AdminHomeController extends Controller
{
public function index()
{
$viewData = [];
$viewData["title"] = "Página de Admin - Admin - Tienda Online";
return view('admin.home.index')->with("viewData", $viewData);
}
}