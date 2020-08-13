<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'description',
    ];

    /**
    * Get the task that owns the description
    */
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
