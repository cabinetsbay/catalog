<?php
namespace CabinetsBay\Catalog\Widget;
use Magento\Framework\DataObject\IdentityInterface as IIdentity;
use Magento\Framework\View\Element\BlockInterface as IBlock;
use Magento\Widget\Block\BlockInterface as IWBlock;
# "Refactor the «Popular RTA Cabinet Styles» home page block as a widget" https://github.com/cabinetsbay/catalog/issues/27
/** @final Unable to use the PHP «final» keyword here because of the M2 code generation. */
class Featured implements
	/**
	 * 2024-05-31
	 * 1) «CabinetsBay\Catalog\Widget\Featured does not implement BlockInterface»:
	 * https://github.com/cabinetsbay/catalog/issues/31
	 * 2) @see \Magento\Framework\View\Element\BlockFactory::createBlock():
	 * 		if (!$block instanceof BlockInterface) {
	 * 			throw new \LogicException($blockName . ' does not implement BlockInterface');
	 * 		}
	 * https://github.com/magento/magento2/blob/2.4.7/lib/internal/Magento/Framework/View/Element/BlockFactory.php#L45-L47
	 */
	IBlock
	,IIdentity
	,IWBlock
{
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
	 * @param string|array $k
	 * @param mixed $v [optional]
	 */
	function setData($k, $v = null):self {return $this;}

	/**
	 * 2024-05-31
	 * @override
	 * @see \Magento\Framework\View\Element\BlockInterface::toHtml()
	 */
	function toHtml():string {return __METHOD__;}
}