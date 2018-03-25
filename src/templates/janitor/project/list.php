<?php
global $action;
global $IC;
global $model;
global $itemtype;

$items = $IC->getItems(array("itemtype" => $itemtype, "order" => "status DESC, published_at DESC", "extend" => true));
?>
<div class="scene defaultList <?= $itemtype ?>List">
	<h1>Projects</h1>

	<ul class="actions">
		<?= $JML->listNew(array("label" => "New project")) ?>
	</ul>

	<div class="all_items i:defaultList filters"<?= $JML->jsData() ?>>
<?		if($items): ?>
		<ul class="items">
<?			foreach($items as $item): ?>
			<li class="item item_id:<?= $item["id"] ?>">
				<h3><?= $item["name"] ?></h3>

				<?= $JML->listActions($item) ?>
			</li>
<?			endforeach; ?>
		</ul>
<?		else: ?>
		<p>No content.</p>
<?		endif; ?>
	</div>

</div>
