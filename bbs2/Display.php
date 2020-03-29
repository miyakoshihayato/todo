<?php
namespace Bbs;

use Bbs\Config\Config;

class Display
{
    public function list_page()
    {

    }

    public function contents_page()
    {
    $config = new Config();
    echo '<html>
        <body>';
    if (array_key_exists('task', $_GET)) {
        //echo htmlspecialchars(file_get_contents($_GET['task']));
        $box = explode( '|', file_get_contents($_GET['task']));
        echo '<p>ニックネーム：' . $box[0] . '</p>';
        echo '<hr width="200" size="1" color="#ff0000" align="left">';
        echo '<p>タイトル：' . $box[1] . '</p>';
        echo '<hr width="200" size="1" color="#ff0000" align="left">';
        echo '<p>コメント：' . $box[2] . '</p>';
        echo'</br>';
        echo $config -> list_link();
    } else {
        echo '<p>データがありません。</p>';
        echo $config -> list_link();
    }
        echo '</body>
            </html>';
    }
}

