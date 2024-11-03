<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Operateureference extends Model
{
    use HasFactory;
    use SoftDeletes;
    use \App\Helpers\UuidForKey;
    protected $table = 'operateureferences';

    protected $casts = [
        'operateurs_id' => 'int',
    ];
    protected $fillable = [
        'uuid',
        'organisme',
        'contact',
        'periode',
        'statut',
        'description',
        'operateurs_id'
    ];
    public function operateur()
    {
        return $this->belongsTo(Operateur::class, 'operateurs_id')->latest();
    }

}
