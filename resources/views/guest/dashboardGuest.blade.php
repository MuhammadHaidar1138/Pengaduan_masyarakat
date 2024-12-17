@extends('template.app')

@section('content')
    <style>
        .card {
            max-width: 400px;
            border-radius: 0.5rem;
            background-color: #fff;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            border: 1px solid transparent;
        }

        .card a {
            text-decoration: none
        }

        .content {
            padding: 1.1rem;
        }

        .image {
            object-fit: cover;
            width: 100%;
            height: 150px;
            background-color: rgb(239, 205, 255);
        }

        .title {
            color: #111827;
            font-size: 1.125rem;
            line-height: 1.75rem;
            font-weight: 600;
        }

        .desc {
            margin-top: 0.5rem;
            color: #6B7280;
            font-size: 0.875rem;
            line-height: 1.25rem;
        }

        /* Card */
        .card {
            width: 320px;
            background-color: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px) rotateY(5deg);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .card-image {
            height: 160px;
            background: linear-gradient(135deg, #4f46e5, #818cf8);
            position: relative;
            overflow: hidden;
        }

        .card-image::before {
            content: "";
            position: absolute;
            top: 0;
            left: -50%;
            width: 200%;
            height: 100%;
            background: linear-gradient(to bottom,
                    transparent,
                    rgba(255, 255, 255, 0.1) 50%,
                    transparent);
            transform: rotate(45deg);
            animation: shine 3s infinite;
        }

        @keyframes shine {
            0% {
                transform: translateX(-50%) rotate(45deg);
            }

            100% {
                transform: translateX(100%) rotate(45deg);
            }
        }

        .card-content {
            padding: 24px;
        }

        .card-title {
            font-size: 24px;
            font-weight: 600;
            color: #1f2937;
            margin: 0 0 16px;
            position: relative;
            padding-bottom: 10px;
        }

        .card-title::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background-color: #4f46e5;
            transition: width 0.3s ease;
        }

        .card:hover .card-title::after {
            width: 100px;
        }

        .card-description {
            font-size: 14px;
            color: #4b5563;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .card-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 20px;
        }

        .card-tag {
            font-size: 12px;
            color: #4f46e5;
            background-color: #eef2ff;
            padding: 4px 10px;
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .card-tag:hover {
            background-color: #4f46e5;
            color: #ffffff;
            transform: translateY(-2px);
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 16px;
            border-top: 1px solid #e5e7eb;
        }

        .card-stats {
            display: flex;
            gap: 16px;
        }

        .card-stat {
            display: flex;
            align-items: center;
            gap: 4px;
            font-size: 14px;
            color: #6b7280;
        }

        .card-stat-icon {
            width: 20px;
            height: 20px;
            fill: currentColor;
        }

        .card-button {
            display: inline-block;
            padding: 10px 20px;
            background: linear-gradient(135deg, #4f46e5, #818cf8);
            color: #ffffff;
            text-decoration: none;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .card-button::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg,
                    transparent,
                    rgba(255, 255, 255, 0.3),
                    transparent);
            transition: all 0.4s ease;
        }

        .card-button:hover::before {
            left: 100%;
        }

        .card-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(79, 70, 229, 0.4);
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-10px) rotate(2deg);
            }
        }

        .card{
            
        }

        /* Card Danger */
        .card-danger {
            animation: float 1s ease-in-out infinite;
            width: 800px;
            background-color: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
    </style>

    {{-- Title --}}
    <h1 class="text-center mt-5" style="color:#111827">Layanan Pengaduan Masyarakat</h1>

    {{-- Dropdown --}}
    <div class="container mt-5">
        <label for="province" class="form-label">Pilih Provinsi:</label>
        <div class="row align-items-center d-flex">
            <div class="col-md-6">
                <select id="province" name="province" class="form-select">
                </select>
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-secondary">Cari</button>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-space-between">

        {{-- Card --}}
        <div class="card mt-4">
            <div aria-label="Abstract gradient background" role="img" class="card-image"></div>
            <div class="card-content">
                <p class="card-title">Advanced CSS Card</p>
                <p class="card-description">
                    This card showcases advanced CSS techniques including animations,
                    gradients, and interactive elements.
                </p>
                <div class="card-tags">
                    <span class="card-tag">Design</span>
                    <span class="card-tag">CSS</span>
                    <span class="card-tag">HTML</span>
                </div>
                <div class="card-footer">
                    <div class="card-stats">
                        <span class="card-stat">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="card-stat-icon">
                                <path
                                    d="M10 3.22l-.61-.6a5.5 5.5 0 0 0-7.78 7.77L10 18.78l8.39-8.4a5.5 5.5 0 0 0-7.78-7.77l-.61.61z">
                                </path>
                            </svg>
                            42
                        </span>
                        <span class="card-stat">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="card-stat-icon">
                                <path
                                    d="M17 11v3l-3-3H8a2 2 0 0 1-2-2V2c0-1.1.9-2 2-2h10a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2h-1zm-3 2v2a2 2 0 0 1-2 2H6l-3 3v-3H2a2 2 0 0 1-2-2V8c0-1.1.9-2 2-2h2v3a4 4 0 0 0 4 4h6z">
                                </path>
                            </svg>
                            18
                        </span>
                    </div>
                    <a class="card-button" href="#">Explore</a>
                </div>
            </div>
        </div>
    
        {{-- Card Danger --}}
        <div class="card card-danger">
            <div class="card-header d-flex align-items-center border-bottom">
                <span class="avatar text-bg-warning avatar-lg fs-5">i</span>
                <div class="ms-3">
                    <h6 class="mb-0 fs-sm"><b>Informasi Pembuatan Pengaduan</b></h6>
                </div>
                <button class="btn text-muted ms-auto" type="btn"><i class="fas fa-ellipsis-v"></i></button>
            </div>
            <div class="card-body">
                <ol>
                    <li>Pengaduan bisa dibuat jika Anda telah membuat akun sebelumnya,</li>
                    <li>Keseluruhan data pada pengaduan bernilai <b>BENAR dan DAPAT DIPERTANGGUNG JAWABKAN,</b></li>
                    <li>Seluruh bagian data perlu diisi,</li>
                    <li>Pengaduan Anda akan di tanggaapi dalam 24xjam,</li>
                    <li>Periksa tanggapan Kami, pada <b>Dashboard</b> setelah Anda <b>Login</b>,</li>
                    <li>Pembuatan pengaduan dapat dilakukan pada halaman berikut : <a href=""> Ikuti Tautan</a></li>
                </ol>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $.ajax({
                method: "GET",
                url: " https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json",
                dataType: "json",

                success: function(response) {
                    let data = "<option value='' disabled selected>Cari Provinsi</option>";
                    response.forEach(propinsi => {
                        let option =
                            ` <option value="${propinsi.id}">${propinsi.name}</option>`;
                        data += option
                    });
                    $("#province").html(data);
                }
            })
        })
    </script>
@endsection
