<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vietnam Proxy Fake IP Viet Nam Webproxy - <!--[site_name]--></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="width">
    <meta name="copyright" content="Copyright <?php echo date('Y'); ?> M.VuiZ.Net - All rights Reserved." />
    <meta name="robots" content="index,follow" />
    <meta name="revisit-after" content="1 days" />
    <meta name="description" content="<!--[meta_description]-->">
    <meta name="keywords" content="<!--[meta_keywords]-->">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<!--[site_name]-->" />
    <meta property="og:description" content="<!--[meta_description]-->" />
    <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:site_name" content="Vietnam Proxy Fake IP Viet Nam Webproxy" />
    <meta property="og:image" content="https://cdn.wpbeginner.com/wp-content/uploads/2019/02/wordpresssecurityguide.png" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<!--[site_name]-->">
    <meta name="twitter:description" content="<!--[meta_description]-->">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/themes/modern/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <?= injectionJS(); ?>
</head>

<body>
    <header class="header">
        <div class="container">
            <h1 class="site-title"><a href="/"><!--[site_name]--><span>.</span></a></h1>
        </div>
    </header>

    <section class="hero">
        <div class="container hero-container">
            <h2 class="hero-title">Access websites through Vietnam Proxy</h2>
            <p class="hero-subtitle">Safe, fast, and secure</p>
        </div>
    </section>
    <main class="main-content container">
        <!-- CONTENT START -->

        <!-- URL Form Card -->
        <div class="bg-white shadow-lg rounded-lg p-6 mb-8">
            <form method="post" action="includes/process.php?action=update" class="pb-3">
                <div class="space-y-4">
                    <label for="url" class="block text-gray-700 text-sm font-bold mb-2">Enter URL:</label>
                    <div class="flex">
                        <input type="url" name="u" id="url" placeholder="https://example.com"
                            class="flex-1 px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-r-lg transition duration-300">
                            <i class="fas fa-globe mr-2"></i> Access
                        </button>
                    </div>
                    <div class="flex justify-between items-center text-blue-600 hover:text-blue-800 cursor-pointer mt-3">
                        <div id="optionsToggle">
                            <i class="fas fa-cog mr-2"></i>
                            <span class="text-sm font-medium">Advanced Options</span>
                        </div>
                        <div class="link">
                            <a href="edit-browser.php" title="Edit browser"> <i class="fa-solid fa-earth-asia"></i> Edit Browser</a>
                            <a href="cookies.php" title="Manage Cookies"><i class="fa-solid fa-cookie-bite"></i> Manage Cookies</a>
                        </div>
                    </div>

                    <ul class="grid grid-cols-2 bg-gray-50 p-4 rounded-lg mt-2" id="optionsList" style="display: none;">
                        <?php foreach ($toShow as $option) { ?>
                            <li class="items-center py-2">
                                <input type="checkbox" id="<?= $option['name']; ?>" name="<?= $option['name']; ?>" <?= $option['checked']; ?> value="cookies"
                                    class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                <label for="<?= $option['name']; ?>"
                                    class="ml-2 text-sm text-gray-700 cursor-pointer tooltip"
                                    onmouseover="tooltip('<?= $option['escaped_desc']; ?>')"
                                    onmouseout="exit();"><?= $option['title']; ?></label>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </form>
            <!--[error]-->
        </div>
        <!--[index_above_form]-->

        <!-- IP Info Widget -->
        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg shadow-md p-6 mb-8">
            <h3 class="text-lg font-bold text-gray-800 mb-4">Your IP Information</h3>
            <div class="space-y-2 text-center">
                <style>
                    a#findipinfo {
                        width: auto !important;
                    }
                </style>
                <div id="findipwidget"></div><a id="findipinfo" href="/" target="_blank">
                    <div>Server IP: <b><?php echo gethostbyname($_SERVER['SERVER_NAME']); ?></b><img src="//api.find-ip.net/flags/vn.png" alt="(VN)" /></div>
                </a>
                <div class="findiplink" id="findipurl" style="display:none">Powered by <a href="http://www.find-ip.net/" target="_blank">Find-IP.net</a></div>
                <script defer src="//api.find-ip.net/widget.js?width=auto&region=0&language=0&browser=0&system=0&"></script>
            </div>
        </div>

        <!-- Features Section -->
        <section class="py-8">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Key Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="flex justify-center mb-4">
                        <div class="bg-blue-100 rounded-full w-14 h-14 flex items-center justify-center">
                            <i class="fas fa-shield-alt text-blue-600 text-xl"></i>
                        </div>
                    </div>
                    <h3 class="text-lg text-center font-bold text-gray-800 mb-2">Maximum Security</h3>
                    <p class="text-sm text-center text-gray-600">Encrypts data and protects your identity while browsing.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="flex justify-center mb-4">
                        <div class="bg-blue-100 rounded-full w-14 h-14 flex items-center justify-center">
                            <i class="fas fa-tachometer-alt text-blue-600 text-xl"></i>
                        </div>
                    </div>
                    <h3 class="text-lg text-center font-bold text-gray-800 mb-2">High Speed</h3>
                    <p class="text-sm text-center text-gray-600">Servers located in Vietnam ensure fast and stable access.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="flex justify-center mb-4">
                        <div class="bg-blue-100 rounded-full w-14 h-14 flex items-center justify-center">
                            <i class="fas fa-unlock text-blue-600 text-xl"></i>
                        </div>
                    </div>
                    <h3 class="text-lg text-center font-bold text-gray-800 mb-2">Unlimited Access</h3>
                    <p class="text-sm text-center text-gray-600">Unlock blocked websites and browse freely.</p>
                </div>
            </div>
        </section>

        <!--[index_below_form]-->

        <!-- How It Works Section -->
        <section class="section">
            <h2 class="section-title">How It Works</h2>
            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3 class="step-title">Enter URL</h3>
                        <p class="step-text">Enter the website address you want to access in the search box.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3 class="step-title">Choose Options</h3>
                        <p class="step-text">Customize proxy settings according to your needs.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3 class="step-title">Browse Safely</h3>
                        <p class="step-text">Access websites through our proxy servers securely and privately.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="section">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <div class="faq">
                <div class="faq-item">
                    <div class="faq-question">What is a Proxy?</div>
                    <div class="faq-answer">A proxy is an intermediary server between your device and the internet. When you connect through a proxy, your requests are routed through the proxy server before reaching their destination, helping to hide your real IP address and enhance security.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Why use a Vietnam Proxy?</div>
                    <div class="faq-answer">A Vietnam proxy allows you to browse the internet with a Vietnamese IP address, helping you access services and content restricted to Vietnam, while also improving access speeds to local websites.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Is this service free?</div>
                    <div class="faq-answer">We provide basic proxy services for free with bandwidth limitations. For a better experience without limitations, you can upgrade to our premium plan.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">How do you ensure secure connections?</div>
                    <div class="faq-answer">We use SSL encryption to protect your data during transmission. Additionally, we do not store activity logs or personal information of our users.</div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="section">
            <h2 class="section-title">User Testimonials</h2>
            <div class="testimonial-grid">
                <div class="testimonial">
                    <p class="testimonial-text">This proxy service helps me access blocked websites easily and safely. The speed is excellent!</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar"><i class="fas fa-user"></i></div>
                        <div class="testimonial-info">
                            <div class="testimonial-name">John Smith</div>
                            <div class="testimonial-title">Customer</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <p class="testimonial-text">I use this proxy to access Vietnamese domestic services when I'm overseas. It works very effectively and consistently.</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar"><i class="fas fa-user"></i></div>
                        <div class="testimonial-info">
                            <div class="testimonial-name">Sarah Johnson</div>
                            <div class="testimonial-title">International Student</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <p class="testimonial-text">User-friendly interface and excellent connection speed. I've recommended it to many friends.</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar"><i class="fas fa-user"></i></div>
                        <div class="testimonial-info">
                            <div class="testimonial-name">Michael Brown</div>
                            <div class="testimonial-title">IT Specialist</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            // Toggle advanced options visibility
            document.getElementById("optionsToggle").addEventListener("click", function() {
                const optionsList = document.getElementById("optionsList");
                if (optionsList.style.display === "none") {
                    optionsList.style.display = "grid";
                } else {
                    optionsList.style.display = "none";
                }
            });

            // FAQ accordion functionality
            document.querySelectorAll(".faq-question").forEach((question) => {
                question.addEventListener("click", () => {
                    const answer = question.nextElementSibling;
                    question.classList.toggle("active");
                    answer.classList.toggle("show");
                });
            });
        </script>
        <!-- CONTENT END -->
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer-container">
                <div class="footer-section">
                    <h3>About Us</h3>
                    <p>Providing high-quality proxy services in Vietnam, helping users access the internet safely and privately.</p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Useful Links</h3>
                    <ul class="footer-links">
                        <li><a href="/">Home</a></li>
                        <li><a href="sys-terms.php">Terms of Use</a></li>
                        <li><a href="sys-privacy.php">Privacy Policy</a></li>
                        <li><a href="sys-cookies.php">Cookie Policy</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p><i class="fas fa-envelope"></i> Email: support@vuiz.net</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <!--[site_name]-->. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/themes/modern/script.js"></script>
</body>

</html>