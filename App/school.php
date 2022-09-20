<?php

namespace App\Objects;

    class School {
        public string $town;
        public string $name;
        public function_construct(string $name,string $town) {
            $this->name = $name;
            $this->town = $town;
        }

        public function getName():string {
        return $this->name;
    }
    public function setName(string $name) {
        $this->name = $name;
    }

    public function getTown():string {
        return $this->town;
    }
    public function setTown(string $town) {
        $this->town = $town;
    }

    }

?>