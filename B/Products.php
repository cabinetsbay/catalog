<?php
namespace CabinetsBay\Catalog\B;
# 2024-06-17
# 1) "Move the catalog-related code to the `CabinetsBay_Catalog` module": https://github.com/cabinetsbay/catalog/issues/2
# 2) "Refactor the `Sharapov_Cabinetsbay` module": https://github.com/cabinetsbay/site/issues/98
class Products extends \Magento\Catalog\Block\Product\ListProduct {
	/**
	 * @override
	 * @see \Magento\Framework\View\Element\Template::getTemplate()
	 * @used-by \Magento\Framework\View\Element\Template::_toHtml()
	 * @used-by \Magento\Framework\View\Element\Template::fetchView()
	 * @used-by \Magento\Framework\View\Element\Template::getCacheKeyInfo()
	 * @used-by \Magento\Framework\View\Element\Template::getTemplateFile()
	 */
	function getTemplate():string {return cb_category_is_l2() ? '' : 'CabinetsBay_Catalog::products.phtml';}
}
