<?php

namespace App\Models;

use App\Models\User;
use App\Models\AccreditationExpertUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AccreditationExpert extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'accreditation_expert_users');
    }

    public function accreditationExpertUsers()
    {
        return $this->hasMany(AccreditationExpertUser::class);
    }
}
