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
        <h1 class="text-3xl font-bold mb-6">Terms of Use</h1>
        
        <section class="mb-6">
        <h2 class="text-xl font-semibold mb-2">1. Use at Your Own Risk</h2>
        <p>This service is provided "as is", without warranty of any kind. You are solely responsible for your use of this service. We shall not be liable for any direct, indirect, incidental, or consequential damages resulting from its use.</p>
        </section>

        <section class="mb-6">
        <h2 class="text-xl font-semibold mb-2">2. Indirect Browsing</h2>
        <p>This service allows indirect browsing of external, third-party websites. You connect to our server, which then downloads and forwards the requested resources to you. We do not host or control the content accessed through this service and take no responsibility for it.</p>
        </section>

        <section class="mb-6">
        <h2 class="text-xl font-semibold mb-2">3. Content Modification</h2>
        <p>To ensure functionality, downloaded content may be modified (e.g., URLs rewritten). This process is not guaranteed to be accurate. The version you receive may differ from the original resource.</p>
        </section>

        <section class="mb-6">
        <h2 class="text-xl font-semibold mb-2">4. Anonymity and Privacy</h2>
        <p>Indirect browsing may hide your IP address from target websites, but this is not guaranteed. Some requests may bypass our proxy, compromising your anonymity. Use at your own discretion.</p>
        </section>

        <section class="mb-6">
        <h2 class="text-xl font-semibold mb-2">5. Security Notice</h2>
        <p>Secure content (HTTPS) accessed through this service may be returned to you over an insecure connection. Do not transmit sensitive or confidential information unless your connection to our server is secure.</p>
        </section>

        <section>
        <h2 class="text-xl font-semibold mb-2">6. Prohibited Use</h2>
        <ul class="list-disc pl-5">
            <li>Accessing or distributing illegal content</li>
            <li>Violating copyright or intellectual property laws</li>
            <li>Attempting to hack, overload, or disrupt services</li>
            <li>Any activity that violates applicable laws or regulations</li>
        </ul>
        </section>
    </div>
  OUT;


/*****************************************************************
 * Send content wrapped in our theme
 ******************************************************************/

echo replaceContent($content);
