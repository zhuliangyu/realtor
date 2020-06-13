<h4>Show neighborhood</h4>
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
        <th class="tg-0pky">NEIGHBOR_ID</th>
        <th class="tg-0pky">NEIGHBOR_NAME</th>
        <th class="tg-0pky">INCOME</th>
        <th class="tg-0lax">SCHOOL_DISTRICT</th>
        <th class="tg-0lax">POPULATION_SIZE</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($NeighborList as $row){ ?>
        <tr>
            <td class="tg-0pky"><?php echo $row->NEIGHBOR_ID; ?></td>
            <td class="tg-0pky"><?php echo $row->NEIGHBOR_NAME; ?></td>
            <td class="tg-0pky"><?php echo $row->INCOME; ?></td>
            <td class="tg-0pky"><?php echo $row->SCHOOL_DISTRICT; ?></td>
            <td class="tg-0pky"><?php echo $row->POPULATION_SIZE; ?></td>
        </tr>
    <?php } ?>

    </tbody>
</table>

<form method="post" action="<?php echo site_url('neighbor/delete');?>">
    Delete Neighbour_id
    <select name="selection">
        <?php foreach ($NeighborList as $row){ ?>
            <option value="<?php echo $row->NEIGHBOR_ID ?>"><?php echo $row->NEIGHBOR_ID ?></option>
        <?php } ?>
    </select>
    <input type="submit" value="Select" name="btnadd">
</form>

<button><a href=<?php echo site_url('houses');?>>Go Back</a></button>
