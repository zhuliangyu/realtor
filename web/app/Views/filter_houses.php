<style type="text/css">

    h1{
        font-size: 1.5em;
        margin: .5em 0 .75em;
        font-weight: bold;
        text-align: left;
        font-family: Trebuchet MS, Helvetica, sans-serif;
        color: dodgerblue;
    }

    p{
        font-size: 1em;
        margin: .5em 0 .75em;
        font-style: oblique;
        text-align: left;
        font-family: Trebuchet MS, Helvetica, sans-serif;
        color: black;
    }

    .button {
        background-color: ghostwhite;
        border: none;
        color: dodgerblue;
        padding: 1vw 1vw 1vw 1vw;
        margin: 1em 1vw 1vw 0vw;
        border-radius: 5px;
        font-family: Trebuchet MS, Helvetica, sans-serif;
        text-decoration: none;
        display: inline-block;
        font-size: 1em;
        text-align: center;
        /* position: fixed; */
    }

    .button:visited {
        color: dodgerblue;
        opacity: 0.8;
        text-decoration: none;
    }
    .button:hover {
        color: deepskyblue;
    }

    tr{
        /* background-color: #f8f8f8; */
        background-color: ghostwhite;
        border: 1px solid white;
        padding: .35em;
    }
    
    tr:nth-child(even) {
        background-color: white;
    }

    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:white;border-style:solid;border-width:1px;font-family:Trebuchet MS, sans-serif;font-size:14px;
        overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg th{border-color:white;border-style:solid;border-width:1px;font-family:Trebuchet MS, sans-serif;font-size:14px;
        font-weight:bold;overflow:hidden;padding:10px 5px;word-break:normal;background-color:lightsteelblue;}
    .tg .tg-0pky{border-color:white;text-align:left;vertical-align:top}
    .tg .tg-0lax{text-align:left;vertical-align:top}


</style>

<h1>Filtered Houses</h1>
<p>Filter Condition: Houses with Listing Price from $<?php echo $filter_condition_down ?> to $<?php echo $filter_condition_up?>: </p>

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

<a class="button" href=<?php echo site_url('houses');?>>Go Back</a>
