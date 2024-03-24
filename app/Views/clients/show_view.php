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
</style>
<!-- export datatable -->
<link href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/datetime/1.1.1/css/dataTables.dateTime.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/colreorder/1.5.4/css/colReorder.dataTables.min.css" rel="stylesheet">
<!-- fixedcolumns datatable -->
<link href="https://cdn.datatables.net/fixedcolumns/3.3.3/css/fixedColumns.dataTables.min.css" rel="stylesheet">

</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="client-full-page bg-green-50 dark:bg-gray-900">

<!-- leftbar-tab-menu -->
<?php echo view('templates/left-bar'); ?>		
<!-- header -->
<?php echo view('templates/header'); ?>		

<div class="page-container ltr:flex flex-1 rtl:flex-row-reverse">
	<div class="page-wrapper relative ltr:ms-auto rtl:me-auto rtl:ms-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
		<div class="xl:w-full mb-5">        
			<div class="flex flex-wrap">
				<div class="flex items-center w-full">
					<div class="w-full">                    
						<div class="px-4">
							<div class="flex flex-wrap justify-between mt-4 p-4 bg-white rounded-md shadow-md dark:bg-gray-700/20">
								<div class="items-center ">
									<!-- <h1 class="font-medium text-3xl block dark:text-slate-100">Klijenti</h1>
									<ol class="list-reset flex text-sm">
										<li><a href="<?php echo base_url(); ?>" class="text-green-500 dark:text-green-400">Ekozaštita</a></li>
										<li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
										<li><a href="clients" class="text-green-500 hover:text-green-900 dark:text-green-400">Klijenti</a></li>
										<li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
										<li class="text-gray-500 dark:text-slate-400">Detalji</li>
									</ol> -->
                                    <div class="flex gap-3 items-center">
                                        <?php if(isset($current['image']) AND $current['image'] != ''){ ?>
                                            <img src="<?php echo (isset($current['image']) AND $current['image'] != '') ? $current['image'] : ''; ?>" alt="Logo" class="mx-auto inline-block" width="60" height="60">
                                        <?php }else{ ?>
                                            <?php echo svg(); ?>
                                        <?php } ?>
                                        <div class="my-4">                                                                        
                                            <h5 class="text-xxl font-semibold text-slate-700 dark:text-gray-400"><?php echo (isset($current['name']) AND $current['name'] != '') ? $current['name'] : ''; ?></h5>
                                            <!-- <span class="block font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

        <div class="xl:w-full min-h-[calc(100vh-138px)] relative pb-14 pl-4"> 
			<div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
				<div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-4 xl:col-span-3">
					<div class=" mt-4 p-4 bg-white rounded-md shadow-md bg-green-100\/10 dark:bg-gray-700/20">
						<div class="text-left">
							<div class="my-4">                                                                        
								<h5 class="text-xxl font-semibold text-slate-700 dark:text-gray-400">Osnovne informacije</h5>
							</div>
						</div>
						<div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-3">
							<div class="col-span-12 sm:col-span-12 md:col-span-5">
								<span class="text-gray-500 dark:text-slate-300">Država:</span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-7">
								<span class="dark:text-slate-400"><?php echo (isset($current['state']) AND $current['state'] != '') ? $current['state'] : ''; ?></span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-5">
								<span class="text-gray-500 dark:text-slate-300">Region:</span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-7">
								<span class="dark:text-slate-400"><?php echo (isset($current['region']) AND $current['region'] != '') ? $current['region'] : ''; ?></span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-5">
								<span class="text-gray-500 dark:text-slate-300">Grad:</span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-7">
								<span class="dark:text-slate-400"><?php echo (isset($current['city']) AND $current['city'] != '') ? $current['city'] : ''; ?></span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-5">
								<span class="text-gray-500 dark:text-slate-300">Adresa:</span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-7">
								<span class="dark:text-slate-400"><?php echo (isset($current['address']) AND $current['address'] != '') ? $current['address'] : ''; ?></span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-5">
								<span class="text-gray-500 dark:text-slate-300">Poštanski broj:</span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-7">
								<span class="dark:text-slate-400"><?php echo (isset($current['zip']) AND $current['zip'] != '') ? $current['zip'] : ''; ?></span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-5">
								<span class="text-gray-500 dark:text-slate-300">PIB:</span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-7">
								<span class="dark:text-slate-400"><?php echo (isset($current['pib']) AND $current['pib'] != '') ? $current['pib'] : ''; ?></span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-5">
								<span class="text-gray-500 dark:text-slate-300">Matični broj:</span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-7">
								<span class="dark:text-slate-400"><?php echo (isset($current['id_number']) AND $current['id_number'] != '') ? $current['id_number'] : ''; ?></span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-5">
								<span class="text-gray-500 dark:text-slate-300">Email:</span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-7">
								<span class="dark:text-slate-400"><?php echo (isset($current['mail']) AND $current['mail'] != '') ? $current['mail'] : ''; ?></span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-5">
								<span class="text-gray-500 dark:text-slate-300">Web:</span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-7">
								<span class="dark:text-slate-400"><?php echo (isset($current['web']) AND $current['web'] != '') ? '<a href="' . $current['web'] . '">' . $current['web'] . '</a>' : '/'; ?></span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-5">
								<span class="text-gray-500 dark:text-slate-300">Telefon:</span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-7">
								<span class="dark:text-slate-400"><?php echo (isset($current['fax']) AND $current['fax'] != '') ? '<a href="tel:' . $current['fax'] . '">' . $current['fax'] . '</a>' : '/'; ?></span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-5">
								<span class="text-gray-500 dark:text-slate-300">Telefon 2:</span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-7">
								<span class="dark:text-slate-400"><?php echo (isset($current['telefon']) AND $current['telefon'] != '') ? '<a href="tel:' . $current['telefon'] . '">' . $current['telefon'] . '</a>' : '/'; ?></span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-5">
								<span class="text-gray-500 dark:text-slate-300">Kontakt osoba:</span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-7">
								<span class="dark:text-slate-400"><?php echo (isset($current['contract']) AND $current['contract'] != '') ? $current['contract'] : ''; ?></span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-5">
								<span class="text-gray-500 dark:text-slate-300">Napomena:</span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-7">
								<span class="dark:text-slate-400"><?php echo (isset($current['napomena']) AND $current['napomena'] != '') ? $current['napomena'] : '/'; ?></span>
							</div>
						</div>
						<div class="border-b border-dashed dark:border-slate-700/40 my-3 group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:border-slate-700/40"></div>
						<div class="col-span-12 sm:col-span-12 md:col-span-12 text-center mb-5">
							<a href="clients/edit/<?php echo (isset($current['id']) AND $current['id'] != '') ? $current['id'] : ''; ?>" class="px-2 py-1 bg-primary-500/10 border border-transparent collapse:bg-green-100 text-primary text-sm rounded hover:bg-blue-600 hover:text-white">
								<i class="ti ti-plus me-1"></i>
								Izmeni
							</a>
						</div>
                        <?php if((isset($current['facebook']) AND $current['facebook'] != '') OR (isset($current['instagram']) AND $current['instagram'] != '')  OR (isset($current['twitter']) AND $current['twitter'] != '')){ ?>
						<div class="mt-4 text-center">
                            <?php if(isset($current['facebook']) AND $current['facebook'] != ''){ ?>
							<a href="<?php echo $current['facebook']; ?>" target="_blank" class="border-2 border-slate-200/50 dark:border-slate-600/60 inline-flex rounded-full cursor-pointer">
								<img src="assets/images/logos/facebook.png" alt="" class="rounded-full h-9 w-9">                                    
							</a>
                            <?php } ?>
                            <?php if(isset($current['instagram']) AND $current['instagram'] != ''){ ?>
							<a href="<?php echo$current['instagram']; ?>" target="_blank" class="border-2 border-slate-200/50 dark:border-slate-600/60 inline-flex rounded-full cursor-pointer">
								<img src="assets/images/logos/insta.png" alt="" class="rounded-full h-9 w-9">                                    
							</a>
                            <?php } ?>
                            <?php if(isset($current['twitter']) AND $current['twitter'] != ''){ ?>
							<a href="<?php echo $current['twitter']; ?>" target="_blank" class="border-2 border-slate-200/50 dark:border-slate-600/60 inline-flex rounded-full cursor-pointer">
								<img src="assets/images/logos/twitter.png" alt="" class="rounded-full h-9 w-9">                                    
							</a>
                            <?php } ?>
						</div>
                        <?php } ?>
					</div>
				</div>
				<div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-8 xl:col-span-9">
					<div class="grid  grid-cols-1 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4 p-4">
						<div class="bg-primary-500/5 dark:bg-primary-500/10 border border-dashed border-primary-500  rounded-md w-full relative ">                                
							<div class="flex-auto p-4 text-center">                                       
								<span class="inline-flex  justify-center items-center h-14 w-14 rounded-full bg-white dark:bg-gray-900 border border-dashed border-primary-500">
									<i data-lucide="map" class="stroke-primary-500 text-3xl"></i>
								</span>
								<h4 class="my-1 font-semibold text-3xl dark:text-slate-200 objects_count"><?php echo $count_objects; ?></h4>
								<h6 class="text-gray-800 dark:text-gray-400 mb-0 text-lg font-medium uppercase">Ukupan broj objekata</h6>
								<p class="truncate text-gray-700 dark:text-slate-500 text-sm font-normal">
									<span class="text-green-500">
										<i class="mdi mdi-checkbox-marked-circle-outline me-1"></i>
									</span>
									<a href="objects/edit" class="px-2 py-1 lg:px-4 bg-primary text-white text-sm rounded-full transition hover:bg-primary-600 border border-primary font-medium mb-2 inline-block">Dodaj objekat</a>
								</p>
							</div>
						</div>
						<div class="bg-orange-500/5 dark:bg-pink-500/10 border border-dashed border-orange-500  rounded-md w-full relative ">                                
							<div class="flex-auto p-4 text-center">
								
								<span class="inline-flex  justify-center items-center h-14 w-14 rounded-full bg-white dark:bg-gray-900 border border-dashed border-orange-500">
									<i data-lucide="book" class="stroke-orange-500 text-3xl"></i>
								</span>
								<h4 class="my-1 font-semibold text-3xl dark:text-slate-200 reports_count"><?php echo $count_reports; ?></h4>
								<h6 class="text-gray-800 dark:text-gray-400 text-lg mb-0 font-medium uppercase">Ukupan broj izveštaja</h6>
								<!-- <p class="truncate text-gray-700 dark:text-slate-500 text-sm font-normal">
									<a href="workorders/edit" class="px-2 py-1 lg:px-4 bg-primary text-white text-sm rounded-full transition hover:bg-primary-600 border border-primary font-medium mb-2 inline-block">Dodaj radni nalog</a>
								</p> -->
							</div>
						</div>
						<div class="bg-purple-500/5 dark:bg-cyan-500/5 border border-dashed border-purple-500  rounded-md w-full relative ">                                
							<div class="flex-auto p-4 text-center">
								
								<span class="inline-flex  justify-center items-center h-14 w-14 rounded-full bg-white dark:bg-gray-900 border border-dashed border-purple-600">
									<i data-lucide="users" class="stroke-purple-500 text-3xl"></i>
								</span>
								<h4 class="my-1 font-semibold text-3xl dark:text-slate-200 users_count"><?php echo $count_users; ?></h4>
								<h6 class="text-gray-800 dark:text-gray-400 mb-0 text-lg font-medium uppercase">Broj korisnika</h6>
								<p class="truncate text-gray-700 dark:text-slate-500 text-sm font-normal">
									<a href="javascript:;" data-popup="users-popup" data-popup-title="Nov korisnik" onclick="$('#user_ref_id').val(<?php echo (isset($current['id']) AND $current['id'] != '') ? $current['id'] : ''; ?>);" class="px-2 py-1 lg:px-4 bg-primary text-white text-sm rounded-full transition hover:bg-primary-600 border border-primary font-medium mb-2 inline-block">Dodaj korisnika</a>
								</p>
							</div>
						</div>
					</div>
					<div class="w-full relative mb-4">  
						<div class="flex-auto p-0 md:p-4">
							<div class="mb-4 mt-4 p-0 bg-white dark:bg-gray-700/20 rounded-md shadow-md border-b border-gray-200 dark:border-slate-700" data-fc-type="tab">
								<ul class="flex flex-wrap -mb-px text-sm font-medium text-center" aria-label="Tabs">
									<li class="me-2" role="presentation">
										<button class="inline-block p-4 rounded-t-lg border-b-2 active " id="orders-tab" data-fc-target="#orders" type="button" role="tab" aria-controls="orders" aria-selected="false">Objekti <span class="text-gray-500 dark:text-slate-400 objects_count">(<?php echo $count_objects; ?>)</span></button>
									</li>
									<li class="me-2" role="presentation">
										<button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="wishlist-tab" data-fc-target="#wishlist" type="button" role="tab" aria-controls="wishlist" aria-selected="false">Izveštaji <span class="text-gray-500 dark:text-slate-400 reports_count">(<?php echo $count_reports; ?>)</span></button>
									</li>
									<li class="me-2" role="presentation">
										<button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="ratings-tab" data-fc-target="#ratings" type="button" role="tab" aria-controls="ratings" aria-selected="false">Korisnici <span class="text-gray-500 dark:text-slate-400 users_count_brackets">(<?php echo $count_users; ?>)</span></button>
									</li>
								</ul>
							</div>
							
							<div id="myTabContent">
								<div class="active  p-4 bg-white rounded-lg shadow-md dark:bg-gray-700/20" id="orders" role="tabpanel" aria-labelledby="orders-tab">
									<div class="grid grid-cols-1 p-0 md:p-4">
										<div class="sm:-mx-6 lg:-mx-8">
											<div class="relative overflow-x-auto block w-full px-0">
												<table class="w-full" id="client_objects">
													<thead class="bg-gray-50 dark:bg-gray-700/20">
                                                    <tr>
															<th scope="col" class="p-3" width="1%">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" onchange="select_all($(this))">
																	<i title="Izaberi sve" class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Naziv objekta
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Grad
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Adresa
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Telefon
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Poslednji izveštaj
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Izveštaj
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																&nbsp;
															</th>
														</tr>
													</thead>
													<tbody></tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="hidden p-4 bg-white rounded-lg shadow-md dark:bg-gray-800" id="wishlist" role="tabpanel" aria-labelledby="wishlist-tab">
									<div class="grid grid-cols-1 p-0 md:p-4">
										<div class="sm:-mx-6 lg:-mx-8">
											<div class="relative overflow-x-auto block w-full sm:px-0">
												<table class="w-full" id="client_reports">
													<thead class="bg-gray-50 dark:bg-gray-700/20">
														<tr>
															<th scope="col" class="p-3" width="1%">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" onchange="select_all($(this))">
																	<i title="Izaberi sve" class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Klijent
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Objekat
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Broj izveštaja
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Datum unosa
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Akcija
															</th>
														</tr>
													</thead>
													<tbody></tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="hidden p-4 bg-white rounded-lg shadow-md dark:bg-gray-800" id="ratings" role="tabpanel" aria-labelledby="ratings-tab">
									<div class="grid grid-cols-1 p-0 md:p-4">
										<div class="sm:-mx-6 lg:-mx-8">
											<div class="relative overflow-x-auto block w-full sm:px-0">
												<table class="w-full" id="client_users">
													<thead class="bg-gray-50 dark:bg-gray-700/20">
														<tr>
															<th scope="col" class="p-3" width="1%">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" onchange="select_all($(this))">
																	<i title="Izaberi sve" class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Ime
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Prezime
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Email
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Username
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Akcija
															</th>
														</tr>
													</thead>
													<tbody></tbody>
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
			<!-- footer -->
			<?php echo view('templates/footer'); ?>	
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

