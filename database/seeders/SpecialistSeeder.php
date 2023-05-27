<?php

namespace Database\Seeders;

use App\Models\Review;
use App\Models\Specialist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Specialist::factory()
            ->has(Review::factory()->count(1000))
            ->count(1_000)
            ->create();
    }
}

// insert into "reviews" ("rating", "comment", "specialist_id", "id", "updated_at", "created_at") values (7, "Quas maxime est fuga consequatur explicabo culpa.", "99438508-e67a-4c9f-bd27-dd2bd49e1b06", "99438508-f79f-4f37-81e6-881e332cf9d9", "2023-05-27 01:58:58", "2023-05-27 01:58:58")
