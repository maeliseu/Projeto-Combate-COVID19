<?php

use Illuminate\Database\Seeder;

class BairroSeeder extends Seeder
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
	        DB::table('bairros')->insert([	            
	            'bairro' => Str::random(10),
	            'regiao' => rand(5, 9),
	             
	        ]);
        }
    }
}
