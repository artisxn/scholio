<?php

use Illuminate\Database\Seeder;

class FakeTables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FakeSeeder::class);
        $this->call(DummyScholarshipsTableSeeder::class);
        $this->call(RestFakeTableSeeder::class);

    }
}
