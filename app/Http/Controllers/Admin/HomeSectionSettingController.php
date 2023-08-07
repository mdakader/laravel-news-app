<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminHomeSectionSettingUpdateRequest;
use App\Models\HomeSectionSetting;
use App\Models\Language;
use Illuminate\Http\Request;

class HomeSectionSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $languages = Language::all();
        return view('admin.home-section-setting.index', compact('languages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminHomeSectionSettingUpdateRequest $request)
    {
        HomeSectionSetting::updateOrCreate(
            ['language' => $request->language],
            [
                'category_section_one' => $request->category_section_one,
                'category_section_two' => $request->category_section_two,
                'category_section_three' => $request->category_section_three,
                'category_section_four' => $request->category_section_four,
            ]
        );

        toast(__('Updated Successfully'), 'success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
