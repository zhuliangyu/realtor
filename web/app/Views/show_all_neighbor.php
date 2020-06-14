
<style type="text/css">
    table {
    border: 0px solid #ccc;
    border-color: white;
    border-collapse: collapse;
    margin: 0;
    width: 100%;
    table-layout: fixed;
    }
    form {
    border: 0px solid #ccc;
    border-color: white;
    border-collapse: collapse;
    padding-left:620px;
    padding-top: 80px;
    width: 100%;
    table-layout: fixed;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
    }
    h1 {
        font-size: 1.5em;
        margin: .5em 0 .75em;
        font-weight: bold;
        text-align: center
    }
    tr{
        background-color: #f8f8f8;
        border: white;
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
    top: 80%;
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
    .tg .tg-0lax{border-color:inherit;text-align:left;vertical-align:top}
</style>
<table class="tg">
    <thead>
    <h1>Show Neighborhood</h1>
    <img src="https://picsum.photos/500/600" alt="">
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
    Delete Neighbour Id
    <select name="selection">
        <?php foreach ($NeighborList as $row){ ?>
            <option value="<?php echo $row->NEIGHBOR_ID ?>"><?php echo $row->NEIGHBOR_ID ?></option>
        <?php } ?>
    </select>
    <input type="submit" value="Delete" name="btndelete">
</form>

<button class="button"><a href=<?php echo site_url('houses');?>>Go Back</a></button>
