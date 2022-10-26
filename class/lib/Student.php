<?php
require_once 'Group.php';


class Student
{
    public static $handsCount = 2;

    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $age;
    /**
     * @var Group
     */
    private $group;

    /**
     * Student constructor.
     * @param string $name
     * @param int $age
     * @param Group $class
     */
    public function __construct(string $name, int $age, Group $class)
    {
        $this->name = $name;
        $this->age = $age;
        $this->group = $class;
        $this->group->addStudents($this);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age)
    {
        $this->age = $age;
    }

    /**
     * @return Group
     */
    public function getGroup(): Group
    {
        return $this->group;
    }

    /**
     * @param Group $group
     */
    public function setGroup(Group $group)
    {
        $this->group = $group;
        $this->group->addStudents($this);
    }

    private $cc = [
        'id' => 1
    ];

    public function __get($name)
    {
        $v = &$this->cc[$name];
        if (is_null($v)) {
            $func = 'get' . strtoupper(substr($name, 0, 1)) . substr($name, 1);
            if (method_exists($this, $func)) {
                $v = $this->$func();
            }
        }
        return $v ?: 'nf';
    }


}