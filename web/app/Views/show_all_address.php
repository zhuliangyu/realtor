<h3>Show all address</h3>

<style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
        overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
        font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
    .tg .tg-0lax{text-align:left;vertical-align:top}
</style>
<table class="tg">
    <thead>
    <tr>
        <th class="tg-0lax">Address_ID</th>
        <th class="tg-0lax">Address</th>
        <th class="tg-0pky">NEIGHBOR_ID</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($AddressList as $row){ ?>
        <tr>
            <td class="tg-0pky"><?php echo $row->ADDRESS_ID; ?></td>
            <td class="tg-0pky"><?php echo $row->ADDRESS; ?></td>
            <td class="tg-0pky"><?php echo $row->NEIGHBOR_ID; ?></td>
        </tr>
    <?php } ?>

    </tbody>
</table>

<button><a href=<?php echo site_url('houses');?>>Go Back</a></button>

