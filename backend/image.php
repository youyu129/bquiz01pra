<div class="di"
    style="height:540px; border:#999 1px solid; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
    <!--正中央-->
    <table width="100%">
        <tbody>
            <tr>
                <td style="width:70%;font-weight:800; border:#333 1px solid; border-radius:3px;" class="cent"><a
                        href="?do=admin" style="color:#000; text-decoration:none;">後台管理區</a>
                </td>
                <td><button onclick="document.cookie=&#39;user=&#39;;location.replace(&#39;?&#39;)"
                        style="width:99%; margin-right:2px; height:50px;">管理登出</button></td>
            </tr>
        </tbody>
    </table>
    <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
        <p class="t cent botli">校園映像資料管理</p>
        <form method="post" action="api/edit">
            <table width="100%">
                <tbody>
                    <tr class="yel">
                        <td width="45%">校園映像資料圖片</td>
                        <td width="10%">顯示</td>
                        <td width="10%">刪除</td>
                        <td width="35%"></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table style="margin-top:40px; width:70%;">
                <tbody>
                    <tr>
                        <td width="200px"><input type="button"
                                onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/<?=$do;?>.php?table=<?=$do;?>&#39;)"
                                value="新增校園映像圖片"></td>
                        <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                        </td>
                    </tr>
                </tbody>
            </table>

        </form>
    </div>
</div>