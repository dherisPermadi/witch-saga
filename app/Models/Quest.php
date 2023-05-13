<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Answer;

class Quest extends Model
{
    use HasFactory;

    public function calculate()
    {
        $first_person = new Answer($this->answers->first());
        $last_person = new Answer($this->answers->last());

        return $this->findAnswer($first_person, $last_person);
    }

    public function findAnswer($first_person, $last_person)
    {
        if ($first_person->isPersonValid() == 'valid' && $last_person->isPersonValid() == 'valid')
        {
            return ($first_person->countPeopleKilled() + $last_person->countPeopleKilled())/2;
        } else {
            return -1;
        }
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
