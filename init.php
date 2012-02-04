<?php
$hookContainer = ClassRegistry::getObject('HookContainer');
$hookContainer->registerElementHook(
	'news', // target element name.
	'../../plugins/cc_weather/views/elements/weather', // additional template you want to inject.
	true // it should be true when you want to inject before the target template.
);
$pluginContainer = ClassRegistry::getObject('PluginContainer');
$pluginContainer->installed('cc_weather','0.1');


