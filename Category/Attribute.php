<?php
namespace CabinetsBay\Catalog\Category;
# 2024-05-08 "Refactor the names of categories' custom attributes as constants": https://github.com/cabinetsbay/catalog/issues/1
interface Attribute {
	/**
	 * 2024-05-08
	 * @used-by \CabinetsBay\Catalog\Plugin\Category\DataProvider::afterPrepareMeta()
	 * @used-by \Sharapov\Cabinetsbay\Setup\UpgradeData::p100()
	 * @used-by \Sharapov\Cabinetsbay\Setup\UpgradeData::p101()
	 * @used-by vendor/cabinetsbay/catalog/view/frontend/templates/category/l3/tabs.phtml
	 */
	const ASSEMBLY = 'cb_assembly';

	/**
	 * 2024-05-08
	 * @used-by \Sharapov\Cabinetsbay\Setup\UpgradeData::p100()
	 * @used-by \Sharapov\Cabinetsbay\Setup\UpgradeData::p101()
	 * @used-by vendor/cabinetsbay/catalog/view/frontend/templates/category/item.phtml
	 * @used-by vendor/cabinetsbay/catalog/view/frontend/templates/featured.phtml
	 */
	const DOOR_SAMPLE_LINK = 'cb_door_sample_link';

	/**
	 * 2024-05-08
	 * @used-by \CabinetsBay\Catalog\Plugin\Category\DataProvider::afterPrepareMeta()
	 * @used-by \Sharapov\Cabinetsbay\Setup\UpgradeData::p100()
	 * @used-by vendor/cabinetsbay/catalog/view/frontend/templates/category/l2/l3/items.phtml
	 */
	const KITCHEN_COLOR = 'cb_kitchen_color';

	/**
	 * 2024-05-08
	 * @used-by \CabinetsBay\Catalog\Plugin\Category\DataProvider::afterPrepareMeta()
	 * @used-by \Sharapov\Cabinetsbay\Setup\UpgradeData::p100()
	 * @used-by \Sharapov\Cabinetsbay\Setup\UpgradeData::p101()
	 * @used-by vendor/cabinetsbay/catalog/view/frontend/templates/category/item.phtml
	 * @used-by vendor/cabinetsbay/catalog/view/frontend/templates/category/l2/l3/items.phtml
	 * @used-by vendor/cabinetsbay/catalog/view/frontend/templates/featured.phtml
	 */
	const KITCHEN_PRICE = 'cb_kitchen_price';

	/**
	 * 2024-05-08
	 * @used-by \CabinetsBay\Catalog\Plugin\Category\DataProvider::afterPrepareMeta()
	 * @used-by \Sharapov\Cabinetsbay\Setup\UpgradeData::p100()
	 * @used-by \Sharapov\Cabinetsbay\Setup\UpgradeData::p101()
	 * @used-by vendor/cabinetsbay/catalog/view/frontend/templates/category/item.phtml
	 * @used-by vendor/cabinetsbay/catalog/view/frontend/templates/featured.phtml
	 */
	const KITCHEN_SET = 'cb_kitchen_set';

	/**
	 * 2024-05-08
	 * @used-by \CabinetsBay\Catalog\Plugin\Category\DataProvider::afterPrepareMeta()
	 * @used-by \Sharapov\Cabinetsbay\Setup\UpgradeData::p100()
	 * @used-by \Sharapov\Cabinetsbay\Setup\UpgradeData::p101()
	 * @used-by vendor/cabinetsbay/catalog/view/frontend/templates/category/l2/l3/items.phtml
	 */
	const KITCHEN_STYLE = 'cb_kitchen_style';

	/**
	 * 2024-05-08
	 * @used-by \CabinetsBay\Catalog\Plugin\Category\DataProvider::afterPrepareMeta()
	 * @used-by \Sharapov\Cabinetsbay\Setup\UpgradeData::p100()
	 * @used-by \Sharapov\Cabinetsbay\Setup\UpgradeData::p101()
	 * @used-by vendor/cabinetsbay/catalog/view/frontend/templates/category/l2/l3/items.phtml
	 */
	const KITCHEN_TYPE = 'cb_kitchen_type';


	/**
	 * 2024-05-08
	 * 2024-05-23 https://github.com/cabinetsbay/catalog/labels/matching-products
	 * @used-by \CabinetsBay\Catalog\B\Category::l3p()
	 * @used-by \CabinetsBay\Catalog\Plugin\Category\DataProvider::afterPrepareMeta()
	 * @used-by \Sharapov\Cabinetsbay\Setup\UpgradeData::p100()
	 */
	const MATCHING_PRODUCTS = 'cb_matching_products';

	/**
	 * 2024-05-08
	 * @used-by \CabinetsBay\Catalog\Plugin\Category\DataProvider::afterPrepareMeta()
	 * @used-by \Sharapov\Cabinetsbay\Setup\UpgradeData::p100()
	 * @used-by \Sharapov\Cabinetsbay\Setup\UpgradeData::p101()
	 * @used-by vendor/cabinetsbay/catalog/view/frontend/templates/category/l3/tabs.phtml
	 */
	const SPECS = 'cb_specs';

	/**
	 * 2024-05-08
	 * @used-by \CabinetsBay\Catalog\Plugin\Category\DataProvider::afterPrepareMeta()
	 * @used-by \Sharapov\Cabinetsbay\Setup\UpgradeData::p100()
	 * @used-by \Sharapov\Cabinetsbay\Setup\UpgradeData::p101()
	 * @used-by vendor/cabinetsbay/catalog/view/frontend/templates/category/l3/tabs/matching-styles.phtml
	 */
	const STYLES = 'cb_styles';
}