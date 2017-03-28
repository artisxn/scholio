<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Πρόγραμμα Σπουδών', 'type' => 1],
            ['name' => 'Οργάνωση', 'type' => 1],
            ['name' => 'Ανθρώπινο Δυναμικό', 'type' => 1],
            ['name' => 'Εγκαταστάσεις', 'type' => 1],
            ['name' => 'Διασύνδεση με αγορά εργασίας', 'type' => 1],
            ['name' => 'Όμιλοι Ενδιαφέροντος (Clubs)', 'type' => 2],
            ['name' => 'Ευέλικτα Τμήματα', 'type' => 2],
            ['name' => 'Ενημέρωση', 'type' => 2],
        ];

        foreach ($categories as $category) {
            $cat = new Category;
            $cat->name = $category['name'];
            $cat->type_id = $category['type'];
            $cat->save();
        }
    }
}
