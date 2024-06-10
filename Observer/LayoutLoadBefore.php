<?php
namespace CabinetsBay\Catalog\Observer;
use Magento\Framework\Event\Observer as O;
use Magento\Framework\Event\ObserverInterface;
# 2024-04-15 "Add the current category level as a CSS class to `<body>`": https://github.com/cabinetsbay/catalog/issues/3
final class LayoutLoadBefore implements ObserverInterface {
	/**
	 * 2024-04-15
	 * @override
	 * @see ObserverInterface::execute()
	 * @see \Magento\Framework\View\Layout\Builder::loadLayoutUpdates():
	 * 		$this->eventManager->dispatch(
	 * 			'layout_load_before',
	 * 			['full_action_name' => $this->request->getFullActionName(), 'layout' => $this->layout]
	 * 		);
	 * https://github.com/magento/magento2/blob/2.4.4/lib/internal/Magento/Framework/View/Layout/Builder.php#L79-L82
	 * @used-by \Magento\Framework\Event\Invoker\InvokerDefault::_callObserverMethod()
	 */
	function execute(O $o):void {
		if (df_is_catalog_product_list()) {
			df_page_config()->addBodyClass('cb-category-level-' . df_category_level());
			# 2024-06-10
			# 1) "Handle category levels > 3": https://github.com/cabinetsbay/catalog/issues/36
			# 2.1) Level 4: https://localhost.com:2255/ready-to-assemble-cabinets/croydon-white-shaker/pantry-oven-cabinets.html
			# 2.2) Level 5: https://localhost.com:2255/ready-to-assemble-cabinets/croydon-white-shaker/pantry-oven-cabinets/pantry-cabinets.html
			if (2 < df_category_level()) {
				df_page_config()->addBodyClass('cb-category-level-ge3');
			}
		}
	}
}