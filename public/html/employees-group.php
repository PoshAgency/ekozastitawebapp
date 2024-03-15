<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php include('templates/head.php'); ?>

<link rel="stylesheet" href="assets/css/custom.css" />
</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="employees-group-page bg-[#EEF0FC] dark:bg-gray-900">

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
								<h1 class="font-medium text-3xl block dark:text-slate-100">Operativci</h1>
								<ol class="list-reset flex text-sm">
									<li>
										<a href="#" class="text-gray-500 dark:text-slate-400">Ekozaštita</a>
									</li>
									<li>
										<span class="text-gray-500 dark:text-slate-400 mx-2">/</span>
									</li>
									<li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Operativci</li>
								</ol>
							</div>
							<!-- <div class="flex items-center">
								<div class="today-date leading-5 mt-2 lg:mt-0 form-input w-auto rounded-md border inline-block border-primary-500/60 dark:border-primary-500/60 text-primary-500 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-primary-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700">
									<input type="text" class="dash_date border-0 focus:border-0 focus:outline-none" readonly required="" />
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-content-container xl:w-full min-h-[calc(100vh-152px)] relative pb-14">
			<div class="main-content-wrapper grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
				<div class="main-content-item sm:col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
					<div class="w-full relative mb-4">  
						<div class="flex-auto p-0 md:p-4">
							<div class="flex flex-wrap gap-4 mb-3">
								<div class="ms-auto">
									<form>
										<div class="relative">
											<div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
												<i data-lucide="search" class="z-[1] w-5 h-5 stroke-slate-400"></i>
											</div>
											<input type="search" id="productSearch" class="form-input w-52 rounded-md mt-1 border border-slate-600 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none placeholder:text-slate-400 placeholder:font-normal placeholder:text-sm placeholder:text-gray-500 dark:focus:border-primary-500 dark:hover:border-slate-700 pl-10 p-2.5 text-gray-500" placeholder="Pretraži">
										</div>
									</form>
								</div>
								<div>
									<a href="employees-full-edit.php" class="inline-block focus:outline-none bg-brand-500 mt-1 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded">
										Dodaj Operatera
									</a>
								</div>
							</div>
							
							<div id="myTabContent">
								<div class="active  p-4 bg-gray-50 rounded-lg dark:bg-gray-800/40" id="all" role="tabpanel" aria-labelledby="all-tab">
									<div class="grid grid-cols-1 p-0 md:p-4">
										<div class="sm:-mx-6 lg:-mx-8">
											<div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
												<table class="w-full">
													<thead class="bg-gray-50 dark:bg-gray-700/20">
														<tr>
															<th scope="col" class="p-3">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i title="Izaberi sve" class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Ime i prezime
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Telefon
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Email
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Grad
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
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<a href="employees-full-edit.php" class="flex items-center">
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Dragan Dragutinović</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																+1 123 456789
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="mailto:exemple@gmail.com">exemple@gmail.com</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">Beograd</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
																<a class="mr-3" href="employees-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
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
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<a href="employees-full-edit.php" class="flex items-center">
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Dragan Dragutinović</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																+1 123 456789
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="mailto:exemple@gmail.com">exemple@gmail.com</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">Beograd</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
																<a class="mr-3" href="employees-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
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
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<a href="employees-full-edit.php" class="flex items-center">
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Luna Winston</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																+1 123 456789
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="mailto:exemple@gmail.com">exemple@gmail.com</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">Beograd</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
																<a class="mr-3" href="employees-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
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
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<a href="employees-full-edit.php" class="flex items-center">
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Alejandro Ruiz</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																+1 123 456789
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="mailto:exemple@gmail.com">exemple@gmail.com</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">Beograd</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
																<a class="mr-3" href="employees-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
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
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<a href="employees-full-edit.php" class="flex items-center">
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Jesus Oates</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																+1 123 456789
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="mailto:exemple@gmail.com">exemple@gmail.com</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">Beograd</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
																<a class="mr-3" href="employees-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
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
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<a href="employees-full-edit.php" class="flex items-center">
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Glenn Rogers</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																+1 123 456789
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="mailto:exemple@gmail.com">exemple@gmail.com</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">Beograd</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
																<a class="mr-3" href="employees-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
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
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<a href="employees-full-edit.php" class="flex items-center">
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">April Boyce</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																+1 123 456789
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="mailto:exemple@gmail.com">exemple@gmail.com</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">Beograd</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
																<a class="mr-3" href="employees-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
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
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<a href="employees-full-edit.php" class="flex items-center">
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Maria Johnson</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																+1 123 456789
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="mailto:exemple@gmail.com">exemple@gmail.com</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">Beograd</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
																<a class="mr-3" href="employees-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
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
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<a href="employees-full-edit.php" class="flex items-center">
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Anna Ruiz</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																+1 123 456789
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="mailto:exemple@gmail.com">exemple@gmail.com</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">Beograd</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
																<a class="mr-3" href="employees-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
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
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<a href="employees-full-edit.php" class="flex items-center">
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Lisa Henriquez</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																+1 123 456789
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="mailto:exemple@gmail.com">exemple@gmail.com</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">Beograd</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
																<a class="mr-3" href="employees-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a class="mr-3" href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="flex justify-between mt-4">
										<div class="self-center">
											<p class="dark:text-slate-400">Strana 1 - 20 of 1,524</p>
										</div>
										<div class="self-center">
											<ul class="inline-flex items-center -space-x-px">
												<li>
													<a href="javascript:;" class=" py-2 px-3 ms-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
														<i class="icofont-simple-left"></i>
													</a>
												</li>
												<li>
													<a href="javascript:;" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
												</li>
												<li>
													<a href="javascript:;" aria-current="page" class="z-10 py-2 px-3 leading-tight text-brand-600 bg-brand-50 border border-brand-300 hover:bg-brand-100 hover:text-brand-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">2</a>
												</li>
												<li>
													<a href="javascript:;" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
												</li>
												<li>
													<a href="javascript:;" class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
														<i class="icofont-simple-right"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
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

<!-- <div class="menu-overlay"></div> -->

<script src="assets/libs/lucide/umd/lucide.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="assets/libs/@frostui/tailwindcss/frostui.js"></script>

<script src="assets/js/app.js"></script>
</body>
</html>