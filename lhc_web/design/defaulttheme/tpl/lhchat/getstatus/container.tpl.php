this.iframe_html = '<div id="lhc_container">' +
                              '<div id="lhc_header"><span id="lhc_title"><a title="Powered by Live Helper Chat" href="http://livehelperchat.com" target="_blank"><img src="<?php echo erLhcoreClassModelChatConfig::fetch('explicit_http_mode')->current_value?>//<?php echo $_SERVER['HTTP_HOST']?><?php echo erLhcoreClassDesign::design('images/icons/user_green_chat_16x16.png');?>" alt="Live Helper Chat" /></a></span><a href="#" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/getstatus','Close')?>" id="lhc_close"><img src="<?php echo erLhcoreClassModelChatConfig::fetch('explicit_http_mode')->current_value?>//<?php echo $_SERVER['HTTP_HOST']?><?php echo erLhcoreClassDesign::design('images/icons/cancel.png');?>" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/getstatus','Close')?>" alt="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/getstatus','Close')?>" /></a><?php if (erLhcoreClassModelChatConfig::fetch('disable_popup_restore')->current_value == 0) : ?>&nbsp;<a href="#" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/getstatus','Open in a new window')?>" id="lhc_remote_window"><img src="<?php echo erLhcoreClassModelChatConfig::fetch('explicit_http_mode')->current_value?>//<?php echo $_SERVER['HTTP_HOST']?><?php echo erLhcoreClassDesign::design('images/icons/application_double.png');?>" alt="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/getstatus','Open in a new window')?>" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/getstatus','Open in a new window')?>" /></a><?php endif; ?><a href="#" id="lhc_min" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/getstatus','Minimize/Restore')?>"><img src="<?php echo erLhcoreClassModelChatConfig::fetch('explicit_http_mode')->current_value?>//<?php echo $_SERVER['HTTP_HOST']?><?php echo erLhcoreClassDesign::design('images/icons/min.png');?>"></a></div>' +
                              this.iframe_html + '</div>';
raw_css = ".lhc-no-transition{ -webkit-transition: none !important; -moz-transition: none !important;-o-transition: none !important;-ms-transition: none !important;transition: none !important;}\n.lhc-min{height:35px !important}\n#lhc_container * {direction:<?php (erConfigClassLhConfig::getInstance()->getOverrideValue('site', 'dir_language') == 'ltr' || erConfigClassLhConfig::getInstance()->getOverrideValue('site', 'dir_language') == '') ? print 'ltr;text-align:left;' : print 'rtl;text-align:right;'; ?>;font-family:arial;font-size:12px;line-height:100%;box-sizing: content-box;-moz-box-sizing:content-box;padding:0;margin:0;}\n#lhc_container img {border:0;}\n#lhc_title{float:left;}\n#lhc_header{position:relative;z-index:9990;height:15px;overflow:hidden;-webkit-border-<?php echo $currentPosition['chrome_radius']?>-radius: 10px;-moz-border-radius-<?php echo $currentPosition['moz_radius']?>: 10px;border-<?php echo $currentPosition['chrome_radius']?>-radius: 10px;background-color:#FFF;text-align:right;clear:both;border-bottom:1px solid #CCC;padding:5px;}\n#lhc_remote_window,#lhc_min,#lhc_close{padding:2px;float:right;}\n#lhc_close:hover,#lhc_min:hover,#lhc_remote_window:hover{background:#e5e5e5;}\n#lhc_container {background-color:#FFF;height:"+(parseInt(widgetHeight)+26)+"px; -moz-user-select:none; -khtml-user-drag:element;cursor: move;cursor: -moz-grab;cursor: -webkit-grab;overflow: hidden;transition-property: height;transition-duration: 0.4s;-webkit-transition: height 0.4s ease-in-out;transition: height 0.4s;\nz-index:9990;\n position: fixed;<?php echo $currentPosition['position_body']?>;-webkit-box-shadow: <?php echo $currentPosition['shadow']?> rgba(50, 50, 50, 0.17);-moz-box-shadow: <?php echo $currentPosition['shadow']?> rgba(50, 50, 50, 0.17);box-shadow: <?php echo $currentPosition['shadow']?> rgba(50, 50, 50, 0.17);border:1px solid #CCC;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px; }\n#lhc_container iframe{transition-property: height;transition-duration: 0.4s;-webkit-transition: height 0.4s ease-in-out;transition: height 0.4s;}\n#lhc_container iframe.lhc-loading{\nbackground: #FFF url(<?php echo erLhcoreClassModelChatConfig::fetch('explicit_http_mode')->current_value?>//<?php echo $_SERVER['HTTP_HOST']?><?php echo erLhcoreClassDesign::design('images/general/loading.gif');?>) no-repeat center center; }\n";