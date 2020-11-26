<?php
$shopDetail = getShop($_SESSION['user']['user_id']);
$catDetail = allCat($shopDetail->shop_id);
$mediaDetail = allmedia($shopDetail->shop_id , "banner");
?>
<div class="container page__container">
    <form id="shop_banner_ad">
        <div class="row">
            <div class="col-lg-9 pr-lg-0">

                <div class="page-section">
                    <h4>Site Banner</h4>



                    <div class="list-group list-group-form">
                        <div class="list-group-item">
                            <div class="form-group row mb-0">
                                <label class="col-form-label col-sm-3">Select Banner</label>
                                <div class="col-sm-9">
                                    <input type="file" name="shop_banner" class="form-control" required>
                                    <input type="text" name="shop_banner_id" class="form-control" value="<?=$shopDetail->shop_id?>" hidden>
                                    <input type="text" name="shop_name" class="form-control" value="<?=$shopDetail->shopName?>" hidden>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-accent">ADD</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 page-nav" id="loc">
                <div class="page-section pt-lg-112pt">
                    <nav class="nav page-nav__menu">

                        <?php foreach($mediaDetail as $meida){ ?>

                        <img src="<?=siteRoot?>img/shopBanners/<?=$meida['name']?>" alt="" width="200px" height="100px">
                         <a href="">DELETE</a>
                        <?php } ?>
                    </nav>

                </div>
            </div>
        </div>
    </form>
</div>