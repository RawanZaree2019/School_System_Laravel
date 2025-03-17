<?php

namespace Database\Seeders;

use App\Models\Nationality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nationalities = [
            ['ar' => 'سوري', 'en' => 'Syrian'],
            ['ar' => 'مصري', 'en' => 'Egyptian'],
            ['ar' => 'سعودي', 'en' => 'Saudi'],
            ['ar' => 'أردني', 'en' => 'Jordanian'],
            ['ar' => 'لبناني', 'en' => 'Lebanese'],
            ['ar' => 'فلسطيني', 'en' => 'Palestinian'],
            ['ar' => 'عراقي', 'en' => 'Iraqi'],
            ['ar' => 'جزائري', 'en' => 'Algerian'],
            ['ar' => 'مغربي', 'en' => 'Moroccan'],
            ['ar' => 'تونسي', 'en' => 'Tunisian'],
            ['ar' => 'كويتي', 'en' => 'Kuwaiti'],
            ['ar' => 'قطري', 'en' => 'Qatari'],
            ['ar' => 'إماراتي', 'en' => 'Emirati'],
            ['ar' => 'بحريني', 'en' => 'Bahraini'],
            ['ar' => 'ليبي', 'en' => 'Libyan'],
            ['ar' => 'سوداني', 'en' => 'Sudanese'],
            ['ar' => 'يمني', 'en' => 'Yemeni'],
            ['ar' => 'صومالي', 'en' => 'Somali'],
            ['ar' => 'جيبوتي', 'en' => 'Djiboutian'],
            ['ar' => 'موريتاني', 'en' => 'Mauritanian'],
            ['ar' => 'أمريكي', 'en' => 'American'],
            ['ar' => 'بريطاني', 'en' => 'British'],
            ['ar' => 'فرنسي', 'en' => 'French'],
            ['ar' => 'ألماني', 'en' => 'German'],
            ['ar' => 'إسباني', 'en' => 'Spanish'],
            ['ar' => 'إيطالي', 'en' => 'Italian'],
            ['ar' => 'هولندي', 'en' => 'Dutch'],
            ['ar' => 'تركي', 'en' => 'Turkish'],
            ['ar' => 'هندي', 'en' => 'Indian'],
            ['ar' => 'باكستاني', 'en' => 'Pakistani'],
            ['ar' => 'أفغاني', 'en' => 'Afghan'],
            ['ar' => 'إيراني', 'en' => 'Iranian'],
            ['ar' => 'روسي', 'en' => 'Russian'],
            ['ar' => 'ياباني', 'en' => 'Japanese'],
            ['ar' => 'صيني', 'en' => 'Chinese'],
            ['ar' => 'كوري', 'en' => 'Korean'],
            ['ar' => 'برازيلي', 'en' => 'Brazilian'],
            ['ar' => 'أرجنتيني', 'en' => 'Argentinian'],
            ['ar' => 'كندي', 'en' => 'Canadian'],
            ['ar' => 'أسترالي', 'en' => 'Australian'],
            ['ar' => 'سويدي', 'en' => 'Swedish'],
            ['ar' => 'نرويجي', 'en' => 'Norwegian'],
            ['ar' => 'دنماركي', 'en' => 'Danish'],
            ['ar' => 'سويسري', 'en' => 'Swiss'],
            ['ar' => 'يوناني', 'en' => 'Greek'],
            ['ar' => 'برتغالي', 'en' => 'Portuguese'],
            ['ar' => 'فنزويلي', 'en' => 'Venezuelan'],
            ['ar' => 'كولومبي', 'en' => 'Colombian'],
            ['ar' => 'تشيلي', 'en' => 'Chilean'],
            ['ar' => 'نيجيري', 'en' => 'Nigerian'],
            ['ar' => 'جنوب إفريقي', 'en' => 'South African'],
            ['ar' => 'أنغولي', 'en' => 'Angolan'],
            ['ar' => 'أثيوبي', 'en' => 'Ethiopian'],
            ['ar' => 'ماليزي', 'en' => 'Malaysian'],
            ['ar' => 'إندونيسي', 'en' => 'Indonesian'],
            ['ar' => 'سنغافوري', 'en' => 'Singaporean'],
            ['ar' => 'فلبيني', 'en' => 'Filipino'],
            ['ar' => 'تايلاندي', 'en' => 'Thai'],
            ['ar' => 'فيتنامي', 'en' => 'Vietnamese'],
            ['ar' => 'كاميروني', 'en' => 'Cameroonian'],
            ['ar' => 'زامبي', 'en' => 'Zambian'],
            ['ar' => 'أوغندي', 'en' => 'Ugandan'],
            ['ar' => 'غاني', 'en' => 'Ghanaian'],
        ];

        foreach($nationalities as $nationality)
        {
            Nationality::create([
                'name'=> $nationality,
            ]);
        }
    }
}
