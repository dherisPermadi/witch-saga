@extends('layouts.main')

@section('container')
  <div class='first-page'>
    <br>
    <div class="d-flex justify-content-center">
      <div class='card' style="margin-top: 100px;">
        <div class="card-header">
          <h1 class='welcome-text'>Welcome Savior !!</h1>
        </div>
        <div class="card-body">
          <h5 class="card-title">Welcome to GeekSeat Village.</h5>
          <p class="card-text">
            A place where your adventure begins, as a <b>brave person</b> you journey destined in the<b>GeekSeat Village</b>, which is a quite village that has been controlled by a dark and cunning <b>Witch</b>.
          </p>
          <p class="card-text">Let's follow the path and help the villager to defeat the <b>Witch</b>.</p>
          <p class="card-text">May the greatest power helps you save the village.</p>
          <br>
          <a href="{{ route('quests', ['chapter' => 'village']) }}" class='btn btn-lg'>Enter the Village</a>
        </div>
      </div>
    </div>
    <img src="{{ asset('/') }}images/road-to-village.png" alt="" class='road'>
  </div>
@endsection
