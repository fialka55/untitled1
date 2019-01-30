<?php
namespace MA\Catalog;

use Bitrix\Main,
	Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

/**
 * Class ProductSetsTable
 * 
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> TYPE int mandatory
 * <li> SET_ID int mandatory
 * <li> ACTIVE string(1) mandatory
 * <li> OWNER_ID int mandatory
 * <li> ITEM_ID int mandatory
 * <li> QUANTITY double optional
 * <li> MEASURE int optional
 * <li> DISCOUNT_PERCENT double optional
 * <li> SORT int optional default 100
 * <li> CREATED_BY int optional
 * <li> DATE_CREATE datetime optional
 * <li> MODIFIED_BY int optional
 * <li> TIMESTAMP_X datetime optional
 * <li> XML_ID string(255) optional
 * </ul>
 *
 * @package MA\Catalog
 **/

class ProductSetsTable extends Main\Entity\DataManager
{
	/**
	 * Returns DB table name for entity.
	 *
	 * @return string
	 */
	public static function getTableName()
	{
		return 'b_catalog_product_sets';
	}

	/**
	 * Returns entity map definition.
	 *
	 * @return array
	 */
	public static function getMap()
	{
		return array(
			'ID' => array(
				'data_type' => 'integer',
				'primary' => true,
				'autocomplete' => true,
				'title' => Loc::getMessage('PRODUCT_SETS_ENTITY_ID_FIELD'),
			),
			'TYPE' => array(
				'data_type' => 'integer',
				'required' => true,
				'title' => Loc::getMessage('PRODUCT_SETS_ENTITY_TYPE_FIELD'),
			),
			'SET_ID' => array(
				'data_type' => 'integer',
				'required' => true,
				'title' => Loc::getMessage('PRODUCT_SETS_ENTITY_SET_ID_FIELD'),
			),
			'ACTIVE' => array(
				'data_type' => 'string',
				'required' => true,
				'validation' => array(__CLASS__, 'validateActive'),
				'title' => Loc::getMessage('PRODUCT_SETS_ENTITY_ACTIVE_FIELD'),
			),
			'OWNER_ID' => array(
				'data_type' => 'integer',
				'required' => true,
				'title' => Loc::getMessage('PRODUCT_SETS_ENTITY_OWNER_ID_FIELD'),
			),
			'ITEM_ID' => array(
				'data_type' => 'integer',
				'required' => true,
				'title' => Loc::getMessage('PRODUCT_SETS_ENTITY_ITEM_ID_FIELD'),
			),
			'QUANTITY' => array(
				'data_type' => 'float',
				'title' => Loc::getMessage('PRODUCT_SETS_ENTITY_QUANTITY_FIELD'),
			),
			'MEASURE' => array(
				'data_type' => 'integer',
				'title' => Loc::getMessage('PRODUCT_SETS_ENTITY_MEASURE_FIELD'),
			),
			'DISCOUNT_PERCENT' => array(
				'data_type' => 'float',
				'title' => Loc::getMessage('PRODUCT_SETS_ENTITY_DISCOUNT_PERCENT_FIELD'),
			),
			'SORT' => array(
				'data_type' => 'integer',
				'title' => Loc::getMessage('PRODUCT_SETS_ENTITY_SORT_FIELD'),
			),
			'CREATED_BY' => array(
				'data_type' => 'integer',
				'title' => Loc::getMessage('PRODUCT_SETS_ENTITY_CREATED_BY_FIELD'),
			),
			'DATE_CREATE' => array(
				'data_type' => 'datetime',
				'title' => Loc::getMessage('PRODUCT_SETS_ENTITY_DATE_CREATE_FIELD'),
			),
			'MODIFIED_BY' => array(
				'data_type' => 'integer',
				'title' => Loc::getMessage('PRODUCT_SETS_ENTITY_MODIFIED_BY_FIELD'),
			),
			'TIMESTAMP_X' => array(
				'data_type' => 'datetime',
				'title' => Loc::getMessage('PRODUCT_SETS_ENTITY_TIMESTAMP_X_FIELD'),
			),
			'XML_ID' => array(
				'data_type' => 'string',
				'validation' => array(__CLASS__, 'validateXmlId'),
				'title' => Loc::getMessage('PRODUCT_SETS_ENTITY_XML_ID_FIELD'),
			),
		);
	}
	/**
	 * Returns validators for ACTIVE field.
	 *
	 * @return array
	 */
	public static function validateActive()
	{
		return array(
			new Main\Entity\Validator\Length(null, 1),
		);
	}
	/**
	 * Returns validators for XML_ID field.
	 *
	 * @return array
	 */
	public static function validateXmlId()
	{
		return array(
			new Main\Entity\Validator\Length(null, 255),
		);
	}
}