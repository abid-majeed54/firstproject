@extends('layouts.admin')
@section('content')

    <h1>Edit Users</h1>

    @if(count($errors)> 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
    <div class="col-md-3">

        <img src="{{URL::asset($user->photo ? $user->photo->file : 'http://placehold.it/250x250')}}" alt="">
        
    </div>

    <div class="col-md-9">
    {!! Form::model($user , ['method'=> 'PATCH', 'action'  => ['AdminUsersController@update', $user->id], 'files'=>true])  !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' =>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class' =>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password',  ['class' =>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('role_id', 'Role:') !!}
        {!! Form::select('role_id', $roles , null, ['class' =>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('is_active', 'Status:') !!}
        {!! Form::select('is_active', array(1=>'Active', 0 =>'Not Active'), null, ['class' =>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('photo_id', 'Upload:') !!}
        {!! Form::file('photo_id', ['class' =>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update Post', ['class' =>'btn btn-primary']) !!}
    </div>
    {!! Form::close()  !!}
    </div>
    </div>

@endsection