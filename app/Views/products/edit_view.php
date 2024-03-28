<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php echo view('templates/head'); ?>

<link rel="stylesheet" href="assets/css/image-uploader.css">
<link rel="stylesheet" href="assets/css/file-uploader.css">
<link rel="stylesheet" href="assets/libs/vanillajs-datepicker/css/datepicker.min.css">
<link rel="stylesheet" href="assets/libs/mobius1-selectr/selectr.min.css">
<link rel="stylesheet" href="assets/css/custom.css" />
<style>
.upload_files,
.upload_image {
	border: 1px dashed #999;
}
@media screen and (max-width: 1366px) {
  .image-uploader .uploaded .uploaded-image {
    width: 100%;
    padding-bottom: 0;
  }
}
</style>
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
			<form action="products/save" id="product-form" class="product-form main-content-wrapper grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 justify-between">
                <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-4">
					<div class="w-full relative mb-4">  
						<div class="p-4">
                            <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-4 bg-white rounded-md shadow-md">
                                <div class="w-full relative p-4"> 
                                    <label for="" class="font-medium text-sm text-slate-600 dark:text-slate-400">Slika preparata</label>
                                    <div class="w-full h-56 mx-auto mb-0 mt-5">
                                        <div class="upload-image p-0 bg-white">
                                            <div class="w-full mx-auto">
                                                <div class="upload_image"></div>
                                                <input type="hidden" class="image_exists" name="image_exists" value="<?php echo (isset($current['image']) AND $current['image'] != '') ? $current['image'] : 0; ?>">
                                            </div>
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
                            <div class="flex-auto p-0 md:p-4 bg-white rounded-md shadow-md">
                                <h2 class="text-2xl font-semibold mb-4">Informacije o preparatu</h2>
                                <div class="mb-4">
                                    <label for="title" class="font-medium text-sm text-slate-600 dark:text-slate-400">Naziv preparata</label>
                                    <input type="text" id="title" name="title" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" value="<?php echo (isset($current['title']) AND $current['title'] != '') ? $current['title'] : ''; ?>">
                                </div>						
                                <div class="mb-0">
                                    <label for="" class="font-medium text-sm text-slate-600 dark:text-slate-400">Dokumenti</label>				
                                    <div class="upload-image p-0 pt-3 pb-6 bg-white">
                                        <div class="w-full mx-auto">
                                            <div class="upload_files"></div>
                                        </div>
                                    </div>
                                </div>						
                                <div class="">
                                    <input type="hidden" name="id" id="id" value="<?php echo (isset($current['id']) AND $current['id'] != '') ? $current['id'] : ''; ?>">
                                    <button type="submit" class="px-6 py-2 bg-brand text-white text-sm  rounded hover:bg-brand-600 border border-brand-500">Snimi</button>
                                </div>
                            </div>
                        </div>
					</div>                             
				</div>			                     
			</form>

			<!-- footer -->
			<?php echo view('templates/footer'); ?>
		</div>
	</div>
</div>

<?php echo view('templates/popups'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="assets/libs/lucide/umd/lucide.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="assets/libs/@frostui/tailwindcss/frostui.js"></script>

<script src="assets/libs/mobius1-selectr/selectr.min.js"></script>
<script src="assets/js/pages/form-advanced.init.js"></script>

<script src="assets/js/image-uploader.js"></script>
<script src="assets/js/file-uploader.js"></script>
<script src="assets/libs/vanillajs-datepicker/js/datepicker-full.min.js"></script>
<script src="assets/libs/mobius1-selectr/selectr.min.js"></script>
<script src="assets/js/app.js"></script>
<script>    
<?php if(isset($current['image']) AND $current['image'] != ''){ ?>
let preloaded = [
    {id: 1, src: '<?php echo $current['image']; ?>'},
];
<?php } ?>
<?php if(isset($current['files']) AND $current['files'] != ''){ ?>
let preloaded_files = [
    <?php foreach($current['files'] as $key => $files){ ?>
    {id: <?php echo $files['id']; ?>, src: '<?php echo $files['url']; ?>', title: '<?php echo $files['title']; ?>'},
    <?php } ?>
];
<?php } ?>
$('.upload_image').imageUploader({
    imagesInputName: 'image',
    label: 'Prevucite sliku ovde <br>ili<br> <u>Pretraži iz računara</u><br>(max 1 MB)',
    <?php if(isset($current['image']) AND $current['image'] != ''){ ?>
    preloaded: preloaded,
    <?php } ?>
    maxSize: 1048576,
	maxFiles: 1,
});
$('.upload_files').fileUploader({
    imagesInputName: 'files',
    label: 'Prevucite fajlove ovde <br>ili<br> <u>Pretraži iz računara</u><br>(max 1 MB)',
    <?php if(isset($current['files']) AND $current['files'] != ''){ ?>
    preloaded: preloaded_files,
    <?php } ?>
    maxSize: 1048576,
	maxFiles: 6,
});
function delete_file(id){
    $.ajax({
        type: 'POST',
        url: 'products/ajax_delete/ProductFilesModel/' + id,
        dataType: 'json',
        success: function (data) {
            console.log(data);
            console.log('Success');
            if(data.success){
                
            }
        },
        error: function (request, status, error) {
            console.log('PHP Error');
        }
    });
}
</script>
</body>
</html>