<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
    ];

    /**
    * Get the description record associated with the task.
    */
    public function description()
    {
        return $this->hasOne(Description::class);
    }
}
