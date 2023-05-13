<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Quest;

class Answer extends Model
{
    use HasFactory;

    public function isAnswerValid()
    {
        return ($this->death_age > 0 && $this->death_year > 0) ? 'valid' : 'invalid';
    }

    public function calculate()
    {
        if ($this->first_death_age < 1 || $this->first_death_year < 1 || $this->last_death_age < 1 || $this->last_death_year < 1)
        {
            return -1;
        }

        return $this->findAnswer();
    }

    public function findBornYear()
    {
        return $this->death_year - $this->death_age;
    }

    public function isPersonValid()
    {
        return ($this->isAnswerValid() == 'valid' && $this->findBornYear() > 0) ? 'valid' : 'invalid';
    }

    public function countPeopleKilled()
    {
        $year = $this->findBornYear();
        $total = 0;

        for ($counter = 1; $counter <= $year; $counter++){  
            $total = $total + $this->witchTargetRule($counter);
        }

        return $total;
    }

    public function witchTargetRule($number){
        if ($number == 0)
        {
            return 0;
        } else if ($number == 1)
        {
            return 1;
        } else
        {
            return ($this->witchTargetRule($number-1) + $this->witchTargetRule($number-2));
        }
    }

    public function quest()
    {
        return $this->belongsTo(Quest::class);
    }

    protected $fillable = ['death_age', 'death_year'];
}
