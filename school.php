<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Registration Form</title>
    <style>
        header {
            text-align: center;
            background-color: #007bff;
            color: #fff;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body style="background-color: rosybrown;">
    <header>
        <img src="kenya high.jpg" width="100px">
        <h1 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;font-size: 50px;">KENYA HIGH</h1>
    </header>
    <div class="container">
        <h2>Registration Form</h2>
        <p>Please fill out the following details to register:</p>
        <form action="schoolreg.php" method="POST">
            <label for="admission_number">Admission Number:</label>
            <input type="number" id="admission_number" name="admission_number" required>

            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>

            <label for="middle_name">Middle Name:</label>
            <input type="text" id="middle_name" name="middle_name" required>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="doa">Date of Admission:</label>
            <input type="date" id="doa" name="doa" required>

            <label for="form">Form:</label>
            <select name="form" id="form">
                <option value="form">Select stream</option>
                <option value="1">East</option>
                <option value="2">North</option>
                <option value="3">West</option>
                <option value="4">South</option>
            </select>

            <label for="gender">Gender:</label>
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female" required>
            <label for="female">Female</label>

            <label for="Parent">Parent/Guardian Name:</label>
            <input type="text" id="Parent" name="Parent" required>

            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="2" required></textarea> <br>

            <label for="contact_number">Contact Number:</label>
            <input type="tel" id="contact_number" name="contact_number" required> <br>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
