<div class="row h-card">
    <div class="span8 profile offset2">

        <div class="">
            <div class="namebadge">
                <p>
                    <a href="<?= $vars['user']->getURL() ?>" class="u-url icon-container"><img class="u-photo"
                                                                                               src="<?= $vars['user']->getIcon() ?>"/></a>
                </p>
            </div>
            <div class=" ">
                <div class="">
                    <div class="">
                        <h1 class="p-profile">
                            <a href="<?= $vars['user']->getURL() ?>"
                               class="u-url p-name fn"><?= $vars['user']->getTitle() ?></a>
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="span8">
                        <div class="e-note"><?php
                                $description = $vars['user']->getDescription();
                                if (!empty($description)) {
                                    echo '<div class="highlightedText">' . $this->autop($vars['user']->getDescription()) . '</div>';
                                } else if ($vars['user']->getUUID() == \Idno\Core\site()->session()->currentUserUUID()) {
                                    ?>
                                    <p class="highlightedText">
                                        A profile helps you describe yourself to other people on the site
                                        and on the web. You haven't described yourself yet.
                                        <a href="<?= $vars['user']->getURL() ?>/edit/">Click here to fill in your
                                            profile information.</a>
                                    </p>
                                <?php
                                }
                            ?></div>

                        <?= $this->draw('entity/User/profile/fields') ?>
                        <?php

                            if ($vars['user']->canEdit() && $vars['user']->getUUID() == \Idno\Core\site()->session()->currentUserUUID()) {
                                // If you're wondering, this is wrapped in an h1 tag to keep it aligned with
                                // the user's name over in the next div. TODO: find a better way to do this
                                // that retains visual consistency.
                                ?>
                                <h1><a href="<?= $vars['user']->getEditURL() ?>" class="btn btn-large">Edit</a></h1>
                            <?php

                            }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>