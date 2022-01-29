<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Tênis Nike Downshifter',
            'description' => 'O Tênis Nike Downshifter é o seu novo tênis de corrida favorito!
                O modelo apresenta cabedal em malha de tramas abertas que auxiliam na flexibilidade e na ventilação interna, que afasta o mau odor.',
            'image' => '',
            'value' => 129.99,
        ]);

        Product::create([
            'name' => 'Tênis Nike SB Heritage',
            'description' => 'Um clássico repaginado perfeito para o contexto urbano, o Tênis Nike SB Heritage apresenta cabedal
                (parte superior do tênis) em lona resistente, sobreposições em suede e microfuros que auxiliam na respirabilidade.',
            'image' => '',
            'value' => 229.90,
        ]);

        Product::create([
            'name' => 'Tênis Nike AirMax',
            'description' => 'Para uma rotina de movimentos e treinos, você precisa unir estilo e conforto, esse tênis Nike é a pedida certa.
                O cabedal (parte superior do tênis) em malha respirável e sintético, oferece apoio e durabilidade.',
            'image' => '',
            'value' => 189.79,
        ]);

        Product::create([
            'name' => 'Tênis Nike Renew Run 2',
            'description' => 'Para uma rotina de movimentos e treinos, você precisa unir estilo e conforto, esse tênis Nike é a pedida certa.
                O cabedal (parte superior do tênis) em malha respirável e sintético, oferece apoio e durabilidade.',
            'image' => '',
            'value' => 99.90,
        ]);

        Product::create([
            'name' => 'Tênis Renew Serenity Run Premium',
            'description' => 'O Tênis Nike Downshifter é o seu novo tênis de corrida favorito!
                O modelo apresenta cabedal em malha de tramas abertas que auxiliam na flexibilidade e na ventilação interna, que afasta o mau odor.',
            'image' => '',
            'value' => 109.90,
        ]);

        Product::create([
            'name' => 'Tênis Converse All Star CT',
            'description' => 'O modelo apresenta cabedal em malha de tramas abertas que auxiliam na flexibilidade e na ventilação interna, que afasta ',
            'image' => '',
            'value' => 99.90,
        ]);

        Product::create([
            'name' => 'Tênis Asics Gel-Nagoya 3',
            'description' => 'O modelo apresenta cabedal em malha de tramas abertas que auxiliam na flexibilidade e na ventilação interna, que afasta ',
            'image' => '',
            'value' => 329.90,
        ]);

        Product::create([
            'name' => 'Tênis Asics Gel-Excite 8',
            'description' => 'O modelo apresenta cabedal em malha de tramas abertas que auxiliam na flexibilidade e na ventilação interna, que afasta ',
            'image' => '',
            'value' => 419.90,
        ]);

        Product::create([
            'name' => 'Tênis Nike Revolution 6',
            'description' => 'O modelo apresenta cabedal em malha de tramas abertas que auxiliam na flexibilidade e na ventilação interna, que afasta ',
            'image' => '',
            'value' => 229.90,
        ]);

        Product::create([
            'name' => 'Tênis Puma Flyer Runner BDP',
            'description' => 'O modelo apresenta cabedal em malha de tramas abertas que auxiliam na flexibilidade e na ventilação interna, que afasta ',
            'image' => '',
            'value' => 99.90,
        ]);

        Product::create([
            'name' => 'Tênis Puma Flyer Runner',
            'description' => 'O modelo apresenta cabedal em malha de tramas abertas que auxiliam na flexibilidade e na ventilação interna, que afasta ',
            'image' => '',
            'value' => 199.99,
        ]);

        Product::create([
            'name' => 'Tênis Fila Float Knit',
            'description' => 'O modelo apresenta cabedal em malha de tramas abertas que auxiliam na flexibilidade e na ventilação interna, que afasta ',
            'image' => '',
            'value' => 449.89,
        ]);

        Product::create([
            'name' => 'Tênis Fila Float Pacer',
            'description' => 'O modelo apresenta cabedal em malha de tramas abertas que auxiliam na flexibilidade e na ventilação interna, que afasta ',
            'image' => '',
            'value' => 389.79,
        ]);

        Product::create([
            'name' => 'Tênis Creeper Converse All Star Plataforma',
            'description' => 'O modelo apresenta cabedal em malha de tramas abertas que auxiliam na flexibilidade e na ventilação interna, que afasta ',
            'image' => '',
            'value' => 199.90,
        ]);

        Product::create([
            'name' => 'Tênis Asics Gel-Nagoya 3',
            'description' => 'O modelo apresenta cabedal em malha de tramas abertas que auxiliam na flexibilidade e na ventilação interna, que afasta ',
            'image' => '',
            'value' => 549.90,
        ]);
    }
}
