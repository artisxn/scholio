<?php

use App\Models\DonatedScholarship;
use App\Models\Donor;
use App\User;
use Illuminate\Database\Seeder;

class DonorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = factory(App\User::class)->create(['name' => 'Μποδοσάκης', 'email' => 'schols@bodosakis.gr', 'password' => bcrypt('123456'), 'role' => 'donor', 'username' => 'bodosakis']);
        $d1 = new Donor;
        $d1->user_id = $user1->id;
        $d1->website = 'www.bodosakis.gr';
        $d1->phone = '2109387267';
        $d1->avatar = 'https://desmos.org/wp-content/uploads/2014/02/%CE%99%CE%94%CE%A1%CE%A5%CE%9C%CE%91-%CE%9C%CE%A0%CE%9F%CE%94%CE%9F%CE%A3%CE%91%CE%9A%CE%97-logo.png';
        $d1->save();

        $this->createScholarship($user1, $d1, '','ΠΑΜΑΚ', 2500, 'terms', 'Bachelor');
        $this->createScholarship($user1, $d1, 'Οικονομικά','ΠΑΠΕΙ', 4200, 'terms', 'Master');

        $user2 = factory(App\User::class)->create(['name' => 'Cosmote', 'email' => 'schols@cosmote.gr', 'password' => bcrypt('123456'), 'role' => 'donor', 'username' => 'cosmote']);
        $d2 = new Donor;
        $d2->user_id = $user2->id;
        $d2->website = 'www.cosmote.gr';
        $d2->phone = '2109567260';
        $d2->avatar = 'https://3.bp.blogspot.com/-FX9SeBCvqS8/WDiPdePcKhI/AAAAAAAAXFQ/bktqy9F5JPUrYqjiyoUb0u26DwLBsBLHQCPcB/s1600/Cosmote_logo_resized_final.png.jpg';
        $d2->save();

        $this->createScholarship($user2, $d2, '','Αριστοτελειο Πανεπιστήμιο', 3600, 'terms', 'Master');
        $this->createScholarship($user2, $d2, 'Μηχανολόγων','Πολυτεχνική Σχολή Αθηνών', 2200, 'terms', 'Bachelor');
    }

    public function createScholarship($user, $donor, $study, $institution, $amount, $terms, $level)
    {
        $scholarship = new DonatedScholarship;
        $scholarship->donor_id = $donor->id;
        $scholarship->study = $study;
        $scholarship->institution = $institution;
        $scholarship->terms = $terms;
        $scholarship->financial_amount = $amount;
        $scholarship->level = $level;
        $scholarship->save();
    }
}
