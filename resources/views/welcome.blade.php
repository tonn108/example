<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Performance App</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Welcome to the Performance App</h1>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <form action="{{ route('performance.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="task_type" class="form-label">ประเภทงาน</label>
                                    <select class="form-control" id="task_type" name="task_type" required>
                                        <option value="">กรุณาเลือกประเภทงาน</option>
                                        <option value="Development">Development</option>
                                        <option value="Test">Test</option>
                                        <option value="Document">Document</option>
                                    </select>
                                </div>
    
                                <div class="mb-3">
                                    <label for="task_name" class="form-label">ชื่องานที่ดำเนินการ</label>
                                    <input type="text" class="form-control" id="task_name" name="task_name" required>
                                </div>
    
                                <div class="mb-3">
                                    <label for="start_time" class="form-label">เวลาที่เริ่มดำเนินการ</label>
                                    <input type="datetime-local" class="form-control" id="start_time" name="start_time" required>
                                </div>
    
                                <div class="mb-3">
                                    <label for="end_time" class="form-label">เวลาที่เสร็จสิ้น</label>
                                    <input type="datetime-local" class="form-control" id="end_time" name="end_time" required>
                                </div>
    
                                <div class="mb-3">
                                    <label for="status" class="form-label">สถานะ</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <option value="">กรุณาเลือกสถานะ</option>
                                        <option value="in_progress">ดำเนินการ</option>
                                        <option value="completed">เสร็จสิ้น</option>
                                        <option value="cancelled">ยกเลิก</option>
                                    </select>
                                </div>
    
                                <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                            </form>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">ค้นหาข้อมูล</label>
                                <form action="{{ route('performance.search') }}" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="search" name="search" placeholder="ค้นหาข้อมูล">
                                        <button type="submit" class="btn btn-primary">ค้นหา</button>
                                    </div>
                                </form>
                            </div>
                            <a href="{{ route('performance.report_day') }}" class="btn btn-primary">รายงานผลการปฎิบัติงานประจำวัน</a>
                            <a href="{{ route('performance.report_month') }}" class="btn btn-primary">รายงานผลการปฎิบัติงานประจำเดือน</a>
                        </div>
                    </div>
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ประเภทงาน</th>
                                <th>ชื่องานที่ดำเนินการ</th>
                                <th>เวลาที่เริ่มดำเนินการ</th>
                                <th>เวลาที่เสร็จสิ้น</th>
                                <th>สถานะ</th>
                                <th>วันเวลาที่บันทึกข้อมูล</th>
                                <th>วันเวลาที่ปรับปรุงข้อมูลล่าสุด</th>
                                <th>แก้ไข</th>
                                <th>ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($performances as $performance)
                                <tr>
                                    <td>{{ $performance->task_type }}</td>
                                    <td>{{ $performance->task_name }}</td>
                                    <td>{{ $performance->start_time }}</td>
                                    <td>{{ $performance->end_time }}</td>
                                    <td>{{ $performance->status }}</td>
                                    <td>{{ $performance->created_at }}</td>
                                    <td>{{ $performance->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('performance.edit', $performance->id) }}" class="btn btn-primary">แก้ไข</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('performance.destroy', $performance->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลนี้ใช่หรือไม่?')">ลบ</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="container-fluid" id="temple">
            <div class="row">
                <div class="col-md-12">
                    <div class="row mt-4 py-5">
                        <h1>วัดในภาคเหนือ</h1>
                        

                        <div class="mb-3">
                            <button class="btn btn-primary" id="autoPlayBtn" onclick="toggleAutoPlay()">
                                เปิด Auto Play
                            </button>
                        </div>

                        <div id="templeCarousel" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="templeall">
                                                <img src="/img/wat1.jpg" class="card-img-top imagewatthai2" id="imagewatthai" alt="รูปภาพ 1">
                                                <div class="card-body">
                                                    <h5 class="card-title">วัดป่าดาราภิรมย์ </h5>
                                                    <p class="card-text">รายละเอียดสำหรับการ์ดที่ 1</p>
                                                    <h6 class="card-text">ที่ตั้ง :  ต.ริมใต้ อ.แม่ริม จ.เชียงใหม่ </h6>
                                                    <a href="#" class="btn btn-primary btn-sm">ดูเพิ่มเติม</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="templeall">
                                                <img src="/img/wat2.jpg" class="card-img-top imagewatthai2" id="imagewatthai" alt="รูปภาพ 1">
                                                <div class="card-body">
                                                    <h5 class="card-title">วัดโลกโมฬี</h5>
                                                    <p class="card-text">รายละเอียดสำหรับการ์ดที่ 1</p>
                                                    <h6 class="card-text">ที่ตั้ง :ตำบลศรีภูมิ อำเภอเมือง จังหวัดเชียงใหม่ </h6>
                                                    <a href="#" class="btn btn-primary btn-sm">ดูเพิ่มเติม</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="templeall">
                                                <img src="/img/wat3.jpg" class="card-img-top imagewatthai2" id="imagewatthai" alt="รูปภาพ 1">
                                                <div class="card-body">
                                                    <h5 class="card-title">วัดเจดีย์หลวง</h5>
                                                    <p class="card-text">รายละเอียดสำหรับการ์ดที่ 1</p>
                                                    <h6 class="card-text">ที่ตั้ง :ตำบลพระสิงห์ อำเภอเมือง จังหวัดเชียงใหม่ </h6>
                                                    <a href="#" class="btn btn-primary btn-sm">ดูเพิ่มเติม</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="templeall">
                                                <img src="/img/wat4.jpg" class="card-img-top imagewatthai2" id="imagewatthai" alt="รูปภาพ 1">
                                                <div class="card-body">
                                                    <h5 class="card-title">วัดพระธาตุแม่เย็น</h5>
                                                    <p class="card-text">รายละเอียดสำหรับการ์ดที่ 1</p>
                                                    <h6 class="card-text">ที่ตั้ง :ตำบลแม่ฮี้ อำเภอปาย จังหวัดแม่ฮ่องสอน </h6>
                                                    <a href="#" class="btn btn-primary btn-sm">ดูเพิ่มเติม</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="templeall">
                                                <img src="/img/wat5.jpg" class="card-img-top imagewatthai2" id="imagewatthai" alt="รูปภาพ 2">
                                                <div class="card-body">
                                                    <h5 class="card-title">วัดพระธาตุดอยตุง</h5>
                                                    <p class="card-text">รายละเอียดสำหรับการ์ดที่ 2</p>
                                                    <h6 class="card-text">ที่ตั้ง :ตำบลห้วยไคร้ อำเภอแม่สาย จังหวัดเชียงราย </h6>
                                                    <a href="#" class="btn btn-primary btn-sm">ดูเพิ่มเติม</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="templeall">
                                                <img src="/img/wat6.jpg" class="card-img-top imagewatthai2" id="imagewatthai" alt="รูปภาพ 2">
                                                <div class="card-body">
                                                    <h5 class="card-title">วัดพระธาตุดอยสะเก็ด</h5>
                                                    <p class="card-text">รายละเอียดสำหรับการ์ดที่ 2</p>
                                                    <h6 class="card-text">ที่ตั้ง :ตำบลเชิงดอย อำเภอดอยสะเก็ด จังหวัดเชียงใหม่ </h6>
                                                    <a href="#" class="btn btn-primary btn-sm">ดูเพิ่มเติม</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="templeall">
                                                <img src="/img/wat7.jpg" class="card-img-top imagewatthai2" id="imagewatthai" alt="รูปภาพ 2">
                                                <div class="card-body">
                                                    <h5 class="card-title">วัดพระธาตุดอยสุเทพ</h5>
                                                    <p class="card-text">รายละเอียดสำหรับการ์ดที่ 2</p>
                                                    <h6 class="card-text">ที่ตั้ง :ต.บลสุเทพ อ.เมืองเชียงใหม่ จ.เชียงใหม่ </h6>
                                                    <a href="#" class="btn btn-primary btn-sm">ดูเพิ่มเติม</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="templeall">
                                                <img src="/img/wat8.webp" class="card-img-top imagewatthai2" id="imagewatthai" alt="รูปภาพ 2">
                                                <div class="card-body">
                                                    <h5 class="card-title">วัดร่องขุ่น</h5>
                                                    <p class="card-text">รายละเอียดสำหรับการ์ดที่ 2</p>
                                                    <h6 class="card-text">ที่ตั้ง :อำเภอเมื��งเชียงราย จังหวัดเชียงราย</h6>
                                                    <a href="#" class="btn btn-primary btn-sm">ดูเพิ่มเติม</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#templeCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#templeCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carouselElement = document.querySelector('#templeCarousel');
            const autoPlayBtn = document.querySelector('#autoPlayBtn');
            
            const carousel = new bootstrap.Carousel(carouselElement, {
                interval: 3000,
                ride: false
            });

            let isPlaying = false;

            window.toggleAutoPlay = function() {
                if (!isPlaying) {
                    carousel.cycle();
                    isPlaying = true;
                    autoPlayBtn.textContent = 'ปิด Auto Play';
                    autoPlayBtn.classList.remove('btn-primary');
                    autoPlayBtn.classList.add('btn-danger');
                } else {
                    carousel.pause();
                    isPlaying = false;
                    autoPlayBtn.textContent = 'เปิด Auto Play';
                    autoPlayBtn.classList.remove('btn-danger');
                    autoPlayBtn.classList.add('btn-primary');
                }
            }
        });
        </script>
    </body>
</html>
