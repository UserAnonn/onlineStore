@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card">
<div class="card-header">
Compra Realizada
</div>
<div class="card-body">
<div class="alert alert-success" role="alert">
Felicitaciones, se realizó la compra. El número de la orden es <b>#{{ $viewData["order"]->getId() }}</b>
</div>
</div>
</div>
@endsection