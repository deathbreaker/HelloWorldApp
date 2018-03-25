<?php

use Illuminate\Database\Seeder;
use App\Message;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::create([
            'name' => 'Tomáš',
            'message'=> str_random(10),
        ]);

        Message::create([
            'name' => 'Pavel',
            'message'=> str_random(10),
        ]);

    }
}
