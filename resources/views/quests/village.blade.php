@extends('layouts.main')

@section('container')
  <div class='village'>
    <br>
    <div class="d-flex justify-content-center">
      <div class='card' style="margin-top: 100px;">
        <div class="card-header">
          <h2 class='welcome-text'>Welcome to the Village.</h2>
        </div>
        <div class="card-body">
          <h5 class="card-title">The Elder of the village.</h5>
          <p class="card-text">
            As you arrived in the village, not one person is outside, it looks like that no one is lived in the village. the door in every houses is closed. Until you reach one particular house.
          </p>
          <p class="card-text"><b>A big house</b> that different than the other houses. When you getting closer to the house, <b>an elder person</b> comes out of that house with a big smile.</p>
          <p class="card-text"><i>"Come inside my child. It is the time. I've been waiting for you."</i>, said the eldery while guiding you to follow him into the house.</p>
          <br>
          <a href="{{ route('quests', ['chapter' => 'hope']) }}" class='btn btn-lg'>Follow the Elder</a>
        </div>
      </div>
    </div>
  </div>
@endsection
