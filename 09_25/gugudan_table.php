﻿<html>
	
	<body>
		<table border='1' width='600'>
			<tr bgcolor='$cccc' align='center'>
				<td>2단</td>
				<td>3단</td>
				<td>4단</td>
				<td>5단</td>
				<td>6단</td>
				<td>7단</td>
				<td>8단</td>
				<td>9단</td>
				
			</tr>
			<?
				for($b=1; $b<=9; $b++){
					echo "<tr align='center'>";
					for($a=2; $a<10; $a++){
						$c=$a*$b;
						echo"<td>{$a}x{$b}=$c</td>";
					}
				}
			?>
		</table>
	</body>
</html>