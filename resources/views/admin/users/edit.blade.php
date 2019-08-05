@extends('layouts.admin')
@section('content')
    <h1 class="text-center">Edit Users</h1>

    <div class="container">
        <div class="col-xs-2">
            <img class="person-img img-responsive fa-border img-rounded " height="600px" src="{{$user->photo ? $user->photo->path : 'http://placehold.it/400x400'}}" alt="user image">
        </div>

        <div class="col-xs-10">
            @include('includes.errors')
            {!! Form::model($user,['method' => 'patch', 'action' => ['AdminUsersController@update', $user->id],'files' => true]) !!}
            <div class="row">
                {{form::token()}}
                <div class='form-group col-xs-5'>

                    {!! Form::label('name', 'User name') !!}

                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Type User name']) !!}

                </div>
            </div>


            <div class="row">

                <div class='form-group col-xs-5'>

                    {!! Form::label('photo_id', 'Choose Image') !!}

                    {!! Form::file('photo_id', ['class' => 'form-control person-file']) !!}

                </div>

            </div>

            <div class="row">

                <div class='form-group col-xs-5'>

                    {!! Form::label('email', 'Email') !!}

                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Type Email']) !!}

                </div>

            </div>

            <div class="row">

                <div class='form-group col-xs-5'>

                    {!! Form::label('is_active', 'Status') !!}

                    {!! Form::select('is_active', [0 => 'Idle', 1 => 'Active'], null, ['class' => 'form-control', 'placeholder' => 'Type Status']) !!}

                </div>

            </div>

            <div class="row">

                <div class='form-group col-xs-5'>

                    {!! Form::label('role_id', 'Role') !!}

                    {!! Form::select('role_id', $roles, null, ['class' => 'form-control', 'placeholder' => 'Type Role']) !!}

                </div>

            </div>


            <div class="row">

                <div class='form-group col-xs-5'>


                    {!! Form::label('password', 'password'); !!}
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Type Password']) !!}

                </div>

            </div>



            <div class='form-group'>
                {!! Form::submit('Edit Post', ['class' => 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
    {!! Form::open(['method' => 'delete', 'action' => ['AdminUsersController@destroy', $user->id]]) !!}
        <div class='form-group'>
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        </div>
    {!! Form::close() !!}
@stop