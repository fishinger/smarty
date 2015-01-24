<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{$title}</title>
	<style>
		.container{
			width: 960px;
			margin: 0 auto;
		}
		article{
			border-bottom: 1px solid #414D40;
			margin: 15px;
		}
	</style>
</head>
<body>
	<div class="container">
		{foreach item=post from=$data.posts}
			<article>
				<h1>{$post.name|upper}</h1>
				<h2>{$post.id}</h2>
				<h3>{$post.data|date_format:"%Y %m %d"}</h3>
				<p>{$post.text|truncate:300}</p>
			</article>
		{foreachelse}
			<h1>Постов нет</h1>
		{/foreach}
	</div>
	
</body>
</html>