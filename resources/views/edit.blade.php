@extends('layout.Master')
@section('content')
<div>
    @if(Session::get('status'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> {{Session::get('status')}}</strong> Updated Successfully
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @endif
    <form action="editprod" method="post">
        @csrf
        <input type="hidden" class="form-control" name="txthid" value="{{$data->id}}">
        <div class="form-group">
            <label for="txtproduct">Product Name</label>
            <input type="text" class="form-control" id="txtproduct" name="txtproduct" value="{{$data->pname}}">

        </div>
        <div class="form-group">
            <label for="txtprice">Price</label>
            <input type="number" class="form-control" name="txtprice" id="txtprice" value="{{$data->price}}">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection