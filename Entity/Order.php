<?php
class Order
{

    private ?int $id = null;


    private ?DateTime $orderDate = null;


    private ?string $orderStatus = null;


    private ?Items $items = null;


    private ?User $Userbuyer = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrderDate(): ?DateTime
    {
        return $this->orderDate;
    }

    public function setOrderDate(DateTime $orderDate): self
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    public function getOrderStatus(): ?string
    {
        return $this->orderStatus;
    }

    public function setOrderStatus(string $orderStatus): self
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    public function getItems(): ?Items
    {
        return $this->items;
    }

    public function setItems(?Items $items): self
    {
        $this->items = $items;

        return $this;
    }

    public function getUserbuyer(): ?User
    {
        return $this->Userbuyer;
    }

    public function setUserbuyer(?User $Userbuyer): self
    {
        $this->Userbuyer = $Userbuyer;

        return $this;
    }
}
