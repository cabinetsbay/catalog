<?php
namespace CabinetsBay\Catalog\Category;
# 2024-05-08
# "Refactor the names of categories' custom attributes as constants":
# https://github.com/cabinetsbay/catalog/issues/1
interface Attribute {
	/**
	 * 2024-05-08
	 * @used-by \Sharapov\Cabinetsbay\Plugin\Category\DataProvider::_getFieldsMap()
	 * @used-by \Sharapov\Cabinetsbay\Setup\InstallData::install()
	 */
	const ASSEMBLY = 'cb_assembly';

	/**
	 * 2024-05-08
	 * @used-by \Sharapov\Cabinetsbay\Setup\InstallData::install()
	 * @used-by vendor/cabinetsbay/core/view/frontend/templates/home/popular.phtml
	 */
	const DOOR_SAMPLE_LINK = 'cb_door_sample_link';

	/**
	 * 2024-05-08
	 * @used-by \Sharapov\Cabinetsbay\Plugin\Category\DataProvider::_getFieldsMap()
	 * @used-by \Sharapov\Cabinetsbay\Setup\InstallData::install()
	 */
	const KITCHEN_COLOR = 'cb_kitchen_color';

	/**
	 * 2024-05-08
	 * @used-by \Sharapov\Cabinetsbay\Plugin\Category\DataProvider::_getFieldsMap()
	 * @used-by \Sharapov\Cabinetsbay\Setup\InstallData::install()
	 * @used-by vendor/cabinetsbay/core/view/frontend/templates/home/popular.phtml
	 */
	const KITCHEN_PRICE = 'cb_kitchen_price';

	/**
	 * 2024-05-08
	 * @used-by \Sharapov\Cabinetsbay\Plugin\Category\DataProvider::_getFieldsMap()
	 * @used-by \Sharapov\Cabinetsbay\Setup\InstallData::install()
	 * @used-by vendor/cabinetsbay/core/view/frontend/templates/home/popular.phtml
	 */
	const KITCHEN_SET = 'cb_kitchen_set';

	/**
	 * 2024-05-08
	 * @used-by \Sharapov\Cabinetsbay\Plugin\Category\DataProvider::_getFieldsMap()
	 * @used-by \Sharapov\Cabinetsbay\Setup\InstallData::install()
	 */
	const KITCHEN_STYLE = 'cb_kitchen_style';

	/**
	 * 2024-05-08
	 * @used-by \Sharapov\Cabinetsbay\Plugin\Category\DataProvider::_getFieldsMap()
	 * @used-by \Sharapov\Cabinetsbay\Setup\InstallData::install()
	 * @used-by \Sharapov\Cabinetsbay\Setup\UpgradeData::upgrade()
	 */
	const KITCHEN_TYPE = 'cb_kitchen_type';

	/**
	 * 2024-05-08
	 * @used-by \Sharapov\Cabinetsbay\Plugin\Category\DataProvider::_getFieldsMap()
	 * @used-by \Sharapov\Cabinetsbay\Setup\InstallData::install()
	 */
	const MATCHING_PRODUCTS = 'cb_matching_products';

	/**
	 * 2024-05-08
	 * @used-by \Sharapov\Cabinetsbay\Plugin\Category\DataProvider::_getFieldsMap()
	 * @used-by \Sharapov\Cabinetsbay\Setup\InstallData::install()
	 */
	const SPECS = 'cb_specs';

	/**
	 * 2024-05-08
	 * @used-by \Sharapov\Cabinetsbay\Plugin\Category\DataProvider::_getFieldsMap()
	 * @used-by \Sharapov\Cabinetsbay\Setup\InstallData::install()
	 */
	const STYLES = 'cb_styles';
}