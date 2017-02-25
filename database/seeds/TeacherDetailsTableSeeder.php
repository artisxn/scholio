<?php

use App\Models\Certificate;
use App\Models\Work;
use Illuminate\Database\Seeder;

class TeacherDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $works = [
            ['user_id' => 45, 'name' => 'Προγραμματιστης', 'company' => 'MLS', 'from' => Carbon\Carbon::now()->subYears(2), 'until' => Carbon\Carbon::now()],
            ['user_id' => 45, 'name' => 'Καθηγητής Αγγλικών', 'company' => 'Φροντηστήριο Ευρωγνώση', 'from' => Carbon\Carbon::now()->subYears(5), 'until' => Carbon\Carbon::now()],
        ];

        $certificates = [
            ['user_id' => 45, 'name' => 'BSc in Computer Science', 'university' => 'MIT', 'from' => Carbon\Carbon::now()->subYears(2), 'until' => Carbon\Carbon::now()],
            ['user_id' => 45, 'name' => 'Τουριστικά Επαγγέλματα', 'university' => 'ΙΕΚ ΑΚΜΗ', 'from' => Carbon\Carbon::now()->subYears(5), 'until' => Carbon\Carbon::now()],
        ];

        foreach ($works as $work) {
            $newWork = new Work;
            $newWork->user_id = $work['user_id'];
            $newWork->name = $work['name'];
            $newWork->company = $work['company'];
            $newWork->from = $work['from'];
            $newWork->until = $work['until'];
            $newWork->save();
        }

        foreach ($certificates as $certificate) {
            $newCert = new Certificate;
            $newCert->user_id = $certificate['user_id'];
            $newCert->name = $certificate['name'];
            $newCert->university = $certificate['university'];
            $newCert->from = $certificate['from'];
            $newCert->until = $certificate['until'];
            $newCert->save();
        }
    }

}
