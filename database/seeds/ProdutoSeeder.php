<?php

use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // THANKS: https://stackoverflow.com/a/45269400/9881278
        $categorias = App\Categoria::all();
        factory('App\Produto', 10)
            ->create()
            ->each(function ($produtos) use ($categorias){
                $produtos->categorias()->attach(
                    $categorias->random(rand(1, 3))->pluck('id')->toArray()
                );
            });
    }
}
