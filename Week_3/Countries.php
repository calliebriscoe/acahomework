<html>

    <head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" language="javascript"></script>
    <title>Countries on Earth</title>
    </head>

    <body>

        <h3>Countries on Earth</h3>

        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
            Enter Country Name: <input type="text" name="country_name" size="30"/>
            <input type="submit" value="Get Details"/>
        </form>

        <hr/>

        <?php

        // Check for an incoming POST request
        if ($_POST) {

            $countryName = $_POST['country_name'];


            echo 'The Country you have entered is: ' . $countryName;

            ?>

    <script type="text/javascript" language="javascript">
            $.ajax({
    url: "http://restcountries.eu/rest/v1/name/<?php $countryName ?>",
    dataType: "json",
    data: {
        Country Name : 'England',
        Capital : 'London',
        Region : 'Region',
        Population : "number_format($Population)"
    },
    success: function(jsonData) {
        response(jsonData.results);
    }
}); </script> <?php
            // Hint: To access data in a stdClass object use the -> operator
            // $data->name = 'Samir'; echo $data->name;
        }
        ?>

    </body>

</html>
