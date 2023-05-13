@extends('layouts.main')

@section('container')
  <div class='house'>
    <br>
    <div class="d-flex justify-content-center">
      <div class='card' style="margin-top: 30px;">
        <div class="card-header">
          <h2 class='welcome-text'>The Story of the Witch.</h2>
        </div>
        <div class="card-body">
          <h5 class="card-title">You are this village Last Hope.</h5>
          <p class="card-text">
            Your gaze is focused on an empty wall, while trying to processing all of <b>the elder</b> explain to you. <b>A Witch, The death of Villager, and The last Savior</b>. It all seems like a fairy tale,
            a story that you father used to read to you while you were a little child. Do a witch really exist?
          </p>
          <p class="card-text">Someone's screams could be heard from the outside the house. As you and the elder going to the outside. A Mother is crying while holding his child.
            <i>"No, no, Elder please help me, my child has been marked"</i> said the mother to the elder. The elder try to comforting the mother, and saying <i>"Do not worry. Our Saviour is here. we can stop the Witch now".</i>
          </p>
          <p class="card-text">You are the savior. new hope that could continue the Fallen hero who can find a way to defeat the witch again. Maybe it is the right time to learn more about everything.</p>
          <br>
          <a href="{{ route('quests', ['chapter' => 'secret']) }}" class='btn btn-lg'>Find more information</a>
        </div>
      </div>
    </div>
  </div>
@endsection
