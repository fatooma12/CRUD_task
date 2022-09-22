@extends('trainners.layout')
@section('content')
<div class="card" style="margin:20px;">
<div class="card-header">
Create New Trainner
</div>
<div class="card-body">
<form action="{{url('trainner/'.$trainners->id)}}" method="post">
{!!@csrf_field()!!}
@method("PATCH")
<input type="hidden" name="id" value="{{$trainners->id}}">
<label >Name</label><br>
<input type="text" name="name" id="name" class="form-control" value="{{$trainners->name}}"><br>
<label >Name</label><br>
<input type="text" name="address" id="address" class="form-control" value="{{$trainners->address}}"><br>
<label >Name</label><br>
<input type="text" name="phone" id="phone" class="form-control" value="{{$trainners->phone}}"><br>
<input type="submit" value="Update" class="btn btn-success"><br>
</form>
</div>
</div>
@stop