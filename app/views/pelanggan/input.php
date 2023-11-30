<h2>Input Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/save" method="post">
    <table>
        <tr>
            <td>NO</td>
            <td><input type="text" name="pel_id" required></td>
        </tr>
        <tr>
            <td>GOLONGAN</td>
            <td><input type="text" name="pel_id_gol" required></td>
        </tr>
        <tr>
            <td>NOMOR PELANGGAN</td>
            <td><input type="text" name="pel_no" required></td>
        </tr>
        <tr>
            <td>NAME</td>
            <td><input type="text" name="pel_nama" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="pel_alamat" required></td>
        </tr>
        <tr>
            <td>NOMOR TELP</td>
            <td><input type="text" name="pel_hp" required></td>
        </tr>
        <tr>
            <td>KTP</td>
            <td><input type="text" name="pel_ktp" required></td>
        </tr>
        <tr>
            <td>SERI</td>
            <td><input type="text" name="pel_seri" required></td>
        </tr>
        <tr>
            <td>METERAN</td>
            <td><input type="text" name="pel_meteran" required></td>
        </tr>
        <tr>
            <td>AKTIF</td>
            <td>
                <select name="pel_aktif" required>
                    <option value="Y">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </td>
        <tr>
            <td>ID USER</td>
            <td><input type="text" name="pel_id_user" required></td>
        </tr>
    
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>