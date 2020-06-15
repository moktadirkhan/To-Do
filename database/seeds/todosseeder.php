<?php

use Illuminate\Database\Seeder;

class todosseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\todos::class,10)->create();
    }
}
