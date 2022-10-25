<?php

namespace App\Model;

use App\DAO\ClientDAO;

class Client 
{
    private $name,$email,$phone,$phone2;
    /** All clients from database. */
    public $rows;
    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of phone2
     */ 
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * Set the value of phone2
     *
     * @return  self
     */ 
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;

        return $this;
    }


    public function save()
    {
        $dao = new ClientDAO();
        $dao->insert($this);
    }
    public function getAllRows()
    {
        $dao = new ClientDAO();
        $this->rows = $dao->selectAll();
    }
    public function update()
    {

    }
    public function edit()
    {

    }















}