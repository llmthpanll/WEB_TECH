<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class='container-fluid'>
        <div class="d-flex justify-content-center">
            <form action="index.php" method="post">
                <h1>Employee Form</h1>
                <label for="id">ID : </label>
                <input type="text" class="form-control mt-1 mb-1" name="id">
                <label for="name">Name : </label>
                <input type="text" class="form-control mt-1 mb-1" name="name">
                <label for="age">Age : </label>
                <input type="text" class="form-control mt-1 mb-1" name="age">
                <label for="address">Address : </label>
                <textarea cols="25" class="form-control mt-1 mb-1" rows="3" id="Address" name="Address"></textarea>

                <label for="salary">Salary : </label>
                <input type="text" class="form-control mt-1 mb-1" name="salary">
                <button type="submit" class="btn btn-primary mt-1 mb-1" id="submit" name="submit">Submit</button>
            </form>
        </div>
        <div class="d-flex justify-content-center">
            <h1>List of Employees</h1>
        </div>


        <?php
        // Connect to Database 
        class MyDB extends SQLite3
        {
            function __construct()
            {
                $this->open('employees.db');
            }
        }
        $db = new MyDB();

        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $age = $_POST['age'];
            $address = $_POST['Address'];
            $salary = $_POST['salary'];

            $sql = <<<EOF
            INSERT INTO employees (EM_ID,NAME,AGE,ADDRESS,SALARY)
            VALUES ($id, '$name', $age, '$address', $salary);
        EOF;
            $ret = $db->exec($sql);
        }
        ?>
        <div class="d-flex justify-content-center">
            <table class="table ms-2">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Address</th>
                    <th scope="col">Salary</th>
                </tr>
                <?php
                $sql = "SELECT * from employees";
                $ret = $db->query($sql);
                while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                    echo "<tr>";
                    echo "<th scope='col'>" . $row['EM_ID'] . "</th>";
                    echo "<th>" . $row['NAME'] . "</th>";
                    echo "<th>" . $row['AGE'] . "</th>";
                    echo "<th>" . $row['ADDRESS'] . "</th>";
                    echo "<th>" . $row['SALARY'] . "</th>";
                }
                ?>
            </table>
        </div>

    </div>

    <?php
    // Close database
    $db->close();

    ?>


</body>

</html>