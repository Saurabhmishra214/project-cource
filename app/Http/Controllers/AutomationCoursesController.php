<?php

namespace App\Http\Controllers;
use App\Models\AutomationCourse;

use Illuminate\Http\Request;

class AutomationCoursesController extends Controller
{
    
   public function coursesadd()
    {

        return view('admin_dashboard.Courses.add');
    }


   public function coursestore(Request $request)
    {
      

        // Save Data
        $course = new AutomationCourse();
        $course->title = $request->title;
        $course->category = $request->category;
        $course->description = $request->description;
        $course->video_url = $request->video_url;

        // $course->course_link = $request->course_link; // optional
        $course->save();

        // Redirect with success message
        return redirect()->route('courses.list')->with('success', 'Course added successfully!');
    }


      public function courseslist()
    {
            $courses = AutomationCourse::all();

         return view('admin_dashboard.Courses.list',compact('courses'));
    }



    public function coursesedit($id)
    {
        $course = AutomationCourse::findOrFail($id);
        return view('admin_dashboard.Courses.edit', compact('course'));
    }

    // Update Course
    public function courseupdate(Request $request, $id)
    {
      

        $course = AutomationCourse::findOrFail($id);
        $course->title = $request->title;
        $course->category = $request->category;
        $course->description = $request->description;
        $course->video_url = $request->video_url;
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
