<?php
    $this->assign('title', __('Address').' - ');
?>
        <main>
            <div class="container px-4 py-5">
                <h2 class="pb-2 border-bottom"><?= __('Address') ?></h2>
                <?php if ($address): ?>
                <p>Please set the header <em>Accept</em> to <code>application/json</code> or append <code>.json</code> to your URL.</p>
                <?php else: ?>
                <p><?= __('Something went wrong') ?></p>
                <?php endif; ?>
            </div>
        </main>
