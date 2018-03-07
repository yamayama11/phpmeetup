<?php

namespace Acme\Support;

use Faker\Factory;

class Utils
{

    private function println(string ...$str)
    {
        $eol = php_sapi_name() === 'cli' ? PHP_EOL : "<br/>";
        print implode(" ", $str) . $eol;
    }


    public function printRandomAddress()
    {
        $faker = Factory::create();
        $this->println("");
        $this->println("Fake address:");
        $this->println("=============");
        $this->println($faker->firstName, $faker->lastName);
        $this->println($faker->streetName, $faker->numberBetween(1, 999));
        $this->println($faker->postcode, $faker->city);
        $this->println($faker->country);
    }
}