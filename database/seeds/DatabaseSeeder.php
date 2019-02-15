<?php

use Illuminate\Database\Seeder;

use App\priorities;
use App\projects;

class DatabaseSeeder extends Seeder {

    public function run()
    {
        $this->call('PrioritiesTableSeeder');
    }

}

class PrioritiesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('priorities')->delete();

        priorities::create(array('name' => 'urgent'));
        priorities::create(array('name' => 'important'));
        priorities::create(array('name' => 'ignored'));
        priorities::create(array('name' => 'optional'));

        DB::table('projects')->delete();
        projects::create(array('name' => 'First Project'));
    }

}
