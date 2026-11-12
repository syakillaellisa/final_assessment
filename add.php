<?php
include "header.php";
include "db.php";

if (isset($_POST['submit'])) {

    $student_name = $_POST['student_name'];
    $matric_no = $_POST['matric_no'];
    $subject_name = $_POST['subject_name'];
    $subject_code = $_POST['subject_code'];
    $test_1 = $_POST['test_1'];
    $test_2 = $_POST['test_2'];
    $final = $_POST['final'];

    $total = $test_1 + $test_2 + $final;

    if ($total >= 80) {
        $grade = 'A';
    } elseif ($total >= 65) {
        $grade = 'B';
    } elseif ($total >= 50) {
        $grade = 'C';
    } elseif ($total >= 45) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }

    $sql = $conn->prepare("INSERT INTO resultS
(student_name, matric_no, subject_code, subject_name, test_1, test_2, final, total, grade) VALUES
('$student_name', '$matric_no', '$subject_code', '$subject_name', '$test_1', '$test_2', '$final', '$total', '$grade')");

    if ($sql->execute()) {
        header("Location: index.php");
    }
}

$student_name = "";
$matric_no = "";
$subject_name = "";
$subject_code = "";
$test_1 = "";
$test_2 = "";
$final = "";
?>
<h2>Add Results</h2>
<?php
include "form.php";
include "footer.php";

?>

