@extends('layouts.main')

@section('content')
<style>
    .flex {
        margin: 100px;
    }
</style>
<div class="flex">
    <a href="../../legendstore/all">Go Back</a>
    <h2>Car Detail</h2>
    <div class="form">
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" class="form-control" name="id" id="id" value="{{$car->id}}" disabled>
        </div>
        <div class="form-group">
            <label for="">Class</label>
            <input type="text" class="form-control" name="class" id="class" value="{{$car->class}}" disabled>
        </div>
        <div class="form-group">
            <label for="">Brand</label>
            <input type="text" class="form-control" name="brand" id="brand" value="{{$car->brand}}" disabled>
        </div>
        <div class="form-group">
            <label for="">Model</label>
            <input type="text" class="form-control" name="model" id="model" value="{{$car->model}}" disabled>
        </div>
        <div class="form-group">
            <label for="">price</label>
            <input type="text" class="form-control" name="price" id="price" value="{{$car->price}}" disabled>
        </div>
        <h4>Stock:</h4>
        <div class="form-group">
            <label for="">Stock</label>
            <input type="text" class="form-control" name="stock" id="stock" value="{{$car->stock}}" disabled>
        </div>
    </div>
</div>
@endsection