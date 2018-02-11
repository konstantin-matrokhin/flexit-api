<?php


namespace Kvlt\Flexit\Models;

use Doctrine\ORM\Mapping\{
    Entity, Id, Annotation, Column, Table, OneToOne, GeneratedValue, JoinColumn, JoinTable, Embeddable,
    Embedded
};

/**
 * @Entity
 * @Table(name = "players")
 */
class FlexitMember implements Member {

    /**
     * @var int
     * @Id
     * @Column(type = "integer")
     */
    private $id;

    /**
     * @var string
     * @Column(type = "string", name = "player", unique = true, nullable = false)
     */
    private $name;

    /**
     * @var AuthData
     * @Embedded(class = "AuthData", columnPrefix = false)
     */
    private $authData;

//    /**
//     * @var Economy
//     * @OneToOne(targetEntity = "Economy", cascade = { "all" })
//     */
    private $economy;

    public function __construct() {
        $this->authData = new AuthData();
    }

    public function getId(): int {
        return $this->id;
    }

    public function getAuthData(): AuthData {
        return $this->authData;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getEconomy(): Economy {
        return $this->economy;
    }

    public function setEconomy(Economy $economy): void {
        $this->economy = $economy;
    }

}