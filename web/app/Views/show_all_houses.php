<button class="button"><a href="<?php echo site_url('houses/new');?>">Insert a House</a></button>
<button class="button"><a href="<?php echo site_url('houses/avg');?>">Average Price</a></button>
<button class="button"><a href="<?php echo site_url('realtors');?>">Show All Realtors</a></button>
<button class="button"><a href="<?php echo site_url('neighbor');?>">Show All Neighbour</a></button>
<button class="button"><a href="<?php echo site_url('address');?>">Show All Address</a></button>

<style type="text/css">
    table {
    border: 1px solid #ccc;
    border-collapse: collapse;
    margin: 0;
    padding: 0;
    width: 100%;
    table-layout: fixed;
    }
    caption {
        font-size: 1.5em;
        margin: .5em 0 .75em;
        font-weight: bold;
    }
    h2 {
        font-size: 1.5em;
        margin: .5em 0 .75em;
        font-weight: bold;
        padding-left: 750px;
    }
    tr{
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        padding: .35em;
    }
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
        overflow:hidden;padding:.625em;word-break:normal;}
    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
        font-weight:normal;overflow:hidden;padding:.85em;word-break:normal;}
    .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
    .tg .tg-0lax{border-color:inherit;text-align:left;vertical-align:top}
    h2 {
        text-align: left;
    }
    h3 {
        text-align: right
    }
    .button {
        background-color: #f8f8f8;
        border: none;
        color: white;
        padding-left:100px;
        font-family: Arial, Helvetica, sans-serif;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        text-align: center;
}
form {
    border: 0px solid #ccc;
    border-color: white;
    border-collapse: collapse;
    padding-left:620px;
    padding-top: 10px;
    width: 100%;
    table-layout: fixed;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
    }
.listings {
  background-image: url("https://i.picsum.photos/id/1031/5446/3063.jpg?hmac=Zg0Vd3Bb7byzpvy-vv-fCffBW9EDp1coIbBFdEjeQWE");
  background-color: #cccccc;
  height: 400px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  opacity: 0.9;
}
</style>
<div class = "listings">
<table class="tg">
    <caption>Show Houses</caption>
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
        <td class="tg-0pky"><button><a href="<?php echo site_url('houses/edit/' . $row->HOUSE_ID);?>">Update</a></button></td>
    </tr>
    <?php } ?>

    </tbody>
</table>

<div>
    <form method="post" action="<?php echo site_url('houses/select');?>">
        Only Show
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
    <h3 style="font-size: 24px">Total Number of Listing: <?php echo $houseList_count[0]->COUNT ?></h3>
</div>

<div>
<h2>Price Filter</h2>
<form method="post" action="<?php echo site_url('houses/filter'); ?>">
    <label for="down">From</label>
    <input type="text" name="down">
    <label for="up">To</label>
    <input type="text" name="up">
    <input type="submit" value="filter" name="btnfilter">
</form>
</div>

</div>