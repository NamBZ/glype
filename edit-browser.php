<?php

/*******************************************************************
 * Glype is copyright and trademark 2007-2016 UpsideOut, Inc. d/b/a Glype
 * and/or its licensors, successors and assigners. All rights reserved.
 *
 * Use of Glype is subject to the terms of the Software License Agreement.
 * http://www.glype.com/license.php
 *******************************************************************
 * This page allows the user to change settings for their "virtual
 * browser" - includes disabling/enabling referrers, choosing a user
 * agent string
 ******************************************************************/


/*****************************************************************
 * Initialize glype
 ******************************************************************/

require 'includes/init.php';

# Stop caching
sendNoCache();

# Start buffering
ob_start();


/*****************************************************************
 * Create content
 ******************************************************************/

# Return without saving button
$return         = empty($_GET['return']) ? '' : '<input type="button" value="Cancel" onclick="window.location=\'' . remove_html($_GET['return']) . '\'">';
$returnField = empty($_GET['return']) ? '' : '<input type="hidden" value="' . remove_html($_GET['return']) . '" name="return">';
$agent         = empty($_SERVER['HTTP_USER_AGENT']) ? '' : htmlentities($_SERVER['HTTP_USER_AGENT']);

# Quote strings
function escape_single_quotes($value)
{
    return str_replace("'", "\'", $value);
}
function remove_html($x)
{
    $x = preg_replace('#"#', '', $x);
    $x = preg_replace("#'#", '', $x);
    $x = preg_replace('#<#', '', $x);
    $x = preg_replace('#>#', '', $x);
    $x = preg_replace('#\\\\#', '', $x);
    return $x;
}

# Get existing values
$browser          = $_SESSION['custom_browser'];

$currentUA          = escape_single_quotes($browser['user_agent']);
$realReferrer      = $browser['referrer'] == 'real' ? 'true' : 'false';
$customReferrer  = $browser['referrer'] == 'real' ? ''      : escape_single_quotes($browser['referrer']);
?>


<script type="text/javascript">
    // Update custom ua field with value of currently selected preset
    function updateCustomUA(select) {

        // Get value
        var newValue = select.value;

        // Custom field
        var customField = document.getElementById('user-agent');

        // Special cases
        switch (newValue) {
            case 'none':
                newValue = '';
                break;
            case 'custom':
                customField.focus();
                return;
        }

        // Set new value
        customField.value = newValue;
    }

    // Set select box to "custom" field when the custom text field is edited
    function setCustomUA() {
        var setTo = document.getElementById('user-agent').value ? 'custom' : '';
        setSelect(document.getElementById('user-agent-presets'), setTo);
    }

    // Set a select field by value
    function setSelect(select, value) {
        for (var i = 0; i < select.length; ++i) {
            if (select[i].value == value) {
                select.selectedIndex = i;
                return true;
            }
        }
        return false
    }

    // Clear custom-referrer text field if real-referrer is checked
    function clearCustomReferrer(checkbox) {
        if (checkbox.checked) {
            document.getElementById('custom-referrer').value = '';
        }
    }

    // Clear real-referrer checkbox if custom-referrer text field is edited
    function clearRealReferrer() {
        document.getElementById('real-referrer').checked = '';
    }

    // Add domready function to set form to current values
    window.addDomReadyFunc(function() {
        document.getElementById('user-agent').value = '<?= $currentUA; ?>';
        if (setSelect(document.getElementById('user-agent-presets'), '<?= $currentUA; ?>') == false) {
            setCustomUA();
        }
        document.getElementById('real-referrer').checked = <?= $realReferrer; ?>;
        document.getElementById('custom-referrer').value = '<?= $customReferrer; ?>';
    });
</script>

