<?php
/*
	Question2Answer by Gideon Greenspan and contributors
	http://www.question2answer.org/

	File: qa-include/qa-lang-emails.php
	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'a_commented_body' => "Tvoj odgovor na ^site_title ima nov komentar by ^c_handle:\n\n^open^c_content^close\n\nOdgovor je bil:\n\n^open^c_context^close\n\nLahko se odzoveš z lastnim komentarjem:\n\n^url\n\nHvala,\n\n^site_title",
		'a_commented_subject' => 'Tvoj odgovor na ^site_title ima nov komentar',

		'a_followed_body' => "Tvoj odgovor na ^site_title ima novo sorodno vprašanje s ^q_handle:\n\n^open^q_title^close\n\nOdgovor je bil:\n\n^open^a_content^close\n\nKlikni spodaj za naslednje vprašanje:\n\n^url\n\nHvala,\n\n^site_title",
		'a_followed_subject' => 'Tvoj odgovor na ^site_title ima sorodno vprašanje',

		'a_selected_body' => "Čestitamo! Tvoj odgovor na ^site_title je bil izbran kot najboljši s ^s_handle:\n\n^open^a_content^close\n\nVprašanje je:\n\n^open^q_title^close\n\nKlikni spodaj, da vidiš svoj odgovor:\n\n^url\n\nHvala,\n\n^site_title",
		'a_selected_subject' => 'Tvoj odgovor na ^site_title je bil izbran!',

		'c_commented_body' => "Nov komentar od ^c_handle po tvojem komentarju na ^site_title:\n\n^open^c_content^close\n\nRazprava je naslednja:\n\n^open^c_context^close\n\nLahko se odzoveš z dodatnim komentarjem:\n\n^url\n\nHvala,\n\n^site_title",
		'c_commented_subject' => 'Tvoj komentar na ^site_title je bil dodan',

		'confirm_body' => "Prosim klikni spodaj za potrditev svojega emaila na ^site_title.\n\n^url\n\nHvala,\n^site_title",
		'confirm_subject' => '^site_title - Potrditveni email',

		'feedback_body' => "Komentarji:\n^message\n\nIme:\n^name\n\nEmail:\n^email\n\nPrejšnja stran:\n^previous\n\nUporabnik:\n^url\n\nIP naslov:\n^ip\n\nBrskalnik:\n^browser",
		'feedback_subject' => '^ feedback',

		'flagged_body' => "Objava osebe ^p_handle je prejela ^flags:\n\n^open^p_context^close\n\nKlikni spodaj za ogled objave:\n\n^url\n\n\nKlikni spodaj za pregled vseh označenih objav:\n\n^a_url\n\n\nHvala,\n\n^site_title",
		'flagged_subject' => '^site_title ima označeno objavo',

		'moderate_body' => "Objava osebe ^p_handle potrebuje tvojo potrditev:\n\n^open^p_context^close\n\nKlikni spodaj za odobritev ali zavrnitev objave:\n\n^url\n\n\nKlikni spodaj za pregled vseh čakajočih objav:\n\n^a_url\n\n\nHvala,\n\n^site_title",
		'moderate_subject' => '^site_title moderation',

		'new_password_body' => "Tvoje novo geslo za ^site_title je spodaj.\n\nGeslo: ^password\n\nPriporočamo da zamenjate geslo takoj po prvem vpisu.\n\nHvala,\n^site_title\n^url",
		'new_password_subject' => '^site_title - Novo geslo',

		'private_message_body' => "Prejel si novo zasebno sporočilo od ^f_handle na ^site_title:\n\n^open^message^close\n\n^moreThank you,\n\n^site_title\n\n\nZa blokiranje zasebnih sporočil obišči svoj uporabniški profil:\n^a_url",
		'private_message_info' => "Več informacij o ^f_handle:\n\n^url\n\n",
		'private_message_reply' => "Klikni spodaj za odgovor na ^f_handle z zasebnim sporočilom:\n\n^url\n\n",
		'private_message_subject' => 'Sporočilo od ^f_handle na ^site_title',

		'q_answered_body' => "Na tvoje vprašanje ^site_title je odgovoril ^a_handle:\n\n^open^a_content^close\n\nTvoje vprašanje je bilo:\n\n^open^q_title^close\n\nČe ti je odgovor všeč, ga lahko izbereš kot najboljšega:\n\n^url\n\nHvala,\n\n^site_title",
		'q_answered_subject' => 'Tvoje vprašanje ^site_title je bilo odgovorjeno',

		'q_commented_body' => "Tvoje vprašanje na ^site_title ima nov komentar uporabnika ^c_handle:\n\n^open^c_content^close\n\nTvoje vprašanje je bilo:\n\n^open^c_context^close\n\nOdzoveš se lahko z komentarjem:\n\n^url\n\nHvala,\n\n^site_title",
		'q_commented_subject' => Tvoje vprašanje ^site_title ima nov komentar',

		'q_posted_body' => "Novo vprašanje je postavil ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nKlikni spodaj za ogled vprašanja:\n\n^url\n\nHvala,\n\n^site_title",
		'q_posted_subject' => '^site_title ima novo vprašanje',

		'remoderate_body' => "Urejena objava osebe ^p_handle potrebuje odobritev:\n\n^open^p_context^close\n\nKlikni spodaj za sprejem ali prezrtje urejene objave:\n\n^url\n\n\nKlikni spodaj za pregled vseh čakajočih objav:\n\n^a_url\n\n\nHvala,\n\n^site_title",
		'remoderate_subject' => '^site_title moderiranje',

		'reset_body' => "Klikni spodaj za reset pozabljenega gesla za ^site_title.\n\n^url\n\nDruga možnost je, da vnesete spodnjo kodo v dano polje.\n\nKoda: ^code\n\nČe niste vprašali za ponastavitev gesla, prezrite to sporočilo.\n\nHvala,\n^site_title",
		'reset_subject' => '^site_title - Reset pozabljenega gesla',

		'to_handle_prefix' => "^,\n\n",

		'u_registered_body' => "Nov uporabnik se je registriral kot ^u_handle.\n\nKlikni spodaj za pregled profila:\n\n^url\n\nHvala,\n\n^site_title",
		'u_registered_subject' => '^site_title ima novega registriranega uporabnika',
		'u_to_approve_body' => "Nov uporabnik se je registriral kot ^u_handle.\n\nKlikni spodaj za sprejem uporabnika:\n\n^url\n\nKlikni spodaj za ogled vseh čakajočih uporabnikov:\n\n^a_url\n\nHvala,\n\n^site_title",

		'u_approved_body' => "Tvoj nov uporabniški račun lahko vidiš tukaj:\n\n^url\n\nHvala,\n\n^site_title",
		'u_approved_subject' => 'Tvoj ^site_title uporabnik je bil odobren',

		'wall_post_body' => "^f_handle je objavil na tvojo steno ^site_title:\n\n^open^post^close\n\nOdzoveš se lahko tukaj:\n\n^url\n\nHvala,\n\n^site_title",
		'wall_post_subject' => 'Objavi ^site_title na svojo steno',

		'welcome_body' => "Hvala za registracijo na ^site_title.\n\n^custom^confirm Tvoji podatki so:\n\nUporabniško ime: ^handle\nEmail: ^email\n\nShrani te podatke za v bodoče.\n\nHvala,\n\n^site_title\n^url",
		'welcome_confirm' => "Prosim klikni spodaj za potrditev email naslova.\n\n^url\n\n",
		'welcome_subject' => 'Dobrodošli na ^site_title!',
	);


/*
	Omit PHP closing tag to help avoid accidental output
*/
