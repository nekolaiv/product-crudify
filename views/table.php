<table>
    <h2>Table of Records</h2>
    <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        require_once "../class/product.class.php";
        $productObj = new Product();
        $array = $productObj->showAll();
    ?>
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Availability</th>
        <th>Action</th>
    </tr>
    <?php
    $id = 1;
    if (empty($array)){
    ?>
        <tr>
            <td colspan="7">
                <p class="search">No products found.</p>
            </td>
        </tr>

    <?php
    }
    foreach($array as $arr){
    ?>
    <tr>
        <td><?= $id?></td>  
        <td><?= $arr['name']?></td>
        <td><?= $arr['category']?></td>
        <td><?= $arr['price']?></td>
        <td><?= $arr['availability']?></td>
        <td class="action-td">
            <div class="action-data" id="action-div">
                <a class="action-anchors" href="editProduct.php?id=<?= $arr['id']?>"><button type="button" class="action-buttons">Edit</button></a>
                <a class="action-anchors" href="../utils/deleteProduct.php?id=<?= $arr['id']?>"><button type="button" class="action-buttons">Delete</button></a>
            </div>
        </td>
    </tr>
    <?php
        $id++;
    }
    ?>
</table>