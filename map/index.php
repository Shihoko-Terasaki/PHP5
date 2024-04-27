<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>データ登録</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>div{padding: 10px;font-size:16px;}</style>
    </head>
    <body>

        <!-- Head[Start] -->
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
                </div>
            </nav>
        </header>
        <!-- Head[End] -->

        <!-- Main[Start] -->
        <form method="POST" action="insert.php">
            <div class="jumbotron">
                <fieldset>
                    <legend>ペットショップ登録フォーム</legend>
                    <label>Name：<input type="text" name="name"></label><br>
                    <label>Email：<input type="email" name="email"></label><br>
                    <label>住所：<input type="text" name="address"></label><br>
                    <label>HP：<input type="text" name="hp"></label><br>
                    <label>Open：<input type="text" name="open"></label><br>
                    <label>Close：<input type="text" name="close"></label><br>
                    <label>緯度：<input type="text" name="lat"></label><br>
                    <label>経度：<input type="text" name="lon"></label><br>
                    <label>X：<input type="text" name="x"></label><br>
                    <label>instagram：<input type="text" name="instagram"></label><br>
                    <label>facebook：<input type="text" name="facebook"></label><br>
                    <label>日時：<input type="text" name="hp"></label><br>
                    <label>Memo：<textArea name="memo" rows="4" cols="40"></textArea></label><br>  
                    
                    <input type="submit" value="Send">
                </fieldset>
            </div>
        </form>
        <!-- Main[End] -->


    </body>
</html>
