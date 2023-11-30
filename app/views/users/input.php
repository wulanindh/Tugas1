<h2>Input User</h2>

<form action="<?php echo URL; ?>/users/save" method="post">
    <table>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="user_email" required></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="password" name="user_password" required></td>
        </tr>
        <tr>
            <td> NAMA</td>
            <td><input type="text" name="user_nama" required></td>
        </tr>
        <tr>
            <td> ALAMAT</td>
            <td><input type="text" name="user_alamat" required></td>
        </tr>
        <tr>
            <td> NO HP</td>
            <td><input type="text" name="user_hp" required></td>
        </tr>
        <tr>
            <td>POS</td>
            <td><input type="text" name="user_pos" required></td>
        </tr>
        <tr>
            <td>ROLE</td>
            <td><input type="text" name="user_role" id="user_role" min="0" max="255" required></td>
        </tr>
        <tr>
            <td> AKTIF</td>
            <td><input type="text" name="user_aktif" id="user_aktif" min="0" max="1" required></td>
        </tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>