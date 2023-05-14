<?php

test('Age and Year of Death is Valid', function () {
    $person = new \App\Models\Answer(['death_age' => 3, 'death_year' => 5]);

    $result = $person->isAnswerValid();

    expect($result)->toBe('valid');
});

test('Born Year is correct', function () {
    $person = new \App\Models\Answer(['death_age' => 3, 'death_year' => 5]);

    $result = $person->countBornYear();

    expect($result)->toBe(2);
});

test('Person is Valid', function () {
    $person = new \App\Models\Answer(['death_age' => 3, 'death_year' => 5]);

    $result = $person->isPersonValid();

    expect($result)->toBe('valid');
});

test('Witch Rule is correct', function () {
    $answer = new \App\Models\Answer;

    $result = $answer->witchTargetRule(6);

    expect($result)->toBe(8);
});