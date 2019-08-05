@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                    @if(Auth::check())
                        @if(isset(Auth::user()->role_id))
                            @if(Auth::user()->isAdmin())
                                <a href="{{route('admin.users.index')}}">Admin</a>
                            @endif
                        @endif
                    @endif



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
