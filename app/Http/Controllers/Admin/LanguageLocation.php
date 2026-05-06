<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\LanguageLocation as LangLocation;
use Illuminate\Http\Request;

class LanguageLocation extends Controller
{
    function __construct()
    {
        if (!auth()->user()->hasRole('core')) {
            abort(403);
        }
    }

    public function index()
    {
        // Get all active languages for the first column
        $languages = Language::where('status', 1)->get();

        // Selected Language and Location from query
        $selectedLanguageId = request()->query('l');
        $selectedLocationId = request()->query('s');

        $locations = collect();
        $selectedLL = null;
        $selectedLanguage = null;

        if ($selectedLanguageId) {
            $selectedLanguage = Language::find($selectedLanguageId);
            if ($selectedLanguage) {
                // Get locations(locations) for the selected language
                $locations = LangLocation::where('language_id', $selectedLanguageId)
                    ->with('location')
                    ->get()
                    ->map(function ($ll) {
                        return $ll->location;
                    })->filter();
            }
        }

        if ($selectedLanguageId && $selectedLocationId) {
            // Get specific LanguageLocation details
            $selectedLL = LangLocation::where('language_id', $selectedLanguageId)
                ->where('location_id', $selectedLocationId)
                ->with(['language', 'location'])
                ->first();
        }

        return view('admin.language_location.index', compact(
            'languages',
            'locations',
            'selectedLanguage',
            'selectedLL',
            'selectedLanguageId',
            'selectedLocationId'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $selectedLL = LangLocation::with(['language', 'location'])->findOrFail($id);
        return view('admin.language_location.edit', compact('selectedLL'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $selectedLL = LangLocation::findOrFail($id);

        $validated = $request->validate([
            'locale_name' => 'nullable|string|max:255',
            'speakers' => 'nullable|integer|min:0',
            'mt_populations' => 'nullable|integer|min:0',
            'location_content_id' => 'nullable|string|max:255',
        ]);

        $selectedLL->update($validated);

        return redirect()->route('admin.language-locations.index', [
            'l' => $selectedLL->language_id,
            's' => $selectedLL->location_id
        ])->with('success', 'Language-Location details updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Restriction: Only Admin role can delete
        if (!auth()->user()->hasRole('Admin')) {
            abort(403, 'Only administrators can delete language-location records.');
        }

        $selectedLL = LangLocation::findOrFail($id);
        $languageId = $selectedLL->language_id;
        $selectedLL->delete();

        return redirect()->route('admin.language-locations.index', ['l' => $languageId])
            ->with('success', 'Language-Location record deleted successfully!');
    }
}
