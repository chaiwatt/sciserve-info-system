<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Role;
use App\Models\Group;
use App\Models\UnitTest;
use App\Models\AccreditationExpert;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'is_admin',
        'name',
        'lastname',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_users', 'user_id', 'role_id')
            ->where('role_users.user_id', $this->id);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_roles', 'role_id', 'group_id')
            ->whereIn('role_id', $this->roles()->pluck('id'));
    }

    public function isAdmin()
    {
        return $this->is_admin === '2' || $this->is_admin === '3' || $this->is_admin === '4';
    }

    public function accreditationExperts()
    {
        return $this->belongsToMany(AccreditationExpert::class, 'accreditation_expert_users');
    }

    public function unitTests()
    {
        return $this->hasMany(UnitTest::class, 'accreditation_expert_user_id');
    }
}
