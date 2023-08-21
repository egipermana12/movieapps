<?php if (session()->has('message')) : ?>
    <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 font-normal">
        <?= session('message') ?>
    </div>
<?php endif ?>

<?php if (session()->has('error')) : ?>
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 font-normal">
        <?= session('error') ?>
    </div>
<?php endif ?>

<?php if (session()->has('errors')) : ?>
    <ul class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 font-normal">
    <?php foreach (session('errors') as $error) : ?>
        <li><?= $error ?></li>
    <?php endforeach ?>
    </ul>
<?php endif ?>
