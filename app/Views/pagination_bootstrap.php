<?php $pager->setSurroundCount(2); ?>
<nav aria-label="Page navigation example">
    <ul class="pagination pagination custom-pagination rounded-3 overflow-hidden">
        <?php if ($pager->hasPrevious()) : ?>
        <li class="page-item">
            <a class="page-link" href="<?= $pager->getFirst() ?>" aria-label="First">
                <span aria-hidden="true">«</span>
            </a>
        </li>
        
        <?php endif; ?>

        <?php foreach ($pager->links() as $link) : ?>
        <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
            <a class="page-link" href="<?= $link['uri'] ?>">
                <?= $link['title'] ?>
            </a>
        </li>
        <?php endforeach; ?>

        <?php if ($pager->hasNext()) : ?>
        <li class="page-item">
            <a class="page-link" href="<?= $pager->getLast() ?>" aria-label="Last">
                <span aria-hidden="true">»</span>
            </a>
        </li>
        <?php endif; ?>
    </ul>
</nav>

<style>
    .custom-pagination .page-link {
    background-color: #F2F2F2; /* Cor de fundo */
    color: black; /* Cor do texto */
    border: none;
}

.custom-pagination .page-item.active .page-link {
    background-color: #212529; /* Cor do item ativo */
    color: white;
    border: none;
}

</style>