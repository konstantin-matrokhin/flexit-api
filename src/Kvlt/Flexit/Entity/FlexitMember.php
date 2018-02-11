<?php


namespace Kvlt\Flexit\Entity;


use Doctrine\ORM\Mapping\{
    Entity, Id, Annotation, Column, Table, OneToOne, GeneratedValue, JoinColumn
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
     * @GeneratedValue
     */
    private $id;

    /**
     * @var string
     * @Column(type = "string", name = "player", unique = true, nullable = false)
     */
    private $name;

    /**
     * @var AuthData
     * @OneToOne(targetEntity = "AuthData", cascade = { "all" })
     * @JoinColumn(name = "id", referencedColumnName = "id")
     */
    private $authData;

    public function __construct() {
        $this->authData = new AuthData();
    }

    function getId(): int {
        return $this->id;
    }

    function getAuthData(): AuthData {
        return $this->authData;
    }

    function getName(): string {
        return $this->name;
    }

    function setName(string $name) {
        $this->name = $name;
    }

}