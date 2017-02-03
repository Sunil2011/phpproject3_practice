<?php
namespace ath1;
class Author {
     public $firstName;
     public $lastName;
     
    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
 
    public function getFirstName() {
        return $this->firstName;
    }
 
    public function getLastName() {
        return $this->lastName;
    }
}
 
class Question {
     public $author;
     public $question;
 
    public function __construct($question, Author $author) {
        $this->author = $author;
        $this->question = $question;
    }
 
    public function getAuthor() {
        return $this->author;
    }
 
    public function getQuestion() {
       return $this->question;
    }
}

$athr = new Author("sunil","Kumar");
$quest = new Question("Who is auther ? ", $athr);
print_r($quest->question);
echo '<br>';
$x = $quest->getQuestion();
echo $x,'<br>';
print_r($quest->getAuthor());
echo '<br>';
print_r($quest->author);

echo '<hr>';
//---- above one is example of dependency injection----

namespace ath2;
class Author {
    public $firstName;
    public $lastName;
 
    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
 
    public function getFirstName() {
        return $this->firstName;
    }
 
    public function getLastName() {
        return $this->lastName;
    }
}
 
class Question {
     public $author;
     public $question;
    public function __construct($question, $authorFirstName, $authorLastName) {
        $this->author = new Author($authorFirstName, $authorLastName);
        $this->question = $question;
    }
 
    public function getAuthor() {
        return $this->author;
    }
 
    public function getQuestion() {
        return $this->question;
    }
}

//$athr = new Author("sunil","Kumar");
$quest = new Question("Who is auther ? ", "ABC","XYZ");
print_r($quest->question);
echo '<br>';
$x = $quest->getQuestion();
echo $x,'<br>';
print_r($quest->getAuthor());
echo '<br>';
print_r($quest->author);