<?php


namespace Kvlt\Flexit\Models;

use Doctrine\ORM\Mapping\{
    Entity, Table, OneToOne, Id, Column, GeneratedValue, Embeddable, Embedded
};

/**
 * @Entity
 * @Table(name = "auth")
 * @Embeddable
 *
 */
class AuthData {

    /**
     * @var int
     * @Id
     * @Column(type = "integer")
     * @GeneratedValue(strategy = "IDENTITY")
     */
    private $idAuth;

    /**
     * @var string
     * @Column(type = "string", length = 32, unique = false, nullable = true)
     */
    private $password;

    /**
     * @var string
     * @Column(type = "string", length = 32, unique = false, nullable = true)
     */
    private $email;

    /**
     * @var string
     * @Column(type = "string", length = 16, unique = true, nullable = true)
     */
    private $phone;

    /**
     * @var bool
     * @Column(type = "boolean", unique = false, nullable = false)
     */
    private $emailConfirmed = false;

    /**
     * @var bool
     * @Column(type = "boolean", unique = false, nullable = false)
     */
    private $phoneConfirmed = false;

    /**
     * @var string
     * @Column(type = "string", unique = false, nullable = true)
     */
    private $registrationIp;

    public function getIdAuth(): int {
        return $this->idAuth;
    }

    public function setIdAuth(int $idAuth): void {
        $this->idAuth = $idAuth;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function setPassword(string $password): void {
        $this->password = $password;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function getPhone(): string {
        return $this->phone;
    }

    public function setPhone(string $phone): void {
        $this->phone = $phone;
    }

    public function isEmailConfirmed(): bool {
        return $this->emailConfirmed;
    }

    public function setEmailConfirmed(bool $emailConfirmed): void {
        $this->emailConfirmed = $emailConfirmed;
    }

    public function isPhoneConfirmed(): bool {
        return $this->phoneConfirmed;
    }

    public function setPhoneConfirmed(bool $phoneConfirmed): void {
        $this->phoneConfirmed = $phoneConfirmed;
    }

    public function getRegistrationIp(): string {
        return $this->registrationIp;
    }

    public function setRegistrationIp(string $registrationIp): void {
        $this->registrationIp = $registrationIp;
    }

}