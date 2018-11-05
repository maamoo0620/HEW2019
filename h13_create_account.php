<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="css/jquery.skippr.css">
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/jquery.skippr.js"></script>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/slimbox.css">
    <title>h13_create_account.html</title>
    <script>
        /*----------------------------------------------------------------------*/
        /* sp_nav_menu
        /*----------------------------------------------------------------------*/

        $(function () {
            $(".sp_nav_btn").on("click", function () {
                $("body").toggleClass("is_active");
            });
            //on_wrapをクリックしたとき、クラスを削除
            $(".on_wrap").on("click", function () {
                $("body").removeClass("is_active");
            });

        });
    </script>
    <style>
        @charset "UTF-8";
        * {
            /* 全ての要素に対して反映される リセット */
            margin  : 0;
            padding : 0;
            outline : 0;
        }

        html {
            font-size : 62.5%; /* 10px */
        }

        @import url(https://fonts.googleapis.com/css?family=Lato:400,700);
        @import url(http://fonts.googleapis.com/earlyaccess/notosansjp.css);
        body {
            padding     : 0;
            margin      : 0;
            font-family : "Lucida Grande", "segoe UI", "ヒラギノ丸ゴ ProN W4", "Hiragino Maru Gothic ProN", Meiryo, Arial, sans-serif;
        }

        .l_header {
            position           : fixed;
            top                : 0;
            left               : 0;
            width              : 100%;
            z-index            : 100;
            background         : #6f0;
            -webkit-transition : .3s;
            transition         : .3s
        }

        .l_header .header_inner {
            display    : table;
            width      : 100%;
            padding    : 10px;
            box-sizing : border-box;
        }

        .l_header .sp_nav_btn img {
            display        : table-cell;
            width          : 60px;
            height         : 60px;
            float          : left;
            vertical-align : middle;
            cursor         : pointer
        }

        .sp_nav_btn p {
            float     : left;
            margin    : 10px 0 0 50px;
            font-size : 3rem;
        }

        .l_header .logo {
            display        : table-cell;
            padding        : 0 10px;
            text-align     : center;
            vertical-align : middle;
            box-sizing     : border-box;
        }

        .l_header .logo img {
            width     : 100%;
            max-width : 233px;
        }

        .wrap {
            position           : relative;
            top                : 0;
            left               : 0;
            height             : 100%;
            background         : #fff;
            -webkit-transition : .3s;
            transition         : .3s
        }

        .on_wrap {
            position           : fixed;
            top                : 0;
            left               : 0;
            width              : 100%;
            height             : 100%;
            z-index            : 1;
            -webkit-transition : .3s;
            transition         : .3s;
            visibility         : hidden
        }

        .is_active .l_header {
            left               : 220px;
            -webkit-transition : .3s;
            transition         : .3s
        }

        .is_active .wrap {
            left               : 220px;
            -webkit-transition : .3s;
            transition         : .3s
        }

        .is_active .on_wrap {
            position           : fixed;
            left               : 220px;
            width              : 100%;
            height             : 100%;
            z-index            : 10000;
            overflow           : hidden;
            visibility         : visible;
            -webkit-transition : .3s;
            transition         : .3s;
            box-shadow         : -2px 0 10px rgba(0, 0, 0, 0.35)
        }

        .is_active .l_nav {
            position           : fixed;
            height             : 100%;
            left               : 0;
            overflow-y         : auto;
            -webkit-transition : .3s;
            transition         : .3s
        }

        .l_nav {
            background         : #fff;
            width              : 220px;
            height             : 100%;
            position           : fixed;
            top                : 0;
            left               : -220px;
            z-index            : 1000;
            -webkit-transition : .3s;
            transition         : .3s
        }

        .nav_menu {
            padding    : 0;
            list-style : none;
        }

        .l_nav .nav_menu li {
            border-bottom : 1px solid #909090;
        }

        .l_nav .nav_menu a {
            font-size : 2rem;
            display   : block;
            padding   : 15px 0px 15px 15px;
            color     : #333
        }

        .l_nav .nav_menu a:hover {
            color            : #fff;
            font-weight      : bold;
            background-color : #888;
        }

        .l_nav .nav_menu .nav_list_inner {
            position : relative
        }

        .search_book {
            position : absolute;
            right    : 50px;
            top      : 25px;
        }

        .children {
            position : absolute;
            right    : 50px;
            top      : 25px;
        }

        .children a {
            font-size       : 2rem;
            color           : #555;
            text-decoration : none;
            margin          : 0 10px;
        }

        .children a:hover {
            color : #000;
        }

        html {
            overflow  : auto;
            height    : 100%;
            font-size : 65.5%;
        }

        body {
            position : relative;
            width    : 100%;
            height   : 100%;
            padding  : 50px 0 0;
        }

        .name {
            margin    : 50px 0 0 50px;
            font-size : 3rem;
        }

        .create_form {
            width     : 600px;
            margin    : 50px auto 0;
            font-size : 2rem;
        }

        .left_form {
            width      : 200px;
            clear      : both;
            float      : left;
            text-align : right;
        }

        .right_form {
            width  : 370px;
            height : 50px;
            margin : 0 0 0 30px;
            float  : left;
        }

        .right_form input {
            width            : 300px;
            height           : 30px;
            border-radius    : 5px;
            box-shadow       : 0 0 -5px 0;
            background-color : #ddd;
        }

        select {
            font-size     : 2rem;
            border-radius : 5px;
        }

        .year {
            width : 100px;
        }

        .month, .day {
            width : 60px;
        }

        .right_form button {
            position         : relative;
            left             : 400px;
            width            : 100px;
            height           : 40px;
            border-radius    : 10px;
            font-size        : 2rem;
            font-weight      : 550;
            background-color : #ddd;
        }

        #back {
            position : absolute;
            bottom   : 0;
            left     : 20px;
            position : fixed;
        }

        #back img {
            border-radius : 10px;
            box-shadow    : 0 5px 2px rgba(0, 0, 0, 0.2);
            width         : 50px;
            cursor        : pointer;
        }

        #back img:hover {
            opacity   : 0.7;
            transform : translate3d(0, 3px, 0);
        }
    </style>
