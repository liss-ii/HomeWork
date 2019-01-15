<?php

namespace University\Person;

class Person
{

/* @var string
*/
    private $firstname;

    /* @var string
     */
    private $lastname;

    /* @var string
     */
    private $surname;


/* @return string
*/
    public function getName()
    {
        //$this->firstname = 'ddddddd';
        return $this->firstname.' '.$this->lastname.' '.$this->surname;
    }

/* @param string $firstname, $lastname,$surname
*/
    public function setName($firstname, $lastname, $surname)
    {
        $this->firstname = $firstname;
        $this->lastname  = $lastname;
        $this->surname   = $surname;
    }


}
?>