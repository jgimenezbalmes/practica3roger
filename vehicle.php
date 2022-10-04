
        <?php
        class Vehicle
        {
            //Atributs
            private $marca;
            private $model;
            private $preu;
            private $cavalls;
            private $any;

            //Constructors
            function __construct1()
            {
            }

            function __construct2($marca, $model, $preu, $cavalls, $any)
            {
                $this->marca = $marca;
                $this->model = $model;
                $this->preu = $preu;
                $this->cavalls = $cavalls;
                $this->any = $any;
            }

            function __construct3($marca, $model, $cavalls)
            {
                $this->marca = $marca;
                $this->model = $model;
                $this->cavalls = $cavalls;
            }
            //tostring 
            function __toString()
            {
                return "Marca: {$this->marca}, Model {$this->model} Preu {$this->preu} cavalls {$this->cavalls} any {$this->any}";
            }
        }
            ?>
