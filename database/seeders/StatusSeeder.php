<?php

namespace Database\Seeders;

use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    public function run()
    {
        Status::insert([
            ['name' => "open" , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'In-Progress','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["name" => "Closed",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ]);
    }
}
