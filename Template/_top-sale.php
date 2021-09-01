<?php
$product_suffle = $product->getData();
?>
<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Top sale</h4>
        <hr />
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_suffle as $item){ ?>
            <div class="item py-2">
                <div class="product font-rale">
                    <a href="<?php printf('product.php?item_id=%s',$item['item_id'])?>"><img src="<?php echo $item ['item_image'] ?>" alt="product1" class="img-fluid" /></a>
                    <div class="text-center">
                        <h6><?php echo $item['item_name']?></h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span><?php echo $item['item_price'] ?></span>
                        </div>
                        <button class="btn btn-warning font-size-12">
                            add to card
                        </button>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>