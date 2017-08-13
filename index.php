<?php
	require_once "sef_lib.php";
	$data = getPageData();
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $data['title'] ?></title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta http-equiv="content-type" content="text/html" charset="utf-8" />
	</head>
	<body>
		<a href="/article/1" title="article">Статья 1</a>
		<a href="/article/2" title="article">Статья 2</a>
		<a href="/article/3" title="article">Статья 3</a>
		<a href="/article/4" title="article">Статья 4</a>
		<a href="/article/5" title="article">Статья 5</a>
		<a href="/article/6" title="article">Статья 6</a>
		<a href="/article/7" title="article">Статья 7</a>
		<a href="/article/8" title="article">Статья 8</a>
		<a href="/article/9" title="article">Статья 9</a>
		<a href="/article/10" title="article">Статья 10</a>
		<p>
			<?php
				echo $data['title'];
			?>
		</p>
	</body>
</html>