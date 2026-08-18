<?php

class Person {
    private $name;
    private $age;
    private $gender;

    public function __construct($name, $age, $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function selfIntroduction() {
        if ($this->gender === 'm') {
            $genderText = '男性';
        } else {
            $genderText = '女性';
        }

        return '私は' . $this->name . '、' . $this->age . '才、' . $genderText . 'です。';
    }

    public function addAge() {
        $this->age++;
    }
}