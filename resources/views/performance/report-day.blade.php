<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>รายงานผลการปฎิบัติงานประจำวัน</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="report">
                    <h4>รายงานผลการปฎิบัติงานประจำวัน</h4>
                    <!-- ส่วนค้นหาและกรองข้อมูล -->
                    <div class="row mb-4">
                        <div class="col-sm-6">
                            <form action="{{ route('performance.report_day') }}" method="GET">
                                <div class="input-group">
                                    <input type="date" class="form-control" id="report_date" name="report_date" value="{{ request('report_date', now()->format('Y-m-d')) }}">
                                    <button type="submit" class="btn btn-primary">ค้นหา</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- สรุปข้อมูลสำคัญ -->
                    <div class="row mb-4">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">งานทั้งหมด</h5>
                                    <h2 class="card-text">{{ $totalTasks ?? 0 }}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">งานเสร็จสิ้น</h5>
                                    <h2 class="card-text text-success">{{ $completedTasks ?? 0 }}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">งานกำลังดำเนินการ</h5>
                                    <h2 class="card-text text-warning">{{ $inProgressTasks ?? 0 }}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">งานที่ยกเลิก</h5>
                                    <h2 class="card-text text-danger">{{ $cancelledTasks ?? 0 }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- กราฟแสดงข้อมูล -->
                    <div class="row mb-4">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">สัดส่วนประเภทงาน</h5>
                                    <canvas id="taskTypeChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">สถานะงาน</h5>
                                    <canvas id="taskStatusChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // ตัวอย่างการสร้างกราฟวงกลมแสดงสัดส่วนประเภทงาน
    const taskTypeChart = new Chart(
        document.getElementById('taskTypeChart'),
        {
            type: 'pie',
            data: {
                labels: ['Development', 'Test', 'Document'],
                datasets: [{
                    data: [{{ $devTasks }}, {{ $testTasks }}, {{ $docTasks }}],
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
                }]
            },
        }
    );

    // ตัวอย่างการสร้างกราฟวงกลมแสดงสถานะงาน
    const taskStatusChart = new Chart(
        document.getElementById('taskStatusChart'),
        {
            type: 'pie',
            data: {
                labels: ['เสร็จสิ้น', 'กำลังดำเนินการ', 'ยกเลิก'],
                datasets: [{
                    data: [{{ $completedTasks ?? 0 }}, {{ $inProgressTasks ?? 0 }}, {{ $cancelledTasks ?? 0 }}],
                    backgroundColor: ['#4BC0C0', '#FFCE56', '#FF6384']
                }]
            }
        }
    );
</script>
</html>