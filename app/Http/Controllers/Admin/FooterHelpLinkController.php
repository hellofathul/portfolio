<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\FooterHelpLinkDataTable;
use App\Http\Controllers\Controller;
use App\Models\FooterHelpLink;
use Illuminate\Http\Request;

class FooterHelpLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FooterHelpLinkDataTable $dataTable)
    {
        return $dataTable->render('admin.footer-help-link.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.footer-help-link.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'url' => ['required', 'url'],
        ]);

        $footerHelpLink = new FooterHelpLink();
        $footerHelpLink->name = $request->name;
        $footerHelpLink->url = $request->url;
        $footerHelpLink->save();
        toastr()->success('Created Successfully');
        return redirect()->route('admin.footer-help-link.index');
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
        $footerHelpLink = FooterHelpLink::findOrFail($id);
        return view('admin.footer-help-link.edit', compact('footerHelpLink'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'url' => ['required', 'url'],
        ]);

        $footerHelpLink = FooterHelpLink::findOrFail($id);
        $footerHelpLink->name = $request->name;
        $footerHelpLink->url = $request->url;
        $footerHelpLink->save();
        toastr()->success('Updated Successfully');
        return redirect()->route('admin.footer-help-link.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $footerHelpLink = FooterHelpLink::findOrFail($id);
        $footerHelpLink->delete();
    }
}
