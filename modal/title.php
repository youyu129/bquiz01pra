<h3 class="cent">
    新增標題區圖片
</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multpart/form-data">

    <table>
        <tr>
            <td>
                標題區圖片：
            </td>
            <td>
                <input type="file" name="img" id="img">
            </td>
        </tr>
        <tr>
            <td>
                標題區替代文字：
            </td>
            <td>
                <input type="text" name="text" id="text">
            </td>
        </tr>
    </table>

</form>