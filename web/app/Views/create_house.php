<Style>
    form {
    border: 0px;
    border-collapse: collapse;
    margin: 0;
    padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 600px;
    width: 100%;
    table-layout: fixed;
    background-color: #f8f8f8;
    font-size: 1.5em;
    left: 40%;
    }
    h1 {
        font-size: 2.0em;
        margin: .5em 0 .75em;
        text-align: center
    }
    .button {
    background-color: white;
    border: none;
    color: white;
    padding: 15px 32px;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 24px;
    position: fixed;
    top: 90%;
    left: 47%;
    }
img {
    border-radius: 80%;
    border: 2px solid #ddd;
    display: block;
    padding: 10px;
    margin-left: auto;
    margin-right: auto;
    height: 200px;
    width: 200px;
}
</Style>

 <h1>Create a New Listing</h1>
 <img src="https://picsum.photos/500/600" alt="">
<form method="post" action="create">
    Address Id
    <select name="address_id">
        <?php foreach ($address_id_list as $row){ ?>
            <option value="<?php echo $row->ADDRESS_ID ?>"><?php echo $row->ADDRESS_ID ?></option>
        <?php } ?>
    </select>

    <br>

    Listing Date
    <input type="date" name="listing_date">

    <br>

    Price
    <input type="number" name="listing_price">

    <br>

    Seller Id
    <select name="seller_id">
        <?php foreach ($seller_id_list as $row){ ?>
            <option value="<?php echo $row->CUSTOMER_ID ?>"><?php echo $row->CUSTOMER_ID ?></option>
        <?php } ?>
    </select>

    <br>

    Realtor Id
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

    <input type="submit"  style="width:100px; text-align:center; padding-top: 20px; padding-right: 120px; padding-bottom: 20px;
    padding-left: 120px; border: 0px solid #ccc; font-size: 20px; background-color: #f8f8f8" value="Submit" name="btnadd">

</form>


<button class= "button"><a href=<?php echo site_url('houses');?>>Go Back</a></button>
