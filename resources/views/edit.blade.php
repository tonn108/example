<!DOCTYPE html>
<html>
<head>
    <title>แก้ไขข้อมูล</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                แก้ไขข้อมูล
            </div>
            <div class="card-body">
                <form action="{{ route('performance.update', $performance->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-4">
                            <select name="task_type" class="form-select" required>
                                <option value="">เลือกประเภทงาน</option>
                                <option value="Development" {{ $performance->task_type == 'Development' ? 'selected' : '' }}>Development</option>
                                <option value="Test" {{ $performance->task_type == 'Test' ? 'selected' : '' }}>Test</option>
                                <option value="Document" {{ $performance->task_type == 'Document' ? 'selected' : '' }}>Document</option>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="task_name" class="form-control" value="{{ $performance->task_name }}" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <input type="datetime-local" name="start_time" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($performance->start_time)) }}" required>
                        </div>
                        <div class="col-md-4">
                            <input type="datetime-local" name="end_time" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($performance->end_time)) }}" required>
                        </div>
                        <div class="col-md-4">
                            <select name="status" class="form-select" required>
                                <option value="">เลือกสถานะ</option>
                                <option value="เสร็จสิ้น" {{ $performance->status == 'เสร็จสิ้น' ? 'selected' : '' }}>เสร็จสิ้น</option>
                                <option value="กำลังดำเนินการ" {{ $performance->status == 'กำลังดำเนินการ' ? 'selected' : '' }}>กำลังดำเนินการ</option>
                                <option value="รอดำเนินการ" {{ $performance->status == 'รอดำเนินการ' ? 'selected' : '' }}>รอดำเนินการ</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a href="/" class="btn btn-secondary">ยกเลิก</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html> 