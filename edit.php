<html>
<head>
    <title>学生管理信息</title>
</head>
<body>
<center>
    <?php include ("menu.php");
    //1.连接数据库
    try{
    $pdo=new PDO("mysql:host=localhost;dbname=jikedb",'root','');
    echo '连接成功'."<br>";
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }catch (PDOException $e){
    die("数据库连接失败".$e->getMessage());
    }
    //2.拼SQL语句，获取信息
    $sql="select * from students where id=".$_GET['id'];
    $stmt=$pdo->query($sql);
    if($stmt->rowCount()>0){
        $stu=$stmt->fetch(PDO::FETCH_ASSOC);//解析数据
    }else{
        die("没有要修改的数据");
    }
    ?>
    <h3>修改学生信息</h3>
    <form action="action.php?action=edit" method="post">
        <input type="hidden" name="id" value="<?php echo $stu['id'];?>">
        <table>
            <tr>
                <td>姓名</td>
                <td><input type="text" name="name" value="<?php echo $stu['name']?>"/></td>
                <td>性别</td>
                <td>
                    <input type="radio" name="sex" value="m" <?php echo ($stu['sex']=="m")?"checked":" "?> />男
                    <input type="radio" name="sex" value="w" <?php echo ($stu['sex']=="w")?"checked":" "?>/>女
                </td>
                <td>年龄</td>
                <td><input type="text" name="age" value="<?php echo $stu['age']?>"/></td>
                <td>班级</td>
                <td><input type="text" name="class" value="<?php echo $stu['class']?>"/></td>
                <td>&nbsp;</td>
                <td>
                    <input type="submit" value="提交"/>
                    <input type="reset" value="重置"/>
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>