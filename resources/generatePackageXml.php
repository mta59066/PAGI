<?xml version="1.0" encoding="UTF-8"?>
<package packagerversion="1.9.4" version="2.0" xmlns="http://pear.php.net/dtd/package-2.0" xmlns:tasks="http://pear.php.net/dtd/tasks-1.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://pear.php.net/dtd/tasks-1.0     http://pear.php.net/dtd/tasks-1.0.xsd     http://pear.php.net/dtd/package-2.0     http://pear.php.net/dtd/package-2.0.xsd">
 <name>PAGI</name>
 <channel>pear.marcelog.name</channel>
 <summary>PHP AGI ( Asterisk Gateway Interface ) facade</summary>
 <description>CDR ( Call Detail Record ), Call spool and schedule auto dial, Send and Receive Fax, Channel Variables, and Caller ID management</description>
 <lead>
  <name>Marcelo Gornstein</name>
  <user>marcelog</user>
  <email>marcelog@gmail.com</email>
  <active>yes</active>
 </lead>
 <date><?php echo date('Y-m-d'); ?></date>
 <time><?php echo date('H:m:i'); ?></time>
 <version>
   <release><?php echo $argv[1]; ?></release>
   <api><?php echo $argv[1]; ?></api>
 </version>
 <stability>
  <release>stable</release>
  <api>stable</api>
 </stability>
 <license uri="http://www.apache.org/licenses/">Apache</license>
 <notes>
Supports bean inheritance, via normal OOP and explicit definitions in xml/yaml. Can apply global aspects to parent classes.
 </notes>
 <contents>
  <dir baseinstalldir="/PAGI" name="<?php echo realpath(__DIR__ . '/../src/mg/PAGI'); ?>/">
<?php

function dumpFileInfo($realPath, $pearPath) {
?>
<file baseinstalldir="/PAGI" md5sum="<?php echo md5_file($realPath); ?>" name="<?php echo $pearPath; ?>" role="php" />
<?php
}

function generateFileInfo($realPath, $pearPath) {
    foreach (scandir($realPath) as $entry) {
        if ($entry == '.' || $entry == '..') {
            continue;
        }
        if (empty($pearPath)) {
            $entryPearPath = $entry;
        } else {
            $entryPearPath = "$pearPath/$entry";
        }
        $entryRealPath = realpath("$realPath/$entry");
        if (is_file($entryRealPath)) {
            dumpFileInfo($entryRealPath, $entryPearPath);
        } else {
            generateFileInfo($entryRealPath, $entryPearPath);
        }
    }
}
generateFileInfo(realpath(__DIR__ . '/../src/mg/PAGI'), '');
?>
  </dir>
 </contents>
 <dependencies>
  <required>
   <php>
    <min>5.3.3</min>
   </php>
   <pearinstaller>
    <min>1.4.0</min>
   </pearinstaller>
  </required>
 </dependencies>
 <phprelease />
 <changelog/>
</package>