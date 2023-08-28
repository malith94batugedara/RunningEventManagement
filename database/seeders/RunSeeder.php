<?php

namespace Database\Seeders;
use App\Models\Run;
Use Carbon\Carbon;

use Illuminate\Database\Seeder;

class RunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Run::create([
            'title'=>'Run 3',
            'start'=>'2023-08-28 10:04:35',
            'length'=>'00:10:00',
            'type'=>'3000m'
        ]);
    }
}
