<?php

class UserData{
    public $name;
    public $id;
    const NAME = 'Abuhena Rony';   // which cannot be modify
    public static $varsity;   // always public
    public function __construct($n, $i)
    {
        $this->name = $n;
        $this->id = $i;
        echo "Username is {$this->name} and userid is {$this->id}".'<br>';
        echo "Full name is ".UserData::NAME;  // calling constant variable
    }
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        unset($this->name);
        unset($this->id);
    }

    /**
     * @return mixed
     */
    public static function display()
    {
        echo 'University name is '.self::$varsity;  // calling static variable
        return;
    }
}
$un = 'Rony';
$ui = 17254723996;

$user1 = new UserData($un, $ui);
UserData::display();   // calling static function