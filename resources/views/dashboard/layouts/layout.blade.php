<!DOCTYPE html>
<head>
    
    <style>
        /* The alert message box */
        .alert {
          padding: 20px;
          background-color: #f44336; /* Red */
          color: white;
          margin-bottom: 15px;
        }
        
        /* The close button */
        .closebtn {
          margin-left: 15px;
          color: white;
          font-weight: bold;
          float: right;
          font-size: 22px;
          line-height: 20px;
          cursor: pointer;
          transition: 0.3s;
        }
        
        /* When moving the mouse over the close button */
        .closebtn:hover {
          color: black;
        }
        </style>
</head>

<body>
    <form action="{{route('logout')}}" method="POST">
      @csrf
    <button type="submit">Logout</button>  
    </form>
	<a href="{{route('tracks.create')}}">Add Track</a>
    @yield('content')
</body>

</html>
