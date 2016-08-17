@extends('layouts.admin')
@section('content')

    <h1>Users</h1>


    <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Photo</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created at</th>
            <th>Updated at</th>
          </tr>
        </thead>
        <tbody>

        @if($users)

            @foreach($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td><a href="{{route('admin.users.edit' , $user->id)}}">{{$user->name}}</a></td>
            <td><img src="{{URL::asset($user->photo ? $user->photo->file : 'http://placehold.it/150x150')}}" alt=""></td>
            <td>{{$user->email}}</td>
            <td>{{$user->role->name}}</td>
            <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
          </tr>
          @endforeach
          @endif
        </tbody>
     </table>

@stop