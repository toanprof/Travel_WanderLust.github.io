@extends('master');
@section('content')
    <div class="row">
        <div class="shoping-cart section-padding">
            <div class="container" style="margin-top:100px;margin-bottom:30px">
                <div class="row" style="margin-bottom:120px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="headline">
                            <h2>
                                <b>Shopping cart</b>
                            </h2>
                        </div>
                        <div class="table-responsive" style="margin-top:50px">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="cart-product item">#</th>
                                        <th class="cart-product-name item">ID Detail</th>
                                        <th>Type Payment</th>
                                        <th class="cart-unit item">Action</th>
                                        <th class="cart-delivery item">From</th>
                                        <th class="cart-delivery item">To</th>
                                        <th class="cart-delivery item">Unit Price</th>
                                        <th class="cart-delivery item">Total Price</th>
                                    </tr>
                                </thead>
                                <!-- /thead -->
                                <tbody>
                                    @if (isset($data))
                                        @foreach ($data as $key => $value)
                                            <tr>
                                                <th style="text-align:center">{{ $key + 1 }}</th>
                                                <td style="text-align:center">{{ $value->ma_hoa_don }}</td>
                                                <td style="text-align:center">
                                                    @if ($value->loai_thanh_toan == 1)
                                                        <span>VNPAY</span>
                                                    @else
                                                        <span>Cash</span>
                                                    @endif
                                                </td>
                                                <td style="text-align:center">
                                                    @if ($value->tinh_trang == 0)
                                                        <span style="color:red">Chưa thanh toán</span>
                                                    @else
                                                        <span class="text-primary">Đã thanh toán</span>
                                                    @endif
                                                </td>
                                                <td style="text-align:center">{{ $value->ngay_bat_dau }}</td>
                                                <td style="text-align:center">{{ $value->ngay_ket_thuc }}</td>
                                                <td style="text-align:center">${{ $value->don_gia }}</td>
                                                <td style="text-align:center">${{ $value->thanh_tien }}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                                <!-- /tbody -->
                            </table>
                            <!-- /table -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script></script>
@endsection
