<?php
include('../controller/Database.php');
class User
{
private $database=null;
    private ?int $id = null;

    private ?string $userName = null;


    private ?string $gender = null;

 
    private ?string $address = null;

    private ?string $email = null;


    private ?string $profilePicture = null;


    private Array $orders;


    private Array $review;

    private ?Account $account = null;
    private ?Database $databse=null;

    public function __construct(string $userName,string $gender,string $address,string $email,string $profilePicture)
    {
        // $this->database=Database::getInstance();
        $this->orders = array();
        $this->review = array();
$this->userName=$userName;
$this->gender=  $gender;
$this->address= $address;
$this->email=  $email;
$this->profilePicture= $profilePicture;
//$this->database->insertUser($this);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getProfilePicture(): ?string
    {
        return $this->profilePicture;
    }

    public function setProfilePicture(string $profilePicture): self
    {
        $this->profilePicture = $profilePicture;

        return $this;
    }

    /**
     * @return Collection<int, Order>
     */
    public function getOrders(): array
    {
        return $this->orders;
    }

    public function addOrder(Order $order): self
    {
        if (!array_search($order,$this->orders)) {
            array_push($this->orders,$order);
            $order->setUserbuyer($this);
        }

        return $this;
    }

    public function removeOrder(Order $order): self
    {
        if (array_slice($this->orders,array_search($order,$this->orders),1)) {    
            // set the owning side to null (unless already changed)
            if ($order->getUserbuyer() === $this) {
                $order->setUserbuyer(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Review>
     */
    public function getReview(): array
    {
        return $this->review;
    }

    public function addReview(Review $review): self
    {
        if (!array_search($review,$this->review)) {
            array_push($this->review,$review);
            $review->setUserReview($this);
        }

        return $this;
    }

    public function removeReview(Review $review): self
    {
        if (array_slice($this->review,array_search($review,$this->review),1)) {
            // set the owning side to null (unless already changed)
            if ($review->getUserReview() === $this) {
                $review->setUserReview(null);
            }
        }

        return $this;
    }

    public function getAccount(): ?Account
    {
        return $this->account;
    }

    public function setAccount(Account $account): self
    {
        // set the owning side of the relation if necessary
        if ($account->getUsername() !== $this) {
            $account->setUsername($this);
        }

        $this->account = $account;

        return $this;
    }
}
