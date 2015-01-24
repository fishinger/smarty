<?php 
	require_once 'libs/Smarty.class.php';

	$smarty = new Smarty;

	$smarty->template_dir = 'templates';
	$smarty->compile_dir = 'templates_c';
	$smarty->config_dir = 'configs';
	$smarty->cache_dir = 'cache';

	$title = 'Rybalka na lesha';
	$autor = 'Salapin';
	$text = '<p>dfdfdfdddddddddddddddd</p>';

	// $smarty->assign('title', $title);
	// $smarty->assign('autor', $autor);
	// $smarty->assign('text', $text);

	$posts = array(
			'autor' => 'Salapin',
			'title' => 'Karas',
			'posts' => array(
					array(
							'id' => '1',
							'name' => 'Volga',
							'data' => '21.01.2015',
							'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum perferendis pariatur inventore odio voluptas commodi, quibusdam consequuntur placeat itaque sed totam iste repellat voluptatem quaerat nisi harum doloribus quisquam assumenda, a dignissimos alias ut consectetur! Consequatur rem accusantium at maiores!'
						),
					array(
							'id' => '2',
							'name' => 'Oka',
							'data' => '25.01.2015',
							'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum perferendis pariatur inventore odio voluptas commodi, quibusdam consequuntur placeat itaque sed totam iste repellat voluptatem quaerat nisi harum doloribus quisquam assumenda, a dignissimos alias ut consectetur! Consequatur rem accusantium at maiores!'
						),
					array(
							'id' => '3',
							'name' => 'Hoper',
							'data' => '21.01.2015',
							'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum perferendis pariatur inventore odio voluptas commodi, quibusdam consequuntur placeat itaque sed totam iste repellat voluptatem quaerat nisi harum doloribus quisquam assumenda, a dignissimos alias ut consectetur! Consequatur rem accusantium at maiores!'
						)
				)
		);
	$smarty->assign('data', $posts);
	$smarty->display('template-1.tpl');