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

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="settings-page bg-[#EEF0FC] dark:bg-gray-900">

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
								<h1 class="font-medium text-3xl block dark:text-slate-100">Employees edit</h1>
								<ol class="list-reset flex text-sm">
									<li>
										<a href="#" class="text-gray-500 dark:text-slate-400">Ekozaštita</a>
									</li>
									<li>
										<span class="text-gray-500 dark:text-slate-400 mx-2">/</span>
									</li>
									<li class="text-gray-500 dark:text-slate-400">Klijenti</li>
									<li>
										<span class="text-gray-500 dark:text-slate-400 mx-2">/</span>
									</li>
									<li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Novi klijent</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="main-content-container xl:w-full  min-h-[calc(100vh-138px)] relative pb-14 mt-5"> 
			<div class="main-content-wrapper grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 justify-between">
				<div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-4">
					<div class="w-full relative p-4"> 
						<label for="" class="font-medium text-sm text-slate-600 dark:text-slate-400">Logo kompanije</label>
						<div class="w-full h-56 mx-auto  mb-4">
							<input type="file" class="filepond h-56" name="filepond" accept="image/png, image/jpeg, image/gif" />                                    
						</div>
					</div>                               
				</div>
				<div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-8">
					<div class="w-full relative mb-4">  
						<div class="p-4">
                            <form action="clients/save" class="flex-auto p-0 md:p-4 bg-white rounded-md shadow-md">
                                <h2 class="text-2xl font-semibold mb-4">Informacije o kompaniji</h2>
                                <div class="mb-2">
                                    <label for="company" class="font-medium text-sm text-slate-600 dark:text-slate-400">Naziv komapnije</label>
                                    <input type="text" id="company" name="name" value="<?php echo (isset($current['name']) AND $current['name'] != '') ? $current['name'] : ''; ?>" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Naziv komapnije" required>
                                </div>
                                <div class="mb-2">
                                    <label for="taxid" class="font-medium text-sm text-slate-600 dark:text-slate-400">PIB</label>
                                    <input type="text" id="taxid" name="pib" value="<?php echo (isset($current['pib']) AND $current['pib'] != '') ? $current['pib'] : ''; ?>" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="PIB" required>
                                </div>
                                <div class="mb-2">
                                    <label for="identification_number" class="font-medium text-sm text-slate-600 dark:text-slate-400">Matični broj</label>
                                    <input type="text" id="identification_number" name="id_number" value="<?php echo (isset($current['id_number']) AND $current['id_number'] != '') ? $current['id_number'] : ''; ?>" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Matični broj" required>
                                </div>
                                <h2 class="text-2xl font-semibold mb-4 mt-5">Adresa</h2>
                                <div class="mb-2">
                                    <label for="state" class="font-medium text-sm text-slate-600 dark:text-slate-400">Država</label>
                                    <input type="text" id="state" name="state" value="<?php echo (isset($current['state']) AND $current['state'] != '') ? $current['state'] : ''; ?>" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Država" required>
                                </div>
                                <div class="mb-2">
                                    <label for="town" class="font-medium text-sm text-slate-600 dark:text-slate-400">Grad</label>
                                    <input type="text" id="town" name="city" value="<?php echo (isset($current['city']) AND $current['city'] != '') ? $current['city'] : ''; ?>" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Grad" required>
                                </div>
                                <div class="mb-2">
                                    <label for="region" class="font-medium text-sm text-slate-600 dark:text-slate-400">Region</label>
                                    <input type="text" id="region" name="region" value="<?php echo (isset($current['region']) AND $current['region'] != '') ? $current['region'] : ''; ?>" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Region" required>
                                </div>
                                <div class="mb-2">
                                    <label for="address" class="font-medium text-sm text-slate-600 dark:text-slate-400">Adresa</label>
                                    <input type="text" id="address" name="address" value="<?php echo (isset($current['address']) AND $current['address'] != '') ? $current['address'] : ''; ?>" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Adresa" required>
                                </div>
                                <div class="mb-2">
                                    <label for="zip" class="font-medium text-sm text-slate-600 dark:text-slate-400">Poštanski broj</label>
                                    <input type="text" id="zip" name="zip" value="<?php echo (isset($current['zip']) AND $current['zip'] != '') ? $current['zip'] : ''; ?>" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Poštanski broj" required>
                                </div>
                                <h2 class="text-2xl font-semibold mb-4 mt-5">Kontakt</h2>
                                <div class="mb-2">
                                    <label for="email" class="font-medium text-sm text-slate-600 dark:text-slate-400">Email</label>
                                    <input type="text" id="email" name="email" value="<?php echo (isset($current['mail']) AND $current['mail'] != '') ? $current['mail'] : ''; ?>" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Email" required>
                                </div>
                                <div class="mb-2">
                                    <label for="website" class="font-medium text-sm text-slate-600 dark:text-slate-400">Website</label>
                                    <input type="text" id="website" name="website" value="<?php echo (isset($current['web']) AND $current['web'] != '') ? $current['web'] : ''; ?>" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Website" required>
                                </div>
                                <div class="mb-2">
                                    <label for="phone" class="font-medium text-sm text-slate-600 dark:text-slate-400">Telefon</label>
                                    <input type="text" id="phone" name="fax" value="<?php echo (isset($current['fax']) AND $current['fax'] != '') ? $current['fax'] : ''; ?>" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Telefon" required>
                                </div>
                                <div class="mb-2">
                                    <label for="phone2" class="font-medium text-sm text-slate-600 dark:text-slate-400">Telefon 2</label>
                                    <input type="text" id="phone2" name="telefon" value="<?php echo (isset($current['telefon']) AND $current['telefon'] != '') ? $current['fax'] : ''; ?>" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Telefon 2" required>
                                </div>
                                <div class="mb-2">
                                    <label for="contact_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Kontakt osoba</label>
                                    <input type="text" id="contact_name" name="contract" value="<?php echo (isset($current['contract']) AND $current['contract'] != '') ? $current['contract'] : ''; ?>" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Kontakt osoba" required>
                                </div>
                                <h2 class="text-2xl font-semibold mb-4 mt-5">Opis</h2>
                                <div class="mb-2">
                                    <label for="note" class="font-medium text-sm text-slate-600 dark:text-slate-400">Napomena</label>
                                    <textarea id="note" name="napomena" value="<?php echo (isset($current['napomena']) AND $current['napomena'] != '') ? $current['napomena'] : ''; ?>" rows="3" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Napomena ..."></textarea>
                                </div>
                                <!-- <div class="mb-2">
                                    <label for="about_client" class="font-medium text-sm text-slate-600 dark:text-slate-400">O klijentu</label>
                                    <textarea id="about_client" name="about_client" rows="3" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="O klijentu ..."></textarea>
                                </div> -->
                                <div class="mt-5">
                                    <button class="px-8 py-2 mb-4 bg-brand text-xl text-white text-sm rounded hover:bg-brand-600 border border-brand-500">Snimi</button>
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