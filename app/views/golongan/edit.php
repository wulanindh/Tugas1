<h2>Edit Post</h2>

<form action="<?php echo URL; ?>/golongan/update" method="post">
<input type="hidden" name="id" value="<?php echo $data['row']['gol_id']; ?>">
<table>

<tr>
            <td>KODE</td>
            <td><input type="text" name="gol_kode" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="gol_nama" required></td>
        
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>