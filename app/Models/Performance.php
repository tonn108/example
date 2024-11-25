<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_type',
        'task_name',
        'start_time',
        'end_time',
        'status'
    ];

    // กำหนดค่าคงที่สำหรับประเภทงาน
    const TASK_TYPE_DEVELOPMENT = 'Development';
    const TASK_TYPE_TEST = 'Test';
    const TASK_TYPE_DOCUMENT = 'Document';
    // กำหนดค่าคงที่สำหรับสถานะ
    const STATUS_COMPLETED = 'Completed';
    const STATUS_IN_PROGRESS = 'In Progress';
    const STATUS_CANCELLED = 'Cancelled';
} 