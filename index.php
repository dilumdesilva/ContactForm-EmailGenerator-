<!DOCTYPE html> 
<html> 
    <head>
        <title>test form</title>
        <style type="text/css">
            input, textarea{
                width:250px;
                height: 27px;
                margin-bottom:10px; 
            }

            textarea{
                height:100;
                resize:vertical;
            }

            body{
                text-align:center;
                margin-top:150px;
            }
        </style>
    </head>
    <body>
        <h1>Hello world</h1>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <input type="text" name="username" placeholder="Name.." required><br>
            <input type="email" name="email" placeholder="email..." required><br>
            <textarea name="body" cols="20" rows="10" required></textarea><br>
            <input type="file" name="attachment" placeholder="Name.." required><br>
            <input type="submit" name="submit" value="send"><br>
       
        </form>
    </body>
</html>