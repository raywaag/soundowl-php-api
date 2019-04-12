<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Rest API Client Side Demo</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container">
            <h2>Rest API Test</h2>
            <form class="form-inline" action="" method="POST">
                <div class="form-group">
                </div>
                <button type="submit" name="get-country-artists" class="btn btn-default">Country</button>
                <button type="submit" name="get-hiphop-artists" class="btn btn-default">Hip Hop</button>
                <button type="submit" name="get-alternative-artists" class="btn btn-default">Alternative</button>
                <button type="submit" name="get-easylistening-artists" class="btn btn-default">Easy Listening</button>
                <button type="submit" name="get-classicrock-artists" class="btn btn-default">Classic Rock</button>
            </form>
            <p>&nbsp;</p>
            <h3>
                <?php
                
                // GET COUNTRY ARTISTS 
                    if(isset($_POST['get-country-artists']))
                    {
                        $url = "http://localhost:8888/php_api/api/country";
                        $client = curl_init($url);
                        curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
                        $response = curl_exec($client);                       
                        $result = json_decode($response);
                        echo $result->data; 
                    }


                    // GET HIP HOP ARTISTS 
                    if(isset($_POST['get-hiphop-artists']))
                    {
                        $url = "http://localhost:8888/php_api/api/hiphop";
                        $client = curl_init($url);
                        curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
                        $response = curl_exec($client);                       
                        $result = json_decode($response);
                        echo $result->data; 
                    }


                    // GET ALTERNATIVE ARTISTS 
                    if(isset($_POST['get-alternative-artists']))
                    {
                        $url = "http://localhost:8888/php_api/api/alternative";
                        $client = curl_init($url);
                        curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
                        $response = curl_exec($client);                       
                        $result = json_decode($response);
                        echo $result->data; 
                    }



                    // GET CLASSIC ROCK ARTISTS 
                    if(isset($_POST['get-classicrock-artists']))
                    {
                        $url = "http://localhost:8888/php_api/api/classicrock";
                        $client = curl_init($url);
                        curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
                        $response = curl_exec($client);                       
                        $result = json_decode($response);
                        echo $result->data; 
                    }



                    // GET EASY LISTENING ARTISTS 
                    if(isset($_POST['get-easylistening-artists']))
                    {
                        $url = "http://localhost:8888/php_api/api/easylistening";
                        $client = curl_init($url);
                        curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
                        $response = curl_exec($client);                       
                        $result = json_decode($response);
                        echo $result->data; 
                    }
                
                ?>
            </h3>
        </div>
    </body>
</html>