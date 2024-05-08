<?php
namespace CabinetsBay\Catalog\Category;
# 2024-05-08
# "Refactor the names of categories' custom attributes as constants":
# https://github.com/cabinetsbay/catalog/issues/1
interface Attribute {
	/**
	 * 2024-05-08
	 * @used-by vendor/cabinetsbay/core/view/frontend/templates/home/popular.phtml
	 */
	const DOOR_SAMPLE_LINK = 'cb_door_sample_link';

	/**
	 * 2024-05-08
	 * @used-by vendor/cabinetsbay/core/view/frontend/templates/home/popular.phtml
	 */
	const KITCHEN_PRICE = 'cb_kitchen_price';

	/**
	 * 2024-05-08
	 * @used-by vendor/cabinetsbay/core/view/frontend/templates/home/popular.phtml
	 */
	const KITCHEN_SET = 'cb_kitchen_set';
}