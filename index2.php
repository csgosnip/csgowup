<html>
<head>
<link rel="stylesheet" type="text/css" href="stylecsgo2.css" />
<link rel="stylesheet" href="/css/bootstrap.css"/>

<title> Csgosnipe.com </title>

<meta charset="UTF-8"/>
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">

<!-- JQuery -->
<script src="js/query.js" type="text/javascript"></script>

<!-- script -->
<script src="js/testslideauto.js" type="text/javascript"></script>
<script src="js/roue.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>

<title> Csgosnipe.com </title>

<meta charset="UTF-8"/>
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
<script src="js/query.js" type="text/javascript"></script>
<script src="js/testslideauto.js" type="text/javascript"></script

</head>
<header>
	<img src="mainheader.jpg" width="943" height="300" align="center" />
</header>
<body>
	
	
	
 <div ng-class="app"c class="app" ui-view></div>
    <!-- inject:js -->
    <script src="/js/app.js?buster=bvjwqzhcpds3abb99kjeudi3q8zsk9jpgd5mkmkt0oxarsiod3" async ></script>
    <!-- endinject -->
<ul id="sa">
	
	<li><a href="#1">SNIPE ARENA</a></li>
</ul>

<ul id="sb">
	<li><a href="#1">SNIP BET</a></li>
</ul>

<ul id="st">
	<li><a href="#1">SNIP TRADE</a></li>
</ul>

<ul id="history">
	<li><a href="#1">HISTORY</a></li>
</ul>

<div class="rouediv">
	
<div class="row">
			<div class="col-sm-4">
					<canvas id="items-canvas" width="250" height="250"></canvas>								<br>
							<table cellpadding="0" style="position: absolute; text-align: center; vertical-align: middle; width: 250px; height: 250px; top: 0px; font-size: 35px;">
								<tr>
								<td style="padding: 0px;">
								<span id="pot-items"></span>/60
									<br/>
									<p>soufiou</p>
									<br>
									<span id="pot-price"></span>
									<br>
									<span id="time-left"></span>
								</td>
								</tr>
								</table>
							</div>
		<div class="col-sm-7" style="height: 250px; overflow-x: auto; margin-left: 20px;">
				<h3 style="text-align: center; margin: 0px; margin-bottom: 5px;">Players:</h3>
		</div>
	</div>
</div>


<!-- inventory -->

<div class="inventory" ng-class="{'toggled':!$root.inventoryOpened}" id="inventory" data-position="left" data-intro="You can add items to your inventory by clicking the plus sign. You can deposit into jackpots and withdrawal from your inventory with the buttons below." data-step="3">
	<div class="togglerOutsideInventory" ng-click="$root.inventoryOpened = !$root.inventoryOpened">
		<i class="fa fa-arrow-right"></i>
	</div>
	<a ng-click="inventoryAddToggle();" class="add" title="Add Items To Inventory">
		<i class="fa fa-plus"></i>
	</a>
	<h2>My Inventory (<span ng-bind="inventoryLength | number" class="ng-binding">0</span>/<span ng-bind="user.inventoryLimit | number" class="ng-binding">50</span>)</h2>
	<div class="items scrollable-content">
		<!-- ngIf: inventoryLength == 0 --><div class="elseMessage ng-scope" data-position="left" ng-if="inventoryLength == 0"><a ng-click="inventoryAddToggle();">Add items</a> to your inventory.</div><!-- end ngIf: inventoryLength == 0 -->
		<!-- ngRepeat: item in inventoryObject.items | orderBy: 'price': true -->
	</div>
	<div class="controls">
		<span class="total">Total <span ng-bind="inventoryObject.selectedItems.length | number" class="ng-binding">0</span>/<span ng-bind="totalSelected | currency" class="ng-binding">$0.00</span></span>
		<!-- Split button -->
		<div class="btn-group dropup">
		  <button type="button" ng-click="depositIntoJackpot();" ng-disabled="waitingResponse" class="btn btn-default raised"><!-- ngIf: showForDesktop --><paper-ripple fit="" ng-if="showForDesktop" class="ng-scope"></paper-ripple><!-- end ngIf: showForDesktop --><!-- ngIf: !waitingResponse --><span ng-if="!waitingResponse" class="text specialClass ng-scope">Deposit into <span ng-bind="selectedJackpot" class="ng-binding">Small</span></span><!-- end ngIf: !waitingResponse --><!-- ngIf: waitingResponse --></button>
		  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    <span class="caret"></span>
		    <span class="sr-only">Toggle Dropdown</span>
		  </button

	</div>
		
		<button type="button" ng-click="withdrawalFromInventory();" ng-disabled="waitingResponse" class="btn btn-default withdrawal raised">Withdrawal Skins<!-- ngIf: showForDesktop --><paper-ripple fit="" ng-if="showForDesktop" class="ng-scope"></paper-ripple><!-- end ngIf: showForDesktop --></button>
	</div>
</div>

<!-- ROUE--->


<!--ROUEFIN-->

<div id="galerie">
	<div class="slideshow">
	<ul>
		<li><img src="twitch.png" alt="" width="150" height="80" /></li>
		<li><img src="twitch.png" alt="" width="150" height="80" /></li>
		<li><img src="twitch.png" alt="" width="150" height="80" /></li>
		<li><img src="twitch.png" alt="" width="150" height="80" /></li>
	</ul>
</div>
</div>

</body>

<footer>

</footer>

</html>