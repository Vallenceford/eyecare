<?php /** * @package Dit is een thema */ ?>
<div class="topic" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <h2><?php echo the_title() ?></h2>

    <h3>Topic gestart door <span class="gebruiker">pietkees93</span> | 10-04-2015 | 14:05:10 | report</h3>

    <div class="onderwerp">

        <p>
            <?php echo the_content() ?>
        </p>




        <a class="verder" href="fulltpc.php">Lees verder &raquo;</a>
    </div>

<!--
    <ul class="reacties">

                   <?php wp_list_comments( $args = array('per_page'=> '3', 'style' => 'li'), $comments ); ?>
        <?php comments_template(); ?>

        <li>
            <h3 class="klein">Gebruiker <span class="gebruiker">MLG4Laife</span> | 10-04-2015 | 14:29:10 | report <span class="nummer">#2</span></h3>
            <img class="avatar" src="../webSite/media/img/ava.png">
            <p class="react">Wat lorem42ipsum zegt inderdaad..</p>
        </li>
        <li class="dnkr">
            <h3 class="klein">Gebruiker <span class="gebruiker">Cashmere</span> | 10-04-2015 | 15:30:04 | report <span class="nummer">#3</span></h3><img class="avatar" src="../webSite/media/img/ava.png">
            <p class="react">Dat zijn wel goeie regels, ik ben het er helemaal mee eens.</p>
        </li>
        <li>
            <h3 class="klein">Gebruiker <span class="gebruiker">pietkees93</span> | 10-04-2015 | 15:43:30 | report <span class="nummer">#4</span></h3>
            <img class="avatar" src="../webSite/media/img/ava.png">
            <p class="react">^ Fijn om dat te horen (:</p>
        </li>

        <?php comment_form(); ?>

        <button type="button">Reageren</button>

    </ul>
-->
    
</div>

<!-- #post-## -->