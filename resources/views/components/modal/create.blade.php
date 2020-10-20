<!DOCTYPE html>
<html lang="en">
<head>
  <title>SPWM Calendar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/yourcode.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
        <form class="text-center border border-light p-5" action="">
          <input type="text" name="title" class="form-control mb-4" id="" placeholder="Add a meeting title here"><br>
        
          <div id="date-picker" class="md-form md-outline input-with-post-icon datepicker" inline="true">
            <input placeholder="Select date" type="text" id="example" class="form-control">
            <i class="fas fa-calendar input-prefix"></i>
          </div>

          <input type="text" name="guest" class="form-control mb-4" id="" placeholder="Add guest"><br>

          <select name="location" class="form-control" id="">
              <option value="" disabled selected hidden>Add rooms or location</option>
              <option value="opt1">Meeting Room</option>
              <option value="opt2">Kitchen</option>
          </select><br>

          
          <textarea name="desc" id="" class="form-control" style="min-width: 100%" placeholder="Add description or attachments"></textarea>
        
        </form>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default h4 mb-4" id="options" data-dismiss="modal">More Options</button>
          <button type="button" class="btn btn-default h4 mb-4" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
<script type="text/javascript">
  $(function () {
             $('#datepicker').datetimepicker();
         });
</script>
</html>