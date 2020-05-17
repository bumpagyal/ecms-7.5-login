<?php
define('EmpireCMSAdmin','1');
define('EmpireCMSAPage','login');
define('EmpireCMSNFPage','1');
require("../class/connect.php");
require("../class/functions.php");
//风格
$loginadminstyleid=EcmsReturnAdminStyle();
//变量处理
$empirecmskey1='';
$empirecmskey2='';
$empirecmskey3='';
$empirecmskey4='';
$empirecmskey5='';
if($_POST['empirecmskey1']&&$_POST['empirecmskey2']&&$_POST['empirecmskey3']&&$_POST['empirecmskey4']&&$_POST['empirecmskey5'])
{
  $empirecmskey1=RepPostVar($_POST['empirecmskey1']);
  $empirecmskey2=RepPostVar($_POST['empirecmskey2']);
  $empirecmskey3=RepPostVar($_POST['empirecmskey3']);
  $empirecmskey4=RepPostVar($_POST['empirecmskey4']);
  $empirecmskey5=RepPostVar($_POST['empirecmskey5']);
  $ecertkeyrndstr=$empirecmskey1.'#!#'.$empirecmskey2.'#!#'.$empirecmskey3.'#!#'.$empirecmskey4.'#!#'.$empirecmskey5;
  esetcookie('ecertkeyrnds',$ecertkeyrndstr,0);
}
elseif(getcvar('ecertkeyrnds'))
{
  $certr=explode('#!#',getcvar('ecertkeyrnds'));
  $empirecmskey1=RepPostVar($certr[0]);
  $empirecmskey2=RepPostVar($certr[1]);
  $empirecmskey3=RepPostVar($certr[2]);
  $empirecmskey4=RepPostVar($certr[3]);
  $empirecmskey5=RepPostVar($certr[4]);
}
else
{}


?>

