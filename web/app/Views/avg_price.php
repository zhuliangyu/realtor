<style type="text/css">
    table {
    border: 1px solid #ccc;
    border-collapse: collapse;
    margin: 0;
    padding: 0;
    width: 100%;
    table-layout: fixed;
    }
    h1 {
        font-size: 1.5em;
        margin: .5em 0 .75em;
        font-weight: bold;
        text-align: center
    }
    tr{
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        padding: .35em;
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
    left: 45%;
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
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
        overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
        font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
    .tg .tg-0lax{text-align:left;vertical-align:top}
</style>
<table class="tg">
<h1>Average Price Grouped by Property Type</h1>
<img src="https://picsum.photos/500/600" alt="">
    <thead>
    <tr>
        <th class="tg-0pky">Property Type Id</th>
        <th class="tg-0pky">Property Type</th>
        <th class="tg-0pky">Average Price</th>
        <th class="tg-0pky">Total Number of Properties</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($house_groupBy as $row){ ?>
        <tr>
            <td class="tg-0pky"><?php echo $row->PROPERTY_TYPE_ID; ?></td>
            <td class="tg-0pky"><?php echo $row->TYPE; ?></td>
            <td class="tg-0pky"><?php echo $row->AVG; ?></td>
            <td class="tg-0pky"><?php echo $row->COUNT; ?></td>
        </tr>
    <?php } ?>

    </tbody>
</table>

<button class = "button"><a href=<?php echo site_url('houses');?>>Go Back</a></button>
