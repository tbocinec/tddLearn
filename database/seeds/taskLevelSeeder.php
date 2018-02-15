<?php

use Illuminate\Database\Seeder;

class taskLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        DB::table('task_levels')->delete();

        DB::table('task_levels')->insert([ [
                'name' => '1 .Scitovanie',
                'task_id' => 1,
                'description' =>"Kalkulacka musí vedieť sčítať dve kladné čísla",
            ],
        ]);

        DB::table('task_levels')->insert([[
            'name' => '2. Scitovanie lubovolne čísla',
            'task_id' => 1,
            'description' =>"Kalkulacka musí vedieť sčítať dve lubovolne  čísla",
        ],
        ]);

        DB::table('task_levels')->insert([[
            'name' => '3. Odčitovanie',
            'task_id' => 1,
            'description' =>"Kalkulacka musí vedieť odpočítať dve lubovolne  čísla",
        ],
        ]);

        DB::table('task_levels')->insert([ [
            'name' => '4. Násobenie',
            'task_id' => 1,
            'description' =>"Kalkulacka musí vedieť vynásobiť dve lubovolne  čísla",
        ],
        ]);
        DB::table('task_levels')->insert([[
            'name' => '5 . Delenie',
            'task_id' => 1,
            'description' =>"Kalkulacka musí vedieť vydeliť dve lubovolne  čísla",
        ],
        ]);
    }
}
