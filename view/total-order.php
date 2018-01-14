
<?php
session_start();
if (!isset($_SESSION['admin'])) {
	die('VUI LÒNG ĐĂNG NHẬP TÀI KHOẢN QUẢN LÝ <a href="../view/admin.html"> ĐĂNG NHẬP</a>');


}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tihi Cosmetics online!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="../themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="../themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="../themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="../themes/less/bootshop.less">
	<script src="../../themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="../themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="../themes/css/base.css" rel="stylesheet" media="screen"/>

    <!-- <link href="../themes/css/mainBody.css" rel="stylesheet" media="screen"/> -->
<!-- Bootstrap style responsive -->	
	<link href="../themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="../themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="../themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="../themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">

</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner bar">
    <a class="brand" href="../index.html"><img src="../logo/logo3_edited.png" style="width: 150px" alt="Bootsshop"/></a>
		
    <ul id="topMenu" class="nav pull-right">
	 		<?php

	//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
	//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
			if (!isset($_SESSION['admin'])) {
				echo '<a href="../#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Đăng nhập</span></a>';
			} else {
				echo '<a <span class="btn btn-large btn-success">Hello: admin</a>';
			}

	?>
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Login Block</h3>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm">
			  <div class="control-group">								
				<input type="text" id="UserName" placeholder="User Name">
			  </div>
			  <div class="control-group">
				<input type="password" id="inputPassword" placeholder="Password">
			  </div>
			  <div class="control-group">
				<label class="checkbox">
				<input type="checkbox"> Remember me
				</label>
			  </div>
				
			<button type="submit" class="btn btn-success">Sign in</button>
			</form>	
		  </div>
	</div>
	</li>
    </ul>
    <form class="form-inline navbar-search pull-right" method="post" action="products.html" >
		<input id="srchFld" class="srchTxt" type="text" />
		   
		  <button type="submit" id="submitButton" class="btn btn-primary">Tìm kiếm</button>
    </form>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="../product_summary.html"><img src="../themes/images/ico-cart.png" alt="cart">Giỏ hàng <span class="badge badge-warning pull-right">399.000đ</span></a></div>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a> Son NYD</a>
				<ul>
				<li><a class="active" href="../products.html"><i class="icon-chevron-right"></i>Son cao cấp Lovely Kiss </a></li>
				<li><a href="../products.html"><i class="icon-chevron-right"></i>Son kem Lovely Kiss</a></li>
				<li><a href="../products.html"><i class="icon-chevron-right"></i>Son dưỡng</a></li>
				</ul>
			</li>
			<li class="subMenu"><a> Cám gạo </a>
				<ul>
				<li><a class="active" href="../products.html"><i class="icon-chevron-right"></i>Cám gạo trân châu hoa hồng </a></li>
				<li><a href="../products.html"><i class="icon-chevron-right"></i>Cám gạo đất sét Nhật</a></li>
				<li><a href="../products.html"><i class="icon-chevron-right"></i>Cám gạo Trà xanh</a></li>
				</ul>
			</li>
												
		</ul>
		<br/>
		  
	</div>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="../index.html">Trang chủ</a> <span class="divider">/</span></li>
		<li class="active"> GIỎ HÀNG</li>
    </ul>
	<h3>  GIỎ HÀNG [ <small>3 SẢN PHẨM</small>]<a href="../products.html" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Tiếp tục mua hàng</a></h3>	
	<hr class="soft"/>
	<!-- <table class="table table-bordered" >
		<tr><th>  ĐĂNG KÝ </th></tr>
		 <tr> 
		 <td>
			<form class="form-horizontal">
				<div class="control-group">
				  <label class="control-label" for="inputUsername">Tên</label>
				  <div class="controls">
					<input type="text" id="inputUsername" placeholder="Username">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="inputPassword1">Mật khẩu</label>
				  <div class="controls">
					<input type="password" id="inputPassword1" placeholder="Password">
				  </div>
				</div>
				<div class="control-group">
				  <div class="controls">
					<button type="submit" class="btn">Đăng ký</button>HOẶC <a href="../register.html" class="btn">ĐĂNG NHẬP</a>
				  </div>
				</div>
				<div class="control-group">
					<div class="controls">
					  <a href="../forgetpass.html" style="text-decoration:underline">Quên mật khẩu ?</a>
					</div>
				</div>
			</form>
		  </td>
		  </tr>
	</table> -->		
