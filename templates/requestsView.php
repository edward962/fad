<ion-view title="View Request">
    <ion-content overflow-scroll="true" padding="true" scroll="false" class="has-header">

			
	<div class="card">
  <div class="item item-divider">
  </div>
  <div class="item item-text-wrap">
		Start: {{params.start}}</br>
		End: {{params.end}}</br>
		Provider: {{params.provided_to_user_id}}</br>
	  Accepted:  {{params.accepted}}</br>
		Reviewed: {{params.reviewed_by_provider}}</br>

  </div>
  <div class="item item-divider">
		<div class="button-bar">
				<span ng-if="params.accepted === 'yes'">
				<span ng-if="params.paid === 'no'">
				<a  href="<?php echo $functions_url; ?>?action=request_pay&request_id={{params.id}}"
	class="button button-royal">Pay</a>
				</span>
				</span>
  		<a  ui-sref="menu.requestsMessage({id: '{{params.id}}', start: '{{params.start}}', end: '{{params.end}}', created_by_user_id: '{{params.created_by_user_id}}' ,provided_to_user_id: '{{params.provided_to_user_id}}', accepted: '{{params.accepted}}', paid: '{{params.paid}}', price: '{{params.price}}', reviewed_by_client: '{{params.reviewed_by_client}}',reviewed_by_provider: '{{params.reviewed_by_provider}}'})" 
	class="button button-royal">Message</a>
			<span ng-if="params.reviewed_by_client === 'no'">
				<a  ui-sref="menu.requestsReview({id: '{{params.id}}', start: '{{params.start}}', end: '{{params.end}}', created_by_user_id: '{{params.created_by_user_id}}' ,provided_to_user_id: '{{params.provided_to_user_id}}', accepted: '{{params.accepted}}', paid: '{{params.paid}}', price: '{{params.price}}', reviewed_by_client: '{{params.reviewed_by_client}}',reviewed_by_provider: '{{params.reviewed_by_provider}}'})" 
	class="button button-royal">Review</a>
			</span>
		</div>
  </div>
	</div>

      
    </ion-content>
</ion-view>