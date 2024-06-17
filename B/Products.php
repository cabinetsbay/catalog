<?php
namespace CabinetsBay\Catalog\B;
use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Catalog\Block\Product\Context;
use Magento\Catalog\Model\Layer\Resolver;
use Magento\Framework\Data\Helper\PostHelper;
use Magento\Framework\Url\Helper\Data;
# 2024-06-17
# 1) "Move the catalog-related code to the `CabinetsBay_Catalog` module": https://github.com/cabinetsbay/catalog/issues/2
# 2) "Refactor the `Sharapov_Cabinetsbay` module": https://github.com/cabinetsbay/site/issues/98
class Products extends \Magento\Catalog\Block\Product\ListProduct {
  /**
   * @param Context $context
   * @param PostHelper $postDataHelper
   * @param Resolver $layerResolver
   * @param CategoryRepositoryInterface $categoryRepository
   * @param Data $urlHelper
   * @param array $data
   */
  function __construct(
	Context $context,
	PostHelper $postDataHelper,
	Resolver $layerResolver,
	CategoryRepositoryInterface $categoryRepository,
	Data $urlHelper,
	array $data = []
  ) {
	parent::__construct(
	  $context,
	  $postDataHelper,
	  $layerResolver,
	  $categoryRepository,
	  $urlHelper
	);
	// Workaround to show NOINDEX,FOLLOW for inner catalog pages
	if(isset($_GET['p']) and is_numeric($_GET['p']) and $_GET['p'] > 1) {
	  $this->pageConfig->setRobots('NOINDEX,FOLLOW');
	}
  }

	/**
	 * @override
	 * @see \Magento\Framework\View\Element\Template::getTemplate()
	 * @used-by \Magento\Framework\View\Element\Template::_toHtml()
	 * @used-by \Magento\Framework\View\Element\Template::fetchView()
	 * @used-by \Magento\Framework\View\Element\Template::getCacheKeyInfo()
	 * @used-by \Magento\Framework\View\Element\Template::getTemplateFile()
	 */
	function getTemplate():string {return 'CabinetsBay_Catalog::products.phtml';}
}
