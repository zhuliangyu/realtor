<button class = "realtor"><a href=<?php echo site_url('realtors/top');?>>Top Realtor</a></button>

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
    .realtor {
    background-color: white;
    border: none;
    color: white;
    font-family: Arial, Helvetica, sans-serif;
    text-align: left;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    position: fixed;
    top: 3%;
    left: 0%;
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
<h1>Show Realtors</h1>
<img src="https://picsum.photos/500/600" alt="">
    <thead>
    <tr>
        <th class="tg-0lax">REALTOR ID</th>
        <th class="tg-0lax">Name</th>
        <th class="tg-0pky">Phone</th>
        <th class="tg-0pky">Operation</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($realtorList as $row){ ?>
        <tr>
            <td class="tg-0pky"><?php echo $row->REALTOR_ID; ?></td>
            <td class="tg-0pky"><?php echo $row->NAME; ?></td>
            <td class="tg-0pky"><?php echo $row->PHONE; ?></td>
            <td class="tg-0pky"><button><a href="<?php echo site_url('realtors/' . $row->REALTOR_ID) . "/houses";?>">Show all properties</a></button></td>
        </tr>
    <?php } ?>

    </tbody>
</table>

<button class = "button"><a href=<?php echo site_url('houses');?>>Go Back</a></button>
