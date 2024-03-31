<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="register.php" method="post">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required><br><br>
        
        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required><br><br>
        
        <label for="dobDay">DOB:</label>
        <select name="dobDay" id="dobDay" required>
            <option value="">Day</option>

            <?php for ($day = 1; $day <= 31; $day++): ?>
                <option value="<?= $day; ?>"><?= $day; ?></option>
            <?php endfor; ?>
        </select>
        <select name="dobMonth" id="dobMonth" required>
            <option value="">Month</option>

            <?php for ($month = 1; $month <= 12; $month++): ?>
                <option value="<?= $month; ?>"><?= $month; ?></option>
            <?php endfor; ?>
        </select>
        <select name="dobYear" id="dobYear" required>
            <option value="">Year</option>

            <?php for ($year = 1900; $year <= 2016; $year++): ?>
                <option value="<?= $year; ?>"><?= $year; ?></option>
            <?php endfor; ?>
        </select><br><br>
        
        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label><br><br>
        
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required><br><br>
        
        <label for="emailID">Email ID:</label>
        <input type="email" id="emailID" name="emailID" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required><br><br>
        
        <input type="submit" value="Register">
    </form>
</body>
</html>