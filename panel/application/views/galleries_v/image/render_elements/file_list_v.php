<?php if(empty($items)){ ?>

    <div class="alert alert-info text-center">
        <p>Burada resim bulunmamaktadır.</p>
    </div>
<?php }else{ ?>
    <table class="table table-bordered table-striped table-hover pictures_list">
        <thead>
        <th class="order"><i class="fa fa-reorder"></i></th>
        <th>#id</th>
        <th>Görsel</th>
        <th>Dosya Yolu/Adı</th>
        <th>Durumu</th>
        <th>İşlem</th>
        </thead>
        <tbody class="sortable" data-url="<?php echo base_url("galleries/fileRankSetter/$gallery_type"); ?>">
        <?php foreach ($items as $item){   ?>

            <tr id="ord-<?php echo $item->id; ?>">
                <td class="order"><i class="fa fa-reorder"></i></td>
                <td class="w100">#<?php echo $item->id; ?></td>
                <td class="w100">
                    <?php

                    if($gallery_type == "image"){ ?>
                        <img width="40" src="<?php echo base_url("$item->url") ?>" alt="<?php echo $item->url ?>" class="img-responsive">
                    <?php }else if($gallery_type == "file"){ ?>
                        <i class="fa fa-folder fa-2x"></i>
                    <?php } ?>
                </td>
                <td><?php echo $item->url; ?></td>
                <td class="w100">
                    <input
                        data-url="<?php echo base_url("galleries/fileIsActiveSetter/$item->id/$gallery_type"); ?>"
                        class="isActive"
                        type="checkbox"
                        data-switchery
                        data-color="#10c469"
                        <?php echo ($item->isActive) ? "checked" : ""; ?> />
                </td>
                <td class="w100">
                    <button
                        data-url="<?php echo base_url("galleries/fileDelete/$item->id/$item->gallery_id/$gallery_type")?>" type="button"
                        class="btn btn-sm btn-danger btn-outline remove-btn btn-block">
                        <i class="fa fa-trash"> Sil</i>
                    </button>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php } ?>