<!-- Edit Browser Section -->
<section class="section" style="padding-top: 50px;">
    <h2 class="section-title">Edit Browser</h2>
    <p class="text-gray-700 mb-4">
        You can adjust the settings for your "virtual browser" below. These options affect the information the proxy sends to the target server.
    </p>

    <form action="includes/process.php?action=edit-browser" method="post" class="space-y-8">

        <!-- User Agent Section -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-lg font-semibold mb-4 flex items-center">
                User Agent
                <a class="ml-2 text-blue-500 cursor-help" onmouseover="tooltip('Your user agent is sent to the server and identifies the software you are using to access the internet.')" onmouseout="exit()">?</a>
            </h2>

            <div class="mb-4">
                <label for="user-agent-presets" class="block font-medium mb-1">Choose from presets:</label><select id="user-agent-presets" class="w-full border border-gray-300 p-2 rounded" onchange="updateCustomUA(this)">
                    <optgroup label="Desktop - Windows">
                        <option value="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36">Windows 10/11 - Chrome (New)</option>
                        <option value="Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:124.0) Gecko/20100101 Firefox/124.0">Windows 10/11 - Firefox (New)</option>
                        <option value="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 Edg/123.0.0.0">Windows 10/11 - Edge (New)</option>
                        <option value="Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36">Windows 7 - Chrome (Cũ hơn)</option>
                    </optgroup>

                    <optgroup label="Desktop - macOS">
                        <option value="Mozilla/5.0 (Macintosh; Intel Mac OS X 14_4_1) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4.1 Safari/605.1.15">macOS (Sonoma/Ventura) - Safari (New)</option>
                        <option value="Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36">macOS Catalina - Chrome (New)</option>
                        <option value="Mozilla/5.0 (Macintosh; Intel Mac OS X 14.4; rv:124.0) Gecko/20100101 Firefox/124.0">macOS (Sonoma/Ventura) - Firefox (New)</option>
                    </optgroup>

                    <optgroup label="Desktop - Linux">
                        <option value="Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36">Linux - Chrome (New)</option>
                        <option value="Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:124.0) Gecko/20100101 Firefox/124.0">Linux (Ubuntu) - Firefox (New)</option>
                    </optgroup>

                    <optgroup label="Mobile - Android Phone">
                        <option value="Mozilla/5.0 (Linux; Android 14; Pixel 7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.6099.119 Mobile Safari/537.36">Android 14 - Chrome (Pixel 7)</option>
                        <option value="Mozilla/5.0 (Linux; Android 13; SM-S911B) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Mobile Safari/537.36">Android 13 - Chrome (Galaxy S23)</option>
                        <option value="Mozilla/5.0 (Android 10; Mobile; rv:124.0) Gecko/124.0 Firefox/124.0">Android - Firefox (New)</option>
                    </optgroup>

                    <optgroup label="Mobile - iOS Phone">
                        <option value="Mozilla/5.0 (iPhone; CPU iPhone OS 17_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4.1 Mobile/15E148 Safari/604.1">iPhone - Safari (New)</option>
                        <option value="Mozilla/5.0 (iPhone; CPU iPhone OS 17_7 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/136.0.7103.56 Mobile/15E148 Safari/604.1">iPhone - Chrome (New)</option>
                    </optgroup>

                    <optgroup label="Tablet">
                        <option value="Mozilla/5.0 (iPad; CPU OS 17_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4.1 Mobile/15E148 Safari/604.1">iPad - Safari (New)</option>
                        <option value="Mozilla/5.0 (Linux; Android 12; Tablet; SM-T733) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36">Android Tablet - Chrome (Galaxy Tab S7 FE)</option>
                    </optgroup>

                    <optgroup label="Bots / Crawlers">
                        <option value="Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)">Googlebot - Desktop</option>
                        <option value="Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/W.X.Y.Z Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)">Googlebot - Smartphone</option>
                        <option value="Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)">Bingbot</option>
                        <option value="DuckDuckBot/1.0; (+http://duckduckgo.com/duckduckbot.html)">DuckDuckBot</option>
                    </optgroup>

                    <optgroup label="Other / Mobile / Legacy">
                        <option value="Mozilla/5.0 (BlackBerry; U; BlackBerry 9850; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.115 Mobile Safari/534.11+">BlackBerry 9850</option>
                        <option value="Opera/9.80 (J2ME/MIDP; Opera Mini/9.80 (S60; SymbOS; Opera Mobi/23.348; U; en) Presto/2.5.25 Version/10.54">Symbian – Opera Mini</option>
                    </optgroup>
                    <option value="<?= $agent; ?>">- Current/Real</option>
                    <option value="">- None</option>
                    <option value="custom">- Custom...</option>
                </select>
            </div>

            <input type="text" id="user-agent" name="user-agent" onchange="setCustomUA();" class="w-full border border-gray-300 p-2 rounded" placeholder="Custom User Agent">

            <p class="text-sm text-gray-500 mt-2">
                <strong>Note:</strong> some websites may adjust content based on your user agent.
            </p>
        </div>

        <!-- Referrer Section -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-lg font-semibold mb-4 flex items-center">
                Referrer
                <a class="ml-2 text-blue-500 cursor-help" onmouseover="tooltip('The URL of the referring page is normally sent to the server. You can override this to a custom value or set to send no referrer for extra privacy.')" onmouseout="exit()">?</a>
            </h2>

            <div class="mb-4 flex items-center">
                <label for="real-referrer" class="w-1/2 font-medium">Send real referrer:</label>
                <input type="checkbox" name="real-referrer" id="real-referrer" onclick="clearCustomReferrer(this)" class="ml-auto">
            </div>

            <div class="mb-4">
                <label for="custom-referrer" class="block font-medium mb-1">Custom referrer:</label>
                <input type="text" name="custom-referrer" id="custom-referrer" onchange="clearRealReferrer()" class="w-full border border-gray-300 p-2 rounded">
            </div>

            <p class="text-sm text-gray-500">
                <strong>Note:</strong> some websites may validate your referrer and deny access if set to an unexpected value
            </p>
        </div>

        <!-- Submit -->
        <div class="text-center">
            <input type="submit" value="Save" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
            <?= $return; ?>
        </div>

        <?= $returnField; ?>

    </form>

</section>
<?php


/*****************************************************************
 * Send content wrapped in our theme
 ******************************************************************/

# Get buffer
$content = ob_get_contents();

# Clear buffer
ob_end_clean();

# Print content wrapped in theme
echo replaceContent($content);
