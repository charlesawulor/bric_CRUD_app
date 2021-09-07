@extends('layouts.app')

@section('content')

  <h1>Edit Employee Record</h1>
  <form method="POST" action="/bric/public/edit">
                      @csrf
                      
                        <div class="form-group row">


                        <input id="" type="hidden" class="form-control @error('name') is-invalid @enderror" name="id" value="{{$employees['id']}}" required  autofocus>

                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            
                            <div class="col-md-6">
                                <input id="" type="text" class="form-control @error('name') is-invalid @enderror" name="firstname" value="{{$employees['firstname']}}" required  autofocus>

                         
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="" type="text" class="form-control @error('name') is-invalid @enderror" name="lastname" value="{{$employees['lastname']}} " required  autofocus>

                         
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$employees['email']}}"  >

                          
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>

                            <div class="col-md-6">
                                <input id="" type="text" class="form-control @error('name') is-invalid @enderror" name="department" value="{{$employees['department']}}" required autofocus>

                         
                            </div>
                        </div>
                
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>

@endsection