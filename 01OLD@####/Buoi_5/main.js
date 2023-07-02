function loadData()
{
    $.ajax({
        type : 'POST', // Phương thức gọi
        dataType : 'JSON', //Kiêu dữ liệu
        data : { // Dữ liệu truyền lên server nếu cần
            id : 10,
            title : 'Test API'
        },
        url : 'http://php-08-03.vtest/Buoi_5/data.php', //link gọi tới để lấy dữ liệu
        
        success : function (results) { // Nhận kết quả từ link API trả về
            //Data mới
            console.log(results.address);
            
           // var countArray = results.length;

            // for (i = 0; i < 3; i++) {
            //     var object = results[i]; // Lấy phần tử thứ i trong mảng results
                
            //     console.log(object.id);
            //     console.log(object.username);
            //     console.log('-----------------');
            // }
     
           // var kq = results[2]; // Lấy data của phần tử đầu tiên trong mảng

          //  $('#data').html(kq); // Set dữ liệu vào html có id = data
        }
    });
}