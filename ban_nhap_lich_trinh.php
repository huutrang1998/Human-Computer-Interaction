<!doctype html>
<?php include "login_require.php" ?>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Site Metas -->
    <title>Teamtwo</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <link href="css/paper-kit.css" rel="stylesheet">


    <style type="text/css">
        .overlay {
            height: 0%;
            width: 100%;
            position: fixed;
            z-index: 10;
            top: 0;
            left: 0;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.3);
            overflow-y: hidden;
            transition: 0.5s;
            overflow: scroll;
        }

        .overlay-content {
            position: relative;
            top: 10%;
            width: 100%;
            margin-top: 30px;
            overflow: scroll;
        }

        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
        }

        @media screen and (max-height: 450px) {
            .overlay {
                overflow-y: auto;
            }

            .overlay a {
                font-size: 20px
            }

            .overlay .closebtn {
                font-size: 40px;
                top: 15px;
                right: 35px;
            }
        }
    </style>

</head>

<body>
<!-- LOADER -->


    <div id="navbar-zone">
        <!-- Start header -->
        <header class="top-navbar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="home.php">
                        <img src="images/logo-seo.png" alt="" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-seo" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbars-seo">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="home.php">Trang chủ</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Liên hệ</a></li>
                            <?php
                            if (isset($_SESSION["name"]) && !empty($_SESSION["name"])) {
                                echo '
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle " href="#" id="dropdown-a" data-toggle="dropdown">Quản lý </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="danh_sach_tram.php">Danh sách trạm</a>
								<a class="dropdown-item" href="danh_sach_drone.php">Danh sách Drone</a>
								<a class="dropdown-item" href="ban_nhap_lich_trinh.php">Bản nháp lịch trình</a>
                                <a class="dropdown-item" href="danh_sach_lich_trinh.php">Danh sách đợt kiểm tra</a>
                               
							</div>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="dropdown-a" data-toggle="dropdown">Liên Kết </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                        <a class="dropdown-item" href="https://angular-project-51bf8.web.app/login?fbclid=IwAR2Vpai_vFJEmemjCrf7abHxbZgwVQdRj5bgwO16zgPgdoKqSJ8b7lkn1Y0">Quản trị dữ liệu</a>
                            <a class="dropdown-item" href="https://nguyentuxuancong.github.io/?fbclid=IwAR1jTVML_ARRGEATwXrscmHyE4MHDjxDf7OcnF6rlWoEo4I3sSOIZHbQ6RY">Điều khiển thiết bị bay</a>
                            <a class="dropdown-item" href="https://nhom6.now.sh/docs/index.html">Quản lý sự cố</a>
                            <a class="dropdown-item" href="https://kewin1807.github.io/electronic-detect">Phát hiện sự cố</a>

                        </div>
                    </li>
                        ';
                                echo '
                        <li class="nav-item">
                        <a class="nav-link" href="logout.php" data-scroll="true">Đăng xuất</a>
                        </li>';
                            } else {
                                echo '
						<li class="nav-item"><a class="nav-link" href="register.php">Đăng Ký</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Đăng Nhập</a></li>
                        ';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- End header -->
    </div>


   



    <br><br>
    <div class="container" style="overflow:scroll;">
        <div class="row">
            <div class="col-md-6" style="padding:10px;">
                <div class="container" style="text-align:center;">
                    <h3>Danh sách trạm cần kiểm tra</h3><br>
                </div>
                <div class=" table-responsive" style="text-align:center;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Tên trạm</th>
                                <th class="text-center"> Địa điểm</th>
                                <th class="text-center">Số ảnh</th>
                                <th class="text-center">Xoá</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sql = "SELECT * FROM nhap";
                            $result = mysqli_query($conn, $sql);
                            $plan = "Bay từ ";
                            $number =mysqli_num_rows($result);
                            $number = "image".$number.".png";
                            while ($row1 = mysqli_fetch_assoc($result)) {
                                $projectID = $row1['projectID'];
                                $sql = "SELECT * FROM project WHERE id='$projectID'";
                                $result2 = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result2);
                                $plan = $plan . "<i><strong>" . $row['name'] . "</strong></i>" . " đến ";
                                echo  '<tr>
        <td class="text-center">' . $row["id"] . '</td>
        <td>' . $row["name"] . '</td>
        <td>' . $row["address"] . '</td>
        <td> <input type="number" value="1" max="10000" min="1" step="1" class="form-control"></input></td>
        <td class="text-center"><a href="delete_from_nhap.php?id=' . $row['id'] . '" class= "btn btn-round btn-danger" style="color:white">Xoá</a></td>
       
        
    </tr>';
                            }

                            ?>
                        </tbody>
                    </table>
                    <?php
                    $plan = $plan . " trung tâm quản lý Drone rồi kết thúc lịch trình.";
                    if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM nhap"))>0){
                    echo $plan;
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-6" style="padding:10px;height:100%;">
                <div class="container" style="text-align:center;">
                    <h3>Bản đồ lịch trình kiểm tra</h3><br>
                    <img src="<?php echo $number;?>" style="width:100%;">
                </div>
            </div>
        </div>
        <br><br>
        <div class="row" style="margin-bottom:50px;">
            <div class="col-md-6" style="text-align:right;">
                <a href="danh_sach_tram.php" class="btn btn-round btn-primary" style="color:white;">Quay lại danh sách trạm</a>
            </div>
            <div class="col-md-6" style="text-align:left;">
                <a class="btn btn-round btn-info" style="color:white;" onclick="openNav()">Xác nhận tạo lịch trình</a>
            </div>
            <br><br>
        </div>
    </div>



    <div class="container">
        <br><br>
        <div id="myNav" class="overlay">

            <div class="overlay-content">
                <div class="container" style="border-radius:10px;">
                    <div class="card card-contact no-transition">
                        <div class="row" style="padding:50px;">
                            <div class="col-md-8 offset-md-2">
                                <div>
                                    <form method="post" action="tao_lich_trinh.php?plan=<?php echo $plan;?>&image=<?php echo $number;?>">

                                        <div class="card-block">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Chọn kỳ hạn hoàn thành và báo cáo (*)</label>
                                                <input id="name" type="date" name="deadline" class="form-control" value="<?php echo $row['name'] ?>" required>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Chọn nhân viên thực hiện (*): </label>
                                                <div id="employee" name="employee" style="border: 1px solid grey; border-radius:5px;"></div>
                                                <script>
                                                    $("#employee").load('employee.html');
                                                </script>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Ghi chú (*)</label>
                                                <input id="note" type="text" name="note" value="<?php echo $row['description'] ?>" class="form-control"></input>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="button" class="btn btn-round btn-danger" onclick="closeNav()" value="Đóng" style="margin-right:10px;">
                                                    <input type="submit" name="acp" id="acp" class="btn btn-round btn-info" value="Xác nhận" onclick="selected_image();">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
