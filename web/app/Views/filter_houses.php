<h4>Show houses</h4>
Condition: Filter Listing price from <?php echo $filter_condition_down ?> to <?php echo $filter_condition_up?>.
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
        <th class="tg-0pky">HOUSE_ID</th>
        <th class="tg-0pky">ADDRESS_ID</th>
        <th class="tg-0pky">LISTING_DATE</th>
        <th class="tg-0lax">LISTING_PRICE</th>
        <th class="tg-0lax">SELLER_ID</th>
        <th class="tg-0lax">REALTOR_ID</th>
        <th class="tg-0lax">FLOOR_SPACE</th>
        <th class="tg-0lax">PROPERTY_TYPE_ID</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($houseList_filter as $row){ ?>
        <tr>
            <td class="tg-0pky"><?php echo $row->HOUSE_ID; ?></td>
            <td class="tg-0pky"><?php echo $row->ADDRESS_ID; ?></td>
            <td class="tg-0pky"><?php echo $row->LISTING_DATE; ?></td>
            <td class="tg-0pky"><?php echo $row->LISTING_PRICE; ?></td>
            <td class="tg-0pky"><?php echo $row->SELLER_ID; ?></td>
            <td class="tg-0pky"><?php echo $row->REALTOR_ID; ?></td>
            <td class="tg-0pky"><?php echo $row->FLOOR_SPACE; ?></td>
            <td class="tg-0pky"><?php echo $row->PROPERTY_TYPE_ID; ?></td>
        </tr>
    <?php } ?>

    </tbody>
</table>

<button><a href=<?php echo site_url('houses');?>>Go Back</a></button>
