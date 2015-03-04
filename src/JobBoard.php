<?php
    class JobOpening
    {
        public $title;
        public $description;
        public $contact;
        public $salary;

        function __construct($title1, $description1, $contact1, $salary1)
        {
            $this->title = $title1;
            $this->description = $description1;
            $this->contact = $contact1;
            $this->salary = $salary1;
        }

        function setTitle($new_title)
        {
            $this->title = $new_title;
        }

        function getTitle()
        {
            return $this->title;
        }

        function setDescription($new_description)
        {
            $this->description = $new_description;
        }

        function getDescription()
        {
            return $this->description;
        }

        function setContact($new_contact)
        {
            $this->contact = $new_contact;
        }

        function getContact()
        {
            return $this->contact;
        }

        function setSalary($new_salary)
        {
            $this->salary = $new_salary;
        }

        function getSalary()
        {
            return $this->salary;
        }
    }
?>
