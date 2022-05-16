<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) {
            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->giorno_partenza = $faker->date();
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->bothify("??###");
            $newTrain->numero_carrozze = $faker->numberBetween(1, 20);
            $newTrain->in_orario =  $faker->numberBetween(0, 1);
            $newTrain->cancellato =  $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
