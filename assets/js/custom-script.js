$(document).ready(function () {
	//loader

	setTimeout(showPage, 1000);
	function showPage() {
		$("#loader").css("display", "none");
		$("#root").css("display", "block");
		//==================Animation on scroll======================
		AOS.init({
			once: false,
			delay: 0,
			// offset: 1200,
			duration: 800,
		});
	}
	let scrollRef = 0;
	window.addEventListener("scroll", function () {
		// increase value up to 10, then refresh AOS
		scrollRef <= 10 ? scrollRef++ : AOS.refresh();
	});

	//==================navbar fixed on scroll====================
	// $(window).scroll(function () {
	// 	if ($(this).scrollTop() > 40) {
	// 		$("#navbar").addClass("fixed--top");
	// 	} else {
	// 		$("#navbar").removeClass("fixed--top");
	// 	}
	// });

	//chat bot show function
	// $("#wings").click(function () {
	// 	$("#queryForm").addClass("active");
	// });
	//chat bot hide function
	// $("#wings-close").click(function () {
	// 	$("#queryForm").removeClass("active");
	// });

	// image change on hover of navbar dropdown menu

	// const baseurl = window.location.href;
	const baseurl = window.location.origin + "/uaetechmate/"; //onproduction change it back
	const appleimgurl = baseurl + "assets/img/services/apple/service-banner.png";
	const microsoftimgurl =
		baseurl + "assets/img/services/microsoft/service-banner.png";
	const recoveryimgurl =
		baseurl + "assets/img/services/recovery/service-banner.png";
	const otherimgurl = baseurl + "assets/img/services/other/service-banner.png";
	$("#navbarScrollingDropdown").click(function () {
		$("#dropdown-image").attr("src", appleimgurl);
	});
	$(".dropdown-item").mouseover(function () {
		const text = $(this).text().trim();
		if (text === "Apple Device Repair") {
			$("#dropdown-image").attr("src", appleimgurl);
		} else if (text === "Microsoft Device Repair") {
			$("#dropdown-image").attr("src", microsoftimgurl);
		} else if (text === "Data Recovery") {
			$("#dropdown-image").attr("src", recoveryimgurl);
		} else if (text === "Other Manufacturer Device Repair") {
			$("#dropdown-image").attr("src", otherimgurl);
		} else {
			$("#dropdown-image").attr("src", appleimgurl);
		}
	});

	//banner slider
	$("#banner").owlCarousel({
		loop: true,
		margin: 10,
		nav: false,
		dots: true,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: false,
		responsiveClass: true,
		items: 1,
		responsive: {
			0: {
				items: 1,
				dots: false,
			},
			600: {
				items: 1,
				dots: false,
			},
			1000: {
				items: 1,
			},
		},
	});

	//our services slider
	$("#serviceSlider").owlCarousel({
		loop: true,
		margin: 20,
		nav: true,
		navText: [
			'<i class="fas fa-angle-left" aria-hidden="true"></i>',
			'<i class="fas fa-angle-right" aria-hidden="true"></i>',
		],
		dots: false,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: false,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 2,
			},
			1000: {
				items: 3,
			},
		},
	});
	//testimonials slider
	$("#testimonials").owlCarousel({
		loop: true,
		margin: 20,
		nav: false,
		dots: true,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: false,
		responsiveClass: true,
		items: 1,
	});

	//select 2
	$(".select2").select2({
		minimumResultsForSearch: -3,
	});

	// date time and timezone picker

	// $(".onlyDatePick").datepicker({
	// 	minDate: 0,
	// });
	// $(".onlyTimePick").mdtimepicker();
	// $(".onlyTimezone").timezones();
	// $(".onlyTimezone").select2({
	// 	minimumResultsForSearch: 1,
	// });

	//phone number with country code

	$(".phoneNumber").intlTelInput({
		initialCountry: "auto",
		geoIpLookup: function (callback) {
			$.get("https://ipinfo.io", function () {}, "jsonp").always(function (
				resp
			) {
				var countryCode = resp && resp.country ? resp.country : "in";
				callback(countryCode);
			});
		},
		utilsScript:
			"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.min.js",
	});

	// animating modal
	$(".modal").each(function (index) {
		$(this).on("show.bs.modal", function (e) {
			var open = $(this).attr("data-easein");
			if (open == "shake") {
				$(".modal-dialog").velocity("callout." + open);
			} else if (open == "pulse") {
				$(".modal-dialog").velocity("callout." + open);
			} else if (open == "tada") {
				$(".modal-dialog").velocity("callout." + open);
			} else if (open == "flash") {
				$(".modal-dialog").velocity("callout." + open);
			} else if (open == "bounce") {
				$(".modal-dialog").velocity("callout." + open);
			} else if (open == "swing") {
				$(".modal-dialog").velocity("callout." + open);
			} else {
				$(".modal-dialog").velocity("transition." + open);
			}
		});
	});

	//custom animation for contact-modal
	$("#contact-modal .btn-close").click(function () {
		$("#contact-modal").removeClass("show");
		setTimeout(() => {
			$("#contact-modal").modal("hide");
		}, 300);
	});
});
// this is the ending tag of ready function
