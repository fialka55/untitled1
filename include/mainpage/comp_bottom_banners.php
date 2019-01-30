<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<?global $isShowBottomBanner;?>
<?if($isShowBottomBanner):?>
	<?$APPLICATION->IncludeComponent(
	"aspro:com.banners.next", 
	"top_slider_banners", 
	array(
		"IBLOCK_TYPE" => "aspro_next_adv",
		"IBLOCK_ID" => "3",
		"TYPE_BANNERS_IBLOCK_ID" => "1",
		"SET_BANNER_TYPE_FROM_THEME" => "N",
		"NEWS_COUNT" => "10",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "DESC",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "URL",
			2 => "",
		),
		"CHECK_DATES" => "Y",
		"CACHE_GROUPS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"BANNER_TYPE_THEME" => "WIDE",
		"COMPONENT_TEMPLATE" => "top_slider_banners",
		"BANNER_TYPE_THEME_CHILD" => "20",
		"FILTER_NAME" => "arRegionLink",
		"NEWS_COUNT2" => "20",
		"CATALOG" => "/catalog/"
	),
	false
);?>
<?endif;?>