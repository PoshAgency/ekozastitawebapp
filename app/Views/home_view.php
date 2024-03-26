<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php echo view('templates/head'); ?>
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
																<table class="w-full border-collapse" id="all_workorders">
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
                                          <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase" width="230">
                                              Objekat
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
                <!-- <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, pariatur.</p> -->
            </div>
            <div class="flex flex-wrap shrink-0 justify-end p-3 rounded-b border-t border-dashed dark:border-gray-700">
                <button class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500 text-sm font-medium py-1 px-3 rounded mr-1 close" data-fc-dismiss>Da</button>
                <button class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500 text-sm font-medium py-1 px-3 rounded" data-fc-dismiss>Ne</button>
            </div>
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
<!-- datatable -->
<script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
<!-- export datatable -->
<script src="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
<!-- fixedcolumns datatable -->
<script src="https://cdn.datatables.net/fixedcolumns/5.0.0/js/dataTables.fixedColumns.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/5.0.0/js/fixedColumns.dataTables.js"></script>
<script src="assets/js/app.js"></script>
<?php if (session()->getFlashdata('msg') !== NULL){ ?>
<script>
    app_msg('<?php echo session()->getFlashdata('msg'); ?>');
</script>
<?php } ?>
<script>
var table2 = $('#all_workorders').DataTable({
    processing: true,
    serverSide: true,
    serverMethod: 'post',
    ajax: {
        url: "<?php echo (session('user') != NULL AND in_array(session('user')['group_id'], [1,2])) ? "reports/all_workorders_datatable" : ((session('user') != NULL AND in_array(session('user')['group_id'], [5])) ? 'clients/client_workorders_datatable' : ''); ?>",        
    },
    rowCallback: function( row, data ) {
        $(row).addClass('ReportsModel_row').attr('data-id', data.id);
    },
    retrieve: true,
    cache: true,
    columns: [
        {data: 'id', render: function(data,type,row){
                return '<label class="custom-label"><div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]"><input type="checkbox" class="hidden" data-remove onchange="data_remove($(this))" data-id="' + row.id + '" ><i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i></div></label>';
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
        {data: 'date_done_srb'},
        {data: 'report_num', render: function(data,type,row){
                return ((row.report_num != null && row.report_num != '') ? '<a href="reports/show/' + row.report_num + '">#' + row.report_num + '</a>' : '');
            }
        },
        {data: null, render: function(data,type,row){
            return '0';
            }
        },
        {data: null, render: function(data,type,row){
                if(row.id != 0)
                    return '<div class="flex gap-5 justify-end">'+
                                '<a href="javascript:;"><i class="icofont-ui-check text-xxl text-gray-500 dark:text-gray-400" data-fc-type="modal"  data-fc-target="approvemodal"></i></a>'+
                                '<a href="javascript:;"><i class="icofont-paper-plane text-xxl text-gray-500 dark:text-gray-400" data-fc-type="modal" data-fc-target="sendmailmodal"></i></a>'+
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
    autoWidth: false,
    columnDefs: [
        {width: "60px", targets: 0},
        {width: "500px", targets: 1},
        {width: "50px", targets: -1},
        {className: 'p-3 text-xs font-medium text-left text-gray-700 dark:text-gray-400', targets: [1,2,3,4,5] },
        {className: 'text-center', targets: [0] },
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
        //     title: "<?php // echo $_ENV['company_name']; ?>",
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
</script>
</body>
</html>