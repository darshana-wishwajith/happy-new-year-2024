<?php
    include "connection.php";

    $status = "fail";
    $error = "no_error";
    $link = "no_link";

    $sfname = $_POST["sfname"];
    $slname = $_POST["slname"];
    $rfname = $_POST["rfname"];
    $rlname = $_POST["rlname"];
    $cmsg = $_POST["cmsg"];

    if(empty($sfname)){
        $error = "Your first name is required";
    }
    else if(empty($slname)){
        $error = "Your last name is required";
    }
    else if(empty($rfname)){
        $error = "Receiver's first name is required";
    }
    else if(empty($rlname)){
        $error = "Receiver's last name is required";
    }
    else if(empty($cmsg)){
        $error = "Custom message is required";
    }
    else{
        
        $sender_rs = Database::search("SELECT * FROM `sender` WHERE `sfname` = '".$sfname."' AND `slname` = '".$slname."'");

        $sender_data = $sender_rs->fetch_assoc();

        $receiver_rs = Database::search("SELECT * FROM `receiver` WHERE `rfname` = '".$rfname."' AND `rlname` = '".$rlname."'");

        $receiver_data = $receiver_rs->fetch_assoc();

        $msg_id = uniqid();

        if($sender_rs->num_rows == 1){

            if($receiver_rs->num_rows == 1){

                Database::insert_update_delete("INSERT INTO `message` (`id`, `Sender_id`, `Receiver_id`, `msg`) VALUES('".$msg_id."','".$sender_data["id"]."','".$receiver_data["id"]."','".$cmsg."')");

                $status = "success";

            }
            else{

                Database::insert_update_delete("INSERT INTO `receiver` (`rfname`, `rlname`) VALUES('".$rfname."','".$rlname."')");

                $receiver_rs = Database::search("SELECT * FROM `receiver` WHERE `rfname` = '".$rfname."' AND `rlname` = '".$rlname."'");

                $receiver_data = $receiver_rs->fetch_assoc();

                Database::insert_update_delete("INSERT INTO `message` (`id`, `Sender_id`, `Receiver_id`, `msg`) VALUES('".$msg_id."','".$sender_data["id"]."','".$receiver_data["id"]."','".$cmsg."')");

                $status = "success";
            }

            
        }
        else if($receiver_rs->num_rows == 1){

            Database::insert_update_delete("INSERT INTO `sender` (`sfname`, `slname`) VALUES('".$sfname."','".$slname."')");

            $sender_rs = Database::search("SELECT * FROM `sender` WHERE `sfname` = '".$sfname."' AND `slname` = '".$slname."'");

            $sender_data = $sender_rs->fetch_assoc();

            Database::insert_update_delete("INSERT INTO `message` (`id`, `Sender_id`, `Receiver_id`, `msg`) VALUES('".$msg_id."','".$sender_data["id"]."','".$receiver_data["id"]."','".$cmsg."')");

            $status = "success";
        }
        else{

            Database::insert_update_delete("INSERT INTO `sender` (`sfname`, `slname`) VALUES('".$sfname."','".$slname."')");

            Database::insert_update_delete("INSERT INTO `receiver` (`rfname`, `rlname`) VALUES('".$rfname."','".$rlname."')");

            $sender_rs = Database::search("SELECT * FROM `sender` WHERE `sfname` = '".$sfname."' AND `slname` = '".$slname."'");

            $sender_data = $sender_rs->fetch_assoc();

            $receiver_rs = Database::search("SELECT * FROM `receiver` WHERE `rfname` = '".$rfname."' AND `rlname` = '".$rlname."'");

            $receiver_data = $receiver_rs->fetch_assoc();

            Database::insert_update_delete("INSERT INTO `message` (`id`, `Sender_id`, `Receiver_id`, `msg`) VALUES('".$msg_id."','".$sender_data["id"]."','".$receiver_data["id"]."','".$cmsg."')");

            $status = "success";

        }

        if($status == "success"){
            $link =  "http://localhost/happy-new-year-2024/viewGreeting.php?id=".$msg_id;
        }
        else{
            $error = $error;
        }
    }

    $responseObj = new stdClass();
    $responseObj->status = $status;
    $responseObj->error = $error;
    $responseObj->link = $link;

    $JSON = json_encode($responseObj);

    echo($JSON);

?>