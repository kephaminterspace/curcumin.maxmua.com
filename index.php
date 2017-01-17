<?php
$message = '';
$t=time();
if(isset($_POST['name'])) {
	$arr = array(
		'properties' => array(
			array(
				'property' => 'email',
				'value' => $_POST['email']
			),
			array(
				'property' => 'firstname',
				'value' => $_POST['name']
			),
			array(
				'property' => 'lastname',
				'value' => ''
			),
			array(
				'property' => 'phone',
				'value' => $_POST['phone']
			),
			array(
				'property' => 'hs_lead_status',
				'value' => "NEW"
			)
		)
	);

	$post_json = json_encode($arr);

	$endpoint = "https://api.hubapi.com/contacts/v1/contact/?hapikey=37f58bae-b91f-4130-b13a-eb8044cbcb10";
	$ch = @curl_init();
	@curl_setopt($ch, CURLOPT_POST, true);
	@curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
	@curl_setopt($ch, CURLOPT_URL, $endpoint);
	@curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	@curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = @curl_exec($ch);
	$status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
	$curl_errors = curl_error($ch);
	@curl_close($ch);
	if ($status_code == 200) {
		header('Location: thank.php');
		die();
	}else{
		$message = 'Email đã tồn tại';
	}
}
?>


<html lang="vi">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/font-face.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/carouseller.css">
    <link rel="stylesheet" href="css/colorbox.css">
	<script src="js/jquery-2.2.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/carouseller.min.js"></script>
    <script src="js/jquery.colorbox-min.js"></script>

<!--	<script src="js/jquery.easing.1.3.js"></script>-->
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-MPQ42HG');</script>
	<!-- End Google Tag Manager -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MPQ42HG"
				  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="getleads">
	<div class="background-nav" style="height: 58px;"></div>
	<header id="nav1-1-f">
		<nav class="navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a href="#" class="navbar-brand smooth-scroll"><img src="images/logo.png" alt="none" data-selector="img" style="max-width:300px;max-height:40px;"></a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="#content6-1-c" class="smooth-scroll">Giới thiệu</a></li>
						<li><a href="#contact7-1" class="smooth-scroll">Công dụng</a></li>
						<li><a href="#portfolio1-1-a" class="smooth-scroll">Tại Sao Chọn?</a></li>
						<li><a href="#cta1-3" class="smooth-scroll">Khách hàng</a></li>
						<li><a href="#testimonials3-1" class="smooth-scroll" >Quy trình</a></li>
						<li><a href="#contact3-2" class="smooth-scroll">Liên hệ</a></li>

					</ul>
				</div>
			</div>
		</nav>
	</header>
</div>

<div class="getleads">
	<section id="hero1-1-a" class="hero bg-img" style="background: url('images/bg1.png') no-repeat center;">
		<div class="container vertical-center-rel" style="margin-top: 50px;">
			<div class="row">
				<div class="text-baner">
					<h1 style="color: #00923f;
   -webkit-text-fill-color: #ffffff; /* Will override color (regardless of order) */
   -webkit-text-stroke-width: 2px;
   -webkit-text-stroke-color: #00923f; font-size:60px; padding-bottom:0; margin:0;text-transform:uppercase">OIC NANO CURCUMIN</h1>
					<p style="color:#00923f; font-size:23px; margin:0; padding:0;text-transform:uppercase">Hỗ trợ phòng chống ung thư, bảo vệ sức khỏe</p>
					<h1 style=" color:#00923f; font-size:40px; padding-bottom:0; margin:0;text-transform:uppercase">chỉ với 18k mỗi ngày</h1>
					<p style="color: #333; font-size:36px; margin:0; padding:0;text-transform:uppercase">hotline: <span style="font-weight:bold; color: #F00;">01666.555.888</p>
				</div>
			</div>
		</div>
	</section>
</div>

