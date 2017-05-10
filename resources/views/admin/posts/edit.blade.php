@extends('layouts.admin')


@section('content')

    <div class="container">

    <h1>Edit Posts</h1>

    <div class="row">
        @include('includes.form_error')
    </div>

        <div class="col-md-3">
            <img src="{{URL::asset($post->photo ? $post->photo->file : 'no photo')}}" alt="">
        </div>

       <div class="col-md-9 ">
            {!! Form::model($post, ['method'=> 'PATCH', 'action'  => ['AdminPostsController@update', $post->id], 'files'=>true])  !!}
            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class' =>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', ['class' =>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category_id', 'Category:') !!}
                {!! Form::select('category_id' , $categories , null ,['class' =>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('body', 'Description:') !!}
                {!! Form::textarea('body', null, ['class' =>'form-control', 'row'=>10]) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update Post', ['class' =>'btn btn-primary']) !!}
            </div>
            {!! Form::close()  !!}

           {!! Form::model($post , ['method'=> 'DELETE', 'action'  => ['AdminPostsController@destroy', $post->id]])  !!}

           <div class="form-group">
               {!! Form::submit('Delete User', ['class' =>'btn btn-danger']) !!}
           </div>
           {!! Form::close()  !!}

       </div>




    </div>
@endsection