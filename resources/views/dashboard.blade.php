@extends('layouts.admin')

@section('content')

<!-- Dashboard  Starts -->
<div class="content-header row">
  <div class="content-header-left col-12 mb-2 mt-1">
    <div class="row breadcrumbs-top">
      <div class="col-12">
        <h5 class="content-header-title float-left pr-1 mb-0"> {{ __('Dashboard') }}</h5>
        <div class="breadcrumb-wrapper col-12">
          <ol class="breadcrumb p-0 mb-0">
            <li class="breadcrumb-item"><a href="#"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active">{{ __('welcome') }}</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="content-body">
     <section id="dashboard-ecommerce">
      <div class="row">
        <!-- Greetings Content Starts -->
        <div class="col-xl-4 col-md-6 col-12 dashboard-greetings">
          <div class="card">
            <div class="card-header">
              <h3 class="greeting-text">Congratulations!</h3>
              
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <p class="mb-0">{{ __('You are logged in!') }}</p>
            </div>
            <div class="card-content">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-end">
                  <div class="dashboard-content-left">
                    <h1 class="text-primary font-large-2 text-bold-500">â‚¹89k</h1>
                    <p>You have done 57.6% more sales today.</p>
                    <button type="button" class="btn btn-primary glow">View Sales</button>
                  </div>
                  <div class="dashboard-content-right">
                    <img src="app-assets/images/icon/cup.png" height="220" width="220" class="img-fluid"
                      alt="Dashboard Ecommerce" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Multi Radial Chart Starts -->
        <div class="col-xl-4 col-md-6 col-12 dashboard-visit">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h4 class="card-title">Visits of 2019</h4>
              <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
            </div>
            <div class="card-content">
              <div class="card-body">
                <div id="multi-radial-chart"></div>
                <ul class="list-inline d-flex justify-content-around mb-0">
                  <li> <span class="bullet bullet-xs bullet-primary mr-50"></span>Target</li>
                  <li> <span class="bullet bullet-xs bullet-danger mr-50"></span>Mart</li>
                  <li> <span class="bullet bullet-xs bullet-warning mr-50"></span>Ebay</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-12 dashboard-users">
          <div class="row  ">
            <!-- Statistics Cards Starts -->
            <div class="col-12">
              <div class="row">
                <div class="col-sm-6 col-12 dashboard-users-success">
                  <div class="card text-center">
                    <div class="card-content">
                      <div class="card-body py-1">
                        <div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto mb-50">
                          <i class="bx bx-briefcase-alt font-medium-5"></i>
                        </div>
                        <div class="text-muted line-ellipsis">New Products</div>
                        <h3 class="mb-0">1.2k</h3>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-12 dashboard-users-danger">
                  <div class="card text-center">
                    <div class="card-content">
                      <div class="card-body py-1">
                        <div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto mb-50">
                          <i class="bx bx-user font-medium-5"></i>
                        </div>
                        <div class="text-muted line-ellipsis">New Users</div>
                        <h3 class="mb-0">45.6k</h3>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-12 col-lg-6 col-12 dashboard-revenue-growth">
                  <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center pb-0">
                      <h4 class="card-title">Revenue Growth</h4>
                      <div class="d-flex align-items-end justify-content-end">
                        <span class="mr-25">â‚¹25,980</span>
                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                      </div>
                    </div>
                    <div class="card-content">
                      <div class="card-body pb-0">
                        <div id="revenue-growth-chart"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Revenue Growth Chart Starts -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-8 col-12 dashboard-order-summary">
          <div class="card">
            <div class="row">
              <!-- Order Summary Starts -->
              <div class="col-md-8 col-12 order-summary border-right pr-md-0">
                <div class="card mb-0">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Order Summary</h4>
                    <div class="d-flex">
                      <button type="button" class="btn btn-sm btn-light-primary mr-1">Month</button>
                      <button type="button" class="btn btn-sm btn-primary glow">Week</button>
                    </div>
                  </div>
                  <div class="card-content">
                    <div class="card-body p-0">
                      <div id="order-summary-chart"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Sales History Starts -->
              <div class="col-md-4 col-12 pl-md-0">
                <div class="card mb-0">
                  <div class="card-header pb-50">
                    <h4 class="card-title">Sales History</h4>
                  </div>
                  <div class="card-content">
                    <div class="card-body py-1">
                      <div class="d-flex justify-content-between align-items-center mb-2">
                        <div class="sales-item-name">
                          <p class="mb-0">Airpods</p>
                          <small class="text-muted">30 min ago</small>
                        </div>
                        <div class="sales-item-amount">
                          <h6 class="mb-0"><span class="text-success">+</span> â‚¹50</h6>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between align-items-center mb-2">
                        <div class="sales-item-name">
                          <p class="mb-0">iPhone</p>
                          <small class="text-muted">2 hour ago</small>
                        </div>
                        <div class="sales-item-amount">
                          <h6 class="mb-0"><span class="text-danger">-</span> â‚¹59</h6>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="sales-item-name">
                          <p class="mb-0">Macbook</p>
                          <small class="text-muted">1 day ago</small>
                        </div>
                        <div class="sales-item-amount">
                          <h6 class="mb-0"><span class="text-success">+</span> â‚¹12</h6>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer border-top pb-0">
                      <h5>Total Sales</h5>
                      <span class="text-primary text-bold-500">â‚¹82,950.96</span>
                      <div class="progress progress-bar-primary progress-sm my-50">
                        <div class="progress-bar" role="progressbar" aria-valuenow="78" style="width:78%"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Latest Update Starts -->
        <div class="col-xl-4 col-md-6 col-12 dashboard-latest-update">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center pb-50">
              <h4 class="card-title">Latest Update</h4>
              <div class="dropdown">
                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButtonSec"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  2019
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonSec">
                  <a class="dropdown-item" href="#">2019</a>
                  <a class="dropdown-item" href="#">2018</a>
                  <a class="dropdown-item" href="#">2017</a>
                </div>
              </div>
            </div>
            <div class="card-content">
              <div class="card-body p-0 pb-1">
                <ul class="list-group list-group-flush">
                  <li
                    class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                    <div class="list-left d-flex">
                      <div class="list-icon mr-1">
                        <div class="avatar bg-rgba-primary m-0">
                          <div class="avatar-content">
                            <i class="bx bxs-zap text-primary font-size-base"></i>
                          </div>
                        </div>
                      </div>
                      <div class="list-content">
                        <span class="list-title">Total Products</span>
                        <small class="text-muted d-block">1.2k New Products</small>
                      </div>
                    </div>
                    <span>10.6k</span>
                  </li>
                  <li
                    class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                    <div class="list-left d-flex">
                      <div class="list-icon mr-1">
                        <div class="avatar bg-rgba-info m-0">
                          <div class="avatar-content">
                            <i class="bx bx-stats text-info font-size-base"></i>
                          </div>
                        </div>
                      </div>
                      <div class="list-content">
                        <span class="list-title">Total Sales</span>
                        <small class="text-muted d-block">39.4k New Sales</small>
                      </div>
                    </div>
                    <span>26M</span>
                  </li>
                  <li
                    class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                    <div class="list-left d-flex">
                      <div class="list-icon mr-1">
                        <div class="avatar bg-rgba-danger m-0">
                          <div class="avatar-content">
                            <i class="bx bx-credit-card text-danger font-size-base"></i>
                          </div>
                        </div>
                      </div>
                      <div class="list-content">
                        <span class="list-title">Total Revenue</span>
                        <small class="text-muted d-block">43.5k New Revenue</small>
                      </div>
                    </div>
                    <span>15.89M</span>
                  </li>
                  <li
                    class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                    <div class="list-left d-flex">
                      <div class="list-icon mr-1">
                        <div class="avatar bg-rgba-success m-0">
                          <div class="avatar-content">
                            <i class="bx bx-dollar text-success font-size-base"></i>
                          </div>
                        </div>
                      </div>
                      <div class="list-content">
                        <span class="list-title">Total Cost</span>
                        <small class="text-muted d-block">Total Expenses</small>
                      </div>
                    </div>
                    <span>1.25B</span>
                  </li>
                  <li
                    class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                    <div class="list-left d-flex">
                      <div class="list-icon mr-1">
                        <div class="avatar bg-rgba-primary m-0">
                          <div class="avatar-content">
                            <i class="bx bx-user text-primary font-size-base"></i>
                          </div>
                        </div>
                      </div>
                      <div class="list-content">
                        <span class="list-title">Total Users</span>
                        <small class="text-muted d-block">New Users</small>
                      </div>
                    </div>
                    <span>1.2k</span>
                  </li>
                  <li
                    class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                    <div class="list-left d-flex">
                      <div class="list-icon mr-1">
                        <div class="avatar bg-rgba-danger m-0">
                          <div class="avatar-content">
                            <i class="bx bx-edit-alt text-danger font-size-base"></i>
                          </div>
                        </div>
                      </div>
                      <div class="list-content">
                        <span class="list-title">Total Visits</span>
                        <small class="text-muted d-block">New Visits</small>
                      </div>
                    </div>
                    <span>4.6k</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Marketing Campaigns Starts -->
        <div class="col-xl-12 col-12 dashboard-marketing-campaign">
          <div class="card marketing-campaigns">
            <div class="card-header d-flex justify-content-between align-items-center pb-1">
              <h4 class="card-title">Marketing campaigns</h4>
              <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
            </div>
            <div class="card-content">
              <div class="card-body pb-0">
                <div class="row">
                  <div class="col-md-9 col-12">
                    <div class="d-inline-block">
                      <!-- chart-1   -->
                      <div class="d-flex market-statistics-1">
                        <!-- chart-statistics-1 -->
                        <div id="donut-success-chart"></div>
                        <!-- data -->
                        <div class="statistics-data my-auto">
                          <div class="statistics">
                            <span class="font-medium-2 mr-50 text-bold-600">25,756</span><span
                              class="text-success">(+16.2%)</span>
                          </div>
                          <div class="statistics-date">
                            <i class="bx bx-radio-circle font-small-1 text-success mr-25"></i>
                            <small class="text-muted">May 12, 2019</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-inline-block">
                      <!-- chart-2 -->
                      <div class="d-flex mb-75 market-statistics-2">
                        <!-- chart statistics-2 -->
                        <div id="donut-danger-chart"></div>
                        <!-- data-2 -->
                        <div class="statistics-data my-auto">
                          <div class="statistics">
                            <span class="font-medium-2 mr-50 text-bold-600">5,352</span><span
                              class="text-danger">(-4.9%)</span>
                          </div>
                          <div class="statistics-date">
                            <i class="bx bx-radio-circle font-small-1 text-success mr-25"></i>
                            <small class="text-muted">Jul 26, 2019</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-12 text-md-right">
                    <button class="btn btn-sm btn-primary glow mt-md-2 mb-1">View Report</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- table start -->
              <table id="table-marketing-campaigns" class="table table-borderless table-marketing-campaigns mb-0">
                <thead>
                  <tr>
                    <th>Campaign</th>
                    <th>Growth</th>
                    <th>Charges</th>
                    <th>Status</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-1 line-ellipsis">
                      <img class="rounded-circle mr-1" src="app-assets/images/icon/fs.png" alt="card" height="24"
                        width="24">Fastrack Watches
                    </td>
                    <td class="py-1">
                      <i class="bx bx-trending-up text-success align-middle mr-50"></i><span>30%</span>
                    </td>
                    <td class="py-1">â‚¹5,536</td>
                    <td class="text-success py-1">Active</td>
                    <td class="text-center py-1">
                      <div class="dropdown">
                        <span
                          class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                          <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1 line-ellipsis">
                      <img class="rounded-circle mr-1" src="app-assets/images/icon/puma.png" alt="card" height="24"
                        width="24">Puma Shoes
                    </td>
                    <td class="py-1">
                      <i class="bx bx-trending-down text-danger align-middle mr-50"></i><span>15.5%</span>
                    </td>
                    <td class="py-1">â‚¹1,569</td>
                    <td class="text-success py-1">Active</td>
                    <td class="text-center py-1">
                      <div class="dropdown">
                        <span
                          class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                        </span>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                          <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1 line-ellipsis">
                      <img class="rounded-circle mr-1" src="app-assets/images/icon/nike.png" alt="card" height="24"
                        width="24">Nike Air Jordan
                    </td>
                    <td class="py-1">
                      <i class="bx bx-trending-up text-success align-middle mr-50"></i><span>70.30%</span>
                    </td>
                    <td class="py-1">â‚¹23,859</td>
                    <td class="text-danger py-1">Closed</td>
                    <td class="text-center py-1">
                      <div class="dropdown">
                        <span
                          class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                        </span>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                          <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1 line-ellipsis">
                      <img class="rounded-circle mr-1" src="app-assets/images/icon/one-plus.png" alt="card"
                        height="24" width="24">Oneplus 7 pro
                    </td>
                    <td class="py-1">
                      <i class="bx bx-trending-up text-success align-middle mr-50"></i><span>10.4%</span>
                    </td>
                    <td class="py-1">â‚¹9,523</td>
                    <td class="text-success py-1">Active</td>
                    <td class="text-center py-1">
                      <div class="dropdown">
                        <span
                          class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                        </span>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                          <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1 line-ellipsis">
                      <img class="rounded-circle mr-1" src="app-assets/images/icon/google.png" alt="card"
                        height="24" width="24">Google Pixel 4 xl
                    </td>
                    <td class="py-1"><i class="bx bx-trending-down text-danger align-middle mr-50"></i><span>-62.38%</span>
                    </td>
                    <td class="py-1">12,897</td>
                    <td class="text-danger py-1">Closed</td>
                    <td class="text-center py-1">
                      <div class="dropup">
                        <span
                          class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                        </span>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                          <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- table ends -->
            </div>
          </div>
        </div>
      </div>
    </section>     
          
</div>
          
<!-- Dashboard  ends -->

@endsection