try with OOP 
    <?php
    class Fruit
    {
        public $name;
        public $color;

        //Methods
        function set_name($name)
        {
            $this->name = $name;
        }
        function set_color($color)
        {
            $this->color = $color;
        }

        function get_name()
        {
            return $this->name;
        }
        function get_color()
        {
            return $this->color;
        }
    }

    //Inheritance
    class Strawberry extends Fruit
    {
        public $weight;
        public function __construct($name, $color, $weight)
        {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }

        function get_weight()
        {
            return $this->weight;
        }
        function set_weight($weight)
        {
            $this->weight = $weight;
        }

        public function strawMessage()
        {
            echo "i am Straw son of fruit";
        }
    }


    $apple = new Fruit();
    $banana = new Fruit();

    $apple->set_name('apple');
    $apple->set_color('is green');
    $banana->set_name('banana');
    $banana->set_color('is yellow');
    echo "This is " . $apple->get_name();
    echo " " . $apple->get_color();
    echo "<br>";
    echo "This is " . $banana->get_name();
    echo " " . $banana->get_color();

    $strawberry = new Strawberry("Straw", "red", 45);
    echo "<br>My name:" . $strawberry->get_name() . "\tand my color: " . $strawberry->get_color() . "\tand my weight: " . $strawberry->get_weight();



    //class people
    class Rectangle
    {
        public $cd;
        public $cr;



        function __construct($cd, $cr)
        {
            $this->cd = $cd;
            $this->cr = $cr;
        }



        function set_cd($cd)
        {
            $this->cd = $cd;
        }
        function set_cr($cr)
        {
            $this->cr = $cr;
        }

        function get_cd()
        {
            return $this->cd;
        }

        function get_cr()
        {
            return $this->cr;
        }

        function dientich($cd, $cr)
        {
            return "Dien tich: " . $cd * $cr;
        }
    }

    $hv = new Rectangle(5, 2);
    echo"<br><br><br><br>Tính diện tích<br>";
    echo "Chieu dai: " . $hv->get_cd() . ", Chieu rong: " . $hv->get_cr();
    echo "<br>";
    echo $hv->dientich($hv->cd, $hv->cr);

    // Abstract Classes(Phuong thuc truu tuong)
    abstract class Car
    {
        public $name;
        public function __construct($name)
        {
            $this->name = $name;
        }
        //khai bao nhung khong viet code
        abstract public function intro(): string;
    }

    // Child classes
    class Audi extends Car
    {
        public function intro(): string
        {
            return "<br><br><br>Đây là phương thức trừu tượng:<br>Choose German quality! I'm an $this->name!";
        }
    }

    // Create objects from the child classes
    $audi = new audi("Audi");
    echo $audi->intro();
    echo "<br>";