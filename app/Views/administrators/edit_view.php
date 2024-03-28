<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php echo view('templates/head'); ?>

<link rel="stylesheet" href="assets/css/image-uploader.css">
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

		<div class="main-content-container xl:w-full  min-h-[calc(100vh-138px)] relative pb-14 mt-5 px-4"> 
			<div class="main-content-wrapper grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 justify-between">
				<div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-5 xl:col-span-5">
					<div class="w-full relative mb-4">  
						<form action="administrators/save" id="user-form" class="user-form flex-auto p-0 md:p-4 bg-white rounded-md shadow-md">
							<div class="mb-2">
								<label for="firstname" class="font-medium text-sm text-slate-600 dark:text-slate-400">Ime</label>
								<input type="text" id="firstname" name="firstname" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="<?php echo (isset($current['firstname']) AND $current['firstname'] != '') ? $current['firstname'] : ''; ?>">
							</div>
							<div class="mb-2">
								<label for="lastname" class="font-medium text-sm text-slate-600 dark:text-slate-400">Prezime</label>
								<input type="text" id="lastname" name="lastname" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="<?php echo (isset($current['lastname']) AND $current['lastname'] != '') ? $current['lastname'] : ''; ?>">
							</div>
							<div class="mb-2">
								<label for="email" class="font-medium text-sm text-slate-600 dark:text-slate-400">Email</label>
								<input type="email" id="email" autocomplete="new-password" name="email" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="<?php echo (isset($current['email']) AND $current['email'] != '') ? $current['email'] : ''; ?>">
							</div>
							<div class="mb-2">
								<label for="group_id" class="font-medium text-sm text-slate-600 dark:text-slate-400">Tip naloga</label>
								<select id="group_id" name="group_id" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
									<option selected="true" disabled="disabled">Izaberi...</option>
                                    <?php foreach($all_groups as $single){ ?>
									<option value="<?php echo (isset($single['id']) AND $single['id'] != '') ? $single['id'] : ''; ?>" <?php echo $single['id'] == $current['group_id'] ? 'SELECTED' : ''; ?>><?php echo (isset($single['name']) AND $single['name'] != '') ? $single['name'] : ''; ?></option>
                                    <?php } ?>
								</select>
							</div>
							<div class="mb-5" style="position:relative">
								<label for="password" class="font-medium text-sm text-slate-600 dark:text-slate-400">Šifra</label>
                                <span class="reveal_password">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="10.227" viewBox="0 0 15 10.227">
                                        <path id="eye" d="M8.5,4.5A8.064,8.064,0,0,0,1,9.614a8.057,8.057,0,0,0,15,0A8.064,8.064,0,0,0,8.5,4.5Zm0,8.523a3.409,3.409,0,1,1,3.409-3.409A3.41,3.41,0,0,1,8.5,13.023Zm0-5.455a2.045,2.045,0,1,0,2.045,2.045A2.043,2.043,0,0,0,8.5,7.568Z" transform="translate(-1 -4.5)" fill="#e5e5e5"/>
                                    </svg>
                                </span>
								<input type="password" id="password" autocomplete="new-password" name="password" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
							</div>	
							<!-- <div class="mb-10">
								<label for="repeat-password" class="font-medium text-sm text-slate-600 dark:text-slate-400">Ponovi šifru</label>
								<input type="repeat-password" id="repeat-password" name="repeat-password" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
							</div> -->
							<div class="mb-3 mt-5">
                                <input type="hidden" name="id" value="<?php echo (isset($current['id']) AND $current['id'] != '') ? $current['id'] : ''; ?>">
								<button class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500">Snimi</button>
							</div>							
						</form>
					</div>                             
				</div>	
				<div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-3 xl:col-span-3">
                    <div class="w-full relative px-4"> 
                        <div class="upload-image p-4 bg-white rounded-md shadow-md">
                            <label for="" class="flex font-medium text-md mb-4 text-slate-600 dark:text-slate-400">Logo</label>
                            <div class="w-full mx-auto">
                                <div class="upload_image"></div>
                                <input type="hidden" class="image_exists" name="image_exists" value="<?php echo (isset($current['image']) AND $current['image'] != '') ? $current['image'] : 0; ?>">
                            </div>
                        </div>
                    </div>                               
				</div>	
				<div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-4 xl:col-span-4">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="assets/libs/lucide/umd/lucide.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="assets/libs/@frostui/tailwindcss/frostui.js"></script>

<script src="assets/libs/mobius1-selectr/selectr.min.js"></script>
<script src="assets/js/pages/form-advanced.init.js"></script>

<script src="assets/js/image-uploader.js"></script>
<script src="assets/libs/vanillajs-datepicker/js/datepicker-full.min.js"></script>
<script src="assets/libs/mobius1-selectr/selectr.min.js"></script>
<script src="assets/js/app.js"></script>
<script>    
<?php if(isset($current['image']) AND $current['image'] != ''){ ?>
let preloaded = [
    {id: 1, src: '<?php echo $current['image']; ?>'},
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
new Selectr('#group_id');
</script>
</body>
</html>