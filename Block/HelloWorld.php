<?php


namespace AHT\HelloWorld\Block;


class HelloWorld extends \Magento\Framework\View\Element\Template
{
 public function getConfig() {
     $store = \Mage::app()->getStore(); // store info
     $configValue = Mage::getStoreConfig('helloworld/general/my_image_field', $store);
     return $configValue;
 }
}
