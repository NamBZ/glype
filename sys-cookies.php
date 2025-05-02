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
        <h1 class="text-3xl font-bold mb-6">Cookie Policy</h1>
     
        <section class="mb-6">
        <h2 class="text-xl font-semibold mb-2">1. What Are Cookies?</h2>
        <p>Cookies are small text files placed on your device to help websites remember user preferences and improve functionality.</p>
        </section>

        <section class="mb-6">
        <h2 class="text-xl font-semibold mb-2">2. Types of Cookies We Use</h2>
        <ul class="list-disc pl-5">
            <li><strong>Essential Cookies:</strong> Enable core functionality such as navigation and session management.</li>
            <li><strong>Performance Cookies:</strong> Collect anonymous usage data to improve service.</li>
            <li><strong>Third-Party Cookies:</strong> Websites accessed through our proxy may set their own cookies. These are not under our control.</li>
        </ul>
        </section>

        <section class="mb-6">
        <h2 class="text-xl font-semibold mb-2">3. Managing Cookies</h2>
        <p>You can control or disable cookies via your browser settings. Note that some features may not work properly without them.</p>
        </section>

        <section>
        <h2 class="text-xl font-semibold mb-2">4. External Cookies</h2>
        <p>When you access third-party websites via our service, those websites may set their own cookies. Please review their cookie policies independently.</p>
        </section>
    </div>
  OUT;


/*****************************************************************
 * Send content wrapped in our theme
 ******************************************************************/

echo replaceContent($content);
