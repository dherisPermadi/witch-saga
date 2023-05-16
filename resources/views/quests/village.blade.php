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
            As you arrived in <b>The Village</b>, you have not seen a single person in  there, it looks like that no one is living in <b>The Village</b>.
            each door in every houses are closed. Until you reach one particular house.
          </p>
          <p class="card-text"><b>A big house</b> that different than the other houses. When you approaching that house, <b>An Elderly Person</b> comes out with a big smile.</p>
          <p class="card-text"><i><b>"Come inside my child. It is the time. We've been waiting for you."</b></i>, said <b>The Elder</b> while guiding you to follow him enter the house.</p>
          <p>What is the meaning of all of these? Why <b>The Elder</b> said that? Do you really the one who have been waiting for?</p>
          <br>
          <a href="{{ route('quests', ['chapter' => 'hope']) }}" class='btn btn-lg'>Follow the Elder</a>
        </div>
      </div>
    </div>
  </div>
@endsection
