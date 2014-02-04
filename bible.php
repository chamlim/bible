<?php
include_once('config.php');
include_once('BibleDAO.php');

$books = BibleDAO::getBooks();
$defaultChapters = BibleDAO::getChapterNumbers(1);
$defaultVerses = BibleDAO::getVerseNumbers(1, 1);
$defaultVerseText = BibleDAO::getVerseText(1, 1, 1);
?>

<div>
	<div class = "span " id = "header">
		<div class = "span" id = "header1">
			<h3 id= "nav">Digital Bible</h3>
		</div>

		<div class = "span" id = "header2">

			Books:
			<select name="books" id="books">
				<?php foreach($books as $id => $book): ?>
					<option value="<?= $id ?>"><?= $book ?></option>
				<?php endforeach ?>
			</select>

			Chapters:
			<select name="chapters" id="chapters">
				<?php for($i = 1; $i <= $defaultChapters; $i++): ?>
					<option value="<?= $i ?>"><?= $i ?></option>
				<?php endfor ?>
			</select>

			Verses:
			<select name="verses" id="verses">
				<?php for($i = 1; $i <= $defaultVerses; $i++): ?>
					<option value="<?= $i ?>"><?= $i ?></option>
				<?php endfor ?>
			</select>

		</div>
	</div>

	<div class = "span">
		<textarea id = "verse_text" disabled><?= $defaultVerseText ?></textarea>
	</div>

	<div class = "span" id = "header3">
		<div class = "span well" id = "search">
			<h3 id= "nav"><center>Search</center></h3>
			<input type="text" class="span3 "  id = "name" placeholder = "Search word">
		</div>
		<div>
			<textarea id = "search" disabled></textarea>
		</div>
	</div>

</div>



<script type="text/javascript" src="jquery.1.10.2.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src = "bible.js">

</script>