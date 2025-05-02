<?php

/*******************************************************************
 * Glype is copyright and trademark 2007-2016 UpsideOut, Inc. d/b/a Glype
 * and/or its licensors, successors and assigners. All rights reserved.
 *
 * Use of Glype is subject to the terms of the Software License Agreement.
 * http://www.glype.com/license.php
 *******************************************************************
 *
 * BY USING THIS DISCLAIMER, YOU ACKNOWLEDGE AND AGREE THAT ALL INFORMATION
 * CONTAINED HEREIN DOES NOT CONSTITUTE LEGAL ADVICE OF ANY KIND OR NATURE.
 * PLEASE CONSULT WITH LEGAL COUNSEL BEFORE USING THIS DISCLAIMER.
 *
/*****************************************************************
 * Initialize glype
 ******************************************************************/

require 'includes/init.php';


/*****************************************************************
 * Create content
 ******************************************************************/

$content = <<<OUT
    <div class="max-w-4xl mx-auto px-4 py-10 card">
        <h1 class="text-3xl font-bold mb-6">Privacy Policy</h1>
     
        <section class="mb-6">
        <h2 class="text-xl font-semibold mb-2">1. Data We Collect</h2>
        <p>We may temporarily collect data such as IP addresses, browser information, and access logs for abuse prevention and system diagnostics. We do not intentionally collect personally identifiable information unless you provide it directly.</p>
        </section>

        <section class="mb-6">
        <h2 class="text-xl font-semibold mb-2">2. Use of Data</h2>
        <p>Collected data is used to operate, secure, and improve the service. It may be used to prevent abuse or analyze technical issues.</p>
        </section>

        <section class="mb-6">
        <h2 class="text-xl font-semibold mb-2">3. Third-Party Sites</h2>
        <p>We are not responsible for the content or privacy policies of third-party websites accessed through our proxy. These sites may collect their own data independently of our service.</p>
        </section>

        <section class="mb-6">
        <h2 class="text-xl font-semibold mb-2">4. Anonymity</h2>
        <p>While the proxy may hide your IP address from target sites, full anonymity is not guaranteed. Certain browser requests may bypass the proxy, exposing your identity.</p>
        </section>

        <section>
        <h2 class="text-xl font-semibold mb-2">5. Data Retention</h2>
        <p>We retain minimal logs temporarily for operational purposes. These logs are regularly purged and are not shared with third parties unless legally required.</p>
        </section>
    </div>
  OUT;


/*****************************************************************
 * Send content wrapped in our theme
 ******************************************************************/

echo replaceContent($content);
