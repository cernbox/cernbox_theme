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
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td width="20px">&nbsp;</td>
				<td style="font-weight:normal; font-style:italic; font-size:0.8em; line-height:1.2em; font-family:verdana,'arial',sans;">
				version francaise dessous
				</td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td width="20px">&nbsp;</td>
				<td style="font-weight:normal; font-size:0.8em; line-height:1.2em; font-family:verdana,'arial',sans;">
					<?php 
					$msg = '%s shared <a href="%s" target="_blank" style="color: #58ACFA;">link</a> to &raquo%s&laquo with you.';
					print_unescaped(sprintf($msg, $_['owner_firstname'], $_['publiclink'], $_['filename']));
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
						$msg = 'The share expires %s';
						print_unescaped(sprintf($msg, $_['expiredate']));
					?>
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
				<td style="font-weight:normal; font-style:italic; font-size:0.8em; line-height:1.2em; font-family:verdana,'arial',sans;">
					<?php 
					$msg = '%s a partage le liens a &raquo%s&laquo avec vous.';
					print_unescaped(sprintf($msg, $_['owner_firstname'], $_['publiclink'], $_['filename']));
					?>
				</td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td width="20px">&nbsp;</td>
				<td style="font-weight:normal; font-style:italic; font-size:0.8em; line-height:1.2em; font-family:verdana,'arial',sans;">
					<?php 
						$msg = 'Le partage termine le %s';
						print_unescaped(sprintf($msg, $_['expiredate']));
					?>
				</td>
			</tr>
		</table>
	</td>
</tr>
</table>
