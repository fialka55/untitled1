<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?global $isShowSale, $isShowCatalogSections, $isShowCatalogElements, $isShowMiddleAdvBottomBanner, $isShowBlog;?>
<div class="grey_block">
	<div class="maxwidth-theme">
		<?$APPLICATION->IncludeComponent(
	"aspro:com.banners.next", 
	"top_big_banners", 
	array(
		"IBLOCK_TYPE" => "aspro_next_adv",
		"IBLOCK_ID" => "3",
		"TYPE_BANNERS_IBLOCK_ID" => "1",
		"SET_BANNER_TYPE_FROM_THEME" => "Y",
		"NEWS_COUNT" => "8",
		"NEWS_COUNT2" => "4",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "DESC",
		"PROPERTY_CODE" => array(
			0 => "BUTTON1CLASS",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"CACHE_GROUPS" => "N",
		"CACHE_TYPE" => "Y",
		"CACHE_TIME" => "36000000",
		"BANNER_TYPE_THEME" => "TOP",
		"BANNER_TYPE_THEME_CHILD" => "TOP_SMALL_BANNER",
		"COMPONENT_TEMPLATE" => "top_big_banners",
		"FILTER_NAME" => "arRegionLink",
		"CATALOG" => "/catalog/"
	),
	false
);?>
		<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
			array(
				"COMPONENT_TEMPLATE" => ".default",
				"PATH" => SITE_DIR."include/mainpage/comp_tizers.php",
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => "standard.php"
			),
			false
		);?>
	</div>
	<hr>
</div>

<?if($isShowCatalogSections || $isShowCatalogElements || $isShowMiddleAdvBottomBanner):?>
	<div class="maxwidth-theme">
		<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
			array(
				"COMPONENT_TEMPLATE" => ".default",
				"PATH" => SITE_DIR."include/mainpage/comp_catalog_sections.php",
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => "standard.php"
			),
			false
		);?>
		<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
			array(
				"COMPONENT_TEMPLATE" => ".default",
				"PATH" => SITE_DIR."include/mainpage/comp_catalog_hit.php",
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => "standard.php"
			),
			false
		);?>
		<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
			array(
				"COMPONENT_TEMPLATE" => ".default",
				"PATH" => SITE_DIR."include/mainpage/comp_adv_middle.php",
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => "standard.php"
			),
			false
		);?>	
	</div>
<?endif;?>

<?if($isShowSale):?>
	<div class="grey_block">
		<div class="maxwidth-theme">
			<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
				array(
					"COMPONENT_TEMPLATE" => ".default",
					"PATH" => SITE_DIR."include/mainpage/comp_news_akc.php",
					"AREA_FILE_SHOW" => "file",
					"AREA_FILE_SUFFIX" => "",
					"AREA_FILE_RECURSIVE" => "Y",
					"EDIT_TEMPLATE" => "standard.php"
				),
				false
			);?>
		</div>
	</div>
<?endif;?>

<?if($isShowBlog):?>
	<div class="maxwidth-theme">
		<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
			array(
				"COMPONENT_TEMPLATE" => ".default",
				"PATH" => SITE_DIR."include/mainpage/comp_blog.php",
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => "standard.php"
			),
			false
		);?>	
	</div>
<?endif;?>

<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => SITE_DIR."include/mainpage/comp_bottom_banners.php",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "",
		"AREA_FILE_RECURSIVE" => "Y",
		"EDIT_TEMPLATE" => "standard.php"
	),
	false
);?>

<div class="maxwidth-theme">
	<?global $arRegion, $isShowCompany;?>
	<?if($isShowCompany):?>
		<div class="company_bottom_block">			
			<div class="row wrap_md">
				<div class="col-md-3 col-sm-3 hidden-xs img">
					<?$APPLICATION->IncludeFile(SITE_DIR."include/mainpage/company/front_img.php", Array(), Array( "MODE" => "html", "NAME" => GetMessage("FRONT_IMG") )); ?>
				</div>
				<div class="col-md-9 col-sm-9 big">
					<?if($arRegion):?>
						<?=$arRegion['DETAIL_TEXT'];?>
					<?else:?>
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "front", Array("AREA_FILE_SHOW" => "file","PATH" => SITE_DIR."include/mainpage/company/front_info.php","EDIT_TEMPLATE" => ""));?>
					<?endif;?>
				</div>
			</div>			
		</div>
	<?endif;?>	
	<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
		array(
			"COMPONENT_TEMPLATE" => ".default",
			"PATH" => SITE_DIR."include/mainpage/comp_brands.php",
			"AREA_FILE_SHOW" => "file",
			"AREA_FILE_SUFFIX" => "",
			"AREA_FILE_RECURSIVE" => "Y",
			"EDIT_TEMPLATE" => "standard.php"
		),
		false
	);?>
</div>

<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => SITE_DIR."include/mainpage/comp_instagramm.php",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "",
		"AREA_FILE_RECURSIVE" => "Y",
		"EDIT_TEMPLATE" => "standard.php"
	),
	false
);?>