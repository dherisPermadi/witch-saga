@extends('layouts.main')

@section('container')
  <div class='desk'>
    <br>
    <div class="d-flex justify-content-center">
      <div class='card' style="margin-top: 50px;">
        <div class="card-header">
          <h2 class='welcome-text'>The Secret book!</h2>
        </div>
        <div class="card-body">
          <h5 class="card-title">You found the Legacy.</h5>
          <p class="card-text">
            After reading about the witch behaviour, victims and the works of the previous hero. You found the solution to defeat <b>the Witch</b>. you found <b>The secret</b>, that before <b>the Witch</b> killed
            <b>the last Programmer</b>, The Programmer managed to write all of the solution, so you can continue and fix what he could not have done.
          </p>
          <p class="card-text">With the help of <b>the Elder</b>, you can save the Village before <b>the Witch</b> start the ritual. 
          </p>
          <br>
          <a href="{{ route('quests', ['chapter' => 'answer']) }}" class='btn btn-lg'>Complete the solution</a>
        </div>
      </div>
    </div>
  </div>
@endsection
