<?php
extract($_POST);

$query ="INSERT into tbl_customer_info(cust_name,cust_address, cust_date, cust_email, cust_contact_number) values('$c_name','$c_address','$c_date','$c_email','$c_num')";
$compile=mysqli_query($con, $query);

$select_id="select max(id) from booked_customer";
$row=mysqli_query($con,$select_id);
$fetch=mysqli_fetch_row($row);

//inserting seat number
foreach ($seat as $seatNum) 

{
	# seat is stored in seatNum

$query_2 = " insert into tbl_seat (customer_id, destination_id, seat_number,book_date) values('$fetch[0]' '$destination','$seatNum','$c_date')";
$compile_2 = mysqli_query($con, $query_2);
}
header("location:index.php?q=book_ticket")
?>