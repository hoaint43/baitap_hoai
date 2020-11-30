<?php
    include 'Paginator.class.php';
?>
<?php
//create a connection to mysql
	$conn       = new mysqli('SERVER HOST NAME','MYSQL USER NAME', 'MY SQL USER PASSWORD','PROJECT DATABASE NAME' );
	
	//DEFINE LIMIT for PER PAGE now 25 is page limit
    $limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 25;
	
	//DEFAULT PAGE NUMBER if No page in url
    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
	
	//Number of frequency links to show at one time ; 
    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
   
   //your query here in query varriable
    $query  = "Select * from customers  ";
 
 //create a paging class object with connection and query parameters
    $Paginator  = new Paginator( $conn, $query );
 
 //get the results from paginator class
    $results    = $Paginator->getData( $limit, $page ); 
 ?>
<table class="table table-striped">
    <thead>
    <tr>
    
        <th>Customer Id</th>
        <th>Customer Name</th>
        <th>Customer Email</th>
        <th>Customer Address</th>
        
    </tr>
    </thead>
    <tbody>
    <?php
    
    if(isset($results) && count( $results->data ) > 0){
        for( $i = 0; $i < count( $results->data ); $i++ ) { ?>
    <tr>
    <td><?php echo $results->data[$i]['id']; ?></td>
    <td><?php echo $results->data[$i]['name']; ?></td>
    <td><?php echo $results->data[$i]['email']; ?></td>
    <td><?php echo $results->data[$i]['address']; ?></td>
    
        
    </tr>
    <?php }
    } ?>
    
    </tbody>
</table>