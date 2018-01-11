<?php

/**
 * Description of Student
 * @author Will
 */
class Student {

    /**
     * Contructor
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /**
     * Adds email for a student
     * @param which Where the email goes in the email array
     * @param address The email address
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    /**
     * Add a grade to a student.
     * @param grade The grade to add.
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /**
     * Calculates the average grade of a student.
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
        return $total / count($this->grades);
    }

    /**
     * Converts a student object into its string representation.
     * @return String The student object formatted into a string.
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average().")\n";
        foreach ($this->emails as $which => $what) {
            $result .= $which . ': ' . $what . "\n";
        }
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }
}