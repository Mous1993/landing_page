<?php
    require '../Model/ClientModel.php';

    $errors = [];
    $data = [];
    $name = stripcslashes(strip_tags($_POST['name']));
    $email = stripcslashes(strip_tags($_POST['email']));
    $phone = stripcslashes(strip_tags($_POST['phone']));

    $ClientModel = new ClientModel();

    // check if this email already subscribed
    $EmailStatus = $ClientModel->fetchClient($email)['status'];

    
    // name validations
    if (preg_match('/[^A-Za-z\s]/', $name)) {
        $errors['name'] = 'Only Alphabets are allowed.';
    }
    if (empty($name)) {
        $errors['name'] = 'Name is required.';
    }
    // Email validations
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($email)) {
        $errors['email'] = "Please enter a valid email";
    }
    if (!empty($EmailStatus)) {
    $errors['email'] = 'Sorry. This Email Address has been taken.';
    }
    // phone validations
    if (preg_match('/[^0-9_]/', $phone) || empty($phone)) {
    $errors['phone'] = 'Please, use a valid phone number.';
    }

    // return errors
    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors'] = $errors;
    } else {
        // if no errors create client/subsriber
        $Payload = array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone
          );

        $Response = $ClientModel->createClient($Payload);
        // if faild to create
        if (!$Response['status']) {
            $data['success'] = false;
            $data['message'] = 'Sorry, An unexpected error occurred and your request could not be completed.';
        }else{
            // if subscriber/client created 
            $data['success'] = true;
            $data['message'] = 'Horaaay!!! You Have Successfully Registered To The Event.';
        }
    
       
    }
    
    echo json_encode($data);

 ?>