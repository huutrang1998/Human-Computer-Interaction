<!doctype html>
<?php 
include 'config.php';
include 'login_require.php';
 ?>
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
<script src="js/modernizr.custom.79639.js"></script>
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
                            <li class="nav-item"><a class="nav-link" href="notification.php">Thông báo</a></li>
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
   
<div class="container">
<br><br>
        <div id="myNav" class="overlay">

            <div class="overlay-content">
                <div class="container" style="border-radius:10px;">
                    <div class="card card-contact no-transition">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div>
                                    <form method="POST" enctype="multipart/form-data" action="add_project_submit.php">

                                        <div class="card-block">
                                            <div>
                                                <div class="fileinput text-center fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail img-no-padding" style="max-width: 350px; max-height: auto;">
                                                        <img src="./assets/img/image_placeholder.jpg" alt="...">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail img-no-padding" style="max-width: 350px; max-height: auto;"></div>
                                                    <div>
                                                        <span class="btn btn-outline-default btn-round btn-file"><span class="fileinput-new">Choose Image</span><span class="fileinput-exists">Change</span><input type="hidden" value="" name="image"><input type="file" name="image" accept="image/*" required id="image"></span>
                                                        <a href="#paper-kit" class="btn btn-link btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group label-floating">
                                                <label class="control-label">Tên Trạm:(*)</label>
                                                <input id="name" type="name" name="name" class="form-control" placeholder="Ví dụ: Trạm biến áp số 1 Hà Tây" required>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Toạ độ địa lý:(*)</label>
                                                <input id="address" type="text" name="address" class="form-control" placeholder="120'22 80'00" required>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Tình trạng hoạt động:(*)</label>
                                                <input id="status" name="status" type="text" class="form-control" placeholder=" Ví dụ : Đang hoạt động" required>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Mô tả chi tiết: </label>
                                                <textarea id="description" type="text" name="description" class="form-control"></textarea>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="button" class="btn btn-round btn-danger" onclick="closeNav()" value="Close" style="margin-right:10px;">
                                                    <input type="submit" name="insert" id="insert" class="btn btn-round btn-primary" value="Submit" onclick="selected_image();">
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


<div class="container" style="text-align:center;">
<h5 class="btn btn-round btn-info" style="padding:15px;" id="add-product" onclick="openNav()">Thêm Trạm Điện</h5>
<br><br>
                    <div class="card-block">
                        <form action="search_project_result.php" method="post">
                            <div class="row">
                                <div class="col-md-3" style="margin-bottom:3px;">
                                    <div class="form-group">
                                        <input name="id" type="text" placeholder="Mã kiểm soát (ID)" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3" style="margin-bottom:3px;">
                                    <div class="form-group">
                                        <input name="name" type="text" placeholder="Tên trạm điện" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3" style="margin-bottom:3px;">
                                    <div class="form-group">
                                        <input name="address" type="text" placeholder="Địa điểm" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3" style="margin-bottom:3px;">
                                    <button name="search" type="search" class="btn btn-info btn-block"><i class="nc-icon nc-zoom-split"></i> &nbsp; Tìm kiếm
                                    </button></div>
                            </div>
                        </form>
                    </div>

                    <h3 style="font-weight:bold;">Danh sách trạm điện</h3>

</div>
<div class="container table-responsive" style="text-align:center;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Tên trạm</th>
                                <th class="text-center"> Địa điểm</th>
                                <th class="text-center">Trạng thái</th>
                                
                                <th class="text-right">Xem </th>
                                <th class="text-left">Xoá</th>
                                <th class="text-center">Check</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sql = "SELECT * FROM `project`";
                            $result = mysqli_query($conn, $sql);
                            //phan trang
                            $total_records = mysqli_num_rows($result);
                            if ($_GET['page'] != null) {
                                $current_page = $_GET['page'];
                            } else {
                                $current_page = 1;
                            }
                            if ($_GET['page'] != null) {
                                $current_page = $_GET['page'];
                            } else {
                                $current_page = 1;
                            }
                            $total_page = ceil($total_records / $limit);
                            if ($current_page > $total_page) {
                                $current_page = $total_page;
                            } else if ($current_page < 1) {
                                $current_page = 1;
                            }
                            // Tìm Start
                            $start = ($current_page - 1) * $limit;
                            $result = mysqli_query($conn, "SELECT * FROM project ORDER BY id DESC LIMIT $start, $limit");
                            //het phan trang
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo  '<tr>
                                <td class="text-center">' . $row["id"] . '</td>
                                <td>' . $row["name"] . '</td>
                                <td>' . $row["address"] . '</td>
                                <td>' . $row["status"] . '</td>
                                <td class="text-right"><a href="project_detail.php?id=' . $row['id'] . '" class= "btn btn-round btn-primary" style="color:white">Xem</a></td>
                                <td class="text-left"><a href="delete_project.php?id=' . $row['id'] . '" class= "btn btn-round btn-danger" style="color:white">Xoá</a></td>
                                <td class="text-center"><a href="add_to_nhap.php?id=' . $row['id'] . '" class= "btn btn-round btn-info" style="color:white">Kiểm tra</a></td>
                                
                            </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
    <div class="pagination" style="justify-content:center; font-size:30px;">
        <?php
        // PHẦN HIỂN THỊ PHÂN TRANG

        // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
        if ($current_page > 1 && $total_page > 1) {
            echo '<a href="danh_sach_tram.php?page=' . ($current_page - 1) . '">Prev</a> | ';
        }

        // Lặp khoảng giữa
        for ($i = 1; $i <= $total_page; $i++) {
            // Nếu là trang hiện tại thì hiển thị thẻ span
            // ngược lại hiển thị thẻ a
            if ($i == $current_page) {
                echo '<span style="color:#17a2b8;">' . $i . '</span> | ';
            } else {
                echo '<a href="danh_sach_tram.php?page=' . $i . '">' . $i . '</a> | ';
            }
        }

        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
        if ($current_page < $total_page && $total_page > 1) {
            echo '<a href="danh_sach_tram.php?page=' . ($current_page + 1) . '">Next</a> | ';
        }
        ?>
    </div>
</body>
</html>

<!--  for fileupload -->
<script src="./assets/js/jasny-bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
    function selected_image() {
        var image_name = $('#image').val();
        if (image_name == '') {
            alert("Hãy chọn một ảnh để đăng tải");
            return false;
        } else {
            var extension = $('#image').val();
            var p = extension.lastIndexOf(".");
            extension = extension.slice(p + 1, extension.length).toLowerCase();
            var ext = ["gif", "png", "jpeg", "jpg"];
            if (!ext.includes(extension)) {
                alert('Không nhận được định dạng trên !');
                $('#image').val('');
                return false;
            }
        }
    }
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
<!-- ALL JS FILES -->
<script src="js/all.js"></script>
   
	<script type="text/javascript">	
			$(function() {
			
				var Page = (function() {

					var $nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();
			
			});
		</script>
		
		<script>
			tippy('.btn-a')
		</script>
