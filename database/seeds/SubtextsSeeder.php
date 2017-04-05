<?php

use Illuminate\Database\Seeder;

class SubtextsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $textsNo = [
            [
                'type' => 'no',
                'text' => ':( '
            ],
            [
                'type' => 'no',
                'text' => 'Try again tomorrow.'
            ],
            [
                'type' => 'no',
                'text' => 'Does it look like the first Thursday of the month?'
            ],
            [
                'type' => 'no',
                'text' => 'Go away.'
            ],

        ];

         $textsYes = [
            [
                'type' => 'yes',
                'text' => 'Woohoo!'
            ],
            [
                'type' => 'yes',
                'text' => 'Steve, save the table.'
            ],
            [
                'type' => 'yes',
                'text' => 'Mines a Black Sheep.'
            ],
            [
                'type' => 'yes',
                'text' => 'Last one there buys two rounds.'
            ],

        ];
        
        foreach($textsNo as $no){
            DB::table('subtexts')->insert($no);
        }

        foreach($textsYes as $yes){
            DB::table('subtexts')->insert($yes);
        }
        
    }
}
