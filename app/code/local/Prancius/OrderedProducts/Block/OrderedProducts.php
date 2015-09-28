<?php
/**
 * Created by PhpStorm.
 * User: prancius
 * Date: 2015-09-28
 * Time: 09:35
 */

class Prancius_OrderedProducts_Block_OrderedProducts extends Mage_Core_Block_Template
{
    public function getRecentProducts()
    {
        // call model to fetch data
        $arr_products = array();
        $products = Mage::getModel("orderedproducts/orderedproducts")->getOrderedProducts();

    foreach ($products as $product)
    {
        $arr_products[] = array('id' => $product-­>getId(),'name' => $product->getName(),'url' => $product->getProductUrl(),);
    }

    return $arr_products;
  }
}