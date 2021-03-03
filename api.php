<?php 

require 'fpdf/fpdf.php';
require "phpmailer/PHPMailerAutoload.php";
require "connection.php";

$func = $_GET['func'];

// Funcion para limpiar strings y poder incluirlos como nombre de archivos
function clean($string) {
    $string = str_replace(' ', '_', $string); // Replaces all spaces with hyphens.
    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
 }

// Funcion para generar los PDFs
function generate_pdf($pdf_content){

    $pdf = new FPDF();

    $pdf->AddPage();

    $pdf_content['Type'] = ucfirst($pdf_content['Type']);

    $pdf->SetFont('Arial', 'B', 15);
    $pdf->Write(5, $pdf_content['Type'] . ' form submission');

    $pdf->SetY(15);

    foreach ($pdf_content as $key => $value) {
        
        $y = $pdf->GetY();

        if($key=='empty_divider'){

            $pdf->SetY($y+12);
            $pdf->SetFont('Arial', 'B', 13);
            $pdf->Write(5, 'Head of the institution details:');
            $pdf->SetY($y+18);
            continue;

        }

        $pdf->SetY($y+6);

        $pdf->SetFont('Arial', 'B', 11);
        $pdf->Write(5, $key . ': ');
        $pdf->SetFont('Arial', '', 11);
        $pdf->Write(5, $value);

    }


    // $file_id = date('d') . '_' . date('m') . '_' . date('Y') . '_' . rand(1000000,10000000);

    $file_id = clean($pdf_content['Name']) . '_' . '_' . clean($pdf_content['Type']) . '_' . rand(1000000,10000000);
    $filename = $file_id.".pdf";
    $file_location="./app-form-entries/".$filename;
    $pdf->Output($file_location,'F');

    return [$filename, $file_location];

}

