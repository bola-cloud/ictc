<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;
class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->paginate(9);
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ar_title' => 'required|string|max:255',
            'en_title' => 'required|string|max:255',
            'image'    => 'required|image|mimes:jpg,jpeg,png,svg|max:2048',
        ]);

        $filename = time() . '_' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('storage/services'), $filename);

        Service::create([
            'ar_title' => $request->ar_title,
            'en_title' => $request->en_title,
            'image'    => 'storage/services/' . $filename, // ✅ تخزين المسار الكامل
        ]);

        return redirect()->route('admin.services.index')->with('success', __('lang.success_service_created'));
    }


    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'ar_title' => 'required|string|max:255',
            'en_title' => 'required|string|max:255',
            'image'    => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
        ]);

        $data = $request->only('ar_title', 'en_title');

        if ($request->hasFile('image')) {
            if ($service->image && file_exists(public_path($service->image))) {
                unlink(public_path($service->image));
            }

            $filename = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('storage/services'), $filename);
            $data['image'] = 'storage/services/' . $filename; // ✅ تخزين المسار الكامل
        }

        $service->update($data);

        return redirect()->route('admin.services.index')->with('success', __('lang.success_service_updated'));
    }

    public function destroy(Service $service)
    {
        if ($service->image && Storage::disk('public')->exists($service->image)) {
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();

        return redirect()->route('admin.services.index')->with('success', __('lang.success_service_deleted'));
    }
}
