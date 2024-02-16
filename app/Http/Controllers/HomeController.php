<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
public function index()
{
$viewData = [];
$viewData["title"] = "Inicio - Tienda Online";
return view('home.index')->with("viewData", $viewData);
}
public function about()
{
    $viewData = [];
    $viewData["title"] = "Nosotros - Tienda Online";
    $viewData["subtitle"] = "Nosotros";
    $viewData["description"] = "Esta es una página ...";
    $viewData["author"] = "Desarrollado por: Teresita";
    return view('home.about')->with("viewData", $viewData);
}
}