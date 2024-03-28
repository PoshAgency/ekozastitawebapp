<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php echo view('templates/head'); ?>
<style>
.datatable-input, .datatable-selector {
	border-color: rgba(0, 0, 0, 0.3);
}
.image-uploader.has-files .uploaded .uploaded-image {
	background: #f8f8f8;
}
</style>
<link rel="stylesheet" href="assets/css/image-uploader.css">
<link rel="stylesheet" href="assets/libs/vanillajs-datepicker/css/datepicker.min.css">
<link rel="stylesheet" href="assets/libs/mobius1-selectr/selectr.min.css">
<link rel="stylesheet" href="assets/css/custom.css" />
</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="settings-page bg-green-50 dark:bg-gray-900">

<?php echo view('templates/left-bar'); ?>		
<?php echo view('templates/header'); ?>		

<div class="page-container ltr:flex flex-1 rtl:flex-row-reverse">
	<div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
		<div class="breadcrumbs-container xl:w-full">
			<div class="flex flex-wrap">
				<div class="flex items-center py-4 px-4 w-full">
					<div class="w-full p-4 bg-white rounded-md shadow-md">
						<div class="flex flex-wrap justify-between items-center">
							<div class="items-center">
								<h1 class="font-medium text-3xl block dark:text-slate-100">Podešavanja</h1>
								<ol class="list-reset flex text-sm">
									<li>
										<a href="<?php echo base_url(); ?>" class="text-gray-500 dark:text-slate-400">Ekozaštita</a>
									</li>
									<li>
										<span class="text-gray-500 dark:text-slate-400 mx-2">/</span>
									</li>
									<li class="text-green-500 dark:text-gray-400">Podešavanja</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-content-container xl:w-full  min-h-[calc(100vh-138px)] relative pb-14 px-4"> 
			<form action="settings/save" id="settings-form" class="settings-form main-content-wrapper grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-5 justify-between">
				<div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-4 mt-5">
					<div class="w-full relative"> 
                        <div class="upload-image p-4 bg-white rounded-md shadow-md">
                            <label for="" class="flex font-medium text-md mb-4 text-slate-600 dark:text-slate-400">Ekozaštita Logo</label>
                            <div class="w-full mx-auto">
                                <div class="upload_image"></div>
                                <input type="hidden" class="image_exists" name="image_exists" value="<?php echo (isset($current['logo']) AND $current['logo'] != '') ? $current['logo'] : 0; ?>">
                            </div>
                        </div>
					</div>                               
				</div>
				<div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-8 mt-5">
					<div class="w-full relative mb-4">  
						<div class="flex-auto p-0 md:p-4 bg-white rounded-md shadow-md">
							<div class="mb-2">
								<label for="site_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Naziv Aplikacije</label>
								<input type="text" id="site_name" name="site_name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" value="<?php echo (isset($current['site_name']) AND $current['site_name'] != '') ? $current['site_name'] : 0; ?>">
							</div>
							<div class="mb-2">
								<label for="main_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Globalno ime za email</label>
								<input type="text" id="main_name" name="main_name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" value="<?php echo (isset($current['main_name']) AND $current['main_name'] != '') ? $current['main_name'] : 0; ?>">
							</div>
							<div class="mb-2">
								<label for="main_email" class="font-medium text-sm text-slate-600 dark:text-slate-400">Globalni email</label>
								<input type="text" id="main_email" name="main_email" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" value="<?php echo (isset($current['main_email']) AND $current['main_email'] != '') ? $current['main_email'] : 0; ?>">
							</div>
							<div class="mb-2">
								<label for="main_phone" class="font-medium text-sm text-slate-600 dark:text-slate-400">Globalni telefon</label>
								<input type="text" id="main_phone" name="main_phone" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" value="<?php echo (isset($current['main_phone']) AND $current['main_phone'] != '') ? $current['main_phone'] : 0; ?>">
							</div>
							<!-- <div class="mb-2">
								<label for="state" class="font-medium text-sm text-slate-600 dark:text-slate-400">Facebook</label>
								<input type="text" id="state" name="state" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Zemlja" required>
							</div>
							<div class="mb-2">
								<label for="quadrature" class="font-medium text-sm text-slate-600 dark:text-slate-400">Instagram</label>
								<input type="text" id="quadrature" name="quadrature" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Kvadratura" required>
							</div>
							<div class="mb-2">
								<label for="contact_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Linkedin</label>
								<input type="text" id="contact_name" name="contact_name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Kontakt osoba" required>
							</div>
							<div class="mb-2">
								<label for="contact_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Twitter</label>
								<input type="text" id="contact_name" name="contact_name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Kontakt osoba" required>
							</div>
							<div class="mb-2">
								<label for="contact_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Tiktok</label>
								<input type="text" id="contact_name" name="contact_name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Kontakt osoba" required>
							</div>
							<div class="mb-2">
								<label for="contact_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Youtube</label>
								<input type="text" id="contact_name" name="contact_name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Kontakt osoba" required>
							</div>
							<div class="mb-10">
								<label for="note" class="font-medium text-sm text-slate-600 dark:text-slate-400">Google Analytics kod</label>
								<textarea id="note" name="note" rows="3" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Napomena ..."></textarea>
							</div>	
							<div class="mb-10">
								<label for="note" class="font-medium text-sm text-slate-600 dark:text-slate-400">Heder Javascript kod</label>
								<textarea id="note" name="note" rows="3" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Napomena ..."></textarea>
							</div>	
							<div class="mb-10">
								<label for="note" class="font-medium text-sm text-slate-600 dark:text-slate-400">Futer Javascript kod</label>
								<textarea id="note" name="note" rows="3" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Napomena ..."></textarea>
							</div> -->
                            <hr class="my-8">
							<div class="mt-4">
                                <input type="hidden" name="id" value="1">
								<button class="px-6 py-2 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500">Snimi</button>
								<!-- <button class="px-2 py-2 lg:px-4 bg-transparent  text-brand text-sm  rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium">Save Product</button> -->
							</div>
						</div>
					</div>                             
				</div>			                     
			</form>

			<!-- footer -->
			<?php echo view('templates/footer.php'); ?>  
		</div>
	</div>
</div>

<?php echo view('templates/popups'); ?>	

<!-- <div class="menu-overlay"></div> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="assets/libs/lucide/umd/lucide.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="assets/libs/@frostui/tailwindcss/frostui.js"></script>

<script src="assets/js/image-uploader.js"></script>
<script src="assets/libs/vanillajs-datepicker/js/datepicker-full.min.js"></script>
<script src="assets/libs/mobius1-selectr/selectr.min.js"></script>
<script src="assets/js/app.js"></script>
<script>    
<?php if(isset($current['logo']) AND $current['logo'] != ''){ ?>
let preloaded = [
    {id: 1, src: '<?php echo $current['logo']; ?>'},
];
<?php } ?>
$('.upload_image').imageUploader({
    imagesInputName: 'logo',
    label: 'Prevucite logo ovde <br>ili<br> <u>Pretraži iz računara</u><br>(max 500 Kb)',
    <?php if(isset($current['logo']) AND $current['logo'] != ''){ ?>
    preloaded: preloaded,
    <?php } ?>
    maxSize: 524288,
	maxFiles: 1,
});
</script>
</body>
</html>