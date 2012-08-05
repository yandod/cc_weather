<?php

$hookContainer = ClassRegistry::getObject('HookContainer');
$hookContainer->registerElementHook(
	'news',
	'../../Plugin/CcWeather/View/Element/weather',
	true
);

$hookContainer->registerElementHook(
  'my/preferences',
  '../../Plugin/CcWeather/View/Element/weather_preferences',
  false
);

$pluginContainer = ClassRegistry::getObject('PluginContainer');
$pluginContainer->installed('cc_weather','0.2');

