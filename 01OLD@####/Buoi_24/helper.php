<?php

function page($sumPage, $page)
{
    $html = '';

    #Về đầu trang
    $html .= '<a href="index.php?page=1">Đầu</a>';

    #Về trước 1 trang
    #Nếu trang hiện tại lớn hơn 1 => trước
    if ($page > 1) {
        $html .= '<a href="index.php?page='.($page - 1).'">Trước</a>';
    }

    #Nếu trang hiện tại - 2 <= 0(Đã hết trang để hiển thị) => 1 
    #ngược lại thì chính nó
    $start = ($page - 2) <= 0 ? 1 : ($page - 2);

    #Nếu trang hiện tại + 2 >= tổng số trang => tổng số trang
    #ngược lại thì chính nó
    $end   = ($page + 2) >= $sumPage ? $sumPage : ($page + 2);

    for ($i = $start; $i <= $end; $i++) {
        if ($page == $i) {
            $html .= '<span style="color:red; margin-right: 10px">' . $i . '</span>';
        } else {
            $html .= '<a href="index.php?page=' . $i .'">' . $i . '</a>';
        }
    }

    #Về sau 1 trang
    # Nếu trang hiện tại nhỏ hơn tổng số trang => về sau
    if ($page < $sumPage) {
        $html .= '<a href="index.php?page='.($page + 1).'">Sau</a>';
    }

    #Về cuối trang
    $html .= '<a href="index.php?page=' . $sumPage . '">Cuối</a>';

    return $html;
}