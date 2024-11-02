<?= html5('doctype') ?>
<?=
html5(
	'html',
	array(),
	array(
		html5('head', array(), html5('title', array(), $title)),
		html5('body', array(), $this->template->render_section('content'))
	)
)
?>
