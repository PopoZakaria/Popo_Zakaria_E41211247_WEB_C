<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
 
	<header>
 
		<h2>Blog Sederhana</h2>
		<nav>
			<a href="/blog">HOME</a>
			|
			<a href="/blog/formulir/">FORMULIR</a>
			|
			<a href="/blog/mahasiswa">MAHASISWA</a>
		</nav>
	</header>
		<h3>Routing Blog Laravel 9</h3>
	<p>Seri Tutorial Laravel Lengkap Dari Dasar</p>
	<p>Ini adalah view blog. ada di route blog.</p>
	

 
	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>
 
 
	<!-- bagian konten blog -->
	@yield('konten')
 
 
	<br/>
	<br/>
	
	<footer>
		
	</footer>
 
</body>
</html>