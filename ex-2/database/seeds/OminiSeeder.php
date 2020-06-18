<?php

use Illuminate\Database\Seeder;
use App\Omino;

class OminiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Omino::class, 30) -> create();
    }
}
