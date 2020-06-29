<!doctype html>
<?php 
include "config.php";
$id=$_GET['id'];
$sql = "SELECT * FROM `project` WHERE  id=$id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
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
                        <div class="row" style="padding:50px;">
                            <div class="col-md-8 offset-md-2">
                                <div>
                                    <form method="POST" enctype="multipart/form-data" action="update_project_submit.php?id=<?php echo $row['id']?>">

                                        <div class="card-block">
                                           

                                            <div class="form-group label-floating">
                                                <label class="control-label">Tên mới của Trạm:(*)</label>
                                                <input id="name" type="name" name="name" class="form-control" value="<?php echo $row['name']?>" required>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Tình trạng hoạt động:(*)</label>
                                                <input id="status" name="status" type="text" class="form-control" value="<?php echo $row['status']?>"  required>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Thông tin chi tiết mới: </label>
                                                <input id="description" type="text" name="description" value="<?php echo $row['description']?>"  class="form-control"></input>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="button" class="btn btn-round btn-danger" onclick="closeNav()" value="Đóng" style="margin-right:10px;">
                                                    <input type="submit" name="acp" id="acp" class="btn btn-round btn-info" value="Cập nhật" onclick="selected_image();">
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
            
<div class="container" style="margin-top:100px;">
            <?php
                
                    echo  '
                <div class="row" style="background-color:#fafafa;border-radius:10px;padding:20px;">
                        <div class="col-md-7">
                        <img src="uploads/'. $row['image']. '" style="width: 100%;border-radius:10px;">
                        </div>
                        <div class="col-md-5" style="margin-top:auto; margin-bottom:auto">
                            <h6><strong>Mã kiểm soát :  ' . ($row['id']) . '</strong></h6>
                            <h6>Tên trạm điện :  ' . ($row['name']) . '</h6>
                            <p> Toạ độ địa lý : ' . ($row['address']) .'</p>
                            <p> Trạng thái hoạt động : ' . ($row['status']) . '</p>
                           
                            <p> Thông tin chi tiết : ' . ($row['description']) . '</p>
                            <br><br> 
                            <a href="danh_sach_tram.php" class="btn btn-info btn-round" name="" type="" style=" color: white;margin-right:20px;"> Quay lại</a>
                            <a class="btn btn-danger btn-round" onclick="openNav()" type="" style=" color: white;">  Cập nhật </a>
                    </div>
                    </div>
                    ';
                
                ?>
                </div>
</div>
   
</body>
</html>
 <!-- ALL JS FILES -->
 <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
	
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