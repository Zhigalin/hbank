		<div id="pages">
			<ul class="pagination">
				<?php if ($pagination['page'] != 1) { ?>
					<li><a href="<?=$pagination['url']?>">&laquo;</a></li>
					<li><a href="<?php if ($pagination['page'] == 2) { ?><?=$pagination['url']?><?php } else { ?><?=$pagination['url_page'].($pagination['page'] - 1)?><?php } ?>">&lt;</a></li>
				<?php } ?>
				<?php for ($i = $pagination['start']; $i <= $pagination['end']; $i++) { ?>
					<?php if ($i == $pagination['page']) { ?>
						<li class="active"><a href="#"><?=$i?> <span class="sr-only">(current)</span></a></li>
					<?php } else { ?>
						<li><a href="<?php if ($i == 1) { ?><?=$pagination['url']?><?php } else { ?><?=$pagination['url_page'].$i?><?php } ?>"><?=$i?></a></li>
					<?php } ?>
				<?php } ?>
				<?php if ($pagination['page'] != $count_pages) { ?>
					<li><a href="<?=$pagination['url_page'].($pagination['page'] + 1)?>">&gt;</a></li>
					<li><a href="<?=$pagination['url_page'].$count_pages?>">&raquo;</a></li>
				<?php } ?>
			</ul>
		</div>