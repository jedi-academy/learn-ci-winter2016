<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * views/about.php
 *
 * What's the story?
 *
 */
?>
<div class="container">

    <div class="lead text-info">Council</div>
    <div>The CodeIgniter project has an interim council, to oversee the release of CodeIgniter 3 and
        to steer the framework to the next level.</div>
    <br/>
    {council}
    <div class="row council">
        <img class="pull-left" src="/data/avatars/{avatar}" width="84" height="64"/> <strong>{name}</strong> - {roles}<br/>
        {description}
        {badges}<a href="http://{badge}.com/{handle}"><img src="/assets/icons/{badge}.jpg" /></a>{/badges}
    </div>
    <br/>
    {/council}

</div>

<div class="container">
    <div class="lead text-info">Our Website</div>
    <div>We have had a lot of enthusiasm about our website, both good and bad.</div>
    <div>We are grateful for the design and code contributions from Lonnie Ezell (USA), Michał Śniatała (Poland)
        and Raymond King (USA).</div>
    <div>Thank you, as well, to all of the community members who have made constructive suggestions to improve
    the design and usability of the site!</div>
    <br/>
</div>
