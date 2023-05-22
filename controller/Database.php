<?php 
class Database {
  private   $userName="root";
  private    $password="";
  private   $server="127.0.0.1";
  private    $db="ecomerce";
  private   $conn=null;
private static ?self $instance=null;
private function __construct(){  
    $this->conn=new mysqli($this->server,$this->userName,$this->password);
    if ($this->conn->error) {
        die("Connection failed: " . $this->conn->error);
    }
    
    // Check if database exists
    if (mysqli_select_db($this->conn, $this->db)) {
        echo "Database exists";
}
    else {
        $this->conn->query('create database '.$this->db);
        $sql="CREATE TABLE account (id INT AUTO_INCREMENT NOT NULL, username_id INT NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_7D3656A4ED766068 (username_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
    CREATE TABLE catagory (id INT AUTO_INCREMENT NOT NULL, item_id INT NOT NULL, INDEX IDX_F3CCBF01126F525E (item_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
    CREATE TABLE items (id INT AUTO_INCREMENT NOT NULL, item_name VARCHAR(255) NOT NULL, item_description VARCHAR(255) NOT NULL, item_price DOUBLE PRECISION NOT NULL, item_picture VARCHAR(255) NOT NULL, item_edited_price DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB';
    CREATE TABLE `order` (id INT AUTO_INCREMENT NOT NULL, items_id INT NOT NULL, userbuyer_id INT NOT NULL, order_date DATE NOT NULL, order_status VARCHAR(255) NOT NULL, INDEX IDX_F52993986BB0AE84 (items_id), INDEX IDX_F52993984030A855 (userbuyer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB';
    CREATE TABLE review (id INT AUTO_INCREMENT NOT NULL, user_review_id INT DEFAULT NULL, item_id INT DEFAULT NULL, review VARCHAR(255) NOT NULL, ranking VARCHAR(255) NOT NULL, review_date DATE NOT NULL, INDEX IDX_794381C63ECE1B7F (user_review_id), INDEX IDX_794381C6126F525E (item_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB';
    CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, user_name VARCHAR(255) NOT NULL, gender VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, email VARCHAR(255) DEFAULT NULL, profile_picture VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB';
    ALTER TABLE account ADD CONSTRAINT FK_7D3656A4ED766068 FOREIGN KEY (username_id) REFERENCES `user` (id);
    ALTER TABLE catagory ADD CONSTRAINT FK_F3CCBF01126F525E FOREIGN KEY (item_id) REFERENCES items (id);
    ALTER TABLE `order` ADD CONSTRAINT FK_F52993986BB0AE84 FOREIGN KEY (items_id) REFERENCES items (id);
    ALTER TABLE `order` ADD CONSTRAINT FK_F52993984030A855 FOREIGN KEY (userbuyer_id) REFERENCES `user` (id);
    ALTER TABLE review ADD CONSTRAINT FK_794381C63ECE1B7F FOREIGN KEY (user_review_id) REFERENCES `user` (id);
    ALTER TABLE review ADD CONSTRAINT FK_794381C6126F525E FOREIGN KEY (item_id) REFERENCES items (id);";
   $this->conn->multi_query($sql);
    } 
}
public static function getInstance (): self{
if(self::$instance===null){
self::$instance=new Database();

}
return self::$instance;
}


public function insertUser(User $user): int{
    $sql='insert into user(user_name,gender,address,email,profile_picture) values(?,?,?,?,?)';
    $statement=$this->conn->prepare($sql);
    $statement->bind_param('sssss',$userName,$gender,$address,$email,$profilePicture);
    $userName=$user->getUserName();
    $gender=$user->getGender();
    $address=$user->getAddress();
    $email=$user->getEmail();
    $profilePicture=$user->getProfilePicture();
    $statement->execute();
    $last_id = $this->conn->insert_id;
    return  $last_id;
}
public function addAccount(Account $account,int $username_id){
    $sql='insert into account(username_id,password) values(?,?)';
    $statement=$this->conn->prepare($sql);
    $statement->bind_param('is',$username_id,$password);
    $password=md5($account->getPassword());
    $statement->execute();

}
public function AuthenticateUser($userName,$password) :bool{
$sql='SELECT account.password, user.user_name,user.profile_picture
FROM account
JOIN user ON account.username_id = user.id where user.user_name=? and account.password=?';
$statement=$this->conn->prepare($sql);
$statement->bind_param('ss',$userName,$password);
$password=md5($password);
$statement->execute();
$result=$statement->get_result();
if($result->num_rows > 0){
$rows=$result->fetch_assoc();
session_start();
$_SESSION['profilePicture']=$rows['profile_picture'];
    return true;
}
return false;
}

public function AuthenticateGoogleUser($userName): bool{
$sql='select user_name from user where user_name=?';
$statement=$this->conn->prepare($sql);
$statement->bind_param('s',$userName);
$result=$statement->get_result();
if($result->num_rows > 0){
return true;
}
return false;
}

}



