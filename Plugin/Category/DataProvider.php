<?php
# 2024-05-19
# 1) "Refactor the `Sharapov_Cabinetsbay` module": https://github.com/cabinetsbay/site/issues/98
# 2) "Transfer the catalog-related code to the `CabinetsBay_Catalog` module": https://github.com/cabinetsbay/catalog/issues/2
namespace CabinetsBay\Catalog\Plugin\Category;
use CabinetsBay\Catalog\Category\Attribute as A;
use Magento\Catalog\Model\Category\DataProvider as Sb;
final class DataProvider {
	/**
	 * 2024-05-23
	 * 1) "Refactor the `Sharapov_Cabinetsbay` module": https://github.com/cabinetsbay/site/issues/98
	 * 2) https://github.com/magento/magento2/blob/2.4.7/app/code/Magento/Catalog/view/adminhtml/ui_component/category_form.xml#L156-L223
	 * @see \Magento\Catalog\Model\Category\DataProvider::prepareMeta()
	 * @used-by self::STUB()
	 */
	function afterPrepareMeta(Sb $sb, array $r):array {return array_merge_recursive($r, ['content' => ['children' => df_map_k(
		function(string $k, array $v):array {return [$k => ['arguments' => ['data' => ['config' => $v]]]];}
		,dfa($sb->getAttributesMeta(df_eav_category()), [
			A::ASSEMBLY, A::KITCHEN_COLOR, A::KITCHEN_PRICE, A::KITCHEN_SET, A::KITCHEN_STYLE, A::KITCHEN_TYPE,
			A::MATCHING_PRODUCTS, A::SPECS, A::STYLES
		])
	)]]);}
}