</head>
<body>
    <div class="l_nav">
        <nav class="nav">
            <ul class="nav_menu">
                <li>
                    <div class="nav_list_inner">
                        <a href="h09_index.html">トップページ</a>
                    </div>
                </li>
                <li>
                    <div class="nav_list_inner">
                        <a href="#">おすすめ</a>
                    </div>
                </li>
                <li>
                    <div class="nav_list_inner">
                        <a href="#">絵本一覧</a>
                    </div>
                </li>
                <li>
                    <div class="nav_list_inner">
                        <a href="h18_genre.html">絵本ジャンル</a>
                    </div>
                </li>
                <li>
                    <div class="nav_list_inner">
                        <a href="h14_children_start.html">子どもログイン</a>
                    </div>
                </li>
                <li>
                    <div class="nav_list_inner">
                        <a href="#">ユーザ登録/変更</a>
                    </div>
                </li>
                <li>
                    <div class="nav_list_inner">
                        <a href="h10_wanted_list.html">ほしいものリスト</a>
                    </div>
                </li>
                <li>
                    <div class="nav_list_inner">
                        <a href="h11h11_purchase_history">購入履歴</a>
                    </div>
                </li>
                <li>
                    <div class="nav_list_inner">
                        <a href="#.html">設定</a>
                    </div>
                </li>
                <li>
                    <div class="nav_list_inner">
                        <a href="#">ログアウト</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
    <!-- div[side_nav] -->
    <div class="on_wrap"></div>
    <div class="wrap">
        <div class=" l_header">
            <div class="header_inner inner">
                <div class="sp sp_nav_btn">
                    <img src="img/menu_btn.jpg" alt="" width="50px" height="50px">
                    <p>絵本の森</p>
                </div>
            </div>
        </div>
        <p class="name">子ども情報登録</p>
        <form class="create_form">
            <div class="left_form"><p>ニックネーム</p></div>
            <div class="right_form">
                <input type="text" name="" value="">
            </div>
            <div class="left_form">生年月日</div>
            <div class="right_form">
                <select class="year" name="">
                    <option value="" selected="selected">2000</option>
                    <option value="">2001</option>
                    <option value="">2002</option>
                    <option value="">2003</option>
                    <option value="">2004</option>
                    <option value="">2005</option>
                    <option value="">2006</option>
                    <option value="">2007</option>
                    <option value="">2008</option>
                    <option value="">2009</option>
                    <option value="">2010</option>
                    <option value="">2011</option>
                    <option value="">2012</option>
                    <option value="">2013</option>
                    <option value="">2014</option>
                    <option value="">2015</option>
                    <option value="">2016</option>
                    <option value="">2017</option>
                    <option value="">2018</option>
                    <option value="">2019</option>
                </select>年
                <select class="month" name="">
                    <option value="" selected="selected">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                    <option value="">6</option>
                    <option value="">7</option>
                    <option value="">8</option>
                    <option value="">9</option>
                    <option value="">10</option>
                    <option value="">11</option>
                    <option value="">12</option>
                </select>月
                <select class="day" name="">
                    <option value="" selected="selected">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                    <option value="">6</option>
                    <option value="">7</option>
                    <option value="">8</option>
                    <option value="">9</option>
                    <option value="">10</option>
                    <option value="">11</option>
                    <option value="">12</option>
                    <option value="">13</option>
                    <option value="">14</option>
                    <option value="">15</option>
                    <option value="">16</option>
                    <option value="">17</option>
                    <option value="">18</option>
                    <option value="">19</option>
                    <option value="">20</option>
                    <option value="">21</option>
                    <option value="">22</option>
                    <option value="">23</option>
                    <option value="">24</option>
                    <option value="">25</option>
                    <option value="">26</option>
                    <option value="">27</option>
                    <option value="">28</option>
                    <option value="">29</option>
                    <option value="">30</option>
                    <option value="">31</option>
                </select>日
            </div>
            <div class="left_form">
            </div>
            <div class="right_form">
                <button type="submit" name="" value="">確定</button>
            </div>
        </form>
    </div>
</body>
</html>
