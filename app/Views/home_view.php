<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php echo view('templates/head'); ?>

</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="home-page bg-green-50 dark:bg-gray-900">

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
								<h1 class="font-medium text-3xl block dark:text-slate-100">Kontrolna tabla</h1>
								<ol class="list-reset flex text-sm">
									<li>
										<a href="<?php echo base_url(); ?>" class="text-gray-500 dark:text-slate-400">Ekozaštita</a>
									</li>
									<li>
										<span class="text-gray-500 dark:text-slate-400 mx-2">/</span>
									</li>
									<li class="text-green-500 dark:text-gray-400">Kontrolna tabla</li>
								</ol>
							</div>
							<div class="flex items-center">
								<div class="today-date leading-5 mt-2 lg:mt-0 form-input w-auto rounded-md border inline-block border-primary-500/60 dark:border-primary-500/60 text-primary-500 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-primary-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700">
									<input type="text" class="dash_date border-0 focus:border-0 focus:outline-none" readonly required="" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-content-container xl:w-full min-h-[calc(100vh-152px)] relative pb-14">
			<div class="main-content-wrapper grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
				<div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
					<div class="w-full relative mb-4">  						
							<div class="w-full relative mb-4">  
								<div class="flex-auto p-0">
									<div id="myTabContent">
										<div class="active p-4 rounded-lg" id="all" role="tabpanel" aria-labelledby="all-tab">
											<div class="grid grid-cols-1 p-0 md:p-4">
												<div class="sm:-mx-6 lg:-mx-8">
													<div class="relative overflow-x-auto block w-full sm:px-2 lg:px-4">
														<div class="bg-white rounded-md shadow-md">
															<div class="flex-auto p-0 md:p-4">
															<div class="w-full relative mb-4">
																<div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
																	<div class="flex-none md:flex">
																		<h4 class="font-medium flex-1 self-center mb-2 md:mb-0 text-xxl">Broj izveštaja</h4>
																		<div class="dropdown inline-block">
																			<button data-fc-autoclose="both" data-fc-type="dropdown" class="dropdown-toggle px-3 py-1 text-xs font-medium text-gray-500 focus:outline-none bg-white rounded border border-gray-200 hover:bg-gray-50 hover:text-slate-800 focus:z-10 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
																				Ovog meseca 
																				<i class="fas fa-chevron-down text-xs ml-2"></i>
																			</button>
																			<!-- Dropdown menu -->
																			<div class="right-auto md:right-0 hidden z-10 w-28 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
																				<ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
																					<li>
																						<a href="#" class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Danas</a>
																					</li>
																					<li>
																						<a href="#" class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Prošle nedelje</a>
																					</li>
																					<li>
																						<a href="#" class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Prošlog meseca</a>
																					</li>
																					<li>
																						<a href="#" class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Ove godine</a>  
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>   
																</div>						                      
															</div>
															<div class="py-4">
																<div class="flex-auto p-4">
																	<div id="crm-dash" class="apex-charts mt-5"></div>
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

							<div class="breadcrumbs-container xl:w-full">
								<div class="flex flex-wrap">
									<div class="flex items-center py-4 px-4 w-full">
										<div class="w-full p-4 bg-white rounded-md shadow-md">
											<div class="flex flex-wrap justify-between items-center">
												<div class="items-center">
													<h1 class="font-medium text-3xl block dark:text-slate-100">Radni nalozi za verifikaciju</h1>
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
				
							<div class="w-full relative mb-4">  
								<div class="flex-auto p-0">
									<div id="myTabContent">
										<div class="active p-4 rounded-lg" id="all" role="tabpanel" aria-labelledby="all-tab">
											<div class="grid grid-cols-1 p-0 md:p-4">
												<div class="sm:-mx-6 lg:-mx-8">
													<div class="relative overflow-x-auto block w-full sm:px-2 lg:px-4">
														<div class="bg-white rounded-md shadow-md">
															<div class="py-4">																			
																<table class="w-full border-collapse" id="clients_table">
																	<thead class="bg-gray-50 dark:bg-gray-700/20">
																		<tr>
																			<th scope="col" class="p-3">
																				<label class="custom-label">
																					<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																					<input type="checkbox" class="hidden" onchange="select_all($(this))">
																					<i title="Izaberi sve" class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																					</div>
																				</label>
																			</th>
																			<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																				Datum
																			</th>	<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																				Klijent
																			</th>
																			<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																				Grad
																			</th>
																			<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																				Objekat
																			</th>
																			<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																				Adresa
																			</th>
																			<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																				Kontakt
																			</th>
																			<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																				&nbsp;
																			</th>
																		</tr>
																	</thead>
																	<tbody>
																		<!-- 1 -->
																		<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
																			<td class="w-4 p-4">
																				<label class="custom-label">
																					<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																					<input type="checkbox" class="hidden" >
																					<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																					</div>
																				</label>
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				07.06.2023.
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Maksi
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Smederevo
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				CMK 708
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Makarska
																			</td> 
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				0641832190
																			</td> 
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
																				<a class="mr-3" href="javascript:;"><i class="icofont-ui-check text-xxl text-gray-500 dark:text-gray-400" data-fc-type="modal" data-fc-target="approvemodal"></i></a>
																				<a class="mr-3" href="javascript:;"><i class="icofont-paper-plane text-xxl text-gray-500 dark:text-gray-400"  data-fc-type="modal" data-fc-target="sendmailmodal"></i></a>
																				<a class="mr-3" href="report-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																				<a class="mr-3" href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
																			</td>
																		</tr>
																		<!-- 2 -->
																		<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
																			<td class="w-4 p-4">
																				<label class="custom-label">
																					<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																					<input type="checkbox" class="hidden" >
																					<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																					</div>
																				</label>
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				07.06.2023.
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Maksi
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Smederevo
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				CMK 708
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Makarska
																			</td> 
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				0641832190
																			</td> 
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
																				<a class="mr-3" href="javascript:;"><i class="icofont-ui-check text-xxl text-gray-500 dark:text-gray-400" data-fc-type="modal" data-fc-target="approvemodal"></i></a>
																				<a class="mr-3" href="javascript:;"><i class="icofont-paper-plane text-xxl text-gray-500 dark:text-gray-400"  data-fc-type="modal" data-fc-target="sendmailmodal"></i></a>
																				<a class="mr-3" href="report-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																				<a class="mr-3" href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
																			</td>
																		</tr>
																		<!-- 3 -->
																		<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
																			<td class="w-4 p-4">
																				<label class="custom-label">
																					<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																					<input type="checkbox" class="hidden" >
																					<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																					</div>
																				</label>
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				07.06.2023.
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Maksi
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Smederevo
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				CMK 708
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Makarska
																			</td> 
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				0641832190
																			</td> 
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
																				<a class="mr-3" href="javascript:;"><i class="icofont-ui-check text-xxl text-gray-500 dark:text-gray-400" data-fc-type="modal" data-fc-target="approvemodal"></i></a>
																				<a class="mr-3" href="javascript:;"><i class="icofont-paper-plane text-xxl text-gray-500 dark:text-gray-400"  data-fc-type="modal" data-fc-target="sendmailmodal"></i></a>
																				<a class="mr-3" href="report-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																				<a class="mr-3" href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
																			</td>
																		</tr>
																		<!-- 4 -->
																		<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
																			<td class="w-4 p-4">
																				<label class="custom-label">
																					<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																					<input type="checkbox" class="hidden" >
																					<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																					</div>
																				</label>
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				07.06.2023.
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Maksi
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Smederevo
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				CMK 708
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Makarska
																			</td> 
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				0641832190
																			</td> 
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
																				<a class="mr-3" href="javascript:;"><i class="icofont-ui-check text-xxl text-gray-500 dark:text-gray-400" data-fc-type="modal" data-fc-target="approvemodal"></i></a>
																				<a class="mr-3" href="javascript:;"><i class="icofont-paper-plane text-xxl text-gray-500 dark:text-gray-400"  data-fc-type="modal" data-fc-target="sendmailmodal"></i></a>
																				<a class="mr-3" href="report-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																				<a class="mr-3" href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
																			</td>
																		</tr>
																		<!--5-->
																		<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
																			<td class="w-4 p-4">
																				<label class="custom-label">
																					<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																					<input type="checkbox" class="hidden" >
																					<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																					</div>
																				</label>
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				07.06.2023.
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Maksi
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Smederevo
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				CMK 708
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Makarska
																			</td> 
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				0641832190
																			</td> 
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
																				<a class="mr-3" href="javascript:;"><i class="icofont-ui-check text-xxl text-gray-500 dark:text-gray-400" data-fc-type="modal" data-fc-target="approvemodal"></i></a>
																				<a class="mr-3" href="javascript:;"><i class="icofont-paper-plane text-xxl text-gray-500 dark:text-gray-400"  data-fc-type="modal" data-fc-target="sendmailmodal"></i></a>
																				<a class="mr-3" href="report-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																				<a class="mr-3" href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
																			</td>
																		</tr>
																		<!--6-->
																		<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
																			<td class="w-4 p-4">
																				<label class="custom-label">
																					<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																					<input type="checkbox" class="hidden" >
																					<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																					</div>
																				</label>
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				07.06.2023.
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Maksi
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Smederevo
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				CMK 708
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Makarska
																			</td> 
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				0641832190
																			</td> 
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
																				<a class="mr-3" href="javascript:;"><i class="icofont-ui-check text-xxl text-gray-500 dark:text-gray-400" data-fc-type="modal" data-fc-target="approvemodal"></i></a>
																				<a class="mr-3" href="javascript:;"><i class="icofont-paper-plane text-xxl text-gray-500 dark:text-gray-400"  data-fc-type="modal" data-fc-target="sendmailmodal"></i></a>
																				<a class="mr-3" href="report-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																				<a class="mr-3" href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
																			</td>
																		</tr>
																		<!--7-->
																		<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
																			<td class="w-4 p-4">
																				<label class="custom-label">
																					<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																					<input type="checkbox" class="hidden" >
																					<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																					</div>
																				</label>
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				07.06.2023.
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Maksi
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Smederevo
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				CMK 708
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Makarska
																			</td> 
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				0641832190
																			</td> 
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
																				<a class="mr-3" href="javascript:;"><i class="icofont-ui-check text-xxl text-gray-500 dark:text-gray-400" data-fc-type="modal" data-fc-target="approvemodal"></i></a>
																				<a class="mr-3" href="javascript:;"><i class="icofont-paper-plane text-xxl text-gray-500 dark:text-gray-400"  data-fc-type="modal" data-fc-target="sendmailmodal"></i></a>
																				<a class="mr-3" href="report-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																				<a class="mr-3" href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
																			</td>
																		</tr>
																		<!--8-->
																		<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
																			<td class="w-4 p-4">
																				<label class="custom-label">
																					<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																					<input type="checkbox" class="hidden" >
																					<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																					</div>
																				</label>
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				07.06.2023.
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Maksi
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Smederevo
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				CMK 708
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Makarska
																			</td> 
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				0641832190
																			</td> 
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
																				<a class="mr-3" href="javascript:;"><i class="icofont-ui-check text-xxl text-gray-500 dark:text-gray-400" data-fc-type="modal" data-fc-target="approvemodal"></i></a>
																				<a class="mr-3" href="javascript:;"><i class="icofont-paper-plane text-xxl text-gray-500 dark:text-gray-400"  data-fc-type="modal" data-fc-target="sendmailmodal"></i></a>
																				<a class="mr-3" href="report-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																				<a class="mr-3" href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
																			</td>
																		</tr>
																		<!--9-->
																		<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
																			<td class="w-4 p-4">
																				<label class="custom-label">
																					<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																					<input type="checkbox" class="hidden" >
																					<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																					</div>
																				</label>
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				07.06.2023.
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Maksi
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Smederevo
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				CMK 708
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Makarska
																			</td> 
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				0641832190
																			</td> 
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
																				<a class="mr-3" href="javascript:;"><i class="icofont-ui-check text-xxl text-gray-500 dark:text-gray-400" data-fc-type="modal" data-fc-target="approvemodal"></i></a>
																				<a class="mr-3" href="javascript:;"><i class="icofont-paper-plane text-xxl text-gray-500 dark:text-gray-400"  data-fc-type="modal" data-fc-target="sendmailmodal"></i></a>
																				<a class="mr-3" href="report-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																				<a class="mr-3" href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
																			</td>
																		</tr>
																		<!--10-->
																		<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
																			<td class="w-4 p-4">
																				<label class="custom-label">
																					<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																					<input type="checkbox" class="hidden" >
																					<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																					</div>
																				</label>
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				07.06.2023.
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Maksi
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Smederevo
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				CMK 708
																			</td>
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				Makarska
																			</td> 
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																				0641832190
																			</td> 
																			<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
																				<a class="mr-3" href="javascript:;"><i class="icofont-ui-check text-xxl text-gray-500 dark:text-gray-400" data-fc-type="modal" data-fc-target="approvemodal"></i></a>
																				<a class="mr-3" href="javascript:;"><i class="icofont-paper-plane text-xxl text-gray-500 dark:text-gray-400"  data-fc-type="modal" data-fc-target="sendmailmodal"></i></a>
																				<a class="mr-3" href="report-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																				<a class="mr-3" href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
																			</td>
																		</tr>
																	</tbody>
																</table>
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

<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/analytics-index.init.js"></script>
<script src="assets/js/app.js"></script>
<?php if (session()->getFlashdata('msg') !== NULL){ ?>
<script>
    app_msg('<?php echo session()->getFlashdata('msg'); ?>');
</script>
<?php } ?>
</body>
</html>