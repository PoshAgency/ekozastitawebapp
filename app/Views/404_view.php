<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">
<head>
<?php echo view('templates/head'); ?>
<link rel="stylesheet" href="assets/css/custom.css">
</head>

<body data-layout-mode="light"  data-sidebar-size="default" data-theme-layout="vertical" class="bg-[#EEF0FC] dark:bg-gray-900">

<div class="relative flex flex-col justify-center min-h-screen overflow-hidden">
    <div class="w-full  m-auto bg-white dark:bg-slate-800/60 rounded shadow-lg ring-2 ring-slate-300/50 dark:ring-slate-700/50 lg:max-w-md">
        <div class="text-center p-6 bg-brand rounded-t">
            <a href="index.html"><img src="assets/images/logo.png" alt="" class="mx-auto mb-6" width="150"></a>
            <h3 class="font-semibold text-white text-xl mb-1">Straica ne postoji</h3>
            <p class="text-xs text-slate-400">Vratite se na kontrolnu tabliu Ekozaštite.</p>
        </div>

        <form class="p-6">
            <div class="text-center">
                <img src="assets/images/widgets/error.png" alt="" class="w-32 h-32 block mx-auto my-6">
                <h1 class="font-bold text-7xl dark:text-slate-200">404!</h1>
                <h5 class="font-medium text-lg text-slate-400">Traženi sadrzaj nije pronađen</h5>
            </div>        
            <div class="mt-4">
                <a href="<?php echo base_url(); ?>"
                    class="w-full block text-center px-2 py-2 tracking-wide text-white transition-colors duration-200 transform bg-brand-500 rounded hover:bg-brand-600 focus:outline-none focus:bg-brand-600">
                    Dashboard
                </a>
            </div>
        </form>
    </div>
</div>
    
<!-- JAVASCRIPTS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="assets/libs/lucide/umd/lucide.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="assets/libs/@frostui/tailwindcss/frostui.js"></script>

<script src="assets/js/app.js"></script>
<!-- JAVASCRIPTS -->
</body>
</html>