<!-- datatable -->
<script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
<!-- export datatable -->
<script src="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
<!-- fixedcolumns datatable -->
<script src="https://cdn.datatables.net/fixedcolumns/3.3.3/js/dataTables.fixedColumns.min.js"></script>
<script src="assets/js/app.js"></script>
<script>
var svg = '<?php echo svg(); ?>'
var table = $('#client_objects').DataTable({
    processing: true,
    serverSide: true,
    serverMethod: 'post',
    ajax: {
        url: "<?= base_url() ?>/clients/client_objects_datatable/<?php echo (isset($current['id']) AND $current['id'] != '') ? $current['id'] : 0; ?>",
    },
    rowCallback: function( row, data ) {
        $(row).addClass('ObjectsModel_row').attr('data-id', data.id);
    },
    retrieve: true,
    cache: true,
    'columns': [
        {data: 'id', render: function(data,type,row){
                return '<label class="custom-label"><div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]"><input type="checkbox" class="hidden" data-remove onchange="data_remove($(this))" data-id="' + row.id + '" ><i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i></div></label>';
            }
        }, 
        {data: 'name', render: function(data,type,row){
            return '<a href="objects/show/' + row.id + '" class="flex items-center">'+
                        '<div class="self-center">'+
                            '<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">' + (row.name ?? '') + '</h5>'+
                        '</div>'+
                    '</a>';
            }
        },
        {data: 'city'},
        {data: 'street'},
        {data: 'phone', render: function(data,type,row){
                return ((row.phone != null && row.phone != '') ? '<a href="tel:' + row.phone + '">' + row.phone + '</a>' : '');
            }
        },
        {data: 'date_done'},
        {data: 'report_num'},
        {data: null, render: function(data,type,row){
                if(row.id != 0)
                    return '<div class="flex gap-5 justify-end">'+
                                '<a href="objects/edit/' + row.id + '"><i class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>'+
                                '<a href="javascript:;" class="delete_record" data-popup="delete-popup" data-id="' + row.id + '" data-model="ObjectsModel"><i class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>'+
                            '</div>';
                else
                    return "";
            }
        },
    ],
    language: {
        lengthMenu: '<select>' +
                '<option value="10">Po strani: 10</option>' +
                '<option value="20">Po strani: 20</option>' +
                '<option value="30">Po strani: 30</option>' +
                '<option value="40">Po strani: 40</option>' +
                '<option value="50">Po strani: 50</option>' +
                '<option value="-1">All</option>' +
                '</select>',

        search: "",
        searchPlaceholder: "Pretraži...",
        info: "_TOTAL_ Objekata",
        infoFiltered: "",
        processing: "<div class='loading-wrap'><span class='loader'></span>&emsp;Loading ...</div>",
        infoEmpty: "0 Rezultata",
        paginate: {
            previous: " < ",
            next: " > ",
        }
    },
    columnDefs: [
        {width: '30px', targets: 0},
        {width: '50px', targets: -1},
        {className: 'p-3 text-xs font-medium text-left text-gray-700 dark:text-gray-400', targets: [1,2,3,4,5,6,7] },
        {className: 'text-end', targets: [0] },
        {className: 'text-center', targets: [-1] },
        {orderable: false, targets: [0,-1] } // last column (Actions) not orderable
    ],
    dom: '<"table-filters"iB<"btn-holder"<"date_range">fr>>t<"table-footer"<"bottom-footer-container"pl>>',
    buttons: [
        {
            extend: 'excel',
            text: 'Export',
            attr: {
                class: 'flex items-center focus:outline-none bg-brand-500 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded',
                style: 'max-height: 32px;'
            },
            title: "<?php echo $_ENV['company_name']; ?>",
            messageBottom: null,
            exportOptions: {
                columns: ':visible'
            }
        },
        {
            text: 'Obriši selektovano',
            attr: {
                class: 'delete_multiple focus:outline-none bg-red-500 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded ml-5',
                style: 'max-height: 32px;display: none;line-height: 13px;',
                "data-popup": 'delete-popup',
                "data-model": 'ObjectsModel',
            },
            // action: function ( e, dt, node, config ) {
            //     dt.ajax.reload();
            // }
        }
    ]
});
var table2 = $('#client_reports').DataTable({
    processing: true,
    serverSide: true,
    serverMethod: 'post',
    ajax: {
        url: "<?= base_url() ?>/clients/client_reports_datatable/<?php echo (isset($current['id']) AND $current['id'] != '') ? $current['id'] : 0; ?>",
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
        {data: 'client_name', render: function(data,type,row){
            return '<a href="clients/show/' + row.client_id + '" class="flex items-center">'+
                        '<div class="self-center">'+
                            '<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">' + (row.client_name ?? '') + '</h5>'+
                        '</div>'+
                    '</a>';
            }
        },
        {data: 'object_name', render: function(data,type,row){
            return '<a href="objects/show/' + row.object_id + '" class="flex items-center">'+
                        '<div class="self-center">'+
                            '<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">' + (row.object_name ?? '') + '</h5>'+
                        '</div>'+
                    '</a>';
            }
        },
        {data: 'report_num', render: function(data,type,row){
                return ((row.report_num != null && row.report_num != '') ? '<a href="reports/show/' + row.report_num + '">#' + row.report_num + '</a>' : '');
            }
        },
        {data: 'date_done_srb'},
        {data: null, render: function(data,type,row){
                if(row.id != 0)
                    return '<div class="flex gap-5 justify-end">'+
                                '<a href="workorders/edit/' + row.id + '"><i class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>'+
                                '<a href="javascript:;" class="delete_record" data-popup="delete-popup" data-id="' + row.id + '" data-model="ReportsModel"><i class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>'+
                            '</div>';
                else
                    return "";
            }
        },
    ],
    language: {
        lengthMenu: '<select>' +
                '<option value="10">Po strani: 10</option>' +
                '<option value="20">Po strani: 20</option>' +
                '<option value="30">Po strani: 30</option>' +
                '<option value="40">Po strani: 40</option>' +
                '<option value="50">Po strani: 50</option>' +
                '<option value="-1">All</option>' +
                '</select>',

        search: "",
        searchPlaceholder: "Pretraži...",
        info: "_TOTAL_ radnih naloga",
        infoFiltered: "",
        processing: "<div class='loading-wrap'><span class='loader'></span>&emsp;Loading ...</div>",
        infoEmpty: "0 Rezultata",
        paginate: {
            previous: " < ",
            next: " > ",
        }
    },
    columnDefs: [
        {width: '30px', targets: 0},
        {width: 230, targets: 1},
        {width: '50px', targets: -1},
        {className: 'p-3 text-xs font-medium text-left text-gray-700 dark:text-gray-400 uppercase', targets: [1,2,3,4,5] },
        {className: 'text-end', targets: [0] },
        {className: 'text-center', targets: [-1] },
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
        //     title: "<?php echo $_ENV['company_name']; ?>",
        //     messageBottom: null,
        //     exportOptions: {
        //         columns: ':visible'
        //     }
        // }
        {
            text: 'Obriši selektovano',
            attr: {
                class: 'delete_multiple focus:outline-none bg-red-500 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded ml-5',
                style: 'max-height: 32px;display: none;line-height: 13px;',
                "data-popup": 'delete-popup',
                "data-model": 'ObjectsModel',
            },
            // action: function ( e, dt, node, config ) {
            //     dt.ajax.reload();
            // }
        }
    ]
});
var table3 = $('#client_users').DataTable({
    processing: true,
    serverSide: true,
    serverMethod: 'post',
    ajax: {
        url: "<?= base_url() ?>/clients/client_users_datatable/<?php echo (isset($current['id']) AND $current['id'] != '') ? $current['id'] : 0; ?>",
    },
    rowCallback: function( row, data ) {
        $(row).addClass('UsersModel_row').attr('data-id', data.id);
    },
    retrieve: true,
    cache: true,
    'columns': [
        {data: 'id', render: function(data,type,row){
                return '<label class="custom-label"><div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]"><input type="checkbox" class="hidden" data-remove onchange="data_remove($(this))" data-id="' + row.id + '" ><i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i></div></label>';
            }
        }, 
        {data: 'firstname'},
        {data: 'lastname'},
        {data: 'email'},
        {data: 'username'},
        {data: null, render: function(data,type,row){
                if(row.id != 0)
                    return '<div class="flex gap-5 justify-end">'+
                                '<a href="javascript:;" data-popup="users-popup" onclick="get_user(' + row.id +')"><i class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>'+
                                '<a href="javascript:;" class="delete_record" data-popup="delete-popup" data-id="' + row.id + '" data-model="UsersModel"><i class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>'+
                            '</div>';
                else
                    return "";
            }
        },
    ],
    language: {
        lengthMenu: '<select>' +
                '<option value="10">Po strani: 10</option>' +
                '<option value="20">Po strani: 20</option>' +
                '<option value="30">Po strani: 30</option>' +
                '<option value="40">Po strani: 40</option>' +
                '<option value="50">Po strani: 50</option>' +
                '<option value="-1">All</option>' +
                '</select>',

        search: "",
        searchPlaceholder: "Pretraži...",
        info: "_TOTAL_ korisnika",
        infoFiltered: "",
        processing: "<div class='loading-wrap'><span class='loader'></span>&emsp;Loading ...</div>",
        infoEmpty: "0 Rezultata",
        paginate: {
            previous: " < ",
            next: " > ",
        }
    },
    columnDefs: [
        {width: '30px', targets: 0},
        {width: '50px', targets: -1},
        {className: 'p-3 text-xs font-medium text-left text-gray-700 dark:text-gray-400 uppercase', targets: [1,2,3,4,5] },
        {className: 'text-end', targets: [0] },
        {className: 'text-center', targets: [-1] },
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
        //     title: "<?php echo $_ENV['company_name']; ?>",
        //     messageBottom: null,
        //     exportOptions: {
        //         columns: ':visible'
        //     }
        // }
        {
            text: 'Obriši selektovano',
            attr: {
                class: 'delete_multiple focus:outline-none bg-red-500 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded ml-5',
                style: 'max-height: 32px;display: none;line-height: 13px;',
                "data-popup": 'delete-popup',
                "data-model": 'UsersModel',
            },
            // action: function ( e, dt, node, config ) {
            //     dt.ajax.reload();
            // }
        }
    ]
});
function get_user(id){
    $.ajax({
        type: 'POST',
        url: 'users/single_user/' + id,
        dataType: 'json',
        success: function (data) {
            console.log(data);
            console.log('Success');
            if(data.success){
                $('#user_firstname').val(data.firstname);
                $('#user_lastname').val(data.lastname);
                $('#user_username').val(data.username);
                $('#user_email').val(data.email);
                $('#user_group_id').val(data.group_id);
                $('#user_ref_id').val(data.ref_id);
                $('#user_id').val(data.id);
                // $('#user_password').val(data.password);
            }
        },
        error: function (request, status, error) {
            console.log('PHP Error');
        }
    });
}
flatpickr(".flatpickr", {
    mode: "range",
    minDate: "today",
    dateFormat: "d.m.Y.",
});
</script>

</body>
</html>