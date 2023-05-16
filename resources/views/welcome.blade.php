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
            A place where your <b>adventure</b> will begin, as a <b>brave person and good programmer</b> your journey destined to be a savior in <b>The GeekSeat Village</b>,
            <b>A mysterious village</b> that has been controlled by a <b>dark and cunning Witch</b>.
          </p>
          <p class="card-text">Let's follow the path and help <b>the villager</b> to defeat <b>The Witch</b>.</p>
          <p class="card-text"><b>May the greatest power helps you save the village.</b></p>
          <br>
          <a href="{{ route('quests', ['chapter' => 'village']) }}" class='btn btn-lg'>Enter The Village</a>
        </div>
      </div>
    </div>
    <img src="{{ asset('/') }}images/road-to-village.png" alt="" class='road'>
  </div>
@endsection
