<?php
class Account
{
    private $database=null;
    private ?int $id = null;

   
    private ?string $password = null;

    private ?User $userName = null;
    public function __construct(User $userName,$password)
    {
        $this->database=Database::getInstance();
        $this->userName=$userName;
        $this->password=$password;
$username_id=$this->database->insertUser($userName);

$this->database->addAccount($this,$username_id);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getUsername(): ?User
    {
        return $this->userName;
    }

    public function setUsername(User $userName): self
    {
        $this->userName = $userName;

        return $this;
    }
}
