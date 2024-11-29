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

    public function reportDay(Request $request)
    {
        // สร้าง query base
        $date = $request->report_date ?? today();
        
        // ดึงข้อมูลทั้งหมดของวันที่เลือกมาก่อน
        $performances = Performance::whereDate('created_at', $date)->get();
        
        // นับจำนวนทั้งหมด
        $totalTasks = $performances->count();
        
        // นับตามสถานะ
        $completedTasks = $performances->where('status', 'เสร็จสิ้น')->count();
        $inProgressTasks = $performances->where('status', 'กำลังดำเนินการ')->count();
        $cancelledTasks = $performances->where('status', 'ยกเลิก')->count();
        
        // นับตามประเภทงาน
        $devTasks = $performances->where('task_type', 'Development')->count();
        $testTasks = $performances->where('task_type', 'Test')->count();
        $docTasks = $performances->where('task_type', 'Document')->count();

        return view('performance.report-day', compact(
            'totalTasks',
            'completedTasks',
            'inProgressTasks',
            'cancelledTasks',
            'devTasks',
            'testTasks',
            'docTasks'
        ));
    }

    public function reportMonth(Request $request)
    {
        $month = $request->report_month ?? now()->format('Y-m');
        
        $performances = Performance::whereYear('created_at', substr($month, 0, 4))
                                   ->whereMonth('created_at', substr($month, 5, 2))
                                   ->get();
        
        // สถานะงาน
        $totalTasks = $performances->count();
        $completedTasks = $performances->where('status', 'เสร็จสิ้น')->count();
        $inProgressTasks = $performances->where('status', 'กำลังดำเนินการ')->count();
        $cancelledTasks = $performances->where('status', 'ยกเลิก')->count();
        
        // ประเภทงาน
        $devTasks = $performances->where('task_type', 'Development')->count();
        $testTasks = $performances->where('task_type', 'Test')->count();
        $docTasks = $performances->where('task_type', 'Document')->count();

        return view('performance.report-month', compact(
            'totalTasks',
            'completedTasks',
            'inProgressTasks',
            'cancelledTasks',
            'devTasks',
            'testTasks',
            'docTasks'
        ));
    }
} 