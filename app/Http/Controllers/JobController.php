<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
  function index(){
    $jobs = Job::all();
    return view ('Job.index', ['jobs'=>$jobs, 'name'=> 'omar']);
  }
}
