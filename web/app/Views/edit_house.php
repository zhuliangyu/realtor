<style type="text/css">
    h2 {
        font-size: 1.5em;
        margin: .5em 0 .75em;
        font-weight: bold;
        text-align: center;
        font-family: Trebuchet MS, Helvetica, sans-serif;
        color: dodgerblue;
    }

    .button {
        background-color: ghostwhite;
        border: none;
        color: dodgerblue;
        padding: 1vw 1vw 1vw 1vw;
        margin: 0em 1vw 1vw 0vw;
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

    .smbutton {
        background-color: white;
        border:solid;
        border-width: thin;
        border-color: forestgreen;
        color: forestgreen;
        margin-top: 0.2vw;
        padding: 0.2vw 0.5vw 0.2vw 0.5vw;
        border-radius: 2px;
        font-family: Trebuchet MS, Helvetica, sans-serif;
        text-decoration: none;
        display: inline-block;
        font-size: 1em;
        text-align: center;
    }
    .smbutton:visited {
        color: forestgreen;
        text-decoration: none;
    }
    .smbutton:hover {
        color: white;
        background-color: forestgreen;
    }

    img {
        border-radius: 80%;
        border: 2px solid #ddd;
        display: block;
        padding: 10px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 2vw;
        height: 200px;
        width: 200px;
    }

    form {
        border: 0px solid #ccc;
        background-color: ghostwhite;
        border-color: white;
        border-collapse: collapse;
        padding-left: 1vw;
        padding-top: 1.2vw;
        padding-bottom: 1vw;
        width: 100%;
        table-layout: fixed;
        font-family: Trebuchet MS, Helvetica, sans-serif;
        font-size: 1em;
    }

</style>


<h2>Update House with ID #<?php echo $house_edit[0]->HOUSE_ID ?></h2>
<img src="https://picsum.photos/500/600" alt="">
<form method="post" action="<?php echo site_url('houses/update');?>">
    Address ID
    <select style="margin-bottom:1vw;" name="address_id">
        <?php foreach ($address_id_list as $row){ ?>
            <option value="<?php echo $row->ADDRESS_ID ?>" <?php if ($house_edit[0]->ADDRESS_ID == $row->ADDRESS_ID){ echo "selected='selected'";}?>><?php echo $row->ADDRESS_ID ?></option>
        <?php } ?>
    </select>

    <br>

    <input type="hidden" name="house_id" value="<?php echo $house_edit[0]->HOUSE_ID ?>">

    Listing Date
    <input style="margin-bottom:1vw;" type="date" name="listing_date" value="<?php echo $house_edit[0]->LISTING_DATE ?>">

    <br>

    Price
    <input style="margin-bottom:1vw;" type="number" name="listing_price" value="<?php echo $house_edit[0]->LISTING_PRICE ?>">

    <br>

    Seller ID
    <select style="margin-bottom:1vw;" name="seller_id">
        <?php foreach ($seller_id_list as $row){ ?>
            <option value="<?php echo $row->CUSTOMER_ID ?>" <?php if ($house_edit[0]->SELLER_ID == $row->CUSTOMER_ID){ echo "selected='selected'";}?>><?php echo $row->CUSTOMER_ID ?></option>
        <?php } ?>
    </select>

    <br>

    Realtor ID
    <select style="margin-bottom:1vw;" name="realtor_id">
        <?php foreach ($realtor_id_list as $row){ ?>
            <option value="<?php echo $row->REALTOR_ID ?>" <?php if ($house_edit[0]->REALTOR_ID == $row->REALTOR_ID){ echo "selected='selected'";}?>><?php echo $row->REALTOR_ID ?></option>
        <?php } ?>
    </select>

    <br>

    Floor Space
    <input style="margin-bottom:1vw;" type="number" name="floor_space" value="<?php echo $house_edit[0]->FLOOR_SPACE ?>">

    <br>

    Property Type ID
    <select style="margin-bottom:1vw;" name="property_type_id">
        <?php foreach ($property_type_id_list as $row){ ?>
            <option value="<?php echo $row->PROPERTY_TYPE_ID ?>" <?php if ($house_edit[0]->PROPERTY_TYPE_ID == $row->PROPERTY_TYPE_ID){ echo "selected='selected'";}?>><?php echo $row->PROPERTY_TYPE_ID ?></option>

        <?php } ?>
    </select>

    <br>

    <input class="smbutton" type="submit" value="Update" name="btnadd">

</form>

<a class = "button" href=<?php echo site_url('houses');?>>Go Back</a>
