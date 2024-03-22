<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php echo view('templates/head'); ?>

<link rel="stylesheet" href="assets/libs/filepond/filepond.min.css">
<link rel="stylesheet" href="assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">
<link rel="stylesheet" href="assets/libs/vanillajs-datepicker/css/datepicker.min.css">
<link rel="stylesheet" href="assets/libs/mobius1-selectr/selectr.min.css">
<link rel="stylesheet" href="assets/css/custom.css" />
</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="administrators-full-edit-page bg-green-50 dark:bg-gray-900">

<!-- leftbar-tab-menu -->
<?php echo view('templates/left-bar'); ?>		
<!-- header -->
<?php echo view('templates/header'); ?>		

<div class="page-container ltr:flex flex-1 rtl:flex-row-reverse">
	<div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
		<div class="breadcrumbs-container xl:w-full px-4">
			<div class="flex flex-wrap mt-5 p-4 bg-white rounded-md shadow-md">
				<div class="flex items-center w-full">
					<div class="w-full">
						<div class="flex flex-wrap justify-between">
							<div class="items-center">
								<h1 class="font-medium text-3xl block dark:text-slate-100">Administratori</h1>
								<ol class="list-reset flex text-sm">
									<li>
										<a href="#" class="text-gray-500 dark:text-slate-400">Ekozaštita</a>
									</li>
									<li>
										<span class="text-gray-500 dark:text-slate-400 mx-2">/</span>
									</li>
									<li class="text-gray-500 dark:text-slate-400">Administrator</li>
									<li>
										<span class="text-gray-500 dark:text-slate-400 mx-2">/</span>
									</li>
									<li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Novi administrator</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="main-content-container xl:w-full  min-h-[calc(100vh-138px)] relative pb-14 mt-5"> 
			<div class="main-content-wrapper grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 justify-between">
				<div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-6">
					<div class="w-full relative mb-4">  
						<form action="javascript:;" class="flex-auto p-0 md:p-4 bg-white rounded-md shadow-md">
							<div class="mb-2">
								<label for="fullname" class="font-medium text-sm text-slate-600 dark:text-slate-400">Ime i prezime</label>
								<input type="text" id="fullname" name="fullname" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Ime i prezime" required>
							</div>
							<div class="mb-2">
								<label for="email" class="font-medium text-sm text-slate-600 dark:text-slate-400">Email</label>
								<input type="email" id="email" name="email" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="name@example.com" required>
							</div>
							<div class="mb-2">
								<label for="work_order_type" class="font-medium text-sm text-slate-600 dark:text-slate-400">Tip naloga</label>
								<select id="work_order_type" name="work_order_type" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
									<option selected="true" disabled="disabled">Izaberi...</option>
									<option>super admin</option>
									<option>admin</option>
									<option>operater</option>
								</select>
							</div>
							<div class="mb-2">
								<label for="password" class="font-medium text-sm text-slate-600 dark:text-slate-400">Šifra</label>
								<input type="password" id="password" name="password" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" required>
							</div>	
							<div class="mb-10">
								<label for="repeat-password" class="font-medium text-sm text-slate-600 dark:text-slate-400">Ponovi šifru</label>
								<input type="repeat-password" id="repeat-password" name="repeat-password" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" required>
							</div>							
							<div class="mb-10">
								<button class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500">Snimi</button>
							</div>							
						</form>
					</div>                             
				</div>	
				<div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-6">
					<div class="flex-auto p-0 md:p-4 bg-white rounded-md shadow-md">
						<div class="mb-5">
							<h4 class="text-base font-medium text-slate-900 dark:text-slate-300">Super admin</h4>
							<p class="text-slate-600 text-base dark:text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate tempora sed rerum esse doloremque labore provident ea laborum ipsum sint.</p>
						</div>
						<div class="mb-5">
							<h4 class="text-base font-medium text-slate-900 dark:text-slate-300">Admin</h4>
							<p class="text-slate-600 text-base dark:text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate tempora sed rerum esse doloremque labore provident ea laborum ipsum sint.</p>
						</div>
						<div class="mb-5">
							<h4 class="text-base font-medium text-slate-900 dark:text-slate-300">Operator</h4>
							<p class="text-slate-600 text-base dark:text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate tempora sed rerum esse doloremque labore provident ea laborum ipsum sint.</p>
						</div>
					</div>
				</div>			                     
			</div>

			<!-- footer -->
			<?php echo view('templates/footer'); ?>
		</div>
	</div>
</div>

<?php echo view('templates/popups'); ?>

<script src="assets/libs/lucide/umd/lucide.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="assets/libs/@frostui/tailwindcss/frostui.js"></script>

<script src="assets/libs/filepond/filepond.min.js"></script>
<script src="assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
<script src="assets/libs/vanillajs-datepicker/js/datepicker-full.min.js"></script>
<script src="assets/libs/mobius1-selectr/selectr.min.js"></script>
<script src="assets/js/app.js"></script>
<script>    
FilePond.registerPlugin(FilePondPluginImagePreview);    
// Get a reference to the file input element
const inputElement = document.querySelectorAll('input[type="file"]');

// Create a FilePond instance
inputElement.forEach(element => {
	const pond = FilePond.create(element);    
});


var elem = document.querySelector('input[name="foo"]');
new Datepicker(elem, {
// ...options
}); 
new Selectr('#sizing',{
	taggable: true,
	tagSeperators: [",", "|"]
});
</script>
</body>
</html>