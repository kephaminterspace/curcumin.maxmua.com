var form = $('#subscription4-1-a').find('form');
var countChecked = function() {
    return form.find('input[type=checkbox]:checked').not('[disabled=disabled]').length;
};
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
form.find('input[type=checkbox]').click(function () {
    var checklast = form.find('input[disabled=disabled]');
    if (countChecked() < 5) {
        checklast.attr('checked', false);
        checklast.prop('checked', false);
    }
    else {
        checklast.attr('checked', true);
        checklast.prop('checked', true);
    }
});
form.find('button[type=submit]').click(function (event) {
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
    // var quantity = section.find('input[name=quantity]').val();

    // kiểm tra giá trị
    var iarray 	= [name, phone, address];
    var varray 	= ['Họ và tên: ', 'Điện thoại: ', 'Địa chỉ nhà: '];
    var ilen 	= iarray.length;
    // kiểm tra input rỗng
    for (var i = 0; i < ilen; i++)
    {
        if (iarray[i] != null)
        {
            if (iarray[i] == '')
            {
                modal.find('.alert-warning').html('<p>Không được để trống<br>- Họ và tên<br>- Số điện thoại<br>- Địa chỉ nhà<br>- Tất cả các đĩa</p>').show();
                modal.modal();
                return;
            }
        }
    }
    // kiểm tra ít nhất 1 đĩa phải được tick
    if (countChecked() == 0)
    {
        modal.find('.alert-warning').html('<p>Không được để trống<br>- Họ và tên<br>- Số điện thoại<br>- Địa chỉ nhà<br>- Tất cả các đĩa</p>').show();
        modal.modal();
        return;
    }
    var products = '';
    form.find('input[type=checkbox]:checked').each(function () {
        products = products + $(this).attr('value') + '+';
    });
    products = products.slice(0, -1);
    // kiểm tra sự hợp lệ của các giá trị
    // kiểm tra email
    // var pattern = /^[a-z0-9\.-_]+@[a-z0-9]+\.(([a-z0-9]+)|([a-z0-9]+)\.([a-z0-9]+))$/i;
    // if (email != null && !pattern.test(email))
    // {
    //     modal.find('.alert-warning').html('<p>Địa chỉ email không chính xác !</p>').show();
    //     modal.modal();
    //     return;
    // }
    // kiểm tra số điện thoại
    pattern = /^[0-9]{10,11}$/;
    if (phone != null && !pattern.test(phone))
    {
        modal.find('.alert-warning').html('<p>Số điện thoại không chính xác !</p>').show();
        modal.modal();
        return;
    }
    // kiểm tra số lượng
    // pattern = /^[0-9]+$/;
    // if (quantity != null && !pattern.test(quantity))
    // {
    //     modal.find('.alert-warning').html('<p>Số lượng nhập vào không chính xác !</p>').show();
    //     modal.modal();
    //     return;
    // }

    // thành công
    // gửi thông tin
    var element = section.attr('id');
    var nick 	= modal.attr('data-nick');
    $.ajax({
        'url': '/addCustomer/' + nick + '/' + element,
        type: 'post',
        data: {
            name	: name,
            phone	: phone,
            // email	: email,
            address : address,
            message : messages,
            products: products
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