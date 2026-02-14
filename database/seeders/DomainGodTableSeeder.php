<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DomainGodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $domain_god = [
            ['domain_id' => 2, 'god_id' => 1],
            ['domain_id' => 8, 'god_id' => 1],

            ['domain_id' => 2, 'god_id' => 2],
            ['domain_id' => 1, 'god_id' => 2],

            ['domain_id' => 5, 'god_id' => 3],

            ['domain_id' => 1, 'god_id' => 4],

            ['domain_id' => 3, 'god_id' => 5],
            ['domain_id' => 9, 'god_id' => 5],

            ['domain_id' => 2, 'god_id' => 6],
            ['domain_id' => 6, 'god_id' => 6],

            ['domain_id' => 6, 'god_id' => 7],
            ['domain_id' => 7, 'god_id' => 7],

            ['domain_id' => 17, 'god_id' => 8],
            ['domain_id' => 9, 'god_id' => 8],
            ['domain_id' => 4, 'god_id' => 8],
        ];
        foreach($domain_god as $dg){
            DB::table('domain_god')->insert([
                'domain_id' => $dg['domain_id'],
                'god_id' => $dg['god_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
