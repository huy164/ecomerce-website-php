<?php
$product_suffle = $product->getData();
//request post method 
// https://stackoverflow.com/questions/50705889/what-does-this-serverrequest-method-post-do/50706079
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['new-phones-submit'])){
    $Cart->addToCart($_POST['item_id'], $_POST['user_id']); //$Cart is initialized in function.php
    }
}
?>
?>
<section id="new-phones">
        <div class="container">
            <h4 class="font-rubik font-size-20">New Phones</h4>
            <hr>

            <!-- owl carousel -->
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
                        <form method="post">
                                <!-- input field store value of item -->
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>">
                                <!-- $item doesn't contain user_id -->
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="new-phones-submit" class="btn btn-warning font-size-12">
                                    add to card
                                </button>
                            </form>
                    </div>
                </div>
            </div>
            <?php } ?>
            </div>
            <!-- !owl carousel -->

        </div>
    </section>