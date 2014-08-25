<article class="white-background detail-full-item history-item" id="partners">
    <a href="#" class="history-item-toggle"><?php print $title; ?></a>

    <div class="detail-container">
        <!--<h3>Uw logo hier? Contacteer ons via <a href="mailto:middelenwerving@studentkickoff.be">middelenwerving@studentkickoff.be</a>!</h3>-->
        <br />

        <?php if(count(views_get_view_result('partnerslider','praktisch_partners_presenting', $node->nid))) : ?>
        <header>
            <h2 class="no-margin no-padding">Presenting partners</h2>
        </header>
        <?php print views_embed_view('partnerslider','praktisch_partners_presenting', $node->nid); ?>

        <header>
            <h2 class="no-margin no-padding">Partners</h2>
        </header>
        <?php endif; ?>

        <?php print views_embed_view('partnerslider','praktisch_partners_normaal', $node->nid); ?>
    </div>
</article>
