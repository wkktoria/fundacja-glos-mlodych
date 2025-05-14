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
        $internships = Internship::latest()->paginate(5);
        return view('admin.internship.all', compact('internships'));
    }

    public function create()
    {
        return view('admin.internship.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nazwa' => 'required|string|max:50',
            'opis' => 'nullable|string',
            'obowiązki' => 'required|string',
            'narzędzia' => 'required|string',
            'obraz' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $image = $request->file('obraz');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->storeAs('images/internships', $imageName);
        $imagePath = '/images/internships/' . $imageName;

        Internship::create([
            'nazwa' => $request->input('nazwa'),
            'opis' => $request->input('opis'),
            'obowiązki' => $request->input('obowiązki'),
            'narzędzia' => $request->input('narzędzia'),
            'obraz' => $imagePath
        ]);

        return redirect()->route('admin.internships.all')->with('success', 'Praktyka została pomyślnie dodana do oferty.');
    }

    public function destroy($id)
    {
        $internship = Internship::findOrFail($id);
        $internship->delete();
        return redirect()->route('admin.internships.all')->with('success', 'Praktyka została usunięta z oferty.');
    }
}
