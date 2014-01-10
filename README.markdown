Transliterate is a simple class to transliterate and slugify strings

*Usage example*:

	<?php
		$t = new Transliterate();
		echo $t->translit('Привет мир');
		echo $t->slug('Привет мир');
	?>

Will produce:

	Privet mir
	privet-mir
