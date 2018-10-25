	const observer = lozad('.lozad', {
		rootMargin: '10px 0px', // syntax similar to that of CSS Margin
		threshold: 0.1 // ratio of element convergence
	});
	observer.observe();
	$(document).ready(function () {
		$(function () {
			$(".typed-js").typed({
				strings: ["@lang('main.first.title.student')", "@lang('main.first.title.student1')"],
				typeSpeed: 100,
				backSpeed: 100,
				loop: true
			});
		});
	});
	function validateMyForm(el, id) {
		if (id == 1) window.location = '/public/scholarships?q=' + el.text.value;
		if (id == 2) window.location = '/public/schools?q=' + el.text.value;
	}