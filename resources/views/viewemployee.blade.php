<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    @extends('layouts.app')

@section('content')

@include('inc.message')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All Employee Records') }}</div>

                <div class="card-body">
                   

                @if(count($employees) > 0)
  <div class="card">
           <ul class="list-group list-group-flush">
      @foreach($employees as $employee)

        <div class="row">
                
               
                 <div class="col-md-8">                         
                    <h3><a href="show/{{$employee->id}}">{{$employee->email}}</a></h3>
                    <h1>{{$employee->firstname}}</h1>
                    <small>Added on {{$employee->created_at}}</small>
                 
                 </div>

                 <a href={{"delete/". $employee['id']}} >Delete</a>
        </div>
      
           
     @endforeach
     </ul>

         </div>
  @else
           No employee record available
  @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection


    </body>
</html>
