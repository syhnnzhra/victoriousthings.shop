<!DOCTYPE html>
<html lang="en">
<body>
	<body bgcolor="white">
		<font size="3"  color="black"> <p align="center"> LAPORAN HASIL PENJUALAN </p></font>
		<font size="5" face="Comic Sans" color="black"> <p align="center"> SECONDD THINGS </p></font>
		<font size="2" color="black"> <p align="center"> Toko Jual Baju Dengan Kualitas High Premium </p></font>
		<font face="Arial" color="black" size="3"> <p align="center"> JL. Perjuangan By Pass Sunyaragi Telp.(0231) 123456 Cirebon 45141 </p></font>
		<hr>
		<br>
		<div class="form-group">
			<table class="static" align="center" rules="all" border="1px" style="width: 95%;">
				<tr>
					<th>#</th>
					<th>Order ID</th>
					<th>Item ID</th>
					<th>Nama Barang</th>
					<th>Jumlah</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				@foreach($report_order as $r)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td><center>{{$r->order_id}}</center></td>
						<td><center>{{$r->item_id}}</center></td>
						<td>{{$r->item->nama}}</td>
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
					<td colspan="4"><center>Jumlah Pendapatan</center></td>
					<td> <center> {{number_format($jmlh)}} </center></td>
					<td>Rp {{number_format($subtotal)}}</td>
				</tr>
			</table>
	</div>
</body>
</html>