<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMPORT VIEW</title>
</head>
<body>
    <form action="/imports/users" method="post" enctype="multipart/form-data">
        @csrf 
        <label for="">Import your excel file here:</label>
        <br><br>
        <input type="file" name="excel" id="">
        <input type="submit" value="import">
    </form>
</body>
</html>