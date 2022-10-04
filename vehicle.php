
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
            //getters y setters
            public function getMarca()
            {
                return $this->marca;
            }

            public function setMarca($marca)
            {
                $this->marca = $marca;
            }

            public function getModel()
            {
                return $this->model;
            }

            public function setModel($model)
            {
                $this->model = $model;
            }

            public function getPreu()
            {
                return $this->preu;
            }

            public function setPreu($preu)
            {
                $this->preu = $preu;
            }


            public function getCavalls()
            {
                return $this->cavalls;
            }

            public function setCavalls($cavalls)
            {
                $this->cavalls = $cavalls;
            }


            public function getAny()
            {
                return $this->any;
            }

            public function setAny($any)
            {
                $this->any = $any;
            }

            //Metodos

            function kmRecorregut()
            {
                return rand(0.100);
            }

            function vehicleCreat()
            {
                return "Model:  {$this->model} Cavalls: {$this->cavalls}";
            }
        }
         }

            ?>
