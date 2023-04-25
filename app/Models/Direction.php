<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Queue\Jobs\Job;

class Direction extends Model
{
    use HasFactory;
    public function Job(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Jobs::class, 'job_id', 'id');
    }
}
