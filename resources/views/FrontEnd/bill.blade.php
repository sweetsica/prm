@extends('FrontEnd.template.master-full')
@section('title','Hoá Đơn')
@section('content-body')
    <div class="hk-pg-wrapper m-auto">

        <!-- Breadcrumb -->
        <nav class="hk-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item"><a href="#"> </a></li>
                <li class="breadcrumb-item active" aria-current="page"> </li>
            </ol>
        </nav>
        <!-- /Breadcrumb -->

        <!-- Container -->
        <div class="container mb-30">
            <!-- Title -->
            <div class="hk-pg-header mb-10">
                <div>
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="book"></i></span></span>Hóa đơn</h4>
                </div>
                <div class="d-flex">
{{--                    {{dd($userBillInfo)}}--}}
                    <a href="{{$userBillInfo->url}}" class="btn btn-red btn-sm">Đổi thưởng</a>
                </div>
            </div>
            <!-- /Title -->

            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <section class="hk-sec-wrapper hk-invoice-wrap pa-35">
                        <div class="invoice-from-wrap">
                            <div class="row">
                                <div class="col-md-7 mb-20">
                                    <img class="img-fluid invoice-brand-img d-block flex logo-bill mb-20" src="{{asset('src/dist/img/logo/logo.png')}}" alt="brand" />
                                    <h6 class="mb-5">Doppelherz Việt Nam</h6>
                                    <address>
                                        <span class="d-block">Tầng 06, tháp A, tòa Central Point số 219 Trung Kính</span>
                                        <span class="d-block">Phường Yên Hòa, Quận Cầu Giấy, Hà Nội</span>
                                        <span class="d-block">info@mastertran.vn</span>
                                    </address>
                                </div>
                                <div class="col-md-5 mb-20">
                                    <h4 class="mb-35 font-weight-600">Điểm thưởng: {{$userBillInfo->totalPoint}}</h4>
                                    <span class="d-block">Ngày tham gia:<span class="pl-10 text-dark"> {{$userBillInfo->created_at->format('d/m/Y')}}</span></span>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-0">
                        <div class="invoice-to-wrap pb-20">
                            <div class="row">
                                <div class="col-md-7 mb-30">
                                    <h6 class="d-block text-uppercase mb-5 font-13">Thông tin tài khoản</h6>
                                    <address>
                                        <span class="d-block">Mã khách hàng:</span>
                                        <span class="d-block">Tên khách hàng:</span>
                                        <span class="d-block">Email khách hàng:</span>
                                        <span class="d-block">Số điện thoại khách hàng:</span>
                                        <span class="d-block">Địa chỉ khách hàng:</span>
                                        <span class="d-block text-uppercase mt-20 mb-5 font-13">Tổng điểm tới giờ: </span>
                                    </address>
                                </div>
                                <div class="col-md-5 pt-20 mb-30">
                                    <span class="d-block"><span class="text-dark">#{{$userBillInfo->id}}</span></span>
                                    <span class="d-block">{{$userBillInfo->name}}</span>
                                    <span class="d-block">{{$userBillInfo->email}}</span>
                                    <span class="d-block">{{$userBillInfo->phone}}</span>
                                    <span class="d-block">
                                        @if($userBillInfo->address == null)
                                            <span class="text-danger">Vui thêm thông tin địa chỉ</span>
                                        @else
                                            {{$userBillInfo->address}}
                                        @endif

                                    </span>
                                    <span class="d-block text-uppercase mt-20 mb-5 font-13 text-dark font-weight-600">{{$userBillInfo->summaryPoint}}</span>
                                </div>
                            </div>
                        </div>
                        <h5>Lịch sử tích điểm</h5>
                        <hr>
                        <div class="invoice-details">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table table-striped table-border mb-0">
                                        <thead>
                                        <tr class="border-bottom">
                                            <th class="">Tên sản phẩm</th>
                                            <th class="text-right">Mã sản phẩm</th>
                                            <th class="text-right">Đơn giá</th>
                                            <th class="text-right">Ngày quét mã</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($histories->all() == [])
                                            <tr>
                                                <td colspan="4" class="">Bạn Chưa Mua Sản Phẩm Nào!, <a class="text-red " href="https://doppelherz.vn/san-pham/">Mua Hàng Để Nhận Điểm</a></td>
                                            </tr>
                                         @else
                                            @foreach($histories as $historyItem)
                                                <tr>
                                                    <td class="">{{$historyItem->product_name}}</td>
                                                    <td class="text-right">{{$historyItem->qr_specialCode}}</td>
                                                    <td class="text-right">{{$historyItem->price}}</td>
                                                    <td class="text-right">{{$historyItem->created_at->format('d/m/Y')}}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
{{--                                        <tfoot class="border-bottom border-1">--}}
{{--                                        <tr>--}}
{{--                                            <th colspan="3" class="text-right font-weight-600">total</th>--}}
{{--                                            <th class="text-right font-weight-600">$22,010</th>--}}
{{--                                        </tr>--}}
{{--                                        </tfoot>--}}
                                    </table>
                                </div>
                            </div>
{{--                            <div class="invoice-sign-wrap text-right py-60">--}}
{{--                                <img class="img-fluid d-inline-block" src="dist/img/signature.png" alt="sign" />--}}
{{--                                <span class="d-block text-light font-14">Digital Signature</span>--}}
{{--                            </div>--}}
                        </div>
                        <hr>
                        <ul class="invoice-terms-wrap font-14 list-ul">
                            <li>Các sản phẩm quà hoặc xuất kho trước 15/05/2022 sẽ không có mã QR</li>
                            <li>Mọi thắc mắc về chương trình vui lòng liên hệ hotline: 18001770 hoặc email info@mastertran.vn</li>
                        </ul>
                    </section>
                </div>
            </div>
            <!-- /Row -->
        </div>
        <!-- /Container -->

        <!-- Footer -->
        <div class="hk-footer-wrap container">
            <footer class="footer  ">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <p>PrM thuộc<a href="https://doppelherz.vn" class="text-dark" target="_blank">Doppelherz</a> © 2022 - Phát triển bởi đội IT <a href="https://tbht.vn" class="text-dark" target="_blank">Thái Hưng</a></p>
{{--                        <p>--}}
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <p class="d-inline-block">Theo Dõi Chúng Tôi:</p>
                        <a href="https://www.facebook.com/DoppelherzVietnam" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                        <a href="https://doppelherz.vn/" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /Footer -->
    </div>
@endsection