<!-- ALL JS FILES -->
<script src="js/all.js"></script>

<script type="text/javascript">
    $(function() {

        var Page = (function() {

            var $nav = $('#nav-dots > span'),
                slitslider = $('#slider').slitslider({
                    onBeforeChange: function(slide, pos) {

                        $nav.removeClass('nav-dot-current');
                        $nav.eq(pos).addClass('nav-dot-current');

                    }
                }),

                init = function() {

                    initEvents();

                },
                initEvents = function() {

                    $nav.each(function(i) {

                        $(this).on('click', function(event) {

                            var $dot = $(this);

                            if (!slitslider.isActive()) {

                                $nav.removeClass('nav-dot-current');
                                $dot.addClass('nav-dot-current');

                            }

                            slitslider.jump(i + 1);
                            return false;

                        });

                    });

                };

            return {
                init: init
            };

        })();

        Page.init();

    });
</script>

<script>
    tippy('.btn-a')
</script>
<script>
    function openNav() {
        document.getElementById("myNav").style.height = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.height = "0%";
    }
</script>
<script type="text/javascript">
    var toggle = document.getElementById("toggle");
    var content = document.getElementById("content");

    toggle.addEventListener("click", function() {
        content.style.display = (content.dataset.toggled ^= 1) ? "block" : "none";
    });
</script>