<!DOCTYPE html>
<html lang="en">
<body>
	<body bgcolor="white">
		<font face="Arial" color="black"> <p align="center"> PEMERINTAH KOTA CIREBON </p></font>
		<font face="Arial" color="blue"> <p align="center"> DINAS PENDIDIKAN </p></font>
		<font face="Arial" color="green"> <p align="center"> SEKOLAH MENENGAH KEJURUAN NEGERI 1 CIREBON </p></font>
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