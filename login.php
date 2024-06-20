<?php
  ob_start();
  session_start();
  include "connect.php";
  if(isset($_POST['login'])){
    if(!empty($_POST['email']) and !empty($_POST['password'])){ //ไม่มีค่าว่าง ใช่หรือไม่
        include "connect.php";
        $sql ="SELECT * FROM users";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if($row['email'] == $_POST['email'] and $row['password'] == $_POST['password'] ){
            echo "Hi $row[fullname]";
            session_regenerate_id();
		    $_SESSION['loggedin'] = TRUE;
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            header('Refresh: 2; URL = blog_view.php');
        }else{
            echo "ไม่พบ email และ password";
            header('Refresh: 3; URL = login.php');
        }
    }else{
        echo "Login อีกครั้ง";
        header('Refresh: 2; URL = login.php');
    }
  }else{
?>
    <h2> Login </h2>
    <form action="login.php" method="post">
        E-mail:  <input type="email" name="email" /> <br/>
        Password: <input type="password" name="password" /> <br/>
        <input type="submit" value="LOGIN" name="login"/>
    </form>
<?php
  }
?>

