
<html>
    <head>
    <link rel ="stylesheet" type="text/css" href="HelpersStylesheet.css">    
    </head>
    <?php
    
    #John Kendrat, Devin Racaniello, Colin Salvato, Ian Bette, Brandon Kline
/*
# Shows the records in prints
function show_records($dbc) {
	# Create a query to get the name and price sorted by price
	$query = 'SELECT num, fname, lname FROM presidents ORDER BY num ASC' ;

	# Execute the query
	$results = mysqli_query( $dbc , $query ) ;
	check_results($results) ;

	# Show results
	if( $results )
	{
  		# But...wait until we know the query succeed before
  		# rendering the table start.
  		echo '<H1>Presidents</H1>' ;
  		echo '<TABLE>';
  		echo '<TR>';
  		echo '<TH>Number</TH>';
  		echo '<TH>Last Name</TH>';
        echo '<TH>First Name</TH>';
  		echo '</TR>';

  		# For each row result, generate a table row
  		while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  		{
        echo '<TR>' ;
        echo '<TD>' . $row['num'] . '</TD>' ;
        echo '<TD>' . $row['fname'] . '</TD>' ;
        echo '<TD>' . $row['lname'] . '</TD>' ;
		echo '</TR>' ;
  		}

  		# End the table
  		echo '</TABLE>';

  		# Free up the results in memory
  		mysqli_free_result( $results ) ;
	}
}
*/
function lost($dbc) {
	# Create a query to get the name and price sorted by price
	$query = 'SELECT id, description, finder, owner, status FROM stuff ORDER BY create_date ASC' ;

	# Execute the query
	$results = mysqli_query( $dbc , $query ) ;
	check_results($results) ;

	# Show results
	if( $results )
	{
  		# But...wait until we know the query succeed before
  		# rendering the table start.
  		echo '<H1 class = ListedItems>Listed Items</H1>' ;
  		echo '<TABLE Id = LostSomethingTable>';
  		echo '<TR>';
        echo '<TH>Id</TH>';
  		echo '<TH>Description</TH>';
        echo '<TH>Finder</TH>';
        echo '<TH>Owner</TH>';
        echo '<TH>Status</TH>';
  		echo '</TR>';

  		# For each row result, generate a table row
  		while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  		{
        echo '<TR>' ;
        $alink = '<A HREF=quickLinks.php?id=' . $row['id']  . '>' . $row['id'] . '</A>' ;
        echo '<TD ALIGN=right>' . $alink . '</TD>' ;   
        echo '<TD>' . $row['description'] . '</TD>' ; 
        echo '<TD>' . $row['finder'] . '</TD>' ;
        echo '<TD>' . $row['owner'] . '</TD>' ;
        echo '<TD>' . $row['status'] . '</TD>' ;
		echo '</TR>' ;
  		}

  		# End the table
  		echo '</TABLE>';

  		# Free up the results in memory
  		mysqli_free_result( $results ) ;
	}
}
    
function lost_record($dbc, $id) {
	# Create a query to get the name and price sorted by price
	$query = 'SELECT stuff.id, stuff.description, stuff.finder, stuff.owner, stuff.status, locations.name FROM stuff, locations where stuff.id = locations.id AND stuff.id = '  . $id .  ' ORDER BY stuff.create_date ASC' ;

	# Execute the query
	$results = mysqli_query( $dbc , $query ) ;
	check_results($results) ;

	# Show results
	if( $results )
	{
  		# But...wait until we know the query succeed before
  		# rendering the table start.
  		echo '<H1 class = ListedItems>Listed Items</H1>' ;
  		echo '<TABLE Id = LostSomethingTable>';
  		echo '<TR>';
        echo '<TH>Id</TH>';
  		echo '<TH>Description</TH>';
        echo '<TH>Finder</TH>';
        echo '<TH>Owner</TH>';
        echo '<TH>Location</TH>';
        echo '<TH>Status</TH>';
  		echo '</TR>';

  		# For each row result, generate a table row
  		if ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  		{
        echo '<TR>' ;
        $alink = '<A HREF=quickLinks.php?id=' . $row['id']  . '>' . $row['id'] . '</A>' ;
        echo '<TD ALIGN=right>' . $alink . '</TD>' ;   
        echo '<TD>' . $row['description'] . '</TD>' ; 
        echo '<TD>' . $row['finder'] . '</TD>' ;
        echo '<TD>' . $row['owner'] . '</TD>' ;
        echo '<TD>' . $row['name'] . '</TD>' ;
        echo '<TD>' . $row['status'] . '</TD>' ;
		echo '</TR>' ;            
  		}

  		# End the table
  		echo '</TABLE>';

  		# Free up the results in memory
  		mysqli_free_result( $results ) ;
	}
}
    
