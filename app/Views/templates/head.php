<!-- Website -->
<base href="<?php echo base_url(); ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="author" content="Ekozaštita">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="language" content="English">
<meta name="copyright" content="ThePosh Agency">

<title><?php echo $_ENV['company_name']; ?></title>

<link rel="shortcut icon" href="assets/images/favicon.ico" />
<link rel="apple-touch-icon" sizes="120x120" href="./assets/images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon-16x16.png">
<link rel="manifest" href="./assets/images/site.webmanifest">
<link rel="mask-icon" href="./assets/images/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#119c49">
<meta name="theme-color" content="#ffffff">

<!-- Css -->
<link rel="stylesheet" href="assets/libs/icofont/icofont.min.css" />
<link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css" type="text/css"  />
<link rel="stylesheet" href="assets/css/tailwind.min.css" />
<link rel="stylesheet" href="assets/css/custom.css?v=<?php echo $_ENV['version']; ?>" />

<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700&display=swap" rel="stylesheet">
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
.error_msg {
	font-size: 10px;
	position: absolute;
	top: 100%;
	right: 0;
	color: red;
	z-index: 1;
}
form > div {
    position: relative;
}
.reveal_password {
	width: auto;
	height: auto;
	display: block;
	color: #000;
	position: absolute;
	top: 43px;
    right: 15px;
	z-index: 1;
	line-height: 40px;
	cursor: pointer;
	font-size: 14px;
}
/* TABLE LOADER */
.loader {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    display: inline-block;
    position: relative;
    border: 3px solid;
    border-color: #666 #666 transparent transparent;
    box-sizing: border-box;
    animation: rotation 1s linear infinite;
}
.loader::after,
.loader::before {
    content: '';  
    box-sizing: border-box;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    margin: auto;
    border: 3px solid;
    border-color: transparent transparent #119c49 #119c49;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    box-sizing: border-box;
    animation: rotationBack 0.5s linear infinite;
    transform-origin: center center;
}
.loader::before {
    width: 32px;
    height: 32px;
    border-color: #dadada #dadada transparent transparent;
    animation: rotation 1.5s linear infinite;
}
    
