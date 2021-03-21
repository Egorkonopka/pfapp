<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>

<?php
date_default_timezone_set('Etc/GMT-2');
$ctime = date('H:i:s');
// echo $ctime;
?>
<!-- fixed-box -->
<!-- fixed-div -->
<!--  <div class="row">
            <div class="col-md-12 fixed-box">
                <div class="widgets fixed-div">
                    <div class="row">
                        <div class="col-sm">
                     Вы на : 
                        </div>
                        <div class="col-sm">
                     Меню : 
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

<div class="main-content-<?=trim($info->style)?>">
    
        <div class="container">
            <!-- <div class="fixed-box">
                <div class="fixed-div">
                <nav class="four">
                  <ul>
                    <li><a href="#">название<i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                    <li><a onclick="return getCart()" href="#">корзина <i class="fa fa-shopping-cart"></i></a></li>
                   -- <li><a class="menu-icon" href="#">меню <i class="fas fa-angle-double-right"></i></a></li>
                    <li><a href="#">Contact <i class="fa fa-phone" aria-hidden="true"></i></a>
                              <ul class="submenu">
                                <li><a href="">Item 1</a></li>
                                <li><a href="">Item 2</a></li>
                              </ul>
                    </li>
                  </ul>
                </nav>
                </div>
            </div> -->
            <div class="fixed-box">
                <div class="fixed-div">
                                <nav class="four">
                                  <ul class="topmenu">
                                    <li><a href="#myModal2" id="btn2" ><?=$info->name?> <i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                                    <li><a onclick="return getCart()" href="#">корзина <i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a>все меню <i class="fa fa-caret-square-o-down" aria-hidden="true"></i></a>
                                      <ul class="submenu">
                                        <li><?= \frontend\components\MenuWidget::widget(['tpl' => 'select']) ?></li>
                                      </ul>
                                    </li>

                                  </ul>
                                </nav>
                </div>
            </div>

                            <!-- зачем? -->
                        <div class="wrapper">
                            <div class="menu">
                            <nav class="menu-list">
                                <h3 class="entry-title text-center"><a><?=  $info->name ?></a></h3>
                            <?= \frontend\components\MenuWidget::widget(['tpl' => 'select']) ?>
                            </nav>
                            </div>
                        </div>
                            <!-- зачем? -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Запустить модальное окно
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

            <div class="row">
                    <!--  -->
                <div class="col-md-12">
<?php foreach ($menu as $value) :?>
    <?php if($value['id']!= 0) :?> 
        <div class="row cat-border_prod">
            <a id="<?=trim($value['name'])?>" class="anchor"></a>
        <h1><a><?=trim($value['name'])?></a></h1>
            <?php foreach ($value->product as $prod):?>
                <?php $mainImg = $prod->getImage(); ?>               
                                                <div class="col-md-4">
                                                    <div class="blog-card blog-card-blog">
                                                        <div class="blog-card-image">
                                                            <a href="#"> <?= Html::img($mainImg->getPath(),['alt'=>$prod['img'],'style' => 'width:350px;height: 218px'])?> </a>
                                                            <div class="ripple-cont"></div>
                                                        </div>
                                                        <div class="blog-table">
                                                            <h6 class="blog-category blog-text-success"><i class="fas fa-blog"></i><?=$prod['weight']?>г</h6>
                                                            <h4 class="blog-card-caption">
                                                                <a href="#"><?=mb_strimwidth($prod['name'],0, 16)?></a>
                                                            </h4>
                                                            <p class="blog-card-description"><?=mb_strimwidth($prod['content'],0, 100)?></p>
                                                            <div class="ftr">
                                                                <div class="author">
                                                                    <a> <img src="/public/images/<?=$info->logo?>" alt="..." class="avatar img-raised"> <span><?= $info->name?></span> </a>
                                                                </div>
                                                                <div class="stats"> <a class="add-to-cart" href="<?= Url::to(['cart/add','id'=>$prod['id'] ]) ?>" data-id="<?= $prod['id'] ?>">
                                                                            <i class="fa fa-shopping-cart"> </i><?php echo '&nbsp' ?><?= $prod['price']?> грн</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
        <?php endforeach ;?>
        <div class="clearfix"></div>
    <?php endif ;?>
    </div> 
<?php endforeach ;?>  
                </div> 
            </div>
        </div>
    
</div>