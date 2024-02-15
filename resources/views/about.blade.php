<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>คานหลาววิว</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>
    .welcome {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .descript {
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .crop-img {
        object-fit: cover;
        object-position: center;
        height: 500px;
        width: 100%;
    }

    .container {
        max-width: 700px;
        margin: 0 auto;
        border: 1px solid rgb(255, 255, 255);
    }
</style>

<body style="background-color: #F2F2F2">


    <header
        class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 border-bottom">

        {{-- ส่วนของ Icon --}}
        <div>
            <ul>
                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg>0650763447
                <svg class="mx-2 me-2"xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                </svg>ควนคานหลาว ต.พิจิตร อ.นาหม่อม จ.สงขลา
            </ul>
        </div>

        <div class="col-md-3 text-end">
            <a type="button" class="btn btn-outline-primary me-2" href="{{ url('login') }}">Login</a>
            <a type="button" class="btn btn-primary me-3" href="{{ url('sign-up') }}">Sign-up</a>
        </div>
    </header>


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid ">
            <a class="navbar-brand ms-4" href="">คานหลาว วิวพอยท์</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">หน้าหลัก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about') }}">เกี่ยวกับ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div>
        <img src="{{ asset('img/index.jpg') }}" alt="อากาศ" class="crop-img">
        <h1 class="welcome">Welcome</h1>
        <h1 class="descript">คานหลาว วิวพอยท์</h1>
    </div>

    {{-- <div class="container-fluid mt-5"> --}}
    <div class="card mb-3 mt-5">
        <div class="row g-0">

            <div class="col-md-8">
                <div class="card-body ms-5 mt-4">
                    <ins class="card-title h5">เกี่ยวกับเคานหลาว วิวพอยท์</ins>
                    <p class="card-text">ก่อตั้งเมื่อ วันที่ xx เดือน xxxx ปี xxxx<br>
                        จัดตั้ง ณ เลขที่บ้าน ตำบลพิจิตร อำเภอนาหม่อม จังหวัดสงขลา<br>
                        เป็นสถานที่ที่สวยงาน หันรอบด้านก็จะเจอแต่ธรรมชาติที่สดใส่ หมอกให้บรรยกาศที่สดชื่นอีกด้วย<br>

                        ห้องพักตกแต่งอย่างสวยงาม มีระเบียงชมวิว<br>
                        บรรยากาศผ่อนคลายเหมาะแก่การมาพักผ่อน<br>
                        ที่พักนี้อยู่สูงสุด วิวสวยมาก!! คอนเฟิร์ม!!<br>

                        ที่พักคานหลาว วิวพอยท์ มีทั้งหมด 10 ห้อง <br>
                        🛖ห้องพัก Holly จะอยู่ชั้นบน มีอ่างอาบน้ำแช่ตัว 1 ห้อง <br>
                        🛖ห้องพัก Hazel จะอยู่ชั้นล่าง มีอ่างอาบน้ำแช่ตัว 1 ห้อง <br>
                        ⛺️เต็นท์กระโจม ห้องน้ำส่วนตัว ตาข่ายนอนชมวิว แบบส่วนตัวหน้าที่พัก 8 ห้อง</p>
                </div>
            </div>

            <div class="col-md-4">
                <img src={{ asset('/img/p4.jpg') }} class="img-fluid" alt="...">
            </div>

        </div>
    </div>
    {{-- </div> --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
