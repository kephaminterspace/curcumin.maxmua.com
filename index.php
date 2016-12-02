<!---->
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
	<title>NANO CURCUMIN CHIẾT XUẤT 100% TỪ NGHỆ TỰ NHIÊN</title>
	<meta content="CURCUMIN, CHIẾT XUẤT 100% TỪ NGHỆ TỰ NHIÊN" name="keywords">
	<meta content="OIC NANO CURCUMIN là sản phẩm duy nhất của nano curcumin ở dạng chất lỏng, hòa tan 100% trong nước, không tạo cặn: khi các phân tử curcumin được chia tách thành các hạt nano có kích thước siêu nhỏ từ 40-60 nanomet, các hạt nano này luôn có xu hướng gắn kết lại với nhau tạo thành kích thước hạt to hơn, không còn dưới dạng NANO nữa. Chúng tôi đã nghiên cứu và có bằng phát minh sáng chế ra qui trinh điều chế vi nhũ tương nano curcumin" name="description">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/font-face.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/carouseller.css">

	<script src="js/jquery-2.2.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script>
		<?php if(isset($_POST['name'])) { ?>
		$(document).ready(function(){
			jQuery('#connect_register')[0].click();
		});
		<?php } ?>
	</script>


	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/carouseller.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>

</head>
<body>
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
						<li><a href="#cta1-3" class="smooth-scroll">Thành phần</a></li>
						<li><a href="#testimonials3-1" class="smooth-scroll" >Quy trình</a></li>
						<li><a href="#contact3-2" class="smooth-scroll" id="connect_register">Liên hệ</a></li>

					</ul>
				</div>
			</div>
		</nav>
	</header>
</div>

