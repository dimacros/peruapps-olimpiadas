<?php

use App\ComplejoDeportivo;
use App\Sede;
use Illuminate\Database\Seeder;

class ComplejoDeportivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createComplejoDeportivo();
    }

    private function createComplejoDeportivo()
    {
        ComplejoDeportivo::create([
            'sede_id' => $this->makeSede()->id,
            'name' => 'Complejo Lima Norte',
            'location' => 'Comas',
            'head_of_organization' => 'Admin',
            'total_occupied_area' => 200,
        ]);
    }

    private function makeSede(): Sede
    {
        return Sede::create([
            'name' => 'Sede Principal',
            'approximate_badget' => 100000
        ]);
    }
}
