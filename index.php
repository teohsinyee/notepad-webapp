<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- framework sheet -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/mainpage.css">
   
    <title>My Notes</title>

</head>

<body>
        <div id="container">
        
        <div class="tooltip">
                <a href="index.html">
                     <button id="btn-add-note" style="border-radius: 30px;  margin-left: 1100px" > <!-- To Override framework -->
                        <i class="fa fa-plus" style="font-size: 16px"></i>
                    </button>
                </a>
            <span class="tooltiptext">Add note</span>
        </div>

            <?php
            require_once 'connect.php'; //check if the file has already been included
            $sql = "SELECT * FROM notes"; //select data from db notes
            $result = mysqli_query($link,$sql) or die(mysql_error($link));

            // Show previous notes
            print("<h1 class='title';> My Notes </h1>");
           
            while($row = mysqli_fetch_array($result)){
                if($row['note_category'] == 0){
                    $cat = "Personal";
                } elseif ($row['note_category'] == 1){
                    $cat = "Life";
                } elseif ($row['note_category'] == 2){
                    $cat = "Work";
                } elseif ($row['note_category'] == 3){
                    $cat = "Travel";
                } else {
                    $cat = "Other";
                }
                echo "<div class ='note'>";
                
                echo "<a href ='delete.php?id=" . $row['note_id'] ."'><button class='btnDelete'>Delete</button></a>";
                echo "<p class='catstyle'> &#x2B50; ". $cat ;
                echo "</p>";
                echo " <p class='titlestyle'>" . $row['note_title'];
                echo "<p class='notetextsytle'>" . $row ['note_text'] ;
                echo "<p class='datestyle'> Date: " . $row['note_date'];
                echo "</div>";
            }

            ?>

        </div>
        
</body>
</html>