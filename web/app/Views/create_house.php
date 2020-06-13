Create a new listing
<form method="post" action="create">

    address_id
    <select name="address_id">
        <?php foreach ($address_id_list as $row){ ?>
            <option value="<?php echo $row->ADDRESS_ID ?>"><?php echo $row->ADDRESS_ID ?></option>
        <?php } ?>
    </select>

    <br>

    listing_date
    <input type="date" name="listing_date">

    <br>

    price
    <input type="number" name="listing_price">

    <br>

    Seller_id
    <select name="seller_id">
        <?php foreach ($seller_id_list as $row){ ?>
            <option value="<?php echo $row->CUSTOMER_ID ?>"><?php echo $row->CUSTOMER_ID ?></option>
        <?php } ?>
    </select>

    <br>

    Realtor_id
    <select name="realtor_id">
        <?php foreach ($realtor_id_list as $row){ ?>
            <option value="<?php echo $row->REALTOR_ID ?>"><?php echo $row->REALTOR_ID ?></option>
        <?php } ?>
    </select>

    <br>

    Floor space
    <input type="number" name="floor_space">

    <br>

    Property Type
    <select name="property_type_id">
        <?php foreach ($property_type_id_list as $row){ ?>
            <option value="<?php echo $row->PROPERTY_TYPE_ID ?>"><?php echo $row->PROPERTY_TYPE_ID ?></option>
        <?php } ?>
    </select>

    <br>

    <input type="submit" value="submit" name="btnadd">

</form>


<button><a href=<?php echo site_url('houses');?>>Go Back</a></button>
