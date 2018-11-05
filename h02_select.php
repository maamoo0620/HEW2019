<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title></title>
<style>
body{
  background-image: url('img/room002.png');
}
  .wrapper{

  }
  #contents{
    width:690px;
    height:50px;
    margin: 0 auto;
  }
  .tickets{
   margin:25px 0 25px;
   width:690px;
   height:150px;
   background-color:#6f0;
   clear:both;
   cursor: pointer;
   position: relative;
  }
  .tickets input[type="text"],[type="textarea"]{
    top:20px;
    left:100px;
    position: absolute;
    font-size:20px;
    width:200px;
    cursor: pointer;
  }
  .image_wrapper{
    width: 75px;
    height: 75px;
    background: white;
    position: absolute;
    left: 20px;
    top:20px;
  }
  .tickets img{
    width: 75px;
  }
  .tickets button{
    position: absolute;
    bottom:20px;
    right:20px;
    width: 150px;
    height: 50px;
    cursor: pointer;
  }
  .tickets #triangle{
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 50px 0 0 50px;
    border-color: transparent transparent transparent rgba(0,0,0,0.3);
    cursor: default;
    position: absolute;
    bottom:0;
    left:0;
  }
</style>
</head>
<body>
  <div id="wrapper">
    <div id="header">

    </div>
    <div id="contents">
      <a href="h09_index.html">
      <div class="tickets">
        <input type="textarea" value="ゲストさん" disabled="disabled">
        <div class="image_wrapper">
        <img src="images/Logo/user.svg">
        </div>
        <div>
          <button>ログイン</button>
        </div>
        <div id="triangle">
        </div>
      </div>
      </a>
      <a href="h03_new_acount.html">
      <div class="tickets">
        <input type="textarea" value="新規アカウント作成" disabled="disabled">
        <div class="image_wrapper">
        <img src="images/Logo/user.svg">
        </div>
        <div>
          <button>登録する</button>
        </div>
        <div id="triangle">
        </div>
      </div>
      </a>
      <a href="h08_login.html">
      <div class="tickets">
        <input type="textarea" value="USERNAME" disabled="disabled">
        <div class="image_wrapper">
        <img src="images/Logo/user.svg">
        </div>
        <div>
          <button>ログイン</button>
        </div>
          <div>
          </div>
        <div id="triangle">
        </div>
      </div>
      </a>
      <a href="h14_ home.html">
      <div class="tickets">
        <input type="textarea" value="こども用アカウント" disabled="disabled">
        <div class="image_wrapper">
        <img src="images/Logo/user.svg">
        </div>
        <div>
          <button>ログイン</button>
        </div>
        <div id="triangle">
        </div>
      </div>
      </a>
    </div>
  </div>
</body>
</html>
