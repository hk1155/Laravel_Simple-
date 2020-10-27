@extends('layout.Master')

@section('content')
<br>
@if(Session::get('status'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong> {{Session::get('status')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

@endif
<h5>List of Products</h5>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->pname}}</td>
            <td>{{$item->price}}</td>
            <td><a href="deleteprod/{{$item->id}}"><i class="fa fa-trash" style="color: red;"></i></a>&nbsp;&nbsp;
                <a href="editprod/{{$item->id}}"><i class="fa fa-edit" style="color: blue;"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection