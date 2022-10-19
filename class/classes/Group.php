<?php

class Group
{
    private $title;
    private $students;

    /**
     * @param $title
     * @param array|Student[] $students
     */
    public function __construct($title, array $students = [])
    {
        $this->title = $title;
        $this->students = $students;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return array|Student[]
     */
    public function getStudents(): array
    {
        return $this->students;
    }

    /**
     * @param array|Student[] $students
     */
    public function setStudents(array $students)
    {
        $this->students = $students;
    }

    /**
     * @param array|Student[]|Student $students
     */
    public function addStudents($students)
    {
        if (is_array($students)) {
//            foreach ($students as $i => $student) {
//                $this->students[] = $student;
//            }
            $this->students = array_merge($this->students, $students);
//            $this->students += $students;
        } else {
            $this->students[] = $students;
        }
    }

}