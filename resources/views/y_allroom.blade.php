<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ห้องพักทั้งหมด</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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

        .page-center {
            padding: 3rem;
            justify-content: center;
            display: flex;
        }
    </style>

<body style="background-color: #F2F2F2">
    <header
        class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 border-bottom">

        <div class="text-start">
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

    <nav class="navbar navbar-expand-lg mt-4">
        <div class="container-fluid ">
            <div class="col-1"></div>
            <a class="navbar-brand ms-4" href="">ห้องพักทั้งหมด</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('') }}">เต็นท์กระโจม</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('') }}">ห้องพัก Hazel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('') }}">ห้องพัก Holly</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @foreach ($blogs as $blog)
    <div class="container">
        <form action="{{ route ('detail', $blog->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col">
                <div class="card mt-5" style="width: 30rem;">
                    <img src="{{ asset('storage/img/'.basename($blog->img)) }}" class="card-img-top" alt="Room Image">
                    <div class="card-body">
                        <h5 class="card-title border-bottom">ห้องพักที่ {{$blog->room_number}}</h5>

                    </div>
                    <ul>
                        <li class="list-group-item">
                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg> : {{$blog->support}} ท่าน
                        </li>

                        <li class="list-group-item">
                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-cloud-haze2-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8.5 2a5.001 5.001 0 0 1 4.905 4.027A3 3 0 0 1 13 12H3.5A3.5 3.5 0 0 1 .035 9H5.5a.5.5 0 0 0 0-1H.035a3.5 3.5 0 0 1 3.871-2.977A5.001 5.001 0 0 1 8.5 2m-6 8a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zM0 13.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5" />
                            </svg> : {{$blog->air}}
                        </li>

                        <li class="list-group-item">
                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-rulers" viewBox="0 0 16 16">
                                <path
                                    d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1z" />
                            </svg> : {{$blog->space}} ตร.ม.
                        </li>

                    </ul>
                    <div class="card-body">
                        <a type="button" href="{{ url('y_view_dt',$blog->id)}}" class="btn btn-primary me-3">ราคา 500 บาท/คืน</a>
                        <a href="#" class="card-link">ดูรายละเอียด</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
            </div>
        </div>
    </form>
    </div>
    @endforeach


    

    {{-- btn เลือกหน้า --}}
    <footer class="page-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
            </ul>
        </nav>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
