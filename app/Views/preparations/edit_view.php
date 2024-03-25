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

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="preparation-full-edit-page bg-[#EEF0FC] bg-green-50 dark:bg-gray-900">

<!-- leftbar-tab-menu -->
<?php echo view('templates/left-bar'); ?>		
<!-- header -->
<?php echo view('templates/header'); ?>		

<div class="page-container ltr:flex flex-1 rtl:flex-row-reverse ">
	<div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
		<div class="breadcrumbs-container xl:w-full px-4">
			<div class="flex flex-wrap mt-5 p-4 bg-white rounded-md shadow-md">
				<div class="flex items-center w-full">
					<div class="w-full">
						<div class="flex flex-wrap justify-between">
							<div class="items-center">
								<h1 class="font-medium text-3xl block dark:text-slate-100">Preparati</h1>
								<ol class="list-reset flex text-sm">
									<li>
										<a href="#" class="text-gray-500 dark:text-slate-400">Ekozaštita</a>
									</li>
									<li>
										<span class="text-gray-500 dark:text-slate-400 mx-2">/</span>
									</li>
									<li class="text-gray-500 dark:text-slate-400">Preparati</li>
									<li>
										<span class="text-gray-500 dark:text-slate-400 mx-2">/</span>
									</li>
									<li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Novi preparat</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="main-content-container xl:w-full  min-h-[calc(100vh-138px)] relative pb-14 mt-5"> 
			<div class="main-content-wrapper grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 justify-between">
                <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-4">
					<div class="w-full relative mb-4">  
						<div class="p-4">
                            <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-4 bg-white rounded-md shadow-md">
                                <div class="w-full relative p-4"> 
                                    <label for="" class="font-medium text-sm text-slate-600 dark:text-slate-400">Slika preparata</label>
                                    <div class="w-full h-56 mx-auto  mb-4">
                                        <input type="file" class="filepond h-56" name="filepond" accept="image/png, image/jpeg, image/gif" />                                    
                                    </div>
                                    <div class="w-full relative p-4"> 
                                        <label for="" class="font-medium text-sm text-slate-600 dark:text-slate-400">Dokumenti</label>				
                                        <div id="uploads-container" class="grid grid-cols-2 gap-2">
                                            <div class="mb-2">
                                                <input type="file" class="filepond mb-1"/>
                                                <input type="text" name="" class="form-input w-full rounded-md border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Ime dokumenta" required="">
                                            </div>
                                            <div class="mb-2">
                                                <input type="file" class="filepond mb-1"/>
                                                <input type="text" name="" class="form-input w-full rounded-md border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Ime dokumenta" required="">
                                            </div>
                                        </div>
                                        <div class="btn-holder col-span-12 text-center mt-5">
                                            <button id="add-more-uploads" type="button" class="px-2 py-1 lg:px-4 bg-primary text-white text-sm  rounded-full transition hover:bg-primary-600 border border-primary font-medium">Dodaj još dokumenata</button>
                                        </div>
                                    </div> 
                                </div>                               
                            </div>
                        </div>
                    </div>
				</div>
				<div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-8">
					<div class="w-full relative mb-4">  
						<div class="p-4">
                            <form action="" class="flex-auto p-0 md:p-4 bg-white rounded-md shadow-md">
                                <h2 class="text-2xl font-semibold mb-4">Informacije o preparatu</h2>
                                <div class="mb-2">
                                    <label for="preparation" class="font-medium text-sm text-slate-600 dark:text-slate-400">Naziv preparata</label>
                                    <input type="text" id="preparation" name="preparation" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Naziv objekta" required>
                                </div>						
                                <div class="">
                                    <button type="submit" class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500">Snimi</button>
                                </div>
                            </form>
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