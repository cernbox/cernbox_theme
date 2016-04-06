<table cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
	<td>
		<table cellspacing="0" cellpadding="0" border="0" width="600px">
			<tr>
				<td bgcolor="<?php p($theme->getMailHeaderColor());?>" width="20px">&nbsp;</td>
				<td bgcolor="<?php p($theme->getMailHeaderColor());?>">
					<a href="<?php print_unescaped($_['link'])?>"></a><img src="<?php p(OC_Helper::makeURLAbsolute(image_path('', 'logo-mail.gif'))); ?>" alt="<?php p($theme->getName()); ?>"/></a>
				</td>
			</tr>
			<!-- <tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td width="20px">&nbsp;</td>
				<td style="font-weight:normal; font-style:italic; font-size:0.8em; line-height:1.2em; font-family:verdana,'arial',sans;">
				version française ci-dessous
				</td>
			</tr> -->
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td width="20px">&nbsp;</td>
				<td style="font-weight:normal; font-size:0.8em; line-height:1.2em; font-family:verdana,'arial',sans;">
					<?php 
					$msg = '%s shared the folder &raquo%s&laquo with you.';
					print_unescaped(sprintf($msg, $_['owner_firstname'], $_['filename']));
					?>
				</td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td width="20px">&nbsp;</td>
				<td style="font-weight:normal; font-size:0.8em; line-height:1.2em; font-family:verdana,'arial',sans;">
					<?php 
						$msg = 'Log in as <strong>%s</strong> in <a href="%s" target="_blank" style="color: #58ACFA;">CERNBox</a>, click tab <strong>Shared with you</strong> to view it.';
						print_unescaped(sprintf($msg, $_['target_sharee'], $_['link']));
					?>
				</td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td width="20px">&nbsp;</td>
				<td style="font-weight:normal; font-size:0.8em; line-height:1.2em; font-family:verdana,'arial',sans;">
					If you wish to synchronize the folder to your desktop, consult <a href="https://cern.service-now.com/service-portal/article.do?n=KB0003663" style="color: #58ACFA;" target="_blank">KB0003663</a> to add the path
				</td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td width="20px">&nbsp;</td>
				<td style="font-weight:normal; font-size:0.8em; line-height:1.2em; font-family:verdana,'arial',sans;">
					<?php print_unescaped($_['eospath'])?>
				</td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td width="20px">&nbsp;</td>
				<td style="font-weight:normal; font-size:0.8em; line-height:1.2em; font-family:verdana,'arial',sans;">
					=================================================================
				</td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td width="20px">&nbsp;</td>
				<td style="font-weight:normal; font-size:0.8em; line-height:1.2em; font-family:verdana,'arial',sans;">
					<?php 
						$msg = '%s a partagé le répertoire &raquo%s&laquo avec vous.';
						print_unescaped(sprintf($msg, $_['owner_firstname'], $_['filename']));
					?>
				</td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td width="20px">&nbsp;</td>
				<td style="font-weight:normal; font-size:0.8em; line-height:1.2em; font-family:verdana,'arial',sans;">
					<?php 
						$msg = 'Login comme <strong>%s</strong> dans <a href="%s" target="_blank" style="color: #58ACFA;">CERNBox</a>, sélectionnez l\'onglet <strong>Partagés avec vous</strong> pour le voir.';
						print_unescaped(sprintf($msg, $_['target_sharee'], $_['link']));
					?>
				</td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td width="20px">&nbsp;</td>
				<td style="font-weight:normal; font-size:0.8em; line-height:1.2em; font-family:verdana,'arial',sans;">
					Si vous souhaitez synchroniser le répertoire sur votre bureau, vous pouvez consulter l'article <a href="https://cern.service-now.com/service-portal/article.do?n=KB0003663" target="_blank">KB0003663</a> pour ajouter
				</td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td width="20px">&nbsp;</td>
				<td style="font-weight:normal; font-size:0.8em; line-height:1.2em; font-family:verdana,'arial',sans;">
					<?php print_unescaped($_['eospath'])?>
				</td>
			</tr>
		</table>
	</td>
</tr>
</table>