<h3>insert user</h3>

<div class="form-group">
    <form action="" method="post">
        <div class="form-group w-50">
            <label for="">Nama user</label>
            <input type="text" name="user" required placeholder="isi user">
        </div>

        <div class="form-group w-50">
            <label for="">Email</label>
            <input type="text" name="email" required placeholder="Email">
        </div>

        <div class="form-group w-50">
            <label for="">Password</label>
            <input type="password" name="password" required placeholder="password">
        </div>
        
        <div class="form-group w-50">
            <label for="">Konfirmasi Password</label>
            <input type="password" name="konfirmasi" required placeholder="password">
        </div>
        
        <div class="form-group w-50">
            <label for="">Level</label>
            <select name="level" id="">
                <option value="joki">joki</option>
                <option value="koki">koki</option>
                <option value="gojek">gojek</option>
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
        $password = hash('sha256',$_POST['password']);
        $konfirmasi = hash('sha256',$_POST['konfirmasi']);
        $level = $_POST['level'];

        if ($password===$konfirmasi) {
            $sql = "INSERT INTO tbluser VALUES('','$user','$email', '$password', '$level',1)";
            $db->runSQL($sql);
            header("location:?f=user&m=select");
        }else {
            echo "<h2>PASSWORD SALAH</h2>";
        }
    }
?>