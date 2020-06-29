<!doctype html>
<?php include "login_require.php"; ?>
<head>

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
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

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
                            <li class="nav-item active"><a class="nav-link" href="notification.php">Thông báo</a></li>
                            <?php
                            if (isset($_SESSION["name"]) && !empty($_SESSION["name"])) {
                                echo '
						<li class="nav-item dropdown ">
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
   <div class="container" style="text-align:center;">
            <h3 style="font-weight:bold;">Danh sách thông báo</h3><br>
<?php 
$sql ="SELECT * FROM notification ORDER BY time DESC";
$result =mysqli_query($conn, $sql);
while($row =mysqli_fetch_assoc($result)){
    echo " <div class='row' style='margin-bottom:10px;font-size:20px;'><div class='col-md-12'>".$row['nhanto'] .$row['hanhdong'] ."</div></div>";
}
?>
               
   </div>
   
</body>
</html>
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