@keyframes rotation {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
} 
@keyframes rotationBack {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(-360deg);
    }
}
/* END TABLE LOADER */
/* FOR LOADER ON BUTTONS - ajax */
.bg--loading {
	background-color: rgba(255,255,255, 0.05) !important;
	transition: none !important;
	opacity: 0.5;
    position: relative;
}
.bg--loading::after {
	content: '';
	display: block;
	width: 44px;
	height: 44px !important;
	position: absolute;
	left: 50%;
	top: 50%;
	margin-left: -12px;
	margin-top: -12px;
	border-radius: 50%;
	border: 5px solid #000 !important;
	border-top-color: transparent !important;
	-webkit-animation: spin 1s infinite linear;
	-moz-animation: spin 1s infinite linear;
	-o-animation: spin 1s infinite linear;
	animation: spin 1s infinite linear;
	visibility: visible !important;
}
table.dataTable thead th, table.dataTable thead td {
	max-width: 200px !important;
	white-space: normal !important;
}
body button.btn.btn--loading,
body a.btn.btn--loading,
body .btn--loading,
body button.btn.btn--loading:hover,
body a.btn.btn--loading:hover,
body .btn--loading:hover {
		color: rgba(0,0,0,0) !important;
		transition: none !important;
		position: relative;
}
body .btn-border.white-bg.btn--loading::after {
    border: 3px solid #000;
    border-top-color: transparent;
    color: rgba(0,0,0,0) !important;
}
body .btn-border.white-bg.btn--loading:hover::after {
    border: 3px solid #fff;
    border-top-color: transparent;
    color: rgba(0,0,0,0) !important;
}
body .btn--loading::after {
		content: '';
		display: block;
		width: 24px;
		height: 24px;
		position: absolute;
		left: 50%;
		top: 50%;
		margin-left: -12px;
		margin-top: -12px;
		border-radius: 50%;
		border: 3px solid #fff;
		border-top-color: transparent;
		-webkit-animation: spin 1s infinite linear;
		-moz-animation: spin 1s infinite linear;
		-o-animation: spin 1s infinite linear;
		animation: spin 1s infinite linear;
}
@-webkit-keyframes spin{
		0%{-webkit-transform:rotate(0deg);-moz-transform:rotate(0deg);-ms-transform:rotate(0deg);-o-transform:rotate(0deg);transform:rotate(0deg)}
		100%{-webkit-transform:rotate(360deg);-moz-transform:rotate(360deg);-ms-transform:rotate(360deg);-o-transform:rotate(360deg);transform:rotate(360deg)}
}
@-moz-keyframes spin{
		0%{-webkit-transform:rotate(0deg);-moz-transform:rotate(0deg);-ms-transform:rotate(0deg);-o-transform:rotate(0deg);transform:rotate(0deg)}
		100%{-webkit-transform:rotate(360deg);-moz-transform:rotate(360deg);-ms-transform:rotate(360deg);-o-transform:rotate(360deg);transform:rotate(360deg)}
}
@-ms-keyframes spin{
		0%{-webkit-transform:rotate(0deg);-moz-transform:rotate(0deg);-ms-transform:rotate(0deg);-o-transform:rotate(0deg);transform:rotate(0deg)}
		100%{-webkit-transform:rotate(360deg);-moz-transform:rotate(360deg);-ms-transform:rotate(360deg);-o-transform:rotate(360deg);transform:rotate(360deg)}
}
@keyframes spin{
		0%{-webkit-transform:rotate(0deg);-moz-transform:rotate(0deg);-ms-transform:rotate(0deg);-o-transform:rotate(0deg);transform:rotate(0deg)}
		100%{-webkit-transform:rotate(360deg);-moz-transform:rotate(360deg);-ms-transform:rotate(360deg);-o-transform:rotate(360deg);transform:rotate(360deg)}
}
.spin {
    animation: spin 1s infinite linear;
}
/* Message Box */
.msg-popup {
    position: fixed;
    top: 80px;
    left: 50%;
    width: 100%;
    max-width: 38vw;
    z-index: 111111111111;
    padding: 30px;
    color: #000;
    background: #fff;
    border-radius: 0px;
    box-shadow: 0px 0px 50px rgba(51, 51, 51, 0.1);
    line-height: 1.4;
    transition: all 0.5s cubic-bezier(.13,.56,.38,.89) 0s;
    opacity: 0;
    pointer-events: none;
    visibility: hidden;
    transform: translateX(-50%);
}
.msg-popup.danger { background: #ff5757 }
.msg-popup.danger p { color: #ffffff }
.msg-popup.danger .close_popup { color: #fff }
.msg-popup.warning { background: #ffc557; }
.msg-popup.warning p { color: #000; }
.msg-popup.warning .close_popup { color: #000; }
.msg-popup.info { background: #34bafb; }
.msg-popup.info p { color: #000; }
.msg-popup.success { background: var(--main-color); } /* #3c763d */
.msg-popup.success p { color: #fff; }

.close_popup {
    position: absolute;
    top: 32px;
    right: 25px;
    padding: 0;
    line-height: 1;
    font-size: 25px;
    font-weight: 700;
    cursor: pointer;
}
.close_popup:hover {
    filter: invert(1);
}
.msg-popup.showw {
    pointer-events: auto;
    visibility: visible;
    top: 140px;
    opacity: 1;
}
.msg-popup p {
    color: #000000;
    text-align: center;
    margin: 0;
    font-size: 16px;
    font-weight: 400;
}
.hide {
    display: none;
}
.dataTables_processing {
	position: absolute !important;
	top: 0 !important;
	left: 0 !important;
	background: #fffffff5 !important;
	width: 100% !important;
	height: 100% !important;
	display: flex;
	align-items: center !important;
	justify-content: center !important;
    margin: 0 !important;
    padding: 0 !important;
}
.loading-wrap {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 70vh;
	display: flex;
	align-items: center;
	justify-content: center;
}
.bottom-footer-container {
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding: 30px 20px 0;
}
body .dataTables_wrapper .dataTables_paginate {
	padding-top: 0;
}
body .dataTables_wrapper .dataTables_paginate .paginate_button {
	color: #617b91 !important;
	border: 1px solid #e5eff5;
	border-radius: 7px;
	width: 35px;
	height: 35px;
	line-height: 30px;
	padding: 0;
	margin-right: 10px;
	margin-left: 0;
	display: flex;
	align-items: center;
	justify-content: center;
}
.table-filters .btn-holder {
	display: flex;
	align-items: center;
	margin-left: auto;
}
body .table-filters .btn-holder {
	justify-content: flex-end;
}
.dataTables_filter {
	position: relative;
}
.dataTables_wrapper .dataTables_filter {
	margin-left: auto;
}
.dataTables_wrapper .dataTables_filter input {
	border: 1px solid #aaa !important;
	border-radius: 3px !important;
	padding: 5px !important;
	background-color: transparent !important;
	margin-left: 3px !important;
	border: 1px solid rgb(229, 231, 235) !important;
	border-radius: 7px !important;
	padding: 10px 10px !important;
	margin-left: 0 !important;
	font-size: 12px !important;
	width: 330px;
	margin-right: 10px !important;
	max-height: 35px !important;
}
body .dataTables_wrapper .dataTables_paginate .paginate_button {
	color: #617b91 !important;
	border: 1px solid #e5eff5;
	border-radius: 7px;
	width: 35px;
	height: 35px;
	line-height: 30px;
	padding: 0;
	margin-right: 10px;
	margin-left: 0;
}
body .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
	color: white !important;
	border: 1px solid #617b91;
	background: #617b91;
}
.dataTables_paginate.paging_simple_numbers, .dataTables_paginate.paging_simple_numbers > span {
	display: flex;
	align-items: center;
}
body .dataTables_wrapper .dataTables_paginate .paginate_button.current, body .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
	background: #617b91 !important;
	border: 1px solid #617b91 !important;
	color: #fff !important;
	border-radius: 7px !important;
	width: 35px !important;
	height: 35px !important;
	padding: 0 !important;
	line-height: 35px !important;
	font-size: 12px !important;
}

.dataTables_wrapper .dataTables_info {
	font-size: 12px;
	color: #333;
	font-family: 'Poppins';
	font-weight: 700;
	text-transform: uppercase;
    padding-top: 0;
}
.table-filters {
	display: flex;
	align-items: center;
	padding: 0 10px 30px 20px;
}
table.dataTable thead th, table.dataTable thead td {
	padding: 10px 18px;
	border-bottom: 1px solid #dae0e8 !important;
}
table.dataTable.no-footer {
	border-bottom: 1px solid #dae0e8 !important;
}
.dataTables_wrapper .dataTables_length select {
	border: 1px solid rgb(229, 231, 235) !important;
	padding: 6px;
	font-size: 13px;
}
/* POPUP CSS */
body.show-popup {
    overflow: hidden;
}
.overlay {
    position: fixed;
    top: 0;
    width: 100%;
    height: 100vh;
    left: 0;
    -webkit-transition: all 0.5s ease-in-out 0s;
    transition: all 0.5s ease-in-out 0s;
    z-index: 10000;
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    background: rgba(0, 0, 0, 0.51);
}
.overlay .overlay-blur {
    position: absolute;
    top: 0;
    width: 100%;
    height: 100vh;
    left: 0;
    z-index: 1;
    -webkit-transition: all 0.25s ease-in-out 0s;
    transition: all 0.25s ease-in-out 0s;
    background-color: rgba(0, 0, 0, 0.6);
}
.overlay .popup {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transition: all 0.4s cubic-bezier(0.13, 0.56, 0.38, 0.89) 0s;
    transition: all 0.4s cubic-bezier(0.13, 0.56, 0.38, 0.89) 0s;
    -webkit-transform: translate(-50%, -50%) scale(1.05);
            transform: translate(-50%, -50%) scale(1.05);
    width: 100%;
    max-width: 600px;
    z-index: 1002;
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    background: #fff;
    padding: 70px 80px;
    -webkit-box-shadow: 0 0 100px 0 rgba(0, 0, 0, 0.2);
            box-shadow: 0 0 100px 0 rgba(0, 0, 0, 0.2);
}
.overlay .popup.small-padding {
    padding: 25px 50px;
}
.overlay .popup.small-padding .popup-body {
    padding: 0px 50px 25px 50px;
}
.overlay .popup .popup-body {
    padding: 0 80px 60px;
}
.overlay .popup .popup-header {
    padding: 30px 0;
    border-bottom: 1px solid #F0F0F0;
}
.show-popup .overlay {
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
}
.show-popup .overlay .popup.show {
    -webkit-transform: translate(-50%, -50%) scale(1);
            transform: translate(-50%, -50%) scale(1);
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
}
.close_page {
    position: absolute;
    top: 0;
    right: 0;
    color: #f0f0f0;
    line-height: 30px;
    font-size: 40px;
    padding: 20px;
    cursor: pointer;
}
.close_page:hover {
    color: #333;
}
.close-popup {
    cursor: pointer;
}
.close-popup:hover {
    opacity: 0.5;
}
.popup-header p {
    font-size: 14px !important;
    text-transform: uppercase;
    font-weight: 700;
}
.hover\:bg-brand-600:hover {
	--tw-bg-opacity: 1 !important;
	background-color: green !important;
}
.px-8 {
	padding-left: 2.5rem !important;
	padding-right: 2.5rem !important;
}
.bg-red-500:hover {
	background: #ca2139 !important;
}
.bg-red-500:hover {
	background: #ca2139 !important;
}
body table tr.removed {
    background-color: rgba(255, 0, 0, 0.3);
    animation: delete_item 1.2s forwards 0.2s;
}
@keyframes delete_item {
    0% {background-color: rgba(255, 0, 0, 0.3);}
    100% {background-color: rgba(255, 0, 0, 0);}
}
.bg-green-100\/10 {
	background: rgba(17, 156, 73, 0.4);
}
/* RESPONSIVE */
@media(max-width: 767px){
    .popup-header p {
        font-size: 14px !important;
        text-transform: uppercase;
        font-weight: 700;
    }
}
/* END POPUP CSS */
</style>
<script> 
var BASE_URL = '<?= base_url() ?>';
var CURRENT_URL = '<?= current_url() ?>/';
</script>