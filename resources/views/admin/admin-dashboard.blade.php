
@extends('admin.layouts.main')


@section('main-container')

{{-- @php
    $data = session('data');
    print_r($data);die;
@endphp --}}
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <!-- <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard Analytics</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- order-card start -->
            <div class="col-md-6 col-xl-3">
                <div class="card bg-c-blue order-card">
                    <div class="card-body">
                        <h6 class="text-white">Orders Received</h6>
                        <h2 class="text-right text-white"><i class="feather icon-shopping-cart float-left"></i><span>486</span></h2>
                        <p class="m-b-0">Completed Orders<span class="float-right">351</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card bg-c-green order-card">
                    <div class="card-body">
                        <h6 class="text-white">Total Sales</h6>
                        <h2 class="text-right text-white"><i class="feather icon-tag float-left"></i><span>1641</span></h2>
                        <p class="m-b-0">This Month<span class="float-right">213</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card bg-c-yellow order-card">
                    <div class="card-body">
                        <h6 class="text-white">Revenue</h6>
                        <h2 class="text-right text-white"><i class="feather icon-repeat float-left"></i><span>$42,562</span></h2>
                        <p class="m-b-0">This Month<span class="float-right">$5,032</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card bg-c-red order-card">
                    <div class="card-body">
                        <h6 class="text-white">Total Profit</h6>
                        <h2 class="text-right text-white"><i class="feather icon-award float-left"></i><span>$9,562</span></h2>
                        <p class="m-b-0">This Month<span class="float-right">$542</span></p>
                    </div>
                </div>
            </div>
            <!-- order-card end -->







        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

@endsection
