<html>
<head><title>Raport</title></head>
<body>
    <center><h2>TUGAS</h2></center>
    <form action="ohprojek.php" METHOD="POST" NAME="input">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama"/>
                </td>
            </tr>
            <tr>
                <td>Nis </td>
                <td><input type="text" name="nis">
                </td>
            </tr>
            <tr>
                    <td>Alamat</td>
                    <td><textarea cols="5" rows="1" name="alamat"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Jenis kelamin</td>
                    <td><input type="radio" name="jk" value="laki_laki">laki laki
                        <input type="radio" name="jk" value="perempuan">perempuan <br>
                </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td><select name="agama">
                    <option value="islam">islam</option>
                    <option value="kristen">kristen</option>
                    <option value="katholik">katholik</option>
                    <option value="budha">budha</option>
                    </select>
                </tr>
                <tr>
                    <td>asal sekolah</td>
                    <td><input type="text" name="asal"></td>
                </tr>
                <tr>
                    <td>Nama orang tua/wali</td>
                    <td><input type="text" name="orang"></td>
                </tr>
                <tr>
                    <td>Mata pelajaran yang disukai</td>
                    <td><input type="checkbox" name="mtk" value="matematika">matematika
                    <input type="checkbox" name="ipa" value="ipa">Ilmu pengetahuan Alam
                    <input type="checkbox" name="ips" value="ips">ilmu pengetahuan sosial <br>
                    <input type="checkbox" name="pai" value="pai">pendidikan agama
                    <input type="checkbox" name="bi" value="bi">bahasa indonesia
                </td>
                </tr>
                <tr>
                    <td>total nilai ijasah sd</td>
                    <td><input type="text" name="nilai"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td><input type="submit" nama="masuk" value="input data"></td>
                </tr>
                </form>
</body>

</html>