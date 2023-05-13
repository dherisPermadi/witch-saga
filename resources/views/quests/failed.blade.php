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
          <h5 class="card-title">Oh No! You failed the quest.</h5>
          <p class="card-text">
           <b>The persons</b> profile that you've been filled are not correct, the <b>Witch</b> has found you.
          </p>
          <p class="card-text">And now you have been killed as another <b>fallen saviour</b>.</p>
          <p class="card-text">Let's start another quest in another lifetime.</p>
          <br>
          <a href="/" class='btn btn-lg'>Restart the Quest</a>
        </div>
      </div>
    </div>
  </div>
@endsection
