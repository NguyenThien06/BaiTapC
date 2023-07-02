// function test()
// {
//     $("#test").hide();
// }

$('button').click(function() {

    //var name = document.getElementById('name').value;

    // var name = $('#name').val('Nguyễn Văn A');

    // var text = $('#test').html('<h1 style="color:red">Tiêu Đề Bài Viết</h1>');

    // var text = $('#test').text();

   // $('.abc > .bcd').html('<h1>ABC</h1>');

   // console.log(text);

    // $('#test').toggle();
    // var isActive = $('#name').attr('data-id', 1212);
  
    // var isActive = $('#name').attr({
    //     'data-id': 123,
    //     'class' : 'de-active'
    // });

    // isActive = parseInt(isActive);
    // if (isActive === 12) {
    //     var tong = isActive + 10;
    //     console.log(tong);
    // } else {
    //     console.log('Not Oke');
    // }

    // console.log(isActive);

    //$('#test').toggleClass('active');

    // $('#test').css({
    //     "background-color" : "Red",
    //     "color": "white"
    // });

   // $('#test').css("background-color", "Red");

    // $('#test').css({
    //     "background-color" : "Red",
    //     "color": "white"
    // });

    
    $.ajax({
        type : 'GET',
        dataType : 'JSON',
        data : {
            id : 12
        },
        url : 'http://php-08-03.vtest/Buoi_4/abc.php',
        success : function (results) {
            var html = '';
            for (i in results) {
                html += '<li><a href="' + results[i].url + '">' + results[i].title + '</a></li>';
            }

            $('#data').append(html);
        }
    });
});
