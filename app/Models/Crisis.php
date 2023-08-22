<?php

namespace App\Models;

use App\Models\Donor;
use App\Models\Donate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Crisis extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function crido(){
        return $this->belongsTo(Donor::class,'donor_id','id');
    }

    public function donations()
    {
        return $this->hasMany(Donate::class);
    }

    public function crises(){
        return $this->belongsTo(VolunteerUser::class, 'volunteerUser_id','id');
    }


}
