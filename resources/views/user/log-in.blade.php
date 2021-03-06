@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Log in</h2>
                    </div>
                    <div class="panel-body">
                        {{ Form::open(['action' => 'AuthController@postLogin']) }}
                        <div class="form-group">
                            {{ Form::label('email', 'Email', ['class' => 'sr-only']) }}
                            {{ Form::text('email', null, ['autofocus' => 'autofocus', 'class' => 'form-control', 'placeholder' => 'Email address']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('password', 'Password', ['class' => 'sr-only']) }}
                            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
                        </div>

                        {{ Form::submit('Sign in', ['class' => 'button button--primary']) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
