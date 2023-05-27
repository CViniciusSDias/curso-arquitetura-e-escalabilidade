<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Review extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = ['specialist_id', 'rating', 'comment'];

    public function specialist(): Relation
    {
        return $this->belongsTo(Specialist::class);
    }
}
