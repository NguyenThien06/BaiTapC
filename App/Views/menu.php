    <div class="bg0 m-t-23 p-b-140" style="margin-top: 100px;">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<h1><?=$title?></h1>
				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Filter
					</div>

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div>
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
					</div>	
				</div>

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col1 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Sort By
							</div>
							
							<ul>
								<li class="p-b-6">
									<a href="<?=\App\Helpers\Helper::getFillter()?>" class="filter-link stext-106 trans-04">
										Default
									</a>
								</li>

								<li class="p-b-6">
									<a href="<?=\App\Helpers\Helper::getFillter(['price' => 'asc'])?>" class="filter-link stext-106 trans-04">
										Price: Low to High
									</a>
								</li>

								<li class="p-b-6">
									<a href="<?=\App\Helpers\Helper::getFillter(['price' => 'desc'])?>" class="filter-link stext-106 trans-04">
										Price: High to Low
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Price
							</div>

							<ul>
								<li class="p-b-6">
									<a href="?ran" class="filter-link stext-106 trans-04 filter-link-active">
										All
									</a>
								</li>

								<li class="p-b-6">
									<a href="<?=\App\Helpers\Helper::getFillter(['range' => '0-100000'])?>" class="filter-link stext-106 trans-04">
										0 - 100.000
									</a>
								</li>

								<li class="p-b-6">
									<a href="<?=\App\Helpers\Helper::getFillter(['range' => '100000-500000'])?>" class="filter-link stext-106 trans-04">
                                        100.000 - 500.000
									</a>
								</li>

								<li class="p-b-6">
									<a href="<?=\App\Helpers\Helper::getFillter(['range' => '500000-1000000'])?>" class="filter-link stext-106 trans-04">
                                        500.000 - 1.000.000
									</a>
								</li>

                                <li class="p-b-6">
									<a href="<?=\App\Helpers\Helper::getFillter(['range' => '1000000-++'])?>" class="filter-link stext-106 trans-04">
                                        1.000.000 ++
									</a>
								</li>
							</ul>
						</div>

					</div>
				</div>
			</div>

            <?php include 'product/list.php'; ?>

            <div><?=page($sumPage, $page, '')?></div>
		</div>
	</div>