@extends('layouts.app')

@section('content')
<a href="/bric/public/viewemployee" class="btn btn-default">Go Back</a>
  <h1>{{$employees->firstname}}</h1>
  <h1>{{$employees->lastname}}</h1>
  <h1>{{$employees->email}}</h1>
  <h1>{{$employees->department}}</h1>

  <hr>
   <small>Added on {{$employees->created_at}}</small> 
   <hr>

   <a href="/bric/public/employees/{{$employees->id}}/edit" class="btn btn-default">EDIT</a>





@endsection