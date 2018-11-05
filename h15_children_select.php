<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>h15_children_select.html</title>
    <style>
        .index_link {
            position : absolute;
            top      : 10px;
            right    : 10px;
        }

        .index_link a {
            text-decoration : none;
            color           : #ccc;
        }

        .start_select {
            width            : 500px;
            height           : 100px;
            margin           : 5% auto 0;
            border-radius    : 100px;
            background-color : #6f0;
            text-align       : center;
        }

        .start_select a {
            color           : #fff;
            font-size       : 3rem;
            font-weight     : bold;
            text-decoration : none;
            display         : block;
            width           : 100%;
            height          : 65%;
            padding         : 20px 0 0;
        }

        #back {
            position : fixed;
            bottom   : 0;
            left     : 20px;
        }

        #back img {
            border-radius : 10px;
            box-shadow    : 0 5px 2px rgba(0, 0, 0, .2);
            width         : 50px;
            cursor        : pointer;
        }

        #back img:hover {
            opacity : 0.7;
        }
    </style>
</head>
<body>
    <div class="index_link"><a href="h09_index.html">保護者ログイン</a></div>
    <div class="start_select">
        <a href="h16_search_result.html">はやおくん</a>
    </div>
    <div class="start_select">
        <a href="h16_search_result.html">けいたくん</a>
    </div>
    <div class="start_select">
        <a href="h16_search_result.html">まもるくん</a>
    </div>
    <div class="start_select">
        <a href="h16_search_result.html">りょうくん</a>
    </div>
    <div id="back">
        <img src="images/Logo/back.png" onclick="history.back()">
    </div>
    </div>
</body>
</html>
