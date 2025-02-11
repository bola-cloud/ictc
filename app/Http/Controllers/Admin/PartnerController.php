<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
use Illuminate\Support\Facades\File;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('admin.partners.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.partners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|in:governmental,ngo,international',
            'image' => 'required|image|max:2048'
        ]);

        $imagePath = $request->file('image')->store('partners', 'public');

        Partner::create([
            'category' => $request->category,
            'image_path' => 'storage/' . $imagePath,
        ]);

        return redirect()->route('admin.partners.index')->with('success', __('lang.partner_added'));
    }

    public function edit(Partner $partner)
    {
        return view('admin.partners.edit', compact('partner'));
    }

    public function update(Request $request, Partner $partner)
    {
        $request->validate([
            'category' => 'required|in:governmental,ngo,international',
            'image' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('partners', 'public');
            $partner->image_path = 'storage/' . $imagePath;
        }

        $partner->update([
            'category' => $request->category,
        ]);

        return redirect()->route('admin.partners.index')->with('success', __('lang.partner_updated'));
    }

    public function destroy(Partner $partner)
    {
        // Delete the image file from public/storage/partners/
        if (File::exists(public_path($partner->image_path))) {
            File::delete(public_path($partner->image_path));
        }

        // Delete partner record from database
        $partner->delete();

        return redirect()->route('admin.partners.index')->with('success', __('lang.partner_deleted'));
    }
}
