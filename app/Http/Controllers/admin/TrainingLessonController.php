<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HustlersTraining;
use App\Models\TrainingLesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TrainingLessonController extends Controller
{

    public function create($courseId)
    {
        $training = HustlersTraining::findOrFail($courseId);
        return view('admin_dashboard.businesstrainings.add_lessons', compact('training'));
    }

    public function store(Request $request, $courseId)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'video_url'   => 'nullable|string|max:255',
            'lesson_order'=> 'required|integer',
        ]);

        TrainingLesson::create([
            'course_id' => $courseId,
            'title'       => $request->title,
            'description' => $request->description,
            'video_url'   => $request->video_url,
            'lesson_order'=> $request->lesson_order,
        ]);

        return redirect()->route('training.lessons.add', $courseId)
            ->with('success', 'Lesson added successfully!');
    }


}
