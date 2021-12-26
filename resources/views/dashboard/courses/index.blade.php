@extends('dashboard.layouts.layout')
@section('content')


@foreach ($courses as $course)
    
<div class="alert">
<span class="closebtn">
    (Track){{$course->track->name}}
    </span>   
    <a href="{{route('courses.show',$course->id)}}">{{$course->name}}</a>
  </div>
@endforeach
@endsection



