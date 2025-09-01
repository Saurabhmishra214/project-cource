<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AffiliateTraining;
use App\Models\Network;
use Jorenvh\Share\ShareFacade as Share;


class AffiliateController extends Controller
{
    public function affiliate_dashboard()
    {
        return view('affiliate_dashboard.home');
    }

   public function affiliate_training()
    {
        $trainings = AffiliateTraining::with('sessions')
                                      ->orderBy('day_number', 'asc')
                                      ->get()
                                      ->groupBy('category');

        return view('affiliate_dashboard.training', [
            'trainings' => $trainings,
        ]);
    }


    // public function getTrainingDay($day)
    // {
    //     // Example: dummy static data (replace with DB later)
    //     $videos = [
    //         1 => [
    //             'video'  => 'https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4',
    //             'poster' => 'https://via.placeholder.com/1280x400?text=Day+1+Training'
    //         ],
    //         2 => [
    //             'video'  => 'https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/Sintel.mp4',
    //             'poster' => 'https://via.placeholder.com/1280x400?text=Day+2+Training'
    //         ],
    //         3 => [
    //             'video'  => 'https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4',
    //             'poster' => 'https://via.placeholder.com/1280x400?text=Day+3+Training'
    //         ],
    //     ];

    //     if (!array_key_exists($day, $videos)) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => "No video found for Day {$day}"
    //         ]);
    //     }

    //     return response()->json([
    //         'success' => true,
    //         'video'   => $videos[$day]['video'],
    //         'poster'  => $videos[$day]['poster'],
    //     ]);
    // }

public function affiliate_webinar()
{
    $webinars = \App\Models\Webinar::latest()->get();

    return view('affiliate_dashboard.webinar', compact('webinars'));
}



public function affiliate_rewards()
{
    $title = "Check out my affiliate rewards page!";

    $shareLinks = Share::page(
        url()->current(),
        $title
    )
    ->facebook()
    ->twitter()
    ->linkedin()
    ->whatsapp()
    ->telegram()
    ->getRawLinks(); 

    return view('affiliate_dashboard.rewards', compact('shareLinks'));
}


public function rewards_dashboard()
{
    $user = auth()->user();

  
    $totalCoins = $user->coins;

 
    $referrals = Network::with('user') 
        ->where('parent_user_id', $user->id)
        ->get();

    return view('affiliate_dashboard.rewards_dashboard', compact('totalCoins', 'referrals'));
}





}
