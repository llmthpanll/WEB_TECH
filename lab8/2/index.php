<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab8/2</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        table {
            margin: 1em;
        }

        td {
            padding: 0.5em 1em;
            text-align: center;
        }

        th {
            padding: 0.5em 2em;
            text-align: center;
        }


        table,
        tr,
        td {
            border-collapse: collapse;
            border-bottom: 1px solid gray;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>ลำดับ</th>
                <th>จังหวัด</th>
                <th>ผู้ติดเชื้อ</th>
                <th>เสียชีวิต</th>
                <th>ยอดผู้ป่วยสะสม</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $url = "https://covid19.ddc.moph.go.th/api/Cases/timeline-cases-by-provinces";
            $result = file_get_contents($url);
            $data = json_decode($result, true);

            $patitents = array_filter($data, function ($item) {
                return $item['txn_date'] == '2022-09-' . rand(1, 31);
            });

            $i = 0;
            foreach ($patitents as $data) {
                $i++;

                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $data["province"] . "</td>";
                echo "<td>" . $data["new_case"] . "</td>";
                echo "<td>" . $data["new_death"] . "</td>";
                echo "<td>" . $data["total_case"] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>


</body>

</html>