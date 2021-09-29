<div class="col-12 col-lg-3 border-st">
    <ul class="my-account__menu pp nav nav-pills" id="pills-tab" role="tablist">

        <li class="item" role="presentation">
            <a class="link link-primary <?php if($active == 'index') echo 'active show-text'; ?>"
               href="/settings/index"  aria-controls="pills-home" aria-selected="true">My Profile</a>
        </li>

        <li class="item" role="presentation">
            <a class="link link-primary <?php if($active == 'billing') echo 'active show-text'; ?>" href="/settings/billing"
               aria-controls="pills-profile" aria-selected="false">Billing</a>
        </li>

        <li class="item" role="presentation">
            <a class="link link-primary <?php if($active == 'physical-orders') echo 'active show-text'; ?>"
               href="/settings/physical-orders"
               aria-controls="pills-contact" aria-selected="false">Physical Orders</a>
        </li>

        <li class="item" role="presentation">
            <a class="link link-primary <?php if($active == 'digital-orders') echo 'active show-text'; ?>"
               href="/settings/digital-orders"
               aria-controls="pills-contact" aria-selected="false">Digital Orders</a>
        </li>
    </ul>
</div>