<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course')->insert([
            [
                'course_title' => 'Php',
                'course_content' => 'Php kurs içeriği',
                'course_must' => 1
            ],
            [
                'course_title' => 'Java',
                'course_content' => 'Java kurs içeriği',
                'course_must' => 2
            ],
            [
                'course_title' => 'Python',
                'course_content' => 'Python kurs içeriği',
                'course_must' => 3
            ],
            [
            'course_title' => 'JS',
            'course_content' => 'JS kurs içeriği',
            'course_must' => 4
        ]

        ]);
    }
}
