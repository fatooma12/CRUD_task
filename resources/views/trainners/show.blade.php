@extends('trainners.layout')
@section('content')
<div class="card" style="margin:20px">
<div class="card-header">
Trainner Info
</div>
<div class="card-body">
<h5 class="card-title">{{$trainners->name}}</h5>
<p class="card-text">{{$trainners->address}}</p>
<p class="card-text">{{$trainners->phone}}</p>
</div>
</div>
@endsection