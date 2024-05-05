<?php

namespace Database\Seeders;

use App\Models\UnitTest;
use Illuminate\Database\Seeder;
use App\Models\AccreditationExpert;
use App\Models\AccreditationCriteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UnitTestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $accreditationExpert = AccreditationExpert::find(1);
        $accreditationExpert->users()->syncWithoutDetaching([1, 2]);
        
        $accreditationCriteriaOne = AccreditationCriteria::find(1);
        $accreditationCriteriaOne->materialProperties()->syncWithoutDetaching([1, 2, 3]);
        
        $accreditationCriteriaTwo = AccreditationCriteria::find(2);
        $accreditationCriteriaTwo->materialProperties()->syncWithoutDetaching([4, 5, 6]);    
        
        UnitTest::create([
            'name' => 'การทดสอบคุณสมบัติวัสดุX',
            'description' => 'การทดสอบคุณสมบัติวัสดุX ที่ได้จากหินดาวตก',
            'accreditation_type_id' => 2,
            'user_id' => 5,
            'accreditation_expert_user_id' => 1,
            'accreditation_criteria_material_propertiy_id' => 1,
        ]);

    }
}
