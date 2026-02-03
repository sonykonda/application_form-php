<!DOCTYPE html>
<html>
<head>
    <title>PhD Application Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h2>PhD Application Form</h2>
    <form action="submit_form.php" method="post" enctype="multipart/form-data">
        <label>Full Name:</label><br>
        <input type="text" name="fullname" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" required><br><br>

        <label>Date of Birth:</label><br>
        <input type="date" name="dob" required><br><br>

        <label>Gender:</label><br>
        <select name="gender" required>
            <option value="">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br><br>

        <label>Qualification:</label><br>
        <input type="text" name="qualification" required><br><br>

        <label>Research Area:</label><br>
        <input type="text" name="research_area" required><br><br>

        <label>Statement of Purpose:</label><br>
        <textarea name="statement" rows="5" cols="40" required></textarea><br><br>

        <label>Upload Photo:</label><br>
        <input type="file" name="photo" accept="image/*" required><br><br>

        <input type="submit" value="Submit Application">
    </form>
</body>
</html>
