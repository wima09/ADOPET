<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\PetCategory;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index(Request $request)
    {
        $query = Pet::with(['category', 'shelter'])
            ->where('status', 'tersedia');

        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('name', 'ilike', "%{$search}%")
                    ->orWhere('breed', 'ilike', "%{$search}%");
            });
        }

        if ($request->filled('category')) {
            $query->where('pet_category_id', $request->category);
        }

        if ($request->filled('gender')) {
            $query->where('gender', $request->gender);
        }

        $pets = $query->latest()->paginate(12)->withQueryString();

        $categories = PetCategory::orderBy('name')->get();

        return view('pages.adoption', compact(
            'pets',
            'categories'
        ));
    }

    public function show(Pet $pet)
    {
        $pet->load(['category', 'shelter']);

        return view('pages.pet-detail', compact('pet'));
    }
}
