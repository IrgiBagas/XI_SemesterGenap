<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM tbluser WHERE iduser=$id";
        $row = $db->getITEM($sql);
    }
?>

<h3>Upload User</h3>

<div class="form-group">
    <form action="" method="post">
        <div class="form-group w-50">
            <label for="">Nama user</label>
            <input type="text" name="user" required value="<?php echo $row['user']?>" class="form-control">
        </div>

        <div class="form-group w-50">
            <label for="">Email</label>
            <input type="text" name="email" required value="<?php echo $row['email']?>" class="form-control">
        </div>

        <div class="form-group w-50">
            <label for="">Password</label>
            <input type="password" name="password" required value="<?php echo $row['password']?>" class="form-control">
        </div>
        
        <div class="form-group w-50">
            <label for="">Konfirmasi Password</label>
            <input type="password" name="konfirmasi" required value="<?php echo $row['password']?>" class="form-control">
        </div>
        
        <div class="form-group w-50">
            <label for="">Level</label>
            <select name="level" id="">
                <option value="joki" <?php if($row['level']==="joki") echo "selected" ?> >joki</option>
                <option value="koki" <?php if($row['level']==="koki") echo "selected" ?>>koki</option>
                <option value="gojek" <?php if($row['level']==="gojek") echo "selected" ?>>gojek</option>
            </select>
        </div>

        <div>
            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
        </div>
    </form>
</div>

<?php
    if (isset($_POST['simpan'])) {
        $user = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];
        $level = $_POST['level'];

        if ($password===$konfirmasi) {
            $sql = "UPDATE tbluser SET user='$user', email='$email', password='$password', level='$level' WHERE iduser$id";
            $db->runSQL($sql);
            header("location:?f=user&m=select");
        }else {
            // echo "<h2>PASSWORD SALAH</h2>";
        }
    }
?>