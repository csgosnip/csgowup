<html>
<head>
<link rel="stylesheet" type="text/css" href="stylecsgo2.css" />

<title> Csgosnipe.com </title>

<meta charset="UTF-8"/>
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
<script src="js/query.js" type="text/javascript"></script>
<script src="js/testslideauto.js" type="text/javascript"></script>
</head>
<header>
	<img src="mainheader.jpg" width="943" height="300" align="center" />
</header>
<body>
	
	<nav class="navbar navbar-default navbar-fixed-top raised noselect ng-isolate-scope">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/jackpots" class="navbar-brand" ui-sref="app.jackpots">CS:GOBIG</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="static"><a class="ng-binding">Steam Status: Delayed</a></li>
        <li class="static"><a class="ng-binding">442 Online</a></li>
        <!-- <li class="static points"><a href="#">{{user.points | number}} Points</a></li> -->
        <li class="dropdown" uib-dropdown="">
          <a uib-dropdown-toggle="" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false"><!-- ngIf: showForDesktop -->Social <span class="caret"></span></a>
          <ul class="dropdown-menu">
<!--             <li><a href="http://steamcommunity.com/groups/csgobigcom" target="_blank">Steam Group</a></li> -->
            <li><a href="https://www.facebook.com/csgobigcom" target="_blank">Facebook</a></li>
            <li><a href="https://www.reddit.com/r/csgobig/" target="_blank">Reddit</a></li>
            <li><a href="https://twitter.com/csgobig" target="_blank">Twitter</a></li>
<!--             <li><a href="ts3server://nlts.vortexservers.com?port=10098" target="_blank">Teamspeak</a></li> -->
          </ul>
        </li>
        <li uib-dropdown="" class="dropdown notifications">
          <a class="dropdown-toggle" uib-dropdown-toggle="" ng-click="openNotif();" role="button" aria-haspopup="true" aria-expanded="false"><!-- ngIf: showForDesktop --><i class="fa fa-bell"></i></a>
          <!-- ngIf: newCount() != 0 && !open -->
          <ul class="dropdown-menu">
            <!-- ngIf: notificationList.length == 0 --><li ng-if="notificationList.length == 0" class="static ng-scope">
              <a>You don't have any new notifications</a>
            </li><!-- end ngIf: notificationList.length == 0 -->
            <!-- ngIf: notificationList.length != 0 -->
            <div class="scrollable-content">
              <!-- ngRepeat: part in notificationList | orderBy:'timestamp':true -->
            </div>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
	
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

<div ng-class="app" c="" class="app ng-scope" ui-view=""><div class="wrapper ng-scope inventoryOpened" ng-class="{'inventoryOpened':$root.inventoryOpened, 'toggled':$root.sidebarToggled}">
	<div class="home noselect animated fadeOutRightBig" style="z-index: -99999; background: rgba(86, 86, 86, 0.85098);">
    <div class="load-wrapper" style="display: none;">
        <div class="spinner"></div>
</div>
		
</body>

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



<footer>

</footer>

</html>