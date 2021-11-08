<nav class="" aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?= base_url('katalog') ?>"><i class="fa fa-home"></i> <?= lang('Katalog.label.home') ?></a></li>
		<li class="breadcrumb-item" aria-current="page"><?= lang('Katalog.module') ?> </li>
		<li class="breadcrumb-item"><a href="<?=base_url('katalog?slug='.$slug)?>"><?= lang('Katalog.module') ?> <?=$slug_title?></a></li>
		<li class="active breadcrumb-item" aria-current="page"><?=$label?> <?= lang('Katalog.module') ?> <?=$slug_title?></li>
	</ol>
</nav>

