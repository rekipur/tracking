<!DOCTYPE html>
<html>
<head>
	<title>Akses Ditolak</title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300">
</head>
<style type="text/css">
	html,body { height: 100%; }
	body{
		margin: 0; padding: 0; width: 100%; color: gray; display: table; font-weight: 300; font-family: 'Source Sans Pro'; }
	.container {
		text-align: center; display: table-cell;vertical-align: middle;	}
	.content {
		text-align: center; display: inline-block; }
	.title {
		font-size: 72px; margin-bottom: 40px; }
</style>
<body>
	<div class="container">
		<div class="content">
			<div class="title">:(</div>
			<p>Maaf, Anda tidak memiliki akses untuk fitur ini.</p>
			<p><a href="{{ url('/') }}">Kembali ke Halaman Awal</a></p>
		</div>
	</div>
</body>
</html>