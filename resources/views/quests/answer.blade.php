@extends('layouts.main')

@section('container')
  <div class='book'>
    <br>
    <div class='row'>
      <div class='col-6'>
        <div class='card' style="margin-top: 75px; margin-left: 200px;">
          <div class="card-header">
            <h2 class='welcome-text'>The Answer of the Solution.</h2>
          </div>
          <div class="card-body">
            <p>This is it. Your only way to defeat <b>the Witch</b>.
            <p>You only have to write two of the previous victims profile</b>
            <p>Let's input the data of the two person that the witch had killed.</b>
            <p>If the result is right then <b>the Witch</b> would be gone from <b>this Village</b> forever.
              but if you are wrong, The witch will kill you right away. So, do it carefully.</p>
          </div>
        </div>
      </div>
      <div class='col-6'>
        <div class='card' style="margin-top: 75px; margin-left: 150px;">
          <div class="card-header">
            <h2>Input Two Killed Persons.</h2>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ url('quests') }}">
              @csrf
              <h3>Person A</h3>
              age of death:
              <br>
              <input type="number" name='first_death_age' value=0 required>
              <br>
              death of death:
              <br>
              <input type="number" name='first_death_year' value=0 required>
              <br>
              <h3>Person B</h3>
              age of death:
              <br>
              <input type="number" name='last_death_age' value=0 required>
              <br>
              death of death:
              <br>
              <input type="number" name='last_death_year' value=0 required>
              <br>
              <br>
              <button type='submit' class='btn btn-lg'>Solve</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
