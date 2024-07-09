AJAX Search
Version: 1.0.0
Author: Vivek saini
License: GPL-2.0-or-later
License URI: https://opensource.org/licenses/GPL-2.0

Description
AJAX Search is a WordPress plugin that enhances the search experience on your site by providing real-time search results as users type. It leverages AJAX to update search results dynamically, offering a faster and more interactive search experience.

Features
Real-time search results using AJAX
Live search results displayed as users type
Integration with your existing WordPress theme
Customizable search settings via the WordPress admin panel
Installation
Upload the ajax-search folder to the /wp-content/plugins/ directory.
Activate the plugin through the 'Plugins' menu in WordPress.
Configure the plugin settings by going to the 'AJAX Search' menu in the WordPress admin panel.
Usage
Adding the Search Form:
Add the search form to your theme by using the following shortcode:

php
Copy code
[ajax_search]
Place this shortcode in any page or post where you want the search form to appear.

Customizing the Search Form:
Use the plugin's settings page to customize the appearance and behavior of the search form.

Styling the Search Form:
Add custom CSS to your theme to style the search form and results to match your site's design.

Settings
Navigate to the 'AJAX Search' menu in the WordPress admin panel to access the plugin settings. Here, you can configure options such as:

Search Results Display: Choose how search results are displayed (e.g., list, grid).
Search Placeholder Text: Customize the placeholder text in the search input field.
Search Results Number: Set the number of results displayed per search query.
Development
To contribute to the development of AJAX Search or to customize the plugin further, follow these steps:

Clone the repository:
bash
Copy code
git clone https://github.com/vivek-msn/ajax-search-plugin
Make your changes and commit them:
bash
Copy code
git add .
git commit -m "Your commit message"
git push origin main
Open a pull request for your changes.
Changelog
1.0.0
Initial release of AJAX Search plugin.
Frequently Asked Questions (FAQ)
Q: How do I customize the appearance of the search form?
A: You can add custom CSS to your theme's stylesheet or use the 'Additional CSS' section in the WordPress Customizer.

Q: Can I use AJAX Search with custom post types?
A: Yes, AJAX Search can be configured to include custom post types in the search results.

Q: How can I report bugs or request features?
A: Please open an issue on the GitHub repository.

Support
For support and troubleshooting, please visit the plugin's support page or open a support ticket on the GitHub repository.

License
This plugin is licensed under the GPL-2.0-or-later license. See the LICENSE file for more details.
