<?php $this->template->extend('templates/default') ?>

<?php
$this->template->section(
	'content',
	array(
		$this->template->include('templates/image', array('url' => 'https://picsum.photos/300/200')),
		
		html5('h1', array(), 'Template Engine'),
		html5('p', array(), 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.')
	)
)
?>
