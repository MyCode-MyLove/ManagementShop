<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- link css custom -->
    <link rel="stylesheet" href="./Mobile_shop/css/totalCustomer.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/homeadmin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/totalcustomer.css') }}">
    <title>Total Customer</title>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">

        <!-- Section-left-->
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar navbar-light">
                <a href="" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa fa- me-2"></i>STING STORE</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="https://demo.opencart.com/image/cache/profile-45x45.png"
                            alt="admin" style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Tom</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-laptop me-2"></i>Manage Products</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="" class="dropdown-item">Samsung</a>
                            <a href="" class="dropdown-item">Apple</a>
                            <a href="" class="dropdown-item">Other</a>
                        </div>
                    </div>
                    <a href="" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Manage Category</a>
                    <a href="" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Manage Account</a>
                    <a href="" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Manage Orders</a>
                    <!-- <a href="" class="nav-item nav-link"><i class="fa fa-cog me-2"></i>Setting</a> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
        <!-- Section-left End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4" method="" action="">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2"
                                src="https://demo.opencart.com/image/cache/profile-45x45.png" alt="admin"
                                style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Tom</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="profileAdmin.html" class="dropdown-item">My Profile</a>
                        </div>
                    </div>
                    <div class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa fa-sign-out-alt"></i>
                            <span class="d-none d-lg-inline-flex">Logout</span>
                        </a>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Selection Right Start -->
            <div class="container">
                <div class="page-header">
                    <h1></i>Customers</h1>
                    <div class="float-end" style="margin-top: -50px;">
                        <a href="homeAdmin.html" data-bs-toggle="tooltip" title class="btn btn-success"
                            data-bs-original-title="Back" aria-label="Back"><i class="fas fa-reply"></i></a>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="card col-md-9">
                            <div class="card-header">
                                <i class="fas fa-list"></i> Customer List
                            </div>
                            <div id="order" class="card-body mb-2 mt-2">
                                <form action="" id="form-order" method="">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr class="title-col">
                                                    <td class="text-start">Customer Name</td>
                                                    <td class="text-start">E-Mail</td>
                                                    <td class="text-end">Phone</td>
                                                    <td class="text-start">Status</td>
                                                    <td class="text-end">Date Added</td>
                                                    <td class="text-end"><span style="color: #000;">Action</span></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-start">Nguyen Van A</td>
                                                    <td class="text-start">ceo@wolfchip.com</td>
                                                    <td class="text-end">01234567</td>
                                                    <td class="text-start">Enable</td>
                                                    <td class="text-end d-none d-lg-table-cell">28/01/2024</td>
                                                    <td class="text-end">
                                                        <div class="btn-group dropdown">
                                                            <a href="#" class="btn" aria-label="Edit"><i
                                                                    class="fas fa-pencil-alt"></i></a>
                                                            <button type="button"
                                                                class="btn dropdown-toggle dropdown-toggle-split"
                                                                data-bs-toggle="dropdown"
                                                                aria-expanded="false"></button>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li>
                                                                    <h6 class="dropdown-header">Options</h6>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><i
                                                                            class="fas fa-ban"></i> Ban account</a></li>
                                                                <li><a class="dropdown-item" href="#"><i
                                                                            class="fas fa-unlock"></i> Unlock
                                                                        account</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="text-start">Nguyen Van A</td>
                                                    <td class="text-start">olaola@das.com</td>
                                                    <td class="text-end">01234567</td>
                                                    <td class="text-start">Enable</td>
                                                    <td class="text-end d-none d-lg-table-cell">28/01/2024</td>
                                                    <td class="text-end">
                                                        <div class="btn-group dropdown">
                                                            <a href="#" class="btn" aria-label="Edit"><i
                                                                    class="fas fa-pencil-alt"></i></a>
                                                            <button type="button"
                                                                class="btn dropdown-toggle dropdown-toggle-split"
                                                                data-bs-toggle="dropdown"
                                                                aria-expanded="false"></button>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li>
                                                                    <h6 class="dropdown-header">Options</h6>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><i
                                                                            class="fas fa-ban"></i> Ban account</a></li>
                                                                <li><a class="dropdown-item" href="#"><i
                                                                            class="fas fa-unlock"></i> Unlock
                                                                        account</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="text-end">
                                        <h5>Total Account: <span> 2</span></h5>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="filter-order" class="col-md-3 order-lg-last d-none d-lg-block mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fas fa-filter"></i> Filter
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Order ID</label>
                                        <input type="text" name="" id="" placeholder="Order ID" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Customer</label>
                                        <input type="text" name="" id="" placeholder="Customer" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Order Status</label>
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Total</label>
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Date Added</label>
                                        <input type="date" name="" id="" placeholder="" class="form-control">
                                    </div>
                                    <div class="text-end">
                                        <button type="button" class="btn btn-light">
                                            <i class="fas fa-filter"></i>Filter
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Selection Right End-->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Sting Store Shop</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="">Group4</a>
                            <br>
                            Distributed By <a class="border-bottom" href="" target="_blank">Group4</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./Mobile_shop/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="./Mobile_shop/js/admin.js"></script>
</body>

</html>
