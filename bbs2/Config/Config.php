<?php
namespace Bbs\Config;

class Config
{
    public function get_url($action)
    {
        return '/' . $action;
    }

    public function get_file_directory()
    {
        return '/Users/miyakoshihayato/Desktop/workspace3/todo/bbs/text/';
    }

    public function get_file_directory_login()
    {
        return '/Users/miyakoshihayato/Desktop/workspace3/todo/bbs/login/';
    }

    public function list_link()
    {
    return '<a href = "' . $this->get_url('list') . '">投稿確認はこちら<a/>';
    }

    public function echo_pipe_line($text)
    {
        echo $text . '|';
    }
}

