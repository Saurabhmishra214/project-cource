<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AutomationCourse;
use Illuminate\Support\Facades\Validator;

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
        // 'course_link' => 'nullable|url', // optional
    ]);

    // Check if validation fails
    if ($validator->fails()) {
        // आप errors को redirect या JSON में भेज सकते हो
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
        $course = AutomationCourse::findOrFail($id);
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

}
