<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0"> <?php echo ucwords($_SESSION['user']['type']); ?> Dashboard</h2>


                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>

                    <li class="breadcrumb-item active">

                        Dashboard

                    </li>

                </ol>

            </div>


        </div>


    </div>
</div>
<?php $allShop = allshop();?>

<div class="container page__container">
    <div class="page-section">

        <div class="page-separator">
            <div class="page-separator__text">Current Shop</div>
        </div>

        <div class="card mb-lg-32pt">

            <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-employee-name" data-lists-values='["js-lists-values-employee-name", "js-lists-values-employer-name", "js-lists-values-projects", "js-lists-values-activity", "js-lists-values-earnings"]'>

                <table class="table mb-0 thead-border-top-0 table-nowrap">
                    <thead>
                        <tr>

                       

                            <th>
                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-employee-name">Shop Name</a>
                            </th>



                            <th style="width: 37px;">Type</th>

                            <th style="width: 120px;">
                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-activity">Open Date</a>
                            </th>
                            <th style="width: 51px;">
                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-earnings">Earnings</a>
                            </th>
                            <th style="width: 24px;" class="pl-0"></th>
                        </tr>
                    </thead>
                    <tbody class="list" id="staff">

                        <?php
                        foreach($allShop as $shop){
                            
                        
                        ?>

                        <tr>

                     

                            <td>

                                <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                              
                                    <div class="media-body">


                                        <div class="d-flex flex-column">
                                            <p class="mb-0"><strong class="js-lists-values-employee-name"><?=$shop['shopName']?></strong></p>
                                            <small class="js-lists-values-employee-email text-50"></small>
                                        </div>


                                    </div>
                                </div>

                            </td>

                        

                       

                            <td>


                                <a href="#" class="chip chip-outline-secondary"><?=$shop['shopType']?></a>


                            </td>

                            <td class="text-50 js-lists-values-activity small"><?=$shop['createDate']?></td>
                            <td class="js-lists-values-earnings small">$12,402</td>
                            <td class="text-right pl-0">
                                <a href="#" class="text-50"><i class="material-icons">more_vert</i></a>
                            </td>
                        </tr>

                        <?php }?>
                    </tbody>
                </table>
            </div>


            <!-- <div class="card-body bordet-top text-right">
15 <span class="text-50">of 1,430</span> <a href="#" class="text-50"><i class="material-icons ml-1">arrow_forward</i></a>
</div> -->


        </div>

    </div>
</div>


