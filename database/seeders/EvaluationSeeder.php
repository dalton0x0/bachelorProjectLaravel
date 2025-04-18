<?php

namespace Database\Seeders;

use App\Models\Evaluation;
use App\Models\Note;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class EvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teacherRole = Role::where('label', 'teacher')->first();
        $teacher = User::where('role_id', $teacherRole->id)->first();

        $classroom = $teacher->taughtClassrooms()->inRandomOrder()->first();

        $evaluation = Evaluation::factory()->create([
            'title' => 'Make MCD',
            'description' => 'Make MCD for your project of Bachelor!',
            'min_value' => 0,
            'max_value' => 20,
            'teacher_id' => $teacher->id,
        ]);

        $evaluation->classrooms()->attach($classroom->id);

        $studentRole = Role::where('label', 'student')->first();
        $students = $classroom->students()
            ->where('role_id', $studentRole->id)
            ->get();

        foreach ($students as $student) {
            Note::factory()->create([
                'value' => rand(0, 20),
                'user_id' => $student->id,
                'evaluation_id' => $evaluation->id,
            ]);
        }
    }
}
