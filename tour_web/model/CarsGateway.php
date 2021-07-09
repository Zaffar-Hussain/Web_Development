<?php


class CarsGateway {
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

    public function get_id($con) {

    	$result = mysqli_query($con,"SELECT max(car_id) AS maxid FROM car_details ");
		$id=1;
		if(mysqli_num_rows($result))
		{
			if($row=mysqli_fetch_assoc($result))
				$id=$row['maxid']+1;
		}
        return $id;
    }


}

?>