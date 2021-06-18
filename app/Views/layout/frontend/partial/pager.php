<?php $pager->setSurroundCount(2);
?>
<nav class="pt-4">
    <ul class="pagination pagination-style-01 text-small font-weight-500 align-items-center">
        <li class="page-item"><a class="page-link" href="<?= $pager->getFirst(); ?>"><i class="fa fa-angle-double-left"></i></a>
        </li>
        <li class="page-item"><a class="page-link" href="<?= $pager->getPrevious() ?>"><i class="fa fa-angle-left"></i></a>
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
        <li class="page-item"><a class="page-link" href="<?= $pager->getNext(); ?>"><i class="fa fa-angle-right"></i></a></li>
        <li class="page-item"><a class="page-link" href="<?= $pager->getLast(); ?>"><i class="fa fa-angle-double-right"></i></a></li>
        <?php if ($pager->hasNext()) : ?>
        <?php endif; ?>
    </ul>
</nav>