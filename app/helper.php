<?php

if(!function_exists('setSession'))
{
    function setSession($userData)
    {
        // Start the session
        session()->start();

        // store data in an array
        $data = [
            'userId'            =>      $userData->user_id,
            'userName'          =>      $userData->user_name,
            'userEmail'         =>      $userData->user_email,
            'userPhone'         =>      $userData->user_phone,
            'userGender'        =>      $userData->user_gender,
            'userAddress'       =>      $userData->user_address,
            'userDob'           =>      $userData->user_dob,
            'userType'          =>      $userData->user_type,
            'userRole'          =>      $userData->user_role,
            'userTeam'          =>      $userData->user_team,
            'userStatus'        =>      $userData->user_status,
            'userJoiningDate'   =>      $userData->user_joining_date,
            'userCreatedBy'     =>      $userData->user_created_by,
            'userUpdatedBy'     =>      $userData->user_updated_by,
            'userCreatedAt'     =>      $userData->user_created_at,
            'userUpdatedAt'     =>      $userData->user_updated_at,
        ];

        // Store an array in the session
        session(['data' => $data]);

    }
}



?>
