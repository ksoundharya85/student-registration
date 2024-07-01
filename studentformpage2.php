<html>
    <head>
    <style>
        
        table {
              border-collapse: collapse;
              width: 50%;
              border:2px solid black;
              background-color: #c0faef;
              }

        th, td {
               padding: 10px;
               text-align: left;
               border-bottom: 1px solid #ddd;
               }
            .highlight {
                background-color: #fa6464;
            }
            /* .box {
            border: 2px solid black;
            padding: 50px;
            text-align: left;
            display: inline-block;
            background-color: #c0faef;
        } */
    </style>
    <!-- <script>
        document.addEventListener('DOMContentLoaded', function()
        {
        var table = document.getElementById('mytable');
        var rows = table.getElementsByTagName('tr');

        for (var i = 1; i < rows.length; i++) 
        { 
        var cells = rows[i].getElementsByTagName('td');
        var score = parseInt(cells[1].innerText); 
        if (score < 40) 
        {
            rows[i].classList.add('highlight');
        }
        }
        }); -->
    </script>
    </head>
    <body style="background-color:#b5e6dc";>
        <div class="container ">
        <br><br><br><br><br>
        <center><h1><b><i>STUDENT RESULT PAGE...</i></b></h1></center>
        <br><br><br>
        <center>
        <?php
        if(isset($_POST["student_name"])&&isset($_POST["register_number"])&&isset($_POST["gender"])&&isset($_POST["district"])&&isset($_POST["tamil_mark"])&&isset($_POST["english_mark"])&&isset($_POST["mathematics_mark"])&&isset($_POST["science_mark"])&&isset($_POST["socialscience_mark"]))
        {
        echo '<div style= "border: 2px solid black;padding: 10px;text-align: left;display: inline-block;background-color:#c0faef";>';
        echo "<h4><b>STUDENT NAME :".$_POST["student_name"]."</b></h4>";
        echo "<h4><b>REGISTER NUMBER :".$_POST["register_number"]."</b></h4>";
        echo "<h4><b>SEX :".$_POST["gender"]."</b></h4>";
        echo "<b>FAVORITE SPORT:</b>"." ";
            if (isset($_POST["sport"])) {
                foreach ($_POST["sport"] as $selected) {
                    echo "<b>".$selected."  "."</b>";
                }
            } else {
                echo "</b>No checkboxes were selected.</b><br>";
            }
            if($_POST["district"]=="NULL")
            {
                echo "<b><br><br>District:</b>"." "."....please select an option.....";
            }
            else
            {
            echo "<br><h4><b>DISTRICT:".$_POST["district"]."</b></h4>";
            }
            echo "</div>";
            $studentname=$_POST["student_name"];
            $registernumber=$_POST["register_number"];
            $tamilmark=$_POST["tamil_mark"];
            $englishmark=$_POST["english_mark"];
            $mathematicsmark=$_POST["mathematics_mark"];
            $sciencemark=$_POST["science_mark"];
            $socialsciencemark=$_POST["socialscience_mark"];
            if(!empty($tamilmark)&&!empty($englishmark)&&!empty($mathematicsmark)&&!empty($sciencemark)&&!empty($socialsciencemark))
            {
            $marks=array(array('subject'=>'TAMIL','mark'=>$tamilmark),
                         array('subject'=>'ENGLISH','mark'=>$englishmark),
                         array('subject'=>'MATHEMATICS','mark'=>$mathematicsmark),
                         array('subject'=>'SCIENCE','mark'=>$sciencemark),
                         array('subject'=>'SOCIALSCIENCE','mark'=>$socialsciencemark));
            $passmark=40;
            $totalmark=$tamilmark+$englishmark+$mathematicsmark+$sciencemark+$socialsciencemark;
            $average=$totalmark/5;
            echo "<br><br>";
            echo '<table class="table" id="mytable">';
            echo "<thead>";
            echo "<tr>";
            echo "<th>SUBJECT</th>";
            echo "<th>MARK</th>";
            echo "<th>PASS / FAIL</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

            foreach($marks as $score)
            {
               if($score['mark']<$passmark)
               {
                    echo "<tr class='highlight'>";
               }
                echo "<td >".$score['subject']."</td>";
                echo "<td>".$score['mark']."</td>";
                if($score['mark']>=$passmark)
                {
                    echo "<td>pass</td>";
                }
                else
                {
                    echo "<td>fail</td>";
                    
                }

                echo "</tr>";

            }
            echo "</tbody>";
            echo "<tfoot>";
            echo "<tr>";
            echo "<td collapse=2>";
            echo "<td>AVERAGE</td>";
            echo "<td>".$average."</td>"; 
            echo "</tr></tfoot></table>";
            if(($tamilmark>=40)&&($englishmark>=40)&&($mathematicsmark>=40)&&($sciencemark>=40)&&($socialsciencemark>=40))
            {
                echo "<h3><b><i>CONGRATS</i> you passed in the examination</b></h3><br><br>";
            }
            else
            {
                echo "<h3<b><br><br><i>SORRY </i>you failed in the examination..</b></h3><br><br>";
            }
        }
        else
        {
            echo "<br><br><br><br><br><center><h2>PLEASE ENTER ALL THE VALUE........</h2></center>";
        }
        }
        else
        {
            echo "Please Enter All Details.....";
        }
        
        ?>
        </center>

    </body>
</html>