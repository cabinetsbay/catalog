<?php
namespace CabinetsBay\Catalog\Category;
# 2024-05-08
# "Refactor the names of categories' custom attributes as constants":
# https://github.com/cabinetsbay/catalog/issues/1
interface Attribute {
	/**
	 * 2024-05-08
	 * @used-by app/code/Sharapov/Cabinetsbay/Setup/InstallData.php
	 */
	const ASSEMBLY = 'cb_assembly';

	/**
	 * 2024-05-08
	 * @used-by app/code/Sharapov/Cabinetsbay/Setup/InstallData.php
	 * @used-by vendor/cabinetsbay/core/view/frontend/templates/home/popular.phtml
	 */
	const DOOR_SAMPLE_LINK = 'cb_door_sample_link';

	/**
	 * 2024-05-08
	 * @used-by app/code/Sharapov/Cabinetsbay/Setup/InstallData.php
	 */
	const KITCHEN_COLOR = 'cb_kitchen_color';

	/**
	 * 2024-05-08
	 * @used-by app/code/Sharapov/Cabinetsbay/Setup/InstallData.php
	 * @used-by vendor/cabinetsbay/core/view/frontend/templates/home/popular.phtml
	 */
	const KITCHEN_PRICE = 'cb_kitchen_price';

	/**
	 * 2024-05-08
	 * @used-by app/code/Sharapov/Cabinetsbay/Setup/InstallData.php
	 * @used-by vendor/cabinetsbay/core/view/frontend/templates/home/popular.phtml
	 */
	const KITCHEN_SET = 'cb_kitchen_set';

	/**
	 * 2024-05-08
	 * @used-by app/code/Sharapov/Cabinetsbay/Setup/InstallData.php
	 */
	const KITCHEN_STYLE = 'cb_kitchen_style';

	/**
	 * 2024-05-08
	 * @used-by app/code/Sharapov/Cabinetsbay/Setup/InstallData.php
	 */
	const KITCHEN_TYPE = 'cb_kitchen_type';

	/**
	 * 2024-05-08
	 * @used-by app/code/Sharapov/Cabinetsbay/Setup/InstallData.php
	 */
	const MATCHING_PRODUCTS = 'cb_matching_products';

	/**
	 * 2024-05-08
	 * @used-by app/code/Sharapov/Cabinetsbay/Setup/InstallData.php
	 */
	const SPECS = 'cb_specs';

	/**
	 * 2024-05-08
	 * @used-by app/code/Sharapov/Cabinetsbay/Setup/InstallData.php
	 */
	const STYLES = 'cb_styles';
}