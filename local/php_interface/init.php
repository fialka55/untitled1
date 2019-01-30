<?php
/**
 * @version 1.0.1
 * @since 2018-12-19
 */
if (file_exists($_SERVER['DOCUMENT_ROOT'].'/bitrix/php_interface/init.php')) {
	require_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/php_interface/init.php';
}

# register ma-classes
\Bitrix\Main\Loader::registerAutoLoadClasses(
    null,
    array(
        '\MA\Iblock\ElementPropertyTable' => '/local/classes/ma/iblock/lib/elementproperty.php',
        '\MA\Catalog\ProductSetsTable' => '/local/classes/ma/catalog/lib/productsets.php'
    )
);
