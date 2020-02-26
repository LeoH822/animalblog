<?php

	Route::set("index.php", function() {
		Index::CreateView("Index");
	});


	Route::set("about_us", function() {
		AboutUs::CreateView("AboutUs");
	});


	Route::set("contact_us", function() {
		ContactUs::CreateView('ContactUs');
	});


	Route::set("login", function() {
		Login::CreateView('Login');
	})

?>