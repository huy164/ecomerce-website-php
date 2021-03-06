<?php
$product_suffle = $product->getData();
$brand = array_map(function ($pro) {
    return $pro['item_brand'];
}, $product_suffle);
$unique = array_unique($brand);
sort(array: $unique);
//request post method 
// https://stackoverflow.com/questions/50705889/what-does-this-serverrequest-method-post-do/50706079
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['special-price-submit'])){
    $Cart->addToCart($_POST['item_id'], $_POST['user_id']); //$Cart is initialized in function.php
    }
}
?>
<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size-20">Special Price</h4>
        <div id="filters" class="button-group text-right font-baloo font-size-16">
            <button class="btn is-checked" data-filter="*">All Brand</button>
            <?php
            array_map(
                function ($brand) {
                    printf('<button class="btn" data-filter=".%s">%s</button>', $brand, $brand);
                },
                $unique
            )
            ?>
        </div>

        <div class="grid">
            <!-- for loop to display -->
            <?php foreach ($product_suffle as $item) { ?>
                <div class="grid-item <?php echo $item['item_brand'] ?>  border">
                    <div class="item py-2" style="width: 200px">
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
                                <form method="post">
                                    <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>">
                                    <button type="submit" name="special-price-submit" class="btn btn-warning font-size-12">
                                        Add to Cart
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- end for loop -->
        </div>
    </div>
</section>