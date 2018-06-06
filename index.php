<!DOCTYPE html>
<?php 
    include 'db.php';
    
    $sql ="select * from back"; 
    $sql1 ="select * from front";
    $rows = $db ->query($sql);
    $rows1 = $db ->query($sql1);
?>
<?php
    if(isset($_REQUEST["submit"])){
        $chk = $_REQUEST["chk"];
        $a=implode(",",$chk);
        mysql_query("delete from front where herramienta2 in ($a) ");

    }

    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Set your area</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="micss.css">

</head>
<body>
    <br>
    <div class="container">
        <h4 class="titulo">Agrega tus herramientas:</h4>
        <form method="post" action="agrega.php" class="col l12">
            <div class="row">
                <div class="col l12 s12 m12">
                    <input id="texto" type="text" class="validate" name="cosas">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <p class="col l6">
                        <input type="radio" id="test5" name="area" value="front" />
                        <label for="test5">Front-end</label>
                    </p>
                    <p class="col l6">
                        <input type="radio" id="test6" name="area" value="back"/>
                        <label for="test6">Back-end</label>
                    </p>
                </div>
                <div class="row">
                    <div class="input-field">
                        <input class="col m3 l3 s3 btn right green" type="submit" name="send" value="add">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col l5 m5 s12">
                <table id="table1"  class="white">
                    <thead>
                        <tr>
                            <th>Front End</th>
                            <th><input type="submit" value="submit" name="submit"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php while($row1 = $rows1->fetch_assoc()): ?>
                                <td><?php echo $row1['herramienta2']?></td>
                                <td>
                                    <label>
                                        <input type="checkbox" name="chk[]" value="<?php echo $row1['herramienta2']?>">
                                    </label>
                                </td>
                        </tr>
                            <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
            <div class="container">
                <div class="col l2 m2 s12">
                    <div class="row">
                        <buttom class="btn col l12 m12 s12 blue">>>>></buttom>
                    </div>
                    <div class="row">
                        <buttom class="btn col l12 s12 m12 pink"><<<<</buttom>
                    </div>
                </div>
            </div>

                <div class="col l5 m5 s12 ">
                    <table id="table2"  class="white">
                        <thead>
                            <tr>
                                <th>Back End</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php while($row = $rows->fetch_assoc()): ?>
                                    <td><?php echo $row['herramienta1']?></td>

                                </tr>
                                <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            
        </div>
    </div>

    


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>