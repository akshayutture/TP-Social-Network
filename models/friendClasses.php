<?php

Class Friends
{
	public $id1;
 	public $id2;
}
 

Class FriendRequests
{
	public $senderId;
	//The person who made the friend request.
 	public $receiverId;
}

Class Interest
{
	//just a primary key. 
	public $entryId;
	//The person who the interest is for
 	public $userId;
 	public $interestText;
}

?>
