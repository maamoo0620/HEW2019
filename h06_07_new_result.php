<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
    <title>h06_new_result.html</title>
</head>
<body>
    <!--6	新規登録確定-->
    <!--7	6→ログインページへ-->

    <style>
        .form_area {
            width   : 600px;
            height  : 500px;
            padding : 20px;
            margin  : 50px auto 0;
            border  : solid 1px;
        }

        h4, h5 {
            text-align : center;
        }

        .left_box {
            width      : 30%;
            text-align : right;
            clear      : both;
            float      : left;
        }

        .right_box {
            width  : 60%;
            margin : 0 0 0 20px;
            float  : left;
        }

        .right_box input, textarea {
            width : 300px;
        }

        .btn {
            clear  : both;
            margin : 20px 100px 0 0;
            float  : right;
        }

    </style>
    <div class="form_area">
        <h4>アカウント登録フォーム</h4>
        <h5>下記の内容で登録しますか?</h5>
        <form action="add_02_check.php" method="POST">
            <div class="left_box">名前:</div>
            <div class="right_box">
                <input type="text" name="name" value="藤井駿"/>
            </div>
            <div class="left_box">ふりがな:</div>
            <div class="right_box">
                <input type="text" name="read_name" value="ふじいはやお"/>
            </div>
            <div class="left_box">郵便番号:</div>
            <div class="right_box">
                <input type="text" name="address_num" value="450-0002"/>
            </div>
            <div class="left_box">住所:</div>
            <div class="right_box">
                <textarea placeholder="住所を入力してください" name="address" value="" cols="20"
                          rows="5">愛知県名古屋市中村区名駅４丁目２７−１</textarea>
            </div>
            <div class="left_box">password( 1回目):</div>
            <div class="right_box">
                <input type="password" name="password01" value="password"/>
            </div>
            <div class="left_box">password(確認用):</div>
            <div class="right_box">
                <input type="password" name="password02" value="password"/>
            </div>
            <div class="btn">
                <button type="submit">登録</button>
            </div>
        </form>
    </div>
</body>
</html>
