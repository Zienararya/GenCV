<?php

namespace App\Http\Controllers;

use App\Models\CurriculumVitae;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CurriculumVitaeController extends Controller
{
    public function index() : View
    {
        $cvs = CurriculumVitae::latest()->paginate(10);

        return view('dashboard.index', compact('cvs'));
    }

    public function create() : View
    {
        return view('dashboard.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
        'job_title' => 'required|string|max:255',
        'photo' => 'nullable|image|max:2048',
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:12',
        'country' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'date_birth' => 'required|date',
        'place_birth' => 'required|string|max:255',
        'skill' => 'required|string',
        'language' => 'required|string',
        'summary' => 'required|string',
        'education' => 'required|array',
        ]);

        //upload image
        $photo = $request->file('photo');
        $photo->storeAs('storage/app/public', $photo->hashName());

        //create product
        CurriculumVitae::create([
        'image'             => $photo->hashName(),
        'title'             => $request->title,
        'job_title'         => $request->job_title,
        'first_name'        => $request->first_name,
        'last_name'         => $request->last_name,
        'email'             => $request->email,
        'phone'             => $request->phone,
        'country'           => $request->country,
        'address'           => $request->address,
        'date_birth'        => $request->date_birth,
        'place_birth'       => $request->place_birth,
        'skill'             => $request->skill,
        'language'          => $request->language,
        'summary'           => $request->summary,
        'education'         => $request->education,
        ]);

        //redirect to index
        return redirect()->route('dashboard.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
