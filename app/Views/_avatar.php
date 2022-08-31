<span style="width: <?= $size ?>px; height: <?= $size ?>px; class="avatar" title="<?= $user->name() ?>">
    <?php if ($user->avatarLink() !== '') : ?>
        <img src="<?= $user->avatarLink(120) ?>" alt="<?= $user->name() ?>">
    <?php else :?>
        <?= $idString ?>
        <div class="de_user_role">Takmir</div>
    <?php endif ?>
</span>
