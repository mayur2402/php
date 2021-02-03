<?php
$bookopen=new DOMDocument('1.0','iso-8859-1');
$bookopen->load('Book.xml');
$bookread=$bookopen->getElementByTagName("book");
echo "Book names are";
foreach($bookread as $read)
{
	$bookno1=$read->getElementsByTagName("bookno");
	$bookname1=$read->getElementsByTagName("bookname");
	$author1=$read->getElementsByTagName("author");
	$price1=$read->getElementsByTagName("price");
	$year1=$read->getElementsByTagName("year");
	echo $bookno1."<br>".$bookname1."<br>".$author1."<br>".$price1."<br>".$year."<br>";
}
?>
