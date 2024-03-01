<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tables / General - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="/backend/assets/css/style.css" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Vendor JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap. j7611111111111`.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>




    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <!-- ======= Sidebar ======= -->
            <aside id="sidebar" class="sidebar">

                <div class="sidebar-nav" id="sidebar-nav">

                    <div class="nav-item">
                        <a class="nav-link collapsed" href="">
                            <i class="bi bi-grid"></i>
                            <span>Dashboard</span>
                        </a>
                    </div><!-- End Dashboard Nav -->


                    <div class="nav-item">
                        <div id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                            <div>
                                <a href="?page=customers" class="">
                                    <i class="bi bi-user-friends"></i><span>Consumers</span>
                                </a>
                            </div>
                            <div>
                                <a href="?page=bikes">
                                    <i class="bi bi-bicycle" style="width: 30px;"></i><span>Bikes</span>
                                </a>
                            </div>
                            </ul>
                        </div><!-- End Tables Nav -->

                    </div>

            </aside><!-- End Sidebar-->

            <!-- Main content area -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <?php
                // Check which page is requested and include the corresponding file
                $page = isset($_GET['page']) ? $_GET['page'] : '';
                switch ($page) {
                    case 'customers':
                        include 'dashboard/customers.php';
                        break;
                    case 'bikes':
                        include 'dashboard/bikes.php';
                        break;
                    case 'edit':
                        include 'dashboard/editModal.php';
                        break;
                        case 'create':
                            include 'dashboard/creatModal.php';
                            break;
                        case 'login':
                            include 'dashboard/login.php';
                            break;
                        // Add more cases for other pages
                    default:
                        include 'dashboard/home.php'; // Default content or home page
                }
                ?>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

</body>

</html>