<h3>ادارة الكتب</h3>
<a href='?page=Cbooks&action=add'> اضافة كتاب</a>
<?php
// اضافة كتاب 
if(@$_GET['action'] && $_GET['action']== 'add'){
	ECHO " 
			<form action='AddBook.php' method='post'>
                    <table>
                             
                            <tr>
                             <td>اسم الكتاب</td>
                                <td><input type='text' name='BName'/></td>
                            </tr>
                            <tr>
                                	<td>عن الكتاب</td>
                                <td><input type='text' name='BAbout'/></td>
                            </tr>
							<tr>
                                <td>الكاتب</td>
                               <td><input type='text' name='BWriter'/></td>
                            </tr>
                            <tr>
                                <td>التصنيف</td>
								 <td>
								<select name='BCategory' width='20'>
								
								<option value='0'>علمية </option>
								<option value='1'>اجتماعية</option>
								</select>
								</td>
                                
                            </tr>
                            <tr>
                               <td>الكتاب</td>
                                <td><input type='FILE' name='Book'/></td>
                            </tr>
                            
							  <tr>
                                 
                                <td colspan='2'><input type='submit' name='save' value='اضافة'/></td>
                            </tr>
                    </table>
                          

            </form>";	
}
// حزف كتاب  
if(@$_GET['action'] && $_GET['action']== 'delete'){
	include_once ('config.php');
	$BID =  $_GET['BID'];
	$sql = " delete from books  where BId=".$BID ;
	$result = mysqli_query($conn,$sql);
		if($result == true){
			echo "<script>Alert='".$BID."تم حزف الكتاب رقم '</script>";
			header("location:Cpanel.php?page=Cbooks");
		}
}

// التعديل =========
if(@$_GET['action'] && $_GET['action']== 'edit'){
	include_once ('config.php');
	  $BID =  $_GET['BID'];
	  $sql = " select * from books  where BId = ".$BID ;
	$result = mysqli_query($conn,$sql);
	
	$row = mysqli_fetch_assoc($result);
 
		ECHO " 
			<form action='AddBook.php' method='post'>
                    <table>
                             
                            <tr>
                             <td>اسم الكتاب</td>
                                <td><input type='text' name='BName' value =".$row['BName']."/></td>
                            </tr>
                            <tr>
                                	<td>عن الكتاب</td>
                                <td><input type='text' name='BAbout' value =".$row['BAbout']."/></td>
                            </tr>
							<tr>
                                <td>الكاتب</td>
                               <td><input type='text' name='BWriter' value =".$row['BWriter']."/></td>
                            </tr>
                            <tr>
                                <td>التصنيف</td>
								 <td>
								<select name='BCategory' width='20'>
								
								<option value='0'>علمية </option>
								<option value='1'>اجتماعية</option>
								</select>
								</td>
                                
                            </tr>
                            <tr>
                               <td>الكتاب</td>
                                <td><input type='FILE' name='Book' value =".$row['Book']."/></td>
                            </tr>
                            
							  <tr>
                                 
                                <td colspan='2'><input type='submit' name='save' value='اضافة'/></td>
                            </tr>
                    </table>
                          

            </form>";	
}
// عرض الكتاب 
include_once ('config.php');
$sql = "select * from books order by BId desc";
$result = mysqli_query($conn,$sql);
 if(@mysqli_num_rows($result)> 0){
		echo "<table border ='1' width='100%' cellpadding='0' cellspacing='0' >";
		echo "<tr>
				<td>رقم الكتاب</td>
				<td>اسم الكتاب</td>
				<td>عن الكتاب</td>
				<td>التصنيف</td>
				<td>الكتاب</td>
				<td>الكاتب</td>
				<td>تاريخ النشر</td>
				<td>العمليات</td>
			
			</tr>";
		 
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr>
				<td>".$row['BId']."</td>
				<td>".$row['BName']."</td>
				<td>".$row['BAbout']."</td>
				<td>".$row['BCategory']."</td>
				<td>".$row['Book']."</td>
				<td>".$row['BWriter']."</td>
				<td>".$row['date']."</td>
				<td>
					<a href='?page=Cbooks&action=edit&BID=".$row['BId']."'>تعديل</a> -
					<a href='?page=Cbooks&action=delete&BID=".$row['BId']."'>حزف</a>
				</td>
				 
			
			</tr>";
		}
		echo "</table>";
 }else{
	 echo "لايوجد كتاب  ";
 }

 mysqli_close($conn);


?>