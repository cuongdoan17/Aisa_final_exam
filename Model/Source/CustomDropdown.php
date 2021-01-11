<?php


namespace AHT\HelloWorld\Model\Source;


class CustomDropdown extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{

    /**
     * @return array
     */
    public function getAllOptions()
    {
        if ($this->_options === null) {
            $this->_options = [
                ['label' => __('--Select--'), 'value' => ''],
                ['label' => __('Option 1'), 'value' => 1],
                ['label' => __('Option 2'), 'value' => 2]
            ];
        }
        return $this->_options;
    }
}
