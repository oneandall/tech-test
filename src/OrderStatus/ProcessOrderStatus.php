<?php


namespace TechnicalTest\OrderStatus;

use TechnicalTest\Email\EmailInterface;

class ProcessOrderStatus implements ProcessOrderStatusInterface
{
    /**
     * @var OrderStatusStorageInterface
     */
    protected $orderStatusStorage = null;

    public function __construct(OrderStatusStorageInterface $orderStatusStorage)
    {
        $this->orderStatusStorage = $orderStatusStorage;
    }

    public function extractOrderStatus(EmailInterface $email) : bool
    {
        $this->orderStatusStorage->store('1234', 'Accepted', new \DateTime('2021-05-25 08:38'));

        return true;
    }
}
