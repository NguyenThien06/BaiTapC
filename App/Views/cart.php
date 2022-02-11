<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
				<?php 
					$sumTotalSidebar = 0;
					$productsCartSidebar = \App\Helpers\Helper::productsCart();
					if ($productsCartSidebar !== false && $productsCartSidebar->num_rows > 0) { 
                        while ($productCartSidebar = $productsCartSidebar->fetch_assoc()) {

                            $priceSidebar = $productCartSidebar['price_sale'] != 0 ? $productCartSidebar['price_sale'] : $productCartSidebar['price'];
                            $qtySidebar = isset($_SESSION['carts'][$productCartSidebar['id']]) ? $_SESSION['carts'][$productCartSidebar['id']] : 1;
                            $sumPriceSidebar = $priceSidebar * $qtySidebar;

                            $sumTotalSidebar += $sumPriceSidebar; 
				?>

						<li class="header-cart-item flex-w flex-t m-b-12">
							<div class="header-cart-item-img">
								<img src="<?=$productCartSidebar['file']?>" alt="IMG">
							</div>

							<div class="header-cart-item-txt p-t-8">
								<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								<?=$productCartSidebar['name']?>
								</a>

								<span class="header-cart-item-info">
									<?=number_format($sumPriceSidebar, 0, '', '.')?> (<?=$qtySidebar?>)
								</span>
							</div>
						</li>

					<?php } } ?>


				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: <?=number_format($sumTotalSidebar, 0, '', '.')?>
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="/carts" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
