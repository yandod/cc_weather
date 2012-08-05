<?php
$prefecture_id =(int) isset($currentuser['UserPreference']['pref']['prefecture']) ? $currentuser['UserPreference']['pref']['prefecture'] : 27;
?>

<script language="javascript" charset="euc-jp" type="text/javascript" src="http://weather.livedoor.com/plugin/common/forecast/<?php echo $prefecture_id ?>.js"></script>
<div style="text-align: center"><?php echo $this->Html->link(__('change setting'),array('controller' => 'my', 'action' => 'account')); ?></div>