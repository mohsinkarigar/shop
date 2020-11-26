<?php
$shopDetail = getShop($_SESSION['user']['user_id']);
$catDetail = allCat($shopDetail->shop_id);
?>
<div class="container page__container">
    <form id="shop_meun_add">
        <div class="row">
            <div class="col-lg-12 pr-lg-0">

                <div class="page-section">
                    <h4>Category</h4>

                    <div class="alert alert-soft-warning" id="mess" hidden>
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="mr-8pt">
                                <i class="material-icons">check_circle</i>
                            </div>
                            <div class="flex" style="min-width: 180px">
                                <small class="text-100">
                                    An email with password reset instructions has been sent to your email address, if it exists on our system.
                                </small>
                            </div>
                        </div>
                    </div>

                    <div class="list-group list-group-form">
                        <div class="list-group-item">
                            <div class="form-group row mb-0">
                                <label class="col-form-label col-sm-3">Select Main Category</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="main_meun_add" required>
                                        <option value="0">Main</option>
                                        <?php foreach($catDetail as $meun){ ?>
                                        <option value="<?=$meun['category_id']?>"><?=$meun['name']?></option>
                                        <?php } ?>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="form-group row mb-0">
                                <label class="col-form-label col-sm-3">Category Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="shop_id" class="form-control" value="<?=$shopDetail->shop_id?>" hidden>
                                    <input type="text" name="meun_name" class="form-control" placeholder="Category Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-accent" onclick="">ADD</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </form>
</div>