<?php
include '../controller/db.php';
$sql = 'SELECT ma_don_hang, count(id_product) as so_san_pham, sum(so_luong) as so_luong, sum(tong_tien) as tong_tien  FROM don_hang GROUP BY ma_don_hang';
$req = $conn->query($sql);
if ($req->num_rows > 0) {
?>
<table class="table table-bordered">
              <thead>
                <tr>
                  <th>Mã đơn hàng</th>
                  <th>Số sản phẩm</th>
                  <th>số lượng</th>
                  <th>Tổng Tiền</th>
                  <th>chi tiết đơn hàng</th>
				</tr>
              </thead>
              <tbody>
<?php

	while ($row = $req->fetch_assoc()){

?>
	
                <tr>
                  <td><?php echo $row['ma_don_hang'];  ?> </td>
                  <td><?php echo $row['so_san_pham']; ?></td>
				  <td><?php echo $row['so_luong']; ?></td>
                  <td><?php echo $row['tong_tien']; ?></td>
                  <td><<a href="order.php" >chi tiết</a></td>
                  </tr>
                  <?php 
                  	}
                  ?>
				</tbody>
            </table>
		
		
<?php
} else {
	echo 'KHÔNG CÓ ĐƠN HÀNG NÀO!';

}
?>
          		
	<a href="../index.html" class="btn btn-large"><i class="icon-arrow-left"></i> Tiếp tục mua hàng </a>
	<a href="../login.html" class="btn btn-large pull-right">THANH TOÁN <i class="icon-arrow-right"></i></a>
	
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	<div  id="footerSection"">
	<div class="container">
		<div class="row">
			
			<div class="span2" center>
				<h5>TIHICOSMETICS</h5>
				<a href="../index.html">GIỚI THIỆU</a>  
				<a href="../contact.html">LIÊN HỆ</a> 
				<a href="../register.html">ĐĂNG KÝ</a> 
					
			 </div>
			 <div class="span2" center>
				<h5>TÀI KHOẢN</h5>
				<a href="../login.html">TÀI KHOẢN CỦA BẠN</a>
				<a href="../login.html">THÔNG TIN CÁ NHÂN</a> 
				<a href="../login.html">ĐỊA CHỈ</a> 
			 </div>
			  
			<div class="span3">
				<h5>SẢN PHẨM</h5>
				<a href="#">SẢN PHẨM MỚI</a> 
				<a href="#">SẢN PHẨM BÁN CHẠY</a>  
				<a href="#">NHÀ CUNG CẤP</a> 
			 </div>
			<div id="socialMedia" class="span3 pull-right">
				<h5>KẾT NỐI </h5>
				<a href="#"><img width="60" height="60" src="../themes/images/facebook.png" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="../themes/images/twitter.png" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="../themes/images/youtube.png" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>
		<p class="pull-right">&copy; TihiCosmetics</p>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="../themes/js/jquery.js" type="text/javascript"></script>
	<script src="../themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="../themes/js/bootshop.js"></script>
    <script src="../themes/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="../themes/switch/themeswitch.css" type="text/css" media="screen" />
<script src="../themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
	<div id="themeContainer">
	<div id="hideme" class="themeTitle">Style Selector</div>
	<div class="themeName">Oregional Skin</div>
	<div class="images style">
	<a href="../themes/css/#" name="bootshop"><img src="../themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
	<a href="../themes/css/#" name="businessltd"><img src="../themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
	</div>
	<div class="themeName">Bootswatch Skins (11)</div>
	<div class="images style">
		<a href="../themes/css/#" name="amelia" title="Amelia"><img src="../themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
		<a href="../themes/css/#" name="spruce" title="Spruce"><img src="../themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
		<a href="../themes/css/#" name="superhero" title="Superhero"><img src="../themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
		<a href="../themes/css/#" name="cyborg"><img src="../themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
		<a href="../themes/css/#" name="cerulean"><img src="../themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
		<a href="../themes/css/#" name="journal"><img src="../themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
		<a href="../themes/css/#" name="readable"><img src="../themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>	
		<a href="../themes/css/#" name="simplex"><img src="../themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
		<a href="../themes/css/#" name="slate"><img src="../themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
		<a href="../themes/css/#" name="spacelab"><img src="../themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
		<a href="../themes/css/#" name="united"><img src="../themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
		<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
	</div>
	<div class="themeName">Background Patterns </div>
	<div class="images patterns">
		<a href="../themes/css/#" name="pattern1"><img src="../themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
		<a href="../themes/css/#" name="pattern2"><img src="../themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
		<a href="../themes/css/#" name="pattern3"><img src="../themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
		<a href="../themes/css/#" name="pattern4"><img src="../themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
		<a href="../themes/css/#" name="pattern5"><img src="../themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
		<a href="../themes/css/#" name="pattern6"><img src="../themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
		<a href="../themes/css/#" name="pattern7"><img src="../themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
		<a href="../themes/css/#" name="pattern8"><img src="../themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
		<a href="../themes/css/#" name="pattern9"><img src="../themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
		<a href="../themes/css/#" name="pattern10"><img src="../themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>
		
		<a href="../themes/css/#" name="pattern11"><img src="../themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
		<a href="../themes/css/#" name="pattern12"><img src="../themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
		<a href="../themes/css/#" name="pattern13"><img src="../themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
		<a href="../themes/css/#" name="pattern14"><img src="../themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
		<a href="../themes/css/#" name="pattern15"><img src="../themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>
		
		<a href="../themes/css/#" name="pattern16"><img src="../themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
		<a href="../themes/css/#" name="pattern17"><img src="../themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
		<a href="../themes/css/#" name="pattern18"><img src="../themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
		<a href="../themes/css/#" name="pattern19"><img src="../themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
		<a href="../themes/css/#" name="pattern20"><img src="../../themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>
		 
	</div>
	</div>
</div>

</body>
</html>