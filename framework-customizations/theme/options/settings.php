<?php if(!defined('FW')) die('Silence is golden.');

$options = array(
	'news1-image' => array(
		'type' => 'upload',
		'label' => __('Фото новости 1 (250 x 250 px)', 'guild'),
		'images_only' => true
	),
	'news1-date' => array(
		'type' => 'text',
		'label' => __('Дата новости 1', 'guild'),
		'images_only' => false
	),
	'news1-header' => array(
		'type' => 'text',
		'label' => __('Заголовок новости 1 (90 символов)', 'guild'),
		'images_only' => false
	),
	'news1-text' => array(
		'type' => 'text',
		'label' => __('Текст новости 1 (260 символов)', 'guild'),
		'images_only' => false
	),
	'news2-image' => array(
		'type' => 'upload',
		'label' => __('Фото новости 2 (250 x 250 px)', 'guild'),
		'images_only' => true
	),
	'news2-date' => array(
		'type' => 'text',
		'label' => __('Дата новости 2', 'guild'),
		'images_only' => false
	),
	'news2-header' => array(
		'type' => 'text',
		'label' => __('Заголовок новости 2 (90 символов)', 'guild'),
		'images_only' => false
	),
	'news2-text' => array(
		'type' => 'text',
		'label' => __('Текст новости 2 (260 символов)', 'guild'),
		'images_only' => false
	),
	'news3-image' => array(
		'type' => 'upload',
		'label' => __('Фото новости 3 (250 x 250 px)', 'guild'),
		'images_only' => true
	),
	'news3-date' => array(
		'type' => 'text',
		'label' => __('Дата новости 3', 'guild'),
		'images_only' => false
	),
	'news3-header' => array(
		'type' => 'text',
		'label' => __('Заголовок новости 3 (90 символов)', 'guild'),
		'images_only' => false
	),
	'news3-text' => array(
		'type' => 'text',
		'label' => __('Текст новости 3 (260 символов)', 'guild'),
		'images_only' => false
	),
	'news4-image' => array(
		'type' => 'upload',
		'label' => __('Фото новости 4 (250 x 250 px)', 'guild'),
		'images_only' => true
	),
	'news4-date' => array(
		'type' => 'text',
		'label' => __('Дата новости 4', 'guild'),
		'images_only' => false
	),
	'news4-header' => array(
		'type' => 'text',
		'label' => __('Заголовок новости 4 (90 символов)', 'guild'),
		'images_only' => false
	),
	'news4-text' => array(
		'type' => 'text',
		'label' => __('Текст новости 4 (260 символов)', 'guild'),
		'images_only' => false
	),
	'news5-image' => array(
		'type' => 'upload',
		'label' => __('Фото новости 5 (250 x 250 px)', 'guild'),
		'images_only' => true
	),
	'news5-date' => array(
		'type' => 'text',
		'label' => __('Дата новости 5', 'guild'),
		'images_only' => false
	),
	'news5-header' => array(
		'type' => 'text',
		'label' => __('Заголовок новости 5 (90 символов)', 'guild'),
		'images_only' => false
	),
	'news5-text' => array(
		'type' => 'text',
		'label' => __('Текст новости 5 (260 символов)', 'guild'),
		'images_only' => false
	),
	'news6-image' => array(
		'type' => 'upload',
		'label' => __('Фото новости 6 (250 x 250 px)', 'guild'),
		'images_only' => true
	),
	'news6-date' => array(
		'type' => 'text',
		'label' => __('Дата новости 6', 'guild'),
		'images_only' => false
	),
	'news6-header' => array(
		'type' => 'text',
		'label' => __('Заголовок новости 6 (90 символов)', 'guild'),
		'images_only' => false
	),
	'news6-text' => array(
		'type' => 'text',
		'label' => __('Текст новости 6 (260 символов)', 'guild'),
		'images_only' => false
	),
	'partner1-image' => array(
		'type' => 'upload',
		'label' => __('Партнер 1', 'guild'),
		'images_only' => true
	),
	'partner2-image' => array(
		'type' => 'upload',
		'label' => __('Партнер 2', 'guild'),
		'images_only' => true
	),
	'partner3-image' => array(
		'type' => 'upload',
		'label' => __('Партнер 3', 'guild'),
		'images_only' => true
	),
	'partner4-image' => array(
		'type' => 'upload',
		'label' => __('Партнер 4', 'guild'),
		'images_only' => true
	),
	'partner5-image' => array(
		'type' => 'upload',
		'label' => __('Партнер 5', 'guild'),
		'images_only' => true
	),
	'partner6-image' => array(
		'type' => 'upload',
		'label' => __('Партнер 6', 'guild'),
		'images_only' => true
	),
	'teammate1-image' => array(
		'type' => 'upload',
		'label' => __('Сотрудник 1', 'guild'),
		'images_only' => true
	),
	'teammate1-name' => array(
		'type' => 'text',
		'label' => __('Имя сотрудника 1', 'guild'),
		'images_only' => false
	),
	'teammate1-post' => array(
		'type' => 'text',
		'label' => __('Должность сотрудника 1', 'guild'),
		'images_only' => false
	),
	'teammate2-image' => array(
		'type' => 'upload',
		'label' => __('Сотрудник 2', 'guild'),
		'images_only' => true
	),
	'teammate2-name' => array(
		'type' => 'text',
		'label' => __('Имя сотрудника 2', 'guild'),
		'images_only' => false
	),
	'teammate2-post' => array(
		'type' => 'text',
		'label' => __('Должность сотрудника 2', 'guild'),
		'images_only' => false
	),
	'teammate3-image' => array(
		'type' => 'upload',
		'label' => __('Сотрудник 3', 'guild'),
		'images_only' => true
	),
	'teammate3-name' => array(
		'type' => 'text',
		'label' => __('Имя сотрудника 3', 'guild'),
		'images_only' => false
	),
	'teammate3-post' => array(
		'type' => 'text',
		'label' => __('Должность сотрудника 3', 'guild'),
		'images_only' => false
	),
	'teammate4-image' => array(
		'type' => 'upload',
		'label' => __('Сотрудник 4', 'guild'),
		'images_only' => true
	),
	'teammate4-name' => array(
		'type' => 'text',
		'label' => __('Имя сотрудника 4', 'guild'),
		'images_only' => false
	),
	'teammate4-post' => array(
		'type' => 'text',
		'label' => __('Должность сотрудника 4', 'guild'),
		'images_only' => false
	),
	'teammate5-image' => array(
		'type' => 'upload',
		'label' => __('Сотрудник 5', 'guild'),
		'images_only' => true
	),
	'teammate5-name' => array(
		'type' => 'text',
		'label' => __('Имя сотрудника 5', 'guild'),
		'images_only' => false
	),
	'teammate5-post' => array(
		'type' => 'text',
		'label' => __('Должность сотрудника 5', 'guild'),
		'images_only' => false
	),
	'teammate6-image' => array(
		'type' => 'upload',
		'label' => __('Сотрудник 6', 'guild'),
		'images_only' => true
	),
	'teammate6-name' => array(
		'type' => 'text',
		'label' => __('Имя сотрудника 6', 'guild'),
		'images_only' => false
	),
	'teammate6-post' => array(
		'type' => 'text',
		'label' => __('Должность сотрудника 6', 'guild'),
		'images_only' => false
	),
	'teammate7-image' => array(
		'type' => 'upload',
		'label' => __('Сотрудник 7', 'guild'),
		'images_only' => true
	),
	'teammate7-name' => array(
		'type' => 'text',
		'label' => __('Имя сотрудника 7', 'guild'),
		'images_only' => false
	),
	'teammate7-post' => array(
		'type' => 'text',
		'label' => __('Должность сотрудника 7', 'guild'),
		'images_only' => false
	),
	'teammate8-image' => array(
		'type' => 'upload',
		'label' => __('Сотрудник 8', 'guild'),
		'images_only' => true
	),
	'teammate8-name' => array(
		'type' => 'text',
		'label' => __('Имя сотрудника 8', 'guild'),
		'images_only' => false
	),
	'teammate8-post' => array(
		'type' => 'text',
		'label' => __('Должность сотрудника 8', 'guild'),
		'images_only' => false
	),
	'teammate9-image' => array(
		'type' => 'upload',
		'label' => __('Сотрудник 9', 'guild'),
		'images_only' => true
	),
	'teammate9-name' => array(
		'type' => 'text',
		'label' => __('Имя сотрудника 9', 'guild'),
		'images_only' => false
	),
	'teammate9-post' => array(
		'type' => 'text',
		'label' => __('Должность сотрудника 9', 'guild'),
		'images_only' => false
	),
	'teammate10-image' => array(
		'type' => 'upload',
		'label' => __('Сотрудник 10', 'guild'),
		'images_only' => true
	),
	'teammate10-name' => array(
		'type' => 'text',
		'label' => __('Имя сотрудника 10', 'guild'),
		'images_only' => false
	),
	'teammate10-post' => array(
		'type' => 'text',
		'label' => __('Должность сотрудника 10', 'guild'),
		'images_only' => false
	),
	'teammate11-image' => array(
		'type' => 'upload',
		'label' => __('Сотрудник 11', 'guild'),
		'images_only' => true
	),
	'teammate11-name' => array(
		'type' => 'text',
		'label' => __('Имя сотрудника 11', 'guild'),
		'images_only' => false
	),
	'teammate11-post' => array(
		'type' => 'text',
		'label' => __('Должность сотрудника 11', 'guild'),
		'images_only' => false
	),
	'teammate12-image' => array(
		'type' => 'upload',
		'label' => __('Сотрудник 12', 'guild'),
		'images_only' => true
	),
	'teammate12-name' => array(
		'type' => 'text',
		'label' => __('Имя сотрудника 12', 'guild'),
		'images_only' => false
	),
	'teammate12-post' => array(
		'type' => 'text',
		'label' => __('Должность сотрудника 12', 'guild'),
		'images_only' => false
	),
	'teammate13-image' => array(
		'type' => 'upload',
		'label' => __('Сотрудник 13', 'guild'),
		'images_only' => true
	),
	'teammate13-name' => array(
		'type' => 'text',
		'label' => __('Имя сотрудника 13', 'guild'),
		'images_only' => false
	),
	'teammate13-post' => array(
		'type' => 'text',
		'label' => __('Должность сотрудника 13', 'guild'),
		'images_only' => false
	),
	'teammate14-image' => array(
		'type' => 'upload',
		'label' => __('Сотрудник 14', 'guild'),
		'images_only' => true
	),
	'teammate14-name' => array(
		'type' => 'text',
		'label' => __('Имя сотрудника 14', 'guild'),
		'images_only' => false
	),
	'teammate14-post' => array(
		'type' => 'text',
		'label' => __('Должность сотрудника 14', 'guild'),
		'images_only' => false
	),
	'teammate15-image' => array(
		'type' => 'upload',
		'label' => __('Сотрудник 15', 'guild'),
		'images_only' => true
	),
	'teammate15-name' => array(
		'type' => 'text',
		'label' => __('Имя сотрудника 15', 'guild'),
		'images_only' => false
	),
	'teammate15-post' => array(
		'type' => 'text',
		'label' => __('Должность сотрудника 15', 'guild'),
		'images_only' => false
	),
	'youtubeLink' => array(
		'type' => 'text',
		'label' => __('Ссылка на YouTube', 'guild'),
		'images_only' => false
	)
	,
	'discordLink' => array(
		'type' => 'text',
		'label' => __('Ссылка на Discord', 'guild'),
		'images_only' => false
	),
	'mediumLink' => array(
		'type' => 'text',
		'label' => __('Ссылка на Medium', 'guild'),
		'images_only' => false
	),
	'tgLink' => array(
		'type' => 'text',
		'label' => __('Ссылка на Telegram', 'guild'),
		'images_only' => false
	),
	'vkLink' => array(
		'type' => 'text',
		'label' => __('Ссылка на VK', 'guild'),
		'images_only' => false
	)
);