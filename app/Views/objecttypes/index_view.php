<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php echo view('templates/head'); ?>

<!-- Css -->
<link href="assets/libs/prismjs/themes/prism-twilight.min.css" type="text/css" rel="stylesheet">
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
<link rel="stylesheet" href="assets/libs/mobius1-selectr/selectr.min.css">
<link rel="stylesheet" href="assets/css/custom.css" />
</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="location-type-edit-page bg-green-50 dark:bg-gray-900">

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
								<h1 class="font-medium text-3xl block dark:text-slate-100">Tipovi objekta</h1>
								<ol class="list-reset flex text-sm">
									<li>
										<a href="<?php echo base_url(); ?>" class="text-gray-500 dark:text-slate-400">Ekozaštita</a>
									</li>
									<li>
										<span class="text-gray-500 dark:text-slate-400 mx-2">/</span>
									</li>
									<li class="text-green-500 dark:text-gray-400">Tipovi objekta</li>
								</ol>
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
								<div class="active p-4 rounded-lg" id="all" role="tabpanel" aria-labelledby="all-tab">
									<div class="grid grid-cols-1 p-0 md:p-4">
										<div class="sm:-mx-6 lg:-mx-8">
											<div class="relative block w-full sm:px-2 lg:px-4">
                                                <div class="bg-white rounded-md shadow-md">
                                                    <div class="py-4">
                                                        <div class="w-full relative mb-4">  
                                                            <form action="javascript:;">
                                                                <div class="flex-auto p-0 md:p-4">                                    
                                                                    <div class="mb-2">
                                                                        <label for="locatin_type" class="font-medium text-sm text-slate-600 dark:text-slate-400">Tipovi objekata</label>
                                                                        <select id="locatin_type" name="locatin_type" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700">
                                                                            <option>Magacin</option>
                                                                            <option>Skladišni prostor</option>
                                                                            <option>Objekat 3</option>
                                                                            <option>Objekat 4</option>
                                                                            <option>Objekat 5</option>
                                                                            <option>Objekat 6</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="">
                                                                        <button class="px-2 py-2 lg:px-4 bg-transparent  text-brand text-sm  rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium">Odustani</button>
                                                                        <button type="submit" class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500">Dodaj objekat</button>
                                                                    </div>
                                                                </div>							
                                                            </form>
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

<!-- <div class="menu-overlay"></div> -->



<script src="assets/libs/mobius1-selectr/selectr.min.js"></script>
<!-- JAVASCRIPTS -->
<script>    
new Selectr('#locatin_type',{
	taggable: true,
	tagSeperators: [",", "|"]
});
</script>
</body>
</html>