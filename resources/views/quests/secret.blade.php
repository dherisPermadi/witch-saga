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
            You found all of your answers inside of the <b>previous Programmer</b> house, After reading more about <b>the Witch, the Victims and
            the previous Hero</b>, Now you believe in everything. And for the most important part of your journey, you have found the solution
            to defeat <b>the Witch</b>, You found <b>The Secret</b>.
          </p>
          <p>
            You found the last book that <b>The Programmer</b> managed to write, every patter and the structure of the solution.
            And now you can continue and fix what he could not completed.
          </p>
          <p class="card-text">With the help of <b>the Elder</b>, you can save <b>the Village</b> before <b>the Witch</b> take another victims. 
          </p>
          <br>
          <a href="{{ route('quests', ['chapter' => 'answer']) }}" class='btn btn-lg'>Complete the Solution</a>
        </div>
      </div>
    </div>
  </div>
@endsection
