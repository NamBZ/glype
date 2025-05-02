<!-- Proxy Bar -->
<div id="proxyui-bar-container" style="background: #f8f9fa; border-bottom: 1px solid #ddd; padding: 10px 20px; font-family: 'Segoe UI', Tahoma, sans-serif; position: fixed; top: 0; left: 0; width: 100%; z-index: 100000;">

    <!-- Close Button (X) -->
    <div onclick="proxyuiToggleBar();" style="position: absolute; top: 0px; right: 0px; font-size: 15px; color: white; cursor: pointer; background-color: red; width: 18px; height: 18px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s ease;" title="Hide Proxy Bar" onmouseover="this.style.backgroundColor='darkred'" onmouseout="this.style.backgroundColor='red'">
        ✕
    </div>

    <form action="<?= $proxy ?>/includes/process.php?action=update" method="post" target="_top" onsubmit="return updateLocation(this);" class="proxyui-bar-form" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center; gap: 10px; margin: 0;">
        <strong class="proxyui-label" style="font-size: 18px; color: #333;">Free Proxy</strong>
        <input type="text" name="u" value="<?= htmlspecialchars($url) ?>" placeholder="Enter URL..." class="proxyui-input-url" style="flex: 1 1 300px; padding: 8px 10px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px;">
        <input type="submit" value="Go" class="proxyui-button-go" style="padding: 8px 15px; font-weight: bold; background: #333; color: #fff; border: none; border-radius: 4px; cursor: pointer;">
        <a href="<?= $proxy ?>/includes/process.php?action=clear-cookies&return=<?= urlencode($return) ?>" target="_top" class="proxyui-link" style="color: #ce6c1c; font-size: 14px; text-decoration: none;">Clear Cookies</a>
        <a href="<?= $proxy ?>/index.php" target="_top" class="proxyui-link" style="color: #ce6c1c; font-size: 14px; text-decoration: none;">Home</a>
        <a href="#" onclick="proxyuiToggleOptions(); return false;" class="proxyui-link-toggle" style="color: #007bff; font-size: 14px; text-decoration: none;">Toggle Options</a>

        <!-- Options row -->
        <div id="proxyui-options" style="display: none; margin-top: 10px; text-align: center;">
            <span class="proxyui-options-wrapper" style="display: inline-flex; flex-wrap: wrap; justify-content: center; gap: 15px;">
                <?php foreach ($toShow as $details): ?>
                    <label class="proxyui-option" style="font-size: 13px; color: #333;">
                        <input type="checkbox" name="<?= htmlspecialchars($details['name']) ?>" id="proxyui-opt-<?= htmlspecialchars($details['name']) ?>" <?= $details['checked'] ?>>
                        <?= htmlspecialchars($details['title']) ?>
                    </label>
                <?php endforeach; ?>
            </span>
        </div>
    </form>

</div>

<!-- Floating Toggle Button -->
<div id="proxyui-bar-toggle" onclick="proxyuiToggleBar();" style="position: fixed; top: 0; left: 50%; transform: translateX(-50%); background: #fff; border: 1px solid #ccc; border-radius: 0 0 5px 5px; padding: 3px 10px; font-size: 12px; color: #333; cursor: pointer; box-shadow: 0 1px 3px rgba(0,0,0,0.1); z-index: 100001; display: none;">
    ☰ Show Proxy Bar
</div>

<script>
    let proxyBarVisible = true;

    function proxyuiToggleOptions() {
        const el = document.getElementById('proxyui-options');
        el.style.display = (el.style.display === 'none') ? 'block' : 'none';
    }

    function proxyuiToggleBar() {
        const bar = document.getElementById('proxyui-bar-container');
        const toggle = document.getElementById('proxyui-bar-toggle');

        if (proxyBarVisible) {
            bar.style.display = 'none';
            toggle.style.display = 'block';
        } else {
            bar.style.display = 'block';
            toggle.style.display = 'none';
        }

        proxyBarVisible = !proxyBarVisible;
    }
</script>

<!--[proxied]-->