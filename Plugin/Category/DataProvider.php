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
		['content' => [
			A::ASSEMBLY, A::KITCHEN_COLOR, A::KITCHEN_PRICE, A::KITCHEN_SET, A::KITCHEN_STYLE, A::KITCHEN_TYPE,
			A::MATCHING_PRODUCTS, A::SPECS, A::STYLES
		]]
		,$sb->getAttributesMeta(df_eav_category())
	));}

	/**
	 * 2024-05-23 "Refactor the `Sharapov_Cabinetsbay` module": https://github.com/cabinetsbay/site/issues/98
	 * @used-by self::afterPrepareMeta()
	 */
	private static function p(array $map, array $meta):array {
		$r = []; /** @var array $r */
		foreach ($map as $fieldSet => $ff) {/** @var string $fieldSet */ /** @var string[] $ff */
			foreach ($ff as $f) { /** @var string $f */
				if (isset($meta[$f])) {
					$r[$fieldSet]['children'][$f]['arguments']['data']['config'] = $meta[$f];
				}
			}
		}
		return $r;
	}
}