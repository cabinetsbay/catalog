// 2024-06-17
// "The frontend product list pages should show products as a grid on narrow screens and as a list on wide screens":
// https://github.com/cabinetsbay/catalog/issues/39
// @used-by https://github.com/cabinetsbay/core/blob/0.3.5/view/frontend/templates/head.phtml#L35
define(['jquery', 'domReady!'], $ => {
	return;
	const $w = $(window);
	// 2024-06-17 I use `div.` to distinguish the element from `ol.products`.
	const $c = $('div.products', $('body.page-products'));
	if ($c.length) {
		const onResize = () => {
			let a = ['products-list', 'products-grid'];
			// 2024-06-17
			// 1.1) https://api.jquery.com/width
			// 1.2) https://stackoverflow.com/a/7789096
			// 2.1) https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Destructuring_assignment
			// 2.2) https://caniuse.com/mdn-javascript_operators_destructuring
			const [add, remove] = 680 < $w.width() ? a : a.reverse();
			$c.addClass(add).removeClass(remove);
		};
		// 2024-06-17 https://api.jquery.com/resize
		$w.on('resize', onResize);
		onResize();
	}
});