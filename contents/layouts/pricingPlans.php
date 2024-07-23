<?php
    $pricing = mysqli_query($conn, "SELECT * FROM pricing");
    $rowPricce = mysqli_fetch_all($pricing, MYSQLI_ASSOC);
    $id = $row['id'];
    // var_dump($rowPricce);
    $selectPricing = mysqli_query($conn, "SELECT * FROM pricing WHERE id_intro= $id");                  
?>
<div class="bg-light" id="pricing">

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Pricing Plans</h1>
        <p class="lead">Choose a Pricing Plans</p>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <?php 
            if(mysqli_num_rows($pricing) > 0):
                foreach ($rowPricce as $prices):
            ?>
            <div class="col">
                <div class="<?=$prices['card_class']?>">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal"><?=$prices['pilihedisi']?></h4>
                    </div>
                    <div class="card-body">
                        <h3><?=$prices['header']?><span class="ms-3"><i class="bi bi-star-fill"></i></span></h3>
                        <h1 class="card-title pricing-card-title">RP.
                            <?=number_format($prices['harga'],2,".",",")."-"?><small class="text-muted">/
                                mo</small></h1>
                        <p><?=$prices['deskripsi']?></p>
                        <button type="button" class="<?=$prices['btn_class']?>">Sign up for free</button>
                    </div>
                </div>
            </div>
            <?php
            endforeach;
        else:
            echo "No data available";
        endif;
            ?>
        </div>
    </div>
</div>