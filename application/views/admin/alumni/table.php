<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Here comes the text of your license
 * Each line should be prefixed with  * 
 */
?>

<table class="table table-bordered" >

    <thead>
        <tr>
            <th>#
            </th>
            <th>Name            </th>
            <th>
                Course            </th>
            <th>Batch            </th>
            <th>Alumni Number            </th>
            <th>Action            </th>
        </tr>
    </thead>

    <?php
    $number = 0;
    foreach ($tblcontent as $item) {
        ?>
        <tr>
            <td> <?= ++$number ?> </td>
            <td>
                <?= $item->surname . ", " . $item->firstname . " " . $item->middlename ?>
            </td>
            <td>
                <?= $item->code ?>
            </td>
            <td>
                <?= $item->yeargraduated ?>
            </td>
            <td>
                <?= $item->alumni_number ?>
            </td>
            <td>
                <a class="btn btn-primary" href="<?= base_url('admin/alumni/edit/') . $item->alumni_number ?> " >Edit</a>
                <a class="btn btn-danger" href="<?= base_url('admin/alumni/delete/') . $item->alumni_number ?> " >Delete</a> 
            </td>


        </tr>

        <?php
    }
    ?>
</table>


