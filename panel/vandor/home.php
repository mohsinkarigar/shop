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


                <div class="row" role="tablist">

                    <div class="col-auto border-left">
                        <a href="post.php" class="btn btn-accent">ADD ITEM</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="container page__container">
            <div class="page-section">



                <div class="page-separator">
                    <div class="page-separator__text">Overview</div>
                </div>




                <div class="row mb-lg-8pt">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body d-flex align-items-center">
                                <div class="h2 mb-0 mr-3">&dollar;12.9k</div>
                                <div class="flex">
                                    <p class="mb-0"><strong>Visits</strong></p>
                                    <p class="text-50 mb-0 mt-n1 d-flex align-items-center">

                                        <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                    </p>
                                </div>
                                <i class="material-icons icon-48pt text-20 ml-2">access_time</i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body d-flex align-items-center">
                                <div class="h2 mb-0 mr-3">&dollar;3.6k</div>
                                <div class="flex">
                                    <p class="mb-0"><strong>Post </strong></p>
                                    <p class="text-50 mb-0 mt-n1 d-flex align-items-center">

                                        <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                    </p>
                                </div>
                                <i class="material-icons icon-48pt text-20 ml-2">attach_money</i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body d-flex align-items-center">
                                <div class="h2 mb-0 mr-3">8.3k</div>
                                <div class="flex">
                                    <p class="mb-0"><strong>Comments</strong></p>
                                    <p class="text-50 mb-0 mt-n1 d-flex align-items-center">

                                        <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_down</i>
                                    </p>
                                </div>
                                <i class="material-icons icon-48pt text-20 ml-2">person_outline</i>
                            </div>
                        </div>
                    </div>

                </div>




                <div class="page-separator">
                    <div class="page-separator__text">Discussions</div>
                </div>

                <div class="card mb-0">
                    <div class="card-header">
                        <div class="row align-items-center" style="white-space: nowrap;">
                            <div class="col-lg-auto">

                            </div>

                        </div>
                    </div>


                    <div class="list-group list-group-flush">

                        <div class="list-group-item p-3">
                            <div class="row align-items-start">
                                <div class="col-md-3 mb-8pt mb-md-0">
                                    <div class="media align-items-center">
                                        <div class="media-left mr-8pt">
                                            <a href="#" class="avatar avatar-32pt"><img src="assets/images/people/110/guy-1.jpg" alt="avatar" class="avatar-img rounded-circle"></a>
                                        </div>
                                        <div class="d-flex flex-column media-body media-middle">
                                            <a href="#" class="text-body"><strong>Laza Bogdan</strong></a>
                                            <small class="text-muted">2 days ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-8pt mb-md-0">
                                    <p class="mb-8pt"><a href="compact-discussion.html" class="text-body"><strong>Using Angular HttpClientModule instead of HttpModule</strong></a></p>


                                    <a href="compact-discussion.html" class="chip chip-outline-secondary">Angular fundamentals</a>


                                </div>
                                <div class="col-auto d-flex flex-column align-items-center justify-content-center">
                                    <h5 class="m-0">1</h5>
                                    <p class="lh-1 mb-0"><small class="text-70">answers</small></p>
                                </div>
                            </div>
                        </div>

                        <div class="list-group-item p-3">
                            <div class="row align-items-start">
                                <div class="col-md-3 mb-8pt mb-md-0">
                                    <div class="media align-items-center">
                                        <div class="media-left mr-8pt">
                                            <a href="#" class="avatar avatar-32pt"><img src="assets/images/people/110/guy-2.jpg" alt="avatar" class="avatar-img rounded-circle"></a>
                                        </div>
                                        <div class="d-flex flex-column media-body media-middle">
                                            <a href="#" class="text-body"><strong>Adam Curtis</strong></a>
                                            <small class="text-muted">3 days ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-8pt mb-md-0">
                                    <p class="mb-0"><a href="compact-discussion.html" class="text-body"><strong>Why am I getting an error when trying to install angular/http@2.4.2</strong></a></p>

                                </div>
                                <div class="col-auto d-flex flex-column align-items-center justify-content-center">
                                    <h5 class="m-0">1</h5>
                                    <p class="lh-1 mb-0"><small class="text-70">answers</small></p>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
                <div class="page-separator">
                    <div class="page-separator__text">Current Users</div>
                </div>

                <div class="card mb-lg-32pt">

                    <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-employee-name" data-lists-values='["js-lists-values-employee-name", "js-lists-values-employer-name", "js-lists-values-projects", "js-lists-values-activity", "js-lists-values-earnings"]'>

                        <table class="table mb-0 thead-border-top-0 table-nowrap">
                            <thead>
                                <tr>

                                    <th style="width: 18px;" class="pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input js-toggle-check-all" data-target="#staff" id="customCheckAll">
                                            <label class="custom-control-label" for="customCheckAll"><span class="text-hide">Toggle all</span></label>
                                        </div>
                                    </th>

                                    <th>
                                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-employee-name">Employee</a>
                                    </th>

                                    <th style="width: 150px;">
                                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-employer-name">Employer</a>
                                    </th>


                                    <th class="text-center" style="width: 48px;">
                                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-projects">Projects</a>
                                    </th>


                                    <th style="width: 37px;">Status</th>

                                    <th style="width: 120px;">
                                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-activity">Activity</a>
                                    </th>
                                    <th style="width: 51px;">
                                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-earnings">Earnings</a>
                                    </th>
                                    <th style="width: 24px;" class="pl-0"></th>
                                </tr>
                            </thead>
                            <tbody class="list" id="staff">

                                <tr class="selected">

                                    <td class="pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input js-check-selected-row" checked="" id="customCheck1_1">
                                            <label class="custom-control-label" for="customCheck1_1"><span class="text-hide">Check</span></label>
                                        </div>
                                    </td>

                                    <td>

                                        <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                            <div class="avatar avatar-32pt mr-8pt">

                                                <img src="assets/images/people/110/guy-1.jpg" alt="Avatar" class="avatar-img rounded-circle">


                                            </div>
                                            <div class="media-body">


                                                <div class="d-flex flex-column">
                                                    <p class="mb-0"><strong class="js-lists-values-employee-name">Michael Smith</strong></p>
                                                    <small class="js-lists-values-employee-email text-50"></small>
                                                </div>


                                            </div>
                                        </div>

                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="text-warning"><i class="material-icons mr-8pt">star</i></a>
                                            <a href="#" class="text-70"><span class="js-lists-values-employer-name">Black Ops</span></a>
                                        </div>
                                    </td>

                                    <td class="text-center js-lists-values-projects small">12</td>

                                    <td>


                                        <a href="#" class="chip chip-outline-secondary">Admin</a>


                                    </td>

                                    <td class="text-50 js-lists-values-activity small">3 days ago</td>
                                    <td class="js-lists-values-earnings small">$12,402</td>
                                    <td class="text-right pl-0">
                                        <a href="#" class="text-50"><i class="material-icons">more_vert</i></a>
                                    </td>
                                </tr>

                                <tr>

                                    <td class="pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_2">
                                            <label class="custom-control-label" for="customCheck1_2"><span class="text-hide">Check</span></label>
                                        </div>
                                    </td>

                                    <td>

                                        <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                            <div class="avatar avatar-32pt mr-8pt">


                                                <span class="avatar-title rounded-circle">CS</span>

                                            </div>
                                            <div class="media-body">


                                                <div class="d-flex flex-column">
                                                    <p class="mb-0"><strong class="js-lists-values-employee-name">Connie Smith</strong></p>
                                                    <small class="js-lists-values-employee-email text-50"></small>
                                                </div>


                                            </div>
                                        </div>

                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="text-warning"><i class="material-icons mr-8pt">star</i></a>
                                            <a href="#" class="text-70"><span class="js-lists-values-employer-name">Backend Ltd</span></a>
                                        </div>
                                    </td>

                                    <td class="text-center js-lists-values-projects small">42</td>

                                    <td>


                                        <a href="#" class="chip chip-outline-secondary">User</a>


                                    </td>

                                    <td class="text-50 js-lists-values-activity small">1 week ago</td>
                                    <td class="js-lists-values-earnings small">$1,943</td>
                                    <td class="text-right pl-0">
                                        <a href="#" class="text-50"><i class="material-icons">more_vert</i></a>
                                    </td>
                                </tr>

                                <tr>

                                    <td class="pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_3">
                                            <label class="custom-control-label" for="customCheck1_3"><span class="text-hide">Check</span></label>
                                        </div>
                                    </td>

                                    <td>

                                        <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                            <div class="avatar avatar-32pt mr-8pt">

                                                <img src="assets/images/people/110/guy-2.jpg" alt="Avatar" class="avatar-img rounded-circle">


                                            </div>
                                            <div class="media-body">


                                                <div class="d-flex flex-column">
                                                    <p class="mb-0"><strong class="js-lists-values-employee-name">John Connor</strong></p>
                                                    <small class="js-lists-values-employee-email text-50"></small>
                                                </div>


                                            </div>
                                        </div>

                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="text-warning"><i class="material-icons mr-8pt">star</i></a>
                                            <a href="#" class="text-70"><span class="js-lists-values-employer-name">Frontted</span></a>
                                        </div>
                                    </td>

                                    <td class="text-center js-lists-values-projects small">31</td>

                                    <td>


                                        <a href="#" class="chip chip-outline-secondary">Manager</a>


                                    </td>

                                    <td class="text-50 js-lists-values-activity small">2 weeks ago</td>
                                    <td class="js-lists-values-earnings small">$1,401</td>
                                    <td class="text-right pl-0">
                                        <a href="#" class="text-50"><i class="material-icons">more_vert</i></a>
                                    </td>
                                </tr>

                                <tr class="selected">

                                    <td class="pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input js-check-selected-row" checked="" id="customCheck1_4">
                                            <label class="custom-control-label" for="customCheck1_4"><span class="text-hide">Check</span></label>
                                        </div>
                                    </td>

                                    <td>

                                        <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                            <div class="avatar avatar-32pt mr-8pt">


                                                <span class="avatar-title rounded-circle">LB</span>

                                            </div>
                                            <div class="media-body">


                                                <div class="d-flex flex-column">
                                                    <p class="mb-0"><strong class="js-lists-values-employee-name">Laza Bogdan</strong></p>
                                                    <small class="js-lists-values-employee-email text-50"></small>
                                                </div>


                                            </div>
                                        </div>

                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="text-warning"><i class="material-icons mr-8pt">star</i></a>
                                            <a href="#" class="text-70"><span class="js-lists-values-employer-name">Frontted</span></a>
                                        </div>
                                    </td>

                                    <td class="text-center js-lists-values-projects small">44</td>

                                    <td>


                                        <a href="#" class="chip chip-outline-secondary">Admin</a>


                                    </td>

                                    <td class="text-50 js-lists-values-activity small">3 weeks ago</td>
                                    <td class="js-lists-values-earnings small">$22,402</td>
                                    <td class="text-right pl-0">
                                        <a href="#" class="text-50"><i class="material-icons">more_vert</i></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer p-8pt">

                        <ul class="pagination justify-content-start pagination-xsm m-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true" class="material-icons">chevron_left</span>
                                    <span>Prev</span>
                                </a>
                            </li>
                            <li class="page-item dropdown">
                                <a class="page-link dropdown-toggle" data-toggle="dropdown" href="#" aria-label="Page">
                                    <span>1</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item active">1</a>
                                    <a href="#" class="dropdown-item">2</a>
                                    <a href="#" class="dropdown-item">3</a>
                                    <a href="#" class="dropdown-item">4</a>
                                    <a href="#" class="dropdown-item">5</a>
                                </div>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span>Next</span>
                                    <span aria-hidden="true" class="material-icons">chevron_right</span>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!-- <div class="card-body bordet-top text-right">
15 <span class="text-50">of 1,430</span> <a href="#" class="text-50"><i class="material-icons ml-1">arrow_forward</i></a>
</div> -->


                </div>

            </div>
        </div>


