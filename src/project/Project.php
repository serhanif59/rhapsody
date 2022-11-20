<?php

namespace App;

use App\project\database\Database;

class Project
{
    private string $name;

    private ?Database $database;

    public function __construct(?string $name)
    {
        if (!$name)
            $name = "newProject" . date("y.m.d");
        $this->name = $name;
    }

    public function hasDatabase(): bool
    {
        return $this->getDatabase() ? true : false;
    }

    public function createDatabase(string $name): void
    {
        $this->database = new Database($name);
    }




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
     * Get the value of database
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Set the value of database
     *
     * @return  self
     */
    public function setDatabase($database)
    {
        $this->database = $database;

        return $this;
    }
}