<div class="getleads">
	<section id="hero1-1-a" class="hero bg-img" style="background: url('images/bg.png') no-repeat bottom center;">
		<div class="container vertical-center-rel">
			<div class="row">
				<div style="text-align:center;">
					<h1 style="color:#003300; font-size:60px; padding-bottom:0; margin:0;text-transform:uppercase">NANO CURCUMIN</h1>
					<p style="color:#003300; font-size:23px; margin:0; padding:0;text-transform:uppercase">chiết xuất dạng lỏng, 100% từ nghệ tự nhiên việt nam</p>
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
						OIC NANO CURCUMIN là sản phẩm duy nhất của nano curcumin ở dạng chất lỏng, hòa tan 100% trong nước, không tạo cặn: khi các phân tử curcumin được chia tách thành các hạt nano có kích thước siêu nhỏ từ 40-60 nanomet, các hạt nano này luôn có xu hướng gắn kết lại với nhau tạo thành kích thước hạt to hơn, không còn dưới dạng NANO nữa. Chúng tôi đã nghiên cứu và có bằng phát minh sáng chế ra qui trinh điều chế vi nhũ tương nano curcumin
					</div>
					<div style="clear:both"></div>
					<div class="clearboth text-center">
						<a href="#" style="font-weight:bold;color:#f99e1a; border:2px solid #f99e1a;padding-left:40px;padding-right:40px;padding-top:15px;padding-bottom:15px;font-size:20px; text-transform:uppercase; border-radius:8px;">Xem thêm</a>
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
						<img src="images/ss1.jpg" alt="None" class="congdung">
						<h5 class="f-w-900" data-selector="text1" style="font-weight:700;color:#333333;font-size:15px; text-transform:uppercase">Chống oxy hóa</h5>
						<div data-selector="text2" style="font-weight:400;color:#333333;font-size:13px;"><p>Bảo vệ và giúp làm lành tổn thương niên mạc dạ dày, giúp các vết thương nhanh liền sẹo và làm mờ các vết thâm nám</p></div>
					</div>
					<div class="col-md-3">
						<img src="images/ss1.jpg" alt="None" class="congdung">
						<h5 class="f-w-900" data-selector="text1" style="font-weight:700;color:#333333;font-size:15px; text-transform:uppercase">Tiêu diệt các tế bào lạ</h5>
						<div data-selector="text2" style="font-weight:400;color:#333333;font-size:13px;"><p>giúp hỗ trợ quá trinh điều trị bệnh nhận ung thư, bệnh nhân đang xạ trị</p></div>
					</div>
					<div class="col-md-3">
						<img src="images/ss1.jpg" alt="None" class="congdung">
						<h5 class="f-w-900" data-selector="text1" style="font-weight:700;color:#333333;font-size:15px; text-transform:uppercase">phục hồi sức khỏe</h5>
						<div data-selector="text2" style="font-weight:400;color:#333333;font-size:13px;"><p>Phụ nữ sau sinh, chống lão hóa cơ thể, giúp cơ thể trẻ khỏe hơn, da đẹp hơn</p></div>
					</div>
					<div class="col-md-3">
						<img src="images/ss1.jpg" alt="None" class="congdung">
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
						<h2 data-selector="text1" style=" color:#ff9700; text-transform:uppercase; font-size:28px;">tại sao chọn OIC NANO CURCUMIN?</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div data-wow-delay="0.5s" class="wow fadeInDownBig thanhphan"><img src="images/thanh-phan.png"> </div>
				<div data-wow-delay="1.2s" class="wow bounceInLeft text1">Là sản phẩm duy nhất của nano curcumin ở dạng chất lỏng, hòa tan 100% trong nước, không tạo cặn: khi các phân tử curcumin được chia tách thành các hạt nano có kích thước siêu nhỏ từ 40-60 nanomet, các hạt nano này luôn có xu hướng gắn kết lại với nhau tạo thành kích thước hạt to hơn, không còn dưới dạng NANO nữa.</div>
				<div data-wow-delay="1s" class="wow bounceInLeft con1"><img src="images/con1.png"></div>
				<div data-wow-delay="1.8s" class="wow bounceInRight text2">Là sản phẩm NANO CURCUMIN có thành phần Curcumin cao nhất lên tới 14,2%, do vậy chỉ với mỗi liều lượng 1ml pha vào nước tinh khiết các bạn đã có một cốc nano curcumin màu vàng sậm, khác hẳn với các loại NANO CURCUMIN khác đang bán trên thị trường</div>
				<div data-wow-delay="1.5s" class="wow bounceInRight con2"><img src="images/con2.png"></div>
				<div data-wow-delay="2.2s" class="wow bounceInLeft text3">
					các hạt NANO CURCUMIN tách dời nhau nhờ vào 3 lớp vỏ bọc của mang tính bazơ yếu, ba lớp vỏ bọc này luôn đảm bảo cho CURCUMIN luôn ở dạng NANO, dạng NANO là dạng vật chất siêu nhỏ, có khả năng thẩm thấu tốt nhất và phát huy tốt nhất tác dụng
				</div>
				<div data-wow-delay="2s" class="wow bounceInLeft con3"><img src="images/con3.png"></div>
				<div data-wow-delay="2.7s" class="wow bounceInRight text4">
					Sản phẩm của chúng tôi được chiết suất 100% từ nghệ trồng ở khu vực nghệ an, 100% sản phẩm từ thiên nhiên, 100% là sản phẩm curcumin của việt nam. CURCUMIN của việt nam được các nhà khoa học trên thế giới đánh giá là curcumin tốt nhất thế giới.
				</div>
				<div data-wow-delay="2.5s" class="wow bounceInRight con4"><img src="images/con4.png"></div>
				<div data-wow-delay="3.2s" class="wow bounceInUp text5">
					Một điều đặc biệt nữa là sản phẩm của chúng tôi chứa 14,2% curcumin, còn lại là phụ liệu vừa đủ được nhập khẩu từ Đức và Mỹ, toàn bộ tinh dầu nghệ đã được tách bỏ do vậy đây là một sản phẩm cao cấp, các bạn không lo bị nóng (khi dùng các sản phẩm từ nghệ mà cơ thể bị nóng trong là do tác dụng phụ của tinh dầu nghệ)
				</div>
				<div data-wow-delay="3s" class="wow bounceInUp con5"><img src="images/con5.png"></div>
			</div>
		</div>
	</section>
