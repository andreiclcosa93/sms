<?php 

include "../includes/header.php"; 


    use Twilio\Rest\Client;

    $_SESSION['code'] = $code = uniqid();

    echo $code;

    try {
        $con->query(query:"INSERT INTO verifications(code) VALUES('$code");
        $client = new Client($config['account_sid'], $config['auth_token']);

        $client->messages->create(

            $_POST['number'],

                array(
                        'from'=> $config['twilio_number'], 
                        'body'=> "Your Online Code is {$code}"
                    ));

            echo "<h3 class='text-center' bg-success>Message has been sent</h3>";

    } catch (Exception $exception) {

        die($exception->getMessage());

    }

include "../includes/footer.php"; 

?>