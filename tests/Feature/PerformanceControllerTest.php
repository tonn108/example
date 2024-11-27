<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Performance;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PerformanceControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_store_performance()
    {
        // Arrange
        $performanceData = [
            'task_type' => 'Development',
            'task_name' => 'ทดสอบการบันทึก',
            'start_time' => '2024-03-20 09:00:00',
            'end_time' => '2024-03-20 12:00:00',
            'status' => 'completed'
        ];

        // Act
        $response = $this->post(route('performance.store'), $performanceData);

        // Assert
        $response->assertRedirect();
        $this->assertDatabaseHas('performances', [
            'task_name' => 'ทดสอบการบันทึก'
        ]);
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
        $response = $this->get(route('performance.search', ['search' => 'ค้นหา']));

        // Assert
        $response->assertStatus(200);
        $response->assertSee('ทดสอบการค้นหา');
    }
}
