@extends('dashboard.layouts.layout')
@section('content')
<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  }
  
  label {
    padding: 12px 12px 12px 0;
    display: inline-block;
  }
  
  input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }
</style>  

<div class="container">
    <form action="{{route('tracks.update',$track->id)}}" method="POST">
        @csrf
        @method('PUT')
              <div class="row">
        <div class="col-25">
          <label for="trackName">Track Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="trackName" name="name" placeholder="Add Track Name" value="{{$track->name}}">
        </div>
      </div>

      <div class="row">
        <input type="submit" value="update">
      </div>
    </form>
  </div>


@endsection