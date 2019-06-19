@extends('layouts.app')

@section('content')

  <h3>{{$photo->title}}</h3>
  <p>{{$photo->description}}</p>

  <a href="/albums/{{$photo->album_id}}">Back To Album</a>
  <hr />
  <img width="500" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}" />
  <br /><br />
  {!! Form::open(array('action' => ['PhotosController@destroy', $photo->id], 'method' => 'POST' )) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete', ['class'=>'button alert']) }}
  {!! Form::close() !!}
  <hr />
  <small><strong>Size:</strong> {{$photo->size}}</small>
@endsection
