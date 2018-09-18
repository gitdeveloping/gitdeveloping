<?php

use App\Models\Challenge;
use Illuminate\Database\Seeder;

class ChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Challenge::create([
            'created_by_id' => 1,
            'title' => 'Multiples of 3 and 5',
            'description' => "If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.   
<br />Find the sum of all the multiples of 3 or 5 below 1000.",
            'answer' => 233168,
            'execution_ms' => 400,
            'bytes' => 9999999,
            'status_id' => 2
        ]);
    }
}
