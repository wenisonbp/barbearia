<?php

function render($content, $template, array $data = [], array $data_2 = [], array $data_3 = [], array $data_4 = [], array $data_5 = []) {
    $content = __DIR__ . '/../templates/' . $content . '.tpl.php';
    return include __DIR__ . '/../templates/' . $template . '.tpl.php';
}