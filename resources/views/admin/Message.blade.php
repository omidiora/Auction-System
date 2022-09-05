<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <!-- <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/owl.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/flaticon.css"> -->
    <link rel="stylesheet" href="../assets/css/jquery-ui.min.css">
    <!-- <link rel="stylesheet" href="assets/css/main.css"> -->
    <link rel="stylesheet" href="../assets/css/adminlte.min.css">
    <link rel="stylesheet" href="../css/adminlte.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- <link rel="stylesheet" href="css/index.css"> -->
    <title>Admin Panel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        /* .navbar-brand h5 {
        color: #1e1e1e;
        text-transform: uppercase;
        font-size: 20px;
        font-weight: 900;
    }*/
        
        .dot {
            font-size: 44px;
            font-style: normal;
            color: #343a40;
        }
        
        .small-box {
            background-color: #343a40;
            color: #c2c7d0;
        }
        
        .brand-color {
            background-color: #343a40;
            color: #c2c7d0;
        }
        
        .card-title {
            font-size: 1.5rem !important;
        }
        
        .search-txt {
            font-size: 1.1rem;
            font-weight: 400;
        }
        
        .control-form {
            display: inline-block !important;
            width: 50% !important;
        }
        
        .card-header {
            padding-bottom: 0.5rem !important;
        }
        
        .card-title {
            font-size: 1.5rem !important;
        }
        
        .card {
            border: none !important;
        }
        
        .data-info {
            padding-top: .85em;
        }
        
        .page-link {
            color: #343a40 !important;
        }
        
        .page-item.active .page-link {
            background-color: #343a40 !important;
            border-color: #343a40 !important;
            color: #c2c7d0 !important;
        }
        
        .ul-pagination {
            margin: 2px 0;
            white-space: nowrap;
            justify-content: flex-end;
        }
        
        .btn-add {
            background: #fff;
            color: #343a40 !important;
            border-color: #343a40 !important;
        }
        
        .btn-add:hover {
            background: #343a40;
            color: #c2c7d0 !important;
        }
        
        .btn-outline-info.focus,
        .btn-outline-info:focus {
            box-shadow: 0 0 0 0 !important;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
       @include('admin.navbar')
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../index.php" class="brand-link">
                <img src="../assets/images/avatar.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image text-light pt-2">
                        <i class="fas fa-user-circle" style="font-size: 30px;"></i>
                    </div>
                    <div class="info">
                        <a href="#" class="d-block" style="font-size: 20px;"></a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                @include('admin.adminSide')
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->


        <div class="content-wrapper" style="background:  #454d55;">
            <div class="content-header text-light mb-3" style="border-bottom: 1px solid #4f5962;">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0" style="color:#c2c7d0;">Multilingual Online Auction System <span class="dot">.</span></h1>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>

            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Inbox</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive mailbox-messages">
                            <table class="table table-hover table-striped">
                                <tbody>
                                   @foreach ($contacts as $item)

                                   <tr>
                                    <td>
                                        <div class="icheck-primary">
                                            <input type="checkbox" value="" id="check1">
                                            <label for="check1"></label>
                                        </div>
                                    </td>
                                    <td class="mailbox-star">
                                        <a href="#"><i class="fas fa-star text-warning"></i></a>
                                    </td>

                                    <td class="mailbox-subject">
                                        <b>Bid Announcement</b> - {{$item->problem}}
                                    </td>

                                    <td class="mailbox-date">{{$item->created_at->diffForHumans()}}</td>
                                </tr>
                                   

                                   @empty($contacts)

                                       
                                   @endempty
                                       
                                   @endforeach
                                  
                                </tbody>
                            </table>
                            <!-- /.table -->
                        </div>
                        <!-- /.mail-box-messages -->
                    </div>
                   
                </div>
            </div>




        </div>
    </div>

    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <!-- <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script> -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/waypoints.js"></script>
    <script src="assets/js/nice-select.js"></script> -->
    <script src="../assets/js/counterup.min.js"></script>
    <!-- <script src="assets/js/owl.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/yscountdown.min.js"></script> -->
    <script src="../assets/js/jquery-ui.min.js"></script>
    <!-- <script src="assets/js/main.js"></script> -->

    <script src="../assets/js/adminlte.min.js"></script>
    <!-- <script src="../js/jquery.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/adminlte.min.js"></script> -->
</body>

</html>