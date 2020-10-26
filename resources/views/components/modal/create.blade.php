<!DOCTYPE html>
<html lang="en">
<head>
  <title>SPWM Calendar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/yourcode.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
        <form class="text-center border border-light p-5" action="{{route('schedules.store')}}" method="POST" id="schedule-form">
          @csrf
          <input type="text" name="title" class="form-control mb-4" id="title" placeholder="Add a meeting title here"><br>
        
          <div id="date-picker" class="md-form md-outline input-with-post-icon datepicker" inline="true">
            <input placeholder="Select date" name="date" type="text" id="datepicker" class="form-control">
            <i class="fas fa-calendar input-prefix"></i>
          </div>
          <br>

          <div id="start-time" class="md-form md-outline input-with-post-icon" inline="true">
          <input value="{{date("h:i:sa")}}" name="startime" type="text" id="startime" class="form-control">
            <i class="fas fa-calendar input-prefix"></i>
          </div>
          <br>

          <div id="end-time" class="md-form md-outline input-with-post-icon" inline="true">
            <input value="{{date("h:i:sa", strtotime('+1 hour'))}}" name="endtime" type="text" id="endtime" class="form-control">
            <i class="fas fa-calendar input-prefix"></i>
          </div>
          <br>

          <input type="text" class="form-control mb-4" id="add-guest" placeholder="Add guest">
          <input type="text" hidden name="user_id" id="user_id">
          <div class="guest-list">
          </div>
          <br>

          
          <div id="meeting-url" class="md-form md-outline input-with-post-icon" inline="true">
            <input placeholder="Add Meeting URL" type="text" name="meet_url" id="url" class="form-control">
            <i class="fas fa-calendar input-prefix"></i>
          </div><br>

          <select name="location" class="form-control" id="location">
              <option value="" disabled selected hidden>Add rooms or location</option>
              <option value="opt1">Meeting Room</option>
              <option value="opt2">Kitchen</option>
          </select><br>

          
          <textarea name="desc" id="desc" class="form-control" style="min-width: 100%" placeholder="Add description or attachments"></textarea>
          <br>

          <div>
            {{Auth::user()->name}}
          </div>
        
        </form>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default h4 mb-4" id="options" data-dismiss="modal">More Options</button>
          <button form="schedule-form" class="btn btn-default h4 mb-4">Save</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
<script type="text/javascript">
  $(function () {
      $('#datepicker').datepicker();
  });

  $("#options").click(function(){
    let title = $("#title").val();
    let date = $("#date").val();
    let startime = $("#startime").val();
    let endtime = $("#endtime").val();
    let guest = $("#add-guest").val();
    let meet_url = $("#url").val();
    let location = $("#location").val();
    let desc = $("#desc").val();
    let data = `title=${title}&date=${date}&startime=${startime}&endtime=${endtime}&guest=${guest}&meet_url=${meet_url}&location=${location}&desc=${desc}`;
    let url = "{!! route('schedule.more.create', ':data'); !!}";
    url = url.replace(':data',data);
    window.location = url;
  });

  $( document ).ready(function() {
    $( "#add-guest" ).focus(function() {
      $( ".guest-list" ).css( "display", "block" );
        $.ajax({
          type:'GET',
          url:'/eventedit/get-all-user',
          success:function(data) {
            $('.guest-list').empty();
            $.each(data, function( index, value ) {
              $( ".guest-list" ).append(`<span class='guest-users' data-id="${value.id}">${value.name}</span>`);
            });
          }
        });
    });

    // $( "#add-guest" ).blur(function() {
    //   $( ".guest-list" ).css( "display", "none" );
    // });

    $(document).on('click', '.guest-users', function(){ 
      $('#add-guest').val($(this).text());

      $('#user_id').val($(this).attr('data-id'));
    }); 
  });


</script>
</html>