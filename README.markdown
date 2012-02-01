Transliterate is a simple class to transliterate strings

*Usage example*:

	<?php
		require_once 'Transliterate.php';
		$t = new Transliterate();
		echo $t->transliterate('Привет мир');
		echo $t->slug('Привет мир')
	?>

