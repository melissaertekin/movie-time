<?php

class User {
    private int $id;
    private string $email;
    private string $password;
    private string $username;
    private int $admin;

    public function __construct($credentials)
    {
        $this->id = $credentials['id'];
        $this->username = $credentials['username'];
        $this->email = $credentials['email'];
        $this->password = $credentials['password'];
        $this->admin = $credentials['admin_val'];
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return int
     */
    public function getAdmin(): int
    {
        return $this->admin;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }





}
