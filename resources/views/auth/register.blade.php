@extends('layouts.app')

@section('content')
@if(count($errors)>0)
        @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endforeach
    @endif
<div class="container">
    <div class="row"  style="margin-top:10%">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}"  enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Complete Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name-agency" class="col-md-4 control-label">Agency Name</label>

                            <div class="col-md-6">
                                <input id="name-agency" type="text" class="form-control" name="name-agency" value="{{ old('name') }}" required autofocus>

                                
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="adress" class="col-md-4 control-label">Adress</label>

                            <div class="col-md-6">
                                <input id="adress" type="text" class="form-control" name="adress" value="{{ old('name') }}" required autofocus>

                                
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="Phone-number-1" class="col-md-4 control-label">Phone Number 1</label>

                            <div class="col-md-6">
                                <input id="Phone-number-1" type="number" class="form-control" name="Phone-number-1" value="{{ old('name') }}" required autofocus>

                                
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="Phone-number-2" class="col-md-4 control-label">Phone Number 2 <span style="color:silver">(facultatif)</span></label>

                            <div class="col-md-6">
                                <input id="Phone-number-2" type="number" class="form-control" name="Phone-number-2" value="{{ old('name') }}"  autofocus>

                                
                            </div>

                        </div>
                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="fb" class="col-md-4 control-label">Facebook Page <span style="color:silver">(facultatif)</label>

                            <div class="col-md-6">
                                <input id="fb" type="text" class="form-control" name="fb" value="{{ old('name') }}"  autofocus>

                                
                            </div>

                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="local-picture" class="col-md-4 control-label">Local picture</label>

                            <div class="col-md-6">
                                <input id="local-picture" type="file" class="form-control" name="local-picture" value="{{ old('name') }}" required autofocus>

                                
                            </div>

                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="register_picture" class="col-md-4 control-label">Register picture</label>

                            <div class="col-md-6">
                                <input id="register_picture" type="file" class="form-control" name="register_picture" value="{{ old('name') }}" required autofocus>

                                
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="terms" > I accept all the <a href="" style="color:blue">terms</a>, <a href="" style="color:blue">conditions and politics</a> of site
                                    </label>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
