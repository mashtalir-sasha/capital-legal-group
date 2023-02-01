<?php

Route::get('', ['as' => 'admin.dashboard', function () {
	$content = 'Виберіть розділ для редагування.';
	return AdminSection::view($content, 'Адмін панель');
}]);
