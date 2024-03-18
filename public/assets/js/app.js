/*********************/
/*   App Js     */
/*********************/

class App {
	init() {
		const html = document.querySelector("html");
		const toggletheme = document.querySelector("#toggle-theme");
		const lightBtn = toggletheme?.querySelector(".light");
		const darkBtn = toggletheme?.querySelector(".dark");
		toggletheme?.addEventListener("click", () => {
			if (html.getAttribute("class") === "dark") {
				document.body.setAttribute("data-layout-mode", "light");
			} else {
				document.body.setAttribute("data-layout-mode", "dark");
			}

			html.classList.toggle("dark");
			const isDark = html.classList.contains("dark");
			(!isDark ? darkBtn : lightBtn)?.classList.add("hidden");
			(isDark ? darkBtn : lightBtn)?.classList.remove("hidden");

			// togglethemeicon.className = "ti ti-" + `${themeIcon}` + "  top-icon";
		});
	}
}

window.addEventListener("DOMContentLoaded", function (e) {
	new App().init();
});

try {
	// Icon
	lucide.createIcons();
} catch (err) {}
/*********************/
/*   Toggle menu     */
/*********************/
try {
	document
		.getElementById("toggle-menu")
		.addEventListener("click", function () {
			var mobileMenu = document.getElementById("mobile-menu-2");
			mobileMenu.classList.toggle("hidden");
			// if (mobileMenu.classList.contains('block')) {
			//   mobileMenu.classList.remove("hidden");
			// }else{
			//   mobileMenu.classList.add("hidden");
			// }
		});
} catch (err) {}

/*********************/
/*   Menu Sticky     */
/*********************/
function windowScroll() {
	const navbar = document.getElementById("topbar");
	if (navbar != null) {
		if (
			document.body.scrollTop >= 50 ||
			document.documentElement.scrollTop >= 50
		) {
			navbar.classList.add("nav-sticky");
		} else {
			navbar.classList.remove("nav-sticky");
		}
	}
}

window.addEventListener("scroll", (ev) => {
	ev.preventDefault();
	windowScroll();
});

