<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols=[
            'admin',
            'usuario',
            'editor'
        ];
        foreach($rols as $key => $value){
            DB::table('rols')->insert([
                'nombre'=> $value,
                'descripcion'=>'esto es una descripcion',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
