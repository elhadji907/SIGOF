<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;
    use \App\Helpers\UuidForKey;

    protected $table = 'contacts';

    protected $casts = [
        'commentable_id' => 'int',
        'users_id' => 'int',
        'courriers_id' => 'int'
    ];

    protected $fillable = [
        'uuid',
        'content',
        'commentable_id',
        'commentable_type',
        'objet',
        'email',
        'telephone',
        'message',
    ];


    public function commentable()
    {
        return $this->morphTo();
    }

    public function contacts()
    {
        return $this->morphMany(Contact::class, 'Commentable')->latest();
    }
}
