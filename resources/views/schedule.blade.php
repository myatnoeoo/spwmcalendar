<!DOCTYPE html>
<html lang="en">
<head>
  <title>SPWM Calendar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/yourcode.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
        <form class="text-center border border-light p-5" action="{{route('schedules.store')}}" method="POST" id="schedule-form">
          @csrf
        <input type="text" name="title" class="form-control mb-4" id="title" value="Add a meeting title here" value="{{$request->title}}"><br>
      
          <div id="date-picker" class="md-form md-outline input-with-post-icon datepicker" inline="true">
            <input value="{{$request->date}}" type="text" id="date" class="form-control">
            <i class="fas fa-calendar input-prefix"></i>
          </div>
          <br>

          <input type="text" class="form-control mb-4" id="add-guest" value="{{$request->guest}}">
          <input type="text" hidden name="user_id" id="user_id">
          <div class="guest-list">
          </div>
          <br>

          <div id="meeting-url" class="md-form md-outline input-with-post-icon" inline="true">
            <input value="{{$request->meet_url}}" type="text" id="url" class="form-control">
            <i class="fas fa-calendar input-prefix"></i>
          </div>
          <br>

          <select name="location" class="form-control" id="location">
              <option value="" disabled selected hidden>{{$request->location}}</option>
              <option value="opt1">Meeting Room</option>
              <option value="opt2">Kitchen</option>
          </select><br>

          
          <textarea name="desc" id="desc" class="form-control" style="min-width: 100%" value="{{$request->desc}}" placeholder="Add Description here"></textarea>
          <br>
          
          <div>
            Myat Noe Oo
          </div>

        </form>  
        </div>
        <div class="modal-footer">
            <button form="schedule-form" class="btn btn-default h4 mb-4">Save</button>
        </div>
      </div>
      
</body>
</html>