<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;
class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Setting::create([
            'site_name' => 'MDF',
            'contact_phone' => '011 546 232',
            'contact_email' => 'pio@mdf.gov.mw',
            'fax' => '011 342 233',
            'address' => 'Malawi Defence Force Headquarters, Private Bag 43, Lilongwe',
        ]);
    }
}
