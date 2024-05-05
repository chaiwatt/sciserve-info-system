<?php

namespace App\Models;

use App\Models\AccreditationCriteria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MaterialProperty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function accreditationCriterias()
    {
        return $this->belongsToMany(AccreditationCriteria::class, 'accreditation_criteria_material_properties');
    }
}