<div class="getleads">
	<section id="content6-1-c" class="p-y-lg content-block content-align-md bg-edit" data-selector="block" style="background-color:#ffffff;border-radius:0px;padding-top:30px;padding-bottom:30px;">
		<div class="container">
			<div class="row" style="margin:auto; width:88%; ">
				<h2 class="m-b-md">NANO CURCUMIN chiết xuất 100% từ nghệ tự nhiên</h2>
				<div style="color:#333333;font-size:16px;margin-bottom:25px;">
					<div style="margin-bottom:60px; text-align:justify ">
						OIC NANO CURCUMIN là sản phẩm duy nhất của nano curcumin ở dạng chất lỏng, hòa tan 100% trong nước, không tạo cặn: khi các phân tử curcumin được chia tách thành các hạt nano có kích thước siêu nhỏ từ 40-60 nanomet, các hạt nano này luôn có xu hướng gắn kết lại với nhau tạo thành kích thước hạt to hơn, không còn dưới dạng NANO nữa.
						Sau nhiều năm nghiên cứu, chúng tôi đã phát minh ra qui trình điều chế vi nhũ tương nano curcumin, giúp cho các phần tử curcumin luôn tồn tại dưới dạng hạt nano siêu nhỏ, có thể thẩm thấu ngay qua lớp màng tế bào khi vào cơ thể con người, qua đó phát huy tối đa khả năng hấp thụ cũng như hiệu quả của curcumin trong quá trình sử dụng.
						Với phát minh này, ngày 13 tháng 10 năm 2016, chúng tôi rất vinh dự được đón nhận bằng độc quyền sáng chế số 16095 do Cục sở hữu trí tuệ, Bộ Khoa học công nghệ cấp, có thời hạn 20 năm và được bảo hộ theo luật sở hưu trí tuệ trên toàn thế giới.
					</div>
					<div style="clear:both"></div>
					<div class="clearboth text-center">
						<a href="#contact3-2" style="font-weight:bold;color:#00923f; border:2px solid #f99e1a;padding-left:40px;padding-right:40px;padding-top:15px;padding-bottom:15px;font-size:20px; text-transform:uppercase; border-radius:8px;">Đăng ký ngay</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<div class="line"></div>
<div class="getleads">
	<section id="contact7-1" class="p-t-md bg-edit bg-dark" data-selector="block" style="background-color:#f7f7f7;padding-top:50px;padding-bottom:50px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 c4 contact-divider text-white text-center">

					<div class="col-md-3">
						<img src="images/ss2.jpg" alt="None" class="congdung">
						<h5 class="f-w-900" data-selector="text1" style="font-weight:700;color:#333333;font-size:15px; text-transform:uppercase">Điều trị các bệnh về dạ dày, đại tràng</h5>
						<div data-selector="text2" style="font-weight:400;color:#333333;font-size:13px;"><p>Bảo vệ và giúp làm lành tổn thương niên mạc dạ dày, giúp các vết thương nhanh liền sẹo và làm mờ các vết thâm nám</p></div>
					</div>
					<div class="col-md-3">
						<img src="images/ss1.jpg" alt="None" class="congdung">
						<h5 class="f-w-900" data-selector="text1" style="font-weight:700;color:#333333;font-size:15px; text-transform:uppercase">Chống oxy hóa, tiêu diệt các tế bào lạ</h5>
						<div data-selector="text2" style="font-weight:400;color:#333333;font-size:13px;"><p>giúp hỗ trợ quá trinh điều trị bệnh nhận ung thư, bệnh nhân đang xạ trị</p></div>
					</div>
					<div class="col-md-3">
						<img src="images/ss3.jpg" alt="None" class="congdung">
						<h5 class="f-w-900" data-selector="text1" style="font-weight:700;color:#333333;font-size:15px; text-transform:uppercase">phục hồi sức khỏe</h5>
						<div data-selector="text2" style="font-weight:400;color:#333333;font-size:13px;"><p>Phụ nữ sau sinh, chống lão hóa cơ thể, giúp cơ thể trẻ khỏe hơn, da đẹp hơn</p></div>
					</div>
					<div class="col-md-3">
						<img src="images/ss4.jpg" alt="None" class="congdung">
						<h5 class="f-w-900" data-selector="text1" style="font-weight:700;color:#333333;font-size:15px; text-transform:uppercase">Tăng cường chức năng gan
						</h5>
						<div data-selector="text2" style="font-weight:400;color:#333333;font-size:13px;"><p>Hạ men gan, tăng cường khả năng miễn dịch, tăng cường chức năng gan mật</p></div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<div class="line"></div>
