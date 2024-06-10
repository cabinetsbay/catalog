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
 * Level 4: https://localhost.com:2255/ready-to-assemble-cabinets/croydon-white-shaker/pantry-oven-cabinets.html
 * Level 5: https://localhost.com:2255/ready-to-assemble-cabinets/croydon-white-shaker/pantry-oven-cabinets/pantry-cabinets.html
 * @used-by vendor/cabinetsbay/catalog/view/frontend/templates/category/header.phtml
 */
function cb_category_is_l2(C $c):bool {return 2 === df_category_level($c);}