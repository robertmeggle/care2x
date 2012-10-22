<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CareBillingItem
 *
 * InnoDB free: 3072 kB
 *
 * @ORM\Entity(repositoryClass="CareBillingItemRepository")
 * @ORM\Table(name="care_billing_item")
 */
class CareBillingItem
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=50)
     */
    protected $item_code;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $item_description;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    protected $item_unit_cost;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $item_type;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $item_discount_max_allowed;

    public function __construct()
    {
    }

    /**
     * Set the value of item_code.
     *
     * @param string $item_code
     * @return \Entity\CareBillingItem
     */
    public function setItemCode($item_code)
    {
        $this->item_code = $item_code;

        return $this;
    }

    /**
     * Get the value of item_code.
     *
     * @return string
     */
    public function getItemCode()
    {
        return $this->item_code;
    }

    /**
     * Set the value of item_description.
     *
     * @param string $item_description
     * @return \Entity\CareBillingItem
     */
    public function setItemDescription($item_description)
    {
        $this->item_description = $item_description;

        return $this;
    }

    /**
     * Get the value of item_description.
     *
     * @return string
     */
    public function getItemDescription()
    {
        return $this->item_description;
    }

    /**
     * Set the value of item_unit_cost.
     *
     * @param float $item_unit_cost
     * @return \Entity\CareBillingItem
     */
    public function setItemUnitCost($item_unit_cost)
    {
        $this->item_unit_cost = $item_unit_cost;

        return $this;
    }

    /**
     * Get the value of item_unit_cost.
     *
     * @return float
     */
    public function getItemUnitCost()
    {
        return $this->item_unit_cost;
    }

    /**
     * Set the value of item_type.
     *
     * @param string $item_type
     * @return \Entity\CareBillingItem
     */
    public function setItemType($item_type)
    {
        $this->item_type = $item_type;

        return $this;
    }

    /**
     * Get the value of item_type.
     *
     * @return string
     */
    public function getItemType()
    {
        return $this->item_type;
    }

    /**
     * Set the value of item_discount_max_allowed.
     *
     * @param integer $item_discount_max_allowed
     * @return \Entity\CareBillingItem
     */
    public function setItemDiscountMaxAllowed($item_discount_max_allowed)
    {
        $this->item_discount_max_allowed = $item_discount_max_allowed;

        return $this;
    }

    /**
     * Get the value of item_discount_max_allowed.
     *
     * @return integer
     */
    public function getItemDiscountMaxAllowed()
    {
        return $this->item_discount_max_allowed;
    }

    public function __sleep()
    {
        return array('item_code', 'item_description', 'item_unit_cost', 'item_type', 'item_discount_max_allowed');
    }
}