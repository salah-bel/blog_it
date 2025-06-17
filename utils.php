<?php
function render($view, $data) {
    extract($data);
 
    ob_start();
    require_once 'views/'.$view.'.html.php';
    $content = ob_get_clean();
    require_once 'views/base.html.php';
}