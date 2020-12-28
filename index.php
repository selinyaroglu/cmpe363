<html>
<head>

    <meta charset="utf-8" />
    <title> CMPE 363 Assignment 5 </title>
    <link rel="stylesheet" href="style.css" />

</head>
<body>

    <div class="table">

    <?php
        
        $serverName = "a5dbsrvr.database.windows.net";
        $connectionOptions = array(
            "Database" => "A5DB",
            "Uid" => "myman",
            "PWD" => "mydude@E3"
        );

        $conn= sqlsrv_connect($serverName, $connectionOptions);

        $query= "SELECT TOP 100 CustomerID, FirstName, LastName FROM [SalesLT].[Customer]";

        $queryresult= sqlsrv_query($conn, $query);

        if ($queryresult == FALSE)

            echo (sqlsrv_errors());
        else

            echo ("<table><tr><th> Customer ID </th> <th> First Name </th> <th> Last Name </th></tr>");

        while ($row = sqlsrv_fetch_array($queryresult, SQLSRV_FETCH_ASSOC)) {

            echo ("<tr><td>{$row['CustomerID']} </td> <td>{$row['FirstName']} </td> <td>{$row['LastName']} </td></tr>");
        }
        
        sqlsrv_free_stmt($queryresult);

        echo ("</table>");
    ?>

    </div>

    <div class="box1">
    <h1> Selin Yaroğlu </h1>
    <div class="indent"> <h2> 116200028 </h2></div>
    </div>
    
    <div class="box2">
    <h1> İpek Su Kaptan </h1>
    <div class="indent2"> <h2> 116200049 </h2></div>
    </div>

    <div class="box3">
    <h1> Abdulrahman Abozeid </h1>
    <div class="indent3"> <h2> 117200017 </h2></div>
    </div>

</body>
</html>