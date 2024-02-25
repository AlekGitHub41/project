<?php


class View
{

    function generate($content_view, $data)
    {
        /*
        if(is_array($data)) {
            // преобразуем элементы массива в переменные
            extract($data);
        }
        */
        include $_SERVER['DOCUMENT_ROOT'] . "/project/views/" . $content_view . ".view.php";
    }
}

?>