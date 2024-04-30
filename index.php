<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Profile Maker</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='styles/main.css'>
</head>
<body>
    <div class="outer">
    <div class="container">
        <form id="form" action="actions/action.php" method="POST">
        <label for="name">Enter Name:</label>
        <hr align="left">
        <input type="text" name="name" id="name"><br><br>
        <label for="email">Enter Email:</label>
        <hr align="left">
        <input type="email" name="email" id="email"><br><br>
        <label for="number">Enter Phone Number:</label>
        <hr align="left">
        <input type="number" name="phone" id="phone"><br><br>
        <label for="course">Enter Course:</label>
        <hr align="left">
        <select name="course" id="course">
            <option disabled selected value="0">Select Course</option>
            <option value="Full Stack Development">Full Stack Development</option>
            <option value="Linux Fundamentals">Linux Fundamentals</option>
            <option value="Electronic Devices & Circuits">Electronic Devices & Circuits</option>
            <option value="Network Architecture">Network Architecture</option>
        </select><br><br>
        <label for="batch">Select Batch</label><hr align="left">
        <input type="radio" id="1004" value="1004" name="batch" id="1004">1004
        <input type="radio" id="1006" value="1006" name="batch" id="1006">1006
        <input type="radio" id="1008" value="1008" name="batch" id="1008">1008
        <br><br>

        <label for="img">Image URL</label>
        <hr align="left">
        <input type="text" name="img" id="img"><br><br>
        <div style="display: flex; justify-content: center;">
        <button type="submit" name="submit">Submit</button>
        </div>
        </form>
    </div>
    </div>
</body>
</html>