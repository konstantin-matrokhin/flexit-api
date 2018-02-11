<?php


namespace Kvlt\Flexit\Entity;

use Doctrine\ORM\Mapping\{
    Entity, Table, OneToOne, Id, Column, GeneratedValue
};

/**
 * @Entity
 * @Table(name = "auth")
 */
class AuthData {

    /**
     * @var int
     * @Id
     * @GeneratedValue
     * @Column(type = "integer")
     */
    private $id;

    /**
     * @var string
     * @Column(type = "string", length = 32, unique = false, nullable = true)
     */
    private $password;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var bool
     */
    private $emailConfirmed;

    /**
     * @var bool
     */
    private $phoneConfirmed;

    /**
     * @var string
     */
    private $registrationIp;

    /**
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getPassword(): string {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEmail(): string {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPhone(): string {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void {
        $this->phone = $phone;
    }

    /**
     * @return bool
     */
    public function isEmailConfirmed(): bool {
        return $this->emailConfirmed;
    }

    /**
     * @param bool $emailConfirmed
     */
    public function setEmailConfirmed(bool $emailConfirmed): void {
        $this->emailConfirmed = $emailConfirmed;
    }

    /**
     * @return bool
     */
    public function isPhoneConfirmed(): bool {
        return $this->phoneConfirmed;
    }

    /**
     * @param bool $phoneConfirmed
     */
    public function setPhoneConfirmed(bool $phoneConfirmed): void {
        $this->phoneConfirmed = $phoneConfirmed;
    }

    /**
     * @return string
     */
    public function getRegistrationIp(): string {
        return $this->registrationIp;
    }

    /**
     * @param string $registrationIp
     */
    public function setRegistrationIp(string $registrationIp): void {
        $this->registrationIp = $registrationIp;
    }

}