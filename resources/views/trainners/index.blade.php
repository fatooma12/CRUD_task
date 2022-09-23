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
        <div style="display:flex;gap:10px;">
        <a href="{{url('/trainner/'.$item->id)}}" class="btn btn-info" title="view info"><i class="bi bi-eye"></i>View</a> 
        <a href="{{url('/trainner/'.$item->id.'/edit')}}" class="btn btn-primary" title="Edit info"><i class="bi bi-pencil"></i>Edit</a>
        <form action="{{url('/trainner'.'/'.$item->id)}}" method="POST">
        {{@method_field('DELETE')}}
        {{@csrf_field()}}
        <button type="submit" class="btn btn-danger" onclick="return confirm('Confirm Deleted')"><i class="bi bi-dash-circle-fill"></i>Delete</button>
        </form>
        </td>
        </div>

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