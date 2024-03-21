<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php echo view('templates/head'); ?>

<link rel="stylesheet" href="assets/libs/mobius1-selectr/selectr.min.css">
<link rel="stylesheet" href="assets/css/custom.css" />
</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="report-group-page bg-[#EEF0FC] dark:bg-gray-900">

<?php echo view('templates/left-bar.php'); ?>		
<?php echo view('templates/header.php'); ?>		

<div class="page-container ltr:flex flex-1 rtl:flex-row-reverse">
	<div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
        <div class="breadcrumbs-container xl:w-full">
			<div class="flex flex-wrap">
				<div class="flex items-center py-4 px-4 w-full">
					<div class="w-full p-4 bg-white rounded-md shadow-md">
						<div class="flex flex-wrap justify-between items-center">
							<div class="items-center">
								<h1 class="font-medium text-3xl block dark:text-slate-100">Show - Izveštaji</h1>
								<ol class="list-reset flex text-sm">
									<li>
										<a href="<?php echo base_url(); ?>" class="text-gray-500 dark:text-slate-400">Ekozaštita</a>
									</li>
									<li>
										<span class="text-gray-500 dark:text-slate-400 mx-2">/</span>
									</li>
									<li class="text-green-500 dark:text-gray-400">Izveštaji</li>
								</ol>
							</div>
                            <div class="ms-auto">
                                <a href="clients/edit" class="inline-block focus:outline-none bg-brand-500 mt-1 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded">
                                    Napravi nov izveštaj
                                </a>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>

        <div class="breadcrumbs-container xl:w-full">
			<div class="flex flex-wrap">
				<div class="flex items-center py-4 px-4 w-full">
					<div class="w-full p-4 bg-white rounded-md shadow-md">
                        <div class="flex flex-wrap gap-4 items-center">
                            <div class="w-44 ">  
                                <select id="default" class="form-input w-full rounded-md border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700">
                                    <option>Izaberi klijenta</option>
                                    <option>Delhaize Serbia d.o.o.</option>
                                    <option>Klijent 2</option>
                                    <option>Klijent 3</option>
                                </select>
                            </div>
                            <div> 
                                <input id="date" name="date" class="flatpickr form-input w-full rounded-md border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" type="text" placeholder="Izveštaj za period" readonly="readonly">
                            </div>
                            <div class="w-44">
                                <label id="select-all" class="flex items-center">
                                    <input id="all" name="all" type="checkbox" class="accent-primary-500"> 
                                    <span for="all" class="ml-1 text-sm font-medium text-slate-600 dark:text-gray-300"> Svi objekti</span>
                                </label>
                            </div>
                            <div class="w-44">
                                <label id="select-critical" class="flex items-center">
                                    <input id="critical" name="critical" type="checkbox" class="accent-primary-500"> 
                                    <span for="critical" class="ml-1 text-sm font-medium text-slate-600 dark:text-gray-300"> Kritični objekti</span>
                                </label> 
                            </div>
                            <div class="ms-auto">
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <i data-lucide="search" class="z-[1] w-5 h-5 stroke-slate-400"></i>
                                    </div>
                                    <input type="search" id="productSearch" class="form-input w-52 rounded-md border border-slate-600 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none placeholder:text-slate-400 placeholder:font-normal placeholder:text-sm placeholder:text-gray-500 dark:focus:border-primary-500 dark:hover:border-slate-700 pl-10 p-2.5 text-gray-500" placeholder="Filtriraj po nazivu">
                                </div>
                            </div>
                            <div>
                                <a href="report-full-edit.php" class="inline-block focus:outline-none bg-brand-500 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded">
                                    Filtriraj
                                </a>
                                <a href="report-full-edit.php" class="inline-block focus:outline-none bg-brand-500 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded">
                                    Kreiraj izveštaj
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<div class="breadcrumbs-container xl:w-full">
			<div class="flex flex-wrap">
				<div class="flex items-center py-4 px-4 w-full">
					<div class="w-full p-4 bg-white rounded-md shadow-md">
                        <div class="flex flex-wrap gap-4 items-center">
                            <a href="javasript:;" class="active object-item px-2 py-1 lg:px-4 text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br text-sm rounded transition hover:bg-green-600 border border-green font-medium mb-2">MAXI 276 ZRENJANIN</a>
                            <a href="javasript:;" class="object-item px-2 py-1 lg:px-4 text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br text-sm rounded transition hover:bg-green-600 border border-green font-medium mb-2">MAXI 276 ZRENJANIN</a>
                            <a href="javasript:;" class="object-item px-2 py-1 lg:px-4 text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br text-sm rounded transition hover:bg-green-600 border border-green font-medium mb-2">MAXI 276 ZRENJANIN</a>
                            <a href="javasript:;" class="critical object-item px-2 py-1 lg:px-4 text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br text-sm rounded transition hover:bg-green-600 border border-green font-medium mb-2">MAXI 276 ZRENJANIN</a>
                            <a href="javasript:;" class="object-item px-2 py-1 lg:px-4 text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br text-sm rounded transition hover:bg-green-600 border border-green font-medium mb-2">MAXI 276 ZRENJANIN</a>
                            <a href="javasript:;" class="object-item px-2 py-1 lg:px-4 text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br text-sm rounded transition hover:bg-green-600 border border-green font-medium mb-2">MAXI 276 ZRENJANIN</a>
                            <a href="javasript:;" class="object-item px-2 py-1 lg:px-4 text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br text-sm rounded transition hover:bg-green-600 border border-green font-medium mb-2">MAXI 276 ZRENJANIN</a>
                            <a href="javasript:;" class="critical object-item px-2 py-1 lg:px-4 text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br text-sm rounded transition hover:bg-green-600 border border-green font-medium mb-2">MAXI 276 ZRENJANIN</a>
                            <a href="javasript:;" class="object-item px-2 py-1 lg:px-4 text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br text-sm rounded transition hover:bg-green-600 border border-green font-medium mb-2">MAXI 276 ZRENJANIN</a>
                            <a href="javasript:;" class="object-item px-2 py-1 lg:px-4 text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br text-sm rounded transition hover:bg-green-600 border border-green font-medium mb-2">MAXI 276 ZRENJANIN</a>
                            <a href="javasript:;" class="critical object-item px-2 py-1 lg:px-4 text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br text-sm rounded transition hover:bg-green-600 border border-green font-medium mb-2">MAXI 276 ZRENJANIN</a>
                            <a href="javasript:;" class="object-item px-2 py-1 lg:px-4 text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br text-sm rounded transition hover:bg-green-600 border border-green font-medium mb-2">MAXI 276 ZRENJANIN</a>
                            <a href="javasript:;" class="object-item px-2 py-1 lg:px-4 text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br text-sm rounded transition hover:bg-green-600 border border-green font-medium mb-2">MAXI 276 ZRENJANIN</a>
                            <a href="javasript:;" class="critical object-item px-2 py-1 lg:px-4 text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br text-sm rounded transition hover:bg-green-600 border border-green font-medium mb-2">MAXI 276 ZRENJANIN</a>
                            <a href="javasript:;" class="object-item px-2 py-1 lg:px-4 text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br text-sm rounded transition hover:bg-green-600 border border-green font-medium mb-2">MAXI 276 ZRENJANIN</a>
                            <a href="javasript:;" class="object-item px-2 py-1 lg:px-4 text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br text-sm rounded transition hover:bg-green-600 border border-green font-medium mb-2">MAXI 276 ZRENJANIN</a>
                            <a href="javasript:;" class="object-item px-2 py-1 lg:px-4 text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br text-sm rounded transition hover:bg-green-600 border border-green font-medium mb-2">MAXI 276 ZRENJANIN</a>
                            <a href="javasript:;" class="object-item px-2 py-1 lg:px-4 text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br text-sm rounded transition hover:bg-green-600 border border-green font-medium mb-2">MAXI 276 ZRENJANIN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

