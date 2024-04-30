<?php include "../admin/inculdes/init.php" ?>
<?php include "../admin/inculdes/protect_route_customer.php" ?>
<?php ob_start(); ?>
<?php

global $database;

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    if(isset($_POST['update_order'], $_POST['user_id'], $_POST['grand_total'], $_POST['reference'], $_POST['transaction'], $_POST['firstname'], $_POST['lastname'], $_POST['email'],$_POST['address'], $_POST['country'],$_POST['city'], $_POST['zip'], $_POST['same'], $_POST['payment'], $_POST['shipping'])){
        $user_id     = trim($_POST['user_id']);
        $amount      = trim($_POST['grand_total']);
        $reference   = trim($_POST['reference']);
        $transaction = trim($_POST['transaction']);

       $firstname = trim($_POST['firstname']);
       $lastname = trim( $_POST['lastname']);
       $email = trim($_POST['email']);
       $address = trim( $_POST['address']);
       $country = trim($_POST['country']);
       $ciy = trim($_POST['city']);
       $zip = trim($_POST['zip']);
       $shipping_address = trim($_POST['same']);
       $payment_method = trim($_POST['payment']);
       $shipping_method = trim( $_POST['shipping']);



        /*echo json_encode([
            'user_id' => $user_id,
            'grand total' => $grand_total,
            'reference' => $reference,
            'transaction' => $transaction
        ]);*/

        // fetch all products details in cart

        $sql = "SELECT * FROM cart WHERE user_id = $user_id";
        $cart = Carts::find_by_query($sql);

        foreach($cart as $item) {
            $product_name        = $item->product_name;
            $product_price       = $item->product_price;
            $grand_total         = $item->grand_total;
            $product_discription = $item->product_discription;
            $qty                 = $item->qty;
            $image               = $item->image;


            try {
                $userOrder = new UserOrder(
                    $product_name,
                    $product_price,
                    $product_discription,
                    $qty,
                    $grand_total,
                    $image,
                    $user_id,
                    $reference,
                    $amount,
                    $transaction,

                    $firstname,
                    $lastname,
                    $email,
                    $address,
                    $country, 
                    $city,
                    $zip,
                    $shipping_address,
                    $payment_method,
                    $shipping_method,
                );
                $userOrder->createQuitely();
            } catch(\Throwable $e){
                echo 'Sorry, something went wrong contact developer!';
            }
        }


        // delete the order from cart
        $database->query("DELETE FROM cart WHERE user_id = $user_id");


    }else {
        echo json_encode('Invalid Request');
    }

} else echo "What are you looking for?";