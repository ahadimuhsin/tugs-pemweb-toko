<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Free Home Shoppe Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/startstop-slider.js"></script>
</head>
<body>
  <div class="wrap">
	<div class="header">
		<div class="headertop_desc">
			<div class="call">
				 <p><span>Need help?</span> call us <span class="number">1-22-3456789</span></span></p>
			</div>
			<div class="account_desc">
        <?php
        session_start();
        include("koneksi.php");
        if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
          $sesi = $_SESSION['user'];
          $result   = mysqli_query($Koneksi, "select saldo from user where user='$sesi'");
          $row      = mysqli_fetch_array($result);
          $saldo = $row['saldo'];

     echo ('selamat datang, '.$sesi);
     echo "<a href='logout.php'> <button type='button' class='btn btn-default btn-sm'>
          <span class='glyphicon glyphicon-log-out'></span> Log out
        </button> </a>
        <br>
        Saldo = $saldo";

      }
      else {
        echo "<ul>
					<li><a href='register.php'>Register</a></li>
					<li><a href='login.php'>Login</a></li>
				</ul>";
      }
         ?>


			</div>
			<div class="clear"></div>
		</div>
		<div class="header_top">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt="" /></a>
			</div>
			  <div class="cart">
			  	   <p>Welcome to our Online Store! <span>Cart:</span><div id="dd" class="wrapper-dropdown-2"> 0 item(s) - $0.00
			  	   	<ul class="dropdown">
							<li>you have no items in your Shopping cart</li>
					</ul></div></p>
			  </div>
			  <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		</script>
	 <div class="clear"></div>
  </div>
	<div class="header_bottom">
	     	<div class="menu">
	     		<ul>
			    	<li class="active"><a href="index.php">Home</a></li>
			    	<li><a href="topup.php">Top Up</a></li>
            <li><a href="toko.php">Toko</a></li>
			    	<li><a href="contact.php">Contact Us</a></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	     	<div class="search_box">
	     		<form>
	     			<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
	     		</form>
	     	</div>
	     	<div class="clear"></div>
	     </div>
	<div class="header_slide">
			<div class="header_bottom_left">
				<div class="categories">
				  <ul>
				  	<h3>Categories</h3>
            <?php
            include("koneksi.php");
    				$result   = mysqli_query($Koneksi, "select DISTINCT kategori FROM barang ");
    				if (!$result) {
        		die(mysqli_error($Koneksi));
    				}
    				else {
    					$row_cnt = $result->num_rows;
    					if ($row_cnt > 0){
    						$count = 0;
    						while ($row = $result->fetch_assoc()){

    			           echo "<li><a href='kategori.php?kategori={$row['kategori']}'><h2>{$row['kategori']}</h2></a></li>";
    						}
    					}

    			}
            ?>

				  </ul>
				</div>
	  	     </div>
					 <div class="header_bottom_right">
					 	 <div class="slider">
							 <div id="slider">
			                    <div id="mover">
			                    	<div id="slide-1" class="slide">
									 <div class="slider-img">
									    <img src="images/slide-1-image.png" alt="learn more" />
									  </div>
						             	<div class="slider-text">
		                                 <h1>Clearance<br><span>SALE</span></h1>
		                                 <h2>UPTo 20% OFF</h2>
									   <div class="features_list">
									   	<h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply dummy text</h4>
							            </div>

					                   </div>
									  <div class="clear"></div>
				                  </div>
						             	<div class="slide">
						             		<div class="slider-text">
		                                 <h1>Clearance<br><span>SALE</span></h1>
		                                 <h2>UPTo 40% OFF</h2>
									   <div class="features_list">
									   	<h4>Get to Know More About Our Memorable Services</h4>
							            </div>

					                   </div>
						             	 <div class="slider-img">

									  </div>
									  <div class="clear"></div>
				                  </div>
				                  <div class="slide">
					                  <div class="slider-img">

									  </div>
									  <div class="slider-text">
		                                 <h1>Clearance<br><span>SALE</span></h1>
		                                 <h2>UPTo 10% OFF</h2>
									   <div class="features_list">
									   	<h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply dummy text</h4>
							            </div>

					                   </div>
									  <div class="clear"></div>
				                  </div>
			                 </div>
		                </div>
					 <div class="clear"></div>
		         </div>
		      </div>
		   <div class="clear"></div>
		</div>
   </div>
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>New Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="allproduct.php">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">

          <?php
          include("koneksi.php");

  				$result   = mysqli_query($Koneksi, "select * FROM barang LIMIT 4");
  				if (!$result) {
      		die(mysqli_error($Koneksi));
  				}
  				else {
  					$row_cnt = $result->num_rows;
  					if ($row_cnt > 0){
  						$count = 0;
  						while ($row = $result->fetch_assoc()){
  			   		echo "<div class='grid_1_of_4 images_1_of_4'>
      					 <a href='preview.php'><img src='' alt='' /></a>
      					 <h2>{$row['nama']}</h2>
      					<div class='price-details'>
      				       <div class='price-number'>
      							<p><span class='rupees'>Rp. {$row['harga']}</span></p>
      					    </div>
      					       		<div class='add-cart'>
      									<h4><a href='beli.php?id={$row['id']}'>Add to Cart</a></h4>
      							     </div>
      							 <div class='clear'></div>
      					</div>
                </div>";
  						}
  					}

  			}


          ?>


				</div>




    </div>
 </div>
</div>
   <div class="footer">
        <div class="copy_right">
				<p>Company Name © All rights Reseverd</p>
		   </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>
