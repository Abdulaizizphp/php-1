<?php
session_start();
?>
<!DOCTYPE html>
 <html xmlns="http://www.w3.org/1999/xhtml" dir ="rtl">
  <head>
    <title>              مكتبة الوفاق الالكترونية     </title>
    <link href="Css/StyleSheet.css" rel="stylesheet" type="text/css" />
      <link href="Css/MetaphorCss.css" rel="stylesheet" type="text/css" />
      <link href="Css/MenuV.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <table class="tdtable"  align="center"  >
            <tr>
                <td colspan="3">
                    <img alt="" src="images/hoder.jpg" height="120" width="960" />
                </td>
            </tr>
            <tr>
                <td style="width: 200px; vertical-align: top;">
                <?php
                echo $_SESSION["Username"];
                ?>
                    <table style="width:100%;">
                        <tr>
                            <td class="tdtitel">    خدمات الموقع </td>
                        </tr>
                        <tr>
                            <td> 
                             <div  class="menu_simple">
                                    <ul> 
                                        <li><a href="#" >          من نحن      </a></li>
                                        <li><a href="#" >             معرض الكتب           </a></li>
                                       <li><a href="#"  >                      اتصل بنا   </a></li>
                                     </ul>
                             </div> 
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                 
                     </td>
                    <td style="vertical-align: top; width: 540px;">   
                    <div>
                    <?php
                    // تسجيل مستخدم جديد  
						INCLUDE_ONCE('config.php'); // الاتصال بقاعدة البيانات
						
								if(ISSET($_POST['save'])){
								 $Name = $_POST['Name'];
								 $Email = $_POST['Email'];
								 $Username = $_POST['Username'];
								 $Userpassword = $_POST['Userpassword'];
								 $Phone = $_POST['Phone'];
								 $Privalige = $_POST['Privalige'];
								 @$sql="insert into  users (Name, Email, Username,Userpassword,Phone,Privalige)
								 values('$Name','$Email','$Username','$Userpassword','$Phone','$Privalige')";
								$result = mysqli_query($conn,$sql);
							 
								if($result == true){
									echo 'تم اضافة مستخدم جديد';
								}
							 
							}
								

						 
								 
							


						mysqli_close($conn);
                    

                    ?>
                        <form action='logup.php' method='post'>
                        <table>
                            <tr>
                                <td>الاسم </td>
                                <td><input type='text' name='Name'/></td>
                            </tr>
                            <tr>
                                <td>البريد الالكترونى </td>
                                <td><input type='text' name='Email'/></td>
                            </tr>
                            <tr>
                                <td>اسم المستخدم </td>
                                <td><input type='text' name='Username'/></td>
                            </tr>
                            <tr>
                                <td>كلمة المرور </td>
                                <td><input type='text' name='Userpassword'/></td>
                            </tr>
                            <tr>
                                <td>الهاتف </td>
                                <td><input type='text' name='Phone'/></td>
                            </tr>
                            <tr>
                                <td>الصلاحية </td>
                                <td>
								<select name='Privalige' width='20'>
								
								<option value='0'>متستخدم</option>
								<option value='1'>مدير</option>
								</select>
								</td>
                            </tr>
                            <tr>
                                 
                                <td colspan='2'><input type='submit' name='save' value='تسجيل'/></td>
                            </tr>
                        </table>
                          

                        </form>

                     </div> 
                </td>
                 
            </tr>
            <tr>
                <td colspan="3" class="tdtitel">     جميع الحقوق محفوظى لــ مكتبة الوفاق الالكترونية&nbsp;</td>
            </tr>
        </table>
     
</body>
</html>
