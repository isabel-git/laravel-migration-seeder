<?php

use App\Brend;
use Illuminate\Database\Seeder;

class BrendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(Brend::class, 10) -> create(); 
    }
}
