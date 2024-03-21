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
<link rel="stylesheet" href="assets/libs/vanillajs-datepicker/css/datepicker.min.css">
<link rel="stylesheet" href="assets/css/custom.css" />
</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="report-full-edit-page bg-green-50 dark:bg-gray-900">

<!-- leftbar-tab-menu -->
<?php echo view('templates/left-bar'); ?>		
<!-- header -->
<?php echo view('templates/header'); ?>		

<div class="page-container ltr:flex flex-1 rtl:flex-row-reverse">
	<div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">		
        <div class="breadcrumbs-container xl:w-full">
			<div class="flex flex-wrap">
				<div class="flex items-center py-4 px-4 w-full">
					<div class="w-full p-4 bg-white rounded-md shadow-md">
						<div class="flex flex-wrap justify-between items-center">
							<div class="items-center">
								<h1 class="font-medium text-3xl block dark:text-slate-100">Izveštaji</h1>
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
                                <h5 class="text-lg font-medium text-slate-700 dark:text-slate-300 mb-3">Izveštaj 1450 <i class="fas fa-minus text-primary-500"></i></h5>
                                <div class="flex-auto p-0 md:p-4">
                                    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-3">
                                        <div class="col-span-12 sm:col-span-12 md:col-span-5">
                                            <span class="text-gray-500 dark:text-slate-300">Klijent:</span>
                                        </div>
                                        <div class="col-span-12 sm:col-span-12 md:col-span-7">
                                            <span class="dark:text-slate-400">Delhaize Serbia d.o.o.</span>
                                        </div>
                                        <div class="col-span-12 sm:col-span-12 md:col-span-5">
                                            <span class="text-gray-500 dark:text-slate-300">Adresa:</span>
                                        </div>
                                        <div class="col-span-12 sm:col-span-12 md:col-span-7">
                                            <span class="dark:text-slate-400">Jurija Gagarina 14</span>
                                        </div>
                                        <div class="col-span-12 sm:col-span-12 md:col-span-5">
                                            <span class="text-gray-500 dark:text-slate-300">Grad:</span>
                                        </div>
                                        <div class="col-span-12 sm:col-span-12 md:col-span-7">
                                            <span class="dark:text-slate-400">Beograd</span>
                                        </div>
                                        <div class="col-span-12 sm:col-span-12 md:col-span-5">
                                            <span class="text-gray-500 dark:text-slate-300">Datum:</span>
                                        </div>
                                        <div class="col-span-12 sm:col-span-12 md:col-span-7">
                                            <span class="dark:text-slate-400">13.03.2024.</span>
                                        </div>                                       
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
                                        <a href="/reports/edit#tab1" class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700 active" id="deratizacija-tab">Deratizacija</a>
                                    </li>
                                    <li class="mr-2" role="presentation">
                                        <a href="/reports/edit#tab2" class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700" id="dezinfekcija-tab">Dezinfekcija</a>
                                    </li>
                                    <li class="mr-2" role="presentation">
                                        <a href="/reports/edit#tab3" class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700" id="dezinsekcija-tab">Dezinsekcija</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="/reports/edit#tab4" class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700" id="ostale-usluge-tab">Ostale usluge</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="/reports/edit#tab5" class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700" id="korisceni-preprati-tab">Koriščeni preprati</a>
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
                                                        <table class="w-full">
                                                            <thead class="bg-gray-50 dark:bg-gray-700/20">
                                                                <tr>
                                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Naziv objekta
                                                                    </th>
                                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Komentar
                                                                    </th>
                                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Datum
                                                                    </th>
                                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Potvrda
                                                                    </th>
                                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Ocena
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <!-- 1 -->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td> 
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td> 
                                                                </tr>
                                                                <!-- 2 -->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!-- 3 -->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!-- 4 -->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!--5-->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!--6-->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!--7-->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!--8-->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!--9-->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!--10-->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
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
                                                        <table class="w-full">
                                                            <thead class="bg-gray-50 dark:bg-gray-700/20">
                                                                <tr>
                                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Naziv objekta
                                                                    </th>
                                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Komentar
                                                                    </th>
                                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Datum
                                                                    </th>
                                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Potvrda
                                                                    </th>
                                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Ocena
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <!-- 1 -->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td> 
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td> 
                                                                </tr>
                                                                <!-- 2 -->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!-- 3 -->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!-- 4 -->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!--5-->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!--6-->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!--7-->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!--8-->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!--9-->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!--10-->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
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
                                                        <table class="w-full">
                                                            <thead class="bg-gray-50 dark:bg-gray-700/20">
                                                                <tr>
                                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Naziv objekta
                                                                    </th>
                                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Komentar
                                                                    </th>
                                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Datum
                                                                    </th>
                                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Potvrda
                                                                    </th>
                                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Ocena
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <!-- 1 -->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td> 
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td> 
                                                                </tr>
                                                                <!-- 2 -->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!-- 3 -->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!-- 4 -->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!--5-->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!--6-->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!--7-->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!--8-->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!--9-->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!--10-->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
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
                                                        <table class="w-full">
                                                            <thead class="bg-gray-50 dark:bg-gray-700/20">
                                                                <tr>
                                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Naziv objekta
                                                                    </th>
                                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Komentar
                                                                    </th>
                                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Datum
                                                                    </th>
                                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Potvrda
                                                                    </th>
                                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Ocena
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <!-- 1 -->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td> 
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td> 
                                                                </tr>
                                                                <!-- 2 -->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!-- 3 -->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!-- 4 -->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!--5-->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!--6-->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!--7-->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!--8-->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!--9-->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                                <!--10-->
                                                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="objects" class="flex items-center">
                                                                            <div class="self-center">                                                                        
                                                                                <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 708 Makarska</h5>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        neki komentar
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        07.06.2023.
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        479
                                                                    </td>
                                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        4
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>                                  
                                            </div>
                                        </div> 
                                        <div id="tab5" class="bg-white dark:bg-slate-800 shadow rounded-md w-full relative mb-4" anchor="">
                                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                <h4 class="font-medium">Korišćeni preparati</h4>
                                            </div>
                                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative mb-4">
                                                    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12">
                                                        <div class="sm:col-span-12  md:col-span-12 lg:col-span-4 xl:col-span-4 self-center">
                                                            <img src="assets/images/products/logos/lam.png" alt="" class="inline-block ">
                                                        </div>
                                                        <div class="sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-8">
                                                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                                <h4 class="font-medium text-green">Preparat 1</h4>
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
                                                                <h4 class="font-medium text-green">Preparat 2</h4>
                                                            </div>
                                                            <div class="flex-auto p-4">
                                                                <a href="javascript:;" class="block mb-3 font-semibold underline hover:text-green-800 dark:hover:text-green-900">Dokument 4</a>
                                                                <a href="javascript:;" class="block mb-3 font-semibold underline hover:text-green-800 dark:hover:text-green-900">Dokument 5</a>
                                                                <a href="javascript:;" class="block mb-3 font-semibold underline hover:text-green-800 dark:hover:text-green-900">Dokument 6</a>
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
                                                                <h4 class="font-medium text-green">Preparat 3</h4>
                                                            </div>
                                                            <div class="flex-auto p-4">
                                                                <a href="javascript:;" class="block mb-3 font-semibold underline hover:text-green-800 dark:hover:text-green-900">Dokument 7</a>
                                                                <a href="javascript:;" class="block mb-3 font-semibold underline hover:text-green-800 dark:hover:text-green-900">Dokument 8</a>
                                                                <a href="javascript:;" class="block mb-3 font-semibold underline hover:text-green-800 dark:hover:text-green-900">Dokument 9</a>
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
                                                                    <p class="px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, ratione! Rem iste ad sed, odio similique aliquam ab ullam dolorem aliquid. Voluptatum ducimus eveniet iste, a quos sed! Non, nulla.</p>
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
                                <div class="flex-auto p-0 md:p-4">                              
                                    <p class="mb-3">Za selektovani period od 10.10.2023. do 21.03.2024. izvršeno je:</p>
                                    <div class="col-span-12 sm:col-span-12 md:col-span-5">
                                        <span class="text-gray-500 dark:text-slate-300">Redovni Odlazak:</span>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12 md:col-span-7">
                                        <span class="dark:text-slate-400">49</span>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12 md:col-span-5">
                                        <span class="text-gray-500 dark:text-slate-300">Ukupno kritičnih objekata je bilo:</span>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12 md:col-span-7">
                                        <span class="dark:text-slate-400">10</span>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12 md:col-span-5">
                                        <span class="text-gray-500 dark:text-slate-300">Po parametru deratizacija:</span>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12 md:col-span-7">
                                        <span class="dark:text-slate-400">5</span>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12 md:col-span-5">
                                        <span class="text-gray-500 dark:text-slate-300">Po parametru dezinsekcija:</span>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12 md:col-span-7">
                                        <span class="dark:text-slate-400">1</span>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12 md:col-span-5">
                                        <span class="text-gray-500 dark:text-slate-300">Po parametru higijena:</span>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12 md:col-span-7">
                                        <span class="dark:text-slate-400">3</span>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12 md:col-span-5">
                                        <span class="text-gray-500 dark:text-slate-300">Po parametru tehničko stanje:</span>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12 md:col-span-7">
                                        <span class="dark:text-slate-400">7</span>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12 md:col-span-5">
                                        <span class="text-gray-500 dark:text-slate-300">Po parametru tehničko stanje:</span>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12 md:col-span-7">
                                        <span class="dark:text-slate-400">4</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative mb-4">
                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                <h4 class="font-medium">Akcije</h4>
                                <div class="flex-auto p-0 md:p-4">                            			
                                    <div class="mb-2">
                                        <button class="px-2 py-2 lg:px-4 bg-transparent  text-brand text-sm rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium">Snimi PDF</button>
                                        <button type="submit" class="px-2 py-2 lg:px-4 bg-transparent  text-brand text-sm rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium">Pošalji</button>
                                    </div>
                                    <!-- <div>
                                        <button class="px-2 py-2 w-full lg:px-4 bg-brand text-white text-sm rounded hover:bg-brand-600 border border-brand-500">Snimi izmene</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- footer -->
        <?php echo view('templates/footer'); ?>
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
<script>
var svg = '<?php echo svg(); ?>'

