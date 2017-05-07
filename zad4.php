<?php

class MyDate{
    private $day; //Wartość pomiędzy 0-31 nie powinna wychodzić pomiędzy te zakresy. Dla uproszczenia możesz założyć że każdy miesiąc ma 31 dni.
    private $month; //Wartość pomiędzy 0-12 nie powinna wychodzić pomiędzy te zakresy 
    private $year; //Wartość większa niż 0
    
    const MyDate = date(01-01-2000);
    
    public function moveForwardByDay(){
       if ($this->year = true && $this->day = true && $this->month = true) {
           return $this->day += 1;
       }
        
    }
    
    public function __construct() {
        self::MyDate;
    }
    
    public function getDay() {
        return $this->day;
    }
    
    public function getMonth() {
        return $this->month;
    }
    
    public function getDay() {
        return $this->year;
    }
    
    public function setDay() {
        if (is_integer($this->day) && $this->day >= 1 && $this->day <= 31) {
            $this->day = $day;
        }
    }
    public function setMonth() {
        if (is_integer($this->month) && $this->month >= 1 && $this->month <= 12) {
            $this->month = $month;
        }
    }
    public function setYear() {
        if (is_integer($this->year) && $this->year >= 1) {
            $this->year = $year;
        }
    }
    
}
