<?php
/*
Template Name: SignUp
*/
?>
<?php get_header() ?>
        <div class="content">
<?php the_post() ?>
            <div id="page-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
                <?php
                $contact = get_field('contact');
                $team = get_field('team');
                $team1 = get_field('team-member');
                $team2 = get_field('team-member2');
                $team3 = get_field('team-member3');
                $credits = get_field('credits');
                ?>

                <div class="entry-content">
                  <!-- Begin MailChimp Signup Form -->
                  <div id="mc_embed_signup">
                  <form action="http://bradleyrothenberg.us8.list-manage.com/subscribe/post?u=a2dee844d5f0278bf010e6bd0&amp;id=2e07a9a8cb" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <label for="mce-EMAIL">Sign up for our mailing list</label>
                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder=" " required>
                      <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                      <div style="position: absolute; left: -5000px;"><input type="text" name="b_a2dee844d5f0278bf010e6bd0_2e07a9a8cb" tabindex="-1" value=""></div>
                      <div class="clear"><input type="submit" value="Ok" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                  </form>
                  </div>

                  <!--End mc_embed_signup-->

                </div>
<?php get_footer() ?>
</body>
</html>
