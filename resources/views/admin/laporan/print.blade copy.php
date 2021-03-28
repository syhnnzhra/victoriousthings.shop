<!DOCTYPE html>
<html lang="en">
<table border="1">
	<tr>
		<td><img src="logo.png" width="90" height="90"></td>
		<td>
			<center>
				<font size="4">LAPORAN PENJUALAN</font><br>
				<font size="5">SECOND THINGS</font><br>
				<font size="2">Toko Baju Thtift Dengan Kualitas Premium</font>
			</center>
		</td>
	</tr>
</table>

		<div class="form-group">
			<table class="static" align="center" rules="all" border="1px" style="width: 95%;">
				<tr>
					<th>#</th>
					<th>Order ID</th>
					<th>Item ID</th>
					<th>Nama Barang</th>
					<th>Jumlah Barang</th>
					<th>SubTotal</th>
				</tr>
			</thead>
			<tbody>
				@foreach($report_order as $r)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td><center>{{$r->order_id}}</center></td>
						<td><center>{{$r->item_id}}</center></td>
						<td>{{$r->nama}}</td>
						<td><center>{{$r->qty}}</center></td>
						<td>Rp {{$r->subtotal}}</td>
						{{-- <td>Rp {{number_format($o->qty * $o->item->harga)}}</td> --}}
					</tr>
				@endforeach
					<tr>
						<td colspan="4"><center>Jumlah Pendapatan</center></td>
						<td><center>25</center></td>
						<td><center>20000</center></td>
					</tr>
			</table>
	</div>
</body>
</html>