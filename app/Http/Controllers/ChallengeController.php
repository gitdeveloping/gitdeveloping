<?php
/**
 * Created by PhpStorm.
 * User: wheatleyjj
 * Date: 15/09/2018
 * Time: 22:28
 */

namespace App\Http\Controllers;

use App\Models\Challenge;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    public function get(Request $request) {
        return Challenge::with('createdBy')->paginate(15);
    }
}