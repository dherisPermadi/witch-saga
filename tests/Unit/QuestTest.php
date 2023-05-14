<?php

test('calculation is correct', function () {
    $quest = new \App\Models\Quest;
    $first_person = new \App\Models\Answer(['death_age' => 3, 'death_year' => 5]);
    $last_person = new \App\Models\Answer(['death_age' => 13, 'death_year' => 17]);

    $result = $quest->findAnswer($first_person, $last_person);

    expect($result)->toBe(4.5);
});