<!-- Small Modal -->
<div class="modal animate-ModalSlide hidden" id="smallmodal">
    <div class="relative w-auto pointer-events-none  sm:my-7 sm:mx-auto z-[99] sm:max-w-xs">
        <div class="relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-800 bg-clip-padding rounded">
            <div class="flex shrink-0 items-center justify-between py-2 px-4 rounded-t border-b border-solid dark:border-gray-700 bg-slate-800">
                <h6 class="mb-0 leading-4 text-base font-semibold text-white mt-0" id="staticBackdropLabel1">Brisanje</h6>
                <button type="button" class="box-content w-4 h-4 p-1 bg-slate-700/60 rounded-full text-white leading-4 text-xl close" aria-label="Close"  data-fc-dismiss>&times;</button>
            </div>
            <div class="relative flex-auto p-4 text-slate-600 dark:text-gray-300 leading-relaxed">
                <p class="font-semibold text-base">Da li ste sigurni da želite da obrišete?</p>
                <!-- <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, pariatur.</p>                     -->
            </div>
            <div class="flex flex-wrap shrink-0 justify-end p-3 rounded-b border-t border-dashed dark:border-gray-700">
                <button class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500 text-sm font-medium py-1 px-3 rounded mr-1 close" data-fc-dismiss>Da</button>
                <button class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500 text-sm font-medium py-1 px-3 rounded" data-fc-dismiss>Ne</button>
            </div>
        </div>
    </div>
