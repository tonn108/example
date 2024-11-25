<?php

namespace App\Http\Controllers;

use App\Models\Performance;
use Illuminate\Http\Request;

class PerformanceController extends Controller
{
    public function index()
    {
        $performances = Performance::all();
        return view('welcome', compact('performances'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'task_type' => 'required',
            'task_name' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'status' => 'required'
        ]);

        Performance::create($request->all());
        return redirect()->route('performance.index')->with('success', 'บันทึกข้อมูลสำเร็จ');
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $performances = Performance::where('task_name', 'LIKE', "%{$search}%")
                                 ->orWhere('task_type', 'LIKE', "%{$search}%")
                                 ->orWhere('start_time', 'LIKE', "%{$search}%")
                                 ->orWhere('end_time', 'LIKE', "%{$search}%")
                                 ->orWhere('status', 'LIKE', "%{$search}%")
                                 ->get();
        return view('welcome', compact('performances'));
    }

    public function edit($id)
    {
        $performance = Performance::findOrFail($id);
        return view('edit', compact('performance'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'task_type' => 'required',
            'task_name' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'status' => 'required'
        ]);

        $performance = Performance::findOrFail($id);
        $performance->update($request->all());
        return redirect()->route('performance.index')->with('success', 'อัพเดทข้อมูลสำเร็จ');
    }

    public function destroy($id)
    {
        $performance = Performance::findOrFail($id);
        $performance->delete();
        return redirect()->route('performance.index')->with('success', 'ลบข้อมูลสำเร็จ');
    }
} 