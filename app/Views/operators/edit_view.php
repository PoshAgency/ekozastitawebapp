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

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="client-full-edit-page bg-[#EEF0FC] dark:bg-gray-900">

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
								<h1 class="font-medium text-3xl block dark:text-slate-100"><?php echo (isset($current['id']) AND $current['id'] != '') ? '' : 'Novi '; ?>Operativac</h1>
								<ol class="list-reset flex text-sm">
									<li>
										<a href="dashboard" class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Ekozaštita</a>
									</li>
									<li>
										<span class="text-gray-500 dark:text-slate-400 mx-2">/</span>
									</li>
									<li>
										<a href="operators" class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Operativci</a>
									</li>
									<li>
										<span class="text-gray-500 dark:text-slate-400 mx-2">/</span>
									</li>
									<li><span class="text-gray-500 dark:text-slate-400"><?php echo (isset($current['first_name']) AND $current['first_name'] != '') ? $current['first_name'] . ((isset($current['last_name']) AND $current['last_name'] != '') ? ' ' . $current['last_name'] : '') : 'Novi klijent'; ?></span></li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="main-content-container xl:w-full  min-h-[calc(100vh-138px)] relative pb-14 mt-5"> 
            <form action="operators/save" class="operators-form" id="operators-form">
			    <div class="main-content-wrapper flex justify-center grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 justify-between">
                    <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12 mx-auto" style="min-width: 50vw;">
                        <div class="w-full relative mb-4">  
                            <div class="p-4">
                                <div class="flex-auto p-6 bg-white rounded-md shadow-md">
                                    <h2 class="text-2xl font-semibold mb-4">Osnovne informacije</h2>
                                    <div class="mb-2" style="position:relative">
                                        <label for="first_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Ime</label>
                                        <input type="text" id="first_name" name="first_name" value="<?php echo (isset($current['first_name']) AND $current['first_name'] != '') ? $current['first_name'] : ''; ?>" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="" />
                                    </div>
                                    <div class="mb-2" style="position:relative">
                                        <label for="last_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Prezime</label>
                                        <input type="text" id="last_name" name="last_name" value="<?php echo (isset($current['last_name']) AND $current['last_name'] != '') ? $current['last_name'] : ''; ?>" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="" />
                                    </div>
                                    <div class="mb-2" style="position:relative">
                                        <label for="phone" class="font-medium text-sm text-slate-600 dark:text-slate-400">Telefon</label>
                                        <input type="text" id="phone" name="phone" value="<?php echo (isset($current['phone']) AND $current['phone'] != '') ? $current['phone'] : ''; ?>" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="" />
                                    </div>

                                    <div class="mb-2" style="position:relative">
                                        <label for="city" class="font-medium text-sm text-slate-600 dark:text-slate-400">Grad</label>
                                        <input type="text" id="city" name="city" value="<?php echo (isset($current['city']) AND $current['city'] != '') ? $current['city'] : ''; ?>" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="" />
                                    </div>

                                    <h2 class="text-2xl font-semibold mb-4 mt-5">Login podaci</h2>
                                    <div class="mb-2" style="position:relative">
                                        <label for="email" class="font-medium text-sm text-slate-600 dark:text-slate-400">Email</label>
                                        <input type="email" id="email" name="email" value="<?php echo (isset($current['email']) AND $current['email'] != '') ? $current['email'] : ''; ?>" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="" />
                                    </div>
                                    <div class="mb-2" style="position:relative">
                                        <label for="password" class="font-medium text-sm text-slate-600 dark:text-slate-400">Lozinka</label>
                                        <span class="reveal_password">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="10.227" viewBox="0 0 15 10.227">
                                                <path id="eye" d="M8.5,4.5A8.064,8.064,0,0,0,1,9.614a8.057,8.057,0,0,0,15,0A8.064,8.064,0,0,0,8.5,4.5Zm0,8.523a3.409,3.409,0,1,1,3.409-3.409A3.41,3.41,0,0,1,8.5,13.023Zm0-5.455a2.045,2.045,0,1,0,2.045,2.045A2.043,2.043,0,0,0,8.5,7.568Z" transform="translate(-1 -4.5)" fill="#e5e5e5"/>
                                            </svg>
                                        </span>
                                        <input type="password" name="password" id="password" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="<?php echo (isset($current['id']) AND $current['id'] != '') ? 'Unesite lozinku kako bi zamenili trenutnu' : ''; ?>">
                                    </div>
                                    <div class="mt-5">
                                        <input type="hidden" name="id" value="<?php echo (isset($current['id']) AND $current['id'] != '') ? $current['id'] : ''; ?>">
                                        <button type="submit" class="px-8 py-2 mb-4 bg-brand text-xl text-white text-sm rounded hover:bg-brand-600 border border-brand-500">Snimi</button>
                                    </div>
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

<script src="assets/js/image-uploader.js"></script>
<script src="assets/libs/vanillajs-datepicker/js/datepicker-full.min.js"></script>
<script src="assets/libs/mobius1-selectr/selectr.min.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>