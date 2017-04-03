<td><% config.title %></td>
<td ng-class="{'state-enabled':config.value, 'state-disabled':!config.value}" class="state-table-cell">
	<span ng-switch="config.type">
		<span ng-switch-when="boolean" ng-click="config.value = !config.value; configController.updateConfig()">
			<i ng-show="(config.value == null)" class="fa fa-spinner fa-pulse"></i>
			<i ng-show="(config.value != null)" class="fa fa-lg fa-toggle-on" ng-class="{'fa-flip-horizontal':!config.value}"></i>
		</span>
		<span ng-switch-when="integer">
			<input type="text" ng-model="config.value" ng-blur="configController.updateConfig()" />
		</span>
		<span ng-switch-when="string">
			<input type="text" ng-model="config.value" ng-blur="configController.updateConfig()" />
		</span>
		<span ng-switch-when="timestamp">
			<xm-date-picker xm-config="config" xm-date="config.value" xm-config-controller="configController"></xm-date-picker>
		</span>
	</span>
</td>