function lost_record_secure($dbc, $id) {
	# Create a query to get the name and price sorted by price
	$query = 'SELECT stuff.id, stuff.description, stuff.finder, stuff.owner, stuff.status, locations.name, stuff.ownerNum, stuff.finderNum FROM stuff, locations where stuff.id = locations.id AND stuff.id = '  . $id .  ' ORDER BY stuff.create_date ASC' ;

	# Execute the query
	$results = mysqli_query( $dbc , $query ) ;
	check_results($results) ;

	# Show results
	if( $results )
	{
  		# But...wait until we know the query succeed before
  		# rendering the table start.
  		echo '<TABLE Id = LostSomethingTable>';
  		echo '<TR>';
        echo '<TH>Id</TH>';
  		echo '<TH>Description</TH>';
        echo '<TH>Finder</TH>';
        echo '<TH>Owner</TH>';
        echo '<TH>Location</TH>';
        echo '<TH>Status</TH>';
        echo '<TH>Finder Phone</TH>';
        echo '<TH>Owner Phone</TH>';
  		echo '</TR>';

  		# For each row result, generate a table row
  		if ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  		{
        echo '<TR>' ;
        $alink = '<A HREF=quickLinks.php?id=' . $row['id']  . '>' . $row['id'] . '</A>' ;
        echo '<TD ALIGN=right>' . $alink . '</TD>' ;   
        echo '<TD>' . $row['description'] . '</TD>' ; 
        echo '<TD>' . $row['finder'] . '</TD>' ;
        echo '<TD>' . $row['owner'] . '</TD>' ;
        echo '<TD>' . $row['name'] . '</TD>' ;
        echo '<TD>' . $row['status'] . '</TD>' ;
        echo '<TD>' . $row['finderNum'] . '</TD>' ;
        echo '<TD>' . $row['ownerNum'] . '</TD>' ;
		echo '</TR>' ;            
  		}

  		# End the table
  		echo '</TABLE>';

  		# Free up the results in memory
  		mysqli_free_result( $results ) ;
	}
}


function users($dbc) {
	# Create a query to get the name and price sorted by price
	$query = 'SELECT user_id, username, pass FROM users ORDER BY user_id ASC' ;

	# Execute the query
	$results = mysqli_query( $dbc , $query ) ;
	check_results($results) ;

	# Show results
	if( $results )
	{
  		# But...wait until we know the query succeed before
  		# rendering the table start.

  		echo '<H1>Admins</H1>' ;
  		echo '<TABLE id = AdminTable>';
  		echo '<TR>';
        echo '<TH>Admin Id</TH>';
        echo '<TH>Username</TH>';
  		echo '<TH>Password</TH>';
  		echo '</TR>';

  		# For each row result, generate a table row
  		while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  		{
        echo '<TR>' ;
        echo '<TD>' . $row['user_id'] . '</TD>' ;
        echo '<TD>' . $row['username'] . '</TD>' ;    
        echo '<TD>' . $row['pass'] . '</TD>' ; 
		echo '</TR>' ;
  		}

  		# End the table
  		echo '</TABLE>';

  		# Free up the results in memory
  		mysqli_free_result( $results ) ;
	}
}




/*
function show_link_records($dbc) {
	# Create a query to get the name and price sorted by price
	$query = 'SELECT num, lname FROM presidents ORDER BY num ASC' ;
	# Execute the query
	$results = mysqli_query( $dbc , $query ) ;
	check_results($results) ;

	# Show results
	if( $results )
	{
  		# But...wait until we know the query succeed before
  		# rendering the table start.
  		echo '<H1>Presidents</H1>' ;
  		echo '<TABLE>';
  		echo '<TR>';
  		echo '<TH>Number</TH>';
  		echo '<TH>Last Name</TH>';
  		echo '</TR>';

  		# For each row result, generate a table row
  		while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  		{
        $alink = '<A HREF=linkypresidents.php?id=' . $row['num']  . '>' . $row['num'] . '</A>' ;
        echo '<TR>' ;
        echo '<TD>' . $row['num'] . '</TD>' ;
        echo '<TD>' . $row['lname'] . '</TD>' ;
        echo '<TD ALIGN=right>' . $alink . '</TD>' ;    
		echo '</TR>' ;
  		}

  		# End the table
  		echo '</TABLE>';

  		# Free up the results in memory
  		mysqli_free_result( $results ) ;
	}
}

function show_record($dbc , $num) {
	# Create a query to get the name and price sorted by price
    $query = 'SELECT id, lname, fname FROM prints WHERE id = ' . $num ;

	# Execute the query
	$results = mysqli_query( $dbc , $query, $num ) ;
	check_results($results) ;
    
    if(!valid_number($num) && !valid_name($fname, $lname))
      echo '<p>Please give a valid number.</p>';
    else if (!valid_name($fname))
      echo '<p>Please complete the first name.</p>';
    else if (!valid_name($lname))
      echo '<p>Please complete the last name.</p>';
    else
        $result = insert_record($dbc, $lname, $fname, $num);

	# Show results
	if( $results )
	{
  		# But...wait until we know the query succeed before
  		# rendering the table start.
  		echo '<H1>Presidents</H1>' ;
  		echo '<TABLE>';
  		echo '<TR>';
  		echo '<TH>Number</TH>';
  		echo '<TH>Last Name</TH>';
        echo '<TH>First Name</TH>';
  		echo '</TR>';

  		# For each row result, generate a table row
  		if ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  		{
        echo '<TR>' ;
        echo '<TD>' . $row['num'] . '</TD>' ;
        echo '<TD>' . $row['fname'] . '</TD>' ;
        echo '<TD>' . $row['lname'] . '</TD>' ;
		echo '</TR>' ;
  		}

  		# End the table
  		echo '</TABLE>';

  		# Free up the results in memory
  		mysqli_free_result( $results ) ;
	}
}

# Inserts a record into the prints table
function insert_record($dbc, $lname, $fname, $num) {
  $query = 'INSERT INTO presidents(lname, fname, num) VALUES ("' . $lname . '" , "' . $fname . '" , ' . $num . ' )' ;
  show_query($query);

  $results = mysqli_query($dbc, $query) ;
  check_results($results) ;

  return $results ;
}


*/
# Shows the query as a debugging aid
function show_query($query) {
  global $debug;

  if($debug)
    echo "<p>Query = $query</p>" ;
}


