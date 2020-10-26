@extends('layout.Master')
@section('content')
<div>
    @if(Session::get('status'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> {{Session::get('status')}}</strong> Added Successfully
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @endif
    <form action="addproduct" method="post">
        @csrf
        <div class="form-group">
            <label for="txtproduct">Product Name</label>
            <input type="text" class="form-control" id="txtproduct" name="txtproduct" placeholder="Enter Product Name">

        </div>
        <div class="form-group">
            <label for="txtprice">Price</label>
            <input type="number" class="form-control" name="txtprice" id="txtprice" placeholder="Enter Product Price">
        </div>

        <button type="submit" class="btn btn-success">Add</button>
    </form>
</div>
@endsection