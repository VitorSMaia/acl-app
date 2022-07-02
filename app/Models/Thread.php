<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
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

    // /**
    //  * Get all of the replies for the Thread
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    // public function replies()
    // {
    //     return $this->hasMany(Reply::class);
    // }
}