var tablee = $('#reports_table').DataTable({
    processing: true,
    serverSide: true,
    serverMethod: 'post',
    ajax: {
        url: "<?= base_url() ?>/reports/datatable",
    },
    rowCallback: function( row, data ) {
        $(row).addClass('ReportsModel_row').attr('data-id', data.id);
    },
    retrieve: true,
    cache: true,
    'columns': [
        {data: 'id', render: function(data,type,row){
                return '<label class="custom-label"><div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]"><input type="checkbox" class="hidden" data-remove onchange="data_remove($(this))" data-id="' + row.id + '" ><i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i></div></label>';
            }
        }, 
        {data: 'name', render: function(data,type,row){
            return '<a href="reports/show/' + row.id + '" class="flex items-center">'+
                        (row.image != '' ? '<img src="' + row.image + '" alt="" class="me-2 h-8 inline-block" style="width: 32px;height: 32px !important;object-fit: cover;">'  : svg) +
                        '<div class="self-center">'+
                            '<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">' + (row.name ?? '') + '</h5>'+
                        '</div>'+
                    '</a>';
            }
        },
        {data: 'telefon', render: function(data,type,row){
                return ((row.telefon != null && row.telefon != '') ? '<a href="tel:' + row.telefon + '">' + row.telefon + '</a>' : '');
            }
        },
        {data: 'mail', render: function(data,type,row){
                return (row.mail != null && row.mail != '') ? '<a href="mailto:' + row.mail + '"><span class="py-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">' + row.mail + '</span></a>' : '';
            }
        },
        {data: 'city'},
        {data: 'address'},
        {data: 'contract' }, // Total sum in column Notes
        {data: null, render: function(data,type,row){
                if(row.id != 0)
                    return '<div class="flex gap-5 justify-end">'+
                                '<a href="reports/edit/' + row.id + '"><i class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>'+
                                '<a href="javascript:;"><i class="icofont-ui-delete text-lg text-red-500 dark:text-red-400 delete_record" data-id="' + row.id + '" data-model="ReportsModel" data-popup="delete-popup" ></i></a>'+
                            '</div>';
                else
                    return "";
            }
        },
    ],
    language: {
        lengthMenu: '<select>' +
                '<option value="10">Per Page: 10</option>' +
                '<option value="20">Per Page: 20</option>' +
                '<option value="30">Per Page: 30</option>' +
                '<option value="40">Per Page: 40</option>' +
                '<option value="50">Per Page: 50</option>' +
                '<option value="-1">All</option>' +
                '</select>',

        search: "",
        searchPlaceholder: "Pretraži...",
        info: "_TOTAL_ Klijenata",
        infoFiltered: "",
        processing: "<div class='loading-wrap'><span class='loader'></span>&emsp;Loading ...</div>",
        infoEmpty: "0 Rezultata",
        paginate: {
            previous: " < ",
            next: " > ",
        }
    },
    columnDefs: [
        {className: 'text-left', targets: [-2]},
        {className: 'p-3 text-xs font-medium text-left text-gray-700 dark:text-gray-400 uppercase', targets: "_all" },
        {orderable: false, targets: [0,-1] } // last column (Actions) not orderable
    ],
    dom: '<"table-filters"iB<"btn-holder"<"date_range">fr>>t<"table-footer"<"bottom-footer-container"pl>>',
    buttons: [
        // {
        //     extend: 'excel',
        //     text: 'Export',
        //     attr: {
        //         class: 'flex items-center focus:outline-none bg-brand-500 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded',
        //         style: 'max-height: 32px;'
        //     },
        //     title: "<?php // echo $_ENV['company_name']; ?>",
        //     messageBottom: null,
        //     exportOptions: {
        //         columns: ':visible'
        //     }
        // },
        {
            text: 'Obriši selektovano',
            attr: {
                class: 'delete_multiple focus:outline-none bg-red-500 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded ml-5',
                style: 'max-height: 32px;display: none;line-height: 13px;',
                "data-popup": 'delete-popup',
                "data-model": 'ReportsModel',
            },
            // action: function ( e, dt, node, config ) {
            //     dt.ajax.reload();
            // }
        }
    ]
});

//   ide u buttons
//          {
//             extend: 'colvis',
//             columns: ':not(.noVis)',
//             collectionLayout: 'fixed columns',
//             collectionTitle: 'Edit Columns',
//             text: 'Edit Columns'
//         },
//         {
//             extend: 'columnsToggle',
//             columns: '.show'
//         }

// document.querySelector("button.csv").addEventListener("click", () => {
//     dataTable.export({
//         type:"csv",
//         download: true,
//         lineDelimiter: "\n\n",
//         columnDelimiter: ";"
//     })
// })
</script>
</body>
</html>