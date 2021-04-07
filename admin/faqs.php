<?php
include("header.php");
?>

<?php
include("slider.php");
?>
	<!-- FAQ-help-page -->
	<div class="faqs-w3l">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Faqs
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<h3 class="w3-head">Frequently asked questions</h3>
			<div class="faq-w3agile">
				<ul class="faq">
					<li class="item1">
						<a href="#" title="click here">How do I place an order?</a>
						<ul>
							<li class="subitem1">
								<p> In order to place an order, you just need to visit our web address www.vegbharat.com You may call 7070095108 in Ranchi . After you place your order online you will receive a phone call from our executive and he/she will help you will all the details you require.</p>
							</li>
						</ul>
					</li>
					<li class="item2">
						<a href="#" title="click here"> How do I pay?</a>
						<ul>
							<li class="subitem1">
								<p> Cash on Deli very (CoD) and through PayTm QR  Code</p>
							</li>
						</ul>
					</li>
					<li class="item3">
						<a href="#" title="click here">Do I pay extra for delivery? Are there any other hidden charges?</a>
						<ul>
							<li class="subitem1">
								<p>No, you don’t pay any extra for home delivery.  VEGBHARAT  provides same day delivery that too free of cost. There are no hidden charges as well. Infact, our deliveries come in cotton/ woven bags which are totally hygienic and free of cost.</p>
							</li>
						</ul>
					</li>
					<li class="item4">
						<a href="#" title="click here"> What if I am not satisfied with the quality of the fruits & vegetables delivered to me?</a>
						<ul>
							<li class="subitem1">
								<p>A Despite our best efforts if you don’t get assured with the quality of our produce we offer immediate replacement of those products because our goal is a satisfied customer. Please read our terms and Conditions for more information on replacements./p>
							</li>
						</ul>
					</li>
					<li class="item5">
						<a href="#" title="click here">Will the vegetables be fresh? How do you assure quality?</a>
						<ul>
							<li class="subitem1">
								<p>Quality is our mandate. We never compromise on quality. Vegetables and fruits are purchased from the mandi after you place your order with us. After the purchase, the products are sorted, graded, weighed, hygienically packed, and then delivered to your home. We do not deliver stale products from storage. We assure quality of each and every item we deliver.</p>
							</li>
						</ul>
					</li>
					<li class="item6">
						<a href="#" title="click here">I may not be available at home all the time. Can you deliver my order at a time convenient to me?</a>
						<ul>
							<li class="subitem1">
								<p>Generally we deliver your order on the same day in around 2-3 hours after the order is placed. However, in case you are not at home at the delivery time, just let us know your preferred time of delivery, and we will be more than happy to serve you, at your convenience./p>
							</li>
						</ul>
					</li>
					<li class="item7">
						<a href="#" title="click here">Do you take bulk orders for functions and parties? Will I get discounts on bulk orders?</a>
						<ul>
							<li class="subitem1">
								<p>AYes, we do take bulk orders. You can get your bulk orders delivered at any time of the day you like. Yes, we do provide discounts on bulk purchases from us. In case you wish to place a bulk order with us, just let us know your requirements and we work out special rates for you accordingly. We request you to place any bulk order atleast 24 hours in advance of the delivery time.</p>
							</li>
						</ul>
					</li>
										
				</ul>
			</div>
		</div>
	</div>
	<!-- //FAQ-help-page -->

	
    <?php
	include("footer.php");
	
	?>
	<!-- //copyright -->

	<!-- js-files -->
	<!-- jquery -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //jquery -->

	<!-- popup modal (for signin & signup)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- Large modal -->
	<!-- <script>
		$('#').modal('show');
	</script> -->
	<!-- //popup modal (for signin & signup)-->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		paypalm.minicartk.render(); //use only unique class names other than paypal1.minicart1.Also Replace same class name in css and minicart.min.js

		paypalm.minicartk.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- script for tabs -->
	<script>
		$(function () {

			var menu_ul = $('.faq > li > ul'),
				menu_a = $('.faq > li > a');

			menu_ul.hide();

			menu_a.click(function (e) {
				e.preventDefault();
				if (!$(this).hasClass('active')) {
					menu_a.removeClass('active');
					menu_ul.filter(':visible').slideUp('normal');
					$(this).addClass('active').next().stop(true, true).slideDown('normal');
				} else {
					$(this).removeClass('active');
					$(this).next().stop(true, true).slideUp('normal');
				}
			});

		});
	</script>
	<!-- script for tabs -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->

</body>

</html>