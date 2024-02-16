<?php
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
class ProductController extends Controller
{

public function index()
{
$viewData = [];
$viewData["title"] = "Productos - Tienda Online";
$viewData["subtitle"] = "Lista de productos";
$viewData["products"] = Product::all(); //trae todos los productos con Eloquent
return view('product.index')->with("viewData", $viewData);
}
public function show($id)
{
$viewData = [];
$product = Product::findOrFail($id);//Eloquent
$viewData["title"] = $product->getName()." - Tienda Online";
$viewData["subtitle"] = $product->getName()." - Información de los productos";
$viewData["product"] = $product;
return view('product.show')->with("viewData", $viewData);
}
}