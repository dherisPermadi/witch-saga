@extends('layouts.main')

@section('container')
  <div class='failed'>
    <br>
    <div class="d-flex justify-content-center">
      <div class='card' style="margin-top: 100px;">
        <div class="card-header">
          <h1 class='welcome-text'>You Failed !!</h1>
        </div>
        <div class="card-body">
          <h5 class="card-title">Oh No! You failed the quest. the result of the average is <b>-1</b>.</h5>
          <p class="card-text">
           <b>The persons</b> that you've been written are not correct, and the <b>Witch</b> has found you.
          </p>
          <p class="card-text">Now you have been killed by <b>the Witch</b> and meet your fate as a <b>fallen saviour</b>.</p>
          <p class="card-text">Let's find another saviour.</p>
          <br>
          <a href="/" class='btn btn-lg'>Restart the Quest</a>
        </div>
      </div>
    </div>
  </div>
@endsection
