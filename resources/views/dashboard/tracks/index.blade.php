@extends('dashboard.layouts.layout')
@section('content')


@foreach ($tracks as $track)
    
<div class="alert">
  
    <a href="{{route('tracks.edit',$track->id)}}" class="closebtn">
      edit track
    </a>
    <form action="{{route('tracks.destroy',$track->id)}}" method="post" class="closebtn">
      @csrf
      @method('DELETE')
      <button type="submit">Delete Track</button>
    </form>
    <div>
      <a href="{{route('tracks.show',$track->id)}}">{{$track->name}}</a>
    </div>
    
  </div>
@endforeach
@endsection




