<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [
        'id',
    ];

    public function codes(): HasMany
    {
        return $this->hasMany(Code::class);
    }
    public function getMaxCodeBytePerUser()
    {
        return $this->codes()->maxCodeBytePerUser();
    }
}
