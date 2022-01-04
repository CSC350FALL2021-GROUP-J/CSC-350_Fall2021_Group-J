<!DOCTYPE html>
<html

<head>
    <?php
        require_once 'TimeSlot.php';
        if(!logged_in()){
           
            $_SESSION['unauth'] = "You must be logged in to view that page";
            header("Location: ./signin.php");
        } else if(get_reservation_info($_SESSION['session_apt'])) {
            header("Location: ./availableTime.php");
        }
?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <h1> SCHEDULE FOR THIS WEEK </h1>
    <form action="availableTime.php" method="post" id="logout-form">
        <input type="hidden" name="url" value="logout">
        <button type="submit" name="submit">Log out</button>
    </form>

    <div class="table">
        <?php 
            if(isset($_SESSION['error'])){
                echo "<p class='error'>".$_SESSION['error']."</p>";
                unset($_SESSION['error']);
            } else if (isset($_SESSION['success'])){
                echo "<p class='success'>".$_SESSION['success']."</p>";
                unset($_SESSION['success']);
            }
        ?>

        <table >
                <tr height="5px">
                    <td>
                        <h3>DAY OF THE WEEK</h3>
                    <th>
                        <h3>AVAILABLE TIME SLOTS</h3>
                        </td>
                <tr>
                    <td class="row"> MONDAY
                    <th>
                    <div data-weekday="Monday" class="timeslots">
                    <?php print_available_timeslots('Monday'); ?>
                        </div>
                </td>
                </tr>
                <tr>
                    <td class="row">TUESDAY
                    <th>

                        <div data-weekday="Tuesday" class="timeslots">
                            <?php print_available_timeslots('Tuesday'); ?>
                        </div>

                        </td>
                </tr>
                <tr>
                    <td class="row">WEDNESDAY
                    <th>

                        <div data-weekday="Wednesday" class="timeslots">
                            <?php print_available_timeslots('Wednesday'); ?>
                        </div>

                        </td>
                </tr>
                <tr>
                    <td class="row">THURSDAY
                    <th>

                        <div data-weekday="Thursday" class="timeslots">
                            <?php print_available_timeslots('Thursday'); ?>
                        </div>
                        </td>
                </tr>
                <tr>
                    <td class="row">FRIDAY
                    <th>
                            <div data-weekday="Friday" class="timeslots">
                            <?php print_available_timeslots('Friday'); ?>
                        </tr>
                        </td>
                </tr>
                <tr>
                    <td class="row">SATURDAY
                    <th>

                        <div data-weekday="Saturday" class="timeslots">
                            <?php print_available_timeslots('Saturday'); ?>
                        </div>
                        </td>
                        </tr>
                        <tr>
                    <td class="row">SUNDAY
                    <th>
                       <div data-weekday="Sunday" class="timeslots">
                            <?php print_available_timeslots('Sunday'); ?>
                        </div>
                </td>
                </tr>
        </table><br>

        <form action="TimeSlot.php" method="post" id="reserve">
            <h3>SELECT DAY OF THE WEEK</h3>
            <select name="weekday-input" id="weekday-input" class="rsvp" >
            </select>

            <h3>SELECT TIME SLOT</h3>
            <select name="hour-input" id="hour-input" class="rsvp" >
            </select>
            <br>

            <input type="hidden" name="url" value="reserve">

            <h2><button id="availableTime.php" name="submit">RESERVE</button> </h2>
        </form>
    </div>
    <script src="signup.php"></script>
</body>

</html>
