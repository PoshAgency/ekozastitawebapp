<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">
<head>
<meta charset="utf-8" />
<title>Ekozaštita Webapp</title>
<meta  name="viewport"  content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
<meta  content=""  name="description"/>
<meta content="" name="" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- App favicon -->
<link rel="shortcut icon" href="assets/images/favicon.ico" />

<!-- Css -->
<!-- Main Css -->
<link rel="stylesheet" href="assets/libs/icofont/icofont.min.css">
<link href="assets/libs/flatpickr/flatpickr.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/tailwind.min.css">
</head>
    
<body data-layout-mode="light"  data-sidebar-size="default" data-theme-layout="vertical" class="bg-[#EEF0FC] dark:bg-gray-900">

<div class="relative flex flex-col justify-center min-h-screen overflow-hidden">
    <div class="w-full  m-auto bg-white dark:bg-slate-800/60 rounded shadow-lg ring-2 ring-slate-300/50 dark:ring-slate-700/50 lg:max-w-md">
        <div class="text-center p-6 bg-brand rounded-t">
            <a href="index.html"><img src="assets/images/logo.png" alt="" class="h-16 mx-auto mb-5"></a>
            <h3 class="font-semibold text-white text-xl mb-1">Dobro došli!</h3>
            <p class="text-xs text-slate-200">Ulogujte se da bi ste nastavili sa Ekozaštita aplikacijom.</p>
        </div>

        <form class="p-6" action="dashboard.php">
            <div>
                <label for="email" class="font-medium text-sm text-slate-600 dark:text-slate-400">Email</label>
                <input type="email" id="email" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Email" required>
            </div>
            <div class="mt-4">
                <label for="password" class="font-medium text-sm text-slate-600 dark:text-slate-400">Šifra</label>
                <input type="password" id="password" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Šifra"  required>
            </div>
            <a href="recover-password.php" class="text-xs font-medium text-brand-500 underline ">Zaboravljena šifra?</a>
            <div class="block mt-3">
                <label class="custom-label block dark:text-slate-300">
                    <div class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-4 h-4  inline-block leading-4 text-center -mb-[3px]">
                        <input type="checkbox" class="hidden">
                        <i class="fas fa-check hidden text-xs text-slate-700 dark:text-slate-200"></i>
                    </div>
                    Zapamti me
                </label>
            </div>                    
            <div class="mt-4">
                <button
                    class="w-full px-2 py-2 tracking-wide text-white transition-colors duration-200 transform bg-brand-500 rounded hover:bg-brand-600 focus:outline-none focus:bg-brand-600">
                    Uloguj se
                </button>
            </div>
        </form>
    </div>
</div>        

<!-- JAVASCRIPTS -->
<!-- <div class="menu-overlay"></div> -->
<script src="assets/libs/lucide/umd/lucide.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="assets/libs/@frostui/tailwindcss/frostui.js"></script>

<script src="assets/js/app.js"></script>
<!-- JAVASCRIPTS -->
</body>
</html>