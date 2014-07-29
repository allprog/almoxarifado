<?php if (isset($products)){ ?>
<tbody>
    <?php foreach($products as $product){?>
        <tr>
            <td>
                <div class="dropdown">
                    <a data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-tasks"></span></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        <li role="presentation">
                            <a data-toggle="modal" data-target="#dynamicModal" href="<?php echo site_url("products/input/$product->id");?>">
                                <span class="glyphicon glyphicon-plus"></span> Entrada
                            </a>
                        </li>
                        <li role="presentation">
                            <a data-toggle="modal" data-target="#dynamicModal" href="<?php echo site_url("products/output/$product->id");?>">
                                <span class="glyphicon glyphicon-minus"></span> Saída
                            </a>
                        </li>
                        <li role="presentation">
                            <a data-toggle="modal" data-target="#dynamicModal" href="<?php echo site_url("products/edit/$product->id");?>">
                                <span class="glyphicon glyphicon-pencil"></span> Editar
                            </a>
                        </li>
                        <li role="presentation">
                            <a data-toggle="modal" data-target="#dynamicModal" href="<?php echo site_url("products/reversein/$product->id");?>">
                                <span class="glyphicon glyphicon-chevron-right"></span> Estornar saída
                            </a>
                        </li>
                        <li role="presentation">
                            <a data-toggle="modal" data-target="#dynamicModal" href="<?php echo site_url("products/reverseout/$product->id");?>">
                                <span class="glyphicon glyphicon-chevron-left"></span> Estornar entrada
                            </a>
                        </li>
                    </ul>
                </div>
            </td>
            <td>
                <?php echo $product->id; ?>
            </td>
            <td>
                <div class="popover-button" data-toggle="popover" data-content="<?php echo $product->observation; ?>" data-trigger="hover" data-placement="bottom">
                <?php echo $product->name; ?>
                </div>
            </td>
            <td>
                <?php echo $product->gname; ?>
            </td>
            <td>
                <?php echo "$product->quantity $product->unit"; ?>
            </td>
            <td>
                <?php echo "R$".number_format($product->value, 2, ',', '');?>
            </td>
            <td>
                <?php echo "R$".number_format($product->value*$product->quantity, 2, ',', ''); ?>
            </td>
        </tr>
    <?php } ?>
</tbody>
<tfoot>
    <tr class="pagination-tr">
        <td colspan="7">
            <div class="text-center">
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </td>
    </tr>
</tfoot>
<?php }?>
