<?php
namespace CabinetsBay\Catalog\B;
# 2024-05-23
# "Refactor the «Popular RTA Cabinet Styles» home page block as a widget": https://github.com/cabinetsbay/catalog/issues/27
final class Featured {
	/**
	 * 2024-05-23
	 * @param int[] $categoryIds
	 */
	static function p(array $categoryIds, string $cmsBlockId):string {return df_block_output($c = __CLASS__, df_class_llc($c));}
}