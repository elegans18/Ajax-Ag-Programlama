<?php
require  'db.php';

$sql = mysqli_query($baglantiNo,"SELECT * FROM ders");
/*if(!mysqli_affected_rows($baglantiNo))
{
	echo "deneme";
}
else
{
	echo "basarisiz";	
}*/

/*echo "<table id='mytable'>
		<tr>
			<th>Sıra No</th>
			<th>Ders Kodu</th>
			<th>Ders Adı</th>
		</tr>";*/
		
		$strXML= '<?xml version="1.0" encoding="UTF-8"?><dersler>';
while ($row = mysqli_fetch_array($sql)) {
    /*echo "
		<tr>
			";
	echo "<td>" . $row['sira_no'] . "</td>";
    echo "<td>" . $row['ders_kodu'] . "</td>";
    echo "<td>" . $row['ders_adi'] . "</td>";
    echo "
		</tr>";*/

		$strXML.= "<ders><sirano> ". $row['sira_no']."</sirano><derskodu>".$row['ders_kodu']."</derskodu><dersadi>".$row['ders_adi']."</dersadi><dersicerik>".$row['dersicerik']."</dersicerik></ders>";
	//$str[] = array('sira_no'=> $row['sira_no'],'ders_kodu'=> $row['ders_kodu'],'ders_adi'=> $row['ders_adi'],'dersicerik'=> $row['dersicerik']);
}
//echo "</table>";
$strXML.= '</dersler>';
echo ($strXML);
//print json_encode($str,JSON_UNESCAPED_UNICODE);

?>

