<h2>Avg price group by property type</h2>
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
        <th class="tg-0pky">PROPERTY_TYPE_ID</th>
        <th class="tg-0pky">Property type</th>
        <th class="tg-0pky">Avg price</th>
        <th class="tg-0pky">Total # of properties</th>
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

<button><a href=<?php echo site_url('houses');?>>Go Back</a></button>
