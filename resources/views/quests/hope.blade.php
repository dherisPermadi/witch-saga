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
            Your gaze is fixated on <b>the small window</b>, while trying to processing all of <b>The Elder</b> words.
            <b>A Witch, The death of the Villager, and The last Savior</b>. It all sounds like a <b>fairy tale</b>,
            a story that your father used to read to you while you were a little child. Do a witch really exist?
          </p>
          <p class="card-text">Someone's screams could be heard from the outside the house. As you and the elder going to the outside. 
            A <b>Lady</b> is crying while holding on <b>his child</b>. <i><b>"No, no, Elder please help me, my child has been marked"</b></i>,
            said the <b>Lady</b> to <b>The Elder</b>. <b>The Elder</b> try to comforting her, and saying <i><b>"Do not worry. Our Saviour is here.
            we can stop the Witch now".</b></i>
          </p>
          <p class="card-text">You are <b>The Savior</b>. A new hope that could continue the <b>Fallen hero</b> who can find a way to defeat 
            <b>The Witch</b> again. But, do you believe in all of this ? Only one answer could make you belive, you have to learn more about everything.
          </p>
          <br>
          <a href="{{ route('quests', ['chapter' => 'secret']) }}" class='btn btn-lg'>Find more Truth</a>
        </div>
      </div>
    </div>
  </div>
@endsection
