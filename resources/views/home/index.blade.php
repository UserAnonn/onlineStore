@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="row">
<div class="d-flex justify-content-center">
<img src="{{ asset('/img/productos.jpg') }}" class="img-fluid rounded">
</div>
</div>
@endsection