<div class="getleads">
	<section id="portfolio1-1-a" class="p-y-lg bg-edit" data-selector="block" style="padding-top:30px;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="section-header text-center wow fadeIn" style="visibility: visible; animation: fadeIn; -webkit-animation: fadeIn;">
						<h2 data-selector="text1" style=" color:#00923f; text-transform:uppercase; font-size:28px; padding-bottom:50px;">tại sao chọn OIC NANO CURCUMIN?</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div data-wow-delay="0.5s" class="wow fadeInDownBig thanhphan"><img src="images/thanh-phan.png"> </div>
				<div data-wow-delay="1.2s" class="wow bounceInLeft text1" style="padding:5px;">
					<strong>-</strong>&nbsp;&nbsp;Là sản phẩm duy nhất của nano curcumin ở dạng chất lỏng, phát tán (hòa tan) 100% trong nước, không tạo cặn. với liều lượng 1ml pha với một cốc nước ấm 150ml, các bạn có thể dễ dàng uống như uông nước hàng ngày.</div>
				<div data-wow-delay="1s" class="wow bounceInLeft con1"><img src="images/con1.png"></div>
				<div data-wow-delay="1.8s" class="wow bounceInRight text2" style="padding:5px;">
					<strong>-</strong>&nbsp;&nbsp;Là sản phẩm NANO CURCUMIN có thành phần Curcumin cao nhất lên tới 14,2%, do vậy chỉ với mỗi liều lượng 1ml pha vào nước tinh khiết các bạn đã có một cốc nano curcumin màu vàng sậm, đậm đặc, cung cấp đủ lượng curcumin cần thiết cho quá trình hỗ trợ điều trị bệnh và bảo vệ cơ thể mỗi ngày.</div>
				<div data-wow-delay="1.5s" class="wow bounceInRight con2"><img src="images/con2.png"></div>
				<div data-wow-delay="2.2s" class="wow bounceInLeft text3" style="padding:5px;">
					<strong>-</strong>&nbsp;&nbsp;Các phần tử curcumin trong sản phẩm của OIC luôn tồn tại dưới dạng nano siêu nhỏ chỉ từ 40 đến 60 nanomét, chúng được tách dời nhau nhờ 3 lớp vỏ bọc mang tính bazơ yếu, khi vào đến dạ dày gặp môi trường axít mạnh, ngay lập tức lớp vỏ bọc bazơ yếu bị phá vỡ, giải phóng nano curcumin, các phần tử nano curcumin siêu nhỏ này có thể thẩm thấu ngay qua lớp màng tế bào vào cơ thể, phát huy tối đa hiệu quả và tác dụng của curcumin trong phòng chống và hỗ trợ điều trị bệnh.
				</div>
				<div data-wow-delay="2s" class="wow bounceInLeft con3"><img src="images/con3.png"></div>
				<div data-wow-delay="2.7s" class="wow bounceInRight text4" style="padding:5px;">
					<strong>-</strong>&nbsp;&nbsp;Sản phẩm của chúng tôi được chiết suất 100% từ nghệ tự nhiên được trồng ở khu vực nghệ an, Hưng yên, hoàn toàn là nghệ của Việt Nam. CURCUMIN trong nghệ của việt nam được các nhà khoa học trên thế giới đánh giá là tốt nhất thế giới.
				</div>
				<div data-wow-delay="2.5s" class="wow bounceInRight con4"><img src="images/con4.png"></div>
				<div data-wow-delay="3.2s" class="wow bounceInUp text5" style="padding:5px;">
					<strong>-</strong>&nbsp;&nbsp;Một điều đặc biệt nữa là sản phẩm của chúng tôi chứa 14,2% curcumin, còn lại là phụ liệu vừa đủ được nhập khẩu từ Đức và Mỹ, toàn bộ tinh dầu nghệ đã được tách bỏ do vậy đây là một sản phẩm cao cấp, các bạn không lo bị nóng (khi dùng các sản phẩm từ nghệ mà cơ thể bị nóng trong là do tác dụng phụ của tinh dầu nghệ)
				</div>
				<div data-wow-delay="3s" class="wow bounceInUp con5"><img src="images/con5.png"></div>
			</div>
		</div>
	</section>
