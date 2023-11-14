@extends('layouts.main')

@section('content')
<style>
    .flex {
        margin: 100px;
    }
</style>
<div class="flex">
    <a href="../../cclass/all">Go Back</a>
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
            <label for="">Level</label>
            <input type="text" class="form-control" name="level" id="level" value="{{$car->level}}" disabled>
        </div>
        <h4>Stats</h4>
        <div class="form-group">
            <label for="">Top Speed</label>
            <input type="text" class="form-control" name="topspeed" id="topspeed" value="{{$car->topspeed}}" disabled>
        </div>
        <div class="form-group">
            <label for="">Acceleration</label>
            <input type="text" class="form-control" name="acceleration" id="acceleration" value="{{$car->acceleration}}" disabled>
        </div>
        <div class="form-group">
            <label for="">Handling</label>
            <input type="text" class="form-control" name="handling" id="handling" value="{{$car->handling}}" disabled>
        </div>
        <div class="form-group">
            <label for="">Nitrous</label>
            <input type="text" class="form-control" name="nitrous" id="nitrous" value="{{$car->nitrous}}" disabled>
        </div>
    </div>
</div>
@endsection