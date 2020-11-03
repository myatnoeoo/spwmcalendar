@extends('layouts.calendar')
@section('content')
@php
  $days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
  $times = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24];
  $minutes = [15, 15, 15, 15];
@endphp
<x-modal.create />
<div class="container-fluid calendar-container" data-toggle="modal" data-target="#myModal">
  <div class="row">
    <div class="col sidebar">
        <div class="nav">
          <img class="profile" src="/storage/user/mn_profile.jpg" alt="">
          <span>Myat Noe</span>
          <span><a href="#">Logout</a></span>
        </div>
        <div class="container-new">

          <div class="calendar-new">
      
            <header>				
      
              <h2>September</h2>
      
              <a class="btn-prev fontawesome-angle-left" href="#"></a>
              <a class="btn-next fontawesome-angle-right" href="#"></a>
      
            </header>
            
            <table>
            
              <thead>
                
                <tr>
                  
                  <td>Mo</td>
                  <td>Tu</td>
                  <td>We</td>
                  <td>Th</td>
                  <td>Fr</td>
                  <td>Sa</td>
                  <td>Su</td>
      
                </tr>
      
              </thead>
      
              <tbody>
                
                <tr>
                  <td class="prev-month">26</td>
                  <td class="prev-month">27</td>
                  <td class="prev-month">28</td>
                  <td class="prev-month">29</td>
                  <td class="prev-month">30</td>
                  <td class="prev-month">31</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                  <td>6</td>
                  <td>7</td>
                  <td>8</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td class="event">10</td>
                  <td>11</td>
                  <td>12</td>
                  <td>13</td>
                  <td>14</td>
                  <td>15</td>
                </tr>
                <tr>
                  <td>16</td>
                  <td>17</td>
                  <td>18</td>
                  <td>19</td>
                  <td>20</td>
                  <td class="event">21</td>
                  <td>22</td>
                </tr>
      
                <tr>
                  <td class="current-day event">23</td>
                  <td>24</td>
                  <td>25</td>
                  <td>26</td>
                  <td>27</td>
                  <td>28</td>
                  <td>29</td>
                </tr>
                <tr>
                  <td>30</td>
                  <td class="next-month">1</td>
                  <td class="next-month">2</td>
                  <td class="next-month">3</td>
                  <td class="next-month">4</td>
                  <td class="next-month">5</td>
                  <td class="next-month">6</td>
                </tr>
      
              </tbody>
      
            </table>
      
          </div> <!-- end calendar -->
      
        </div> <!-- end container -->
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
              <label>Myat Min Swe</label>
            </div>
            <div class="list-item">
              <input type="checkbox">
              <label>Htay Min Khaung</label>
            </div>
            <div class="list-item">
              <input type="checkbox">
              <label>Ei Phyo Mon</label>
            </div>
            <div class="list-item">
              <input type="checkbox">
              <label>Su Yee Htun</label>
            </div>
          </div>
        </div>
    </div>
    <div class="col">
      <div class="content">
        <div class="header">
          <div class="swith-week">
            <span class="title">October 28, 2020</span>
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
          <div class="row schdule-list btn btn-lg">
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