</div>
<div class="getleads">
	<section id="cta1-3" class="p-y-md bg-edit" data-selector="block" style="background: url('images/bghome.jpg') top center; padding-bottom:10px;">
		<div class="container">
			<div class="row">
				<p style=" font-size:18px; padding:5px; font-weight:bold; color:#fff; text-align:center; text-transform:uppercase">Ý kiến chuyên gia và khách hàng</p>
				<section class="slider">
					<div class="flexslider carousel">
						<ul class="slides" style="margin:auto;">
							<li>
								<img src="images/customer/A1.png" />
								<p>Nano Curcumin dạng dung dịch có tác dụng với người bị viêm loét dạ dày, đại
									tràng, men gan cao theo y học phương Đông đã được đúc kết...
									<a class="box inline" href="#inline_content1">
										Chi tiết
									</a>
								</p>

								<!-- This contains the hidden content for inline calls -->
								<div style='display:none'>
									<div id='inline_content1' style='padding:10px; background:#fff;'>
										<h3 style="text-align:center; "><strong>PGS – TS Lê Văn Thảo - Nguyên GD Bệnh Viện Ung Bướu Hà Nội - PCT thường trực hội Ung Thư Hà Nội</strong></h3>
										<img src="images/t-bg.png" alt="#" style="width:100%; margin-bottom: 20px;">
										<p>
											Nano Curcumin dạng dung dịch có tác dụng với người bị viêm loét dạ dày, đại
											tràng, men gan cao theo y học phương Đông đã được đúc kết. Với các đặc điểm của
											Nano Curcumin có thể hỗ trợ điều trị ung thư khi bệnh nhân ung thư được điều trị
											bằng phương pháp đặc hiệu
										</p>
									</div>
								</div>
								<div class="info">
									<span>PGS – TS Lê Văn Thảo</span>
									<p>Nguyên GD Bệnh Viện Ung Bướu Hà Nội</p>
									<p>PCT thường trực hội Ung Thư Hà Nội</p>
								</div>
							</li>


							<li>
								<img src="images/customer/A2.jpg" />
								<p>Cách đây hơn một năm qua sự giới thiệu của anh Hải Minh thì tôi được biết đến sản phẩm dung dịch Nano Curcumin, sau một thời gian sử dụng đều đặn mỗi ngày 2 lần vào buổi sáng...
									<a class="box inline" href="#inline_content3">
										Chi tiết
									</a>
								</p>

								<!-- This contains the hidden content for inline calls -->
								<div style='display:none'>
									<div id='inline_content3' style='padding:10px; background:#fff;'>
										<h3 style="text-align:center; "><strong>Ông Đàm Xuân Lâm - Phó Tổng Giám Đốc KPMG</strong></h3>
										<img src="images/t-bg.png" alt="#" style="width:100%; margin-bottom: 20px;">
										<p>
											Cách đây hơn một năm qua sự giới thiệu của anh Hải Minh thì tôi được biết đến sản phẩm dung dịch Nano Curcumin, sau một thời gian sử dụng đều đặn mỗi ngày 2 lần vào buổi sáng và buổi tối, tôi cảm nhận được sự hiệu quả của sản phẩm trên cả kỳ vọng của tôi.
										</p>
									</div>
								</div>
								<div class="info">
									<span>Ông Đàm Xuân Lâm</span>
									<p>Phó Tổng Giám Đốc KPMG</p>
								</div>
							</li>


							<li>
								<img src="images/customer/A3.jpg" />
								<p>Do đặc thù của công việc nên tôi thường xuyên phải đi tiếp khách nên không
									thể tránh khỏi bia rượu. Trong lần khám sức khỏe vừa rồi tôi phát hiện ra men gan
									của mình tăng rất cao đột biến,...
									<a class="box inline" href="#inline_content3">
										Chi tiết
									</a>
								</p>

								<!-- This contains the hidden content for inline calls -->
								<div style='display:none'>
									<div id='inline_content3' style='padding:10px; background:#fff;'>
										<h3 style="text-align:center; "><strong>Ông Võ Thanh Bình - Tập đoàn dầu khí Việt Nam</strong></h3>
										<img src="images/t-bg.png" alt="#" style="width:100%; margin-bottom: 20px;">
										<p>
											Do đặc thù của công việc nên tôi thường xuyên phải đi tiếp khách nên không
											thể tránh khỏi bia rượu. Trong lần khám sức khỏe vừa rồi tôi phát hiện ra men gan
											của mình tăng rất cao đột biến, gấp 3 lần cho phép. Sau khi tìm hiểu qua tư vấn của
											bác sĩ và các sản phẩm điều trị men gan trên thị trường, tôi đã lựa chọn dùng thử sản
											phẩm Nano Curcumin OIC dạng dung dịch cho kết quả rất tốt và thấy rằng men gan
											giảm về mức cho phép.
										</p>
									</div>
								</div>


								<div class="info">
									<span>Ông Võ Thanh Bình</span>
									<p>Tập đoàn dầu khí Việt Nam</p>
								</div>
							</li>


							<li>
								<img src="images/customer/A4.jpg" />
								<p>Khi tôi sinh con, mẹ tôi rất vất vả. Bà đã dã nghệ tươi để trưng cất và xoa lên cơ thể để tránh các vấn đề hậu sản. Tuy nhiên tôi cảm thấy khó chịu khi bôi các dung dịch đó trên người trong thời gian dài....
									<a class="box inline" href="#inline_content4">
										Chi tiết
									</a>
								</p>

								<!-- This contains the hidden content for inline calls -->
								<div style='display:none'>
									<div id='inline_content4' style='padding:10px; background:#fff;'>
										<h3 style="text-align:center; "><strong>Bà Đỗ Tú Anh - Tổng Thư Ký Hội Doanh nghiệp trẻ Hà Nội</strong></h3>
										<img src="images/t-bg.png" alt="#" style="width:100%; margin-bottom: 20px;">
										<p>
											Khi tôi sinh con, mẹ tôi rất vất vả. Bà đã dã nghệ tươi để trưng cất và xoa lên cơ thể để tránh các vấn đề hậu sản. Tuy nhiên tôi cảm thấy khó chịu khi bôi các dung dịch đó trên người trong thời gian dài. Cho đến khi biết đến sản phẩm Nano Curcumin dạng dung dịch tôi nghĩ rằng các bà mẹ sau khi sinh sử dụng sản phẩm này sẽ mang lại hiệu quả và giúp bồi bỏ sức khỏe.
										</p>
									</div>
								</div>


								<div class="info">
									<span>Bà Đỗ Tú Anh</span>
									<p>Tổng Thư Ký Hội Doanh nghiệp trẻ Hà Nội</p>
								</div>
							</li>


							<li>
								<img src="images/customer/A5.jpg" />
								<p>Tôi là người hoạt động trong ngành nghiên cứu nên các sản phẩm mà tôi sử dụng đều được nghiên cứu, đo đếm rất là cẩn thận. Tôi được biết theo Tạp Chí Y Khoa Thế Giới, đối với curcumin để ngấm vào người ..

                                    <a class="box inline" href="#inline_content5">
                                        Chi tiết
                                    </a>
                                </p>

								<!-- This contains the hidden content for inline calls -->
								<div style='display:none'>
									<div id='inline_content5' style='padding:10px; background:#fff;'>
										<h3 style="text-align:center; "><strong>Ông Nguyễn Minh Giáp - Tổng Giám Đốc EVD - CEO Câu Lạc Bộ West 6536</strong></h3>
										<img src="images/t-bg.png" alt="#" style="width:100%; margin-bottom: 20px;">
										<p>
											Tôi là người hoạt động trong ngành nghiên cứu nên các sản phẩm mà tôi sử dụng đều được nghiên cứu, đo đếm rất là cẩn thận. Tôi được biết theo Tạp Chí Y Khoa Thế Giới, đối với curcumin để ngấm vào người đủ liều lượng bạn cần phải sử dụng 1,3 – 2,7kg/ngày, đây là điều khó khăn. Khi biết đến sản phẩm Nano Curcumin, tôi thấy có sự khác biệt đối với thị trường đặc biệt là ở dạng dung dịch. So sánh với các sản phẩm khác tôi thấy rằng, có những sản phẩm không hòa tan đọng ở phía đáy, còn với sản phẩm Nano Curcumin, tôi vô cùng ngạc nhiên khi cho kết quả hòa tan tuyệt đối. Đối với sản phẩm này, nên sử dụng cho các bệnh về dạ dày và niêm mạc dạ dày rất là tốt. Với kinh nghiệm của tôi sử dụng trong 3 lọ này theo liều lượng được khuyến cáo sẽ mang lại hiệu quả tuyệt đối.
										</p>
									</div>
								</div>


								<div class="info">
									<span>Ông Nguyễn Minh Giáp</span>
									<p>Tổng Giám Đốc EVD</p>
									<p>CEO Câu Lạc Bộ West 6536</p>
								</div>
							</li>


							<li>
								<img src="images/customer/A6.jpg" />
								<p>Tôi đã mắc căn bệnh dạ dày từ lâu và gây ra nhiều khó khăn trong cuộc sống. Kể từ
									khi biết đến và sử dụng sản phẩm Nano Curcumin đã giúp căn bệnh của tôi cải thiện
									rất nhiều.
								</p>
								<div class="info">
									<span>Ông Nguyễn Xuân Phú</span>
									<p>Chủ tịch Tập Đoàn SUNHOUSE</p>
									<p>PCT Hội Doanh nghiệp Trẻ Hà Nội</p>
								</div>
							</li>


						</ul>
					</div>
				</section>

				<script>
					$(".inline").colorbox({inline:true, width:"95%"});
				</script>
				<!-- FlexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>

				<script type="text/javascript">
