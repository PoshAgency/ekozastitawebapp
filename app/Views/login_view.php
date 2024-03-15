<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php echo view('templates/head'); ?>

</head>

<body data-layout-mode="light"  data-sidebar-size="default" data-theme-layout="vertical" class="bg-[#EEF0FC] dark:bg-gray-900">
<div class="relative flex flex-col justify-center min-h-screen overflow-hidden">
    <div class="w-full m-auto bg-white rounded shadow-lg lg:max-w-md">
        <div class="text-center p-6 rounded-t">
            <a href="index.html"><img src="assets/images/android-chrome-96x96.png" alt="" class="w-14 h-14 mx-auto mb-2"></a>
            <h3 class="font-semibold text-xl mb-1">Ekozastita</h3>
            <p class="text-xs text-slate-400">Next gen app :)</p>
        </div>

        <form class="p-6" id="form-login" action="login/validate_login" method="post" enctype="multipart/form-data">
            <div>
                <label for="email" class="font-medium text-sm text-slate-600 dark:text-slate-400">Email adresa</label>
                <input type="email" name="email" id="email" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Unesite Email adresu" required>
            </div>
            <div class="mt-4">
                <label for="password" class="font-medium text-sm text-slate-600 dark:text-slate-400">Lozinka</label>
                <input type="password" name="password" id="password" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Unesite vašu lozinku"  required>
            </div>
            <div class="mt-4">
                <button type="submit" class="w-full px-2 py-2 tracking-wide text-white transition-colors duration-200 transform bg-brand-500 rounded hover:bg-brand-600 focus:outline-none focus:bg-brand-600">Login</button>
            </div>
        </form>
    </div>
</div>

<?php echo view('templates/popups'); ?>	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="assets/libs/lucide/umd/lucide.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="assets/libs/@frostui/tailwindcss/frostui.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>