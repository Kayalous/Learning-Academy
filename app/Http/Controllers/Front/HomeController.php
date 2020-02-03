<?php

namespace App\Http\Controllers\Front;

use App\Course;
use App\Http\Controllers\Controller;
use App\Student;
use App\Test;
use App\Trainer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['courses'] = Course::select('id', 'name', 'small_desc', 'cat_id', 'trainer_id', 'price', 'img')
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();
        $data['courses_count'] = Course::count();
        $data['trainers_count'] = Trainer::count();
        $data['students_count'] = Student::count();
        $data['testimonials'] = Test::select('name', 'spec', 'small_desc', 'img')->get();
        return view('Front.index')->with($data);
    }
}
