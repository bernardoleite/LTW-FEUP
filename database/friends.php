<?php
function getListFriends($username)
{
	global $dbh;
	$stmt = $dbh->prepare("SELECT usr_2 FROM friends_with WHERE usr_1 LIKE :username GROUP BY usr_2");
	$stmt->execute([
		':username' => $username,
	]);

	return $stmt->fetchAll();
}

function getAllUsers($username) {
	global $dbh;
	$stmt = $dbh->prepare('SELECT usr_username FROM user
		WHERE usr_username NOT IN (
		SELECT usr_2 FROM friends_with WHERE usr_1 LIKE :username) AND usr_username <> :username');
	$stmt->execute([
		':username' => $username,
	]);
	return $stmt->fetchAll();
}

function addFriend($username, $friend) {

  global $dbh;
  $stmt = $dbh->prepare('INSERT INTO friends_with VALUES(:username, :friend)');
  $stmt->execute([
    ':username' => $username,
    ':friend' => $friend, 
  ]);

  $stmt = $dbh->prepare('INSERT INTO friends_with VALUES(:friend, :username)');
  $stmt->execute([
    ':friend' => $friend, 
    ':username' => $username,
  ]);

  return $stmt->fetchAll();

}
?>