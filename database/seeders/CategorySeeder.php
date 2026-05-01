<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id' => '1', 
                'name' => 'Development', 
                'description' => 'Coding and Software',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '2', 
                'name' => 'Design', 
                'description' => 'UI/UX and Graphic Design',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '3', 
                'name' => 'Business', 
                'description' => 'Marketing and Startups',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '4', 
                'name' => 'Marketing', 
                'description' => 'Marketing and money boiiiiii',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);

        DB::table('users')->insert([
            [
                'id' => 'M202601', 
                'name' => 'Dosen Linear Algebra', 
                'email' => 'zenyelf@gmail.com',
                'password' => '$2y$12$oftPWmzfNsGbvQS4fp3nveK2/oWtXhCM7FDx7Uhl9Evry36oMDhry',
                'role' => 'Mentor',
                'created_at' => '2026-05-01 21:10:58',
                'updated_at' => '2026-05-01 21:10:58'
            ],
            [
                'id' => 'S202601', 
                'name' => 'Jayson Chrisnanda', 
                'email' => 'haha@gmail.com',
                'password' => '$2y$12$Q7LiuVBWLJ0J.Zv2VnKYa.ltnR7PjOVlYXCeHex8mnJWU3eOFDxpu',
                'role' => 'Student',
                'created_at' => '2026-05-01 21:13:35',
                'updated_at' => '2026-05-01 21:13:35'
            ],
            [
                'id' => 'S202602', 
                'name' => 'Ronaldo', 
                'email' => 'asd@gmail.com',
                'password' => '$2y$12$VO8Qaggoeienl1naPbOR5uyJL1VWjrAxneXUKcclnm.DhcS3pqqVO',
                'role' => 'Student',
                'created_at' => '2026-05-01 21:53:56',
                'updated_at' => '2026-05-01 21:53:56'
            ],
        ]);

        DB::table('mentors')->insert([
            [
                'id' => 'M202601',
                'user_id' => 'M202601',
                'expertise' => 'KOSONG',
                'bio' => 'KOSONG',
                'created_at' => '2026-05-01 21:10:58',
                'updated_at' => '2026-05-01 21:10:58',
            ],
        ]);

        DB::table('courses')->insert([
            [
                'id' => 'C2026050101',
                'mentor_id' => 'M202601',
                'category_id' => '3',
                'title' => 'Superman Punch',
                'description' => 'Fly me to the Mars and call me Martian',
                'type' => 'live',
                'language' => 'French',
                'slots' => '10',
                'lessons' => '10',
                'price' => '10000',
                'created_at' => '2026-05-01 22:03:33',
                'updated_at' => '2026-05-01 22:03:33'
            ],
            [
                'id' => 'C2026050102',
                'mentor_id' => 'M202601',
                'category_id' => '1',
                'title' => 'Super High School',
                'description' => 'Magical school in there, hehe',
                'type' => 'online',
                'language' => 'Indonesian',
                'slots' => '12',
                'lessons' => '41',
                'price' => '1000',
                'created_at' => '2026-05-01 22:04:45',
                'updated_at' => '2026-05-01 22:04:45'
            ],
            [
                'id' => 'C2026050103',
                'mentor_id' => 'M202601',
                'category_id' => '4',
                'title' => 'How To 101',
                'description' => 'we learn and become serpentine',
                'type' => 'online',
                'language' => 'Indonesian',
                'slots' => '10',
                'lessons' => '10',
                'price' => '157',
                'created_at' => '2026-05-01 22:07:24',
                'updated_at' => '2026-05-01 22:07:24'
            ],
            [
                'id' => 'C2026050104',
                'mentor_id' => 'M202601',
                'category_id' => '2',
                'title' => 'Advance Vance Ad',
                'description' => 'hah?',
                'type' => 'offline',
                'language' => 'Spanish',
                'slots' => '123',
                'lessons' => '123',
                'price' => '123',
                'created_at' => '2026-05-01 22:08:16',
                'updated_at' => '2026-05-01 22:08:16'
            ],
        ]);

        DB::table('course_sessions')->insert([
            [
                'id' => '1',
                'course_id' => 'C2026050101',
                'session_date' => '2026-05-19 12:00:00',
                'created_at' => '2026-05-01 22:03:33',
                'updated_at' => '2026-05-01 22:03:33',
            ],
            [
                'id' => '2',
                'course_id' => 'C2026050101',
                'session_date' => '2026-05-25 12:00:00',
                'created_at' => '2026-05-01 22:03:33',
                'updated_at' => '2026-05-01 22:03:33',
            ],
            [
                'id' => '3',
                'course_id' => 'C2026050101',
                'session_date' => '2026-05-26 12:00:00',
                'created_at' => '2026-05-01 22:03:33',
                'updated_at' => '2026-05-01 22:03:33',
            ],
            [
                'id' => '4',
                'course_id' => 'C2026050102',
                'session_date' => '2026-05-24 12:00:00',
                'created_at' => '2026-05-01 22:04:45',
                'updated_at' => '2026-05-01 22:04:45',
            ],
            [
                'id' => '5',
                'course_id' => 'C2026050102',
                'session_date' => '2026-05-25 12:00:00',
                'created_at' => '2026-05-01 22:04:45',
                'updated_at' => '2026-05-01 22:04:45',
            ],
            [
                'id' => '6',
                'course_id' => 'C2026050102',
                'session_date' => '2026-05-31 12:00:00',
                'created_at' => '2026-05-01 22:04:45',
                'updated_at' => '2026-05-01 22:04:45',
            ],
            [
                'id' => '7',
                'course_id' => 'C2026050103',
                'session_date' => '2026-05-20 12:00:00',
                'created_at' => '2026-05-01 22:07:24',
                'updated_at' => '2026-05-01 22:07:24',
            ],
            [
                'id' => '8',
                'course_id' => 'C2026050103',
                'session_date' => '2026-05-21 12:00:00',
                'created_at' => '2026-05-01 22:07:24',
                'updated_at' => '2026-05-01 22:07:24',
            ],
            [
                'id' => '9',
                'course_id' => 'C2026050103',
                'session_date' => '2026-05-28 12:00:00',
                'created_at' => '2026-05-01 22:07:24',
                'updated_at' => '2026-05-01 22:07:24',
            ],
            [
                'id' => '10',
                'course_id' => 'C2026050104',
                'session_date' => '2026-05-04 12:00:00',
                'created_at' => '2026-05-01 22:08:16',
                'updated_at' => '2026-05-01 22:08:16',
            ],
            [
                'id' => '11',
                'course_id' => 'C2026050104',
                'session_date' => '2026-05-05 12:00:00',
                'created_at' => '2026-05-01 22:08:16',
                'updated_at' => '2026-05-01 22:08:16',
            ],
        ]);
    }
}