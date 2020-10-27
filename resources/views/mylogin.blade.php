@extends('layout.Master')
@section('content')
<div>
    @if(Session::get('errstatus'))

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong> {{Session::get('errstatus')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @endif
    <form action="mlogin" method="post">
        @csrf
       
        <div class="form-group">
            <label for="txtproduct">User Name</label>
            <input type="text" class="form-control" id="txtusername" name="email" placeholder="User Name">

        </div>
       
        <div class="form-group">
            <label for="txtprice">Password</label>
            <input type="password" class="form-control" name="password" id="txtpassword" placeholder="Enter Password">
        </div>

        <button type="submit" class="btn btn-warning">Login</button>
    </form>
</div>
@endsection