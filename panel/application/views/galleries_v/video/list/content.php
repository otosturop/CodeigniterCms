<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <?php echo "<b>$gallery->title</b> galerisine ait videolar"; ?>
            <a href="<?php echo base_url("galleries/new_gallery_video_form/$gallery->id"); ?>" class="btn btn-outline btn-primary btn-xs pull-right"><i class="fa fa-plus"> Yeni Ekle</i></a>
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if(empty($items)){ ?>
            <div class="alert alert-info text-center">
                <h4 class="alert-title">Kayıt Bulunamadı</h4>
                <p>Burada bir kayıt bulunmamaktadır. Eklemek için lütfen <a href="<?php echo base_url("galleries/new_gallery_video_form/$gallery->id"); ?>"> tıklayınız</a></p>
            </div>

            <?php }else{ ?>

            <table class="table table-hover table-striped table-bordered content-container">
                <thead>
                    <th class="order"><i class="fa fa-reorder"></i></th>
                    <th class="w50">#id</th>
                    <th>url</th>
                    <th>Görsel</th>
                    <th>Durumu</th>
                    <th>işlem</th>
                </thead>
                <tbody class="sortable" data-url="<?php echo base_url("galleries/rankGalleryVideoSetter");  ?>">
                    <?php foreach ($items as $item){ ?>
                        <tr id="ord-<?php echo $item->id; ?>">
                            <td class="order"><i class="fa fa-reorder"></i></td>
                            <td>#<?php echo $item->id; ?></td>
                            <td><?php echo $item->url; ?></td>
                            <td>
                                <iframe
                                    height="200"
                                    src="<?php echo $item->url; ?>"
                                    frameborder="0"
                                    gesture="media"
                                    allow="encrypted-media"
                                    allowfullscreen>
                                </iframe>
                            </td>
                            <td>
                                <input
                                        data-url="<?php echo base_url("galleries/galleryVideoIsActiveSetter/$item->id"); ?>"
                                        class="isActive"
                                        type="checkbox"
                                        data-switchery
                                        data-color="#10c469"
                                    <?php echo ($item->isActive) ? "checked" : ""; ?> />
                            </td>
                            <td>
                                <button
                                        data-url="<?php echo base_url("galleries/galleryVideoDelete/$item->id/$item->gallery_id")?>" type="button"
                                        class="btn btn-sm btn-danger btn-outline remove-btn">
                                        <i class="fa fa-trash"> Sil</i>
                                </button>
                                <a href="<?php echo base_url("galleries/update_gallery_video_form/$item->id"); ?>" type="button" class="btn btn-sm btn-warning btn-outline"><i class="fa fa-pencil-square-o"> Düzenle</i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } ?>
        </div><!-- .widget -->
    </div>
    <!-- END column -->
</div>