<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','comment','packages_id'];

    public function packages(): BelongsTo{
        return $this->belongsTo(Packages::class);
    }
}
