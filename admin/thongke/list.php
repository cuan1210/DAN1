<div class="row formtitle">
    <h1>THỐNG KÊ</h1>
</div>

<div class="row formcontent"> 

    <!-- Thống kê danh mục -->
    <div class="row mb10 formdsloai">
        <h2>Thống kê danh mục</h2>
        <table>
            <tr>
                <th>MÃ DANH MỤC</th>
                <th>TÊN DANH MỤC</th>
                <th>SỐ LƯỢNG</th>
                <th>GIÁ CAO NHẤT</th>
                <th>GIÁ THẤP NHẤT</th>
                <th>GIÁ TRUNG BÌNH</th>
            </tr>   
            
            <?php
                foreach ($listthongke as $tk) {
                    extract($tk);
                    echo '<tr>
                            <td>'.$madm.'</td>
                            <td>'.$tendm.'</td>
                            <td>'.$countsp.'</td>
                            <td>'.$maxprice.'</td>
                            <td>'.$minprice.'</td>
                            <td>'.$avgprice.'</td>
                        </tr>';
                }
            ?>
        </table>
    
    <!-- Nút xem biểu đồ -->
    <div class="row mb10">
        <a href="index.php?act=bieudo"><input type="button" value="XEM BIỂU ĐỒ"></a>
    </div>

</div>
