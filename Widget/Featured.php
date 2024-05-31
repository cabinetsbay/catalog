<?php
namespace CabinetsBay\Catalog\Widget;
use Magento\Framework\DataObject\IdentityInterface as IIdentity;
use Magento\Widget\Block\BlockInterface as IWBlock;
# 2024-05-31
# "Refactor the «Popular RTA Cabinet Styles» home page block as a widget" https://github.com/cabinetsbay/catalog/issues/27
/** @final Unable to use the PHP «final» keyword here because of the M2 code generation. */
class Featured implements IIdentity, IWBlock {
	/**
	 * 2024-05-31
	 * @override
	 * @see \Magento\Widget\Block\BlockInterface::addData()
	 */
	function addData(array $a):self {return $this;}

	/**
	 * 2024-05-31
	 * @override
	 * @see \Magento\Framework\DataObject\IdentityInterface::getIdentities()
	 * @return string[]
	 */
	function getIdentities():array {return [];}

	/**
	 * 2024-05-31
	 * @override
	 * @see \Magento\Widget\Block\BlockInterface::setData()
	 */
	function setData($k, $v = null):self {return $this;}
}