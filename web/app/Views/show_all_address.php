<style type="text/css">

    table {
        border: 0px solid #ccc;
        border-color: white;
        border-collapse: collapse;
        margin: 0;
        width: 100%;
        table-layout: fixed;
    }

    h1 {
        font-size: 1.5em;
        margin: .5em 0 .75em;
        font-weight: bold;
        text-align: center;
        font-family: Trebuchet MS, Helvetica, sans-serif;
        color: dodgerblue;
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
        text-decoration: none;
    }
    .button:hover {
        color: deepskyblue;
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

<table class="tg">
    <thead>
    <h1>All Addresses</h1>
    <img src="https://picsum.photos/500/600" alt="">
    <tr>
        <th class="tg-0lax">Address Id</th>
        <th class="tg-0lax">Address</th>
        <th class="tg-0pky">Neighbourhood Id</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($AddressList as $row){ ?>
        <tr>
            <td class="tg-0pky"><?php echo $row->ADDRESS_ID; ?></td>
            <td class="tg-0pky"><?php echo $row->ADDRESS; ?></td>
            <td class="tg-0pky"><?php echo $row->NEIGHBOR_ID; ?></td>
        </tr>
    <?php } ?>

    </tbody>
</table>

<a class="button" href=<?php echo site_url('houses');?>>Go Back</a>

