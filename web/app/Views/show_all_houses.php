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

<form action="table" method="post">
    Show
    <select name="table" id="table">
        <option value="REALTOR">REALTOR</option>
        <option value="PROPERTY_TYPE">PROPERTY_TYPE</option>
        <option value="ADDRESS">ADDRESS</option>
        <option value="BUYERS">BUYERS</option>
        <option value="CONTAINS_HISTORY_TRANSACTIONS">CONTAINS_HISTORY_TRANSACTIONS</option>
        <option value="CUSTOMERS">CUSTOMERS</option>
        <option value="HOUSE_INSPECTION">HOUSE_INSPECTION</option>
        <option value="INSPECTION_RESULT">INSPECTION_RESULT</option>
        <option value="INSPECTORS">INSPECTORS</option>
        <option value="NEIGHBORHOOD">NEIGHBORHOOD</option>
        <option value="OFFER_CONTRACT">OFFER_CONTRACT</option>
        <option value="PROPERTY_TYPE">PROPERTY_TYPE</option>
        <option value="SELLER">SELLER</option>
    </select>
    table
    <input class="smbutton2" type="submit" value="Select" name="btnadd">

</form>

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
        padding-bottom: 1vw;
        text-align: right
    }

    tr{
        /* background-color: #f8f8f8; */
        background-color: ghostwhite;
        border: 1px solid #ddd;
        padding: .35em;
    }

    tr:hover{
        background-color: #f5f5f5;
    }

    .tg  {border-collapse:collapse;border-spacing:0;}

    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Trebuchet MS, sans-serif;font-size:14px;
        overflow:hidden;padding:.625em;word-break:normal;}

    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Trebuchet MS, sans-serif;font-size:14px;
        font-weight:bold;overflow:hidden;padding:.80em;word-break:normal;background-color:lightsteelblue;}

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
        text-decoration: none;
    }
    .button:hover {
        color: deepskyblue;
    }

    .smbutton2{
        background-color: white;
        border:solid;
        border-width: thin;
        border-color: royalblue;
        color: royalblue;
        margin-top: -0.2em;
        margin-bottom: -0.2em;
        padding: 0.2vw 0.5vw 0.2vw 0.5vw;
        border-radius: 2px;
        font-family: Trebuchet MS, Helvetica, sans-serif;
        text-decoration: none;
        display: inline-block;
        font-size: 0.85em;
        text-align: center;
    }
    .smbutton2:visited {
        color: royalblue;
        text-decoration: none;
    }
    .smbutton2:hover {
        color: white;
        background-color: royalblue;
    }

    .smbutton {
        background-color: white;
        border:solid;
        border-width: thin;
        border-color: dodgerblue;
        color: dodgerblue;
        margin-top: -0.2em;
        margin-bottom: -0.2em;
        padding: 0.2vw 0.5vw 0.2vw 0.5vw;
        border-radius: 2px;
        font-family: Trebuchet MS, Helvetica, sans-serif;
        text-decoration: none;
        display: inline-block;
        font-size: 0.85em;
        text-align: center;
    }
    .smbutton:visited {
        color: dodgerblue;
        text-decoration: none;
    }
    .smbutton:hover {
        color: white;
        background-color: dodgerblue;
    }

    form {
        border: 0px solid #ccc;
        background-color: ghostwhite;
        border-color: white;
        border-collapse: collapse;
        padding-left: 1vw;
        padding-top: 1vw;
        padding-bottom: 1vw;
        width: 100%;
        table-layout: fixed;
        font-family: Trebuchet MS, Helvetica, sans-serif;
        font-size: 1em;
    }

    .listings {
        background-image: url("https://i.picsum.photos/id/1031/5446/3063.jpg?hmac=Zg0Vd3Bb7byzpvy-vv-fCffBW9EDp1coIbBFdEjeQWE");
        /* background-image: url("https://i.ibb.co/9GsYgtV/building-metal-house-architecture-101808.jpg"); */
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
        <th class="tg-0pky">HOUSE ID</th>
        <th class="tg-0pky">ADDRESS ID</th>
        <th class="tg-0pky">LISTING DATE</th>
        <th class="tg-0lax">LISTING PRICE $</th>
        <th class="tg-0lax">SELLER ID</th>
        <th class="tg-0lax">REALTOR ID</th>
        <th class="tg-0lax">FLOOR SPACE</th>
        <th class="tg-0lax">PROPERTY TYPE ID</th>
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
        <!-- <td class="tg-0pky"><button><a href="<?php echo site_url('houses/edit/' . $row->HOUSE_ID);?>">Update</a></button></td> -->
        <td class="tg-0pky"><a class="smbutton" href="<?php echo site_url('houses/edit/' . $row->HOUSE_ID);?>">Update</a></td>
    </tr>
    <?php } ?>

    </tbody>
</table>

<div>
    <h3>Total Number of Listing: <?php echo $houseList_count[0]->COUNT ?></h3>
</div>

<div>
    <form style = "margin-top:-2vw;" method="post" action="<?php echo site_url('houses/select');?>">
        Only Show
        <label style="font-size: 0.9em;"><input name="selection_checkbox[]" type="checkbox" value="HOUSE_ID" />HOUSE ID </label>
        <label style="font-size: 0.9em;"><input name="selection_checkbox[]" type="checkbox" value="ADDRESS_ID" />ADDRESS ID </label>
        <label style="font-size: 0.9em;"><input name="selection_checkbox[]" type="checkbox" value="LISTING_DATE" />LISTING DATE </label>
        <label style="font-size: 0.9em;"><input name="selection_checkbox[]" type="checkbox" value="LISTING_PRICE" />LISTING PRICE </label>
        <label style="font-size: 0.9em;"><input name="selection_checkbox[]" type="checkbox" value="SELLER_ID" />SELLER ID </label>
        <label style="font-size: 0.9em;"><input name="selection_checkbox[]" type="checkbox" value="REALTOR_ID" />REALTOR ID </label>
        <label style="font-size: 0.9em;"><input name="selection_checkbox[]" type="checkbox" value="FLOOR_SPACE" />FLOOR SPACE </label>
        <label style="font-size: 0.9em;"><input name="selection_checkbox[]" type="checkbox" value="PROPERTY_TYPE_ID" />PROPERTY TYPE ID </label>

        <input class="smbutton2" type="submit" value="Select" name="btnadd">
    </form>
</div>

<form action="jointable" method="post">
    Join House table with
    <select name="table" id="table">
        <option value="HOUSE_INSPECTION">HOUSE_INSPECTION</option>
        <option value="PREVIOUS_OWNERS">PREVIOUS_OWNERS</option>
        <option value="CONTAINS_HISTORY_TRANSACTIONS">CONTAINS_HISTORY_TRANSACTIONS</option>
    </select>
    table
    <input class="smbutton2" type="submit" value="Join" name="btnadd">
</form>

<div>
<h2>Price Filter</h2>
<form style="padding-bottom: 2vw;" method="post" action="<?php echo site_url('houses/filter'); ?>">
    <label style="font-size: 0.9em" for="down">From</label>
    <input type="text" name="down">
    <label style="font-size: 0.9em" for="up">To</label>
    <input type="text" name="up">
    <input class="smbutton2" type="submit" value="Filter" name="btnfilter">
</form>
</div>

</div>