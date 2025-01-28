$(document).ready(function () {
	$(function () {
		$(function () {
			$('.tabs__btn').click(function (e) {
				e.preventDefault();
				const tab_id = $(this).attr('href');

				$('.tabs__btn').removeClass('active');
				$('.tabs__content').removeClass('active');

				$(this).addClass('active');
				$(tab_id).addClass('active');
			})
		});
	});
	//nav btn
	$('.nav__btn').click(function () {
		$('.nav').toggleClass('active');
	})

	$('.main-gallery__slides').slick({
		arrows: false,
		dots: true,
		infinite: true
	});

	$(".faq__opener").on("click", function () {
		const $this = $(this);

		if ($this.hasClass("active")) {
			$this.siblings(".faq__content").slideUp(200);
			$this.removeClass("active");
		} else {
			$this.addClass("active");
			$this.siblings(".faq__content").slideDown(200);
		}
	});

	$(".faq__heading-opener").on("click", function () {
		const $this = $(this);
		const $heading = $this.closest(".faq__heading");
		const $list = $heading.siblings(".faq__list");

		if ($this.hasClass("active")) {
			$list.slideUp(200);
			$this.removeClass("active");
			$heading.removeClass("active-heading"); // Remove active class
		} else {
			$this.addClass("active");
			$heading.addClass("active-heading"); // Add active class
			$list.slideDown(200);
		}
	});

	Fancybox.bind("[data-fancybox]", {
		// Your custom options
	});


	//select
	$('.select__caption').on('click', function () {
		$(this).parent().toggleClass('open');
	});

	$('.select__item').on('click', function () {
		$('.select__item').removeClass('selected');
		$(this).addClass('selected').parent().parent().removeClass('open').children('.select__caption').html($(this).html());

	});

	$(document).on('keyup', function (evt) {
		if ((evt.keyCode || evt.which) === 27) {
			$('.select').removeClass('open');
		}
	});

	$(document).on('click', function (evt) {
		if ($(evt.target).closest(".select__caption").length === 0) {
			$('.select').removeClass('open');
		}
	});
});
