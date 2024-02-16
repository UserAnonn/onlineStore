@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
@forelse ($viewData["orders"] as $order)
<div class="card mb-4">
<div class="card-header">
Orden #{{ $order->getId() }}
</div>
<div class="card-body">
<b>Fecha:</b> {{ $order->getCreatedAt() }}<br />
<b>Total:</b> ${{ $order->getTotal() }}<br />
<table class="table table-bordered table-striped text-center mt-3">
<thead>
<tr>
<th scope="col">ID del artículo</th>
<th scope="col">Nombre del Producto</th>
<th scope="col">Precio</th>
<th scope="col">Cantidad</th>
</tr>
</thead>
<tbody>
@foreach ($order->getItems() as $item)
<tr>
<td>{{ $item->getProduct()->getId() }}</td>
<td>
<a class="link-success" href="{{ route('product.show', ['id'=> $item->getProduct()->getId()]) }}">
{{ $item->getProduct()->getName() }}
</a>
</td>
<td>${{ $item->getPrice() }}</td>
<td>{{ $item->getQuantity() }}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
@empty
<div class="alert alert-danger" role="alert">
Parece que no ha comprado nada aún =(.
</div>
@endforelse
@endsection