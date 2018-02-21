<?php
class commodity {
    protected $category = "poka null :)";
    protected $name;
    protected $code;
    protected $description;
    protected $price;
    protected $availability = false;

    public function setName ($name){
        $this->name = $name;
    }
    public function setDescription ($description){
        $this->description = $description;
    }
    public function setPrice ($price){
        $this->price = $price;
    }
    public function setCode ($code){
        $this->code = $code;
    }
    public function setAvailability ($availability){
        $this->availability = $availability;
    }
    public function setCategory ($category){
        $this->category = $category;
    }

    public function getName (){
        return $this->name;
    }
    public function getDescription (){
        return $this->description;
    }
    public function getPrice (){
        return $this->price;
    }
    public function getCode (){
        return $this->code;
    }
    public function getAvailability (){
        return $this->availability;
    }
    public function getCategory (){
        return $this->category;
    }
}
class tovDb extends commodity{

    function setTovdb ($name, $code, $description, $price, $availability){
        //self::setCategory($category);
        self::setName($name);
        self::setCode($code);
        self::setDescription($description);
        self::setPrice($price);
        self::setAvailability($availability);
        $link = mysqli_connect('127.0.0.1:3306', 'root', '');
        mysqli_query($link, "INSERT INTO sanbd.tov(`category`, `name`, `code`, `description`, `price`, `availability`) VALUES ('" . $this->category . "','" . $this->name . "','" . $this->code . "','" . $this->description . "', '" . $this->price . "', '" . $this->availability . "')");
        mysqli_close($link);
        header('Location: /index.php');
    }
    function redactTovdb ($name, $code, $description, $price, $availability, $id){
        //self::setCategory($category);
        $idTov = $id;
        self::setName($name);
        self::setCode($code);
        self::setDescription($description);
        self::setPrice($price);
        self::setAvailability($availability);
        $link = mysqli_connect('127.0.0.1:3306', 'root', '');
        mysqli_query($link, "UPDATE sanbd.tov SET `name`='" . $this->name . "', `code`='" . $this->code . "', `description`='" . $this->description . "', `price`='" . $this->price . "', `availability`='" . $this->availability . "' WHERE `id`=" .$idTov);
        mysqli_close($link);
        header('Location: /index.php');
    }
}