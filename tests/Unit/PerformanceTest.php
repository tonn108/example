<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Performance;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PerformanceTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_performance()
    {
        // Arrange - เตรียมข้อมูล
        $performanceData = [
            'task_type' => 'Development',
            'task_name' => 'ทดสอบการเขียนโค้ด',
            'start_time' => '2024-03-20 09:00:00',
            'end_time' => '2024-03-20 12:00:00',
            'status' => 'completed'
        ];

        // Act - ดำเนินการทดสอบ
        $performance = Performance::create($performanceData);

        // Assert - ตรวจสอบผลลัพธ์
        $this->assertInstanceOf(Performance::class, $performance);
        $this->assertEquals('Development', $performance->task_type);
        $this->assertEquals('ทดสอบการเขียนโค้ด', $performance->task_name);
        $this->assertEquals('completed', $performance->status);
    }

    public function test_performance_requires_task_type()
    {
        // Arrange
        $performanceData = [
            'task_name' => 'ทดสอบการเขียนโค้ด',
            'start_time' => '2024-03-20 09:00:00',
            'end_time' => '2024-03-20 12:00:00',
            'status' => 'completed'
        ];

        // Assert
        $this->expectException(\Illuminate\Database\QueryException::class);
        
        // Act
        Performance::create($performanceData);
    }

    public function test_can_search_performance()
    {
        // Arrange
        Performance::create([
            'task_type' => 'Development',
            'task_name' => 'ทดสอบการค้นหา',
            'start_time' => '2024-03-20 09:00:00',
            'end_time' => '2024-03-20 12:00:00',
            'status' => 'completed'
        ]);

        // Act
        $searchResult = Performance::where('task_name', 'LIKE', '%ค้นหา%')->first();

        // Assert
        $this->assertNotNull($searchResult);
        $this->assertEquals('ทดสอบการค้นหา', $searchResult->task_name);
    }
} 