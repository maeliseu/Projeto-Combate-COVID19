<?php

use Illuminate\Database\Seeder;

class casosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrays = range(0,100);
        foreach ($arrays as $valor) {
	        DB::table('casos')->insert([	            
	            'Nome' => Str::random(10),
	            'sobrenome' => Str::random(10),
                'rua' => Str::random(10),
                'numero'=> Str::random(3),
                'complemento'=> Str::random(10),
                'id_bairro'=> rand(88, 189),
	             
	        ]);
        }
    }
}
