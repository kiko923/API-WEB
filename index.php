
<!DOCTYPE html>
<html>
<head>
<title data-react-helmet="true">KIKO-API接口</title>
<meta charset="utf-8">

<link rel="stylesheet" href="css/api.css">
<style>
    /* 新增样式 */
    .footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      text-align: center;
      padding: 10px;
      background-color: #fff;
    }
    .footer a {
        text-decoration: none;
        color: black;
    }
  </style>
</head>
<body>
<div class="container">
<div class="error">


<h2>KIKO-API</h2>
<br>
<img style="max-width:100%;overflow:hidden;" src="../images/gzhsaoma.png" alt="">

<b><p>本接口由KIKO提供,商务合作请联系V:617636 备注来意</p></b>

</div>

<div class="stack-container">
<div class="card-container">
<div class="perspec" style="--spreaddist: 125px; --scaledist: .75; --vertdist: -25px;">
<div class="card">
<div class="writing">
<div class="topbar">
<div class="red"></div>
<div class="yellow"></div>
<div class="green"></div>
</div>
<div class="code">
<ul>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="card-container">
<div class="perspec" style="--spreaddist: 100px; --scaledist: .8; --vertdist: -20px;">
<div class="card">
<div class="writing">
<div class="topbar">
<div class="red"></div>
<div class="yellow"></div>
<div class="green"></div>
</div>
<div class="code">
<ul>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="card-container">
<div class="perspec" style="--spreaddist:75px; --scaledist: .85; --vertdist: -15px;">
<div class="card">
<div class="writing">
<div class="topbar">
<div class="red"></div>
<div class="yellow"></div>
<div class="green"></div>
</div>
<div class="code">
<ul>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="card-container">
<div class="perspec" style="--spreaddist: 50px; --scaledist: .9; --vertdist: -10px;">
<div class="card">
<div class="writing">
<div class="topbar">
<div class="red"></div>
<div class="yellow"></div>
<div class="green"></div>
</div>
<div class="code">
<ul>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="card-container">
<div class="perspec" style="--spreaddist: 25px; --scaledist: .95; --vertdist: -5px;">
<div class="card">
<div class="writing">
<div class="topbar">
<div class="red"></div>
<div class="yellow"></div>
<div class="green"></div>
</div>
<div class="code">
<ul>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="card-container">
<div class="perspec" style="--spreaddist: 0px; --scaledist: 1; --vertdist: 0px;">
<div class="card">
<div class="writing">
<div class="topbar">
<div class="red"></div>
<div class="yellow"></div>
<div class="green"></div>
</div>
<div class="code">
<ul>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="footer">
<div>
<span>Copyright © <script>
                    document.write(new Date().getFullYear());
                  </script> 永至网络科技工作室 All Rights Reserved. </span>
</div>
<span id="countT">共调用*******次</span>
<p></p>
</div>
</body>
<script src="js/api.js"></script>
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/jquery_lazyload/1.9.7/jquery.lazyload.min.js"></script>
<script>
        // lazyload
    window.onload = function() {
        $(function() {
            //增加访问次数
            $.getJSON("../tongji/?do=view&typeId=api",function(data,status){
            
            });
            
            //获取总次数
            $.getJSON("../tongji/?do=count",function(data,status){
                $('#countT').html("共调用"+ data.data.allCount + "次");
            });
        });
    }
    </script>
</html>