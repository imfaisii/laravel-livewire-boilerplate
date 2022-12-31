@extends('layouts.app')

@section('content')
    <!-- Statistics -->
    <div class="mb-4 col-xl-12 col-lg-7 col-12">
        <div class="card h-100">
            <div class="card-header">
                <div class="mb-3 d-flex justify-content-between">
                    <h5 class="mb-0 card-title">Statistics</h5>
                    <small class="text-muted">Updated Just Now</small>
                </div>
            </div>
            <div class="card-body">
                <div class="row gy-3">
                    <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                            <div class="p-2 badge rounded-pill bg-label-primary me-3">
                                <i class="ti ti-chart-pie-2 ti-sm"></i>
                            </div>
                            <div class="card-info">
                                <h5 class="mb-0">230k</h5>
                                <small>Sales</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                            <div class="p-2 badge rounded-pill bg-label-info me-3">
                                <i class="ti ti-users ti-sm"></i>
                            </div>
                            <div class="card-info">
                                <h5 class="mb-0">8.549k</h5>
                                <small>Customers</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                            <div class="p-2 badge rounded-pill bg-label-danger me-3">
                                <i class="ti ti-shopping-cart ti-sm"></i>
                            </div>
                            <div class="card-info">
                                <h5 class="mb-0">1.423k</h5>
                                <small>Products</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                            <div class="p-2 badge rounded-pill bg-label-success me-3">
                                <i class="ti ti-currency-dollar ti-sm"></i>
                            </div>
                            <div class="card-info">
                                <h5 class="mb-0">$9745</h5>
                                <small>Revenue</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Statistics -->

    <!-- Website Analytics -->
    <div class="mb-4 col-lg-6">
        <div class="swiper-container swiper-container-horizontal swiper swiper-card-advance-bg"
            id="swiper-with-pagination-cards">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="mt-2 mb-0 text-white">Website Analytics</h5>
                            <small>Total 28.5% Conversion Rate</small>
                        </div>
                        <div class="row">
                            <div class="order-2 col-lg-7 col-md-9 col-12 order-md-1">
                                <h6 class="mt-0 mb-3 text-white mt-md-3">Traffic</h6>
                                <div class="row">
                                    <div class="col-6">
                                        <ul class="mb-0 list-unstyled">
                                            <li class="mb-4 d-flex align-items-center">
                                                <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">
                                                    28%</p>
                                                <p class="mb-0">Sessions</p>
                                            </li>
                                            <li class="mb-2 d-flex align-items-center">
                                                <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">
                                                    1.2k</p>
                                                <p class="mb-0">Leads</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul class="mb-0 list-unstyled">
                                            <li class="mb-4 d-flex align-items-center">
                                                <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">
                                                    3.1k</p>
                                                <p class="mb-0">Page Views</p>
                                            </li>
                                            <li class="mb-2 d-flex align-items-center">
                                                <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">
                                                    12%</p>
                                                <p class="mb-0">Conversions</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="order-1 my-4 text-center col-lg-5 col-md-3 col-12 order-md-2 my-md-0">
                                <img src="../../assets/img/illustrations/card-website-analytics-1.png"
                                    alt="Website Analytics" width="170" class="card-website-analytics-img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="mt-2 mb-0 text-white">Website Analytics</h5>
                            <small>Total 28.5% Conversion Rate</small>
                        </div>
                        <div class="order-2 col-lg-7 col-md-9 col-12 order-md-1">
                            <h6 class="mt-0 mb-3 text-white mt-md-3">Spending</h6>
                            <div class="row">
                                <div class="col-6">
                                    <ul class="mb-0 list-unstyled">
                                        <li class="mb-4 d-flex align-items-center">
                                            <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">
                                                12h</p>
                                            <p class="mb-0">Spend</p>
                                        </li>
                                        <li class="mb-2 d-flex align-items-center">
                                            <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">
                                                127</p>
                                            <p class="mb-0">Order</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="mb-0 list-unstyled">
                                        <li class="mb-4 d-flex align-items-center">
                                            <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">
                                                18</p>
                                            <p class="mb-0">Order Size</p>
                                        </li>
                                        <li class="mb-2 d-flex align-items-center">
                                            <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">
                                                2.3k</p>
                                            <p class="mb-0">Items</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="order-1 my-4 text-center col-lg-5 col-md-3 col-12 order-md-2 my-md-0">
                            <img src="../../assets/img/illustrations/card-website-analytics-2.png" alt="Website Analytics"
                                width="170" class="card-website-analytics-img" />
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="mt-2 mb-0 text-white">Website Analytics</h5>
                            <small>Total 28.5% Conversion Rate</small>
                        </div>
                        <div class="order-2 col-lg-7 col-md-9 col-12 order-md-1">
                            <h6 class="mt-0 mb-3 text-white mt-md-3">Revenue Sources</h6>
                            <div class="row">
                                <div class="col-6">
                                    <ul class="mb-0 list-unstyled">
                                        <li class="mb-4 d-flex align-items-center">
                                            <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">
                                                268</p>
                                            <p class="mb-0">Direct</p>
                                        </li>
                                        <li class="mb-2 d-flex align-items-center">
                                            <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">
                                                62</p>
                                            <p class="mb-0">Referral</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="mb-0 list-unstyled">
                                        <li class="mb-4 d-flex align-items-center">
                                            <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">
                                                890</p>
                                            <p class="mb-0">Organic</p>
                                        </li>
                                        <li class="mb-2 d-flex align-items-center">
                                            <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">
                                                1.2k</p>
                                            <p class="mb-0">Campaign</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="order-1 my-4 text-center col-lg-5 col-md-3 col-12 order-md-2 my-md-0">
                            <img src="../../assets/img/illustrations/card-website-analytics-3.png" alt="Website Analytics"
                                width="170" class="card-website-analytics-img" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!--/ Website Analytics -->

    <!-- Sales Overview -->
    <div class="mb-4 col-lg-3 col-sm-6">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <small class="mb-1 d-block text-muted">Sales Overview</small>
                    <p class="card-text text-success">+18.2%</p>
                </div>
                <h4 class="mb-1 card-title">$42.5k</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="gap-2 mb-2 d-flex align-items-center">
                            <span class="p-1 rounded badge bg-label-info"><i class="ti ti-shopping-cart ti-xs"></i></span>
                            <p class="mb-0">Order</p>
                        </div>
                        <h5 class="pt-1 mb-0 text-nowrap">62.2%</h5>
                        <small class="text-muted">6,440</small>
                    </div>
                    <div class="col-4">
                        <div class="divider divider-vertical">
                            <div class="divider-text">
                                <span class="badge-divider-bg bg-label-secondary">VS</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="gap-2 mb-2 d-flex justify-content-end align-items-center">
                            <p class="mb-0">Visits</p>
                            <span class="p-1 rounded badge bg-label-primary"><i class="ti ti-link ti-xs"></i></span>
                        </div>
                        <h5 class="pt-1 mb-0 text-nowrap ms-lg-n3 ms-xl-0">25.5%</h5>
                        <small class="text-muted">12,749</small>
                    </div>
                </div>
                <div class="mt-4 d-flex align-items-center">
                    <div class="progress w-100" style="height: 8px">
                        <div class="progress-bar bg-info" style="width: 70%" role="progressbar" aria-valuenow="70"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Sales Overview -->

    <!-- Revenue Generated -->
    <div class="mb-4 col-lg-3 col-md-6 col-sm-6">
        <div class="card">
            <div class="pb-0 card-body">
                <div class="card-icon">
                    <span class="p-2 badge bg-label-success rounded-pill">
                        <i class="ti ti-credit-card ti-sm"></i>
                    </span>
                </div>
                <h5 class="mt-2 mb-0 card-title">97.5k</h5>
                <small>Revenue Generated</small>
            </div>
            <div id="revenueGenerated"></div>
        </div>
    </div>
    <!--/ Revenue Generated -->

    <!-- Earning Reports -->
    <div class="mb-4 col-lg-6">
        <div class="card h-100">
            <div class="pb-0 card-header d-flex justify-content-between mb-lg-n4">
                <div class="mb-0 card-title">
                    <h5 class="mb-0">Earning Reports</h5>
                    <small class="text-muted">Weekly Earnings Overview</small>
                </div>
                <div class="dropdown">
                    <button class="p-0 btn" type="button" id="earningReportsId" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsId">
                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                    </div>
                </div>
                <!-- </div> -->
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-4 d-flex flex-column align-self-end">
                        <div class="flex-wrap gap-2 pb-1 mb-2 d-flex align-items-center">
                            <h1 class="mb-0">$468</h1>
                            <div class="rounded badge bg-label-success">+4.2%</div>
                        </div>
                        <small class="text-muted">You informed of this week compared to last
                            week</small>
                    </div>
                    <div class="col-12 col-md-8">
                        <div id="weeklyEarningReports"></div>
                    </div>
                </div>
                <div class="p-3 mt-2 border rounded">
                    <div class="gap-4 row gap-sm-0">
                        <div class="col-12 col-sm-4">
                            <div class="gap-2 d-flex align-items-center">
                                <div class="p-1 rounded badge bg-label-primary">
                                    <i class="ti ti-currency-dollar ti-sm"></i>
                                </div>
                                <h6 class="mb-0">Earnings</h6>
                            </div>
                            <h4 class="pt-1 my-2">$545.69</h4>
                            <div class="progress w-75" style="height: 4px">
                                <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="gap-2 d-flex align-items-center">
                                <div class="p-1 rounded badge bg-label-info"><i class="ti ti-chart-pie-2 ti-sm"></i></div>
                                <h6 class="mb-0">Profit</h6>
                            </div>
                            <h4 class="pt-1 my-2">$256.34</h4>
                            <div class="progress w-75" style="height: 4px">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="gap-2 d-flex align-items-center">
                                <div class="p-1 rounded badge bg-label-danger">
                                    <i class="ti ti-brand-paypal ti-sm"></i>
                                </div>
                                <h6 class="mb-0">Expense</h6>
                            </div>
                            <h4 class="pt-1 my-2">$74.19</h4>
                            <div class="progress w-75" style="height: 4px">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 65%"
                                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Earning Reports -->

    <!-- Support Tracker -->
    <div class="mb-4 col-md-6">
        <div class="card">
            <div class="pb-0 card-header d-flex justify-content-between">
                <div class="mb-0 card-title">
                    <h5 class="mb-0">Support Tracker</h5>
                    <small class="text-muted">Last 7 Days</small>
                </div>
                <div class="dropdown">
                    <button class="p-0 btn" type="button" id="supportTrackerMenu" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="supportTrackerMenu">
                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-4 col-md-12 col-lg-4">
                        <div class="pt-1 mb-2 mt-lg-4 mt-lg-2 mb-lg-4">
                            <h1 class="mb-0">164</h1>
                            <p class="mb-0">Total Tickets</p>
                        </div>
                        <ul class="p-0 m-0">
                            <li class="gap-3 pt-2 pb-1 d-flex align-items-center mb-lg-3">
                                <div class="p-1 rounded badge bg-label-primary"><i class="ti ti-ticket ti-sm"></i></div>
                                <div>
                                    <h6 class="mb-0 text-nowrap">New Tickets</h6>
                                    <small class="text-muted">142</small>
                                </div>
                            </li>
                            <li class="gap-3 pb-1 d-flex align-items-center mb-lg-3">
                                <div class="p-1 rounded badge bg-label-info">
                                    <i class="ti ti-circle-check ti-sm"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 text-nowrap">Open Tickets</h6>
                                    <small class="text-muted">28</small>
                                </div>
                            </li>
                            <li class="gap-3 pb-1 d-flex align-items-center">
                                <div class="p-1 rounded badge bg-label-warning"><i class="ti ti-clock ti-sm"></i></div>
                                <div>
                                    <h6 class="mb-0 text-nowrap">Response Time</h6>
                                    <small class="text-muted">1 Day</small>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-8 col-md-12 col-lg-8">
                        <div id="supportTracker"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Support Tracker -->
@endsection

@push('vendor-scripts')
    @include('partials.pages.dashboard.vendors')
@endpush

@push('scripts')
    @include('partials.pages.dashboard.pagejs')
@endpush
