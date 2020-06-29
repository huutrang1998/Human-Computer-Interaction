<!doctype html>
<?php session_start(); ?>
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
  

</head>
<body class="seo_version">

	<!-- LOADER -->
	<div id="preloader">
		<div class="loader-wrapper">
			<div class="loader-new">
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
			</div>
			<div class="text">LOADING...</div>
		</div>
	</div>
	<!-- END LOADER -->
    
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
                            <li class="nav-item active"><a class="nav-link" href="home.php">Trang chủ</a></li>
							<li class="nav-item"><a class="nav-link" href="contact.php">Liên hệ</a></li>
							
							<?php
                            if (isset($_SESSION["name"]) && !empty($_SESSION["name"])) {
                                if($_SESSION['name']=="admin"){
								echo '
								<li class="nav-item"><a class="nav-link" href="notification.php">Thông báo</a></li>
                                <li class="nav-item dropdown">
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
                        }
                        else{
                            echo '
                            <li class="nav-item" ><a class="nav-link" href="cong_viec.php">'.$_SESSION["fullname"].'</a></li>
                            <li class="nav-item">
                        <a class="nav-link" href="logout.php" data-scroll="true">Đăng xuất</a>
                        </li>
                            ';
                        }
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
	
    
    <div id="slider" class="sl-slider-wrapper">

		<div class="sl-slider">
		
			<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
				<div class="sl-slide-inner">
					<div class="bg-img bg-img-1"></div>
					<h2>Phần mềm quản lý mạng lưới điện quốc gia</h2>
					<blockquote><p>Phần mềm hỗ trợ tốt nhất cho nhà điều hành mạng lưới điện. </p>
					<a href="register.php" class="bttn-new">Đăng ký ngay</a>
					</blockquote>
				</div>
			</div>
			
			<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
				<div class="sl-slide-inner">
					<div class="bg-img bg-img-2"></div>
					<h2>Quản lý thiết bị, trạm biến áp</h2>
					<blockquote><p>Dành cho nhân viên quản lý . </p>
					<a href="register.php" class="bttn-new">Đăng ký ngay</a>
					</blockquote>
				</div>
			</div>
			
			<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
				<div class="sl-slide-inner">
					<div class="bg-img bg-img-3"></div>
					<h2>Quản lý Drone</h2>
					<blockquote><p>Dành cho kỹ thuật viên điều khiển drone. </p>
					<a href="register.php" class="bttn-new">Đăng ký ngay</a>
					</blockquote>
				</div>
			</div>
			
			<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
				<div class="sl-slide-inner">
					<div class="bg-img bg-img-4"></div>
					<h2>Tạo và quản lý lịch trình kiểm tra lưới điện</h2>
					<blockquote><p>Tạo đợt kiểm tra và lịch trình kiểm tra theo định kỳ, dễ dàng quản lý. </p>
                    <a href="register.php" class="bttn-new">Đăng ký ngay</a>
					</blockquote>
				</div>
			</div>
		</div><!-- /sl-slider -->

		<nav id="nav-dots" class="nav-dots">
			<span class="nav-dot-current"></span>
			<span></span>
			<span></span>
			<span></span>
		</nav>

	</div><!-- /slider-wrapper -->

    <div id="about" class="section wb nopadtop">
        <div class="container">
            <div class="row">
				<div class="col-md-6 m40">
                    <div class="message-box">
                        <h4>Teamtwo Group</h4>
                        <h2>Chào mừng các bạn đã đến với Teamtwo Group</h2>
                        
						
                        <p>Chúng tôi bao gồm những kỹ sư ưu tú và có kinh nghiệm lâu năm trong nhành công nghệ thông tin và ngành điện lực đã cùng phối hợp để đưa ra giải pháp phần mềm quản lý mạng lưới điện Teamtwo. </p>
                        <p> Các thành viên của nhóm phát triển:<br>- Nguyễn Hữu Tráng<br>- Nguyễn Tuấn Hưng<br>- Lê Đức Dũng<br>- Nguyễn Hữu Phụng</p>

                        
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="images/about_01.jpg" alt="" class="img-fluid">
                    </div><!-- end media -->
                </div><!-- end col -->
                
            </div><!-- end row -->
			
			<div class="row vission-and-mission">
				<div class="col-md-12">
					<ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
						<li class="nav-item"><a class="nav-link active" href="#tab_a" data-toggle="tab">Tầm Nhìn</a></li>
						<li class="nav-item"><a class="nav-link" href="#tab_b" data-toggle="tab">Sứ Mệnh</a></li>				
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade show active" id="tab_a">
							<div class="box-inner-m">
								<p>Nhu cầu về sử dụng điện năng càng tăng cao thì khả năng xảy ra hỏng hóc thiết bị của hệ thống lưới điện cũng tăng theo vì vậy khâu kiểm tra rà soát và khắc phục lỗi hệ thống điện ngày càng tăng cao..</p>
								<p>Với sự phát triển chóng mặt trong thời kỳ 4.0 thì mọi ngành nghề đều được sự hỗ trợ và áp dụng của ngành công nghệ thông tin, Vì vậy Teamtwo goup quyết định thành lập và phát triển dự án xây dựng phần mềm quản lý mạng lưới điện quốc gia </p>
							</div>
						</div>
						<div class="tab-pane fade" id="tab_b">
							<div class="box-inner-m">
                            <p>Với sứ mệnh cao cả là đem lại dịch vụ điện lực tốt nhất tới từng hộ gia đình chúng tôi đã cố gắng tối đa để cải thiện quy trình kiểm tra và xử lý lỗi trong hệ thống lưới điện.</p>
                            <p>Tạo ra phần mềm thông minh dễ sử dụng , tính bảo mật cao</p>
							</div>
						</div>
					</div>
				</div>				
			</div>
			
			<hr class="hr1">
			
			<div class="section-title text-center">               
                <h3>Tại sao nên chọn TeamTwo ?</h3>
                <p class="lead">Sản phẩm tốt, chi phí hợp lý, hỗ trợ tận tình.</p>
            </div><!-- end title -->
			
		
            </div><!-- end how-its-work -->
        </div><!-- end container -->
    </div><!-- end section -->

   
    
    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/tippy.all.min.js"></script>
    <script src="js/custom.js"></script>
	
	<script src="js/jquery.ba-cond.min.js"></script>
	<script src="js/jquery.slitslider.js"></script>
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


</body>
</html>