// 2024-06-17
// "The frontend product list pages should show products as a grid on narrow screens and as a list on wide screens":
// https://github.com/cabinetsbay/catalog/issues/39
define(['jquery', 'domReady!'], $ => {
	if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
		$('.products.wrapper.list').removeClass('products-list').addClass('products-grid');
	}
});