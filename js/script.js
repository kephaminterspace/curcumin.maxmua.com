// Khi nhấn vào ảnh ở galery
$('.portfolio-grid img, figure img').click(function () {
	$(this).next().find('a').click();
});

$('.getleads button[type=submit]').click(function (event) {
	event.preventDefault();

	// khởi tạo ban đầu
	var modal 	= $('.modal');
	modal.find('.alert').hide();
	var section = $(this).closest('section');

	// lấy giá trị nhập vào
	var email 	= section.find('input[name=email]').val();
	var name 	= section.find('input[name=name]').val();
	var phone 	= section.find('input[name=phone]').val();
	var messages = section.find('input[name=messages]').val();
	if (messages == null)
	{
		messages = section.find('textarea[name=messages]').val();
	}
	var address = section.find('input[name=address]').val();
	var quantity = section.find('input[name=quantity]').val();

	// kiểm tra giá trị
	var iarray 	= [email, name, phone, messages, address, quantity];
	var varray 	= ['Email: ', 'Họ và tên: ', 'Điện thoại: ', 'Lời nhắn: ', 'Địa chỉ: ', 'Số lượng: '];
	var ilen 	= iarray.length;
	// kiểm tra input rỗng
	for (var i = 0; i < ilen; i++)
	{
		if (iarray[i] != null)
		{
			if (iarray[i] == '')
			{
				modal.find('.alert-warning').html('<p>Không được để trống !</p>').show();
				modal.modal();
				return;
			}
		}
	}
	// kiểm tra sự hợp lệ của các giá trị
	// kiểm tra email
	var pattern = /^[a-z0-9\.-_]+@[a-z0-9]+\.(([a-z0-9]+)|([a-z0-9]+)\.([a-z0-9]+))$/i;
	if (email != null && !pattern.test(email))
	{
		modal.find('.alert-warning').html('<p>Địa chỉ email không chính xác !</p>').show();
		modal.modal();
		return;
	}
	// kiểm tra số điện thoại
	pattern = /^[0-9]{10,11}$/;
	if (phone != null && !pattern.test(phone))
	{
		modal.find('.alert-warning').html('<p>Số điện thoại không chính xác !</p>').show();
		modal.modal();
		return;
	}
	// kiểm tra số lượng
	pattern = /^[0-9]+$/;
	if (quantity != null && !pattern.test(quantity))
	{
		modal.find('.alert-warning').html('<p>Số lượng nhập vào không chính xác !</p>').show();
		modal.modal();
		return;
	}
	
	// thành công
	// gửi thông tin
	var element = section.attr('id');
	var nick 	= modal.attr('data-nick');
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$.ajax({
		'url': '/addCustomer/' + nick + '/' + element,
		type: 'post',
		data: {
			email	: email,
			phone	: phone,
			name	: name,
			messages : messages
		}
	}).done(function (respone) {
		// console.log(respone);
	});
	// hiện thông báo
	section.find('input[type=text]').val('');
	section.find('textarea').val('');
	var noti = '<p>Đã gửi thông tin !</p>';
	for (i = 0; i < ilen; i++)
	{
		if (iarray[i] != null)
		{
			if (iarray[i] != '')
			{
				iarray[i] = iarray[i].replace('<', '');
				noti = noti + '<p>' + varray[i] + iarray[i] + '</p>';
			}
		}
	}
	modal.find('.alert').hide();
	modal.find('.alert-success').html(noti).show();
	modal.modal();
});

var swiper4 = new Swiper('.swiper-container-4', {
	pagination: '.swiper-pagination',
	slidesPerView: 4,
	paginationClickable: true,
	spaceBetween: 10,
	breakpoints: {
		767: {
			slidesPerView: 1,
			spaceBetween: 10
		}
	}
});

var swiper3 = new Swiper('.swiper-container-3', {
	pagination: '.swiper-pagination',
	slidesPerView: 3,
	paginationClickable: true,
	spaceBetween: 10,
	breakpoints: {
		767: {
			slidesPerView: 1,
			spaceBetween: 10
		}
	}
});

var swiper_full = new Swiper('.swiper-container-fullscreen', {
	pagination: '.swiper-pagination',
	paginationClickable: true,
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	autoplay: 3000,
	effect: 'fade'
});