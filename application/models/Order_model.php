<?php 
/**
 * Order model class.
 *
 * @author klkuo <davidkuo104@gmail.com>
 */
class Order_model extends CI_Model
{
    /**
     * Constructor.
     *
     * @author klkuo <davidkuo104@gmail.com>
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Add new order.
     *
     * @param array $orderData Order data.
     *
     * @author klkuo <davidkuo104@gmail.com>
     */
    public function addOrder($orderData)
    {
    }

    /**
     * Set order data by id.
     *
     * @param string $orderId   Order uniq ID.
     * @param array  $orderData Order data.
     *
     * @author klkuo <davidkuo104@gmail.com>
     */
    public function setOrderById($orderId, $orderData)
    {
    }

    /**
     * Get order data by id.
     *
     * @param string $orderId   Order uniq ID.
     *
     * @author klkuo <davidkuo104@gmail.com>
     */
    public function getOrderById($orderId)
    {
    }

    /**
     * Get order listing data.
     *
     * @author klkuo <davidkuo104@gmail.com>
     */
    public function getOrderList()
    {
    }
}
