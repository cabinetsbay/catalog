A custom module for [cabinetsbay.com](https://cabinetsbay.com) (Magento 2).  

## How to install
```             
bin/magento maintenance:enable
rm -rf composer.lock
composer clear-cache
composer require cabinetsbay/core:*
rm -rf var/di var/generation generated/*
bin/magento setup:upgrade
bin/magento cache:enable
bin/magento setup:di:compile
bin/magento cache:clean
rm -rf pub/static/* var/cache var/page_cache var/view_preprocessed
bin/magento setup:static-content:deploy \
	--area adminhtml \
	--theme Magento/backend \
	-f en_US
bin/magento setup:static-content:deploy \
	--area frontend \
	--theme Cabinetsbay/cabinetsbay_default \
	-f en_US
bin/magento cache:clean
bin/magento maintenance:disable
```

## How to upgrade
```     
bin/magento maintenance:enable
composer remove cabinetsbay/core
rm -rf composer.lock
composer clear-cache
composer require cabinetsbay/core:*
rm -rf var/di var/generation generated/*
bin/magento setup:upgrade
bin/magento cache:enable
bin/magento setup:di:compile
bin/magento cache:clean
rm -rf pub/static/* var/cache var/page_cache var/view_preprocessed
bin/magento setup:static-content:deploy \
	--area adminhtml \
	--theme Magento/backend \
	-f en_US
bin/magento setup:static-content:deploy \
	--area frontend \
	--theme Cabinetsbay/cabinetsbay_default \
	-f en_US
bin/magento cache:clean
bin/magento maintenance:disable
```