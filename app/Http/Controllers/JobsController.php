<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function schedule(){
        $jobs=Job::select('*')->get();
        return view('welcome')->with('jobs',$jobs);
    }
   public function requestJob(Request $request){


       $job = new Job();
       $job->job_date = $request->jobDate;
       $job->emp_name = $request->name;
       $job->job_title = $request->jobTitle;
       $job->position = $request->position;
       $job->status = 'pending';
       $job->job_type=$request->jobType;
       $job->save();
       return response()->json(['jobId'=>$job->id]);

   }
}
