<?php
//1. Import the PayPal SDK client
namespace Sample;

session_start();

require 'connection.php';

require __DIR__ . '/vendor/autoload.php';

use Sample\PayPalClient;
use PayPalCheckoutSdk\Orders\OrdersGetRequest;

require 'paypal-client.php';

$orderID = $_GET['orderID'];

class GetOrder
{

  // 2. Set up your server to receive a call from the client
  public static function getOrder($orderId)
  {

    // 3. Call PayPal to get the transaction details
    $client = PayPalClient::client();
    $response = $client->execute(new OrdersGetRequest($orderId));
	
    // 4. Specify which information you want from the transaction details. For example:
    $orderID = $response->result->id;
    // $email = $response->result->payer->email_address;
    // $name = $response->result->purchase_units[0]->shipping->name->full_name;
    
    // Extremos el custom id para buscar a que row de "checkouts" corresponde
    $checkout_id = $response->result->purchase_units[0]->custom_id;
    // echo 'CHECKOUT ID: ' . $checkout_id;

    global $pdo;
    // Actualizamos el row de checkouts correspondiente a este id, con el estado a "1"
    $sql = "UPDATE checkouts SET status=? WHERE id=?";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([1, $checkout_id]);

    if($stmt){
        echo 'Status actualizado con exito!';
        header('location: checkout.php?payment_status=success');
    }else{
        echo 'Error al actualizar el status';
    }
  }
}

if (!count(debug_backtrace()))
{
  GetOrder::getOrder($orderID, true);
}
?>