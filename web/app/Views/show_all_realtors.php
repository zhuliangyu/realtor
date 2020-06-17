

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

    .smbutton {
        background-color: white;
        border:solid;
        border-width: thin;
        border-color: dodgerblue;
        color: dodgerblue;
        margin-top: -0.1em;
        margin-bottom: -0.1em;
        padding: 0.2vw 0.5vw 0.2vw 0.5vw;
        border-radius: 2px;
        font-family: Trebuchet MS, Helvetica, sans-serif;
        text-decoration: none;
        display: inline-block;
        font-size: 1em;
        text-align: center;
    }
    .smbutton:visited {
        color: dodgerblue;
        text-decoration: none;
    }
    .smbutton:hover {
        color: white;
        background-color: dodgerblue;
    }

    .realtor {
        background-color: goldenrod;
        border: none;
        color: yellow;
        padding: 1vw 1vw 1vw 1vw;
        margin: 9.2em 1vw 1vw 0vw;
        border-radius: 5px;
        font-family: Trebuchet MS, Helvetica, sans-serif;
        text-align: left;
        text-decoration: none;
        display: inline-block;
        font-size: 1.25em;
        position: fixed;
    }

    .realtor:visited {
        color: yellow;
        text-decoration: none;
    }
    .realtor:hover {
        color: lightgoldenrodyellow;
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

<h1>All Realtors</h1>

<a class = "realtor" href=<?php echo site_url('realtors/top');?>>&#10030 Show Top Realtor &#10030</a>

<img src="https://picsum.photos/500/600" alt="">
<table class="tg">
    <thead>
    <tr>
        <th class="tg-0lax">REALTOR ID</th>
        <th class="tg-0lax">NAME</th>
        <th class="tg-0pky">PHONE</th>
        <th class="tg-0pky">Operation</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($realtorList as $row){ ?>
        <tr>
            <td class="tg-0pky"><?php echo $row->REALTOR_ID; ?></td>
            <td class="tg-0pky"><?php echo $row->NAME; ?></td>
            <td class="tg-0pky"><?php echo $row->PHONE; ?></td>
            <td class="tg-0pky"><a class = "smbutton" href="<?php echo site_url('realtors/' . $row->REALTOR_ID) . "/houses";?>">Show all properties</a></td>
        </tr>
    <?php } ?>

    </tbody>
</table>

<a class = "button" href=<?php echo site_url('houses');?>>Go Back</a>
