<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>掲示板入力</title>
    </head>

    <body>
        <div>
            <h2>掲示板</h>
        </div>

        <div class="form-group">
            <form action="http://localhost:8080/save" method="post">
                <div class="form-group">
                    <label>ニックネーム</label>
                    <input type="textarea" name="name">
                </div>
                    
                <div class="form-group">
                    <label>タイトル</label>
                    <input type="textarea" name="title">
                </div>

                <div class="form-group">
                    <label>コメント</label>
                    <input type="textarea" name="comment">
                </div>

                <input type="submit" value="保存"></input>
            </form>
        </div>

        <div>
        <a href =" {{$listurl}} ">投稿確認はこちらblade</a>
        </div>
        
    </body>
</html>