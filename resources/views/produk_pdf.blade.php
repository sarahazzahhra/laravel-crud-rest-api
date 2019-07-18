<!DOCTYPE html>
<html>
<head>
	<title>List of products & price</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
    <center>
		<h5>List of products & price</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Products Name</th>
				<th>Price</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($produk as $pr)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$pr->nama_produk}}</td>
				<td>{{$pr->harga_produk}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>