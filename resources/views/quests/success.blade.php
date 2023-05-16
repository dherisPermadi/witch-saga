@extends('layouts.main')

@section('container')
  <div class='success'>
    <br>
    <div class="d-flex justify-content-center">
      <div class='card' style="margin-top: 100px;">
        <div class="card-header">
          <h1 class='welcome-text'>Congratulation !!</h1>
        </div>
        <div class="card-body">
          <h5 class="card-title">You Defeated the Witch.</h5>
          <p class="card-text">
            You have <b>solved the quest</b>. the result of the average is <b>{{ $average }}</b>.
          </p>
          <p class="card-text">Now <b>the Witch</b> is gone from this village and <b>GeekSeat Village</b> is safe from <b>the Death</b>.</p>
          <h4>Thank you Savior.</h4>
          <br>
          <a href="/" class='btn btn-lg'>Start another Journey</a>
        </div>
      </div>
    </div>
  </div>
@endsection
