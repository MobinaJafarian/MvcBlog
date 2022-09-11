<?php

namespace System\Traits;

trait Redirect
{
    protected function redirect($url)
    {
        $protocol = stripos($_SERVER['SERVER_PROTOCOL'], 'https') === true ? 'https://' : 'http://';
        header('Location: ' . $protocol . $_SERVER['HTTP_HOST'] . '/MvcBlog/' . $url);
        exit;
    }

    protected function back()
    {
        $http_referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;
        if ($http_referer != null) {
            header('Location:' . $http_referer);
            exit;
        } else {
            echo 'route not found';
        }
    }
}
