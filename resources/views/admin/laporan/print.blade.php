<!DOCTYPE html>
<html lang="en">
<body>
	<table width="100%">
		<tr>
			<td width="20%">
				
			</td>
			<td width="60%">
				<center>
					<h2 style='margin-bottom:-5px'>SECOND THINGS</h2>
					<h3>LAPORAN  PENJUALAN</h3>
				<p>Toko Baju Thrift Kualitas High Dan Premium</p>
				<p>SecondThings@gmail.com</p>
				</center>
			</td>
			<td width="20%">
			
			</td>
		</tr>
</table>
<hr>
<br>
		<div class="form-group">
			<table class="static" align="center" rules="all" border="1px" style="width: 95%;">
				<tr>
					<th>#</th>
					<th>Order ID</th>
					<th>Item ID</th>
					<th>Item's Name</th>
					<th>Harga</th>
					<th>Qty</th>
					<th>SubTotal</th>
				</tr>
			</thead>
			<tbody>
				@foreach($report_order as $r)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{$r->order_id}}</td>
						<td>{{$r->item_id}}</td>
						<td>{{$r->item->nama}}</td>
						<td>Rp {{number_format($r->item->harga) }}</td>
						<td><center>{{$r->qty}}</center></td>
						<td>Rp {{number_format($r->item->harga * $r->qty)}}</td>
					</tr>
				@endforeach
				<tr>
					<?php
						$subtotal = 0;
						$jmlh = 0;
						foreach($report_order as $key=>$value)
						{
							$hasil = $value->qty * $value->item->harga;
							$subtotal+= $hasil;

							$jmlh+= $value->qty;
						}
					?>
					<td colspan="5"><center>Jumlah Pendapatan</center></td>
					<td> <center> {{number_format($jmlh)}} </center></td>
					<td>Rp {{number_format($subtotal)}}</td>
				</tr>
			</table>
	</div>
</body>
</html>