@extends('masters.adminmaster')
@section('main')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Manager</h1>
                <div class="row">
                    <div class="col-xl-2 col-md-6">
                        <div class="card bg-info text-white mb-4">
                            <div class="card-body">Admin Manager</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="{{route('admin.adminindex')}}">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Customer Manager</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="{{route('admin.customerindex')}}">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">Stylist Manager</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="{{route('admin.stylistindex')}}">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Product Manager</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="{{route('admin.productindex')}}">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Collection Manager</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="{{route('admin.collectionindex')}}">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 text-center">
                        <div class="card mb-4">
                            <div class="card-header">
                                <div class="text-center">Top Sell Summer</div>
                            </div>
                            <div class="card-body">

                                @php
                                    $img1 = 'images/product/00001-burberry-fall-2022-menswear-credit-brand.webp';
                                    $img2 = 'images/product/00023-DOLCE-GABBANA-MENSWEAR-SPRING-21.webp';
                                    $img3 = 'images/product/Richard Mille RM 57-03 Tourbillon Sapphire Dragon.jpg';
                                @endphp
                                <img src="{{asset($img2)}}" width="300" height="400">
                                <h6>MD_QA01</h6>

                            </div>
                            <div class="card-footer small text-muted">Updated yesterday at 15:04 PM</div>
                        </div>
                    </div>
                    <div class="col-xl-4 text-center">
                        <div class="card mb-4">
                            <div class="card-header">
                                <div class="text-center">Top Sell Winter</div>
                            </div>
                            <div>

                            </div>
                            <div class="card-body">
                                <img src="{{asset($img1)}}" width="300" height="400">
                                <h6>MD_QA08</h6>
                            </div>
                            <div class="card-footer small text-muted">Updated yesterday at 20:03 PM</div>
                        </div>
                    </div>
                    <div class="col-xl-4 text-center">
                        <div class="card mb-4">
                            <div class="card-header">
                                <div class="text-center">Top Sell Accessory </div>
                            </div>
                            <div>

                            </div>
                            <div class="card-body" >
                                <img src="{{asset($img3)}}" width="300" height="300">
                                <h6>PK_DH05</h6>
                            </div>
                            <div class="card-footer small text-muted">Updated yesterday at 21:03 PM</div>
                        </div>
                    </div>
                </div>
                <footer class=" bg-light ">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright © Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
@endsection
