<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'thread_id',
        'body'
    ];

        /**
     * Get the user that owns the Thread
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the replies for the Thread
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }
}
