<?php

namespace App\Models;

use App\Models\MaterialProperty;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AccreditationCriteria extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function materialProperties()
    {
        return $this->belongsToMany(MaterialProperty::class, 'accreditation_criteria_material_properties');
    }
}
