@extends('FrontEnd.template.master-full')
@section('title','Hoá Đơn')
@section('content-body')
    <div class="hk-pg-wrapper m-auto">


        <!-- Container -->
        <div class="container mb-30 mt-70 mt-lg-100">
            <!-- Title -->
            <div class="hk-pg-header mb-10">
                <div>
                    <h4 style="color: gray" class="hk-pg-title uppercase font-18 font-lg-22 font-weight-600 text-g">
                        LỊCH SỬ TÍCH ĐIỂM</h4>
                </div>
                <div class="d-flex">
                    @if($userBillInfo->address == null)
                        <a data-toggle="modal" data-target="#changeinfo"
                           href="javascript:void(0)" class="btn btn-red btn-sm mr-2">Thêm địa chỉ</a>
                    @endif
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
                                    <img class="img-fluid invoice-brand-img d-block flex logo-bill mb-20"
                                         src="{{asset('src/dist/img/logo/logo.png')}}" alt="brand"/>
                                    <h6 class="mb-5 d-block mb-5 font-24 font-weight-700">Doppelherz Việt Nam</h6>
                                    <address>
                                        <span
                                            class="d-block">Tầng 06, tháp A, tòa Central Point số 219 Trung Kính</span>
                                        <span class="d-block">Phường Yên Hòa, Quận Cầu Giấy, Hà Nội</span>
                                        <span class="d-block">info@mastertran.vn</span>
                                    </address>
                                </div>
                                <div class="col-md-5 mb-20">
                                    <h4 class="mb-35 font-weight-600">Điểm thưởng: {{$userBillInfo->totalPoint}}</h4>
                                    <span class="d-block">Ngày tham gia:<span
                                            class="pl-10 text-dark"> {{$userBillInfo->created_at->format('d/m/Y')}}</span></span>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-0">
                        <div class="invoice-to-wrap pb-20">
                            <h6 class="d-block text-uppercase mb-5 font-13 font-weight-700 ">Thông tin tài khoản</h6>
                            <div class="d-md-flex mb-2 mb-lg-0 justify-content-between w-full">
                                <div class="blog font-weight-500">Mã khách hàng:</div>
                                <div class="text-dark ">#{{$userBillInfo->id}}</div>
                            </div>
                            <div class="d-md-flex mb-2 mb-lg-0 justify-content-between w-full">
                                <div class="blog font-weight-500">Tên khách hàng:</div>
                                <div class="text-dark ">{{$userBillInfo->name}}</div>
                            </div>
                            <div class="d-md-flex mb-2 mb-lg-0 justify-content-between w-full">
                                <div class="blog font-weight-500">Email khách hàng:</div>
                                <div class="text-dark ">{{$userBillInfo->email}}</div>
                            </div>
                            <div class="d-md-flex mb-2 mb-lg-0 justify-content-between w-full">
                                <div class="blog font-weight-500">Số điện thoại khách hàng:</div>
                                <div class="text-dark">{{$userBillInfo->phone}}</div>
                            </div>
                            <div class="d-md-flex mb-2 mb-lg-0 justify-content-between w-full">
                                <div class="blog font-weight-500">Địa chỉ khách hàng:</div>
                                <div class="text-dark d-block">
                                    @if($userBillInfo->address == null)
                                        <p class="text-danger">Vui lòng thêm thông tin địa chỉ</p>
                                    @else
                                        {{$userBillInfo->address}}
                                    @endif
                                </div>

                            </div>
                            <div class="d-md-flex justify-content-between mt-20 mt-md-0 w-full">
                                <div class="blog"><span
                                        class="d-block text-uppercase mt-md-20 mb-md-5 font-18 font-weight-500">Tổng điểm tích lũy: </span>
                                </div>
                                <div class="text-dark ml-lg-0 ml-1">
                                         <span
                                             class="d-block text-uppercase mt-md-20 mb-md-5 font-18 text-dark font-weight-600">{{$userBillInfo->summaryPoint}}</span>
                                </div>
                            </div>
                        </div>

                        <ul class="nav nav-tabs mb-30" id="myTab" role="tablist">
                            <li class="nav-item pl-0 pr-2" role="presentation">
                                <a class="nav-link active pl-0 pr-0" id="tichdiem-tab" data-toggle="tab" href="#lichsutichdien"
                                   role="tab" aria-controls="home" aria-selected="true">Lịch sử tích điểm</a>
                            </li>
                            <li class="nav-item pl-2 pr-2" role="presentation ">
                                <a class="nav-link  px-5" id="doiqua-tab" data-toggle="tab" href="#lichsudoiqua" role="tab"
                                   aria-controls="profile" aria-selected="false">Lịch sử đổi quà</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="lichsutichdien" role="tabpanel"
                                 aria-labelledby="nav-home-tab">
                                <h5 class="d-block text-uppercase mb-5 font-13 font-weight-700">Lịch sử tích điểm</h5>
                                <hr>
                                <div class="invoice-details">
                                    <div class="table-wrap">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-border mb-0">
                                                <thead>
                                                <tr class="border-bottom">
                                                    <th class="">Tên sản phẩm</th>
                                                    <th class="text-left">Mã sản phẩm</th>
                                                    <th class="text-left">Đơn giá</th>
                                                    <th class="text-left">Ngày quét mã</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if($histories->all() == [])
                                                    <tr>
                                                        <td colspan="4" class="">Bạn Chưa Mua Sản Phẩm Nào! <a
                                                                class="text-red "
                                                                href="https://doppelherz.vn/san-pham/">Mua
                                                                Hàng Để Nhận Điểm</a></td>
                                                    </tr>
                                                @else
                                                    @foreach($histories as $historyItem)
                                                        <tr>
                                                            <td class="">{{$historyItem->product_name}}</td>
                                                            <td class="text-left">{{$historyItem->qr_specialCode}}</td>
                                                            <td class="text-left">{{$historyItem->price}}</td>
                                                            <td class="text-left">{{$historyItem->created_at->format('d/m/Y')}}</td>
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
                            </div>
                            <div class="tab-pane fade" id="lichsudoiqua" role="tabpanel"
                                 aria-labelledby="nav-profile-tab">
                                <h5 class="d-block text-uppercase mb-5 font-13 font-weight-700">Lịch sử đổi quà</h5>
                                <hr>
                                <div class="invoice-details">
                                    <div class="table-wrap">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-border mb-0">
                                                <thead>
                                                <tr class="border-bottom">
                                                    <th class="">Tên phần quà</th>
                                                    <th class="text-left">Địa chỉ nhận quà</th>
                                                    <th class="text-left">Ngày đổi quà</th>
                                                    <th class="text-left">Trạng thái</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if($order->all() == [])
                                                    <tr>
                                                        <td colspan="4" class="">Bạn chưa đổi phần quà nào! <a
                                                                class="text-red "
                                                                href="{{$userBillInfo->url}}">Đổi quà ngay!</a></td>
                                                    </tr>
                                                @else
                                                    @foreach($order as $orderItem)
                                                        <tr>
                                                            <td class="">{{$orderItem->gift->name}}</td>
                                                            <td class="text-left">{{$orderItem->address}}</td>
                                                            <td class="text-left">{{$orderItem->created_at->format('d/m/Y')}}</td>
                                                            <td class="text-left">{{$orderItem->status}}</td>
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
                            </div>
                        </div>
{{--                        <h5 class="d-block text-uppercase mb-5 font-13 font-weight-700">Lịch sử tích điểm</h5>--}}
{{--                        <hr>--}}
{{--                        <div class="invoice-details">--}}
{{--                            <div class="table-wrap">--}}
{{--                                <div class="table-responsive">--}}
{{--                                    <table class="table table-striped table-border mb-0">--}}
{{--                                        <thead>--}}
{{--                                        <tr class="border-bottom">--}}
{{--                                            <th class="">Tên sản phẩm</th>--}}
{{--                                            <th class="text-left">Mã sản phẩm</th>--}}
{{--                                            <th class="text-left">Đơn giá</th>--}}
{{--                                            <th class="text-left">Ngày quét mã</th>--}}
{{--                                        </tr>--}}
{{--                                        </thead>--}}
{{--                                        <tbody>--}}
{{--                                        @if($histories->all() == [])--}}
{{--                                            <tr>--}}
{{--                                                <td colspan="4" class="">Bạn Chưa Mua Sản Phẩm Nào!, <a--}}
{{--                                                        class="text-red " href="https://doppelherz.vn/san-pham/">Mua--}}
{{--                                                        Hàng Để Nhận Điểm</a></td>--}}
{{--                                            </tr>--}}
{{--                                        @else--}}
{{--                                            @foreach($histories as $historyItem)--}}
{{--                                                <tr>--}}
{{--                                                    <td class="">{{$historyItem->product_name}}</td>--}}
{{--                                                    <td class="text-left">{{$historyItem->qr_specialCode}}</td>--}}
{{--                                                    <td class="text-left">{{$historyItem->price}}</td>--}}
{{--                                                    <td class="text-left">{{$historyItem->created_at->format('d/m/Y')}}</td>--}}
{{--                                                </tr>--}}
{{--                                            @endforeach--}}
{{--                                        @endif--}}
{{--                                        </tbody>--}}
{{--                                        --}}{{--                                        <tfoot class="border-bottom border-1">--}}
{{--                                        --}}{{--                                        <tr>--}}
{{--                                        --}}{{--                                            <th colspan="3" class="text-right font-weight-600">total</th>--}}
{{--                                        --}}{{--                                            <th class="text-right font-weight-600">$22,010</th>--}}
{{--                                        --}}{{--                                        </tr>--}}
{{--                                        --}}{{--                                        </tfoot>--}}
{{--                                    </table>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            --}}{{--                            <div class="invoice-sign-wrap text-right py-60">--}}
{{--                            --}}{{--                                <img class="img-fluid d-inline-block" src="dist/img/signature.png" alt="sign" />--}}
{{--                            --}}{{--                                <span class="d-block text-light font-14">Digital Signature</span>--}}
{{--                            --}}{{--                            </div>--}}
{{--                        </div>--}}
                        <hr>
                        <ul class="invoice-terms-wrap font-14 list-ul">
                            <li>Các sản phẩm quà hoặc xuất kho trước 15/05/2022 sẽ không có mã QR</li>
                            <li>Mọi thắc mắc về chương trình vui lòng liên hệ hotline: 18001770 hoặc email
                                info@mastertran.vn
                            </li>
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
                        <p>PrM thuộc<a href="https://doppelherz.vn" class="text-dark" target="_blank">Doppelherz</a> ©
                            2022 - Phát triển bởi đội IT <a href="https://tbht.vn" class="text-dark" target="_blank">Thái
                                Hưng</a></p>
                        {{--                        <p>--}}
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <p class="d-inline-block">Theo Dõi Chúng Tôi:</p>
                        <a href="https://www.facebook.com/DoppelherzVietnam"
                           class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span
                                class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                        <a href="https://doppelherz.vn/"
                           class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span
                                class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /Footer -->
    </div>
    <div class="modal  fade" id="changeinfo" tabindex="-1" role="dialog"
         aria-labelledby="changeinfo" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <form action="{{url('/doithongtin',["id"=>$userBillInfo->id])}}"
                  method="POST" class="modal-content">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Đổi Thông Tin</h5>
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="name">Họ và Tên</label>
                        <input type="text" name="name" class="form-control" required id="name"
                               value="{{$userBillInfo->name}}" placeholder="Nguyen Van A">
                        @error("name")
                        <span
                            class="text-danger mt-10">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">Số Điện Thoại</label>
                        <input type="tel" disabled required class="form-control" value="{{$userBillInfo->phone}}"
                               id="phone" placeholder="+84">
{{--                        <small id="emailHelp" class="form-text text-muted text-orange">Thay số điện thoại sẽ thay đổi luôn thông tin--}}
{{--                            đăng nhập.</small>--}}

{{--                        @error("phone")--}}
{{--                        <span--}}
{{--                            class="text-danger mt-10">{{$message}}</span>--}}
{{--                        @enderror--}}

                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label for="email">Email</label>--}}
{{--                        <input type="email" name="email" required class="form-control" value="{{$userBillInfo->email}}"--}}
{{--                               id="email" placeholder="name@example.com">--}}
{{--                        @error("email")--}}
{{--                        <span--}}
{{--                            class="text-danger mt-10">{{$message}}</span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
                    <div class="form-group text-left">
                        <label for="address">Địa Chỉ</label>
                        <textarea class="form-control"
                                  id="address"
                                  required
                                  name="address"
                                  rows="3">{{$userBillInfo->address}}</textarea>

                        @error("address")
                        <span
                            class="text-danger mt-10">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="text-center">
                        <span>Quý khách muốn đổi số điện thoại xin vui lòng liên hệ đến</span><br/>
                        Email: <a class="text-red" href="mailto:info@mastertran.vn">info@mastertran.vn</a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Hủy
                    </button>
                    <button type="submit" class="btn btn-success">Xác Nhận</button>
                </div>
            </form>
        </div>
    </div>
@endsection