/*********************/
/*  Vertical Menu     */
/*********************/
function activeMenu() {
	function activeTwoColumn() {
		function activeTabMenu() {
			document.querySelectorAll(".tab-menu button").forEach((e) => {
				e.setAttribute("aria-selected", false);
			});
		}
		activeTabMenu();

		document
			.querySelectorAll("#Icon-menu a")
			.forEach(function (element, index) {
				var pageUrl = window.location.href.split(/[?#]/)[0];
				const target = element;

				if (element.href == pageUrl) {
					// tabPanelList list link active
					document
						.querySelectorAll('#Icon-menu [role="tabpanel"]')
						.forEach(function (elem) {
							elem.classList.add("hidden");
							elem.querySelectorAll(".collapse-menu").forEach(
								function (accorElem) {
									accorElem.classList.add("hidden");
								}
							);
						});

					target.classList.add("active");
					target.parentNode.classList.add("menuitem-active");
					let tabNode = null;
					if (
						target.parentNode.parentNode.parentNode.hasAttribute(
							"role"
						)
					) {
						target.parentNode.parentNode.parentNode.classList.remove(
							"hidden"
						);
						tabNode = target.parentNode.parentNode.parentNode;
					}
					if (
						target.parentNode.parentNode.parentNode.classList.contains(
							"collapse-menu"
						)
					) {
						target.parentNode.parentNode.parentNode.classList.remove(
							"hidden"
						);
						tabNode = target.parentNode.parentNode.parentNode;
					}
					if (
						target.parentNode.parentNode.parentNode
							.previousElementSibling
					) {
						target.parentNode.parentNode.parentNode.previousElementSibling
							.querySelector(".nav-link")
							.classList.add("active");
						target.parentNode.parentNode.parentNode.previousElementSibling
							.querySelector("[data-accordion-icon]")
							?.classList.add("rotate-180");
						target.parentNode.parentNode.parentNode.previousElementSibling
							.querySelector(".nav-link")
							.setAttribute("aria-expanded", "true");
						if (
							target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.hasAttribute(
								"role"
							)
						) {
							target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.classList.remove(
								"hidden"
							);
							tabNode =
								target.parentNode.parentNode.parentNode
									.parentNode.parentNode.parentNode
									.parentNode;
						}
					}

					if (tabNode) {
						document
							.querySelectorAll(
								`.tab-menu button[data-tabs-target="#${tabNode.id}"]`
							)
							.forEach((e) => {
								// e.setAttribute('aria-selected', true);
								e.click();
							});
					}
				}
			});
	}

	function activeHorizontal() {
		if (document.querySelector("nav#topbar")) {
			document
				.querySelectorAll("nav#topbar ul.NavMenu a")
				.forEach(function (element, index) {
					var pageUrl = window.location.href.split(/[?#]/)[0];
					const target = element;

					if (element.href == pageUrl) {
						console.info(element);
						element.classList.add("active");
						element.parentElement.parentElement.parentElement
							.querySelector("a")
							?.classList.add("active");
						element.parentElement.parentElement.parentElement.parentElement.parentElement
							.querySelector("a")
							?.classList.add("active");
					}
				});
		}
	}

	function activeLeftbar() {
		document
			.querySelectorAll("ul.navbar-nav a.nav-link")
			.forEach(function (element, index) {
                console.log(element);
				var pageUrl = window.location.href.split(/[?#]/)[0];
				if (pageUrl === element.href) {
					element.classList.add("active");
					const parent =
						element.parentElement.parentElement.parentElement
							.previousElementSibling;

					const pPrent =
						parent.parentElement.parentElement.parentElement
							.previousElementSibling;
					if (pPrent?.hasAttribute("data-fc-type")) {
						frost.Collapse.getInstanceOrCreate(pPrent).show();
					}

					if (parent?.hasAttribute("data-fc-type")) {
						frost.Collapse.getInstanceOrCreate(parent).show();
					} // element.
				}
			});
	}

	// activeLeftbar();
	activeTwoColumn();
	activeHorizontal();
}

window.addEventListener("load", (event) => {
	activeMenu();
});

try {
	// Toggle menu
	document
		.getElementById("toggle-menu")
		.addEventListener("click", function () {
			var mobileMenu = document.getElementById("mobile-menu-2");
			mobileMenu.classList.toggle("block");
			if (mobileMenu.classList.contains("block")) {
				mobileMenu.classList.remove("hidden");
			} else {
				mobileMenu.classList.add("hidden");
			}
		});
} catch (err) {}

// Default Mode
document.getElementById("default-size-check")?.addEventListener("click", () => {
	document.body.setAttribute("data-sidebar-size", "default");
});

//collapsed
var collapsedToggle = document.querySelector(".button-menu-mobile");
collapsedToggle?.addEventListener("click", function () {
	var sidebarSize = document.body.getAttribute("data-sidebar-size");

	if (sidebarSize == "collapsed") {
		document.body.setAttribute("data-sidebar-size", "default");
	} else {
		document.body.setAttribute("data-sidebar-size", "collapsed");
	}
});

window.addEventListener("resize", () => {
	if (window.innerWidth >= 282 && window.innerWidth <= 1440) {
		document.body.setAttribute("data-sidebar-size", "collapsed");
	} else {
		document.body.setAttribute("data-sidebar-size", "default");
	}
});

//collapsed
var collapsedToggle = document.querySelector(".button-menu-mobile-2");
collapsedToggle?.addEventListener("click", function () {
	var sidebarSize = document.body.getAttribute("data-sidebar-size");

	if (sidebarSize == "collapsed") {
		document.body.setAttribute("data-sidebar-size", "default");
		// document.getElementById('default-size-check').checked = true;
	} else {
		document.body.setAttribute("data-sidebar-size", "collapsed");
	}
});

function dismissDropdownMenu() {
	document.querySelectorAll(".dropdown-menu").forEach(function (item) {
		item.classList.remove("block");
		item.classList.add("hidden");
	});
	document.querySelectorAll(".dropdown-toggle").forEach(function (item) {
		item.classList.remove("block");
	});
}

window.addEventListener("click", function (e) {
	dismissDropdownMenu();
});

try {
	window.addEventListener("DOMContentLoaded", () => {
		document
			.querySelectorAll(".drop-multi button, .second-level a")
			.forEach((el) => {
				el.addEventListener("click", function () {
					this.nextElementSibling.classList.toggle("block");
					this.parentNode.classList.toggle("block");
				});
			});
	});

	// data-tw-auto-close
	Array.from(document.querySelectorAll(".dropdown-toggle")).forEach(function (
		item
	) {
		var elem = item.parentElement;
		if (item.getAttribute("data-tw-auto-close") == "outside") {
			elem.querySelector(".dropdown-menu").addEventListener(
				"click",
				function () {
					if (!isShowDropMenu) {
						isShowDropMenu = true;
					}
				}
			);
		} else if (item.getAttribute("data-tw-auto-close") == "inside") {
			item.addEventListener("click", function () {
				isShowDropMenu = true;
				isMenuInside = true;
			});
			elem.querySelector(".dropdown-menu").addEventListener(
				"click",
				function () {
					isShowDropMenu = false;
					isMenuInside = false;
				}
			);
		}
	});

	// window.addEventListener('click', function (e) {
	//   if (!isShowDropMenu && !isMenuInside) {
	//     dismissDropdownMenu();
	//   }
	//   isShowDropMenu = false;
	// });
} catch (err) {}

try {
	flatpickr(".dash_date", {
		defaultDate: "today",
		dateFormat: "d-M-Y",
	});
} catch (err) {}

try {
	function initDateRangrPicker() {
		if ($("#Dash_Date").length == 0) {
			return;
		}

		var picker = $("#Dash_Date");
		var start = moment();
		var end = moment();

		function cb(start, end, label) {
			var title = "";
			var range = "";

			if (end - start < 100 || label == "Today") {
				title = "Today:";
				range = start.format("MMM D");
			} else if (label == "Yesterday") {
				title = "Yesterday:";
				range = start.format("MMM D");
			} else {
				range = start.format("MMM D") + " - " + end.format("MMM D");
			}

			picker.find("#Select_date").html(range);
			picker.find("#Day_Name").html(title);
		}

		picker.daterangepicker(
			{
				startDate: start,
				endDate: end,
				opens: "left",
				applyClass: "btn btn-sm btn-primary",
				cancelClass: "btn btn-sm btn-secondary",
				ranges: {
					Today: [moment(), moment()],
					Yesterday: [
						moment().subtract(1, "days"),
						moment().subtract(1, "days"),
					],
					"Last 7 Days": [moment().subtract(6, "days"), moment()],
					"Last 30 Days": [moment().subtract(29, "days"), moment()],
					"This Month": [
						moment().startOf("month"),
						moment().endOf("month"),
					],
					"Last Month": [
						moment().subtract(1, "month").startOf("month"),
						moment().subtract(1, "month").endOf("month"),
					],
				},
			},
			cb
		);

		cb(start, end, "");
	}
} catch (err) {}

// APP custom javascript
function app_msg(msg, type = 'success', dur = 2500, redirect = null){ //success(default) - green, info - blue, warning - orange, danger - red
    $('.msg-popup p').html(msg);
    $('.msg-popup').removeClass('danger info success warning');
    $('.msg-popup').addClass(type);
    $('.overlay').addClass('opened');
    $('.msg-popup').addClass('showw');
    if(dur != 0){
        setTimeout(function(){
            $('.overlay').removeClass('opened');
            $('.msg-popup').removeClass('showw');
            $('.msg-popup').removeClass('center-popup');
            if(redirect !=  null)
              window.location = redirect;
        },dur);
    }else{
        $('.close_popup').show();
    }
}
$('.close_popup').on('click', function(){
    $('.msg-popup').removeClass('showw');
});
$(".reveal_password").click(function () {
    $(this).toggleClass('active');
    var input = $(this).next();
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});
$('html, body').click(function () {
    close_all();
});
$('[data-popup]').click(function (e) {
    e.stopPropagation();
    close_all();
    var popup = $(this).data('popup');
    var title = $(this).data('popup-title');
    console.log(popup);

    $('body').addClass('show-popup');
    $('.' + popup).addClass('show');
    
    if($('.' + popup).find('.popup-header-title').length){
        $('.' + popup).find('.popup-header-title').text(title);
    };
});
$(document).on('click', '[data-popup]', function (e) {
    e.stopPropagation();
    close_all();
    var popup = $(this).data('popup');
    console.log(popup);

    $('body').addClass('show-popup');
    $('.' + popup).addClass('show');
});
$('.popup').click(function (e) {
    e.stopPropagation();
});

function close_all() {
    $('body').removeClass('show-popup');
    $('.popup').removeClass('show');
};
$('.close_page, .close').click(function () {
    close_all();
});
// $('.delete_record').on('click', function(){
//     var id = $(this).data('id');
//     var table = $(this).data('table');
//     var refresh = $(this).hasClass('refresh_page');

//     $('.delete_item').data('delete-id', id).attr('data-delete-id', id);
//     $('.delete_item').data('delete-table', table).attr('data-delete-table', table);
//     $('.delete_item').data('refresh', refresh).attr('data-refresh', refresh);
// });
var ids = [];
$(document).on('click', '.delete_multiple', function(){
    var parent = $(this).closest('.dataTables_wrapper');
    var model = $(this).data('model');
    ids = [];

    parent.find('[data-remove]:checked').each(function(i, el){
        var id = $(el).data('id');
        ids.push(id);
    });
    console.log(model);
    $('.delete_item').data('delete-model', model).attr('data-delete-model', model);
});
function data_remove(xx){
    var parent = xx.closest('.dataTables_wrapper');
    if(parent.find('[data-remove]:checked').length > 0){
        parent.find('.delete_multiple').show();
    }else{
        parent.find('.delete_multiple').hide();
    }
};
function select_all(xx){
    var parent = xx.closest('.dataTables_wrapper');
    if(xx.is(':checked')){
        parent.find('.delete_multiple').show();
        parent.find('[data-remove]').prop('checked', true);
    }else{
        parent.find('.delete_multiple').hide();
        parent.find('[data-remove]').prop('checked', false);
    }
};
$(document).on('click', '.delete_record', function(){
    var id = $(this).data('id');
    var model = $(this).data('model');
    // var refresh = $(this).hasClass('refresh_page');

    $('.delete_item').data('delete-id', id).attr('data-delete-id', id);
    $('.delete_item').data('delete-model', model).attr('data-delete-model', model);
    // $('.delete_item').data('refresh', refresh).attr('data-refresh', refresh);
});
// FORMS SUBMIT
$('.delete_item').on('click', function(){
    var id = $(this).data('delete-id');
    var model = $(this).data('delete-model');
    var refresh = $(this).data('refresh');

    var btn = $(this);
    btn.addClass('btn--loading');
    console.log('url: clients/ajax_delete/' + model + '/' + id);
    if(ids.length > 0){
        // multi delete
        var success = null;
        $.each(ids, function(i, id){
            $.ajax({
                type: 'POST',
                url: 'clients/ajax_delete/' + model + '/' + id,
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    if(data.success){
                        console.log('SUCCESS');
                        $('.' + model + '_row[data-id="' + id + '"]').addClass('removed');
                        setTimeout(function(){
                            $('.' + model + '_row[data-id="' + id + '"]').remove();
                            btn.removeClass('btn--loading');
                            // if(ids.length == (i-1)){
                            //     location.reload();
                            // }
                            if(table){table.ajax.reload()};
                            if(table2){table2.ajax.reload()};
                            if(table3){table3.ajax.reload()};
                        },600);
                        $('.deselect_checked').trigger('click');
                        success = 'true';
                        close_all();
                    }else{
                        console.log('NO SUCCESS');
                    }
                },
                error: function (request, status, error) {
                    console.log('ERROR WITH PHP');
                    btn.removeClass('btn--loading');
                }
            });
        });
        if(success != null){
            app_msg('Deleted!');
            setTimeout(function(){
                btn.removeClass('btn--loading');
            },800);
        }
        ids = [];
    }else{
        // single delete
        var id = $(this).data('delete-id');
        $.ajax({
            type: 'POST',
            url: 'clients/ajax_delete/' + model + '/' + id,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                if(data.success){
                    console.log('SUCCESS');
                    if(refresh){
                        window.location.reload();
                    };
                    $('.' + model + '_row[data-id="' + id + '"]').addClass('removed');
                    setTimeout(function(){
                        $('.' + model + '_row[data-id="' + id + '"]').remove();
                        btn.removeClass('btn--loading');
                        if(table){table.ajax.reload()};
                        if(table2){table2.ajax.reload()};
                        if(table3){table3.ajax.reload()};
                    },1200);
                    close_all();
                }else{
                    console.log('NO SUCCESS');
                    btn.removeClass('btn--loading');
                }
            },
            error: function (request, status, error) {
                console.log('ERROR WITH PHP');
                btn.removeClass('btn--loading');
            }
        });
    }
});
$('#form-login').on('submit', function (e) {
    console.log('form-login submit');
    e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
    var formData = form.serialize();
    $("#form-login .submit-btn").prop('disabled', true);
    $.ajax({
        type: "POST",
        url: url,
        data: formData,
        dataType: "json",
        beforeSend: function(){  },
        success: function (data) {
            console.log(data);
            if (data.success) {
                console.log('SUCCESS');
                app_msg('Uspesno logovanje','success',1000);
                setTimeout(function(){ 
                    if(data.return_url){
                        window.location = data.return_url;
                    }else{
                        window.location = BASE_URL + "dashboard";
                    }
                },1000);
            } else {
                console.log('NO SUCCESS');
                app_msg('Ne postoji nalog sa ovim podacima.','danger',3500);
                $("#form-login .submit-btn").prop('disabled', false);
            }
        },
        error: function (result) {
            console.log('ERROR WITH PHP');
            console.log(result);
            app_msg('Problem with server. Try again or contact administrator.','error');
            $("#form-login .submit-btn").prop('disabled', false);
      }
    });
});
  
$('.user-form').on('submit', function (e) {
    e.preventDefault();
    var form = $(this);
    console.log(form.attr('id') + ' submit');
    var url = form.attr('action');
    var formData = form.serialize();
    var button = form.find('button[type="submit"]');

    button.addClass('btn--loading');
    $("#form-login .submit-btn").prop('disabled', true);
    $('p.error_msg').remove();
    $('input').removeClass('error');

    $.ajax({
        type: "POST",
        url: url,
        data: formData,
        dataType: "json",
        beforeSend: function(){  },
        success: function (data) {
            console.log(data);
            if (data.success) {
                console.log('SUCCESS');
                app_msg('Snimljeno','success',1000);
                setTimeout(function(){ 
                    if(data.return_url){
                        window.location = data.return_url;
                    }else{
                        if(table){table.ajax.reload()};
                        if(table2){table2.ajax.reload()};
                        if(table3){table3.ajax.reload()};
                    }
                    button.removeClass('btn--loading');
                },1000);
                if(form.hasClass('add-user-form')){
                    var users_count = Number($('.users_count:first').text()) + 1;
                    $('.users_count').text(users_count);
                    $('.users_count_brackets').text('(' + users_count + ')');
                }                
                close_all();
            } else {
                console.log('NO SUCCESS');
                if(data.json){
                    $.each(data.json, function(key, val){
                        form.find('[id=user_' + key + "]").addClass('error').next('p.error_msg').remove();
                        $('<p class="error_msg">' + val + '</p>').insertAfter(form.find('#user_' + key));
                    });
                }
                // if(data.message){
                //     app_msg(data.message,'danger',3500);
                // }else{
                //     app_msg('Dogodila se greška. Molimo pokušajte ponovo','danger',3500);
                // }
                $("#form-login .submit-btn").prop('disabled', false);
                button.removeClass('btn--loading');
            }
        },
        error: function (result) {
            console.log('ERROR WITH PHP');
            console.log(result);
            button.removeClass('btn--loading');
            app_msg('Problem sa serverom. Pokušajte ponovo ili kontaktirajte administratora.','error');
            $("#form-login .submit-btn").prop('disabled', false);
      }
    });
});
// END FORMS
