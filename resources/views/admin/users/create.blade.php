@extends('layouts.admin')
@section('content')
    <h1>Create Users</h1>
    {!! Form::open(['method' => 'post', 'action' => 'AdminUsersController@store','files' => true] ) !!}

    <div class="row">

        <div class='form-group col-xs-5'>

            {!! Form::label('username', 'User name') !!}

            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Type User name']) !!}

        </div>

    </div>


    <div class="row">

        <div class='form-group col-xs-5'>

            {!! Form::label('photo_id', 'Choose Image') !!}

            {!! Form::file('photo_id', ['class' => 'form-control']) !!}

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

            {!! Form::label('status', 'Status') !!}

            {!! Form::select('is_active', [0 => 'Idle', 1 => 'Active'], null, ['class' => 'form-control', 'placeholder' => 'Type Status']) !!}

        </div>

    </div>

    <div class="row">

        <div class='form-group col-xs-5'>

            {!! Form::label('role', 'Role') !!}

            {!! Form::select('role_id', $roles, null, ['class' => 'form-control', 'placeholder' => 'Type Role']) !!}

        </div>

    </div>


    <div class="row">

        <div class='form-group col-xs-5'>


            {!! Form::label('Password', 'password'); !!}
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Type Password']) !!}

        </div>

    </div>



    <div class='form-group'>
        {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    @if(count($errors) > 0)
        <ul>
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
        </ul>
    @endif



@stop