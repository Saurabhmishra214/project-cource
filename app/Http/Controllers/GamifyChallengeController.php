<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GamifyChallenge;

class GamifyChallengeController extends Controller
{
    
 public function index()
    {
        // Get today's challenges (created on the current day)
        $todaysChallenges = GamifyChallenge::whereDate('created_at', today())
                                            ->with('postedBy')
                                            ->get();

        // Get recent challenges (all challenges not from today), paginated
        $recentChallenges = GamifyChallenge::whereDate('created_at', '!=', today())
                                            ->with('postedBy')
                                            ->latest()
                                            ->paginate(6);
                                            
        return view('dashboard.gamify_challenges.index', compact('todaysChallenges', 'recentChallenges'));
    }

}
