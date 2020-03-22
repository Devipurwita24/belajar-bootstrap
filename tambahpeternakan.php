<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>tambah persentase peternakan dan pertanian</h1>
    <form action="insertpertanian.php" method="post"></form>
    <table>
        <tr>
            <td>daerah</td>
            <td>:</td>
            <td><input type="text" name="daerah" placeholder="daerah"></td>
        </tr>
        <tr>
            <td>pertanian</td>
            <td>:</td>
            <td><input type="text" name="pertanian" placeholder="pertanian"></td>
            <td>%</td>
        </tr>
        <tr>
            <td>peternakan</td>
            <td>:</td>
            <td><input type="text" name="peternakan" placeholder="peternakan"></td>
            <td>%</td>
        </tr>
        <tr>
            <td><a href="insertpertanian.php"><input type="submit" value="simpan"></a></td>
        </tr>
    </table>
    </form>
</body>
</html>