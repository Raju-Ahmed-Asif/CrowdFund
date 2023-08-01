<?php

namespace App\Models;

use App\Models\Donor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Crisis extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function crido(){
        return $this->belongsTo(Donor::class,'donor_id','id');
    }
}
