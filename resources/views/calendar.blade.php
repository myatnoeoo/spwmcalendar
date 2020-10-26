@extends('layouts.calendar')
@section('content')
@php
  $days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
  $times = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24];
  $minutes = [15, 15, 15, 15];
@endphp
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
        <div class="schdule-list-container">
          <div class="row schdule-list label-list">
            <div class="col"></div>
            @foreach ($days as $day)
              <div class="col">{{ $day }}<br /><span class="day-number">12</span></div>
            @endforeach
          </div>
          <div class="row schdule-list">
            <div class="col time-lists">
              @foreach ($times as $time)
                <p class="time-list">{{ $time }}{{ ($time > 12) ? 'PM' : 'AM' }}</p>
              @endforeach
            </div>
            @foreach ($days as $day)
            <div class="col time-slip">
              @foreach ($times as $time)
                <div>
                  @foreach ($minutes as $minute)
                  <div class="schdule-item"><span>Schdule Name {{ $minute }}</span></div>
                  @endforeach
                </div>
              @endforeach
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection