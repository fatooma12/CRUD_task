@extends('trainners.layout')
@section('content')
<div class="container">
<div class="row">
<div class="col-12">
<div class="card"style="margin;20px">
<div class="card-header">
<h2>Laravel with CRUD</h2>
</div>
<div class="card-body">
<a href="{{url('/trainner/create')}}" class="btn btn-success btn-sm" title="Add New Trainner">Add New</a><br>
<div class="table-responsive">
<table class="table">
<thead></thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Adress</th>
        <th>Phone</th>
    </tr>
</thead>
<tbody>
@foreach($trainners as $item)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->phone}}</td>
        <td>
        <a href="{{url('/trainner/'.$item->id)}}" class="btn btn-info" title="view info">View</a> 
        <a href="{{url('/trainner/'.$item->id.'/edit')}}" class="btn btn-primary" title="Edit info">Edit</a>
        <form action="{{url('/trainner'.'/'.$item->id)}}" method="POST">
        {{@method_field('DELETE')}}
        {{@csrf_field()}}
        <button type="submit" style="display:inline;" class="btn btn-danger" onclick="return confirm('Confirm Deleted')">Delete</button>
        </form>
        </td>

    </tr>
    @endforeach
    
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection