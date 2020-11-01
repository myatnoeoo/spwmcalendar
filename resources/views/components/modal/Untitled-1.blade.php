
        <form class="text-center border border-light" action="{{route('schedules.store')}}" method="POST" id="schedule-form">
            @csrf
            <input type="text" name="title" class="form-control" id="title" placeholder="Add a meeting title here">
          
            <div id="date-picker" class="md-form md-outline input-with-post-icon datepicker" inline="true">
              <input placeholder="Select date" name="date" type="text" id="datepicker" class="form-control">
              <i class="fas fa-calendar input-prefix"></i>
            </div>
  
            <div id="start-time" class="md-form md-outline input-with-post-icon" inline="true">
            <input value="{{date("h:i:sa")}}" name="from_time" type="text" id="startime" class="form-control">
              <i class="fas fa-calendar input-prefix"></i>
            </div>
  
            <div id="end-time" class="md-form md-outline input-with-post-icon" inline="true">
              <input value="{{date("h:i:sa", strtotime('+1 hour'))}}" name="to_time" type="text" id="endtime" class="form-control">
              <i class="fas fa-calendar input-prefix"></i>
            </div>
  
            <input type="text" class="form-control" id="add-guest" placeholder="Add guest">
            <input type="text" hidden name="user_id" id="user_id">
            <div class="guest-list">
            </div>
            
            <div id="meeting-url" class="md-form md-outline input-with-post-icon" inline="true">
              <input placeholder="Add Meeting URL" type="text" name="meet_url" id="url" class="form-control">
              <i class="fas fa-calendar input-prefix"></i>
            </div>
  
            <select name="location" class="form-control" id="location">
                <option value="no-value" disabled selected hidden>Add rooms or location</option>
                <option value="Meeting Room">Meeting Room</option>
                <option value="Kitchen">Kitchen</option>
            </select>
  
            
            <textarea name="description" id="desc" class="form-control" style="min-width: 100%" placeholder="Add description or attachments"></textarea>
            
  
            <div>
              {{Auth::user()->name}}
            </div>
          
          </form>  