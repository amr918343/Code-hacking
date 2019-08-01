
@extends('layouts.admin')
@section('content')
    <h1>Users</h1>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Active</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)

                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    @if($user->role->name == 'Administrator')
                        <td style="color:red">{{$user->role->name}}</td>
                    @endif
                @if($user->role->name == 'Author')
                        <td style="color:orange">{{$user->role->name}}</td>
                    @endif
                @if($user->role->name == 'Subscriber')
                        <td style="color:greenyellow">{{$user->role->name}}</td>
                    @endif

                    @if($user->is_active == 1 )
                        <td style="background: #257647"></td>
                    @else
                        <td style="background: #ff4053"></td>
                    @endif
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>


@stop