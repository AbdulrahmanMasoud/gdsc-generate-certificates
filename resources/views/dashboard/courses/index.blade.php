@extends('dashboard.layouts.layout')
@section('content')

<a href="{{route('tracks.index')}}">Go To Tracks</a>
@foreach ($courses as $course)
    
<div class="alert">
<span class="closebtn">
    (Track){{$course->track->name}}
    </span>   
    <a href="{{route('courses.show',$course->id)}}">{{$course->name}}</a>
  </div>
@endforeach
@endsection



