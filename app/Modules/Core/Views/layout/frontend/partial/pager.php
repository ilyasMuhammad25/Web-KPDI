<?php $pager->setSurroundCount(2);
?>
<nav class="pt-4">
    <ul class="pagination pagination-style-01 text-small font-weight-500 align-items-center">
        <li class="page-item"><a class="page-link" href="<?= $pager->getFirst(); ?>"><i class="arrow_carrot-left_alt"></i></a>
        </li>
        <li class="page-item"><a class="page-link" href="<?= $pager->getPrevious() ?>"><i class="arrow_carrot-left"></i></a>
        </li>
        <?php if ($pager->hasPrevious()) : ?>
        <?php endif; ?>
        <?php foreach ($pager->links() as $link) : ?>
            <?php if ($link['active']) {
                $active = 'active';
            } else {
                $active = '';
            } ?>
            <li class="page-item <?= $active; ?>"><a class="page-link" href="<?= $link['uri']; ?>"><?= $link['title'] ?></a></li>
        <?php endforeach; ?>
        <li class="page-item"><a class="page-link" href="<?= $pager->getNext(); ?>"><i class="arrow_carrot-right"></i></a></li>
        <li class="page-item"><a class="page-link" href="<?= $pager->getLast(); ?>"><i class="arrow_carrot-right_alt"></i></a></li>
        <?php if ($pager->hasNext()) : ?>
        <?php endif; ?>
    </ul>
</nav>