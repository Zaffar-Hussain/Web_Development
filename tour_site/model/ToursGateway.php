<?php


class ToursGateway {
	public function checkUser($uid,$pwd,$con) {

        $result = mysqli_query($con,"SELECT user_id,password FROM users");
        $flag= '';
        if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				if($row['user_id']==$uid && $row['password']==$pwd)
				{
					$flag=true;
					break;
				}	
				else
					$flag=false;		
			}
		}
        return $flag;
    }

    public function checkUserType($uid,$type,$con) {

    	$result = mysqli_query($con,"SELECT user_id,type FROM users WHERE user_id='$uid'");
        $flag= '';
        if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				if($row['type']=='admin' || $row['type']=='user')
				{
					$flag=true;
					break;
				}	
				else
					$flag=false;		
			}
		}
        return $flag;
    }


    public function insert( $detail_id, $name, $phoneNumber, $email, $message ,$con) {
        
        $dbId = ($detail_id != NULL)?"'".mysqli_real_escape_string($con,$detail_id)."'":'NULL';
        $dbName = ($name != NULL)?"'".mysqli_real_escape_string($con,$name)."'":'NULL';
        $dbPhone = ($phoneNumber != NULL)?"'".mysqli_real_escape_string($con,$phoneNumber)."'":'NULL';
        $dbEmail = ($email != NULL)?"'".mysqli_real_escape_string($con,$email)."'":'NULL';
        $dbMessage = ($message != NULL)?"'".mysqli_real_escape_string($con,$message)."'":'NULL';
        
        mysqli_query($con,"INSERT INTO contact_details (detail_id, name, phone_number, email, message) VALUES ($dbId, $dbName, $dbPhone, $dbEmail, $dbMessage)");
        return mysqli_insert_id($con);
    }


    public function get_id($con) {

    	$result = mysqli_query($con,"SELECT max(detail_id) AS maxid FROM contact_details ");
		$id=1;
		if(mysqli_num_rows($result))
		{
			if($row=mysqli_fetch_assoc($result))
				$id=$row['maxid']+1;
		}
        return $id;
    }


    public function selectAll($con) {

        $dbres = mysqli_query($con,"SELECT * FROM contact_details");
        
        $contact_details = array();
        while ( ($obj = mysqli_fetch_object($dbres)) != NULL ) {
            $contact_details[] = $obj;
        }
        
        return $contact_details;
    }

}

?>