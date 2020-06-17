
<style type="text/css">
    table {
        border: 1px solid #ccc;
        border-collapse: collapse;
        margin: 0;
        padding: 0;
        width: 100%;
        table-layout: fixed;
    }

    h1{
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

    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:white;border-style:solid;border-width:1px;font-family:Trebuchet MS, sans-serif;font-size:14px;
        overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg th{border-color:white;border-style:solid;border-width:1px;font-family:Trebuchet MS, sans-serif;font-size:14px;
        font-weight:bold;overflow:hidden;padding:10px 5px;word-break:normal;background-color:lightsteelblue;}
    .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}

</style>

<h1>Selected <?php echo $tableName ?> Table</h1>
<?php
$query_results;
$tableSchema;
?>

<table class="tg">
    <thead>
    <tr>
        <?php foreach ($tableSchema as $query_column){ ?>
            <th class="tg-0pky"><?php echo $query_column ?></th>
        <?php } ?>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($query_results as $row){ ?>
        <tr>
            <?php foreach ($tableSchema as $column){ ?>
                <td>
                    <?php echo $row->$column; ?>
                </td>
            <?php } ?>
        </tr>
    <?php } ?>

    </tbody>
</table>
<a class = "button" href=<?php echo site_url('houses');?>>Go Back</a>
