<div class="page-header">
   <h1>My Gallery</h1>
</div>
<div class="row">
   <?php 
      $Cnt = 0;
      foreach ($galleries as $gallery): 
   ?>
      <div class="col-md-3 col-xs-6">
         <div class="thumbnail">
            <div class="ih-item square effect6 from_top_and_bottom">
               <a href="#">
                  <div class="img">
                     <?php echo $this->Html->image($gallery->image_name, ["alt" => "GALLERY IMAGE"]); ?>
                  </div>
                  <div class="info">
                     <h3><?= h($gallery->title) ?></h3>
                     <p><?= h($gallery->descr) ?></p>
                  </div>
               </a>
            </div>
         </div>
      </div>
   <?php
      $Cnt = $Cnt + 1;
      
      if($Cnt%4 == 0){
         echo '<div class="clearfix hidden-xs hidden-sm"></div>';
      }elseif($Cnt%2 == 0){
         echo '<div class="clearfix hidden-md hidden-lg"></div>';
      };
      endforeach; 
   ?>
</div>    
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p class="lead text-center"><?= $this->Paginator->counter() ?></p>
</div>
    
