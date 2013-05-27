<?php

class EbayShippingLocation
{
	public static function getEbayShippingLocations()
	{
		return Db::getInstance()->ExecuteS('SELECT * 
			FROM '._DB_PREFIX_.'ebay_shipping_location');
	}
	
	public static function getTotal()
	{
		return Db::getInstance()->getValue('SELECT COUNT(*) AS nb 
			FROM '._DB_PREFIX_.'ebay_delivery_time_options');
	}
	
	public static function insert($data)
	{
		return Db::getInstance()->autoExecute(_DB_PREFIX_.'ebay_shipping_location', $data, 'INSERT');
	}
}