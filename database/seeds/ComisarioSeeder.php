<?php

use App\Comisario;
use Illuminate\Database\Seeder;

class ComisarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comisario::class, 50);
    }
}
