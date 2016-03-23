<?php
$msg = "%s shared the folder %s with you.\n\n\nLog in as %s in %s, click the tab Shared with you to view it.\n\nIf you wish to synchronize the folder to your desktop, consult https://cern.service-now.com/service-portal/article.do?n=KB0003663 to add the path\n\n%s\n\n";
$msgreal = sprintf($msg,$_['owner_firstname'], $_['filename'],$_['target_sharee'],$_['link'], $_['eospath']);
print_unescaped($msgreal);
p($l->t("Cheers!"));
?>