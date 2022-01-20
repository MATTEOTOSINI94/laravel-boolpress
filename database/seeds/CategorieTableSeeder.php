<?php

use Illuminate\Database\Seeder;
use App\Categorie;

class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $randCategories = ["Viaggi","Tecnologia","Abbigliamento"];
        foreach ($randCategories as $key => $categorie) {
            $newCategoria = new Categorie();
            $newCategoria->title=$categorie;
            $newCategoria->save();
        }
    }
}
