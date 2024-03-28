<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php echo view('templates/head.php'); ?>

<link rel="stylesheet" href="assets/css/image-uploader.css">
<link rel="stylesheet" href="assets/libs/vanillajs-datepicker/css/datepicker.min.css">
<link rel="stylesheet" href="assets/libs/mobius1-selectr/selectr.min.css">
<link rel="stylesheet" href="assets/libs/vanillajs-datepicker/css/datepicker.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
<link rel="stylesheet" href="assets/css/custom.css" />
</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="workorder-full-edit-page bg-green-50 dark:bg-gray-900">

<!-- leftbar-tab-menu -->
<?php echo view('templates/left-bar.php'); ?>		
<!-- header -->
<?php echo view('templates/header.php'); ?>		

<div class="page-container ltr:flex flex-1 rtl:flex-row-reverse">
	<div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
        <div class="breadcrumbs-container xl:w-full">
			<div class="flex flex-wrap">
				<div class="flex items-center py-4 px-4 w-full">
					<div class="w-full p-4 bg-white rounded-md shadow-md">
						<div class="flex flex-wrap justify-between items-center">
							<div class="items-center">
								<h1 class="font-medium text-3xl block dark:text-slate-100">Radni nalozi</h1>
								<ol class="list-reset flex text-sm">
									<li>
										<a href="<?php echo base_url(); ?>" class="text-gray-500 dark:text-slate-400">Ekozaštita</a>
									</li>
									<li>
										<span class="text-gray-500 dark:text-slate-400 mx-2">/</span>
									</li>
									<li class="text-green-500 dark:text-gray-400">Radni nalozi</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

        <div class="flex items-center py-4 px-4 w-full">
            <form action="javascript:;" class="xl:w-full  min-h-[calc(100vh-152px)] relative pb-14">            
                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                    <div class="sm:col-span-12  md:col-span-12 lg:col-span-3 xl:col-span-3 sticky top-70 mh-100vh">
                        <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                            <div class="flex-auto p-4">
                                <h5 class="text-lg font-medium text-slate-700 dark:text-slate-300 mb-3">Radni nalog 1450 <i class="fas fa-minus text-primary-500"></i></h5>
                                <div class="flex-auto p-0 md:p-4">
                                    <div class="mb-2">
                                        <label for="default" class="font-medium text-sm text-slate-600 dark:text-slate-400">Klijent</label>
                                        <select id="default" name="company" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700">
                                            <option>Delhaize Serbia d.o.o.</option>
                                            <option>Delhaize Serbia d.o.o. 2</option>
                                            <option>Delhaize Serbia d.o.o. 3</option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <label for="location" class="font-medium text-sm text-slate-600 dark:text-slate-400">Objekat</label>
                                        <select id="location" name="location" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                            <option>Objekat 1</option>
                                            <option>Objekat 2</option>
                                            <option>Objekat 3</option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <label for="address" class="font-medium text-sm text-slate-600 dark:text-slate-400">Adresa</label>
                                        <input readonly  value="Jurija Gagarina 14" type="text" id="address" name="address" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Adresa" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="town" class="font-medium text-sm text-slate-600 dark:text-slate-400">Grad</label>
                                        <input readonly  value="Beograd" type="text" id="town" name="town" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Grad" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="date" class="font-medium text-sm text-slate-600 dark:text-slate-400">Datum</label>
                                        <input value="13.03.2024." id="date" name="date" class="flatpickr form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700" type="text" placeholder="Select Date.." readonly="readonly">
                                    </div>
                                    <div class="mb-2">
                                        <label for="contact_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Izvršilac</label>
                                        <input  readonly value="Marko Marković" type="text" id="contact_name" name="contact_name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Kontakt osoba" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                        <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative mb-4 sticky top-70">
                            <div class="mb-4 border-b border-dashed border-gray-200 dark:border-gray-700 flex flex-wrap justify-start lg:justify-between" data-fc-type="tab">                            
                                <ul class="flex flex-wrap mb-5 lg:-mb-px" aria-label="Tabs">
                                    <li class="mr-2" role="presentation">
                                        <a href="workorders/edit2#tab1" class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700 active" id="deratizacija-tab">Deratizacija</a>
                                    </li>
                                    <li class="mr-2" role="presentation">
                                        <a href="workorders/edit2#tab2" class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700" id="dezinfekcija-tab">Dezinfekcija</a>
                                    </li>
                                    <li class="mr-2" role="presentation">
                                        <a href="workorders/edit2#tab3" class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700" id="dezinsekcija-tab">Dezinfekcija</a>
                                    </li>
                                    <li class="mr-2" role="presentation">
                                        <a href="workorders/edit2#tab4" class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700" id="ostale-usluge-tab">Ostale usluge</a>
                                    </li>
                                    <li class="mr-2" role="presentation">
                                        <a href="workorders/edit2#tab5" class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700" id="opsti-utisak-tab">Opšti utisak</a>
                                    </li>
                                    <li class="mr-2" role="presentation">
                                        <a href="workorders/edit2#tab6" class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700" id="korisceni-preprati-tab">Koriščeni preprati</a>
                                    </li>
                                </ul>                         
                            </div>
                        </div>
                        <div class="w-full relative">             
                            <div class="p-0"> 
                                <div id="myTabContent">                             
                                    <div id="tab-2">
                                        <div id="tab1" class="bg-white dark:bg-slate-800 shadow rounded-md w-full relative mb-4" anchor="">
                                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                <h4 class="font-medium">Prisustvo glodara - Deratizacija</h4>
                                            </div>
                                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                <div class="flex sm:items-center justify-between">
                                                    <div class="flex items-center space-x-2 w-full">                                                    
                                                        <div class="w-full">                                                             
                                                            <div class="box-container" id="accordion-flush" data-accordion="collapse" data-active-classes="box-container bg-white dark:bg-gray-900 text-gray-900 dark:text-white w-full" data-inactive-classes="text-gray-500 dark:text-gray-400">
                                                                <div class="box-item-container">
                                                                    <h2 id="accordion-flush-heading-1" class="fc-collapse open" data-fc-type="collapse">
                                                                        <button type="button" class="fc-collapse-open:text-primary flex justify-between items-center p-5 w-full font-medium text-left text-brand border-b border-dashed border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                                                                            <span class="text-brand">Kutije</span>
                                                                            <div class="box-item-mark-container ml-auto rounded-md border border-slate-300/60">
                                                                                <h5 class="text-brand">Ocena</h5>
                                                                                <select disabled id="mark-1" name="mark[1]" class="edit-mark-input text-brand rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                                                    <option>0</option>
                                                                                    <option>1</option>
                                                                                    <option>2</option>
                                                                                    <option>3</option>
                                                                                </select>
                                                                                <a class="edit-mark text-brand " href="javascript:;"><i class="icofont-ui-edit text-lg text-brand dark:text-gray-400"></i></a>
                                                                            </div>
                                                                            <i class="fas fa-angle-down  fc-collapse-open:rotate-180 transition-transform duration-300" data-accordion-icon></i>
                                                                        </button>                                                                       
                                                                    </h2>                                                                    
                                                                    <div id="accordion-flush-body-1" class="overflow-hidden transition-[height] duration-300" aria-labelledby="accordion-flush-heading-1">
                                                                        <div class="p-5 border-b border-dashed border-gray-200 dark:border-gray-700">
                                                                            <textarea id="message" rows="2" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700 mb-5" placeholder="Napiši komentar"></textarea>
                                                                            <div class="gallery-upload-container">
                                                                                <a class="gallery-upload-item" href="./uploads/plan-mamaca-01.jpg" data-fancybox="mamci" data-caption="Plan mamaca #1">
                                                                                    <img src="./uploads/plan-mamaca-01.jpg" />
                                                                                    <div class="icon-container">
                                                                                        <span class="preview-img-icon" href="javascript:;"><i class="icofont-eye-open text-lg text-brand-500 dark:text-gray-400"></i></span>
                                                                                        <span class="remove-img-icon" href="javascript:;"><i class="icofont-ui-delete text-lg text-red-500 dark:text-gray-400"></i></span>
                                                                                    </div>
                                                                                </a>
                                                                                <a class="gallery-upload-item" href="./uploads/plan-mamaca-02.jpg" data-fancybox="mamci" data-caption="Plan mamaca #1">
                                                                                    <img src="./uploads/plan-mamaca-02.jpg" />
                                                                                    <div class="icon-container">
                                                                                        <span class="preview-img-icon" href="javascript:;"><i class="icofont-eye-open text-lg text-brand-500 dark:text-gray-400"></i></span>
                                                                                        <span class="remove-img-icon" href="javascript:;"><i class="icofont-ui-delete text-lg text-red-500 dark:text-gray-400"></i></span>
                                                                                    </div>
                                                                                </a> 
                                                                                <a class="gallery-upload-item">
                                                                                    <div class="upload-image">
                                                                                        <div class="upload_image"></div>
                                                                                    </div>
                                                                                </a>
                                                                                <a class="gallery-upload-item uploads-content">
                                                                                    <div class="uploads-content-add-item btn-holder col-span-12 text-center">
                                                                                        <span>+</span>
                                                                                    </div>
                                                                                </a>
                                                                            </div>                                                                        
                                                                        </div>                                                                         
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                  
                                            </div>
                                        </div>
                                        <div id="tab2" class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative mb-4" anchor="">
                                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                <h4 class="font-medium">Prisustvo insekata - Dezinfekcija</h4>
                                            </div>
                                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                <div class="flex sm:items-center justify-between">
                                                    <div class="flex items-center space-x-2 w-full">                                                    
                                                        <div class="w-full">                                                             
                                                            <div class="box-container" id="accordion-flush" data-accordion="collapse" data-active-classes="box-container bg-white dark:bg-gray-900 text-gray-900 dark:text-white w-full" data-inactive-classes="text-gray-500 dark:text-gray-400">
                                                                <div class="box-item-container">
                                                                    <h2 id="accordion-flush-heading-1" class="fc-collapse open" data-fc-type="collapse">
                                                                        <button type="button" class="fc-collapse-open:text-primary flex justify-between items-center p-5 w-full font-medium text-left text-brand border-b border-dashed border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                                                                            <span class="text-brand">Kutije</span>
                                                                            <div class="box-item-mark-container ml-auto rounded-md border border-slate-300/60">
                                                                                <h5 class="text-brand">Ocena</h5>
                                                                                <select disabled id="mark-1" name="mark[1]" class="edit-mark-input text-brand rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                                                    <option>0</option>
                                                                                    <option>1</option>
                                                                                    <option>2</option>
                                                                                    <option>3</option>
                                                                                </select>
                                                                                <a class="edit-mark text-brand " href="javascript:;"><i class="icofont-ui-edit text-lg text-brand dark:text-gray-400"></i></a>
                                                                            </div>
                                                                            <i class="fas fa-angle-down  fc-collapse-open:rotate-180 transition-transform duration-300" data-accordion-icon></i>
                                                                        </button>                                                                       
                                                                    </h2>                                                                    
                                                                    <div id="accordion-flush-body-1" class="overflow-hidden transition-[height] duration-300" aria-labelledby="accordion-flush-heading-1">
                                                                        <div class="p-5 border-b border-dashed border-gray-200 dark:border-gray-700">
                                                                            <textarea id="message" rows="2" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700 mb-5" placeholder="Napiši komentar"></textarea>
                                                                            <div class="gallery-upload-container">
                                                                                <a class="gallery-upload-item" href="./uploads/plan-mamaca-01.jpg" data-fancybox="mamci" data-caption="Plan mamaca #1">
                                                                                    <img src="./uploads/plan-mamaca-01.jpg" />
                                                                                    <div class="icon-container">
                                                                                        <span class="preview-img-icon" href="javascript:;"><i class="icofont-eye-open text-lg text-brand-500 dark:text-gray-400"></i></span>
                                                                                        <span class="remove-img-icon" href="javascript:;"><i class="icofont-ui-delete text-lg text-red-500 dark:text-gray-400"></i></span>
                                                                                    </div>
                                                                                </a>
                                                                                <a class="gallery-upload-item" href="./uploads/plan-mamaca-02.jpg" data-fancybox="mamci" data-caption="Plan mamaca #1">
                                                                                    <img src="./uploads/plan-mamaca-02.jpg" />
                                                                                    <div class="icon-container">
                                                                                        <span class="preview-img-icon" href="javascript:;"><i class="icofont-eye-open text-lg text-brand-500 dark:text-gray-400"></i></span>
                                                                                        <span class="remove-img-icon" href="javascript:;"><i class="icofont-ui-delete text-lg text-red-500 dark:text-gray-400"></i></span>
                                                                                    </div>
                                                                                </a> 
                                                                                <a class="gallery-upload-item">
                                                                                    <div class="upload-image">
                                                                                        <div class="upload_image"></div>
                                                                                    </div>
                                                                                </a>
                                                                                <a class="gallery-upload-item uploads-content">
                                                                                    <div class="uploads-content-add-item btn-holder col-span-12 text-center">
                                                                                        <span>+</span>
                                                                                    </div>
                                                                                </a>
                                                                            </div>                                                                        
                                                                        </div>                                                                         
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                  
                                            </div>
                                        </div> 
                                        <div id="tab3" class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative mb-4" anchor="">
                                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                <h4 class="font-medium">Dezinfekcija</h4>
                                            </div>
                                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                <div class="flex sm:items-center justify-between">
                                                    <div class="flex items-center space-x-2 w-full">                                                    
                                                        <div class="w-full">                                                             
                                                            <div class="box-container" id="accordion-flush" data-accordion="collapse" data-active-classes="box-container bg-white dark:bg-gray-900 text-gray-900 dark:text-white w-full" data-inactive-classes="text-gray-500 dark:text-gray-400">
                                                                <div class="box-item-container">
                                                                    <h2 id="accordion-flush-heading-1" class="fc-collapse open" data-fc-type="collapse">
                                                                        <button type="button" class="fc-collapse-open:text-primary flex justify-between items-center p-5 w-full font-medium text-left text-brand border-b border-dashed border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                                                                            <span class="text-brand">Kutije</span>
                                                                            <div class="box-item-mark-container ml-auto rounded-md border border-slate-300/60">
                                                                                <h5 class="text-brand">Ocena</h5>
                                                                                <select disabled id="mark-1" name="mark[1]" class="edit-mark-input text-brand rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                                                    <option>Da</option>
                                                                                    <option>Ne</option>
                                                                                </select>
                                                                                <a class="edit-mark text-brand " href="javascript:;"><i class="icofont-ui-edit text-lg text-brand dark:text-gray-400"></i></a>
                                                                            </div>
                                                                            <i class="fas fa-angle-down  fc-collapse-open:rotate-180 transition-transform duration-300" data-accordion-icon></i>
                                                                        </button>                                                                       
                                                                    </h2>                                                                    
                                                                    <div id="accordion-flush-body-1" class="overflow-hidden transition-[height] duration-300" aria-labelledby="accordion-flush-heading-1">
                                                                        <div class="p-5 border-b border-dashed border-gray-200 dark:border-gray-700">
                                                                            <textarea id="message" rows="2" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700 mb-5" placeholder="Napiši komentar"></textarea>
                                                                            <div class="gallery-upload-container">
                                                                                <a class="gallery-upload-item" href="./uploads/plan-mamaca-01.jpg" data-fancybox="mamci" data-caption="Plan mamaca #1">
                                                                                    <img src="./uploads/plan-mamaca-01.jpg" />
                                                                                    <div class="icon-container">
                                                                                        <span class="preview-img-icon" href="javascript:;"><i class="icofont-eye-open text-lg text-brand-500 dark:text-gray-400"></i></span>
                                                                                        <span class="remove-img-icon" href="javascript:;"><i class="icofont-ui-delete text-lg text-red-500 dark:text-gray-400"></i></span>
                                                                                    </div>
                                                                                </a>
                                                                                <a class="gallery-upload-item" href="./uploads/plan-mamaca-02.jpg" data-fancybox="mamci" data-caption="Plan mamaca #1">
                                                                                    <img src="./uploads/plan-mamaca-02.jpg" />
                                                                                    <div class="icon-container">
                                                                                        <span class="preview-img-icon" href="javascript:;"><i class="icofont-eye-open text-lg text-brand-500 dark:text-gray-400"></i></span>
                                                                                        <span class="remove-img-icon" href="javascript:;"><i class="icofont-ui-delete text-lg text-red-500 dark:text-gray-400"></i></span>
                                                                                    </div>
                                                                                </a> 
                                                                                <a class="gallery-upload-item">
                                                                                    <div class="upload-image">
                                                                                        <div class="upload_image"></div>
                                                                                    </div>
                                                                                </a>
                                                                                <a class="gallery-upload-item uploads-content">
                                                                                    <div class="uploads-content-add-item btn-holder col-span-12 text-center">
                                                                                        <span>+</span>
                                                                                    </div>
                                                                                </a>
                                                                            </div>                                                                        
                                                                        </div>                                                                         
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                  
                                            </div>
                                        </div> 
                                        <div id="tab4" class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative mb-4" anchor="">
                                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                <h4 class="font-medium">Ostale usluge</h4>
                                            </div>
                                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                <div class="flex sm:items-center justify-between">
                                                    <div class="flex items-center space-x-2 w-full">                                                    
                                                        <div class="w-full">                                                             
                                                            <div class="box-container" id="accordion-flush" data-accordion="collapse" data-active-classes="box-container bg-white dark:bg-gray-900 text-gray-900 dark:text-white w-full" data-inactive-classes="text-gray-500 dark:text-gray-400">
                                                                <div class="box-item-container">
                                                                    <h2 id="accordion-flush-heading-1" class="fc-collapse open" data-fc-type="collapse">
                                                                        <button type="button" class="fc-collapse-open:text-primary flex justify-between items-center p-5 w-full font-medium text-left text-brand border-b border-dashed border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                                                                            <span class="text-brand">Kutije</span>
                                                                            <div class="box-item-mark-container ml-auto rounded-md border border-slate-300/60">
                                                                                <h5 class="text-brand">Ocena</h5>
                                                                                <select disabled id="mark-1" name="mark[1]" class="edit-mark-input text-brand rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                                                    <option>Da</option>
                                                                                    <option>Ne</option>
                                                                                </select>
                                                                                <a class="edit-mark text-brand " href="javascript:;"><i class="icofont-ui-edit text-lg text-brand dark:text-gray-400"></i></a>
                                                                            </div>
                                                                            <i class="fas fa-angle-down  fc-collapse-open:rotate-180 transition-transform duration-300" data-accordion-icon></i>
                                                                        </button>                                                                       
                                                                    </h2>                                                                    
                                                                    <div id="accordion-flush-body-1" class="overflow-hidden transition-[height] duration-300" aria-labelledby="accordion-flush-heading-1">
                                                                        <div class="p-5 border-b border-dashed border-gray-200 dark:border-gray-700">
                                                                            <textarea id="message" rows="2" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700 mb-5" placeholder="Napiši komentar"></textarea>
                                                                            <div class="gallery-upload-container">
                                                                                <a class="gallery-upload-item" href="./uploads/plan-mamaca-01.jpg" data-fancybox="mamci" data-caption="Plan mamaca #1">
                                                                                    <img src="./uploads/plan-mamaca-01.jpg" />
                                                                                    <div class="icon-container">
                                                                                        <span class="preview-img-icon" href="javascript:;"><i class="icofont-eye-open text-lg text-brand-500 dark:text-gray-400"></i></span>
                                                                                        <span class="remove-img-icon" href="javascript:;"><i class="icofont-ui-delete text-lg text-red-500 dark:text-gray-400"></i></span>
                                                                                    </div>
                                                                                </a>
                                                                                <a class="gallery-upload-item" href="./uploads/plan-mamaca-02.jpg" data-fancybox="mamci" data-caption="Plan mamaca #1">
                                                                                    <img src="./uploads/plan-mamaca-02.jpg" />
                                                                                    <div class="icon-container">
                                                                                        <span class="preview-img-icon" href="javascript:;"><i class="icofont-eye-open text-lg text-brand-500 dark:text-gray-400"></i></span>
                                                                                        <span class="remove-img-icon" href="javascript:;"><i class="icofont-ui-delete text-lg text-red-500 dark:text-gray-400"></i></span>
                                                                                    </div>
                                                                                </a> 
                                                                                <a class="gallery-upload-item">
                                                                                    <div class="upload-image">
                                                                                        <div class="upload_image"></div>
                                                                                    </div>
                                                                                </a>
                                                                                <a class="gallery-upload-item uploads-content">
                                                                                    <div class="uploads-content-add-item btn-holder col-span-12 text-center">
                                                                                        <span>+</span>
                                                                                    </div>
                                                                                </a>
                                                                            </div>                                                                        
                                                                        </div>                                                                         
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                  
                                            </div>
                                        </div>
                                        <div id="tab5" class="bg-white dark:bg-slate-800 shadow rounded-md w-full relative mb-4" anchor="">
                                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                <h4 class="font-medium">Opšti utisak</h4>
                                            </div>
                                            <div class="py-3 px-4 dark:text-slate-300/70">
                                                <div class="flex sm:items-center justify-between">
                                                    <div class="flex items-center space-x-2 w-full">                                                    
                                                        <div class="w-full"> 
                                                            <div class="py-3 px-4 dark:text-slate-300/70">
                                                                <div class="flex sm:items-center justify-between">
                                                                    <div class="flex items-center space-x-2 w-full">                                                    
                                                                        <div class="w-full"> 
                                                                            <div class="grid md:grid-cols-12 lg:grid-cols-12">
                                                                                <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                                    <label for="message" class="font-medium text-sm text-slate-600 dark:text-slate-400">Komentar</label>
                                                                                </div>
                                                                                <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                                    <textarea id="message" rows="2" class="form-input w-full rounded-md mt-1  dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm" placeholder="Napiši komentar"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>                                  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                  
                                            </div>
                                        </div> 
                                        <div id="tab6" class="bg-white dark:bg-slate-800 shadow rounded-md w-full relative mb-4" anchor="">
                                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                <h4 class="font-medium">Korišćeni preparati</h4>
                                            </div>
                                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                <div class="flex sm:items-center justify-between">
                                                    <div class="flex items-center space-x-2 w-full">                                                    
                                                        <div class="w-full"> 
                                                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                                <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative mb-4">
                                                                    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12">
                                                                        <div class="sm:col-span-12  md:col-span-12 lg:col-span-4 xl:col-span-4 self-center">
                                                                            <img src="assets/images/products/logos/lam.png" alt="" class="inline-block ">
                                                                        </div>
                                                                        <div class="sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-8">
                                                                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                                                <h4 class="font-medium text-green">
                                                                                    <select id="location" name="location" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                                                        <option>Preparat 1</option>
                                                                                        <option>Preparat 2</option>
                                                                                        <option>Preparat 3</option>
                                                                                    </select>
                                                                                </h4>
                                                                            </div>
                                                                            <div class="flex-auto p-4">
                                                                                <a href="javascript:;" class="block mb-3 text-[16px] font-semibold underline hover:text-green-800 dark:hover:text-green-900">Dokument 1</a>
                                                                                <a href="javascript:;" class="block mb-3 text-[16px] font-semibold underline hover:text-green-800 dark:hover:text-green-900">Dokument 2</a>
                                                                                <a href="javascript:;" class="block mb-3 text-[16px] font-semibold underline hover:text-green-800 dark:hover:text-green-900">Dokument 3</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>                                
                                                                </div>
                                                                <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative mb-4">
                                                                    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12">
                                                                        <div class="sm:col-span-12  md:col-span-12 lg:col-span-4 xl:col-span-4 self-center">
                                                                            <img src="assets/images/products/logos/lam.png" alt="" class="inline-block ">
                                                                        </div>
                                                                        <div class="sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-8">
                                                                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                                                <h4 class="font-medium text-green">
                                                                                    <select id="location" name="location" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                                                        <option>Preparat 2</option>
                                                                                        <option>Preparat 1</option>
                                                                                        <option>Preparat 3</option>
                                                                                    </select>
                                                                                </h4>
                                                                            </div>
                                                                            <div class="flex-auto p-4">
                                                                                <a href="javascript:;" class="block mb-3 font-semibold underline hover:text-green-800 dark:hover:text-green-900">Dokument 1</a>
                                                                                <a href="javascript:;" class="block mb-3 font-semibold underline hover:text-green-800 dark:hover:text-green-900">Dokument 5</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>                                
                                                                </div>
                                                                <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative mb-4">
                                                                    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12">
                                                                        <div class="sm:col-span-12  md:col-span-12 lg:col-span-4 xl:col-span-4 self-center">
                                                                            <img src="assets/images/products/logos/lam.png" alt="" class="inline-block ">
                                                                        </div>
                                                                        <div class="sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-8">
                                                                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                                                <h4 class="font-medium text-green">
                                                                                    <select id="location" name="location" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                                                        <option>Preparat 3</option>
                                                                                        <option>Preparat 1</option>
                                                                                        <option>Preparat 2</option>
                                                                                    </select>
                                                                                </h4>
                                                                            </div>
                                                                            <div class="flex-auto p-4">
                                                                                <a href="javascript:;" class="block mb-3 font-semibold underline hover:text-green-800 dark:hover:text-green-900">Dokument 7</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>                                
                                                                </div>
                                                                <div class="flex sm:items-center justify-between">
                                                                    <div class="flex items-center space-x-2 w-full">                                                    
                                                                        <div class="w-full"> 
                                                                            <div class="grid md:grid-cols-12 lg:grid-cols-12">
                                                                                
                                                                                <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                                    <label for="message" class="font-medium text-sm text-slate-600 dark:text-slate-400">Komentar</label>
                                                                                </div>
                                                                                <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                                    <textarea id="message" rows="2" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Napiši komentar"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>                                  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                  
                                            </div>
                                        </div> 
                                    </div>                                       
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="sm:col-span-12  md:col-span-12 lg:col-span-3 xl:col-span-3 sticky top-70 mh-100vh">
                        <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative mb-4">
                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                <h4 class="font-medium">Mamci</h4>
                                <div class="flex-auto p-0 md:p-4">                              
                                    <div class="mb-2">
                                        <label for="pest-control-boxes" class="font-medium text-sm text-slate-600 dark:text-slate-400">Deratizacione kutije</label>
                                        <input type="text" id="pest-control-boxes" name="pest-control-boxes" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Kontakt osoba" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="glue-traps" class="font-medium text-sm text-slate-600 dark:text-slate-400">Zamke sa lepkom</label>
                                        <input type="text" id="glue-traps" name="glue-traps" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Kontakt osoba" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="insect-lamp" class="font-medium text-sm text-slate-600 dark:text-slate-400">Insekt lampe</label>
                                        <input type="text" id="insect-lamp" name="insect-lamp" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Kontakt osoba" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="pheromone-traps" class="font-medium text-sm text-slate-600 dark:text-slate-400">Feromonske klopke</label>
                                        <input type="text" id="contact_name" name="pheromone-traps" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Kontakt osoba" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative mb-4">
                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                <h4 class="font-medium">Akcije</h4>
                                <div class="flex-auto p-0 md:p-4">                            			
                                    <div class="mb-2">
                                        <button class="px-2 w-full py-2 lg:px-4 bg-transparent  text-brand text-sm rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium">Snimi PDF</button>
                                    </div>                            			
                                    <div class="mb-2">
                                        <button class="px-2 w-full py-2 lg:px-4 bg-transparent  text-brand text-sm rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium">Pošalji</button>
                                    </div>                            			
                                    <div class="mb-2">
                                        <button class="px-2 w-full py-2 lg:px-4 bg-transparent  text-brand text-sm rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium">Odobri</button>
                                    </div>
                                    <div>
                                        <button class="px-2 py-2 w-full lg:px-4 bg-brand text-white text-sm rounded hover:bg-brand-600 border border-brand-500">Snimi izmene</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- footer -->
        <?php echo view('templates/footer.php'); ?>
        </div>
    </div>
