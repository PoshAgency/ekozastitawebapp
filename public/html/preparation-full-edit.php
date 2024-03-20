<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php include('templates/head.php'); ?>

<link rel="stylesheet" href="assets/libs/filepond/filepond.min.css">
<link rel="stylesheet" href="assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">
<link rel="stylesheet" href="assets/libs/vanillajs-datepicker/css/datepicker.min.css">
<link rel="stylesheet" href="assets/libs/mobius1-selectr/selectr.min.css">
<link rel="stylesheet" href="assets/css/custom.css" />
</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="preparation-full-edit-page bg-[#EEF0FC] dark:bg-gray-900">

<!-- leftbar-tab-menu -->
<?php include('templates/left-bar.php'); ?>		
<!-- header -->
<?php include('templates/header.php'); ?>		

<div class="page-container ltr:flex flex-1 rtl:flex-row-reverse">
	<div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
		<div class="breadcrumbs-container xl:w-full">
			<div class="flex flex-wrap">
				<div class="flex items-center py-4 w-full">
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
									<li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Preparat 1</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-content-container xl:w-full  min-h-[calc(100vh-138px)] relative pb-14"> 
			<form action="javascript:;" class="main-content-wrapper grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 justify-between">
					<div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-4">
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
					<div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-8">
						<div class="w-full relative mb-4">  
							<div class="flex-auto p-0 md:p-4">
								<div class="mb-2">
									<label for="preparation" class="font-medium text-sm text-slate-600 dark:text-slate-400">Naziv preparata</label>
									<input type="text" id="preparation" name="preparation" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Naziv objekta" required>
								</div>						
								<div class="">
									<button type="submit" class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500">Snimi</button>
								</div>
							</div>
						</div>                             
					</div>	
			</form>

			<!-- footer -->
			<?php include('templates/footer.php'); ?>  
		</div>
	</div>
</div>

<!-- <div class="menu-overlay"></div> -->

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
<script>
document.getElementById("add-more-uploads").addEventListener("click", function() {
    var container = document.getElementById("uploads-container");
    var parentDiv = document.createElement("div");
    parentDiv.classList.add("mb-2");    
    var fileInput = document.createElement("input");
    fileInput.setAttribute("type", "file");
    fileInput.classList.add("filepond", "mb-1");
    parentDiv.appendChild(fileInput);    
    var pathInput = document.createElement("input");
    pathInput.setAttribute("type", "text");
    pathInput.classList.add("form-input", "w-full", "rounded-md", "border", "border-slate-300/60", "dark:border-slate-700", "dark:text-slate-300", "bg-transparent", "px-3", "py-1", "focus:outline-none", "focus:ring-0", "placeholder:text-slate-400/70", "placeholder:font-normal", "placeholder:text-sm", "hover:border-slate-400", "focus:border-primary-500", "dark:focus:border-primary-500", "dark:hover:border-slate-700");
    pathInput.setAttribute("placeholder", "Ime dokumenta");
    pathInput.setAttribute("required", "");
    parentDiv.appendChild(pathInput);
    container.appendChild(parentDiv);
    FilePond.parse(document.body);
});
</script>
</body>
</html>