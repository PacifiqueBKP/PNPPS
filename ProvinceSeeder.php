<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Province;

class ProvinceSeeder extends Seeder
{
    public function run(): void
    {
        $names = [
            'Kinshasa','Kongo-Central','Kwango','Kwilu','Mai-Ndombe','Équateur',
            'Mongala','Nord-Ubangi','Sud-Ubangi','Tshuapa','Tshopo','Bas-Uele',
            'Haut-Uele','Ituri','Nord-Kivu','Sud-Kivu','Maniema','Tanganyika',
            'Haut-Lomami','Lualaba','Haut-Katanga','Kasaï','Kasaï-Central',
            'Kasaï-Oriental','Lomami','Sankuru'
        ];

        foreach ($names as $name) {
            Province::updateOrCreate(['name'=>$name], ['code'=>strtoupper(substr(preg_replace('/[^A-Za-z]/','',$name),0,5))]);
        }
    }
}