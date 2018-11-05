<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>formsample</title>
    <style>
        body, p, form, input {
            margin : 0
        }

        #form {
            width   : 400px;
            margin  : 30px auto;
            padding : 20px;
            border  : 1px solid #555;
        }

        form p {
            font-size : 14px;
        }

        .form-title {
            text-align : center;
        }

        .username, .pass {
            margin-bottom : 20px;
        }

        input[type="text"],
        input[type="password"] {
            width     : 300px;
            padding   : 4px;
            font-size : 14px;
        }

        .submit {
            text-align : right;
        }
    </style>
</head>
<body>
    <div id="form">
        <p class="form-title">新規アカウント登録フォーム</p>
        <form action="h04_new_email.html" method="post">
            <p>User ID</p>
            <p class="username"><input type="text" name="username" placeholder="重複しないUser IDを入力してください"/></p>
            <p class="submit"><input type="submit" value="Next"/></p>
        </form>
    </div>
</body>
</html>