</div>

<!-- Approve Modal -->
<div class="modal animate-ModalSlide hidden" id="approvemodal">
    <div class="relative w-auto pointer-events-none  sm:my-7 sm:mx-auto z-[99] sm:max-w-xs">
        <div class="relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-800 bg-clip-padding rounded">
            <div class="flex shrink-0 items-center justify-between py-2 px-4 rounded-t border-b border-solid dark:border-gray-700 bg-slate-800">
                <h6 class="mb-0 leading-4 text-base font-semibold text-slate-300 mt-0" id="staticBackdropLabel1">Rani nalog za odobrenje</h6>
                <button type="button" class="box-content w-4 h-4 p-1 bg-slate-700/60 rounded-full text-white leading-4 text-xl close" aria-label="Close" data-fc-dismiss>&times;</button>
            </div>
            <div class="relative flex-auto p-4 text-slate-600 dark:text-gray-300 leading-relaxed">
                <p class="font-semibold text-base">Da li ste sigurni da želite da odobrite?</p>
                <!-- <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, pariatur.</p> -->
            </div>
            <div class="flex flex-wrap shrink-0 justify-end p-3 rounded-b border-t border-dashed dark:border-gray-700">
                <button class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500 text-sm font-medium py-1 px-3 rounded mr-1 close" data-fc-dismiss>Da</button>
                <button class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500 text-sm font-medium py-1 px-3 rounded" data-fc-dismiss>Ne</button>
            </div>
        </div>
    </div>
</div>

<!-- Send mail Modal -->
<div class="modal animate-ModalSlide hidden" id="sendmailmodal">
    <div class="relative w-auto pointer-events-none  sm:my-7 sm:mx-auto z-[99] sm:max-w-xs">
        <div class="relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-800 bg-clip-padding rounded">
            <div class="flex shrink-0 items-center justify-between py-2 px-4 rounded-t border-b border-solid dark:border-gray-700 bg-slate-800">
                <h6 class="mb-0 leading-4 text-base font-semibold text-slate-300 mt-0" id="staticBackdropLabel1">Rani nalog za odobrenje</h6>
                <button type="button" class="box-content w-4 h-4 p-1 bg-slate-700/60 rounded-full text-white leading-4 text-xl close" aria-label="Close" data-fc-dismiss>&times;</button>
            </div>
            <div class="relative flex-auto p-4 text-slate-600 dark:text-gray-300 leading-relaxed">
                <p class="font-semibold text-base">Da li ste sigurni da želite da pošeljete mejlove?</p>
                <!-- <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, pariatur.</p> -->
            </div>
            <div class="flex flex-wrap shrink-0 justify-end p-3 rounded-b border-t border-dashed dark:border-gray-700">
                <button class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500 text-sm font-medium py-1 px-3 rounded mr-1 close" data-fc-dismiss>Da</button>
                <button class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500 text-sm font-medium py-1 px-3 rounded" data-fc-dismiss>Ne</button>
            </div>
        </div>
    </div>
</div>

<!-- <div class="menu-overlay"></div> -->

<script src="assets/libs/lucide/umd/lucide.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>
<script>
flatpickr(".flatpickr", {
    mode: "range",
    minDate: "today",
    dateFormat: "d.m.Y.",
});
</script>
<script>

</script>
<script src="assets/libs/@frostui/tailwindcss/frostui.js"></script>
<script src="assets/libs/mobius1-selectr/selectr.min.js"></script>
<script src="assets/js/pages/form-advanced.init.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>