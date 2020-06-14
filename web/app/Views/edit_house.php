<h2>Edit House_id <?php echo $house_edit[0]->HOUSE_ID ?></h2>

<form method="post" action="<?php echo site_url('houses/update');?>">
    address_id
    <select name="address_id">
        <?php foreach ($address_id_list as $row){ ?>
            <option value="<?php echo $row->ADDRESS_ID ?>" <?php if ($house_edit[0]->ADDRESS_ID == $row->ADDRESS_ID){ echo "selected='selected'";}?>><?php echo $row->ADDRESS_ID ?></option>
        <?php } ?>
    </select>

    <br>

    <input type="hidden" name="house_id" value="<?php echo $house_edit[0]->HOUSE_ID ?>">

    listing_date
    <input type="date" name="listing_date" value="<?php echo $house_edit[0]->LISTING_DATE ?>">

    <br>

    price
    <input type="number" name="listing_price" value="<?php echo $house_edit[0]->LISTING_PRICE ?>">

    <br>

    Seller_id
    <select name="seller_id">
        <?php foreach ($seller_id_list as $row){ ?>
            <option value="<?php echo $row->CUSTOMER_ID ?>" <?php if ($house_edit[0]->SELLER_ID == $row->CUSTOMER_ID){ echo "selected='selected'";}?>><?php echo $row->CUSTOMER_ID ?></option>
        <?php } ?>
    </select>

    <br>

    Realtor_id
    <select name="realtor_id">
        <?php foreach ($realtor_id_list as $row){ ?>
            <option value="<?php echo $row->REALTOR_ID ?>" <?php if ($house_edit[0]->REALTOR_ID == $row->REALTOR_ID){ echo "selected='selected'";}?>><?php echo $row->REALTOR_ID ?></option>
        <?php } ?>
    </select>

    <br>

    Floor space
    <input type="number" name="floor_space" value="<?php echo $house_edit[0]->FLOOR_SPACE ?>">

    <br>

    Property Type
    <select name="property_type_id">
        <?php foreach ($property_type_id_list as $row){ ?>
            <option value="<?php echo $row->PROPERTY_TYPE_ID ?>" <?php if ($house_edit[0]->PROPERTY_TYPE_ID == $row->PROPERTY_TYPE_ID){ echo "selected='selected'";}?>><?php echo $row->PROPERTY_TYPE_ID ?></option>

        <?php } ?>
    </select>

    <br>

    <input type="submit" value="update" name="btnadd">

</form>


<button><a href=<?php echo site_url('houses');?>>Go Back</a></button>
