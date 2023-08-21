<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <!-- csrf -->
    <meta name="<?= csrf_token() ?>" content="<?= csrf_hash() ?>" class="csrf">

    <link rel="stylesheet" href="<?= base_url("css/app.css") ?>" />
    <script defer src="<?= base_url("js/app.js") ?>"></script>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/f1ebf9da42.js" crossorigin="anonymous"></script>
</head>

<body x-data="{'darkMode': true, 'sidebarToggle': false}" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
        $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{'dark': darkMode === true}" class="font-poppins">
    <!-- untuk loader -->
    <!-- start page wrapper -->
    <div class="flex h-screen overflow-hidden">
        <!-- start sidebar -->
        <?= $this->include('partials/sidebar.php'); ?>
        <!-- start sidebar -->
        <!-- content area start -->
        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden bg-blue-10 dark:bg-zinc-750">
            <!-- header start -->
            <?= $this->include('partials/header.php'); ?>
            <!-- header start -->

            <!-- main content start -->
            <main>
                <div class="mx-auto max-w-screen-2xl p-4 md:p-10 2xl:p-10">
                    <?= $this->renderSection('content') ?>
                </div>
            </main>
            <!-- main content start -->
        </div>
        <!-- content area start -->
    </div>
    <!-- start page wrapper -->
</body>

</html>