$(function() {
	var mySwiper = new Swiper('.swiper-container', {
		effect: 'fade',
		autoplay: {
			delay: 5000,
			disableOnInteraction: false
		},
		loop: true,
		pagination: {
			el: '.swiper-pagination',
			clickable: true
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev'
		},
		lazy: {
			loadPrevNext: true
		}
	})

	var postId = '';
	$('.down').on('click', function () {
		postId = $(this).data('id') || $('body').data('id');
		$('#mask').show();
		$('.down-box').show();
	});

	$('#mask').on('click', function () {
		$(this).hide();
		$('.down-box').hide();
	});

	$('.down-ct').on('click', function () {
		var openPage = window.open('', '_blank')
		var ajax_data = {
			action: "bigfa_like",
			um_id: postId
		};
		$.post("/wp-admin/admin-ajax.php", ajax_data, function (data) {
			openPage.window.location = data
			window.open(data)
		});
	});

	$('.down-bd').on('click', function () {
		var openPage = window.open('', '_blank')
		var ajax_data = {
			action: "down_bd",
			um_id: postId
		};
		$.post("/wp-admin/admin-ajax.php", ajax_data, function (data) {
			openPage.window.location = data
			window.open(data)
		});
	});

	$('.down-ctzip').on('click', function () {
		var openPage = window.open('')
		var ajax_data = {
			action: "down_ctzip",
			um_id: postId
		};
		$.post("/wp-admin/admin-ajax.php", ajax_data, function (data) {
			openPage.window.location = data
			window.open(data)
			setTimeout(function () {
				openPage.close()
			}, 5000)
		});
	});
});