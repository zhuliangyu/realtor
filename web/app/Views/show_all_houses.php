<button><a href="<?php echo site_url('neighbor');?>">Show all neighbour</a></button>
<h4>Show houses</h4>
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
        <th class="tg-0lax">Operation</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($houseList as $row){ ?>
    <tr>
        <td class="tg-0pky"><?php echo $row->HOUSE_ID; ?></td>
        <td class="tg-0pky"><?php echo $row->ADDRESS_ID; ?></td>
        <td class="tg-0pky"><?php echo $row->LISTING_DATE; ?></td>
        <td class="tg-0pky"><?php echo $row->LISTING_PRICE; ?></td>
        <td class="tg-0pky"><?php echo $row->SELLER_ID; ?></td>
        <td class="tg-0pky"><?php echo $row->REALTOR_ID; ?></td>
        <td class="tg-0pky"><?php echo $row->FLOOR_SPACE; ?></td>
        <td class="tg-0pky"><?php echo $row->PROPERTY_TYPE_ID; ?></td>
        <td class="tg-0pky"><button>Update</button></td>
    </tr>
    <?php } ?>

    </tbody>
</table>

<div>
    <form method="post" action="<?php echo site_url('houses/select');?>">
        only show
        <select name="selection">
            <option value="HOUSE_ID">HOUSE_ID</option>
            <option value="ADDRESS_ID">ADDRESS_ID</option>
            <option value="LISTING_DATE">LISTING_DATE</option>
            <option value="LISTING_PRICE">LISTING_PRICE</option>
            <option value="SELLER_ID">SELLER_ID</option>
            <option value="SELLER_ID">SELLER_ID</option>
            <option value="REALTOR_ID">REALTOR_ID</option>
            <option value="FLOOR_SPACE">FLOOR_SPACE</option>
            <option value="PROPERTY_TYPE_ID">PROPERTY_TYPE_ID</option>
        </select>
        <input type="submit" value="Select" name="btnadd">
    </form>
</div>

<div>
    <h3>Total number of listing: <?php echo $houseList_count[0]->COUNT ?></h3>
</div>

<div>
<h2>Price filter:</h2>
<form method="post" action="<?php echo site_url('houses/filter'); ?>">
    <label for="down">From</label>
    <input type="text" name="down">
    <label for="up">to</label>
    <input type="text" name="up">
    <input type="submit" value="filter" name="btnfilter">
</form>
</div>