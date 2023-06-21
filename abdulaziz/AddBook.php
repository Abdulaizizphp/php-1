<?PHP

INCLUDE_ONCE('config.php'); // الاتصال بقاعدة البيانات
					 //`BId`, `BName`, `BAbout`, `BCategory`, `Book`, `BWriter`, `date`SELECT * FROM `books` WHERE 1
								if(ISSET($_POST['save']) && @$_POST['BName'] != null ){
								 $BName = $_POST['BName'];
								 $BAbout = $_POST['BAbout'];
								 $BCategory = $_POST['BCategory'];
								 $Book = $_POST['Book'];
								 $BWriter = $_POST['BWriter'];
								 
								 @$sql="insert into  books (BName, BAbout,BCategory,Book,BWriter)
								 values('$BName','$BAbout','$BCategory','$Book','$BWriter')";
								$result = mysqli_query($conn,$sql);
							 
								if($result == true){
									echo ' تم اضافة الكتاب';
									header("location:Cpanel.php?page=Cbooks");
									
								}
							 
							}
						
 mysqli_close($conn);
 ?>