<?php
/**
 * Created by PhpStorm.
 * User: prancius
 * Date: 2015-09-28
 * Time: 09:31
 */

// app/code/local/Envato/Recentproducts/Model/Recentproducts.php
class Prancius_OrderedProducts_Model_OrderedProduts extends Mage_Core_Model_Abstract
{
    public function getOrderedProducts()
    {
        $products = Mage::getModel("catalog/product")->getCollection()->addAttributeToSelect('*')->setOrder('entity_id', 'DESC')->setPageSize(5);
        return $products;
    }
}