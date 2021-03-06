
<style type="text/css">

    h1{
        font-size: 1.5em;
        margin: .5em 0 .75em;
        font-weight: bold;
        text-align: center;
        font-family: Trebuchet MS, Helvetica, sans-serif;
        color: dodgerblue;
    }

    table{
        border: 0px solid #ccc;
        border-color: white;
        border-collapse: collapse;
        margin: 0;
        width: 100%;
        table-layout: fixed;
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

    .smbutton {
        background-color: white;
        border:solid;
        border-width: thin;
        border-color: firebrick;
        color: firebrick;
        margin-top: 0em;
        margin-bottom: 0em;
        padding: 0.2vw 0.5vw 0.2vw 0.5vw;
        border-radius: 2px;
        font-family: Trebuchet MS, Helvetica, sans-serif;
        text-decoration: none;
        display: inline-block;
        font-size: 1em;
        text-align: center;
    }
    .smbutton:visited {
        color: firebrick;
        opacity: 0.8;
        text-decoration: none;
    }
    .smbutton:hover {
        color: white;
        background-color: firebrick;
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
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Trebuchet MS, sans-serif;font-size:14px;
        overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Trebuchet MS, sans-serif;font-size:14px;
        font-weight:bold;overflow:hidden;padding:10px 5px;word-break:normal;background-color:lightsteelblue;}
    .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
    .tg .tg-0lax{border-color:inherit;text-align:left;vertical-align:top}
</style>

<h1>All Neighborhoods</h1>
    <img src="https://picsum.photos/500/600" alt="">

<form method="post" action="<?php echo site_url('neighbor/delete');?>">
    Delete Neighborhood (plus all associated addresses) with ID #
    <select name="selection">
        <?php foreach ($NeighborList as $row){ ?>
            <option value="<?php echo $row->NEIGHBOR_ID ?>"><?php echo $row->NEIGHBOR_ID ?></option>
        <?php } ?>
    </select>
    <input class="smbutton" type="submit" value="Delete" name="btndelete">
</form>

<table class="tg">
    <thead>
    <tr>
        <th class="tg-0pky">NEIGHBOR ID</th>
        <th class="tg-0pky">NEIGHBOR NAME</th>
        <th class="tg-0pky">AVERAGE INCOME $</th>
        <th class="tg-0lax">SCHOOL DISTRICT</th>
        <th class="tg-0lax">POPULATION SIZE</th>
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
<a class="button" href=<?php echo site_url('houses');?>>Go Back</a>