

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SPWM Calendar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script src="https://kit.fontawesome.com/613129cfe8.js" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

<div class="container">
  <!-- Trigger the modal with a button -->
  {{-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> --}}

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Event</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">

          <form action="{{route('schedules.store')}}" method="POST" id="schedule-form">
              @csrf
            <input type="text" name="title" placeholder="Enter Title" id="">

            <input type="date" name="date" placeholder="Choose Date" id="">

            <div class="select-time-div">
              <div class="select-time">
                <span>From Time :</span>
                <select name="from_time" id="">
                  <option value="no-value">Select</option>
                  <option value="01:00">01:00</option>
                  <option value="02:00">02:00</option>
                  <option value="03:00">03:00</option>
                  <option value="04:00">04:00</option>
                  <option value="05:00">05:00</option>
                </select>
              </div>
              <div class="select-time">
                <span>To Time :</span>
                <select name="to_time" id="">
                  <option value="no-value">Select</option>
                  <option value="01:00">01:00</option>
                  <option value="02:00">02:00</option>
                  <option value="03:00">03:00</option>
                  <option value="04:00">04:00</option>
                  <option value="05:00">05:00</option>
                </select>
              </div>
            </div>

            <input type="text" placeholder="Choose Guest" id="add-guest" class="add-guest-input">
            <div class="guest-user-list">
              <ul class="guest-user-list-items"></ul>
            </div>

            <div class="added-guest-list">
            </div>

            <div class="select-meet-place">
              <span>Location :</span>
              <select name="location" id="">
                <option value="no-value" disabled selected hidden>Add rooms or location</option>
                <option value="Meeting Room">Meeting Room</option>
                <option value="Kitchen">Kitchen</option>
              </select>
            </div>

            <div class="meeting-url">
              <input type="text" name="meet_url" placeholder="Enter Meet Url">
            </div>

            <textarea name="description" placeholder="Enter Description"></textarea>

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

<script type="text/javascript">
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
      $( ".guest-user-list" ).show();
        $.ajax({
          type:'GET',
          url:'/eventedit/get-all-user',
          success:function(data) {
            $('.guest-user-list-items').empty();
            $.each(data, function( index, value ) {
              $( ".guest-user-list-items" ).append(`<li class="guest-user-list-item" data-id="${value.id}" data-name="${value.name}">${value.name}</li>`);
            });
          }
        });
    });

    $(document).on('click', '.guest-user-list-item', function(){ 
      let name = $(this).attr('data-name');
      let id = $(this).attr('data-id');
      $('.added-guest-list').append(`<span>${name}
        <i class="fa fa-times remove-guest"></i>
        <input type="text" hidden name="guest_user[]" value="${id}"/>
        </span>`)
      $( ".guest-user-list" ).hide();
    });

    $(document).on('click', '.remove-guest', function(){ 
      $(this).parent().remove();
    })

    $(document).click(function(event) {
      let targetClass = $(event.target).attr('class');
      console.log(targetClass)
      if(targetClass != "guest-user-list-item" && targetClass != "add-guest-input"){
      $( ".guest-user-list" ).hide();
      }
    });

  });


</script>