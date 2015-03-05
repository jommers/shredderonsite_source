<?php
/*
Plugin Name: Verify All
Plugin URI: http://www.iamboredsoiblog.eu/2009/11/07/verify-all-for-wordpress/
Description: This plugin will allow you to easily verify your site for Google, Bing and Yahoo!.
Author: Theo van der Sluijs
Version: 1.0
Author URI: http://www.iamboredsoiblog.eu
*/
/*
Copyright (C) 2009 Theo van der Sluijs / Iamboredsoiblog.eu

This software is DonationWare

Donationware is a licensing model that supplies fully operational software to the user and requests a donation be paid to the programmer or a third-party beneficiary (usually a non-profit). The amount of the donation may also be stipulated by the author, or it may be left to the discretion of the user, based on individual perceptions of the software's value.

Since donationware comes fully operational (i.e. not crippleware) and payment is optional, it is technically a type of freeware. However, donationware is also similar to shareware in that a reasonable payment (in this case donation) may be expected, but (unlike shareware) is not required by the license. The donation itself does not "purchase" the software like in shareware or retail models; there is no ownership assigned.

License
Licensee shall not modify, reverse engineer, decompile, copy, duplicate,license or sublicense the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS BE LIABLE FOR ANY CLAIM,
DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

Donate link:https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=9519784
*/

add_action('admin_menu', 'verall_add_pages');

// action function for above hook
function verall_add_pages() {
    add_options_page('Verify All', 'Verify All', 8, 'verifyall', 'verall_options');
}

function verall_options() {
    echo "<div style=\"margin-left:200px; \">";
    echo "<h2>Verify All</h2>";
    echo "Enter the verification keys for Google Webmaster Tools, Bing Webmaster Center and Yahoo! Site Explorer.<br/><br/>";
    echo '<form method="post" action="options.php">';
    wp_nonce_field('update-options');
    echo 'Example: &lt;meta name="verify-v1" content="<b>URPaftUcC5k1lmSXeVBn3JpqyPJIMXDhPomojAIOhWE=</b>" /&gt;<br/><br/>';
    echo 'Google: <input type="text" name="verall_google" value="' . get_option('verall_google') . '" /><br/><br/>';
    echo 'Example: &lt;meta name="msvalidate.01" content="<b>DF7DD54334144E1C9B90CB0630601D14</b>" &gt;<br/><br/>';
    echo 'Bing: <input type="text" name="verall_bing" value="' . get_option('verall_bing') . '" /><br/><br/>';
    echo 'Example: &lt;META name="y_key" content="<b>5ea13d6e265bbf4c</b>" &gt;<br/><br/>';
    echo 'Yahoo!: <input type="text" name="verall_yahoo" value="' . get_option('verall_yahoo') . '" /><br/><br/>';
    echo '<input type="hidden" name="action" value="update" />';
    echo '<input type="hidden" name="page_options" value="verall_google,verall_bing,verall_yahoo" />';
    echo '<p class="submit">
<input type="submit" name="Submit" value="Save Changes" />
</p>';
	echo '<p>You like this tool ? Please consider to donate !</p>';
	echo '<form action="https://www.paypal.com/cgi-bin/webscr" method="post">';
	echo '<input type="hidden" name="cmd" value="_s-xclick">';
	echo '<input type="hidden" name="hosted_button_id" value="9520569">';
	echo '<input type="image" src="https://www.paypal.com/en_US/NL/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">';
	echo '<img alt="" border="0" src="https://www.paypal.com/nl_NL/i/scr/pixel.gif" width="1" height="1">';
	echo '</form>';
	
    echo "</div>";
}

add_action('wp_head', 'verall_add_meta');


function verall_add_meta() {

    echo "<!-- Verify All -->\n";
    echo '<meta name="verify-v1" content="'. get_option('verall_google') . '" />
';
    echo '<meta name="google-site-verification" content="'. get_option('verall_google') . '" />
';
    echo '<meta name="y_key" content="'. get_option('verall_yahoo') . '" />
';
	echo '<meta name="msvalidate.01" content="'. get_option('verall_bing') . '" />
';
    echo "<!-- End Verify All -->\n";
	echo "<!-- Verify All is Brought to you by www.iamboredsoiblog.eu -->\n";

}
?>