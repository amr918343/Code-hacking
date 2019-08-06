@extends('layouts.admin')
@section('content')
    <h1>Create Post</h1>




    @include('includes.errors')




    {!! Form::open(['method' => 'post', 'action' => 'AdminPostsController@store','files' => true] ) !!}


    <div class="row">

        <div class='form-group col-xs-5'>

            {!! Form::label('category_id', 'Category') !!}

            {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Type Category']) !!}

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

            {!! Form::label('title', 'Title') !!}

            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Type Post Title']) !!}

        </div>

    </div>

    <div class="row">

        <div class='form-group col-xs-5'>

            {!! Form::label('body', 'Description') !!}

            {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Description...', 'rows' => 5]) !!}

        </div>

    </div>


    <div class='form-group'>
        {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@stop