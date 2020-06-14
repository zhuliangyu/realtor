<style type="text/css">
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
    top: 60%;
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
    tr{
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        border-color: white;
        padding: .35em;
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
    <thead>
    <caption>Top Realtor Delegates All Kinds of Properties</caption>
    <img src="https://picsum.photos/500/600" alt="">
    <tr>
        <th class="tg-0pky">Realtor Id</th>
        <th class="tg-0pky">Name</th>
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

<button class="button"><a href=<?php echo site_url('realtors');?>>Go Back</a></button>
