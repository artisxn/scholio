<?php

use App\Models\School;
use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use Portal\Portal;

class All extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Colleges::class);
        $this->call(IEK::class);
        $this->call(Schools::class);
        $this->call(SeedA1::class);
        $this->call(SeedA2::class);
        $this->call(SeedA3::class);
        $this->call(SeedA4::class);
//        $this->call(SeedA5::class);
        $this->call(SeedA6::class);
        $this->call(SeedA7::class);
        $this->call(SeedA8::class);
        $this->call(Frontistiria::class);
        $this->call(Frontistiria1::class);
        $this->call(Frontistiria3::class);

    }


}
