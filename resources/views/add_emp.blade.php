@extends('layout.Master')
@section('content')
<div>
    @if(Session::get('status'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> {{Session::get('status')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @endif
    <form action="submitemp" method="post">
        @csrf
        <div class="form-group">
            <label for="txtproduct">Name</label>
            <input type="text" class="form-control" id="txtname" name="txtname" placeholder="Enter Employee Name">

        </div>
        <div class="form-group">
            <label for="txtproduct">User Name</label>
            <input type="text" class="form-control" id="txtusername" name="txtusername" placeholder="User Name">

        </div>
        <div class="form-group">
            <label for="txtproduct">contact</label>
            <input type="number" class="form-control" id="txtcontact" name="txtcontact" placeholder="Enter Contact Number">

        </div>
        <div class="form-group">
            <label for="txtprice">Password</label>
            <input type="password" class="form-control" name="txtpassword" id="txtpassword" placeholder="Enter Password">
        </div>

        <button type="submit" class="btn btn-primary">Add Employee</button>
    </form>
</div>
@endsection