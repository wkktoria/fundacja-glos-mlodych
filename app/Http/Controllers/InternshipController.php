<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class InternshipController extends Controller
{
    public function index()
    {
        $internships = Internship::pluck("nazwa");
        return view("internship.offer")->with("availableInternships", $internships);
    }

    public function showByName($name)
    {
        $decodedName = str_replace('-', ' ', $name);
        $internship = Internship::whereRaw('LOWER(nazwa) = ?', $decodedName)->firstOrFail();
        return view("internship.details")->with("internship", $internship);
    }

    public function all()
    {
        $internships = Internship::paginate(5);
        return view('admin.internship.all', compact('internships'));
    }
}
