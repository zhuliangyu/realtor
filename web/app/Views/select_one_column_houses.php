<h1>Select columns of the house table</h1>

<?php if (isset($selection)){ ?>
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
                <?php foreach ($query_string as $query_column){ ?>
                    <th class="tg-0pky"><?php echo $query_column ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>

        <?php foreach ($selection as $row){ ?>
            <tr>
                <?php foreach ($query_string as $column){ ?>
                    <td>
                        <?php echo $row->$column; ?>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>

        </tbody>
    </table>
<?php } ?>

<button><a href=<?php echo site_url('houses');?>>Go Back</a></button>
