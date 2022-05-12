<?php
    session_start();

    include("server.php");
    
    if(isset($_GET["del"])){
        $id = $_GET["del"] ;
        $delete = mysqli_query($conn , "DELETE from data where id=$id");

        header("location: index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-light bg-light border-bottom border-5">
        <span class="navbar-brand mb-0 h1 p-2">ProjectForm</span>
    </nav>

    <div class="d-flex justify-content-center">
    <button type="button" name="add" class="btn btn-primary justify-content-center">
        <a href="insert.php" class="btn btn-primary">Add Data</a>
    </button>
    </div>
    <br>

    <table id="table" class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th onclick="sortTable(0)" class="font-weight-bold">ลำดับ</th>
                <th onclick="sortTable(1)" class="font-weight-bold">ชื่อโครงการ</th>
                <th onclick="sortTable(2)" class="font-weight-bold">จังหวัด</th>
                <th onclick="sortTable(3)" class="font-weight-bold">เริ่ม</th>
                <th onclick="sortTable(4)" class="font-weight-bold">จบ</th>
                <th colspan="2" class="font-weight-bold">การจัดการ</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while($row = mysqli_fetch_array($result)){ ?>
            <tr>
                <td class="font-weight-bold"><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["province"]; ?></td>
                <td>
                <?php echo date('Y-m-d', strtotime($row["startDate"]));?></td>
                <td>
                <?php echo date('Y-m-d', strtotime($row["startDate"]));?>
                </td>
                <td><a href="update.php?up=<?php echo $row["id"]; ?>">Update</a></td>
                <td><a href="index.php?del=<?php echo $row["id"]; ?>">Delete</a></td>
            </tr>
        <?php } ?>
            
        </tbody>
    </table>

    <script>
        function sortTable(n) {
            var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
            table = document.getElementById("table");
            switching = true;

            dir = "asc";

        while (switching) {

        switching = false;
        rows = table.rows;

        for (i = 1; i < (rows.length - 1); i++) {

            shouldSwitch = false;

            x = rows[i].getElementsByTagName("TD")[n];
            y = rows[i + 1].getElementsByTagName("TD")[n];

            if (dir == "asc") {
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {

                shouldSwitch = true;
                break;
            }
            } else if (dir == "desc") {
            if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {

                shouldSwitch = true;
                break;
                }
            }
        }
        if (shouldSwitch) {

            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;

            switchcount ++;
        } else {
            if (switchcount == 0 && dir == "asc") {
            dir = "desc";
            switching = true;
            }
        }
        }
    }
    </script>
</body>
</html>