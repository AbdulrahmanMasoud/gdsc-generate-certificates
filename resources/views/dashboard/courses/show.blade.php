@extends('dashboard.layouts.layout')
@section('content')


{{-- {{dd($course)}} --}}

<div class="alert">
    <div class="closebtn">
      <form action="{{route('students.import',$course->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="row">
          <div class="col-25">
            <label for="courseName">Course CSV</label>
          </div>
          <div class="col-75">
            <input type="file" id="courseCsv" name="students_file">
          </div>
        </div>
  
        <div class="row">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
    {{$course->name}}
  </div>

  <form action="{{route('courses.destroy',$course->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Delete Course</button>
  </form>
<hr>
<h2>Students</h2>
<hr>



  @foreach ($course->students as $student)

  <div class="alert" style="margin-left:100px">
   
   <a href="{{route('courses.show',$student->id)}}"> {{$student->name}}</a>

   <form action="{{route('students.destroy',$student->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Delete Student</button>
  </form>
  </div>
  @endforeach
@endsection

