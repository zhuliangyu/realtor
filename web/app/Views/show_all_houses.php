<!-- <button class="button"><a href="<?php echo site_url('houses/new');?>">Insert a House</a></button>
<button class="button"><a href="<?php echo site_url('houses/avg');?>">Average Price</a></button>
<button class="button"><a href="<?php echo site_url('realtors');?>">Show All Realtors</a></button>
<button class="button"><a href="<?php echo site_url('neighbor');?>">Show All Neighbour</a></button>
<button class="button"><a href="<?php echo site_url('address');?>">Show All Address</a></button> -->

<a class="button" href="<?php echo site_url('houses/new');?>">Insert a House</a>
<a class="button" href="<?php echo site_url('houses/avg');?>">Average Price</a>
<a class="button" href="<?php echo site_url('realtors');?>">Show All Realtors</a>
<a class="button" href="<?php echo site_url('neighbor');?>">Show All Neighbour</a>
<a class="button" href="<?php echo site_url('address');?>">Show All Address</a>

<style type="text/css">
    table {
    border: 1px solid #ccc;
    border-collapse: collapse;
    margin: 0vw;
    padding: 0vw;
    width: 100%;
    table-layout: fixed;
    }
    caption {
        font-size: 1.3em;
        margin: .75em 0 .75em;
        font-weight: bold;
        font-family: Trebuchet MS, Helvetica, sans-serif;
    }
    h2 {
        font-size: 1em;
        margin-left: 1vw;
        margin-bottom: 0vw;
        font-weight: bold;
        font-family: Trebuchet MS, Helvetica, sans-serif;
    }

    h3 {
        font-family: Trebuchet MS, Helvetica, sans-serif;
        color: black;
        font-size: 1em;
        margin-right: 1vw;
        margin-top: 3vw;
        text-align: right
    }

    tr{
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        padding: .35em;
    }
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Trebuchet MS, sans-serif;font-size:14px;
        overflow:hidden;padding:.625em;word-break:normal;}
    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Trebuchet MS, sans-serif;font-size:14px;
        font-weight:normal;overflow:hidden;padding:.85em;word-break:normal;}
    .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
    .tg .tg-0lax{border-color:inherit;text-align:left;vertical-align:top}

    .button {
        background-color: ghostwhite;
        border: none;
        color: dodgerblue;
        padding: 1vw 1vw 1vw 1vw;
        margin: 1vw 1vw 1vw 1vw;
        border-radius: 5px;
        font-family: Trebuchet MS, Helvetica, sans-serif;
        text-decoration: none;
        display: inline-block;
        font-size: 1em;
        text-align: center;
    }
    .button:visited {
        color: dodgerblue;
        opacity: 0.8;
        text-decoration: none;
    }
    .button:hover {
        color: deepskyblue;
    }

form {
    border: 0px solid #ccc;
    border-color: white;
    border-collapse: collapse;
    margin-left: 1vw;
    padding-top: 2vw;
    width: 100%;
    table-layout: fixed;
    font-family: Trebuchet MS, Helvetica, sans-serif;
    font-size: 1em;
    }

.listings {
  /* background-image: url("https://i.picsum.photos/id/1031/5446/3063.jpg?hmac=Zg0Vd3Bb7byzpvy-vv-fCffBW9EDp1coIbBFdEjeQWE"); */
  background-image: url("https://i.ibb.co/9GsYgtV/building-metal-house-architecture-101808.jpg");
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
    <form style = "color: black; font-size: 0.8em" method="post" action="<?php echo site_url('houses/select');?>">
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
    <h3>Total Number of Listing: <?php echo $houseList_count[0]->COUNT ?></h3>
</div>

<div>
<h2>Price Filter</h2>
<form style="margin-top:-1.2vw;" method="post" action="<?php echo site_url('houses/filter'); ?>">
    <label style="font-size: 0.9em" for="down">From</label>
    <input type="text" name="down">
    <label style="font-size: 0.9em" for="up">To</label>
    <input type="text" name="up">
    <input type="submit" value="filter" name="btnfilter">
</form>
</div>

</div>