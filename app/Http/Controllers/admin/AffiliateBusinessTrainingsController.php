<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AffiliateTraining; 
use App\Models\AffiliateTrainingSession; 


class AffiliateBusinessTrainingsController extends Controller
{
   
 
 
    public function create()
    {
        return view('admin_dashboard.businesstrainings.add');
    }

  
   public function store(Request $request)
    {
    

        AffiliateTraining::create($request->all());

        return redirect()->route('businesstrainings.list')
                         ->with('success', 'Training added successfully!');
    }

   
    public function details($id)
    {
        $training = AffiliateTraining::with('sessions')->findOrFail($id);

        return view('admin_dashboard.businesstrainings.details', compact('training'));
    }



public function list()
{
    $trainings = AffiliateTraining::latest()->paginate(10); // paginate only
    return view('admin_dashboard.businesstrainings.list', compact('trainings'));
}





    public function edit($id)
{
    $training = AffiliateTraining::findOrFail($id);

    return view('admin_dashboard.businesstrainings.edit', compact('training'));
}


 
    public function update(Request $request, $id)
    {
       
        $training = AffiliateTraining::findOrFail($id);
        $training->update($request->all());

        return redirect()->route('businesstrainings.list')
                         ->with('success', 'Training updated successfully!');
    }

  
    public function destroy($id)
    {
        $training = AffiliateTraining::findOrFail($id);

        $training->sessions()->delete();
        $training->delete();

        return redirect()->route('businesstrainings.list')
                         ->with('success', 'Training deleted successfully!');
    }
}
