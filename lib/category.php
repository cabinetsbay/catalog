<?php
use Magento\Catalog\Model\Category as C;
/**
 * 2024-03-10
 * 1.1) Level 0: «Root Catalog».
 * 1.2) Level 1: «Default Category».
 * 1.3) Level 2:
 * 		«Ready to Assemble Cabinets»
 * 		«Pre-Assembled Cabinets»
 * 		«Cabinet Organizers & Hardware»
 * 2024-06-10
 * 1) "Handle category levels > 3": https://github.com/cabinetsbay/catalog/issues/36
 * 2.1) Level 4: https://localhost.com:2255/ready-to-assemble-cabinets/croydon-white-shaker/pantry-oven-cabinets.html
 * 2.2) Level 5: https://localhost.com:2255/ready-to-assemble-cabinets/croydon-white-shaker/pantry-oven-cabinets/pantry-cabinets.html
 * @used-by \CabinetsBay\Catalog\B\Products::getTemplate() (https://github.com/cabinetsbay/site/issues/98)
 * @used-by vendor/cabinetsbay/catalog/view/frontend/templates/category/header.phtml
 */
function cb_category_is_l2(?C $c = null):bool {return 2 === df_category_level($c);}