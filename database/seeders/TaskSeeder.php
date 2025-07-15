<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title'         => 'Examen Teorico',
            'description'   => 'realizar examen teorico',
            'completed'      => '1',
            'deadline'      => '2025-07-14'
        ]);

        Task::create([
            'title'         => 'Examen Practico',
            'description'   => 'realizar examen practico',
            'completed'      => '1',
            'deadline'      => '2025-07-15'
        ]);

        Task::create([
            'title'         => 'Entrevista',
            'description'   => 'realizar entrevista pendiente',
            'completed'      => '0',
            'deadline'      => '2025-07-16'
        ]);
    }
}
