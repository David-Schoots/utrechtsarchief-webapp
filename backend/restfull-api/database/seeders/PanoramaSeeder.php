<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;;

class PanoramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('panoramas')->insert([
            'page' => '1',
            'catalog_number' => '135001',
            'title' => "PANORAMA VAN UTRECHT / vervaardigd in het Etablisement van / P.W. VAN DE WEIJER / Utrecht / WED. HERFKENS EN ZOON.",
            'description' => "Afbeelding van de titelpagina van het Panorama van Utrecht, op de lithostenen
             getekend door J. Bos, gedrukt bij P.W. van de Weijer en in juli 1859 uitgegeven door de Wed.
             Herfkens en zoon.",
            'img' => "/img/test/1.png",
            'extra_description' => "Het Panorama van Utrecht bestaat uit vier aaneengeplakte, zigzag gevouwen bladen
             met een totale lengte van 5,82 meter. Het panorama is een meterslange tekening van een
             rondwandeling om het centrum van Utrecht, met steeds wisselend uitzicht vanaf de singels. Het
             geeft een heel precies beeld van hoe de stad in 1859 er uitzag en het leuke is dat je ook het
             verloop van de seizoenen in de tekening terugziet.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}