<footer>
	<div class="logo-gallery">
		<a href="https://biodiversity.ku.edu/" target="_blank" title="Visit KU BI website" aria-label="Visit KU BI website">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/KU_BI.png"  alt="KU BI Logo" />
		</a>
	</div>
	<p>
		<?= (empty($DEFAULT_TITLE) ? 'This portal' : $DEFAULT_TITLE) . ' ' . 'is part of the SEINet Portal Network. <a href="https://symbiota.org/seinet/" target="_blank">Learn more here</a>.'; ?>
	</p>
	<p>
		<?= $LANG['F_POWERED_BY'] ?> <a href="https://symbiota.org/" target="_blank">Symbiota</a>.
	</p>
</footer>
