<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <title>
        Material Dashboard 2 by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.css?v=3.1.0') }}" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

    <!-- MY CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="g-sidenav-show  bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0 text-center" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
                <h3 class="ms-1 font-weight-bold text-white">Welcome</h3>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href=" /dashboard ">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href=" /makanan ">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">lunch_dining</i>
                        </div>
                        <span class="nav-link-text ms-1">Makanan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href=" /minuman ">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">local_cafe</i>
                        </div>
                        <span class="nav-link-text ms-1">Minuman</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href=" /promo ">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">sell</i>
                        </div>
                        <span class="nav-link-text ms-1">Promo</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href=" /validation ">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">check_circle</i>
                        </div>
                        <span class="nav-link-text ms-1">Konfirmasi Pesanan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href=" /invoice ">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">Invoice</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href=" /antrian ">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">queue_play_next</i>
                        </div>
                        <span class="nav-link-text ms-1">Antrian</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidenav-footer position-absolute w-100 bottom-0 ">
            <div class="mx-3">
                <a class="btn btn-outline-primary mt-4 w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard?ref=sidebarfree" type="button">Documentation</a>
                <a class="btn bg-gradient-primary w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
            </div>
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Konfirmasi Pesanan</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Konfirmasi Pesanan</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline">
                            <label class="form-label">Type here...</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <div class="container-fluid py-4">
            <!-- START CONTENT -->
            <div class="row p-3">
                <div class="col-12">
                    <h3>Pesanan Anda</h3>
                </div>
            </div>
            <div class="row p-3">
                <div id="data" class="col-12">
                    <!-- APPEND BY JS -->
                </div>
            </div>
            <div class="row p-3 fixed-total">
                <div class="col-4"></div>
                <div class="col-4 d-flex justify-content-center">
                    <h3>Total</h3>
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <h3 id="total-price"></h3>
                </div>
                <div class="col-6 d-flex justify-content-center mt-5">
                    <button onclick="tambahPesanan()" class="btn btn-secondary w-100">Tambah Pesanan</button>
                </div>
                <div class="col-6 d-flex justify-content-center mt-5">
                    <button onclick="selesaikanPesanan()" class="btn btn-primary w-100">Selesaikan Pesanan</button>
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
    </main>
    <div class="fixed-plugin">
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Material UI Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="mt-3 d-flex">
                    <h6 class="mb-0">Navbar Fixed</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-3">
                <div class="mt-2 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-sm-4">
                <a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/material-dashboard-pro">Free Download</a>
                <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View documentation</a>
                <div class="w-100 text-center">
                    <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
                    <h6 class="mt-3">Thank you for sharing!</h6>
                    <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
    <script>
        var ctx = document.getElementById("chart-bars").getContext("2d");

        new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["M", "T", "W", "T", "F", "S", "S"],
                datasets: [{
                    label: "Sales",
                    tension: 0.4,
                    borderWidth: 0,
                    borderRadius: 4,
                    borderSkipped: false,
                    backgroundColor: "rgba(255, 255, 255, .8)",
                    data: [50, 20, 10, 22, 50, 10, 40],
                    maxBarThickness: 6
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 500,
                            beginAtZero: true,
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                            color: "#fff"
                        },
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });


        var ctx2 = document.getElementById("chart-line").getContext("2d");

        new Chart(ctx2, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0,
                    borderWidth: 0,
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(255, 255, 255, .8)",
                    pointBorderColor: "transparent",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderWidth: 4,
                    backgroundColor: "transparent",
                    fill: true,
                    data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });

        var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

        new Chart(ctx3, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0,
                    borderWidth: 0,
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(255, 255, 255, .8)",
                    pointBorderColor: "transparent",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderWidth: 4,
                    backgroundColor: "transparent",
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#f8f9fa',
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/material-dashboard.min.js?v=3.1.0') }}"></script>
</body>

</html>

<div class="col-md-4">
    <div class="modal fade" id="modal-modifikasi" tabindex="-1" role="dialog" aria-labelledby="modal-modifikasi" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title font-weight-normal" id="modal-title-default">Tersedia dengan:</h6>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="body-variant" class="row p-3">
                        <!-- APPEND BY JS -->
                    </div>
                </div>
                <div id="footer-variant" class="modal-footer">
                    <button type="button" class="btn bg-gradient-primary" onclick="saveVariant()">Save changes</button>
                    <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var all_menu = [];
    var total_price = 0;
    // var value_variant = "";

    var data_makanan = localStorage.getItem('makanan');
    var data_minuman = localStorage.getItem('minuman');
    var data_promo = localStorage.getItem('promo');

    $("#data").html('');

    if (data_makanan != "") {
        var makanan = JSON.parse(data_makanan);
        for (const key in makanan) {
            if (makanan.hasOwnProperty(key)) {
                const item = makanan[key];
                all_menu.push(item);
            }
        }
    }

    if (data_minuman != "") {
        var minuman = JSON.parse(data_minuman);
        for (const key in minuman) {
            if (minuman.hasOwnProperty(key)) {
                const item = minuman[key];
                all_menu.push(item);
            }
        }
    }

    if (data_promo != "") {
        var promo = JSON.parse(data_promo);
        for (const key in promo) {
            if (promo.hasOwnProperty(key)) {
                const item = promo[key];
                all_menu.push(item);
            }
        }
    }

    for (const key in all_menu) {
        if (all_menu.hasOwnProperty(key)) {
            const item = all_menu[key];

            if (item.category == 2) {
                if (item.variant == 1) {
                    variant_code = "Dingin";
                } else if (item.variant == 2) {
                    variant_code = "Panas";
                } else if (item.variant == 3) {
                    variant_code = "Manis";
                } else {
                    variant_code = "Tawar";
                }

                var html = `<div class="row mt-3">
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <button class="btn btn-danger mb-0">Hapus</button>
                    </div>
                    <div class="col-6 text-center">
                        <span id="menu-` + item.id + `" class="mb-0 fw-bold">` + item.name + ` <span id="variant-` + item.id + `">` + variant_code + `</span></span>
                        <br>
                        <button onclick="modifikasi('` + item.id + `', '` + item.name + `', ` + item.category + `, ` + item.variant + `)" class="btn btn-dark mb-0">Modifikasi</button>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <div class="input-group input-group-outline my-3">
                            <input onclick="quantity(` + item.id + `, ` + item.price + `)" id="qty-` + item.id + `" type="number" class="form-control" min="1" max="20" value="1">
                        </div>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <span id="price-` + item.id + `" class="mb-0 fw-bold">` + item.price + `</span>
                    </div>
                </div>`;
            } else {
                var html = `<div class="row mt-3">
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <button class="btn btn-danger mb-0">Hapus</button>
                    </div>
                    <div class="col-6 d-flex justify-content-center align-items-center">
                        <span id="menu-` + item.id + `" class="mb-0 fw-bold">` + item.name + `</span>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <div class="input-group input-group-outline my-3">
                            <input onclick="quantity(` + item.id + `, ` + item.price + `)" id="qty-` + item.id + `" type="number" class="form-control" min="1" max="20" value="1">
                        </div>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <span id="price-` + item.id + `" class="mb-0 fw-bold">` + item.price + `</span>
                    </div>
                </div>`;
            }

            $("#data").append(html);
        }
    }

    console.log(all_menu);
    updateTotalPrice();

    function updateQty(id, newQty) {
        const item = all_menu.find(item => item.id === id);
        if (item) {
            item.qty = newQty;
        }
    }

    function updatePrice(id, newPrice) {
        const item = all_menu.find(item => item.id === id);

        if (item) {
            item.price = newPrice;
        }

        $("#price-" + id).text(newPrice);
    }

    function updateTotalPrice() {
        const totalPrice = all_menu.reduce((accumulator, item) => accumulator + item.price, 0);
        $("#total-price").text(totalPrice);
    }

    function quantity(id, price) {
        var qtities = $("#qty-" + id).val();
        var prices = $("#price-" + id).text();

        updateQty(id, qtities);
        updatePrice(id, qtities * price);
        updateTotalPrice();

        console.log(all_menu);
    }

    function modifikasi(id, name, category, drink_variant) {
        var tokenVal = $('meta[name="csrf-token"]').attr('content');
        var fd = new FormData();

        $.ajax({
            type: 'GET',
            url: '/get_variant/' + name + '/' + category,
            data: fd,
            enctype: 'multipart/form-data',
            cache: false,
            contentType: false,
            async: false,
            processData: false,
            success: function(response) {
                console.log(response);

                $("#body-variant").html('');
                $("#modal-modifikasi").modal('show');

                for (var i = 0; i <= response.length; i++) {
                    if (response[i].variant == 1) {
                        var variant = "Dingin";
                        var checked_variant = `<input class="form-check-input" type="radio" name="radioVariant" id="radioVariant` + response[i].variant + `" value="` + response[i].variant + `" data-menu="` + id + `" data-id="` + response[i].id + `" data-price="` + response[i].price + `" checked="">`;
                    } else if (response[i].variant == 2) {
                        var variant = "Panas";
                        var checked_variant = `<input class="form-check-input" type="radio" name="radioVariant" id="radioVariant` + response[i].variant + `" value="` + response[i].variant + `" data-menu="` + id + `" data-id="` + response[i].id + `" data-price="` + response[i].price + `">`;
                    } else if (response[i].variant == 3) {
                        var variant = "Manis";
                        var checked_variant = `<input class="form-check-input" type="radio" name="radioVariant" id="radioVariant` + response[i].variant + `" value="` + response[i].variant + `" data-menu="` + id + `" data-id="` + response[i].id + `" data-price="` + response[i].price + `" checked="">`;
                    } else {
                        var variant = "Tawar";
                        var checked_variant = `<input class="form-check-input" type="radio" name="radioVariant" id="radioVariant` + response[i].variant + `" value="` + response[i].variant + `" data-menu="` + id + `" data-id="` + response[i].id + `" data-price="` + response[i].price + `">`;
                    }

                    var html = `<div class="col-12 mt-3">
                        <div class="form-check">
                            ` + checked_variant + `
                            <label class="custom-control-label" for="radioVariant` + response[i].variant + `">` + variant + `</label>
                        </div>
                    </div>`;

                    $("#body-variant").append(html);
                    $("#radioVariant" + drink_variant).attr("checked", true);
                }
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

    function saveVariant() {
        const variantValue = document.querySelector('input[name="radioVariant"]:checked').value;
        const menuID = document.querySelector('input[name="radioVariant"]:checked').dataset.menu;
        const variantID = document.querySelector('input[name="radioVariant"]:checked').dataset.id;
        const menuPrice = document.querySelector('input[name="radioVariant"]:checked').dataset.price;
        // value_variant = variantValue;

        console.log("variantValue: ", variantValue);
        console.log("menuID: ", menuID);
        console.log("variantID: ", variantID);
        console.log("menuPrice: ", menuPrice);

        if (variantValue == 1) {
            var variantCode = "Dingin";
        } else if (variantValue == 2) {
            var variantCode = "Panas";
        } else if (variantValue == 3) {
            var variantCode = "Manis";
        } else {
            var variantCode = "Tawar";
        }

        $("#variant-" + menuID).text(variantCode);

        all_menu.forEach(menu => {
            if (menu.id === parseInt(menuID)) {
                menu.id = parseInt(variantID),
                    menu.variant = parseInt(variantValue),
                    menu.price = parseInt(menuPrice);
            }
        });

        console.log(all_menu);
    }

    function tambahPesanan() {
        window.location.href = "/makanan";
    }

    function selesaikanPesanan() {
        var code = 0;

        for (const key in all_menu) {
            if (all_menu.hasOwnProperty(key)) {
                const item = all_menu[key];
                var tokenVal = $('meta[name="csrf-token"]').attr('content');
                var fd = new FormData();

                fd.append("table", 1);
                fd.append("name", item.name);
                fd.append("variant", 1);
                fd.append("category", item.category);
                fd.append("qty", item.qty);
                fd.append("price", item.price);
                fd.append("_token", tokenVal);

                $.ajax({
                    type: 'POST',
                    url: '/order',
                    data: fd,
                    enctype: 'multipart/form-data',
                    cache: false,
                    contentType: false,
                    async: false,
                    processData: false,
                    success: function(response) {
                        code = 1;
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }
        }

        if (code = 1) {
            alert("PESANAN BERHASIL DITAMBAH!");
        }
    }
</script>