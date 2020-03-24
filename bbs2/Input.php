<?php
namespace Bbs;

use Bbs\Config\Config;

class Input
{
    public function input_page()
    {
        //$config = new Config();
        //echo $config->list_link();
    }


    public function save_page()
    {
        $config = new Config();
            if (array_key_exists('name', $_POST) && array_key_exists('title', $_POST) && array_key_exists('comment', $_POST)) {
                if ($_POST['name'] == '' && $_POST['title'] == '' && $_POST['comment'] == '') {
                    echo '<p>タスク名か内容の指定がありません。</p>';
                    echo '<a href = "' . $config->get_url('input') . '">投稿画面に戻る<a/>';
                    exit();
                }
                file_put_contents($config->get_file_directory() . date("YmdHis") . ".txt", $_POST['name'] . '|' . $_POST['title'] . '|' . $_POST['comment']);
    
            } else {
                echo '<p>データがありません。</p>';
                echo '<a href = "' . $config->get_url('input') . '">投稿画面に戻る<a/>';
                exit();
            }
    }

}

