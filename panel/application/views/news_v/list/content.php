<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Haber Listesi
            <a href="<?php echo base_url("news/new_form"); ?>" class="btn btn-outline btn-primary btn-xs pull-right"><i class="fa fa-plus"> Yeni Ekle</i></a>
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if(empty($items)){ ?>
            <div class="alert alert-info text-center">
                <h4 class="alert-title">Kayıt Bulunamadı</h4>
                <p>Burada bir kayıt bulunmamaktadır. Eklemek için lütfen <a href="<?php echo base_url("news/new_form"); ?>"> tıklayınız</a></p>
            </div>

            <?php }else{ ?>

            <table class="table table-hover table-striped table-bordered content-container">
                <thead>
                    <th class="order"><i class="fa fa-reorder"></i></th>
                    <th class="w50">#id</th>
                    <th>Başlık</th>
                    <th>url</th>
                    <th>Açıklama</th>
                    <th>Haber Türü</th>
                    <th>Görsel</th>
                    <th>Durumu</th>
                    <th>işlem</th>
                </thead>
                <tbody class="sortable" data-url="<?php echo base_url("news/rankSetter");  ?>">
                    <?php foreach ($items as $item){ ?>
                        <tr id="ord-<?php echo $item->id; ?>">
                            <td class="order"><i class="fa fa-reorder"></i></td>
                            <td>#<?php echo $item->id; ?></td>
                            <td><?php echo $item->title; ?></td>
                            <td><?php echo $item->url; ?></td>
                            <td><?php echo $item->description; ?></td>
                            <td><?php echo $item->news_type; ?></td>
                            <td>
                                <?php if ($item->news_type == "image"){  ?>

                                    <img width="100" src="<?php echo base_url("uploads/$viewFolder/$item->img_url"); ?>" alt="" class="img-rounded"/>
                                <?php }else if($item->news_type == "video"){ ?>
                                    <iframe
                                    height="150"
                                    src="<?php echo $item->video_url; ?>"
                                    frameborder="0"
                                    gesture="media"
                                    allow="encrypted-media"
                                    allowfullscreen>

                                    </iframe>
                                <?php  } ?>

                            </td>
                            <td>
                                <input
                                        data-url="<?php echo base_url("news/isActiveSetter/$item->id"); ?>"
                                        class="isActive"
                                        type="checkbox"
                                        data-switchery
                                        data-color="#10c469"
                                    <?php echo ($item->isActive) ? "checked" : ""; ?> />
                            </td>
                            <td>
                                <button
                                        data-url="<?php echo base_url("news/delete/$item->id")?>" type="button"
                                        class="btn btn-sm btn-danger btn-outline remove-btn">
                                        <i class="fa fa-trash"> Sil</i>
                                </button>
                                <a href="<?php echo base_url("news/update_form/$item->id"); ?>" type="button" class="btn btn-sm btn-warning btn-outline"><i class="fa fa-pencil-square-o"> Düzenle</i></a>
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