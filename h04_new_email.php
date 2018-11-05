<!--4	新規登録フォーム(メールアドレス)-->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>formsample</title>
    <style>
        body, p, form, input {
            margin : 0;
        }

        #form {
            width   : 400px;
            height  : 150px;
            margin  : 30px auto;
            padding : 20px;
            border  : 1px solid #555;
        }

        form {
            margin    : 30px 20px 0;
            font-size : 14px;
        }

        .form-title {
            text-align : center;
        }

        input[type="email"] {
            width     : 300px;
            padding   : 4px;
            font-size : 14px;
        }

        button {
            margin : 0 0 50px 0;
            float  : right;
        }
    </style>
</head>
<body>
    <div id="form">
        <p class="form-title">新規アカウント登録フォーム</p>
        <form action="h02_select.html" method="post">
            <p>メールアドレス</p>
            <input type="email" name="username" 　placeholder="password"/>
            <button type="submit" value="Next"/>
            送信</button>
        </form>
    </div>
</body>
</html>
