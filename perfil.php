<?php
			session_start();
require("admin/config.php");
  error_reporting(0);
  session_start();

  if(!isset($_SESSION['nome'])){
    header('location:login.php');
}
  
  //SAIR
  if(isset($_GET['sair'])){
    session_destroy();
    unlink($_SESSION['nome']);
    header('location:login.php');
  }
	
if (!isset($_SESSION['carrinho'])) {
	$_SESSION['carrinho'] = array();
}

if (isset($_GET['acao'])) {
	$id = $_GET['id'];
	if ($_GET['acao'] == 'add') {
		if (!isset($_SESSION['carrinho'][$id])) {
			$_SESSION['carrinho'][$id] = 1;
		}else{
			$_SESSION['carrinho'][$id] += 1;
		}
	}
}
if(isset($_GET['acao'])){
		$id = $_GET['id'];
		if($_GET['acao'] == "del"){
			unset($_SESSION['carrinho'][$id]);
		}
		}

	
   $sql = "SELECT * FROM clientes WHERE nome = '".$_SESSION['nome']."'";
  $query = mysqli_query($conexao, $sql);

  while ($dadosUser = mysqli_fetch_assoc($query)) {
    $nomecli = $dadosUser['nome'];
    $email = $dadosUser['email'];
    $celular = $dadosUser['celular'];
    $imgUser = $dadosUser['arquivo'];
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
					Frete gratis para compras acima de R$100,00 reais!
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						fashe@example.com
					</span>

					<div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option>BRS</option>
							<option>USD</option>
							<option>EUR</option>
						</select>
					</div>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.html" class="logo">
					<img src="images/icons/logo.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="index.php">Home</a>
								<ul class="sub_menu">
									<li><a href="index.html">Homepage V1</a></li>
									<li><a href="home-02.html">Homepage V2</a></li>
									<li><a href="home-03.html">Homepage V3</a></li>
								</ul>
							</li>

							<li>
								<a href="product.php">Shop</a>
							</li>

							<li class="sale-noti">
								<a href="product.php">Sale</a>
							</li>

							<li>
								<a href="cart.php">Features</a>
							</li>

							<li>
								<a href="contact.php">Contact</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
				
				<?php 
				echo '<a href="perfil.php">'.$nomecli.'</a>
                <img style="width: 27px;height: 27px;" src="images/cli/'.$imgUser.'" class="header-icon1" alt="ICON">
                <a href="?sair" class="btn btn-default btn-flat">Sair</a>
                ';
				?>	
						


					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti"><?php echo count($_SESSION['carrinho']);
						error_reporting(0);
						 ?></span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<table class="table-shopping-cart">
                        <?php 

                            foreach ($_SESSION['carrinho'] as $id => $qnt) {

                                $sql_car = "SELECT * FROM cad_produto WHERE id = '$id'";
                                $query_car = mysqli_query($conexao, $sql_car);
                                $prods = mysqli_fetch_assoc($query_car);


                                        echo '<li class="header-cart-item">
                                            <div class="header-cart-item-img">
                                                <img src="images/img/'.$prods['arquivo'].'" alt="IMG">
                                            </div>
												<div class="header-cart-item-txt">
                                                <a href="#" class="header-cart-item-name">
                                                    '.$prods['produto'].'
                                                </a>

                                                <span class="header-cart-item-info">
                                                    '.$qnt.' x R$ '.number_format($prods['preco'], 2, ',', '.').'
                                                </span>
                                            </div>
                                        </li>';
                                        $totalC += $qnt * $prods['preco'];
                                    }
                                    
                                        ?>
							</ul>
						</table>

							<div class="header-cart-total">
								Total: <?php echo "R$".number_format($totalC, 2, ',', '.'); ?> 
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Frete gratis para compras acima de R$100,00 reais!
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								fashe@example.com
							</span>

							<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>BRS</option>
									<option>USD</option>
									<option>EUR</option>
								</select>
							</div>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="index.html">Home</a>
						<ul class="sub-menu">
							<li><a href="index.html">Homepage V1</a></li>
							<li><a href="home-02.html">Homepage V2</a></li>
							<li><a href="home-03.html">Homepage V3</a></li>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">Shop</a>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">Sale</a>
					</li>

					<li class="item-menu-mobile">
						<a href="blog.html">Blog</a>
					</li>

					<li class="item-menu-mobile">
						<a href="about.html">About</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
      </div>
    </div>
<?php  
echo '
      <img alt="" width="230" height="230" class="avatar width-full rounded-2" src="images/cli/'.$imgUser.'"></a>
      ';
?>
      
<div class="vcard-names-container py-3 js-sticky js-user-profile-sticky-fields ">
    <span class="p-name vcard-fullname d-block overflow-hidden" itemprop="name">Nome do Cliente: <?php echo $nomecli;  ?></span>

</div>

  <div class="vcard-names-container py-3 js-sticky js-user-profile-sticky-fields ">
    <span class="p-name vcard-fullname d-block overflow-hidden" itemprop="name">Nome do Cliente: <?php echo $email;  ?></span>

</div>


  <div class="vcard-names-container py-3 js-sticky js-user-profile-sticky-fields ">
    <span class="p-name vcard-fullname d-block overflow-hidden" itemprop="name">Nº Celular do Cliente: <?php echo $celular;  ?></span>

</div>

</div>

<!-- '"` --><!-- </textarea></xmp> --></option></form><form class="d-none js-user-profile-bio-form mb-3" action="/my_bio" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="_method" value="put" /><input type="hidden" name="authenticity_token" value="PesrSLKqk1PEXsI6YDmz2n6FJrRtcT5roLm3GHqp64vDBf7kbvuVLC88iqzz8KkzR4haMjfmf5KO8Xb29aozRA==" />
  <p class="flash flash-error js-update-bio-error p-2 d-none">
  </p>
  <div class="js-length-limited-input-container">

</body>
</html>
