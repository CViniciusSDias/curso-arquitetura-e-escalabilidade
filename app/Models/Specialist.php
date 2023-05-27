<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Specialist extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['name', 'crm', 'specialty', 'email'];

    public function reviews(): Relation
    {
        return $this->hasMany(Review::class);
    }
}
