<?php


session_start();

$user = "";
$pass = "";
$msg = "";
$forgot="";
require "config/config.php"	;
$conn = db();




// if user tries to come to the index page without logging out
if(isset($_SESSION['user'])){
    $res = $conn->query("SELECT * FROM users WHERE Username='{$_SESSION['user']}'");
	mysqli_num_rows($res);
	
	if($res)
	{
	if(mysqli_num_rows($res)==1)
	{
		$re = mysqli_fetch_assoc($res);
		$db_post = $re['post'];
        if($db_post == 'admin'){
            header('Location: analyzefeedback.php');
        }
        else if($re['sp_post'] == 'cmhod'){
            header('Location: cmhod.php');
        }
        else if($db_post == 'teacher'){
            header('Location: teacher-cm.php');
        }
        else if($db_post == 'student'){
            header('Location: index_std.php');
        }
    }
}
}else{

if (isset($_POST['login']))
	  
    
	 
{  $msg=''; 
 $username=$_POST['user'];

    $pass=$_POST['pass'];

//Upload a blank cookie.txt to the same directory as this file with a CHMOD/Permission to 777
function login($url,$data1,$data2){
	$data="mode=191&username=$data1&password=$data2&a=1502028051926&prototype=0";
    $fp = fopen("cookie.txt", "w");
    fclose($fp);
    $login = curl_init();
    curl_setopt($login, CURLOPT_COOKIEJAR, "cookie.txt");
    curl_setopt($login, CURLOPT_COOKIEFILE, "cookie.txt");
    curl_setopt($login, CURLOPT_TIMEOUT, 40000);
    curl_setopt($login, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($login, CURLOPT_URL, $url);
    curl_setopt($login, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($login, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($login, CURLOPT_POST, TRUE);
    curl_setopt($login, CURLOPT_POSTFIELDS, $data);
    ob_start();
    return curl_exec ($login);
    ob_end_clean();
    curl_close ($login);
    unset($login);   

}   
               
 function grab_page($site){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_TIMEOUT, 40);
    curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
    curl_setopt($ch, CURLOPT_URL, $site);
    ob_start();
    return curl_exec ($ch);
    ob_end_clean();
    curl_close ($ch);
}

 

if(grab_page("http://10.1.0.7:8090/httpclient.html"))
{
	


 $xml=login("http://10.1.0.7:8090/login.xml",$username,$pass);
 
 print"<br>";
 

$xml1=explode('<message>',$xml);



$xml2=explode('</message>',$xml1[1]);

$xml3=explode('A[',$xml2[0]);

$xml4=explode(']]>',$xml3[1]);
 
 
 
}
else
{
$xml4[0]='Server is not response';
}


 
   if($xml4[0]=='You have successfully logged in.DO NOT SHARE YOUR CYBEROAM PASSWORD.CYBEROAM Password must meet complexity.' ||  $xml4[0]=='You have reached Maximum Login Limit. (Already Logged In Somewhere)' || $xml4[0]=='Your data transfer has been exceeded, Wait for Restoration of Your Limit (Next Day)')
	
	{
	 $user	=	   $_POST['user'];
	
    

	$res = $conn->query("SELECT * FROM users WHERE Username='$user'");
	
	if($res)
	{ 

	if(mysqli_num_rows($res)>0)
	{
		$re = mysqli_fetch_assoc($res);
		$db_user = $re['Username'];
		$db_user1= $re['user'];
		$db_post = $re['post'];
        $db_email = $re['email'];
        $db_group = $re['u_group'];
        $db_branch = $re['branch'];
		$db_batch = $re['batch'];
        $batch = $re['batch'];
        $group = $re['u_group'];
        $db_post = $re['sp_post'];
	    $db_post1=$re['post'];
		$db_group1=$re['Group1'];
	
	
        $db_name = $re['name'];

		if($user == $db_user)
		{
			
				if($db_group1=='3yrDegree2k'.Date('y') ||$db_group1=='3yrDegree2k'.(date('y')-1) || $db_group1=='3yrDegree2k'.(date('y')-2)|| $db_group1=='3yrDegree2k'.(date('y')-3)||$db_group1=='3yrDegree2k'.(date('y')-4)||$db_group1=='3yrDegree2k'.Date('y') ||$db_group1=='3yrDegree20'.date('y') ||$db_group1=='3yrDegree20'.(date('y')-1) || $db_group1=='3yrDegree20'.(date('y')-2)|| $db_group1=='3yrDegree20'.(date('y')-3)||$db_group1=='3yrDegree20'.(date('y')-4)||$db_group1=='4yrDegree2k'.Date('y') ||$db_group1=='4yrDegree2k'.date('y') ||$db_group1=='4yrDegree2k'.(date('y')-1) || $db_group1=='4yrDegree2k'.(date('y')-2)|| $db_group1=='4yrDegree2k'.(date('y')-3)||$db_group1=='4yrDegree2k'.(date('y')-4)||$db_group1=='4yrDegree2k'.Date('y') ||$db_group1=='4yrDegree20'.date('y') ||$db_group1=='4yrDegree20'.(date('y')-1) || $db_group1=='4yrDegree20'.(date('y')-2)|| $db_group1=='4yrDegree20'.(date('y')-3)||$db_group1=='4yrDegree20'.(date('y')-4))
				{ $db_post1='student'; $res=mysqli_query($conn, "UPDATE users SET post='$db_post1' WHERE Username='$db_user'");}
			else if($db_group1=='Contract_2014-15' ||$db_group1=='Contract_2015-16'||$db_group1=='Contract_2016-17'||$db_group1=='Contract_2017-18'|| $db_group1=='Open Group' || $db_group1=='employee')
			{$db_post1='teacher';$res=mysqli_query($conn, "UPDATE users SET post='$db_post1' WHERE Username='$db_user'");}
				
				
				if($db_group1=='3yrdegree2k'.Date('y') ||$db_group1=='3yrdegree2k'.(date('y')-1) || $db_group1=='3yrdegree2k'.(date('y')-2)|| $db_group1=='3yrdegree2k'.(date('y')-3)||$db_group1=='3yrdegree2k'.(date('y')-4)||$db_group1=='3yrdegree2k'.Date('y') ||$db_group1=='3yrdegree20'.date('y') ||$db_group1=='3yrdegree20'.(date('y')-1) || $db_group1=='3yrdegree20'.(date('y')-2)|| $db_group1=='3yrdegree20'.(date('y')-3)||$db_group1=='3yrdegree20'.(date('y')-4)||$db_group1=='4yrdegree2k'.Date('y') ||$db_group1=='4yrdegree2k'.date('y') ||$db_group1=='4yrdegree2k'.(date('y')-1) || $db_group1=='4yrdegree2k'.(date('y')-2)|| $db_group1=='4yrdegree2k'.(date('y')-3)||$db_group1=='4yrdegree2k'.(date('y')-4)||$db_group1=='4yrdegree2k'.Date('y') ||$db_group1=='4yrdegree20'.date('y') ||$db_group1=='4yrdegree20'.(date('y')-1) || $db_group1=='4yrdegree20'.(date('y')-2)|| $db_group1=='4yrdegree20'.(date('y')-3)||$db_group1=='4yrdegree20'.(date('y')-4))
				{ $db_post1='student'; $res=mysqli_query($conn, "UPDATE users SET post='$db_post1' WHERE Username='$db_user'");}
			else if($db_group1=='Contract_2014-15' ||$db_group1=='Contract_2015-16'||$db_group1=='Contract_2016-17'||$db_group1=='Contract_2017-18'|| $db_group1=='Open Group' || $db_group1=='employee')
			{$db_post1='teacher';$res=mysqli_query($conn, "UPDATE users SET post='$db_post1' WHERE Username='$db_user'");}
				
				
			
			
	      
			if($db_post1=='admin')
			{
				session_start();
				$_SESSION['user1'] = $db_user;
				$_SESSION['user'] = $db_user;
				$_SESSION['name'] = $db_name;
				$_SESSION['admin'] = "log";
				mysqli_close($conn);
				header("Location: analyzefeedback.php");
				
			}
            else if($db_post == 'subadmin')
			{   
				session_start();
				$_SESSION['user1'] = $db_user;
				$_SESSION['user'] = $user;
				$_SESSION['name'] = $db_name;
				$_SESSION['subadmin'] = "log";
				mysqli_close($conn);
				header("Location: subanalyzefeedback.php");
				
			}
			else if($db_post == 'cmhod')
						{
								session_start();
								$_SESSION['user1'] = $db_user;
								$_SESSION['user'] = $db_user;
								$_SESSION['cmhod'] = "log";
                                $_SESSION['name'] = $db_name;
								$_SESSION['branch']=$db_branch;
								mysqli_close($conn);
								header("Location: cmhod.php");
							}
							else if($db_post == 'ifhod')
							{
									session_start();
									$_SESSION['user'] = $db_user;
									$_SESSION['ifhod'] = "log";
									mysqli_close($conn);
									header("Location: ifhod.php");
									
							}
							else if($db_post1 == "student")
							{$_SESSION['user1'] = $db_user;
                                $_SESSION['batch'] = $batch;
                                $_SESSION['group'] = $group;
                                $_SESSION['user'] = $db_user;
				                $_SESSION['student'] = "log";
								if($batch!='')
								{
								$batch=explode('-',$batch);
								$batch2=$batch[1];
								
									if(date('y')==$batch2){
	   $sem=1;$year='FY';}
	   
else if(date('y')==($batch2+1))
 { if( date('m')>=01 && date('m')<=07)
	 { $sem=2;$year="FY";}
   else {
	  
   $sem=3;$year="SY";}	 
 }
 else if(date('y')==($batch2+2))
 { if( date('m')>=01 && date('m')<=07)
	 {  $sem=4;$year='SY';}
	
   else{
   $sem=5;$year="TY";	 }
 }
 elseif(date('y')==($batch2+3))
 { if( date('m')>=01 && date('m')<=07)
	 { $sem=6;$year="SY";}
   else {
	  
   $sem=7;$year="FRY";}	 
 }
else if(date('y')==($batch2+3)){
	 
          $sem=8;$year='FRY';
}






								$res=mysqli_query($conn, "UPDATE users SET year='$year' WHERE Username='$db_user'");}
								


                                if($db_email == '' || $db_group == '' || $db_branch == '' || $db_batch ==''){
                                        header('Location: index_redirect.php');
                                    }else{
								mysqli_close($conn);
								header("Location: index_std.php");
                                    }
										
							}
                            else if($db_post1 == "teacher")
							{ 
						
	       							
								$_SESSION['user'] = $db_user1;
								$_SESSION['user1'] = $db_user;
								
				        $_SESSION['teacher'] = "log";
						$_SESSION['name']=$db_name;
						$_SESSION['branch']=$db_branch;
						 if($db_email == '' || $db_branch === '' || $db_user1 ==''){
                                        header('Location: teacher_redirect.php');
                                    }else{
								mysqli_close($conn);
								header("Location: teacher-cm.php");
                                    }
								
							}
						}
					}
					else
					{
						echo $msg =  "Wrong username or password.";
						die();
						
					}
				}
				else
				{
					echo $msg =  "Wrong username or password.";
					
					
				}
        
		mysqli_close($conn);
}
else{
	$msg='Incorrect username or password ';
}
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head><style>
body {
	font-family: "Open Sans", sans-serif;
	height: 100vh;
	background: 50% fixed;
	background-size: cover;
	
	background-repeat: no-repeat;
}
@keyframes spinner {
  0% {
    transform: rotateZ(0deg);
  }
  100% {
    transform: rotateZ(359deg);
  }
}
* {
  box-sizing: border-box;
}
.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;

	font-family: :Kristen ITC;
}
.title{
  font-family: Kristen ITC;
}
.login {
  border-radius: 2px 2px 5px 5px;
  padding: 10px 20px 20px 20px;
  width: 90%;
  max-width: 320px;
  background: #ffffff;
  position: relative;
  padding-bottom: 80px;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
}
.login.loading button {
  max-height: 100%;
  padding-top: 50px;
}
.login.loading button .spinner {
  opacity: 1;
  top: 40%;
}
.login.ok button {
  background-color: #8bc34a;
}
.login.ok button .spinner {
  border-radius: 0;
  border-top-color: transparent;
  border-right-color: transparent;
  height: 20px;
  animation: none;
  transform: rotateZ(-45deg);
}
.login input {
  display: block;
  padding: 15px 10px;
  margin-bottom: 10px;
  width: 100%;
  border: 1px solid #ddd;
  transition: border-width 0.2s ease;
  border-radius: 2px;
  color: #ccc;
}
.login input + i.fa {
  color: #fff;
  font-size: 1em;
  position: absolute;
  margin-top: -47px;
  opacity: 0;
  left: 0;
  transition: all 0.1s ease-in;
}
.login input:focus {
  outline: none;
  color: #444;
  border-color: #2196F3;
  border-left-width: 35px;
}
.login input:focus + i.fa {
  opacity: 1;
  left: 30px;
  transition: all 0.25s ease-out;
}
.login a {
  font-size: 0.8em;
  color: #2196F3;
  text-decoration: none;
}
.login .title {
  color: #444;
  	font-family: "Open Sans", sans-serif;
  font-size: 1.2em;
  font-weight: bold;
  margin: 10px 0 20px 0;
  border-bottom: 1px solid #eee;
  padding-bottom: 20px;
}
.login .subtitle {
  color:red;
  font-size: 0.9em;
 
  
  padding-bottom: 10px;
}
.login button {
  width: 100%;
  height: 100%;
  padding: 10px 10px;
  background: #2196F3;
  color: #fff;
  display: block;
  border: none;
  margin-top: 20px;
  position: absolute;
  left: 0;
  bottom: 0;
  max-height: 60px;
  border: 0px solid rgba(0, 0, 0, 0.1);
  border-radius: 0 0 2px 2px;
  transform: rotateZ(0deg);
  transition: all 0.1s ease-out;
  border-bottom-width: 7px;
}
#parent_div_1, #parent_div_2, #parent_div_3 {
  width: 100px;
  height: 100px;
  border: 1px solid red;
  margin-right: 10px;
  float: left;
}

.login button .spinner {
  display: block;
  width: 40px;
  height: 40px;
  position: absolute;
  border: 4px solid #ffffff;
  border-top-color: rgba(255, 255, 255, 0.3);
  border-radius: 100%;
  left: 50%;
  top: 0;
  opacity: 0;
  margin-left: -20px;
  margin-top: -20px;
  animation: spinner 0.6s infinite linear;
  transition: top 0.3s 0.3s ease, opacity 0.3s 0.3s ease, border-radius 0.3s ease;
  box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.2);
}
.login:not(.loading) button:hover {
  box-shadow: 0px 1px 3px #2196F3;
}
.login:not(.loading) button:focus {
  border-bottom-width: 4px;
}
footer {
  display: block;
  padding-top: 50px;
  text-align: center;
  color: #ddd;
  font-weight: normal;
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.2);
  font-size: 0.8em;
	position: auto;
}
footer a, footer a:link {
  color: #fff;
	position: auto;

}
</style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HOME | Student Feedback System</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="http://sliet.ac.in">Sliet longowal</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                   
                    <li class="page-scroll">
                        <a href="index.php">Home</a>
                    </li>
                    
					 <li class="page-scroll">
                        <a href="pdf/UserManual.pdf">UserManual</a>
                    </li>
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class='img-circle' src="images/logo.jpg" alt="" height='150PX'>
                    <div class="intro-text">
                        <span class="skills">SANT LONGOWAL INSTITUTE OF ENGINEERING AND TECHNOLOGY</span>
                        <hr class="star-light">
                        <span class="skills">Ready For- Smart Experience</span>
                    </div>
					
                </div>
				<div class="col-lg-6">
					    <div class="wrapper" style="display: inline-block">
	
        

  <form class="login" method="POST" action="" style="display: inline-block">
    <p class="title " align="center">Teacher Database System</p>
	<p class="subtitle" align="center" Style='color:blue;'>Use Cyberoam ID</p>

	  <input type="text" placeholder="Username" name="user" required autofocus/>
    <i class="fa fa-user"></i>
	
	


	  <input type="password" placeholder="Password" name="pass" required/>
    <i class="fa fa-key"></i>
	 
	

	  <?php echo "<h6 style='color:red;'>$msg</h6>"; ?>
    <button type="submit" name="login" value="Register">
    <i class="spinner"></i>
      <span class="state" type="submit" name="login" value="login">Login</span>
    </button>
	</form>

	
</div>
				</div>
            </div>
        </div>
		

	</div>
		</div>
    </header>

    <!-- Portfolio Grid Section -->
   

   

    <!-- Contact Section -->
    

    <!-- Footer -->
    
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
   
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
<script>
CapsLock.addListener(function(isOn){
  if (isOn){
    alert('Warning: you have turned caps lock on');
  }
});
</script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
	 <script src="CapsLock.src.js"></script>

</body>

</html>
