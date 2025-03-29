<div class="wrapper" id="wrapper" style="max-width: 780px;margin: 20px auto;padding: 5px 10px;">
	<div class="" style="display: flex;justify-content: space-between;">
        <a href="">
            <img style="background: #2196f3 !important;width: 217px;" src="{{  asset('images/logo.png') }}" alt="19507411_Nguyễn Minh Thiện">
        </a>
        <div style="text-align: right;width: 50%">
            <p style="margin: 0"><b>Nhóm 2</b></p>
			<br>
            <p style="margin: 0"><b>MST: </b>.............................. </p>
			<p style="margin: 0"><b>STK: </b> .............................</p>
            <p style="margin: 0"><b>Địa chỉ: </b>Hà Nội</p>
			<p style="margin: 0"><b>Điện thoại: </b>{{ $transaction->tst_phone }}</></p>
        </div>
    </div>
    <h2 style="    font-size: 34px;
    font-weight: bold;
    text-transform: uppercase;
    color: #666;
    padding: 30px 0;">Hoá đơn</h2>
    <p style="text-align: left;"><b>Họ tên người mua hàng: </b>{{ $transaction->tst_name }}</p>
    <p style="text-align: left;"><b>Nội dung: </b> {{ $transaction->tst_note }}</p>
	<div class="table-responsive" style="margin-top: 50px;">
		<div class="table table-striped">
			<table style="width: 100%;border: 1px solid #dedede;">
				<tr style="border-bottom: 1px solid #dedede">
					<th style="text-align: center"><b>STT</b></th>
					<th style="text-align: center"><b>Tên sản phẩm</b></th>
					<th style="text-align: center"><b>Số tiền</b></th>
					<th style="text-align: center"><b>Số lượng</b></th>
					<th style="text-align: center"><b>Thành tiền</b></th>
				</tr>
				@foreach($orders as $key => $order)
					<tr>
						<td style="text-align: center">{{ ($key + 1) }}</td>
						<td style="text-align: center">{{ $order->product->pro_name ?? "[N\A]"  }}</td>
						<td style="text-align: center">{{ number_format($order->od_price,0,',','.') }}VNĐ</td>
						<td style="text-align: center">{{ $order->od_qty }}</td>
						<td style="text-align: center">{{ number_format($order->od_price * $order->od_qty,0,',','.') }}</td>
					</tr>
				@endforeach
			</table>
		</div>
	</div>
	<p style="margin:20px 0;text-align: right"><b>Tổng tiền thanh toán: </b> {{ number_format($transaction->tst_total_money,0,',','.') }} vnđ</p>
	<div style="">
		<div class="col-5" style="padding-bottom: 100px; width: 50%;float: left;text-align: center">
			<h3 style="margin:0">Người mua hàng</h3>
			<p style="margin: 0"><i>(Ký ghi rõ họ tên)</i></p>
			<span style="margin-top: 50px;display: block"><i>{{ $transaction->tst_name }}</i></span>
		</div>
		<div class="col-5" style="padding-bottom: 100px; width: 50%;float: left;text-align: center">
			<h3 style="margin:0">Người bán</h3>
			<p style="margin: 0"><i>(Ký ghi rõ họ tên)</i></p>
			<span style="margin-top: 50px;display: block"><i>Nhóm 2</i></span>
		</div>
		<div style="clear: both"></div>
	</div>
</div>