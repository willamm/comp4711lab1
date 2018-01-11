<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    include ('Student.php');

    $students = array();
    
    //Create first student and add it to the students array
    $first = new Student();
    $first->surname = "Doe";
    $first->first_name = "John";
    $first->add_email('home','john@doe.com');
    $first->add_email('work','jdoe@mcdonalds.com');
    $first->add_grade(65);
    $first->add_grade(75);
    $first->add_grade(55);
    $students['j123'] = $first;

    //Second student
    $second = new Student();
    $second->surname = "Einstein";
    $second->first_name = "Albert";
    $second->add_email('home','albert@braniacs.com');
    $second->add_email('work1','a_einstein@bcit.ca');
    $second->add_email('work2','albert@physics.mit.edu');
    $second->add_grade(95);
    $second->add_grade(80);
    $second->add_grade(50);
    $students['a456'] = $second;

    //Order students by first name
    ksort($students);

    foreach ($students as $student) {
        echo $student->toString();
    }
    ?>
</body>
</html>