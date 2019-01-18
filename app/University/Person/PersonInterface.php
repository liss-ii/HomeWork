<?php
namespace University\Person;

interface PersonInterface
{

    /**
     * @param string $firstname
     */
    public function setFirstName($firstname);
    /**
     * @return string
     */
    public function getFirstName();
    /**
     * @param string $lastname
     */
    public function setLastName($lastname);
    /**
     * @return string
     */
    public function getLastName();
    /**
     * @param string $surname
     */
    public function setSurname($surname);
    /**
     * @return string
     */
    public function getSurname();
    /**
     * @param int $id
     */
    public function setId($id);
    /**
     * @return int
     */
    public function getId();

}