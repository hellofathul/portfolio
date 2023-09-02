<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ServiceDataTable;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ServiceDataTable $dataTable)
    {
        return $dataTable->render('admin.services.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'description' => ['required', 'max:200']
        ]);

        $create = new Service();
        $create->name = $request->name;
        $create->description = $request->description;
        $create->save();
        toastr()->success('Created Successfully', 'Service');
        return redirect()->route('admin.services.index');
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
        $services = Service::findOrFail($id);
        return view('admin.services.edit', compact('services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'description' => ['required', 'max:200']
        ]);

        $edit = Service::findOrFail($id);
        $edit->name = $request->name;
        $edit->description = $request->description;
        $edit->save();
        toastr()->success('Updated Successfully', 'Service');
        return redirect()->route('admin.services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $services = Service::findOrFail($id);
        $services->delete();
        toastr()->success('Deleted', 'Service');
    }
}
