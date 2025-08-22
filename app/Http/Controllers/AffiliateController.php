<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AffiliateTraining;

class AffiliateController extends Controller
{
    public function affiliate_dashboard()
    {
        return view('affiliate_dashboard.home');
    }

   public function affiliate_training()
    {
        // डेटाबेस से सभी ट्रेनिंग प्राप्त करें
        $trainings = AffiliateTraining::with('sessions')
                                      ->orderBy('day_number', 'asc')
                                      ->get()
                                      ->groupBy('category');

        // व्यू को डेटा पास करें
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
        return view('affiliate_dashboard.webinar');

    }
}
