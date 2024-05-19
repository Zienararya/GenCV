<?php

namespace App\Http\Controllers;

use App\Models\CurriculumVitae;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CurriculumVitaeController extends Controller
{
    // Indexing CV
    public function index() : View{
        $cvs = CurriculumVitae::latest()->paginate(10);

        return view('dashboard.index', compact('cvs'));
    }
    
    // Create CV
    public function create() : View{
        return view('dashboard.create');
    }
    
    // Store Data from form into DB
    public function store(Request $request): RedirectResponse{
        //validate form
        $request->validate([
        'job_title' => 'required|string|max:255',
        'photo' => 'required|image|max:2048',
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:12',
        'country' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'date_birth' => 'required|date_format:d/m/Y',
        'place_birth' => 'required|string|max:255',
        'skill' => 'required|string',
        'language' => 'required|string',
        'summary' => 'required|string',
        'education' => 'nullable|array',
        ]);

        //upload image
        $photo = $request->file('photo');
        $photo->storeAs('storage/app/public', $photo->hashName());

        //create product
        CurriculumVitae::create([
        'photo'             => $photo->hashName(),
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
    
    // Show Item by ID
    public function show(string $id): View{
        //get product by ID
        $cv = CurriculumVitae::findOrFail($id);

        //render view with product
        return view('dashboard.show', compact('cv'));
    }
    
    //Edit Item by ID
    public function edit(string $id): View{
        //get product by ID
        $cv = CurriculumVitae::findOrFail($id);

        //render view with product
        return view('dashboard.edit', compact('cv'));
    }
    
    // Update data from DB
    public function update(Request $request, $id): RedirectResponse{
        //validate form
        $request->validate([
            'job_title' => 'required|string|max:255',
        'photo' => 'required|image|max:2048',
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:12',
        'country' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'date_birth' => 'required|date_format:d/m/Y',
        'place_birth' => 'required|string|max:255',
        'skill' => 'required|string',
        'language' => 'required|string',
        'summary' => 'required|string',
        'education' => 'nullable|array',
        ]);

        //get product by ID
        $cv = CurriculumVitae::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('photo')) {

            //upload new image
            $photo = $request->file('photo');
            $photo->storeAs('storage/app/public', $photo->hashName());

            //delete old image
            Storage::delete('storage/app/public/'.$cv->photo);

            //update product with new image
            $cv->update([
            'photo'             => $photo->hashName(),
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

        } else {

            //update product without image
            $cv->update([
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
        }

        //redirect to index
        return redirect()->route('dashboard.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    
    // Delete Item by ID
    public function destroy($id): RedirectResponse{
        //get product by ID
        $cv = CurriculumVitae::findOrFail($id);

        //delete image
        Storage::delete('storage/app/public/'. $cv->photo);

        //delete product
        $cv->delete();

        //redirect to index
        return redirect()->route('dashboard.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
