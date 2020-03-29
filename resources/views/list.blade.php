<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>一覧</title>
    </head>
<body>
    <p>日時検索</p>
    <form action="/list" method="post">
    @if (array_key_exists('search_title', $_POST)) 
        <input type="text" value="{{$_POST['search_title']}}" name="search_title">
    @else
        <input type="text" name="search_title">
    @endif
        <input type="submit" value="検索"></input>
    </form></br>

    <form action="/delete" method="post">
    <input type="submit" value="削除"></input><br>
    @if (array_key_exists('page', $_GET))
        $page = $_GET['page'];
    @else
        $page = 1;
    @endif

    @if ($page > $maxpage)
        <p>データがありません。</p>
    @else

        @for ($index = 0; $index < $limit; $index++) 
            @if (($start + $index) + 1 <= $count) 
                <a href="{{$list[$start + $index]}}">{{$list[$start + $index]}}.txt</a>
                <input type="checkbox" name="delete_content[]" value="{{$list[$start + $index]}}.txt")><br>
            @else 
                break;
            @endif
        @endfor
    }
    @endif
    </form>

    @if ($page > 1) 
        <a href='/list?page={{$page - 1}}'>前のページ</a>')
    @endif

    @for ($button = 0; $button < $maxpage; $button++)
        $page_num = $button + 1;
        <a href='/list?page={{$page_num}}'>{{$page_num}}ページ</a>
    @endfor

    @if ($page < $maxpage) 
        <a href='/list?page={{$page + 1}}'>次のページ</a>
    @endif

    <a href =".input/">投稿する<a/></br>
    <a href = ".logout/">ログアウト<a/>
    </body>
</html>

