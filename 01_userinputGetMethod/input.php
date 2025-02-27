<?php //open 

//echo : used to display string/text output on webpage.
echo "helloworld 00 php";

echo "
<html>
    <head>
        <title>Welcome page.</title>
    </head>
    <body>
        <form action='' method='GET'>
            <input type='text' name='email' id='email' placeholder='Enter email id'/>
            <button type='submit'>submit</button>
        </form>
    </body>
</html>
";

if(isset($_GET['email'])){
    $email = $_GET['email'];
    echo  "email=".$email;
}


// close ?> 