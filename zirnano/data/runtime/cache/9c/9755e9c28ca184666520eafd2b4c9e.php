<?php
//000000000000
 exit();?>
s:270:"SELECT `b`.*,`a`.* FROM `ey_archives` `a` LEFT JOIN `ey_arctype` `b` ON `b`.`id`=`a`.`typeid` WHERE  (  a.typeid IN (53) AND a.channel IN (3) AND a.arcrank > -1 AND a.status = 1 AND a.is_del = 0 )  AND `a`.`lang` = 'en' ORDER BY a.sort_order asc, a.add_time desc LIMIT 6";