<?php

namespace Database\Seeders;

use App\Models\Governorate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GovernorateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $governorates=[
        ['id'=>1, 'name_ar'=>'القاهرة','name_en'=> 'Cairo'],
        ['id'=>2, 'name_ar'=>'الجيزة', 'name_en'=> 'Giza'],
        ['id'=>3, 'name_ar'=>'الأسكندرية', 'name_en'=> 'Alexandria'],
        ['id'=>4, 'name_ar'=>'الدقهلية','name_en'=>  'Dakahlia'],
        ['id'=>5, 'name_ar'=>'البحر الأحمر', 'name_en'=> 'Red Sea'],
        ['id'=>6, 'name_ar'=>'البحيرة', 'name_en'=> 'Beheira'],
        ['id'=>7, 'name_ar'=>'الفيوم', 'name_en'=> 'Fayoum'],
        ['id'=>8, 'name_ar'=>'الغربية', 'name_en'=> 'Gharbiya'],
        ['id'=>9, 'name_ar'=>'الإسماعلية','name_en'=>  'Ismailia'],
        ['id'=>10,'name_ar'=> 'المنوفية','name_en'=>  'Menofia'],
        ['id'=>11,'name_ar'=> 'المنيا', 'name_en'=> 'Minya'],
        ['id'=>12,'name_ar'=> 'القليوبية', 'name_en'=> 'Qaliubiya'],
        ['id'=>13,'name_ar'=> 'الوادي الجديد','name_en'=>  'New Valley'],
        ['id'=>14,'name_ar'=> 'السويس', 'name_en'=> 'Suez'],
        ['id'=>15,'name_ar'=> 'اسوان', 'name_en'=> 'Aswan'],
        ['id'=>16,'name_ar'=> 'اسيوط', 'name_en'=> 'Assiut'],
        ['id'=>17,'name_ar'=> 'بني سويف', 'name_en'=> 'Beni Suef'],
        ['id'=>18,'name_ar'=> 'بورسعيد', 'name_en'=> 'Port Said'],
        ['id'=>19,'name_ar'=> 'دمياط', 'name_en'=> 'Damietta'],
        ['id'=>20,'name_ar'=> 'الشرقية','name_en'=>  'Sharkia'],
        ['id'=>21,'name_ar'=> 'جنوب سيناء','name_en'=>  'South Sinai'],
        ['id'=>22,'name_ar'=> 'كفر الشيخ', 'name_en'=> 'Kafr Al sheikh'],
        ['id'=>23,'name_ar'=> 'مطروح', 'name_en'=> 'Matrouh'],
        ['id'=>24,'name_ar'=> 'الأقصر','name_en'=>  'Luxor'],
        ['id'=>25,'name_ar'=> 'قنا', 'name_en'=> 'Qena'],
        ['id'=>26,'name_ar'=> 'شمال سيناء', 'name_en'=> 'North Sinai'],
        ['id'=>27,'name_ar'=> 'سوهاج', 'name_en'=> 'Sohag']
        ];

        foreach($governorates as $governorate){
            
            Governorate::create([
                'name'=> $governorate['name_en'],
                'id'=> $governorate['id']
            ]);
        
        
    }
}


}