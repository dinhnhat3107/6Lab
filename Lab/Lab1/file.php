<!DOCTYPE html>
<html>

<head>
    <title> STUDENT RESULTS RATING</title>
    <!-- Unicode Vietnamese -->
    <meta charset="UTF-8">
    <meta name="author" content=" trendemy.com" />
    <!-- css definition file -->
    <link href="style.css" rel="stylesheet" />
</head>

<body>
    <div id="wrapper">
        <h2> CLASSIFICATION OF STUDENT RESULTS</h2>
        <form action="#" method="post">
            <div class="row">
                <div class="lbltitle">
                    <label> Math scores </label>
                </div>
                <div class="lblinput">
                    <input type="number" name="math" value="<?php echo isset($_POST['math']) ?

                                                                $_POST['math'] : 0; ?>" />
                </div>
            </div>
            <!-- Physics -->
            <div class="row">
                <div class="lbltitle">
                    <label> Physics scores</label>
                </div>
                <div class="lblinput">
                    <input type="number" name="physics" value="<?php echo isset($_POST['physics']) ?

                                                                    $_POST['physics'] : 0; ?>" />

                </div>
            </div>
            <!-- Chemistry -->
            <div class="row">
                <div class="lbltitle">
                    <label> Chemistry scores</label>
                </div>
                <div class="lblinput">
                    <input type="number" name="chemistry" value="<?php echo isset($_POST['chemistry']) ?

                                                                        $_POST['chemistry'] : 0; ?>" />

                </div>
            </div>

            <!-- select an area  -->
            <div class="row">
                <div class="lbltitle">
                    <label> Select an area</label>
                </div>
                <div class="lblinput">

                    <select name="area" id="">
                        <option value="0" <?php echo isset($_POST['area']) && $_POST['area'] == 0 ? "selected" : "" ?>>Select an area</option>
                        <option value="1" <?php echo isset($_POST['area']) && $_POST['area'] == 1 ? "selected" : "" ?>>Area 1</option>
                        <option value="2" <?php echo isset($_POST['area']) && $_POST['area'] == 2 ? "selected" : "" ?>>Area 2</option>
                        <option value="3" <?php echo isset($_POST['area']) && $_POST['area'] == 3 ? "selected" : "" ?>>Area 3</option>
                        <option value="4" <?php echo isset($_POST['area']) && $_POST['area'] == 4 ? "selected" : "" ?>>Area 4</option>
                        <option value="5" <?php echo isset($_POST['area']) && $_POST['area'] == 5 ? "selected" : "" ?>>Area 5</option>
                    </select>

                </div>
            </div>


            <!-- Form send button, command button to send results -->
            <div class="row">
                <div class="submit">
                    <input type="submit" name="btnsubmit" value="

Ratings" />

                </div>
            </div>
        </form>



        <!-- Display results -->
        <?php
        // kiem tra 3 so nhap vo co ton tai hay khong
        if (isset($_POST['btnsubmit'])) {
            if (isset($_POST['math']) && isset($_POST['physics']) && isset($_POST['chemistry'])) {
                $total_points = $_POST['math'] + $_POST['physics'] + $_POST['chemistry'];
            } else {
                $total_points = 0;
            }
        } else {
            $total_points = 0;
        }
        ?>

        <!-- in ra 3 so bang tong total_point o tren -->
        <div class="result">
            <h2>Rating results</h2>
            <div class="row">
                <div class="lbltitle">
                    <label>Total points</label>
                </div>
                <div class="lbloutput">
                    <?php if (isset($_POST['btnsubmit']))
                        echo $total_points;
                    ?>
                </div>
            </div>
        </div>





        <!-- display rating point  -->
        <div class="row">
            <div class="lbltitle">
                <label>Rating</label>
            </div>
            <div class="lbloutput">
                <?php

                if (isset($_POST['btnsubmit'])) {
                    $totalpoints = $_POST['math'] + $_POST['physics']

                        + $_POST['chemistry'];

                    if ($totalpoints >= 24) echo "Very Good";
                    elseif ($totalpoints >= 21) echo "Good";
                    elseif ($totalpoints >= 15) echo "Average";
                    else echo "Weak";
                }
                ?>

            </div>
        </div>

        <!-- -------------- -->
        <div class="row">
            <div class="lbltitle">
                <label for=""> Pririty points</label>
            </div>
        </div>
        <div class="lbloutput">
            <?php
            if (isset($_POST['btnsubmit'])) {
                $priority_point = $_POST['area'];
                switch ($priority_point) {
                    case 0:
                    case 4:
                    case 5:
                        echo 0;
                        break;
                    case 1:
                    case 2:
                        echo 5;
                        break;
                    case 3:
                        echo 3;
                        break;
                    default:
                        echo 0;
                        break;
                }
            }
            ?>
        </div>

    </div>

   









    ?>




</body>

</html>