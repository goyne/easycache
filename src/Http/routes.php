<?php

Route::get('easy-cache/test', function () {

	\Config::set('app.domain', \Goyne\EasyCache\Models\Domain::find(1));

	//dd(\Goyne\EasyCache\Models\Item::getAll());
	$items = config('app.domain')->getAllActiveItems();

	$items->flush();

	return 'Test';
});