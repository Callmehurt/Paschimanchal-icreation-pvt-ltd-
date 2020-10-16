<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company_details')->insert([
            'office_location' => 'Gairaptan, Pokhara,Kaski, Nepal',
            'landline' => '+977-061-525629',
            'mobile' => '+977-061-525629',
            'mail' => 'business@paschimanchal.net',
            'gmail' => 'paschimanchalsolution@gmail.com',
            'domain' => ' http://www.paschimanchl.net/',
        ]);
    }
}
