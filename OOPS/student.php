<?php
class Student {
    public $name, $age, $course;
    public function construct($name, $age, $course) {
        $this->name = $name;
        $this->age = $age;
        $this->course = $course;
    }
    public function displayInfo() {
        echo "<h2>Student Details</h2>";
        echo "Name: " , $this->name , "<br>";
        echo "Age: " ,$this->age , "<br>";
        echo "Course: " , $this->course , "<br>";
    }
}

require 'Student.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $course = $_POST['course'];
    $student = new Student($name, $age, $course);
    $student->displayInfo();
} else {
    echo "Form  not submitted.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form action="process_student.php" method="POST">
       
        Name:<input type="text" id="name" name="name" ><br><br> 
        Age:<input type="number" id="age" name="age" ><br><br>
        Course:<input type="text" id="course" name="course" ><br><br>

        <button >Submit</button>
    </form>
</body>
</html>

