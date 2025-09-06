<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AutomationCourse;
use Illuminate\Support\Facades\Validator;
use App\Models\CourseLesson;

use Illuminate\Http\Request;

class AutomationCoursesController extends Controller
{
    
   public function coursesadd()
    {

        return view('admin_dashboard.Courses.add');
    }


 public function coursestore(Request $request)
{
    // Manual validation using Validator
    $validator = Validator::make($request->all(), [
        'title' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'description' => 'required|string',
        'video_url' => 'required|url',
    ]);

    // Check if validation fails
    if ($validator->fails()) {
        return redirect()->back()
                         ->withErrors($validator)
                         ->withInput();
    }

    // Save Data
    $course = new AutomationCourse();
    $course->title = $request->title;
    $course->category = $request->category;
    $course->description = $request->description;
    $course->video_url = $request->video_url;
    // $course->course_link = $request->course_link; // optional
    $course->save();

    return redirect()->route('courses.list')->with('success', 'Course added successfully!');
}


      public function courseslist()
    {
            $courses = AutomationCourse::latest()->paginate(10);

         return view('admin_dashboard.Courses.list',compact('courses'));
    }

    public function courseview($id)
    {
    $course = AutomationCourse::with('lessons')->findOrFail($id);
        return view('admin_dashboard.Courses.details', compact('course'));
    }



    public function coursesedit($id)
    {
        $course = AutomationCourse::findOrFail($id);
        return view('admin_dashboard.Courses.edit', compact('course'));
    }

    // Update Course
   public function courseupdate(Request $request, $id)
{
    // Manual validation
    $validator = Validator::make($request->all(), [
        'title' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'description' => 'required|string',
        'video_url' => 'required|url',
        // 'course_link' => 'nullable|url', // optional
    ]);

    if ($validator->fails()) {
        return redirect()->back()
                         ->withErrors($validator)
                         ->withInput();
    }

    // Update Data
    $course = AutomationCourse::findOrFail($id);
    $course->title = $request->title;
    $course->category = $request->category;
    $course->description = $request->description;
    $course->video_url = $request->video_url;
    // $course->course_link = $request->course_link; // optional
    $course->save();

    return redirect()->route('courses.list')->with('success', 'Course updated successfully!');
}

    // Delete Course
    public function coursedelete($id)
    {
        $course = AutomationCourse::findOrFail($id);
        $course->delete();

        return redirect()->route('courses.list')->with('success', 'Course deleted successfully!');
    }










    // End of class


   public function lessonsList($course_id)
    {
        $course = AutomationCourse::findOrFail($course_id);
        $lessons = $course->lessons()->orderBy('lesson_order', 'asc')->paginate(10);

        return view('admin_dashboard.Lessons.list', compact('course', 'lessons'));
    }

    // Add lesson form
    public function lessonsAdd($course_id)
    {
        $course = AutomationCourse::findOrFail($course_id);
        return view('admin_dashboard.Lessons.add', compact('course'));
    }

    // Store lesson
    public function lessonsStore(Request $request, $course_id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'video_url' => 'nullable|url',
            'lesson_order' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->route('courses.list')->withErrors($validator)->withInput();
        }

        CourseLesson::create([
            'course_id' => $course_id,
            'title' => $request->title,
            'description' => $request->description,
            'video_url' => $request->video_url,
            'lesson_order' => $request->lesson_order,
        ]);

        return redirect()->route('courses.list', $course_id)->with('success', 'Lesson added successfully!');
    }

    // Edit lesson
    public function lessonsEdit($id)
    {
        $lesson = CourseLesson::findOrFail($id);
        return view('admin_dashboard.Lessons.edit', compact('lesson'));
    }

    // Update lesson
    public function lessonsUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'video_url' => 'nullable|url',
            'lesson_order' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $lesson = CourseLesson::findOrFail($id);
        $lesson->update($request->only('title','description','video_url','lesson_order'));

        return redirect()->route('lessons.list', $lesson->course_id)->with('success', 'Lesson updated successfully!');
    }

    // Delete lesson
    public function lessonsDelete($id)
    {
        $lesson = CourseLesson::findOrFail($id);
        $course_id = $lesson->course_id;
        $lesson->delete();

        return redirect()->route('lessons.list', $course_id)->with('success', 'Lesson deleted successfully!');
    }

}
