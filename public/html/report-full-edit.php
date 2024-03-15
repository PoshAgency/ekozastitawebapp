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
<link rel="stylesheet" href="assets/libs/vanillajs-datepicker/css/datepicker.min.css">
<link rel="stylesheet" href="assets/css/custom.css" />
</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="report-full-edit-page bg-[#EEF0FC] dark:bg-gray-900">

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
								<h1 class="font-medium text-3xl block dark:text-slate-100">Izveštaji</h1>
								<ol class="list-reset flex text-sm">
									<li>
										<a href="#" class="text-gray-500 dark:text-slate-400">Ekozaštita</a>
									</li>
									<li>
										<span class="text-gray-500 dark:text-slate-400 mx-2">/</span>
									</li>
									<li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Izveštaji</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="xl:w-full  min-h-[calc(100vh-152px)] relative pb-14">            
            <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                <div class="sm:col-span-12  md:col-span-12 lg:col-span-3 xl:col-span-3 sticky top-70 mh-100vh">
                    <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                        <div class="flex-auto p-4">
                            <h5 class="text-lg font-medium text-slate-700 dark:text-slate-300 mb-3">Izveštaj 1450 <i class="fas fa-minus text-primary-500"></i></h5>
                            <form action="javascript:;" class="flex-auto p-0 md:p-4">
                                <div class="mb-2 select-bg-transparent">
                                    <label for="default" class="font-medium text-sm text-slate-600 dark:text-slate-400">Izveštaj za klijenta</label>
                                    <select id="default" name="company" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700">
                                        <option>Delhaize Serbia d.o.o.</option>
                                        <option>Delhaize Serbia d.o.o. 2</option>
                                        <option>Delhaize Serbia d.o.o. 3</option>
                                    </select>
                                </div>
                                <div class="mb-2">
								    <label for="type" class="font-medium text-sm text-slate-600 dark:text-slate-400">Objekat</label>
								    <select id="work_order_type" name="work_order_type" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
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
                                <!-- <div class="mb-2">
                                    <label for="state" class="font-medium text-sm text-slate-600 dark:text-slate-400">Broj izveštaja</label>
                                    <input type="text" id="state" name="state" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Zemlja" required>
                                </div> -->
                                <div class="mb-2">
                                    <label for="date" class="font-medium text-sm text-slate-600 dark:text-slate-400">Datum</label>
                                    <input value="13.03.2024." id="date" name="date" class="flatpickr form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700" type="text" placeholder="Select Date.." readonly="readonly">
                                </div>
                                <div class="mb-2">
                                    <label for="contact_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Izvršilac</label>
                                    <input  readonly value="Marko Marković" type="text" id="contact_name" name="contact_name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Kontakt osoba" required>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                    <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative mb-4 sticky top-70">
                        <div class="mb-4 border-b border-dashed border-gray-200 dark:border-gray-700 flex flex-wrap justify-start lg:justify-between" data-fc-type="tab">                            
                            <ul class="flex flex-wrap mb-5 lg:-mb-px" aria-label="Tabs">
                                <li class="mr-2" role="presentation">
                                    <a href="#tab1" class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700 active" id="deratizacija-tab">Deratizacija</a>
                                </li>
                                <li class="mr-2" role="presentation">
                                    <a href="#tab2" class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700" id="dezinfekcija-tab">Dezinfekcija</a>
                                </li>
                                <li class="mr-2" role="presentation">
                                    <a href="#tab3" class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700" id="dezinsekcija-tab">Dezinsekcija</a>
                                </li>
                                <li role="presentation">
                                    <a href="#tab4" class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700" id="ostale-usluge-tab">Ostale usluge</a>
                                </li>
                                <li role="presentation">
                                    <a href="#tab5" class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700" id="korisceni-preprati-tab">Koriščeni preprati</a>
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
                                            <h4 class="font-medium">Deratizacija</h4>
                                        </div>
                                        <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                            <div class="flex sm:items-center justify-between">
                                                <div class="flex items-center space-x-2 w-full">                                                    
                                                    <div class="w-full"> 
                                                        <div class="grid md:grid-cols-12 lg:grid-cols-12">
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="countries" class="font-medium text-sm text-slate-600 dark:text-slate-400">Ocena</label>
                                                            </div>
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <select id="countries" class=" w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                                    <option>0</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Contact_Phone" class="font-medium text-sm text-slate-600 dark:text-slate-400">Komentar</label>
                                                            </div>
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <textarea id="message" rows="2" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Write a comment and press enter"></textarea>
                                                            </div>
                                                             <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Contact_Phone" class="font-medium text-sm text-slate-600 dark:text-slate-400">Fotografija</label>
                                                            </div>
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-4">
                                                                    <div class="w-full relative"> 
                                                                        <div class="w-full h-56 mx-auto mb-4">
                                                                            <input type="file" class="filepond h-56" name="filepond" accept="image/png, image/jpeg, image/gif" />                                    
                                                                        </div>
                                                                        <div id="uploads-container" class="grid grid-cols-2 gap-2">
                                                                            <input type="file" class="filepond"/>
                                                                            <input type="file" class="filepond"/>
                                                                        </div>
                                                                        <div class="btn-holder col-span-12 text-center mt-5">
                                                                            <button id="add-more-uploads" type="button" class="px-2 py-1 lg:px-4 bg-primary text-white text-sm  rounded-full transition hover:bg-primary-600 border border-primary font-medium">Dodaj još fotografija</button>
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
                                            <h4 class="font-medium">Dezinfekcija</h4>
                                        </div>
                                        <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                            <div class="flex sm:items-center justify-between">
                                                <div class="flex items-center space-x-2 w-full">                                                    
                                                    <div class="w-full"> 
                                                        <div class="grid md:grid-cols-12 lg:grid-cols-12">
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="countries" class="font-medium text-sm text-slate-600 dark:text-slate-400">Ocena</label>
                                                            </div>
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <select id="countries" class=" w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                                    <option>0</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Contact_Phone" class="font-medium text-sm text-slate-600 dark:text-slate-400">Komentar</label>
                                                            </div>
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <textarea id="message" rows="2" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Write a comment and press enter"></textarea>
                                                            </div>
                                                             <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Contact_Phone" class="font-medium text-sm text-slate-600 dark:text-slate-400">Fotografija</label>
                                                            </div>
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-4">
                                                                    <div class="w-full relative"> 
                                                                        <div class="w-full h-56 mx-auto mb-4">
                                                                            <input type="file" class="filepond h-56" name="filepond" accept="image/png, image/jpeg, image/gif" />                                    
                                                                        </div>
                                                                        <div id="uploads-container" class="grid grid-cols-2 gap-2">
                                                                            <input type="file" class="filepond"/>
                                                                            <input type="file" class="filepond"/>
                                                                        </div>
                                                                        <div class="btn-holder col-span-12 text-center mt-5">
                                                                            <button id="add-more-uploads" type="button" class="px-2 py-1 lg:px-4 bg-primary text-white text-sm  rounded-full transition hover:bg-primary-600 border border-primary font-medium">Dodaj još fotografija</button>
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
                                            <h4 class="font-medium">Dezinsekcija</h4>
                                        </div>
                                        <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                            <div class="flex sm:items-center justify-between">
                                                <div class="flex items-center space-x-2 w-full">                                                    
                                                    <div class="w-full"> 
                                                        <div class="grid md:grid-cols-12 lg:grid-cols-12">
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="countries" class="font-medium text-sm text-slate-600 dark:text-slate-400">Ocena</label>
                                                            </div>
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <select id="countries" class=" w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                                    <option>0</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Contact_Phone" class="font-medium text-sm text-slate-600 dark:text-slate-400">Komentar</label>
                                                            </div>
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <textarea id="message" rows="2" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Write a comment and press enter"></textarea>
                                                            </div>
                                                             <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Contact_Phone" class="font-medium text-sm text-slate-600 dark:text-slate-400">Fotografija</label>
                                                            </div>
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-4">
                                                                    <div class="w-full relative"> 
                                                                        <div class="w-full h-56 mx-auto mb-4">
                                                                            <input type="file" class="filepond h-56" name="filepond" accept="image/png, image/jpeg, image/gif" />                                    
                                                                        </div>
                                                                        <div id="uploads-container" class="grid grid-cols-2 gap-2">
                                                                            <input type="file" class="filepond"/>
                                                                            <input type="file" class="filepond"/>
                                                                        </div>
                                                                        <div class="btn-holder col-span-12 text-center mt-5">
                                                                            <button id="add-more-uploads" type="button" class="px-2 py-1 lg:px-4 bg-primary text-white text-sm  rounded-full transition hover:bg-primary-600 border border-primary font-medium">Dodaj još fotografija</button>
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
                                                        <div class="grid md:grid-cols-12 lg:grid-cols-12">
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="countries" class="font-medium text-sm text-slate-600 dark:text-slate-400">Ocena</label>
                                                            </div>
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <select id="countries" class=" w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                                    <option>0</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Contact_Phone" class="font-medium text-sm text-slate-600 dark:text-slate-400">Komentar</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <textarea id="message" rows="2" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Write a comment and press enter"></textarea>
                                                            </div><!--end col-->
                                                             <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Contact_Phone" class="font-medium text-sm text-slate-600 dark:text-slate-400">Fotografija</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-4">
                                                                    <div class="w-full relative"> 
                                                                        <div class="w-full h-56 mx-auto mb-4">
                                                                            <input type="file" class="filepond h-56" name="filepond" accept="image/png, image/jpeg, image/gif" />                                    
                                                                        </div>
                                                                        <div id="uploads-container" class="grid grid-cols-2 gap-2">
                                                                            <input type="file" class="filepond"/>
                                                                            <input type="file" class="filepond"/>
                                                                        </div>
                                                                        <div class="btn-holder col-span-12 text-center mt-5">
                                                                            <button id="add-more-uploads" type="button" class="px-2 py-1 lg:px-4 bg-primary text-white text-sm  rounded-full transition hover:bg-primary-600 border border-primary font-medium">Dodaj još fotografija</button>
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
                                            <h4 class="font-medium">Korišćeni preparati</h4>
                                        </div>
                                        <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                            <div class="flex sm:items-center justify-between">
                                                <div class="flex items-center space-x-2 w-full">                                                    
                                                    <div class="w-full"> 
                                                        <div class="grid md:grid-cols-12 lg:grid-cols-12">
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="countries" class="font-medium text-sm text-slate-600 dark:text-slate-400">Preparati</label>
                                                            </div>
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <select id="multiSelect" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                                    <option>Prepartat 1</option>
                                                                    <option>Prepartat 2</option>
                                                                    <option>Prepartat 3</option>
                                                                    <option>Prepartat 4</option>
                                                                    <option>Prepartat 5</option>
                                                                    <option>Prepartat 6</option>
                                                                    <option>Prepartat 7</option>
                                                                    <option>Prepartat 8</option>
                                                                    <option>Prepartat 9</option>
                                                                    <option>Prepartat 10</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Contact_Phone" class="font-medium text-sm text-slate-600 dark:text-slate-400">Komentar</label>
                                                            </div>
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <textarea id="message" rows="2" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Write a comment and press enter"></textarea>
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
                            <h4 class="font-medium">Opšte informacije</h4>
                            <form action="javascript:;" class="flex-auto p-0 md:p-4">                              
                                <div class="mb-2">
                                    <label for="contact_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Deratizacione kutije</label>
                                    <input type="text" id="contact_name" name="contact_name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Kontakt osoba" required>
                                </div>
                                <div class="mb-2">
                                    <label for="contact_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Zamke sa lepkom</label>
                                    <input type="text" id="contact_name" name="contact_name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Kontakt osoba" required>
                                </div>
                                <div class="mb-2">
                                    <label for="contact_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Insekt lampe</label>
                                    <input type="text" id="contact_name" name="contact_name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Kontakt osoba" required>
                                </div>
                                <div class="mb-2">
                                    <label for="contact_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Feromonske klopke</label>
                                    <input type="text" id="contact_name" name="contact_name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Kontakt osoba" required>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative mb-4">
                        <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                            <h4 class="font-medium">Akcije</h4>
                            <div class="flex-auto p-0 md:p-4">                            			
                                <div class="mb-2">
                                    <button class="px-2 py-2 lg:px-4 bg-brand text-white text-sm rounded hover:bg-brand-600 border border-brand-500">Odobri izveštaj</button>
                                    <button class="px-2 py-2 lg:px-4 bg-transparent  text-brand text-sm rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium">Snimi PDF</button>
                                    <button type="submit" class="px-2 py-2 lg:px-4 bg-transparent  text-brand text-sm rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium">Pošalji</button>
                                </div>
                                <div>
                                    <button class="px-2 py-2 w-full lg:px-4 bg-brand text-white text-sm rounded hover:bg-brand-600 border border-brand-500">Snimi izmene</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- footer -->
        <?php include('templates/footer.php'); ?>
        </div>
    </div>
</div>

<!-- <div class="menu-overlay"></div> -->

<script src="assets/libs/lucide/umd/lucide.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>
<script>
flatpickr(".flatpickr", {
	dateFormat: "d.m.Y.",
});
</script>
<script src="assets/libs/@frostui/tailwindcss/frostui.js"></script>

<script src="assets/libs/filepond/filepond.min.js"></script>
<script src="assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
<script src="assets/libs/vanillajs-datepicker/js/datepicker-full.min.js"></script>
<script src="assets/libs/mobius1-selectr/selectr.min.js"></script>
<script src="assets/js/pages/form-advanced.init.js"></script>
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
    var inputField = document.createElement("input");
    inputField.setAttribute("type", "file");
    inputField.classList.add("filepond");
    container.appendChild(inputField);

    // Inicijalizacija FilePond-a
    FilePond.parse(document.body);
});
</script>
</body>
</html>