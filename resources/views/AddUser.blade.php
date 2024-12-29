<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Register Form</h1>
    <form action="/submit" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
        <br><br>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
        <br><br>
        <input type="password" id="pass" name="password" placeholder="Enter your password" required>
        <br><br>
        <input type="date" id="dob" name="dob" required>
        <br><br>
        <label><input type="radio" name="gender" value="Male" required> Male</label>
        <label><input type="radio" name="gender" value="Female" required> Female</label>
        <br><br>
        <select id="course" name="course" required>
            <option value="">Select your course</option>
            <option value="BCA">BCA</option>
            <option value="MCA">MCA</option>
            <option value="BSc IT">BSc IT</option>
            <option value="BE CS">BE CS</option>
        </select>
        <br><br>

        <label><input type="checkbox" name="hobby[]" value="Reading"> Reading</label>
        <label><input type="checkbox" name="hobby[]" value="Traveling"> Traveling</label>
        <label><input type="checkbox" name="hobby[]" value="Gaming"> Gaming</label>

        <br><br>
        <input type="file" id="img" name="img">
        <br><br>
        <button type="submit">Submit</button>
        <br><br>
    </form>
</body>

</html>
