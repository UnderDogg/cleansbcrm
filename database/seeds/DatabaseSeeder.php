<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(student_s::class);
        $this->call(book_s::class);
        $this->call(book2_s::class);
        $this->call(user_table_seeder::class);
    }
}
