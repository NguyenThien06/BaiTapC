function tinh()
{
    var chieudai = $('#chieudai').val();
    var chieurong = $('#chieurong').val();
    var hinhdang = $('#hinhdang').val();


    $.ajax({
        type : 'POST',
        dataType : 'JSON',
        data : { chieudai, chieurong, hinhdang },
        url : 'http://php-08-03.vtest/Buoi_17/btvn/api.php',
        success : function (result) {
            var html = '<p>Chu vi ' + hinhDang(hinhdang) + ': ' + result.chuvi + "</p>";
                html += '<p>Diện tích ' + hinhDang(hinhdang) + ': ' + result.dientich + "</p>";
            
            $('#kq').html(html);    
        }
    });

}

function hinhDang(ht = 1)
{
    return ht == 1 ? 'Hình Chữ Nhật' : 'Hình Vuông';
}