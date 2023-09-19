<?php

namespace Database\Seeders;

use App\Models\TI\Acesso;
use Database\Factories\TI\AcessoFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcessoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Acesso::factory(20)->create();
    }
}
