@extends('layout.app')
@section('content')
    <div class="blog-area pt-50 pb-50">
        <div class="container">
            <div class="section-title text-center mb-75">
                <h2><span>Pengumuman</span></h2>
                <!-- <p class="mt-3">Hai Calon Siswa Terbaik 👋 Pilo di SMK Taruna Bangsa sudah siap menyambutmu.</p> -->
            </div>

            <!-- Slider Responsive -->
            <div class="slider-container mb-5">
                <div class="slider-responsive bg-img" style="background-image:url({{ asset('images/slide-banner-3.jpg') }});">
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="construction-content text-center">
                        <div class="construction-icon mb-4">
                            <i class="fa fa-tools" style="font-size: 80px; color: #2c5f2d;"></i>
                        </div>

                        <h3 class="mb-3" style="color: #2c5f2d;">Hai Calon Siswa Terbaik 👋 Pilo di SMK Taruna Bangsa
                            sudah siap menyambutmu.</h3>

                        <p class="mb-4" style="font-size: 16px; color: #666;">
                            Pilih jurusan impianmu:
                        <ul>
                            <li>1. TAV (Teknik Audio Video)</li>
                            <li> 2. TKR (Teknik Kendaraan Ringan)</li>
                            <li>3. TITL (Teknik Instalasi Tenaga Listrik)</li>
                            <li>4. RPL (Rekayasa Perangkat Lunak)</li>
                        </ul>





                        </p>
                    </div>
                </div>
            </div><br>



            <!-- Informasi PPDB -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 col-md-10">
                    <div class="ppdb-card">
                        <div class="ppdb-header">
                            <h3 class="text-white">
                                <i class="fa fa-bullhorn me-2"></i>
                                PPDB SMK Taruna Bangsa 2025
                            </h3>
                            <div class="ppdb-badge">Buka Pendaftaran</div>
                        </div>

                        <div class="ppdb-body">
                            <div class="ppdb-highlight mb-4">
                                <div class="highlight-item">
                                    <i class="fa fa-calendar-check text-primary" style="font-size: 2.5rem;"></i>
                                    <div>
                                        <h5>Mulai Tanggal</h5>
                                        <p class="fw-bold">7 Oktober 2025</p>
                                    </div>
                                </div>
                                <div class="highlight-item">
                                    <i class="fa fa-graduation-cap text-success" style="font-size: 2.5rem;"></i>
                                    <div>
                                        <h5>Jalur Beasiswa</h5>
                                        <p class="fw-bold">Rp 0 hingga Lulus</p>
                                    </div>
                                </div>
                            </div>

                            <div class="ppdb-beasiswa mb-4">
                                <h4 class="section-subtitle mb-3">
                                    <i class="fa fa-star text-warning me-2"></i>Jalur Beasiswa
                                </h4>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="beasiswa-card beasiswa-akademik">
                                            <div class="beasiswa-icon">
                                                <i class="fa fa-book" style="font-size: 2.5rem;"></i>
                                            </div>
                                            <h5>Jalur Akademik</h5>
                                            <p class="mb-0">Rangking 1 sampai 3 di smp/mts asal</p>
                                            <div class="beasiswa-badge">Prestasi</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="beasiswa-card beasiswa-hafidz">
                                            <div class="beasiswa-icon">
                                                <!-- SVG khusus untuk Hafidz Qur'an -->
                                                <svg class="hafidz-svg" viewBox="-32 0 512 512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M448 358.4V25.6c0-16-9.6-25.6-25.6-25.6H96C41.6 0 0 41.6 0 96v320c0 54.4 41.6 96 96 96h326.4c12.8 0 25.6-9.6 25.6-25.6v-16c0-6.4-3.2-12.8-9.6-19.2-3.2-16-3.2-60.8 0-73.6 6.4-3.2 9.6-9.6 9.6-19.2zM301.08 145.82c.6-1.21 1.76-1.82 2.92-1.82s2.32.61 2.92 1.82l11.18 22.65 25 3.63c2.67.39 3.74 3.67 1.81 5.56l-18.09 17.63 4.27 24.89c.36 2.11-1.31 3.82-3.21 3.82-.5 0-1.02-.12-1.52-.38L304 211.87l-22.36 11.75c-.5.26-1.02.38-1.52.38-1.9 0-3.57-1.71-3.21-3.82l4.27-24.89-18.09-17.63c-1.94-1.89-.87-5.17 1.81-5.56l24.99-3.63 11.19-22.65zm-57.89-69.01c13.67 0 27.26 2.49 40.38 7.41a6.775 6.775 0 1 1-2.38 13.12c-.67 0-3.09-.21-4.13-.21-52.31 0-94.86 42.55-94.86 94.86 0 52.3 42.55 94.86 94.86 94.86 1.03 0 3.48-.21 4.13-.21 3.93 0 6.8 3.14 6.8 6.78 0 2.98-1.94 5.51-4.62 6.42-13.07 4.87-26.59 7.34-40.19 7.34C179.67 307.19 128 255.51 128 192c0-63.52 51.67-115.19 115.19-115.19zM380.8 448H96c-19.2 0-32-12.8-32-32s16-32 32-32h284.8v64z" />
                                                </svg>
                                            </div>
                                            <h5>Jalur Hafidz Qur'an</h5>
                                            <p class="mb-0">Minimal 2 juz</p>
                                            <div class="beasiswa-badge">Religius</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="beasiswa-card beasiswa-olahraga">
                                            <div class="beasiswa-icon">
                                                <!-- SVG khusus untuk Olahraga -->
                                                <svg class="olahraga-svg" viewBox="0 0 512 512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zm-48 0l-.003-.282-26.064 22.741-62.679-58.5 16.454-84.355 34.303 3.072c-24.889-34.216-60.004-60.089-100.709-73.141l13.651 31.939L256 139l-74.953-41.525 13.651-31.939c-40.631 13.028-75.78 38.87-100.709 73.141l34.565-3.073 16.192 84.355-62.678 58.5-26.064-22.741-.003.282c0 43.015 13.497 83.952 38.472 117.991l7.704-33.897 85.138 10.447 36.301 77.826-29.902 17.786c40.202 13.122 84.29 13.148 124.572 0l-29.902-17.786 36.301-77.826 85.138-10.447 7.704 33.897C442.503 339.952 456 299.015 456 256zm-248.102 69.571l-29.894-91.312L256 177.732l77.996 56.527-29.622 91.312h-96.476z" />
                                                </svg>
                                            </div>
                                            <h5>Jalur Olahraga</h5>
                                            <p class="mb-0">khusus olahraga futsal & sepakbola</p>
                                            <div class="beasiswa-badge">Prestasi</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ppdb-info mb-4">
                                <h4 class="section-subtitle mb-3">
                                    <i class="fa fa-info-circle text-info me-2"></i>Informasi Penting
                                </h4>
                                <ul class="info-list">
                                    <li>
                                        <i class="fa fa-globe text-primary"></i>
                                        <span>Informasi lengkap: <a href="mailto:admin@smktarunabangsa.sch.id"
                                                class="fw-bold">admin@smktarunabangsa.sch.id</a></span>
                                    </li>
                                    <li>
                                        <i class="fa fa-clock text-success"></i>
                                        <span>Pendaftaran online 24 jam</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-gift text-danger"></i>
                                        <span>Gratis biaya pendaftaran</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="ppdb-action text-center">
                                <a href="mailto:admin@smktarunabangsa.sch.id" class="btn btn-register">
                                    <i class="fa fa-user-plus me-2"></i>Daftar Sekarang
                                </a>
                                <a href="https://wa.me/628118081166?text=Halo,%20saya%20ingin%20bertanya%20tentang%20PPDB%20SMK%20Taruna%20Bangsa"
                                    target="_blank" class="btn btn-whatsapp ms-2">
                                    <i class="fa fa-whatsapp me-2"></i>Konsultasi via WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian Construction Content -->
            <!-- <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="construction-content text-center">
                            <div class="construction-icon mb-4">
                                <i class="fa fa-tools" style="font-size: 80px; color: #2c5f2d;"></i>
                            </div>

                            <h3 class="mb-3" style="color: #2c5f2d;">Halaman Sedang Dalam Pengerjaan</h3>

                            <p class="mb-4" style="font-size: 16px; color: #666;">
                                Kami sedang bekerja keras untuk menyiapkan informasi lengkap tentang ekstrakurikuler di SMK
                                Taruna Bangsa.
                                Silakan kembali lagi nanti untuk melihat update terbaru.
                            </p>

                            <div class="progress mb-4" style="height: 8px;">
                                <div class="progress-bar" role="progressbar" style="width: 65%; background-color: #2c5f2d;"
                                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <p class="small text-muted mb-4">Progress: 65%</p>

                            <div class="contact-info mt-5">
                                <p>Untuk informasi lebih lanjut, silakan hubungi:</p>
                                <div class="contact-links">
                                    <a href="mailto:admin@smktarunabangsa.sch.id" class="btn btn-outline-primary me-2">
                                        <i class="fa fa-envelope"></i> Email
                                    </a>
                                    <a href="https://wa.me/628118081166" class="btn btn-outline-success" target="_blank">
                                        <i class="fa fa-whatsapp"></i> WhatsApp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
        </div>
    </div>

    <style>
        /* CSS untuk gambar slider responsif */
        .slider-container {
            width: 100%;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        .slider-responsive {
            width: 100%;
            height: 400px;
            background-size: cover !important;
            background-position: center center !important;
            background-repeat: no-repeat !important;
        }

        /* CSS untuk PPDB Card - HEADER DENGAN WARNA #4CAF50 */
        .ppdb-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
            border: 1px solid #e3e6f0;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .ppdb-header {
            background: linear-gradient(90deg, #4CAF50 0%, #66BB6A 100%);
            color: white;
            padding: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .ppdb-header h3 {
            margin: 0;
            font-size: 1.8rem;
            font-weight: 700;
        }

        .ppdb-badge {
            background: rgba(255, 255, 255, 0.2);
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .ppdb-body {
            padding: 30px;
        }

        .ppdb-highlight {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
        }

        .highlight-item {
            display: flex;
            align-items: center;
            gap: 15px;
            flex: 1;
            min-width: 250px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            border-left: 4px solid #4CAF50;
        }

        .highlight-item i {
            font-size: 2.5rem;
        }

        .highlight-item h5 {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 5px;
        }

        .highlight-item p {
            font-size: 1.2rem;
            color: #4CAF50;
            margin: 0;
        }

        .section-subtitle {
            color: #4CAF50;
            font-weight: 600;
            font-size: 1.3rem;
            border-bottom: 2px solid #e9ecef;
            padding-bottom: 10px;
        }

        .beasiswa-card {
            background: white;
            border-radius: 12px;
            padding: 25px 20px;
            text-align: center;
            height: 100%;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            border-top: 4px solid;
            transition: transform 0.3s ease;
            position: relative;
        }

        .beasiswa-card:hover {
            transform: translateY(-5px);
        }

        .beasiswa-akademik {
            border-top-color: #3498db;
        }

        .beasiswa-hafidz {
            border-top-color: #9b59b6;
        }

        .beasiswa-olahraga {
            border-top-color: #e74c3c;
        }

        .beasiswa-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60px;
        }

        /* SVG khusus untuk Hafidz */
        .hafidz-svg {
            width: 48px;
            height: 48px;
            fill: #9b59b6;
            /* Warna ungu untuk konsisten dengan tema */
        }

        /* SVG khusus untuk Olahraga */
        .olahraga-svg {
            width: 48px;
            height: 48px;
            fill: #e74c3c;
            /* Warna merah untuk konsisten dengan tema */
        }

        .beasiswa-akademik .beasiswa-icon i {
            color: #3498db;
        }

        .beasiswa-hafidz .beasiswa-icon .hafidz-svg {
            fill: #9b59b6;
        }

        .beasiswa-olahraga .beasiswa-icon .olahraga-svg {
            fill: #e74c3c;
        }

        .beasiswa-card h5 {
            font-weight: 600;
            margin-bottom: 10px;
            color: #333;
        }

        .beasiswa-card p {
            color: #666;
            font-size: 0.9rem;
        }

        .beasiswa-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #f8f9fa;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            color: #666;
        }

        .info-list {
            list-style: none;
            padding: 0;
        }

        .info-list li {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 12px 0;
            border-bottom: 1px solid #f1f1f1;
        }

        .info-list li:last-child {
            border-bottom: none;
        }

        .info-list i {
            font-size: 1.2rem;
            width: 30px;
        }

        .info-list a {
            color: #4CAF50;
            text-decoration: none;
        }

        .info-list a:hover {
            text-decoration: underline;
        }

        .ppdb-action {
            margin-top: 30px;
        }

        .btn-register {
            background: linear-gradient(90deg, #4CAF50 0%, #66BB6A 100%);
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-register:hover {
            background: linear-gradient(90deg, #43A047 0%, #5CB860 100%);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(76, 175, 80, 0.3);
        }

        .btn-whatsapp {
            background: linear-gradient(90deg, #25D366 0%, #128C7E 100%);
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-whatsapp:hover {
            background: linear-gradient(90deg, #1da851 0%, #0e6d5e 100%);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(37, 211, 102, 0.3);
        }

        /* Construction content CSS */
        .construction-content {
            background: #fff;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
            border: 1px solid #e0e0e0;
        }

        .construction-icon {
            animation: bounce 2s infinite;
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-10px);
            }

            60% {
                transform: translateY(-5px);
            }
        }

        /* Responsive breakpoints */
        @media (max-width: 1200px) {
            .slider-responsive {
                height: 380px;
            }
        }

        @media (max-width: 992px) {
            .slider-responsive {
                height: 350px;
            }

            .ppdb-highlight {
                gap: 20px;
            }

            .highlight-item {
                min-width: calc(50% - 20px);
            }

            .hafidz-svg,
            .olahraga-svg {
                width: 44px;
                height: 44px;
            }
        }

        @media (max-width: 768px) {
            .slider-responsive {
                height: 300px;
            }

            .blog-area {
                padding: 30px 0;
            }

            .ppdb-header {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }

            .highlight-item {
                min-width: 100%;
            }

            .beasiswa-card {
                margin-bottom: 20px;
            }

            .hafidz-svg,
            .olahraga-svg {
                width: 40px;
                height: 40px;
            }

            .beasiswa-icon {
                height: 50px;
            }
        }

        @media (max-width: 576px) {
            .slider-responsive {
                height: 250px;
            }

            .slider-container {
                margin: 0 15px 30px 15px;
                width: calc(100% - 30px);
            }

            .ppdb-body {
                padding: 20px;
            }

            .ppdb-action {
                display: flex;
                flex-direction: column;
                gap: 10px;
            }

            .ppdb-action .btn {
                width: 100%;
                margin: 0 !important;
            }

            .section-title h2 {
                font-size: 24px;
            }

            .hafidz-svg,
            .olahraga-svg {
                width: 36px;
                height: 36px;
            }

            .beasiswa-icon {
                height: 45px;
            }

            .beasiswa-icon i {
                font-size: 2rem;
            }
        }

        @media (max-width: 400px) {
            .slider-responsive {
                height: 200px;
            }

            .highlight-item {
                flex-direction: column;
                text-align: center;
            }

            .ppdb-header h3 {
                font-size: 1.4rem;
            }

            .hafidz-svg,
            .olahraga-svg {
                width: 32px;
                height: 32px;
            }
        }
    </style>
@endsection


