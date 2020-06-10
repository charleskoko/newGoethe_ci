<?php

namespace App;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use Uuids;

    public $incrementing = false;

    protected $keyType = 'string';

    public const MOVIE_AVAILABLE = 1;
    public const MOVIE_NOAVAILABLE = 0;

    protected $fillable = [
        'title', 'description','is_available', 'numberOfCopies', 'numberOfCopiesAvailable', 'director'
    ];

    protected $casts = [
        'is_available' => 'boolean',
    ];
}
