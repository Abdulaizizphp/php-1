<?php
session_start();
if(!Isset($_SESSION['ADMIN'])){
	header("location:index.html");
}
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
    <table class="tdtable"  align="center"   >
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
                    <table style="width:100%;" >
                        <tr>
                            <td class="tdtitel">    خدمات الموقع </td>
                        </tr>
                        <tr>
                            <td> 
                             <div  class="menu_simple">
                                    <ul > 
                                        <li><a href="#" > من نحن </a></li>
                                        <li><a href="#" > معرض الكتب </a></li>
                                       <li><a href="#"  > اتصل بنا </a></li>
                                       <li><a href="?page=users"  > اعداد المستخدمين </a></li>
                                       <li><a href="?page=Cbooks"  > اعداد الكتب </a></li>
                                       <li><a href="?page=commant"  >التعليقات </a></li>
                                     </ul>
                             </div> 
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                 
                     </td>
                    <td style="vertical-align: top; width: 100%;">   
                    <div class='content'>
					<?php
					// لعرض الصفعة على لوحة التحكم 
					if(isset($_GET['page'])){
						$url = $_GET['page'].".php"; 
						if(is_file($url )){
								include_once($url);
						}else{
							echo "لايوجد ملف باسم ".$url;
						}
					}
					
					?>
                     </div> 
                </td>
                 
            </tr>
            <tr>
                <td colspan="3" class="tdtitel">     جميع الحقوق محفوظى لــ مكتبة الوفاق الالكترونية&nbsp;</td>
            </tr>
        </table>
     
</body>
</html>
