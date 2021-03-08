<?php

use Illuminate\Database\Seeder;
use App\SwitchBtn;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(SwitchBtn::class, 1)->create();
    }
}
