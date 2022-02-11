<div class="row isotope-grid">
    <?php
        if ($products->num_rows > 0) {
            while ($row = $products->fetch_assoc()) {
    ?>
    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
        <!-- Block2 -->
        <div class="block2">
            <div class="block2-pic hov-img0">
                <img src="<?=$row['file']?>" alt="<?=\Core\Helper::decodeSafe($row['name'])?>">

                <a onclick="showModelInfo(<?=$row['id']?>)" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                    Quick View
                </a>
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
                <div class="block2-txt-child1 flex-col-l ">
                    <a href="/san-pham/<?=\Core\Helper::slug($row['name'])?>-id<?=$row['id']?>.html" 
                        class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                        <?=\Core\Helper::decodeSafe($row['name'])?>
                    </a>

                    <span class="stext-105 cl3">
                        <?=\App\Helpers\Helper::price($row['price'], $row['price_sale'])?>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <?php
            }
        } 
    ?>
</div>