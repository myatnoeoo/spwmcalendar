<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src="https://kit.fontawesome.com/613129cfe8.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body> 
    <div class="container-fluid calendar-container">
      <div class="row">
        <div class="col sidebar">
            <div class="nav">
              <img class="profile" src="https://via.placeholder.com/150" alt="">
              <span>Aung Thiha</span>
              <span><a href="#">Logout</a></span>
            </div>
            <div class="calendar"></div>
            <div class="search">
              <i class="fa fa-search"></i>
              <input type="text" placeholder="Search...">
            </div>
            <div class="view-user">
              <div class="header">
                <p>My Calendar</p>
              </div>
              <div class="list">
                <div class="list-item">
                  <input type="checkbox">
                  <label>Aung Thiha</label>
                </div>
                <div class="list-item">
                  <input type="checkbox">
                  <label>Aung Thiha</label>
                </div>
                <div class="list-item">
                  <input type="checkbox">
                  <label>Aung Thiha</label>
                </div>
                <div class="list-item">
                  <input type="checkbox">
                  <label>Aung Thiha</label>
                </div>
              </div>
            </div>
        </div>
        <div class="col">
          <div class="content">
            <div class="header">
              <div class="swith-week">
                <span class="title">July 2020</span>
                <span class="swith-btn"> < </span>
                <span class="swith-btn"> > </span>
              </div>
              <div class="today-btn">
                <button>Today</button>
              </div>
            </div>
            <div class="schdule-list">
              <div class="col"></div>
              <div class="col">Sunday</div>
              <div class="col">Monday</div>
              <div class="col">Tuesday</div>
              <div class="col">Wednesday</div>
              <div class="col">Thursday</div>
              <div class="col">Friday</div>
              <div class="col">Saturday</div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>