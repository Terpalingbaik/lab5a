<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = "Mohamad Mustaqim bin Mohd Shukri";
        $matricNumber = "A1220236";
        $course = "Computer Science in Information Security";
        $yearOfStudy = "3rd Year";
        $address = "E14, Felda Sendayan,71950, Seremban, Negeri Sembilan";
    ?>

    <table border="1" cellpadding="5">
        <tr>
            <td><strong>Name</strong></td>
            <td><?php echo $name; ?></td> 
        </tr>
        <tr>
            <td><strong>Matric Number</strong></td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td><strong>Course</strong></td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td><strong>Year of Study</strong></td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td><strong>Address</strong></td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
