<?php foreach ($notifications as $notification): ?>
    <li>
        <a href="#">
            <div>
                <i class="fa fa-comment fa-fw"></i> Application for <?= $notification->businessName ?> has been validated
                <span class="pull-right text-muted small">4 minutes ago</span>
            </div>
        </a>
    </li>
    <li class="divider"></li>
<?php endforeach ?>
<li>
    <a class="text-center" href="#">
        <strong>See All Alerts</strong>
        <i class="fa fa-angle-right"></i>
    </a>
</li>