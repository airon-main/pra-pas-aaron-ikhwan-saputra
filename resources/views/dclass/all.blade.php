@extends('layouts.main')

@section('content')
<style>
    .flex {
        margin: 100px;
        border: 1px solid #c6c7c8;
    }
</style>
<div class="flex">
    <table class="table table-light">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Class</th>
                <th scope="col">Brand</th>
                <th scope="col">Model</th>
                <th scope="col">Level</th>
                <!-- <th scope="col">Top Speed</th> -->
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $key=>$car)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{$car['class']}}</td>
                <td>{{$car['brand']}}</td>
                <td>{{$car['model']}}</td>
                <td>{{$car['level']}}</td>
                <!-- <td>{{$car['topspeed']}}</td> -->
                <td>
                    <a type="button" class="btn btn-primary" href="../dclass/detail/{{$car['id']}}">Detail</a>
                    <a type="button" class="btn btn-secondary">Edit</a>
                    <a type="button" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection