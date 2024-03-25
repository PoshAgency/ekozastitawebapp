<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php echo view('templates/head'); ?>

<!-- Css -->
<link href="assets/libs/prismjs/themes/prism-twilight.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="assets/libs/mobius1-selectr/selectr.min.css">
<!-- <link rel="stylesheet" href="assets/libs/simple-datatables/style.css"> -->
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
<style>
.clear_dates:hover {
    color: var(--main-color);
    opacity: 0.7;
}
.clear_dates {
	position: absolute;
	top: 0;
	right: 0;
	z-index: 1111;
	font-size: 20px;
	line-height: 39px;
	display: block;
	width: 25px;
	text-align: center;
	cursor: pointer;
	user-select: none;
}

</style>
</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="reports-group-page bg-green-50 dark:bg-gray-900">

<?php echo view('templates/left-bar'); ?>		
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
                            <div class="ms-auto">
                                <a href="reports/show" class="inline-block focus:outline-none bg-brand-500 mt-1 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded">
                                    Kreiraj filter
                                </a>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>

        <div class="breadcrumbs-container xl:w-full">
			<div class="flex flex-wrap">
				<div class="flex items-center pt-4 px-4 w-full">
					<div class="w-full p-4 bg-white rounded-md shadow-md">
                        <div class="flex flex-wrap gap-4 items-center">
                            <div class="w-44 ">  
                                <select id="clients_list" class="form-input w-full rounded-md border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700">
                                    <option value="" selected>Izaberi klijenta</option>
                                    <?php foreach($all_active_clients as $single){ ?>
                                    <option value="<?php echo (isset($single['id']) AND $single['id'] != '') ? $single['id'] : ''; ?>"><?php echo (isset($single['name']) AND $single['name'] != '') ? $single['name'] : ''; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="w-44 ">  
                                <select id="objects_list" class="form-input w-full rounded-md border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700">
                                    <option value="" selected>Izaberi objekat</option>
                                    <option value="111">Objekti 1</option>
                                    <option value="144">Objekti 2</option>
                                    <option value="132">Objekti 3</option>
                                </select>
                            </div>
                            <div style="position: relative;width: 190px;"> 
                                <input id="date" name="date" class="datepicker_range_table flatpickr form-input w-full rounded-md border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" type="text" placeholder="Izveštaj za period" readonly="readonly">
                                <span class="clear_dates" style="display: none;">×</span>
                            </div>
							<div class="">
                                <label id="select-all" class="flex items-center">
                                    <input id="all" name="all" type="checkbox" value="1" class="accent-primary-500"> 
                                    <span for="all" class="ml-1 text-sm font-medium text-slate-600 dark:text-gray-300"> Svi objekti</span>
                                </label>
                            </div>
                            <div class="">
                                <label id="select-critical" class="flex items-center">
                                    <input id="critical" name="critical" type="checkbox" value="1" class="accent-primary-500"> 
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="main-content-container xl:w-full min-h-[calc(100vh-152px)] relative pb-14">
			<div class="main-content-wrapper grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
				<div class="main-content-item sm:col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
					<div class="w-full relative mb-4">  
						<div class="flex-auto p-0">
							<div id="myTabContent">
								<div class="active pb-4 px-4 rounded-lg" id="all" role="tabpanel" aria-labelledby="all-tab">
									<div class="grid grid-cols-1 p-0 md:p-4">
										<div class="sm:-mx-6 lg:-mx-8">
											<div class="relative overflow-x-auto block w-full sm:px-2 lg:px-4 pb-4">
                                                <div class="bg-white rounded-md shadow-md">
                                                    <div class="py-4">
                                                        <table class="w-full border-collapse" id="reports_table">
                                                            <thead class="bg-gray-50 dark:bg-gray-700/20">
                                                                <tr>
                                                                    <th scope="col" class="p-3 pr-0" width="20" style="width: 20px !important">
                                                                        <label class="custom-label">
                                                                            <div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
                                                                            <input type="checkbox" class="hidden" onchange="select_all($(this))">
                                                                            <i title="Izaberi sve" class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                            </div>
                                                                        </label>
                                                                    </th>
                                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Broj izveštaja
                                                                    </th>
                                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Klijent
                                                                    </th>
                                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Objekat
                                                                    </th>
                                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Datum
                                                                    </th>
                                                                    <th scope="col" style="width: 120px !important" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
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
                <!-- <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, pariatur.</p>                     -->
            </div>
            <div class="flex flex-wrap shrink-0 justify-end p-3 rounded-b border-t border-dashed dark:border-gray-700">
                <button class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500 text-sm font-medium py-1 px-3 rounded mr-1 close" data-fc-dismiss>Da</button>
                <button class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500 text-sm font-medium py-1 px-3 rounded" data-fc-dismiss>Ne</button>
            </div>
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
<script>
var dates = '';
var filterData = '';
var flatpic;

// flatpickr(".flatpickr", {
flatpic = $(".datepicker_range_table").flatpickr({
    mode: "range",
    // minDate: "today",
    dateFormat: "d.m.Y.",
    onClose: function(selectedDates, dateStr, instance) {
        console.log(selectedDates);
        // console.log(dateStr);
        if(selectedDates.length){
            var dd = String(selectedDates[0].getDate()).padStart(2, '0');
            var mm = String(selectedDates[0].getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = selectedDates[0].getFullYear();

            var from  = dd + '.' + mm + '.' + yyyy;

            var dd2 = String(selectedDates[1].getDate()).padStart(2, '0');
            var mm2 = String(selectedDates[1].getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy2 = selectedDates[1].getFullYear();

            var to = dd2 + '.' + mm2 + '.' + yyyy2;
            dates = from + ' do ' + to;
            console.log(instance);
            tablee.ajax.reload();
            $('.datepicker_range_table').val(dates);
        }
    },
});
</script>
<script src="assets/libs/mobius1-selectr/selectr.min.js"></script>
<script src="assets/js/pages/form-advanced.init.js"></script>

<script src="assets/libs/prismjs/prism.js"></script> 
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
var filterData = {};

new Selectr('#clients_list');

$('#clients_list').on('change', function(){
    var val = $(this).val();

});

var tablee = $('#reports_table').DataTable({
    processing: true,
    serverSide: true,
    serverMethod: 'post',
    ajax: {
        url: "<?= base_url() ?>/reports/datatable",
        type: "POST",
        data: function(params) {
            $('#clients_list').val()      != '' ? (filterData['client_id'] = $('#clients_list').val()) : '';
            $('#objects_list').val()      != '' ? (filterData['object_id'] = $('#objects_list').val()) : '';
            $('#all').is(':checked')      != '' ? (filterData['all_objects'] = 1) : '';
            $('#critical').is(':checked') != '' ? (filterData['critical'] = 1) : '';
            var tableData = $.extend({}, params, {
                filter: filterData,
                dates: dates
            });
            return tableData;
        },
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
        {data: 'report_num', render: function(data,type,row){
            return '<a href="reports/edit/' + row.id + '" class="flex items-center">'+
                        '<div class="self-center">'+
                            '<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">' + (row.report_num ?? '') + '</h5>'+
                        '</div>'+
                    '</a>';
            }
        },
        {data: 'client_name', render: function(data,type,row){
            return '<a href="clients/show/' + row.client_id + '" class="flex items-center">'+
                        '<div class="self-center">'+
                            '<h5 class="text-sm font-normal text-slate-700 dark:text-gray-400">' + (row.client_name ?? '') + '</h5>'+
                        '</div>'+
                    '</a>';
            }
        },
        {data: 'object_name', render: function(data,type,row){
            return '<a href="objects/show/' + row.object_id + '" class="flex items-center">'+
                        '<div class="self-center">'+
                            '<h5 class="text-sm font-normal text-slate-700 dark:text-gray-400">' + (row.object_name ?? '') + '</h5>'+
                        '</div>'+
                    '</a>';
            }
        },
        {data: 'date_done'},
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
        info: "_TOTAL_ Izveštaja",
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
        {width: '30px', targets: 0},
        {width: '10%', targets: 1},
        {width: '20%', targets: 2},
        {width: '50%', targets: 3},
        {width: '20%', targets: 4},
        {width: '50px', targets: -1},
        {className: 'p-3 text-xs font-medium text-left text-gray-700 dark:text-gray-400', targets: [-2]},
        {className: 'p-3 text-xs font-medium text-left text-gray-700 dark:text-gray-400', targets: [1,2,3] },
        {className: 'text-center pr-0', targets: [0] },
        {orderable: false, targets: [0,-1] } // last column (Actions) not orderable
    ],
    dom: '<"table-filters"iB<"btn-holder"<"date_range">fr>>t<"table-footer"<"bottom-footer-container"pl>>',
    buttons: [
        {
            text: 'Obriši selektovano',
            attr: {
                class: 'delete_multiple focus:outline-none bg-red-500 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded ml-5',
                style: 'max-height: 32px;display: none;line-height: 13px;',
                "data-popup": 'delete-popup',
                "data-model": 'ReportsModel',
            },
        }
    ]
});
$(document).on('click', '.clear_dates', function(){
    $('.datepicker_range_table').val('');
    flatpic.clear();
    dates = '';
    tablee.ajax.reload();
    $(this).hide();
});

$(document).on('change', '#clients_list,#objects_list,#all,#critical', function(){
    tablee.ajax.reload();
});

</script>
</body>
</html>