</div>

<!-- <div class="menu-overlay"></div> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="assets/libs/lucide/umd/lucide.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>
<script>
flatpickr(".flatpickr", {
	dateFormat: "d.m.Y.",
});
</script>
<script src="assets/libs/@frostui/tailwindcss/frostui.js"></script>

<script src="assets/libs/vanillajs-datepicker/js/datepicker-full.min.js"></script>
<script src="assets/libs/mobius1-selectr/selectr.min.js"></script>
<script src="assets/js/pages/form-advanced.init.js"></script>
<script src="assets/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
Fancybox.bind("[data-fancybox]", {
  // Your custom options
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const editMarkLinks = document.querySelectorAll('.edit-mark');    
    editMarkLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            const container = event.target.closest('.box-item-mark-container');
            if (container) {
                const input = container.querySelector('.edit-mark-input');
                if (input) {
                    container.classList.add('editable-mark-input');
                    input.removeAttribute('disabled');
                }
            }
            event.stopPropagation();
        });
    });
    const container = document.querySelectorAll('.box-item-mark-container');
    container.forEach(cont => {
        cont.addEventListener('click', function (event) {
            event.stopPropagation();
        });
    });
});
</script>
<script type="text/javascript" src="http://example.com/jquery.min.js"></script>
<script src="assets/js/image-uploader.js"></script>
<script>
    let preloaded = [
        {id: 1, src: 'https://picsum.photos/500/500?random=1'},
    ];
    $('.upload_image').imageUploader({
        label: '(max 1 MB)',
        imagesInputName: 'image',
        preloadedInputName: 'old',
        maxSize: 1048576,
    });
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const uploadContent = document.querySelector('.uploads-content');

    uploadContent.addEventListener('click', function () {
        const itemToClone = document.querySelector('.upload-image');
        const newItem = itemToClone.cloneNode(true);
        const newGalleryItem = document.createElement('a');
        newGalleryItem.classList.add('gallery-upload-item');
        newGalleryItem.appendChild(newItem);

        const parentElement = uploadContent.parentElement;
        parentElement.insertBefore(newGalleryItem, uploadContent);
    });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const addBoxButton = document.querySelector('.add-box');
    const accordionFlush = document.querySelector('.box-container');
    addBoxButton.addEventListener('click', function() {
        const newBoxItem = document.createElement('div');
        newBoxItem.classList.add('box-item-container');
        newBoxItem.innerHTML = `
            <h2 id="accordion-flush-heading-1"  data-fc-type="collapse">
                <button type="button" class="fc-collapse-open:text-primary flex justify-between items-center p-5 w-full font-medium text-left text-brand border-b border-dashed border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                    <span class="text-brand">Kutija 4</span>
                    <div class="box-item-mark-container ml-auto rounded-md border border-slate-300/60">
                        <h5 class="text-brand">Ocena</h5>
                        <select disabled id="mark-1" name="mark[1]" class="edit-mark-input text-brand rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <a class="edit-mark text-brand " href="javascript:;"><i class="icofont-ui-edit text-lg text-brand dark:text-gray-400"></i></a>
                    </div>
                    <i class="fas fa-angle-down  fc-collapse-open:rotate-180 transition-transform duration-300" data-accordion-icon></i>
                </button>                                                                       
            </h2>                                                                    
            <div id="accordion-flush-body-1" class="hidden overflow-hidden transition-[height] duration-300" aria-labelledby="accordion-flush-heading-1">
                <div class="p-5 border-b border-dashed border-gray-200 dark:border-gray-700">
                    <textarea id="message" rows="2" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700 mb-5" placeholder="Napiši komentar"></textarea>
                    <div class="gallery-upload-container">
                        <a class="gallery-upload-item" href="./uploads/plan-mamaca-01.jpg" data-fancybox="mamci" data-caption="Plan mamaca #1">
                            <img src="./uploads/plan-mamaca-01.jpg" />
                            <div class="icon-container">
                                <span class="preview-img-icon" href="javascript:;"><i class="icofont-eye-open text-lg text-brand-500 dark:text-gray-400"></i></span>
                                <span class="remove-img-icon" href="javascript:;"><i class="icofont-ui-delete text-lg text-red-500 dark:text-gray-400"></i></span>
                            </div>
                        </a>
                        <a class="gallery-upload-item" href="./uploads/plan-mamaca-02.jpg" data-fancybox="mamci" data-caption="Plan mamaca #1">
                            <img src="./uploads/plan-mamaca-02.jpg" />
                            <div class="icon-container">
                                <span class="preview-img-icon" href="javascript:;"><i class="icofont-eye-open text-lg text-brand-500 dark:text-gray-400"></i></span>
                                <span class="remove-img-icon" href="javascript:;"><i class="icofont-ui-delete text-lg text-red-500 dark:text-gray-400"></i></span>
                            </div>
                        </a> 
                        <a class="gallery-upload-item">
                            <div class="upload-image">
                                <div class="upload_image"></div>
                            </div>
                        </a>
                        <a class="gallery-upload-item uploads-content">
                            <div class="uploads-content-add-item btn-holder col-span-12 text-center">
                                <span>+</span>
                            </div>
                        </a>
                    </div>                                                                        
                </div>                                                                         
            </div>
        `;
        accordionFlush.insertBefore(newBoxItem, addBoxButton);
    });
});
</script>
</body>
</html>