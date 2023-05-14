<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Quest;

class Answer extends Model
{
    use HasFactory;

    //age and year value lidation
    public function isAnswerValid()
    {
        return ($this->death_age > 0 && $this->death_year > 0) ? 'valid' : 'invalid';
    }

    // count born year
    public function countBornYear()
    {
        return $this->death_year - $this->death_age;
    }

    // born yearn value validation
    public function isPersonValid()
    {
        return ($this->isAnswerValid() == 'valid' && $this->countBornYear() > 0) ? 'valid' : 'invalid';
    }

    //count people killed
    public function countPeopleKilled()
    {
        $year = $this->countBornYear();
        $total = 0;

        for ($counter = 1; $counter <= $year; $counter++){  
            $total = $total + $this->witchTargetRule($counter);
        }

        return $total;
    }

    //witch rule
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
