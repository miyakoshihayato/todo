<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>一覧</title>
    </head>

    <body>
    $list = glob($config -> get_file_directory() . '*.txt');
    $new_list = [];
    @if (array_key_exists('search_title', $_POST) && $_POST['search_title'] != '') {
        foreach ($list as $value){
            if (strpos($value , $_POST['search_title']) !== false){
                $new_list[] = $value;
            }
        }
    }@else{
        $new_list = $list;
    }
    @endif
    $list = $new_list;

    <p>日時検索</p>
    <form action="/list" method="post">
    if (array_key_exists('search_title', $_POST)) {
        <input type="text" value="' . $_POST['search_title'] . '" name="search_title">
    }else{
        <input type="text" name="search_title">
    }
    <input type="submit" value="検索"></input>
            </form></br>

    <form action="/delete" method="post">
    <input type="submit" value="削除"></input><br>
    if (array_key_exists('page', $_GET)) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $limit = 10;
    $count = count($list);
    $maxpage = $count / $limit;
    $maxpage = floor($maxpage);
    if (($count % $limit) != 0) {
        $maxpage += 1;
    }
    $start = $limit * ($page - 1);
    if ($page > $maxpage) {
        <p>データがありません。</p>
    } else {
        //foreach($list as $list_num => $name) {
        for ($index = 0; $index < $limit; $index++) {
            if (($start + $index) + 1 <= $count) {
                <a href=' . $config->get_url('contents') . '?task=' . $list[$start + $index] . '>' . basename($list[$start + $index], ".txt") . '</a>
                <input type="checkbox"  name="delete_content[]" value="' . basename($list[$start + $index], ".txt") . '"><br>
            } else {
                break;
            }
        }
        </form>
    }

    if ($page > 1) {
        $config->echo_pipe_line('<a href=' . $config->get_url('list') . '?page=' . ($page - 1) . '>前のページ</a>');
    }
    for ($button = 0; $button < $maxpage; $button++) {
        $page_num = $button + 1;
        $config->echo_pipe_line('<a href=' . $config->get_url('list') . '?page=' . $page_num . '>' . {{$page_num}} . 'ページ</a>');
    }
    if ($page < $maxpage) {
        echo '<a href=' . $config -> get_url('list') . '?page=' . ($page + 1) . '>次のページ</a>
    }

        <br><a href =' . $config -> get_url('input') . '>投稿する<a/></br>
        <a href = "' . $config -> get_url('logout') . '">ログアウト<a/>
    </body>
</html>


