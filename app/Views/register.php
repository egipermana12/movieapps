<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("css/app.css") ?>" />
    <title>Movieapps</title>
</head>

<body class="font-poppins">
    <section class="bg-blue-10 dark:bg-zinc-800 py-12">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-12">
            <a href="#" class="flex items-center mb-6 mt-12 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                Movieapps
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Sign up your account
                    </h1>
                    <?= view('partials/_message_block') ?>
                    <form class="space-y-4 md:space-y-6" action="<?= url_to('register') ?>" method="post">
                        <!-- csrf field token -->
                        <?= csrf_field() ?>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 <?php if (session('errors.email')) : ?>is-invalid <?php else : ?> is-valid <?php endif ?>" placeholder="name@company.com" value="<?= old('email') ?>">
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Username</label>
                            <input type="username" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" placeholder="Jhon Doe" value="<?= old('username') ?>">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" autocomplete="off">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Repeat Password</label>
                            <input type="password" name="pass_confirm" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" autocomplete="off">
                        </div>
                        <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign up</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Already registered? <a href="<?= url_to('login') ?>" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Sign in</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>