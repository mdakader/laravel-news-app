<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FooterGridOneSaveRequest;
use App\Models\FooterGridTwo;
use App\Models\Language;

class FooterGridTwoController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:footer index,admin'])->only(['index']);
        $this->middleware(['permission:footer create,admin'])->only(['create', 'store']);
        $this->middleware(['permission:footer update,admin'])->only(['edit', 'update', 'handleTitle']);
        $this->middleware(['permission:footer destroy,admin'])->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $languages = Language::all();
        return view('admin.footer-grid-two.index', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $languages = Language::all();
        return view('admin.footer-grid-two.create', compact('languages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FooterGridOneSaveRequest $request)
    {
        $footer = new FooterGridTwo();
        $footer->language = $request->language;
        $footer->name = $request->name;
        $footer->url = $request->url;
        $footer->status = $request->status;
        $footer->save();

        toast(__('Created Successfully!'), 'success');

        return redirect()->route('admin.footer-grid-two.index');

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $languages = Language::all();
        $footer = FooterGridTwo::findOrFail($id);
        return view('admin.footer-grid-two.edit', compact('footer', 'languages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FooterGridOneSaveRequest $request, string $id)
    {
        $footer = FooterGridTwo::findOrFail($id);
        $footer->language = $request->language;
        $footer->name = $request->name;
        $footer->url = $request->url;
        $footer->status = $request->status;
        $footer->save();

        toast(__('Updated Successfully!'), 'success');

        return redirect()->route('admin.footer-grid-two.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FooterGridTwo::findOrFail($id)->delete();

        return response(['status' => 'success', 'message' => __('Deleted Successfully')]);
    }
}
