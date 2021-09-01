<?php
$item_id=$_GET['item_id'];
foreach($product->getData() as $item):
    if($item['item_id']==$item_id):
?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo$item['item_image']?>" class="img-fluid" alt="product1">
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-warning form-control">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo$item['item_name']?></h5>
                <small>by <?php echo $item['item_brand']?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="font-rale font-size-12 pl-2">20,342 ratings | 1000+ answered</a>
                </div>
                <hr class="m-0">
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>M.R.P</td>
                        <td><strike>$<?php echo$item['item_price']+10?></strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Deal Price</td>
                        <td class="font-size-20 text-danger">$<?php echo$item['item_price']?></td>
                        <td><small>Inclusive of all taxes</small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>You Save</td>
                        <td class="font-size-20 text-danger">$10</td>
                    </tr>
                </table>
                <div id="policy">
                    <div class="d-flex font-rale">
                        <div>
                            <div class="font-size-20 my-3 color-second mr-5">
                                <span class="border p-3 rounded-pill"><i class="fas fa-retweet"></i></span>
                            </div>
                            <a href="#" class="font-size-12">10 days <br>Replacement</a>
                        </div>
                        <div>
                            <div class="font-size-20 my-3 color-second  mr-5">
                                <span class="border p-3 rounded-pill"><i class="fas fa-truck"></i></span>
                            </div>
                            <a href="#" class="font-size-12">Daily Tuition <br>Deliverd</a>
                        </div>
                        <div>
                            <div class="font-size-20 my-3 color-second mr-5 ">
                                <span class="border p-3 rounded-pill"><i class="fas fa-check-double"></i></span>
                            </div>
                            <a href="#" class="font-size-12">1 year <br>Warranty</a>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- order-details -->
                <div id="order-details" class="d-flex flex-column font-rale">
                    <small>Delivery by : Mar 29 - Apr 1</small>
                    <small>Sold by <a href="">Daily Electronics</a> (4.5 out of 5 | 18,198 ratings)</small>
                    <small><i class="fas fa-map-marker-alt"></i> Deliver to Customer - 424201</small>
                </div>
                <!-- order-details -->
                <div class="row">
                    <div class="col-6">
                        <!-- color -->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color:</h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>
                        <!-- !color -->
                    </div>
                    <div class="col-6">
                        <!-- product qty section -->
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Qty</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!-- !product qty section -->
                    </div>
                </div>

                <!-- size -->
                <div class="size my-3">
                    <h6 class="font-baloo">Size :</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">4GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">6GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">8GB RAM</button>
                        </div>
                    </div>
                </div>
                <!-- !size -->
            </div>
        </div>
    </div>
</section>
<?php
endif;
endforeach;
?>
