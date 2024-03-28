<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php echo view('templates/head.php'); ?>

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

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="employees-group-page bg-[#EEF0FC] dark:bg-gray-900">

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
								<h1 class="font-medium text-3xl block dark:text-slate-100">Preparati</h1>
								<ol class="list-reset flex text-sm">
									<li>
										<a href="<?php echo base_url(); ?>" class="text-gray-500 dark:text-slate-400">Ekozaštita</a>
									</li>
									<li>
										<span class="text-gray-500 dark:text-slate-400 mx-2">/</span>
									</li>
									<li class="text-green-500 dark:text-gray-400">Operativci</li>
								</ol>
							</div>
                            <div class="ms-auto">
                                <a href="products/edit" class="inline-block focus:outline-none bg-brand-500 mt-1 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded">
                                    Dodaj Preparat
                                </a>
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
						<div class="flex-auto p-0 md:p-4">							
                            <div class="sm:-mx-6 lg:-mx-8 p-4">
                                <div class="relative overflow-x-auto block w-full sm:px-2 lg:px-4">
                                    <div class="bg-white rounded-md shadow-md">
                                        <div class="py-4">
                                            <table class="w-full" id="products_table">
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
                                                            Naziv preparata
                                                        </th>
                                                        <th scope="col" class="py-3 text-center">
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
			<!-- footer -->
			<?php echo view('templates/footer.php'); ?>	
		</div>
	</div>
</div>

<?php echo view('templates/popups.php'); ?>	

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

var tablee = $('#products_table').DataTable({
    processing: true,
    serverSide: true,
    serverMethod: 'post',
    ajax: {
        url: "<?= base_url() ?>/products/datatable",
    },
    rowCallback: function( row, data ) {
        $(row).addClass('ProductsModel_row').attr('data-id', data.id);
    },
    retrieve: true,
    cache: true,
    'columns': [
        {data: 'id', render: function(data,type,row){
                return '<label class="custom-label"><div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]"><input type="checkbox" class="hidden" data-remove onchange="data_remove($(this))" data-id="' + row.id + '" ><i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i></div></label>';
            }
        }, 
        {data: 'title', render: function(data,type,row){
            return '<a href="products/edit/' + row.id + '" class="flex items-center">'+
                        // (row.image != '' ? '<img src="' + row.image + '" alt="" class="me-2 h-8 inline-block" style="width: 32px;height: 32px !important;object-fit: cover;">'  : svg) +
                        '<div class="self-center">'+
                            '<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">' + (row.title ?? 'bez naziva') + '</h5>'+
                        '</div>'+
                    '</a>';
            }
        },
        {data: null, render: function(data,type,row){
                if(row.id != 0)
                    return '<div class="flex gap-5 justify-center">'+
                                '<a href="products/edit/' + row.id + '"><i class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>'+
                                '<a href="javascript:;"><i class="icofont-ui-delete text-lg text-red-500 dark:text-red-400 delete_record" data-id="' + row.id + '" data-model="ProductsModel" data-popup="delete-popup" ></i></a>'+
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
        info: "_TOTAL_ Preparata",
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
        {width: '50px', targets: -1},
        // {width: '500px', targets: 1},
        {className: 'p-3 text-xs font-medium text-left text-gray-700 dark:text-gray-400', targets: [1,2] },
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
        // },
        {
            text: 'Obriši selektovano',
            attr: {
                class: 'delete_multiple focus:outline-none bg-red-500 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded ml-5',
                style: 'max-height: 32px;display: none;line-height: 13px;',
                "data-popup": 'delete-popup',
                "data-model": 'ProductsModel',
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