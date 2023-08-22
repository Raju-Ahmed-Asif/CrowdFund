<?php

namespace App\Models;

use App\Models\Crisis;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donate extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function crisis() {
        return $this->belongsTo(Crisis::class);
    }
}
