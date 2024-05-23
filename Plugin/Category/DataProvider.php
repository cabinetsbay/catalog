<?php
# 2024-05-19
# 1) "Refactor the `Sharapov_Cabinetsbay` module": https://github.com/cabinetsbay/site/issues/98
# 2) "Transfer the catalog-related code to the `CabinetsBay_Catalog` module": https://github.com/cabinetsbay/catalog/issues/2
namespace CabinetsBay\Catalog\Plugin\Category;
use CabinetsBay\Catalog\Category\Attribute as A;
use Magento\Catalog\Model\Category\DataProvider as Sb;
final class DataProvider {
	/**
	 * 2024-05-23 "Refactor the `Sharapov_Cabinetsbay` module": https://github.com/cabinetsbay/site/issues/98
	 * @see \Magento\Catalog\Model\Category\DataProvider::prepareMeta()
	 * @used-by self::STUB()
	 */
	function afterPrepareMeta(Sb $sb, array $r):array {return array_merge_recursive($r, self::p(
		[
			A::ASSEMBLY, A::KITCHEN_COLOR, A::KITCHEN_PRICE, A::KITCHEN_SET, A::KITCHEN_STYLE, A::KITCHEN_TYPE,
			A::MATCHING_PRODUCTS, A::SPECS, A::STYLES
		]
		,$sb->getAttributesMeta(df_eav_category())
	));}

	/**
	 * 2024-05-23 "Refactor the `Sharapov_Cabinetsbay` module": https://github.com/cabinetsbay/site/issues/98
	 * @used-by self::afterPrepareMeta()
	 */
	private static function p(array $ff, array $meta):array {
		$r = []; /** @var array $r */
		foreach ($ff as $f) { /** @var string $f */
			if ($v = dfa($meta, $f)) { /** @var array(string => mixed $v) */
				# 2024-05-23 https://github.com/magento/magento2/blob/2.4.7/app/code/Magento/Catalog/view/adminhtml/ui_component/category_form.xml#L156-L223
				$r['content']['children'][$f]['arguments']['data']['config'] = $v;
			}
		}
		return $r;
	}
}