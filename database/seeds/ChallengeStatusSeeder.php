<?php

use Illuminate\Database\Seeder;

class ChallengeStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ChallengeStatus::create([
            'name' => 'pending',
        ], [
            'name' => 'accepted',
        ], [
            'name' => 'declined',
        ]);
    }
}