//					$(function(){
//						SyntaxHighlighter.all();
//					});
					$(window).load(function(){
						$('.flexslider').flexslider({
							animation: "slide",
							animationLoop: false,
							itemWidth: 300,
							itemMargin: 5,
							minItems: 1,
							maxItems: 3,
							start: function(slider){
								$('body').removeClass('loading');
							}
						});
					});
				</script>
			</div>



	</section>
</div>

<div class="getleads">
	<section id="testimonials3-1" class="p-y-lg bg-edit" data-selector="block" style="background-color:#ffffff;border-radius:0px;padding-top:50px;padding-bottom:50px;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="text-center wow fadeIn" style="visibility: visible; animation: fadeIn; -webkit-animation: fadeIn;">
						<h2 data-selector="text1" style="color:#00923f; text-transform:uppercase; font-size:28px;">quy trình làm ra sản phẩm nano curcumin</h2>
						<p class="lead" data-selector="text2" style="color:#333333;font-size:18px;margin-bottom:10px;">Chúng tôi đã và đang nỗ lực hết mình trong việc mang đến những sản phẩm tốt nhất chăm sóc sức khỏe cho mọi người!</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div id="quytrinh">
					<div data-wow-delay="1s" class="wow zoomIn quytrinh"><img src="images/nghe-tuoi.png"> </div>
					<div data-wow-delay="1.2s" class="wow zoomIn quytrinhx"><img src="images/quy-trinh1.png"> </div>
					<div data-wow-delay="1.5s" class="wow zoomIn quytrinh1"><img src="images/nut1.png"> </div>
					<div data-wow-delay="1.7s" class="wow zoomIn qttext1">
						<p>NGHỆ TƯƠI</p>
						<p>Nghệ thu hoạch từ tự nhiên, làm sạch và sơ chế, sấy khô</p>
					</div>
					<div data-wow-delay="2s" class="wow zoomIn quytrinh2"><img src="images/nut234.png"> </div>
					<div data-wow-delay="2.2s" class="wow bounceInRight qttext2">
						<p>BỘT NGHỆ</p>
						<p>Nghệ được say nghiền ra dưới dạng bột</p>
					</div>
					<div data-wow-delay="2.5s" class="wow zoomIn quytrinh3"><img src="images/nut234.png"> </div>
					<div data-wow-delay="2.7s" class="wow bounceInLeft qttext3">
						<p>TINH BỘT NGHỆ</p>
						<p>nghệ sau khi được tách hết dầu nghệ và các tạp chất khác</p>
					</div>
					<div data-wow-delay="3s" class="wow zoomIn quytrinh4"><img src="images/nut234.png"> </div>
					<div data-wow-delay="3.2s" class="wow bounceInLeft qttext4">
						<p>CURCUMIN</p>
						<p>Tinh bột nghệ sau khi được loại bỏ hoàn toàn các chất khác, còn lại là curcumin với tỉ lệ trên 95%</p>
					</div>
					<div data-wow-delay="3.5s" class="wow bounceInUp quytrinh6"><img src="images/nanocurcumin.png"> </div>
					<div data-wow-delay="4s" class="wow zoomIn quytrinh5"><img src="images/nut5.png"> </div>
					<div data-wow-delay="4.2s" class="wow fadeInRight qttext5">
						<p>NANO CURCUMIN</p>
						<p>Điều chế từ curcumin có tỉ lệ thành phần cao hơn 95%, tạo thành Nano curcumin</p>
					</div>

				</div>
				<div id="qtmobile"><img src="images/quytrinh.png"></div>
			</div>
		</div>
	</section>
