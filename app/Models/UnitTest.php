<?php

namespace App\Models;

use App\Models\User;
use App\Models\MaterialProperty;
use App\Models\AccreditationType;
use App\Models\AccreditationExpert;
use App\Models\AccreditationCriteria;
use App\Models\AccreditationExpertUser;
use Illuminate\Database\Eloquent\Model;
use App\Models\AccreditationCriteriaMaterialProperty;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UnitTest extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'description',
        'accreditation_type_id',
        'user_id',
        'accreditation_expert_user_id',
        'accreditation_criteria_material_propertiy_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function accreditationType()
    {
        return $this->belongsTo(AccreditationType::class);
    }

    public function accreditationCriteriaMaterialProperty()
    {
        return $this->belongsTo(AccreditationCriteriaMaterialProperty::class);
    }

    public function accreditationExpertUsers()
    {
        return $this->hasMany(AccreditationExpertUser::class, 'accreditation_expert_id', 'accreditation_expert_user_id');
    }

    public function materialProperties()
    {
        return $this->belongsToMany(MaterialProperty::class, 'accreditation_criteria_material_properties', 'accreditation_criteria_id', 'material_property_id');
    }

    public function accreditationExpert()
    {
        return $this->belongsTo(AccreditationExpert::class, 'accreditation_expert_user_id', 'id');
    }

    public function accreditationCriteria()
    {
        return $this->belongsTo(AccreditationCriteria::class, 'accreditation_criteria_material_propertiy_id', 'id');
    }
    

}
