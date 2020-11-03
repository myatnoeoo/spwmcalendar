
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

