<?php
/**
 * Created by PhpStorm.
 * User: prancius
 * Date: 2015-09-28
 * Time: 11:26
 */

/*
* Controller class has to be inherited from Mage_Core_Controller_action
*/
class Prancius_OrderedProducts_IndexController extends Mage_Core_Controller_Front_Action
{

    /*
    * this method privides default action.
    */
    public function indexAction()
    {
        /*
        * Initialization of Mage_Core_Model_Layout model
        */
        $this->loadLayout();

        /*
        * Building page according to layout confuration
        */
        $this->renderLayout();
    }

    public function multiplyAction()
    {
        $this->loadLayout();
        $this->renderLayout();

        //echo "Labas";
        //die();
    }
}