<!doctype html>
<html lang="zh-CN">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <title>帝国CMS － 稳定可靠、安全省心</title>

    <style type="text/css">
      :root {
        --input-padding-x: 1.5rem;
        --input-padding-y: 0.75rem;
      }

      .login,
      .image {
        min-height: 100vh;
      }

      .bg-image {
        background-image: url('loginimg/login_bg.jpg');
        background-size: cover;
        background-position: center;
      }

      .login-heading {
        font-weight: 300;
      }

      .btn-login {
        font-size: 0.9rem;
        letter-spacing: 0.05rem;
        padding: 0.75rem 1rem;
        border-radius: 2rem;
      }

      .form-label-group,
      .input-group {
        position: relative;
        margin-bottom: 1rem;
      }

      .form-label-group>input,
      .form-label-group>label,
      .input-group>input,
      .input-group>label,
      .input-group>select {
        padding: var(--input-padding-y) var(--input-padding-x);
        height: auto;
        border-radius: 2rem;
      }

      .input-group>.input-group-append:not(:last-child)>.input-group-text {
        border-top-right-radius: 2rem;
        border-bottom-right-radius: 2rem;
      }

      .form-label-group>label,
      .input-group>label {
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 100%;
        margin-bottom: 0;
        /* Override default `<label>` margin */
        line-height: 1.5;
        color: #495057;
        cursor: text;
        /* Match the input under the label */
        border: 1px solid transparent;
        border-radius: .25rem;
        transition: all .1s ease-in-out;
      }

      .form-label-group input::-webkit-input-placeholder {
        color: transparent;
      }

      .form-label-group input:-ms-input-placeholder {
        color: transparent;
      }

      .form-label-group input::-ms-input-placeholder {
        color: transparent;
      }

      .form-label-group input::-moz-placeholder {
        color: transparent;
      }

      .form-label-group input::placeholder {
        color: transparent;
      }

      .form-label-group input:not(:placeholder-shown) {
        padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
        padding-bottom: calc(var(--input-padding-y) / 3);
      }

      .form-label-group input:not(:placeholder-shown)~label {
        padding-top: calc(var(--input-padding-y) / 3);
        padding-bottom: calc(var(--input-padding-y) / 3);
        font-size: 12px;
        color: #777;
      }

      .input-group input::-webkit-input-placeholder {
        color: transparent;
      }

      .input-group input:-ms-input-placeholder {
        color: transparent;
      }

      .input-group input::-ms-input-placeholder {
        color: transparent;
      }

      .input-group input::-moz-placeholder {
        color: transparent;
      }

      .input-group input::placeholder {
        color: transparent;
      }

      .input-group input:not(:placeholder-shown) {
        padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
        padding-bottom: calc(var(--input-padding-y) / 3);
      }

      .input-group input:not(:placeholder-shown)~label {
        padding-top: calc(var(--input-padding-y) / 3);
        padding-bottom: calc(var(--input-padding-y) / 3);
        font-size: 12px;
        color: #777;
      }

      /* Fallback for Edge
      -------------------------------------------------- */

      @supports (-ms-ime-align: auto) {
        .form-label-group>label {
          display: none;
        }
        .form-label-group input::-ms-input-placeholder {
          color: #777;
        }

        .input-group>label {
          display: none;
        }
        .input-group input::-ms-input-placeholder {
          color: #777;
        }
      }

      /* Fallback for IE
      -------------------------------------------------- */

      @media all and (-ms-high-contrast: none),
      (-ms-high-contrast: active) {
        .form-label-group>label {
          display: none;
        }
        .form-label-group input:-ms-input-placeholder {
          color: #777;
        }

        .input-group>label {
          display: none;
        }
        .input-group input:-ms-input-placeholder {
          color: #777;
        }
      }
    </style>

    

  </head>
  <body onload="document.login.username.focus();">

    <div class="container-fluid">
      <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        <div class="col-md-8 col-lg-6">
          <div class="login d-flex align-items-center py-5">
            <div class="container">
              <div class="row">
                <div class="col-md-9 col-lg-8 mx-auto">
                  <h3 class="login-heading mb-4">帝国网站管理系统管理后台</h3>
                  <form name="login" id="login" method="post" action="ecmsadmin.php" onsubmit="return CheckLogin(document.login);" autocomplete="off">
                    <input type="hidden" name="enews" value="login">
                    <input name="eposttime" type="hidden" id="eposttime" value="0">
                    <div class="form-label-group">
                      <input name="username" type="text" id="inputUsername" class="form-control" placeholder="用户名" required autofocus>
                      <label for="inputUsername">用户名</label>
                    </div>

                    <div class="form-label-group">
                      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="密&nbsp; &nbsp;码" required>
                      <label for="inputPassword">密&nbsp; &nbsp;码</label>
                    </div>

                    

                    <?php
                    if($ecms_config['esafe']['loginauth'])
                    {
                    ?>
                    <div class="form-label-group">
                      <input name="loginauth" type="password" id="loginauth" class="form-control" placeholder="认证码" required>
                      <label for="loginauth">认证码</label>
                    </div>
                    <?php
                    }
                    ?>

                    <div class="input-group">
                      <select name="equestion" id="equestion" class="custom-select" onchange="if(this.options[this.selectedIndex].value==0){showanswer.style.display='none';}else{showanswer.style.display='';}">
                        <option value="0">无安全提问</option>
                        <option value="1">母亲的名字</option>
                        <option value="2">爷爷的名字</option>
                        <option value="3">父亲出生的城市</option>
                        <option value="4">您其中一位老师的名字</option>
                        <option value="5">您个人计算机的型号</option>
                        <option value="6">您最喜欢的餐馆名称</option>
                        <option value="7">驾驶执照的最后四位数字</option>
                      </select>
                    </div>

                    <div class="form-label-group" id="showanswer">
                      <input name="eanswer" type="text" id="eanswer" class="form-control" placeholder="答&nbsp; &nbsp;案">
                      <label for="eanswer">答&nbsp; &nbsp;案</label>
                    </div>

                    <?php
                    if(empty($public_r['adminloginkey']))
                    {
                    ?>
                    <div class="input-group">
                      <input name="key" type="text" id="key" class="form-control" placeholder="验证码" required>
                      <div class="input-group-append">
                        <span id="checkkeyshowkey" class="input-group-text"><a href="#EmpireCMS" onclick="edoshowkey('checkkeyshowkey','checkkey');" title="点击显示验证码">点击显示</a></span>
                      </div>
                      <label for="key" style="width: 50%">验证码</label>
                    </div>
                    <?php
                    }
                    ?>

                    <input name="empirecmskey1" type="hidden" id="empirecmskey1" value="<?php echo $empirecmskey1;?>">
                    <input name="empirecmskey2" type="hidden" id="empirecmskey2" value="<?php echo $empirecmskey2;?>">
                    <input name="empirecmskey3" type="hidden" id="empirecmskey3" value="<?php echo $empirecmskey3;?>">
                    <input name="empirecmskey4" type="hidden" id="empirecmskey4" value="<?php echo $empirecmskey4;?>">
                    <input name="empirecmskey5" type="hidden" id="empirecmskey5" value="<?php echo $empirecmskey5;?>">

                    <div class="admin-window mb-3 ml-4">
                      <label class="admin-window-label mr-3">窗&nbsp; &nbsp;口</label>
                      <input type="radio" name="adminwindow" value="0" checked> 正常 
                      <input type="radio" name="adminwindow" value="1"> 全屏
                    </div>
                    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">登&nbsp; &nbsp;录</button>
                    <div class="text-center">
                      Powered by <a href="http://www.phome.net" target="_blank"><strong>EmpireCMS</strong></a> <strong class="text-danger">7.5</strong> &copy; 2002-2018 <a href="http://www.digod.com" target="_blank">EmpireSoft</a> Inc.
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
      if(self!=top)
      {
        parent.location.href='index.php';
      }
      function CheckLogin(obj){
        if(obj.username.value=='')
        {
          alert('请输入用户名');
          obj.username.focus();
          return false;
        }
        if(obj.password.value=='')
        {
          alert('请输入登录密码');
          obj.password.focus();
          return false;
        }
        if(obj.loginauth!=null)
        {
          if(obj.loginauth.value=='')
          {
            alert('请输入认证码');
            obj.loginauth.focus();
            return false;
          }
        }
        if(obj.key!=null)
        {
          if(obj.key.value=='')
          {
            alert('请输入验证码');
            obj.key.focus();
            return false;
          }
        }
        
        return true;
      }

      function edoshowkey(showid,vname){
        document.getElementById(showid).innerHTML='<img src="ShowKey.php?v='+vname+'&t='+Math.random()+'" name="'+vname+'KeyImg" id="'+vname+'KeyImg" align="bottom" onclick=edoshowkey("'+showid+'","'+vname+'") title="看不清楚,点击刷新">';
      }
      
      if(document.login.equestion.value==0) {
        showanswer.style.display='none';
      }
    </script>
  </body>
</html>
