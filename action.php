<?php
//1.连接数据库
try{
    $pdo=new PDO("mysql:host=localhost;dbname=jikedb",'root','');
    echo '连接成功'."<br>";
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
}catch (PDOException $e){
    die("数据库连接失败".$e->getMessage());
}
//2.通过action的值做对应的操作
switch ($_GET['action']){
    case "add"://增加操作
        $name=$_POST['name'];
        $sex=$_POST['sex'];
        $age=$_POST['age'];
        $class=$_POST['class'];

        $sql="insert into students values(null,'{$name}','{$sex}','{$age}','{$class}')";
        $rw=$pdo->exec($sql);
        if($rw>0){
            echo "<script>alert('添加成功');window.location='index.php'</script>";
        }else{
            echo  "<script>alert('添加失败');window.history.back()</script>";
        }
        break;
    case "del"://删除操作
        $id=$_GET['id'];
        $sql="delete from students where id={$id}";
        $pdo->exec($sql);
        header("Location:index.php");
        break;
    case "edit":
        //1.获取表单信息
            $name=$_POST['name'];
            $sex=$_POST['sex'];
            $age=$_POST['age'];
            $class=$_POST['class'];
            $id=$_POST['id'];

            $sql="update students set name='{$name}',sex='{$sex}',age={$age},class={$class} where id={$id}";
            $rw=$pdo->exec($sql);
            if($rw>0){
                echo "<script>alert('修改成功');window.location='index.php'</script>";
        }else{
                echo  "<script>alert('修改失败');window.history.back()</script>";
            }
            break;
}