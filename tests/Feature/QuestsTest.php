<?php

it('has quests - village page', function () {
  $response = $this->get(route('quests', ['chapter' => 'village']));

  $response->assertSuccessful();
});

it('has quests - hope page', function () {
  $response = $this->get(route('quests', ['chapter' => 'hope']));

  $response->assertSuccessful();
});

it('has quests - secret page', function () {
  $response = $this->get(route('quests', ['chapter' => 'secret']));

  $response->assertSuccessful();
});

it('has quests - answer page', function () {
  $response = $this->get(route('quests', ['chapter' => 'answer']));

  $response->assertSuccessful();
});

it('post answer - success page', function () {
  $response = $this->call('POST', '/quests', [
      'first_death_age' => 5,
      'first_death_year' => 7,
      'last_death_age' => 17,
      'last_death_year' => 13
  ]);

  $response->assertSuccessful();
});

it('post answer - failed page', function () {
  $response = $this->call('POST', '/quests', [
      'first_death_age' => -1,
      'first_death_year' => 0,
      'last_death_age' => 0,
      'last_death_year' => -2
  ]);

  $response->assertSuccessful();
});
