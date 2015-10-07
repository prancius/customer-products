
<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2015.09.09
 * Time: 12:45
 */
header('Content-Type: text/html; charset=utf-8');

require_once('./app/Mage.php');

//Mage::app();
//Mage::app('default');

//Pasiduoda store id
Mage::app();

echo "labas";

$products = Mage::getModel('catalog/product')->getCollection();

$products->addAttributeToSelect('name');

foreach($products as $product)
{
    echo $product->getName();
}

echo "Package: " . Mage::getSingleton('core/design_package')->getPackageName();
echo "Scheme: " . Mage::getSingleton('core/design_package')->getTheme('frontend');

?>

<!--<block type="orderedproducts/orderedproducts" name="orderedproducts_orderedproducts" template="orderedproducts/orderedproducts.phtml"></block>-->