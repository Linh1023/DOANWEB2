<form action="" method="POST">
    
    <h2 id="title-pq">Quản lý phân quyền</h2>
    <h4 id="dsq">Danh sách quyền: </h4> 

    <table id="quyen">
        <tr>
            <th>Mã quyền</th>
            <th>Tên quyền</th>
            <th>Thực hiện phân quyền</th>
        </tr>
        <?php
            include("../db/DAOQuyen.php");
            $db = new DAOQuyen();
            $db->connect();
            $data = $db->getList();
            if($data==null){
                return;
            }
            $i = 0;
            while ($i < count($data)){ 
        
        ?>
            <tr>
                <td><?php echo $data[$i][0]?></td>
                <td><?php echo $data[$i][1]?></td>
                <td><a href = "../admin/template/template_content/PhanQuyen/xulyPhanQuyen.php?id=<?php echo $data[$i][0]?>"><div>Thực hiện phân quyền</div></a></td>

            <tr>
        <?php
                $i++;
            }
        
        ?>
    </table>
    
</form>