if($func == 'form_affiliate'){

    $ref = $_POST['ref'];
    $type = $_POST['type'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $birthdate = $_POST['birthdate'];
    $i_am_a = $_POST['i_am_a'];
    $i_am_a_spec = $_POST['i_am_a_spec'];
    $email = $_POST['email'];
    $area_code = $_POST['area_code'];
    $phone = $_POST['phone'];
    $instagram = $_POST['instagram'];
    $facebook = $_POST['facebook'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $zipcode = $_POST['zipcode'];

    $pdf_content = array("Ref"=>$ref, "Type"=>$type, "Name"=>$name, "Surname"=>$surname, "Birthdate"=>$birthdate, "I am a"=>$i_am_a, "Specification"=>$i_am_a_spec, "Email"=>$email, "Area code"=>$area_code, "Phone"=>$phone, "Instagram"=>$instagram, "Facebook"=>$facebook, "Country"=>$country, "State"=>$state, "City"=>$city, "Address"=>$address, "Zipcode"=>$zipcode,);
    $pdf_data = generate_pdf($pdf_content);

    $cuerpo_mail = '
                    <b>Ref:</b> ' . $ref . '<br>
                    <b>Type:</b> ' . $type . '<br>
                    <b>Name:</b> ' . $name . '<br>
                    <b>Surname:</b> ' . $surname . '<br>
                    <b>Birthdate:</b> ' . $birthdate . '<br>
                    <b>I am a:</b> ' . $i_am_a . '<br>
                    <b>Specification:</b> ' . $i_am_a_spec . '<br>
                    <b>Email:</b> ' . $email . '<br>
                    <b>Area code:</b> ' . $area_code . '<br>
                    <b>Phone:</b> ' . $phone . '<br>
                    <b>Instagram:</b> ' . $instagram . '<br>
                    <b>Facebook:</b> ' . $facebook . '<br>
                    <b>Country:</b> ' . $country . '<br>
                    <b>State:</b> ' . $state . '<br>
                    <b>City:</b> ' . $city . '<br>
                    <b>Address:</b> ' . $address . '<br>
                    <b>Zipcode</b> ' . $zipcode . '<br>';

    echo $cuerpo_mail;

    $mail = new PHPMailer;

    $mail->SMTPDebug=3;

    $mail->setFrom('admin@pathexaminations.com', 'Path');
    $mail->addAddress('admin@pathexaminations.com', 'Path');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);

    $mail->Subject= 'Path application form: new submission ('.$name.')';

    $mail->Body = $cuerpo_mail;
    $mail->AddAttachment($pdf_data[1], $name = $pdf_data[0],  $encoding = 'base64', $type = 'application/pdf');


    if(!$mail->send()){
        return false;
    }else{
        return true;
    }

}


if($func == 'form_individual'){

    $ref = $_POST['ref'];
    $type = $_POST['type'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $birthdate = $_POST['birthdate'];
    $i_am_a = $_POST['i_am_a'];
    $i_am_a_spec = $_POST['i_am_a_spec'];
    $email = $_POST['email'];
    $area_code = $_POST['area_code'];
    $phone = $_POST['phone'];
    $instagram = $_POST['instagram'];
    $facebook = $_POST['facebook'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $zipcode = $_POST['zipcode'];
    $estimated_candidates = $_POST['estimated_candidates'];

    $pdf_content = array("Ref"=>$ref, "Type"=>$type, "Name"=>$name, "Surname"=>$surname, "Birthdate"=>$birthdate, "I am a"=>$i_am_a, "Specification"=>$i_am_a_spec, "Email"=>$email, "Area code"=>$area_code, "Phone"=>$phone, "Instagram"=>$instagram, "Facebook"=>$facebook, "Country"=>$country, "State"=>$state, "City"=>$city, "Address"=>$address, "Zipcode"=>$zipcode, "Estimated # of candidates per year"=>$estimated_candidates);
    generate_pdf($pdf_content);

    $cuerpo_mail = '
                    <b>Ref:</b> ' . $ref . '<br>
                    <b>Type:</b> ' . $type . '<br>
                    <b>Name:</b> ' . $name . '<br>
                    <b>Surname:</b> ' . $surname . '<br>
                    <b>Birthdate:</b> ' . $birthdate . '<br>
                    <b>I am a:</b> ' . $i_am_a . '<br>
                    <b>Specification:</b> ' . $i_am_a_spec . '<br>
                    <b>Email:</b> ' . $email . '<br>
                    <b>Area code:</b> ' . $area_code . '<br>
                    <b>Phone:</b> ' . $phone . '<br>
                    <b>Instagram:</b> ' . $instagram . '<br>
                    <b>Facebook:</b> ' . $facebook . '<br>
                    <b>Country:</b> ' . $country . '<br>
                    <b>State:</b> ' . $state . '<br>
                    <b>City:</b> ' . $city . '<br>
                    <b>Address:</b> ' . $address . '<br>
                    <b>Zipcode:</b> ' . $zipcode . '<br>
                    <b>Estimated # of candidates per year:</b> ' . $estimated_candidates . '<br>';

    echo $cuerpo_mail;

    $mail = new PHPMailer;

    $mail->SMTPDebug=3;

    $mail->setFrom('admin@pathexaminations.com', 'Path');
    $mail->addAddress('admin@pathexaminations.com', 'Path');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);

    $mail->Subject= 'Path application form: new submission ('.$name.')';

    $mail->Body = $cuerpo_mail;

    if(!$mail->send()){
        return false;
    }else{
        return true;
    }

}

if($func == 'form_institution'){
    
    $ref = $_POST['ref'];
    $type = $_POST['type'];
    $institution_name = $_POST['institution_name'];
    $institution_type = $_POST['institution_type'];
    $institution_type_spec = $_POST['institution_type_spec'];
    $institution_email = $_POST['institution_email'];
    $institution_phone = $_POST['institution_phone'];
    $website = $_POST['website'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $staff = $_POST['staff'];
    $rooms = $_POST['rooms'];
    $room_capacity = $_POST['room_capacity'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $zipcode = $_POST['zipcode'];
    $estimated_candidates = $_POST['estimated_candidates'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $birthdate = $_POST['birthdate'];
    $i_am_a = $_POST['i_am_a'];
    $i_am_a_spec = $_POST['i_am_a_spec'];
    $email = $_POST['email'];
    $area_code = $_POST['area_code'];
    $phone = $_POST['phone'];

    $pdf_content = array("Ref"=>$ref, "Type"=>$type, "Institution name"=>$institution_name, "Institution type"=>$institution_type, "Specification"=>$institution_type_spec, "Institution email"=>$institution_email, "Institution phone"=>$institution_phone, "Website"=>$website, "Facebook"=>$facebook, "Instagram"=>$instagram, "Staff"=>$staff, "Rooms"=>$rooms, "Room capacity"=>$room_capacity, "Country"=>$country, "State"=>$state, "City"=>$city, "Address"=>$address, "Zipcode"=>$zipcode, "Estimated # of candidates per year"=>$estimated_candidates,"empty_divider"=>"", "Name"=>$name, "Surname"=>$surname, "Birthdate"=>$birthdate, "I am a"=>$i_am_a, "Specification"=>$i_am_a_spec, "Email"=>$email, "Area code"=>$area_code, "Phone"=>$phone);
    generate_pdf($pdf_content);


    $cuerpo_mail = '
                    <b>Ref:</b> ' . $ref . '<br>
                    <b>Type:</b> ' . $type . '<br>
                    <b>Institution name:</b> ' . $institution_name . '<br>
                    <b>Institution type:</b> ' . $institution_type . '<br>
                    <b>Specification:</b> ' . $institution_type_spec . '<br>
                    <b>Institution email:</b> ' . $institution_email . '<br>
                    <b>Institution phone:</b> ' . $institution_phone . '<br>
                    <b>Website:</b> ' . $website . '<br>
                    <b>Facebook:</b> ' . $facebook . '<br>
                    <b>Instagram:</b> ' . $instagram . '<br>
                    <b>Number of staff:</b> ' . $staff . '<br>
                    <b>Number of rooms:</b> ' . $instagram . '<br>
                    <b>Approximate # of candidates per room:</b> ' . $room_capacity . '<br>
                    <b>Country:</b> ' . $country . '<br>
                    <b>State:</b> ' . $state . '<br>
                    <b>City:</b> ' . $city . '<br>
                    <b>Address:</b> ' . $address . '<br>
                    <b>Zipcode:</b> ' . $zipcode . '<br>
                    <b>Estimated # of candidates per year:</b> ' . $estimated_candidates . '<br><br>
                    
                    <b>Head of the institution details</b>
                    <br>
                    <b>Name:</b> ' . $name . '<br>
                    <b>Surname:</b> ' . $surname . '<br>
                    <b>Birthdate:</b> ' . $birthdate . '<br>
                    <b>I am a:</b> ' . $i_am_a . '<br>
                    <b>Specification:</b> ' . $i_am_a_spec . '<br>
                    <b>Email:</b> ' . $email . '<br>
                    <b>Area code:</b> ' . $area_code . '<br>
                    <b>Phone:</b> ' . $phone . '<br>';

    echo $cuerpo_mail;

    $mail = new PHPMailer;

    $mail->SMTPDebug=3;

    $mail->setFrom('admin@pathexaminations.com', 'Path');
    $mail->addAddress('admin@pathexaminations.com', 'Path');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);

    $mail->Subject= 'Path application form: new submission ('.$name.')';

    $mail->Body = $cuerpo_mail;

    if(!$mail->send()){
        return false;
    }else{
        return true;
    }

}

if($func=='enviar_mail'){

    echo 'Llego a la api';
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    
    $mail = new PHPMailer;
    
    $mail->SMTPDebug=3;
    
    $mail->setFrom($email, $name);
    $mail->addAddress('info@pathexaminations.com', 'Path');
    $mail->addReplyTo($email, $name);
    
    $mail->isHTML(true);
    
    $mail->Subject='New message: ' . $name;
    
    $mail->Body = utf8_decode('Name: ' . $name . '<br>
                   Email: ' . $email . '<br>
                   Message: ' . $message . '<br>');
    
    if(!$mail->send()){
        echo 'No se pudo enviar';
    }else{
        echo 'exito';
    }
}


if($func=='subscribe'){

    echo 'Llego a la api';
    
    $email = $_POST['email'];

    $mail = new PHPMailer;
    
    $mail->SMTPDebug=3;
    
    $mail->setFrom($email, '');
    $mail->addAddress('info@pathexaminations.com', 'Path');
    $mail->addReplyTo($email, '');
    
    $mail->isHTML(true);
    
    $mail->Subject='New subscriber: ' . $email;
    
    $mail->Body = utf8_decode('Email: ' . $email);
    
    if(!$mail->send()){
        echo 'No se pudo enviar';
    }else{
        echo 'exito';
    }
}



if($func=='inbuilt_form'){

    echo 'Llego a la api';
    
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $meet_path = $_POST['meet_path'];
    $describe = $_POST['describe'];
    

    
    $mail = new PHPMailer;
    
    $mail->SMTPDebug=3;
    
    $mail->setFrom($email, $name);
    $mail->addAddress('info@pathexaminations.com', 'Path');
    $mail->addReplyTo($email, $name);
    
    $mail->isHTML(true);
    
    $mail->Subject='Path Inbuilt Form: ' . $name;
    
    $mail->Body = utf8_decode('Name: ' . $name . '<br>
                   Surname: ' . $surname . '<br>
                   Email: ' . $email . '<br>
                   Phone: ' . $phone . '<br>
                   Country: ' . $country . '<br>
                   City: ' . $city . '<br>
                   Meet path: ' . $meet_path . '<br>
                   Describe: ' . $describe . '<br>');
    
    if(!$mail->send()){
        echo 'No se pudo enviar';
    }else{
        echo 'exito';
    }
}


if($func=='init_checkout'){

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $id_number = $_POST['id_number'];
    $birthdate = $_POST['birthdate'];
    $email = $_POST['email'];
    $area_code = $_POST['area_code'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $zipcode = $_POST['zipcode'];
    $detalle_pedido = $_POST['detalle_pedido'];
    $detalle_pedido = json_decode($detalle_pedido);

    $exam = $detalle_pedido->exam;
    $final_price = $detalle_pedido->final_price;

    $modules_text = '<br><b>Modules: </b><br>';

    foreach ($detalle_pedido->module as $module) {
        $modules_text .= '<b>Module:</b> ' . $module->module . '<br>';
        $modules_text .= '<b>Date:</b> ' . $module->date . '<br>';
        $modules_text .= '<b>Time:</b> ' . $module->time . '<br><br>';
    }


    $cuerpo_mail = '<b>Name:</b> ' . $name . '<br>
                   <b>Surname:</b> ' . $surname . '<br>
                   <b>ID number:</b> ' . $id_number . '<br>
                   <b>Birthdate:</b> ' . $birthdate . '<br>
                   <b>Email:</b> ' . $email . '<br>
                   <b>Area code:</b> ' . $area_code . '<br>
                   <b>Phone:</b> ' . $phone . '<br>
                   <b>Country:</b> ' . $country . '<br>
                   <b>State:</b> ' . $state . '<br>
                   <b>City:</b> ' . $city . '<br>
                   <b>Address:</b> ' . $address . '<br>
                   <b>Zipcode:</b> ' . $zipcode . '<br>
                   <b>Exam :</b> ' . $exam . '<br>
                    ' . $modules_text . '
                   <b>Final price :</b> ' . $final_price . '<br>';

    // echo 'CUERPO MAIL: ' . $cuerpo_mail;

    $mail = new PHPMailer;

    $mail->SMTPDebug=3;

    $mail->setFrom('admin@pathexaminations.com', 'Path');
    $mail->addAddress('admin@pathexaminations.com', 'Path');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);

    $mail->Subject= 'Book an exam: New checkout ('.$name.')';

    $mail->Body = $cuerpo_mail;

    // if(!$mail->send()){
    //     return false;
    // }else{
    //     return true;
    // }

    $order_detail = json_encode($detalle_pedido);

    // Lo cargamos en la BBDD
    $q = "INSERT INTO checkouts (name, surname, mail, country, exam, order_detail, status) VALUES (?,?,?,?,?,?,?)";        
    $stmt= $pdo->prepare($q);
    $stmt->execute([$name, $surname, $email, $country, $exam, $order_detail, 0]);

    $last_insert_id = $pdo->lastInsertId();

    if($stmt){
        echo '{"error": 0, "id":'.$last_insert_id.'}';
    }else{
        echo '{"error": 1, "id": 0}';
    }


}





 ?>