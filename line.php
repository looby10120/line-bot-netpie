 <?php
  

function send_LINE($msg){
 $access_token = 'fefU9HSA3alGd18OR0+B5ntb/1CIwaXTaLIwlIlm9D0ql76SZOAVdYCzTsfUx65rAp12Dc3K98Hl0yXsR1BK6C8VfZTVrKprNMfcSaeuwtEkTnY50nAau6A9P0+mqneNZIZV9jr5bkWQPZQmFP63VwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U19c8ae72ec2cb3e035d94beb3f81062a',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
