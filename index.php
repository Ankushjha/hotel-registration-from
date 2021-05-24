
<?php include "form.php" ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Paradise Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

    <div id="container">
        <img id="bg" src="images/room (2).jpg" alt="">
        <div class="container">
            <h1>HOTEL PARADISE ONLINE BOOKING FORM</h1>
            <p>Book hotel rooms online for any of your events.</p>
            <hr>

            <div id="form-fill">
                <form action="form.php" method="post">

                    <label for="purpose">
                        Purpose:
                    </label>
                    <select name="purpose" id="purpose">
                        <option value="">Select</option>
                        <option value="">Official Purpose</option>
                        <option value="">Wedding Function</option>
                        <option value="">Ceremony</option>
                        <option value="">Birthday Party</option>
                        <option value="">My Purpose</option>
                    </select>

                    <label for="hotel-type">
                        Hotel Type:
                    </label>
                    <select name="hotel_type" id="hotel-type">
                        <option value="">Select</option>
                        <option value="">7 star</option>
                        <option value="">5 star</option>
                        <option value="">4 star</option>
                        <option value="">3 star</option>
                        <option value="">General</option>
                    </select>

                    <textarea name="desiredDescription" id="desc" cols="30" rows="5" placeholder="Give Desired Specifications (e.g. sitting capacity/arrangements, required instruments, etc.)"></textarea>

                    <label for="date-from">Date From:</label>
                    <input type="datetime-local" name="date_from" id="date-from" placeholder="Date From">

                    <label for="till-date">Till Date:</label>
                    <input type="datetime-local" name="date_to" id="till-date" placeholder="Till Date">

                    <h2>Your contact Info.</h2>
                    <p>Please write your contact info.</p>
                    <input type="text" name="name" id="name" placeholder="Your Name">
                    <input type="email" name="email" id="email" placeholder="Email Id">
                    <input type="tel" name="phone" id="phone" placeholder="Contact Number">
                    <textarea name="suggestions" id="suggestions" cols="30" rows="5" placeholder="Give Your Sugesstions..."></textarea>

                    <h2>Read And Clarify</h2>
                    <p>You have to pay 50% of total money in advance.</p>
                    <p>In case of booking cancellation, 20% of your booking amount is deducted.</p>

                    <div class="checkbox">
                        
                    <input type="checkbox" name="tnc" id="tnc">
                    <label for="tnc">The information given is true and best of my knowledge. 
                        I accept the terms and condition.
                    </label>

                    </div>

                    <button class="btn" type="submit" name="submit">Book Hotel Now!</button>

                </form>
            </div>
        </div>

    </div>

    <!-- INSERT INTO `hotel` (`sno`, `dt`, `purpose`, `hotel_type`, `desire`, `date_from`, `date_to`, `name`, `email`, `contact`, `suggestion`) VALUES ('1', current_timestamp(), 'option', 'option', 'testdesire', '2020-09-18 09:18:51.000000', '2020-09-19 09:18:51.000000', 'testName', 'test@gmail.com', '9999999999', 'testSuggestion'); -->

</body>
</html>