</div>
<div class="getleads">
	<section id="cta1-3" class="p-y-md bg-edit" data-selector="block" style="background: url('images/bghome.png') top center; padding-top:120px;padding-bottom:10px;">
		<div class="container">
			<div class="row" style="width:60%; margin:auto; ">
				<div data-wow-delay="0.5s" class="wow swing">
					<p style="font-size:1em; color:#fff; text-align:center ">“ Sau 1 thời gian sử dụng Nano Curcumin, tôi cảm thấy hiệu quả rõ rệt, rất dễ uống thoải mái khi ăn uống vì căn bệnh dạ dày đã thuyên giảm đi nhiều ”
					</p>
				</div>
			</div>
			<div class="row">
				<section class="slider">
					<div class="flexslider carousel">
						<ul class="slides">
							<li>
								<img src="http://flexslider.woothemes.com/images/kitchen_adventurer_cheesecake_brownie.jpg" />
								<div class="info">
									<span>Nguyễn Văn A</span>
									<p>Nhân viên văn phòng</p>
								</div>
							</li>
							<li>
								<img src="http://flexslider.woothemes.com/images/kitchen_adventurer_lemon.jpg" />
								<div class="info">
									<span>Nguyễn Văn B</span>
									<p>Nhân viên văn phòng</p>
								</div>
							</li>
							<li>
								<img src="http://flexslider.woothemes.com/images/kitchen_adventurer_cheesecake_brownie.jpg" />
								<div class="info">
									<span>Nguyễn Văn C</span>
									<p>Nhân viên văn phòng</p>
								</div>
							</li>
							<li>
								<img src="http://flexslider.woothemes.com/images/kitchen_adventurer_lemon.jpg" />
								<div class="info">
									<span>Nguyễn Văn D</span>
									<p>Nhân viên văn phòng</p>
								</div>
							</li>
							<li>
								<img src="http://flexslider.woothemes.com/images/kitchen_adventurer_cheesecake_brownie.jpg" />
								<div class="info">
									<span>Nguyễn Văn E</span>
									<p>Nhân viên văn phòng</p>
								</div>
							</li>
							<li>
								<img src="http://flexslider.woothemes.com/images/kitchen_adventurer_lemon.jpg" />
								<div class="info">
									<span>Nguyễn Văn F</span>
									<p>Nhân viên văn phòng</p>
								</div>
							</li>
						</ul>
					</div>
				</section>


				<!-- FlexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>

				<script type="text/javascript">
					$(function(){
						SyntaxHighlighter.all();
					});
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
						<h2 data-selector="text1" style="color:#ff9700; text-transform:uppercase; font-size:28px;">quy trình làm ra sản phẩm nano curcumin</h2>
						<p class="lead" data-selector="text2" style="color:#333333;font-size:18px;margin-bottom:10px;">Chúng tôi đã và đang nỗ lực hết mình trong việc mang đến cho khách hàng những sản phẩm tốt nhất chăm sóc sức khỏe cho mọi người!</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div id="quytrinh">
					<div data-wow-delay="1s" class="wow zoomIn quytrinh"><img src="images/quy-trinh.png"> </div>
					<div data-wow-delay="1s" class="wow zoomIn quytrinh1"><img src="images/qt1.png"> </div>
					<div data-wow-delay="1s" class="wow zoomIn quytrinh2"><img src="images/qt2.png"> </div>
					<div data-wow-delay="1s" class="wow zoomIn quytrinh3"><img src="images/qt3.png"> </div>
					<div data-wow-delay="1s" class="wow zoomIn quytrinh4"><img src="images/qt4.png"> </div>
					<div data-wow-delay="1s" class="wow zoomIn quytrinh5"><img src="images/qt5.png"> </div>
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
				<p style="color:#f99e1a; font-size:20px; padding-top:15px;">Thiết bị đạt chuẩn GMP, nhập khẩu từ G7, Nga hoặc Israel</p>
			</div>
			<div class="col-md-4">
				<img src="images/s1.jpg">
				<p style="color:#f99e1a; font-size:20px; padding-top:15px;">Dược liệu đạt chuẩn USP hoặc EP</p>
			</div>
			<div class="col-md-4">
				<img src="images/s1.jpg">
				<p style="color:#f99e1a; font-size:20px; padding-top:15px;">Nguyên liệu từ Curcuminoid nguồn gốc Nghệ vàng của Việt nam đạt 3 pic</p>
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
			<div class="row c2 text-white" style="width:69%; margin:auto; text-align:center">
				<h4 class="f-w-900 m-b-md" data-selector="text3" style="color:#ffffff;font-size:20px;margin-bottom:10px; text-transform:none; font-weight:normal;">Hãy để lại thông tin bên dưới chúng tôi sẽ sớm
					liên hệ lại tư vấn cho bạn:</h4>

				<form class="horizontal form-white" id="contactform" method="post" action="index.php">
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
						<button type="submit" class="btn btn-green wow pulse" data-wow-iteration="2" data-selector="btn" style="font-weight:700;color:#ffffff; background-color:#f99e1a;border-width:0px;border-style:solid;padding:20px;font-size:16px; width:33%;">NHẬN TƯ VẤN NGAY</button>
					</div>
				</form>

			</div>
			<div class="row" style="border-top: 5px solid #f99e1a; margin-top:30px;">
				<div class="col-md-4">
					<p style="padding-top:20px;"><img src="images/logo-white.png"></p>
					<p style="color:#fff; font-size:13px; padding-top:6px;margin:0;">Nhathai New Technology JSC.,</p>
					<p style="color:#fff; font-size:13px;margin:0;">Oranges Informatic Communication (OIC)</p>
				</div>
				<div class="col-md-4">
					<p style="padding-top:20px;color:#fff;"><b>Liên hệ:</b></p>
					<p style="color:#fff; font-size:13px;margin:0;"> Tel: +84437332122</p>
					<p style="color:#fff; font-size:13px;margin:0;">Fax:+84437338787</p>
					<p style="color:#fff; font-size:13px;margin:0;">Tax code : 0104128935</p>
					<p style="color:#fff; font-size:13px;margin:0;">Add :14 11A Plot Trung hoa Str - Cau giay - Hanoi</p>
					<p style="color:#fff; font-size:13px;margin:0;">Branch:Villa no 9 BT2 - Linhdam peninsula</p>
					<p style="color:#fff; font-size:13px;margin:0;">Hoangmai - Hanoi - Vietnam</p>
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
</body>
</html>



