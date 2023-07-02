setTimeout(function() {
    loadData();
}, 100);


function loadData()
{
    $.ajax({
        type : 'GET',
        dataType : 'JSON',
        url : 'http://php-08-03.vtest/Buoi_16/',
        success : function(result) {
            var html = '<img src="' + result.avatar  + '"><h3>' + result.username + '</h3>';
            $('#customer').html(html);
        }
    });
}