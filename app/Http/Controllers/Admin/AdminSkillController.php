<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;

class AdminSkillController extends Controller
{
    public function index()
    {
        $all_skill = Skill::get();
        return view('Admin.skill_show', compact('all_skill'));
    }

    public function skill_create()
    {
        return view('Admin.skill_create');
    }

    public function skill_store(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'percentage' => 'required'
        ]);

        $skill = new Skill();

        $skill->name = $request->name;
        $skill->percentage = $request->percentage;
        $skill->side = $request->side;
        $skill->save();

        return redirect()->route('admin_skill_show')->with('success', 'Skill Saved Successfully.');

    }

    public function skill_edit($id)
    {
        $skill_single = Skill::where('id', $id)->first();
        return view('Admin.skill_edit', compact('skill_single'));
    }

    public function skill_update(Request $request, $id)
    {

        $request->validate([
           'name' => 'required',
           'percentage' => 'required'
        ]);


        $skill = Skill::where('id', $id)->first();


        $skill->name = $request->name;
        $skill->percentage = $request->percentage;
        $skill->side = $request->side;
        $skill->update();

        return redirect()->route('admin_skill_show')->with('success', 'Skill Updated Successfully.');

    }

    public function skill_delete($id)
    {
        $skill_single = Skill::where('id', $id)->first();
        $skill_single->delete();

        return redirect()->route('admin_skill_show')->with('success', 'Skill Deleted Successfully.');

    }
}