</div>
<div class="line"></div>
<div class="getleads">
	<div class="container">
		<div class="row" style="padding-top:30px; padding-bottom:30px; text-align:center">
			<div class="col-md-4">
				<img src="images/s1.jpg">
				<p style="color:#00923f; font-size:20px; padding-top:15px;">Thiết bị đạt chuẩn GMP, nhập khẩu từ G7, Nga hoặc Israel</p>
			</div>
			<div class="col-md-4">
				<img src="images/s2.jpg">
				<p style="color:#00923f; font-size:20px; padding-top:15px;">Dược liệu đạt chuẩn USP hoặc EP</p>
			</div>
			<div class="col-md-4">
				<img src="images/s3.jpg">
				<p style="color:#00923f; font-size:20px; padding-top:15px;">Nguyên liệu từ Curcuminoid nguồn gốc Nghệ vàng của Việt nam đạt 3 pic</p>
			</div>
		</div>
	</div>
</div>


<div class="getleads">
	<section id="contact3-2" class="p-y-lg contact bg-edit bg-dark" data-selector="block" style="background: url('images/bgft.jpg') top center;border-radius:0px;padding-top:20px;padding-bottom:50px;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="section-header text-center text-white wow fadeIn" style="visibility: visible; animation: fadeIn; -webkit-animation: fadeIn;">
						<h2 data-selector="text1" style="font-weight:400;color:#ffffff;font-size:36px;margin-bottom:10px;"></h2>
						<p class="lead" data-selector="text2" style="font-weight:400;color:#ffffff;font-size:22px;margin-bottom:10px;"></p>
					</div>
				</div>
			</div>
			<div class="row c2 text-white" style="text-align:center">
				<div class="col-md-6">
					<h4 class="f-w-900 m-b-md" data-selector="text3" style="color:#ffffff;font-size:20px;margin-bottom:10px; text-transform:none; font-weight:normal;">Hãy để lại thông tin bên dưới chúng tôi sẽ sớm
						liên hệ lại tư vấn cho bạn:</h4>
					<form class="horizontal form-white" id="contactform" method="post" action="index.php#contact3-2">
						<?php if(isset($message)){ ?>
							<p style="color: red; "> <?php echo $message; ?></p>
						<?php } ?>

						<div class="form-group">
							<input id="name" class="form-control" name="name" value="<?php if(isset($_POST['name'])) { echo $_POST['name']; } ?>" type="text" required placeholder="Họ và tên *:" required oninvalid="setCustomValidity('Họ và tên không để trống')" oninput="setCustomValidity('')">
						</div>
						<div class="form-group">
							<input id="email" class="form-control" name="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>" type="text" required placeholder="Địa chỉ email *:" required pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" oninvalid="setCustomValidity('Địa chỉ email không chính xác!')" oninput="setCustomValidity('')">
						</div>
						<div class="form-group">
							<input id="phone" class="form-control"name="phone" value="<?php if(isset($_POST['phone'])) { echo $_POST['phone']; } ?>" type="text" required placeholder="Số điện thoại *:" required pattern="^[0-9]{10,12}$" oninvalid="setCustomValidity('Số điện thoại không đúng')" oninput="setCustomValidity('')">
						</div>
						<div class="form-group m-b-0">
							<button type="submit" class="btn btn-green wow pulse" data-wow-iteration="2" data-selector="btn" style="font-weight: 700; color: rgb(255, 255, 255); background-color: rgb(249, 158, 26); border-width: 0px; border-style: solid; padding: 20px; font-size: 16px; max-width: 400px; visibility: visible; animation-iteration-count: 2; animation-name: pulse;">NHẬN TƯ VẤN NGAY</button>
						</div>
					</form>
				</div>
				<div class="col-md-6">
					<img src="images/giaychungnhan.jpg" style="height: 440px; width: 400px">
					<div style="margin-top: 10px;">hình ảnh bằng dộc quyền sáng chế</div>
				</div>
			</div>

			<div class="row" style="border-top: 5px solid #f99e1a; margin-top:30px;">
				<div class="col-md-4">
					<p style="padding-top:20px;"><img src="images/logo-white.png"></p>
					<p style="color:#fff; font-size:13px; padding-top:6px;margin:0;">Nhathai New Technology JSC.,</p>
					<p style="color:#fff; font-size:13px;margin:0;">Oranges Informatic Communication (OIC)</p>
				</div>
				<div class="col-md-4">
					<p style="padding-top:20px;color:#fff;"><b>Liên hệ:</b></p>
					<p style="color:#fff; font-size:13px;margin:0;"> <strong>Công ty cổ phần giao nhận ISO</strong></p>
					<p style="color:#fff; font-size:13px;margin:0;">Tel: 01666.555.888</p>
					<p style="color:#fff; font-size:13px;margin:0;">Địa chỉ: P1801 khu A tòa nhà M3M4 số 91 Nguyễn Chí Thanh, Hà Nội</p>
					<p style="color:#fff; font-size:13px;margin:0;">&nbsp;</p>
				</div>
				<div class="col-md-4">
					<p style="padding-top:20px; padding-bottom:8px;color:#fff;"><b>Find us:</b></p>
					<a href="#"><img src="images/gplus.png"></a>
					<a href="#"><img src="images/icon-face.png"></a>
					<a href="#"><img src="images/icon-ytb.png"></a>
					<a href="#"><img src="images/icon-imp.png"></a>
				</div>
			</div>
		</div>
	</section>
</div>

<footer id="footer">
	<div class="btn-group dropup btn-call-us">
		<a href="tel:01666555888" style="color: #ffffff;" class="btn dropdown-toggle call-us"><strong>01666.555.888</strong></a>
	</div>
</footer>

<script type='text/javascript'>

	var width = $(window).width(), height = $(window).height();
	if ((width <= 1023) && (height >= 768)) {
		jQuery(".text-baner").attr('style','text-align:center;margin-top:150px;');
	} else {
		jQuery(".text-baner").attr('style','text-align:center;');
		window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",56180]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);
	}
</script>

</body>
</html>