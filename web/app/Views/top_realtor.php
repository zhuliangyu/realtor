<style type="text/css">

    h1 {
        font-size: 1.5em;
        margin: .5em 0 .75em;
        padding-top: 0.8vw;
        padding-bottom: 0.8vw;
        font-weight: bold;
        text-align: center;
        font-family: Trebuchet MS, Helvetica, sans-serif;
        color: yellow;
        background-color: goldenrod;
    }
    h3 {
        border: none;
        padding: 1vw 1vw 1vw 1vw;
        border-radius: 5px;
        font-family: Trebuchet MS, Helvetica, sans-serif;
        text-align: left;
        text-decoration: none;
        display: inline-block;
        font-size: 1.25em;
        position: fixed;
    }

    table {
        border: 0px solid #ccc;
        border-color: white;
        border-collapse: collapse;
        margin: 0;
        width: 100%;
        table-layout: fixed;
    }
    caption {
        font-size: 1.5em;
        margin: .5em 0 .75em;
        font-weight: bold;
        font-family: Trebuchet MS, Helvetica, sans-serif;
        padding: 1vw 1vw 1vw 1vw;
        margin: 1vw 1vw 1vw 1vw;
        color: sienna;
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

    img {
        border-radius: 80%;
        border: 2px solid #ddd;
        display: block;
        padding: 10px;
        margin-left: auto;
        margin-right: auto;
        height: 200px;
        width: 200px;
        margin-bottom: 1vw;
    }
    tr{
        background-color: ghostwhite;
        border: 1px solid white;
        padding: .35em;
    }
    tr:nth-child(even) {
        background-color: white;
    }
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Trebuchet MS, sans-serif;font-size:14px;
        overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Trebuchet MS, sans-serif;font-size:14px;
        font-weight:bold;overflow:hidden;padding:10px 5px;word-break:normal;background-color:lightsteelblue;}
    .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
    .tg .tg-0lax{text-align:left;vertical-align:top}
    
</style>

<h1>&#10030 Our Top Realtor &#10030</h1>
<img src="https://picsum.photos/500/600" alt="">
<table class="tg">
    <thead>
    <caption>The Realtor Who Delegates Every Type of Property</caption>
    <tr>
        <th class="tg-0pky">REALTOR ID</th>
        <th class="tg-0pky">NAME</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($topRealtor as $row){ ?>
        <tr>
            <td class="tg-0pky"><?php echo $row->REALTOR_ID; ?></td>
            <td class="tg-0pky"><?php echo $row->NAME; ?></td>
        </tr>
    <?php } ?>

    </tbody>
</table>

<a class="button" href=<?php echo site_url('realtors');?>>Go Back</a>
