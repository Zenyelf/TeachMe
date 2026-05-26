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
                'id' => 'ADMIN', 
                'name' => 'ADMIN', 
                'email' => 'ADMIN@ADMIN.ADMIN',
                'password' => '$2y$12$FHz1pO57650lqriwsDk.8ekIv0qGxBopOZON6ia9UxmVyqA4QVBOW',
                'role' => 'Admin',
                'created_at' => '2026-05-19 15:33:44',
                'updated_at' => '2026-05-19 15:33:44'
            ],
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
                'title' => 'Batman',
                'academic_degree' => 'KOSONG',
                'bio' => 'KOSONG',
                'preferred_learning' => 'Offline Classroom',
                'verify' => '1',
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
                'thumbnail' => 'thumbnails/CC_C2026050101.jpg',
                'language' => 'French',
                'slots' => 10,
                'lessons' => 10,
                'price' => 10000,
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
                'thumbnail' => 'thumbnails/CC_C2026050102.jpg',
                'language' => 'Indonesian',
                'slots' => 12,
                'lessons' => 41,
                'price' => 1000,
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
                'thumbnail' => 'thumbnails/CC_C2026050103.jpg',
                'language' => 'Indonesian',
                'slots' => 10,
                'lessons' => 10,
                'price' => 157,
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
                'thumbnail' => 'thumbnails/CC_C2026050104.jpg',
                'language' => 'Spanish',
                'slots' => 123,
                'lessons' => 123,
                'price' => 123,
                'created_at' => '2026-05-01 22:08:16',
                'updated_at' => '2026-05-01 22:08:16'
            ],
            [
                'id' => 'C2026050701',
                'mentor_id' => 'M202601',
                'category_id' => '1',
                'title' => 'hahahahaha',
                'description' => 'banyak kali fiturnya',
                'type' => 'live',
                'thumbnail' => 'thumbnails/CC_C2026050701.jpg',
                'language' => 'English',
                'slots' => 20,
                'lessons' => 12,
                'price' => 99,
                'created_at' => '2026-05-07 20:39:12',
                'updated_at' => '2026-05-07 20:39:12'
            ],
        ]);

        DB::table('students')->insert([
            [
                'id' => 'S202601',
                'user_id' => 'S202601',
                'interest' => NULL,
                'learning_mode' => NULL,
                'created_at' => '2026-05-01 21:13:35',
                'updated_at' => '2026-05-01 21:13:35',
            ],
            [
                'id' => 'S202602',
                'user_id' => 'S202602',
                'interest' => NULL,
                'learning_mode' => NULL,
                'created_at' => '2026-05-01 21:53:56',
                'updated_at' => '2026-05-01 21:53:56',
            ],
        ]);

        DB::table('course_sessions')->insert([
            [
                'id' => '1',
                'course_id' => 'C2026050701',
                'batch_number' => 1,
                'start_date' => '2026-05-08',
                'end_date' => '2026-05-15',
                'schedule_days' => 'Mon,Tue,Wed,Thu,Fri',
                'start_time' => '03:38:00',
                'end_time' => '17:38:00',
                'slots' => 20,
                'meeting_link' => 'https://www.youtube.com/watch?v=Wv6cN-y6ps4&list=RDnv9oqihEFnI&index=27',
                'location' => 'BINUS',
                'created_at' => '2026-05-07 20:39:12',
                'updated_at' => '2026-05-07 20:39:12',
            ],
            [
                'id' => '2',
                'course_id' => 'C2026050701',
                'batch_number' => 2,
                'start_date' => '2026-05-22',
                'end_date' => '2026-05-29',
                'schedule_days' => 'Mon,Tue,Wed,Thu,Fri,Sat,Sun',
                'start_time' => '03:39:00',
                'end_time' => '09:39:00',
                'slots' => 20,
                'meeting_link' => 'https://www.youtube.com/watch?v=Wv6cN-y6ps4&list=RDnv9oqihEFnI&index=27',
                'location' => 'BINUS',
                'created_at' => '2026-05-07 20:39:12',
                'updated_at' => '2026-05-07 20:39:12',
            ],
        ]);

        DB::table('enrollments')->insert([
            [
                'id' => '1',
                'user_id' => 'S202601',
                'course_id' => 'C2026050701',
                'status' => 'active',
                'progress_percent' => 0,
                'session_id' => '1',
                'enrolled_at' => '2026-05-07 20:45:40',
                'created_at' => '2026-05-07 20:45:40',
                'updated_at' => '2026-05-07 20:45:40',
            ],
            [
                'id' => '2',
                'user_id' => 'S202601',
                'course_id' => 'C2026050701',
                'status' => 'active',
                'progress_percent' => 100,
                'session_id' => '2',
                'enrolled_at' => '2026-05-07 20:45:40',
                'created_at' => '2026-05-07 20:45:40',
                'updated_at' => '2026-05-07 20:45:40',
            ],
        ]);
    }
}