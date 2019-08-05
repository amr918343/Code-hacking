@extends('layouts.admin')
@section('content')
    <h1>Create Users</h1>


    @include('includes.errors')


    {!! Form::open(['method' => 'post', 'action' => 'AdminUsersController@store','files' => true] ) !!}

    <div class="row">

        <div class='form-group col-xs-5'>

            {!! Form::label('name', 'User name') !!}

            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Type User name']) !!}

        </div>

    </div>


    <div class="row">

        <div class='form-group col-xs-5'>

            {!! Form::label('photo_id', 'Choose Image') !!}

            {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}

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
        {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@stop