<?php

########################################################################
# Extension Manager/Repository config file for ext "datusers".
#
# Auto generated 03-07-2012 17:00
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
    'title' => 'DAT User Management by SOAP',
    'description' => 'Interface for authenticate, login and administer frontend users by the DAT SOAP server. It is a base for developing fe_user authentication by other SOAP servers.',
    'category' => 'services',
    'shy' => 0,
    'version' => '0.9.9',
    'dependencies' => 'felogin',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => '',
    'module' => '',
    'state' => 'alpha',
    'uploadfolder' => 0,
    'createDirs' => '',
    'modify_tables' => '',
    'clearcacheonload' => 1,
    'lockType' => '',
    'author' => 'Dirk Wildt (Die Netzmacher)',
    'author_email' => 'http://wildt.at.die-netzmacher.de',
    'author_company' => '',
    'CGLcompliance' => '',
    'CGLcompliance_note' => '',
    'constraints' => array(
        'depends' => array(
            'felogin' => '',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
            'devlog' => '',
        ),
    ),
    'suggests' => array(
        '0' => 'devlog',
    ),
    '_md5_values_when_last_written' => 'a:39:{s:9:"ChangeLog";s:4:"51b1";s:21:"ext_conf_template.txt";s:4:"89f8";s:12:"ext_icon.gif";s:4:"d6ff";s:17:"ext_localconf.php";s:4:"e9cb";s:14:"ext_tables.php";s:4:"a920";s:14:"ext_tables.sql";s:4:"9546";s:16:"locallang_db.xml";s:4:"8ae9";s:7:"tca.php";s:4:"8e80";s:14:"doc/manual.pdf";s:4:"6696";s:14:"doc/manual.sxw";s:4:"3658";s:17:"lib/locallang.xml";s:4:"62ac";s:47:"lib/extmanager/class.tx_datusers_extmanager.php";s:4:"b4e0";s:37:"lib/hooks/class.tx_datusers_hooks.php";s:4:"702b";s:37:"lib/icons/die-netzmacher.de_200px.gif";s:4:"48b3";s:29:"pi1/class.tx_datusers_pi1.php";s:4:"9a06";s:37:"pi1/class.tx_datusers_pi1_backend.php";s:4:"4f5e";s:16:"pi1/flexform.xml";s:4:"8b78";s:32:"pi1/flexform_sheet_powermail.xml";s:4:"d67f";s:27:"pi1/flexform_sheet_sDEF.xml";s:4:"4354";s:17:"pi1/locallang.xml";s:4:"c5d7";s:26:"pi1/locallang_flexform.xml";s:4:"1b28";s:64:"res/html/extensions/felogin/formWiAdditionalMarker/template.html";s:4:"7553";s:21:"res/wsdl/datlx23.wsdl";s:4:"76e6";s:27:"res/wsdl/datlx23_0.0.1.wsdl";s:4:"76e6";s:27:"res/wsdl/datlx23_0.0.2.wsdl";s:4:"d44b";s:27:"res/wsdl/datlx23_0.0.3.wsdl";s:4:"2792";s:32:"static/felogin/pi1/constants.txt";s:4:"73ce";s:28:"static/felogin/pi1/setup.txt";s:4:"9415";s:24:"static/pi1/constants.txt";s:4:"422f";s:20:"static/pi1/setup.txt";s:4:"ad4b";s:29:"sv1/class.tx_datusers_sv1.php";s:4:"1563";s:26:"test/PortalCMSService.wsdl";s:4:"76e6";s:32:"test/PortalCMSService_0.0.1.wsdl";s:4:"76e6";s:32:"test/PortalCMSService_0.0.2.wsdl";s:4:"d44b";s:32:"test/PortalCMSService_0.0.3.wsdl";s:4:"2792";s:31:"test/PortalCMSService_gold.wsdl";s:4:"251a";s:40:"test/PortalCMSService_gold8080.wsdl.wsdl";s:4:"d1e7";s:14:"test/index.php";s:4:"97ec";s:13:"test/test.php";s:4:"9f66";}',
);

?>