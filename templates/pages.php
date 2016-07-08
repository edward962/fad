<ion-view title="Pages">
    <ion-content overflow-scroll="true" padding="true" scroll="false" class="has-header">

	<?php $pages = process_api_get($base_url,'/pages'); ?>
	<?php if($pages != NULL) { ?>
	<?php foreach( $pages as $page ) : ?>
			
	<div class="list card">

  <a ui-sref="menu.pagesView({id: '<?php echo $page->id; ?>', title: '<?php echo $page->title; ?>', content: '<?php echo $page->content; ?>' })" 
	class="item item-icon-left">
  <?php echo $page->title; ?>
  </a>

	</div>
			
	<?php endforeach; ?>
	<?php  } ?>
			
	<?php if(!$pages) { ?>
  No pages found
	<?php } ?>

    </ion-content>
</ion-view>