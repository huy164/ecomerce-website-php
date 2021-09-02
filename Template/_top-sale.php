<?php
$product_suffle = $product->getData();
shuffle($product_suffle); //suffle an array , it is not necessary

//request post method 
// https://stackoverflow.com/questions/50705889/what-does-this-serverrequest-method-post-do/50706079
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Cart->addToCart($_POST['item_id'], $_POST['user_id']); //$Cart is initialized in function.php

}
?>
<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Top sale</h4>
        <hr />
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_suffle as $item) { ?>
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="<?php printf('product.php?item_id=%s', $item['item_id']) ?>"><img src="<?php echo $item['item_image'] ?>" alt="product1" class="img-fluid" /></a>
                        <div class="text-center">
                            <h6><?php echo $item['item_name'] ?></h6>
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
                            <!-- <button class="btn btn-warning font-size-12">
                            add to card
                             </button> -->
                            <!-- created after function add_to_cart in Cart.php -->
                            <form method="post">
                                <!-- input field store value of item -->
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>">
                                <!-- $item doesn't contain user_id -->
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button class="btn btn-warning font-size-12">
                                    add to card
                                </button>
                            </form>
                            <!-- created after function add_to_cart in Cart.php -->
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>