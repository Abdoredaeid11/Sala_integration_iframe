<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // NOTE: Last page 210
        DB::table('provinces')
            ->insert([
                [
                    "id" => 1,
                    "country_id" => 1,
                    "external_id" => 1473353380,
                    "name_en" => "Riyadh",
                    "name_ar" => "الرياض"
                ],
                [
                    "id" => 2,
                    "country_id" => 1,
                    "external_id" => 566146469,
                    "name_en" => "Jeddah",
                    "name_ar" => "جدة"
                ],
                [
                    "id" => 3,
                    "country_id" => 1,
                    "external_id" => 1939592358,
                    "name_en" => "Mecca",
                    "name_ar" => "مكة المكرمة"
                ],
                [
                    "id" => 4,
                    "country_id" => 1,
                    "external_id" => 1298199463,
                    "name_en" => "Medina",
                    "name_ar" => "المدينة المنورة"
                ],
                [
                    "id" => 5,
                    "country_id" => 1,
                    "external_id" => 525144736,
                    "name_en" => "Dammam",
                    "name_ar" => "الدمام"
                ],
                [
                    "id" => 6,
                    "country_id" => 1,
                    "external_id" => 1764372897,
                    "name_en" => "Al Ahsa",
                    "name_ar" => "الأحساء"
                ],
                [
                    "id" => 7,
                    "country_id" => 1,
                    "external_id" => 989286562,
                    "name_en" => "Al Qatif",
                    "name_ar" => "القطيف"
                ],
                [
                    "id" => 8,
                    "country_id" => 1,
                    "external_id" => 349994915,
                    "name_en" => "Khamis Mushait",
                    "name_ar" => "خميس مشيط"
                ],
                [
                    "id" => 9,
                    "country_id" => 1,
                    "external_id" => 1723506348,
                    "name_en" => "Almuzaylif",
                    "name_ar" => "المظيلف"
                ],
                [
                    "id" => 10,
                    "country_id" => 1,
                    "external_id" => 814202285,
                    "name_en" => "Tabuk",
                    "name_ar" => "تبوك"
                ],
                [
                    "id" => 11,
                    "country_id" => 1,
                    "external_id" => 40688814,
                    "name_en" => "Al Hofuf",
                    "name_ar" => "الهفوف"
                ],
                [
                    "id" => 12,
                    "country_id" => 1,
                    "external_id" => 1548352431,
                    "name_en" => "Al Mubarraz",
                    "name_ar" => "المبرز"
                ],
                [
                    "id" => 13,
                    "country_id" => 1,
                    "external_id" => 773200552,
                    "name_en" => "Najran",
                    "name_ar" => "نجران"
                ],
                [
                    "id" => 14,
                    "country_id" => 1,
                    "external_id" => 2079537577,
                    "name_en" => "Hafar Al Batin",
                    "name_ar" => "حفر الباطن"
                ],
                [
                    "id" => 15,
                    "country_id" => 1,
                    "external_id" => 1440241834,
                    "name_en" => "Al Jubail",
                    "name_ar" => "الجبيل"
                ],
                [
                    "id" => 16,
                    "country_id" => 1,
                    "external_id" => 665151403,
                    "name_en" => "Taif",
                    "name_ar" => "الطائف"
                ],
                [
                    "id" => 17,
                    "country_id" => 1,
                    "external_id" => 1904445108,
                    "name_en" => "Duba",
                    "name_ar" => "ضبا"
                ],
                [
                    "id" => 18,
                    "country_id" => 1,
                    "external_id" => 1130931637,
                    "name_en" => "Al Kharj",
                    "name_ar" => "الخرج"
                ],
                [
                    "id" => 19,
                    "country_id" => 1,
                    "external_id" => 490063030,
                    "name_en" => "Thuqbah",
                    "name_ar" => "الثقبة"
                ],
                [
                    "id" => 20,
                    "country_id" => 1,
                    "external_id" => 1863508919,
                    "name_en" => "Yanbu",
                    "name_ar" => "ينبع"
                ],
                [
                    "id" => 21,
                    "country_id" => 1,
                    "external_id" => 956236464,
                    "name_en" => "Arar",
                    "name_ar" => "عرعر"
                ],
                [
                    "id" => 22,
                    "country_id" => 1,
                    "external_id" => 180625841,
                    "name_en" => "Hawea/Taif",
                    "name_ar" => "الحوية (الطائف)"
                ],
                [
                    "id" => 23,
                    "country_id" => 1,
                    "external_id" => 1688289458,
                    "name_en" => "Unayzah",
                    "name_ar" => "عنيزة"
                ],
                [
                    "id" => 24,
                    "country_id" => 1,
                    "external_id" => 915304371,
                    "name_en" => "Al Khobar",
                    "name_ar" => "الخبر"
                ],
                [
                    "id" => 25,
                    "country_id" => 1,
                    "external_id" => 5541564,
                    "name_en" => "Sakaka",
                    "name_ar" => "سكاكا"
                ],
                [
                    "id" => 26,
                    "country_id" => 1,
                    "external_id" => 1378987453,
                    "name_en" => "Jazan",
                    "name_ar" => "جازان"
                ],
                [
                    "id" => 27,
                    "country_id" => 1,
                    "external_id" => 740215998,
                    "name_en" => "Al Qurayyat",
                    "name_ar" => "القريات"
                ],
                [
                    "id" => 28,
                    "country_id" => 1,
                    "external_id" => 2046553023,
                    "name_en" => "Dhahran",
                    "name_ar" => "الظهران"
                ],
                [
                    "id" => 29,
                    "country_id" => 1,
                    "external_id" => 1270876856,
                    "name_en" => "Az Zulfi",
                    "name_ar" => "الزلفي"
                ],
                [
                    "id" => 30,
                    "country_id" => 1,
                    "external_id" => 632105401,
                    "name_en" => "Ar Rass",
                    "name_ar" => "الرس"
                ],
                [
                    "id" => 31,
                    "country_id" => 1,
                    "external_id" => 2005551290,
                    "name_en" => "Wadi ad-Dawasir",
                    "name_ar" => "وادي الدواسر"
                ],
                [
                    "id" => 32,
                    "country_id" => 1,
                    "external_id" => 1096243131,
                    "name_en" => "Al Bahah",
                    "name_ar" => "الباحة"
                ],
                [
                    "id" => 33,
                    "country_id" => 1,
                    "external_id" => 322729604,
                    "name_en" => "Bishah",
                    "name_ar" => "بيشة"
                ],
                [
                    "id" => 34,
                    "country_id" => 1,
                    "external_id" => 1830458757,
                    "name_en" => "Saihat",
                    "name_ar" => "سيهات"
                ],
                [
                    "id" => 35,
                    "country_id" => 1,
                    "external_id" => 1055372422,
                    "name_en" => "Sharorah",
                    "name_ar" => "شرورة"
                ],
                [
                    "id" => 36,
                    "country_id" => 1,
                    "external_id" => 147641223,
                    "name_en" => "Tarout",
                    "name_ar" => "تاروت"
                ],
                [
                    "id" => 37,
                    "country_id" => 1,
                    "external_id" => 1521087104,
                    "name_en" => "Sabya",
                    "name_ar" => "صبيا"
                ],
                [
                    "id" => 38,
                    "country_id" => 1,
                    "external_id" => 880152961,
                    "name_en" => "Ahad Rafidah",
                    "name_ar" => "أحد رفيدة"
                ],
                [
                    "id" => 39,
                    "country_id" => 1,
                    "external_id" => 106115202,
                    "name_en" => "Al Furaysh",
                    "name_ar" => "الفريش"
                ],
                [
                    "id" => 40,
                    "country_id" => 1,
                    "external_id" => 1345871747,
                    "name_en" => "Al Duwadimi",
                    "name_ar" => "الدوادمي"
                ],
                [
                    "id" => 41,
                    "country_id" => 1,
                    "external_id" => 570785420,
                    "name_en" => "Bariq",
                    "name_ar" => "بارق"
                ],
                [
                    "id" => 42,
                    "country_id" => 1,
                    "external_id" => 2145623437,
                    "name_en" => "Howtat Bani Tamim",
                    "name_ar" => "الحوطة"
                ],
                [
                    "id" => 43,
                    "country_id" => 1,
                    "external_id" => 1237892238,
                    "name_en" => "Alhada",
                    "name_ar" => "الهدا"
                ],
                [
                    "id" => 44,
                    "country_id" => 1,
                    "external_id" => 462805903,
                    "name_en" => "Buraydah",
                    "name_ar" => "بريدة"
                ],
                [
                    "id" => 45,
                    "country_id" => 1,
                    "external_id" => 1970469512,
                    "name_en" => "Al Mithnab",
                    "name_ar" => "المذنب"
                ],
                [
                    "id" => 46,
                    "country_id" => 1,
                    "external_id" => 1197414793,
                    "name_en" => "Al Bukayriyah",
                    "name_ar" => "البكيرية"
                ],
                [
                    "id" => 47,
                    "country_id" => 1,
                    "external_id" => 287586442,
                    "name_en" => "Al Badayea",
                    "name_ar" => "البدائع"
                ],
                [
                    "id" => 48,
                    "country_id" => 1,
                    "external_id" => 1661028235,
                    "name_en" => "Al Hufuf and Al Mubarraz",
                    "name_ar" => "الهفوف والمبرز"
                ],
                [
                    "id" => 49,
                    "country_id" => 1,
                    "external_id" => 1022256788,
                    "name_en" => "An Nabhaniyah",
                    "name_ar" => "النبهانية"
                ],
                [
                    "id" => 50,
                    "country_id" => 1,
                    "external_id" => 246711701,
                    "name_en" => "Riyadh Al Khabra",
                    "name_ar" => "رياض الخبراء"
                ],
                [
                    "id" => 51,
                    "country_id" => 1,
                    "external_id" => 1485939862,
                    "name_en" => "Ash Shimasiyah",
                    "name_ar" => "الشماسية"
                ],
                [
                    "id" => 52,
                    "country_id" => 1,
                    "external_id" => 712950679,
                    "name_en" => "Al Ghat",
                    "name_ar" => "الغاط"
                ],
                [
                    "id" => 53,
                    "country_id" => 1,
                    "external_id" => 73130640,
                    "name_en" => "Uyun Al Jawa",
                    "name_ar" => "عيون الجواء"
                ],
                [
                    "id" => 54,
                    "country_id" => 1,
                    "external_id" => 1444938129,
                    "name_en" => "Sarat Abidah",
                    "name_ar" => "سراة عبيدة"
                ],
                [
                    "id" => 55,
                    "country_id" => 1,
                    "external_id" => 537731218,
                    "name_en" => "Al Majmaah",
                    "name_ar" => "المجمعة"
                ],
                [
                    "id" => 56,
                    "country_id" => 1,
                    "external_id" => 2112507795,
                    "name_en" => "Afif",
                    "name_ar" => "عفيف"
                ],
                [
                    "id" => 57,
                    "country_id" => 1,
                    "external_id" => 1337421468,
                    "name_en" => "DIRIYAH",
                    "name_ar" => "الدرعية"
                ],
                [
                    "id" => 58,
                    "country_id" => 1,
                    "external_id" => 429755805,
                    "name_en" => "Shaqra",
                    "name_ar" => "شقراء"
                ],
                [
                    "id" => 59,
                    "country_id" => 1,
                    "external_id" => 1803201694,
                    "name_en" => "Howtat Bani Tamim",
                    "name_ar" => "حوطة بني تميم"
                ],
                [
                    "id" => 60,
                    "country_id" => 1,
                    "external_id" => 1162333087,
                    "name_en" => "Dhurma",
                    "name_ar" => "ضرما"
                ],
                [
                    "id" => 61,
                    "country_id" => 1,
                    "external_id" => 388819608,
                    "name_en" => "Huraymila",
                    "name_ar" => "حريملاء"
                ],
                [
                    "id" => 62,
                    "country_id" => 1,
                    "external_id" => 1627982233,
                    "name_en" => "Al Sulaiyl (Wadi al-Dawasir)",
                    "name_ar" => "السليل (وادي الدواسر)"
                ],
                [
                    "id" => 63,
                    "country_id" => 1,
                    "external_id" => 852895898,
                    "name_en" => "Al Muzahimiyah",
                    "name_ar" => "المزاحمية"
                ],
                [
                    "id" => 64,
                    "country_id" => 1,
                    "external_id" => 213071771,
                    "name_en" => "Rabigh",
                    "name_ar" => "رابغ"
                ],
                [
                    "id" => 65,
                    "country_id" => 1,
                    "external_id" => 1587042020,
                    "name_en" => "Thuwal",
                    "name_ar" => "ثول"
                ],
                [
                    "id" => 66,
                    "country_id" => 1,
                    "external_id" => 677737957,
                    "name_en" => "Al Qunfudhah",
                    "name_ar" => "القنفذة"
                ],
                [
                    "id" => 67,
                    "country_id" => 1,
                    "external_id" => 2051249382,
                    "name_en" => "Al Ula",
                    "name_ar" => "العلا"
                ],
                [
                    "id" => 68,
                    "country_id" => 1,
                    "external_id" => 1411953639,
                    "name_en" => "Abha",
                    "name_ar" => "ابها"
                ],
                [
                    "id" => 69,
                    "country_id" => 1,
                    "external_id" => 569758432,
                    "name_en" => "Al Lith",
                    "name_ar" => "الليث"
                ],
                [
                    "id" => 70,
                    "country_id" => 1,
                    "external_id" => 1943204321,
                    "name_en" => "Al Namas",
                    "name_ar" => "النماص"
                ],
                [
                    "id" => 71,
                    "country_id" => 1,
                    "external_id" => 1304367330,
                    "name_en" => "Baljurashi",
                    "name_ar" => "بلجرشي"
                ],
                [
                    "id" => 72,
                    "country_id" => 1,
                    "external_id" => 528760803,
                    "name_en" => "Al Makhwah",
                    "name_ar" => "المخواة"
                ],
                [
                    "id" => 73,
                    "country_id" => 1,
                    "external_id" => 1767988972,
                    "name_en" => "Turbah",
                    "name_ar" => "تربة"
                ],
                [
                    "id" => 74,
                    "country_id" => 1,
                    "external_id" => 994999789,
                    "name_en" => "Abu Arish",
                    "name_ar" => "ابو عريش"
                ],
                [
                    "id" => 75,
                    "country_id" => 1,
                    "external_id" => 353672430,
                    "name_en" => "Arish",
                    "name_ar" => "العريش"
                ],
                [
                    "id" => 76,
                    "country_id" => 1,
                    "external_id" => 1727118319,
                    "name_en" => "Khafji",
                    "name_ar" => "الخفجي"
                ],
                [
                    "id" => 77,
                    "country_id" => 1,
                    "external_id" => 819911400,
                    "name_en" => "Al Khurma",
                    "name_ar" => "الخرمة"
                ],
                [
                    "id" => 78,
                    "country_id" => 1,
                    "external_id" => 45873641,
                    "name_en" => "Hail",
                    "name_ar" => "حائل"
                ],
                [
                    "id" => 79,
                    "country_id" => 1,
                    "external_id" => 1551898858,
                    "name_en" => "Khurais",
                    "name_ar" => "خريص"
                ],
                [
                    "id" => 80,
                    "country_id" => 1,
                    "external_id" => 778905579,
                    "name_en" => "Umluj",
                    "name_ar" => "املج"
                ],
                [
                    "id" => 81,
                    "country_id" => 1,
                    "external_id" => 2018133748,
                    "name_en" => "Badr",
                    "name_ar" => "بدر"
                ],
                [
                    "id" => 82,
                    "country_id" => 1,
                    "external_id" => 1243047413,
                    "name_en" => "Dumah Al Jandal",
                    "name_ar" => "دومة الجندل"
                ],
                [
                    "id" => 83,
                    "country_id" => 1,
                    "external_id" => 670926070,
                    "name_en" => "Layla",
                    "name_ar" => "ليلى"
                ],
                [
                    "id" => 84,
                    "country_id" => 1,
                    "external_id" => 1135067888,
                    "name_en" => "Al Jumum",
                    "name_ar" => "الجموم"
                ],
                [
                    "id" => 85,
                    "country_id" => 1,
                    "external_id" => 495772145,
                    "name_en" => "Almandaq",
                    "name_ar" => "المندق"
                ],
                [
                    "id" => 86,
                    "country_id" => 1,
                    "external_id" => 1869152498,
                    "name_en" => "Khulais",
                    "name_ar" => "خليص"
                ],
                [
                    "id" => 87,
                    "country_id" => 1,
                    "external_id" => 959852531,
                    "name_en" => "Khaybar",
                    "name_ar" => "خيبر"
                ],
                [
                    "id" => 88,
                    "country_id" => 1,
                    "external_id" => 185814780,
                    "name_en" => "Ras Tanura",
                    "name_ar" => "رأس تنورة"
                ],
                [
                    "id" => 89,
                    "country_id" => 1,
                    "external_id" => 1694002685,
                    "name_en" => "Samtah",
                    "name_ar" => "صامطة"
                ],
                [
                    "id" => 90,
                    "country_id" => 1,
                    "external_id" => 918981886,
                    "name_en" => "Rijal Almaa",
                    "name_ar" => "رجال المع"
                ],
                [
                    "id" => 91,
                    "country_id" => 1,
                    "external_id" => 10726399,
                    "name_en" => "Ranyah",
                    "name_ar" => "رنية"
                ],
                [
                    "id" => 92,
                    "country_id" => 1,
                    "external_id" => 1384696568,
                    "name_en" => "Dhahran Al Janub",
                    "name_ar" => "ظهران الجنوب"
                ],
                [
                    "id" => 93,
                    "country_id" => 1,
                    "external_id" => 743827961,
                    "name_en" => "Mahd Al Thahab",
                    "name_ar" => "مهد الذهب"
                ],
                [
                    "id" => 94,
                    "country_id" => 1,
                    "external_id" => 2117208314,
                    "name_en" => "Farasan Island",
                    "name_ar" => "جزيرة فرسان"
                ],
                [
                    "id" => 95,
                    "country_id" => 1,
                    "external_id" => 1209997307,
                    "name_en" => "Ad Dilam",
                    "name_ar" => "الدلم"
                ],
                [
                    "id" => 96,
                    "country_id" => 1,
                    "external_id" => 635713220,
                    "name_en" => "Safwa",
                    "name_ar" => "صفوى"
                ],
                [
                    "id" => 97,
                    "country_id" => 1,
                    "external_id" => 2009159109,
                    "name_en" => "Al-Badie Al-Shamali",
                    "name_ar" => "البديع الشمالي"
                ],
                [
                    "id" => 98,
                    "country_id" => 1,
                    "external_id" => 1101952198,
                    "name_en" => "Al-Badie Al-Janobi",
                    "name_ar" => "البديع الجنوبي"
                ],
                [
                    "id" => 99,
                    "country_id" => 1,
                    "external_id" => 326407111,
                    "name_en" => "Al Haddar",
                    "name_ar" => "الهدار"
                ],
                [
                    "id" => 100,
                    "country_id" => 1,
                    "external_id" => 1834070720,
                    "name_en" => "Al Artawiyah",
                    "name_ar" => "الأرطاوية"
                ],
                [
                    "id" => 101,
                    "country_id" => 1,
                    "external_id" => 1061081537,
                    "name_en" => "Al Haeer",
                    "name_ar" => "الحاير"
                ],
                [
                    "id" => 102,
                    "country_id" => 1,
                    "external_id" => 152826050,
                    "name_en" => "Al Hariq",
                    "name_ar" => "الحريق"
                ],
                [
                    "id" => 103,
                    "country_id" => 1,
                    "external_id" => 1524637635,
                    "name_en" => "Al Quwaiiyah",
                    "name_ar" => "القويعية"
                ],
                [
                    "id" => 104,
                    "country_id" => 1,
                    "external_id" => 885866188,
                    "name_en" => "Al Hayathem",
                    "name_ar" => "الهياثم"
                ],
                [
                    "id" => 105,
                    "country_id" => 1,
                    "external_id" => 111828429,
                    "name_en" => "Tumair",
                    "name_ar" => "تمير"
                ],
                [
                    "id" => 106,
                    "country_id" => 1,
                    "external_id" => 1350008014,
                    "name_en" => "Thadiq",
                    "name_ar" => "ثادق"
                ],
                [
                    "id" => 107,
                    "country_id" => 1,
                    "external_id" => 576560079,
                    "name_en" => "Hautat Sudair",
                    "name_ar" => "حوطة سدير"
                ],
                [
                    "id" => 108,
                    "country_id" => 1,
                    "external_id" => 2084223688,
                    "name_en" => "Rumah",
                    "name_ar" => "رماح"
                ],
                [
                    "id" => 109,
                    "country_id" => 1,
                    "external_id" => 1309137353,
                    "name_en" => "Sajir",
                    "name_ar" => "ساجر"
                ],
                [
                    "id" => 110,
                    "country_id" => 1,
                    "external_id" => 468515018,
                    "name_en" => "Marat",
                    "name_ar" => "مرات"
                ],
                [
                    "id" => 111,
                    "country_id" => 1,
                    "external_id" => 1976109003,
                    "name_en" => "Al Aqiq",
                    "name_ar" => "العقيق"
                ],
                [
                    "id" => 112,
                    "country_id" => 1,
                    "external_id" => 292767189,
                    "name_en" => "Qilwah",
                    "name_ar" => "قلوة"
                ],
                [
                    "id" => 113,
                    "country_id" => 1,
                    "external_id" => 1666737366,
                    "name_en" => "Suwayr",
                    "name_ar" => "صوير"
                ],
                [
                    "id" => 114,
                    "country_id" => 1,
                    "external_id" => 1025934295,
                    "name_en" => "Tubarjal",
                    "name_ar" => "طبرجل"
                ],
                [
                    "id" => 115,
                    "country_id" => 1,
                    "external_id" => 251896528,
                    "name_en" => "Al Uwayqilah",
                    "name_ar" => "العويقيلة"
                ],
                [
                    "id" => 116,
                    "country_id" => 1,
                    "external_id" => 1491648977,
                    "name_en" => "Rafha",
                    "name_ar" => "رفحاء"
                ],
                [
                    "id" => 117,
                    "country_id" => 1,
                    "external_id" => 716562642,
                    "name_en" => "Turaif",
                    "name_ar" => "طريف"
                ],
                [
                    "id" => 118,
                    "country_id" => 1,
                    "external_id" => 76681171,
                    "name_en" => "Al Khabra",
                    "name_ar" => "الخبراء"
                ],
                [
                    "id" => 119,
                    "country_id" => 1,
                    "external_id" => 1451175644,
                    "name_en" => "Al Thamad",
                    "name_ar" => "الثمد"
                ],
                [
                    "id" => 120,
                    "country_id" => 1,
                    "external_id" => 541347293,
                    "name_en" => "Al Henakiyah",
                    "name_ar" => "الحناكية"
                ],
                [
                    "id" => 121,
                    "country_id" => 1,
                    "external_id" => 1914793182,
                    "name_en" => "Al Ais",
                    "name_ar" => "العيص"
                ],
                [
                    "id" => 122,
                    "country_id" => 1,
                    "external_id" => 1276087263,
                    "name_en" => "Al Mahfar",
                    "name_ar" => "المحفر"
                ],
                [
                    "id" => 123,
                    "country_id" => 1,
                    "external_id" => 433367768,
                    "name_en" => "Al Batha",
                    "name_ar" => "البطحاء"
                ],
                [
                    "id" => 124,
                    "country_id" => 1,
                    "external_id" => 1806813657,
                    "name_en" => "Buqayq",
                    "name_ar" => "بقيق"
                ],
                [
                    "id" => 125,
                    "country_id" => 1,
                    "external_id" => 1168042202,
                    "name_en" => "Al Wajh",
                    "name_ar" => "الوجه"
                ],
                [
                    "id" => 126,
                    "country_id" => 1,
                    "external_id" => 1631589924,
                    "name_en" => "Haql",
                    "name_ar" => "حقل"
                ],
                [
                    "id" => 127,
                    "country_id" => 1,
                    "external_id" => 858600741,
                    "name_en" => "Alsilaa",
                    "name_ar" => "ابو السلع"
                ],
                [
                    "id" => 128,
                    "country_id" => 1,
                    "external_id" => 218780710,
                    "name_en" => "Ahad Al Masarihah",
                    "name_ar" => "احد المسارحة"
                ],
                [
                    "id" => 129,
                    "country_id" => 1,
                    "external_id" => 1591178023,
                    "name_en" => "Al Badi & Al Qarafi",
                    "name_ar" => "البديع والقرفي"
                ],
                [
                    "id" => 130,
                    "country_id" => 1,
                    "external_id" => 683512352,
                    "name_en" => "Al Jaradiyah",
                    "name_ar" => "الجرادية"
                ],
                [
                    "id" => 131,
                    "country_id" => 1,
                    "external_id" => 2056958241,
                    "name_en" => "Al Husayni",
                    "name_ar" => "الحسيني"
                ],
                [
                    "id" => 132,
                    "country_id" => 1,
                    "external_id" => 1416089634,
                    "name_en" => "Addayer",
                    "name_ar" => "الداير"
                ],
                [
                    "id" => 133,
                    "country_id" => 1,
                    "external_id" => 642580259,
                    "name_en" => "Ad Darb",
                    "name_ar" => "الدرب"
                ],
                [
                    "id" => 134,
                    "country_id" => 1,
                    "external_id" => 1881742892,
                    "name_en" => "Alshuqayri",
                    "name_ar" => "الشقيري"
                ],
                [
                    "id" => 135,
                    "country_id" => 1,
                    "external_id" => 1307983149,
                    "name_en" => "Al Tuwal",
                    "name_ar" => "الطوال"
                ],
                [
                    "id" => 136,
                    "country_id" => 1,
                    "external_id" => 533945390,
                    "name_en" => "Al Madaya",
                    "name_ar" => "المضايا"
                ],
                [
                    "id" => 137,
                    "country_id" => 1,
                    "external_id" => 1773697839,
                    "name_en" => "Al-Matan",
                    "name_ar" => "المطعن"
                ],
                [
                    "id" => 138,
                    "country_id" => 1,
                    "external_id" => 998677032,
                    "name_en" => "Baish",
                    "name_ar" => "بيش"
                ],
                [
                    "id" => 139,
                    "country_id" => 1,
                    "external_id" => 358857001,
                    "name_en" => "Damad",
                    "name_ar" => "ضمد"
                ],
                [
                    "id" => 140,
                    "country_id" => 1,
                    "external_id" => 1732827178,
                    "name_en" => "Mizhirah",
                    "name_ar" => "مزهرة"
                ],
                [
                    "id" => 141,
                    "country_id" => 1,
                    "external_id" => 823519019,
                    "name_en" => "Masliyah",
                    "name_ar" => "مسلية"
                ],
                [
                    "id" => 142,
                    "country_id" => 1,
                    "external_id" => 49415732,
                    "name_en" => "Al Hait",
                    "name_ar" => "الحائط"
                ],
                [
                    "id" => 143,
                    "country_id" => 1,
                    "external_id" => 1558127925,
                    "name_en" => "Ash Shinan",
                    "name_ar" => "الشنان"
                ],
                [
                    "id" => 144,
                    "country_id" => 1,
                    "external_id" => 782517302,
                    "name_en" => "Al-Iṯnayn",
                    "name_ar" => "الاثنين"
                ],
                [
                    "id" => 145,
                    "country_id" => 1,
                    "external_id" => 2021745463,
                    "name_en" => "Almajaridah",
                    "name_ar" => "المجاردة"
                ],
                [
                    "id" => 146,
                    "country_id" => 1,
                    "external_id" => 1248821808,
                    "name_en" => "Tathleeth",
                    "name_ar" => "تثليث"
                ],
                [
                    "id" => 147,
                    "country_id" => 1,
                    "external_id" => 607428913,
                    "name_en" => "Tanomah",
                    "name_ar" => "تنومة (عسير)"
                ],
                [
                    "id" => 148,
                    "country_id" => 1,
                    "external_id" => 1980874802,
                    "name_en" => "Tereeb",
                    "name_ar" => "طريب"
                ],
                [
                    "id" => 149,
                    "country_id" => 1,
                    "external_id" => 1140780851,
                    "name_en" => "Muhayil",
                    "name_ar" => "محايل عسير"
                ],
                [
                    "id" => 150,
                    "country_id" => 1,
                    "external_id" => 500895292,
                    "name_en" => "AlQouz",
                    "name_ar" => "القوز"
                ],
                [
                    "id" => 151,
                    "country_id" => 1,
                    "external_id" => 1872768317,
                    "name_en" => "Ashayrah",
                    "name_ar" => "عشيرة"
                ],
                [
                    "id" => 152,
                    "country_id" => 1,
                    "external_id" => 965561406,
                    "name_en" => "Mastorah",
                    "name_ar" => "مستورة"
                ],
                [
                    "id" => 153,
                    "country_id" => 1,
                    "external_id" => 191523647,
                    "name_en" => "Al Mishaliah",
                    "name_ar" => "المشعلية"
                ],
                [
                    "id" => 154,
                    "country_id" => 1,
                    "external_id" => 1697679928,
                    "name_en" => "Hubuna",
                    "name_ar" => "حبونا"
                ],
                [
                    "id" => 155,
                    "country_id" => 1,
                    "external_id" => 924690745,
                    "name_en" => "Anak",
                    "name_ar" => "عنك"
                ],
                [
                    "id" => 156,
                    "country_id" => 1,
                    "external_id" => 16435258,
                    "name_en" => "Nairyah",
                    "name_ar" => "النعيرية"
                ],
                [
                    "id" => 157,
                    "country_id" => 1,
                    "external_id" => 1388828475,
                    "name_en" => "Bahrah",
                    "name_ar" => "بحره"
                ],
                [
                    "id" => 158,
                    "country_id" => 1,
                    "external_id" => 749532676,
                    "name_en" => "Wadi Ibn Hashbal",
                    "name_ar" => "وادي ابن هشبل"
                ],
                [
                    "id" => 159,
                    "country_id" => 1,
                    "external_id" => 2122913029,
                    "name_en" => "Khaiber Al-Janoub",
                    "name_ar" => "خيبر الجنوب"
                ],
                [
                    "id" => 160,
                    "country_id" => 1,
                    "external_id" => 1947759104,
                    "name_en" => "Al Madha",
                    "name_ar" => "المضة"
                ],
                [
                    "id" => 161,
                    "country_id" => 1,
                    "external_id" => 1105629441,
                    "name_en" => "Sabt Alalayah",
                    "name_ar" => "سبت العلاية"
                ],
                [
                    "id" => 162,
                    "country_id" => 1,
                    "external_id" => 1839783683,
                    "name_en" => "Duhknah",
                    "name_ar" => "دخنة"
                ],
                [
                    "id" => 163,
                    "country_id" => 1,
                    "external_id" => 1064697356,
                    "name_en" => "Shuwaq",
                    "name_ar" => "شواق"
                ],
                [
                    "id" => 164,
                    "country_id" => 1,
                    "external_id" => 156376333,
                    "name_en" => "Madain Saleh",
                    "name_ar" => "مدائن صالح"
                ],
                [
                    "id" => 165,
                    "country_id" => 1,
                    "external_id" => 1530870798,
                    "name_en" => "Fadhla",
                    "name_ar" => "فضلا"
                ],
                [
                    "id" => 166,
                    "country_id" => 1,
                    "external_id" => 889477903,
                    "name_en" => "Hazem Aljalamid",
                    "name_ar" => "حزم الجلاميد"
                ],
                [
                    "id" => 167,
                    "country_id" => 1,
                    "external_id" => 115440136,
                    "name_en" => "Meegowa",
                    "name_ar" => "ميقوع"
                ],
                [
                    "id" => 168,
                    "country_id" => 1,
                    "external_id" => 1355782409,
                    "name_en" => "Ar Rayis",
                    "name_ar" => "الرايس"
                ],
                [
                    "id" => 169,
                    "country_id" => 1,
                    "external_id" => 580171786,
                    "name_en" => "Abyar 'Ali",
                    "name_ar" => "أبيار علي"
                ],
                [
                    "id" => 170,
                    "country_id" => 1,
                    "external_id" => 2087831307,
                    "name_en" => "New Muwayh",
                    "name_ar" => "المويه الجديدة"
                ],
                [
                    "id" => 171,
                    "country_id" => 1,
                    "external_id" => 1314842132,
                    "name_en" => "Yadamah",
                    "name_ar" => "يدمة"
                ],
                [
                    "id" => 172,
                    "country_id" => 1,
                    "external_id" => 406521109,
                    "name_en" => "Al Wadiah",
                    "name_ar" => "الوديعة"
                ],
                [
                    "id" => 173,
                    "country_id" => 1,
                    "external_id" => 1778394134,
                    "name_en" => "Umm Al Melh",
                    "name_ar" => "أم الملح"
                ],
                [
                    "id" => 174,
                    "country_id" => 1,
                    "external_id" => 1206731543,
                    "name_en" => "Al Kharkhir",
                    "name_ar" => "الخرخير"
                ],
                [
                    "id" => 175,
                    "country_id" => 1,
                    "external_id" => 298476048,
                    "name_en" => "Thabhloten",
                    "name_ar" => "ذعبلوتن"
                ],
                [
                    "id" => 176,
                    "country_id" => 1,
                    "external_id" => 1670414609,
                    "name_en" => "Ash Shalfa",
                    "name_ar" => "الشلفا"
                ],
                [
                    "id" => 177,
                    "country_id" => 1,
                    "external_id" => 1031643154,
                    "name_en" => "Ar Rayn",
                    "name_ar" => "الرين"
                ],
                [
                    "id" => 178,
                    "country_id" => 1,
                    "external_id" => 257609491,
                    "name_en" => "Ar Ruwaidhah",
                    "name_ar" => "الرويضة"
                ],
                [
                    "id" => 179,
                    "country_id" => 1,
                    "external_id" => 1495789084,
                    "name_en" => "Uglat Asugour",
                    "name_ar" => "عقلة الصقور"
                ],
                [
                    "id" => 180,
                    "country_id" => 1,
                    "external_id" => 722210077,
                    "name_en" => "Al Qaisumah",
                    "name_ar" => "القيصومة"
                ],
                [
                    "id" => 181,
                    "country_id" => 1,
                    "external_id" => 82390046,
                    "name_en" => "Kouba",
                    "name_ar" => "قبه"
                ],
                [
                    "id" => 182,
                    "country_id" => 1,
                    "external_id" => 1454787359,
                    "name_en" => "Linah",
                    "name_ar" => "لينه"
                ],
                [
                    "id" => 183,
                    "country_id" => 1,
                    "external_id" => 546531864,
                    "name_en" => "Baqaa",
                    "name_ar" => "بقعاء"
                ],
                [
                    "id" => 184,
                    "country_id" => 1,
                    "external_id" => 1920567577,
                    "name_en" => "Al Qaid",
                    "name_ar" => "القاعد"
                ],
                [
                    "id" => 185,
                    "country_id" => 1,
                    "external_id" => 1279698970,
                    "name_en" => "Al Ghazalah",
                    "name_ar" => "الغزالة"
                ],
                [
                    "id" => 186,
                    "country_id" => 1,
                    "external_id" => 505657115,
                    "name_en" => "Asbtar",
                    "name_ar" => "أسبطر"
                ],
                [
                    "id" => 187,
                    "country_id" => 1,
                    "external_id" => 1745409636,
                    "name_en" => "As Shamli",
                    "name_ar" => "الشملي"
                ],
                [
                    "id" => 188,
                    "country_id" => 1,
                    "external_id" => 1171649893,
                    "name_en" => "Al Hulayfah As Sufla",
                    "name_ar" => "الحليفة السفلى"
                ],
                [
                    "id" => 189,
                    "country_id" => 1,
                    "external_id" => 397546598,
                    "name_en" => "`Ushash",
                    "name_ar" => "العشاش"
                ],
                [
                    "id" => 190,
                    "country_id" => 1,
                    "external_id" => 1637823335,
                    "name_en" => "King Abdullah Economic City",
                    "name_ar" => "مدينة الملك عبدالله الاقتصادية"
                ],
                [
                    "id" => 191,
                    "country_id" => 1,
                    "external_id" => 862212704,
                    "name_en" => "Dhahban",
                    "name_ar" => "ذهبان"
                ],
                [
                    "id" => 192,
                    "country_id" => 1,
                    "external_id" => 222392673,
                    "name_en" => "Ayn Qahtan",
                    "name_ar" => "عين قحطان"
                ],
                [
                    "id" => 193,
                    "country_id" => 1,
                    "external_id" => 1596952674,
                    "name_en" => "Fayfa",
                    "name_ar" => "فيفاء"
                ],
                [
                    "id" => 194,
                    "country_id" => 1,
                    "external_id" => 687128419,
                    "name_en" => "As Sa'diyah",
                    "name_ar" => "السعدية"
                ],
                [
                    "id" => 195,
                    "country_id" => 1,
                    "external_id" => 2060574316,
                    "name_en" => "Al Subaykhah",
                    "name_ar" => "الصبيخة"
                ],
                [
                    "id" => 196,
                    "country_id" => 1,
                    "external_id" => 1421802861,
                    "name_en" => "Al Marameh",
                    "name_ar" => "المرامية"
                ],
                [
                    "id" => 197,
                    "country_id" => 1,
                    "external_id" => 647699566,
                    "name_en" => "Ras Al Khair",
                    "name_ar" => "رأس الخير"
                ],
                [
                    "id" => 198,
                    "country_id" => 1,
                    "external_id" => 1885354863,
                    "name_en" => "Salwa",
                    "name_ar" => "سلوى"
                ],
                [
                    "id" => 199,
                    "country_id" => 1,
                    "external_id" => 1112365672,
                    "name_en" => "Ash Shihyah",
                    "name_ar" => "الشيحية"
                ],
                [
                    "id" => 200,
                    "country_id" => 1,
                    "external_id" => 472545641,
                    "name_en" => "Rvaya Aljamsh",
                    "name_ar" => "رفائع الجمش"
                ],
                [
                    "id" => 201,
                    "country_id" => 1,
                    "external_id" => 1777375338,
                    "name_en" => "Jalajil",
                    "name_ar" => "جلاجل"
                ],
                [
                    "id" => 202,
                    "country_id" => 1,
                    "external_id" => 1004382059,
                    "name_en" => "Qaryat Al Ulya",
                    "name_ar" => "قرية العليا"
                ],
                [
                    "id" => 203,
                    "country_id" => 1,
                    "external_id" => 1736959349,
                    "name_en" => "Ushairat Sudair",
                    "name_ar" => "عشيرة سدير"
                ],
                [
                    "id" => 204,
                    "country_id" => 1,
                    "external_id" => 829162614,
                    "name_en" => "Audat Sudair",
                    "name_ar" => "عودة سدير"
                ],
                [
                    "id" => 205,
                    "country_id" => 1,
                    "external_id" => 55124855,
                    "name_en" => "Raudat Sudair",
                    "name_ar" => "روضة سدير"
                ],
                [
                    "id" => 206,
                    "country_id" => 1,
                    "external_id" => 1561739888,
                    "name_en" => "Salbukh",
                    "name_ar" => "صلبوخ"
                ],
                [
                    "id" => 207,
                    "country_id" => 1,
                    "external_id" => 2027520114,
                    "name_en" => "Ath Thybiyah",
                    "name_ar" => "الذيبية"
                ],
                [
                    "id" => 208,
                    "country_id" => 1,
                    "external_id" => 1252437875,
                    "name_en" => "Al Oyun",
                    "name_ar" => "العيون (الهفوف)"
                ],
                [
                    "id" => 209,
                    "country_id" => 1,
                    "external_id" => 612617852,
                    "name_en" => "Al Wozeyh",
                    "name_ar" => "الوزية"
                ],
                [
                    "id" => 210,
                    "country_id" => 1,
                    "external_id" => 1986588029,
                    "name_en" => "Juatha",
                    "name_ar" => "جواثا"
                ],
                [
                    "id" => 211,
                    "country_id" => 1,
                    "external_id" => 1077218430,
                    "name_en" => "Al Umran",
                    "name_ar" => "العمران"
                ],
                [
                    "id" => 212,
                    "country_id" => 1,
                    "external_id" => 303180671,
                    "name_en" => "Julayjilah",
                    "name_ar" => "جليجلة"
                ],
                [
                    "id" => 213,
                    "country_id" => 1,
                    "external_id" => 1879001720,
                    "name_en" => "Al Taraf",
                    "name_ar" => "الطرف"
                ],
                [
                    "id" => 214,
                    "country_id" => 1,
                    "external_id" => 969173369,
                    "name_en" => "Al Jafr",
                    "name_ar" => "الجفر"
                ],
                [
                    "id" => 215,
                    "country_id" => 1,
                    "external_id" => 195201146,
                    "name_en" => "Udhailiyah",
                    "name_ar" => "العضيلية"
                ],
                [
                    "id" => 216,
                    "country_id" => 1,
                    "external_id" => 1703909243,
                    "name_en" => "Al Bijadyah",
                    "name_ar" => "البجادية"
                ],
                [
                    "id" => 217,
                    "country_id" => 1,
                    "external_id" => 928298564,
                    "name_en" => "Khaw'a",
                    "name_ar" => "خوعاء"
                ],
                [
                    "id" => 218,
                    "country_id" => 1,
                    "external_id" => 20043077,
                    "name_en" => "Azfaa",
                    "name_ar" => "عذفاء"
                ],
                [
                    "id" => 219,
                    "country_id" => 1,
                    "external_id" => 1394537542,
                    "name_en" => "Zalom",
                    "name_ar" => "زلوم"
                ],
                [
                    "id" => 220,
                    "country_id" => 1,
                    "external_id" => 754651975,
                    "name_en" => "Ar Rafi'ah",
                    "name_ar" => "الرفيعة"
                ],
                [
                    "id" => 221,
                    "country_id" => 1,
                    "external_id" => 2126524992,
                    "name_en" => "Hedeb",
                    "name_ar" => "هديب"
                ],
                [
                    "id" => 222,
                    "country_id" => 1,
                    "external_id" => 1219318081,
                    "name_en" => "Al Jesh",
                    "name_ar" => "الجش"
                ],
                [
                    "id" => 223,
                    "country_id" => 1,
                    "external_id" => 445280322,
                    "name_en" => "Al Shuqaiq",
                    "name_ar" => "الشقيق"
                ],
                [
                    "id" => 224,
                    "country_id" => 1,
                    "external_id" => 1951440707,
                    "name_en" => "Al Awamiyah",
                    "name_ar" => "العوامية"
                ],
                [
                    "id" => 225,
                    "country_id" => 1,
                    "external_id" => 1178451532,
                    "name_en" => "King Khalid Military City",
                    "name_ar" => "مدينة الملك خالد العسكرية"
                ],
                [
                    'id' => 226,
                    'country_id' => 1,
                    'external_id' => '1077218430',
                    'name_en' => 'Al Umran',
                    'name_ar' => 'العمران'
                ],
                [
                    'id' => 227,
                    'country_id' => 1,
                    'external_id' => '303180671',
                    'name_en' => 'Julayjilah',
                    'name_ar' => 'جليجلة'
                ],
                [
                    'id' => 228,
                    'country_id' => 1,
                    'external_id' => '1879001720',
                    'name_en' => 'Al Taraf',
                    'name_ar' => 'الطرف'
                ],
                [
                    'id' => 229,
                    'country_id' => 1,
                    'external_id' => '969173369',
                    'name_en' => 'Al Jafr',
                    'name_ar' => 'الجفر'
                ],
                [
                    'id' => 230,
                    'country_id' => 1,
                    'external_id' => '195201146',
                    'name_en' => 'Udhailiyah',
                    'name_ar' => 'العضيلية'
                ],
                [
                    'id' => 231,
                    'country_id' => 1,
                    'external_id' => '1703909243',
                    'name_en' => 'Al Bijadyah',
                    'name_ar' => 'البجادية'
                ],
                [
                    'id' => 232,
                    'country_id' => 1,
                    'external_id' => '928298564',
                    'name_en' => 'Khaw\'a',
                    'name_ar' => 'خوعاء'
                ],
                [
                    'id' => 233,
                    'country_id' => 1,
                    'external_id' => '20043077',
                    'name_en' => 'Azfaa',
                    'name_ar' => 'عذفاء'
                ],
                [
                    'id' => 234,
                    'country_id' => 1,
                    'external_id' => '1394537542',
                    'name_en' => 'Zalom',
                    'name_ar' => 'زلوم'
                ],
                [
                    'id' => 235,
                    'country_id' => 1,
                    'external_id' => '754651975',
                    'name_en' => 'Ar Rafi\'ah',
                    'name_ar' => 'الرفيعة'
                ],
                [
                    'id' => 236,
                    'country_id' => 1,
                    'external_id' => '2126524992',
                    'name_en' => 'Hedeb',
                    'name_ar' => 'هديب'
                ],
                [
                    'id' => 237,
                    'country_id' => 1,
                    'external_id' => '1219318081',
                    'name_en' => 'Al Jesh',
                    'name_ar' => 'الجش'
                ],
                [
                    'id' => 238,
                    'country_id' => 1,
                    'external_id' => '445280322',
                    'name_en' => 'Al Shuqaiq',
                    'name_ar' => 'الشقيق'
                ],
                [
                    'id' => 239,
                    'country_id' => 1,
                    'external_id' => '1951440707',
                    'name_en' => 'Al Awamiyah',
                    'name_ar' => 'العوامية'
                ],
                [
                    'id' => 240,
                    'country_id' => 1,
                    'external_id' => '1178451532',
                    'name_en' => 'King Khalid Military City',
                    'name_ar' => 'مدينة الملك خالد العسكرية'
                ],
                [
                    'id' => 241,
                    'country_id' => 1,
                    'external_id' => '270196045',
                    'name_en' => 'Umm As Sahik',
                    'name_ar' => 'أم الساهك'
                ],
                [
                    'id' => 242,
                    'country_id' => 1,
                    'external_id' => '1843919950',
                    'name_en' => 'Al Ahmar',
                    'name_ar' => 'الأحمر'
                ],
                [
                    'id' => 243,
                    'country_id' => 1,
                    'external_id' => '1070340943',
                    'name_en' => 'Al Aridhah',
                    'name_ar' => 'العارضة'
                ],
                [
                    'id' => 244,
                    'country_id' => 1,
                    'external_id' => '162085448',
                    'name_en' => 'Al Hadithah',
                    'name_ar' => 'الحديثة'
                ],
                [
                    'id' => 245,
                    'country_id' => 1,
                    'external_id' => '1534482761',
                    'name_en' => 'Al Mubarakah',
                    'name_ar' => 'المباركة'
                ],
                [
                    'id' => 246,
                    'country_id' => 1,
                    'external_id' => '894662730',
                    'name_en' => 'Al Qasab',
                    'name_ar' => 'القصب'
                ],
                [
                    'id' => 247,
                    'country_id' => 1,
                    'external_id' => '121210699',
                    'name_en' => 'Al Uyaynah',
                    'name_ar' => 'العيينة'
                ],
                [
                    'id' => 248,
                    'country_id' => 1,
                    'external_id' => '1359390292',
                    'name_en' => 'Ayn Ibn Fuhayd',
                    'name_ar' => 'عين ابن فهيد'
                ],
                [
                    'id' => 249,
                    'country_id' => 1,
                    'external_id' => '585352533',
                    'name_en' => 'Ghtai',
                    'name_ar' => 'غطي'
                ],
                [
                    'id' => 250,
                    'country_id' => 1,
                    'external_id' => '2093540438',
                    'name_en' => 'Jazan Economic City',
                    'name_ar' => 'مدينة جازان الإقتصادية'
                ],
                [
                    'id' => 251,
                    'country_id' => 1,
                    'external_id' => '1318388567',
                    'name_en' => 'Mahalah',
                    'name_ar' => 'المحلة'
                ],
                [
                    'id' => 252,
                    'country_id' => 1,
                    'external_id' => '410133072',
                    'name_en' => 'Um Saad',
                    'name_ar' => 'ام سعد'
                ],
                [
                    'id' => 253,
                    'country_id' => 1,
                    'external_id' => '1784627537',
                    'name_en' => 'asfan',
                    'name_ar' => 'عسفان'
                ],
                [
                    'id' => 254,
                    'country_id' => 1,
                    'external_id' => '1143234642',
                    'name_en' => 'An Nabiyah',
                    'name_ar' => 'النابية'
                ],
                [
                    'id' => 255,
                    'country_id' => 1,
                    'external_id' => '369266515',
                    'name_en' => 'aljamieia',
                    'name_ar' => 'الجميعة'
                ],
                [
                    'id' => 256,
                    'country_id' => 1,
                    'external_id' => '1676652124',
                    'name_en' => 'alawjam',
                    'name_ar' => 'الأوجام'
                ],
                [
                    'id' => 257,
                    'country_id' => 1,
                    'external_id' => '1035259229',
                    'name_en' => 'ain dar',
                    'name_ar' => 'عين دار'
                ],
                [
                    'id' => 258,
                    'country_id' => 1,
                    'external_id' => '261221470',
                    'name_en' => 'aldighaimi',
                    'name_ar' => 'الدغيمي'
                ],
                [
                    'id' => 259,
                    'country_id' => 1,
                    'external_id' => '1501432671',
                    'name_en' => 'alshaffa',
                    'name_ar' => 'الشفا'
                ],
                [
                    'id' => 260,
                    'country_id' => 1,
                    'external_id' => '727394904',
                    'name_en' => 'alsayl alkabir',
                    'name_ar' => 'السيل الكبير'
                ],
                [
                    'id' => 261,
                    'country_id' => 1,
                    'external_id' => '86002009',
                    'name_en' => 'alsayl alsaghir',
                    'name_ar' => 'السيل الصغير'
                ],
                [
                    'id' => 262,
                    'country_id' => 1,
                    'external_id' => '552236891',
                    'name_en' => 'As Sarrar',
                    'name_ar' => 'الصرّار'
                ],
                [
                    'id' => 263,
                    'country_id' => 1,
                    'external_id' => '1924175268',
                    'name_en' => 'Adham',
                    'name_ar' => 'أضم'
                ],
                [
                    'id' => 264,
                    'country_id' => 1,
                    'external_id' => '1285403813',
                    'name_en' => 'Al Edabi',
                    'name_ar' => 'العيدابي'
                ],
                [
                    'id' => 265,
                    'country_id' => 1,
                    'external_id' => '511366054',
                    'name_en' => 'Namerah',
                    'name_ar' => 'نمرة'
                ],
                [
                    'id' => 266,
                    'country_id' => 1,
                    'external_id' => '1749545639',
                    'name_en' => 'Al Quwarah',
                    'name_ar' => 'القوارة'
                ],
                [
                    'id' => 267,
                    'country_id' => 1,
                    'external_id' => '975966624',
                    'name_en' => 'Dariyah',
                    'name_ar' => 'ضرية'
                ],
                [
                    'id' => 268,
                    'country_id' => 1,
                    'external_id' => '336146593',
                    'name_en' => 'Bir Ibn Hirmas',
                    'name_ar' => 'بئر بن هرماس'
                ],
                [
                    'id' => 269,
                    'country_id' => 1,
                    'external_id' => '1641439138',
                    'name_en' => 'Tanda',
                    'name_ar' => 'تندحة'
                ],
                [
                    'id' => 270,
                    'country_id' => 1,
                    'external_id' => '867401379',
                    'name_en' => 'Abyar Al Mashi',
                    'name_ar' => 'أبيار الماشي'
                ],
                [
                    'id' => 271,
                    'country_id' => 1,
                    'external_id' => '228171180',
                    'name_en' => 'ASYAH',
                    'name_ar' => 'الأسياح'
                ],
                [
                    'id' => 272,
                    'country_id' => 1,
                    'external_id' => '1600568493',
                    'name_en' => 'Al Dulaymiyah',
                    'name_ar' => 'الدليمية'
                ],
                [
                    'id' => 273,
                    'country_id' => 1,
                    'external_id' => '692313006',
                    'name_en' => 'As Samuriyah',
                    'name_ar' => 'الصمعورية'
                ],
                [
                    'id' => 274,
                    'country_id' => 1,
                    'external_id' => '2066283183',
                    'name_en' => 'DULAY RASHID',
                    'name_ar' => 'ضليع رشيد'
                ],
                [
                    'id' => 275,
                    'country_id' => 1,
                    'external_id' => '1425349032',
                    'name_en' => 'Al Khushaybi',
                    'name_ar' => 'الخشيبي'
                ],
                [
                    'id' => 276,
                    'country_id' => 1,
                    'external_id' => '651311273',
                    'name_en' => 'Al Juaima\'h',
                    'name_ar' => 'الجعيمة'
                ],
                [
                    'id' => 277,
                    'country_id' => 1,
                    'external_id' => '1891583914',
                    'name_en' => 'Mubhel',
                    'name_ar' => 'مبهل'
                ],
                [
                    'id' => 278,
                    'country_id' => 1,
                    'external_id' => '1115973291',
                    'name_en' => 'ALKHASIYBAH',
                    'name_ar' => 'الخصيبة'
                ],
                [
                    'id' => 279,
                    'country_id' => 1,
                    'external_id' => '476218804',
                    'name_en' => 'AL BASR',
                    'name_ar' => 'البصر'
                ],
                [
                    'id' => 280,
                    'country_id' => 1,
                    'external_id' => '1850713269',
                    'name_en' => 'AL MALIDA',
                    'name_ar' => 'المليداء'
                ],
                [
                    'id' => 281,
                    'country_id' => 1,
                    'external_id' => '940884918',
                    'name_en' => 'QADEIMAH',
                    'name_ar' => 'القضيمة'
                ],
                [
                    'id' => 282,
                    'country_id' => 1,
                    'external_id' => '368173751',
                    'name_en' => 'Hidaa',
                    'name_ar' => 'حداء'
                ],
                [
                    'id' => 283,
                    'country_id' => 1,
                    'external_id' => '1742602672',
                    'name_en' => 'ALSAMAD',
                    'name_ar' => 'الصمد'
                ],
                [
                    'id' => 284,
                    'country_id' => 1,
                    'external_id' => '834347185',
                    'name_en' => 'Al Mahabbah',
                    'name_ar' => 'المحمدية'
                ],
                [
                    'id' => 285,
                    'country_id' => 1,
                    'external_id' => '58740658',
                    'name_en' => 'Ash Shuara',
                    'name_ar' => 'الشعراء'
                ],
                [
                    'id' => 286,
                    'country_id' => 1,
                    'external_id' => '1567452851',
                    'name_en' => 'Ushaiqer',
                    'name_ar' => 'اشيقر'
                ],
                [
                    'id' => 287,
                    'country_id' => 1,
                    'external_id' => '2031135933',
                    'name_en' => 'Al Hufayr',
                    'name_ar' => 'الحفير'
                ],
                [
                    'id' => 288,
                    'country_id' => 1,
                    'external_id' => '1258146750',
                    'name_en' => 'Mawqaq',
                    'name_ar' => 'موقق'
                ],
                [
                    'id' => 289,
                    'country_id' => 1,
                    'external_id' => '618326719',
                    'name_en' => 'Jubbah',
                    'name_ar' => 'جبة'
                ],
                [
                    'id' => 290,
                    'country_id' => 1,
                    'external_id' => '1990658488',
                    'name_en' => 'Al Khitah',
                    'name_ar' => 'الخطة'
                ],
                [
                    'id' => 291,
                    'country_id' => 1,
                    'external_id' => '1082927289',
                    'name_en' => 'Hajrah',
                    'name_ar' => 'الحجرة'
                ],
                [
                    'id' => 292,
                    'country_id' => 1,
                    'external_id' => '308885434',
                    'name_en' => 'Al Aflaj',
                    'name_ar' => 'الأفلاج'
                ],
                [
                    'id' => 293,
                    'country_id' => 1,
                    'external_id' => '1815500475',
                    'name_en' => 'Al Atawilah',
                    'name_ar' => 'الأطاولة'
                ],
                [
                    'id' => 294,
                    'country_id' => 1,
                    'external_id' => '1041462660',
                    'name_en' => 'Al Qassim',
                    'name_ar' => 'القصيم'
                ],
                [
                    'id' => 295,
                    'country_id' => 1,
                    'external_id' => '200905861',
                    'name_en' => 'Al Mawain',
                    'name_ar' => 'الماوين'
                ],
                [
                    'id' => 296,
                    'country_id' => 1,
                    'external_id' => '1707520902',
                    'name_en' => 'Al-Abwa',
                    'name_ar' => 'الأبواء'
                ],
                [
                    'id' => 297,
                    'country_id' => 1,
                    'external_id' => '933483143',
                    'name_en' => 'Al Khutt',
                    'name_ar' => 'الكوت'
                ],
                [
                    'id' => 298,
                    'country_id' => 1,
                    'external_id' => '25751936',
                    'name_en' => 'Al Omran',
                    'name_ar' => 'العمران'
                ],
                [
                    'id' => 299,
                    'country_id' => 1,
                    'external_id' => '1398083713',
                    'name_en' => 'Az Zaimah',
                    'name_ar' => 'الزيمة'
                ],
                [
                    'id' => 300,
                    'country_id' => 1,
                    'external_id' => '758267778',
                    'name_en' => 'Buq A',
                    'name_ar' => 'بقا'
                ],
                [
                    'id' => 301,
                    'country_id' => 1,
                    'external_id' => '2132762243',
                    'name_en' => 'Gamika',
                    'name_ar' => 'جميكا'
                ],
                [
                    'id' => 302,
                    'country_id' => 1,
                    'external_id' => '1222933900',
                    'name_en' => 'Gatgat',
                    'name_ar' => 'غطط'
                ],
                [
                    'id' => 303,
                    'country_id' => 1,
                    'external_id' => '448961677',
                    'name_en' => 'Gerrha',
                    'name_ar' => 'جرهاء'
                ],
                [
                    'id' => 304,
                    'country_id' => 1,
                    'external_id' => '1957673870',
                    'name_en' => 'Habala',
                    'name_ar' => 'الحبلة'
                ],
                [
                    'id' => 305,
                    'country_id' => 1,
                    'external_id' => '1182063247',
                    'name_en' => 'Harmah',
                    'name_ar' => 'حرمة'
                ],
                [
                    'id' => 306,
                    'country_id' => 1,
                    'external_id' => '273807752',
                    'name_en' => 'Jabal Umm al Ru\'us',
                    'name_ar' => 'جبل أم الرؤوس'
                ],
                [
                    'id' => 307,
                    'country_id' => 1,
                    'external_id' => '1648236681',
                    'name_en' => 'Al Jowf',
                    'name_ar' => 'الجوف'
                ],
                [
                    'id' => 308,
                    'country_id' => 1,
                    'external_id' => '1008412554',
                    'name_en' => 'Knowledge Economic City',
                    'name_ar' => 'مدينة المعرفة الإقتصادية'
                ],
                [
                    'id' => 309,
                    'country_id' => 1,
                    'external_id' => '165693067',
                    'name_en' => 'Lihyan',
                    'name_ar' => 'لحيان‎'
                ],
                [
                    'id' => 310,
                    'country_id' => 1,
                    'external_id' => '1540187540',
                    'name_en' => 'Qalat Bishah',
                    'name_ar' => 'قلعة بيشه'
                ],
                [
                    'id' => 311,
                    'country_id' => 1,
                    'external_id' => '900433045',
                    'name_en' => 'Al Rumailah',
                    'name_ar' => 'الرميلة'
                ],
                [
                    'id' => 312,
                    'country_id' => 1,
                    'external_id' => '124822422',
                    'name_en' => 'Shaybah',
                    'name_ar' => 'الشيبة'
                ],
                [
                    'id' => 313,
                    'country_id' => 1,
                    'external_id' => '1365099159',
                    'name_en' => 'Al Uqayr',
                    'name_ar' => 'العقير'
                ],
                [
                    'id' => 314,
                    'country_id' => 1,
                    'external_id' => '591061392',
                    'name_en' => 'Al Farshah',
                    'name_ar' => 'الفرشة'
                ],
                [
                    'id' => 315,
                    'country_id' => 1,
                    'external_id' => '1234030289',
                    'name_en' => 'Billasmar',
                    'name_ar' => 'بللسمر'
                ],
                [
                    'id' => 316,
                    'country_id' => 1,
                    'external_id' => '923389041',
                    'name_en' => 'UTHAL',
                    'name_ar' => 'أوثال'
                ],
                [
                    'id' => 317,
                    'country_id' => 1,
                    'external_id' => '457314824',
                    'name_en' => 'tharmda',
                    'name_ar' => 'ثرمداء'
                ],
                [
                    'id' => 318,
                    'country_id' => 1,
                    'external_id' => '241294358',
                    'name_en' => 'Al Uraija',
                    'name_ar' => 'العريجاء'
                ],
                [
                    'id' => 319,
                    'country_id' => 1,
                    'external_id' => '1481571095',
                    'name_en' => 'Atawlah',
                    'name_ar' => 'العطاوله'
                ],
                [
                    'id' => 320,
                    'country_id' => 1,
                    'external_id' => '707467792',
                    'name_en' => 'Bad',
                    'name_ar' => 'بُد'
                ],
                [
                    'id' => 321,
                    'country_id' => 1,
                    'external_id' => '133183761',
                    'name_en' => 'Bahrain Causeway',
                    'name_ar' => 'جسر الملك فهد'
                ],
                [
                    'id' => 322,
                    'country_id' => 1,
                    'external_id' => '1373460498',
                    'name_en' => 'Dhalim',
                    'name_ar' => 'ظليم'
                ],
                [
                    'id' => 323,
                    'country_id' => 1,
                    'external_id' => '2105574940',
                    'name_en' => 'Duwadimi',
                    'name_ar' => 'الدوادمي'
                ],
                [
                    'id' => 324,
                    'country_id' => 1,
                    'external_id' => '1332585757',
                    'name_en' => 'Haditha',
                    'name_ar' => 'الحديثة'
                ],
                [
                    'id' => 325,
                    'country_id' => 1,
                    'external_id' => '1796727583',
                    'name_en' => 'Halit Ammar',
                    'name_ar' => 'حالة عمار'
                ],
                [
                    'id' => 326,
                    'country_id' => 1,
                    'external_id' => '1157366296',
                    'name_en' => 'Harad',
                    'name_ar' => 'حرض'
                ],
                [
                    'id' => 327,
                    'country_id' => 1,
                    'external_id' => '383328537',
                    'name_en' => 'Harjah',
                    'name_ar' => 'الحرجة'
                ],
                [
                    'id' => 328,
                    'country_id' => 1,
                    'external_id' => '1621508122',
                    'name_en' => 'Jeddah Airport',
                    'name_ar' => 'مطار جدة'
                ],
                [
                    'id' => 329,
                    'country_id' => 1,
                    'external_id' => '847474459',
                    'name_en' => 'Khamasin',
                    'name_ar' => 'الخماسين'
                ],
                [
                    'id' => 330,
                    'country_id' => 1,
                    'external_id' => '1580641637',
                    'name_en' => 'King Khalid City',
                    'name_ar' => 'مدينة الملك خالد'
                ],
                [
                    'id' => 331,
                    'country_id' => 1,
                    'external_id' => '100199271',
                    'name_en' => 'Mulaija',
                    'name_ar' => 'المليجة'
                ],
                [
                    'id' => 332,
                    'country_id' => 1,
                    'external_id' => '1472531040',
                    'name_en' => 'Al Muwayh Al Gadeem',
                    'name_ar' => 'الموية القديم'
                ],
                [
                    'id' => 333,
                    'country_id' => 1,
                    'external_id' => '564275553',
                    'name_en' => 'Noweirieh',
                    'name_ar' => 'النويرية'
                ],
                [
                    'id' => 334,
                    'country_id' => 1,
                    'external_id' => '1297373027',
                    'name_en' => 'Qaseem Airport',
                    'name_ar' => 'مطار القصيم'
                ],
                [
                    'id' => 335,
                    'country_id' => 1,
                    'external_id' => '523335276',
                    'name_en' => 'Qaysumah',
                    'name_ar' => 'القيصومة'
                ],
                [
                    'id' => 336,
                    'country_id' => 1,
                    'external_id' => '1763677549',
                    'name_en' => 'Quwayiyah',
                    'name_ar' => 'القويعية'
                ],
                [
                    'id' => 337,
                    'country_id' => 1,
                    'external_id' => '348246895',
                    'name_en' => 'Rahima',
                    'name_ar' => 'رحيمة'
                ],
                [
                    'id' => 338,
                    'country_id' => 1,
                    'external_id' => '814420329',
                    'name_en' => 'Riyadh Airport',
                    'name_ar' => 'مطار الرياض'
                ],
                [
                    'id' => 339,
                    'country_id' => 1,
                    'external_id' => '38809706',
                    'name_en' => 'Sapt Al Alaya',
                    'name_ar' => 'سبت العلايا'
                ],
                [
                    'id' => 340,
                    'country_id' => 1,
                    'external_id' => '1547525995',
                    'name_en' => 'Sarrar',
                    'name_ar' => 'الصرار'
                ],
                [
                    'id' => 341,
                    'country_id' => 1,
                    'external_id' => '773488244',
                    'name_en' => 'Sayirah',
                    'name_ar' => 'السيّرة'
                ],
                [
                    'id' => 342,
                    'country_id' => 1,
                    'external_id' => '1439546486',
                    'name_en' => 'Tanumah',
                    'name_ar' => 'تنومه'
                ],
                [
                    'id' => 343,
                    'country_id' => 1,
                    'external_id' => '665508727',
                    'name_en' => 'Tathlith',
                    'name_ar' => 'تثليث'
                ],
                [
                    'id' => 344,
                    'country_id' => 1,
                    'external_id' => '1130109297',
                    'name_en' => 'Ula',
                    'name_ar' => 'العلا'
                ],
                [
                    'id' => 345,
                    'country_id' => 1,
                    'external_id' => '490289266',
                    'name_en' => 'Uthmaniyah',
                    'name_ar' => 'العثمانية'
                ],
                [
                    'id' => 346,
                    'country_id' => 1,
                    'external_id' => '1862682483',
                    'name_en' => 'Wadeien',
                    'name_ar' => 'الواديين'
                ],
                [
                    'id' => 347,
                    'country_id' => 1,
                    'external_id' => '954427004',
                    'name_en' => 'Aba Alworood',
                    'name_ar' => 'أبا الورود'
                ],
                [
                    'id' => 348,
                    'country_id' => 1,
                    'external_id' => '180979069',
                    'name_en' => 'Abu Ajram',
                    'name_ar' => 'ابو عجرم'
                ],
                [
                    'id' => 349,
                    'country_id' => 1,
                    'external_id' => '1687594110',
                    'name_en' => 'Ad Dahinah',
                    'name_ar' => 'الداهنة'
                ],
                [
                    'id' => 350,
                    'country_id' => 1,
                    'external_id' => '913556351',
                    'name_en' => 'Ad Dubaiyah',
                    'name_ar' => 'الدبية'
                ],
                [
                    'id' => 351,
                    'country_id' => 1,
                    'external_id' => '5825144',
                    'name_en' => 'Al Adari',
                    'name_ar' => 'العذاري'
                ],
                [
                    'id' => 352,
                    'country_id' => 1,
                    'external_id' => '738336890',
                    'name_en' => 'Al Ammarah',
                    'name_ar' => 'العمارة'
                ],
                [
                    'id' => 353,
                    'country_id' => 1,
                    'external_id' => '630361413',
                    'name_en' => 'Al Bada',
                    'name_ar' => 'البدع'
                ],
                [
                    'id' => 354,
                    'country_id' => 1,
                    'external_id' => '2004855878',
                    'name_en' => 'Al Batra',
                    'name_ar' => 'البتراء'
                ],
                [
                    'id' => 355,
                    'country_id' => 1,
                    'external_id' => '1095027527',
                    'name_en' => 'Al Fuwaileq',
                    'name_ar' => 'الفويلق'
                ],
                [
                    'id' => 356,
                    'country_id' => 1,
                    'external_id' => '320989760',
                    'name_en' => 'Al hait',
                    'name_ar' => 'الحائط'
                ],
                [
                    'id' => 357,
                    'country_id' => 1,
                    'external_id' => '1829636417',
                    'name_en' => 'Al Haith',
                    'name_ar' => 'الحائط'
                ],
                [
                    'id' => 358,
                    'country_id' => 1,
                    'external_id' => '1055598658',
                    'name_en' => 'Al Hufayyirah',
                    'name_ar' => 'الحفيرة'
                ],
                [
                    'id' => 359,
                    'country_id' => 1,
                    'external_id' => '145766211',
                    'name_en' => 'Al Idabi',
                    'name_ar' => 'أيداب'
                ],
                [
                    'id' => 360,
                    'country_id' => 1,
                    'external_id' => '1520260684',
                    'name_en' => 'Al Khishaybi',
                    'name_ar' => 'الخشيبي'
                ],
                [
                    'id' => 361,
                    'country_id' => 1,
                    'external_id' => '880440653',
                    'name_en' => 'Al Khitah',
                    'name_ar' => 'الخطة'
                ],
                [
                    'id' => 362,
                    'country_id' => 1,
                    'external_id' => '104895566',
                    'name_en' => 'Al Laqayit',
                    'name_ar' => 'اللقائط'
                ],
                [
                    'id' => 363,
                    'country_id' => 1,
                    'external_id' => '1345172303',
                    'name_en' => 'Al Mada',
                    'name_ar' => 'المدى'
                ],
                [
                    'id' => 364,
                    'country_id' => 1,
                    'external_id' => '571134536',
                    'name_en' => 'Al Mahd',
                    'name_ar' => 'المهد'
                ],
                [
                    'id' => 365,
                    'country_id' => 1,
                    'external_id' => '2144858441',
                    'name_en' => 'Al Midrij',
                    'name_ar' => 'المدرج'
                ],
                [
                    'id' => 366,
                    'country_id' => 1,
                    'external_id' => '1237061706',
                    'name_en' => 'Al Moya',
                    'name_ar' => 'الموية'
                ],
                [
                    'id' => 367,
                    'country_id' => 1,
                    'external_id' => '463028043',
                    'name_en' => 'Al Qarin',
                    'name_ar' => 'القرين'
                ],
                [
                    'id' => 368,
                    'country_id' => 1,
                    'external_id' => '1969643092',
                    'name_en' => 'Al Ruqi',
                    'name_ar' => 'الرقعي'
                ],
                [
                    'id' => 369,
                    'country_id' => 1,
                    'external_id' => '1195605333',
                    'name_en' => 'Al Wasayta',
                    'name_ar' => 'الوسيطا'
                ],
                [
                    'id' => 370,
                    'country_id' => 1,
                    'external_id' => '1660336983',
                    'name_en' => 'Amaq',
                    'name_ar' => 'عماق'
                ],
                [
                    'id' => 371,
                    'country_id' => 1,
                    'external_id' => '1020516944',
                    'name_en' => 'An Nabk Abu Qasr',
                    'name_ar' => 'النبك أبو قصر'
                ],
                [
                    'id' => 372,
                    'country_id' => 1,
                    'external_id' => '247003473',
                    'name_en' => 'An Nafiah',
                    'name_ar' => 'النافية'
                ],
                [
                    'id' => 373,
                    'country_id' => 1,
                    'external_id' => '1485117522',
                    'name_en' => 'An Nuqrah',
                    'name_ar' => 'النقرة'
                ],
                [
                    'id' => 374,
                    'country_id' => 1,
                    'external_id' => '711075667',
                    'name_en' => 'Ar Radifah',
                    'name_ar' => 'الرديفة'
                ],
                [
                    'id' => 375,
                    'country_id' => 1,
                    'external_id' => '72304220',
                    'name_en' => 'Ar Rishawiyah',
                    'name_ar' => 'الرشاوية'
                ],
                [
                    'id' => 376,
                    'country_id' => 1,
                    'external_id' => '1444177245',
                    'name_en' => 'As Sulaimaniyah',
                    'name_ar' => 'السليمانية'
                ],
                [
                    'id' => 377,
                    'country_id' => 1,
                    'external_id' => '603096158',
                    'name_en' => 'As Sulubiayh',
                    'name_ar' => 'الصلبية'
                ],
                [
                    'id' => 378,
                    'country_id' => 1,
                    'external_id' => '2111808351',
                    'name_en' => 'Ash Shaara',
                    'name_ar' => 'الشارة'
                ],
                [
                    'id' => 379,
                    'country_id' => 1,
                    'external_id' => '1336197720',
                    'name_en' => 'Ash Shamli',
                    'name_ar' => 'الشملي'
                ],
                [
                    'id' => 380,
                    'country_id' => 1,
                    'external_id' => '427942233',
                    'name_en' => 'Ash Shananah',
                    'name_ar' => 'الشنانة'
                ],
                [
                    'id' => 381,
                    'country_id' => 1,
                    'external_id' => '1162555227',
                    'name_en' => 'Badar Hunain',
                    'name_ar' => 'بدر حنين'
                ],
                [
                    'id' => 382,
                    'country_id' => 1,
                    'external_id' => '386944420',
                    'name_en' => 'Badr Al Janoub',
                    'name_ar' => 'بدر الجنوب'
                ],
                [
                    'id' => 383,
                    'country_id' => 1,
                    'external_id' => '1627221157',
                    'name_en' => 'Bahrat Al Moujoud',
                    'name_ar' => 'بحرة الموجود'
                ],
                [
                    'id' => 384,
                    'country_id' => 1,
                    'external_id' => '853248934',
                    'name_en' => 'Balahmar',
                    'name_ar' => 'بللحمر'
                ],
                [
                    'id' => 385,
                    'country_id' => 1,
                    'external_id' => '211856039',
                    'name_en' => 'Balasmar',
                    'name_ar' => 'بللسمر'
                ],
                [
                    'id' => 386,
                    'country_id' => 1,
                    'external_id' => '1586350496',
                    'name_en' => 'Balqarn',
                    'name_ar' => 'بلقرن'
                ],
                [
                    'id' => 387,
                    'country_id' => 1,
                    'external_id' => '2050488226',
                    'name_en' => 'Baqa Ash Sharqiyah',
                    'name_ar' => 'بقعاء الشرقية'
                ],
                [
                    'id' => 388,
                    'country_id' => 1,
                    'external_id' => '1411126947',
                    'name_en' => 'Baqiq',
                    'name_ar' => 'بقيق'
                ],
                [
                    'id' => 389,
                    'country_id' => 1,
                    'external_id' => '569980332',
                    'name_en' => 'Bashayer',
                    'name_ar' => 'بشائر'
                ],
                [
                    'id' => 390,
                    'country_id' => 1,
                    'external_id' => '1942377645',
                    'name_en' => 'Birk',
                    'name_ar' => 'البرك'
                ],
                [
                    'id' => 391,
                    'country_id' => 1,
                    'external_id' => '1302557614',
                    'name_en' => 'Dammam Airport',
                    'name_ar' => 'مطار الدمام'
                ],
                [
                    'id' => 392,
                    'country_id' => 1,
                    'external_id' => '529109679',
                    'name_en' => 'Deraab',
                    'name_ar' => 'ديراب'
                ],
                [
                    'id' => 393,
                    'country_id' => 1,
                    'external_id' => '993251497',
                    'name_en' => 'Dukhnah',
                    'name_ar' => 'الدخنة'
                ],
                [
                    'id' => 394,
                    'country_id' => 1,
                    'external_id' => '1726291627',
                    'name_en' => 'Hadeethah',
                    'name_ar' => 'الحديثة'
                ],
                [
                    'id' => 395,
                    'country_id' => 1,
                    'external_id' => '45046965',
                    'name_en' => 'Hayer',
                    'name_ar' => 'الحائر'
                ],
                [
                    'id' => 396,
                    'country_id' => 1,
                    'external_id' => '777165495',
                    'name_en' => 'Horaimal',
                    'name_ar' => 'حريملاء'
                ],
                [
                    'id' => 397,
                    'country_id' => 1,
                    'external_id' => '1241831601',
                    'name_en' => 'Jadidah Arar',
                    'name_ar' => 'جديدة عرعر'
                ],
                [
                    'id' => 398,
                    'country_id' => 1,
                    'external_id' => '669116338',
                    'name_en' => 'Jafar',
                    'name_ar' => 'جعفر'
                ],
                [
                    'id' => 399,
                    'country_id' => 1,
                    'external_id' => '1909327539',
                    'name_en' => 'Kahlah',
                    'name_ar' => 'كحلة'
                ],
                [
                    'id' => 400,
                    'country_id' => 1,
                    'external_id' => '1135289788',
                    'name_en' => 'Kamil',
                    'name_ar' => 'كامل'
                ],
                [
                    'id' => 401,
                    'country_id' => 1,
                    'external_id' => '493896893',
                    'name_en' => 'Kara',
                    'name_ar' => 'قرى'
                ],
                [
                    'id' => 402,
                    'country_id' => 1,
                    'external_id' => '960201407',
                    'name_en' => 'Karboos',
                    'name_ar' => 'كربوس'
                ],
                [
                    'id' => 403,
                    'country_id' => 1,
                    'external_id' => '184590776',
                    'name_en' => 'Khairan',
                    'name_ar' => 'خيراء'
                ],
                [
                    'id' => 404,
                    'country_id' => 1,
                    'external_id' => '919269306',
                    'name_en' => 'Khasawyah',
                    'name_ar' => 'الخصاوية'
                ],
                [
                    'id' => 405,
                    'country_id' => 1,
                    'external_id' => '9899707',
                    'name_en' => 'Khodaria',
                    'name_ar' => 'الخضرية'
                ],
                [
                    'id' => 406,
                    'country_id' => 1,
                    'external_id' => '1383869828',
                    'name_en' => 'Kubadah',
                    'name_ar' => 'كبدة'
                ],
                [
                    'id' => 407,
                    'country_id' => 1,
                    'external_id' => '744049797',
                    'name_en' => 'Midinhab',
                    'name_ar' => 'مدينهاب'
                ],
                [
                    'id' => 408,
                    'country_id' => 1,
                    'external_id' => '2116447110',
                    'name_en' => 'Moqaq',
                    'name_ar' => 'موقق'
                ],
                [
                    'id' => 409,
                    'country_id' => 1,
                    'external_id' => '1208781447',
                    'name_en' => 'Mubayid',
                    'name_ar' => 'المبيض'
                ],
                [
                    'id' => 410,
                    'country_id' => 1,
                    'external_id' => '636070272',
                    'name_en' => 'Mulayh',
                    'name_ar' => 'مليح'
                ],
                [
                    'id' => 411,
                    'country_id' => 1,
                    'external_id' => '2008467585',
                    'name_en' => 'Muneefa',
                    'name_ar' => 'منيفة'
                ],
                [
                    'id' => 412,
                    'country_id' => 1,
                    'external_id' => '1100208002',
                    'name_en' => 'Munifat Al Qaid',
                    'name_ar' => 'منيفة القائد'
                ],
                [
                    'id' => 413,
                    'country_id' => 1,
                    'external_id' => '1833244044',
                    'name_en' => 'Nakeea',
                    'name_ar' => 'النقييع'
                ],
                [
                    'id' => 414,
                    'country_id' => 1,
                    'external_id' => '1059206285',
                    'name_en' => 'Nifi',
                    'name_ar' => 'نفي'
                ],
                [
                    'id' => 415,
                    'country_id' => 1,
                    'external_id' => '151999374',
                    'name_en' => 'Nisab',
                    'name_ar' => 'نصاب'
                ],
                [
                    'id' => 416,
                    'country_id' => 1,
                    'external_id' => '1523872399',
                    'name_en' => 'Nwariah',
                    'name_ar' => 'نويرية'
                ],
                [
                    'id' => 417,
                    'country_id' => 1,
                    'external_id' => '884117896',
                    'name_en' => 'Ojam',
                    'name_ar' => 'عجم'
                ],
                [
                    'id' => 418,
                    'country_id' => 1,
                    'external_id' => '574750347',
                    'name_en' => 'Qarah',
                    'name_ar' => 'القرى'
                ],
                [
                    'id' => 419,
                    'country_id' => 1,
                    'external_id' => '1309359253',
                    'name_en' => 'Qbah',
                    'name_ar' => 'قبة'
                ],
                [
                    'id' => 420,
                    'country_id' => 1,
                    'external_id' => '466639766',
                    'name_en' => 'Qufar',
                    'name_ar' => 'قفار'
                ],
                [
                    'id' => 421,
                    'country_id' => 1,
                    'external_id' => '1975351959',
                    'name_en' => 'Qusayba',
                    'name_ar' => 'قصيباء'
                ],
                [
                    'id' => 422,
                    'country_id' => 1,
                    'external_id' => '1201379728',
                    'name_en' => 'Rawdat Habbas',
                    'name_ar' => 'روضة هباس'
                ],
                [
                    'id' => 423,
                    'country_id' => 1,
                    'external_id' => '291551377',
                    'name_en' => 'Rayn',
                    'name_ar' => 'رين'
                ],
                [
                    'id' => 424,
                    'country_id' => 1,
                    'external_id' => '1666041746',
                    'name_en' => 'Rvaya Aljamsh',
                    'name_ar' => 'رفايع الجمش'
                ],
                [
                    'id' => 425,
                    'country_id' => 1,
                    'external_id' => '1026221715',
                    'name_en' => 'Sadyan',
                    'name_ar' => 'صديان'
                ],
                [
                    'id' => 426,
                    'country_id' => 1,
                    'external_id' => '251069852',
                    'name_en' => 'Safanyah',
                    'name_ar' => 'السفانية'
                ],
                [
                    'id' => 427,
                    'country_id' => 1,
                    'external_id' => '1490822301',
                    'name_en' => 'Sahna',
                    'name_ar' => 'سحنة'
                ],
                [
                    'id' => 428,
                    'country_id' => 1,
                    'external_id' => '716784542',
                    'name_en' => 'Saira',
                    'name_ar' => 'سعيرة'
                ],
                [
                    'id' => 429,
                    'country_id' => 1,
                    'external_id' => '75915935',
                    'name_en' => 'Saqf',
                    'name_ar' => 'سقف'
                ],
                [
                    'id' => 430,
                    'country_id' => 1,
                    'external_id' => '1449951640',
                    'name_en' => 'Sayl Al Kabir',
                    'name_ar' => 'سيل الكبير'
                ],
                [
                    'id' => 431,
                    'country_id' => 1,
                    'external_id' => '541696153',
                    'name_en' => 'Shaibah',
                    'name_ar' => 'شيبة'
                ],
                [
                    'id' => 432,
                    'country_id' => 1,
                    'external_id' => '1914097562',
                    'name_en' => 'Shari',
                    'name_ar' => 'شري'
                ],
                [
                    'id' => 433,
                    'country_id' => 1,
                    'external_id' => '1341386395',
                    'name_en' => 'Shedgum',
                    'name_ar' => 'شدقم'
                ],
                [
                    'id' => 434,
                    'country_id' => 1,
                    'external_id' => '1166167014',
                    'name_en' => 'Simira',
                    'name_ar' => 'سميراء'
                ],
                [
                    'id' => 435,
                    'country_id' => 1,
                    'external_id' => '393177831',
                    'name_en' => 'Taiba',
                    'name_ar' => 'طيبة'
                ],
                [
                    'id' => 436,
                    'country_id' => 1,
                    'external_id' => '856860897',
                    'name_en' => 'Tanjeeb',
                    'name_ar' => 'تنجيب'
                ],
                [
                    'id' => 437,
                    'country_id' => 1,
                    'external_id' => '218085346',
                    'name_en' => 'Tebrak',
                    'name_ar' => 'تبراك'
                ],
                [
                    'id' => 438,
                    'country_id' => 1,
                    'external_id' => '1589958371',
                    'name_en' => 'Tharmada',
                    'name_ar' => 'ثرمداء'
                ],
                [
                    'id' => 439,
                    'country_id' => 1,
                    'external_id' => '681702892',
                    'name_en' => 'Thebea',
                    'name_ar' => 'ثبي'
                ],
                [
                    'id' => 440,
                    'country_id' => 1,
                    'external_id' => '1416311790',
                    'name_en' => 'Towal',
                    'name_ar' => 'طوال'
                ],
                [
                    'id' => 441,
                    'country_id' => 1,
                    'external_id' => '640701167',
                    'name_en' => 'Um Aljamajim',
                    'name_ar' => 'أم الجماجم'
                ],
                [
                    'id' => 442,
                    'country_id' => 1,
                    'external_id' => '1880977896',
                    'name_en' => 'Ushayqir',
                    'name_ar' => 'أشيقر'
                ],
                [
                    'id' => 443,
                    'country_id' => 1,
                    'external_id' => '1308332265',
                    'name_en' => 'Uyun',
                    'name_ar' => 'عيون'
                ],
                [
                    'id' => 444,
                    'country_id' => 1,
                    'external_id' => '1773002475',
                    'name_en' => 'Wadi Bin Hasbal',
                    'name_ar' => 'وادي بن حسبل'
                ],
                [
                    'id' => 445,
                    'country_id' => 1,
                    'external_id' => '998964724',
                    'name_en' => 'Wadi Bin Hashbal',
                    'name_ar' => 'وادي بن هشبل'
                ],
                [
                    'id' => 446,
                    'country_id' => 1,
                    'external_id' => '358030581',
                    'name_en' => 'Wadi Fatmah',
                    'name_ar' => 'وادي فاطمة'
                ],
                [
                    'id' => 447,
                    'country_id' => 1,
                    'external_id' => '48658928',
                    'name_en' => 'Yanbu Nakhil',
                    'name_ar' => 'ينبع النخل'
                ],
                [
                    'id' => 448,
                    'country_id' => 1,
                    'external_id' => '1980048382',
                    'name_en' => 'Yanbu Al Nakhal',
                    'name_ar' => 'ينبع النخل'
                ],
                [
                    'id' => 449,
                    'country_id' => 1,
                    'external_id' => '500130296',
                    'name_en' => 'Madinat Yanbu\' as Sina\'iyah',
                    'name_ar' => 'ينبع الصناعية'
                ],
                [
                    'id' => 450,
                    'country_id' => 1,
                    'external_id' => '1872068857',
                    'name_en' => 'Al Bashayer',
                    'name_ar' => 'البشاير'
                ],
                [
                    'id' => 451,
                    'country_id' => 1,
                    'external_id' => '963817466',
                    'name_en' => 'Al Dayer',
                    'name_ar' => 'الدائر'
                ],
                [
                    'id' => 452,
                    'country_id' => 1,
                    'external_id' => '190828283',
                    'name_en' => 'Ar Ruqi',
                    'name_ar' => 'الرقعي'
                ],
                [
                    'id' => 453,
                    'country_id' => 1,
                    'external_id' => '1696918980',
                    'name_en' => 'Asuwayq',
                    'name_ar' => 'السويق'
                ],
                [
                    'id' => 454,
                    'country_id' => 1,
                    'external_id' => '1389054663',
                    'name_en' => 'Ayn lbn Fuhayd',
                    'name_ar' => 'عين ابن فهيد'
                ],
                [
                    'id' => 455,
                    'country_id' => 1,
                    'external_id' => '2122221761',
                    'name_en' => 'Al Bad',
                    'name_ar' => 'البدع'
                ],
                [
                    'id' => 456,
                    'country_id' => 1,
                    'external_id' => '1105917133',
                    'name_en' => 'Dhalm',
                    'name_ar' => 'ظلم'
                ],
                [
                    'id' => 457,
                    'country_id' => 1,
                    'external_id' => '1838953167',
                    'name_en' => 'Dirab',
                    'name_ar' => 'ديراب'
                ],
                [
                    'id' => 458,
                    'country_id' => 1,
                    'external_id' => '1064915400',
                    'name_en' => 'Hadda',
                    'name_ar' => 'حداء'
                ],
                [
                    'id' => 459,
                    'country_id' => 1,
                    'external_id' => '155611337',
                    'name_en' => 'Haradh',
                    'name_ar' => 'حرض'
                ],
                [
                    'id' => 460,
                    'country_id' => 1,
                    'external_id' => '1529651146',
                    'name_en' => 'Al Huwaya',
                    'name_ar' => 'الحوية'
                ],
                [
                    'id' => 461,
                    'country_id' => 1,
                    'external_id' => '889831115',
                    'name_en' => 'Jash',
                    'name_ar' => 'جاش'
                ],
                [
                    'id' => 462,
                    'country_id' => 1,
                    'external_id' => '580393942',
                    'name_en' => 'Manifah',
                    'name_ar' => 'منيفة'
                ],
                [
                    'id' => 463,
                    'country_id' => 1,
                    'external_id' => '2087008983',
                    'name_en' => 'Al Muwayh',
                    'name_ar' => 'المويه'
                ],
                [
                    'id' => 464,
                    'country_id' => 1,
                    'external_id' => '1312971216',
                    'name_en' => 'Mulayjah',
                    'name_ar' => 'مليجة'
                ],
                [
                    'id' => 465,
                    'country_id' => 1,
                    'external_id' => '1979025362',
                    'name_en' => 'Al Nabah',
                    'name_ar' => 'النباه'
                ],
                [
                    'id' => 466,
                    'country_id' => 1,
                    'external_id' => '963817466',
                    'name_en' => 'Al Dayer',
                    'name_ar' => 'الدائر'
                ],
                [
                    'id' => 467,
                    'country_id' => 1,
                    'external_id' => '190828283',
                    'name_en' => 'Ar Ruqi',
                    'name_ar' => 'الرقعي'
                ],
                [
                    'id' => 468,
                    'country_id' => 1,
                    'external_id' => '1696918980',
                    'name_en' => 'Asuwayq',
                    'name_ar' => 'السويق'
                ],
                [
                    'id' => 469,
                    'country_id' => 1,
                    'external_id' => '1389054663',
                    'name_en' => 'Ayn lbn Fuhayd',
                    'name_ar' => 'عين ابن فهيد'
                ],
                [
                    'id' => 470,
                    'country_id' => 1,
                    'external_id' => '2122221761',
                    'name_en' => 'Al Bad',
                    'name_ar' => 'البدع'
                ],
                [
                    'id' => 471,
                    'country_id' => 1,
                    'external_id' => '1105917133',
                    'name_en' => 'Dhalm',
                    'name_ar' => 'ظلم'
                ],
                [
                    'id' => 472,
                    'country_id' => 1,
                    'external_id' => '1838953167',
                    'name_en' => 'Dirab',
                    'name_ar' => 'ديراب'
                ],
                [
                    'id' => 473,
                    'country_id' => 1,
                    'external_id' => '1064915400',
                    'name_en' => 'Hadda',
                    'name_ar' => 'حداء'
                ],
                [
                    'id' => 474,
                    'country_id' => 1,
                    'external_id' => '155611337',
                    'name_en' => 'Haradh',
                    'name_ar' => 'حرض'
                ],
                [
                    'id' => 475,
                    'country_id' => 1,
                    'external_id' => '1529651146',
                    'name_en' => 'Al Huwaya',
                    'name_ar' => 'الحوية'
                ],
                [
                    'id' => 476,
                    'country_id' => 1,
                    'external_id' => '889831115',
                    'name_en' => 'Jash',
                    'name_ar' => 'جاش'
                ],
                [
                    'id' => 477,
                    'country_id' => 1,
                    'external_id' => '580393942',
                    'name_en' => 'Manifah',
                    'name_ar' => 'منيفة'
                ],
                [
                    'id' => 478,
                    'country_id' => 1,
                    'external_id' => '2087008983',
                    'name_en' => 'Al Muwayh',
                    'name_ar' => 'المويه'
                ],
                [
                    'id' => 479,
                    'country_id' => 1,
                    'external_id' => '1312971216',
                    'name_en' => 'Mulayjah',
                    'name_ar' => 'مليجة'
                ],
                [
                    'id' => 480,
                    'country_id' => 1,
                    'external_id' => '1979025362',
                    'name_en' => 'Al Nabah',
                    'name_ar' => 'النباه'
                ],
                [
                    'id' => 481,
                    'country_id' => 1,
                    'external_id' => '297780700',
                    'name_en' => 'Al Qalibah',
                    'name_ar' => 'القالبة'
                ],
                [
                    'id' => 482,
                    'country_id' => 1,
                    'external_id' => '1029768158',
                    'name_en' => 'Qina',
                    'name_ar' => 'قنا'
                ],
                [
                    'id' => 483,
                    'country_id' => 1,
                    'external_id' => '256778975',
                    'name_en' => 'Rijal Alma',
                    'name_ar' => 'رجال ألمع'
                ],
                [
                    'id' => 484,
                    'country_id' => 1,
                    'external_id' => '1496007128',
                    'name_en' => 'Sabt Al Alayah',
                    'name_ar' => 'سبت العلاية'
                ],
                [
                    'id' => 485,
                    'country_id' => 1,
                    'external_id' => '81694682',
                    'name_en' => 'As Sahna',
                    'name_ar' => 'السحنة'
                ],
                [
                    'id' => 486,
                    'country_id' => 1,
                    'external_id' => '1919806501',
                    'name_en' => 'Shigry',
                    'name_ar' => 'شقراء'
                ],
                [
                    'id' => 487,
                    'country_id' => 1,
                    'external_id' => '504834599',
                    'name_en' => 'Tarib',
                    'name_ar' => 'ترب'
                ],
                [
                    'id' => 488,
                    'country_id' => 1,
                    'external_id' => '1811695904',
                    'name_en' => 'Umm Al Jamajm',
                    'name_ar' => 'أم الجماجم'
                ],
                [
                    'id' => 489,
                    'country_id' => 1,
                    'external_id' => '396785442',
                    'name_en' => 'Wadi Ibn Hasbal',
                    'name_ar' => 'وادي ابن هشبل'
                ],
                [
                    'id' => 490,
                    'country_id' => 1,
                    'external_id' => '1636603427',
                    'name_en' => 'Hawea Taif',
                    'name_ar' => 'حوية الطائف'
                ],
                [
                    'id' => 491,
                    'country_id' => 1,
                    'external_id' => '862565676',
                    'name_en' => 'Haweyah Dha',
                    'name_ar' => 'حوية ظها'
                ],
                [
                    'id' => 492,
                    'country_id' => 1,
                    'external_id' => '221697069',
                    'name_en' => 'Ardah',
                    'name_ar' => 'العرادة'
                ],
                [
                    'id' => 493,
                    'country_id' => 1,
                    'external_id' => '687346223',
                    'name_en' => 'Al Wusayta',
                    'name_ar' => 'الوسيطا'
                ],
                [
                    'id' => 494,
                    'country_id' => 1,
                    'external_id' => '1419923497',
                    'name_en' => 'AlShinana',
                    'name_ar' => 'الشنانة'
                ],
                [
                    'id' => 495,
                    'country_id' => 1,
                    'external_id' => '1110621492',
                    'name_en' => 'Al Karbus',
                    'name_ar' => 'الكربوص'
                ],
                [
                    'id' => 496,
                    'country_id' => 1,
                    'external_id' => '363739440',
                    'name_en' => 'Tharmda',
                    'name_ar' => 'ثرمداء'
                ],
                [
                    'id' => 497,
                    'country_id' => 1,
                    'external_id' => '1737185329',
                    'name_en' => 'At Taniem',
                    'name_ar' => 'الطانيهم'
                ],
                [
                    'id' => 498,
                    'country_id' => 1,
                    'external_id' => '54429235',
                    'name_en' => 'Badr Al Janoub',
                    'name_ar' => 'بدر الجنوب'
                ],
                [
                    'id' => 499,
                    'country_id' => 1,
                    'external_id' => '1562092860',
                    'name_en' => 'Al Birk',
                    'name_ar' => 'البرك'
                ],
                [
                    'id' => 500,
                    'country_id' => 1,
                    'external_id' => '786482237',
                    'name_en' => 'Halat Ammar',
                    'name_ar' => 'حالة عمار'
                ],
                [
                    'id' => 501,
                    'country_id' => 1,
                    'external_id' => '1985757241',
                    'name_en' => 'wadi alhali',
                    'name_ar' => 'وادي الحلي'
                ],
                [
                    'id' => 502,
                    'country_id' => 1,
                    'external_id' => '1877781764',
                    'name_en' => 'Al Kamil',
                    'name_ar' => 'الكامل'
                ],
                [
                    'id' => 503,
                    'country_id' => 1,
                    'external_id' => '928524544',
                    'name_en' => 'Harajah',
                    'name_ar' => 'الحرجة'
                ],
                [
                    'id' => 504,
                    'country_id' => 1,
                    'external_id' => '19220481',
                    'name_en' => 'Al-Maabuj',
                    'name_ar' => 'المعبوج'
                ],
                [
                    'id' => 505,
                    'country_id' => 1,
                    'external_id' => '1392662274',
                    'name_en' => 'Al-Asameliah',
                    'name_ar' => 'الاسامله'
                ],
                [
                    'id' => 506,
                    'country_id' => 1,
                    'external_id' => '753890819',
                    'name_en' => 'Al-Wahla',
                    'name_ar' => 'الوحله'
                ],
                [
                    'id' => 507,
                    'country_id' => 1,
                    'external_id' => '2125829388',
                    'name_en' => 'Bakhsha',
                    'name_ar' => 'بخشه'
                ],
                [
                    'id' => 508,
                    'country_id' => 1,
                    'external_id' => '1217573901',
                    'name_en' => 'al fuqaha',
                    'name_ar' => 'الفقهاء'
                ],
                [
                    'id' => 509,
                    'country_id' => 1,
                    'external_id' => '444584718',
                    'name_en' => 'Al-Wasli',
                    'name_ar' => 'الواصلي'
                ],
                [
                    'id' => 510,
                    'country_id' => 1,
                    'external_id' => '1950675471',
                    'name_en' => 'Al-Rayyan',
                    'name_ar' => 'الريان'
                ],
                [
                    'id' => 511,
                    'country_id' => 1,
                    'external_id' => '1176572168',
                    'name_en' => 'Al-Khashabeya',
                    'name_ar' => 'الخشابيه'
                ],
                [
                    'id' => 512,
                    'country_id' => 1,
                    'external_id' => '269365257',
                    'name_en' => 'Shawajrah',
                    'name_ar' => 'الشواجره'
                ],
                [
                    'id' => 513,
                    'country_id' => 1,
                    'external_id' => '1844141834',
                    'name_en' => 'muhalih',
                    'name_ar' => 'محليه'
                ],
                [
                    'id' => 514,
                    'country_id' => 1,
                    'external_id' => '1068531211',
                    'name_en' => 'al kawamilih',
                    'name_ar' => 'الكوامله'
                ],
                [
                    'id' => 515,
                    'country_id' => 1,
                    'external_id' => '161389844',
                    'name_en' => 'Al-Ashwah',
                    'name_ar' => 'العشوه'
                ],
                [
                    'id' => 516,
                    'country_id' => 1,
                    'external_id' => '1534835733',
                    'name_en' => 'Al Dhabi',
                    'name_ar' => 'الظبيه'
                ],
                [
                    'id' => 517,
                    'country_id' => 1,
                    'external_id' => '893442838',
                    'name_en' => 'Sanabah',
                    'name_ar' => 'صنبه'
                ],
                [
                    'id' => 518,
                    'country_id' => 1,
                    'external_id' => '120453655',
                    'name_en' => 'Taheria',
                    'name_ar' => 'الطاهريه'
                ],
                [
                    'id' => 519,
                    'country_id' => 1,
                    'external_id' => '1359616272',
                    'name_en' => 'Al Hulwah',
                    'name_ar' => 'الحلوة'
                ],
                [
                    'id' => 520,
                    'country_id' => 1,
                    'external_id' => '584529937',
                    'name_en' => 'AlQudaih',
                    'name_ar' => 'القديح'
                ],
                [
                    'id' => 521,
                    'country_id' => 1,
                    'external_id' => '1318675987',
                    'name_en' => 'malham',
                    'name_ar' => 'ملهم'
                ],
                [
                    'id' => 522,
                    'country_id' => 1,
                    'external_id' => '301392415',
                    'name_en' => 'alfaqir',
                    'name_ar' => 'الفقير'
                ],
                [
                    'id' => 523,
                    'country_id' => 1,
                    'external_id' => '85306469',
                    'name_en' => 'Abu Arish Governorate',
                    'name_ar' => 'محافظة أبو عريش'
                ],
                [
                    'id' => 524,
                    'country_id' => 1,
                    'external_id' => '551545447',
                    'name_en' => 'Al Araq',
                    'name_ar' => 'العراق'
                ],
                [
                    'id' => 525,
                    'country_id' => 1,
                    'external_id' => '1283532897',
                    'name_en' => 'Al Ashamiyah',
                    'name_ar' => 'العشامية'
                ],
                [
                    'id' => 526,
                    'country_id' => 1,
                    'external_id' => '1641788270',
                    'name_en' => 'albadae',
                    'name_ar' => 'البدع'
                ],
                [
                    'id' => 527,
                    'country_id' => 1,
                    'external_id' => '866177647',
                    'name_en' => 'wali_aleahd',
                    'name_ar' => 'ولي العهد'
                ],
                [
                    'id' => 528,
                    'country_id' => 1,
                    'external_id' => '1600786537',
                    'name_en' => 'alamwah',
                    'name_ar' => 'الامواه'
                ],
                [
                    'id' => 529,
                    'country_id' => 1,
                    'external_id' => '691486570',
                    'name_en' => 'Sumaira',
                    'name_ar' => 'سميراء'
                ],
                [
                    'id' => 530,
                    'country_id' => 1,
                    'external_id' => '650615925',
                    'name_en' => 'alqahma',
                    'name_ar' => 'القحمة'
                ],
                [
                    'id' => 531,
                    'country_id' => 1,
                    'external_id' => '1848842353',
                    'name_en' => 'Al Hudud Al Shamaliyah',
                    'name_ar' => 'الحدود الشمالية'
                ],
                [
                    'id' => 532,
                    'country_id' => 1,
                    'external_id' => '367347315',
                    'name_en' => 'Al Khaledah',
                    'name_ar' => 'الخالدية'
                ],
                [
                    'id' => 533,
                    'country_id' => 1,
                    'external_id' => '58041214',
                    'name_en' => 'Al Malida',
                    'name_ar' => 'المليدة'
                ],
                [
                    'id' => 534,
                    'country_id' => 1,
                    'external_id' => '2030305401',
                    'name_en' => 'Al Mundfin',
                    'name_ar' => 'المنضفين'
                ],
                [
                    'id' => 535,
                    'country_id' => 1,
                    'external_id' => '1815857735',
                    'name_en' => 'Al Butayn',
                    'name_ar' => 'البطين'
                ],
                [
                    'id' => 536,
                    'country_id' => 1,
                    'external_id' => '1040247104',
                    'name_en' => 'Al Qaraa',
                    'name_ar' => 'القرعاء'
                ],
                [
                    'id' => 537,
                    'country_id' => 1,
                    'external_id' => '200083521',
                    'name_en' => 'Al Rabiyah',
                    'name_ar' => 'الربيعة'
                ],
                [
                    'id' => 538,
                    'country_id' => 1,
                    'external_id' => '932656707',
                    'name_en' => 'Anabqiyyah',
                    'name_ar' => 'الأنبقية'
                ],
                [
                    'id' => 539,
                    'country_id' => 1,
                    'external_id' => '1223283016',
                    'name_en' => 'At Tarafiyah',
                    'name_ar' => 'الطرفية الشرقية'
                ],
                [
                    'id' => 540,
                    'country_id' => 1,
                    'external_id' => '448196681',
                    'name_en' => 'At Tarif Al Jadid',
                    'name_ar' => 'الطريف الجديد'
                ],
                [
                    'id' => 541,
                    'country_id' => 1,
                    'external_id' => '1955798858',
                    'name_en' => 'At Tiraq',
                    'name_ar' => 'الطراق'
                ],
                [
                    'id' => 542,
                    'country_id' => 1,
                    'external_id' => '1182285387',
                    'name_en' => 'Ayn Fuhayd',
                    'name_ar' => 'عين فهيد'
                ],
                [
                    'id' => 543,
                    'country_id' => 1,
                    'external_id' => '1007197014',
                    'name_en' => 'Doos',
                    'name_ar' => 'دوس'
                ],
                [
                    'id' => 544,
                    'country_id' => 1,
                    'external_id' => '1538447696',
                    'name_en' => 'Hadithah',
                    'name_ar' => 'الحديثة'
                ],
                [
                    'id' => 545,
                    'country_id' => 1,
                    'external_id' => '123995986',
                    'name_en' => 'Hawaya',
                    'name_ar' => 'حوية'
                ],
                [
                    'id' => 546,
                    'country_id' => 1,
                    'external_id' => '2097898589',
                    'name_en' => 'Jarab',
                    'name_ar' => 'جرب'
                ],
                [
                    'id' => 547,
                    'country_id' => 1,
                    'external_id' => '415146591',
                    'name_en' => 'Jouf al Alshoat',
                    'name_ar' => 'الجوف الأعلى'
                ],
                [
                    'id' => 548,
                    'country_id' => 1,
                    'external_id' => '1788592472',
                    'name_en' => 'Khbash',
                    'name_ar' => 'خباش'
                ],
                [
                    'id' => 549,
                    'country_id' => 1,
                    'external_id' => '1613377115',
                    'name_en' => 'Muwassam',
                    'name_ar' => 'موصم'
                ],
                [
                    'id' => 550,
                    'country_id' => 1,
                    'external_id' => '266103717',
                    'name_en' => 'New Ain Dar',
                    'name_ar' => 'عين دار الجديدة'
                ],
                [
                    'id' => 551,
                    'country_id' => 1,
                    'external_id' => '1505397414',
                    'name_en' => 'Nimran',
                    'name_ar' => 'نمران'
                ],
                [
                    'id' => 552,
                    'country_id' => 1,
                    'external_id' => '91015328',
                    'name_en' => 'Qusaiba',
                    'name_ar' => 'قصيبة'
                ],
                [
                    'id' => 553,
                    'country_id' => 1,
                    'external_id' => '979931567',
                    'name_en' => 'Thajir',
                    'name_ar' => 'ثاجير'
                ],
                [
                    'id' => 554,
                    'country_id' => 1,
                    'external_id' => '339062952',
                    'name_en' => 'Tibrak',
                    'name_ar' => 'تبرك'
                ],
                [
                    'id' => 555,
                    'country_id' => 1,
                    'external_id' => '1712512937',
                    'name_en' => 'Umm Lajj',
                    'name_ar' => 'أملج'
                ],
                [
                    'id' => 556,
                    'country_id' => 1,
                    'external_id' => '872414890',
                    'name_en' => 'Unknown',
                    'name_ar' => 'غير معروف'
                ],
                [
                    'id' => 557,
                    'country_id' => 1,
                    'external_id' => '230956459',
                    'name_en' => 'Uthal',
                    'name_ar' => 'أُثيل'
                ],
                [
                    'id' => 558,
                    'country_id' => 1,
                    'external_id' => '1895548849',
                    'name_en' => 'Thar Najran',
                    'name_ar' => 'ثار نجران'
                ],
                [
                    'id' => 559,
                    'country_id' => 1,
                    'external_id' => '481101235',
                    'name_en' => 'ابو راكة',
                    'name_ar' => 'ابو راكة'
                ],
                [
                    'id' => 560,
                    'country_id' => 1,
                    'external_id' => '945243069',
                    'name_en' => 'KHAMIS ALBAHR',
                    'name_ar' => 'خميس البحر'
                ],
                [
                    'id' => 561,
                    'country_id' => 1,
                    'external_id' => '171729598',
                    'name_en' => 'القرى الشرقيه',
                    'name_ar' => 'القرى الشرقيه'
                ],
                [
                    'id' => 562,
                    'country_id' => 1,
                    'external_id' => '1679458751',
                    'name_en' => 'Darin',
                    'name_ar' => 'دارين'
                ],
                [
                    'id' => 563,
                    'country_id' => 1,
                    'external_id' => '63754169',
                    'name_en' => 'الجوية',
                    'name_ar' => 'الجوية'
                ],
                [
                    'id' => 564,
                    'country_id' => 1,
                    'external_id' => '796265915',
                    'name_en' => 'جودة',
                    'name_ar' => 'جودة'
                ],
                [
                    'id' => 565,
                    'country_id' => 1,
                    'external_id' => '2035494020',
                    'name_en' => 'الغويبة',
                    'name_ar' => 'الغويبة'
                ],
                [
                    'id' => 566,
                    'country_id' => 1,
                    'external_id' => '1261980549',
                    'name_en' => 'انباك',
                    'name_ar' => 'انباك'
                ],
                [
                    'id' => 567,
                    'country_id' => 1,
                    'external_id' => '621111942',
                    'name_en' => 'العديد دقم',
                    'name_ar' => 'العديد دقم'
                ],
                [
                    'id' => 568,
                    'country_id' => 1,
                    'external_id' => '1994623367',
                    'name_en' => 'مريبطة',
                    'name_ar' => 'مريبطة'
                ],
                [
                    'id' => 569,
                    'country_id' => 1,
                    'external_id' => '1086892160',
                    'name_en' => 'الثليماء',
                    'name_ar' => 'الثليماء'
                ],
                [
                    'id' => 570,
                    'country_id' => 1,
                    'external_id' => '311801729',
                    'name_en' => 'الجافورة',
                    'name_ar' => 'الجافورة'
                ],
                [
                    'id' => 571,
                    'country_id' => 1,
                    'external_id' => '1819465346',
                    'name_en' => 'أبو طينية',
                    'name_ar' => 'أبو طينية'
                ],
                [
                    'id' => 572,
                    'country_id' => 1,
                    'external_id' => '1046476163',
                    'name_en' => 'عريعرة',
                    'name_ar' => 'عريعرة'
                ],
                [
                    'id' => 573,
                    'country_id' => 1,
                    'external_id' => '136582284',
                    'name_en' => 'الطويلة',
                    'name_ar' => 'الطويلة'
                ],
                [
                    'id' => 574,
                    'country_id' => 1,
                    'external_id' => '1510028173',
                    'name_en' => 'فضيلة',
                    'name_ar' => 'فضيلة'
                ],
                [
                    'id' => 575,
                    'country_id' => 1,
                    'external_id' => '938365582',
                    'name_en' => 'الحني',
                    'name_ar' => 'الحني'
                ],
                [
                    'id' => 576,
                    'country_id' => 1,
                    'external_id' => '30110095',
                    'name_en' => 'السودة',
                    'name_ar' => 'السودة'
                ],
                [
                    'id' => 577,
                    'country_id' => 1,
                    'external_id' => '1402048648',
                    'name_en' => 'السيح',
                    'name_ar' => 'السيح'
                ],
                [
                    'id' => 578,
                    'country_id' => 1,
                    'external_id' => '763281289',
                    'name_en' => 'الشجعة',
                    'name_ar' => 'الشجعة'
                ],
                [
                    'id' => 579,
                    'country_id' => 1,
                    'external_id' => '2136727178',
                    'name_en' => 'Silaa',
                    'name_ar' => 'سعلة'
                ],
                [
                    'id' => 580,
                    'country_id' => 1,
                    'external_id' => '1328066457',
                    'name_en' => 'Thurayban',
                    'name_ar' => 'ثريبان'
                ],
                [
                    'id' => 581,
                    'country_id' => 1,
                    'external_id' => '377760741',
                    'name_en' => 'Dumat alJandal',
                    'name_ar' => 'دومة الجندل'
                ],
                [
                    'id' => 582,
                    'country_id' => 1,
                    'external_id' => '202672352',
                    'name_en' => 'Abo Ajram',
                    'name_ar' => 'أبو عجرم'
                ],
                [
                    'id' => 583,
                    'country_id' => 1,
                    'external_id' => '1934242542',
                    'name_en' => 'AbuAreesh',
                    'name_ar' => 'أبو عريش'
                ],
                [
                    'id' => 584,
                    'country_id' => 1,
                    'external_id' => '1759158249',
                    'name_en' => 'Hali AlQunfudhah',
                    'name_ar' => 'حلي القنفذة'
                ],
                [
                    'id' => 585,
                    'country_id' => 1,
                    'external_id' => '808852469',
                    'name_en' => 'Udhayliyah',
                    'name_ar' => 'العضيلية'
                ],
                [
                    'id' => 586,
                    'country_id' => 1,
                    'external_id' => '1435018994',
                    'name_en' => 'Thwal',
                    'name_ar' => 'ثول'
                ],
                [
                    'id' => 587,
                    'country_id' => 1,
                    'external_id' => '659932659',
                    'name_en' => 'Nairiyah',
                    'name_ar' => 'النعيرية'
                ],
                [
                    'id' => 588,
                    'country_id' => 1,
                    'external_id' => '1126106109',
                    'name_en' => 'Sabt AlUlayah',
                    'name_ar' => 'سبت العلاية'
                ],
                [
                    'id' => 589,
                    'country_id' => 1,
                    'external_id' => '484713214',
                    'name_en' => 'Mahail',
                    'name_ar' => 'محايل'
                ],
                [
                    'id' => 590,
                    'country_id' => 1,
                    'external_id' => '1858159103',
                    'name_en' => 'Majardah',
                    'name_ar' => 'المجاردة'
                ],
                [
                    'id' => 591,
                    'country_id' => 1,
                    'external_id' => '1683074810',
                    'name_en' => 'AlKharj',
                    'name_ar' => 'الخرج'
                ],
                [
                    'id' => 592,
                    'country_id' => 1,
                    'external_id' => '1830084',
                    'name_en' => 'Hotat Bani Tamim',
                    'name_ar' => 'حوطة بني تميم'
                ],
                [
                    'id' => 593,
                    'country_id' => 1,
                    'external_id' => '1574964165',
                    'name_en' => 'AlMajmaah',
                    'name_ar' => 'المجمعة'
                ],
                [
                    'id' => 594,
                    'country_id' => 1,
                    'external_id' => '801974982',
                    'name_en' => 'Ghat',
                    'name_ar' => 'الغاط'
                ],
                [
                    'id' => 595,
                    'country_id' => 1,
                    'external_id' => '2041203143',
                    'name_en' => 'Hawtat Sudayr',
                    'name_ar' => 'حوطة سدير'
                ],
                [
                    'id' => 596,
                    'country_id' => 1,
                    'external_id' => '1266116800',
                    'name_en' => 'AlUla',
                    'name_ar' => 'العلا'
                ],
                [
                    'id' => 597,
                    'country_id' => 1,
                    'external_id' => '100900554',
                    'name_en' => 'AlQuwayiyah',
                    'name_ar' => 'القويعية'
                ],
                [
                    'id' => 598,
                    'country_id' => 1,
                    'external_id' => '766893268',
                    'name_en' => 'Shaqraa',
                    'name_ar' => 'شقراء'
                ],
                [
                    'id' => 599,
                    'country_id' => 1,
                    'external_id' => '282363602',
                    'name_en' => 'AlQurayyat',
                    'name_ar' => 'القريات'
                ],
                [
                    'id' => 600,
                    'country_id' => 1,
                    'external_id' => '1655809491',
                    'name_en' => 'tabarjal',
                    'name_ar' => 'طبرجل'
                ],
                [
                    'id' => 601,
                    'country_id' => 1,
                    'external_id' => '1017038044',
                    'name_en' => 'Taraf',
                    'name_ar' => 'طرف'
                ],
                [
                    'id' => 602,
                    'country_id' => 1,
                    'external_id' => '707600863',
                    'name_en' => 'AlWajh',
                    'name_ar' => 'الوجه'
                ],
                [
                    'id' => 603,
                    'country_id' => 1,
                    'external_id' => '1373073369',
                    'name_en' => 'banni hassan',
                    'name_ar' => 'محافظة بني حسن'
                ],
                [
                    'id' => 604,
                    'country_id' => 1,
                    'external_id' => '599625434',
                    'name_en' => 'AL DAGHARER',
                    'name_ar' => 'الدغارير'
                ],
                [
                    'id' => 605,
                    'country_id' => 1,
                    'external_id' => '1332202532',
                    'name_en' => 'Qassim',
                    'name_ar' => 'القصيم'
                ],
                [
                    'id' => 606,
                    'country_id' => 1,
                    'external_id' => '1797851686',
                    'name_en' => 'Qaryat alsafra',
                    'name_ar' => 'قرية الصفراء'
                ],
                [
                    'id' => 607,
                    'country_id' => 1,
                    'external_id' => '1156983079',
                    'name_en' => 'Qaryat marghan',
                    'name_ar' => 'قرية مرغان'
                ],
                [
                    'id' => 608,
                    'country_id' => 1,
                    'external_id' => '382945312',
                    'name_en' => 'Qaryat almaerish',
                    'name_ar' => 'قرية المعرش'
                ],
                [
                    'id' => 609,
                    'country_id' => 1,
                    'external_id' => '1622693665',
                    'name_en' => 'Qaryat rud bin hadi',
                    'name_ar' => 'قرية روض بن هادي'
                ],
                [
                    'id' => 610,
                    'country_id' => 1,
                    'external_id' => '847607330',
                    'name_en' => 'Qaryat murahab',
                    'name_ar' => 'قرية مرحب'
                ],
                [
                    'id' => 611,
                    'country_id' => 1,
                    'external_id' => '207852835',
                    'name_en' => 'Qaryat alkhafij',
                    'name_ar' => 'قرية الخفيج'
                ],
                [
                    'id' => 612,
                    'country_id' => 1,
                    'external_id' => '1581823020',
                    'name_en' => 'Qaryat aleiradia',
                    'name_ar' => 'قرية العرادية'
                ],
                [
                    'id' => 613,
                    'country_id' => 1,
                    'external_id' => '672518957',
                    'name_en' => 'Qaryat alraqab',
                    'name_ar' => 'قرية الرقب'
                ],
                [
                    'id' => 614,
                    'country_id' => 1,
                    'external_id' => '99807790',
                    'name_en' => 'Qaryat alwasita',
                    'name_ar' => 'قرية الوسيطاء'
                ],
                [
                    'id' => 615,
                    'country_id' => 1,
                    'external_id' => '1474236719',
                    'name_en' => 'Qaryat almaghar',
                    'name_ar' => 'قرية المغار'
                ],
                [
                    'id' => 616,
                    'country_id' => 1,
                    'external_id' => '564408360',
                    'name_en' => 'alhalifat aleulya',
                    'name_ar' => 'الحليفة العليا'
                ],
                [
                    'id' => 617,
                    'country_id' => 1,
                    'external_id' => '1937858345',
                    'name_en' => 'qaryat almakhruq',
                    'name_ar' => '﻿قرية المخروق'
                ],
                [
                    'id' => 618,
                    'country_id' => 1,
                    'external_id' => '1299086890',
                    'name_en' => 'qaryat albarika',
                    'name_ar' => '﻿قرية البركة'
                ],
                [
                    'id' => 619,
                    'country_id' => 1,
                    'external_id' => '523541803',
                    'name_en' => 'qaryat \'am rwshn',
                    'name_ar' => '﻿قرية ام روشن'
                ],
                [
                    'id' => 620,
                    'country_id' => 1,
                    'external_id' => '1762769972',
                    'name_en' => 'qaryat alsafit',
                    'name_ar' => '﻿قرية الصفيط'
                ],
                [
                    'id' => 621,
                    'country_id' => 1,
                    'external_id' => '989780789',
                    'name_en' => 'qaryat wasaeat alrasi',
                    'name_ar' => '﻿قرية وسعة الرس'
                ],
                [
                    'id' => 622,
                    'country_id' => 1,
                    'external_id' => '349960758',
                    'name_en' => 'qaryat fidat athqab',
                    'name_ar' => '﻿قرية فيضة اثقب'
                ],
                [
                    'id' => 623,
                    'country_id' => 1,
                    'external_id' => '2080023612',
                    'name_en' => 'Madinatal Umran',
                    'name_ar' => 'مدينة العمران'
                ],
                [
                    'id' => 624,
                    'country_id' => 1,
                    'external_id' => '1439155005',
                    'name_en' => 'Madinat Al Jafr',
                    'name_ar' => 'مدينة الجفر'
                ],
                [
                    'id' => 625,
                    'country_id' => 1,
                    'external_id' => '1904804159',
                    'name_en' => 'Al Bujiri',
                    'name_ar' => 'البجيري'
                ],
                [
                    'id' => 626,
                    'country_id' => 1,
                    'external_id' => '489901881',
                    'name_en' => 'Al Thimamiyah',
                    'name_ar' => 'الثماميه'
                ],
                [
                    'id' => 627,
                    'country_id' => 1,
                    'external_id' => '954633531',
                    'name_en' => 'الشقة',
                    'name_ar' => 'الشقة'
                ],
                [
                    'id' => 628,
                    'country_id' => 1,
                    'external_id' => '180595716',
                    'name_en' => 'Rubayiyah',
                    'name_ar' => 'الربيعية'
                ],
                [
                    'id' => 629,
                    'country_id' => 1,
                    'external_id' => '1688783621',
                    'name_en' => 'Turfiyah al Gharbiyah',
                    'name_ar' => 'الطرفية الغربية'
                ],
                [
                    'id' => 630,
                    'country_id' => 1,
                    'external_id' => '913697286',
                    'name_en' => 'النبقية',
                    'name_ar' => 'النبقية'
                ],
                [
                    'id' => 631,
                    'country_id' => 1,
                    'external_id' => '2044810754',
                    'name_en' => 'qaryat alsalsalih',
                    'name_ar' => 'قرية الصلصله'
                ],
                [
                    'id' => 632,
                    'country_id' => 1,
                    'external_id' => '1271821571',
                    'name_en' => 'qaryat rahbat alhasni',
                    'name_ar' => 'قرية رحبة الحسني'
                ],
                [
                    'id' => 633,
                    'country_id' => 1,
                    'external_id' => '630494220',
                    'name_en' => 'qaryat zubran',
                    'name_ar' => 'قرية زبران'
                ],
                [
                    'id' => 634,
                    'country_id' => 1,
                    'external_id' => '2003940109',
                    'name_en' => 'dalfah',
                    'name_ar' => 'الضلفعة'
                ],
                [
                    'id' => 635,
                    'country_id' => 1,
                    'external_id' => '1828720648',
                    'name_en' => 'Sanabis',
                    'name_ar' => 'السنابس'
                ],
                [
                    'id' => 636,
                    'country_id' => 1,
                    'external_id' => '1236674321',
                    'name_en' => 'Jubail Industrial',
                    'name_ar' => 'الجبيل الصناعية'
                ],
                [
                    'id' => 637,
                    'country_id' => 1,
                    'external_id' => '462636562',
                    'name_en' => 'Umm Al Sahek',
                    'name_ar' => 'أم الساهك'
                ],
                [
                    'id' => 638,
                    'country_id' => 1,
                    'external_id' => '246546456',
                    'name_en' => 'Rawdat Sudair',
                    'name_ar' => 'روضة سدير'
                ],
                [
                    'id' => 639,
                    'country_id' => 1,
                    'external_id' => '1486827289',
                    'name_en' => 'Sudair clan',
                    'name_ar' => 'عشيرة سدير'
                ],
                [
                    'id' => 640,
                    'country_id' => 1,
                    'external_id' => '711216666',
                    'name_en' => 'Umm Sidra',
                    'name_ar' => 'أم سدرة'
                ],
                [
                    'id' => 641,
                    'country_id' => 1,
                    'external_id' => '603237221',
                    'name_en' => 'Baysh',
                    'name_ar' => 'بيش'
                ],
                [
                    'id' => 642,
                    'country_id' => 1,
                    'external_id' => '1302764405',
                    'name_en' => 'Rathaya',
                    'name_ar' => 'الراذيا'
                ],
                [
                    'id' => 643,
                    'country_id' => 1,
                    'external_id' => '528726646',
                    'name_en' => 'Suwaidhrah',
                    'name_ar' => 'الصويدرة'
                ],
                [
                    'id' => 644,
                    'country_id' => 1,
                    'external_id' => '1768479095',
                    'name_en' => 'Sheqran',
                    'name_ar' => 'الشقرة'
                ],
                [
                    'id' => 645,
                    'country_id' => 1,
                    'external_id' => '993392752',
                    'name_en' => 'Mindassah',
                    'name_ar' => 'المندسة'
                ],
                [
                    'id' => 646,
                    'country_id' => 1,
                    'external_id' => '353503089',
                    'name_en' => 'Mulaylih',
                    'name_ar' => 'المليلح'
                ],
                [
                    'id' => 647,
                    'country_id' => 1,
                    'external_id' => '1727997554',
                    'name_en' => 'Selselah',
                    'name_ar' => 'الصلصلة'
                ],
                [
                    'id' => 648,
                    'country_id' => 1,
                    'external_id' => '44131452',
                    'name_en' => 'Ushyrah',
                    'name_ar' => 'العشيرة'
                ],
                [
                    'id' => 649,
                    'country_id' => 1,
                    'external_id' => '1552909181',
                    'name_en' => 'Wadi Reem',
                    'name_ar' => 'وادي ريم'
                ],
                [
                    'id' => 650,
                    'country_id' => 1,
                    'external_id' => '777298558',
                    'name_en' => 'Alyutamah',
                    'name_ar' => 'اليتمه'
                ],
                [
                    'id' => 651,
                    'country_id' => 1,
                    'external_id' => '2016526719',
                    'name_en' => 'Wadi Al Fora',
                    'name_ar' => 'وادي الفرع'
                ],
                [
                    'id' => 652,
                    'country_id' => 1,
                    'external_id' => '1243537528',
                    'name_en' => 'Al Akhal',
                    'name_ar' => 'الاكحل'
                ],
                [
                    'id' => 653,
                    'country_id' => 1,
                    'external_id' => '670764921',
                    'name_en' => 'Al Musayjid',
                    'name_ar' => 'المسيجيد'
                ],
                [
                    'id' => 654,
                    'country_id' => 1,
                    'external_id' => '1908420218',
                    'name_en' => 'Ad Dumayriyah',
                    'name_ar' => 'الضميريه'
                ],
                [
                    'id' => 655,
                    'country_id' => 1,
                    'external_id' => '1135431035',
                    'name_en' => 'Al Harara',
                    'name_ar' => 'الهرارة'
                ],
                [
                    'id' => 656,
                    'country_id' => 1,
                    'external_id' => '499288199',
                    'name_en' => 'Qena',
                    'name_ar' => 'قنا'
                ],
                [
                    'id' => 657,
                    'country_id' => 1,
                    'external_id' => '1873778560',
                    'name_en' => 'almujasuh',
                    'name_ar' => 'المجصه'
                ],
                [
                    'id' => 658,
                    'country_id' => 1,
                    'external_id' => '963950209',
                    'name_en' => 'am shieari',
                    'name_ar' => 'ام شعاري'
                ],
                [
                    'id' => 659,
                    'country_id' => 1,
                    'external_id' => '189912450',
                    'name_en' => 'alashqur',
                    'name_ar' => 'الاشقر'
                ],
                [
                    'id' => 660,
                    'country_id' => 1,
                    'external_id' => '1698624643',
                    'name_en' => 'Abu suhailat',
                    'name_ar' => 'ابو سهيلات'
                ],
                [
                    'id' => 661,
                    'country_id' => 1,
                    'external_id' => '924521356',
                    'name_en' => 'Bujilh',
                    'name_ar' => 'بجيله'
                ],
                [
                    'id' => 662,
                    'country_id' => 1,
                    'external_id' => '14693005',
                    'name_en' => 'Bada Bin Khalf',
                    'name_ar' => 'بدع بن خلف'
                ],
                [
                    'id' => 663,
                    'country_id' => 1,
                    'external_id' => '1389187470',
                    'name_en' => 'Alshuwayms',
                    'name_ar' => 'الشويمس'
                ],
                [
                    'id' => 664,
                    'country_id' => 1,
                    'external_id' => '749367439',
                    'name_en' => 'Albarqh',
                    'name_ar' => 'البرقه'
                ],
                [
                    'id' => 665,
                    'country_id' => 1,
                    'external_id' => '2121310088',
                    'name_en' => 'Alwaseah',
                    'name_ar' => 'الوسعه'
                ],
                [
                    'id' => 666,
                    'country_id' => 1,
                    'external_id' => '1214103177',
                    'name_en' => 'Al Aradiah',
                    'name_ar' => 'العراديه'
                ],
                [
                    'id' => 667,
                    'country_id' => 1,
                    'external_id' => '440065418',
                    'name_en' => 'Himah',
                    'name_ar' => 'حمه'
                ],
                [
                    'id' => 668,
                    'country_id' => 1,
                    'external_id' => '1946680459',
                    'name_en' => 'Alhalifh Alsufla',
                    'name_ar' => 'الحليفه السفلى'
                ],
                [
                    'id' => 669,
                    'country_id' => 1,
                    'external_id' => '1105992596',
                    'name_en' => 'Alhalifh Alalya',
                    'name_ar' => 'الحليفه العليا'
                ],
                [
                    'id' => 670,
                    'country_id' => 1,
                    'external_id' => '331954837',
                    'name_en' => 'Badayie Albadia',
                    'name_ar' => 'بدائع البادية'
                ],
                [
                    'id' => 671,
                    'country_id' => 1,
                    'external_id' => '1838569878',
                    'name_en' => 'Abu Suwysat',
                    'name_ar' => 'ابو سويسات'
                ],
                [
                    'id' => 672,
                    'country_id' => 1,
                    'external_id' => '1064532119',
                    'name_en' => 'Al dabia',
                    'name_ar' => 'الدابية'
                ],
                [
                    'id' => 673,
                    'country_id' => 1,
                    'external_id' => '156862352',
                    'name_en' => 'Qaryat you Albaha',
                    'name_ar' => 'قرية الباحة'
                ],
                [
                    'id' => 674,
                    'country_id' => 1,
                    'external_id' => '1529259665',
                    'name_en' => 'Adowat Athqub',
                    'name_ar' => 'عدوة اثقب'
                ],
                [
                    'id' => 675,
                    'country_id' => 1,
                    'external_id' => '889439634',
                    'name_en' => 'Shueayb Alqarn',
                    'name_ar' => 'شعيب القرن'
                ],
                [
                    'id' => 676,
                    'country_id' => 1,
                    'external_id' => '115926163',
                    'name_en' => 'Al Raqi',
                    'name_ar' => 'الرقعي'
                ],
                [
                    'id' => 677,
                    'country_id' => 1,
                    'external_id' => '1354040220',
                    'name_en' => 'Bani Malik',
                    'name_ar' => 'بني مالك'
                ],
                [
                    'id' => 678,
                    'country_id' => 1,
                    'external_id' => '580002461',
                    'name_en' => 'Dos',
                    'name_ar' => 'دوس'
                ],
                [
                    'id' => 679,
                    'country_id' => 1,
                    'external_id' => '1671302116',
                    'name_en' => 'الريث',
                    'name_ar' => 'محافظة الريث'
                ],
                [
                    'id' => 680,
                    'country_id' => 1,
                    'external_id' => '1031482085',
                    'name_en' => 'Al Salamah',
                    'name_ar' => 'ال سلمة'
                ],
                [
                    'id' => 681,
                    'country_id' => 1,
                    'external_id' => '1496148199',
                    'name_en' => 'Alaysaoia',
                    'name_ar' => 'العيساوية'
                ],
                [
                    'id' => 682,
                    'country_id' => 1,
                    'external_id' => '722106336',
                    'name_en' => 'Qlayyb Khedr',
                    'name_ar' => 'قليب خضر'
                ],
                [
                    'id' => 683,
                    'country_id' => 1,
                    'external_id' => '80778977',
                    'name_en' => 'inboun',
                    'name_ar' => 'قرية انبوان'
                ],
                [
                    'id' => 684,
                    'country_id' => 1,
                    'external_id' => '1455273442',
                    'name_en' => 'Shaq',
                    'name_ar' => 'قرية الشق'
                ],
                [
                    'id' => 685,
                    'country_id' => 1,
                    'external_id' => '547017955',
                    'name_en' => 'amaeer almrir',
                    'name_ar' => 'قرية عمائر المرير'
                ],
                [
                    'id' => 686,
                    'country_id' => 1,
                    'external_id' => '1919415276',
                    'name_en' => 'Almzka',
                    'name_ar' => 'قرية المزكاء'
                ],
                [
                    'id' => 687,
                    'country_id' => 1,
                    'external_id' => '1280053997',
                    'name_en' => 'Alqrysah',
                    'name_ar' => 'قرية الغريسة'
                ],
                [
                    'id' => 688,
                    'country_id' => 1,
                    'external_id' => '506016238',
                    'name_en' => 'darqat',
                    'name_ar' => 'قرية ضرغط'
                ],
                [
                    'id' => 689,
                    'country_id' => 1,
                    'external_id' => '1811304687',
                    'name_en' => 'Oum hrameel',
                    'name_ar' => 'قرية ام حرامل'
                ],
                [
                    'id' => 690,
                    'country_id' => 1,
                    'external_id' => '1171488744',
                    'name_en' => 'Almank',
                    'name_ar' => 'قرية المناخ'
                ],
                [
                    'id' => 691,
                    'country_id' => 1,
                    'external_id' => '398040809',
                    'name_en' => 'Al hoyt',
                    'name_ar' => 'الحويط'
                ],
                [
                    'id' => 692,
                    'country_id' => 1,
                    'external_id' => '1636220394',
                    'name_en' => 'Al through',
                    'name_ar' => 'الضروة'
                ],
                [
                    'id' => 693,
                    'country_id' => 1,
                    'external_id' => '862182635',
                    'name_en' => 'Abla',
                    'name_ar' => 'ابله'
                ],
                [
                    'id' => 694,
                    'country_id' => 1,
                    'external_id' => '222886900',
                    'name_en' => 'althahaya',
                    'name_ar' => 'الضحايا'
                ],
                [
                    'id' => 695,
                    'country_id' => 1,
                    'external_id' => '1595218677',
                    'name_en' => 'karshafa',
                    'name_ar' => 'الكرشافة'
                ],
                [
                    'id' => 696,
                    'country_id' => 1,
                    'external_id' => '686963190',
                    'name_en' => 'Abu Dweiha',
                    'name_ar' => 'ابو دويحات'
                ],
                [
                    'id' => 697,
                    'country_id' => 1,
                    'external_id' => '2061457655',
                    'name_en' => 'Al najeeal',
                    'name_ar' => 'النجيل'
                ],
                [
                    'id' => 698,
                    'country_id' => 1,
                    'external_id' => '1420060656',
                    'name_en' => 'AL MAHANA',
                    'name_ar' => 'المحنا'
                ],
                [
                    'id' => 699,
                    'country_id' => 1,
                    'external_id' => '646088433',
                    'name_en' => 'lelkhen',
                    'name_ar' => 'للخين'
                ],
                [
                    'id' => 700,
                    'country_id' => 1,
                    'external_id' => '1886365170',
                    'name_en' => 'Thuleil',
                    'name_ar' => 'ثويليل'
                ],
                [
                    'id' => 701,
                    'country_id' => 1,
                    'external_id' => '1110754547',
                    'name_en' => 'North Sukhira',
                    'name_ar' => 'الصخيرا الجنوبيه'
                ],
                [
                    'id' => 702,
                    'country_id' => 1,
                    'external_id' => '470934524',
                    'name_en' => 'south sakira',
                    'name_ar' => 'الصخيرا الشمالية'
                ],
                [
                    'id' => 703,
                    'country_id' => 1,
                    'external_id' => '1778254589',
                    'name_en' => 'alhajalayh',
                    'name_ar' => 'الحجليه'
                ],
                [
                    'id' => 704,
                    'country_id' => 1,
                    'external_id' => '1004216830',
                    'name_en' => 'lidghibjih',
                    'name_ar' => 'الدغيبجه'
                ],
                [
                    'id' => 705,
                    'country_id' => 1,
                    'external_id' => '362823935',
                    'name_en' => 'alnaasifuh',
                    'name_ar' => 'الناصفه'
                ],
                [
                    'id' => 706,
                    'country_id' => 1,
                    'external_id' => '1737322488',
                    'name_en' => 'almarighuh',
                    'name_ar' => 'المريغه'
                ],
                [
                    'id' => 707,
                    'country_id' => 1,
                    'external_id' => '829132537',
                    'name_en' => 'alhuayan',
                    'name_ar' => 'الحويان'
                ],
                [
                    'id' => 708,
                    'country_id' => 1,
                    'external_id' => '53521914',
                    'name_en' => 'Thergad',
                    'name_ar' => 'ضريغط'
                ],
                [
                    'id' => 709,
                    'country_id' => 1,
                    'external_id' => '1562234107',
                    'name_en' => 'thlea al soan',
                    'name_ar' => 'ضليع الصوان'
                ],
                [
                    'id' => 710,
                    'country_id' => 1,
                    'external_id' => '788196292',
                    'name_en' => 'almuqaran',
                    'name_ar' => 'المقارن'
                ],
                [
                    'id' => 711,
                    'country_id' => 1,
                    'external_id' => '2026310341',
                    'name_en' => 'kranif',
                    'name_ar' => 'كرانيف'
                ],
                [
                    'id' => 712,
                    'country_id' => 1,
                    'external_id' => '1252796870',
                    'name_en' => 'alghirisat algharbiah',
                    'name_ar' => 'الغريسة الغربيه'
                ],
                [
                    'id' => 713,
                    'country_id' => 1,
                    'external_id' => '612976839',
                    'name_en' => 'khafij farhan',
                    'name_ar' => 'خفيج فرحان'
                ],
                [
                    'id' => 714,
                    'country_id' => 1,
                    'external_id' => '1985370048',
                    'name_en' => 'aldalie alrafdiu',
                    'name_ar' => 'الضليع الرفدي'
                ],
                [
                    'id' => 715,
                    'country_id' => 1,
                    'external_id' => '1077114561',
                    'name_en' => 'al qafj',
                    'name_ar' => 'الخفج'
                ],
                [
                    'id' => 716,
                    'country_id' => 1,
                    'external_id' => '303666626',
                    'name_en' => 'Al-Halila,',
                    'name_ar' => 'الحليلة'
                ],
                [
                    'id' => 717,
                    'country_id' => 1,
                    'external_id' => '1877390531',
                    'name_en' => 'Al-Kalabieh',
                    'name_ar' => 'الكلابية'
                ],
                [
                    'id' => 718,
                    'country_id' => 1,
                    'external_id' => '969135052',
                    'name_en' => 'Al-Iskan',
                    'name_ar' => 'الأسكان'
                ],
                [
                    'id' => 719,
                    'country_id' => 1,
                    'external_id' => '195621581',
                    'name_en' => 'Al-Miqdam',
                    'name_ar' => 'المقدام'
                ],
                [
                    'id' => 720,
                    'country_id' => 1,
                    'external_id' => '1702171086',
                    'name_en' => 'Al-Mansoura',
                    'name_ar' => 'المنصورة'
                ],
                [
                    'id' => 721,
                    'country_id' => 1,
                    'external_id' => '928133327',
                    'name_en' => 'Al-Qarah',
                    'name_ar' => 'القارة'
                ],
                [
                    'id' => 722,
                    'country_id' => 1,
                    'external_id' => '20930504',
                    'name_en' => 'Al-Tuwaither',
                    'name_ar' => 'التويثير'
                ],
                [
                    'id' => 723,
                    'country_id' => 1,
                    'external_id' => '1392803529',
                    'name_en' => 'Al-Markaz',
                    'name_ar' => 'المركز'
                ],
                [
                    'id' => 724,
                    'country_id' => 1,
                    'external_id' => '753049034',
                    'name_en' => 'Al-Shu’bah',
                    'name_ar' => 'الشعبة'
                ],
                [
                    'id' => 725,
                    'country_id' => 1,
                    'external_id' => '1217715156',
                    'name_en' => 'Alajfar',
                    'name_ar' => 'الاجفر'
                ],
                [
                    'id' => 726,
                    'country_id' => 1,
                    'external_id' => '443677397',
                    'name_en' => 'Alkuir',
                    'name_ar' => 'الخوير'
                ],
                [
                    'id' => 727,
                    'country_id' => 1,
                    'external_id' => '1952324054',
                    'name_en' => 'Alzbyryah',
                    'name_ar' => 'الزبيرة'
                ],
                [
                    'id' => 728,
                    'country_id' => 1,
                    'external_id' => '1178286295',
                    'name_en' => 'Alkhfh',
                    'name_ar' => 'الكهفة'
                ],
                [
                    'id' => 729,
                    'country_id' => 1,
                    'external_id' => '268453840',
                    'name_en' => 'Alshalanih',
                    'name_ar' => 'الشعلانية'
                ],
                [
                    'id' => 730,
                    'country_id' => 1,
                    'external_id' => '1844274897',
                    'name_en' => 'Alrshawih',
                    'name_ar' => 'الارشاوية'
                ],
                [
                    'id' => 731,
                    'country_id' => 1,
                    'external_id' => '1070302674',
                    'name_en' => 'Almhynyh',
                    'name_ar' => 'المهينية'
                ],
                [
                    'id' => 732,
                    'country_id' => 1,
                    'external_id' => '160474323',
                    'name_en' => 'Alsayrh',
                    'name_ar' => 'السعيرة'
                ],
                [
                    'id' => 733,
                    'country_id' => 1,
                    'external_id' => '1534968796',
                    'name_en' => 'Shry',
                    'name_ar' => 'شري'
                ],
                [
                    'id' => 734,
                    'country_id' => 1,
                    'external_id' => '119996894',
                    'name_en' => 'Alkhyfyh',
                    'name_ar' => 'الكهيفية'
                ],
                [
                    'id' => 735,
                    'country_id' => 1,
                    'external_id' => '585715672',
                    'name_en' => 'albtalyh',
                    'name_ar' => 'البطالية'
                ],
                [
                    'id' => 736,
                    'country_id' => 1,
                    'external_id' => '2092330713',
                    'name_en' => 'Almnyzlh',
                    'name_ar' => 'المنيزلة'
                ],
                [
                    'id' => 737,
                    'country_id' => 1,
                    'external_id' => '1318882778',
                    'name_en' => 'Alfdol',
                    'name_ar' => 'الفضول'
                ],
                [
                    'id' => 738,
                    'country_id' => 1,
                    'external_id' => '410627291',
                    'name_en' => 'Alshahryn',
                    'name_ar' => 'الشهارين'
                ],
                [
                    'id' => 739,
                    'country_id' => 1,
                    'external_id' => '1783024420',
                    'name_en' => 'Almzawy',
                    'name_ar' => 'المزاوي'
                ],
                [
                    'id' => 740,
                    'country_id' => 1,
                    'external_id' => '1143204389',
                    'name_en' => 'Sharma',
                    'name_ar' => 'شرما'
                ],
                [
                    'id' => 741,
                    'country_id' => 1,
                    'external_id' => '1035089696',
                    'name_en' => 'Neom',
                    'name_ar' => 'نيوم'
                ],
                [
                    'id' => 742,
                    'country_id' => 1,
                    'external_id' => '725783587',
                    'name_en' => 'Al Mahani',
                    'name_ar' => 'المحاني'
                ],
                [
                    'id' => 743,
                    'country_id' => 1,
                    'external_id' => '87012140',
                    'name_en' => 'Bani Mazin',
                    'name_ar' => 'بني مازن'
                ],
                [
                    'id' => 744,
                    'country_id' => 1,
                    'external_id' => '1458885165',
                    'name_en' => 'Alarin',
                    'name_ar' => 'العرين'
                ],
                [
                    'id' => 745,
                    'country_id' => 1,
                    'external_id' => '550629678',
                    'name_en' => 'Alrawnah',
                    'name_ar' => 'الرونة'
                ],
                [
                    'id' => 746,
                    'country_id' => 1,
                    'external_id' => '1925058607',
                    'name_en' => 'Tamniah',
                    'name_ar' => 'تمنية'
                ],
                [
                    'id' => 747,
                    'country_id' => 1,
                    'external_id' => '1285242664',
                    'name_en' => 'Al Masgi',
                    'name_ar' => 'المسقي'
                ],
                [
                    'id' => 748,
                    'country_id' => 1,
                    'external_id' => '509632041',
                    'name_en' => 'Al Fawwarah',
                    'name_ar' => 'الفوارة'
                ],
                [
                    'id' => 749,
                    'country_id' => 1,
                    'external_id' => '2065065266',
                    'name_en' => 'madrekh',
                    'name_ar' => 'مدركه'
                ],
                [
                    'id' => 750,
                    'country_id' => 1,
                    'external_id' => '1425835059',
                    'name_en' => 'alaridh alshmalih',
                    'name_ar' => 'العرضية الشمالية'
                ],
                [
                    'id' => 751,
                    'country_id' => 1,
                    'external_id' => '1889976893',
                    'name_en' => 'Khamis Mutair',
                    'name_ar' => 'خميس مطير'
                ],
                [
                    'id' => 752,
                    'country_id' => 1,
                    'external_id' => '1115939134',
                    'name_en' => 'Al Haridhah',
                    'name_ar' => 'الحريضه'
                ],
                [
                    'id' => 753,
                    'country_id' => 1,
                    'external_id' => '1848979256',
                    'name_en' => 'Umm Aldoom',
                    'name_ar' => 'ام الدوم'
                ],
                [
                    'id' => 754,
                    'country_id' => 1,
                    'external_id' => '940723769',
                    'name_en' => 'Sulaiyl (Hail)',
                    'name_ar' => 'السليل (حائل)'
                ],
                [
                    'id' => 755,
                    'country_id' => 1,
                    'external_id' => '59755013',
                    'name_en' => 'AlFuwayliq',
                    'name_ar' => 'الفويلق'
                ],
                [
                    'id' => 756,
                    'country_id' => 1,
                    'external_id' => '1364938010',
                    'name_en' => 'Qia',
                    'name_ar' => 'قيا'
                ],
                [
                    'id' => 757,
                    'country_id' => 1,
                    'external_id' => '373757537',
                    'name_en' => 'Sabt Shamran',
                    'name_ar' => 'سبت شمران'
                ],
                [
                    'id' => 758,
                    'country_id' => 1,
                    'external_id' => '1928674666',
                    'name_en' => 'Binban',
                    'name_ar' => 'بنبان'
                ],
                [
                    'id' => 759,
                    'country_id' => 1,
                    'external_id' => '1288854635',
                    'name_en' => 'Al Ammarieh',
                    'name_ar' => 'العمارية'
                ],
                [
                    'id' => 760,
                    'country_id' => 1,
                    'external_id' => '237432409',
                    'name_en' => 'Almutayrifi',
                    'name_ar' => 'المطيرفي'
                ],
                [
                    'id' => 761,
                    'country_id' => 1,
                    'external_id' => '954761838',
                    'name_en' => 'Al Qahab',
                    'name_ar' => 'القهب'
                ],
                [
                    'id' => 762,
                    'country_id' => 1,
                    'external_id' => '179675503',
                    'name_en' => 'Ma`riyah',
                    'name_ar' => 'المعريه'
                ],
                [
                    'id' => 763,
                    'country_id' => 1,
                    'external_id' => '1687339112',
                    'name_en' => 'Mifa',
                    'name_ar' => 'ميفا'
                ],
                [
                    'id' => 764,
                    'country_id' => 1,
                    'external_id' => '4460138',
                    'name_en' => 'Tabālah',
                    'name_ar' => 'طبالة'
                ],
                [
                    'id' => 765,
                    'country_id' => 1,
                    'external_id' => '1377906027',
                    'name_en' => '`Ajmiyah',
                    'name_ar' => 'العجمية'
                ],
                [
                    'id' => 766,
                    'country_id' => 1,
                    'external_id' => '739134580',
                    'name_en' => '`Alya\'',
                    'name_ar' => 'علياء'
                ],
                [
                    'id' => 767,
                    'country_id' => 1,
                    'external_id' => '2045471605',
                    'name_en' => 'Abū Shayţānah',
                    'name_ar' => 'أبو شيطانة'
                ],
                [
                    'id' => 768,
                    'country_id' => 1,
                    'external_id' => '1269926518',
                    'name_en' => 'Ad Dulu`',
                    'name_ar' => 'الدلو'
                ],
                [
                    'id' => 769,
                    'country_id' => 1,
                    'external_id' => '631155063',
                    'name_en' => 'Al `Awali',
                    'name_ar' => 'العوالي'
                ],
                [
                    'id' => 770,
                    'country_id' => 1,
                    'external_id' => '2004600944',
                    'name_en' => 'Al `Uqul',
                    'name_ar' => 'العُقل'
                ],
                [
                    'id' => 771,
                    'country_id' => 1,
                    'external_id' => '1094768497',
                    'name_en' => 'Al Bardiyah',
                    'name_ar' => 'البردية'
                ],
                [
                    'id' => 772,
                    'country_id' => 1,
                    'external_id' => '321779314',
                    'name_en' => 'Al Biqa\'',
                    'name_ar' => 'البقاع'
                ],
                [
                    'id' => 773,
                    'country_id' => 1,
                    'external_id' => '1829377395',
                    'name_en' => 'Al Bustan',
                    'name_ar' => 'البستان'
                ],
                [
                    'id' => 774,
                    'country_id' => 1,
                    'external_id' => '146559869',
                    'name_en' => 'Al Jabriyah',
                    'name_ar' => 'الجابرية'
                ],
                [
                    'id' => 775,
                    'country_id' => 1,
                    'external_id' => '1520005758',
                    'name_en' => 'Al Jissah',
                    'name_ar' => 'الجصة'
                ],
                [
                    'id' => 776,
                    'country_id' => 1,
                    'external_id' => '879202687',
                    'name_en' => 'Al Malbanah',
                    'name_ar' => 'الملبنة'
                ],
                [
                    'id' => 777,
                    'country_id' => 1,
                    'external_id' => '105689208',
                    'name_en' => 'Al Mufrihat',
                    'name_ar' => 'المفرحات'
                ],
                [
                    'id' => 778,
                    'country_id' => 1,
                    'external_id' => '1344921465',
                    'name_en' => 'Al Multasa',
                    'name_ar' => 'الملتقى'
                ],
                [
                    'id' => 779,
                    'country_id' => 1,
                    'external_id' => '771161722',
                    'name_en' => 'Al Wuday',
                    'name_ar' => 'الوداي'
                ],
                [
                    'id' => 780,
                    'country_id' => 1,
                    'external_id' => '2144542075',
                    'name_en' => 'As Sadayir',
                    'name_ar' => 'الصداير'
                ],
                [
                    'id' => 781,
                    'country_id' => 1,
                    'external_id' => '1236810820',
                    'name_en' => 'As Safra\'',
                    'name_ar' => 'الصفراء'
                ],
                [
                    'id' => 782,
                    'country_id' => 1,
                    'external_id' => '461724485',
                    'name_en' => 'As Sumariyah',
                    'name_ar' => 'السومرية'
                ],
                [
                    'id' => 783,
                    'country_id' => 1,
                    'external_id' => '1969388102',
                    'name_en' => 'As Suwayriqiyah',
                    'name_ar' => 'السويريقية'
                ],
                [
                    'id' => 784,
                    'country_id' => 1,
                    'external_id' => '1195940167',
                    'name_en' => 'Ash Shufayyah',
                    'name_ar' => 'الشفاية'
                ],
                [
                    'id' => 785,
                    'country_id' => 1,
                    'external_id' => '286636096',
                    'name_en' => 'Asira',
                    'name_ar' => 'عسيرة'
                ],
                [
                    'id' => 786,
                    'country_id' => 1,
                    'external_id' => '1660077889',
                    'name_en' => 'Baq`a\'',
                    'name_ar' => 'البقعة'
                ],
                [
                    'id' => 787,
                    'country_id' => 1,
                    'external_id' => '1021306434',
                    'name_en' => 'Bartiyah',
                    'name_ar' => 'برطيه'
                ],
                [
                    'id' => 788,
                    'country_id' => 1,
                    'external_id' => '245630275',
                    'name_en' => 'Birkah',
                    'name_ar' => 'البركة'
                ],
                [
                    'id' => 789,
                    'country_id' => 1,
                    'external_id' => '1484858444',
                    'name_en' => 'Far`',
                    'name_ar' => 'بعيدة'
                ],
                [
                    'id' => 790,
                    'country_id' => 1,
                    'external_id' => '711869261',
                    'name_en' => 'Fiji',
                    'name_ar' => 'فيجي'
                ],
                [
                    'id' => 791,
                    'country_id' => 1,
                    'external_id' => '72049230',
                    'name_en' => 'Harthiyah',
                    'name_ar' => 'الحارثية'
                ],
                [
                    'id' => 792,
                    'country_id' => 1,
                    'external_id' => '1443987791',
                    'name_en' => 'Haylat Radi al Baham',
                    'name_ar' => 'حي راضي البهام'
                ],
                [
                    'id' => 793,
                    'country_id' => 1,
                    'external_id' => '603889736',
                    'name_en' => 'Husayniyah',
                    'name_ar' => 'الحسينية'
                ],
                [
                    'id' => 794,
                    'country_id' => 1,
                    'external_id' => '2111557449',
                    'name_en' => 'Jadidah',
                    'name_ar' => 'الجديدة'
                ],
                [
                    'id' => 795,
                    'country_id' => 1,
                    'external_id' => '1335946826',
                    'name_en' => 'Khayf Fadil',
                    'name_ar' => 'خايف فاضل'
                ],
                [
                    'id' => 796,
                    'country_id' => 1,
                    'external_id' => '1802120276',
                    'name_en' => 'Mahattat al Hafah',
                    'name_ar' => 'محطة الحافة'
                ],
                [
                    'id' => 797,
                    'country_id' => 1,
                    'external_id' => '1161251669',
                    'name_en' => 'Maqrah',
                    'name_ar' => 'المقرة'
                ],
                [
                    'id' => 798,
                    'country_id' => 1,
                    'external_id' => '387738198',
                    'name_en' => 'Maqshush',
                    'name_ar' => 'مقشوش'
                ],
                [
                    'id' => 799,
                    'country_id' => 1,
                    'external_id' => '1627031895',
                    'name_en' => 'Masahili',
                    'name_ar' => 'ماساهيلي'
                ],
                [
                    'id' => 800,
                    'country_id' => 1,
                    'external_id' => '851945552',
                    'name_en' => 'Mawarah',
                    'name_ar' => 'مورة'
                ],
                [
                    'id' => 801,
                    'country_id' => 1,
                    'external_id' => '212645713',
                    'name_en' => 'Milhah',
                    'name_ar' => 'ملحة'
                ],
                [
                    'id' => 802,
                    'country_id' => 1,
                    'external_id' => '1586091602',
                    'name_en' => 'Qaba\'',
                    'name_ar' => 'قباء'
                ],
                [
                    'id' => 803,
                    'country_id' => 1,
                    'external_id' => '676787539',
                    'name_en' => 'Sha`tha\'',
                    'name_ar' => 'شعثا'
                ],
                [
                    'id' => 804,
                    'country_id' => 1,
                    'external_id' => '2050167900',
                    'name_en' => 'Sidi Hamzah',
                    'name_ar' => 'سيدي حمزة'
                ],
                [
                    'id' => 805,
                    'country_id' => 1,
                    'external_id' => '1410872157',
                    'name_en' => 'Suq Suwayq',
                    'name_ar' => 'سوق السويق'
                ],
                [
                    'id' => 806,
                    'country_id' => 1,
                    'external_id' => '568676958',
                    'name_en' => 'Suqubiya',
                    'name_ar' => 'الصوقبية'
                ],
                [
                    'id' => 807,
                    'country_id' => 1,
                    'external_id' => '1942122847',
                    'name_en' => 'Suwadah',
                    'name_ar' => 'سووادة'
                ],
                [
                    'id' => 808,
                    'country_id' => 1,
                    'external_id' => '1302892632',
                    'name_en' => 'Wasitah',
                    'name_ar' => 'الواسطة'
                ],
                [
                    'id' => 809,
                    'country_id' => 1,
                    'external_id' => '994049371',
                    'name_en' => 'Wed Alnkil',
                    'name_ar' => 'الأربعاء مدينة النخل'
                ],
                [
                    'id' => 810,
                    'country_id' => 1,
                    'external_id' => '352590756',
                    'name_en' => 'Al Ubaylah',
                    'name_ar' => 'العبيلة'
                ],
                [
                    'id' => 811,
                    'country_id' => 1,
                    'external_id' => '44791975',
                    'name_en' => 'Raḩīmah',
                    'name_ar' => 'رحيمة'
                ],
                [
                    'id' => 812,
                    'country_id' => 1,
                    'external_id' => '1550944160',
                    'name_en' => 'Abu Radif',
                    'name_ar' => 'أبو رديف'
                ],
                [
                    'id' => 813,
                    'country_id' => 1,
                    'external_id' => '777954977',
                    'name_en' => 'Al `Ulayin',
                    'name_ar' => 'العليين'
                ],
                [
                    'id' => 814,
                    'country_id' => 1,
                    'external_id' => '2017183138',
                    'name_en' => 'Aleasiluh',
                    'name_ar' => 'العسيلة'
                ],
                [
                    'id' => 815,
                    'country_id' => 1,
                    'external_id' => '1241572515',
                    'name_en' => 'Al Badawi',
                    'name_ar' => 'البدوي'
                ],
                [
                    'id' => 816,
                    'country_id' => 1,
                    'external_id' => '958901929',
                    'name_en' => 'Al Jadi',
                    'name_ar' => 'الجادي'
                ],
                [
                    'id' => 817,
                    'country_id' => 1,
                    'external_id' => '185388458',
                    'name_en' => 'Al Jawah',
                    'name_ar' => 'الجوهرة'
                ],
                [
                    'id' => 818,
                    'country_id' => 1,
                    'external_id' => '1693052075',
                    'name_en' => 'Al Jirbah',
                    'name_ar' => 'الجربة'
                ],
                [
                    'id' => 819,
                    'country_id' => 1,
                    'external_id' => '917900212',
                    'name_en' => 'Al Kawahilah',
                    'name_ar' => 'الكواهلة'
                ],
                [
                    'id' => 820,
                    'country_id' => 1,
                    'external_id' => '1383614902',
                    'name_en' => 'Al Kharabah Jizan',
                    'name_ar' => 'الخرابة جيزان'
                ],
                [
                    'id' => 821,
                    'country_id' => 1,
                    'external_id' => '742746295',
                    'name_en' => 'Al Kharadilah',
                    'name_ar' => 'الخرادلة'
                ],
                [
                    'id' => 822,
                    'country_id' => 1,
                    'external_id' => '1208522417',
                    'name_en' => 'Al Kirs',
                    'name_ar' => 'الكرس'
                ],
                [
                    'id' => 823,
                    'country_id' => 1,
                    'external_id' => '634762674',
                    'name_en' => 'Al Luqiyah',
                    'name_ar' => 'اللقية'
                ],
                [
                    'id' => 824,
                    'country_id' => 1,
                    'external_id' => '2008208563',
                    'name_en' => 'Al Ma`ayin',
                    'name_ar' => 'المعاين'
                ],
                [
                    'id' => 825,
                    'country_id' => 1,
                    'external_id' => '325325501',
                    'name_en' => 'Al Mayasam',
                    'name_ar' => 'المياسم'
                ],
                [
                    'id' => 826,
                    'country_id' => 1,
                    'external_id' => '1832989118',
                    'name_en' => 'Al Qa\'im',
                    'name_ar' => 'القائم'
                ],
                [
                    'id' => 827,
                    'country_id' => 1,
                    'external_id' => '151748536',
                    'name_en' => 'Al Qurayb',
                    'name_ar' => 'القريب'
                ],
                [
                    'id' => 828,
                    'country_id' => 1,
                    'external_id' => '1348533124',
                    'name_en' => 'Bakhshat Yamani',
                    'name_ar' => 'بخشات يماني'
                ],
                [
                    'id' => 829,
                    'country_id' => 1,
                    'external_id' => '575478405',
                    'name_en' => 'Farasān',
                    'name_ar' => 'فرسان'
                ],
                [
                    'id' => 830,
                    'country_id' => 1,
                    'external_id' => '2083142022',
                    'name_en' => 'Ghawiyah',
                    'name_ar' => 'الغاوية'
                ],
                [
                    'id' => 831,
                    'country_id' => 1,
                    'external_id' => '1240946823',
                    'name_en' => 'Hamayyah',
                    'name_ar' => 'حمايا'
                ],
                [
                    'id' => 832,
                    'country_id' => 1,
                    'external_id' => '467429248',
                    'name_en' => 'Hamdah',
                    'name_ar' => 'حمدة'
                ],
                [
                    'id' => 833,
                    'country_id' => 1,
                    'external_id' => '1975158401',
                    'name_en' => 'Juha Saudi Arabia',
                    'name_ar' => 'جحا السعودية'
                ],
                [
                    'id' => 834,
                    'country_id' => 1,
                    'external_id' => '1200072066',
                    'name_en' => 'Ka`lul',
                    'name_ar' => 'كا\'لول'
                ],
                [
                    'id' => 835,
                    'country_id' => 1,
                    'external_id' => '1490567311',
                    'name_en' => 'Khushaym',
                    'name_ar' => 'خشيم'
                ],
                [
                    'id' => 836,
                    'country_id' => 1,
                    'external_id' => '715485064',
                    'name_en' => 'Mahatah',
                    'name_ar' => 'المهاتة'
                ],
                [
                    'id' => 837,
                    'country_id' => 1,
                    'external_id' => '1913842580',
                    'name_en' => 'Mundaraq',
                    'name_ar' => 'مندراق'
                ],
                [
                    'id' => 838,
                    'country_id' => 1,
                    'external_id' => '1342114453',
                    'name_en' => 'Qitabir',
                    'name_ar' => 'قتابر'
                ],
                [
                    'id' => 839,
                    'country_id' => 1,
                    'external_id' => '432286102',
                    'name_en' => 'Quwayda\'',
                    'name_ar' => 'القويضة'
                ],
                [
                    'id' => 840,
                    'country_id' => 1,
                    'external_id' => '1805731991',
                    'name_en' => 'Rahwan',
                    'name_ar' => 'رهوان'
                ],
                [
                    'id' => 841,
                    'country_id' => 1,
                    'external_id' => '1630639506',
                    'name_en' => 'Salamah',
                    'name_ar' => 'سلامة'
                ],
                [
                    'id' => 842,
                    'country_id' => 1,
                    'external_id' => '1589703325',
                    'name_en' => 'Abu Hisani',
                    'name_ar' => 'أبو حسين'
                ],
                [
                    'id' => 843,
                    'country_id' => 1,
                    'external_id' => '682430878',
                    'name_en' => 'Abu Qirfah',
                    'name_ar' => 'أبو قرفة'
                ],
                [
                    'id' => 844,
                    'country_id' => 1,
                    'external_id' => '2055876767',
                    'name_en' => 'Abu Shu`ayb',
                    'name_ar' => 'أبو شعيب'
                ],
                [
                    'id' => 845,
                    'country_id' => 1,
                    'external_id' => '1415012248',
                    'name_en' => 'Ad Dabbah',
                    'name_ar' => 'الدبة'
                ],
                [
                    'id' => 846,
                    'country_id' => 1,
                    'external_id' => '641498777',
                    'name_en' => 'Ad Dawh',
                    'name_ar' => 'الدوحة'
                ],
                [
                    'id' => 847,
                    'country_id' => 1,
                    'external_id' => '1880792474',
                    'name_en' => 'Ad Dur',
                    'name_ar' => 'الدور'
                ],
                [
                    'id' => 848,
                    'country_id' => 1,
                    'external_id' => '1307032731',
                    'name_en' => 'Al Ābār',
                    'name_ar' => 'الآبار'
                ],
                [
                    'id' => 849,
                    'country_id' => 1,
                    'external_id' => '533519332',
                    'name_en' => 'Al Adl',
                    'name_ar' => 'العدل'
                ],
                [
                    'id' => 850,
                    'country_id' => 1,
                    'external_id' => '1772747493',
                    'name_en' => 'Al Ashraf',
                    'name_ar' => 'الأشرف'
                ],
                [
                    'id' => 851,
                    'country_id' => 1,
                    'external_id' => '997595622',
                    'name_en' => 'Al Balad',
                    'name_ar' => 'البلد'
                ],
                [
                    'id' => 852,
                    'country_id' => 1,
                    'external_id' => '357775591',
                    'name_en' => 'Al Barabir',
                    'name_ar' => 'البرابر'
                ],
                [
                    'id' => 853,
                    'country_id' => 1,
                    'external_id' => '1731741664',
                    'name_en' => 'Al Bi\'ar',
                    'name_ar' => 'البيار'
                ],
                [
                    'id' => 854,
                    'country_id' => 1,
                    'external_id' => '822437601',
                    'name_en' => 'Al Buraykah',
                    'name_ar' => 'البريكة'
                ],
                [
                    'id' => 855,
                    'country_id' => 1,
                    'external_id' => '48465378',
                    'name_en' => 'Al Faydah',
                    'name_ar' => 'الفايضة'
                ],
                [
                    'id' => 856,
                    'country_id' => 1,
                    'external_id' => '1556653283',
                    'name_en' => 'Al Fazz',
                    'name_ar' => 'الفاز'
                ],
                [
                    'id' => 857,
                    'country_id' => 1,
                    'external_id' => '2020795117',
                    'name_en' => 'Al Ghassalah',
                    'name_ar' => 'الغسالة'
                ],
                [
                    'id' => 858,
                    'country_id' => 1,
                    'external_id' => '1247740398',
                    'name_en' => 'Al Ghulah',
                    'name_ar' => 'الغولة'
                ],
                [
                    'id' => 859,
                    'country_id' => 1,
                    'external_id' => '1979797480',
                    'name_en' => 'Al Halaqah',
                    'name_ar' => 'الحلقة'
                ],
                [
                    'id' => 860,
                    'country_id' => 1,
                    'external_id' => '1139699433',
                    'name_en' => 'Al Hamimah',
                    'name_ar' => 'الحميمة'
                ],
                [
                    'id' => 861,
                    'country_id' => 1,
                    'external_id' => '498372074',
                    'name_en' => 'Al Harra\' Makkah',
                    'name_ar' => 'الحرّة مكة المكرمة'
                ],
                [
                    'id' => 862,
                    'country_id' => 1,
                    'external_id' => '1871817963',
                    'name_en' => 'Al Hawiyah',
                    'name_ar' => 'الحوية'
                ],
                [
                    'id' => 863,
                    'country_id' => 1,
                    'external_id' => '964611060',
                    'name_en' => 'Al Jadidah',
                    'name_ar' => 'الجديدة'
                ],
                [
                    'id' => 864,
                    'country_id' => 1,
                    'external_id' => '190573301',
                    'name_en' => 'Al Jami`ah',
                    'name_ar' => 'الجامعة'
                ],
                [
                    'id' => 865,
                    'country_id' => 1,
                    'external_id' => '1696598518',
                    'name_en' => 'Al Jid`',
                    'name_ar' => 'الجد'
                ],
                [
                    'id' => 866,
                    'country_id' => 1,
                    'external_id' => '15349744',
                    'name_en' => 'Al Khalas',
                    'name_ar' => 'الخلاص'
                ],
                [
                    'id' => 867,
                    'country_id' => 1,
                    'external_id' => '748451314',
                    'name_en' => 'Al Khaydar',
                    'name_ar' => 'الخيدر'
                ],
                [
                    'id' => 868,
                    'country_id' => 1,
                    'external_id' => '2121962739',
                    'name_en' => 'Al Khayf',
                    'name_ar' => 'الخيف'
                ],
                [
                    'id' => 869,
                    'country_id' => 1,
                    'external_id' => '1212658684',
                    'name_en' => 'Al Khulasah',
                    'name_ar' => 'الخلاصة'
                ],
                [
                    'id' => 870,
                    'country_id' => 1,
                    'external_id' => '439145213',
                    'name_en' => 'Al Kidwah',
                    'name_ar' => 'القدوة'
                ],
                [
                    'id' => 871,
                    'country_id' => 1,
                    'external_id' => '1946808830',
                    'name_en' => 'Al Kura`',
                    'name_ar' => 'القرى'
                ],
                [
                    'id' => 872,
                    'country_id' => 1,
                    'external_id' => '1104548095',
                    'name_en' => 'Al Ma`rash',
                    'name_ar' => 'المعارش'
                ],
                [
                    'id' => 873,
                    'country_id' => 1,
                    'external_id' => '330514424',
                    'name_en' => 'Al Madiq Makkah',
                    'name_ar' => 'المضيق مدينة مكة المكرمة'
                ],
                [
                    'id' => 874,
                    'country_id' => 1,
                    'external_id' => '1838702329',
                    'name_en' => 'Al Maghal',
                    'name_ar' => 'المغال'
                ],
                [
                    'id' => 875,
                    'country_id' => 1,
                    'external_id' => '1063615994',
                    'name_en' => 'Al Mahjar',
                    'name_ar' => 'المحجر'
                ],
                [
                    'id' => 876,
                    'country_id' => 1,
                    'external_id' => '114489798',
                    'name_en' => 'Al Mashayikh',
                    'name_ar' => 'المشايخ'
                ],
                [
                    'id' => 877,
                    'country_id' => 1,
                    'external_id' => '1354700999',
                    'name_en' => 'Al Mathnah',
                    'name_ar' => 'المثناة'
                ],
                [
                    'id' => 878,
                    'country_id' => 1,
                    'external_id' => '579086272',
                    'name_en' => 'Al Mubarak',
                    'name_ar' => 'المبارك'
                ],
                [
                    'id' => 879,
                    'country_id' => 1,
                    'external_id' => '2086749889',
                    'name_en' => 'Al Mudawwarah',
                    'name_ar' => 'المدورة'
                ],
                [
                    'id' => 880,
                    'country_id' => 1,
                    'external_id' => '1313760706',
                    'name_en' => 'Al Mulayha\'',
                    'name_ar' => 'المليحة'
                ],
                [
                    'id' => 881,
                    'country_id' => 1,
                    'external_id' => '1978770380',
                    'name_en' => 'Al Muqr',
                    'name_ar' => 'المقر'
                ],
                [
                    'id' => 882,
                    'country_id' => 1,
                    'external_id' => '1205781197',
                    'name_en' => 'Al Qadimah',
                    'name_ar' => 'القديمة'
                ],
                [
                    'id' => 883,
                    'country_id' => 1,
                    'external_id' => '297525710',
                    'name_en' => 'Al Qararah',
                    'name_ar' => 'القرارة'
                ],
                [
                    'id' => 884,
                    'country_id' => 1,
                    'external_id' => '1669333199',
                    'name_en' => 'Al Qawba`iyah',
                    'name_ar' => 'القوبعية'
                ],
                [
                    'id' => 885,
                    'country_id' => 1,
                    'external_id' => '1030565832',
                    'name_en' => 'Al Qirshan',
                    'name_ar' => 'القرشان'
                ],
                [
                    'id' => 886,
                    'country_id' => 1,
                    'external_id' => '256528073',
                    'name_en' => 'Al Qu`tubah',
                    'name_ar' => 'القحطانية'
                ],
                [
                    'id' => 887,
                    'country_id' => 1,
                    'external_id' => '1494707658',
                    'name_en' => 'Al Qufayf',
                    'name_ar' => 'القفيف'
                ],
                [
                    'id' => 888,
                    'country_id' => 1,
                    'external_id' => '721259723',
                    'name_en' => 'Al Ukhaydir',
                    'name_ar' => 'الأخيضر'
                ],
                [
                    'id' => 889,
                    'country_id' => 1,
                    'external_id' => '81439700',
                    'name_en' => 'Al Waht',
                    'name_ar' => 'الواحة'
                ],
                [
                    'id' => 890,
                    'country_id' => 1,
                    'external_id' => '1453837013',
                    'name_en' => 'Ar Rabwah as Sufla',
                    'name_ar' => 'الربوة السفلى'
                ],
                [
                    'id' => 891,
                    'country_id' => 1,
                    'external_id' => '546105814',
                    'name_en' => 'Ar Rafah',
                    'name_ar' => 'رفح'
                ],
                [
                    'id' => 892,
                    'country_id' => 1,
                    'external_id' => '1919486167',
                    'name_en' => 'Ar Rawdah ash Shamaliyah',
                    'name_ar' => 'الروضة الشمالية'
                ],
                [
                    'id' => 893,
                    'country_id' => 1,
                    'external_id' => '504575697',
                    'name_en' => 'Arya`',
                    'name_ar' => 'آريا'
                ],
                [
                    'id' => 894,
                    'country_id' => 1,
                    'external_id' => '1811437010',
                    'name_en' => 'As Sadr',
                    'name_ar' => 'الصدر'
                ],
                [
                    'id' => 895,
                    'country_id' => 1,
                    'external_id' => '1170568403',
                    'name_en' => 'As Samd ash Shamali',
                    'name_ar' => 'الصمد الشمالي'
                ],
                [
                    'id' => 896,
                    'country_id' => 1,
                    'external_id' => '396596188',
                    'name_en' => 'As Sifyani',
                    'name_ar' => 'السيفاني'
                ],
                [
                    'id' => 897,
                    'country_id' => 1,
                    'external_id' => '861262302',
                    'name_en' => 'Ash Shajwah',
                    'name_ar' => 'الشجوة'
                ],
                [
                    'id' => 898,
                    'country_id' => 1,
                    'external_id' => '1595875288',
                    'name_en' => 'Ash Shaybi',
                    'name_ar' => 'الشايبي'
                ],
                [
                    'id' => 899,
                    'country_id' => 1,
                    'external_id' => '686046937',
                    'name_en' => 'Ash Shi`b',
                    'name_ar' => 'الشعب'
                ],
                [
                    'id' => 900,
                    'country_id' => 1,
                    'external_id' => '1420721371',
                    'name_en' => 'Ash Shumaysi',
                    'name_ar' => 'الشميسي'
                ],
                [
                    'id' => 901,
                    'country_id' => 1,
                    'external_id' => '645176100',
                    'name_en' => 'Ash Shuwaybit',
                    'name_ar' => 'الشويب'
                ],
                [
                    'id' => 902,
                    'country_id' => 1,
                    'external_id' => '1884404261',
                    'name_en' => 'At Tan`im',
                    'name_ar' => 'في مدينة التنعيم'
                ],
                [
                    'id' => 903,
                    'country_id' => 1,
                    'external_id' => '1111415078',
                    'name_en' => 'At Tarfa\'',
                    'name_ar' => 'في مدينة الطرفة'
                ],
                [
                    'id' => 904,
                    'country_id' => 1,
                    'external_id' => '471595047',
                    'name_en' => 'At Turqi',
                    'name_ar' => 'في مدينة تركي'
                ],
                [
                    'id' => 905,
                    'country_id' => 1,
                    'external_id' => '1776289568',
                    'name_en' => 'Az Zilal',
                    'name_ar' => 'الظلال'
                ],
                [
                    'id' => 906,
                    'country_id' => 1,
                    'external_id' => '1003300385',
                    'name_en' => 'Az Zughbah',
                    'name_ar' => 'الزغبة'
                ],
                [
                    'id' => 907,
                    'country_id' => 1,
                    'external_id' => '363480354',
                    'name_en' => 'Az Zurra`',
                    'name_ar' => 'الزرة'
                ],
                [
                    'id' => 908,
                    'country_id' => 1,
                    'external_id' => '1735877667',
                    'name_en' => 'Az Zuwayb',
                    'name_ar' => 'الزوييب'
                ],
                [
                    'id' => 909,
                    'country_id' => 1,
                    'external_id' => '828212012',
                    'name_en' => 'Bahrat al Qadimah',
                    'name_ar' => 'بحرة القديمة'
                ],
                [
                    'id' => 910,
                    'country_id' => 1,
                    'external_id' => '1560789294',
                    'name_en' => 'Baranah',
                    'name_ar' => 'برانا'
                ],
                [
                    'id' => 911,
                    'country_id' => 1,
                    'external_id' => '787275823',
                    'name_en' => 'Barzah',
                    'name_ar' => 'برزة'
                ],
                [
                    'id' => 912,
                    'country_id' => 1,
                    'external_id' => '1251356201',
                    'name_en' => 'Buraykah',
                    'name_ar' => 'البريكة'
                ],
                [
                    'id' => 913,
                    'country_id' => 1,
                    'external_id' => '611536170',
                    'name_en' => 'Burayman',
                    'name_ar' => 'بريمان'
                ],
                [
                    'id' => 914,
                    'country_id' => 1,
                    'external_id' => '1985506347',
                    'name_en' => 'CITY GHRAN',
                    'name_ar' => 'غران'
                ],
                [
                    'id' => 915,
                    'country_id' => 1,
                    'external_id' => '1076267828',
                    'name_en' => 'Dabyah',
                    'name_ar' => 'الضبعية'
                ],
                [
                    'id' => 916,
                    'country_id' => 1,
                    'external_id' => '302230069',
                    'name_en' => 'Dughaybjah',
                    'name_ar' => 'دغيبجة'
                ],
                [
                    'id' => 917,
                    'country_id' => 1,
                    'external_id' => '1877526838',
                    'name_en' => 'Fayd',
                    'name_ar' => 'فايد'
                ],
                [
                    'id' => 918,
                    'country_id' => 1,
                    'external_id' => '968222775',
                    'name_en' => 'Ghran',
                    'name_ar' => 'غران'
                ],
                [
                    'id' => 919,
                    'country_id' => 1,
                    'external_id' => '194180912',
                    'name_en' => 'Haddat ash Sham',
                    'name_ar' => 'حدت الشام'
                ],
                [
                    'id' => 920,
                    'country_id' => 1,
                    'external_id' => '1702827569',
                    'name_en' => 'Hadhah',
                    'name_ar' => 'الحداه'
                ],
                [
                    'id' => 921,
                    'country_id' => 1,
                    'external_id' => '927216946',
                    'name_en' => 'Hajur',
                    'name_ar' => 'حجر'
                ],
                [
                    'id' => 922,
                    'country_id' => 1,
                    'external_id' => '18961459',
                    'name_en' => 'Halamah',
                    'name_ar' => 'الحلامة'
                ],
                [
                    'id' => 923,
                    'country_id' => 1,
                    'external_id' => '1393455932',
                    'name_en' => 'Husnah',
                    'name_ar' => 'الحسنة'
                ],
                [
                    'id' => 924,
                    'country_id' => 1,
                    'external_id' => '752128573',
                    'name_en' => 'Jarwal',
                    'name_ar' => 'جاروال'
                ],
                [
                    'id' => 925,
                    'country_id' => 1,
                    'external_id' => '2125574462',
                    'name_en' => 'Julayyil',
                    'name_ar' => 'الجليل'
                ],
                [
                    'id' => 926,
                    'country_id' => 1,
                    'external_id' => '1218367551',
                    'name_en' => 'Khumrah',
                    'name_ar' => 'الخمرة'
                ],
                [
                    'id' => 927,
                    'country_id' => 1,
                    'external_id' => '444333880',
                    'name_en' => 'Kulakh',
                    'name_ar' => 'كولاخ'
                ],
                [
                    'id' => 928,
                    'country_id' => 1,
                    'external_id' => '1950359097',
                    'name_en' => 'Mafruq',
                    'name_ar' => 'المفرق'
                ],
                [
                    'id' => 929,
                    'country_id' => 1,
                    'external_id' => '269114427',
                    'name_en' => 'Mashajji',
                    'name_ar' => 'ماشاجي'
                ],
                [
                    'id' => 930,
                    'country_id' => 1,
                    'external_id' => '1842838276',
                    'name_en' => 'Masihat Mahd al Hayl',
                    'name_ar' => 'مسيحة مهد الحيل'
                ],
                [
                    'id' => 931,
                    'country_id' => 1,
                    'external_id' => '302230069',
                    'name_en' => 'Dughaybjah',
                    'name_ar' => 'دغيبجة'
                ],
                [
                    'id' => 932,
                    'country_id' => 1,
                    'external_id' => '1877526838',
                    'name_en' => 'Fayd',
                    'name_ar' => 'فايد'
                ],
                [
                    'id' => 933,
                    'country_id' => 1,
                    'external_id' => '968222775',
                    'name_en' => 'Ghran',
                    'name_ar' => 'غران'
                ],
                [
                    'id' => 934,
                    'country_id' => 1,
                    'external_id' => '194180912',
                    'name_en' => 'Haddat ash Sham',
                    'name_ar' => 'حدت الشام'
                ],
                [
                    'id' => 935,
                    'country_id' => 1,
                    'external_id' => '1702827569',
                    'name_en' => 'Hadhah',
                    'name_ar' => 'الحداه'
                ],
                [
                    'id' => 936,
                    'country_id' => 1,
                    'external_id' => '927216946',
                    'name_en' => 'Hajur',
                    'name_ar' => 'حجر'
                ],
                [
                    'id' => 937,
                    'country_id' => 1,
                    'external_id' => '18961459',
                    'name_en' => 'Halamah',
                    'name_ar' => 'الحلامة'
                ],
                [
                    'id' => 938,
                    'country_id' => 1,
                    'external_id' => '1393455932',
                    'name_en' => 'Husnah',
                    'name_ar' => 'الحسنة'
                ],
                [
                    'id' => 939,
                    'country_id' => 1,
                    'external_id' => '752128573',
                    'name_en' => 'Jarwal',
                    'name_ar' => 'جاروال'
                ],
                [
                    'id' => 940,
                    'country_id' => 1,
                    'external_id' => '2125574462',
                    'name_en' => 'Julayyil',
                    'name_ar' => 'الجليل'
                ],
                [
                    'id' => 941,
                    'country_id' => 1,
                    'external_id' => '1218367551',
                    'name_en' => 'Khumrah',
                    'name_ar' => 'الخمرة'
                ],
                [
                    'id' => 942,
                    'country_id' => 1,
                    'external_id' => '444333880',
                    'name_en' => 'Kulakh',
                    'name_ar' => 'كولاخ'
                ],
                [
                    'id' => 943,
                    'country_id' => 1,
                    'external_id' => '1950359097',
                    'name_en' => 'Mafruq',
                    'name_ar' => 'المفرق'
                ],
                [
                    'id' => 944,
                    'country_id' => 1,
                    'external_id' => '269114427',
                    'name_en' => 'Mashajji',
                    'name_ar' => 'ماشاجي'
                ],
                [
                    'id' => 945,
                    'country_id' => 1,
                    'external_id' => '1842838276',
                    'name_en' => 'Masihat Mahd al Hayl',
                    'name_ar' => 'مسيحة مهد الحيل'
                ],
                [
                    'id' => 946,
                    'country_id' => 1,
                    'external_id' => '1069390341',
                    'name_en' => 'Maskar',
                    'name_ar' => 'مسكار'
                ],
                [
                    'id' => 947,
                    'country_id' => 1,
                    'external_id' => '161134854',
                    'name_en' => 'Matiyah',
                    'name_ar' => 'مطية'
                ],
                [
                    'id' => 948,
                    'country_id' => 1,
                    'external_id' => '120129025',
                    'name_en' => 'Mushrif',
                    'name_ar' => 'مشرف'
                ],
                [
                    'id' => 949,
                    'country_id' => 1,
                    'external_id' => '1358308610',
                    'name_en' => 'Nughayshiyah',
                    'name_ar' => 'النغيشية'
                ],
                [
                    'id' => 950,
                    'country_id' => 1,
                    'external_id' => '584270851',
                    'name_en' => 'Nuzlat al Faqin',
                    'name_ar' => 'نزلة الفقن'
                ],
                [
                    'id' => 951,
                    'country_id' => 1,
                    'external_id' => '1317437965',
                    'name_en' => 'Quwayzah',
                    'name_ar' => 'قويزة'
                ],
                [
                    'id' => 952,
                    'country_id' => 1,
                    'external_id' => '409182478',
                    'name_en' => 'Rabwah Ghran',
                    'name_ar' => 'ربوة غران'
                ],
                [
                    'id' => 953,
                    'country_id' => 1,
                    'external_id' => '1783152655',
                    'name_en' => 'Raqiyah',
                    'name_ar' => 'راقية'
                ],
                [
                    'id' => 954,
                    'country_id' => 1,
                    'external_id' => '1142288136',
                    'name_en' => 'Sabuhah',
                    'name_ar' => 'صبوحة'
                ],
                [
                    'id' => 955,
                    'country_id' => 1,
                    'external_id' => '301075977',
                    'name_en' => 'Shira`ayn',
                    'name_ar' => 'شراعين'
                ],
                [
                    'id' => 956,
                    'country_id' => 1,
                    'external_id' => '1675570442',
                    'name_en' => 'Sulaym',
                    'name_ar' => 'السليم'
                ],
                [
                    'id' => 957,
                    'country_id' => 1,
                    'external_id' => '1034177547',
                    'name_en' => 'Sumaymah',
                    'name_ar' => 'السميمة'
                ],
                [
                    'id' => 958,
                    'country_id' => 1,
                    'external_id' => '260139796',
                    'name_en' => 'Suways',
                    'name_ar' => 'السويس'
                ],
                [
                    'id' => 959,
                    'country_id' => 1,
                    'external_id' => '1500482069',
                    'name_en' => 'Tharwah',
                    'name_ar' => 'ثروة'
                ],
                [
                    'id' => 960,
                    'country_id' => 1,
                    'external_id' => '724871446',
                    'name_en' => 'Wadi al Jalil',
                    'name_ar' => 'وادي الجليل'
                ],
                [
                    'id' => 961,
                    'country_id' => 1,
                    'external_id' => '1459541776',
                    'name_en' => 'Ain AlBaraha',
                    'name_ar' => 'عين البراحة'
                ],
                [
                    'id' => 962,
                    'country_id' => 1,
                    'external_id' => '551286289',
                    'name_en' => 'Al Bir',
                    'name_ar' => 'البير'
                ],
                [
                    'id' => 963,
                    'country_id' => 1,
                    'external_id' => '1923093778',
                    'name_en' => 'Al Hair',
                    'name_ar' => 'الهير'
                ],
                [
                    'id' => 964,
                    'country_id' => 1,
                    'external_id' => '510284572',
                    'name_en' => 'As Salamiyah',
                    'name_ar' => 'السلمية'
                ],
                [
                    'id' => 965,
                    'country_id' => 1,
                    'external_id' => '1748464157',
                    'name_en' => 'As Sulayyil',
                    'name_ar' => 'السليل'
                ],
                [
                    'id' => 966,
                    'country_id' => 1,
                    'external_id' => '975016222',
                    'name_en' => 'Manfuha',
                    'name_ar' => 'منفوحة'
                ],
                [
                    'id' => 967,
                    'country_id' => 1,
                    'external_id' => '402305055',
                    'name_en' => 'Najan',
                    'name_ar' => 'ناجان'
                ],
                [
                    'id' => 968,
                    'country_id' => 1,
                    'external_id' => '355365311',
                    'name_en' => 'Alsahafa',
                    'name_ar' => 'السهافة'
                ],
                [
                    'id' => 969,
                    'country_id' => 1,
                    'external_id' => '1727303864',
                    'name_en' => 'Ar-Rass',
                    'name_ar' => 'الرس'
                ],
                [
                    'id' => 970,
                    'country_id' => 1,
                    'external_id' => '819052473',
                    'name_en' => 'Aj-Jowar',
                    'name_ar' => 'الجوار'
                ],
                [
                    'id' => 971,
                    'country_id' => 1,
                    'external_id' => '46063290',
                    'name_en' => 'Althalm',
                    'name_ar' => 'الثلم'
                ],
                [
                    'id' => 972,
                    'country_id' => 1,
                    'external_id' => '1553726907',
                    'name_en' => 'Qulet Al Beir',
                    'name_ar' => 'قلة البير'
                ],
                [
                    'id' => 973,
                    'country_id' => 1,
                    'external_id' => '778050692',
                    'name_en' => 'Al Qanabir',
                    'name_ar' => 'القنابير'
                ],
                [
                    'id' => 974,
                    'country_id' => 1,
                    'external_id' => '2018327429',
                    'name_en' => 'Al Khatw',
                    'name_ar' => 'الخطو'
                ],
                [
                    'id' => 975,
                    'country_id' => 1,
                    'external_id' => '1244289670',
                    'name_en' => 'Darfan',
                    'name_ar' => 'ضرفان'
                ],
                [
                    'id' => 976,
                    'country_id' => 1,
                    'external_id' => '670529927',
                    'name_en' => 'Aldamaah',
                    'name_ar' => 'الدماح'
                ],
                [
                    'id' => 977,
                    'country_id' => 1,
                    'external_id' => '1910347904',
                    'name_en' => 'Altawaruh',
                    'name_ar' => 'التوره'
                ],
                [
                    'id' => 978,
                    'country_id' => 1,
                    'external_id' => '1136306049',
                    'name_en' => 'Al Senam',
                    'name_ar' => 'السنام'
                ],
                [
                    'id' => 979,
                    'country_id' => 1,
                    'external_id' => '495437442',
                    'name_en' => 'Al Qayshaban',
                    'name_ar' => 'القيشبان'
                ],
                [
                    'id' => 980,
                    'country_id' => 1,
                    'external_id' => '1869407619',
                    'name_en' => 'Al Omrah',
                    'name_ar' => 'العمره'
                ],
                [
                    'id' => 981,
                    'country_id' => 1,
                    'external_id' => '961086604',
                    'name_en' => 'An-Nukhbah',
                    'name_ar' => 'النخبه'
                ],
                [
                    'id' => 982,
                    'country_id' => 1,
                    'external_id' => '186000269',
                    'name_en' => 'Alhamam',
                    'name_ar' => 'الحمام'
                ],
                [
                    'id' => 983,
                    'country_id' => 1,
                    'external_id' => '1693663886',
                    'name_en' => 'Alqimar ',
                    'name_ar' => 'القمار'
                ],
                [
                    'id' => 984,
                    'country_id' => 1,
                    'external_id' => '920150415',
                    'name_en' => 'Al Luaythah',
                    'name_ar' => 'اللعيثه'
                ],
                [
                    'id' => 985,
                    'country_id' => 1,
                    'external_id' => '10911880',
                    'name_en' => 'Albrawgh',
                    'name_ar' => 'البراوغ'
                ],
                [
                    'id' => 986,
                    'country_id' => 1,
                    'external_id' => '1384361865',
                    'name_en' => 'Al Murah',
                    'name_ar' => 'المره'
                ],
                [
                    'id' => 987,
                    'country_id' => 1,
                    'external_id' => '745066122',
                    'name_en' => 'Ash-Shuryani',
                    'name_ar' => 'الشرياني'
                ],
                [
                    'id' => 988,
                    'country_id' => 1,
                    'external_id' => '2117463435',
                    'name_en' => 'Al Habib',
                    'name_ar' => 'ال حبيب'
                ],
                [
                    'id' => 989,
                    'country_id' => 1,
                    'external_id' => '1209142420',
                    'name_en' => 'Alkhawrmuh',
                    'name_ar' => 'الخورمه'
                ],
                [
                    'id' => 990,
                    'country_id' => 1,
                    'external_id' => '637479829',
                    'name_en' => 'Al Qatadah',
                    'name_ar' => 'القتاده'
                ],
                [
                    'id' => 991,
                    'country_id' => 1,
                    'external_id' => '2009352854',
                    'name_en' => 'Altarafa ',
                    'name_ar' => 'الطرافة'
                ],
                [
                    'id' => 992,
                    'country_id' => 1,
                    'external_id' => '1101097367',
                    'name_en' => 'Al Muthbat',
                    'name_ar' => 'المثبات'
                ],
                [
                    'id' => 993,
                    'country_id' => 1,
                    'external_id' => '328173712',
                    'name_en' => 'Al Quraythat',
                    'name_ar' => 'القريثات'
                ],
                [
                    'id' => 994,
                    'country_id' => 1,
                    'external_id' => '1834260369',
                    'name_en' => 'Mithraruh',
                    'name_ar' => 'مثراره'
                ],
                [
                    'id' => 995,
                    'country_id' => 1,
                    'external_id' => '1060222610',
                    'name_en' => 'Sudanh',
                    'name_ar' => 'سودانه'
                ],
                [
                    'id' => 996,
                    'country_id' => 1,
                    'external_id' => '153015699',
                    'name_en' => 'Al Gharbye',
                    'name_ar' => 'الغربي'
                ],
                [
                    'id' => 997,
                    'country_id' => 1,
                    'external_id' => '1526461596',
                    'name_en' => 'Albarda Ealaa Bin Musaa',
                    'name_ar' => 'على بن موسى'
                ],
                [
                    'id' => 998,
                    'country_id' => 1,
                    'external_id' => '885003165',
                    'name_en' => 'As-Sulaah',
                    'name_ar' => 'السلعه'
                ],
                [
                    'id' => 999,
                    'country_id' => 1,
                    'external_id' => '112013982',
                    'name_en' => 'Al Muqaar',
                    'name_ar' => 'المعقر'
                ],
                [
                    'id' => 1000,
                    'country_id' => 1,
                    'external_id' => '1351242143',
                    'name_en' => 'Altahuluh',
                    'name_ar' => 'الطحله'
                ],
                [
                    'id' => 1001,
                    'country_id' => 1,
                    'external_id' => '576155800',
                    'name_en' => 'Hafnah',
                    'name_ar' => 'حفنه'
                ],
                [
                    'id' => 1002,
                    'country_id' => 1,
                    'external_id' => '2084413337',
                    'name_en' => 'Aleuzayr',
                    'name_ar' => 'العزير'
                ],
                [
                    'id' => 1003,
                    'country_id' => 1,
                    'external_id' => '1310375578',
                    'name_en' => 'Ghatwet Ar-Rujua',
                    'name_ar' => 'خطوة الرجوع'
                ],
                [
                    'id' => 1004,
                    'country_id' => 1,
                    'external_id' => '468180379',
                    'name_en' => 'Ash-Shatba',
                    'name_ar' => 'الشطبه'
                ],
                [
                    'id' => 1005,
                    'country_id' => 1,
                    'external_id' => '1976368356',
                    'name_en' => 'Am Qisah',
                    'name_ar' => 'ام قصة'
                ],
                [
                    'id' => 1006,
                    'country_id' => 1,
                    'external_id' => '1202265061',
                    'name_en' => 'Dahaned',
                    'name_ar' => 'دحانض'
                ],
                [
                    'id' => 1007,
                    'country_id' => 1,
                    'external_id' => '292960998',
                    'name_en' => 'Mahdhouah',
                    'name_ar' => 'محظوه'
                ],
                [
                    'id' => 1008,
                    'country_id' => 1,
                    'external_id' => '1666406887',
                    'name_en' => 'Umm Aleawd',
                    'name_ar' => 'ام العود'
                ],
                [
                    'id' => 1009,
                    'country_id' => 1,
                    'external_id' => '252086241',
                    'name_en' => 'Am Almawqid ',
                    'name_ar' => 'ام الموقد'
                ],
                [
                    'id' => 1010,
                    'country_id' => 1,
                    'external_id' => '1491314402',
                    'name_en' => 'Om Al Hanashan',
                    'name_ar' => 'ام الحنشان'
                ],
                [
                    'id' => 1011,
                    'country_id' => 1,
                    'external_id' => '717800931',
                    'name_en' => 'Alqimmat',
                    'name_ar' => 'القمات'
                ],
                [
                    'id' => 1012,
                    'country_id' => 1,
                    'external_id' => '76932332',
                    'name_en' => 'Rakhd',
                    'name_ar' => 'رخد'
                ],
                [
                    'id' => 1013,
                    'country_id' => 1,
                    'external_id' => '1450312685',
                    'name_en' => 'Shat Sumayel',
                    'name_ar' => 'شط صميل'
                ],
                [
                    'id' => 1014,
                    'country_id' => 1,
                    'external_id' => '543105774',
                    'name_en' => 'Am Alminamii ',
                    'name_ar' => 'ام المنمي'
                ],
                [
                    'id' => 1015,
                    'country_id' => 1,
                    'external_id' => '1914978799',
                    'name_en' => 'Radef Al Jamayem',
                    'name_ar' => 'رادف الجمايم'
                ],
                [
                    'id' => 1016,
                    'country_id' => 1,
                    'external_id' => '1275158760',
                    'name_en' => 'Mufatah Rayda',
                    'name_ar' => 'مفتح ريدة'
                ],
                [
                    'id' => 1017,
                    'country_id' => 1,
                    'external_id' => '435130345',
                    'name_en' => 'Albarda',
                    'name_ar' => 'البردة'
                ],
                [
                    'id' => 1018,
                    'country_id' => 1,
                    'external_id' => '1807003370',
                    'name_en' => 'Lebraa',
                    'name_ar' => 'لبراء'
                ],
                [
                    'id' => 1019,
                    'country_id' => 1,
                    'external_id' => '1167183339',
                    'name_en' => 'Qaem Malfi',
                    'name_ar' => 'قائم ملفى'
                ],
                [
                    'id' => 1020,
                    'country_id' => 1,
                    'external_id' => '394194164',
                    'name_en' => 'Adam',
                    'name_ar' => 'ادم'
                ],
                [
                    'id' => 1021,
                    'country_id' => 1,
                    'external_id' => '1633356789',
                    'name_en' => 'Musal',
                    'name_ar' => 'مصل'
                ],
                [
                    'id' => 1022,
                    'country_id' => 1,
                    'external_id' => '857746166',
                    'name_en' => 'Fyd Qaein',
                    'name_ar' => 'فيد قاعين'
                ],
                [
                    'id' => 1023,
                    'country_id' => 1,
                    'external_id' => '218974711',
                    'name_en' => 'Qulet Ash-Shat',
                    'name_ar' => 'قله الشط'
                ],
                [
                    'id' => 1024,
                    'country_id' => 1,
                    'external_id' => '1592420592',
                    'name_en' => 'Aleard',
                    'name_ar' => 'العرض'
                ],
                [
                    'id' => 1025,
                    'country_id' => 1,
                    'external_id' => '683112433',
                    'name_en' => 'Alkhaseiu ',
                    'name_ar' => 'الخسعي'
                ],
                [
                    'id' => 1026,
                    'country_id' => 1,
                    'external_id' => '2057148146',
                    'name_en' => 'Al Masah',
                    'name_ar' => 'المصه'
                ],
                [
                    'id' => 1027,
                    'country_id' => 1,
                    'external_id' => '1417328115',
                    'name_en' => 'Alsufunuh',
                    'name_ar' => 'السفنه'
                ],
                [
                    'id' => 1028,
                    'country_id' => 1,
                    'external_id' => '642241788',
                    'name_en' => 'Aljawaayin',
                    'name_ar' => 'الجوا ين'
                ],
                [
                    'id' => 1029,
                    'country_id' => 1,
                    'external_id' => '1881994237',
                    'name_en' => 'Marawi Al Khabrayah',
                    'name_ar' => 'مراوى الخبرايه'
                ],
                [
                    'id' => 1030,
                    'country_id' => 1,
                    'external_id' => '1107890942',
                    'name_en' => 'Almahmur',
                    'name_ar' => 'المحمور'
                ],
                [
                    'id' => 1031,
                    'country_id' => 1,
                    'external_id' => '534131199',
                    'name_en' => 'Dhirae Al Muflih',
                    'name_ar' => 'ذراع ال مفلح'
                ],
                [
                    'id' => 1032,
                    'country_id' => 1,
                    'external_id' => '1773359352',
                    'name_en' => 'Sulah',
                    'name_ar' => 'صوله'
                ],
                [
                    'id' => 1033,
                    'country_id' => 1,
                    'external_id' => '999849977',
                    'name_en' => 'Dhirae Almukhilih',
                    'name_ar' => 'ذراع المخيله'
                ],
                [
                    'id' => 1034,
                    'country_id' => 1,
                    'external_id' => '359046906',
                    'name_en' => 'Almaraba ',
                    'name_ar' => 'المربة'
                ],
                [
                    'id' => 1035,
                    'country_id' => 1,
                    'external_id' => '1732492795',
                    'name_en' => 'Ad-Dahar',
                    'name_ar' => 'الدحر'
                ],
                [
                    'id' => 1036,
                    'country_id' => 1,
                    'external_id' => '824761540',
                    'name_en' => 'Qulat Qaah',
                    'name_ar' => 'قله قاعه'
                ],
                [
                    'id' => 1037,
                    'country_id' => 1,
                    'external_id' => '49675205',
                    'name_en' => 'Alquraa',
                    'name_ar' => 'القرى'
                ],
                [
                    'id' => 1038,
                    'country_id' => 1,
                    'external_id' => '1557273286',
                    'name_en' => 'Alnafish',
                    'name_ar' => 'النفيش'
                ],
                [
                    'id' => 1039,
                    'country_id' => 1,
                    'external_id' => '784284103',
                    'name_en' => 'Damnah Duhayshan',
                    'name_ar' => 'دمنه دهيشان'
                ],
                [
                    'id' => 1040,
                    'country_id' => 1,
                    'external_id' => '2021939392',
                    'name_en' => 'Ash-Shallal',
                    'name_ar' => 'الشلال'
                ],
                [
                    'id' => 1041,
                    'country_id' => 1,
                    'external_id' => '1247897537',
                    'name_en' => 'Almushanabiu',
                    'name_ar' => 'المشنبي'
                ],
                [
                    'id' => 1042,
                    'country_id' => 1,
                    'external_id' => '609191618',
                    'name_en' => 'Khatwet Al Gazayem',
                    'name_ar' => 'خطوه الجزايم'
                ],
                [
                    'id' => 1043,
                    'country_id' => 1,
                    'external_id' => '1981064643',
                    'name_en' => 'Alkhibraya',
                    'name_ar' => 'الخبراية'
                ],
                [
                    'id' => 1044,
                    'country_id' => 1,
                    'external_id' => '1139918028',
                    'name_en' => 'Al Wathanyat',
                    'name_ar' => 'الوثنات'
                ],
                [
                    'id' => 1045,
                    'country_id' => 1,
                    'external_id' => '501146573',
                    'name_en' => 'Al Quraytha',
                    'name_ar' => 'القريثاء'
                ],
                [
                    'id' => 1046,
                    'country_id' => 1,
                    'external_id' => '1874526926',
                    'name_en' => 'Buni Khal',
                    'name_ar' => 'بني خال'
                ],
                [
                    'id' => 1047,
                    'country_id' => 1,
                    'external_id' => '964698575',
                    'name_en' => 'Halahil',
                    'name_ar' => 'حلاحل'
                ],
                [
                    'id' => 1048,
                    'country_id' => 1,
                    'external_id' => '191709384',
                    'name_en' => 'Abo Al Khaleyah',
                    'name_ar' => 'ابوالخليه'
                ],
                [
                    'id' => 1049,
                    'country_id' => 1,
                    'external_id' => '1699377097',
                    'name_en' => 'Wase\'a',
                    'name_ar' => 'وساع'
                ],
                [
                    'id' => 1050,
                    'country_id' => 1,
                    'external_id' => '923832010',
                    'name_en' => 'Al-Majaleel',
                    'name_ar' => 'المجاليل'
                ],
                [
                    'id' => 1051,
                    'country_id' => 1,
                    'external_id' => '16625099',
                    'name_en' => 'Alsuwfaea ',
                    'name_ar' => 'السوفعة'
                ],
                [
                    'id' => 1052,
                    'country_id' => 1,
                    'external_id' => '1390070996',
                    'name_en' => 'Al Muwaqar',
                    'name_ar' => 'الموقر'
                ],
                [
                    'id' => 1053,
                    'country_id' => 1,
                    'external_id' => '749202389',
                    'name_en' => 'Muateq Hees',
                    'name_ar' => 'معتق هيس'
                ],
                [
                    'id' => 1054,
                    'country_id' => 1,
                    'external_id' => '2123107030',
                    'name_en' => 'Al Adawa',
                    'name_ar' => 'العدوه'
                ],
                [
                    'id' => 1055,
                    'country_id' => 1,
                    'external_id' => '1214851543',
                    'name_en' => 'Dharaa Talamus',
                    'name_ar' => 'ذارى تلمص'
                ],
                [
                    'id' => 1056,
                    'country_id' => 1,
                    'external_id' => '439765200',
                    'name_en' => 'Nid Almajzara',
                    'name_ar' => 'نيد المجزرة'
                ],
                [
                    'id' => 1057,
                    'country_id' => 1,
                    'external_id' => '1947424721',
                    'name_en' => 'Khabatah',
                    'name_ar' => 'خبطه'
                ],
                [
                    'id' => 1058,
                    'country_id' => 1,
                    'external_id' => '1106802386',
                    'name_en' => '\'Abu Al\'Asrar',
                    'name_ar' => 'أبو الاسرار'
                ],
                [
                    'id' => 1059,
                    'country_id' => 1,
                    'external_id' => '331781587',
                    'name_en' => 'Rawhan',
                    'name_ar' => 'روحان'
                ],
                [
                    'id' => 1060,
                    'country_id' => 1,
                    'external_id' => '1839445212',
                    'name_en' => 'Khutwah Waza',
                    'name_ar' => 'خطوه وزا'
                ],
                [
                    'id' => 1061,
                    'country_id' => 1,
                    'external_id' => '1065931741',
                    'name_en' => 'Almutalie',
                    'name_ar' => 'المطلع'
                ],
                [
                    'id' => 1062,
                    'country_id' => 1,
                    'external_id' => '156627678',
                    'name_en' => 'Haluh',
                    'name_ar' => 'هلوه'
                ],
                [
                    'id' => 1063,
                    'country_id' => 1,
                    'external_id' => '1530008031',
                    'name_en' => 'Al Qarn',
                    'name_ar' => 'القرن'
                ],
                [
                    'id' => 1064,
                    'country_id' => 1,
                    'external_id' => '891236568',
                    'name_en' => 'Almashlaha ',
                    'name_ar' => 'المشلحة'
                ],
                [
                    'id' => 1065,
                    'country_id' => 1,
                    'external_id' => '115630041',
                    'name_en' => 'Al Sarw',
                    'name_ar' => 'السرو'
                ],
                [
                    'id' => 1066,
                    'country_id' => 1,
                    'external_id' => '1354858202',
                    'name_en' => 'Habil Ibrahim',
                    'name_ar' => 'حبيل إبراهيم'
                ],
                [
                    'id' => 1067,
                    'country_id' => 1,
                    'external_id' => '581934555',
                    'name_en' => 'Alrafghuh',
                    'name_ar' => 'الرفغه'
                ],
                [
                    'id' => 1068,
                    'country_id' => 1,
                    'external_id' => '2088025124',
                    'name_en' => 'Alsawda\'',
                    'name_ar' => 'السوداء'
                ],
                [
                    'id' => 1069,
                    'country_id' => 1,
                    'external_id' => '1313987365',
                    'name_en' => 'Om Rakabah',
                    'name_ar' => 'ام ركبه'
                ],
                [
                    'id' => 1070,
                    'country_id' => 1,
                    'external_id' => '406780454',
                    'name_en' => 'Qelat Al-Qadhiah Al-Qathibah',
                    'name_ar' => 'قله القضيه القثيبة'
                ],
                [
                    'id' => 1071,
                    'country_id' => 1,
                    'external_id' => '1780160807',
                    'name_en' => 'Dagher Marei',
                    'name_ar' => 'داغر مرعي'
                ],
                [
                    'id' => 1072,
                    'country_id' => 1,
                    'external_id' => '1205876768',
                    'name_en' => 'Al Muhareb',
                    'name_ar' => 'المحارب'
                ],
                [
                    'id' => 1073,
                    'country_id' => 1,
                    'external_id' => '298665761',
                    'name_en' => 'Bujan',
                    'name_ar' => 'بوجان'
                ],
                [
                    'id' => 1074,
                    'country_id' => 1,
                    'external_id' => '1672111650',
                    'name_en' => 'Um Salif',
                    'name_ar' => 'أم صالف'
                ],
                [
                    'id' => 1075,
                    'country_id' => 1,
                    'external_id' => '1030784291',
                    'name_en' => 'Almasyul',
                    'name_ar' => 'المسيول'
                ],
                [
                    'id' => 1076,
                    'country_id' => 1,
                    'external_id' => '257795116',
                    'name_en' => 'Alsawad ',
                    'name_ar' => 'السواد'
                ],
                [
                    'id' => 1077,
                    'country_id' => 1,
                    'external_id' => '1497023277',
                    'name_en' => 'Thehran',
                    'name_ar' => 'ثهران'
                ],
                [
                    'id' => 1078,
                    'country_id' => 1,
                    'external_id' => '721936942',
                    'name_en' => 'Muataq Al Manei',
                    'name_ar' => 'معتق المنيعي'
                ],
                [
                    'id' => 1079,
                    'country_id' => 1,
                    'external_id' => '82575663',
                    'name_en' => 'Alshakruh',
                    'name_ar' => 'الشكره'
                ],
                [
                    'id' => 1080,
                    'country_id' => 1,
                    'external_id' => '1456021544',
                    'name_en' => 'Qaryat Am Rafla ',
                    'name_ar' => 'قرية ام رفلة'
                ],
                [
                    'id' => 1081,
                    'country_id' => 1,
                    'external_id' => '546721577',
                    'name_en' => 'Al Mulos',
                    'name_ar' => 'الملوس'
                ],
                [
                    'id' => 1082,
                    'country_id' => 1,
                    'external_id' => '1920167466',
                    'name_en' => 'Shaeb Al Tawil',
                    'name_ar' => 'شعب آل طويل'
                ],
                [
                    'id' => 1083,
                    'country_id' => 1,
                    'external_id' => '1280937259',
                    'name_en' => 'Al Maushem',
                    'name_ar' => 'الموشم'
                ],
                [
                    'id' => 1084,
                    'country_id' => 1,
                    'external_id' => '505850932',
                    'name_en' => 'Om Druqi',
                    'name_ar' => 'ام دروقي'
                ],
                [
                    'id' => 1085,
                    'country_id' => 1,
                    'external_id' => '1745079093',
                    'name_en' => 'At-Tayar',
                    'name_ar' => 'الطيار'
                ],
                [
                    'id' => 1086,
                    'country_id' => 1,
                    'external_id' => '1172892214',
                    'name_en' => 'Al Qani',
                    'name_ar' => 'القانى'
                ],
                [
                    'id' => 1087,
                    'country_id' => 1,
                    'external_id' => '397740343',
                    'name_en' => 'Alhazinuh',
                    'name_ar' => 'الحزينه'
                ],
                [
                    'id' => 1088,
                    'country_id' => 1,
                    'external_id' => '1636968496',
                    'name_en' => 'Almarawiq ',
                    'name_ar' => 'المراوق'
                ],
                [
                    'id' => 1089,
                    'country_id' => 1,
                    'external_id' => '863975217',
                    'name_en' => 'Alhashah',
                    'name_ar' => 'الحشاه'
                ],
                [
                    'id' => 1090,
                    'country_id' => 1,
                    'external_id' => '222582322',
                    'name_en' => 'Al Khashaa',
                    'name_ar' => 'الخشعه'
                ],
                [
                    'id' => 1091,
                    'country_id' => 1,
                    'external_id' => '1596028211',
                    'name_en' => 'Dafayah',
                    'name_ar' => 'دفايا'
                ],
                [
                    'id' => 1092,
                    'country_id' => 1,
                    'external_id' => '688886844',
                    'name_en' => 'Alshaeifra',
                    'name_ar' => 'الشعيفرة'
                ],
                [
                    'id' => 1093,
                    'country_id' => 1,
                    'external_id' => '2060759869',
                    'name_en' => 'Al Madinah',
                    'name_ar' => 'المدينه'
                ],
                [
                    'id' => 1094,
                    'country_id' => 1,
                    'external_id' => '1420939838',
                    'name_en' => 'Zuber Hamyah',
                    'name_ar' => 'ذوير حميه'
                ],
                [
                    'id' => 1095,
                    'country_id' => 1,
                    'external_id' => '647950655',
                    'name_en' => 'Humom',
                    'name_ar' => 'هموم'
                ],
                [
                    'id' => 1096,
                    'country_id' => 1,
                    'external_id' => '1887113272',
                    'name_en' => 'Mazrahah',
                    'name_ar' => 'مزرحه'
                ],
                [
                    'id' => 1097,
                    'country_id' => 1,
                    'external_id' => '1111506745',
                    'name_en' => 'At-Taref wa Al-Mutraf',
                    'name_ar' => 'الطارف والمطرف'
                ],
                [
                    'id' => 1098,
                    'country_id' => 1,
                    'external_id' => '472735290',
                    'name_en' => 'Qelat Al Yazeed',
                    'name_ar' => 'قله آل يزيد'
                ],
                [
                    'id' => 1099,
                    'country_id' => 1,
                    'external_id' => '1846181179',
                    'name_en' => 'As-Sud',
                    'name_ar' => 'السود'
                ],
                [
                    'id' => 1100,
                    'country_id' => 1,
                    'external_id' => '1003527172',
                    'name_en' => 'Al Honwah',
                    'name_ar' => 'الحنوة'
                ],
                [
                    'id' => 1101,
                    'country_id' => 1,
                    'external_id' => '364755717',
                    'name_en' => 'Alnaqil',
                    'name_ar' => 'النقيل'
                ],
                [
                    'id' => 1102,
                    'country_id' => 1,
                    'external_id' => '1738201606',
                    'name_en' => 'Khilfat Waealan',
                    'name_ar' => 'خلفة وعلان'
                ],
                [
                    'id' => 1103,
                    'country_id' => 1,
                    'external_id' => '828897543',
                    'name_en' => 'Nayd Alshiqi',
                    'name_ar' => 'نيد الشق'
                ],
                [
                    'id' => 1104,
                    'country_id' => 1,
                    'external_id' => '55318528',
                    'name_en' => 'Al Munawer wa Al Ruda',
                    'name_ar' => 'ال مناور و ال ردة'
                ],
                [
                    'id' => 1105,
                    'country_id' => 1,
                    'external_id' => '1562978049',
                    'name_en' => 'Al-Jmlah and Tashmal',
                    'name_ar' => 'الجمله وتشمل'
                ],
                [
                    'id' => 1106,
                    'country_id' => 1,
                    'external_id' => '787891714',
                    'name_en' => 'Am Alqufl ',
                    'name_ar' => 'ام القفل'
                ],
                [
                    'id' => 1107,
                    'country_id' => 1,
                    'external_id' => '2027119875',
                    'name_en' => 'Shujae',
                    'name_ar' => 'شجاع'
                ],
                [
                    'id' => 1108,
                    'country_id' => 1,
                    'external_id' => '1253671948',
                    'name_en' => 'Hamumia',
                    'name_ar' => 'حمومية'
                ],
                [
                    'id' => 1109,
                    'country_id' => 1,
                    'external_id' => '612803341',
                    'name_en' => 'Alkhayie',
                    'name_ar' => 'الخايع'
                ],
                [
                    'id' => 1110,
                    'country_id' => 1,
                    'external_id' => '1986249230',
                    'name_en' => 'Al Halaq',
                    'name_ar' => 'الحلق'
                ],
                [
                    'id' => 1111,
                    'country_id' => 1,
                    'external_id' => '1078518031',
                    'name_en' => 'Karas Qamamah',
                    'name_ar' => 'كرس  قمامه'
                ],
                [
                    'id' => 1112,
                    'country_id' => 1,
                    'external_id' => '303366152',
                    'name_en' => 'Aljubuh',
                    'name_ar' => 'الجبوح'
                ],
                [
                    'id' => 1113,
                    'country_id' => 1,
                    'external_id' => '1878142729',
                    'name_en' => 'Amesam',
                    'name_ar' => 'امعصام'
                ],
                [
                    'id' => 1114,
                    'country_id' => 1,
                    'external_id' => '970935818',
                    'name_en' => 'Zubeir Ghabet',
                    'name_ar' => 'ذوير غابط'
                ],
                [
                    'id' => 1115,
                    'country_id' => 1,
                    'external_id' => '195325195',
                    'name_en' => 'Qaead Alqardih',
                    'name_ar' => 'قعاد القرضه'
                ],
                [
                    'id' => 1116,
                    'country_id' => 1,
                    'external_id' => '1703054356',
                    'name_en' => 'Alshaebuh',
                    'name_ar' => 'الشعبه'
                ],
                [
                    'id' => 1117,
                    'country_id' => 1,
                    'external_id' => '930065173',
                    'name_en' => 'Al Muganab',
                    'name_ar' => 'المجنب'
                ],
                [
                    'id' => 1118,
                    'country_id' => 1,
                    'external_id' => '20236822',
                    'name_en' => 'Lihaj Mahanih',
                    'name_ar' => 'لحج محنيه'
                ],
                [
                    'id' => 1119,
                    'country_id' => 1,
                    'external_id' => '1393682711',
                    'name_en' => 'Aljurada\'',
                    'name_ar' => 'الجرداء'
                ],
                [
                    'id' => 1120,
                    'country_id' => 1,
                    'external_id' => '754845712',
                    'name_en' => 'Al Muqabaa',
                    'name_ar' => 'المقبع'
                ],
                [
                    'id' => 1121,
                    'country_id' => 1,
                    'external_id' => '2128287505',
                    'name_en' => 'Alzabadaa',
                    'name_ar' => 'الزبادى'
                ],
                [
                    'id' => 1122,
                    'country_id' => 1,
                    'external_id' => '1218459154',
                    'name_en' => 'Quhaydaa',
                    'name_ar' => 'قهيداء'
                ],
                [
                    'id' => 1123,
                    'country_id' => 1,
                    'external_id' => '445469971',
                    'name_en' => 'Qamah',
                    'name_ar' => 'قماح'
                ],
                [
                    'id' => 1124,
                    'country_id' => 1,
                    'external_id' => '1953133596',
                    'name_en' => 'Alhamraya',
                    'name_ar' => 'الحمراية'
                ],
                [
                    'id' => 1125,
                    'country_id' => 1,
                    'external_id' => '1177588509',
                    'name_en' => 'Aleaduh and Alsafa',
                    'name_ar' => 'العدوه و الصفا'
                ],
                [
                    'id' => 1126,
                    'country_id' => 1,
                    'external_id' => '270381598',
                    'name_en' => 'Alwasituh',
                    'name_ar' => 'الواسطه'
                ],
                [
                    'id' => 1127,
                    'country_id' => 1,
                    'external_id' => '1845154079',
                    'name_en' => 'Alsalawia',
                    'name_ar' => 'الصلاوية'
                ],
                [
                    'id' => 1128,
                    'country_id' => 1,
                    'external_id' => '1070067736',
                    'name_en' => 'Aleawsa\'',
                    'name_ar' => 'العوصاء'
                ],
                [
                    'id' => 1129,
                    'country_id' => 1,
                    'external_id' => '162275097',
                    'name_en' => 'Al Araab',
                    'name_ar' => 'العراب'
                ],
                [
                    'id' => 1130,
                    'country_id' => 1,
                    'external_id' => '1535720986',
                    'name_en' => 'Albitan',
                    'name_ar' => 'البطان'
                ],
                [
                    'id' => 1131,
                    'country_id' => 1,
                    'external_id' => '894852379',
                    'name_en' => 'Maftah At-Tuwal',
                    'name_ar' => 'مفتح الطوال'
                ],
                [
                    'id' => 1132,
                    'country_id' => 1,
                    'external_id' => '120814692',
                    'name_en' => 'Aldalaeuh',
                    'name_ar' => 'الضلعه'
                ],
                [
                    'id' => 1133,
                    'country_id' => 1,
                    'external_id' => '585546342',
                    'name_en' => 'Umm Alqutb',
                    'name_ar' => 'ام القطب'
                ],
                [
                    'id' => 1134,
                    'country_id' => 1,
                    'external_id' => '2093209959',
                    'name_en' => 'Alkhawaria',
                    'name_ar' => 'الخوارية'
                ],
                [
                    'id' => 1135,
                    'country_id' => 1,
                    'external_id' => '1319696480',
                    'name_en' => 'Al Shaqar',
                    'name_ar' => 'الشقر'
                ],
                [
                    'id' => 1136,
                    'country_id' => 1,
                    'external_id' => '410322785',
                    'name_en' => 'Al Awfa',
                    'name_ar' => 'العوفه'
                ],
                [
                    'id' => 1137,
                    'country_id' => 1,
                    'external_id' => '1783768674',
                    'name_en' => 'Al Khawsh',
                    'name_ar' => 'الخوش'
                ],
                [
                    'id' => 1138,
                    'country_id' => 1,
                    'external_id' => '1144997219',
                    'name_en' => 'Dareah',
                    'name_ar' => 'درعه'
                ],
                [
                    'id' => 1139,
                    'country_id' => 1,
                    'external_id' => '369386604',
                    'name_en' => 'Alruwda',
                    'name_ar' => 'الروضة'
                ],
                [
                    'id' => 1140,
                    'country_id' => 1,
                    'external_id' => '1675789165',
                    'name_en' => 'Ash-Sharha',
                    'name_ar' => 'الشرحا'
                ],
                [
                    'id' => 1141,
                    'country_id' => 1,
                    'external_id' => '1037017710',
                    'name_en' => '\'Ama Alkhashb',
                    'name_ar' => 'أم الخشب'
                ],
                [
                    'id' => 1142,
                    'country_id' => 1,
                    'external_id' => '261407087',
                    'name_en' => 'Almajrub',
                    'name_ar' => 'المجروب'
                ],
                [
                    'id' => 1143,
                    'country_id' => 1,
                    'external_id' => '1500635240',
                    'name_en' => 'As-Sahua',
                    'name_ar' => 'السهوه'
                ],
                [
                    'id' => 1144,
                    'country_id' => 1,
                    'external_id' => '727584617',
                    'name_en' => 'Alshaqibuh',
                    'name_ar' => 'الشقيبه'
                ],
                [
                    'id' => 1145,
                    'country_id' => 1,
                    'external_id' => '87764586',
                    'name_en' => 'Al Gaarah',
                    'name_ar' => 'الجعره'
                ],
                [
                    'id' => 1146,
                    'country_id' => 1,
                    'external_id' => '552430708',
                    'name_en' => 'Muthbayra',
                    'name_ar' => 'مثبيره'
                ],
                [
                    'id' => 1147,
                    'country_id' => 1,
                    'external_id' => '1925942133',
                    'name_en' => '\'Abu Aleasmuh',
                    'name_ar' => 'ابو العصمه'
                ],
                [
                    'id' => 1148,
                    'country_id' => 1,
                    'external_id' => '1284549238',
                    'name_en' => 'Qahqah',
                    'name_ar' => 'قحقح'
                ],
                [
                    'id' => 1149,
                    'country_id' => 1,
                    'external_id' => '511560055',
                    'name_en' => 'Akiyah',
                    'name_ar' => 'عاكيه'
                ],
                [
                    'id' => 1150,
                    'country_id' => 1,
                    'external_id' => '1750788208',
                    'name_en' => 'Mishbah Allubaynii',
                    'name_ar' => 'مشباح اللبيني'
                ],
                [
                    'id' => 1151,
                    'country_id' => 1,
                    'external_id' => '975697777',
                    'name_en' => '\'Abu Altafaayuh',
                    'name_ar' => 'ابو الطفايه'
                ],
                [
                    'id' => 1152,
                    'country_id' => 1,
                    'external_id' => '336336498',
                    'name_en' => 'Al Faqr',
                    'name_ar' => 'الفقر'
                ],
                [
                    'id' => 1153,
                    'country_id' => 1,
                    'external_id' => '1642673523',
                    'name_en' => 'Al Ghurah',
                    'name_ar' => 'الغره'
                ],
                [
                    'id' => 1154,
                    'country_id' => 1,
                    'external_id' => '867587196',
                    'name_en' => 'Al Kabaas',
                    'name_ar' => 'الكباس'
                ],
                [
                    'id' => 1155,
                    'country_id' => 1,
                    'external_id' => '227767165',
                    'name_en' => 'Aleadn',
                    'name_ar' => 'العضن'
                ],
                [
                    'id' => 1156,
                    'country_id' => 1,
                    'external_id' => '1601802878',
                    'name_en' => 'Maazeb Khedr and its surroundings',
                    'name_ar' => 'معزب خضر وماحولها'
                ],
                [
                    'id' => 1157,
                    'country_id' => 1,
                    'external_id' => '692498815',
                    'name_en' => 'Aleabadiuh',
                    'name_ar' => 'العباديه'
                ],
                [
                    'id' => 1158,
                    'country_id' => 1,
                    'external_id' => '2065944696',
                    'name_en' => 'Almuraea',
                    'name_ar' => 'المورعة'
                ],
                [
                    'id' => 1159,
                    'country_id' => 1,
                    'external_id' => '1426653049',
                    'name_en' => 'Quaad dhalmah',
                    'name_ar' => 'قعاد ظلمه'
                ],
                [
                    'id' => 1160,
                    'country_id' => 1,
                    'external_id' => '651501178',
                    'name_en' => 'Ad-Duwekhal',
                    'name_ar' => 'الدويخل'
                ],
                [
                    'id' => 1161,
                    'country_id' => 1,
                    'external_id' => '1890729339',
                    'name_en' => 'Albiqae ',
                    'name_ar' => 'البقاع'
                ],
                [
                    'id' => 1162,
                    'country_id' => 1,
                    'external_id' => '1117740100',
                    'name_en' => 'Al Wajad',
                    'name_ar' => 'الوجد'
                ],
                [
                    'id' => 1163,
                    'country_id' => 1,
                    'external_id' => '476347205',
                    'name_en' => 'Almashear',
                    'name_ar' => 'المشعر'
                ],
                [
                    'id' => 1164,
                    'country_id' => 1,
                    'external_id' => '1849858630',
                    'name_en' => 'Musmae',
                    'name_ar' => 'مسمع'
                ],
                [
                    'id' => 1165,
                    'country_id' => 1,
                    'external_id' => '942651719',
                    'name_en' => 'Sahsah',
                    'name_ar' => 'صحصح'
                ],
                [
                    'id' => 1166,
                    'country_id' => 1,
                    'external_id' => '368367680',
                    'name_en' => 'Wadi Rahim',
                    'name_ar' => 'وادي رحيم'
                ],
                [
                    'id' => 1167,
                    'country_id' => 1,
                    'external_id' => '1741809473',
                    'name_en' => 'Atnab',
                    'name_ar' => 'اطناب'
                ],
                [
                    'id' => 1168,
                    'country_id' => 1,
                    'external_id' => '834537026',
                    'name_en' => 'Al Alzughlaa',
                    'name_ar' => 'آل الزغلى'
                ],
                [
                    'id' => 1169,
                    'country_id' => 1,
                    'external_id' => '60499267',
                    'name_en' => 'Al Rasfah',
                    'name_ar' => 'الرصفه'
                ],
                [
                    'id' => 1170,
                    'country_id' => 1,
                    'external_id' => '1566590028',
                    'name_en' => 'Thaher Bujan',
                    'name_ar' => 'ثاهر بوجان'
                ],
                [
                    'id' => 1171,
                    'country_id' => 1,
                    'external_id' => '793600845',
                    'name_en' => 'Hyd Alhalhalh',
                    'name_ar' => 'حيد الحلحله'
                ],
                [
                    'id' => 1172,
                    'country_id' => 1,
                    'external_id' => '2032894542',
                    'name_en' => 'Ar-Radfayn',
                    'name_ar' => 'الردفين'
                ],
                [
                    'id' => 1173,
                    'country_id' => 1,
                    'external_id' => '1257283919',
                    'name_en' => 'Alkhaqaquh',
                    'name_ar' => 'الخقاقه'
                ],
                [
                    'id' => 1174,
                    'country_id' => 1,
                    'external_id' => '618512456',
                    'name_en' => 'Alshajab',
                    'name_ar' => 'الشجب'
                ],
                [
                    'id' => 1175,
                    'country_id' => 1,
                    'external_id' => '1991962441',
                    'name_en' => 'Shuaab Laghyah',
                    'name_ar' => 'شعب لغياء'
                ],
                [
                    'id' => 1176,
                    'country_id' => 1,
                    'external_id' => '1082592842',
                    'name_en' => 'Ash-Shuqafah',
                    'name_ar' => 'الشقفه'
                ],
                [
                    'id' => 1177,
                    'country_id' => 1,
                    'external_id' => '309079371',
                    'name_en' => 'Tiash',
                    'name_ar' => 'طياش'
                ],
                [
                    'id' => 1178,
                    'country_id' => 1,
                    'external_id' => '1816742996',
                    'name_en' => 'Abuialhushaf Algharbii',
                    'name_ar' => 'ابوالحشاف الغربي'
                ],
                [
                    'id' => 1179,
                    'country_id' => 1,
                    'external_id' => '1041656661',
                    'name_en' => 'Makhshusha',
                    'name_ar' => 'مخشوشة'
                ],
                [
                    'id' => 1180,
                    'country_id' => 1,
                    'external_id' => '201099862',
                    'name_en' => 'Al Khurm',
                    'name_ar' => 'الخرم'
                ],
                [
                    'id' => 1181,
                    'country_id' => 1,
                    'external_id' => '1708763479',
                    'name_en' => 'Salaf Al Qumur',
                    'name_ar' => 'سلف القمر'
                ],
                [
                    'id' => 1182,
                    'country_id' => 1,
                    'external_id' => '933677136',
                    'name_en' => 'Abw Bijara',
                    'name_ar' => 'ابو بجارة'
                ],
                [
                    'id' => 1183,
                    'country_id' => 1,
                    'external_id' => '25417553',
                    'name_en' => 'Al Khal',
                    'name_ar' => 'الخل'
                ],
                [
                    'id' => 1184,
                    'country_id' => 1,
                    'external_id' => '1399387730',
                    'name_en' => 'Al-Madhber Al-Ala and Al-Asfal',
                    'name_ar' => 'المضبر الاعلى والاسفل'
                ],
                [
                    'id' => 1185,
                    'country_id' => 1,
                    'external_id' => '758453587',
                    'name_en' => 'Almukandarat',
                    'name_ar' => 'المكندرات'
                ],
                [
                    'id' => 1186,
                    'country_id' => 1,
                    'external_id' => '2131899484',
                    'name_en' => 'Qaflah',
                    'name_ar' => 'قفله'
                ],
                [
                    'id' => 1187,
                    'country_id' => 1,
                    'external_id' => '1224692573',
                    'name_en' => 'Almudfun',
                    'name_ar' => 'المدفن'
                ],
                [
                    'id' => 1188,
                    'country_id' => 1,
                    'external_id' => '449081950',
                    'name_en' => 'Alkareamaa',
                    'name_ar' => 'الكرعمى'
                ],
                [
                    'id' => 1189,
                    'country_id' => 1,
                    'external_id' => '1956811103',
                    'name_en' => 'Al Aydah',
                    'name_ar' => 'العيده'
                ],
                [
                    'id' => 1190,
                    'country_id' => 1,
                    'external_id' => '1183821912',
                    'name_en' => 'Gabageb',
                    'name_ar' => 'جباجب'
                ],
                [
                    'id' => 1191,
                    'country_id' => 1,
                    'external_id' => '273997657',
                    'name_en' => 'Al Ghoul',
                    'name_ar' => 'الغول'
                ],
                [
                    'id' => 1192,
                    'country_id' => 1,
                    'external_id' => '1647443546',
                    'name_en' => 'Al Huthayrah',
                    'name_ar' => 'الحثيره'
                ],
                [
                    'id' => 1193,
                    'country_id' => 1,
                    'external_id' => '1008606555',
                    'name_en' => 'Gharib Alqasab',
                    'name_ar' => 'غارب القصب'
                ],
                [
                    'id' => 1194,
                    'country_id' => 1,
                    'external_id' => '167459748',
                    'name_en' => 'Mirzan',
                    'name_ar' => 'مرزان'
                ],
                [
                    'id' => 1195,
                    'country_id' => 1,
                    'external_id' => '1539332773',
                    'name_en' => 'Mudabie',
                    'name_ar' => 'مدبع'
                ],
                [
                    'id' => 1196,
                    'country_id' => 1,
                    'external_id' => '900561318',
                    'name_en' => 'Almajdae',
                    'name_ar' => 'المجدع'
                ],
                [
                    'id' => 1197,
                    'country_id' => 1,
                    'external_id' => '126589095',
                    'name_en' => 'As-Sumbulah',
                    'name_ar' => 'الصويمله'
                ],
                [
                    'id' => 1198,
                    'country_id' => 1,
                    'external_id' => '1364240288',
                    'name_en' => 'Al-Sharqi and Tashmal',
                    'name_ar' => 'الشرقي وتشمل'
                ],
                [
                    'id' => 1199,
                    'country_id' => 1,
                    'external_id' => '591251105',
                    'name_en' => 'Wadi Arab',
                    'name_ar' => 'وادي عرب'
                ],
                [
                    'id' => 1200,
                    'country_id' => 1,
                    'external_id' => '2098914722',
                    'name_en' => 'Junadi',
                    'name_ar' => 'جنادي'
                ],
                [
                    'id' => 1201,
                    'country_id' => 1,
                    'external_id' => '1323762851',
                    'name_en' => 'Alkhalfuh Alsuflaa',
                    'name_ar' => 'الخلفه السفلى'
                ],
                [
                    'id' => 1202,
                    'country_id' => 1,
                    'external_id' => '416031660',
                    'name_en' => 'Alsadw',
                    'name_ar' => 'السدو'
                ],
                [
                    'id' => 1203,
                    'country_id' => 1,
                    'external_id' => '1789477549',
                    'name_en' => 'Alqimuh',
                    'name_ar' => 'القيمه'
                ],
                [
                    'id' => 1204,
                    'country_id' => 1,
                    'external_id' => '1148608942',
                    'name_en' => 'Qabil Almuetara',
                    'name_ar' => 'قابل المعطرة'
                ],
                [
                    'id' => 1205,
                    'country_id' => 1,
                    'external_id' => '375161007',
                    'name_en' => 'Alhinjaruh',
                    'name_ar' => 'الهنجاره'
                ],
                [
                    'id' => 1206,
                    'country_id' => 1,
                    'external_id' => '1614393256',
                    'name_en' => 'As-Saadi',
                    'name_ar' => 'السعادى'
                ],
                [
                    'id' => 1207,
                    'country_id' => 1,
                    'external_id' => '839306921',
                    'name_en' => 'Habil Almaqshub',
                    'name_ar' => 'حبيل المقشوب'
                ],
                [
                    'id' => 1208,
                    'country_id' => 1,
                    'external_id' => '266595754',
                    'name_en' => 'Al Kharabah',
                    'name_ar' => 'الخربه'
                ],
                [
                    'id' => 1209,
                    'country_id' => 1,
                    'external_id' => '1506282667',
                    'name_en' => 'Albir',
                    'name_ar' => 'البير'
                ],
                [
                    'id' => 1210,
                    'country_id' => 1,
                    'external_id' => '731196340',
                    'name_en' => 'Kharouq',
                    'name_ar' => 'خروق'
                ],
                [
                    'id' => 1211,
                    'country_id' => 1,
                    'external_id' => '91376309',
                    'name_en' => 'Umm Al-Qahfa Al-Makhlaf',
                    'name_ar' => 'ام القحفه المخلاف'
                ],
                [
                    'id' => 1212,
                    'country_id' => 1,
                    'external_id' => '1465870774',
                    'name_en' => 'Qaead Alaghbir',
                    'name_ar' => 'قعاد الاغبر'
                ],
                [
                    'id' => 1213,
                    'country_id' => 1,
                    'external_id' => '556107959',
                    'name_en' => 'Jawran',
                    'name_ar' => 'جورا'
                ],
                [
                    'id' => 1214,
                    'country_id' => 1,
                    'external_id' => '1929549744',
                    'name_en' => 'Aldafiniuh',
                    'name_ar' => 'الدفينيه'
                ],
                [
                    'id' => 1215,
                    'country_id' => 1,
                    'external_id' => '1290778289',
                    'name_en' => 'Al Muazeb',
                    'name_ar' => 'المعزب'
                ],
                [
                    'id' => 1216,
                    'country_id' => 1,
                    'external_id' => '515167666',
                    'name_en' => 'Aleiraba',
                    'name_ar' => 'العرابة'
                ],
                [
                    'id' => 1217,
                    'country_id' => 1,
                    'external_id' => '1754395827',
                    'name_en' => 'Alkhashaea ',
                    'name_ar' => 'الخشعة'
                ],
                [
                    'id' => 1218,
                    'country_id' => 1,
                    'external_id' => '981341116',
                    'name_en' => 'Mujdaeuh',
                    'name_ar' => 'مجدعه'
                ],
                [
                    'id' => 1219,
                    'country_id' => 1,
                    'external_id' => '341521085',
                    'name_en' => 'Al Kouab',
                    'name_ar' => 'الكعوب'
                ],
                [
                    'id' => 1220,
                    'country_id' => 1,
                    'external_id' => '1713394110',
                    'name_en' => 'Zarmaah',
                    'name_ar' => 'زرمعه'
                ],
                [
                    'id' => 1221,
                    'country_id' => 1,
                    'external_id' => '806187199',
                    'name_en' => 'Aerab',
                    'name_ar' => 'اعراب'
                ],
                [
                    'id' => 1222,
                    'country_id' => 1,
                    'external_id' => '233545656',
                    'name_en' => 'Tabin',
                    'name_ar' => 'طابن'
                ],
                [
                    'id' => 1223,
                    'country_id' => 1,
                    'external_id' => '1605418681',
                    'name_en' => 'Jadie Namir',
                    'name_ar' => 'جاضع نمير'
                ],
                [
                    'id' => 1224,
                    'country_id' => 1,
                    'external_id' => '698211770',
                    'name_en' => 'Al Makhlaf',
                    'name_ar' => 'المخلف'
                ],
                [
                    'id' => 1225,
                    'country_id' => 1,
                    'external_id' => '2071657659',
                    'name_en' => 'Alburuq',
                    'name_ar' => 'البروق'
                ],
                [
                    'id' => 1226,
                    'country_id' => 1,
                    'external_id' => '1430723460',
                    'name_en' => 'Shafahawi',
                    'name_ar' => 'شفهوي'
                ],
                [
                    'id' => 1227,
                    'country_id' => 1,
                    'external_id' => '657209989',
                    'name_en' => 'Al Rawh',
                    'name_ar' => 'الروح'
                ],
                [
                    'id' => 1228,
                    'country_id' => 1,
                    'external_id' => '1896438150',
                    'name_en' => 'Alraas',
                    'name_ar' => 'الراس'
                ],
                [
                    'id' => 1229,
                    'country_id' => 1,
                    'external_id' => '1121351815',
                    'name_en' => 'Najea',
                    'name_ar' => 'ناجع'
                ],
                [
                    'id' => 1230,
                    'country_id' => 1,
                    'external_id' => '482117504',
                    'name_en' => 'Aljabalayn',
                    'name_ar' => 'الجبلين'
                ],
                [
                    'id' => 1231,
                    'country_id' => 1,
                    'external_id' => '1855563393',
                    'name_en' => 'Khashm',
                    'name_ar' => 'خشم'
                ],
                [
                    'id' => 1232,
                    'country_id' => 1,
                    'external_id' => '946259330',
                    'name_en' => 'Aljanib',
                    'name_ar' => 'الجنيب'
                ],
                [
                    'id' => 1233,
                    'country_id' => 1,
                    'external_id' => '172221571',
                    'name_en' => 'Al-Mutaredh Tawaleq',
                    'name_ar' => 'المعترض تويلق'
                ],
                [
                    'id' => 1234,
                    'country_id' => 1,
                    'external_id' => '1680343948',
                    'name_en' => 'Qamar',
                    'name_ar' => 'قمر'
                ],
                [
                    'id' => 1235,
                    'country_id' => 1,
                    'external_id' => '838148749',
                    'name_en' => 'Ad-Dawki',
                    'name_ar' => 'الدوقي'
                ],
                [
                    'id' => 1236,
                    'country_id' => 1,
                    'external_id' => '64110990',
                    'name_en' => 'As-Sawei',
                    'name_ar' => 'الصوع'
                ],
                [
                    'id' => 1237,
                    'country_id' => 1,
                    'external_id' => '1572823183',
                    'name_en' => 'Alkarabuh',
                    'name_ar' => 'الكربه'
                ],
                [
                    'id' => 1238,
                    'country_id' => 1,
                    'external_id' => '797282184',
                    'name_en' => 'Alqayim Alawsat',
                    'name_ar' => 'القائم الاوسط'
                ],
                [
                    'id' => 1239,
                    'country_id' => 1,
                    'external_id' => '2036510345',
                    'name_en' => 'Eutinh',
                    'name_ar' => 'عطينه'
                ],
                [
                    'id' => 1240,
                    'country_id' => 1,
                    'external_id' => '1263521162',
                    'name_en' => 'Mathealuh',
                    'name_ar' => 'مثعله'
                ],
                [
                    'id' => 1241,
                    'country_id' => 1,
                    'external_id' => '622128267',
                    'name_en' => 'Ahfan',
                    'name_ar' => 'احفان'
                ],
                [
                    'id' => 1242,
                    'country_id' => 1,
                    'external_id' => '1995508628',
                    'name_en' => 'Algharafuh',
                    'name_ar' => 'الغرفه'
                ],
                [
                    'id' => 1243,
                    'country_id' => 1,
                    'external_id' => '1088301717',
                    'name_en' => 'Alsabr',
                    'name_ar' => 'الصبر'
                ],
                [
                    'id' => 1244,
                    'country_id' => 1,
                    'external_id' => '314263958',
                    'name_en' => 'Alshaeib',
                    'name_ar' => 'الشعيب'
                ],
                [
                    'id' => 1245,
                    'country_id' => 1,
                    'external_id' => '1820354711',
                    'name_en' => 'Marus',
                    'name_ar' => 'مروس'
                ],
                [
                    'id' => 1246,
                    'country_id' => 1,
                    'external_id' => '1047361424',
                    'name_en' => 'Aleasimuh',
                    'name_ar' => 'العصيمه'
                ],
                [
                    'id' => 1247,
                    'country_id' => 1,
                    'external_id' => '139171473',
                    'name_en' => 'Zahoum w Za As-Saqayn',
                    'name_ar' => 'زحوم وذا الساقين'
                ],
                [
                    'id' => 1248,
                    'country_id' => 1,
                    'external_id' => '1511044498',
                    'name_en' => 'Al-Jaraneb',
                    'name_ar' => 'الجرانب'
                ],
                [
                    'id' => 1249,
                    'country_id' => 1,
                    'external_id' => '939381907',
                    'name_en' => '\'Ama Alnasayib',
                    'name_ar' => 'أم النصايب'
                ],
                [
                    'id' => 1250,
                    'country_id' => 1,
                    'external_id' => '31126428',
                    'name_en' => 'Soba',
                    'name_ar' => 'صوبا'
                ],
                [
                    'id' => 1251,
                    'country_id' => 1,
                    'external_id' => '1403458205',
                    'name_en' => 'Al Ghunaymah',
                    'name_ar' => 'الغنيمه'
                ],
                [
                    'id' => 1252,
                    'country_id' => 1,
                    'external_id' => '764162462',
                    'name_en' => 'Dagher Al Melaha',
                    'name_ar' => 'داغر الملاحه'
                ],
                [
                    'id' => 1253,
                    'country_id' => 1,
                    'external_id' => '2137608351',
                    'name_en' => 'Alrajh',
                    'name_ar' => 'الرجح'
                ],
                [
                    'id' => 1254,
                    'country_id' => 1,
                    'external_id' => '1228308376',
                    'name_en' => 'Al Qanaan',
                    'name_ar' => 'القنان'
                ],
                [
                    'id' => 1255,
                    'country_id' => 1,
                    'external_id' => '454860441',
                    'name_en' => 'Al Jawah',
                    'name_ar' => 'الجوه'
                ],
                [
                    'id' => 1256,
                    'country_id' => 1,
                    'external_id' => '1962524058',
                    'name_en' => 'Albarniuh',
                    'name_ar' => 'البرنيه'
                ],
                [
                    'id' => 1257,
                    'country_id' => 1,
                    'external_id' => '1187437723',
                    'name_en' => 'Al Barad',
                    'name_ar' => 'البرد'
                ],
                [
                    'id' => 1258,
                    'country_id' => 1,
                    'external_id' => '279182308',
                    'name_en' => 'Al Fag',
                    'name_ar' => 'الثاج'
                ],
                [
                    'id' => 1259,
                    'country_id' => 1,
                    'external_id' => '1653086949',
                    'name_en' => 'Qulat Al Aydah',
                    'name_ar' => 'قلة العيده'
                ],
                [
                    'id' => 1260,
                    'country_id' => 1,
                    'external_id' => '1012218342',
                    'name_en' => 'Dharaa Alaghbir',
                    'name_ar' => 'ذارى الاغبر'
                ],
                [
                    'id' => 1261,
                    'country_id' => 1,
                    'external_id' => '238180583',
                    'name_en' => 'Zamrada',
                    'name_ar' => 'ذمرداء'
                ],
                [
                    'id' => 1262,
                    'country_id' => 1,
                    'external_id' => '1478453216',
                    'name_en' => 'Om Waqr',
                    'name_ar' => 'ام وقر'
                ],
                [
                    'id' => 1263,
                    'country_id' => 1,
                    'external_id' => '904234721',
                    'name_en' => 'Daghbij',
                    'name_ar' => 'دغبج'
                ],
                [
                    'id' => 1264,
                    'country_id' => 1,
                    'external_id' => '130196962',
                    'name_en' => 'Lahj Al-Jabab',
                    'name_ar' => 'لحج الجباب'
                ],
                [
                    'id' => 1265,
                    'country_id' => 1,
                    'external_id' => '1370473699',
                    'name_en' => 'Almueazibuh',
                    'name_ar' => 'المعزبه'
                ],
                [
                    'id' => 1266,
                    'country_id' => 1,
                    'external_id' => '594863084',
                    'name_en' => 'Shaeb',
                    'name_ar' => 'شعب'
                ],
                [
                    'id' => 1267,
                    'country_id' => 1,
                    'external_id' => '2102461165',
                    'name_en' => 'Aljamimuh',
                    'name_ar' => 'الجميمه'
                ],
                [
                    'id' => 1268,
                    'country_id' => 1,
                    'external_id' => '1329471982',
                    'name_en' => 'Gharb Shuei',
                    'name_ar' => 'غارب شوعي'
                ],
                [
                    'id' => 1269,
                    'country_id' => 1,
                    'external_id' => '421216495',
                    'name_en' => 'Al Hefatayen',
                    'name_ar' => 'الحيفتين'
                ],
                [
                    'id' => 1270,
                    'country_id' => 1,
                    'external_id' => '1793093608',
                    'name_en' => 'Wadi Nuaman',
                    'name_ar' => 'وادي نعمان'
                ],
                [
                    'id' => 1271,
                    'country_id' => 1,
                    'external_id' => '1154387689',
                    'name_en' => 'Qulet Al Hajeb',
                    'name_ar' => 'قله الحاجب'
                ],
                [
                    'id' => 1272,
                    'country_id' => 1,
                    'external_id' => '380349930',
                    'name_en' => 'Dabas',
                    'name_ar' => 'دبس'
                ],
                [
                    'id' => 1273,
                    'country_id' => 1,
                    'external_id' => '1618005227',
                    'name_en' => 'Al Mazareq',
                    'name_ar' => 'المزارق'
                ],
                [
                    'id' => 1274,
                    'country_id' => 1,
                    'external_id' => '845016052',
                    'name_en' => 'Aar',
                    'name_ar' => 'عار'
                ],
                [
                    'id' => 1275,
                    'country_id' => 1,
                    'external_id' => '205130485',
                    'name_en' => 'Qayim Alkadra',
                    'name_ar' => 'قائم الكدرة'
                ],
                [
                    'id' => 1276,
                    'country_id' => 1,
                    'external_id' => '1577527798',
                    'name_en' => 'Habees',
                    'name_ar' => 'حبيس'
                ],
                [
                    'id' => 1277,
                    'country_id' => 1,
                    'external_id' => '736905463',
                    'name_en' => 'Al Farha',
                    'name_ar' => 'الفرحه'
                ],
                [
                    'id' => 1278,
                    'country_id' => 1,
                    'external_id' => '97081328',
                    'name_en' => 'Alzanfa',
                    'name_ar' => 'الزنفة'
                ],
                [
                    'id' => 1279,
                    'country_id' => 1,
                    'external_id' => '1469478641',
                    'name_en' => 'Muqamar',
                    'name_ar' => 'مقمر'
                ],
                [
                    'id' => 1280,
                    'country_id' => 1,
                    'external_id' => '561812978',
                    'name_en' => 'Almasiluh',
                    'name_ar' => 'المسيله'
                ],
                [
                    'id' => 1281,
                    'country_id' => 1,
                    'external_id' => '1935258867',
                    'name_en' => 'Al Khobat',
                    'name_ar' => 'الخبط'
                ],
                [
                    'id' => 1282,
                    'country_id' => 1,
                    'external_id' => '1294390268',
                    'name_en' => 'Ghaymah',
                    'name_ar' => 'غيمه'
                ],
                [
                    'id' => 1283,
                    'country_id' => 1,
                    'external_id' => '520352509',
                    'name_en' => 'Al Mahrash',
                    'name_ar' => 'المهرش'
                ],
                [
                    'id' => 1284,
                    'country_id' => 1,
                    'external_id' => '1760039422',
                    'name_en' => 'Kamilh',
                    'name_ar' => 'كامله'
                ],
                [
                    'id' => 1285,
                    'country_id' => 1,
                    'external_id' => '984953087',
                    'name_en' => 'Muftah Dahiaan',
                    'name_ar' => 'مفتح ضهيا'
                ],
                [
                    'id' => 1286,
                    'country_id' => 1,
                    'external_id' => '345137144',
                    'name_en' => 'Alkanabish',
                    'name_ar' => 'الكنابيش'
                ],
                [
                    'id' => 1287,
                    'country_id' => 1,
                    'external_id' => '1719631609',
                    'name_en' => 'Habibuh',
                    'name_ar' => 'هبيبه'
                ],
                [
                    'id' => 1288,
                    'country_id' => 1,
                    'external_id' => '809868794',
                    'name_en' => 'Almaweiruh',
                    'name_ar' => 'الموعره'
                ],
                [
                    'id' => 1289,
                    'country_id' => 1,
                    'external_id' => '35831035',
                    'name_en' => 'Hubayel Al Wahlah',
                    'name_ar' => 'حبيل الوحله'
                ],
                [
                    'id' => 1290,
                    'country_id' => 1,
                    'external_id' => '1544543172',
                    'name_en' => 'Malqatah',
                    'name_ar' => 'ملقطه'
                ],
                [
                    'id' => 1291,
                    'country_id' => 1,
                    'external_id' => '701823685',
                    'name_en' => 'Al Mudaf',
                    'name_ar' => 'المضاف'
                ],
                [
                    'id' => 1292,
                    'country_id' => 1,
                    'external_id' => '2075204038',
                    'name_en' => 'Hadabuh Almujrid',
                    'name_ar' => 'حدبه المجرد'
                ],
                [
                    'id' => 1293,
                    'country_id' => 1,
                    'external_id' => '1436432583',
                    'name_en' => 'Jawal',
                    'name_ar' => 'جوال'
                ],
                [
                    'id' => 1294,
                    'country_id' => 1,
                    'external_id' => '662390720',
                    'name_en' => 'Qaryet Muhresh',
                    'name_ar' => 'قرية محرش'
                ],
                [
                    'id' => 1295,
                    'country_id' => 1,
                    'external_id' => '1900046017',
                    'name_en' => 'Almurafaq',
                    'name_ar' => 'المرفق'
                ],
                [
                    'id' => 1296,
                    'country_id' => 1,
                    'external_id' => '1127122370',
                    'name_en' => 'Ash-Shurafi',
                    'name_ar' => 'الشرافي'
                ],
                [
                    'id' => 1297,
                    'country_id' => 1,
                    'external_id' => '487302339',
                    'name_en' => 'Al Khtwah',
                    'name_ar' => 'الخطوه'
                ],
                [
                    'id' => 1298,
                    'country_id' => 1,
                    'external_id' => '1859175372',
                    'name_en' => 'Dabiruh',
                    'name_ar' => 'ضبيره'
                ],
                [
                    'id' => 1299,
                    'country_id' => 1,
                    'external_id' => '951968461',
                    'name_en' => 'Al Les',
                    'name_ar' => 'اللص'
                ],
                [
                    'id' => 1300,
                    'country_id' => 1,
                    'external_id' => '177865166',
                    'name_en' => 'Maneef',
                    'name_ar' => 'منيف'
                ],
                [
                    'id' => 1301,
                    'country_id' => 1,
                    'external_id' => '1684480207',
                    'name_en' => 'Al-Madhreb Al-Ala',
                    'name_ar' => 'المضرب  الاعلى'
                ],
                [
                    'id' => 1302,
                    'country_id' => 1,
                    'external_id' => '910970824',
                    'name_en' => 'Alealibuh',
                    'name_ar' => 'العليبه'
                ],
                [
                    'id' => 1303,
                    'country_id' => 1,
                    'external_id' => '2715337',
                    'name_en' => 'Earaq Almarawi',
                    'name_ar' => 'عرق المروي'
                ],
                [
                    'id' => 1304,
                    'country_id' => 1,
                    'external_id' => '1576504778',
                    'name_en' => 'Almufatah',
                    'name_ar' => 'المفتح'
                ],
                [
                    'id' => 1305,
                    'country_id' => 1,
                    'external_id' => '802991307',
                    'name_en' => 'Al Waarah',
                    'name_ar' => 'الوعره'
                ],
                [
                    'id' => 1306,
                    'country_id' => 1,
                    'external_id' => '2042219476',
                    'name_en' => 'Al-Mazumah Al-Muqabalat',
                    'name_ar' => 'المزومه المقابلات'
                ],
                [
                    'id' => 1307,
                    'country_id' => 1,
                    'external_id' => '1267133141',
                    'name_en' => 'Gazomah',
                    'name_ar' => 'جزومة'
                ],
                [
                    'id' => 1308,
                    'country_id' => 1,
                    'external_id' => '627247574',
                    'name_en' => 'Al Enabah',
                    'name_ar' => 'العنبه'
                ],
                [
                    'id' => 1309,
                    'country_id' => 1,
                    'external_id' => '2001217751',
                    'name_en' => 'Aljuranah',
                    'name_ar' => 'الجرنه'
                ],
                [
                    'id' => 1310,
                    'country_id' => 1,
                    'external_id' => '1091909584',
                    'name_en' => 'Al Ghumayrah',
                    'name_ar' => 'الغميره'
                ],
                [
                    'id' => 1311,
                    'country_id' => 1,
                    'external_id' => '317871825',
                    'name_en' => 'Dhu Alhiraj',
                    'name_ar' => 'ذو الحراج'
                ],
                [
                    'id' => 1312,
                    'country_id' => 1,
                    'external_id' => '1826584018',
                    'name_en' => 'Jahizuh',
                    'name_ar' => 'جهيزه'
                ],
                [
                    'id' => 1313,
                    'country_id' => 1,
                    'external_id' => '1051038931',
                    'name_en' => 'Al Aswadiyah',
                    'name_ar' => 'الاسوديه'
                ],
                [
                    'id' => 1314,
                    'country_id' => 1,
                    'external_id' => '142783452',
                    'name_en' => 'Sira Alhamruh',
                    'name_ar' => 'سر الحمره'
                ],
                [
                    'id' => 1315,
                    'country_id' => 1,
                    'external_id' => '1517277917',
                    'name_en' => 'Lihajin Dabriun',
                    'name_ar' => 'لحج ضبري'
                ],
                [
                    'id' => 1316,
                    'country_id' => 1,
                    'external_id' => '875885022',
                    'name_en' => 'Sheyabah',
                    'name_ar' => 'شيابه'
                ],
                [
                    'id' => 1317,
                    'country_id' => 1,
                    'external_id' => '101781727',
                    'name_en' => 'Bahran',
                    'name_ar' => 'بهران'
                ],
                [
                    'id' => 1318,
                    'country_id' => 1,
                    'external_id' => '1409171416',
                    'name_en' => 'Al MahraqahAl Olya',
                    'name_ar' => 'المحرقه العليا'
                ],
                [
                    'id' => 1319,
                    'country_id' => 1,
                    'external_id' => '769351385',
                    'name_en' => 'Alrafas',
                    'name_ar' => 'الرفاص'
                ],
                [
                    'id' => 1320,
                    'country_id' => 1,
                    'external_id' => '2141224410',
                    'name_en' => 'Samsarat Al-Mughyalah',
                    'name_ar' => 'سمسرة المغياله'
                ],
                [
                    'id' => 1321,
                    'country_id' => 1,
                    'external_id' => '1234083035',
                    'name_en' => 'Udayna',
                    'name_ar' => 'عدينه'
                ],
                [
                    'id' => 1322,
                    'country_id' => 1,
                    'external_id' => '460045092',
                    'name_en' => 'Amaqiyah',
                    'name_ar' => 'عماقيه'
                ],
                [
                    'id' => 1323,
                    'country_id' => 1,
                    'external_id' => '1966135845',
                    'name_en' => 'Aleazafaa',
                    'name_ar' => 'العزافى'
                ],
                [
                    'id' => 1324,
                    'country_id' => 1,
                    'external_id' => '1193146662',
                    'name_en' => 'Al Marab',
                    'name_ar' => 'المارب'
                ],
                [
                    'id' => 1325,
                    'country_id' => 1,
                    'external_id' => '284825639',
                    'name_en' => 'Almarque',
                    'name_ar' => 'المرقوع'
                ],
                [
                    'id' => 1326,
                    'country_id' => 1,
                    'external_id' => '1657218848',
                    'name_en' => 'Umm Allwy',
                    'name_ar' => 'ام اللوي'
                ],
                [
                    'id' => 1327,
                    'country_id' => 1,
                    'external_id' => '1017923105',
                    'name_en' => 'Almuzabirat (Alsufalaa)',
                    'name_ar' => 'المزبرات (السفلى)'
                ],
                [
                    'id' => 1328,
                    'country_id' => 1,
                    'external_id' => '243885346',
                    'name_en' => 'Masfuquh',
                    'name_ar' => 'مصفوقه'
                ],
                [
                    'id' => 1329,
                    'country_id' => 1,
                    'external_id' => '1482130467',
                    'name_en' => 'Dhara Almuhamaa',
                    'name_ar' => 'ذارى المحمى'
                ],
                [
                    'id' => 1330,
                    'country_id' => 1,
                    'external_id' => '708617004',
                    'name_en' => 'Sadar Marakuh',
                    'name_ar' => 'صدر مراكه'
                ],
                [
                    'id' => 1331,
                    'country_id' => 1,
                    'external_id' => '68796973',
                    'name_en' => 'Al Muqeq',
                    'name_ar' => 'المقيق'
                ],
                [
                    'id' => 1332,
                    'country_id' => 1,
                    'external_id' => '1374085422',
                    'name_en' => 'Aljybuh',
                    'name_ar' => 'الجيبه'
                ],
                [
                    'id' => 1333,
                    'country_id' => 1,
                    'external_id' => '599982127',
                    'name_en' => 'Alhamiduh',
                    'name_ar' => 'الحامضه'
                ],
                [
                    'id' => 1334,
                    'country_id' => 1,
                    'external_id' => '2108174120',
                    'name_en' => 'Almalaba',
                    'name_ar' => 'الملبا'
                ],
                [
                    'id' => 1335,
                    'country_id' => 1,
                    'external_id' => '1333087785',
                    'name_en' => 'Naqeel Aljarbaa',
                    'name_ar' => 'نقيل الجرباء'
                ],
                [
                    'id' => 1336,
                    'country_id' => 1,
                    'external_id' => '424832298',
                    'name_en' => 'Al Wajaa',
                    'name_ar' => 'الوجاء'
                ],
                [
                    'id' => 1337,
                    'country_id' => 1,
                    'external_id' => '1798868011',
                    'name_en' => 'Mughaylalah',
                    'name_ar' => 'مغيلله'
                ],
                [
                    'id' => 1338,
                    'country_id' => 1,
                    'external_id' => '1157999412',
                    'name_en' => 'Qaead Alhiramih',
                    'name_ar' => 'قعاد الهرامه'
                ],
                [
                    'id' => 1339,
                    'country_id' => 1,
                    'external_id' => '383961653',
                    'name_en' => 'Dhirae Alhijar',
                    'name_ar' => 'ذراع الهجر'
                ],
                [
                    'id' => 1340,
                    'country_id' => 1,
                    'external_id' => '1624238390',
                    'name_en' => 'Sayalan',
                    'name_ar' => 'سيلان'
                ],
                [
                    'id' => 1341,
                    'country_id' => 1,
                    'external_id' => '848562231',
                    'name_en' => 'Muklis',
                    'name_ar' => 'مكلس'
                ],
                [
                    'id' => 1342,
                    'country_id' => 1,
                    'external_id' => '208738096',
                    'name_en' => 'Al Janbah',
                    'name_ar' => 'الجانبه'
                ],
                [
                    'id' => 1343,
                    'country_id' => 1,
                    'external_id' => '1583232561',
                    'name_en' => 'Rabadah',
                    'name_ar' => 'ربضه'
                ],
                [
                    'id' => 1344,
                    'country_id' => 1,
                    'external_id' => '674977074',
                    'name_en' => 'Luthayn',
                    'name_ar' => 'لثين'
                ],
                [
                    'id' => 1345,
                    'country_id' => 1,
                    'external_id' => '2046850099',
                    'name_en' => 'Alqarishih',
                    'name_ar' => 'القارشيه'
                ],
                [
                    'id' => 1346,
                    'country_id' => 1,
                    'external_id' => '1475253052',
                    'name_en' => 'Alkharba',
                    'name_ar' => 'الخربة'
                ],
                [
                    'id' => 1347,
                    'country_id' => 1,
                    'external_id' => '566997565',
                    'name_en' => 'Ayyas',
                    'name_ar' => 'عياس'
                ],
                [
                    'id' => 1348,
                    'country_id' => 1,
                    'external_id' => '1938870590',
                    'name_en' => 'Qaem Magrashi',
                    'name_ar' => 'قائم مجرشى'
                ],
                [
                    'id' => 1349,
                    'country_id' => 1,
                    'external_id' => '1300099135',
                    'name_en' => 'Al Ghulayn',
                    'name_ar' => 'الغولين'
                ],
                [
                    'id' => 1350,
                    'country_id' => 1,
                    'external_id' => '525999928',
                    'name_en' => 'Wasiluh',
                    'name_ar' => 'وصيله'
                ],
                [
                    'id' => 1351,
                    'country_id' => 1,
                    'external_id' => '1764179513',
                    'name_en' => 'Almusyaaluh',
                    'name_ar' => 'المسياله'
                ],
                [
                    'id' => 1352,
                    'country_id' => 1,
                    'external_id' => '990666042',
                    'name_en' => 'Altahaf',
                    'name_ar' => 'الطهف'
                ],
                [
                    'id' => 1353,
                    'country_id' => 1,
                    'external_id' => '350846011',
                    'name_en' => 'Zamran',
                    'name_ar' => 'ذمران'
                ],
                [
                    'id' => 1354,
                    'country_id' => 1,
                    'external_id' => '1723308804',
                    'name_en' => 'Qamadah',
                    'name_ar' => 'قماده'
                ],
                [
                    'id' => 1355,
                    'country_id' => 1,
                    'external_id' => '815577605',
                    'name_en' => 'Al Guhayrah',
                    'name_ar' => 'الجحيره'
                ],
                [
                    'id' => 1356,
                    'country_id' => 1,
                    'external_id' => '41539846',
                    'name_en' => 'Almudiruh',
                    'name_ar' => 'المديره'
                ],
                [
                    'id' => 1357,
                    'country_id' => 1,
                    'external_id' => '1548154887',
                    'name_en' => 'Dhahr As-Saluf',
                    'name_ar' => 'ظهر السلوف'
                ],
                [
                    'id' => 1358,
                    'country_id' => 1,
                    'external_id' => '774047488',
                    'name_en' => 'Salmun',
                    'name_ar' => 'سلمن'
                ],
                [
                    'id' => 1359,
                    'country_id' => 1,
                    'external_id' => '2013799937',
                    'name_en' => 'Wa\'Adaa Alhuruh',
                    'name_ar' => 'وادى الحره'
                ],
                [
                    'id' => 1360,
                    'country_id' => 1,
                    'external_id' => '1440040194',
                    'name_en' => 'Alrabahuh',
                    'name_ar' => 'الرباحه'
                ],
                [
                    'id' => 1361,
                    'country_id' => 1,
                    'external_id' => '666002435',
                    'name_en' => 'Alshaaniq',
                    'name_ar' => 'الشانق'
                ],
                [
                    'id' => 1362,
                    'country_id' => 1,
                    'external_id' => '1905820428',
                    'name_en' => 'Alharisi',
                    'name_ar' => 'الحريسي'
                ],
                [
                    'id' => 1363,
                    'country_id' => 1,
                    'external_id' => '1130734093',
                    'name_en' => 'Damashdan',
                    'name_ar' => 'دمشدان'
                ],
                [
                    'id' => 1364,
                    'country_id' => 1,
                    'external_id' => '490914062',
                    'name_en' => 'Rudhat Ahmed bin Ali Al-Amir',
                    'name_ar' => 'ردحة احمد بن علي الامير'
                ],
                [
                    'id' => 1365,
                    'country_id' => 1,
                    'external_id' => '1865408527',
                    'name_en' => 'Almilatuh',
                    'name_ar' => 'الملطه'
                ],
                [
                    'id' => 1366,
                    'country_id' => 1,
                    'external_id' => '955518728',
                    'name_en' => 'As-Satrayn',
                    'name_ar' => 'السترين'
                ],
                [
                    'id' => 1367,
                    'country_id' => 1,
                    'external_id' => '181480969',
                    'name_en' => 'Abwalkzm',
                    'name_ar' => 'ابوالكزم'
                ],
                [
                    'id' => 1368,
                    'country_id' => 1,
                    'external_id' => '1690193162',
                    'name_en' => 'Al Mufareq',
                    'name_ar' => 'الفارق'
                ],
                [
                    'id' => 1369,
                    'country_id' => 1,
                    'external_id' => '916155403',
                    'name_en' => 'Hubayel As-Salab',
                    'name_ar' => 'حبيل السلب'
                ],
                [
                    'id' => 1370,
                    'country_id' => 1,
                    'external_id' => '6392596',
                    'name_en' => 'Khadaduh',
                    'name_ar' => 'خضاضه'
                ],
                [
                    'id' => 1371,
                    'country_id' => 1,
                    'external_id' => '1380887061',
                    'name_en' => 'Al Karash',
                    'name_ar' => 'الكرش'
                ],
                [
                    'id' => 1372,
                    'country_id' => 1,
                    'external_id' => '741067030',
                    'name_en' => 'Haydar',
                    'name_ar' => 'حيدر'
                ],
                [
                    'id' => 1373,
                    'country_id' => 1,
                    'external_id' => '2045831191',
                    'name_en' => 'Al Labkhah',
                    'name_ar' => 'اللبخه'
                ],
                [
                    'id' => 1374,
                    'country_id' => 1,
                    'external_id' => '1272837904',
                    'name_en' => 'Alhasharah',
                    'name_ar' => 'الحشره'
                ],
                [
                    'id' => 1375,
                    'country_id' => 1,
                    'external_id' => '632952337',
                    'name_en' => 'Alaurah',
                    'name_ar' => 'العره'
                ],
                [
                    'id' => 1376,
                    'country_id' => 1,
                    'external_id' => '2005349650',
                    'name_en' => 'Almahanih',
                    'name_ar' => 'المحنيه'
                ],
                [
                    'id' => 1377,
                    'country_id' => 1,
                    'external_id' => '1097618451',
                    'name_en' => 'Zuber Al Marwi',
                    'name_ar' => 'ذوير المروي'
                ],
                [
                    'id' => 1378,
                    'country_id' => 1,
                    'external_id' => '323580700',
                    'name_en' => 'Safanah',
                    'name_ar' => 'سفانه'
                ],
                [
                    'id' => 1379,
                    'country_id' => 1,
                    'external_id' => '1830261277',
                    'name_en' => 'Al Hashi',
                    'name_ar' => 'الحاشي'
                ],
                [
                    'id' => 1380,
                    'country_id' => 1,
                    'external_id' => '1056747806',
                    'name_en' => 'Alsama\'',
                    'name_ar' => 'الصماء'
                ],
                [
                    'id' => 1381,
                    'country_id' => 1,
                    'external_id' => '148492319',
                    'name_en' => 'Alhamaluh',
                    'name_ar' => 'الهمله'
                ],
                [
                    'id' => 1382,
                    'country_id' => 1,
                    'external_id' => '1520893720',
                    'name_en' => 'Almashbubi',
                    'name_ar' => 'المشبوبي'
                ],
                [
                    'id' => 1383,
                    'country_id' => 1,
                    'external_id' => '881008153',
                    'name_en' => 'Manamah',
                    'name_ar' => 'منمه'
                ],
                [
                    'id' => 1384,
                    'country_id' => 1,
                    'external_id' => '107494682',
                    'name_en' => 'Al Salamaa',
                    'name_ar' => 'ال سلمى'
                ],
                [
                    'id' => 1385,
                    'country_id' => 1,
                    'external_id' => '1345674267',
                    'name_en' => 'Al Baharah',
                    'name_ar' => 'البهره'
                ],
                [
                    'id' => 1386,
                    'country_id' => 1,
                    'external_id' => '571636580',
                    'name_en' => 'Midkhal',
                    'name_ar' => 'مدخال'
                ],
                [
                    'id' => 1387,
                    'country_id' => 1,
                    'external_id' => '2146998885',
                    'name_en' => 'Hybail Al Ghalath',
                    'name_ar' => 'حبيل الغلث'
                ],
                [
                    'id' => 1388,
                    'country_id' => 1,
                    'external_id' => '1237694822',
                    'name_en' => 'Al-Mazbarat Al-Sufla',
                    'name_ar' => 'المزبرات السفلى'
                ],
                [
                    'id' => 1389,
                    'country_id' => 1,
                    'external_id' => '463657063',
                    'name_en' => 'Almutaradif',
                    'name_ar' => 'المترادف'
                ],
                [
                    'id' => 1390,
                    'country_id' => 1,
                    'external_id' => '1972365152',
                    'name_en' => 'Nayd Alththahirih',
                    'name_ar' => 'نيد الثاهره'
                ],
                [
                    'id' => 1391,
                    'country_id' => 1,
                    'external_id' => '1196688993',
                    'name_en' => 'Al-Hbeel',
                    'name_ar' => 'الحبيل'
                ],
                [
                    'id' => 1392,
                    'country_id' => 1,
                    'external_id' => '288433506',
                    'name_en' => 'Dhihaya',
                    'name_ar' => 'ظهاية'
                ],
                [
                    'id' => 1393,
                    'country_id' => 1,
                    'external_id' => '1662927971',
                    'name_en' => 'Ghabet',
                    'name_ar' => 'غابط'
                ],
                [
                    'id' => 1394,
                    'country_id' => 1,
                    'external_id' => '1023107948',
                    'name_en' => 'Nuaman',
                    'name_ar' => 'نعمان'
                ],
                [
                    'id' => 1395,
                    'country_id' => 1,
                    'external_id' => '247562861',
                    'name_en' => 'Al Kabsah',
                    'name_ar' => 'الكبسه'
                ],
                [
                    'id' => 1396,
                    'country_id' => 1,
                    'external_id' => '148492319',
                    'name_en' => 'Alhamaluh',
                    'name_ar' => 'الهمله'
                ],
                [
                    'id' => 1397,
                    'country_id' => 1,
                    'external_id' => '1520893720',
                    'name_en' => 'Almashbubi',
                    'name_ar' => 'المشبوبي'
                ],
                [
                    'id' => 1398,
                    'country_id' => 1,
                    'external_id' => '881008153',
                    'name_en' => 'Manamah',
                    'name_ar' => 'منمه'
                ],
                [
                    'id' => 1399,
                    'country_id' => 1,
                    'external_id' => '107494682',
                    'name_en' => 'Al Salamaa',
                    'name_ar' => 'ال سلمى'
                ],
                [
                    'id' => 1400,
                    'country_id' => 1,
                    'external_id' => '1345674267',
                    'name_en' => 'Al Baharah',
                    'name_ar' => 'البهره'
                ],
                [
                    'id' => 1401,
                    'country_id' => 1,
                    'external_id' => '571636580',
                    'name_en' => 'Midkhal',
                    'name_ar' => 'مدخال'
                ],
                [
                    'id' => 1402,
                    'country_id' => 1,
                    'external_id' => '2146998885',
                    'name_en' => 'Hybail Al Ghalath',
                    'name_ar' => 'حبيل الغلث'
                ],
                [
                    'id' => 1403,
                    'country_id' => 1,
                    'external_id' => '1237694822',
                    'name_en' => 'Al-Mazbarat Al-Sufla',
                    'name_ar' => 'المزبرات السفلى'
                ],
                [
                    'id' => 1404,
                    'country_id' => 1,
                    'external_id' => '463657063',
                    'name_en' => 'Almutaradif',
                    'name_ar' => 'المترادف'
                ],
                [
                    'id' => 1405,
                    'country_id' => 1,
                    'external_id' => '1972365152',
                    'name_en' => 'Nayd Alththahirih',
                    'name_ar' => 'نيد الثاهره'
                ],
                [
                    'id' => 1406,
                    'country_id' => 1,
                    'external_id' => '1196688993',
                    'name_en' => 'Al-Hbeel',
                    'name_ar' => 'الحبيل'
                ],
                [
                    'id' => 1407,
                    'country_id' => 1,
                    'external_id' => '288433506',
                    'name_en' => 'Dhihaya',
                    'name_ar' => 'ظهاية'
                ],
                [
                    'id' => 1408,
                    'country_id' => 1,
                    'external_id' => '1662927971',
                    'name_en' => 'Ghabet',
                    'name_ar' => 'غابط'
                ],
                [
                    'id' => 1409,
                    'country_id' => 1,
                    'external_id' => '1023107948',
                    'name_en' => 'Nuaman',
                    'name_ar' => 'نعمان'
                ],
                [
                    'id' => 1410,
                    'country_id' => 1,
                    'external_id' => '247562861',
                    'name_en' => 'Al Kabsah',
                    'name_ar' => 'الكبسه'
                ],
                [
                    'id' => 1411,
                    'country_id' => 1,
                    'external_id' => '1487839598',
                    'name_en' => 'Umm Aljimnuh',
                    'name_ar' => 'ام الجمنه'
                ],
                [
                    'id' => 1412,
                    'country_id' => 1,
                    'external_id' => '713801839',
                    'name_en' => 'alqatae',
                    'name_ar' => 'القطع'
                ],
                [
                    'id' => 1413,
                    'country_id' => 1,
                    'external_id' => '72413032',
                    'name_en' => 'Al Muhayah',
                    'name_ar' => 'المهيع'
                ],
                [
                    'id' => 1414,
                    'country_id' => 1,
                    'external_id' => '1446841961',
                    'name_en' => 'Amaq',
                    'name_ar' => 'عمق'
                ],
                [
                    'id' => 1415,
                    'country_id' => 1,
                    'external_id' => '538586474',
                    'name_en' => 'Jawin Alear',
                    'name_ar' => 'جو العار'
                ],
                [
                    'id' => 1416,
                    'country_id' => 1,
                    'external_id' => '2112310379',
                    'name_en' => 'Al Atef',
                    'name_ar' => 'العاطف'
                ],
                [
                    'id' => 1417,
                    'country_id' => 1,
                    'external_id' => '1338796916',
                    'name_en' => 'Beit Al Araq',
                    'name_ar' => 'بيت العرق'
                ],
                [
                    'id' => 1418,
                    'country_id' => 1,
                    'external_id' => '430606965',
                    'name_en' => 'Rabkhan',
                    'name_ar' => 'ربخان'
                ],
                [
                    'id' => 1419,
                    'country_id' => 1,
                    'external_id' => '1803004278',
                    'name_en' => 'Aleahir',
                    'name_ar' => 'العاهر'
                ],
                [
                    'id' => 1420,
                    'country_id' => 1,
                    'external_id' => '1163708535',
                    'name_en' => 'Al Manakei',
                    'name_ar' => 'المناكع'
                ],
                [
                    'id' => 1421,
                    'country_id' => 1,
                    'external_id' => '389666672',
                    'name_en' => 'Baradah',
                    'name_ar' => 'برده'
                ],
                [
                    'id' => 1422,
                    'country_id' => 1,
                    'external_id' => '1627846257',
                    'name_en' => 'Alhijraf',
                    'name_ar' => 'الحجراف'
                ],
                [
                    'id' => 1423,
                    'country_id' => 1,
                    'external_id' => '853742962',
                    'name_en' => 'Al Meshraqah',
                    'name_ar' => 'المشراقه'
                ],
                [
                    'id' => 1424,
                    'country_id' => 1,
                    'external_id' => '214447219',
                    'name_en' => 'Sahban',
                    'name_ar' => 'صهبان'
                ],
                [
                    'id' => 1425,
                    'country_id' => 1,
                    'external_id' => '1586844540',
                    'name_en' => 'Al Gabiyah',
                    'name_ar' => 'الجابيه'
                ],
                [
                    'id' => 1426,
                    'country_id' => 1,
                    'external_id' => '678589053',
                    'name_en' => 'Al Rudayhah',
                    'name_ar' => 'الرديهه'
                ],
                [
                    'id' => 1427,
                    'country_id' => 1,
                    'external_id' => '2052624766',
                    'name_en' => 'Alkhizam',
                    'name_ar' => 'الخزام'
                ],
                [
                    'id' => 1428,
                    'country_id' => 1,
                    'external_id' => '1411756159',
                    'name_en' => 'Dhara Alqahbih',
                    'name_ar' => 'ذارى القهبه'
                ],
                [
                    'id' => 1429,
                    'country_id' => 1,
                    'external_id' => '637722488',
                    'name_en' => 'Muataq Harf',
                    'name_ar' => 'معتق حرف'
                ],
                [
                    'id' => 1430,
                    'country_id' => 1,
                    'external_id' => '1945108089',
                    'name_en' => 'Al Umdah',
                    'name_ar' => 'العمده'
                ],
                [
                    'id' => 1431,
                    'country_id' => 1,
                    'external_id' => '1303649658',
                    'name_en' => 'Manghas',
                    'name_ar' => 'منغس'
                ],
                [
                    'id' => 1432,
                    'country_id' => 1,
                    'external_id' => '529611899',
                    'name_en' => 'Al Safef',
                    'name_ar' => 'الصفيف'
                ],
                [
                    'id' => 1433,
                    'country_id' => 1,
                    'external_id' => '1769888580',
                    'name_en' => 'Eutf',
                    'name_ar' => 'عطف'
                ],
                [
                    'id' => 1434,
                    'country_id' => 1,
                    'external_id' => '995850821',
                    'name_en' => 'Al Mushref',
                    'name_ar' => 'المشرف'
                ],
                [
                    'id' => 1435,
                    'country_id' => 1,
                    'external_id' => '354523462',
                    'name_en' => 'Al Umaydah',
                    'name_ar' => 'العميده'
                ],
                [
                    'id' => 1436,
                    'country_id' => 1,
                    'external_id' => '1729017927',
                    'name_en' => 'Nyd Sahra\'',
                    'name_ar' => 'نيد صحراء'
                ],
                [
                    'id' => 1437,
                    'country_id' => 1,
                    'external_id' => '820758336',
                    'name_en' => 'Taazur',
                    'name_ar' => 'تعذر'
                ],
                [
                    'id' => 1438,
                    'country_id' => 1,
                    'external_id' => '45147713',
                    'name_en' => 'Al Mughedi',
                    'name_ar' => 'المغدي'
                ],
                [
                    'id' => 1439,
                    'country_id' => 1,
                    'external_id' => '1553794370',
                    'name_en' => 'Alwahduh',
                    'name_ar' => 'الوهده'
                ],
                [
                    'id' => 1440,
                    'country_id' => 1,
                    'external_id' => '779756611',
                    'name_en' => 'Alshamluh',
                    'name_ar' => 'الشمله'
                ],
                [
                    'id' => 1441,
                    'country_id' => 1,
                    'external_id' => '2017936204',
                    'name_en' => 'Alradm',
                    'name_ar' => 'الردم'
                ],
                [
                    'id' => 1442,
                    'country_id' => 1,
                    'external_id' => '1244422733',
                    'name_en' => 'Zuber Al Affar',
                    'name_ar' => 'ذوير العفار'
                ],
                [
                    'id' => 1443,
                    'country_id' => 1,
                    'external_id' => '604668238',
                    'name_en' => 'Al Waqee',
                    'name_ar' => 'الوقيع'
                ],
                [
                    'id' => 1444,
                    'country_id' => 1,
                    'external_id' => '1909956687',
                    'name_en' => 'Al Ghafer',
                    'name_ar' => 'الغافر'
                ],
                [
                    'id' => 1445,
                    'country_id' => 1,
                    'external_id' => '1136447304',
                    'name_en' => 'Aleisha',
                    'name_ar' => 'العشة'
                ],
                [
                    'id' => 1446,
                    'country_id' => 1,
                    'external_id' => '496627273',
                    'name_en' => 'Maamal Safei',
                    'name_ar' => 'معمال سافع'
                ],
                [
                    'id' => 1447,
                    'country_id' => 1,
                    'external_id' => '1868959050',
                    'name_en' => 'Thari Al-Qarnah',
                    'name_ar' => 'ذاري القرنه'
                ],
                [
                    'id' => 1448,
                    'country_id' => 1,
                    'external_id' => '960703563',
                    'name_en' => 'Nyd Qatbih',
                    'name_ar' => 'نيد قطبه'
                ],
                [
                    'id' => 1449,
                    'country_id' => 1,
                    'external_id' => '187190100',
                    'name_en' => 'Ath-Thaher',
                    'name_ar' => 'الثاهر'
                ],
                [
                    'id' => 1450,
                    'country_id' => 1,
                    'external_id' => '1693805141',
                    'name_en' => 'Al-Ghamra',
                    'name_ar' => 'الغمره'
                ],
                [
                    'id' => 1451,
                    'country_id' => 1,
                    'external_id' => '919832918',
                    'name_en' => 'Al Ghawrah',
                    'name_ar' => 'الغوره'
                ],
                [
                    'id' => 1452,
                    'country_id' => 1,
                    'external_id' => '12101719',
                    'name_en' => 'Aleasa',
                    'name_ar' => 'العصا'
                ],
                [
                    'id' => 1453,
                    'country_id' => 1,
                    'external_id' => '1384494928',
                    'name_en' => 'Almadhruf',
                    'name_ar' => 'المظروف'
                ],
                [
                    'id' => 1454,
                    'country_id' => 1,
                    'external_id' => '744674897',
                    'name_en' => 'Alwaqit',
                    'name_ar' => 'الوقيط'
                ],
                [
                    'id' => 1455,
                    'country_id' => 1,
                    'external_id' => '2119169362',
                    'name_en' => 'Al Rasheen',
                    'name_ar' => 'الرشين'
                ],
                [
                    'id' => 1456,
                    'country_id' => 1,
                    'external_id' => '1209275475',
                    'name_en' => 'Al Waqerah',
                    'name_ar' => 'الوقيره'
                ],
                [
                    'id' => 1457,
                    'country_id' => 1,
                    'external_id' => '636564316',
                    'name_en' => 'Al Lujayn',
                    'name_ar' => 'اللجين'
                ],
                [
                    'id' => 1458,
                    'country_id' => 1,
                    'external_id' => '2011058781',
                    'name_en' => 'Aleadui',
                    'name_ar' => 'العدو'
                ],
                [
                    'id' => 1459,
                    'country_id' => 1,
                    'external_id' => '1102803294',
                    'name_en' => 'Alghawih',
                    'name_ar' => 'الغاويه'
                ],
                [
                    'id' => 1460,
                    'country_id' => 1,
                    'external_id' => '327258207',
                    'name_en' => 'Almusafaq',
                    'name_ar' => 'المصفق'
                ],
                [
                    'id' => 1461,
                    'country_id' => 1,
                    'external_id' => '1835974488',
                    'name_en' => 'Lethaber',
                    'name_ar' => 'لثابير'
                ],
                [
                    'id' => 1462,
                    'country_id' => 1,
                    'external_id' => '1061936729',
                    'name_en' => 'Ar-Ramadah',
                    'name_ar' => 'الرمضه'
                ],
                [
                    'id' => 1463,
                    'country_id' => 1,
                    'external_id' => '152108378',
                    'name_en' => 'Al Fasih',
                    'name_ar' => 'الفسيح'
                ],
                [
                    'id' => 1464,
                    'country_id' => 1,
                    'external_id' => '1526537307',
                    'name_en' => 'Alfusea\'',
                    'name_ar' => 'الفصعاء'
                ],
                [
                    'id' => 1465,
                    'country_id' => 1,
                    'external_id' => '886717092',
                    'name_en' => 'At-Tulaylah',
                    'name_ar' => 'الطليله'
                ],
                [
                    'id' => 1466,
                    'country_id' => 1,
                    'external_id' => '111630757',
                    'name_en' => 'Lihuj Alghanih',
                    'name_ar' => 'لحوج الغنيه'
                ],
                [
                    'id' => 1467,
                    'country_id' => 1,
                    'external_id' => '1351383206',
                    'name_en' => 'Swdi Alhibatuh',
                    'name_ar' => 'سودي الحباطه'
                ],
                [
                    'id' => 1468,
                    'country_id' => 1,
                    'external_id' => '577406887',
                    'name_en' => 'Habil Alththahir',
                    'name_ar' => 'حبيل الثاهر'
                ],
                [
                    'id' => 1469,
                    'country_id' => 1,
                    'external_id' => '2084021920',
                    'name_en' => 'Gharqeen',
                    'name_ar' => 'غرفين'
                ],
                [
                    'id' => 1470,
                    'country_id' => 1,
                    'external_id' => '1310508449',
                    'name_en' => 'Al Makman',
                    'name_ar' => 'المكمن'
                ],
                [
                    'id' => 1471,
                    'country_id' => 1,
                    'external_id' => '469361826',
                    'name_en' => 'Nyd Alkhutuh',
                    'name_ar' => 'نيد الخطوه'
                ],
                [
                    'id' => 1472,
                    'country_id' => 1,
                    'external_id' => '1975911331',
                    'name_en' => 'Aldhiyab',
                    'name_ar' => 'الذياب'
                ],
                [
                    'id' => 1473,
                    'country_id' => 1,
                    'external_id' => '1201873580',
                    'name_en' => 'Nayd Alshaqrih',
                    'name_ar' => 'نيد الشقره'
                ],
                [
                    'id' => 1474,
                    'country_id' => 1,
                    'external_id' => '294142381',
                    'name_en' => 'Al Kharab',
                    'name_ar' => 'الخرب'
                ],
                [
                    'id' => 1475,
                    'country_id' => 1,
                    'external_id' => '1666539694',
                    'name_en' => 'Al Masabah',
                    'name_ar' => 'المسابه'
                ],
                [
                    'id' => 1476,
                    'country_id' => 1,
                    'external_id' => '1026789295',
                    'name_en' => 'Juf Almusaydaa',
                    'name_ar' => 'جوف المصيدى'
                ],
                [
                    'id' => 1477,
                    'country_id' => 1,
                    'external_id' => '253275816',
                    'name_en' => 'Khaweamuh',
                    'name_ar' => 'خوعمه'
                ],
                [
                    'id' => 1478,
                    'country_id' => 1,
                    'external_id' => '1491455401',
                    'name_en' => 'Samayh',
                    'name_ar' => 'سمايه'
                ],
                [
                    'id' => 1479,
                    'country_id' => 1,
                    'external_id' => '717417642',
                    'name_en' => 'Aqaba',
                    'name_ar' => 'العقبه'
                ],
                [
                    'id' => 1480,
                    'country_id' => 1,
                    'external_id' => '78580651',
                    'name_en' => 'Khtybh',
                    'name_ar' => 'خطيبه'
                ],
                [
                    'id' => 1481,
                    'country_id' => 1,
                    'external_id' => '1450453684',
                    'name_en' => 'Hyd Alhamrih',
                    'name_ar' => 'حيد الحمره'
                ],
                [
                    'id' => 1482,
                    'country_id' => 1,
                    'external_id' => '542198197',
                    'name_en' => 'Dahrat Qaniyah',
                    'name_ar' => 'دحره قانيه'
                ],
                [
                    'id' => 1483,
                    'country_id' => 1,
                    'external_id' => '1916692662',
                    'name_en' => 'Al Mabkharah',
                    'name_ar' => 'المبخرة'
                ],
                [
                    'id' => 1484,
                    'country_id' => 1,
                    'external_id' => '1276868535',
                    'name_en' => 'Qayim Alsiyab',
                    'name_ar' => 'قائم الصياب'
                ],
                [
                    'id' => 1485,
                    'country_id' => 1,
                    'external_id' => '434214576',
                    'name_en' => 'Qumaysha',
                    'name_ar' => 'قميشه'
                ],
                [
                    'id' => 1486,
                    'country_id' => 1,
                    'external_id' => '1808709041',
                    'name_en' => 'Althahruh',
                    'name_ar' => 'الثهره'
                ],
                [
                    'id' => 1487,
                    'country_id' => 1,
                    'external_id' => '1168889010',
                    'name_en' => 'Alhilmuh',
                    'name_ar' => 'الحلمه'
                ],
                [
                    'id' => 1488,
                    'country_id' => 1,
                    'external_id' => '393278387',
                    'name_en' => 'Azzan',
                    'name_ar' => 'عزان'
                ],
                [
                    'id' => 1489,
                    'country_id' => 1,
                    'external_id' => '1633489596',
                    'name_en' => 'Al Mahraqah As-Sufla',
                    'name_ar' => 'المحرقه السفلى'
                ],
                [
                    'id' => 1490,
                    'country_id' => 1,
                    'external_id' => '859451837',
                    'name_en' => 'Thanibir',
                    'name_ar' => 'ثنيبر'
                ],
                [
                    'id' => 1491,
                    'country_id' => 1,
                    'external_id' => '218583230',
                    'name_en' => 'Al Muqreth',
                    'name_ar' => 'المقرث'
                ],
                [
                    'id' => 1492,
                    'country_id' => 1,
                    'external_id' => '1592557503',
                    'name_en' => 'Alsirih',
                    'name_ar' => 'السريه'
                ],
                [
                    'id' => 1493,
                    'country_id' => 1,
                    'external_id' => '684367544',
                    'name_en' => 'Ared Al Quful',
                    'name_ar' => 'عارض القفل'
                ],
                [
                    'id' => 1494,
                    'country_id' => 1,
                    'external_id' => '2056764857',
                    'name_en' => 'Alghushuh',
                    'name_ar' => 'الغشوه'
                ],
                [
                    'id' => 1495,
                    'country_id' => 1,
                    'external_id' => '1417469114',
                    'name_en' => 'Lihajin Zayid',
                    'name_ar' => 'لحج زايد'
                ],
                [
                    'id' => 1496,
                    'country_id' => 1,
                    'external_id' => '643431355',
                    'name_en' => 'Alkiranuh',
                    'name_ar' => 'الكرانه'
                ],
                [
                    'id' => 1497,
                    'country_id' => 1,
                    'external_id' => '1881545348',
                    'name_en' => 'Aleasuiiyn',
                    'name_ar' => 'العاصويين'
                ],
                [
                    'id' => 1498,
                    'country_id' => 1,
                    'external_id' => '1107507589',
                    'name_en' => 'Almabda',
                    'name_ar' => 'المبدأ'
                ],
                [
                    'id' => 1499,
                    'country_id' => 1,
                    'external_id' => '535320710',
                    'name_en' => 'Eadanah',
                    'name_ar' => 'عدنه'
                ],
                [
                    'id' => 1500,
                    'country_id' => 1,
                    'external_id' => '1773496199',
                    'name_en' => 'Qayim Zabid',
                    'name_ar' => 'قائم زبيد'
                ],
                [
                    'id' => 1501,
                    'country_id' => 1,
                    'external_id' => '999523968',
                    'name_en' => 'Sira Qunue',
                    'name_ar' => 'سر قنوع'
                ],
                [
                    'id' => 1502,
                    'country_id' => 1,
                    'external_id' => '360228225',
                    'name_en' => 'Al Khatm Ash-Sharqi',
                    'name_ar' => 'الخطم الشرقي'
                ],
                [
                    'id' => 1503,
                    'country_id' => 1,
                    'external_id' => '1732625538',
                    'name_en' => 'Jawin Aleir',
                    'name_ar' => 'جو العير'
                ],
                [
                    'id' => 1504,
                    'country_id' => 1,
                    'external_id' => '824370051',
                    'name_en' => 'Taghadur',
                    'name_ar' => 'تغادر'
                ],
                [
                    'id' => 1505,
                    'country_id' => 1,
                    'external_id' => '51315340',
                    'name_en' => 'Alhadah',
                    'name_ar' => 'الهضه'
                ],
                [
                    'id' => 1506,
                    'country_id' => 1,
                    'external_id' => '1557406093',
                    'name_en' => 'Nyd Euf',
                    'name_ar' => 'نيد عوف'
                ],
                [
                    'id' => 1507,
                    'country_id' => 1,
                    'external_id' => '783368334',
                    'name_en' => 'Qsyrh',
                    'name_ar' => 'قصيره'
                ],
                [
                    'id' => 1508,
                    'country_id' => 1,
                    'external_id' => '2023649167',
                    'name_en' => 'Alhibatuh',
                    'name_ar' => 'الحباطه'
                ],
                [
                    'id' => 1509,
                    'country_id' => 1,
                    'external_id' => '1248104072',
                    'name_en' => 'Alqabil',
                    'name_ar' => 'القابل'
                ],
                [
                    'id' => 1510,
                    'country_id' => 1,
                    'external_id' => '608284041',
                    'name_en' => 'Qayim Alkueub',
                    'name_ar' => 'قائم الكعوب'
                ],
                [
                    'id' => 1511,
                    'country_id' => 1,
                    'external_id' => '1982778506',
                    'name_en' => 'Al Quzaah',
                    'name_ar' => 'القزعه'
                ],
                [
                    'id' => 1512,
                    'country_id' => 1,
                    'external_id' => '1074523019',
                    'name_en' => 'Almijah',
                    'name_ar' => 'الميجاه'
                ],
                [
                    'id' => 1513,
                    'country_id' => 1,
                    'external_id' => '500173460',
                    'name_en' => '\'Abu Alnakhl',
                    'name_ar' => 'ابو النخل'
                ],
                [
                    'id' => 1514,
                    'country_id' => 1,
                    'external_id' => '1874667925',
                    'name_en' => 'Aldhilamitayn',
                    'name_ar' => 'الظلامتين'
                ],
                [
                    'id' => 1515,
                    'country_id' => 1,
                    'external_id' => '966412438',
                    'name_en' => 'Almaeayin',
                    'name_ar' => 'المعاين'
                ],
                [
                    'id' => 1516,
                    'country_id' => 1,
                    'external_id' => '191322007',
                    'name_en' => 'Almaesir',
                    'name_ar' => 'المعسر'
                ],
                [
                    'id' => 1517,
                    'country_id' => 1,
                    'external_id' => '1699509904',
                    'name_en' => 'Al Muaqem',
                    'name_ar' => 'المعقم'
                ],
                [
                    'id' => 1518,
                    'country_id' => 1,
                    'external_id' => '925537681',
                    'name_en' => 'Alghalath',
                    'name_ar' => 'الغلث'
                ],
                [
                    'id' => 1519,
                    'country_id' => 1,
                    'external_id' => '16233618',
                    'name_en' => 'Alkuduri',
                    'name_ar' => 'الكدري'
                ],
                [
                    'id' => 1520,
                    'country_id' => 1,
                    'external_id' => '1390203795',
                    'name_en' => 'Makharin Station',
                    'name_ar' => 'محط  مخر'
                ],
                [
                    'id' => 1521,
                    'country_id' => 1,
                    'external_id' => '750383772',
                    'name_en' => 'Malzooz',
                    'name_ar' => 'ملزوز'
                ],
                [
                    'id' => 1522,
                    'country_id' => 1,
                    'external_id' => '2122715549',
                    'name_en' => 'Aldahyan',
                    'name_ar' => 'الضحيان'
                ],
                [
                    'id' => 1523,
                    'country_id' => 1,
                    'external_id' => '1214460062',
                    'name_en' => 'Al Magraf',
                    'name_ar' => 'المجرف'
                ],
                [
                    'id' => 1524,
                    'country_id' => 1,
                    'external_id' => '440950687',
                    'name_en' => 'Ath-Thaherah',
                    'name_ar' => 'الثاهره'
                ],
                [
                    'id' => 1525,
                    'country_id' => 1,
                    'external_id' => '1947565720',
                    'name_en' => 'Aldaquh',
                    'name_ar' => 'الدقه'
                ],
                [
                    'id' => 1526,
                    'country_id' => 1,
                    'external_id' => '1106484633',
                    'name_en' => 'Al Rubagh',
                    'name_ar' => 'الرويغ'
                ],
                [
                    'id' => 1527,
                    'country_id' => 1,
                    'external_id' => '332971162',
                    'name_en' => 'Alrazamuh',
                    'name_ar' => 'الرزمه'
                ],
                [
                    'id' => 1528,
                    'country_id' => 1,
                    'external_id' => '1839586203',
                    'name_en' => 'Al Baradah',
                    'name_ar' => 'البرده'
                ],
                [
                    'id' => 1529,
                    'country_id' => 1,
                    'external_id' => '1065548516',
                    'name_en' => 'Habil Aljaranih',
                    'name_ar' => 'حبيل الجرنه'
                ],
                [
                    'id' => 1530,
                    'country_id' => 1,
                    'external_id' => '158276069',
                    'name_en' => 'Aleashuh Alhamra\'',
                    'name_ar' => 'العشه الحمراء'
                ],
                [
                    'id' => 1531,
                    'country_id' => 1,
                    'external_id' => '1530149094',
                    'name_en' => 'Alkadahuh',
                    'name_ar' => 'الكدحه'
                ],
                [
                    'id' => 1532,
                    'country_id' => 1,
                    'external_id' => '890324967',
                    'name_en' => 'Alkhalif',
                    'name_ar' => 'الخليف'
                ],
                [
                    'id' => 1533,
                    'country_id' => 1,
                    'external_id' => '117335776',
                    'name_en' => 'Dhirae Altarayif',
                    'name_ar' => 'ذراع الطرائف'
                ],
                [
                    'id' => 1534,
                    'country_id' => 1,
                    'external_id' => '1355056609',
                    'name_en' => 'Al-Rakhs',
                    'name_ar' => 'الرخص'
                ],
                [
                    'id' => 1535,
                    'country_id' => 1,
                    'external_id' => '581018850',
                    'name_en' => 'Harf Alsuhaa',
                    'name_ar' => 'حرف السهى'
                ],
                [
                    'id' => 1536,
                    'country_id' => 1,
                    'external_id' => '2089731043',
                    'name_en' => 'Al Radman',
                    'name_ar' => 'الردمان'
                ],
                [
                    'id' => 1537,
                    'country_id' => 1,
                    'external_id' => '1315693292',
                    'name_en' => 'Dar Alnasr',
                    'name_ar' => 'دار النصر'
                ],
                [
                    'id' => 1538,
                    'country_id' => 1,
                    'external_id' => '405799405',
                    'name_en' => 'Alfariduh',
                    'name_ar' => 'الفريضه'
                ],
                [
                    'id' => 1539,
                    'country_id' => 1,
                    'external_id' => '1780293870',
                    'name_en' => 'Almadarib',
                    'name_ar' => 'المداريب'
                ],
                [
                    'id' => 1540,
                    'country_id' => 1,
                    'external_id' => '1207586799',
                    'name_en' => 'As-Suhalaa',
                    'name_ar' => 'الصهلاء'
                ],
                [
                    'id' => 1541,
                    'country_id' => 1,
                    'external_id' => '298282728',
                    'name_en' => 'Alkharshum',
                    'name_ar' => 'الخرشوم'
                ],
                [
                    'id' => 1542,
                    'country_id' => 1,
                    'external_id' => '1672318441',
                    'name_en' => 'Sirun Hadid',
                    'name_ar' => 'سر حديد'
                ],
                [
                    'id' => 1543,
                    'country_id' => 1,
                    'external_id' => '1032498410',
                    'name_en' => 'Al\'Athbuh',
                    'name_ar' => 'الأثبه'
                ],
                [
                    'id' => 1544,
                    'country_id' => 1,
                    'external_id' => '257412075',
                    'name_en' => 'Alqaead',
                    'name_ar' => 'القعاد'
                ],
                [
                    'id' => 1545,
                    'country_id' => 1,
                    'external_id' => '1497164532',
                    'name_en' => 'Al Khasab',
                    'name_ar' => 'الخشب'
                ],
                [
                    'id' => 1546,
                    'country_id' => 1,
                    'external_id' => '723061237',
                    'name_en' => 'Abwimsialuh',
                    'name_ar' => 'ابومسياله'
                ],
                [
                    'id' => 1547,
                    'country_id' => 1,
                    'external_id' => '82192630',
                    'name_en' => 'Al Manfas',
                    'name_ar' => 'المنفس'
                ],
                [
                    'id' => 1548,
                    'country_id' => 1,
                    'external_id' => '1455634423',
                    'name_en' => 'Aldakhaniuh',
                    'name_ar' => 'الدخانيه'
                ],
                [
                    'id' => 1549,
                    'country_id' => 1,
                    'external_id' => '547903216',
                    'name_en' => 'Al Sawda',
                    'name_ar' => 'السوده'
                ],
                [
                    'id' => 1550,
                    'country_id' => 1,
                    'external_id' => '1920300529',
                    'name_en' => 'Muharej',
                    'name_ar' => 'مهارج'
                ],
                [
                    'id' => 1551,
                    'country_id' => 1,
                    'external_id' => '1280546034',
                    'name_en' => 'Lihaji Aldabrah',
                    'name_ar' => 'لحج الضبره'
                ],
                [
                    'id' => 1552,
                    'country_id' => 1,
                    'external_id' => '507032563',
                    'name_en' => 'Aljabil',
                    'name_ar' => 'الجبيل'
                ],
                [
                    'id' => 1553,
                    'country_id' => 1,
                    'external_id' => '1745212156',
                    'name_en' => 'Al Lawi',
                    'name_ar' => 'اللوي'
                ],
                [
                    'id' => 1554,
                    'country_id' => 1,
                    'external_id' => '1172500989',
                    'name_en' => 'Al Malaiha',
                    'name_ar' => 'المليحه'
                ],
                [
                    'id' => 1555,
                    'country_id' => 1,
                    'external_id' => '399446270',
                    'name_en' => 'Mudayah',
                    'name_ar' => 'مضايه'
                ],
                [
                    'id' => 1556,
                    'country_id' => 1,
                    'external_id' => '1637105663',
                    'name_en' => 'Aljihwiiyn',
                    'name_ar' => 'الجهويين'
                ],
                [
                    'id' => 1557,
                    'country_id' => 1,
                    'external_id' => '863067896',
                    'name_en' => 'Qayim Alsaahih',
                    'name_ar' => 'قائم الساحه'
                ],
                [
                    'id' => 1558,
                    'country_id' => 1,
                    'external_id' => '224296441',
                    'name_en' => 'Mubhama',
                    'name_ar' => 'مبهمة'
                ],
                [
                    'id' => 1559,
                    'country_id' => 1,
                    'external_id' => '1596235002',
                    'name_en' => 'Almaerisuh',
                    'name_ar' => 'المعرسه'
                ],
                [
                    'id' => 1560,
                    'country_id' => 1,
                    'external_id' => '687979515',
                    'name_en' => 'Alhadabuh',
                    'name_ar' => 'الحدبه'
                ],
                [
                    'id' => 1561,
                    'country_id' => 1,
                    'external_id' => '2062473924',
                    'name_en' => 'Refaah',
                    'name_ar' => 'رفاعه'
                ],
                [
                    'id' => 1562,
                    'country_id' => 1,
                    'external_id' => '1422653893',
                    'name_en' => 'Alkhadilat and Alshshaqu',
                    'name_ar' => 'الخديلة و الشاق'
                ],
                [
                    'id' => 1563,
                    'country_id' => 1,
                    'external_id' => '646977734',
                    'name_en' => 'Almuqumuh',
                    'name_ar' => 'المقومه'
                ],
                [
                    'id' => 1564,
                    'country_id' => 1,
                    'external_id' => '1887250375',
                    'name_en' => 'Albutul',
                    'name_ar' => 'البتول'
                ],
                [
                    'id' => 1565,
                    'country_id' => 1,
                    'external_id' => '1113212608',
                    'name_en' => 'Alhijaruh',
                    'name_ar' => 'الهجره'
                ],
                [
                    'id' => 1566,
                    'country_id' => 1,
                    'external_id' => '472344001',
                    'name_en' => 'Alqamma',
                    'name_ar' => 'القما'
                ],
                [
                    'id' => 1567,
                    'country_id' => 1,
                    'external_id' => '1846379714',
                    'name_en' => 'Aldawahaa',
                    'name_ar' => 'الضواحى'
                ],
                [
                    'id' => 1568,
                    'country_id' => 1,
                    'external_id' => '1005233091',
                    'name_en' => 'Al Jualah',
                    'name_ar' => 'الجعله'
                ],
                [
                    'id' => 1569,
                    'country_id' => 1,
                    'external_id' => '364364492',
                    'name_en' => 'Raghalah',
                    'name_ar' => 'رغله'
                ],
                [
                    'id' => 1570,
                    'country_id' => 1,
                    'external_id' => '1738334669',
                    'name_en' => 'Nyd Umm Saed',
                    'name_ar' => 'نيد ام سعد'
                ],
                [
                    'id' => 1571,
                    'country_id' => 1,
                    'external_id' => '830013646',
                    'name_en' => 'Maqru',
                    'name_ar' => 'مقرو'
                ],
                [
                    'id' => 1572,
                    'country_id' => 1,
                    'external_id' => '54931407',
                    'name_en' => 'Kars Badi',
                    'name_ar' => 'كرس بادي'
                ],
                [
                    'id' => 1573,
                    'country_id' => 1,
                    'external_id' => '1562595016',
                    'name_en' => 'Quu',
                    'name_ar' => 'قوا'
                ],
                [
                    'id' => 1574,
                    'country_id' => 1,
                    'external_id' => '789081545',
                    'name_en' => 'Wa\'Adaa Khudur',
                    'name_ar' => 'وادى خدور'
                ],
                [
                    'id' => 1575,
                    'country_id' => 1,
                    'external_id' => '2027326666',
                    'name_en' => 'Altufaa',
                    'name_ar' => 'الطفى'
                ],
                [
                    'id' => 1576,
                    'country_id' => 1,
                    'external_id' => '1253288907',
                    'name_en' => 'Dhirae Albark',
                    'name_ar' => 'ذراع البارك'
                ],
                [
                    'id' => 1577,
                    'country_id' => 1,
                    'external_id' => '613993172',
                    'name_en' => 'Qulh Sulayman',
                    'name_ar' => 'قله سليمان'
                ],
                [
                    'id' => 1578,
                    'country_id' => 1,
                    'external_id' => '1986390485',
                    'name_en' => 'Albazikha\'',
                    'name_ar' => 'البازخاء'
                ],
                [
                    'id' => 1579,
                    'country_id' => 1,
                    'external_id' => '1078069462',
                    'name_en' => 'Aleadi',
                    'name_ar' => 'العدي'
                ],
                [
                    'id' => 1580,
                    'country_id' => 1,
                    'external_id' => '305076183',
                    'name_en' => 'Tyrah',
                    'name_ar' => 'طيره'
                ],
                [
                    'id' => 1581,
                    'country_id' => 1,
                    'external_id' => '1878275792',
                    'name_en' => 'Tawi',
                    'name_ar' => 'طاوي'
                ],
                [
                    'id' => 1582,
                    'country_id' => 1,
                    'external_id' => '970020305',
                    'name_en' => 'Meashar',
                    'name_ar' => 'معشار'
                ],
                [
                    'id' => 1583,
                    'country_id' => 1,
                    'external_id' => '197031122',
                    'name_en' => 'Hassan Ali',
                    'name_ar' => 'حسن علي'
                ],
                [
                    'id' => 1584,
                    'country_id' => 1,
                    'external_id' => '1703187411',
                    'name_en' => 'Alshadayumuh',
                    'name_ar' => 'الشضايمه'
                ],
                [
                    'id' => 1585,
                    'country_id' => 1,
                    'external_id' => '929149660',
                    'name_en' => 'Al-Zaj',
                    'name_ar' => 'الزج'
                ],
                [
                    'id' => 1586,
                    'country_id' => 1,
                    'external_id' => '21942749',
                    'name_en' => 'As-Salaf',
                    'name_ar' => 'السلف'
                ],
                [
                    'id' => 1587,
                    'country_id' => 1,
                    'external_id' => '1395388638',
                    'name_en' => 'Al Mohamed',
                    'name_ar' => 'آل  محمد'
                ],
                [
                    'id' => 1588,
                    'country_id' => 1,
                    'external_id' => '753934303',
                    'name_en' => 'Albihtayt',
                    'name_ar' => 'البحطيط'
                ],
                [
                    'id' => 1589,
                    'country_id' => 1,
                    'external_id' => '2128428760',
                    'name_en' => 'Algharbaa',
                    'name_ar' => 'الغربى'
                ],
                [
                    'id' => 1590,
                    'country_id' => 1,
                    'external_id' => '1220173273',
                    'name_en' => 'Hiaaf Al Muruh',
                    'name_ar' => 'حياف ال مروح'
                ],
                [
                    'id' => 1591,
                    'country_id' => 1,
                    'external_id' => '445086938',
                    'name_en' => 'Alwaghruh',
                    'name_ar' => 'الوغره'
                ],
                [
                    'id' => 1592,
                    'country_id' => 1,
                    'external_id' => '1953340379',
                    'name_en' => 'Malhan',
                    'name_ar' => 'ملحان'
                ],
                [
                    'id' => 1593,
                    'country_id' => 1,
                    'external_id' => '1179302436',
                    'name_en' => 'Alghalih',
                    'name_ar' => 'الغاليه'
                ],
                [
                    'id' => 1594,
                    'country_id' => 1,
                    'external_id' => '269998373',
                    'name_en' => 'Nyd Aldhirae',
                    'name_ar' => 'نيد الذراع'
                ],
                [
                    'id' => 1595,
                    'country_id' => 1,
                    'external_id' => '1845295142',
                    'name_en' => 'Alharda\'',
                    'name_ar' => 'الحرضاء'
                ],
                [
                    'id' => 1596,
                    'country_id' => 1,
                    'external_id' => '1071187751',
                    'name_en' => 'Alqarhan',
                    'name_ar' => 'القرحان'
                ],
                [
                    'id' => 1597,
                    'country_id' => 1,
                    'external_id' => '161883680',
                    'name_en' => 'Al Muateq',
                    'name_ar' => 'المعاتق'
                ],
                [
                    'id' => 1598,
                    'country_id' => 1,
                    'external_id' => '1535329569',
                    'name_en' => 'Alghilal',
                    'name_ar' => 'الغلال'
                ],
                [
                    'id' => 1599,
                    'country_id' => 1,
                    'external_id' => '896033826',
                    'name_en' => 'Qazaa',
                    'name_ar' => 'قزاع'
                ],
                [
                    'id' => 1600,
                    'country_id' => 1,
                    'external_id' => '121013027',
                    'name_en' => 'Almusbih',
                    'name_ar' => 'المصبح'
                ],
                [
                    'id' => 1601,
                    'country_id' => 1,
                    'external_id' => '1360241196',
                    'name_en' => 'Ghyl Almujnib',
                    'name_ar' => 'غيل المجنب'
                ],
                [
                    'id' => 1602,
                    'country_id' => 1,
                    'external_id' => '586727725',
                    'name_en' => 'Nayd Almukhuqih',
                    'name_ar' => 'نيد المخوقه'
                ],
                [
                    'id' => 1603,
                    'country_id' => 1,
                    'external_id' => '2093342766',
                    'name_en' => 'Ash Sha\'f',
                    'name_ar' => 'الشعف'
                ],
                [
                    'id' => 1604,
                    'country_id' => 1,
                    'external_id' => '1319243567',
                    'name_en' => 'Aleasr',
                    'name_ar' => 'العصر'
                ],
                [
                    'id' => 1605,
                    'country_id' => 1,
                    'external_id' => '412036648',
                    'name_en' => 'Alrudha',
                    'name_ar' => 'الردحة'
                ],
                [
                    'id' => 1606,
                    'country_id' => 1,
                    'external_id' => '1783909673',
                    'name_en' => 'Alwajeuh',
                    'name_ar' => 'الوجعه'
                ],
                [
                    'id' => 1607,
                    'country_id' => 1,
                    'external_id' => '1144089642',
                    'name_en' => 'Dhat Alkhalafin',
                    'name_ar' => 'ذات الخلفين'
                ],
                [
                    'id' => 1608,
                    'country_id' => 1,
                    'external_id' => '371165995',
                    'name_en' => 'Nyd Aledyh',
                    'name_ar' => 'نيد العديه'
                ],
                [
                    'id' => 1609,
                    'country_id' => 1,
                    'external_id' => '1675930164',
                    'name_en' => 'Almuqid',
                    'name_ar' => 'الموقد'
                ],
                [
                    'id' => 1610,
                    'country_id' => 1,
                    'external_id' => '1036110133',
                    'name_en' => 'Al Muaqeb',
                    'name_ar' => 'المعقب'
                ],
                [
                    'id' => 1611,
                    'country_id' => 1,
                    'external_id' => '263120950',
                    'name_en' => 'Wa\'Adaa Qir',
                    'name_ar' => 'وادى قير'
                ],
                [
                    'id' => 1612,
                    'country_id' => 1,
                    'external_id' => '1502345015',
                    'name_en' => 'Alqahz',
                    'name_ar' => 'القحز'
                ],
                [
                    'id' => 1613,
                    'country_id' => 1,
                    'external_id' => '726668848',
                    'name_en' => 'Ajam',
                    'name_ar' => 'عجام'
                ],
                [
                    'id' => 1614,
                    'country_id' => 1,
                    'external_id' => '87897393',
                    'name_en' => 'Almushyhadhuh',
                    'name_ar' => 'المشيحذه'
                ],
                [
                    'id' => 1615,
                    'country_id' => 1,
                    'external_id' => '1461343282',
                    'name_en' => 'Gharb Al Makhash',
                    'name_ar' => 'غرب  المخش'
                ],
                [
                    'id' => 1616,
                    'country_id' => 1,
                    'external_id' => '552039219',
                    'name_en' => 'Alkhatama\'',
                    'name_ar' => 'الخطماء'
                ],
                [
                    'id' => 1617,
                    'country_id' => 1,
                    'external_id' => '1926074940',
                    'name_en' => 'Al Maygah',
                    'name_ar' => 'الميجاح'
                ],
                [
                    'id' => 1618,
                    'country_id' => 1,
                    'external_id' => '1286254909',
                    'name_en' => 'Al Qashbaa',
                    'name_ar' => 'القشباء'
                ],
                [
                    'id' => 1619,
                    'country_id' => 1,
                    'external_id' => '511168574',
                    'name_en' => 'Faghrah',
                    'name_ar' => 'فغره'
                ],
                [
                    'id' => 1620,
                    'country_id' => 1,
                    'external_id' => '1750925119',
                    'name_en' => 'Al Farasah',
                    'name_ar' => 'الفرسه'
                ],
                [
                    'id' => 1621,
                    'country_id' => 1,
                    'external_id' => '976821816',
                    'name_en' => 'Aldukhul',
                    'name_ar' => 'الدخول'
                ],
                [
                    'id' => 1622,
                    'country_id' => 1,
                    'external_id' => '335953209',
                    'name_en' => 'Al-Maeenah',
                    'name_ar' => 'المعينه'
                ],
                [
                    'id' => 1623,
                    'country_id' => 1,
                    'external_id' => '1642290234',
                    'name_en' => 'Al Haleeq',
                    'name_ar' => 'الحليق'
                ],
                [
                    'id' => 1624,
                    'country_id' => 1,
                    'external_id' => '868776763',
                    'name_en' => 'Habeel Al-Sarfah',
                    'name_ar' => 'حبيل الصرفح'
                ],
                [
                    'id' => 1625,
                    'country_id' => 1,
                    'external_id' => '227973636',
                    'name_en' => 'Al Arqoob',
                    'name_ar' => 'العرقوب'
                ],
                [
                    'id' => 1626,
                    'country_id' => 1,
                    'external_id' => '1601419525',
                    'name_en' => 'Al Mahsharah',
                    'name_ar' => 'المحشره'
                ],
                [
                    'id' => 1627,
                    'country_id' => 1,
                    'external_id' => '693688326',
                    'name_en' => 'Aldaaruh',
                    'name_ar' => 'الداره'
                ],
                [
                    'id' => 1628,
                    'country_id' => 1,
                    'external_id' => '2066081543',
                    'name_en' => 'Rbean',
                    'name_ar' => 'ربعان'
                ],
                [
                    'id' => 1629,
                    'country_id' => 1,
                    'external_id' => '1426195968',
                    'name_en' => 'Al Warak',
                    'name_ar' => 'الورك'
                ],
                [
                    'id' => 1630,
                    'country_id' => 1,
                    'external_id' => '653206785',
                    'name_en' => 'Mudiruh',
                    'name_ar' => 'مديره'
                ],
                [
                    'id' => 1631,
                    'country_id' => 1,
                    'external_id' => '1890862082',
                    'name_en' => 'Alhirar',
                    'name_ar' => 'الهرار'
                ],
                [
                    'id' => 1632,
                    'country_id' => 1,
                    'external_id' => '1116824323',
                    'name_en' => 'Alghadaa',
                    'name_ar' => 'الغادى'
                ],
                [
                    'id' => 1633,
                    'country_id' => 1,
                    'external_id' => '478118412',
                    'name_en' => 'Hubayel Al Ain',
                    'name_ar' => 'حبيل العين'
                ],
                [
                    'id' => 1634,
                    'country_id' => 1,
                    'external_id' => '1849991437',
                    'name_en' => 'Fahlan',
                    'name_ar' => 'فحلان'
                ],
                [
                    'id' => 1635,
                    'country_id' => 1,
                    'external_id' => '941735950',
                    'name_en' => 'Al Mujawazah',
                    'name_ar' => 'المجاوزه'
                ],
                [
                    'id' => 1636,
                    'country_id' => 1,
                    'external_id' => '168750863',
                    'name_en' => 'Althahiruh',
                    'name_ar' => 'الثهيره'
                ],
                [
                    'id' => 1637,
                    'country_id' => 1,
                    'external_id' => '1743457800',
                    'name_en' => 'Alkhanadiq',
                    'name_ar' => 'الخناديق'
                ],
                [
                    'id' => 1638,
                    'country_id' => 1,
                    'external_id' => '833629449',
                    'name_en' => 'Alshakhayth',
                    'name_ar' => 'الشخيث'
                ],
                [
                    'id' => 1639,
                    'country_id' => 1,
                    'external_id' => '60640266',
                    'name_en' => 'Almubaqam',
                    'name_ar' => 'المبقم'
                ],
                [
                    'id' => 1640,
                    'country_id' => 1,
                    'external_id' => '1568303883',
                    'name_en' => 'Almahsham',
                    'name_ar' => 'المهشم'
                ],
                [
                    'id' => 1641,
                    'country_id' => 1,
                    'external_id' => '792758804',
                    'name_en' => 'Mariwa\'',
                    'name_ar' => 'مريواء'
                ],
                [
                    'id' => 1642,
                    'country_id' => 1,
                    'external_id' => '2033035541',
                    'name_en' => 'Khashir',
                    'name_ar' => 'خاشر'
                ],
                [
                    'id' => 1643,
                    'country_id' => 1,
                    'external_id' => '1258997782',
                    'name_en' => 'Al Quraaha',
                    'name_ar' => 'القراعه'
                ],
                [
                    'id' => 1644,
                    'country_id' => 1,
                    'external_id' => '618125079',
                    'name_en' => 'Manmur',
                    'name_ar' => 'منمور'
                ],
                [
                    'id' => 1645,
                    'country_id' => 1,
                    'external_id' => '1992095248',
                    'name_en' => 'Hadabuh Ahmur',
                    'name_ar' => 'حدبه احمر'
                ],
                [
                    'id' => 1646,
                    'country_id' => 1,
                    'external_id' => '1083774225',
                    'name_en' => 'Ath-Thawaher',
                    'name_ar' => 'الثواهر'
                ],
                [
                    'id' => 1647,
                    'country_id' => 1,
                    'external_id' => '308687890',
                    'name_en' => 'Zaghfah',
                    'name_ar' => 'زغفه'
                ],
                [
                    'id' => 1648,
                    'country_id' => 1,
                    'external_id' => '1816351507',
                    'name_en' => 'Almahamuh',
                    'name_ar' => 'المحامه'
                ],
                [
                    'id' => 1649,
                    'country_id' => 1,
                    'external_id' => '1042838044',
                    'name_en' => 'Alhudn Habas',
                    'name_ar' => 'الحضن حبس'
                ],
                [
                    'id' => 1650,
                    'country_id' => 1,
                    'external_id' => '200708381',
                    'name_en' => 'Khaba',
                    'name_ar' => 'خبا'
                ],
                [
                    'id' => 1651,
                    'country_id' => 1,
                    'external_id' => '1708371998',
                    'name_en' => 'Khalfat Abu Al-Madh Al-Rbhah',
                    'name_ar' => 'خلفة ابو المض الربحه'
                ],
                [
                    'id' => 1652,
                    'country_id' => 1,
                    'external_id' => '934862623',
                    'name_en' => 'Qarn Hiraz',
                    'name_ar' => 'قرن حراز'
                ],
                [
                    'id' => 1653,
                    'country_id' => 1,
                    'external_id' => '25558552',
                    'name_en' => 'Rydah',
                    'name_ar' => 'ريده'
                ],
                [
                    'id' => 1654,
                    'country_id' => 1,
                    'external_id' => '1398938905',
                    'name_en' => 'Hyd Aldibrih',
                    'name_ar' => 'حيد الضبره'
                ],
                [
                    'id' => 1655,
                    'country_id' => 1,
                    'external_id' => '760167450',
                    'name_en' => 'Dayan',
                    'name_ar' => 'دايان'
                ],
                [
                    'id' => 1656,
                    'country_id' => 1,
                    'external_id' => '2132040475',
                    'name_en' => 'Qarn Hulwan',
                    'name_ar' => 'قرن حلوان'
                ],
                [
                    'id' => 1657,
                    'country_id' => 1,
                    'external_id' => '1223785060',
                    'name_en' => 'Almaqmur',
                    'name_ar' => 'المقمور'
                ],
                [
                    'id' => 1658,
                    'country_id' => 1,
                    'external_id' => '450861413',
                    'name_en' => 'Al Qariyah',
                    'name_ar' => 'القريه'
                ],
                [
                    'id' => 1659,
                    'country_id' => 1,
                    'external_id' => '1956952166',
                    'name_en' => 'Qaeadin',
                    'name_ar' => 'قعادين'
                ],
                [
                    'id' => 1660,
                    'country_id' => 1,
                    'external_id' => '1182910311',
                    'name_en' => 'Dhum Mada',
                    'name_ar' => 'ذم مض'
                ],
                [
                    'id' => 1661,
                    'country_id' => 1,
                    'external_id' => '275703392',
                    'name_en' => 'Al Hatherah',
                    'name_ar' => 'الحاثره'
                ],
                [
                    'id' => 1662,
                    'country_id' => 1,
                    'external_id' => '1649083745',
                    'name_en' => 'Aljur',
                    'name_ar' => 'الجور'
                ],
                [
                    'id' => 1663,
                    'country_id' => 1,
                    'external_id' => '1007690850',
                    'name_en' => 'Alkaeumuh',
                    'name_ar' => 'الكعمه'
                ],
                [
                    'id' => 1664,
                    'country_id' => 1,
                    'external_id' => '167592803',
                    'name_en' => 'Shata Aldakhs',
                    'name_ar' => 'شط الدخس'
                ],
                [
                    'id' => 1665,
                    'country_id' => 1,
                    'external_id' => '1541038700',
                    'name_en' => 'Zawah',
                    'name_ar' => 'زواه'
                ],
                [
                    'id' => 1666,
                    'country_id' => 1,
                    'external_id' => '899711341',
                    'name_en' => 'Alkhadu',
                    'name_ar' => 'الخاض'
                ],
                [
                    'id' => 1667,
                    'country_id' => 1,
                    'external_id' => '126722158',
                    'name_en' => 'Al Hamrat',
                    'name_ar' => 'الحمرات'
                ],
                [
                    'id' => 1668,
                    'country_id' => 1,
                    'external_id' => '1365954415',
                    'name_en' => 'Alsintuh',
                    'name_ar' => 'السنطه'
                ],
                [
                    'id' => 1669,
                    'country_id' => 1,
                    'external_id' => '590868072',
                    'name_en' => 'Aleurud',
                    'name_ar' => 'العروض'
                ],
                [
                    'id' => 1670,
                    'country_id' => 1,
                    'external_id' => '2098990441',
                    'name_en' => 'Almarbah',
                    'name_ar' => 'المرباح'
                ],
                [
                    'id' => 1671,
                    'country_id' => 1,
                    'external_id' => '1324952682',
                    'name_en' => 'Qahda',
                    'name_ar' => 'قحدة'
                ],
                [
                    'id' => 1672,
                    'country_id' => 1,
                    'external_id' => '415648619',
                    'name_en' => 'Kadah',
                    'name_ar' => 'كدح'
                ],
                [
                    'id' => 1673,
                    'country_id' => 1,
                    'external_id' => '1789094516',
                    'name_en' => 'Jalal',
                    'name_ar' => 'جلال'
                ],
                [
                    'id' => 1674,
                    'country_id' => 1,
                    'external_id' => '1149864309',
                    'name_en' => 'Almushafuh',
                    'name_ar' => 'المصهفه'
                ],
                [
                    'id' => 1675,
                    'country_id' => 1,
                    'external_id' => '374777974',
                    'name_en' => 'Rei Thu Al-Naqm',
                    'name_ar' => 'ريع ذو النقم'
                ],
                [
                    'id' => 1676,
                    'country_id' => 1,
                    'external_id' => '1614002039',
                    'name_en' => 'Quad Al Shiha',
                    'name_ar' => 'قعاد آل شيحه'
                ],
                [
                    'id' => 1677,
                    'country_id' => 1,
                    'external_id' => '840488560',
                    'name_en' => 'Alshanaeuh Algharbiuh',
                    'name_ar' => 'الشنعه الغربيه'
                ],
                [
                    'id' => 1678,
                    'country_id' => 1,
                    'external_id' => '266728817',
                    'name_en' => 'Al Anqah',
                    'name_ar' => 'العنقه'
                ],
                [
                    'id' => 1679,
                    'country_id' => 1,
                    'external_id' => '1505891442',
                    'name_en' => 'Hyd Alshaddan',
                    'name_ar' => 'حيد الشدان'
                ],
                [
                    'id' => 1680,
                    'country_id' => 1,
                    'external_id' => '732902259',
                    'name_en' => 'Almakhraj',
                    'name_ar' => 'المخرج'
                ],
                [
                    'id' => 1681,
                    'country_id' => 1,
                    'external_id' => '91509372',
                    'name_en' => 'Al Hasher',
                    'name_ar' => 'الحاشر'
                ],
                [
                    'id' => 1682,
                    'country_id' => 1,
                    'external_id' => '1464955261',
                    'name_en' => 'Maqeaduh',
                    'name_ar' => 'مقعده'
                ],
                [
                    'id' => 1683,
                    'country_id' => 1,
                    'external_id' => '557813886',
                    'name_en' => 'Alghafluh',
                    'name_ar' => 'الغفله'
                ],
                [
                    'id' => 1684,
                    'country_id' => 1,
                    'external_id' => '1929691007',
                    'name_en' => 'Albayda\'',
                    'name_ar' => 'البيضاء'
                ],
                [
                    'id' => 1685,
                    'country_id' => 1,
                    'external_id' => '1289870968',
                    'name_en' => 'Dhirae Alhuthirih',
                    'name_ar' => 'ذراع الحثيره'
                ],
                [
                    'id' => 1686,
                    'country_id' => 1,
                    'external_id' => '516881785',
                    'name_en' => 'As-Saqiyah',
                    'name_ar' => 'الساقيه'
                ],
                [
                    'id' => 1687,
                    'country_id' => 1,
                    'external_id' => '1756044410',
                    'name_en' => 'Gafneen',
                    'name_ar' => 'جفنين'
                ],
                [
                    'id' => 1688,
                    'country_id' => 1,
                    'external_id' => '980433787',
                    'name_en' => 'Aleawarid',
                    'name_ar' => 'العوارض'
                ],
                [
                    'id' => 1689,
                    'country_id' => 1,
                    'external_id' => '341662276',
                    'name_en' => 'Majnah',
                    'name_ar' => 'مجناه'
                ],
                [
                    'id' => 1690,
                    'country_id' => 1,
                    'external_id' => '1715108165',
                    'name_en' => 'Almukbis',
                    'name_ar' => 'المكبس'
                ],
                [
                    'id' => 1691,
                    'country_id' => 1,
                    'external_id' => '805345350',
                    'name_en' => 'Ash-Shuaith',
                    'name_ar' => 'الشعيث'
                ],
                [
                    'id' => 1692,
                    'country_id' => 1,
                    'external_id' => '233678663',
                    'name_en' => 'Alqahbuh',
                    'name_ar' => 'القهبه'
                ],
                [
                    'id' => 1693,
                    'country_id' => 1,
                    'external_id' => '1607124544',
                    'name_en' => 'Almiqtabuh',
                    'name_ar' => 'المقطابه'
                ],
                [
                    'id' => 1694,
                    'country_id' => 1,
                    'external_id' => '697820481',
                    'name_en' => 'Alsaed',
                    'name_ar' => 'السعد'
                ],
                [
                    'id' => 1695,
                    'country_id' => 1,
                    'external_id' => '2071725122',
                    'name_en' => 'Alnnad',
                    'name_ar' => 'الناض'
                ],
                [
                    'id' => 1696,
                    'country_id' => 1,
                    'external_id' => '1431905091',
                    'name_en' => 'Alkhantbuh',
                    'name_ar' => 'الخنتبه'
                ],
                [
                    'id' => 1697,
                    'country_id' => 1,
                    'external_id' => '656818764',
                    'name_en' => 'Al-Sarah',
                    'name_ar' => 'السارة'
                ],
                [
                    'id' => 1698,
                    'country_id' => 1,
                    'external_id' => '1896046925',
                    'name_en' => 'Al Shehadah',
                    'name_ar' => 'الشهاده'
                ],
                [
                    'id' => 1699,
                    'country_id' => 1,
                    'external_id' => '1122598990',
                    'name_en' => 'Alwajimuh',
                    'name_ar' => 'الوجيمه'
                ],
                [
                    'id' => 1700,
                    'country_id' => 1,
                    'external_id' => '481734479',
                    'name_en' => 'Alqirqaeiu',
                    'name_ar' => 'القرقاعي'
                ],
                [
                    'id' => 1701,
                    'country_id' => 1,
                    'external_id' => '1855180360',
                    'name_en' => 'Al Malsah',
                    'name_ar' => 'الملصه'
                ],
                [
                    'id' => 1702,
                    'country_id' => 1,
                    'external_id' => '947449161',
                    'name_en' => 'Alrahuh',
                    'name_ar' => 'الرحه'
                ],
                [
                    'id' => 1703,
                    'country_id' => 1,
                    'external_id' => '172297290',
                    'name_en' => 'Ash-Sheremyah',
                    'name_ar' => 'الشريمية'
                ],
                [
                    'id' => 1704,
                    'country_id' => 1,
                    'external_id' => '1679960907',
                    'name_en' => 'Toor Al-Salf',
                    'name_ar' => 'طور السلف'
                ],
                [
                    'id' => 1705,
                    'country_id' => 1,
                    'external_id' => '906971732',
                    'name_en' => 'Algharifuh',
                    'name_ar' => 'الغريفه'
                ],
                [
                    'id' => 1706,
                    'country_id' => 1,
                    'external_id' => '64252245',
                    'name_en' => 'Al Athwar',
                    'name_ar' => 'الاثوار'
                ],
                [
                    'id' => 1707,
                    'country_id' => 1,
                    'external_id' => '1571981398',
                    'name_en' => 'Lasbet Al Mareb',
                    'name_ar' => 'لصبه المارب'
                ],
                [
                    'id' => 1708,
                    'country_id' => 1,
                    'external_id' => '798988119',
                    'name_en' => 'Almunqalib',
                    'name_ar' => 'المنقلب'
                ],
                [
                    'id' => 1709,
                    'country_id' => 1,
                    'external_id' => '2036643408',
                    'name_en' => 'Al Qasi',
                    'name_ar' => 'القاسى'
                ],
                [
                    'id' => 1710,
                    'country_id' => 1,
                    'external_id' => '1262605649',
                    'name_en' => 'Althanih',
                    'name_ar' => 'الثنيه'
                ],
                [
                    'id' => 1711,
                    'country_id' => 1,
                    'external_id' => '623834194',
                    'name_en' => 'Habil Alshathi',
                    'name_ar' => 'حبيل الشث'
                ],
                [
                    'id' => 1712,
                    'country_id' => 1,
                    'external_id' => '1997214547',
                    'name_en' => 'Dililah',
                    'name_ar' => 'دليله'
                ],
                [
                    'id' => 1713,
                    'country_id' => 1,
                    'external_id' => '1087386204',
                    'name_en' => 'Al-Ba\'ajiah and Al-Sawarmah',
                    'name_ar' => 'البعاجيه والصوارمه'
                ],
                [
                    'id' => 1714,
                    'country_id' => 1,
                    'external_id' => '314397021',
                    'name_en' => 'Alhilhaluh',
                    'name_ar' => 'الحلحله'
                ],
                [
                    'id' => 1715,
                    'country_id' => 1,
                    'external_id' => '1822060638',
                    'name_en' => 'Alsiyala',
                    'name_ar' => 'السيالة'
                ],
                [
                    'id' => 1716,
                    'country_id' => 1,
                    'external_id' => '1046519647',
                    'name_en' => 'Al Omaryah',
                    'name_ar' => 'العمارية'
                ],
                [
                    'id' => 1717,
                    'country_id' => 1,
                    'external_id' => '139312728',
                    'name_en' => 'As-Sad',
                    'name_ar' => 'الصد'
                ],
                [
                    'id' => 1718,
                    'country_id' => 1,
                    'external_id' => '1512758617',
                    'name_en' => 'Mashrabah',
                    'name_ar' => 'مشربة'
                ],
                [
                    'id' => 1719,
                    'country_id' => 1,
                    'external_id' => '938998874',
                    'name_en' => 'Al Maydaah',
                    'name_ar' => 'الميدعه'
                ],
                [
                    'id' => 1720,
                    'country_id' => 1,
                    'external_id' => '31202139',
                    'name_en' => 'Aajam',
                    'name_ar' => 'أعجم'
                ],
                [
                    'id' => 1721,
                    'country_id' => 1,
                    'external_id' => '1404647844',
                    'name_en' => 'Alruzunuh',
                    'name_ar' => 'الرزنه'
                ],
                [
                    'id' => 1722,
                    'country_id' => 1,
                    'external_id' => '763779237',
                    'name_en' => 'Almudratayn',
                    'name_ar' => 'المدرتين'
                ],
                [
                    'id' => 1723,
                    'country_id' => 1,
                    'external_id' => '2137221030',
                    'name_en' => 'Almaluu Hiraz',
                    'name_ar' => 'الملوا حراز'
                ],
                [
                    'id' => 1724,
                    'country_id' => 1,
                    'external_id' => '1229555367',
                    'name_en' => 'Alsiriyu',
                    'name_ar' => 'السري'
                ],
                [
                    'id' => 1725,
                    'country_id' => 1,
                    'external_id' => '454469024',
                    'name_en' => 'Hyd Almushribih',
                    'name_ar' => 'حيد المشربه'
                ],
                [
                    'id' => 1726,
                    'country_id' => 1,
                    'external_id' => '1962132641',
                    'name_en' => 'Az-Zubaydeyah',
                    'name_ar' => 'الزبيديه'
                ],
                [
                    'id' => 1727,
                    'country_id' => 1,
                    'external_id' => '1188619170',
                    'name_en' => 'Sihanuh',
                    'name_ar' => 'صيحانه'
                ],
                [
                    'id' => 1728,
                    'country_id' => 1,
                    'external_id' => '279249571',
                    'name_en' => 'Wa\'Adaa Alkaramuh',
                    'name_ar' => 'وادى الكرمه'
                ],
                [
                    'id' => 1729,
                    'country_id' => 1,
                    'external_id' => '1652695468',
                    'name_en' => 'Lugayrah',
                    'name_ar' => 'لجايرة'
                ],
                [
                    'id' => 1730,
                    'country_id' => 1,
                    'external_id' => '1013924013',
                    'name_en' => 'Mirwagh',
                    'name_ar' => 'مرواغ'
                ],
                [
                    'id' => 1731,
                    'country_id' => 1,
                    'external_id' => '238317486',
                    'name_en' => 'Aldhafir',
                    'name_ar' => 'الظفير'
                ],
                [
                    'id' => 1732,
                    'country_id' => 1,
                    'external_id' => '1477611183',
                    'name_en' => 'Al Abdaleyah',
                    'name_ar' => 'العبدلية'
                ],
                [
                    'id' => 1733,
                    'country_id' => 1,
                    'external_id' => '905948584',
                    'name_en' => 'Habil Alfasih',
                    'name_ar' => 'حبيل الفصيح'
                ],
                [
                    'id' => 1734,
                    'country_id' => 1,
                    'external_id' => '130337961',
                    'name_en' => 'Dharaa Mughbir',
                    'name_ar' => 'ذارى  مغبر'
                ],
                [
                    'id' => 1735,
                    'country_id' => 1,
                    'external_id' => '1369566122',
                    'name_en' => 'As-Sutayha',
                    'name_ar' => 'السطيحه'
                ],
                [
                    'id' => 1736,
                    'country_id' => 1,
                    'external_id' => '596511403',
                    'name_en' => 'Almaqead',
                    'name_ar' => 'المقعد'
                ],
                [
                    'id' => 1737,
                    'country_id' => 1,
                    'external_id' => '2104175028',
                    'name_en' => 'Al Karrash',
                    'name_ar' => 'الكراش'
                ],
                [
                    'id' => 1738,
                    'country_id' => 1,
                    'external_id' => '1328564405',
                    'name_en' => 'Ansabah',
                    'name_ar' => 'انصبه'
                ],
                [
                    'id' => 1739,
                    'country_id' => 1,
                    'external_id' => '421353398',
                    'name_en' => 'Ghalbineyah',
                    'name_ar' => 'غلبينيه'
                ],
                [
                    'id' => 1740,
                    'country_id' => 1,
                    'external_id' => '1794799287',
                    'name_en' => 'Waqien',
                    'name_ar' => 'وقيعن'
                ],
                [
                    'id' => 1741,
                    'country_id' => 1,
                    'external_id' => '1153471920',
                    'name_en' => 'Aleawadiuh',
                    'name_ar' => 'العواديه'
                ],
                [
                    'id' => 1742,
                    'country_id' => 1,
                    'external_id' => '380482737',
                    'name_en' => 'Ghafilah',
                    'name_ar' => 'غافله'
                ],
                [
                    'id' => 1743,
                    'country_id' => 1,
                    'external_id' => '1619710898',
                    'name_en' => 'Alhamatuh',
                    'name_ar' => 'الحماطه'
                ],
                [
                    'id' => 1744,
                    'country_id' => 1,
                    'external_id' => '844624563',
                    'name_en' => 'Almadaruh',
                    'name_ar' => 'المدره'
                ],
                [
                    'id' => 1745,
                    'country_id' => 1,
                    'external_id' => '205263292',
                    'name_en' => 'Alfadanuh',
                    'name_ar' => 'الفدنه'
                ],
                [
                    'id' => 1746,
                    'country_id' => 1,
                    'external_id' => '1578709181',
                    'name_en' => 'Al Homs',
                    'name_ar' => 'الحمض'
                ],
                [
                    'id' => 1747,
                    'country_id' => 1,
                    'external_id' => '736518078',
                    'name_en' => 'Alnaadhih',
                    'name_ar' => 'الناذيه'
                ],
                [
                    'id' => 1748,
                    'country_id' => 1,
                    'external_id' => '96698047',
                    'name_en' => 'Al Habgeyah',
                    'name_ar' => 'الحبجية'
                ],
                [
                    'id' => 1749,
                    'country_id' => 1,
                    'external_id' => '1470733752',
                    'name_en' => 'Lihaj Almutrad',
                    'name_ar' => 'لحج المطرد'
                ],
                [
                    'id' => 1750,
                    'country_id' => 1,
                    'external_id' => '561429689',
                    'name_en' => 'Aldafin',
                    'name_ar' => 'الدفين'
                ],
                [
                    'id' => 1751,
                    'country_id' => 1,
                    'external_id' => '1934875578',
                    'name_en' => 'Al Zanabah',
                    'name_ar' => 'الذنبه'
                ],
                [
                    'id' => 1752,
                    'country_id' => 1,
                    'external_id' => '1295579835',
                    'name_en' => 'Almudhanib',
                    'name_ar' => 'المذنب'
                ],
                [
                    'id' => 1753,
                    'country_id' => 1,
                    'external_id' => '520427908',
                    'name_en' => 'Az-Zaweyah',
                    'name_ar' => 'الزاويه'
                ],
                [
                    'id' => 1754,
                    'country_id' => 1,
                    'external_id' => '1759656069',
                    'name_en' => 'Aljafinah',
                    'name_ar' => 'الجفينه'
                ],
                [
                    'id' => 1755,
                    'country_id' => 1,
                    'external_id' => '986662790',
                    'name_en' => 'Al Buqaah',
                    'name_ar' => 'البقعه'
                ],
                [
                    'id' => 1756,
                    'country_id' => 1,
                    'external_id' => '345269895',
                    'name_en' => 'Al Khatm Al Gharbi',
                    'name_ar' => 'الخطم الغربي'
                ],
                [
                    'id' => 1757,
                    'country_id' => 1,
                    'external_id' => '1718781312',
                    'name_en' => 'Dueitum',
                    'name_ar' => 'دعيتم'
                ],
                [
                    'id' => 1758,
                    'country_id' => 1,
                    'external_id' => '811574401',
                    'name_en' => 'Umm Sahwa',
                    'name_ar' => 'ام سهوة'
                ],
                [
                    'id' => 1759,
                    'country_id' => 1,
                    'external_id' => '35963778',
                    'name_en' => 'Althahia',
                    'name_ar' => 'الثهية'
                ],
                [
                    'id' => 1760,
                    'country_id' => 1,
                    'external_id' => '1543627395',
                    'name_en' => 'Alraqabuh',
                    'name_ar' => 'الرقبه'
                ],
                [
                    'id' => 1761,
                    'country_id' => 1,
                    'external_id' => '703463820',
                    'name_en' => 'Baqeah Rahah',
                    'name_ar' => 'بقعه رحه'
                ],
                [
                    'id' => 1762,
                    'country_id' => 1,
                    'external_id' => '2076909709',
                    'name_en' => 'Mosabah',
                    'name_ar' => 'مصبح'
                ],
                [
                    'id' => 1763,
                    'country_id' => 1,
                    'external_id' => '1435520910',
                    'name_en' => 'Alkhunqa\'',
                    'name_ar' => 'الخنقاء'
                ],
                [
                    'id' => 1764,
                    'country_id' => 1,
                    'external_id' => '662531727',
                    'name_en' => 'Almaquae',
                    'name_ar' => 'المقوع'
                ],
                [
                    'id' => 1765,
                    'country_id' => 1,
                    'external_id' => '1901825416',
                    'name_en' => 'Alaqedh',
                    'name_ar' => 'الاقعده'
                ],
                [
                    'id' => 1766,
                    'country_id' => 1,
                    'external_id' => '1126214793',
                    'name_en' => 'Gadae Al Khomos',
                    'name_ar' => 'جاضع الخمس'
                ],
                [
                    'id' => 1767,
                    'country_id' => 1,
                    'external_id' => '487443338',
                    'name_en' => 'Alshadaan',
                    'name_ar' => 'الشدان'
                ],
                [
                    'id' => 1768,
                    'country_id' => 1,
                    'external_id' => '1860889227',
                    'name_en' => 'Althabiat',
                    'name_ar' => 'الثبيت'
                ],
                [
                    'id' => 1769,
                    'country_id' => 1,
                    'external_id' => '951519636',
                    'name_en' => 'Al Walajah',
                    'name_ar' => 'الولجه'
                ],
                [
                    'id' => 1770,
                    'country_id' => 1,
                    'external_id' => '178006165',
                    'name_en' => 'Al Mearad',
                    'name_ar' => 'المعراض'
                ],
                [
                    'id' => 1771,
                    'country_id' => 1,
                    'external_id' => '1685665686',
                    'name_en' => 'Almashaghil',
                    'name_ar' => 'المشاغل'
                ],
                [
                    'id' => 1772,
                    'country_id' => 1,
                    'external_id' => '910579351',
                    'name_en' => 'Dhum Salam',
                    'name_ar' => 'ذم سلام'
                ],
                [
                    'id' => 1773,
                    'country_id' => 1,
                    'external_id' => '2323856',
                    'name_en' => 'Qlt Mughayin',
                    'name_ar' => 'قلة مغين'
                ],
                [
                    'id' => 1774,
                    'country_id' => 1,
                    'external_id' => '1376359569',
                    'name_en' => 'Musahal',
                    'name_ar' => 'مسحل'
                ],
                [
                    'id' => 1775,
                    'country_id' => 1,
                    'external_id' => '802599826',
                    'name_en' => 'Dhirae Qatal',
                    'name_ar' => 'ذراع قطل'
                ],
                [
                    'id' => 1776,
                    'country_id' => 1,
                    'external_id' => '2041827987',
                    'name_en' => 'Al Muqawas',
                    'name_ar' => 'المقوس'
                ],
                [
                    'id' => 1777,
                    'country_id' => 1,
                    'external_id' => '1268314524',
                    'name_en' => 'Aleayn',
                    'name_ar' => 'العين'
                ],
                [
                    'id' => 1778,
                    'country_id' => 1,
                    'external_id' => '627380381',
                    'name_en' => 'Qulh Al Qatil',
                    'name_ar' => 'قله ال قطيل'
                ],
                [
                    'id' => 1779,
                    'country_id' => 1,
                    'external_id' => '2000830366',
                    'name_en' => 'Ad-Duha',
                    'name_ar' => 'الضحى'
                ],
                [
                    'id' => 1780,
                    'country_id' => 1,
                    'external_id' => '1093623455',
                    'name_en' => 'Nayd Almithih',
                    'name_ar' => 'نيد الميثه'
                ],
                [
                    'id' => 1781,
                    'country_id' => 1,
                    'external_id' => '318012824',
                    'name_en' => 'Algharbiuh',
                    'name_ar' => 'الغربيه'
                ],
                [
                    'id' => 1782,
                    'country_id' => 1,
                    'external_id' => '1825741977',
                    'name_en' => 'Aleadanuh',
                    'name_ar' => 'العدنه'
                ],
                [
                    'id' => 1783,
                    'country_id' => 1,
                    'external_id' => '1052752794',
                    'name_en' => 'Alsaghil',
                    'name_ar' => 'الصغيل'
                ],
                [
                    'id' => 1784,
                    'country_id' => 1,
                    'external_id' => '142924443',
                    'name_en' => 'Awjabah',
                    'name_ar' => 'عوجبه'
                ],
                [
                    'id' => 1785,
                    'country_id' => 1,
                    'external_id' => '1516370404',
                    'name_en' => 'Dhirae Alqame',
                    'name_ar' => 'ذراع القمع'
                ],
                [
                    'id' => 1786,
                    'country_id' => 1,
                    'external_id' => '877533413',
                    'name_en' => 'Al Magzaah',
                    'name_ar' => 'المجزعه'
                ],
                [
                    'id' => 1787,
                    'country_id' => 1,
                    'external_id' => '103491558',
                    'name_en' => 'Alquayeat',
                    'name_ar' => 'القويعات'
                ],
                [
                    'id' => 1788,
                    'country_id' => 1,
                    'external_id' => '1408255719',
                    'name_en' => 'Alruwhuh',
                    'name_ar' => 'الروحه'
                ],
                [
                    'id' => 1789,
                    'country_id' => 1,
                    'external_id' => '769484256',
                    'name_en' => 'Namerah',
                    'name_ar' => 'نامره'
                ],
                [
                    'id' => 1790,
                    'country_id' => 1,
                    'external_id' => '2142995681',
                    'name_en' => 'Qashabah',
                    'name_ar' => 'قشبه'
                ],
                [
                    'id' => 1791,
                    'country_id' => 1,
                    'external_id' => '1233167330',
                    'name_en' => 'Qa\'ad Anbah',
                    'name_ar' => 'قعاد عنبه'
                ],
                [
                    'id' => 1792,
                    'country_id' => 1,
                    'external_id' => '460178147',
                    'name_en' => 'Almutah',
                    'name_ar' => 'الموطاه'
                ],
                [
                    'id' => 1793,
                    'country_id' => 1,
                    'external_id' => '1967841772',
                    'name_en' => 'Alharaf Alnuws',
                    'name_ar' => 'الحرف  النوص'
                ],
                [
                    'id' => 1794,
                    'country_id' => 1,
                    'external_id' => '1192689901',
                    'name_en' => 'Nayd Alainfih',
                    'name_ar' => 'نيد الانفه'
                ],
                [
                    'id' => 1795,
                    'country_id' => 1,
                    'external_id' => '284962798',
                    'name_en' => 'Alqahiz',
                    'name_ar' => 'القحيز'
                ],
                [
                    'id' => 1796,
                    'country_id' => 1,
                    'external_id' => '1658408687',
                    'name_en' => 'Nayd Alwaba',
                    'name_ar' => 'نيد الوبا'
                ],
                [
                    'id' => 1797,
                    'country_id' => 1,
                    'external_id' => '1017540072',
                    'name_en' => 'Naamah',
                    'name_ar' => 'نعامه'
                ],
                [
                    'id' => 1798,
                    'country_id' => 1,
                    'external_id' => '244092137',
                    'name_en' => 'Goghmah',
                    'name_ar' => 'جغمه'
                ],
                [
                    'id' => 1799,
                    'country_id' => 1,
                    'external_id' => '1483320298',
                    'name_en' => 'Al Madmounah',
                    'name_ar' => 'المدمونه'
                ],
                [
                    'id' => 1800,
                    'country_id' => 1,
                    'external_id' => '708233963',
                    'name_en' => 'Sawda',
                    'name_ar' => 'سوده'
                ],
                [
                    'id' => 1801,
                    'country_id' => 1,
                    'external_id' => '68413940',
                    'name_en' => 'Alshabab',
                    'name_ar' => 'الشباب'
                ],
                [
                    'id' => 1802,
                    'country_id' => 1,
                    'external_id' => '1375209717',
                    'name_en' => 'Alquayeuh',
                    'name_ar' => 'القويعه'
                ],
                [
                    'id' => 1803,
                    'country_id' => 1,
                    'external_id' => '600119286',
                    'name_en' => 'Ned Al Gheir',
                    'name_ar' => 'نيد الغير'
                ],
                [
                    'id' => 1804,
                    'country_id' => 1,
                    'external_id' => '2107782903',
                    'name_en' => 'almurtazah',
                    'name_ar' => 'المرتزح'
                ],
                [
                    'id' => 1805,
                    'country_id' => 1,
                    'external_id' => '1334793712',
                    'name_en' => 'Sarman',
                    'name_ar' => 'صرمان'
                ],
                [
                    'id' => 1806,
                    'country_id' => 1,
                    'external_id' => '424965361',
                    'name_en' => 'Shuaab Laban',
                    'name_ar' => 'شعب لبن'
                ],
                [
                    'id' => 1807,
                    'country_id' => 1,
                    'external_id' => '1798476786',
                    'name_en' => 'Almuzadarib',
                    'name_ar' => 'المزدرب'
                ],
                [
                    'id' => 1808,
                    'country_id' => 1,
                    'external_id' => '1159705331',
                    'name_en' => 'Al Hermah',
                    'name_ar' => 'الهرمه'
                ],
                [
                    'id' => 1809,
                    'country_id' => 1,
                    'external_id' => '384094716',
                    'name_en' => 'Kuriyat',
                    'name_ar' => 'كريت'
                ],
                [
                    'id' => 1810,
                    'country_id' => 1,
                    'external_id' => '1623322877',
                    'name_en' => 'Al-Haj',
                    'name_ar' => 'الحاج'
                ],
                [
                    'id' => 1811,
                    'country_id' => 1,
                    'external_id' => '850272254',
                    'name_en' => 'Alqamuh',
                    'name_ar' => 'القمه'
                ],
                [
                    'id' => 1812,
                    'country_id' => 1,
                    'external_id' => '210452223',
                    'name_en' => 'Al Musaijed',
                    'name_ar' => 'المسيجد'
                ],
                [
                    'id' => 1813,
                    'country_id' => 1,
                    'external_id' => '1582325240',
                    'name_en' => 'Almathamil',
                    'name_ar' => 'المثامل'
                ],
                [
                    'id' => 1814,
                    'country_id' => 1,
                    'external_id' => '675118329',
                    'name_en' => 'Aljafu',
                    'name_ar' => 'الجفو'
                ],
                [
                    'id' => 1815,
                    'country_id' => 1,
                    'external_id' => '2048629754',
                    'name_en' => 'An-Nurayn',
                    'name_ar' => 'النورين'
                ],
                [
                    'id' => 1816,
                    'country_id' => 1,
                    'external_id' => '1474345723',
                    'name_en' => 'Shat Matun',
                    'name_ar' => 'شط مط'
                ],
                [
                    'id' => 1817,
                    'country_id' => 1,
                    'external_id' => '567138756',
                    'name_en' => 'Al Barek',
                    'name_ar' => 'البارك'
                ],
                [
                    'id' => 1818,
                    'country_id' => 1,
                    'external_id' => '1299646406',
                    'name_en' => 'Ash-Shuaraa',
                    'name_ar' => 'الشعراء'
                ],
                [
                    'id' => 1819,
                    'country_id' => 1,
                    'external_id' => '526132935',
                    'name_en' => 'Asfal Ar-Rujua',
                    'name_ar' => 'اسفل الرجوع'
                ],
                [
                    'id' => 1820,
                    'country_id' => 1,
                    'external_id' => '1765361088',
                    'name_en' => 'Almalyhih',
                    'name_ar' => 'المليحيه'
                ],
                [
                    'id' => 1821,
                    'country_id' => 1,
                    'external_id' => '990274753',
                    'name_en' => 'Al Hagabeen',
                    'name_ar' => 'الحجابين'
                ],
                [
                    'id' => 1822,
                    'country_id' => 1,
                    'external_id' => '351044546',
                    'name_en' => 'Yabeshah',
                    'name_ar' => 'يبشه'
                ],
                [
                    'id' => 1823,
                    'country_id' => 1,
                    'external_id' => '1724490435',
                    'name_en' => 'As-Salam',
                    'name_ar' => 'السلام'
                ],
                [
                    'id' => 1824,
                    'country_id' => 1,
                    'external_id' => '815186380',
                    'name_en' => 'Hyd Alqarithaa',
                    'name_ar' => 'حيد القريثى'
                ],
                [
                    'id' => 1825,
                    'country_id' => 1,
                    'external_id' => '41148621',
                    'name_en' => 'Mushabieh',
                    'name_ar' => 'مشبعه'
                ],
                [
                    'id' => 1826,
                    'country_id' => 1,
                    'external_id' => '1549275086',
                    'name_en' => 'Makhrim',
                    'name_ar' => 'مخرم'
                ],
                [
                    'id' => 1827,
                    'country_id' => 1,
                    'external_id' => '774188751',
                    'name_en' => 'Hubayel Fahleel',
                    'name_ar' => 'حبيل فحليل'
                ],
                [
                    'id' => 1828,
                    'country_id' => 1,
                    'external_id' => '2013416904',
                    'name_en' => 'Habil Qasim',
                    'name_ar' => 'حبيل قاسم'
                ],
                [
                    'id' => 1829,
                    'country_id' => 1,
                    'external_id' => '1441754313',
                    'name_en' => 'Albamih',
                    'name_ar' => 'البامه'
                ],
                [
                    'id' => 1830,
                    'country_id' => 1,
                    'external_id' => '666209226',
                    'name_en' => 'Qasymh',
                    'name_ar' => 'قسيمه'
                ],
                [
                    'id' => 1831,
                    'country_id' => 1,
                    'external_id' => '1905437387',
                    'name_en' => 'Almahsi',
                    'name_ar' => 'المحصي'
                ],
                [
                    'id' => 1832,
                    'country_id' => 1,
                    'external_id' => '1132448212',
                    'name_en' => 'Milhab',
                    'name_ar' => 'ملحاب'
                ],
                [
                    'id' => 1833,
                    'country_id' => 1,
                    'external_id' => '491055317',
                    'name_en' => 'Harf Az-Zarb',
                    'name_ar' => 'حرف الزرب'
                ],
                [
                    'id' => 1834,
                    'country_id' => 1,
                    'external_id' => '1864497110',
                    'name_en' => 'Al Monqara',
                    'name_ar' => 'المنقعر'
                ],
                [
                    'id' => 1835,
                    'country_id' => 1,
                    'external_id' => '957224663',
                    'name_en' => 'Sabakh',
                    'name_ar' => 'صباخ'
                ],
                [
                    'id' => 1836,
                    'country_id' => 1,
                    'external_id' => '183186896',
                    'name_en' => 'An-Nabaah',
                    'name_ar' => 'النبعه'
                ],
                [
                    'id' => 1837,
                    'country_id' => 1,
                    'external_id' => '1689277649',
                    'name_en' => 'Al Qufaylah',
                    'name_ar' => 'القفيله'
                ],
                [
                    'id' => 1838,
                    'country_id' => 1,
                    'external_id' => '916288466',
                    'name_en' => 'Nayd Hadid',
                    'name_ar' => 'نيد حديد'
                ],
                [
                    'id' => 1839,
                    'country_id' => 1,
                    'external_id' => '8098515',
                    'name_en' => 'Aqm Shia',
                    'name_ar' => 'عقم شيعى'
                ],
                [
                    'id' => 1840,
                    'country_id' => 1,
                    'external_id' => '1379971548',
                    'name_en' => 'Almuhabibuh',
                    'name_ar' => 'المحببه'
                ],
                [
                    'id' => 1841,
                    'country_id' => 1,
                    'external_id' => '741200093',
                    'name_en' => 'Nyd Alhaqu',
                    'name_ar' => 'نيد الحقو'
                ],
                [
                    'id' => 1842,
                    'country_id' => 1,
                    'external_id' => '2114650078',
                    'name_en' => 'Tarbaan',
                    'name_ar' => 'تربان'
                ],
                [
                    'id' => 1843,
                    'country_id' => 1,
                    'external_id' => '1272389343',
                    'name_en' => 'Alqaebuh',
                    'name_ar' => 'القعبه'
                ],
                [
                    'id' => 1844,
                    'country_id' => 1,
                    'external_id' => '633093592',
                    'name_en' => 'Dakhl Ath-Thawaah',
                    'name_ar' => 'دخل الثوعه'
                ],
                [
                    'id' => 1845,
                    'country_id' => 1,
                    'external_id' => '2006539481',
                    'name_en' => 'Wadi Humur',
                    'name_ar' => 'وادي حمر'
                ],
                [
                    'id' => 1846,
                    'country_id' => 1,
                    'external_id' => '1097235418',
                    'name_en' => 'Al Mermad',
                    'name_ar' => 'المرماد'
                ],
                [
                    'id' => 1847,
                    'country_id' => 1,
                    'external_id' => '323787483',
                    'name_en' => 'Alkhabih',
                    'name_ar' => 'الخبيه'
                ],
                [
                    'id' => 1848,
                    'country_id' => 1,
                    'external_id' => '1831450916',
                    'name_en' => 'Al Shatoor',
                    'name_ar' => 'الشطور'
                ],
                [
                    'id' => 1849,
                    'country_id' => 1,
                    'external_id' => '1056364581',
                    'name_en' => 'Alghamaruh Habs',
                    'name_ar' => 'الغمره حبس'
                ],
                [
                    'id' => 1850,
                    'country_id' => 1,
                    'external_id' => '148104998',
                    'name_en' => 'Ned Herdan',
                    'name_ar' => 'نيد حردان'
                ],
                [
                    'id' => 1851,
                    'country_id' => 1,
                    'external_id' => '1522009639',
                    'name_en' => 'Khawjarah',
                    'name_ar' => 'خوجره'
                ],
                [
                    'id' => 1852,
                    'country_id' => 1,
                    'external_id' => '881141024',
                    'name_en' => 'Bayn Aleaynayn',
                    'name_ar' => 'بين العينين'
                ],
                [
                    'id' => 1853,
                    'country_id' => 1,
                    'external_id' => '107103265',
                    'name_en' => 'Al Qurah',
                    'name_ar' => 'القري'
                ],
                [
                    'id' => 1854,
                    'country_id' => 1,
                    'external_id' => '1347380002',
                    'name_en' => 'Sharij',
                    'name_ar' => 'شريج'
                ],
                [
                    'id' => 1855,
                    'country_id' => 1,
                    'external_id' => '571834915',
                    'name_en' => 'Wateeh',
                    'name_ar' => 'وتيه'
                ],
                [
                    'id' => 1856,
                    'country_id' => 1,
                    'external_id' => '2146607404',
                    'name_en' => 'Fawq Alnayd',
                    'name_ar' => 'فوق النيد'
                ],
                [
                    'id' => 1857,
                    'country_id' => 1,
                    'external_id' => '1239400493',
                    'name_en' => 'Alrrahiz',
                    'name_ar' => 'الراهز'
                ],
                [
                    'id' => 1858,
                    'country_id' => 1,
                    'external_id' => '463793966',
                    'name_en' => 'Al Refqat',
                    'name_ar' => 'الرفقات'
                ],
                [
                    'id' => 1859,
                    'country_id' => 1,
                    'external_id' => '1971392047',
                    'name_en' => 'Jamran',
                    'name_ar' => 'جمران'
                ],
                [
                    'id' => 1860,
                    'country_id' => 1,
                    'external_id' => '1198402856',
                    'name_en' => 'Habil Alshaqrih',
                    'name_ar' => 'حبيل الشقره'
                ],
                [
                    'id' => 1861,
                    'country_id' => 1,
                    'external_id' => '290147369',
                    'name_en' => 'Ghatwet Al Qaryeh',
                    'name_ar' => 'خطوة القرية'
                ],
                [
                    'id' => 1862,
                    'country_id' => 1,
                    'external_id' => '1662020394',
                    'name_en' => 'Al Halhala Ash-Shamalyah',
                    'name_ar' => 'الحلحله الشمالية'
                ],
                [
                    'id' => 1863,
                    'country_id' => 1,
                    'external_id' => '1023314475',
                    'name_en' => 'Nayd Rahab',
                    'name_ar' => 'نيد رحب'
                ],
                [
                    'id' => 1864,
                    'country_id' => 1,
                    'external_id' => '249276724',
                    'name_en' => 'Al Atabah',
                    'name_ar' => 'العتبه'
                ],
                [
                    'id' => 1865,
                    'country_id' => 1,
                    'external_id' => '1486932021',
                    'name_en' => 'Alrajeef',
                    'name_ar' => 'الرجيف'
                ],
                [
                    'id' => 1866,
                    'country_id' => 1,
                    'external_id' => '713938742',
                    'name_en' => 'Alhilhal',
                    'name_ar' => 'الحلحل'
                ],
                [
                    'id' => 1867,
                    'country_id' => 1,
                    'external_id' => '74118711',
                    'name_en' => 'Al Jishaa',
                    'name_ar' => 'الجشاء'
                ],
                [
                    'id' => 1868,
                    'country_id' => 1,
                    'external_id' => '1446450480',
                    'name_en' => 'Jawja',
                    'name_ar' => 'جوجة'
                ],
                [
                    'id' => 1869,
                    'country_id' => 1,
                    'external_id' => '538719281',
                    'name_en' => 'Almahmum',
                    'name_ar' => 'المحموم'
                ],
                [
                    'id' => 1870,
                    'country_id' => 1,
                    'external_id' => '2113491762',
                    'name_en' => 'Alramih',
                    'name_ar' => 'الرميح'
                ],
                [
                    'id' => 1871,
                    'country_id' => 1,
                    'external_id' => '1338405427',
                    'name_en' => 'Alearin Alharaquh',
                    'name_ar' => 'العرين الحرقه'
                ],
                [
                    'id' => 1872,
                    'country_id' => 1,
                    'external_id' => '430739772',
                    'name_en' => 'Thi Hamar Bi Al-Hamar',
                    'name_ar' => 'ذي حمر بين الحمر'
                ],
                [
                    'id' => 1873,
                    'country_id' => 1,
                    'external_id' => '1804185661',
                    'name_en' => 'Badiat Arrab',
                    'name_ar' => 'بادية   عراب'
                ],
                [
                    'id' => 1874,
                    'country_id' => 1,
                    'external_id' => '1163321150',
                    'name_en' => 'Al Hadamah',
                    'name_ar' => 'الحدمه'
                ],
                [
                    'id' => 1875,
                    'country_id' => 1,
                    'external_id' => '389283391',
                    'name_en' => 'Al-Irqah',
                    'name_ar' => 'العرقة'
                ],
                [
                    'id' => 1876,
                    'country_id' => 1,
                    'external_id' => '1628970296',
                    'name_en' => 'Khu Maseud',
                    'name_ar' => 'خو مسعود'
                ],
                [
                    'id' => 1877,
                    'country_id' => 1,
                    'external_id' => '853883961',
                    'name_en' => 'Ar-Rafai',
                    'name_ar' => 'الرافعى'
                ],
                [
                    'id' => 1878,
                    'country_id' => 1,
                    'external_id' => '214063930',
                    'name_en' => 'Habil Naqeih',
                    'name_ar' => 'حبيل نقعه'
                ],
                [
                    'id' => 1879,
                    'country_id' => 1,
                    'external_id' => '1588558395',
                    'name_en' => 'Dhirae Al Alsharif',
                    'name_ar' => 'ذراع ال الشريف'
                ],
                [
                    'id' => 1880,
                    'country_id' => 1,
                    'external_id' => '678795524',
                    'name_en' => 'Qulh Alharth',
                    'name_ar' => 'قله الحرث'
                ],
                [
                    'id' => 1881,
                    'country_id' => 1,
                    'external_id' => '2052241413',
                    'name_en' => 'Dhat Almisak',
                    'name_ar' => 'ذات المسك'
                ],
                [
                    'id' => 1882,
                    'country_id' => 1,
                    'external_id' => '1413465862',
                    'name_en' => 'Mashib',
                    'name_ar' => 'مشيب'
                ],
                [
                    'id' => 1883,
                    'country_id' => 1,
                    'external_id' => '637855239',
                    'name_en' => 'Mualaq',
                    'name_ar' => 'ملعق'
                ],
                [
                    'id' => 1884,
                    'country_id' => 1,
                    'external_id' => '1944126720',
                    'name_en' => 'Al Muhleyah',
                    'name_ar' => 'المهليه'
                ],
                [
                    'id' => 1885,
                    'country_id' => 1,
                    'external_id' => '1305355265',
                    'name_en' => 'Maleabih',
                    'name_ar' => 'ملعبه'
                ],
                [
                    'id' => 1886,
                    'country_id' => 1,
                    'external_id' => '531317506',
                    'name_en' => 'Hubayel Al Waredat',
                    'name_ar' => 'حبيل الواردات'
                ],
                [
                    'id' => 1887,
                    'country_id' => 1,
                    'external_id' => '1768972803',
                    'name_en' => 'Habil Aldakhis',
                    'name_ar' => 'حبيل الدخيس'
                ],
                [
                    'id' => 1888,
                    'country_id' => 1,
                    'external_id' => '996049164',
                    'name_en' => 'Nyd Alqrb',
                    'name_ar' => 'نيد القرب'
                ],
                [
                    'id' => 1889,
                    'country_id' => 1,
                    'external_id' => '356229133',
                    'name_en' => 'Alqamie',
                    'name_ar' => 'القميع'
                ],
                [
                    'id' => 1890,
                    'country_id' => 1,
                    'external_id' => '1728106254',
                    'name_en' => 'Alghara',
                    'name_ar' => 'الغرة'
                ],
                [
                    'id' => 1891,
                    'country_id' => 1,
                    'external_id' => '820899343',
                    'name_en' => 'Nyd Aleshh',
                    'name_ar' => 'نيد العشه'
                ],
                [
                    'id' => 1892,
                    'country_id' => 1,
                    'external_id' => '46796040',
                    'name_en' => 'Nayd Aljaranh',
                    'name_ar' => 'نيد الجرنه'
                ],
                [
                    'id' => 1893,
                    'country_id' => 1,
                    'external_id' => '1553411081',
                    'name_en' => 'Al Mubgarah Al Mungarah',
                    'name_ar' => 'المبجره  المنجره'
                ],
                [
                    'id' => 1894,
                    'country_id' => 1,
                    'external_id' => '779897610',
                    'name_en' => 'Bayn Muqaran',
                    'name_ar' => 'بين مقرن'
                ],
                [
                    'id' => 1895,
                    'country_id' => 1,
                    'external_id' => '2019125771',
                    'name_en' => 'Al-Jabirah',
                    'name_ar' => 'الجبيره'
                ],
                [
                    'id' => 1896,
                    'country_id' => 1,
                    'external_id' => '1244104980',
                    'name_en' => 'Ruh',
                    'name_ar' => 'روه'
                ],
                [
                    'id' => 1897,
                    'country_id' => 1,
                    'external_id' => '604809237',
                    'name_en' => 'Jamaeah',
                    'name_ar' => 'جامعه'
                ],
                [
                    'id' => 1898,
                    'country_id' => 1,
                    'external_id' => '1911142166',
                    'name_en' => 'Alshumala\'',
                    'name_ar' => 'الشملاء'
                ],
                [
                    'id' => 1899,
                    'country_id' => 1,
                    'external_id' => '1136055831',
                    'name_en' => 'Qalh Alnibakh',
                    'name_ar' => 'قله النباخ'
                ],
                [
                    'id' => 1900,
                    'country_id' => 1,
                    'external_id' => '496235792',
                    'name_en' => 'Almaqaruwth',
                    'name_ar' => 'المقروث'
                ],
                [
                    'id' => 1901,
                    'country_id' => 1,
                    'external_id' => '1870140433',
                    'name_en' => 'Al Mansouryah',
                    'name_ar' => 'المنصوريه'
                ],
                [
                    'id' => 1902,
                    'country_id' => 1,
                    'external_id' => '960836370',
                    'name_en' => 'Dahruh Al Qufae',
                    'name_ar' => 'دحره ال قوفع'
                ],
                [
                    'id' => 1903,
                    'country_id' => 1,
                    'external_id' => '186798611',
                    'name_en' => 'Al Qarnayn',
                    'name_ar' => 'القرنين'
                ],
                [
                    'id' => 1904,
                    'country_id' => 1,
                    'external_id' => '1695510812',
                    'name_en' => 'Al Gardamah',
                    'name_ar' => 'الجردمه'
                ],
                [
                    'id' => 1905,
                    'country_id' => 1,
                    'external_id' => '919965725',
                    'name_en' => 'Halala',
                    'name_ar' => 'الحلاله'
                ],
                [
                    'id' => 1906,
                    'country_id' => 1,
                    'external_id' => '11714334',
                    'name_en' => 'Hyd Aleaqabih',
                    'name_ar' => 'حيد العقبه'
                ],
                [
                    'id' => 1907,
                    'country_id' => 1,
                    'external_id' => '1386208799',
                    'name_en' => 'Almazafiluh',
                    'name_ar' => 'المزافله'
                ],
                [
                    'id' => 1908,
                    'country_id' => 1,
                    'external_id' => '744815896',
                    'name_en' => 'Nuqil Alqafilah',
                    'name_ar' => 'نقيل القافله'
                ],
                [
                    'id' => 1909,
                    'country_id' => 1,
                    'external_id' => '2118196249',
                    'name_en' => 'An-Nafayesh',
                    'name_ar' => 'النفايش'
                ],
                [
                    'id' => 1910,
                    'country_id' => 1,
                    'external_id' => '1210989338',
                    'name_en' => 'Al Khesrah',
                    'name_ar' => 'الخصره'
                ],
                [
                    'id' => 1911,
                    'country_id' => 1,
                    'external_id' => '436951579',
                    'name_en' => 'Al Hawamedah',
                    'name_ar' => 'الحوامضه'
                ],
                [
                    'id' => 1912,
                    'country_id' => 1,
                    'external_id' => '2010151268',
                    'name_en' => 'Wadi Damad',
                    'name_ar' => 'وادى ضمد'
                ],
                [
                    'id' => 1913,
                    'country_id' => 1,
                    'external_id' => '1103009893',
                    'name_en' => 'Thahir Rashid',
                    'name_ar' => 'ثاهر راشد'
                ],
                [
                    'id' => 1914,
                    'country_id' => 1,
                    'external_id' => '328968038',
                    'name_en' => 'Qarih Wa\'Adaa \'Awadu',
                    'name_ar' => 'قريه وادى اود'
                ],
                [
                    'id' => 1915,
                    'country_id' => 1,
                    'external_id' => '1835058791',
                    'name_en' => 'Dar Alqawayeuh',
                    'name_ar' => 'دار القويعه'
                ],
                [
                    'id' => 1916,
                    'country_id' => 1,
                    'external_id' => '1062069600',
                    'name_en' => 'Al Fazarah',
                    'name_ar' => 'الفزره'
                ],
                [
                    'id' => 1917,
                    'country_id' => 1,
                    'external_id' => '153748577',
                    'name_en' => 'Alkhadie',
                    'name_ar' => 'الخديع'
                ],
                [
                    'id' => 1918,
                    'country_id' => 1,
                    'external_id' => '1526145890',
                    'name_en' => 'Al Fayadal',
                    'name_ar' => 'الفيدل'
                ],
                [
                    'id' => 1919,
                    'country_id' => 1,
                    'external_id' => '886850147',
                    'name_en' => 'Almueshiruh',
                    'name_ar' => 'المعشره'
                ],
                [
                    'id' => 1920,
                    'country_id' => 1,
                    'external_id' => '112812396',
                    'name_en' => 'Qaem Al Zubaydeyah',
                    'name_ar' => 'قائم الزبيديه'
                ],
                [
                    'id' => 1921,
                    'country_id' => 1,
                    'external_id' => '1351057517',
                    'name_en' => 'As-Sumayli',
                    'name_ar' => 'الصميلي'
                ],
                [
                    'id' => 1922,
                    'country_id' => 1,
                    'external_id' => '577548142',
                    'name_en' => 'An-Nashamah',
                    'name_ar' => 'النشمه'
                ],
                [
                    'id' => 1923,
                    'country_id' => 1,
                    'external_id' => '2085211759',
                    'name_en' => 'Mahzumah',
                    'name_ar' => 'محزومه'
                ],
                [
                    'id' => 1924,
                    'country_id' => 1,
                    'external_id' => '1310125416',
                    'name_en' => 'Qaead Alfirhih',
                    'name_ar' => 'قعاد الفرحه'
                ],
                [
                    'id' => 1925,
                    'country_id' => 1,
                    'external_id' => '468913257',
                    'name_en' => '\'Atwal',
                    'name_ar' => 'اطول'
                ],
                [
                    'id' => 1926,
                    'country_id' => 1,
                    'external_id' => '1977101162',
                    'name_en' => 'Erman',
                    'name_ar' => 'عرمان'
                ],
                [
                    'id' => 1927,
                    'country_id' => 1,
                    'external_id' => '1202014827',
                    'name_en' => 'Almuqandar',
                    'name_ar' => 'المقندر'
                ],
                [
                    'id' => 1928,
                    'country_id' => 1,
                    'external_id' => '293759348',
                    'name_en' => 'Hadlan',
                    'name_ar' => 'حدلان'
                ],
                [
                    'id' => 1929,
                    'country_id' => 1,
                    'external_id' => '1667795061',
                    'name_en' => 'Qabis',
                    'name_ar' => 'قبيس'
                ],
                [
                    'id' => 1930,
                    'country_id' => 1,
                    'external_id' => '1026922358',
                    'name_en' => 'Ad-Dawha',
                    'name_ar' => 'الدوحه'
                ],
                [
                    'id' => 1931,
                    'country_id' => 1,
                    'external_id' => '252884599',
                    'name_en' => 'Al Garanah',
                    'name_ar' => 'الجرانه'
                ],
                [
                    'id' => 1932,
                    'country_id' => 1,
                    'external_id' => '1493161328',
                    'name_en' => 'Eimaya',
                    'name_ar' => 'عماية'
                ],
                [
                    'id' => 1933,
                    'country_id' => 1,
                    'external_id' => '717550705',
                    'name_en' => 'Alshijaj',
                    'name_ar' => 'الشجاج'
                ],
                [
                    'id' => 1934,
                    'country_id' => 1,
                    'external_id' => '77665138',
                    'name_en' => 'Al-Qazei - Al-Nasiriyyah',
                    'name_ar' => 'القزعي - الناصرية'
                ],
                [
                    'id' => 1935,
                    'country_id' => 1,
                    'external_id' => '1452159603',
                    'name_en' => 'Alhawaysuh',
                    'name_ar' => 'الحويصه'
                ],
                [
                    'id' => 1936,
                    'country_id' => 1,
                    'external_id' => '543904124',
                    'name_en' => 'Al Khamsyah',
                    'name_ar' => 'الخمسيه'
                ],
                [
                    'id' => 1937,
                    'country_id' => 1,
                    'external_id' => '1915777149',
                    'name_en' => 'Nayd Sarman',
                    'name_ar' => 'نيد صرمان'
                ],
                [
                    'id' => 1938,
                    'country_id' => 1,
                    'external_id' => '1277075326',
                    'name_en' => 'Alsarab',
                    'name_ar' => 'السراب'
                ],
                [
                    'id' => 1939,
                    'country_id' => 1,
                    'external_id' => '435928703',
                    'name_en' => 'Al Manaqeez',
                    'name_ar' => 'المناقيز'
                ],
                [
                    'id' => 1940,
                    'country_id' => 1,
                    'external_id' => '1807801720',
                    'name_en' => 'Khudur',
                    'name_ar' => 'خدور'
                ],
                [
                    'id' => 1941,
                    'country_id' => 1,
                    'external_id' => '1169030265',
                    'name_en' => 'Al Qurayah Al Olyah',
                    'name_ar' => 'القراعيه العليا'
                ],
                [
                    'id' => 1942,
                    'country_id' => 1,
                    'external_id' => '394926970',
                    'name_en' => 'Al Muqanzaa',
                    'name_ar' => 'المقنزع'
                ],
                [
                    'id' => 1943,
                    'country_id' => 1,
                    'external_id' => '1633106555',
                    'name_en' => 'Ash-Shoaob',
                    'name_ar' => 'الشعوب'
                ],
                [
                    'id' => 1944,
                    'country_id' => 1,
                    'external_id' => '859593028',
                    'name_en' => 'Halet Gahshour',
                    'name_ar' => 'حله جحشور'
                ],
                [
                    'id' => 1945,
                    'country_id' => 1,
                    'external_id' => '219772997',
                    'name_en' => 'Salakhah',
                    'name_ar' => 'صلاخه'
                ],
                [
                    'id' => 1946,
                    'country_id' => 1,
                    'external_id' => '1592231750',
                    'name_en' => 'Al Uqaylee',
                    'name_ar' => 'العقيلي'
                ],
                [
                    'id' => 1947,
                    'country_id' => 1,
                    'external_id' => '684500551',
                    'name_en' => 'Alruwghuh',
                    'name_ar' => 'الروغه'
                ],
                [
                    'id' => 1948,
                    'country_id' => 1,
                    'external_id' => '2057946432',
                    'name_en' => 'Hawareq Al-Gharbiah ',
                    'name_ar' => 'حوارق الغربية'
                ],
                [
                    'id' => 1949,
                    'country_id' => 1,
                    'external_id' => '1417077825',
                    'name_en' => 'Aldhuraa',
                    'name_ar' => 'الذراى'
                ],
                [
                    'id' => 1950,
                    'country_id' => 1,
                    'external_id' => '1882726979',
                    'name_en' => 'Abo Al Hur',
                    'name_ar' => 'ابو الحور'
                ],
                [
                    'id' => 1951,
                    'country_id' => 1,
                    'external_id' => '1107640652',
                    'name_en' => 'Eafrah',
                    'name_ar' => 'عفره'
                ],
                [
                    'id' => 1952,
                    'country_id' => 1,
                    'external_id' => '534929485',
                    'name_en' => 'Dhirae Almanahir',
                    'name_ar' => 'ذراع المناهر'
                ],
                [
                    'id' => 1953,
                    'country_id' => 1,
                    'external_id' => '1774751566',
                    'name_en' => 'Hawareq Al Wusta',
                    'name_ar' => 'حوارق الوسطى'
                ],
                [
                    'id' => 1954,
                    'country_id' => 1,
                    'external_id' => '999665231',
                    'name_en' => 'Al Ghwaydeyah',
                    'name_ar' => 'الغويديه'
                ],
                [
                    'id' => 1955,
                    'country_id' => 1,
                    'external_id' => '359845192',
                    'name_en' => 'Ash-Shutayfyah',
                    'name_ar' => 'الشطيفيه'
                ],
                [
                    'id' => 1956,
                    'country_id' => 1,
                    'external_id' => '1734339657',
                    'name_en' => 'Al Uloleyah Ash-Sharqiyah',
                    'name_ar' => 'العلوليه الشرقيه'
                ],
                [
                    'id' => 1957,
                    'country_id' => 1,
                    'external_id' => '824445770',
                    'name_en' => 'Al Qumarah',
                    'name_ar' => 'القمره'
                ],
                [
                    'id' => 1958,
                    'country_id' => 1,
                    'external_id' => '50408011',
                    'name_en' => 'Alsiliyatuh',
                    'name_ar' => 'السليته'
                ],
                [
                    'id' => 1959,
                    'country_id' => 1,
                    'external_id' => '1559120212',
                    'name_en' => 'Heraz',
                    'name_ar' => 'حراز'
                ],
                [
                    'id' => 1960,
                    'country_id' => 1,
                    'external_id' => '785082453',
                    'name_en' => 'Al-Merwahiyah Al-Masrohiyah',
                    'name_ar' => 'المروحيه المصروحيه'
                ],
                [
                    'id' => 1961,
                    'country_id' => 1,
                    'external_id' => '2022733654',
                    'name_en' => 'Sefah',
                    'name_ar' => 'صفه'
                ],
                [
                    'id' => 1962,
                    'country_id' => 1,
                    'external_id' => '1249810007',
                    'name_en' => 'Dhirae Almujamaeih',
                    'name_ar' => 'ذراع المجمعه'
                ],
                [
                    'id' => 1963,
                    'country_id' => 1,
                    'external_id' => '609989968',
                    'name_en' => 'Batten Kalab',
                    'name_ar' => 'باطن كلب'
                ],
                [
                    'id' => 1964,
                    'country_id' => 1,
                    'external_id' => '1981862993',
                    'name_en' => 'Masawi Karira',
                    'name_ar' => 'مساوي كريرى'
                ],
                [
                    'id' => 1965,
                    'country_id' => 1,
                    'external_id' => '1074656082',
                    'name_en' => 'Galban',
                    'name_ar' => 'جلبان'
                ],
                [
                    'id' => 1966,
                    'country_id' => 1,
                    'external_id' => '501879379',
                    'name_en' => 'Aldaajie',
                    'name_ar' => 'الضاجع'
                ],
                [
                    'id' => 1967,
                    'country_id' => 1,
                    'external_id' => '1874276700',
                    'name_en' => 'Bayr Alshshari',
                    'name_ar' => 'بير الشار'
                ],
                [
                    'id' => 1968,
                    'country_id' => 1,
                    'external_id' => '966545501',
                    'name_en' => 'Om Ar-Rassaf',
                    'name_ar' => 'ام الرصاف'
                ],
                [
                    'id' => 1969,
                    'country_id' => 1,
                    'external_id' => '192511838',
                    'name_en' => 'Qalh Aleabisaa',
                    'name_ar' => 'قله العبيسى'
                ],
                [
                    'id' => 1970,
                    'country_id' => 1,
                    'external_id' => '1699192415',
                    'name_en' => 'Junaidah',
                    'name_ar' => 'جنيده'
                ],
                [
                    'id' => 1971,
                    'country_id' => 1,
                    'external_id' => '925678936',
                    'name_en' => 'Nyd Aleada',
                    'name_ar' => 'نيد العادى'
                ],
                [
                    'id' => 1972,
                    'country_id' => 1,
                    'external_id' => '17423449',
                    'name_en' => 'Jhydm',
                    'name_ar' => 'جحيدم'
                ],
                [
                    'id' => 1973,
                    'country_id' => 1,
                    'external_id' => '1389820762',
                    'name_en' => 'At-Tamameeh',
                    'name_ar' => 'الطماميح'
                ],
                [
                    'id' => 1974,
                    'country_id' => 1,
                    'external_id' => '749935195',
                    'name_en' => 'Al Megdarah',
                    'name_ar' => 'المجداره'
                ],
                [
                    'id' => 1975,
                    'country_id' => 1,
                    'external_id' => '2123905188',
                    'name_en' => 'Ash-Shawkah',
                    'name_ar' => 'الشوكه'
                ],
                [
                    'id' => 1976,
                    'country_id' => 1,
                    'external_id' => '1214597029',
                    'name_en' => 'Aleasaa',
                    'name_ar' => 'العاصى'
                ],
                [
                    'id' => 1977,
                    'country_id' => 1,
                    'external_id' => '440559270',
                    'name_en' => 'Al Ghamor',
                    'name_ar' => 'الغمور'
                ],
                [
                    'id' => 1978,
                    'country_id' => 1,
                    'external_id' => '1948812711',
                    'name_en' => 'Al Aydar',
                    'name_ar' => 'العيدر'
                ],
                [
                    'id' => 1979,
                    'country_id' => 1,
                    'external_id' => '1106617504',
                    'name_en' => 'Aldhinab',
                    'name_ar' => 'الذناب'
                ],
                [
                    'id' => 1980,
                    'country_id' => 1,
                    'external_id' => '332579745',
                    'name_en' => 'Al Lukayt',
                    'name_ar' => 'اللكيت'
                ],
                [
                    'id' => 1981,
                    'country_id' => 1,
                    'external_id' => '1841291938',
                    'name_en' => 'Al Ghorah',
                    'name_ar' => 'الغورة'
                ],
                [
                    'id' => 1982,
                    'country_id' => 1,
                    'external_id' => '1065615779',
                    'name_en' => 'Al Ololyah Al Gharbyah',
                    'name_ar' => 'العلوليه الغربيه'
                ],
                [
                    'id' => 1983,
                    'country_id' => 1,
                    'external_id' => '157360300',
                    'name_en' => 'Alwaghiluh',
                    'name_ar' => 'الواغله'
                ],
                [
                    'id' => 1984,
                    'country_id' => 1,
                    'external_id' => '1531858861',
                    'name_en' => 'Al Markh',
                    'name_ar' => 'المرخ'
                ],
                [
                    'id' => 1985,
                    'country_id' => 1,
                    'external_id' => '892038830',
                    'name_en' => 'Al Shamer',
                    'name_ar' => 'ال شامر'
                ],
                [
                    'id' => 1986,
                    'country_id' => 1,
                    'external_id' => '116493743',
                    'name_en' => 'Qura Rameh',
                    'name_ar' => 'قرى رامح'
                ],
                [
                    'id' => 1987,
                    'country_id' => 1,
                    'external_id' => '1356770472',
                    'name_en' => 'Abo Karash',
                    'name_ar' => 'ابو كرش'
                ],
                [
                    'id' => 1988,
                    'country_id' => 1,
                    'external_id' => '582732713',
                    'name_en' => 'Qamayah',
                    'name_ar' => 'قمايع'
                ],
                [
                    'id' => 1989,
                    'country_id' => 1,
                    'external_id' => '2088823466',
                    'name_en' => 'Aleuruj',
                    'name_ar' => 'العروج'
                ],
                [
                    'id' => 1990,
                    'country_id' => 1,
                    'external_id' => '1315768747',
                    'name_en' => 'Albijra\'',
                    'name_ar' => 'البجراء'
                ],
                [
                    'id' => 1991,
                    'country_id' => 1,
                    'external_id' => '407513268',
                    'name_en' => 'Khasabah',
                    'name_ar' => 'خسبه'
                ],
                [
                    'id' => 1992,
                    'country_id' => 1,
                    'external_id' => '1779906485',
                    'name_en' => 'Alkhabaraa',
                    'name_ar' => 'الخبارى'
                ],
                [
                    'id' => 1993,
                    'country_id' => 1,
                    'external_id' => '1207719606',
                    'name_en' => 'Al Magareen',
                    'name_ar' => 'المجارين'
                ],
                [
                    'id' => 1994,
                    'country_id' => 1,
                    'external_id' => '299464119',
                    'name_en' => 'Thaher Al Qeaqea',
                    'name_ar' => 'ثاهر القعقاع'
                ],
                [
                    'id' => 1995,
                    'country_id' => 1,
                    'external_id' => '1671926960',
                    'name_en' => 'Alzaqiluh',
                    'name_ar' => 'الزقيله'
                ],
                [
                    'id' => 1996,
                    'country_id' => 1,
                    'external_id' => '1032631217',
                    'name_en' => 'Bayn Maqarin',
                    'name_ar' => 'بين مقر'
                ],
                [
                    'id' => 1997,
                    'country_id' => 1,
                    'external_id' => '258593458',
                    'name_en' => 'Dharaa Alqadaya',
                    'name_ar' => 'ذارى القضايا'
                ],
                [
                    'id' => 1998,
                    'country_id' => 1,
                    'external_id' => '1496773043',
                    'name_en' => 'Al Bulayqat',
                    'name_ar' => 'البليقات'
                ],
                [
                    'id' => 1999,
                    'country_id' => 1,
                    'external_id' => '722669756',
                    'name_en' => 'Alqaeid',
                    'name_ar' => 'القعيد'
                ],
                [
                    'id' => 2000,
                    'country_id' => 1,
                    'external_id' => '83378109',
                    'name_en' => 'Aljamieuh',
                    'name_ar' => 'الجامعه'
                ],
                [
                    'id' => 2001,
                    'country_id' => 1,
                    'external_id' => '1455775422',
                    'name_en' => 'Dhai\'at Al-Azeen',
                    'name_ar' => 'ضيعة العزيين'
                ],
                [
                    'id' => 2002,
                    'country_id' => 1,
                    'external_id' => '547519935',
                    'name_en' => 'Gaar',
                    'name_ar' => 'جعار'
                ],
                [
                    'id' => 2003,
                    'country_id' => 1,
                    'external_id' => '1921555640',
                    'name_en' => 'Kars Al Hawayshah',
                    'name_ar' => 'كرس  الهوايشه'
                ],
                [
                    'id' => 2004,
                    'country_id' => 1,
                    'external_id' => '1280687033',
                    'name_en' => 'Al Maythab',
                    'name_ar' => 'الميثب'
                ],
                [
                    'id' => 2005,
                    'country_id' => 1,
                    'external_id' => '1746926011',
                    'name_en' => 'Garadeyet Ar-Rawajeha',
                    'name_ar' => 'جرادية الرواجحه'
                ],
                [
                    'id' => 2006,
                    'country_id' => 1,
                    'external_id' => '1172576388',
                    'name_en' => 'Al Kawadmah Al Gharbeyah',
                    'name_ar' => 'الكوادمه الغربيه'
                ],
                [
                    'id' => 2007,
                    'country_id' => 1,
                    'external_id' => '398534533',
                    'name_en' => 'Talan',
                    'name_ar' => 'طلان'
                ],
                [
                    'id' => 2008,
                    'country_id' => 1,
                    'external_id' => '1638811270',
                    'name_en' => 'Al-Dhae\'ah',
                    'name_ar' => 'الضائعة'
                ],
                [
                    'id' => 2009,
                    'country_id' => 1,
                    'external_id' => '864773511',
                    'name_en' => 'Awaal Ash-Shami',
                    'name_ar' => 'اوعال الشامي'
                ],
                [
                    'id' => 2010,
                    'country_id' => 1,
                    'external_id' => '223446144',
                    'name_en' => 'Menbar',
                    'name_ar' => 'منبار'
                ],
                [
                    'id' => 2011,
                    'country_id' => 1,
                    'external_id' => '1597940609',
                    'name_en' => 'alzahnaeuh alharaf',
                    'name_ar' => 'الزهنعه الحرف'
                ],
                [
                    'id' => 2012,
                    'country_id' => 1,
                    'external_id' => '689685122',
                    'name_en' => 'Shawqab',
                    'name_ar' => 'شوقب'
                ],
                [
                    'id' => 2013,
                    'country_id' => 1,
                    'external_id' => '2061558147',
                    'name_en' => 'Az-Zarua',
                    'name_ar' => 'الزروع'
                ],
                [
                    'id' => 2014,
                    'country_id' => 1,
                    'external_id' => '1422721164',
                    'name_en' => 'Asbkhah',
                    'name_ar' => 'أسبخه'
                ],
                [
                    'id' => 2015,
                    'country_id' => 1,
                    'external_id' => '648687501',
                    'name_en' => 'Al Muhattash',
                    'name_ar' => 'المهتش'
                ],
                [
                    'id' => 2016,
                    'country_id' => 1,
                    'external_id' => '1886867086',
                    'name_en' => 'Al Megraa',
                    'name_ar' => 'المجراع'
                ],
                [
                    'id' => 2017,
                    'country_id' => 1,
                    'external_id' => '1113353615',
                    'name_en' => 'Ar-Radumah',
                    'name_ar' => 'الردومه'
                ],
                [
                    'id' => 2018,
                    'country_id' => 1,
                    'external_id' => '473599112',
                    'name_en' => 'Amrn',
                    'name_ar' => 'امرن'
                ],
                [
                    'id' => 2019,
                    'country_id' => 1,
                    'external_id' => '1845996425',
                    'name_en' => 'Al-Shawakiah Bani Shawk',
                    'name_ar' => 'الشواكية بنى شوك'
                ],
                [
                    'id' => 2020,
                    'country_id' => 1,
                    'external_id' => '1005374090',
                    'name_en' => 'Alqaeuh',
                    'name_ar' => 'القاعه'
                ],
                [
                    'id' => 2021,
                    'country_id' => 1,
                    'external_id' => '365554059',
                    'name_en' => 'Wa\'Adaa Munakharanaan',
                    'name_ar' => 'وادى منخرا'
                ],
                [
                    'id' => 2022,
                    'country_id' => 1,
                    'external_id' => '1737885844',
                    'name_en' => 'Al Maht',
                    'name_ar' => 'المحط'
                ],
                [
                    'id' => 2023,
                    'country_id' => 1,
                    'external_id' => '829626261',
                    'name_en' => 'Al Jazaah',
                    'name_ar' => 'الجزعه'
                ],
                [
                    'id' => 2024,
                    'country_id' => 1,
                    'external_id' => '56112790',
                    'name_en' => 'Eafaj',
                    'name_ar' => 'عفج'
                ],
                [
                    'id' => 2025,
                    'country_id' => 1,
                    'external_id' => '1562727831',
                    'name_en' => 'Al Megaarah',
                    'name_ar' => 'المجعاره'
                ],
                [
                    'id' => 2026,
                    'country_id' => 1,
                    'external_id' => '788690064',
                    'name_en' => 'Tannan',
                    'name_ar' => 'طنان'
                ],
                [
                    'id' => 2027,
                    'country_id' => 1,
                    'external_id' => '2028508049',
                    'name_en' => 'Jua Shahdan',
                    'name_ar' => 'جوه شهدان'
                ],
                [
                    'id' => 2028,
                    'country_id' => 1,
                    'external_id' => '1253421714',
                    'name_en' => 'Al Murawegh',
                    'name_ar' => 'المرواغ'
                ],
                [
                    'id' => 2029,
                    'country_id' => 1,
                    'external_id' => '613601683',
                    'name_en' => 'Aysan',
                    'name_ar' => 'عيسان'
                ],
                [
                    'id' => 2030,
                    'country_id' => 1,
                    'external_id' => '1988096156',
                    'name_en' => 'Al Qudayah',
                    'name_ar' => 'القضابه'
                ],
                [
                    'id' => 2031,
                    'country_id' => 1,
                    'external_id' => '1078206365',
                    'name_en' => 'Shaatham',
                    'name_ar' => 'شعثم'
                ],
                [
                    'id' => 2032,
                    'country_id' => 1,
                    'external_id' => '304168606',
                    'name_en' => 'Duha Al Muban',
                    'name_ar' => 'ضحى المبان'
                ],
                [
                    'id' => 2033,
                    'country_id' => 1,
                    'external_id' => '1812880799',
                    'name_en' => 'Al Hazemyah',
                    'name_ar' => 'الحازميه'
                ],
                [
                    'id' => 2034,
                    'country_id' => 1,
                    'external_id' => '971734168',
                    'name_en' => 'Al-Qunah',
                    'name_ar' => 'القنه'
                ],
                [
                    'id' => 2035,
                    'country_id' => 1,
                    'external_id' => '196189081',
                    'name_en' => 'Om Rafghah',
                    'name_ar' => 'ام رفغه'
                ],
                [
                    'id' => 2036,
                    'country_id' => 1,
                    'external_id' => '1704901274',
                    'name_en' => 'Al-Qaed',
                    'name_ar' => 'القائد'
                ],
                [
                    'id' => 2037,
                    'country_id' => 1,
                    'external_id' => '930863515',
                    'name_en' => 'Mukhawret Ash-Shuara',
                    'name_ar' => 'مخاورة الشعراء'
                ],
                [
                    'id' => 2038,
                    'country_id' => 1,
                    'external_id' => '21035236',
                    'name_en' => 'Gawshab',
                    'name_ar' => 'جوشب'
                ],
                [
                    'id' => 2039,
                    'country_id' => 1,
                    'external_id' => '1395460069',
                    'name_en' => 'Al Ammah',
                    'name_ar' => 'العمه'
                ],
                [
                    'id' => 2040,
                    'country_id' => 1,
                    'external_id' => '755640038',
                    'name_en' => 'Al-Qazah',
                    'name_ar' => 'القزعة'
                ],
                [
                    'id' => 2041,
                    'country_id' => 1,
                    'external_id' => '2128037351',
                    'name_en' => 'Halet Al Humod',
                    'name_ar' => 'حله الحمود'
                ],
                [
                    'id' => 2042,
                    'country_id' => 1,
                    'external_id' => '1220306144',
                    'name_en' => 'As-Sayyar',
                    'name_ar' => 'السيار'
                ],
                [
                    'id' => 2043,
                    'country_id' => 1,
                    'external_id' => '446333921',
                    'name_en' => 'Al Kharq',
                    'name_ar' => 'الخرق'
                ],
                [
                    'id' => 2044,
                    'country_id' => 1,
                    'external_id' => '1952948962',
                    'name_en' => 'Al Quranah',
                    'name_ar' => 'القرنه'
                ],
                [
                    'id' => 2045,
                    'country_id' => 1,
                    'external_id' => '1179435491',
                    'name_en' => 'As-Shaybaa',
                    'name_ar' => 'الشيباء'
                ],
                [
                    'id' => 2046,
                    'country_id' => 1,
                    'external_id' => '271180012',
                    'name_en' => 'Dayfan',
                    'name_ar' => 'ضيفان'
                ],
                [
                    'id' => 2047,
                    'country_id' => 1,
                    'external_id' => '1844842477',
                    'name_en' => 'Abo Omran',
                    'name_ar' => 'ابو عمران'
                ],
                [
                    'id' => 2048,
                    'country_id' => 1,
                    'external_id' => '1070804718',
                    'name_en' => 'Shebanet Wal Ati',
                    'name_ar' => 'شيبانه وال عاتي'
                ],
                [
                    'id' => 2049,
                    'country_id' => 1,
                    'external_id' => '163073519',
                    'name_en' => 'Shuab As-Selaa',
                    'name_ar' => 'شعب الصلاء'
                ],
                [
                    'id' => 2050,
                    'country_id' => 1,
                    'external_id' => '1535470824',
                    'name_en' => 'Al Bayad',
                    'name_ar' => 'البياض'
                ],
                [
                    'id' => 2051,
                    'country_id' => 1,
                    'external_id' => '895716329',
                    'name_en' => 'Fahajlh',
                    'name_ar' => 'فحجله'
                ],
                [
                    'id' => 2052,
                    'country_id' => 1,
                    'external_id' => '122202858',
                    'name_en' => 'Al Muasah',
                    'name_ar' => 'المعسه'
                ],
                [
                    'id' => 2053,
                    'country_id' => 1,
                    'external_id' => '1360382443',
                    'name_en' => 'Shawahet',
                    'name_ar' => 'شواحط'
                ],
                [
                    'id' => 2054,
                    'country_id' => 1,
                    'external_id' => '586344692',
                    'name_en' => 'Al Marawenah',
                    'name_ar' => 'المراونه'
                ],
                [
                    'id' => 2055,
                    'country_id' => 1,
                    'external_id' => '2095052789',
                    'name_en' => 'Munazei',
                    'name_ar' => 'منازع'
                ],
                [
                    'id' => 2056,
                    'country_id' => 1,
                    'external_id' => '1319376630',
                    'name_en' => 'Maftah Al Makhsha',
                    'name_ar' => 'مفتح المخشا'
                ],
                [
                    'id' => 2057,
                    'country_id' => 1,
                    'external_id' => '411121143',
                    'name_en' => 'Alsakhra',
                    'name_ar' => 'الصخرا'
                ],
                [
                    'id' => 2058,
                    'country_id' => 1,
                    'external_id' => '1785615600',
                    'name_en' => 'Al Ghurzah',
                    'name_ar' => 'الغرزه'
                ],
                [
                    'id' => 2059,
                    'country_id' => 1,
                    'external_id' => '1145795569',
                    'name_en' => 'Al Qumalah',
                    'name_ar' => 'القمله'
                ],
                [
                    'id' => 2060,
                    'country_id' => 1,
                    'external_id' => '370250482',
                    'name_en' => 'Baten Maasharah',
                    'name_ar' => 'باطن معشره'
                ],
                [
                    'id' => 2061,
                    'country_id' => 1,
                    'external_id' => '1677636083',
                    'name_en' => 'Balhool',
                    'name_ar' => 'بالهول'
                ],
                [
                    'id' => 2062,
                    'country_id' => 1,
                    'external_id' => '1037816060',
                    'name_en' => 'Habil Burdan',
                    'name_ar' => 'حبيل بردان'
                ],
                [
                    'id' => 2063,
                    'country_id' => 1,
                    'external_id' => '262209533',
                    'name_en' => 'Ned Al Qumah',
                    'name_ar' => 'نيد القمه'
                ],
                [
                    'id' => 2064,
                    'country_id' => 1,
                    'external_id' => '1502420734',
                    'name_en' => 'Almisafu',
                    'name_ar' => 'المصف'
                ],
                [
                    'id' => 2065,
                    'country_id' => 1,
                    'external_id' => '728382975',
                    'name_en' => 'Shakhthaa',
                    'name_ar' => 'شخثاء'
                ],
                [
                    'id' => 2066,
                    'country_id' => 1,
                    'external_id' => '87514360',
                    'name_en' => 'Al Musanaf',
                    'name_ar' => 'المصنف'
                ],
                [
                    'id' => 2067,
                    'country_id' => 1,
                    'external_id' => '1461484537',
                    'name_en' => 'Hanfajah',
                    'name_ar' => 'حنفجه'
                ],
                [
                    'id' => 2068,
                    'country_id' => 1,
                    'external_id' => '553294586',
                    'name_en' => 'Ash-Shatbaa',
                    'name_ar' => 'الشطباء'
                ],
                [
                    'id' => 2069,
                    'country_id' => 1,
                    'external_id' => '1925691899',
                    'name_en' => 'Nayd Almuslim',
                    'name_ar' => 'نيد المسلم'
                ],
                [
                    'id' => 2070,
                    'country_id' => 1,
                    'external_id' => '1286396100',
                    'name_en' => 'Anaam',
                    'name_ar' => 'انعام'
                ],
                [
                    'id' => 2071,
                    'country_id' => 1,
                    'external_id' => '512354245',
                    'name_en' => 'Madus',
                    'name_ar' => 'مدوس'
                ],
                [
                    'id' => 2072,
                    'country_id' => 1,
                    'external_id' => '1750468294',
                    'name_en' => 'Al Khalilah',
                    'name_ar' => 'الخليله'
                ],
                [
                    'id' => 2073,
                    'country_id' => 1,
                    'external_id' => '976430535',
                    'name_en' => 'Jeshm',
                    'name_ar' => 'جعشم'
                ],
                [
                    'id' => 2074,
                    'country_id' => 1,
                    'external_id' => '337134784',
                    'name_en' => 'Qura Al-Awdiyah',
                    'name_ar' => 'قرى الاودية'
                ],
                [
                    'id' => 2075,
                    'country_id' => 1,
                    'external_id' => '1642423233',
                    'name_en' => 'Om Qura',
                    'name_ar' => 'أم قرى'
                ],
                [
                    'id' => 2076,
                    'country_id' => 1,
                    'external_id' => '868451010',
                    'name_en' => 'Al Fuqarah Al Olya',
                    'name_ar' => 'الفقاره العليا'
                ],
                [
                    'id' => 2077,
                    'country_id' => 1,
                    'external_id' => '229155267',
                    'name_en' => 'Al Hashash',
                    'name_ar' => 'الحشاش'
                ],
                [
                    'id' => 2078,
                    'country_id' => 1,
                    'external_id' => '1601552588',
                    'name_en' => 'Bager',
                    'name_ar' => 'باجر'
                ],
                [
                    'id' => 2079,
                    'country_id' => 1,
                    'external_id' => '693301197',
                    'name_en' => 'Mugayrah',
                    'name_ar' => 'مجايره'
                ],
                [
                    'id' => 2080,
                    'country_id' => 1,
                    'external_id' => '2067730126',
                    'name_en' => 'Al Mahsoor',
                    'name_ar' => 'المحصور'
                ],
                [
                    'id' => 2081,
                    'country_id' => 1,
                    'external_id' => '1426337231',
                    'name_en' => 'Hubayel Al Wadeen',
                    'name_ar' => 'حبيل الواديين'
                ],
                [
                    'id' => 2082,
                    'country_id' => 1,
                    'external_id' => '652299464',
                    'name_en' => 'Ash-Shuryanah',
                    'name_ar' => 'الشريانه'
                ],
                [
                    'id' => 2083,
                    'country_id' => 1,
                    'external_id' => '1892576201',
                    'name_en' => 'As-Serb',
                    'name_ar' => 'السرب'
                ],
                [
                    'id' => 2084,
                    'country_id' => 1,
                    'external_id' => '1117031114',
                    'name_en' => 'Al Olaqah',
                    'name_ar' => 'العلقه'
                ],
                [
                    'id' => 2085,
                    'country_id' => 1,
                    'external_id' => '477211083',
                    'name_en' => 'Ned An-Nughob',
                    'name_ar' => 'نيد النغوب'
                ],
                [
                    'id' => 2086,
                    'country_id' => 1,
                    'external_id' => '1851705556',
                    'name_en' => 'Ned Meghdan',
                    'name_ar' => 'نيد مغدان'
                ],
                [
                    'id' => 2087,
                    'country_id' => 1,
                    'external_id' => '943445973',
                    'name_en' => 'Ath-Thaminah',
                    'name_ar' => 'الثمينه'
                ],
                [
                    'id' => 2088,
                    'country_id' => 1,
                    'external_id' => '1743590871',
                    'name_en' => 'Hubayel Al Shamekh',
                    'name_ar' => 'حبيل الشامخ'
                ],
                [
                    'id' => 2089,
                    'country_id' => 1,
                    'external_id' => '835335376',
                    'name_en' => 'Al Kabanah',
                    'name_ar' => 'الكبنه'
                ],
                [
                    'id' => 2090,
                    'country_id' => 1,
                    'external_id' => '60249041',
                    'name_en' => 'Al Mazrouqah',
                    'name_ar' => 'المزروقه'
                ],
                [
                    'id' => 2091,
                    'country_id' => 1,
                    'external_id' => '1568436946',
                    'name_en' => 'Al Haja Al Asfal',
                    'name_ar' => 'الحجا الاسفل'
                ],
                [
                    'id' => 2092,
                    'country_id' => 1,
                    'external_id' => '794464723',
                    'name_en' => 'Muamaq',
                    'name_ar' => 'معمق'
                ],
                [
                    'id' => 2093,
                    'country_id' => 1,
                    'external_id' => '2032644316',
                    'name_en' => 'Al Qamhalah',
                    'name_ar' => 'القمحله'
                ],
                [
                    'id' => 2094,
                    'country_id' => 1,
                    'external_id' => '1259134941',
                    'name_en' => 'Ash-Shawahet',
                    'name_ar' => 'الشواحط'
                ],
                [
                    'id' => 2095,
                    'country_id' => 1,
                    'external_id' => '619314910',
                    'name_en' => 'Lihaji Almahsham',
                    'name_ar' => 'لحج المهشم'
                ],
                [
                    'id' => 2096,
                    'country_id' => 1,
                    'external_id' => '1991646687',
                    'name_en' => 'Ash-Sheraa',
                    'name_ar' => 'الشراء'
                ],
                [
                    'id' => 2097,
                    'country_id' => 1,
                    'external_id' => '1083391192',
                    'name_en' => 'Habil Alwast',
                    'name_ar' => 'حبيل الواسط'
                ],
                [
                    'id' => 2098,
                    'country_id' => 1,
                    'external_id' => '309877721',
                    'name_en' => 'Al Qaterah',
                    'name_ar' => 'القاطره'
                ],
                [
                    'id' => 2099,
                    'country_id' => 1,
                    'external_id' => '1816492762',
                    'name_en' => 'Alkhawram',
                    'name_ar' => 'الخورم'
                ],
                [
                    'id' => 2100,
                    'country_id' => 1,
                    'external_id' => '1042520539',
                    'name_en' => 'Almudarijuh',
                    'name_ar' => 'المدرجه'
                ],
                [
                    'id' => 2101,
                    'country_id' => 1,
                    'external_id' => '134789156',
                    'name_en' => 'alsharaa',
                    'name_ar' => 'الشرى'
                ],
                [
                    'id' => 2102,
                    'country_id' => 1,
                    'external_id' => '1708508965',
                    'name_en' => 'Al-Sarb',
                    'name_ar' => 'الصرب'
                ],
                [
                    'id' => 2103,
                    'country_id' => 1,
                    'external_id' => '934471206',
                    'name_en' => 'Al Hedq',
                    'name_ar' => 'الحدق'
                ],
                [
                    'id' => 2104,
                    'country_id' => 1,
                    'external_id' => '27198759',
                    'name_en' => 'Al-Murawegh',
                    'name_ar' => 'المراوغ'
                ],
                [
                    'id' => 2105,
                    'country_id' => 1,
                    'external_id' => '1399071776',
                    'name_en' => 'Aljarab',
                    'name_ar' => 'الجرب'
                ],
                [
                    'id' => 2106,
                    'country_id' => 1,
                    'external_id' => '759251745',
                    'name_en' => 'Habil Maein',
                    'name_ar' => 'حبيل معين'
                ],
                [
                    'id' => 2107,
                    'country_id' => 1,
                    'external_id' => '2133746210',
                    'name_en' => 'Ned Al Dabar',
                    'name_ar' => 'نيد الضبر'
                ],
                [
                    'id' => 2108,
                    'country_id' => 1,
                    'external_id' => '1223983395',
                    'name_en' => 'Murawah',
                    'name_ar' => 'مراوه'
                ],
                [
                    'id' => 2109,
                    'country_id' => 1,
                    'external_id' => '449945644',
                    'name_en' => 'Allasabuh',
                    'name_ar' => 'اللصبه'
                ],
                [
                    'id' => 2110,
                    'country_id' => 1,
                    'external_id' => '1958661933',
                    'name_en' => 'Ad-Duhamaa',
                    'name_ar' => 'الدهماء'
                ],
                [
                    'id' => 2111,
                    'country_id' => 1,
                    'external_id' => '1184624174',
                    'name_en' => 'As-Sayalah',
                    'name_ar' => 'السياله'
                ],
                [
                    'id' => 2112,
                    'country_id' => 1,
                    'external_id' => '274730287',
                    'name_en' => 'Majaeer Al-Tarqah',
                    'name_ar' => 'مجاعير الطرقه'
                ],
                [
                    'id' => 2113,
                    'country_id' => 1,
                    'external_id' => '1649224744',
                    'name_en' => 'Raghawan',
                    'name_ar' => 'رغوان'
                ],
                [
                    'id' => 2114,
                    'country_id' => 1,
                    'external_id' => '1009404713',
                    'name_en' => 'Thahirah Alqaead',
                    'name_ar' => 'ثاهره القعاد'
                ],
                [
                    'id' => 2115,
                    'country_id' => 1,
                    'external_id' => '167209514',
                    'name_en' => 'Mubari',
                    'name_ar' => 'مباري'
                ],
                [
                    'id' => 2116,
                    'country_id' => 1,
                    'external_id' => '1541245227',
                    'name_en' => 'Halt Al Qaood',
                    'name_ar' => 'حلط القعود'
                ],
                [
                    'id' => 2117,
                    'country_id' => 1,
                    'external_id' => '901425204',
                    'name_en' => 'Thaher Mashhoor',
                    'name_ar' => 'ثاهر مشهور'
                ],
                [
                    'id' => 2118,
                    'country_id' => 1,
                    'external_id' => '126334773',
                    'name_en' => 'Adiyah',
                    'name_ar' => 'عاديه'
                ],
                [
                    'id' => 2119,
                    'country_id' => 1,
                    'external_id' => '1366087222',
                    'name_en' => 'Al Khalefah',
                    'name_ar' => 'الخالفه'
                ],
                [
                    'id' => 2120,
                    'country_id' => 1,
                    'external_id' => '592049463',
                    'name_en' => 'Al Mazreb',
                    'name_ar' => 'المزرب'
                ],
                [
                    'id' => 2121,
                    'country_id' => 1,
                    'external_id' => '2098598960',
                    'name_en' => 'Manhabah',
                    'name_ar' => 'منهبه'
                ],
                [
                    'id' => 2122,
                    'country_id' => 1,
                    'external_id' => '1324561201',
                    'name_en' => 'Almuhtasaa',
                    'name_ar' => 'المحتصى'
                ],
                [
                    'id' => 2123,
                    'country_id' => 1,
                    'external_id' => '416830002',
                    'name_en' => 'Al Dayaa',
                    'name_ar' => 'الضيعه'
                ],
                [
                    'id' => 2124,
                    'country_id' => 1,
                    'external_id' => '1789227315',
                    'name_en' => 'Al Shayh',
                    'name_ar' => 'الشيح'
                ],
                [
                    'id' => 2125,
                    'country_id' => 1,
                    'external_id' => '1149472828',
                    'name_en' => 'Al Ghumalah',
                    'name_ar' => 'الغمله'
                ],
                [
                    'id' => 2126,
                    'country_id' => 1,
                    'external_id' => '375963453',
                    'name_en' => 'Qaber Abuh',
                    'name_ar' => 'قابر ابوه'
                ],
                [
                    'id' => 2127,
                    'country_id' => 1,
                    'external_id' => '1614143038',
                    'name_en' => 'Maran',
                    'name_ar' => 'مرعن'
                ],
                [
                    'id' => 2128,
                    'country_id' => 1,
                    'external_id' => '840105279',
                    'name_en' => 'Kars Kaza',
                    'name_ar' => 'كرس قزع'
                ],
                [
                    'id' => 2129,
                    'country_id' => 1,
                    'external_id' => '268377144',
                    'name_en' => 'Shawhat',
                    'name_ar' => 'شوحط'
                ],
                [
                    'id' => 2130,
                    'country_id' => 1,
                    'external_id' => '1506032441',
                    'name_en' => 'Mathal',
                    'name_ar' => 'مثل'
                ],
                [
                    'id' => 2131,
                    'country_id' => 1,
                    'external_id' => '731994682',
                    'name_en' => 'Ash-Shawraa',
                    'name_ar' => 'الشوراء'
                ],
                [
                    'id' => 2132,
                    'country_id' => 1,
                    'external_id' => '93223227',
                    'name_en' => 'Al Qulaylah',
                    'name_ar' => 'القليله'
                ],
                [
                    'id' => 2133,
                    'country_id' => 1,
                    'external_id' => '1465161732',
                    'name_en' => 'Kadaf Al Hadbaa',
                    'name_ar' => 'كدف الحدباء'
                ],
                [
                    'id' => 2134,
                    'country_id' => 1,
                    'external_id' => '556902149',
                    'name_en' => 'Rbyeuh',
                    'name_ar' => 'ربيعه'
                ],
                [
                    'id' => 2135,
                    'country_id' => 1,
                    'external_id' => '1931396614',
                    'name_en' => 'Mukhayaa',
                    'name_ar' => 'مخايع'
                ],
                [
                    'id' => 2136,
                    'country_id' => 1,
                    'external_id' => '1291576583',
                    'name_en' => 'Bani Zaylaa',
                    'name_ar' => 'بني زيلع'
                ],
                [
                    'id' => 2137,
                    'country_id' => 1,
                    'external_id' => '515900416',
                    'name_en' => 'As-Sabab',
                    'name_ar' => 'الصباب'
                ],
                [
                    'id' => 2138,
                    'country_id' => 1,
                    'external_id' => '1756177153',
                    'name_en' => 'An-Numush',
                    'name_ar' => 'النموش'
                ],
                [
                    'id' => 2139,
                    'country_id' => 1,
                    'external_id' => '982139394',
                    'name_en' => 'Az-Zurqah',
                    'name_ar' => 'الزرقه'
                ],
                [
                    'id' => 2140,
                    'country_id' => 1,
                    'external_id' => '341270787',
                    'name_en' => 'Shurayhah',
                    'name_ar' => 'شريحه'
                ],
                [
                    'id' => 2141,
                    'country_id' => 1,
                    'external_id' => '1715306508',
                    'name_en' => 'Naser Ahmed',
                    'name_ar' => 'ناصر احمد'
                ],
                [
                    'id' => 2142,
                    'country_id' => 1,
                    'external_id' => '807055117',
                    'name_en' => 'At-Taynah',
                    'name_ar' => 'الطينه'
                ],
                [
                    'id' => 2143,
                    'country_id' => 1,
                    'external_id' => '233295374',
                    'name_en' => 'Ghabat Ar-Reyah',
                    'name_ar' => 'غبط الرباح'
                ],
                [
                    'id' => 2144,
                    'country_id' => 1,
                    'external_id' => '1607265551',
                    'name_en' => 'Al Quraythah',
                    'name_ar' => 'القريثه'
                ],
                [
                    'id' => 2145,
                    'country_id' => 1,
                    'external_id' => '698944520',
                    'name_en' => 'Al Mudarbesh',
                    'name_ar' => 'المدربش'
                ],
                [
                    'id' => 2146,
                    'country_id' => 1,
                    'external_id' => '2071341833',
                    'name_en' => 'Al Qatbaa',
                    'name_ar' => 'القطباء'
                ],
                [
                    'id' => 2147,
                    'country_id' => 1,
                    'external_id' => '1431521802',
                    'name_en' => 'Ned Al Lafj',
                    'name_ar' => 'نيد اللفج'
                ],
                [
                    'id' => 2148,
                    'country_id' => 1,
                    'external_id' => '658008331',
                    'name_en' => 'As-Safar',
                    'name_ar' => 'السفار'
                ],
                [
                    'id' => 2149,
                    'country_id' => 1,
                    'external_id' => '1896253460',
                    'name_en' => 'Al Hendeyah',
                    'name_ar' => 'الهنديه'
                ],
                [
                    'id' => 2150,
                    'country_id' => 1,
                    'external_id' => '1122211605',
                    'name_en' => 'Ser Al Qarai',
                    'name_ar' => 'سر القرع'
                ],
                [
                    'id' => 2151,
                    'country_id' => 1,
                    'external_id' => '482915862',
                    'name_en' => 'Al Jawf Al Aala',
                    'name_ar' => 'الجوف الاعلى'
                ],
                [
                    'id' => 2152,
                    'country_id' => 1,
                    'external_id' => '1855313175',
                    'name_en' => 'Al Jarezy',
                    'name_ar' => 'الجريزى'
                ],
                [
                    'id' => 2153,
                    'country_id' => 1,
                    'external_id' => '947057680',
                    'name_en' => 'Ad-Dawh',
                    'name_ar' => 'الدوح'
                ],
                [
                    'id' => 2154,
                    'country_id' => 1,
                    'external_id' => '174002961',
                    'name_en' => 'Alkhayal',
                    'name_ar' => 'الخيال'
                ],
                [
                    'id' => 2155,
                    'country_id' => 1,
                    'external_id' => '1680093714',
                    'name_en' => 'Rahban',
                    'name_ar' => 'رحبان'
                ],
                [
                    'id' => 2156,
                    'country_id' => 1,
                    'external_id' => '906055955',
                    'name_en' => 'Ar-Ramayd',
                    'name_ar' => 'الرمايد'
                ],
                [
                    'id' => 2157,
                    'country_id' => 1,
                    'external_id' => '65957916',
                    'name_en' => 'Al Fawaleqah',
                    'name_ar' => 'الفوالقه'
                ],
                [
                    'id' => 2158,
                    'country_id' => 1,
                    'external_id' => '1572118301',
                    'name_en' => 'Qulet Al Osh',
                    'name_ar' => 'قله العش'
                ],
                [
                    'id' => 2159,
                    'country_id' => 1,
                    'external_id' => '798080542',
                    'name_en' => 'Al Marawi',
                    'name_ar' => 'المراوى'
                ],
                [
                    'id' => 2160,
                    'country_id' => 1,
                    'external_id' => '2038357279',
                    'name_en' => 'Al Mahwa',
                    'name_ar' => 'المحواة'
                ],
                [
                    'id' => 2161,
                    'country_id' => 1,
                    'external_id' => '1264319512',
                    'name_en' => 'Al Maarad',
                    'name_ar' => 'المعرض'
                ],
                [
                    'id' => 2162,
                    'country_id' => 1,
                    'external_id' => '622861081',
                    'name_en' => 'Salam Al Musaqa',
                    'name_ar' => 'سلام المصقع'
                ],
                [
                    'id' => 2163,
                    'country_id' => 1,
                    'external_id' => '1997355546',
                    'name_en' => 'Al Mukanbal',
                    'name_ar' => 'المكنبل'
                ],
                [
                    'id' => 2164,
                    'country_id' => 1,
                    'external_id' => '1089100059',
                    'name_en' => 'Garbah Al Muzawyah',
                    'name_ar' => 'جربه المذاوبه'
                ],
                [
                    'id' => 2165,
                    'country_id' => 1,
                    'external_id' => '314013796',
                    'name_en' => 'Jabal Ruhan',
                    'name_ar' => 'جبل روحان'
                ],
                [
                    'id' => 2166,
                    'country_id' => 1,
                    'external_id' => '1822263141',
                    'name_en' => 'Al Khurmy',
                    'name_ar' => 'الخورمى'
                ],
                [
                    'id' => 2167,
                    'country_id' => 1,
                    'external_id' => '1048225382',
                    'name_en' => 'Althahir',
                    'name_ar' => 'الثهير'
                ],
                [
                    'id' => 2168,
                    'country_id' => 1,
                    'external_id' => '138921319',
                    'name_en' => 'As-Sarran',
                    'name_ar' => 'السران'
                ],
                [
                    'id' => 2169,
                    'country_id' => 1,
                    'external_id' => '1512891488',
                    'name_en' => 'Ser Al Qaryah',
                    'name_ar' => 'سر القرية'
                ],
                [
                    'id' => 2170,
                    'country_id' => 1,
                    'external_id' => '873005921',
                    'name_en' => 'Ar-Rubaah',
                    'name_ar' => 'الرباعه'
                ],
                [
                    'id' => 2171,
                    'country_id' => 1,
                    'external_id' => '30810722',
                    'name_en' => 'Za Al Jandal',
                    'name_ar' => 'ذا الجندل'
                ],
                [
                    'id' => 2172,
                    'country_id' => 1,
                    'external_id' => '1404256611',
                    'name_en' => 'Beit Al Hagogom',
                    'name_ar' => 'بيت الحجوجم'
                ],
                [
                    'id' => 2173,
                    'country_id' => 1,
                    'external_id' => '764960876',
                    'name_en' => 'Quaad At-Temherar',
                    'name_ar' => 'قعاد التيمهرار'
                ],
                [
                    'id' => 2174,
                    'country_id' => 1,
                    'external_id' => '2137427821',
                    'name_en' => 'Ghumar',
                    'name_ar' => 'غمار'
                ],
                [
                    'id' => 2175,
                    'country_id' => 1,
                    'external_id' => '1229172334',
                    'name_en' => 'Ar-Rahrah',
                    'name_ar' => 'الرحرح'
                ],
                [
                    'id' => 2176,
                    'country_id' => 1,
                    'external_id' => '455658863',
                    'name_en' => 'Husayyed',
                    'name_ar' => 'حسيد'
                ],
                [
                    'id' => 2177,
                    'country_id' => 1,
                    'external_id' => '1962273896',
                    'name_en' => 'Al Folooq',
                    'name_ar' => 'الفلوق'
                ],
                [
                    'id' => 2178,
                    'country_id' => 1,
                    'external_id' => '1188170601',
                    'name_en' => 'Ath-Thalabah',
                    'name_ar' => 'الثلابه'
                ],
                [
                    'id' => 2179,
                    'country_id' => 1,
                    'external_id' => '280963690',
                    'name_en' => 'Al Mudmen',
                    'name_ar' => 'المدمن'
                ],
                [
                    'id' => 2180,
                    'country_id' => 1,
                    'external_id' => '1652836715',
                    'name_en' => 'Nyd Aleadii',
                    'name_ar' => 'نيد العادي'
                ],
                [
                    'id' => 2181,
                    'country_id' => 1,
                    'external_id' => '1013016692',
                    'name_en' => 'Al Hatabayah',
                    'name_ar' => 'الحطبايه'
                ],
                [
                    'id' => 2182,
                    'country_id' => 1,
                    'external_id' => '240023413',
                    'name_en' => 'Om Hulayban (Al Khabaei)',
                    'name_ar' => 'ام هليبان (الخباعي)'
                ],
                [
                    'id' => 2183,
                    'country_id' => 1,
                    'external_id' => '1477744246',
                    'name_en' => 'Abo Al Hashafah',
                    'name_ar' => 'ابو الحشافه'
                ],
                [
                    'id' => 2184,
                    'country_id' => 1,
                    'external_id' => '905033079',
                    'name_en' => 'Um Al-Aql and Tashmal',
                    'name_ar' => 'ام العقل وتشمل'
                ],
                [
                    'id' => 2185,
                    'country_id' => 1,
                    'external_id' => '132043888',
                    'name_en' => 'Thaher Al Qaflah',
                    'name_ar' => 'ثاهر القفله'
                ],
                [
                    'id' => 2186,
                    'country_id' => 1,
                    'external_id' => '1371272049',
                    'name_en' => 'Al Ahwash',
                    'name_ar' => 'الاحواش'
                ],
                [
                    'id' => 2187,
                    'country_id' => 1,
                    'external_id' => '595595890',
                    'name_en' => 'Al Mazar',
                    'name_ar' => 'المزار'
                ],
                [
                    'id' => 2188,
                    'country_id' => 1,
                    'external_id' => '2104308083',
                    'name_en' => 'Ar-Rawyah',
                    'name_ar' => 'الروبة'
                ],
                [
                    'id' => 2189,
                    'country_id' => 1,
                    'external_id' => '1330270332',
                    'name_en' => 'Baten Ar-Radha',
                    'name_ar' => 'باطن الردحه'
                ],
                [
                    'id' => 2190,
                    'country_id' => 1,
                    'external_id' => '420970365',
                    'name_en' => 'Lahj Al Kurs',
                    'name_ar' => 'لحج الكرس'
                ],
                [
                    'id' => 2191,
                    'country_id' => 1,
                    'external_id' => '1795006078',
                    'name_en' => 'Al Mahzal',
                    'name_ar' => 'المهزل'
                ],
                [
                    'id' => 2192,
                    'country_id' => 1,
                    'external_id' => '1155186047',
                    'name_en' => 'Almietaf',
                    'name_ar' => 'المعطاف'
                ],
                [
                    'id' => 2193,
                    'country_id' => 1,
                    'external_id' => '380099704',
                    'name_en' => 'Qabr Al-Jariah Um Ghurfah',
                    'name_ar' => 'قبر الجاريه ام غرفه'
                ],
                [
                    'id' => 2194,
                    'country_id' => 1,
                    'external_id' => '1619852153',
                    'name_en' => 'Al Mathal',
                    'name_ar' => 'المطحل'
                ],
                [
                    'id' => 2195,
                    'country_id' => 1,
                    'external_id' => '845748858',
                    'name_en' => 'Al Meslaybah',
                    'name_ar' => 'المصليبه'
                ],
                [
                    'id' => 2196,
                    'country_id' => 1,
                    'external_id' => '204880251',
                    'name_en' => 'Al Muqasem',
                    'name_ar' => 'المقسم'
                ],
                [
                    'id' => 2197,
                    'country_id' => 1,
                    'external_id' => '1578326084',
                    'name_en' => 'As-Saber',
                    'name_ar' => 'الصابر'
                ],
                [
                    'id' => 2198,
                    'country_id' => 1,
                    'external_id' => '737699653',
                    'name_en' => 'Al Maqtaa wa Al Mukhader',
                    'name_ar' => 'المقطع والمخدر'
                ],
                [
                    'id' => 2199,
                    'country_id' => 1,
                    'external_id' => '96896582',
                    'name_en' => 'Qulh Almashrabuh',
                    'name_ar' => 'قله المشربه'
                ],
                [
                    'id' => 2200,
                    'country_id' => 1,
                    'external_id' => '1470342471',
                    'name_en' => 'Al Mukhanjar',
                    'name_ar' => 'المخنجر'
                ],
                [
                    'id' => 2201,
                    'country_id' => 1,
                    'external_id' => '562611264',
                    'name_en' => 'Al Ola',
                    'name_ar' => 'العلى'
                ],
                [
                    'id' => 2202,
                    'country_id' => 1,
                    'external_id' => '1935008577',
                    'name_en' => 'Halban ',
                    'name_ar' => 'حلبان'
                ],
                [
                    'id' => 2203,
                    'country_id' => 1,
                    'external_id' => '1295123010',
                    'name_en' => 'Aqwa',
                    'name_ar' => 'عكوه'
                ],
                [
                    'id' => 2204,
                    'country_id' => 1,
                    'external_id' => '522133827',
                    'name_en' => 'As-Senan',
                    'name_ar' => 'السنان'
                ],
                [
                    'id' => 2205,
                    'country_id' => 1,
                    'external_id' => '1759789132',
                    'name_en' => 'As-Sahsah',
                    'name_ar' => 'الصحصح'
                ],
                [
                    'id' => 2206,
                    'country_id' => 1,
                    'external_id' => '985755469',
                    'name_en' => 'Al Mukhader',
                    'name_ar' => 'المخدر'
                ],
                [
                    'id' => 2207,
                    'country_id' => 1,
                    'external_id' => '347049550',
                    'name_en' => 'Al Fuqarah As-Sufla',
                    'name_ar' => 'الفقاره السفلى'
                ],
                [
                    'id' => 2208,
                    'country_id' => 1,
                    'external_id' => '1718922575',
                    'name_en' => 'Qahd',
                    'name_ar' => 'قهد'
                ],
                [
                    'id' => 2209,
                    'country_id' => 1,
                    'external_id' => '810667080',
                    'name_en' => 'Al Muzaraa',
                    'name_ar' => 'المزراء'
                ],
                [
                    'id' => 2210,
                    'country_id' => 1,
                    'external_id' => '37677897',
                    'name_en' => 'Al Mahlabah',
                    'name_ar' => 'المحلبه'
                ],
                [
                    'id' => 2211,
                    'country_id' => 1,
                    'external_id' => '1545275978',
                    'name_en' => 'Al Mutharthar',
                    'name_ar' => 'المثرثر'
                ],
                [
                    'id' => 2212,
                    'country_id' => 1,
                    'external_id' => '702556491',
                    'name_en' => 'Al Athrarah',
                    'name_ar' => 'الاثراره'
                ],
                [
                    'id' => 2213,
                    'country_id' => 1,
                    'external_id' => '2077050964',
                    'name_en' => 'Ned Al Weed',
                    'name_ar' => 'نيد الوبد'
                ],
                [
                    'id' => 2214,
                    'country_id' => 1,
                    'external_id' => '1437226837',
                    'name_en' => 'Al Qumaan',
                    'name_ar' => 'القمعان'
                ],
                [
                    'id' => 2215,
                    'country_id' => 1,
                    'external_id' => '662140502',
                    'name_en' => 'Ad-Dafeef',
                    'name_ar' => 'الدفيف'
                ],
                [
                    'id' => 2216,
                    'country_id' => 1,
                    'external_id' => '1901958487',
                    'name_en' => 'Al Thaghan',
                    'name_ar' => 'الثغن'
                ],
                [
                    'id' => 2217,
                    'country_id' => 1,
                    'external_id' => '1127920720',
                    'name_en' => 'Meashash',
                    'name_ar' => 'معشاش'
                ],
                [
                    'id' => 2218,
                    'country_id' => 1,
                    'external_id' => '487052113',
                    'name_en' => 'Aurdah',
                    'name_ar' => 'عرضه'
                ],
                [
                    'id' => 2219,
                    'country_id' => 1,
                    'external_id' => '1861022290',
                    'name_en' => 'Qarn Subaykha',
                    'name_ar' => 'قرن صبيخه'
                ],
                [
                    'id' => 2220,
                    'country_id' => 1,
                    'external_id' => '952701267',
                    'name_en' => 'Al Bahr',
                    'name_ar' => 'البحر'
                ],
                [
                    'id' => 2221,
                    'country_id' => 1,
                    'external_id' => '177614940',
                    'name_en' => 'Hayd Marjaa',
                    'name_ar' => 'حيد مرجع'
                ],
                [
                    'id' => 2222,
                    'country_id' => 1,
                    'external_id' => '1685282653',
                    'name_en' => 'Al Kadami',
                    'name_ar' => 'الكدمي'
                ],
                [
                    'id' => 2223,
                    'country_id' => 1,
                    'external_id' => '911769182',
                    'name_en' => 'Al Mezaafat',
                    'name_ar' => 'المزعفط'
                ],
                [
                    'id' => 2224,
                    'country_id' => 1,
                    'external_id' => '2530655',
                    'name_en' => 'Qulet Ash-Sharaf',
                    'name_ar' => 'قله الشرف'
                ],
                [
                    'id' => 2225,
                    'country_id' => 1,
                    'external_id' => '1375976536',
                    'name_en' => 'Ath-Thaheren',
                    'name_ar' => 'الثاهرين'
                ],
                [
                    'id' => 2226,
                    'country_id' => 1,
                    'external_id' => '803789657',
                    'name_en' => 'Thaher Om Gatham',
                    'name_ar' => 'ثاهر ام جذم'
                ],
                [
                    'id' => 2227,
                    'country_id' => 1,
                    'external_id' => '2041969242',
                    'name_en' => 'Abo Om Nakhlah',
                    'name_ar' => 'ابو ام نخله'
                ],
                [
                    'id' => 2228,
                    'country_id' => 1,
                    'external_id' => '1267865947',
                    'name_en' => 'Al Mawhebah',
                    'name_ar' => 'الموهبه'
                ],
                [
                    'id' => 2229,
                    'country_id' => 1,
                    'external_id' => '629090212',
                    'name_en' => 'An-Namayesh',
                    'name_ar' => 'النمايش'
                ],
                [
                    'id' => 2230,
                    'country_id' => 1,
                    'external_id' => '2000963237',
                    'name_en' => 'Al Quwayrah',
                    'name_ar' => 'القويره'
                ],
                [
                    'id' => 2231,
                    'country_id' => 1,
                    'external_id' => '1092707750',
                    'name_en' => 'Az-Zarwah',
                    'name_ar' => 'الذروه'
                ],
                [
                    'id' => 2232,
                    'country_id' => 1,
                    'external_id' => '319784103',
                    'name_en' => 'Wadi Dafa The Northern Region   \'Iimarih Dafa Center\'',
                    'name_ar' => 'وادي دفا الجزء الشمالي ـ مركز إماره دفاء'
                ],
                [
                    'id' => 2233,
                    'country_id' => 1,
                    'external_id' => '1825874848',
                    'name_en' => 'Al Hefnah (Malqatah)',
                    'name_ar' => 'الحفنه (ملقطه)'
                ],
                [
                    'id' => 2234,
                    'country_id' => 1,
                    'external_id' => '1051837089',
                    'name_en' => 'Rasfat',
                    'name_ar' => 'رصفات'
                ],
                [
                    'id' => 2235,
                    'country_id' => 1,
                    'external_id' => '144630178',
                    'name_en' => 'Lahj Al Qaraah',
                    'name_ar' => 'لحج القرعه'
                ],
                [
                    'id' => 2236,
                    'country_id' => 1,
                    'external_id' => '1518010531',
                    'name_en' => 'Ar-Rubayed',
                    'name_ar' => 'الربيض'
                ],
                [
                    'id' => 2237,
                    'country_id' => 1,
                    'external_id' => '876621740',
                    'name_en' => 'Hafedh',
                    'name_ar' => 'حافظ'
                ],
                [
                    'id' => 2238,
                    'country_id' => 1,
                    'external_id' => '103632557',
                    'name_en' => 'Mazam Barakah',
                    'name_ar' => 'مزم بركه'
                ],
                [
                    'id' => 2239,
                    'country_id' => 1,
                    'external_id' => '1342860718',
                    'name_en' => 'Meftah',
                    'name_ar' => 'مفطاح'
                ],
                [
                    'id' => 2240,
                    'country_id' => 1,
                    'external_id' => '768642223',
                    'name_en' => 'Jaeirah',
                    'name_ar' => 'جعيره'
                ],
                [
                    'id' => 2241,
                    'country_id' => 1,
                    'external_id' => '2143136680',
                    'name_en' => 'Cham',
                    'name_ar' => 'تشام'
                ],
                [
                    'id' => 2242,
                    'country_id' => 1,
                    'external_id' => '1234881193',
                    'name_en' => 'Quaad Al Nafash',
                    'name_ar' => 'قعاد النفش'
                ],
                [
                    'id' => 2243,
                    'country_id' => 1,
                    'external_id' => '459794858',
                    'name_en' => 'Hubayel Al Qashbaa',
                    'name_ar' => 'حبيل القشباء'
                ],
                [
                    'id' => 2244,
                    'country_id' => 1,
                    'external_id' => '1967917227',
                    'name_en' => 'dhaher Al Ady',
                    'name_ar' => 'ظاهر العادى'
                ],
                [
                    'id' => 2245,
                    'country_id' => 1,
                    'external_id' => '1193875380',
                    'name_en' => 'Al Qulah Al Buqaa',
                    'name_ar' => 'القله البقعه'
                ],
                [
                    'id' => 2246,
                    'country_id' => 1,
                    'external_id' => '284571317',
                    'name_en' => 'Al Kedyah',
                    'name_ar' => 'الكديه'
                ],
                [
                    'id' => 2247,
                    'country_id' => 1,
                    'external_id' => '1658017206',
                    'name_en' => 'Al Lasab',
                    'name_ar' => 'اللصب'
                ],
                [
                    'id' => 2248,
                    'country_id' => 1,
                    'external_id' => '1018721463',
                    'name_en' => 'Ad-Dahaya',
                    'name_ar' => 'الضهاية'
                ],
                [
                    'id' => 2249,
                    'country_id' => 1,
                    'external_id' => '243700656',
                    'name_en' => 'Almajlis',
                    'name_ar' => 'المجلس'
                ],
                [
                    'id' => 2250,
                    'country_id' => 1,
                    'external_id' => '1482928817',
                    'name_en' => 'Al Mahraqah',
                    'name_ar' => 'المحرقه'
                ],
                [
                    'id' => 2251,
                    'country_id' => 1,
                    'external_id' => '709415346',
                    'name_en' => 'Az-Zaraybah',
                    'name_ar' => 'الزريبه'
                ],
                [
                    'id' => 2252,
                    'country_id' => 1,
                    'external_id' => '68546739',
                    'name_en' => 'Tanadeh - Al Qashab',
                    'name_ar' => 'تنادح ـ القشب'
                ],
                [
                    'id' => 2253,
                    'country_id' => 1,
                    'external_id' => '1374822332',
                    'name_en' => 'Nid Khamash',
                    'name_ar' => 'نيد خماش'
                ],
                [
                    'id' => 2254,
                    'country_id' => 1,
                    'external_id' => '601833149',
                    'name_en' => 'Dayrah',
                    'name_ar' => 'ضيره'
                ],
                [
                    'id' => 2255,
                    'country_id' => 1,
                    'external_id' => '2107923902',
                    'name_en' => 'Hubayel Hasanah',
                    'name_ar' => 'حبيل حسنه'
                ],
                [
                    'id' => 2256,
                    'country_id' => 1,
                    'external_id' => '1333886143',
                    'name_en' => 'Abo Adh-dhabrah',
                    'name_ar' => 'ابو الظبره'
                ],
                [
                    'id' => 2257,
                    'country_id' => 1,
                    'external_id' => '426744760',
                    'name_en' => 'Al Abdalyah',
                    'name_ar' => 'العبدليه'
                ],
                [
                    'id' => 2258,
                    'country_id' => 1,
                    'external_id' => '1798617785',
                    'name_en' => 'Al Mudardab',
                    'name_ar' => 'المدردب'
                ],
                [
                    'id' => 2259,
                    'country_id' => 1,
                    'external_id' => '1158797754',
                    'name_en' => 'Al Quzaa',
                    'name_ar' => 'القزاع'
                ],
                [
                    'id' => 2260,
                    'country_id' => 1,
                    'external_id' => '385808571',
                    'name_en' => 'As-Sawh',
                    'name_ar' => 'الصوح'
                ],
                [
                    'id' => 2261,
                    'country_id' => 1,
                    'external_id' => '1624967044',
                    'name_en' => 'Al Waqlaa',
                    'name_ar' => 'الوقلاء'
                ],
                [
                    'id' => 2262,
                    'country_id' => 1,
                    'external_id' => '849356421',
                    'name_en' => 'Muthayaa',
                    'name_ar' => 'متهياء'
                ],
                [
                    'id' => 2263,
                    'country_id' => 1,
                    'external_id' => '210584966',
                    'name_en' => 'Qulet As-Sateeh',
                    'name_ar' => 'قله السطيح'
                ],
                [
                    'id' => 2264,
                    'country_id' => 1,
                    'external_id' => '1584030855',
                    'name_en' => 'Al Mekhrajah',
                    'name_ar' => 'المخراجه'
                ],
                [
                    'id' => 2265,
                    'country_id' => 1,
                    'external_id' => '674268032',
                    'name_en' => 'Hubayel Hazaf',
                    'name_ar' => 'حبيل هزف'
                ],
                [
                    'id' => 2266,
                    'country_id' => 1,
                    'external_id' => '2048762497',
                    'name_en' => 'Alhuratha\'',
                    'name_ar' => 'الحرثاء'
                ],
                [
                    'id' => 2267,
                    'country_id' => 1,
                    'external_id' => '1476051330',
                    'name_en' => 'Hasheem',
                    'name_ar' => 'هشيم'
                ],
                [
                    'id' => 2268,
                    'country_id' => 1,
                    'external_id' => '566747267',
                    'name_en' => 'Al Areef',
                    'name_ar' => 'العريف'
                ],
                [
                    'id' => 2269,
                    'country_id' => 1,
                    'external_id' => '1940656012',
                    'name_en' => 'Khatwet Om Nasr',
                    'name_ar' => 'خطوه ام نصر'
                ],
                [
                    'id' => 2270,
                    'country_id' => 1,
                    'external_id' => '1300835981',
                    'name_en' => 'Ar-Razenah',
                    'name_ar' => 'الرزينه'
                ],
                [
                    'id' => 2271,
                    'country_id' => 1,
                    'external_id' => '525749646',
                    'name_en' => 'Thaher Atwan',
                    'name_ar' => 'ثاهر عطوان'
                ],
                [
                    'id' => 2272,
                    'country_id' => 1,
                    'external_id' => '1764977807',
                    'name_en' => 'Thara',
                    'name_ar' => 'ذراع'
                ],
                [
                    'id' => 2273,
                    'country_id' => 1,
                    'external_id' => '991529864',
                    'name_en' => 'Qarn Al Duwaisha',
                    'name_ar' => 'قرن الدويشاء'
                ],
                [
                    'id' => 2274,
                    'country_id' => 1,
                    'external_id' => '350661257',
                    'name_en' => 'Thaher Shatyah',
                    'name_ar' => 'ثاهر شطيه'
                ],
                [
                    'id' => 2275,
                    'country_id' => 1,
                    'external_id' => '1724107146',
                    'name_en' => 'As-Saha',
                    'name_ar' => 'السحا'
                ],
                [
                    'id' => 2276,
                    'country_id' => 1,
                    'external_id' => '816375947',
                    'name_en' => 'Qulet An-Naydayn',
                    'name_ar' => 'قله النيدين'
                ],
                [
                    'id' => 2277,
                    'country_id' => 1,
                    'external_id' => '41285524',
                    'name_en' => 'Almshbh',
                    'name_ar' => 'المشبه'
                ],
                [
                    'id' => 2278,
                    'country_id' => 1,
                    'external_id' => '1548883605',
                    'name_en' => 'Khasasah',
                    'name_ar' => 'خصاصة'
                ],
                [
                    'id' => 2279,
                    'country_id' => 1,
                    'external_id' => '775894422',
                    'name_en' => 'Wadi Gabhah',
                    'name_ar' => 'وادى جبحه'
                ],
                [
                    'id' => 2280,
                    'country_id' => 1,
                    'external_id' => '2013549719',
                    'name_en' => 'Qaryet Tashwyah',
                    'name_ar' => 'قريه تشوية'
                ],
                [
                    'id' => 2281,
                    'country_id' => 1,
                    'external_id' => '1440838544',
                    'name_en' => 'Thaher Al Muntadal',
                    'name_ar' => 'ثاهر المنتدل'
                ],
                [
                    'id' => 2282,
                    'country_id' => 1,
                    'external_id' => '667914897',
                    'name_en' => 'Al Maasoor',
                    'name_ar' => 'المعصور'
                ],
                [
                    'id' => 2283,
                    'country_id' => 1,
                    'external_id' => '1905570194',
                    'name_en' => 'Qulah Qashaa',
                    'name_ar' => 'قله قشع'
                ],
                [
                    'id' => 2284,
                    'country_id' => 1,
                    'external_id' => '1131532435',
                    'name_en' => 'Thaher Muhnah',
                    'name_ar' => 'ثاهر محنه'
                ],
                [
                    'id' => 2285,
                    'country_id' => 1,
                    'external_id' => '492765084',
                    'name_en' => 'Al Makhal',
                    'name_ar' => 'المكحل'
                ],
                [
                    'id' => 2286,
                    'country_id' => 1,
                    'external_id' => '1866145437',
                    'name_en' => 'Al Huzyer',
                    'name_ar' => 'الحذير'
                ],
                [
                    'id' => 2287,
                    'country_id' => 1,
                    'external_id' => '956317086',
                    'name_en' => 'Khalf Al-Salb Jamimah',
                    'name_ar' => 'خلف السلب جميمه'
                ],
                [
                    'id' => 2288,
                    'country_id' => 1,
                    'external_id' => '183327903',
                    'name_en' => 'Al Harash',
                    'name_ar' => 'الحرش'
                ],
                [
                    'id' => 2289,
                    'country_id' => 1,
                    'external_id' => '1690991512',
                    'name_en' => 'Kheran',
                    'name_ar' => 'خيران'
                ],
                [
                    'id' => 2290,
                    'country_id' => 1,
                    'external_id' => '915446425',
                    'name_en' => 'Al-Hadrah',
                    'name_ar' => 'الهدره'
                ],
                [
                    'id' => 2291,
                    'country_id' => 1,
                    'external_id' => '8239514',
                    'name_en' => 'Mashaher',
                    'name_ar' => 'مشاحر'
                ],
                [
                    'id' => 2292,
                    'country_id' => 1,
                    'external_id' => '1381685403',
                    'name_en' => 'Ar-Rakham',
                    'name_ar' => 'الرخم'
                ],
                [
                    'id' => 2293,
                    'country_id' => 1,
                    'external_id' => '740812772',
                    'name_en' => 'Station of Al Mekhlaf',
                    'name_ar' => 'محطة المخلاف'
                ],
                [
                    'id' => 2294,
                    'country_id' => 1,
                    'external_id' => '2114717413',
                    'name_en' => 'Al Mughayrat',
                    'name_ar' => 'المغيرات'
                ],
                [
                    'id' => 2295,
                    'country_id' => 1,
                    'external_id' => '1273570790',
                    'name_en' => 'Shata',
                    'name_ar' => 'شثا'
                ],
                [
                    'id' => 2296,
                    'country_id' => 1,
                    'external_id' => '632702183',
                    'name_en' => 'Um Fahrah',
                    'name_ar' => 'ام فهرة'
                ],
                [
                    'id' => 2297,
                    'country_id' => 1,
                    'external_id' => '2006148064',
                    'name_en' => 'Afoor',
                    'name_ar' => 'عفور'
                ],
                [
                    'id' => 2298,
                    'country_id' => 1,
                    'external_id' => '1098482401',
                    'name_en' => 'Al Aaras',
                    'name_ar' => 'الاعراس'
                ],
                [
                    'id' => 2299,
                    'country_id' => 1,
                    'external_id' => '323396066',
                    'name_en' => 'Qarn Abu Adnah',
                    'name_ar' => 'قرن ابو عدنه'
                ],
                [
                    'id' => 2300,
                    'country_id' => 1,
                    'external_id' => '1831059683',
                    'name_en' => 'Al Makhraf',
                    'name_ar' => 'المخرف'
                ],
                [
                    'id' => 2301,
                    'country_id' => 1,
                    'external_id' => '1057550316',
                    'name_en' => 'Al Gahfa Al Olyah',
                    'name_ar' => 'الحجفه العليا'
                ],
                [
                    'id' => 2302,
                    'country_id' => 1,
                    'external_id' => '148180717',
                    'name_en' => 'Al Hagwa and Al Modoor',
                    'name_ar' => 'الحجوه والمدور'
                ],
                [
                    'id' => 2303,
                    'country_id' => 1,
                    'external_id' => '1521626606',
                    'name_en' => 'As-Sadah At-Tarraf',
                    'name_ar' => 'الصده  الطرف'
                ],
                [
                    'id' => 2304,
                    'country_id' => 1,
                    'external_id' => '882855151',
                    'name_en' => 'An-Naqaa',
                    'name_ar' => 'النقع'
                ],
                [
                    'id' => 2305,
                    'country_id' => 1,
                    'external_id' => '107244520',
                    'name_en' => 'Al Mosaqa',
                    'name_ar' => 'المصقع'
                ],
                [
                    'id' => 2306,
                    'country_id' => 1,
                    'external_id' => '1346538217',
                    'name_en' => 'Maashi',
                    'name_ar' => 'معشى'
                ],
                [
                    'id' => 2307,
                    'country_id' => 1,
                    'external_id' => '573549034',
                    'name_en' => 'Al Masbah',
                    'name_ar' => 'المسبح'
                ],
                [
                    'id' => 2308,
                    'country_id' => 1,
                    'external_id' => '2146748651',
                    'name_en' => 'Al Amerah Al Olyah (Al Kharabah)',
                    'name_ar' => 'العامره العليا (الخرابه)'
                ],
                [
                    'id' => 2309,
                    'country_id' => 1,
                    'external_id' => '1238489076',
                    'name_en' => 'Al-Dhaher',
                    'name_ar' => 'الظاهر'
                ],
                [
                    'id' => 2310,
                    'country_id' => 1,
                    'external_id' => '465499893',
                    'name_en' => 'Hayjet Barrak',
                    'name_ar' => 'هيجه براك'
                ],
                [
                    'id' => 2311,
                    'country_id' => 1,
                    'external_id' => '632702183',
                    'name_en' => 'Um Fahrah',
                    'name_ar' => 'ام فهرة'
                ],
                [
                    'id' => 2312,
                    'country_id' => 1,
                    'external_id' => '2006148064',
                    'name_en' => 'Afoor',
                    'name_ar' => 'عفور'
                ],
                [
                    'id' => 2313,
                    'country_id' => 1,
                    'external_id' => '1098482401',
                    'name_en' => 'Al Aaras',
                    'name_ar' => 'الاعراس'
                ],
                [
                    'id' => 2314,
                    'country_id' => 1,
                    'external_id' => '323396066',
                    'name_en' => 'Qarn Abu Adnah',
                    'name_ar' => 'قرن ابو عدنه'
                ],
                [
                    'id' => 2315,
                    'country_id' => 1,
                    'external_id' => '1831059683',
                    'name_en' => 'Al Makhraf',
                    'name_ar' => 'المخرف'
                ],
                [
                    'id' => 2316,
                    'country_id' => 1,
                    'external_id' => '1057550316',
                    'name_en' => 'Al Gahfa Al Olyah',
                    'name_ar' => 'الحجفه العليا'
                ],
                [
                    'id' => 2317,
                    'country_id' => 1,
                    'external_id' => '148180717',
                    'name_en' => 'Al Hagwa and Al Modoor',
                    'name_ar' => 'الحجوه والمدور'
                ],
                [
                    'id' => 2318,
                    'country_id' => 1,
                    'external_id' => '1521626606',
                    'name_en' => 'As-Sadah At-Tarraf',
                    'name_ar' => 'الصده  الطرف'
                ],
                [
                    'id' => 2319,
                    'country_id' => 1,
                    'external_id' => '882855151',
                    'name_en' => 'An-Naqaa',
                    'name_ar' => 'النقع'
                ],
                [
                    'id' => 2320,
                    'country_id' => 1,
                    'external_id' => '107244520',
                    'name_en' => 'Al Mosaqa',
                    'name_ar' => 'المصقع'
                ],
                [
                    'id' => 2321,
                    'country_id' => 1,
                    'external_id' => '1346538217',
                    'name_en' => 'Maashi',
                    'name_ar' => 'معشى'
                ],
                [
                    'id' => 2322,
                    'country_id' => 1,
                    'external_id' => '573549034',
                    'name_en' => 'Al Masbah',
                    'name_ar' => 'المسبح'
                ],
                [
                    'id' => 2323,
                    'country_id' => 1,
                    'external_id' => '2146748651',
                    'name_en' => 'Al Amerah Al Olyah (Al Kharabah)',
                    'name_ar' => 'العامره العليا (الخرابه)'
                ],
                [
                    'id' => 2324,
                    'country_id' => 1,
                    'external_id' => '1238489076',
                    'name_en' => 'Al-Dhaher',
                    'name_ar' => 'الظاهر'
                ],
                [
                    'id' => 2325,
                    'country_id' => 1,
                    'external_id' => '465499893',
                    'name_en' => 'Hayjet Barrak',
                    'name_ar' => 'هيجه براك'
                ],
                [
                    'id' => 2326,
                    'country_id' => 1,
                    'external_id' => '1973097974',
                    'name_en' => 'Al Quwasi',
                    'name_ar' => 'القواسى'
                ],
                [
                    'id' => 2327,
                    'country_id' => 1,
                    'external_id' => '1197487351',
                    'name_en' => 'Al Saru',
                    'name_ar' => 'الصرو'
                ],
                [
                    'id' => 2328,
                    'country_id' => 1,
                    'external_id' => '290280432',
                    'name_en' => 'Thaher Barqan',
                    'name_ar' => 'ثاهر برقان'
                ],
                [
                    'id' => 2329,
                    'country_id' => 1,
                    'external_id' => '1663726321',
                    'name_en' => 'Mawaqei',
                    'name_ar' => 'مواقع'
                ],
                [
                    'id' => 2330,
                    'country_id' => 1,
                    'external_id' => '1022398962',
                    'name_en' => 'Zat Shebr',
                    'name_ar' => 'ذات شبر'
                ],
                [
                    'id' => 2331,
                    'country_id' => 1,
                    'external_id' => '249409779',
                    'name_en' => 'Al Kharqa',
                    'name_ar' => 'الخرقا'
                ],
                [
                    'id' => 2332,
                    'country_id' => 1,
                    'external_id' => '1488642044',
                    'name_en' => 'Thaher Al Quwei',
                    'name_ar' => 'ثاهر القوبع'
                ],
                [
                    'id' => 2333,
                    'country_id' => 1,
                    'external_id' => '713555709',
                    'name_en' => 'Al Baytaryah',
                    'name_ar' => 'البيطاريه'
                ],
                [
                    'id' => 2334,
                    'country_id' => 1,
                    'external_id' => '74194430',
                    'name_en' => 'Al Washaya',
                    'name_ar' => 'الوشايا'
                ],
                [
                    'id' => 2335,
                    'country_id' => 1,
                    'external_id' => '1447640319',
                    'name_en' => 'Al Mehras',
                    'name_ar' => 'المحرص'
                ],
                [
                    'id' => 2336,
                    'country_id' => 1,
                    'external_id' => '538336248',
                    'name_en' => 'Damnah Zahab Al Hatr',
                    'name_ar' => 'دمنه زهب الحتر'
                ],
                [
                    'id' => 2337,
                    'country_id' => 1,
                    'external_id' => '2113108729',
                    'name_en' => 'Al Awrak',
                    'name_ar' => 'الاوراك'
                ],
                [
                    'id' => 2338,
                    'country_id' => 1,
                    'external_id' => '1339660794',
                    'name_en' => 'Mushawad',
                    'name_ar' => 'مشعود'
                ],
                [
                    'id' => 2339,
                    'country_id' => 1,
                    'external_id' => '430356731',
                    'name_en' => 'Thuabah',
                    'name_ar' => 'ثعابه'
                ],
                [
                    'id' => 2340,
                    'country_id' => 1,
                    'external_id' => '1803798468',
                    'name_en' => 'Ner Al Quraah',
                    'name_ar' => 'نيد القرعه'
                ],
                [
                    'id' => 2341,
                    'country_id' => 1,
                    'external_id' => '1164502725',
                    'name_en' => 'Al Jabal Al Asfal Ash-Sharha',
                    'name_ar' => 'الجبل الاسفل   الشرحا'
                ],
                [
                    'id' => 2342,
                    'country_id' => 1,
                    'external_id' => '389350854',
                    'name_en' => 'Alkharshuh',
                    'name_ar' => 'الخرشه'
                ],
                [
                    'id' => 2343,
                    'country_id' => 1,
                    'external_id' => '1628579015',
                    'name_en' => 'Sai Al Razm',
                    'name_ar' => 'سعي الرزم'
                ],
                [
                    'id' => 2344,
                    'country_id' => 1,
                    'external_id' => '855589824',
                    'name_en' => 'Mahreq Al Jub',
                    'name_ar' => 'محرق الجب'
                ],
                [
                    'id' => 2345,
                    'country_id' => 1,
                    'external_id' => '214196929',
                    'name_en' => 'Aqwa Balmaheed',
                    'name_ar' => 'عكوه باالمهيد'
                ],
                [
                    'id' => 2346,
                    'country_id' => 1,
                    'external_id' => '1587708354',
                    'name_en' => 'Hamad Sagheer',
                    'name_ar' => 'حمد صغير'
                ],
                [
                    'id' => 2347,
                    'country_id' => 1,
                    'external_id' => '680501443',
                    'name_en' => 'Ad-Dawaer',
                    'name_ar' => 'الدوائر'
                ],
                [
                    'id' => 2348,
                    'country_id' => 1,
                    'external_id' => '2052378572',
                    'name_en' => 'Thaher Ar-Rakhi',
                    'name_ar' => 'ثاهر الراخى'
                ],
                [
                    'id' => 2349,
                    'country_id' => 1,
                    'external_id' => '1412558541',
                    'name_en' => 'Belad Afyeh',
                    'name_ar' => 'بلاد عافيه'
                ],
                [
                    'id' => 2350,
                    'country_id' => 1,
                    'external_id' => '639503822',
                    'name_en' => 'Al Jawfaa',
                    'name_ar' => 'الجوفاء'
                ],
                [
                    'id' => 2351,
                    'country_id' => 1,
                    'external_id' => '1945840847',
                    'name_en' => 'Al Mudhlem',
                    'name_ar' => 'المظلم'
                ],
                [
                    'id' => 2352,
                    'country_id' => 1,
                    'external_id' => '531458761',
                    'name_en' => 'Bathan Al Asfal',
                    'name_ar' => 'بطحان الآسفل'
                ],
                [
                    'id' => 2353,
                    'country_id' => 1,
                    'external_id' => '1770752458',
                    'name_en' => 'Al Muhannab',
                    'name_ar' => 'المحنب'
                ],
                [
                    'id' => 2354,
                    'country_id' => 1,
                    'external_id' => '995141835',
                    'name_en' => 'Zeraa As-Salabah',
                    'name_ar' => 'ذراع الصلبه'
                ],
                [
                    'id' => 2355,
                    'country_id' => 1,
                    'external_id' => '356366292',
                    'name_en' => 'Al Lahuj',
                    'name_ar' => 'اللحوج'
                ],
                [
                    'id' => 2356,
                    'country_id' => 1,
                    'external_id' => '1729812181',
                    'name_en' => 'Al Qanadir',
                    'name_ar' => 'القنادر'
                ],
                [
                    'id' => 2357,
                    'country_id' => 1,
                    'external_id' => '820508118',
                    'name_en' => 'Zeraa Ath-Thabarah',
                    'name_ar' => 'ذراع الثبرة'
                ],
                [
                    'id' => 2358,
                    'country_id' => 1,
                    'external_id' => '46929111',
                    'name_en' => 'Al Malahi',
                    'name_ar' => 'الملاحى'
                ],
                [
                    'id' => 2359,
                    'country_id' => 1,
                    'external_id' => '1554592720',
                    'name_en' => 'Khalefah Om Jabr',
                    'name_ar' => 'خالفه ام جبر'
                ],
                [
                    'id' => 2360,
                    'country_id' => 1,
                    'external_id' => '779506385',
                    'name_en' => 'Al Barami',
                    'name_ar' => 'البرامى'
                ],
                [
                    'id' => 2361,
                    'country_id' => 1,
                    'external_id' => '2018734546',
                    'name_en' => 'Othman Kharmi',
                    'name_ar' => 'عثمان خرمى'
                ],
                [
                    'id' => 2362,
                    'country_id' => 1,
                    'external_id' => '1245286611',
                    'name_en' => 'Al Hawraa',
                    'name_ar' => 'الحوراء'
                ],
                [
                    'id' => 2363,
                    'country_id' => 1,
                    'external_id' => '604422108',
                    'name_en' => 'Ser Al Baraa',
                    'name_ar' => 'سرالبراء'
                ],
                [
                    'id' => 2364,
                    'country_id' => 1,
                    'external_id' => '1910759133',
                    'name_en' => 'Al Luhazem',
                    'name_ar' => 'اللهازم'
                ],
                [
                    'id' => 2365,
                    'country_id' => 1,
                    'external_id' => '1137245662',
                    'name_en' => 'Ambaqem Al Aalah',
                    'name_ar' => 'امباقم الاعلى'
                ],
                [
                    'id' => 2366,
                    'country_id' => 1,
                    'external_id' => '496311519',
                    'name_en' => 'Al Maqtaah',
                    'name_ar' => 'المقطعه'
                ],
                [
                    'id' => 2367,
                    'country_id' => 1,
                    'external_id' => '1869757400',
                    'name_en' => 'Al Khatim',
                    'name_ar' => 'الخطيم'
                ],
                [
                    'id' => 2368,
                    'country_id' => 1,
                    'external_id' => '962550489',
                    'name_en' => 'Mugarab Aylan',
                    'name_ar' => 'مجرب عيلان'
                ],
                [
                    'id' => 2369,
                    'country_id' => 1,
                    'external_id' => '186939866',
                    'name_en' => 'Az-Zawzaa',
                    'name_ar' => 'الزوزاء'
                ],
                [
                    'id' => 2370,
                    'country_id' => 1,
                    'external_id' => '1694669019',
                    'name_en' => 'Lahj Hathol',
                    'name_ar' => 'لحج حثول'
                ],
                [
                    'id' => 2371,
                    'country_id' => 1,
                    'external_id' => '921675556',
                    'name_en' => 'Hayd Qabarah',
                    'name_ar' => 'حيد قباره'
                ],
                [
                    'id' => 2372,
                    'country_id' => 1,
                    'external_id' => '11847205',
                    'name_en' => 'Abo Al Mad',
                    'name_ar' => 'أبو المض'
                ],
                [
                    'id' => 2373,
                    'country_id' => 1,
                    'external_id' => '1385293094',
                    'name_en' => 'As-Suqaib',
                    'name_ar' => 'السقيب'
                ],
                [
                    'id' => 2374,
                    'country_id' => 1,
                    'external_id' => '746456103',
                    'name_en' => 'Al Gunah',
                    'name_ar' => 'الجناه'
                ],
                [
                    'id' => 2375,
                    'country_id' => 1,
                    'external_id' => '2119901984',
                    'name_en' => 'Za Muyad',
                    'name_ar' => 'ذا موباد'
                ],
                [
                    'id' => 2376,
                    'country_id' => 1,
                    'external_id' => '1210073633',
                    'name_en' => 'Thaher Rafaan',
                    'name_ar' => 'ثاهر رفعان'
                ],
                [
                    'id' => 2377,
                    'country_id' => 1,
                    'external_id' => '437084450',
                    'name_en' => 'Al-Zubarah',
                    'name_ar' => 'الزبارة'
                ],
                [
                    'id' => 2378,
                    'country_id' => 1,
                    'external_id' => '2011922467',
                    'name_en' => 'Ned Al-Thubayer',
                    'name_ar' => 'نيد الثبير'
                ],
                [
                    'id' => 2379,
                    'country_id' => 1,
                    'external_id' => '1102098220',
                    'name_en' => 'Thaher Al Ghadir',
                    'name_ar' => 'ثاهر الغدير'
                ],
                [
                    'id' => 2380,
                    'country_id' => 1,
                    'external_id' => '329109037',
                    'name_en' => 'Hed Waghrah',
                    'name_ar' => 'حيد وغره'
                ],
                [
                    'id' => 2381,
                    'country_id' => 1,
                    'external_id' => '1836772654',
                    'name_en' => 'Al Sharjah',
                    'name_ar' => 'الشرجة'
                ],
                [
                    'id' => 2382,
                    'country_id' => 1,
                    'external_id' => '1061620783',
                    'name_en' => 'Sorour',
                    'name_ar' => 'سرور'
                ],
                [
                    'id' => 2383,
                    'country_id' => 1,
                    'external_id' => '153889576',
                    'name_en' => 'Hamd',
                    'name_ar' => 'حمد'
                ],
                [
                    'id' => 2384,
                    'country_id' => 1,
                    'external_id' => '1527335465',
                    'name_en' => 'Ned Maalak',
                    'name_ar' => 'نيد معلك'
                ],
                [
                    'id' => 2385,
                    'country_id' => 1,
                    'external_id' => '886466858',
                    'name_en' => 'Musaylah',
                    'name_ar' => 'مسيله'
                ],
                [
                    'id' => 2386,
                    'country_id' => 1,
                    'external_id' => '113018923',
                    'name_en' => 'Arth Mezyab',
                    'name_ar' => 'عرث مذياب'
                ],
                [
                    'id' => 2387,
                    'country_id' => 1,
                    'external_id' => '1352242996',
                    'name_en' => 'Ash-Shagan',
                    'name_ar' => 'الشجن'
                ],
                [
                    'id' => 2388,
                    'country_id' => 1,
                    'external_id' => '577156661',
                    'name_en' => 'Al Harayes',
                    'name_ar' => 'الحرايص'
                ],
                [
                    'id' => 2389,
                    'country_id' => 1,
                    'external_id' => '2084820278',
                    'name_en' => 'Al Ubadiyah',
                    'name_ar' => 'العبادية'
                ],
                [
                    'id' => 2390,
                    'country_id' => 1,
                    'external_id' => '1311306807',
                    'name_en' => 'Al Hasad',
                    'name_ar' => 'الحصد'
                ],
                [
                    'id' => 2391,
                    'country_id' => 1,
                    'external_id' => '469046064',
                    'name_en' => 'Abo Qematayen',
                    'name_ar' => 'ابو قمتين'
                ],
                [
                    'id' => 2392,
                    'country_id' => 1,
                    'external_id' => '1976709681',
                    'name_en' => 'Um Al-Darahem and Border guard housing',
                    'name_ar' => 'ام الدراهم وسكن حرس الحدود'
                ],
                [
                    'id' => 2393,
                    'country_id' => 1,
                    'external_id' => '1203720498',
                    'name_en' => 'Almahdaj',
                    'name_ar' => 'المهدج'
                ],
                [
                    'id' => 2394,
                    'country_id' => 1,
                    'external_id' => '293892147',
                    'name_en' => 'Ser Ad-Daba',
                    'name_ar' => 'سر الدبع'
                ],
                [
                    'id' => 2395,
                    'country_id' => 1,
                    'external_id' => '1667407676',
                    'name_en' => 'Al-Marma Al-Tala\'ah',
                    'name_ar' => 'المرمى الطلعه'
                ],
                [
                    'id' => 2396,
                    'country_id' => 1,
                    'external_id' => '1028636221',
                    'name_en' => 'Al Manshah',
                    'name_ar' => 'المنشح'
                ],
                [
                    'id' => 2397,
                    'country_id' => 1,
                    'external_id' => '253025598',
                    'name_en' => 'Merah Az-Zeaab',
                    'name_ar' => 'مراح الذئاب'
                ],
                [
                    'id' => 2398,
                    'country_id' => 1,
                    'external_id' => '1492253759',
                    'name_en' => 'Ras Al Madafen',
                    'name_ar' => 'راس  المدافن'
                ],
                [
                    'id' => 2399,
                    'country_id' => 1,
                    'external_id' => '719199032',
                    'name_en' => 'Ash-Shudanah',
                    'name_ar' => 'الشدانه'
                ],
                [
                    'id' => 2400,
                    'country_id' => 1,
                    'external_id' => '79379001',
                    'name_en' => 'Gashar',
                    'name_ar' => 'جشر'
                ],
                [
                    'id' => 2401,
                    'country_id' => 1,
                    'external_id' => '1451252026',
                    'name_en' => 'Qulah Merar',
                    'name_ar' => 'قله مرار'
                ],
                [
                    'id' => 2402,
                    'country_id' => 1,
                    'external_id' => '544045115',
                    'name_en' => 'Ushban',
                    'name_ar' => 'عشبان'
                ],
                [
                    'id' => 2403,
                    'country_id' => 1,
                    'external_id' => '1917552388',
                    'name_en' => 'Khutwet Afyah',
                    'name_ar' => 'خطوه عافيه'
                ],
                [
                    'id' => 2404,
                    'country_id' => 1,
                    'external_id' => '1276159493',
                    'name_en' => 'Alfarshuh',
                    'name_ar' => 'الفرشه'
                ],
                [
                    'id' => 2405,
                    'country_id' => 1,
                    'external_id' => '436061446',
                    'name_en' => 'Qa\'ad Al-Wjar',
                    'name_ar' => 'قعاد الوجار'
                ],
                [
                    'id' => 2406,
                    'country_id' => 1,
                    'external_id' => '1809507335',
                    'name_en' => 'Gharnoukah',
                    'name_ar' => 'غرنوقه'
                ],
                [
                    'id' => 2407,
                    'country_id' => 1,
                    'external_id' => '1168573184',
                    'name_en' => 'Lahb Qaheef',
                    'name_ar' => 'لحب قحيف'
                ],
                [
                    'id' => 2408,
                    'country_id' => 1,
                    'external_id' => '395059713',
                    'name_en' => 'Qanborah',
                    'name_ar' => 'قنبوره'
                ],
                [
                    'id' => 2409,
                    'country_id' => 1,
                    'external_id' => '1634287874',
                    'name_en' => 'Qulah Al Ghamra',
                    'name_ar' => 'قله الغمرا'
                ],
                [
                    'id' => 2410,
                    'country_id' => 1,
                    'external_id' => '859201539',
                    'name_en' => 'Naql Al Mazameer',
                    'name_ar' => 'نقل المزامير'
                ],
                [
                    'id' => 2411,
                    'country_id' => 1,
                    'external_id' => '219975436',
                    'name_en' => 'Al Qaas',
                    'name_ar' => 'القعس'
                ],
                [
                    'id' => 2412,
                    'country_id' => 1,
                    'external_id' => '1593421325',
                    'name_en' => 'Ned An-Nafaq',
                    'name_ar' => 'نيد النفق'
                ],
                [
                    'id' => 2413,
                    'country_id' => 1,
                    'external_id' => '684117262',
                    'name_en' => 'Ree Massyadah',
                    'name_ar' => 'ريع مصيدة'
                ],
                [
                    'id' => 2414,
                    'country_id' => 1,
                    'external_id' => '2057563151',
                    'name_en' => 'As-Sai',
                    'name_ar' => 'السعى'
                ],
                [
                    'id' => 2415,
                    'country_id' => 1,
                    'external_id' => '1418201864',
                    'name_en' => 'Manfukhah',
                    'name_ar' => 'منفوخه'
                ],
                [
                    'id' => 2416,
                    'country_id' => 1,
                    'external_id' => '643115529',
                    'name_en' => 'Rowyan',
                    'name_ar' => 'روبان'
                ],
                [
                    'id' => 2417,
                    'country_id' => 1,
                    'external_id' => '1882343690',
                    'name_en' => 'Al-Qutb',
                    'name_ar' => 'القطب'
                ],
                [
                    'id' => 2418,
                    'country_id' => 1,
                    'external_id' => '1109354507',
                    'name_en' => 'As-Sururi (As-Sarween)',
                    'name_ar' => 'السرورى (الصرويين)'
                ],
                [
                    'id' => 2419,
                    'country_id' => 1,
                    'external_id' => '535066388',
                    'name_en' => 'Khutwah Al Hasheem',
                    'name_ar' => 'خطوه الهشيم'
                ],
                [
                    'id' => 2420,
                    'country_id' => 1,
                    'external_id' => '1774360085',
                    'name_en' => 'Thaher Awlad Mesfer',
                    'name_ar' => 'ثاهر اولاد مسفر'
                ],
                [
                    'id' => 2421,
                    'country_id' => 1,
                    'external_id' => '1001370902',
                    'name_en' => 'Al Madmadmah Al Orabiyah',
                    'name_ar' => 'المدمدمه العرابيه'
                ],
                [
                    'id' => 2422,
                    'country_id' => 1,
                    'external_id' => '359978007',
                    'name_en' => 'Ser Shaatar',
                    'name_ar' => 'سر شعتر'
                ],
                [
                    'id' => 2423,
                    'country_id' => 1,
                    'external_id' => '1733423888',
                    'name_en' => 'Al Habat',
                    'name_ar' => 'الحبط'
                ],
                [
                    'id' => 2424,
                    'country_id' => 1,
                    'external_id' => '826151441',
                    'name_en' => 'Abo Qalyah',
                    'name_ar' => 'ابوقليه'
                ],
                [
                    'id' => 2425,
                    'country_id' => 1,
                    'external_id' => '52113682',
                    'name_en' => 'Alrafsuh',
                    'name_ar' => 'الرفصه'
                ],
                [
                    'id' => 2426,
                    'country_id' => 1,
                    'external_id' => '1558204435',
                    'name_en' => 'Ned Athnayen',
                    'name_ar' => 'نيد اثناين'
                ],
                [
                    'id' => 2427,
                    'country_id' => 1,
                    'external_id' => '2024513053',
                    'name_en' => 'Hamrn Thi Hamra',
                    'name_ar' => 'حمرن ذي حمرا'
                ],
                [
                    'id' => 2428,
                    'country_id' => 1,
                    'external_id' => '1248902430',
                    'name_en' => 'Alsahluh',
                    'name_ar' => 'السهله'
                ],
                [
                    'id' => 2429,
                    'country_id' => 1,
                    'external_id' => '610130975',
                    'name_en' => 'Khart Een Al Enaq',
                    'name_ar' => 'خرت عين العناق'
                ],
                [
                    'id' => 2430,
                    'country_id' => 1,
                    'external_id' => '1983576856',
                    'name_en' => 'Al Mutawasheqat',
                    'name_ar' => 'المتواشقات'
                ],
                [
                    'id' => 2431,
                    'country_id' => 1,
                    'external_id' => '1074207257',
                    'name_en' => 'Om Duma As-Sufla',
                    'name_ar' => 'ام دومه السفلى'
                ],
                [
                    'id' => 2432,
                    'country_id' => 1,
                    'external_id' => '502020378',
                    'name_en' => 'Qenah Al Oshah',
                    'name_ar' => 'قنه العشه'
                ],
                [
                    'id' => 2433,
                    'country_id' => 1,
                    'external_id' => '1875466267',
                    'name_en' => 'Ser Swedi',
                    'name_ar' => 'سر سويدى'
                ],
                [
                    'id' => 2434,
                    'country_id' => 1,
                    'external_id' => '966158180',
                    'name_en' => 'Makhshus',
                    'name_ar' => 'مخشوس'
                ],
                [
                    'id' => 2435,
                    'country_id' => 1,
                    'external_id' => '192710245',
                    'name_en' => 'Ar-Rakees',
                    'name_ar' => 'الركيس'
                ],
                [
                    'id' => 2436,
                    'country_id' => 1,
                    'external_id' => '1700373862',
                    'name_en' => 'As-Salaa',
                    'name_ar' => 'الصلع'
                ],
                [
                    'id' => 2437,
                    'country_id' => 1,
                    'external_id' => '925287527',
                    'name_en' => 'Al Marwa',
                    'name_ar' => 'المروى'
                ],
                [
                    'id' => 2438,
                    'country_id' => 1,
                    'external_id' => '17032032',
                    'name_en' => 'Ar-Rateel',
                    'name_ar' => 'الرطيل'
                ],
                [
                    'id' => 2439,
                    'country_id' => 1,
                    'external_id' => '1390936673',
                    'name_en' => 'Baidhan',
                    'name_ar' => 'بيضان'
                ],
                [
                    'id' => 2440,
                    'country_id' => 1,
                    'external_id' => '750068066',
                    'name_en' => 'Mugher',
                    'name_ar' => 'مغر'
                ],
                [
                    'id' => 2441,
                    'country_id' => 1,
                    'external_id' => '2123513955',
                    'name_en' => 'Abo Om Oudah',
                    'name_ar' => 'ابو ام عوده'
                ],
                [
                    'id' => 2442,
                    'country_id' => 1,
                    'external_id' => '1216311148',
                    'name_en' => 'Lahj Khanjar',
                    'name_ar' => 'لحج خنجر'
                ],
                [
                    'id' => 2443,
                    'country_id' => 1,
                    'external_id' => '440766061',
                    'name_en' => 'Al-Lakhas',
                    'name_ar' => 'اللخص'
                ],
                [
                    'id' => 2444,
                    'country_id' => 1,
                    'external_id' => '1948429678',
                    'name_en' => 'Al Waljah As-Sufla',
                    'name_ar' => 'الولجه السفلى'
                ],
                [
                    'id' => 2445,
                    'country_id' => 1,
                    'external_id' => '1175440495',
                    'name_en' => 'Al Mezraq',
                    'name_ar' => 'المزرق'
                ],
                [
                    'id' => 2446,
                    'country_id' => 1,
                    'external_id' => '332721000',
                    'name_en' => 'Hed Al Arja',
                    'name_ar' => 'حيد العرجا'
                ],
                [
                    'id' => 2447,
                    'country_id' => 1,
                    'external_id' => '1840319081',
                    'name_en' => 'Al Quwad',
                    'name_ar' => 'القويد'
                ],
                [
                    'id' => 2448,
                    'country_id' => 1,
                    'external_id' => '1067329898',
                    'name_en' => 'Dhaher Al Hawf',
                    'name_ar' => 'ظاهر الحوف'
                ],
                [
                    'id' => 2449,
                    'country_id' => 1,
                    'external_id' => '159074411',
                    'name_en' => 'Zahab Om Taghlab',
                    'name_ar' => 'زهب ام تغلب'
                ],
                [
                    'id' => 2450,
                    'country_id' => 1,
                    'external_id' => '1530943348',
                    'name_en' => 'Hubayel Maseer',
                    'name_ar' => 'حبيل مسير'
                ],
                [
                    'id' => 2451,
                    'country_id' => 1,
                    'external_id' => '892171893',
                    'name_en' => 'Al Ghuthaya',
                    'name_ar' => 'الغثايا'
                ],
                [
                    'id' => 2452,
                    'country_id' => 1,
                    'external_id' => '118199670',
                    'name_en' => 'Mudah',
                    'name_ar' => 'مده'
                ],
                [
                    'id' => 2453,
                    'country_id' => 1,
                    'external_id' => '1355854967',
                    'name_en' => 'Al Hunwa',
                    'name_ar' => 'الحنوا'
                ],
                [
                    'id' => 2454,
                    'country_id' => 1,
                    'external_id' => '582865776',
                    'name_en' => 'Al Badiyah',
                    'name_ar' => 'الباديه'
                ],
                [
                    'id' => 2455,
                    'country_id' => 1,
                    'external_id' => '2090529393',
                    'name_en' => 'Al Khadh',
                    'name_ar' => 'الخاظ'
                ],
                [
                    'id' => 2456,
                    'country_id' => 1,
                    'external_id' => '1315377522',
                    'name_en' => 'Al Honaw Al Olyah',
                    'name_ar' => 'الحنو العليا'
                ],
                [
                    'id' => 2457,
                    'country_id' => 1,
                    'external_id' => '407646323',
                    'name_en' => 'As-Samkhah',
                    'name_ar' => 'الصمخه'
                ],
                [
                    'id' => 2458,
                    'country_id' => 1,
                    'external_id' => '1781096316',
                    'name_en' => 'Um Al-Odham Al-Janobiah',
                    'name_ar' => 'أم العظام الجنوبية'
                ],
                [
                    'id' => 2459,
                    'country_id' => 1,
                    'external_id' => '1207336573',
                    'name_en' => 'Al Mazraah',
                    'name_ar' => 'المزرعه'
                ],
                [
                    'id' => 2460,
                    'country_id' => 1,
                    'external_id' => '299670910',
                    'name_en' => 'As-Salabah',
                    'name_ar' => 'الصلبه'
                ],
                [
                    'id' => 2461,
                    'country_id' => 1,
                    'external_id' => '1673116799',
                    'name_en' => 'Al Kutayfah',
                    'name_ar' => 'الكتيفه'
                ],
                [
                    'id' => 2462,
                    'country_id' => 1,
                    'external_id' => '1032248184',
                    'name_en' => 'Al Hudhun',
                    'name_ar' => 'الحظن'
                ],
                [
                    'id' => 2463,
                    'country_id' => 1,
                    'external_id' => '258210425',
                    'name_en' => 'Radhet Al Bashmaa',
                    'name_ar' => 'ردحه البشماء'
                ],
                [
                    'id' => 2464,
                    'country_id' => 1,
                    'external_id' => '1497897338',
                    'name_en' => 'Ned Al Hurah',
                    'name_ar' => 'نيد الحره'
                ],
                [
                    'id' => 2465,
                    'country_id' => 1,
                    'external_id' => '722811003',
                    'name_en' => 'Ash-Shamaa',
                    'name_ar' => 'الشماع'
                ],
                [
                    'id' => 2466,
                    'country_id' => 1,
                    'external_id' => '82986820',
                    'name_en' => 'Al Maraweegh',
                    'name_ar' => 'المراويغ'
                ],
                [
                    'id' => 2467,
                    'country_id' => 1,
                    'external_id' => '1457481285',
                    'name_en' => 'Abo Dahya',
                    'name_ar' => 'ابو ضهيا'
                ],
                [
                    'id' => 2468,
                    'country_id' => 1,
                    'external_id' => '547718470',
                    'name_en' => 'Al Fataha',
                    'name_ar' => 'الفطحه'
                ],
                [
                    'id' => 2469,
                    'country_id' => 1,
                    'external_id' => '1921164359',
                    'name_en' => 'Ad-Daradahah Mad Ash-Sham',
                    'name_ar' => 'الدرادحه مد الشام'
                ],
                [
                    'id' => 2470,
                    'country_id' => 1,
                    'external_id' => '1282392896',
                    'name_en' => 'Qarn Om Laila',
                    'name_ar' => 'قرن ام ليلى'
                ],
                [
                    'id' => 2471,
                    'country_id' => 1,
                    'external_id' => '506782273',
                    'name_en' => 'Ar-Ruqad',
                    'name_ar' => 'الرقاد'
                ],
                [
                    'id' => 2472,
                    'country_id' => 1,
                    'external_id' => '1745944898',
                    'name_en' => 'Al Matle',
                    'name_ar' => 'المطلى'
                ],
                [
                    'id' => 2473,
                    'country_id' => 1,
                    'external_id' => '1174282307',
                    'name_en' => 'Ben Ar-Ruzum',
                    'name_ar' => 'بين الرزم'
                ],
                [
                    'id' => 2474,
                    'country_id' => 1,
                    'external_id' => '400248652',
                    'name_en' => 'Amlaj',
                    'name_ar' => 'أملج'
                ],
                [
                    'id' => 2475,
                    'country_id' => 1,
                    'external_id' => '1637903949',
                    'name_en' => 'Samaah',
                    'name_ar' => 'صمعه'
                ],
                [
                    'id' => 2476,
                    'country_id' => 1,
                    'external_id' => '864980302',
                    'name_en' => 'Al Khaleyah',
                    'name_ar' => 'الخليه'
                ],
                [
                    'id' => 2477,
                    'country_id' => 1,
                    'external_id' => '225160271',
                    'name_en' => 'Al-Suqiyah Khalef Al-Salb',
                    'name_ar' => 'السقيه خالف السلب'
                ],
                [
                    'id' => 2478,
                    'country_id' => 1,
                    'external_id' => '1597033288',
                    'name_en' => 'Thaher Dushaysh',
                    'name_ar' => 'ثاهر دشيش'
                ],
                [
                    'id' => 2479,
                    'country_id' => 1,
                    'external_id' => '689826377',
                    'name_en' => 'Al Kharqaa',
                    'name_ar' => 'الخرقاء'
                ],
                [
                    'id' => 2480,
                    'country_id' => 1,
                    'external_id' => '2063206730',
                    'name_en' => 'Rada',
                    'name_ar' => 'ردا'
                ],
                [
                    'id' => 2481,
                    'country_id' => 1,
                    'external_id' => '1422338123',
                    'name_en' => 'Al Khatyyah Ruwan Al Obaid',
                    'name_ar' => 'الخطيه   روان العبيد'
                ],
                [
                    'id' => 2482,
                    'country_id' => 1,
                    'external_id' => '648820564',
                    'name_en' => 'Al Humayrah Al Humrarah',
                    'name_ar' => 'الحميره   الحمراره'
                ],
                [
                    'id' => 2483,
                    'country_id' => 1,
                    'external_id' => '1888048725',
                    'name_en' => 'Dajei',
                    'name_ar' => 'ضاجع'
                ],
                [
                    'id' => 2484,
                    'country_id' => 1,
                    'external_id' => '1112962390',
                    'name_en' => 'Alsadr',
                    'name_ar' => 'الصدر'
                ],
                [
                    'id' => 2485,
                    'country_id' => 1,
                    'external_id' => '473732183',
                    'name_en' => 'Al Mawreqah',
                    'name_ar' => 'المورقه'
                ],
                [
                    'id' => 2486,
                    'country_id' => 1,
                    'external_id' => '1847178064',
                    'name_en' => 'Sai Al Taweel',
                    'name_ar' => 'سعى الطويل'
                ],
                [
                    'id' => 2487,
                    'country_id' => 1,
                    'external_id' => '1004982865',
                    'name_en' => 'Ash-Shadayn',
                    'name_ar' => 'الشدين'
                ],
                [
                    'id' => 2488,
                    'country_id' => 1,
                    'external_id' => '365162834',
                    'name_en' => 'As-Sawdah Sahmah',
                    'name_ar' => 'السوده سحمه'
                ],
                [
                    'id' => 2489,
                    'country_id' => 1,
                    'external_id' => '1739067475',
                    'name_en' => 'Qaem Al Askari',
                    'name_ar' => 'قائم عسكري'
                ],
                [
                    'id' => 2490,
                    'country_id' => 1,
                    'external_id' => '829767516',
                    'name_en' => 'At-Tulayhi',
                    'name_ar' => 'الطليحى'
                ],
                [
                    'id' => 2491,
                    'country_id' => 1,
                    'external_id' => '55729757',
                    'name_en' => 'Um Alaya',
                    'name_ar' => 'ام علايا'
                ],
                [
                    'id' => 2492,
                    'country_id' => 1,
                    'external_id' => '1564441950',
                    'name_en' => 'Al Mujazem',
                    'name_ar' => 'المجازم'
                ],
                [
                    'id' => 2493,
                    'country_id' => 1,
                    'external_id' => '788896863',
                    'name_en' => 'Qawahi',
                    'name_ar' => 'قواحى'
                ],
                [
                    'id' => 2494,
                    'country_id' => 1,
                    'external_id' => '2028125016',
                    'name_en' => 'Bani Farrah',
                    'name_ar' => 'بني فراح'
                ],
                [
                    'id' => 2495,
                    'country_id' => 1,
                    'external_id' => '1255135833',
                    'name_en' => 'Al Lahjayn',
                    'name_ar' => 'اللحجين'
                ],
                [
                    'id' => 2496,
                    'country_id' => 1,
                    'external_id' => '613742938',
                    'name_en' => 'Gharbi Shaban',
                    'name_ar' => 'غربى شبان'
                ],
                [
                    'id' => 2497,
                    'country_id' => 1,
                    'external_id' => '1987123291',
                    'name_en' => 'Al Khawarem',
                    'name_ar' => 'الخوارم'
                ],
                [
                    'id' => 2498,
                    'country_id' => 1,
                    'external_id' => '1079912100',
                    'name_en' => 'Az-Zumur',
                    'name_ar' => 'الزمر'
                ],
                [
                    'id' => 2499,
                    'country_id' => 1,
                    'external_id' => '305874341',
                    'name_en' => 'Khamieuh',
                    'name_ar' => 'خميعه'
                ],
                [
                    'id' => 2500,
                    'country_id' => 1,
                    'external_id' => '1811965094',
                    'name_en' => 'Lahj Al Muntadal',
                    'name_ar' => 'لحج المنتدل'
                ],
                [
                    'id' => 2501,
                    'country_id' => 1,
                    'external_id' => '971932583',
                    'name_en' => 'Al Badi\'',
                    'name_ar' => 'البديع'
                ],
                [
                    'id' => 2502,
                    'country_id' => 1,
                    'external_id' => '197894816',
                    'name_en' => 'Manyad',
                    'name_ar' => 'منياد'
                ],
                [
                    'id' => 2503,
                    'country_id' => 1,
                    'external_id' => '1703985569',
                    'name_en' => 'Ser Al Kaabi',
                    'name_ar' => 'سر الكعبي'
                ],
                [
                    'id' => 2504,
                    'country_id' => 1,
                    'external_id' => '930996386',
                    'name_en' => 'Gaghrah',
                    'name_ar' => 'جراه'
                ],
                [
                    'id' => 2505,
                    'country_id' => 1,
                    'external_id' => '22679459',
                    'name_en' => 'Alsharaj',
                    'name_ar' => 'الشرج'
                ],
                [
                    'id' => 2506,
                    'country_id' => 1,
                    'external_id' => '1395076780',
                    'name_en' => 'Al Lawat',
                    'name_ar' => 'اللاوات'
                ],
                [
                    'id' => 2507,
                    'country_id' => 1,
                    'external_id' => '755781037',
                    'name_en' => 'Al Jaadah',
                    'name_ar' => 'الجعده'
                ],
                [
                    'id' => 2508,
                    'country_id' => 1,
                    'external_id' => '2129226926',
                    'name_en' => 'Al Wagarat',
                    'name_ar' => 'الوجرات'
                ],
                [
                    'id' => 2509,
                    'country_id' => 1,
                    'external_id' => '1219988399',
                    'name_en' => 'Khalef As-Sayal',
                    'name_ar' => 'خالف السيال'
                ],
                [
                    'id' => 2510,
                    'country_id' => 1,
                    'external_id' => '446474920',
                    'name_en' => 'Al-Shuba and Tashmal',
                    'name_ar' => 'الشعبه وتشمل'
                ],
                [
                    'id' => 2511,
                    'country_id' => 1,
                    'external_id' => '1954138537',
                    'name_en' => 'Muateq Al Asm',
                    'name_ar' => 'معتق العصم'
                ],
                [
                    'id' => 2512,
                    'country_id' => 1,
                    'external_id' => '1179052202',
                    'name_en' => 'Al-Rakban',
                    'name_ar' => 'الركبان'
                ],
                [
                    'id' => 2513,
                    'country_id' => 1,
                    'external_id' => '270792619',
                    'name_en' => 'Ar-Rukha',
                    'name_ar' => 'الرخه'
                ],
                [
                    'id' => 2514,
                    'country_id' => 1,
                    'external_id' => '1644697268',
                    'name_en' => 'Al Marah',
                    'name_ar' => 'المرح'
                ],
                [
                    'id' => 2515,
                    'country_id' => 1,
                    'external_id' => '1070937525',
                    'name_en' => 'Al Khazalah',
                    'name_ar' => 'الخذله'
                ],
                [
                    'id' => 2516,
                    'country_id' => 1,
                    'external_id' => '162682038',
                    'name_en' => 'Thaher Al Muhas',
                    'name_ar' => 'ثاهر المحاس'
                ],
                [
                    'id' => 2517,
                    'country_id' => 1,
                    'external_id' => '1537176503',
                    'name_en' => 'Al Ghubryat',
                    'name_ar' => 'الغبريات'
                ],
                [
                    'id' => 2518,
                    'country_id' => 1,
                    'external_id' => '895849136',
                    'name_en' => 'Zuwei As-Sarw',
                    'name_ar' => 'ذوي الصرو'
                ],
                [
                    'id' => 2519,
                    'country_id' => 1,
                    'external_id' => '121811377',
                    'name_en' => 'Ned Ash-Shami',
                    'name_ar' => 'نيد الشامي'
                ],
                [
                    'id' => 2520,
                    'country_id' => 1,
                    'external_id' => '1362088114',
                    'name_en' => 'Thaher Al Adan',
                    'name_ar' => 'ثاهر العدن'
                ],
                [
                    'id' => 2521,
                    'country_id' => 1,
                    'external_id' => '586481587',
                    'name_en' => 'Al Jaween',
                    'name_ar' => 'الجوين'
                ],
                [
                    'id' => 2522,
                    'country_id' => 1,
                    'external_id' => '2094079676',
                    'name_en' => 'Ath-Thujajah',
                    'name_ar' => 'الثجاجه'
                ],
                [
                    'id' => 2523,
                    'country_id' => 1,
                    'external_id' => '1321090493',
                    'name_en' => 'Qaem As-Sayd',
                    'name_ar' => 'قائم الصيد'
                ],
                [
                    'id' => 2524,
                    'country_id' => 1,
                    'external_id' => '412835006',
                    'name_en' => 'Zeraa Al-Qazal',
                    'name_ar' => 'ذراع القذال'
                ],
                [
                    'id' => 2525,
                    'country_id' => 1,
                    'external_id' => '1784708031',
                    'name_en' => 'Qamaran',
                    'name_ar' => 'قمران'
                ],
                [
                    'id' => 2526,
                    'country_id' => 1,
                    'external_id' => '1146002104',
                    'name_en' => 'Al Wajeef',
                    'name_ar' => 'الوجيف'
                ],
                [
                    'id' => 2527,
                    'country_id' => 1,
                    'external_id' => '371964345',
                    'name_en' => 'Gharbi Al Umrah',
                    'name_ar' => 'غربى العمره'
                ],
                [
                    'id' => 2528,
                    'country_id' => 1,
                    'external_id' => '1676728506',
                    'name_en' => 'Al Ararah',
                    'name_ar' => 'العرعره'
                ],
                [
                    'id' => 2529,
                    'country_id' => 1,
                    'external_id' => '1037952955',
                    'name_en' => 'Dabwaah',
                    'name_ar' => 'ضبوعه'
                ],
                [
                    'id' => 2530,
                    'country_id' => 1,
                    'external_id' => '263849604',
                    'name_en' => 'Ad-Dughur',
                    'name_ar' => 'الدغر'
                ],
                [
                    'id' => 2531,
                    'country_id' => 1,
                    'external_id' => '1502029189',
                    'name_en' => 'Az-Zagheeb',
                    'name_ar' => 'الزغيب'
                ],
                [
                    'id' => 2532,
                    'country_id' => 1,
                    'external_id' => '728515718',
                    'name_en' => 'Al Kedraya',
                    'name_ar' => 'الكدرايا'
                ],
                [
                    'id' => 2533,
                    'country_id' => 1,
                    'external_id' => '88695687',
                    'name_en' => 'Al Dhajei',
                    'name_ar' => 'الظاجع'
                ],
                [
                    'id' => 2534,
                    'country_id' => 1,
                    'external_id' => '1461158528',
                    'name_en' => 'Aboor',
                    'name_ar' => 'ابور'
                ],
                [
                    'id' => 2535,
                    'country_id' => 1,
                    'external_id' => '553427329',
                    'name_en' => 'Adh-Dhuharah',
                    'name_ar' => 'الظهره'
                ],
                [
                    'id' => 2536,
                    'country_id' => 1,
                    'external_id' => '1926873218',
                    'name_en' => 'Abo An-Nakr',
                    'name_ar' => 'ابو النكر'
                ],
                [
                    'id' => 2537,
                    'country_id' => 1,
                    'external_id' => '1286008707',
                    'name_en' => 'Ambaqem Al Asfal',
                    'name_ar' => 'امباقم الاسفل'
                ],
                [
                    'id' => 2538,
                    'country_id' => 1,
                    'external_id' => '511905420',
                    'name_en' => 'As-Salalah',
                    'name_ar' => 'الصلاله'
                ],
                [
                    'id' => 2539,
                    'country_id' => 1,
                    'external_id' => '1751657869',
                    'name_en' => 'Kursi Al Dayer',
                    'name_ar' => 'كرسي الداير'
                ],
                [
                    'id' => 2540,
                    'country_id' => 1,
                    'external_id' => '976571534',
                    'name_en' => 'Al Jumlah',
                    'name_ar' => 'الجمله'
                ],
                [
                    'id' => 2541,
                    'country_id' => 1,
                    'external_id' => '336751503',
                    'name_en' => 'Al Mahrabah',
                    'name_ar' => 'المحربه'
                ],
                [
                    'id' => 2542,
                    'country_id' => 1,
                    'external_id' => '1643678344',
                    'name_en' => 'Ash-Shaqraa',
                    'name_ar' => 'الشقراء'
                ],
                [
                    'id' => 2543,
                    'country_id' => 1,
                    'external_id' => '868592009',
                    'name_en' => 'Hayd Khadran',
                    'name_ar' => 'حيد خضران'
                ],
                [
                    'id' => 2544,
                    'country_id' => 1,
                    'external_id' => '228771978',
                    'name_en' => 'Qarn Om As-Salab',
                    'name_ar' => 'قرن ام السلب'
                ],
                [
                    'id' => 2545,
                    'country_id' => 1,
                    'external_id' => '1603262347',
                    'name_en' => 'Asfal Dathah',
                    'name_ar' => 'أسفل دثه'
                ],
                [
                    'id' => 2546,
                    'country_id' => 1,
                    'external_id' => '693434004',
                    'name_en' => 'Nid Al-Hadhn Al-Ghamar',
                    'name_ar' => 'نيد الحضن الغمار'
                ],
                [
                    'id' => 2547,
                    'country_id' => 1,
                    'external_id' => '2066814357',
                    'name_en' => 'Qaem Al Uqum Al Fajr',
                    'name_ar' => 'قائم العقم الفجر'
                ],
                [
                    'id' => 2548,
                    'country_id' => 1,
                    'external_id' => '1428042902',
                    'name_en' => 'Al Mehfar',
                    'name_ar' => 'المحفر'
                ],
                [
                    'id' => 2549,
                    'country_id' => 1,
                    'external_id' => '654005143',
                    'name_en' => 'Al Jawf Al Asfal',
                    'name_ar' => 'الجوف الاسفل'
                ],
                [
                    'id' => 2550,
                    'country_id' => 1,
                    'external_id' => '1891660432',
                    'name_en' => 'Al Araqah',
                    'name_ar' => 'العرقه'
                ],
                [
                    'id' => 2551,
                    'country_id' => 1,
                    'external_id' => '1118736785',
                    'name_en' => 'Al Maghreb',
                    'name_ar' => 'المغرب'
                ],
                [
                    'id' => 2552,
                    'country_id' => 1,
                    'external_id' => '478916754',
                    'name_en' => 'Shat Gaber',
                    'name_ar' => 'شط جابر'
                ],
                [
                    'id' => 2553,
                    'country_id' => 1,
                    'external_id' => '1850793875',
                    'name_en' => 'Al Mashrafeyat',
                    'name_ar' => 'المشرفيات'
                ],
                [
                    'id' => 2554,
                    'country_id' => 1,
                    'external_id' => '943586972',
                    'name_en' => 'Qaem Al Arab',
                    'name_ar' => 'قائم العرب'
                ],
                [
                    'id' => 2555,
                    'country_id' => 1,
                    'external_id' => '169483677',
                    'name_en' => 'Maaramah',
                    'name_ar' => 'معرمه'
                ],
                [
                    'id' => 2556,
                    'country_id' => 1,
                    'external_id' => '1743207582',
                    'name_en' => 'Al Ghaleef',
                    'name_ar' => 'الغليف'
                ],
                [
                    'id' => 2557,
                    'country_id' => 1,
                    'external_id' => '835476383',
                    'name_en' => 'Ath-Tharakah',
                    'name_ar' => 'الثركه'
                ],
                [
                    'id' => 2558,
                    'country_id' => 1,
                    'external_id' => '61438616',
                    'name_en' => 'Al Jarieh',
                    'name_ar' => 'الجربه'
                ],
                [
                    'id' => 2559,
                    'country_id' => 1,
                    'external_id' => '1568119193',
                    'name_en' => 'Manqala',
                    'name_ar' => 'منقلا'
                ],
                [
                    'id' => 2560,
                    'country_id' => 1,
                    'external_id' => '794605722',
                    'name_en' => 'Al Manqaz',
                    'name_ar' => 'المنقز'
                ],
                [
                    'id' => 2561,
                    'country_id' => 1,
                    'external_id' => '2033829787',
                    'name_en' => 'Taif',
                    'name_ar' => 'الطايف'
                ],
                [
                    'id' => 2562,
                    'country_id' => 1,
                    'external_id' => '1258743524',
                    'name_en' => 'Ser Ar-Ramadi',
                    'name_ar' => 'سر الرمادى'
                ],
                [
                    'id' => 2563,
                    'country_id' => 1,
                    'external_id' => '618857957',
                    'name_en' => 'Qulah Al Afyah',
                    'name_ar' => 'قله العافيه'
                ],
                [
                    'id' => 2564,
                    'country_id' => 1,
                    'external_id' => '1992828134',
                    'name_en' => 'Um Al-Thahr',
                    'name_ar' => 'ام الثهر'
                ],
                [
                    'id' => 2565,
                    'country_id' => 1,
                    'external_id' => '1083524071',
                    'name_en' => 'Al-Maslab',
                    'name_ar' => 'المسلب'
                ],
                [
                    'id' => 2566,
                    'country_id' => 1,
                    'external_id' => '309486304',
                    'name_en' => 'Lahj Al Qelaa',
                    'name_ar' => 'لحج القلاع'
                ],
                [
                    'id' => 2567,
                    'country_id' => 1,
                    'external_id' => '1817739745',
                    'name_en' => 'Lahj Ad-Debaa',
                    'name_ar' => 'لحج الضباع'
                ],
                [
                    'id' => 2568,
                    'country_id' => 1,
                    'external_id' => '1042653410',
                    'name_en' => 'Al Mabte',
                    'name_ar' => 'ال مبطى'
                ],
                [
                    'id' => 2569,
                    'country_id' => 1,
                    'external_id' => '134402019',
                    'name_en' => 'Mashaereen',
                    'name_ar' => 'مشعرين'
                ],
                [
                    'id' => 2570,
                    'country_id' => 1,
                    'external_id' => '1710223084',
                    'name_en' => 'Ar-Ruqab wa Shumaylah',
                    'name_ar' => 'الرقب وشميله'
                ],
                [
                    'id' => 2571,
                    'country_id' => 1,
                    'external_id' => '934546925',
                    'name_en' => 'Qaded Om Khatawah',
                    'name_ar' => 'قديد ام خطاوه'
                ],
                [
                    'id' => 2572,
                    'country_id' => 1,
                    'external_id' => '26291438',
                    'name_en' => 'Muhawwalah',
                    'name_ar' => 'محولة'
                ],
                [
                    'id' => 2573,
                    'country_id' => 1,
                    'external_id' => '1400785903',
                    'name_en' => 'Al Akasheem',
                    'name_ar' => 'الكعاشيم'
                ],
                [
                    'id' => 2574,
                    'country_id' => 1,
                    'external_id' => '760965864',
                    'name_en' => 'Qahman',
                    'name_ar' => 'قهمان'
                ],
                [
                    'id' => 2575,
                    'country_id' => 1,
                    'external_id' => '2132904425',
                    'name_en' => 'Al Washbah',
                    'name_ar' => 'الوشبه'
                ],
                [
                    'id' => 2576,
                    'country_id' => 1,
                    'external_id' => '1225697514',
                    'name_en' => 'Al Buwayrah',
                    'name_ar' => 'البويره'
                ],
                [
                    'id' => 2577,
                    'country_id' => 1,
                    'external_id' => '451655659',
                    'name_en' => 'Zeraa Alkaberah and border guards center',
                    'name_ar' => 'ذراع الكبيره ومركز سلاح الحدود'
                ],
                [
                    'id' => 2578,
                    'country_id' => 1,
                    'external_id' => '1957746420',
                    'name_en' => 'Al Madafen',
                    'name_ar' => 'المدافن'
                ],
                [
                    'id' => 2579,
                    'country_id' => 1,
                    'external_id' => '1184757237',
                    'name_en' => 'aldaahih',
                    'name_ar' => 'الضاحيه'
                ],
                [
                    'id' => 2580,
                    'country_id' => 1,
                    'external_id' => '276436214',
                    'name_en' => 'Sulaybah',
                    'name_ar' => 'صليبه'
                ],
                [
                    'id' => 2581,
                    'country_id' => 1,
                    'external_id' => '1648833527',
                    'name_en' => 'Darb Al Naja',
                    'name_ar' => 'درب النجا'
                ],
                [
                    'id' => 2582,
                    'country_id' => 1,
                    'external_id' => '1009537776',
                    'name_en' => 'Kursi Reyah',
                    'name_ar' => 'كرسى رباح'
                ],
                [
                    'id' => 2583,
                    'country_id' => 1,
                    'external_id' => '235500017',
                    'name_en' => 'Al Yamanyah',
                    'name_ar' => 'اليمانيه'
                ],
                [
                    'id' => 2584,
                    'country_id' => 1,
                    'external_id' => '1540854002',
                    'name_en' => 'Zawat Raysah',
                    'name_ar' => 'ذوات ريسه'
                ],
                [
                    'id' => 2585,
                    'country_id' => 1,
                    'external_id' => '901562355',
                    'name_en' => 'An-Nufayaah',
                    'name_ar' => 'النفيعه'
                ],
                [
                    'id' => 2586,
                    'country_id' => 1,
                    'external_id' => '127524604',
                    'name_en' => 'Thaher Ali Al Qabbi',
                    'name_ar' => 'ثاهر علي القبي'
                ],
                [
                    'id' => 2587,
                    'country_id' => 1,
                    'external_id' => '1365704189',
                    'name_en' => 'Al Guaydah',
                    'name_ar' => 'الجعيده'
                ],
                [
                    'id' => 2588,
                    'country_id' => 1,
                    'external_id' => '591600894',
                    'name_en' => 'Al Majedar',
                    'name_ar' => 'المجدر'
                ],
                [
                    'id' => 2589,
                    'country_id' => 1,
                    'external_id' => '2099788799',
                    'name_en' => 'Ser Jibril',
                    'name_ar' => 'سر جبريل'
                ],
                [
                    'id' => 2590,
                    'country_id' => 1,
                    'external_id' => '1324702456',
                    'name_en' => 'Buqah Ad-Duha Almashnawi',
                    'name_ar' => 'بقعة الضحى المشنوي'
                ],
                [
                    'id' => 2591,
                    'country_id' => 1,
                    'external_id' => '416446969',
                    'name_en' => 'Al Qawaei',
                    'name_ar' => 'القواعي'
                ],
                [
                    'id' => 2592,
                    'country_id' => 1,
                    'external_id' => '1790482682',
                    'name_en' => 'Khalef Al Marar w As-Sayalah',
                    'name_ar' => 'خالف المرار والسياله'
                ],
                [
                    'id' => 2593,
                    'country_id' => 1,
                    'external_id' => '1149609979',
                    'name_en' => 'Al Qanbor',
                    'name_ar' => 'القنبور'
                ],
                [
                    'id' => 2594,
                    'country_id' => 1,
                    'external_id' => '375572164',
                    'name_en' => 'Wadi Darbash',
                    'name_ar' => 'وادى درباش'
                ],
                [
                    'id' => 2595,
                    'country_id' => 1,
                    'external_id' => '1615848901',
                    'name_en' => 'Wadi Alaj',
                    'name_ar' => 'وادى الج'
                ],
                [
                    'id' => 2596,
                    'country_id' => 1,
                    'external_id' => '840172742',
                    'name_en' => 'Al Gaareen',
                    'name_ar' => 'الجعارين'
                ],
                [
                    'id' => 2597,
                    'country_id' => 1,
                    'external_id' => '267461575',
                    'name_en' => 'Al Badj',
                    'name_ar' => 'البدج'
                ],
                [
                    'id' => 2598,
                    'country_id' => 1,
                    'external_id' => '1507738304',
                    'name_en' => 'Al Magba',
                    'name_ar' => 'المجبا'
                ],
                [
                    'id' => 2599,
                    'country_id' => 1,
                    'external_id' => '733700545',
                    'name_en' => 'Thira Al-Adadain',
                    'name_ar' => 'ذراع العددين'
                ],
                [
                    'id' => 2600,
                    'country_id' => 1,
                    'external_id' => '92373186',
                    'name_en' => 'Ad-Damoun',
                    'name_ar' => 'الدمون'
                ],
                [
                    'id' => 2601,
                    'country_id' => 1,
                    'external_id' => '1466871747',
                    'name_en' => 'Al Garya',
                    'name_ar' => 'الجربا'
                ],
                [
                    'id' => 2602,
                    'country_id' => 1,
                    'external_id' => '558616268',
                    'name_en' => 'Al Maqareah',
                    'name_ar' => 'المقارعه'
                ],
                [
                    'id' => 2603,
                    'country_id' => 1,
                    'external_id' => '1930489293',
                    'name_en' => 'Al Qasayem',
                    'name_ar' => 'القصايم'
                ],
                [
                    'id' => 2604,
                    'country_id' => 1,
                    'external_id' => '1291652302',
                    'name_en' => 'Khalfet As-Sayal',
                    'name_ar' => 'خالفت السيال'
                ],
                [
                    'id' => 2605,
                    'country_id' => 1,
                    'external_id' => '517614543',
                    'name_en' => 'Al Ashaab',
                    'name_ar' => 'الآشعاب'
                ],
                [
                    'id' => 2606,
                    'country_id' => 1,
                    'external_id' => '1755794120',
                    'name_en' => 'Thaher Muqawya',
                    'name_ar' => 'ثاهر مقوبع'
                ],
                [
                    'id' => 2607,
                    'country_id' => 1,
                    'external_id' => '982280649',
                    'name_en' => 'Om Ar-Rawi',
                    'name_ar' => 'ام الراوى'
                ],
                [
                    'id' => 2608,
                    'country_id' => 1,
                    'external_id' => '342526154',
                    'name_en' => 'Al Muqsarah',
                    'name_ar' => 'المقصره'
                ],
                [
                    'id' => 2609,
                    'country_id' => 1,
                    'external_id' => '1714919371',
                    'name_en' => 'Almahaluh',
                    'name_ar' => 'المحله'
                ],
                [
                    'id' => 2610,
                    'country_id' => 1,
                    'external_id' => '807188180',
                    'name_en' => 'Hayeen',
                    'name_ar' => 'حيين'
                ],
                [
                    'id' => 2611,
                    'country_id' => 1,
                    'external_id' => '234477013',
                    'name_en' => 'Al Hurayjah',
                    'name_ar' => 'الهربجه'
                ],
                [
                    'id' => 2612,
                    'country_id' => 1,
                    'external_id' => '1606874326',
                    'name_en' => 'Al Juhyrah Al Al Hashedi',
                    'name_ar' => 'الجحيره ال الحاشدي'
                ],
                [
                    'id' => 2613,
                    'country_id' => 1,
                    'external_id' => '698553303',
                    'name_en' => 'An Naheet',
                    'name_ar' => 'النحيت'
                ],
                [
                    'id' => 2614,
                    'country_id' => 1,
                    'external_id' => '2072523472',
                    'name_en' => 'Al Quraheba',
                    'name_ar' => 'القراهبة'
                ],
                [
                    'id' => 2615,
                    'country_id' => 1,
                    'external_id' => '1431654865',
                    'name_en' => 'Gabgabah',
                    'name_ar' => 'جبجبه'
                ],
                [
                    'id' => 2616,
                    'country_id' => 1,
                    'external_id' => '657617106',
                    'name_en' => 'Al Mughamer',
                    'name_ar' => 'المغامر'
                ],
                [
                    'id' => 2617,
                    'country_id' => 1,
                    'external_id' => '1897439187',
                    'name_en' => 'Ned Manaf',
                    'name_ar' => 'نيد مناف'
                ],
                [
                    'id' => 2618,
                    'country_id' => 1,
                    'external_id' => '1122352860',
                    'name_en' => 'Masqiyah',
                    'name_ar' => 'مسقيه'
                ],
                [
                    'id' => 2619,
                    'country_id' => 1,
                    'external_id' => '482532829',
                    'name_en' => 'Al Kambaa',
                    'name_ar' => 'الكمباء'
                ],
                [
                    'id' => 2620,
                    'country_id' => 1,
                    'external_id' => '1857027294',
                    'name_en' => 'Om Al Mamgar',
                    'name_ar' => 'ام الممجار'
                ],
                [
                    'id' => 2621,
                    'country_id' => 1,
                    'external_id' => '947133407',
                    'name_en' => 'Abo Al Asherah',
                    'name_ar' => 'ابو العشره'
                ],
                [
                    'id' => 2622,
                    'country_id' => 1,
                    'external_id' => '173095640',
                    'name_en' => 'Almekhrafi wa Almujahideen',
                    'name_ar' => 'المخراقى والمجاهدين'
                ],
                [
                    'id' => 2623,
                    'country_id' => 1,
                    'external_id' => '1681807833',
                    'name_en' => 'Ar-Rakaah',
                    'name_ar' => 'الركعه'
                ],
                [
                    'id' => 2624,
                    'country_id' => 1,
                    'external_id' => '907770074',
                    'name_en' => 'Al Malha Baqassi',
                    'name_ar' => 'الملحه بقصى'
                ],
                [
                    'id' => 2625,
                    'country_id' => 1,
                    'external_id' => '65112027',
                    'name_en' => 'Al Gabanah',
                    'name_ar' => 'الجبانه'
                ],
                [
                    'id' => 2626,
                    'country_id' => 1,
                    'external_id' => '1573824036',
                    'name_en' => 'Thaher Daraan',
                    'name_ar' => 'ثاهر درعان'
                ],
                [
                    'id' => 2627,
                    'country_id' => 1,
                    'external_id' => '799786277',
                    'name_en' => 'Aldalae',
                    'name_ar' => 'الضلع'
                ],
                [
                    'id' => 2628,
                    'country_id' => 1,
                    'external_id' => '2037441574',
                    'name_en' => 'Lahj Al Humrah',
                    'name_ar' => 'لحج الحمره'
                ],
                [
                    'id' => 2629,
                    'country_id' => 1,
                    'external_id' => '1264386855',
                    'name_en' => 'Al Baynaa Wadi Ar-Rawgh',
                    'name_ar' => 'البيناء  وادي الروغ'
                ],
                [
                    'id' => 2630,
                    'country_id' => 1,
                    'external_id' => '624566816',
                    'name_en' => 'Lahj Mashyah',
                    'name_ar' => 'لحج مسهيه'
                ],
                [
                    'id' => 2631,
                    'country_id' => 1,
                    'external_id' => '1996964129',
                    'name_en' => 'Quradah Alharbi',
                    'name_ar' => 'قرضه الحربي'
                ],
                [
                    'id' => 2632,
                    'country_id' => 1,
                    'external_id' => '1089232930',
                    'name_en' => 'As-Safa',
                    'name_ar' => 'الصفا'
                ],
                [
                    'id' => 2633,
                    'country_id' => 1,
                    'external_id' => '315264803',
                    'name_en' => 'Al Ghadeer',
                    'name_ar' => 'الغدير'
                ],
                [
                    'id' => 2634,
                    'country_id' => 1,
                    'external_id' => '1821879852',
                    'name_en' => 'Damraa',
                    'name_ar' => 'ضمراء'
                ],
                [
                    'id' => 2635,
                    'country_id' => 1,
                    'external_id' => '1048366381',
                    'name_en' => 'Lahmah',
                    'name_ar' => 'لحمه'
                ],
                [
                    'id' => 2636,
                    'country_id' => 1,
                    'external_id' => '140110894',
                    'name_en' => 'Al Musheth',
                    'name_ar' => 'الموشث'
                ],
                [
                    'id' => 2637,
                    'country_id' => 1,
                    'external_id' => '1512442671',
                    'name_en' => 'Ash-Shabeheen',
                    'name_ar' => 'الشابحين'
                ],
                [
                    'id' => 2638,
                    'country_id' => 1,
                    'external_id' => '872622632',
                    'name_en' => 'Dhaheret Ash-Shaqraa',
                    'name_ar' => 'ظاهره الشقراء'
                ],
                [
                    'id' => 2639,
                    'country_id' => 1,
                    'external_id' => '32000297',
                    'name_en' => 'Damnah Om Rajaa',
                    'name_ar' => 'دمنه ام رجع'
                ],
                [
                    'id' => 2640,
                    'country_id' => 1,
                    'external_id' => '1404397610',
                    'name_en' => 'Ad-Dahkabiyat',
                    'name_ar' => 'الدهكبيات'
                ],
                [
                    'id' => 2641,
                    'country_id' => 1,
                    'external_id' => '764573483',
                    'name_en' => 'Om Al Akthal',
                    'name_ar' => 'ام العكثل'
                ],
                [
                    'id' => 2642,
                    'country_id' => 1,
                    'external_id' => '2138609204',
                    'name_en' => 'Ash-Shawk and Al Ajaz',
                    'name_ar' => 'الشوك و العجز'
                ],
                [
                    'id' => 2643,
                    'country_id' => 1,
                    'external_id' => '1229305141',
                    'name_en' => 'Ze Al Qarth',
                    'name_ar' => 'ذى القرث'
                ],
                [
                    'id' => 2644,
                    'country_id' => 1,
                    'external_id' => '455267382',
                    'name_en' => 'Adh-dhahhar',
                    'name_ar' => 'الظهار'
                ],
                [
                    'id' => 2645,
                    'country_id' => 1,
                    'external_id' => '1963979575',
                    'name_en' => 'Matlaa',
                    'name_ar' => 'مطلأ'
                ],
                [
                    'id' => 2646,
                    'country_id' => 1,
                    'external_id' => '1188303408',
                    'name_en' => 'Al Hanabah',
                    'name_ar' => 'الحنبه'
                ],
                [
                    'id' => 2647,
                    'country_id' => 1,
                    'external_id' => '280047921',
                    'name_en' => 'Ramadah',
                    'name_ar' => 'رماده'
                ],
                [
                    'id' => 2648,
                    'country_id' => 1,
                    'external_id' => '1654542386',
                    'name_en' => 'Mamkhatah',
                    'name_ar' => 'ممخطه'
                ],
                [
                    'id' => 2649,
                    'country_id' => 1,
                    'external_id' => '1014726451',
                    'name_en' => 'Abo Ar-Reesh (Dabret Qasem)',
                    'name_ar' => 'ابو الربش (ضبرة قاسم)'
                ],
                [
                    'id' => 2650,
                    'country_id' => 1,
                    'external_id' => '239181372',
                    'name_en' => 'Al Matareeq Ash-Shamalyah',
                    'name_ar' => 'المطاريق الشمالية'
                ],
                [
                    'id' => 2651,
                    'country_id' => 1,
                    'external_id' => '1479458109',
                    'name_en' => 'Al Oshbah',
                    'name_ar' => 'العشبه'
                ],
                [
                    'id' => 2652,
                    'country_id' => 1,
                    'external_id' => '705420350',
                    'name_en' => 'Reqat Afaf',
                    'name_ar' => 'رقة عفف'
                ],
                [
                    'id' => 2653,
                    'country_id' => 1,
                    'external_id' => '131136319',
                    'name_en' => 'Bin Al Qaadeen',
                    'name_ar' => 'بين القعادين'
                ],
                [
                    'id' => 2654,
                    'country_id' => 1,
                    'external_id' => '1371347512',
                    'name_en' => 'Zuwaid As-Sarahah',
                    'name_ar' => 'ذويد الصرحه'
                ],
                [
                    'id' => 2655,
                    'country_id' => 1,
                    'external_id' => '597309753',
                    'name_en' => 'Ser Hussein',
                    'name_ar' => 'سر حسين'
                ],
                [
                    'id' => 2656,
                    'country_id' => 1,
                    'external_id' => '2103924794',
                    'name_en' => 'Om Masloom',
                    'name_ar' => 'ام مصلوم'
                ],
                [
                    'id' => 2657,
                    'country_id' => 1,
                    'external_id' => '1330407227',
                    'name_en' => 'Hasan',
                    'name_ar' => 'حسن'
                ],
                [
                    'id' => 2658,
                    'country_id' => 1,
                    'external_id' => '422217220',
                    'name_en' => 'Ash-Shadeed',
                    'name_ar' => 'الشديد'
                ],
                [
                    'id' => 2659,
                    'country_id' => 1,
                    'external_id' => '1794614533',
                    'name_en' => 'Almisiaduh',
                    'name_ar' => 'المصياده'
                ],
                [
                    'id' => 2660,
                    'country_id' => 1,
                    'external_id' => '1155318790',
                    'name_en' => 'Al Jabjabah',
                    'name_ar' => 'الجبجبه'
                ],
                [
                    'id' => 2661,
                    'country_id' => 1,
                    'external_id' => '381281031',
                    'name_en' => 'Al Maqarah',
                    'name_ar' => 'المعقره'
                ],
                [
                    'id' => 2662,
                    'country_id' => 1,
                    'external_id' => '1619395072',
                    'name_en' => 'Al Khabayah',
                    'name_ar' => 'الخباعيه'
                ],
                [
                    'id' => 2663,
                    'country_id' => 1,
                    'external_id' => '845357313',
                    'name_en' => 'Al Murtagam',
                    'name_ar' => 'المرتجم'
                ],
                [
                    'id' => 2664,
                    'country_id' => 1,
                    'external_id' => '206061570',
                    'name_en' => 'Ardi Az-Zamelah',
                    'name_ar' => 'ارضى الزامله'
                ],
                [
                    'id' => 2665,
                    'country_id' => 1,
                    'external_id' => '1578462979',
                    'name_en' => 'Wahrah',
                    'name_ar' => 'وحره'
                ],
                [
                    'id' => 2666,
                    'country_id' => 1,
                    'external_id' => '737381900',
                    'name_en' => 'As-Saymaran',
                    'name_ar' => 'السيمران'
                ],
                [
                    'id' => 2667,
                    'country_id' => 1,
                    'external_id' => '98086157',
                    'name_en' => 'Ham As-Sehab',
                    'name_ar' => 'حم السهاب'
                ],
                [
                    'id' => 2668,
                    'country_id' => 1,
                    'external_id' => '1470483470',
                    'name_en' => 'Al Jumalayn',
                    'name_ar' => 'الجملين'
                ],
                [
                    'id' => 2669,
                    'country_id' => 1,
                    'external_id' => '562227983',
                    'name_en' => 'Al Bazah Al Ayn Al Harah',
                    'name_ar' => 'البزه  العين الحاره'
                ],
                [
                    'id' => 2670,
                    'country_id' => 1,
                    'external_id' => '1936656904',
                    'name_en' => 'Al Meshbab',
                    'name_ar' => 'المشباب'
                ],
                [
                    'id' => 2671,
                    'country_id' => 1,
                    'external_id' => '1295264009',
                    'name_en' => 'Al Waddafah',
                    'name_ar' => 'الودافه'
                ],
                [
                    'id' => 2672,
                    'country_id' => 1,
                    'external_id' => '521226250',
                    'name_en' => 'Ash-Sharqi',
                    'name_ar' => 'الشرقي'
                ],
                [
                    'id' => 2673,
                    'country_id' => 1,
                    'external_id' => '1761498891',
                    'name_en' => 'Ar-Rubayhi',
                    'name_ar' => 'الربيحى'
                ],
                [
                    'id' => 2674,
                    'country_id' => 1,
                    'external_id' => '987461140',
                    'name_en' => 'Al-Azraq',
                    'name_ar' => 'الازرق'
                ],
                [
                    'id' => 2675,
                    'country_id' => 1,
                    'external_id' => '346133781',
                    'name_en' => 'Al Qabr',
                    'name_ar' => 'القبر'
                ],
                [
                    'id' => 2676,
                    'country_id' => 1,
                    'external_id' => '1720628246',
                    'name_en' => 'Majlelah',
                    'name_ar' => 'مجليله'
                ],
                [
                    'id' => 2677,
                    'country_id' => 1,
                    'external_id' => '812372759',
                    'name_en' => 'Al Qalaa',
                    'name_ar' => 'القلع'
                ],
                [
                    'id' => 2678,
                    'country_id' => 1,
                    'external_id' => '36762128',
                    'name_en' => 'Al Mansourah',
                    'name_ar' => 'المنصوره'
                ],
                [
                    'id' => 2679,
                    'country_id' => 1,
                    'external_id' => '1545408785',
                    'name_en' => 'Rafeeh Ash-Sharqi',
                    'name_ar' => 'رفيح الشرقى'
                ],
                [
                    'id' => 2680,
                    'country_id' => 1,
                    'external_id' => '704262162',
                    'name_en' => 'Tha Sawami',
                    'name_ar' => 'ذا سوامى'
                ],
                [
                    'id' => 2681,
                    'country_id' => 1,
                    'external_id' => '2076663571',
                    'name_en' => 'Bathan Al Aala',
                    'name_ar' => 'بطحان الاعلى'
                ],
                [
                    'id' => 2682,
                    'country_id' => 1,
                    'external_id' => '1437367836',
                    'name_en' => 'Dhaher Al Haddabah',
                    'name_ar' => 'ظاهر الحدبه'
                ],
                [
                    'id' => 2683,
                    'country_id' => 1,
                    'external_id' => '663395613',
                    'name_en' => 'Om Hoddon',
                    'name_ar' => 'ام حضن'
                ],
                [
                    'id' => 2684,
                    'country_id' => 1,
                    'external_id' => '1901575198',
                    'name_en' => 'Meshbah Al Ghurabah',
                    'name_ar' => 'مشباح الغرابه'
                ],
                [
                    'id' => 2685,
                    'country_id' => 1,
                    'external_id' => '1128061727',
                    'name_en' => 'Al Jahashah',
                    'name_ar' => 'الجحشه'
                ],
                [
                    'id' => 2686,
                    'country_id' => 1,
                    'external_id' => '488241688',
                    'name_en' => 'Alharjuh',
                    'name_ar' => 'الحرجه'
                ],
                [
                    'id' => 2687,
                    'country_id' => 1,
                    'external_id' => '1860573465',
                    'name_en' => 'Ben Al Barek',
                    'name_ar' => 'بين البريك'
                ],
                [
                    'id' => 2688,
                    'country_id' => 1,
                    'external_id' => '952317978',
                    'name_en' => 'Alkhatm',
                    'name_ar' => 'الخطم'
                ],
                [
                    'id' => 2689,
                    'country_id' => 1,
                    'external_id' => '178800411',
                    'name_en' => 'As Saqaa',
                    'name_ar' => 'الصقع'
                ],
                [
                    'id' => 2690,
                    'country_id' => 1,
                    'external_id' => '1685415524',
                    'name_en' => 'Al Arabiya',
                    'name_ar' => 'العرابيه'
                ],
                [
                    'id' => 2691,
                    'country_id' => 1,
                    'external_id' => '911443301',
                    'name_en' => 'Damnet Al Maish',
                    'name_ar' => 'دمنه المعش'
                ],
                [
                    'id' => 2692,
                    'country_id' => 1,
                    'external_id' => '3712102',
                    'name_en' => 'Ash-Shawkani',
                    'name_ar' => 'الشكوانى'
                ],
                [
                    'id' => 2693,
                    'country_id' => 1,
                    'external_id' => '1376109415',
                    'name_en' => 'Murayeghah',
                    'name_ar' => 'مرايغه'
                ],
                [
                    'id' => 2694,
                    'country_id' => 1,
                    'external_id' => '803398240',
                    'name_en' => 'Marat',
                    'name_ar' => 'مراط'
                ],
                [
                    'id' => 2695,
                    'country_id' => 1,
                    'external_id' => '2043609441',
                    'name_en' => 'Al-Haiyeen',
                    'name_ar' => 'الحيين'
                ],
                [
                    'id' => 2696,
                    'country_id' => 1,
                    'external_id' => '1267998818',
                    'name_en' => 'Al Nubyaa Ash-Sharqiyah',
                    'name_ar' => 'النبيعه الشرقية'
                ],
                [
                    'id' => 2697,
                    'country_id' => 1,
                    'external_id' => '628182883',
                    'name_en' => 'Al Madmaa',
                    'name_ar' => 'المدمع'
                ],
                [
                    'id' => 2698,
                    'country_id' => 1,
                    'external_id' => '2002677356',
                    'name_en' => 'Abo Yahya',
                    'name_ar' => 'ابويحيى'
                ],
                [
                    'id' => 2699,
                    'country_id' => 1,
                    'external_id' => '1092914541',
                    'name_en' => 'Al Qaafal',
                    'name_ar' => 'القعفل'
                ],
                [
                    'id' => 2700,
                    'country_id' => 1,
                    'external_id' => '318876782',
                    'name_en' => 'Lahj Nabaan',
                    'name_ar' => 'لحج نبعان'
                ],
                [
                    'id' => 2701,
                    'country_id' => 1,
                    'external_id' => '1827588975',
                    'name_en' => 'Ash-Sharaheli',
                    'name_ar' => 'الشراحيلى'
                ],
                [
                    'id' => 2702,
                    'country_id' => 1,
                    'external_id' => '1053551208',
                    'name_en' => 'Shuab Al Khadurah',
                    'name_ar' => 'شعب الخضوره'
                ],
                [
                    'id' => 2703,
                    'country_id' => 1,
                    'external_id' => '143657321',
                    'name_en' => 'Al Hawshi Al Aala',
                    'name_ar' => 'الحوشبي الاعلى'
                ],
                [
                    'id' => 2704,
                    'country_id' => 1,
                    'external_id' => '1518151786',
                    'name_en' => 'Ash-Shuhayziyah',
                    'name_ar' => 'الشحيذيه'
                ],
                [
                    'id' => 2705,
                    'country_id' => 1,
                    'external_id' => '878327659',
                    'name_en' => 'Ser Ar-Rubae',
                    'name_ar' => 'سرا الرباعى'
                ],
                [
                    'id' => 2706,
                    'country_id' => 1,
                    'external_id' => '103241332',
                    'name_en' => 'Marah Al Arashyah',
                    'name_ar' => 'مراح العراشيه'
                ],
                [
                    'id' => 2707,
                    'country_id' => 1,
                    'external_id' => '1342993781',
                    'name_en' => 'Khabbarah',
                    'name_ar' => 'خباره'
                ],
                [
                    'id' => 2708,
                    'country_id' => 1,
                    'external_id' => '770348150',
                    'name_en' => 'Algharif',
                    'name_ar' => 'الغريف'
                ],
                [
                    'id' => 2709,
                    'country_id' => 1,
                    'external_id' => '2142745463',
                    'name_en' => 'Al Qabeel',
                    'name_ar' => 'القبيل'
                ],
                [
                    'id' => 2710,
                    'country_id' => 1,
                    'external_id' => '1235014256',
                    'name_en' => 'Abo Ar-Ruba',
                    'name_ar' => 'ابوالربى'
                ],
                [
                    'id' => 2711,
                    'country_id' => 1,
                    'external_id' => '460976497',
                    'name_en' => 'Al Kadarah Om Dahshylah',
                    'name_ar' => 'الكدره  ام دهشيلة'
                ],
                [
                    'id' => 2712,
                    'country_id' => 1,
                    'external_id' => '1967526002',
                    'name_en' => 'Za Aneef',
                    'name_ar' => 'ذا انيف'
                ],
                [
                    'id' => 2713,
                    'country_id' => 1,
                    'external_id' => '1193492339',
                    'name_en' => 'Qulet Al Waqr',
                    'name_ar' => 'قله الوقر'
                ],
                [
                    'id' => 2714,
                    'country_id' => 1,
                    'external_id' => '285761148',
                    'name_en' => 'Maftah Lhamd',
                    'name_ar' => 'مفتح لحمد'
                ],
                [
                    'id' => 2715,
                    'country_id' => 1,
                    'external_id' => '1658158461',
                    'name_en' => 'Al Hesar',
                    'name_ar' => 'الحصار'
                ],
                [
                    'id' => 2716,
                    'country_id' => 1,
                    'external_id' => '1018403966',
                    'name_en' => 'Umm Sayilh',
                    'name_ar' => 'ام سايله'
                ],
                [
                    'id' => 2717,
                    'country_id' => 1,
                    'external_id' => '244890495',
                    'name_en' => 'Al Mehtabi',
                    'name_ar' => 'المحطابي'
                ],
                [
                    'id' => 2718,
                    'country_id' => 1,
                    'external_id' => '1483070072',
                    'name_en' => 'Al Aqs',
                    'name_ar' => 'العقص'
                ],
                [
                    'id' => 2719,
                    'country_id' => 1,
                    'external_id' => '709032313',
                    'name_en' => 'Qaari',
                    'name_ar' => 'قعارى'
                ],
                [
                    'id' => 2720,
                    'country_id' => 1,
                    'external_id' => '70195322',
                    'name_en' => 'Alsulb',
                    'name_ar' => 'الصلب'
                ],
                [
                    'id' => 2721,
                    'country_id' => 1,
                    'external_id' => '1374955387',
                    'name_en' => 'Ar-Raqaq',
                    'name_ar' => 'الرقاق'
                ],
                [
                    'id' => 2722,
                    'country_id' => 1,
                    'external_id' => '600917572',
                    'name_en' => 'Al Huqbah',
                    'name_ar' => 'الحقبه'
                ],
                [
                    'id' => 2723,
                    'country_id' => 1,
                    'external_id' => '2109629765',
                    'name_en' => 'Al Ozon and Al Waqei',
                    'name_ar' => 'الاذن  و الوقيع'
                ],
                [
                    'id' => 2724,
                    'country_id' => 1,
                    'external_id' => '1334084678',
                    'name_en' => 'Ash-Shami w Ad-Durub',
                    'name_ar' => 'الشامى والدروب'
                ],
                [
                    'id' => 2725,
                    'country_id' => 1,
                    'external_id' => '425829191',
                    'name_en' => 'Alghaidaniah',
                    'name_ar' => 'الغيدانيه'
                ],
                [
                    'id' => 2726,
                    'country_id' => 1,
                    'external_id' => '1800323648',
                    'name_en' => 'Al Muhjah',
                    'name_ar' => 'المحجاه'
                ],
                [
                    'id' => 2727,
                    'country_id' => 1,
                    'external_id' => '1160503617',
                    'name_en' => 'Almaghsib',
                    'name_ar' => 'المغصب'
                ],
                [
                    'id' => 2728,
                    'country_id' => 1,
                    'external_id' => '384827458',
                    'name_en' => 'Al Barud',
                    'name_ar' => 'البارود'
                ],
                [
                    'id' => 2729,
                    'country_id' => 1,
                    'external_id' => '1625108291',
                    'name_en' => 'Om Hasteer',
                    'name_ar' => 'ام حستير'
                ],
                [
                    'id' => 2730,
                    'country_id' => 1,
                    'external_id' => '851070540',
                    'name_en' => 'Merbash',
                    'name_ar' => 'مرباش'
                ],
                [
                    'id' => 2731,
                    'country_id' => 1,
                    'external_id' => '210201933',
                    'name_en' => 'Dabeer',
                    'name_ar' => 'دبير'
                ],
                [
                    'id' => 2732,
                    'country_id' => 1,
                    'external_id' => '1584237646',
                    'name_en' => 'Al Muaqad',
                    'name_ar' => 'المعقد'
                ],
                [
                    'id' => 2733,
                    'country_id' => 1,
                    'external_id' => '675982159',
                    'name_en' => 'Ash-Shurayfat',
                    'name_ar' => 'الشريفيات'
                ],
                [
                    'id' => 2734,
                    'country_id' => 1,
                    'external_id' => '2048379464',
                    'name_en' => 'Alshabaykat',
                    'name_ar' => 'الشبيكات'
                ],
                [
                    'id' => 2735,
                    'country_id' => 1,
                    'external_id' => '1476192585',
                    'name_en' => 'Qaem As-Saraha',
                    'name_ar' => 'قائم الصرحه'
                ],
                [
                    'id' => 2736,
                    'country_id' => 1,
                    'external_id' => '567871562',
                    'name_en' => 'Al Meshbah',
                    'name_ar' => 'المشباح'
                ],
                [
                    'id' => 2737,
                    'country_id' => 1,
                    'external_id' => '1940264779',
                    'name_en' => 'Al Mazheter',
                    'name_ar' => 'المزحيتر'
                ],
                [
                    'id' => 2738,
                    'country_id' => 1,
                    'external_id' => '1300444756',
                    'name_en' => 'Khatw As-Seri',
                    'name_ar' => 'خطو السرى'
                ],
                [
                    'id' => 2739,
                    'country_id' => 1,
                    'external_id' => '526931285',
                    'name_en' => 'Al Meqtaa',
                    'name_ar' => 'المقطاع'
                ],
                [
                    'id' => 2740,
                    'country_id' => 1,
                    'external_id' => '1765110870',
                    'name_en' => 'Afran',
                    'name_ar' => 'عفران'
                ],
                [
                    'id' => 2741,
                    'country_id' => 1,
                    'external_id' => '991138647',
                    'name_en' => 'Al Quraah',
                    'name_ar' => 'القرعه'
                ],
                [
                    'id' => 2742,
                    'country_id' => 1,
                    'external_id' => '351842896',
                    'name_en' => 'Al Mugaayarah',
                    'name_ar' => 'المجعيره'
                ],
                [
                    'id' => 2743,
                    'country_id' => 1,
                    'external_id' => '1724240209',
                    'name_en' => 'Sarwaat Ash-Shamalyah',
                    'name_ar' => 'صروعة الشمالية'
                ],
                [
                    'id' => 2744,
                    'country_id' => 1,
                    'external_id' => '815984722',
                    'name_en' => 'Qae Alsubaya',
                    'name_ar' => 'قاع الصبايا'
                ],
                [
                    'id' => 2745,
                    'country_id' => 1,
                    'external_id' => '42934099',
                    'name_en' => 'Al Muraba\'a',
                    'name_ar' => 'المربع'
                ],
                [
                    'id' => 2746,
                    'country_id' => 1,
                    'external_id' => '1549024860',
                    'name_en' => 'Al Keredhi',
                    'name_ar' => 'الكريدحى'
                ],
                [
                    'id' => 2747,
                    'country_id' => 1,
                    'external_id' => '774987101',
                    'name_en' => 'Al-Hathiah',
                    'name_ar' => 'الحذيه'
                ],
                [
                    'id' => 2748,
                    'country_id' => 1,
                    'external_id' => '2015263838',
                    'name_en' => 'Al Batesh',
                    'name_ar' => 'البطيش'
                ],
                [
                    'id' => 2749,
                    'country_id' => 1,
                    'external_id' => '1441045343',
                    'name_en' => 'Al-Aqlah Al-Arouq Al-Shamaliah',
                    'name_ar' => 'العقله العروق الشمالية'
                ],
                [
                    'id' => 2750,
                    'country_id' => 1,
                    'external_id' => '667007576',
                    'name_en' => 'Aleaydabaa',
                    'name_ar' => 'العيدابى'
                ],
                [
                    'id' => 2751,
                    'country_id' => 1,
                    'external_id' => '1907284313',
                    'name_en' => 'Al Manqaa',
                    'name_ar' => 'المنقع'
                ],
                [
                    'id' => 2752,
                    'country_id' => 1,
                    'external_id' => '1133246554',
                    'name_en' => 'Ser Al Makhzumah',
                    'name_ar' => 'سر المخزومه'
                ],
                [
                    'id' => 2753,
                    'country_id' => 1,
                    'external_id' => '491784027',
                    'name_en' => 'Al Gaheeb',
                    'name_ar' => 'الجحيب'
                ],
                [
                    'id' => 2754,
                    'country_id' => 1,
                    'external_id' => '1866278308',
                    'name_en' => 'Ben Al Qulal',
                    'name_ar' => 'بين القلل'
                ],
                [
                    'id' => 2755,
                    'country_id' => 1,
                    'external_id' => '958022821',
                    'name_en' => 'Al Ghalfah',
                    'name_ar' => 'الغلفه'
                ],
                [
                    'id' => 2756,
                    'country_id' => 1,
                    'external_id' => '182936486',
                    'name_en' => 'Siri Aldhiyb',
                    'name_ar' => 'سر الذيب'
                ],
                [
                    'id' => 2757,
                    'country_id' => 1,
                    'external_id' => '1691189927',
                    'name_en' => 'Al Maskyah',
                    'name_ar' => 'المسكيه'
                ],
                [
                    'id' => 2758,
                    'country_id' => 1,
                    'external_id' => '917152160',
                    'name_en' => 'Ser Al Harajah',
                    'name_ar' => 'سر الحرجه'
                ],
                [
                    'id' => 2759,
                    'country_id' => 1,
                    'external_id' => '7848097',
                    'name_en' => 'Al Hasabah',
                    'name_ar' => 'الحصبه'
                ],
                [
                    'id' => 2760,
                    'country_id' => 1,
                    'external_id' => '1381822370',
                    'name_en' => 'Al Masmaah',
                    'name_ar' => 'المسمعه'
                ],
                [
                    'id' => 2761,
                    'country_id' => 1,
                    'external_id' => '741936803',
                    'name_en' => 'Al Bazakh',
                    'name_ar' => 'البزخ'
                ],
                [
                    'id' => 2762,
                    'country_id' => 1,
                    'external_id' => '2114334124',
                    'name_en' => 'Al Qahlah',
                    'name_ar' => 'القهله'
                ],
                [
                    'id' => 2763,
                    'country_id' => 1,
                    'external_id' => '1273187501',
                    'name_en' => 'Al Gahfa As-Sufla',
                    'name_ar' => 'الحجفه السفلى'
                ],
                [
                    'id' => 2764,
                    'country_id' => 1,
                    'external_id' => '633891758',
                    'name_en' => 'As-Sayyal',
                    'name_ar' => 'السيال'
                ],
                [
                    'id' => 2765,
                    'country_id' => 1,
                    'external_id' => '2006354607',
                    'name_en' => 'Ar Rahmaniyyah',
                    'name_ar' => 'الرحمانية'
                ],
                [
                    'id' => 2766,
                    'country_id' => 1,
                    'external_id' => '1098099112',
                    'name_en' => 'Jabajb',
                    'name_ar' => 'جبجب'
                ],
                [
                    'id' => 2767,
                    'country_id' => 1,
                    'external_id' => '324585641',
                    'name_en' => 'Adh-Dhahrani',
                    'name_ar' => 'الظهراني'
                ],
                [
                    'id' => 2768,
                    'country_id' => 1,
                    'external_id' => '1831196586',
                    'name_en' => 'Al Muasab',
                    'name_ar' => 'المعصب'
                ],
                [
                    'id' => 2769,
                    'country_id' => 1,
                    'external_id' => '1057158827',
                    'name_en' => 'Thaher Al Jafanah',
                    'name_ar' => 'ثاهر الجفنه'
                ],
                [
                    'id' => 2770,
                    'country_id' => 1,
                    'external_id' => '149886388',
                    'name_en' => 'Abo Adh-dhuha',
                    'name_ar' => 'ابو الظهي'
                ],
                [
                    'id' => 2771,
                    'country_id' => 1,
                    'external_id' => '1521759413',
                    'name_en' => 'Mawshiruh',
                    'name_ar' => 'موشره'
                ],
                [
                    'id' => 2772,
                    'country_id' => 1,
                    'external_id' => '881939382',
                    'name_en' => 'Burayqaa',
                    'name_ar' => 'بريقع'
                ],
                [
                    'id' => 2773,
                    'country_id' => 1,
                    'external_id' => '108950199',
                    'name_en' => 'Ghawali Al Barakah',
                    'name_ar' => 'غوالي البركه'
                ],
                [
                    'id' => 2774,
                    'country_id' => 1,
                    'external_id' => '1346671024',
                    'name_en' => 'Abo Ghabbarah',
                    'name_ar' => 'ابو غباره'
                ],
                [
                    'id' => 2775,
                    'country_id' => 1,
                    'external_id' => '572633265',
                    'name_en' => 'Ned Al Jedrah',
                    'name_ar' => 'نيد الجدره'
                ],
                [
                    'id' => 2776,
                    'country_id' => 1,
                    'external_id' => '2081349554',
                    'name_en' => 'Bardan',
                    'name_ar' => 'بردان'
                ],
                [
                    'id' => 2777,
                    'country_id' => 1,
                    'external_id' => '1240202931',
                    'name_en' => 'Umm Almushrib',
                    'name_ar' => 'ام المشرب'
                ],
                [
                    'id' => 2778,
                    'country_id' => 1,
                    'external_id' => '464526780',
                    'name_en' => 'Al Masawedah As-Sawdi',
                    'name_ar' => 'المساوده السودى'
                ],
                [
                    'id' => 2779,
                    'country_id' => 1,
                    'external_id' => '1973238973',
                    'name_en' => 'Menaq',
                    'name_ar' => 'معناق'
                ],
                [
                    'id' => 2780,
                    'country_id' => 1,
                    'external_id' => '1663932856',
                    'name_en' => 'Al Rafeh',
                    'name_ar' => 'الرفيح'
                ],
                [
                    'id' => 2781,
                    'country_id' => 1,
                    'external_id' => '1024112825',
                    'name_en' => 'Al Balqah',
                    'name_ar' => 'البلقه'
                ],
                [
                    'id' => 2782,
                    'country_id' => 1,
                    'external_id' => '249022394',
                    'name_en' => 'Zuwyer Al Athyah',
                    'name_ar' => 'ذوير الاثبه'
                ],
                [
                    'id' => 2783,
                    'country_id' => 1,
                    'external_id' => '1488774843',
                    'name_en' => 'Umm Alsawwada',
                    'name_ar' => 'ام السوادة'
                ],
                [
                    'id' => 2784,
                    'country_id' => 1,
                    'external_id' => '714671492',
                    'name_en' => 'Ar-Raqah',
                    'name_ar' => 'الرقه'
                ],
                [
                    'id' => 2785,
                    'country_id' => 1,
                    'external_id' => '73802885',
                    'name_en' => 'Thawat Ar-Rejelayn',
                    'name_ar' => 'ذوات الرجلين'
                ],
                [
                    'id' => 2786,
                    'country_id' => 1,
                    'external_id' => '1447248774',
                    'name_en' => 'Abo Al Hawan',
                    'name_ar' => 'ابو الهوان'
                ],
                [
                    'id' => 2787,
                    'country_id' => 1,
                    'external_id' => '539517575',
                    'name_en' => 'Hanbat',
                    'name_ar' => 'حنبت'
                ],
                [
                    'id' => 2788,
                    'country_id' => 1,
                    'external_id' => '2113307008',
                    'name_en' => 'Abo Al Qalaah',
                    'name_ar' => 'ابو القلعه'
                ],
                [
                    'id' => 2789,
                    'country_id' => 1,
                    'external_id' => '1339269249',
                    'name_en' => 'Al Merkab',
                    'name_ar' => 'المرقب'
                ],
                [
                    'id' => 2790,
                    'country_id' => 1,
                    'external_id' => '431542146',
                    'name_en' => 'Zuber As-Saadi',
                    'name_ar' => 'ذويرالسعادي'
                ],
                [
                    'id' => 2791,
                    'country_id' => 1,
                    'external_id' => '1803939459',
                    'name_en' => 'Umm Aldabba',
                    'name_ar' => 'ام الدبا'
                ],
                [
                    'id' => 2792,
                    'country_id' => 1,
                    'external_id' => '1164053900',
                    'name_en' => 'Al Matenah',
                    'name_ar' => 'المطينه'
                ],
                [
                    'id' => 2793,
                    'country_id' => 1,
                    'external_id' => '391064717',
                    'name_en' => 'Arfeti',
                    'name_ar' => 'عرفطي'
                ],
                [
                    'id' => 2794,
                    'country_id' => 1,
                    'external_id' => '854682255',
                    'name_en' => 'Al Ghatyan',
                    'name_ar' => 'الغطيان'
                ],
                [
                    'id' => 2795,
                    'country_id' => 1,
                    'external_id' => '215976328',
                    'name_en' => 'Rawmaah',
                    'name_ar' => 'راومعه'
                ],
                [
                    'id' => 2796,
                    'country_id' => 1,
                    'external_id' => '1587849353',
                    'name_en' => 'Khalef Al Qaysi',
                    'name_ar' => 'خالف القيسي'
                ],
                [
                    'id' => 2797,
                    'country_id' => 1,
                    'external_id' => '679589770',
                    'name_en' => 'Khalefet Al Barq',
                    'name_ar' => 'خالفه البرق'
                ],
                [
                    'id' => 2798,
                    'country_id' => 1,
                    'external_id' => '2054084235',
                    'name_en' => 'Um Al-Nakheel',
                    'name_ar' => 'ام النخيل'
                ],
                [
                    'id' => 2799,
                    'country_id' => 1,
                    'external_id' => '1414264212',
                    'name_en' => 'Om Hathareb',
                    'name_ar' => 'ام هذارب'
                ],
                [
                    'id' => 2800,
                    'country_id' => 1,
                    'external_id' => '638588053',
                    'name_en' => 'Al-Mahdaj Al-Maqsiah',
                    'name_ar' => 'المهدج المقسيه'
                ],
                [
                    'id' => 2801,
                    'country_id' => 1,
                    'external_id' => '1945973654',
                    'name_en' => 'Za Om Karabah',
                    'name_ar' => 'ذا ام كرابه'
                ],
                [
                    'id' => 2802,
                    'country_id' => 1,
                    'external_id' => '1306153623',
                    'name_en' => 'Al Ahwalah',
                    'name_ar' => 'الاحوله'
                ],
                [
                    'id' => 2803,
                    'country_id' => 1,
                    'external_id' => '531067280',
                    'name_en' => 'Turabih',
                    'name_ar' => 'ترابه'
                ],
                [
                    'id' => 2804,
                    'country_id' => 1,
                    'external_id' => '1770885265',
                    'name_en' => 'Al Bahs',
                    'name_ar' => 'البحص'
                ],
                [
                    'id' => 2805,
                    'country_id' => 1,
                    'external_id' => '996851602',
                    'name_en' => 'Al Matareq',
                    'name_ar' => 'المطارق'
                ],
                [
                    'id' => 2806,
                    'country_id' => 1,
                    'external_id' => '355982995',
                    'name_en' => 'Ad-Darabjah',
                    'name_ar' => 'الدرابجه'
                ],
                [
                    'id' => 2807,
                    'country_id' => 1,
                    'external_id' => '1729953180',
                    'name_en' => 'Al-Qara\'ah and Tashmal',
                    'name_ar' => 'القرعه وتشمل'
                ],
                [
                    'id' => 2808,
                    'country_id' => 1,
                    'external_id' => '821632157',
                    'name_en' => 'Al Olayah',
                    'name_ar' => 'العلايا'
                ],
                [
                    'id' => 2809,
                    'country_id' => 1,
                    'external_id' => '46545822',
                    'name_en' => 'Qarn Om Khangaf',
                    'name_ar' => 'قرن ام خنجف'
                ],
                [
                    'id' => 2810,
                    'country_id' => 1,
                    'external_id' => '1554209439',
                    'name_en' => 'Abu Al Henayah',
                    'name_ar' => 'ابو الحنايه'
                ],
                [
                    'id' => 2811,
                    'country_id' => 1,
                    'external_id' => '780695960',
                    'name_en' => 'Almajrd',
                    'name_ar' => 'المجرد'
                ],
                [
                    'id' => 2812,
                    'country_id' => 1,
                    'external_id' => '2018941081',
                    'name_en' => 'Qaem Al Ghabrah',
                    'name_ar' => 'قائم الغبرا'
                ],
                [
                    'id' => 2813,
                    'country_id' => 1,
                    'external_id' => '1244899226',
                    'name_en' => 'Ad-Daqiyqah',
                    'name_ar' => 'الدقيقه'
                ],
                [
                    'id' => 2814,
                    'country_id' => 1,
                    'external_id' => '605603483',
                    'name_en' => 'Maush',
                    'name_ar' => 'معوش'
                ],
                [
                    'id' => 2815,
                    'country_id' => 1,
                    'external_id' => '1910892004',
                    'name_en' => 'Al Makhbazah',
                    'name_ar' => 'المخبزه'
                ],
                [
                    'id' => 2816,
                    'country_id' => 1,
                    'external_id' => '1136788709',
                    'name_en' => 'Dagher Al Farshah',
                    'name_ar' => 'داغر الفرشة'
                ],
                [
                    'id' => 2817,
                    'country_id' => 1,
                    'external_id' => '498017254',
                    'name_en' => 'Markuzah',
                    'name_ar' => 'مركوزه'
                ],
                [
                    'id' => 2818,
                    'country_id' => 1,
                    'external_id' => '1869890279',
                    'name_en' => 'Radhet Hawtan',
                    'name_ar' => 'ردحة حوتان'
                ],
                [
                    'id' => 2819,
                    'country_id' => 1,
                    'external_id' => '961634784',
                    'name_en' => 'Al Qunbelah',
                    'name_ar' => 'القنبله'
                ],
                [
                    'id' => 2820,
                    'country_id' => 1,
                    'external_id' => '188711137',
                    'name_en' => 'Qaem As-Sawalah',
                    'name_ar' => 'قائم الصوله'
                ],
                [
                    'id' => 2821,
                    'country_id' => 1,
                    'external_id' => '1694805986',
                    'name_en' => 'Ar-Ranaf',
                    'name_ar' => 'الرنف'
                ],
                [
                    'id' => 2822,
                    'country_id' => 1,
                    'external_id' => '920768227',
                    'name_en' => 'Al Masael',
                    'name_ar' => 'المسائل'
                ],
                [
                    'id' => 2823,
                    'country_id' => 1,
                    'external_id' => '13561324',
                    'name_en' => 'Almaghroof',
                    'name_ar' => 'المغروف'
                ],
                [
                    'id' => 2824,
                    'country_id' => 1,
                    'external_id' => '1386941677',
                    'name_en' => 'Al Gaad',
                    'name_ar' => 'الجعد'
                ],
                [
                    'id' => 2825,
                    'country_id' => 1,
                    'external_id' => '745548782',
                    'name_en' => 'Souq Al Mae',
                    'name_ar' => 'سوق الماء'
                ],
                [
                    'id' => 2826,
                    'country_id' => 1,
                    'external_id' => '2120043247',
                    'name_en' => 'Lahj Al Arram',
                    'name_ar' => 'لحج العرام'
                ],
                [
                    'id' => 2827,
                    'country_id' => 1,
                    'external_id' => '1211787752',
                    'name_en' => 'Faheej',
                    'name_ar' => 'فحيج'
                ],
                [
                    'id' => 2828,
                    'country_id' => 1,
                    'external_id' => '436242665',
                    'name_en' => 'Al Matareeq',
                    'name_ar' => 'المطاريق'
                ],
                [
                    'id' => 2829,
                    'country_id' => 1,
                    'external_id' => '2012059626',
                    'name_en' => 'Ar-Rumhah',
                    'name_ar' => 'الرمحه'
                ],
                [
                    'id' => 2830,
                    'country_id' => 1,
                    'external_id' => '1103804139',
                    'name_en' => 'Mataah',
                    'name_ar' => 'متاعه'
                ],
                [
                    'id' => 2831,
                    'country_id' => 1,
                    'external_id' => '328717812',
                    'name_en' => 'Alhuruh',
                    'name_ar' => 'الحوره'
                ],
                [
                    'id' => 2832,
                    'country_id' => 1,
                    'external_id' => '1836905717',
                    'name_en' => 'Zuwyer As-Sarw',
                    'name_ar' => 'ذوير السرو'
                ],
                [
                    'id' => 2833,
                    'country_id' => 1,
                    'external_id' => '1062802422',
                    'name_en' => 'Arfute',
                    'name_ar' => 'عرفطى'
                ],
                [
                    'id' => 2834,
                    'country_id' => 1,
                    'external_id' => '153498359',
                    'name_en' => 'Bashul',
                    'name_ar' => 'بشول'
                ],
                [
                    'id' => 2835,
                    'country_id' => 1,
                    'external_id' => '1526944240',
                    'name_en' => 'Mushqir',
                    'name_ar' => 'مشقر'
                ],
                [
                    'id' => 2836,
                    'country_id' => 1,
                    'external_id' => '887648497',
                    'name_en' => 'Al-Hatbayah',
                    'name_ar' => 'الحطباية'
                ],
                [
                    'id' => 2837,
                    'country_id' => 1,
                    'external_id' => '112631794',
                    'name_en' => 'Az-Zalhyetah',
                    'name_ar' => 'الزلحيطه'
                ],
                [
                    'id' => 2838,
                    'country_id' => 1,
                    'external_id' => '1351859955',
                    'name_en' => 'Al Hawi wa Ash-Shabab',
                    'name_ar' => 'آل حاوى والشباب'
                ],
                [
                    'id' => 2839,
                    'country_id' => 1,
                    'external_id' => '578346492',
                    'name_en' => 'Al Mudhaylif',
                    'name_ar' => 'المظيلف'
                ],
                [
                    'id' => 2840,
                    'country_id' => 1,
                    'external_id' => '2084961533',
                    'name_en' => 'Al Arki',
                    'name_ar' => 'العركى'
                ],
                [
                    'id' => 2841,
                    'country_id' => 1,
                    'external_id' => '1310858238',
                    'name_en' => 'Al Khomamah',
                    'name_ar' => 'الخمامه'
                ],
                [
                    'id' => 2842,
                    'country_id' => 1,
                    'external_id' => '403651327',
                    'name_en' => 'Al Musater',
                    'name_ar' => 'ال مساتر'
                ],
                [
                    'id' => 2843,
                    'country_id' => 1,
                    'external_id' => '1976850936',
                    'name_en' => 'Damanah Rashed',
                    'name_ar' => 'دمنه راشد'
                ],
                [
                    'id' => 2844,
                    'country_id' => 1,
                    'external_id' => '1202813177',
                    'name_en' => 'Aldaeabul',
                    'name_ar' => 'الدعابل'
                ],
                [
                    'id' => 2845,
                    'country_id' => 1,
                    'external_id' => '295667706',
                    'name_en' => 'Al Farajah',
                    'name_ar' => 'الفراجه'
                ],
                [
                    'id' => 2846,
                    'country_id' => 1,
                    'external_id' => '1667540731',
                    'name_en' => 'Rai Al Adanah',
                    'name_ar' => 'راعى العدنه'
                ],
                [
                    'id' => 2847,
                    'country_id' => 1,
                    'external_id' => '1027720644',
                    'name_en' => 'Abo Ar-Radeef',
                    'name_ar' => 'ابو الرديف'
                ],
                [
                    'id' => 2848,
                    'country_id' => 1,
                    'external_id' => '254731461',
                    'name_en' => 'Al Maraya',
                    'name_ar' => 'المرايا'
                ],
                [
                    'id' => 2849,
                    'country_id' => 1,
                    'external_id' => '1493894086',
                    'name_en' => 'Rashidah',
                    'name_ar' => 'راشده'
                ],
                [
                    'id' => 2850,
                    'country_id' => 1,
                    'external_id' => '718283463',
                    'name_en' => 'Al Hujayrah',
                    'name_ar' => 'الجحيرة'
                ],
                [
                    'id' => 2851,
                    'country_id' => 1,
                    'external_id' => '79512000',
                    'name_en' => 'Qaem Ahmadeni',
                    'name_ar' => 'قائم احمديني'
                ],
                [
                    'id' => 2852,
                    'country_id' => 1,
                    'external_id' => '1452957889',
                    'name_en' => 'Al Faleq',
                    'name_ar' => 'الفالق'
                ],
                [
                    'id' => 2853,
                    'country_id' => 1,
                    'external_id' => '543199170',
                    'name_en' => 'Al Mukhayal',
                    'name_ar' => 'المخيل'
                ],
                [
                    'id' => 2854,
                    'country_id' => 1,
                    'external_id' => '1917693635',
                    'name_en' => 'Om Radafah',
                    'name_ar' => 'ام ردفه'
                ],
                [
                    'id' => 2855,
                    'country_id' => 1,
                    'external_id' => '1277873612',
                    'name_en' => 'Thuwar',
                    'name_ar' => 'ثوار'
                ],
                [
                    'id' => 2856,
                    'country_id' => 1,
                    'external_id' => '435678413',
                    'name_en' => 'Almunhem wa Az-Zur',
                    'name_ar' => 'المنهم والزور'
                ],
                [
                    'id' => 2857,
                    'country_id' => 1,
                    'external_id' => '1809583054',
                    'name_en' => 'Luhuj',
                    'name_ar' => 'لحوج'
                ],
                [
                    'id' => 2858,
                    'country_id' => 1,
                    'external_id' => '1169763023',
                    'name_en' => 'Hybail Al Maliki',
                    'name_ar' => 'حبيل المالكى'
                ],
                [
                    'id' => 2859,
                    'country_id' => 1,
                    'external_id' => '394676680',
                    'name_en' => 'Muqtadah',
                    'name_ar' => 'موقتاده'
                ],
                [
                    'id' => 2860,
                    'country_id' => 1,
                    'external_id' => '1633904841',
                    'name_en' => 'Khalef As-Sayabah',
                    'name_ar' => 'خالف الصيابه'
                ],
                [
                    'id' => 2861,
                    'country_id' => 1,
                    'external_id' => '860387274',
                    'name_en' => 'Aljudea\'',
                    'name_ar' => 'الجدعاء'
                ],
                [
                    'id' => 2862,
                    'country_id' => 1,
                    'external_id' => '219584203',
                    'name_en' => 'Ash-Shaqab',
                    'name_ar' => 'الشقب'
                ],
                [
                    'id' => 2863,
                    'country_id' => 1,
                    'external_id' => '1593030100',
                    'name_en' => 'Al Hayf',
                    'name_ar' => 'الهيف'
                ],
                [
                    'id' => 2864,
                    'country_id' => 1,
                    'external_id' => '685298901',
                    'name_en' => 'Al Hunayah',
                    'name_ar' => 'الحنايه'
                ],
                [
                    'id' => 2865,
                    'country_id' => 1,
                    'external_id' => '2057696214',
                    'name_en' => 'Ned Almagzarah',
                    'name_ar' => 'نيد المجزره'
                ],
                [
                    'id' => 2866,
                    'country_id' => 1,
                    'external_id' => '1417810647',
                    'name_en' => 'Thaher Gonoon',
                    'name_ar' => 'ثاهر جنون'
                ],
                [
                    'id' => 2867,
                    'country_id' => 1,
                    'external_id' => '644821456',
                    'name_en' => 'Arqudah',
                    'name_ar' => 'عرقوده'
                ],
                [
                    'id' => 2868,
                    'country_id' => 1,
                    'external_id' => '1882476753',
                    'name_en' => 'Al Hanbakah',
                    'name_ar' => 'الحنبكه'
                ],
                [
                    'id' => 2869,
                    'country_id' => 1,
                    'external_id' => '1108443090',
                    'name_en' => 'Abo Ar-Ruqaa',
                    'name_ar' => 'ابوالرقاع'
                ],
                [
                    'id' => 2870,
                    'country_id' => 1,
                    'external_id' => '536846035',
                    'name_en' => 'Abu Al Marw',
                    'name_ar' => 'ابو المرو'
                ],
                [
                    'id' => 2871,
                    'country_id' => 1,
                    'external_id' => '1774501340',
                    'name_en' => 'Dha Aljar',
                    'name_ar' => 'ذا الجار'
                ],
                [
                    'id' => 2872,
                    'country_id' => 1,
                    'external_id' => '1000463581',
                    'name_en' => 'Alauzr wa Ned Ad-Darah',
                    'name_ar' => 'العذر ونيدالداره'
                ],
                [
                    'id' => 2873,
                    'country_id' => 1,
                    'external_id' => '361692126',
                    'name_en' => 'Quzeit Alharbi wa Alhawyah',
                    'name_ar' => 'قزعه الحربي والحوية'
                ],
                [
                    'id' => 2874,
                    'country_id' => 1,
                    'external_id' => '1735072479',
                    'name_en' => 'Heed As-Salmeen wa Almujahideen and its surroundings',
                    'name_ar' => 'حيد السلمين والمجاهدين وماحولها'
                ],
                [
                    'id' => 2875,
                    'country_id' => 1,
                    'external_id' => '825244120',
                    'name_en' => 'Arbad Al Ghubur',
                    'name_ar' => 'ارياد الغبر'
                ],
                [
                    'id' => 2876,
                    'country_id' => 1,
                    'external_id' => '52254937',
                    'name_en' => 'Shatr Albar',
                    'name_ar' => 'شط البر'
                ],
                [
                    'id' => 2877,
                    'country_id' => 1,
                    'external_id' => '1559914458',
                    'name_en' => 'Alhawajeb',
                    'name_ar' => 'الحواجب'
                ],
                [
                    'id' => 2878,
                    'country_id' => 1,
                    'external_id' => '784369371',
                    'name_en' => 'Ar-Raan',
                    'name_ar' => 'الرعان'
                ],
                [
                    'id' => 2879,
                    'country_id' => 1,
                    'external_id' => '2024645924',
                    'name_en' => 'Hydu',
                    'name_ar' => 'حيدو'
                ],
                [
                    'id' => 2880,
                    'country_id' => 1,
                    'external_id' => '1250608165',
                    'name_en' => 'Kenan',
                    'name_ar' => 'كينان'
                ],
                [
                    'id' => 2881,
                    'country_id' => 1,
                    'external_id' => '609739558',
                    'name_en' => 'Hujayrah',
                    'name_ar' => 'هجيره'
                ],
                [
                    'id' => 2882,
                    'country_id' => 1,
                    'external_id' => '1983644199',
                    'name_en' => 'Al Nubyaa Al Gharbya',
                    'name_ar' => 'النبيعة الغربية'
                ],
                [
                    'id' => 2883,
                    'country_id' => 1,
                    'external_id' => '1075388704',
                    'name_en' => 'Om Atmah',
                    'name_ar' => 'ام عتمه'
                ],
                [
                    'id' => 2884,
                    'country_id' => 1,
                    'external_id' => '501628961',
                    'name_en' => 'Lwbiq',
                    'name_ar' => 'لوبق'
                ],
                [
                    'id' => 2885,
                    'country_id' => 1,
                    'external_id' => '1875078946',
                    'name_en' => 'Al Muhaddam',
                    'name_ar' => 'المهدم'
                ],
                [
                    'id' => 2886,
                    'country_id' => 1,
                    'external_id' => '967413283',
                    'name_en' => 'Az-Duwayer',
                    'name_ar' => 'الذوير'
                ],
                [
                    'id' => 2887,
                    'country_id' => 1,
                    'external_id' => '192326956',
                    'name_en' => 'Saleb',
                    'name_ar' => 'سالب'
                ],
                [
                    'id' => 2888,
                    'country_id' => 1,
                    'external_id' => '1699990573',
                    'name_en' => 'Buqet Zanbar',
                    'name_ar' => 'بقعة ذنبر'
                ],
                [
                    'id' => 2889,
                    'country_id' => 1,
                    'external_id' => '926477102',
                    'name_en' => 'Alzahab',
                    'name_ar' => 'الزهب'
                ],
                [
                    'id' => 2890,
                    'country_id' => 1,
                    'external_id' => '17107503',
                    'name_en' => 'Al Qahateen',
                    'name_ar' => 'القحاطين'
                ],
                [
                    'id' => 2891,
                    'country_id' => 1,
                    'external_id' => '1390553384',
                    'name_en' => 'Al Qasim',
                    'name_ar' => 'ال قاسم'
                ],
                [
                    'id' => 2892,
                    'country_id' => 1,
                    'external_id' => '751781929',
                    'name_en' => 'Mutalatif',
                    'name_ar' => 'متلاطف'
                ],
                [
                    'id' => 2893,
                    'country_id' => 1,
                    'external_id' => '2123650858',
                    'name_en' => 'Muasham',
                    'name_ar' => 'معشم'
                ],
                [
                    'id' => 2894,
                    'country_id' => 1,
                    'external_id' => '1215395371',
                    'name_en' => 'Al Mugrem Ad-Datheri',
                    'name_ar' => 'المجرم الداثري'
                ],
                [
                    'id' => 2895,
                    'country_id' => 1,
                    'external_id' => '442471732',
                    'name_en' => 'Wadi Zabub',
                    'name_ar' => 'وادى ذبوب'
                ],
                [
                    'id' => 2896,
                    'country_id' => 1,
                    'external_id' => '1948562485',
                    'name_en' => 'Almaeaddat',
                    'name_ar' => 'المعدات'
                ],
                [
                    'id' => 2897,
                    'country_id' => 1,
                    'external_id' => '1174524726',
                    'name_en' => 'Al-Nous and Ghabet',
                    'name_ar' => 'النوص وغابط'
                ],
                [
                    'id' => 2898,
                    'country_id' => 1,
                    'external_id' => '334426679',
                    'name_en' => 'Al-Naqeel Thaeel Rafeeh',
                    'name_ar' => 'النقيل ثعيل رفيح'
                ],
                [
                    'id' => 2899,
                    'country_id' => 1,
                    'external_id' => '1842024752',
                    'name_en' => 'Qaem Al Muatan',
                    'name_ar' => 'قائم المعطن'
                ],
                [
                    'id' => 2900,
                    'country_id' => 1,
                    'external_id' => '1066414129',
                    'name_en' => 'Al Haqu Al Aala',
                    'name_ar' => 'الحقو الآعلى'
                ],
                [
                    'id' => 2901,
                    'country_id' => 1,
                    'external_id' => '159211314',
                    'name_en' => 'Radaha Al Jabaliyah',
                    'name_ar' => 'ردحه الجبليه'
                ],
                [
                    'id' => 2902,
                    'country_id' => 1,
                    'external_id' => '1532657203',
                    'name_en' => 'Al Qafrah',
                    'name_ar' => 'القفرة'
                ],
                [
                    'id' => 2903,
                    'country_id' => 1,
                    'external_id' => '891329852',
                    'name_en' => 'Ad-Duha Alhukami',
                    'name_ar' => 'الضحى الحكمى'
                ],
                [
                    'id' => 2904,
                    'country_id' => 1,
                    'external_id' => '118340669',
                    'name_en' => 'Al Haraeq',
                    'name_ar' => 'الحرائق'
                ],
                [
                    'id' => 2905,
                    'country_id' => 1,
                    'external_id' => '1357568830',
                    'name_en' => 'Alqatiea\'',
                    'name_ar' => 'القطيعاء'
                ],
                [
                    'id' => 2906,
                    'country_id' => 1,
                    'external_id' => '582482495',
                    'name_en' => 'Ash-Shazabah',
                    'name_ar' => 'الشذابه'
                ],
                [
                    'id' => 2907,
                    'country_id' => 1,
                    'external_id' => '2090604856',
                    'name_en' => 'Al Hafnah',
                    'name_ar' => 'الحفنه'
                ],
                [
                    'id' => 2908,
                    'country_id' => 1,
                    'external_id' => '1316567097',
                    'name_en' => 'Abo Al Araj',
                    'name_ar' => 'ابوالعرج'
                ],
                [
                    'id' => 2909,
                    'country_id' => 1,
                    'external_id' => '407258938',
                    'name_en' => 'Al Daoud',
                    'name_ar' => 'ال داوود'
                ],
                [
                    'id' => 2910,
                    'country_id' => 1,
                    'external_id' => '1780704827',
                    'name_en' => 'Al-Mafrawshtiyeh and its environs',
                    'name_ar' => 'المفراوشطيةوماحولها'
                ],
                [
                    'id' => 2911,
                    'country_id' => 1,
                    'external_id' => '1141474564',
                    'name_en' => 'Al Ashraaf',
                    'name_ar' => 'الاشراف'
                ],
                [
                    'id' => 2912,
                    'country_id' => 1,
                    'external_id' => '299279365',
                    'name_en' => 'Alsahal Al\'Aelaa',
                    'name_ar' => 'السحال الاعلى'
                ],
                [
                    'id' => 2913,
                    'country_id' => 1,
                    'external_id' => '1672725254',
                    'name_en' => 'Al Qua Al Asfal',
                    'name_ar' => 'القوع الأسفل'
                ],
                [
                    'id' => 2914,
                    'country_id' => 1,
                    'external_id' => '1033429511',
                    'name_en' => 'Ash-Shahyah',
                    'name_ar' => 'الشحيه'
                ],
                [
                    'id' => 2915,
                    'country_id' => 1,
                    'external_id' => '258277632',
                    'name_en' => 'Al Rawghah',
                    'name_ar' => 'ال روغه'
                ],
                [
                    'id' => 2916,
                    'country_id' => 1,
                    'external_id' => '1497505793',
                    'name_en' => 'Al Oshwa Al Janubyah',
                    'name_ar' => 'العشوة الجنوبية'
                ],
                [
                    'id' => 2917,
                    'country_id' => 1,
                    'external_id' => '724520706',
                    'name_en' => 'Al-Ghareethah',
                    'name_ar' => 'الغريثه'
                ],
                [
                    'id' => 2918,
                    'country_id' => 1,
                    'external_id' => '83127811',
                    'name_en' => 'Ned Aqab',
                    'name_ar' => 'نيد عقب'
                ],
                [
                    'id' => 2919,
                    'country_id' => 1,
                    'external_id' => '1456639244',
                    'name_en' => 'Al Fawareq',
                    'name_ar' => 'الفوارق'
                ],
                [
                    'id' => 2920,
                    'country_id' => 1,
                    'external_id' => '549432333',
                    'name_en' => 'Al Tadadegh',
                    'name_ar' => 'التدادغ'
                ],
                [
                    'id' => 2921,
                    'country_id' => 1,
                    'external_id' => '1921305358',
                    'name_en' => 'Wadi Al-Bir',
                    'name_ar' => 'وادى البير'
                ],
                [
                    'id' => 2922,
                    'country_id' => 1,
                    'external_id' => '1281485327',
                    'name_en' => 'Al Ghalah',
                    'name_ar' => 'الغاله'
                ],
                [
                    'id' => 2923,
                    'country_id' => 1,
                    'external_id' => '508430600',
                    'name_en' => 'Al Huwaya',
                    'name_ar' => 'الحويه'
                ],
                [
                    'id' => 2924,
                    'country_id' => 1,
                    'external_id' => '1747658761',
                    'name_en' => 'Kherqah',
                    'name_ar' => 'خرقه'
                ],
                [
                    'id' => 2925,
                    'country_id' => 1,
                    'external_id' => '1173370634',
                    'name_en' => 'Jawfanaan',
                    'name_ar' => 'جوفا'
                ],
                [
                    'id' => 2926,
                    'country_id' => 1,
                    'external_id' => '400381451',
                    'name_en' => 'Ghabyah',
                    'name_ar' => 'غابيه'
                ],
                [
                    'id' => 2927,
                    'country_id' => 1,
                    'external_id' => '1639609620',
                    'name_en' => 'As-Samrah',
                    'name_ar' => 'السمره'
                ],
                [
                    'id' => 2928,
                    'country_id' => 1,
                    'external_id' => '864064533',
                    'name_en' => 'Ash-Shabab Alabdeli',
                    'name_ar' => 'الشباب العبدلى'
                ],
                [
                    'id' => 2929,
                    'country_id' => 1,
                    'external_id' => '225293078',
                    'name_en' => 'Om Qaien',
                    'name_ar' => 'ام قاعين'
                ],
                [
                    'id' => 2930,
                    'country_id' => 1,
                    'external_id' => '1598738967',
                    'name_en' => 'Suwayqah wa Alkasarah',
                    'name_ar' => 'صويقه والكساره'
                ],
                [
                    'id' => 2931,
                    'country_id' => 1,
                    'external_id' => '689434896',
                    'name_en' => 'Al Kararah',
                    'name_ar' => 'الكرره'
                ],
                [
                    'id' => 2932,
                    'country_id' => 1,
                    'external_id' => '2063339537',
                    'name_en' => 'Om Al Mahu',
                    'name_ar' => 'ام المحو'
                ],
                [
                    'id' => 2933,
                    'country_id' => 1,
                    'external_id' => '1423523602',
                    'name_en' => 'Abak',
                    'name_ar' => 'عبك'
                ],
                [
                    'id' => 2934,
                    'country_id' => 1,
                    'external_id' => '648437267',
                    'name_en' => 'Alghamar',
                    'name_ar' => 'الغمر'
                ],
                [
                    'id' => 2935,
                    'country_id' => 1,
                    'external_id' => '1887665436',
                    'name_en' => 'Jabal Shuqara\'',
                    'name_ar' => 'جبل شقراء'
                ],
                [
                    'id' => 2936,
                    'country_id' => 1,
                    'external_id' => '1114217501',
                    'name_en' => 'Haydan',
                    'name_ar' => 'حيدان'
                ],
                [
                    'id' => 2937,
                    'country_id' => 1,
                    'external_id' => '473348894',
                    'name_en' => 'Al Lahaj',
                    'name_ar' => 'اللحج'
                ],
                [
                    'id' => 2938,
                    'country_id' => 1,
                    'external_id' => '1846794783',
                    'name_en' => 'Jandalah',
                    'name_ar' => 'جندله'
                ],
                [
                    'id' => 2939,
                    'country_id' => 1,
                    'external_id' => '1006172440',
                    'name_en' => 'Ser Al-Ghalah',
                    'name_ar' => 'سر الغله'
                ],
                [
                    'id' => 2940,
                    'country_id' => 1,
                    'external_id' => '365238297',
                    'name_en' => 'Al Madmadmah Al Musawedah',
                    'name_ar' => 'المدمدمه المساوده'
                ],
                [
                    'id' => 2941,
                    'country_id' => 1,
                    'external_id' => '1738680090',
                    'name_en' => 'Alghalah wa Farm of Alhayaah',
                    'name_ar' => 'الغاله ومزرعة الهيئة'
                ],
                [
                    'id' => 2942,
                    'country_id' => 1,
                    'external_id' => '831473179',
                    'name_en' => 'Mujrem Ash-Sharaheli',
                    'name_ar' => 'مجرم الشراحيلي'
                ],
                [
                    'id' => 2943,
                    'country_id' => 1,
                    'external_id' => '55862628',
                    'name_en' => 'As-Sandar',
                    'name_ar' => 'السندر'
                ],
                [
                    'id' => 2944,
                    'country_id' => 1,
                    'external_id' => '1563591781',
                    'name_en' => 'Almuqbil',
                    'name_ar' => 'المقبل'
                ],
                [
                    'id' => 2945,
                    'country_id' => 1,
                    'external_id' => '790602598',
                    'name_en' => 'Alwashar',
                    'name_ar' => 'الوشر'
                ],
                [
                    'id' => 2946,
                    'country_id' => 1,
                    'external_id' => '2028257895',
                    'name_en' => 'Marwah Masqiyah',
                    'name_ar' => 'مروه مسقيه'
                ],
                [
                    'id' => 2947,
                    'country_id' => 1,
                    'external_id' => '1254220128',
                    'name_en' => 'Wadi As-Sahyah',
                    'name_ar' => 'وادي الساهية'
                ],
                [
                    'id' => 2948,
                    'country_id' => 1,
                    'external_id' => '615383137',
                    'name_en' => 'Al Mohamed Sherif',
                    'name_ar' => 'ال محمد شريف'
                ],
                [
                    'id' => 2949,
                    'country_id' => 1,
                    'external_id' => '1988833122',
                    'name_en' => 'Masalah',
                    'name_ar' => 'مسله'
                ],
                [
                    'id' => 2950,
                    'country_id' => 1,
                    'external_id' => '1079004771',
                    'name_en' => 'Ned Allammah',
                    'name_ar' => 'نيد اللمه'
                ],
                [
                    'id' => 2951,
                    'country_id' => 1,
                    'external_id' => '306015596',
                    'name_en' => 'Ethlam',
                    'name_ar' => 'عثلم'
                ],
                [
                    'id' => 2952,
                    'country_id' => 1,
                    'external_id' => '1813744749',
                    'name_en' => 'Kadum',
                    'name_ar' => 'كادوم'
                ],
                [
                    'id' => 2953,
                    'country_id' => 1,
                    'external_id' => '971025262',
                    'name_en' => 'Hayaf Qafa',
                    'name_ar' => 'حياف   قفا'
                ],
                [
                    'id' => 2954,
                    'country_id' => 1,
                    'external_id' => '198036079',
                    'name_en' => 'Al Marma and surroundings',
                    'name_ar' => 'المرما وماحولها'
                ],
                [
                    'id' => 2955,
                    'country_id' => 1,
                    'external_id' => '1705699688',
                    'name_en' => 'Aljahfaruh',
                    'name_ar' => 'الجحفره'
                ],
                [
                    'id' => 2956,
                    'country_id' => 1,
                    'external_id' => '930547817',
                    'name_en' => 'Al Mafaleeh',
                    'name_ar' => 'المفاليح'
                ],
                [
                    'id' => 2957,
                    'country_id' => 1,
                    'external_id' => '22812522',
                    'name_en' => 'Abo Al Huwar',
                    'name_ar' => 'ابو الحوار'
                ],
                [
                    'id' => 2958,
                    'country_id' => 1,
                    'external_id' => '1396258411',
                    'name_en' => 'Al Aslam',
                    'name_ar' => 'آل اسلم'
                ],
                [
                    'id' => 2959,
                    'country_id' => 1,
                    'external_id' => '755389812',
                    'name_en' => 'Manakh',
                    'name_ar' => 'مناخ'
                ],
                [
                    'id' => 2960,
                    'country_id' => 1,
                    'external_id' => '2128835701',
                    'name_en' => 'Almafraq',
                    'name_ar' => 'المفرق'
                ],
                [
                    'id' => 2961,
                    'country_id' => 1,
                    'external_id' => '1221170038',
                    'name_en' => 'Reqat Ash-Shyukh',
                    'name_ar' => 'رقة الشيوخ'
                ],
                [
                    'id' => 2962,
                    'country_id' => 1,
                    'external_id' => '446083703',
                    'name_en' => 'Zahwan',
                    'name_ar' => 'زهوان'
                ],
                [
                    'id' => 2963,
                    'country_id' => 1,
                    'external_id' => '1953747312',
                    'name_en' => 'Haqba',
                    'name_ar' => 'حقباء'
                ],
                [
                    'id' => 2964,
                    'country_id' => 1,
                    'external_id' => '1180233841',
                    'name_en' => 'Albathanah',
                    'name_ar' => 'البثنه'
                ],
                [
                    'id' => 2965,
                    'country_id' => 1,
                    'external_id' => '270868338',
                    'name_en' => 'Um And',
                    'name_ar' => 'ام عدن'
                ],
                [
                    'id' => 2966,
                    'country_id' => 1,
                    'external_id' => '1644314227',
                    'name_en' => 'Al Ayyas',
                    'name_ar' => 'ال عياس'
                ],
                [
                    'id' => 2967,
                    'country_id' => 1,
                    'external_id' => '1072651644',
                    'name_en' => 'Alhannah',
                    'name_ar' => 'الحنا'
                ],
                [
                    'id' => 2968,
                    'country_id' => 1,
                    'external_id' => '162823293',
                    'name_en' => 'Hayal',
                    'name_ar' => 'حيال'
                ],
                [
                    'id' => 2969,
                    'country_id' => 1,
                    'external_id' => '1536334718',
                    'name_en' => 'Zawat Alqaa wa Rudhah Alqaabi',
                    'name_ar' => 'ذوات القاعه وردحه الكعبي'
                ],
                [
                    'id' => 2970,
                    'country_id' => 1,
                    'external_id' => '897563263',
                    'name_en' => 'Al Qasyan',
                    'name_ar' => 'القسيان'
                ],
                [
                    'id' => 2971,
                    'country_id' => 1,
                    'external_id' => '121952632',
                    'name_en' => 'Ash-Shaqabah',
                    'name_ar' => 'الشقبه'
                ],
                [
                    'id' => 2972,
                    'country_id' => 1,
                    'external_id' => '1361180793',
                    'name_en' => 'Om Ad-Dud Al-Olya',
                    'name_ar' => 'أم الدود العليا'
                ],
                [
                    'id' => 2973,
                    'country_id' => 1,
                    'external_id' => '588121978',
                    'name_en' => 'Alrifduh',
                    'name_ar' => 'الرفده'
                ],
                [
                    'id' => 2974,
                    'country_id' => 1,
                    'external_id' => '2095785595',
                    'name_en' => 'Khushama',
                    'name_ar' => 'خشاما'
                ],
                [
                    'id' => 2975,
                    'country_id' => 1,
                    'external_id' => '1320174916',
                    'name_en' => 'Zaboob',
                    'name_ar' => 'ذبوب'
                ],
                [
                    'id' => 2976,
                    'country_id' => 1,
                    'external_id' => '412968005',
                    'name_en' => 'Hayjat Ramlan',
                    'name_ar' => 'هيجة رملان'
                ],
                [
                    'id' => 2977,
                    'country_id' => 1,
                    'external_id' => '1786479430',
                    'name_en' => 'Lahj Sayyalah',
                    'name_ar' => 'لحج سياله'
                ],
                [
                    'id' => 2978,
                    'country_id' => 1,
                    'external_id' => '1145086535',
                    'name_en' => 'Khwlh',
                    'name_ar' => 'خوله'
                ],
                [
                    'id' => 2979,
                    'country_id' => 1,
                    'external_id' => '372097344',
                    'name_en' => 'Shamsyah',
                    'name_ar' => 'شمسيه'
                ],
                [
                    'id' => 2980,
                    'country_id' => 1,
                    'external_id' => '1611325505',
                    'name_en' => 'Saqwa Matotah',
                    'name_ar' => 'سقوى معطوطة'
                ],
                [
                    'id' => 2981,
                    'country_id' => 1,
                    'external_id' => '1037504322',
                    'name_en' => 'Dubayjan',
                    'name_ar' => 'دبيجان'
                ],
                [
                    'id' => 2982,
                    'country_id' => 1,
                    'external_id' => '263990851',
                    'name_en' => 'Jar Abo Al Ashr',
                    'name_ar' => 'جر ابوالعشر'
                ],
                [
                    'id' => 2983,
                    'country_id' => 1,
                    'external_id' => '1503219020',
                    'name_en' => 'Ar-Rahwah',
                    'name_ar' => 'الرهـــوه'
                ],
                [
                    'id' => 2984,
                    'country_id' => 1,
                    'external_id' => '728132685',
                    'name_en' => 'Rebsan',
                    'name_ar' => 'ريسان'
                ],
                [
                    'id' => 2985,
                    'country_id' => 1,
                    'external_id' => '88902478',
                    'name_en' => 'Ibn Shaeah',
                    'name_ar' => 'ابن شائعه'
                ],
                [
                    'id' => 2986,
                    'country_id' => 1,
                    'external_id' => '1462348367',
                    'name_en' => 'Ned Abar',
                    'name_ar' => 'نيد ابار'
                ],
                [
                    'id' => 2987,
                    'country_id' => 1,
                    'external_id' => '553044296',
                    'name_en' => 'Ash-Shutayfi',
                    'name_ar' => 'الشطيفي'
                ],
                [
                    'id' => 2988,
                    'country_id' => 1,
                    'external_id' => '1926490185',
                    'name_en' => 'Al Rajhiyyah',
                    'name_ar' => 'الراجحيه'
                ],
                [
                    'id' => 2989,
                    'country_id' => 1,
                    'external_id' => '1287190346',
                    'name_en' => 'Ben Ar-Radeef',
                    'name_ar' => 'بين الرديف'
                ],
                [
                    'id' => 2990,
                    'country_id' => 1,
                    'external_id' => '512038475',
                    'name_en' => 'Umm Albaram',
                    'name_ar' => 'ام البرام'
                ],
                [
                    'id' => 2991,
                    'country_id' => 1,
                    'external_id' => '1751266644',
                    'name_en' => 'Almezam and its surroundings',
                    'name_ar' => 'المزام وماحولة'
                ],
                [
                    'id' => 2992,
                    'country_id' => 1,
                    'external_id' => '978277461',
                    'name_en' => 'Al Mashurat',
                    'name_ar' => 'المشورات'
                ],
                [
                    'id' => 2993,
                    'country_id' => 1,
                    'external_id' => '336884566',
                    'name_en' => 'As-Sahel',
                    'name_ar' => 'الساحل'
                ],
                [
                    'id' => 2994,
                    'country_id' => 1,
                    'external_id' => '1643287127',
                    'name_en' => 'Alhulayhel',
                    'name_ar' => 'الحليحل'
                ],
                [
                    'id' => 2995,
                    'country_id' => 1,
                    'external_id' => '870297936',
                    'name_en' => 'Al Qaem Al Asfal',
                    'name_ar' => 'القائم الاسفل'
                ],
                [
                    'id' => 2996,
                    'country_id' => 1,
                    'external_id' => '228905041',
                    'name_en' => 'Adh-Dhalaf',
                    'name_ar' => 'الظلف'
                ],
                [
                    'id' => 2997,
                    'country_id' => 1,
                    'external_id' => '1602355026',
                    'name_en' => 'Almuhsim Al\'Aelaa',
                    'name_ar' => 'المحصم الاعلى'
                ],
                [
                    'id' => 2998,
                    'country_id' => 1,
                    'external_id' => '695082579',
                    'name_en' => 'Zeraa Aleehi Ali',
                    'name_ar' => 'ذراع اليحى على'
                ],
                [
                    'id' => 2999,
                    'country_id' => 1,
                    'external_id' => '2068528476',
                    'name_en' => 'Makhshoush Sai Al-Dush',
                    'name_ar' => 'مخشوش  سعى الدش'
                ],
                [
                    'id' => 3000,
                    'country_id' => 1,
                    'external_id' => '1427135581',
                    'name_en' => 'Raeyet Al Beshamah',
                    'name_ar' => 'راعيه البشامه'
                ],
                [
                    'id' => 3001,
                    'country_id' => 1,
                    'external_id' => '654146398',
                    'name_en' => 'Al Qawmah',
                    'name_ar' => 'القومه'
                ],
                [
                    'id' => 3002,
                    'country_id' => 1,
                    'external_id' => '1893440095',
                    'name_en' => 'Ash-Shar\'ai wa As-Saq',
                    'name_ar' => 'الشريعه والساق'
                ],
                [
                    'id' => 3003,
                    'country_id' => 1,
                    'external_id' => '1117829464',
                    'name_en' => 'Allahab wa Zam Shefaa',
                    'name_ar' => 'اللحب وذم شفاء'
                ],
                [
                    'id' => 3004,
                    'country_id' => 1,
                    'external_id' => '479058009',
                    'name_en' => 'Al Hamah',
                    'name_ar' => 'الحمه'
                ],
                [
                    'id' => 3005,
                    'country_id' => 1,
                    'external_id' => '1852499802',
                    'name_en' => 'Alkhayafeen',
                    'name_ar' => 'الخيافين'
                ],
                [
                    'id' => 3006,
                    'country_id' => 1,
                    'external_id' => '943130203',
                    'name_en' => 'Al Kanah',
                    'name_ar' => 'الكنه'
                ],
                [
                    'id' => 3007,
                    'country_id' => 1,
                    'external_id' => '169616548',
                    'name_en' => 'Mardiyah',
                    'name_ar' => 'مرضيه'
                ],
                [
                    'id' => 3008,
                    'country_id' => 1,
                    'external_id' => '1744389029',
                    'name_en' => 'Ar-Rusasah',
                    'name_ar' => 'الرصاصه'
                ],
                [
                    'id' => 3009,
                    'country_id' => 1,
                    'external_id' => '835084966',
                    'name_en' => 'Al Maaleeq',
                    'name_ar' => 'المعاليق'
                ],
                [
                    'id' => 3010,
                    'country_id' => 1,
                    'external_id' => '61637031',
                    'name_en' => 'Hybail Ash-Sherafi',
                    'name_ar' => 'حبيل الشرافى'
                ],
                [
                    'id' => 3011,
                    'country_id' => 1,
                    'external_id' => '1569300640',
                    'name_en' => 'Maqar',
                    'name_ar' => 'مقر'
                ],
                [
                    'id' => 3012,
                    'country_id' => 1,
                    'external_id' => '794218401',
                    'name_en' => 'Awbad',
                    'name_ar' => 'اوباد'
                ],
                [
                    'id' => 3013,
                    'country_id' => 1,
                    'external_id' => '2033446562',
                    'name_en' => 'Ash-Shauf',
                    'name_ar' => 'الشعوف'
                ],
                [
                    'id' => 3014,
                    'country_id' => 1,
                    'external_id' => '1259867555',
                    'name_en' => 'Fash Al Barakah Kabeesh',
                    'name_ar' => 'فش البركه كبيش'
                ],
                [
                    'id' => 3015,
                    'country_id' => 1,
                    'external_id' => '618998956',
                    'name_en' => 'Qaem Aishah',
                    'name_ar' => 'قائم عائشه'
                ],
                [
                    'id' => 3016,
                    'country_id' => 1,
                    'external_id' => '1992444845',
                    'name_en' => 'As-Sawmalah',
                    'name_ar' => 'الصومله'
                ],
                [
                    'id' => 3017,
                    'country_id' => 1,
                    'external_id' => '1085237934',
                    'name_en' => 'Harf Aljaadah',
                    'name_ar' => 'حرف الجعده'
                ],
                [
                    'id' => 3018,
                    'country_id' => 1,
                    'external_id' => '309692847',
                    'name_en' => 'As-Sawani',
                    'name_ar' => 'السوانى'
                ],
                [
                    'id' => 3019,
                    'country_id' => 1,
                    'external_id' => '1817356456',
                    'name_en' => 'Murmadah',
                    'name_ar' => 'مرمده'
                ],
                [
                    'id' => 3020,
                    'country_id' => 1,
                    'external_id' => '1044363177',
                    'name_en' => 'Al Manafir',
                    'name_ar' => 'المنافير'
                ],
                [
                    'id' => 3021,
                    'country_id' => 1,
                    'external_id' => '134534826',
                    'name_en' => 'As-Saqaan',
                    'name_ar' => 'الصقعان'
                ],
                [
                    'id' => 3022,
                    'country_id' => 1,
                    'external_id' => '1709307307',
                    'name_en' => 'Al Hawshi Al Asfal',
                    'name_ar' => 'الحوشبي الاسفل'
                ],
                [
                    'id' => 3023,
                    'country_id' => 1,
                    'external_id' => '936252596',
                    'name_en' => 'Umm Dawara\'',
                    'name_ar' => 'ام دوراء'
                ],
                [
                    'id' => 3024,
                    'country_id' => 1,
                    'external_id' => '27997109',
                    'name_en' => 'Border Guard point',
                    'name_ar' => 'نقطة سلاح الحدود'
                ],
                [
                    'id' => 3025,
                    'country_id' => 1,
                    'external_id' => '1399870134',
                    'name_en' => 'Jar Abu Rasin Al-Jar Al-Sufli',
                    'name_ar' => 'جر ابوراسين الجر الاسفل'
                ],
                [
                    'id' => 3026,
                    'country_id' => 1,
                    'external_id' => '761098679',
                    'name_en' => 'Al-Dhuha Al-Adili',
                    'name_ar' => 'الضحى العيدلي'
                ],
                [
                    'id' => 3027,
                    'country_id' => 1,
                    'external_id' => '2134610096',
                    'name_en' => 'Al Khabbarah',
                    'name_ar' => 'الخباره'
                ],
                [
                    'id' => 3028,
                    'country_id' => 1,
                    'external_id' => '1224785841',
                    'name_en' => 'Jamjan',
                    'name_ar' => 'جمحان'
                ],
                [
                    'id' => 3029,
                    'country_id' => 1,
                    'external_id' => '451796658',
                    'name_en' => 'Waqie',
                    'name_ar' => 'وقيع'
                ],
                [
                    'id' => 3030,
                    'country_id' => 1,
                    'external_id' => '1959460275',
                    'name_en' => 'Alqasabah wa Almaded',
                    'name_ar' => 'القصبه والمديد'
                ],
                [
                    'id' => 3031,
                    'country_id' => 1,
                    'external_id' => '1184308412',
                    'name_en' => 'Mubrikat',
                    'name_ar' => 'مبركات'
                ],
                [
                    'id' => 3032,
                    'country_id' => 1,
                    'external_id' => '276577213',
                    'name_en' => 'Al Maqbei',
                    'name_ar' => 'المقبعى'
                ],
                [
                    'id' => 3033,
                    'country_id' => 1,
                    'external_id' => '1650023102',
                    'name_en' => 'Ad-Datheri',
                    'name_ar' => 'الداثرى'
                ],
                [
                    'id' => 3034,
                    'country_id' => 1,
                    'external_id' => '1009154495',
                    'name_en' => 'Al Lajamah',
                    'name_ar' => 'اللجمه'
                ],
                [
                    'id' => 3035,
                    'country_id' => 1,
                    'external_id' => '235706552',
                    'name_en' => 'Al-Sana',
                    'name_ar' => 'السعنة'
                ],
                [
                    'id' => 3036,
                    'country_id' => 1,
                    'external_id' => '1542039481',
                    'name_en' => 'Qarn Om Khafah',
                    'name_ar' => 'قرن ام خافه'
                ],
                [
                    'id' => 3037,
                    'country_id' => 1,
                    'external_id' => '901170874',
                    'name_en' => 'Al Matahen',
                    'name_ar' => 'المطاحن'
                ],
                [
                    'id' => 3038,
                    'country_id' => 1,
                    'external_id' => '127133115',
                    'name_en' => 'Taghab, Al Hantish, and their environs',
                    'name_ar' => 'تغب وآل حنتيش وما حولها'
                ],
                [
                    'id' => 3039,
                    'country_id' => 1,
                    'external_id' => '1366819972',
                    'name_en' => 'Al Kashmah',
                    'name_ar' => 'الكشمة'
                ],
                [
                    'id' => 3040,
                    'country_id' => 1,
                    'external_id' => '591733637',
                    'name_en' => 'Hafayana',
                    'name_ar' => 'حفايا'
                ],
                [
                    'id' => 3041,
                    'country_id' => 1,
                    'external_id' => '2099397254',
                    'name_en' => 'Alhudamah',
                    'name_ar' => 'الهضمه'
                ],
                [
                    'id' => 3042,
                    'country_id' => 1,
                    'external_id' => '1326408071',
                    'name_en' => 'Alraqieih',
                    'name_ar' => 'الرقيعيه'
                ],
                [
                    'id' => 3043,
                    'country_id' => 1,
                    'external_id' => '416645248',
                    'name_en' => 'Om Al Haseer',
                    'name_ar' => 'ام الحسير'
                ],
                [
                    'id' => 3044,
                    'country_id' => 1,
                    'external_id' => '1790095233',
                    'name_en' => 'Al Khabat',
                    'name_ar' => 'الخبت'
                ],
                [
                    'id' => 3045,
                    'country_id' => 1,
                    'external_id' => '1151323778',
                    'name_en' => 'Dughayshah',
                    'name_ar' => 'دغيشه'
                ],
                [
                    'id' => 3046,
                    'country_id' => 1,
                    'external_id' => '375713155',
                    'name_en' => 'Farhet Ad-Dafri',
                    'name_ar' => 'فرحه الدفرى'
                ],
                [
                    'id' => 3047,
                    'country_id' => 1,
                    'external_id' => '1614875788',
                    'name_en' => 'Hulat Bin Shadid',
                    'name_ar' => 'حلة بن شديد'
                ],
                [
                    'id' => 3048,
                    'country_id' => 1,
                    'external_id' => '841886605',
                    'name_en' => 'Ned Quaa wa Almashtal',
                    'name_ar' => 'نيد قوع والمشتل'
                ],
                [
                    'id' => 3049,
                    'country_id' => 1,
                    'external_id' => '202066574',
                    'name_en' => 'Almaeasir',
                    'name_ar' => 'المعاسير'
                ],
                [
                    'id' => 3050,
                    'country_id' => 1,
                    'external_id' => '1506830735',
                    'name_en' => 'Mesrar',
                    'name_ar' => 'مسرار'
                ],
                [
                    'id' => 3051,
                    'country_id' => 1,
                    'external_id' => '733907080',
                    'name_en' => 'Khalaj',
                    'name_ar' => 'خلج'
                ],
                [
                    'id' => 3052,
                    'country_id' => 1,
                    'external_id' => '94082953',
                    'name_en' => 'Alhawyah wa Radhet Ghaylan',
                    'name_ar' => 'الحوبه وردحه غيلان'
                ],
                [
                    'id' => 3053,
                    'country_id' => 1,
                    'external_id' => '1465955978',
                    'name_en' => 'Ned Majba',
                    'name_ar' => 'نيد مجبا'
                ],
                [
                    'id' => 3054,
                    'country_id' => 1,
                    'external_id' => '558749067',
                    'name_en' => 'Ash-Shallah',
                    'name_ar' => 'الشله'
                ],
                [
                    'id' => 3055,
                    'country_id' => 1,
                    'external_id' => '1932194964',
                    'name_en' => 'Jakhirah',
                    'name_ar' => 'جخيره'
                ],
                [
                    'id' => 3056,
                    'country_id' => 1,
                    'external_id' => '1291260821',
                    'name_en' => 'Bazei',
                    'name_ar' => 'بازغ'
                ],
                [
                    'id' => 3057,
                    'country_id' => 1,
                    'external_id' => '517747350',
                    'name_en' => 'Al Mughashi',
                    'name_ar' => 'المغاشي'
                ],
                [
                    'id' => 3058,
                    'country_id' => 1,
                    'external_id' => '1756975511',
                    'name_en' => 'Hatbayah',
                    'name_ar' => 'حطبايه'
                ],
                [
                    'id' => 3059,
                    'country_id' => 1,
                    'external_id' => '981889168',
                    'name_en' => 'Alqanaziz Alsuflaa',
                    'name_ar' => 'القنازيز السفلى'
                ],
                [
                    'id' => 3060,
                    'country_id' => 1,
                    'external_id' => '342663057',
                    'name_en' => 'Qayim Hawis',
                    'name_ar' => 'قايم حويس'
                ],
                [
                    'id' => 3061,
                    'country_id' => 1,
                    'external_id' => '1716108946',
                    'name_en' => 'Ar-Rakab',
                    'name_ar' => 'الركب'
                ],
                [
                    'id' => 3062,
                    'country_id' => 1,
                    'external_id' => '806804883',
                    'name_en' => 'Om Ad-Dud As-Sufla',
                    'name_ar' => 'أم الدود السفلى'
                ],
                [
                    'id' => 3063,
                    'country_id' => 1,
                    'external_id' => '234093724',
                    'name_en' => 'Dhahrih Bin Majur',
                    'name_ar' => 'ظهره بن ماجور'
                ],
                [
                    'id' => 3064,
                    'country_id' => 1,
                    'external_id' => '1607998365',
                    'name_en' => 'Al Juwayer',
                    'name_ar' => 'الجوير'
                ],
                [
                    'id' => 3065,
                    'country_id' => 1,
                    'external_id' => '698694302',
                    'name_en' => 'Al Aawas',
                    'name_ar' => 'الاعواس'
                ],
                [
                    'id' => 3066,
                    'country_id' => 1,
                    'external_id' => '2072140191',
                    'name_en' => 'Qunbaa',
                    'name_ar' => 'قنبى'
                ],
                [
                    'id' => 3067,
                    'country_id' => 1,
                    'external_id' => '1433368728',
                    'name_en' => 'Almalaqa',
                    'name_ar' => 'الملقا'
                ],
                [
                    'id' => 3068,
                    'country_id' => 1,
                    'external_id' => '657819545',
                    'name_en' => 'Al Ghalamah',
                    'name_ar' => 'الغلمه'
                ],
                [
                    'id' => 3069,
                    'country_id' => 1,
                    'external_id' => '1897047706',
                    'name_en' => 'Qambura wa  Shat As-Sabaya',
                    'name_ar' => 'قمبورة وشط الصبايا'
                ],
                [
                    'id' => 3070,
                    'country_id' => 1,
                    'external_id' => '1124058523',
                    'name_en' => 'Al-Shaqah Al-Abadlah',
                    'name_ar' => 'الشاقه العبادله'
                ],
                [
                    'id' => 3071,
                    'country_id' => 1,
                    'external_id' => '482665700',
                    'name_en' => 'Almansie',
                    'name_ar' => 'المنصع'
                ],
                [
                    'id' => 3072,
                    'country_id' => 1,
                    'external_id' => '1856046053',
                    'name_en' => 'Ben Muqren wa Almujahideen and its surroundings',
                    'name_ar' => 'بين مقرن والمجاهدين وماحولها'
                ],
                [
                    'id' => 3073,
                    'country_id' => 1,
                    'external_id' => '948839142',
                    'name_en' => 'Alqahiruh',
                    'name_ar' => 'القاهره'
                ],
                [
                    'id' => 3074,
                    'country_id' => 1,
                    'external_id' => '174801383',
                    'name_en' => 'Al Malaqi',
                    'name_ar' => 'الملاقى'
                ],
                [
                    'id' => 3075,
                    'country_id' => 1,
                    'external_id' => '1680892128',
                    'name_en' => 'Ned Al Adi wa Alamami and its surroundings',
                    'name_ar' => 'نيد العادى والعمامي وما حولها'
                ],
                [
                    'id' => 3076,
                    'country_id' => 1,
                    'external_id' => '907972577',
                    'name_en' => 'Al Almuqnei',
                    'name_ar' => 'ال المقنع'
                ],
                [
                    'id' => 3077,
                    'country_id' => 1,
                    'external_id' => '66825954',
                    'name_en' => 'Qae Aljaearin',
                    'name_ar' => 'قاع الجعارين'
                ],
                [
                    'id' => 3078,
                    'country_id' => 1,
                    'external_id' => '1572916707',
                    'name_en' => 'Hulat Albanaya',
                    'name_ar' => 'حلة البنايا'
                ],
                [
                    'id' => 3079,
                    'country_id' => 1,
                    'external_id' => '799927532',
                    'name_en' => 'Abwsialuh',
                    'name_ar' => 'ابوسياله'
                ],
                [
                    'id' => 3080,
                    'country_id' => 1,
                    'external_id' => '2039090157',
                    'name_en' => 'Umm Sru',
                    'name_ar' => 'ام سرو'
                ],
                [
                    'id' => 3081,
                    'country_id' => 1,
                    'external_id' => '1264003822',
                    'name_en' => 'Seqam',
                    'name_ar' => 'سقام'
                ],
                [
                    'id' => 3082,
                    'country_id' => 1,
                    'external_id' => '624708079',
                    'name_en' => 'Al Burqan',
                    'name_ar' => 'آل برقان'
                ],
                [
                    'id' => 3083,
                    'country_id' => 1,
                    'external_id' => '1998153960',
                    'name_en' => 'Om At-Tuhal',
                    'name_ar' => 'ام الطحال'
                ],
                [
                    'id' => 3084,
                    'country_id' => 1,
                    'external_id' => '1088845801',
                    'name_en' => 'Ar-Razan',
                    'name_ar' => 'الرزان'
                ],
                [
                    'id' => 3085,
                    'country_id' => 1,
                    'external_id' => '315397866',
                    'name_en' => 'Alghulaylah',
                    'name_ar' => 'الغليله'
                ],
                [
                    'id' => 3086,
                    'country_id' => 1,
                    'external_id' => '1823061483',
                    'name_en' => 'Samil',
                    'name_ar' => 'صميل'
                ],
                [
                    'id' => 3087,
                    'country_id' => 1,
                    'external_id' => '1047975156',
                    'name_en' => 'Baysh Aleulya',
                    'name_ar' => 'بيش العليا'
                ],
                [
                    'id' => 3088,
                    'country_id' => 1,
                    'external_id' => '139719669',
                    'name_en' => 'Albizaruh',
                    'name_ar' => 'البزاره'
                ],
                [
                    'id' => 3089,
                    'country_id' => 1,
                    'external_id' => '1513624310',
                    'name_en' => 'Alhaymar Alhawarim',
                    'name_ar' => 'الحيمر   الحوارم'
                ],
                [
                    'id' => 3090,
                    'country_id' => 1,
                    'external_id' => '872755703',
                    'name_en' => 'Badi',
                    'name_ar' => 'بادى'
                ],
                [
                    'id' => 3091,
                    'country_id' => 1,
                    'external_id' => '31609072',
                    'name_en' => 'Hybail Almusawd',
                    'name_ar' => 'حبيل المسود'
                ],
                [
                    'id' => 3092,
                    'country_id' => 1,
                    'external_id' => '1406107633',
                    'name_en' => 'As-Sumayrat',
                    'name_ar' => 'السميرات'
                ],
                [
                    'id' => 3093,
                    'country_id' => 1,
                    'external_id' => '764780274',
                    'name_en' => 'Almuhsaluh',
                    'name_ar' => 'المحصله'
                ],
                [
                    'id' => 3094,
                    'country_id' => 1,
                    'external_id' => '2138226163',
                    'name_en' => 'Aljabaliah',
                    'name_ar' => 'الجباليه'
                ],
                [
                    'id' => 3095,
                    'country_id' => 1,
                    'external_id' => '1231019260',
                    'name_en' => 'Ghuman',
                    'name_ar' => 'غمان'
                ],
                [
                    'id' => 3096,
                    'country_id' => 1,
                    'external_id' => '455408637',
                    'name_en' => 'Marshuhuh',
                    'name_ar' => 'مرشوحه'
                ],
                [
                    'id' => 3097,
                    'country_id' => 1,
                    'external_id' => '1963006718',
                    'name_en' => 'Alqadi',
                    'name_ar' => 'القاضى'
                ],
                [
                    'id' => 3098,
                    'country_id' => 1,
                    'external_id' => '1190017535',
                    'name_en' => 'Al Sunaydali',
                    'name_ar' => 'الصنيدلى'
                ],
                [
                    'id' => 3099,
                    'country_id' => 1,
                    'external_id' => '281762040',
                    'name_en' => 'Alfasiluh',
                    'name_ar' => 'الفصيله'
                ],
                [
                    'id' => 3100,
                    'country_id' => 1,
                    'external_id' => '1653630969',
                    'name_en' => 'Abwalhshaf',
                    'name_ar' => 'ابوالحشاف'
                ],
                [
                    'id' => 3101,
                    'country_id' => 1,
                    'external_id' => '1014925050',
                    'name_en' => 'Almihsaruh',
                    'name_ar' => 'المحصاره'
                ],
                [
                    'id' => 3102,
                    'country_id' => 1,
                    'external_id' => '240887291',
                    'name_en' => 'Allathah Alabdeli and surroundings',
                    'name_ar' => 'اللعثه العبدلى وماحولها'
                ],
                [
                    'id' => 3103,
                    'country_id' => 1,
                    'external_id' => '1478542532',
                    'name_en' => 'Alquzaah Althawbei',
                    'name_ar' => 'القزعه الثويعى'
                ],
                [
                    'id' => 3104,
                    'country_id' => 1,
                    'external_id' => '705553349',
                    'name_en' => 'Umm Samar',
                    'name_ar' => 'ام سمر'
                ],
                [
                    'id' => 3105,
                    'country_id' => 1,
                    'external_id' => '132776646',
                    'name_en' => 'Merbaa',
                    'name_ar' => 'مرباء'
                ],
                [
                    'id' => 3106,
                    'country_id' => 1,
                    'external_id' => '1370956231',
                    'name_en' => 'Anbawyah',
                    'name_ar' => 'عنبوبه'
                ],
                [
                    'id' => 3107,
                    'country_id' => 1,
                    'external_id' => '597442752',
                    'name_en' => 'Albahhar',
                    'name_ar' => 'البحار'
                ],
                [
                    'id' => 3108,
                    'country_id' => 1,
                    'external_id' => '2105110465',
                    'name_en' => 'As-Saryah',
                    'name_ar' => 'السربه'
                ],
                [
                    'id' => 3109,
                    'country_id' => 1,
                    'external_id' => '1330089666',
                    'name_en' => 'Alrajfuh',
                    'name_ar' => 'الرجفه'
                ],
                [
                    'id' => 3110,
                    'country_id' => 1,
                    'external_id' => '422358467',
                    'name_en' => 'Al Masmur',
                    'name_ar' => 'المصمور'
                ],
                [
                    'id' => 3111,
                    'country_id' => 1,
                    'external_id' => '1795804364',
                    'name_en' => 'Dhabaruh AlDhDhahir',
                    'name_ar' => 'زباره الظاهر'
                ],
                [
                    'id' => 3112,
                    'country_id' => 1,
                    'external_id' => '1154935757',
                    'name_en' => 'Al Muqbel',
                    'name_ar' => 'آل مقبل'
                ],
                [
                    'id' => 3113,
                    'country_id' => 1,
                    'external_id' => '380832462',
                    'name_en' => 'Alzanquh',
                    'name_ar' => 'الزنقه'
                ],
                [
                    'id' => 3114,
                    'country_id' => 1,
                    'external_id' => '1620584911',
                    'name_en' => 'An-Nadha',
                    'name_ar' => 'الندحة'
                ],
                [
                    'id' => 3115,
                    'country_id' => 1,
                    'external_id' => '845498568',
                    'name_en' => 'Al Karsah',
                    'name_ar' => 'الكرسه'
                ],
                [
                    'id' => 3116,
                    'country_id' => 1,
                    'external_id' => '205674441',
                    'name_en' => 'Almataruh',
                    'name_ar' => 'المطاره'
                ],
                [
                    'id' => 3117,
                    'country_id' => 1,
                    'external_id' => '1580168906',
                    'name_en' => 'Alqiraeuh Alsharqiuh',
                    'name_ar' => 'القراعه الشرقيه'
                ],
                [
                    'id' => 3118,
                    'country_id' => 1,
                    'external_id' => '737514955',
                    'name_en' => 'Qaem Zanbaa',
                    'name_ar' => 'قائم زنبع'
                ],
                [
                    'id' => 3119,
                    'country_id' => 1,
                    'external_id' => '97694932',
                    'name_en' => 'Almakhariq',
                    'name_ar' => 'المخاريق'
                ],
                [
                    'id' => 3120,
                    'country_id' => 1,
                    'external_id' => '1472189397',
                    'name_en' => 'Al Ajeebah',
                    'name_ar' => 'آل عجيبه'
                ],
                [
                    'id' => 3121,
                    'country_id' => 1,
                    'external_id' => '562361046',
                    'name_en' => 'Alghawlah',
                    'name_ar' => 'الغوله'
                ],
                [
                    'id' => 3122,
                    'country_id' => 1,
                    'external_id' => '1935741399',
                    'name_en' => 'Almadarih',
                    'name_ar' => 'المداريه'
                ],
                [
                    'id' => 3123,
                    'country_id' => 1,
                    'external_id' => '1296969936',
                    'name_en' => 'Aljahayir',
                    'name_ar' => 'الجحائر'
                ],
                [
                    'id' => 3124,
                    'country_id' => 1,
                    'external_id' => '522936273',
                    'name_en' => 'Aleatfuh',
                    'name_ar' => 'العطفه'
                ],
                [
                    'id' => 3125,
                    'country_id' => 1,
                    'external_id' => '1760591570',
                    'name_en' => 'As-Seleiah',
                    'name_ar' => 'السلعيه'
                ],
                [
                    'id' => 3126,
                    'country_id' => 1,
                    'external_id' => '987667923',
                    'name_en' => 'Almefled',
                    'name_ar' => 'المفلد'
                ],
                [
                    'id' => 3127,
                    'country_id' => 1,
                    'external_id' => '347847900',
                    'name_en' => 'Hudn As-Sumayrah',
                    'name_ar' => 'حضن السميرة'
                ],
                [
                    'id' => 3128,
                    'country_id' => 1,
                    'external_id' => '1719720925',
                    'name_en' => 'Radwan',
                    'name_ar' => 'رضوان'
                ],
                [
                    'id' => 3129,
                    'country_id' => 1,
                    'external_id' => '812514014',
                    'name_en' => 'Alqasibat Aleulya',
                    'name_ar' => 'القصيبات العليا'
                ],
                [
                    'id' => 3130,
                    'country_id' => 1,
                    'external_id' => '38410719',
                    'name_en' => 'As-Sudrah',
                    'name_ar' => 'السدره'
                ],
                [
                    'id' => 3131,
                    'country_id' => 1,
                    'external_id' => '1545025752',
                    'name_en' => 'Al Menea',
                    'name_ar' => 'الميناء'
                ],
                [
                    'id' => 3132,
                    'country_id' => 1,
                    'external_id' => '704399321',
                    'name_en' => 'Al Qatawah',
                    'name_ar' => 'القطوعه'
                ],
                [
                    'id' => 3133,
                    'country_id' => 1,
                    'external_id' => '2077845210',
                    'name_en' => 'Zeraa Almahmah',
                    'name_ar' => 'ذراع المحماه'
                ],
                [
                    'id' => 3134,
                    'country_id' => 1,
                    'external_id' => '1437042139',
                    'name_en' => 'Almuhmil',
                    'name_ar' => 'المحمل'
                ],
                [
                    'id' => 3135,
                    'country_id' => 1,
                    'external_id' => '663528484',
                    'name_en' => 'As-Sablah',
                    'name_ar' => 'السبله'
                ],
                [
                    'id' => 3136,
                    'country_id' => 1,
                    'external_id' => '1902756645',
                    'name_en' => 'Umm Alqadb',
                    'name_ar' => 'ام القضب'
                ],
                [
                    'id' => 3137,
                    'country_id' => 1,
                    'external_id' => '1127670310',
                    'name_en' => 'Al Qasabah (Al Etaf)',
                    'name_ar' => 'القصبة (بالعطاف)'
                ],
                [
                    'id' => 3138,
                    'country_id' => 1,
                    'external_id' => '487784743',
                    'name_en' => 'Wa\'Adaa Qaemus',
                    'name_ar' => 'وادى قعموص'
                ],
                [
                    'id' => 3139,
                    'country_id' => 1,
                    'external_id' => '1861754912',
                    'name_en' => '\'Abu Aleakthl',
                    'name_ar' => 'ابو العكثل'
                ],
                [
                    'id' => 3140,
                    'country_id' => 1,
                    'external_id' => '952454945',
                    'name_en' => 'Alnawafiluh',
                    'name_ar' => 'النوافله'
                ],
                [
                    'id' => 3141,
                    'country_id' => 1,
                    'external_id' => '178417186',
                    'name_en' => 'Herman',
                    'name_ar' => 'هرمان'
                ],
                [
                    'id' => 3142,
                    'country_id' => 1,
                    'external_id' => '1686670627',
                    'name_en' => 'Abo Al Taneem',
                    'name_ar' => 'ابو التنعيم'
                ],
                [
                    'id' => 3143,
                    'country_id' => 1,
                    'external_id' => '911584300',
                    'name_en' => 'Sudi Sayal',
                    'name_ar' => 'سودي سيال'
                ],
                [
                    'id' => 3144,
                    'country_id' => 1,
                    'external_id' => '3328813',
                    'name_en' => 'Jadhe Al-Hussain',
                    'name_ar' => 'جاضع الحسين'
                ],
                [
                    'id' => 3145,
                    'country_id' => 1,
                    'external_id' => '1377823278',
                    'name_en' => 'Alaradyah',
                    'name_ar' => 'العرضيه'
                ],
                [
                    'id' => 3146,
                    'country_id' => 1,
                    'external_id' => '803473711',
                    'name_en' => 'Sadr Harej Al Kabeer',
                    'name_ar' => 'صدر حريج الكبير'
                ],
                [
                    'id' => 3147,
                    'country_id' => 1,
                    'external_id' => '2042701864',
                    'name_en' => 'Al Muderi',
                    'name_ar' => 'المديري'
                ],
                [
                    'id' => 3148,
                    'country_id' => 1,
                    'external_id' => '1269708585',
                    'name_en' => 'Al-Mutalaseqah',
                    'name_ar' => 'المتلاصقه'
                ],
                [
                    'id' => 3149,
                    'country_id' => 1,
                    'external_id' => '629888554',
                    'name_en' => 'Almubtaghi',
                    'name_ar' => 'المبتع'
                ],
                [
                    'id' => 3150,
                    'country_id' => 1,
                    'external_id' => '2001761579',
                    'name_en' => 'Qamburuh',
                    'name_ar' => 'قمبوره'
                ],
                [
                    'id' => 3151,
                    'country_id' => 1,
                    'external_id' => '1094620212',
                    'name_en' => 'Alshadaniuh',
                    'name_ar' => 'الشدنيه'
                ],
                [
                    'id' => 3152,
                    'country_id' => 1,
                    'external_id' => '320582453',
                    'name_en' => 'Almaqlue',
                    'name_ar' => 'المقلوع'
                ],
                [
                    'id' => 3153,
                    'country_id' => 1,
                    'external_id' => '1826673206',
                    'name_en' => 'Al-Halalah',
                    'name_ar' => 'الحلالة'
                ],
                [
                    'id' => 3154,
                    'country_id' => 1,
                    'external_id' => '1053684023',
                    'name_en' => 'Al Mozayraah',
                    'name_ar' => 'المزيرعه'
                ],
                [
                    'id' => 3155,
                    'country_id' => 1,
                    'external_id' => '145362992',
                    'name_en' => 'Samrah',
                    'name_ar' => 'سمره'
                ],
                [
                    'id' => 3156,
                    'country_id' => 1,
                    'external_id' => '1517764401',
                    'name_en' => 'Mujan',
                    'name_ar' => 'موجان'
                ],
                [
                    'id' => 3157,
                    'country_id' => 1,
                    'external_id' => '878468658',
                    'name_en' => 'Al Huzaya',
                    'name_ar' => 'الحذايا'
                ],
                [
                    'id' => 3158,
                    'country_id' => 1,
                    'external_id' => '104430899',
                    'name_en' => 'Abo Thawr',
                    'name_ar' => 'ابو ثور'
                ],
                [
                    'id' => 3159,
                    'country_id' => 1,
                    'external_id' => '1342676028',
                    'name_en' => 'Reqet Ar-Rashmaa',
                    'name_ar' => 'رقة الرشماء'
                ],
                [
                    'id' => 3160,
                    'country_id' => 1,
                    'external_id' => '770489149',
                    'name_en' => 'Kudrat Allaqih',
                    'name_ar' => 'كدرة اللقيه'
                ],
                [
                    'id' => 3161,
                    'country_id' => 1,
                    'external_id' => '2143935038',
                    'name_en' => 'Almaetin',
                    'name_ar' => 'المعطن'
                ],
                [
                    'id' => 3162,
                    'country_id' => 1,
                    'external_id' => '1234630975',
                    'name_en' => 'Buqaat Al Elaj',
                    'name_ar' => 'بقعة العلاج'
                ],
                [
                    'id' => 3163,
                    'country_id' => 1,
                    'external_id' => '460527672',
                    'name_en' => 'Alhuq',
                    'name_ar' => 'الحوق'
                ],
                [
                    'id' => 3164,
                    'country_id' => 1,
                    'external_id' => '1968711481',
                    'name_en' => 'Al Asalae',
                    'name_ar' => 'ال السلعي'
                ],
                [
                    'id' => 3165,
                    'country_id' => 1,
                    'external_id' => '1193625146',
                    'name_en' => 'Buqaa Maruh wa Alabsyah',
                    'name_ar' => 'بقعة مروح والعبسية'
                ],
                [
                    'id' => 3166,
                    'country_id' => 1,
                    'external_id' => '285369659',
                    'name_en' => 'Al-Masamir',
                    'name_ar' => 'المسامير'
                ],
                [
                    'id' => 3167,
                    'country_id' => 1,
                    'external_id' => '1659405316',
                    'name_en' => 'Alqarwaniah',
                    'name_ar' => 'القروانيه'
                ],
                [
                    'id' => 3168,
                    'country_id' => 1,
                    'external_id' => '1018536709',
                    'name_en' => 'Hulat bin Hayjan',
                    'name_ar' => 'حله بن هيجان'
                ],
                [
                    'id' => 3169,
                    'country_id' => 1,
                    'external_id' => '244498950',
                    'name_en' => 'Alqasibat Alsuflaa',
                    'name_ar' => 'القصيبات السفلى'
                ],
                [
                    'id' => 3170,
                    'country_id' => 1,
                    'external_id' => '1484775687',
                    'name_en' => 'Jar Maree',
                    'name_ar' => 'جر مريع'
                ],
                [
                    'id' => 3171,
                    'country_id' => 1,
                    'external_id' => '709099520',
                    'name_en' => 'Tawaluh',
                    'name_ar' => 'طواله'
                ],
                [
                    'id' => 3172,
                    'country_id' => 1,
                    'external_id' => '69283585',
                    'name_en' => 'Alnakhri',
                    'name_ar' => 'النخري'
                ],
                [
                    'id' => 3173,
                    'country_id' => 1,
                    'external_id' => '1443778050',
                    'name_en' => 'Mahdaa',
                    'name_ar' => 'مهدى'
                ],
                [
                    'id' => 3174,
                    'country_id' => 1,
                    'external_id' => '602631427',
                    'name_en' => 'Al Hano',
                    'name_ar' => 'الحنو'
                ],
                [
                    'id' => 3175,
                    'country_id' => 1,
                    'external_id' => '2108787724',
                    'name_en' => 'Awhamir Wallahjuh',
                    'name_ar' => 'اوحامر واللحجه'
                ],
                [
                    'id' => 3176,
                    'country_id' => 1,
                    'external_id' => '1335798541',
                    'name_en' => 'Al Marsadah',
                    'name_ar' => 'المرصده'
                ],
                [
                    'id' => 3177,
                    'country_id' => 1,
                    'external_id' => '427543054',
                    'name_en' => 'Hujibin',
                    'name_ar' => 'حجبين'
                ],
                [
                    'id' => 3178,
                    'country_id' => 1,
                    'external_id' => '1799416079',
                    'name_en' => 'Al Qulaa',
                    'name_ar' => 'القلاع'
                ],
                [
                    'id' => 3179,
                    'country_id' => 1,
                    'external_id' => '1160579080',
                    'name_en' => 'Kadamah',
                    'name_ar' => 'كدمه'
                ],
                [
                    'id' => 3180,
                    'country_id' => 1,
                    'external_id' => '386537225',
                    'name_en' => 'Satie',
                    'name_ar' => 'ساطع'
                ],
                [
                    'id' => 3181,
                    'country_id' => 1,
                    'external_id' => '1624716810',
                    'name_en' => 'Alghabir',
                    'name_ar' => 'الغبير'
                ],
                [
                    'id' => 3182,
                    'country_id' => 1,
                    'external_id' => '851203339',
                    'name_en' => 'Rayih',
                    'name_ar' => 'رايه'
                ],
                [
                    'id' => 3183,
                    'country_id' => 1,
                    'external_id' => '211383316',
                    'name_en' => 'Ned As-Sadrulqead',
                    'name_ar' => 'نيد الصدرولقعاد'
                ],
                [
                    'id' => 3184,
                    'country_id' => 1,
                    'external_id' => '1583846165',
                    'name_en' => 'Abwalnur',
                    'name_ar' => 'ابوالنور'
                ],
                [
                    'id' => 3185,
                    'country_id' => 1,
                    'external_id' => '676114966',
                    'name_en' => 'Alkhabtuh',
                    'name_ar' => 'الخبطه'
                ],
                [
                    'id' => 3186,
                    'country_id' => 1,
                    'external_id' => '2049560855',
                    'name_en' => 'Almushref Ad-Dafri',
                    'name_ar' => 'المشرف الدفرى'
                ],
                [
                    'id' => 3187,
                    'country_id' => 1,
                    'external_id' => '1475801104',
                    'name_en' => 'Esht Eaqiluh',
                    'name_ar' => 'عشة عقيله'
                ],
                [
                    'id' => 3188,
                    'country_id' => 1,
                    'external_id' => '567484177',
                    'name_en' => 'Shadan',
                    'name_ar' => 'شدان'
                ],
                [
                    'id' => 3189,
                    'country_id' => 1,
                    'external_id' => '1941454354',
                    'name_en' => 'Al Husam',
                    'name_ar' => 'الحصام'
                ],
                [
                    'id' => 3190,
                    'country_id' => 1,
                    'external_id' => '1300585747',
                    'name_en' => 'Albalisa',
                    'name_ar' => 'البليسة'
                ],
                [
                    'id' => 3191,
                    'country_id' => 1,
                    'external_id' => '526547996',
                    'name_en' => 'Shukr wa Hazamran',
                    'name_ar' => 'شكر وحزامران'
                ],
                [
                    'id' => 3192,
                    'country_id' => 1,
                    'external_id' => '1766365981',
                    'name_en' => 'Bid',
                    'name_ar' => 'بيض'
                ],
                [
                    'id' => 3193,
                    'country_id' => 1,
                    'external_id' => '991279646',
                    'name_en' => 'Almurawbaghah',
                    'name_ar' => 'المرويغه'
                ],
                [
                    'id' => 3194,
                    'country_id' => 1,
                    'external_id' => '351459615',
                    'name_en' => 'Almalahi',
                    'name_ar' => 'الملاحي'
                ],
                [
                    'id' => 3195,
                    'country_id' => 1,
                    'external_id' => '1725954072',
                    'name_en' => 'Tunatin',
                    'name_ar' => 'طناطن'
                ],
                [
                    'id' => 3196,
                    'country_id' => 1,
                    'external_id' => '816056089',
                    'name_en' => 'Alqanaziz Aleulya',
                    'name_ar' => 'القنازيز العليا'
                ],
                [
                    'id' => 3197,
                    'country_id' => 1,
                    'external_id' => '42018330',
                    'name_en' => 'Zeraa Albahr',
                    'name_ar' => 'ذراع البحر'
                ],
                [
                    'id' => 3198,
                    'country_id' => 1,
                    'external_id' => '1550730523',
                    'name_en' => 'Almukhayam',
                    'name_ar' => 'المخيم'
                ],
                [
                    'id' => 3199,
                    'country_id' => 1,
                    'external_id' => '776692836',
                    'name_en' => 'Hazer',
                    'name_ar' => 'حاذر'
                ],
                [
                    'id' => 3200,
                    'country_id' => 1,
                    'external_id' => '2014413669',
                    'name_en' => 'Ad-Damlaj',
                    'name_ar' => 'الدملج'
                ],
                [
                    'id' => 3201,
                    'country_id' => 1,
                    'external_id' => '1442751078',
                    'name_en' => 'Albataluh',
                    'name_ar' => 'البطله'
                ],
                [
                    'id' => 3202,
                    'country_id' => 1,
                    'external_id' => '668713319',
                    'name_en' => 'Almazin',
                    'name_ar' => 'المازن'
                ],
                [
                    'id' => 3203,
                    'country_id' => 1,
                    'external_id' => '1906368608',
                    'name_en' => 'Umm Almuhanad',
                    'name_ar' => 'ام المحاند'
                ],
                [
                    'id' => 3204,
                    'country_id' => 1,
                    'external_id' => '1133317985',
                    'name_en' => 'Mirfas',
                    'name_ar' => 'مرفاص'
                ],
                [
                    'id' => 3205,
                    'country_id' => 1,
                    'external_id' => '493497954',
                    'name_en' => 'Um Harjah',
                    'name_ar' => 'ام حرجه'
                ],
                [
                    'id' => 3206,
                    'country_id' => 1,
                    'external_id' => '1865895267',
                    'name_en' => 'Shaaf Al Matamyah',
                    'name_ar' => 'شعف المطاميه'
                ],
                [
                    'id' => 3207,
                    'country_id' => 1,
                    'external_id' => '958164076',
                    'name_en' => 'Anmi',
                    'name_ar' => 'انمي'
                ],
                [
                    'id' => 3208,
                    'country_id' => 1,
                    'external_id' => '184191853',
                    'name_en' => 'Aljua Ash-Sharaheli wa Hayet At-Tatweer',
                    'name_ar' => 'الجوه الشراحيلي وهيئة التطوير'
                ],
                [
                    'id' => 3209,
                    'country_id' => 1,
                    'external_id' => '1690806894',
                    'name_en' => '\'Abu Msud',
                    'name_ar' => 'ابو مسود'
                ],
                [
                    'id' => 3210,
                    'country_id' => 1,
                    'external_id' => '917293423',
                    'name_en' => 'Alkhazanuh',
                    'name_ar' => 'الخزانه'
                ],
                [
                    'id' => 3211,
                    'country_id' => 1,
                    'external_id' => '9037928',
                    'name_en' => 'Alhudban Buqaa Al Salman',
                    'name_ar' => 'الحدبان  بقعه ال سلمان'
                ],
                [
                    'id' => 3212,
                    'country_id' => 1,
                    'external_id' => '1381431145',
                    'name_en' => 'Almuaraf',
                    'name_ar' => 'المعرف'
                ],
                [
                    'id' => 3213,
                    'country_id' => 1,
                    'external_id' => '741545578',
                    'name_en' => 'Al Murabi',
                    'name_ar' => 'المرابي'
                ],
                [
                    'id' => 3214,
                    'country_id' => 1,
                    'external_id' => '2115515755',
                    'name_en' => 'Dimnat Alqabsih',
                    'name_ar' => 'دمنة القبسه'
                ],
                [
                    'id' => 3215,
                    'country_id' => 1,
                    'external_id' => '1273320564',
                    'name_en' => 'Nahamuh',
                    'name_ar' => 'نهامه'
                ],
                [
                    'id' => 3216,
                    'country_id' => 1,
                    'external_id' => '633500533',
                    'name_en' => 'Alquyashba\'',
                    'name_ar' => 'القيشباء'
                ],
                [
                    'id' => 3217,
                    'country_id' => 1,
                    'external_id' => '2007536246',
                    'name_en' => 'Alnusub wa Alhalfa and its surroundings',
                    'name_ar' => 'النصب والحلفا وماحولها'
                ],
                [
                    'id' => 3218,
                    'country_id' => 1,
                    'external_id' => '1098232183',
                    'name_en' => 'Alqamih',
                    'name_ar' => 'القامه'
                ],
                [
                    'id' => 3219,
                    'country_id' => 1,
                    'external_id' => '324194416',
                    'name_en' => 'Mahrus',
                    'name_ar' => 'محروص'
                ],
                [
                    'id' => 3220,
                    'country_id' => 1,
                    'external_id' => '1832910705',
                    'name_en' => 'Aldarabuh',
                    'name_ar' => 'الدربه'
                ],
                [
                    'id' => 3221,
                    'country_id' => 1,
                    'external_id' => '1057234546',
                    'name_en' => 'Alraqawinuh',
                    'name_ar' => 'الرقاونه'
                ],
                [
                    'id' => 3222,
                    'country_id' => 1,
                    'external_id' => '148979059',
                    'name_en' => 'Al Mushref Al Abdeli',
                    'name_ar' => 'المشرف العبدلى'
                ],
                [
                    'id' => 3223,
                    'country_id' => 1,
                    'external_id' => '1523473532',
                    'name_en' => 'An-Nafyah wa Alghalylah',
                    'name_ar' => 'النافيه والغليله'
                ],
                [
                    'id' => 3224,
                    'country_id' => 1,
                    'external_id' => '883653501',
                    'name_en' => 'Umm Hafah',
                    'name_ar' => 'ام حفاه'
                ],
                [
                    'id' => 3225,
                    'country_id' => 1,
                    'external_id' => '108108414',
                    'name_en' => 'Almujar',
                    'name_ar' => 'الموجر'
                ],
            ]);
    }
}
