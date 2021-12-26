@extends('dashboard.layouts.layout')
@section('content')



    
<div class="alert">
    <a href="{{route('courses.create')}}" class="closebtn">
       Create Coures
    </a>
    {{$track->name}}
  </div>
<hr>
<h2>Courses</h2>
<hr>

<div class="container">
    <form action="{{route('courses.store')}}" method="POST">
        @csrf
        <input type="hidden" name="track_id" value="{{$track->id}}">
      <div class="row">
        <div class="col-25">
          <label for="courseName">Course Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="courseName" name="name" placeholder="Add Course Name">
        </div>
      </div>

      <div class="row">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>

  @foreach ($track->courses as $course)

  <div class="alert" style="margin-left:100px">
   
   <a href="{{route('courses.show',$course->id)}}"> {{$course->name}}</a>
  </div>
  @endforeach
@endsection