# Inserts a record into the prints table
function insert_record_owner($dbc, $desc, $oname, $lnum, $num) {
  $query = 'INSERT INTO stuff(location_id,description,create_date,update_date,owner,ownerNum,status) VALUES (' . $lnum . ' , "' . $desc . '" , NOW(), NOW(), "' . $oname . '" , "' . $num .  '" , 2 )' ;
  show_query($query);

  $results = mysqli_query($dbc, $query) ;
  check_results($results) ;

  return $results ;
}

 #Inserts a record into the prints table
function insert_record_finder($dbc, $desc, $fname, $lnum, $num) {
  $query = 'INSERT INTO stuff(location_id,description,create_date,update_date,finder,finderNum,status) VALUES (' . $lnum . ' , "' . $desc . '" , NOW(), NOW(), "' . $fname . '" , "' . $num .  '" , 1 )' ;
  show_query($query);

  $results = mysqli_query($dbc, $query) ;
  check_results($results) ;

  return $results ;
}

function update_record_finder($dbc, $id, $fname, $num) {
  $query = 'UPDATE stuff
  SET finder = "' . $fname . '" , status = 4, finderNum = ' . $num . '
  WHERE id = "' . $id . '"' ;
  show_query($query);

  $results = mysqli_query($dbc, $query) ;
  check_results($results) ;

  return $results ;
}

function update_record_owner($dbc, $id, $oname, $num) {
  $query = 'UPDATE stuff
  SET owner = "' . $oname . '" , status = 4, ownerNum = ' . $num . '
  WHERE id = "' . $id . '"' ;
  show_query($query);

  $results = mysqli_query($dbc, $query) ;
  check_results($results) ;

  return $results ;
}

function update_status($dbc, $id, $status) {
  $query = 'UPDATE stuff
  SET finder = "' . $id . '" , status = ' . $status . '
  WHERE id = "' . $id . '"' ;
  show_query($query);

  $results = mysqli_query($dbc, $query) ;
  check_results($results) ;

  return $results ;
}

function edit_password($dbc, $id, $pass) {
  $query = 'UPDATE users
  SET user_id = "' . $id . '" , pass = "' . $pass . '"
  WHERE user_id = "' . $id . '"' ;
  show_query($query);

  $results = mysqli_query($dbc, $query) ;
  check_results($results) ;

  return $results ;
}

function delete_item($dbc, $id) {
  $query = 'DELETE FROM stuff
  WHERE id = "' . $id . '"' ;
  show_query($query);

  $results = mysqli_query($dbc, $query) ;
  check_results($results) ;

  return $results ;
}

function add_user($dbc, $username, $pass) {

  $query = 'INSERT INTO users(username, pass) VALUES ( "' . $username . '" , "' . $pass . '")' ;
  show_query($query);

  $results = mysqli_query($dbc, $query) ;
  check_results($results) ;

  return $results ; 

    
}

function delete_user($dbc, $id) {
  $query = 'DELETE FROM users
  WHERE user_id = "' . $id . '"' ;
  show_query($query);

  $results = mysqli_query($dbc, $query) ;
  check_results($results) ;

  return $results ;
}



# Checks the query results as a debugging aid
function check_results($results) {
  global $dbc;

  if($results != true)
    echo '<p>SQL ERROR = ' . mysqli_error( $dbc ) . '</p>'  ;
}


/*
 function valid_number($num) {   
    if(empty($num) || !is_numeric($num))
    return false ;   
    else {
    $num = intval($num) ;      if($num <= 0)         return false ;
  }
  return true ; }


function valid_name ($name) {   
    if(empty($name))
    return false ;   
    else 
    return true ;  
  }
  */


?>
</html>