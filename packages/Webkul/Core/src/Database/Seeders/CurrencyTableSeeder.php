<?php

namespace Webkul\Core\Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class CurrencyTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('channels')->delete();

        DB::table('currencies')->delete();

        DB::table('currencies')->insert([
            'id' => 1,
            'code' => 'INR',
            'name' => 'Indian Rupee',
        ]);
    }
}
