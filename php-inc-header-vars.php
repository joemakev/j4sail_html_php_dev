<?php
$pageFileName = basename($_SERVER['PHP_SELF']);

// //Redirect to HTTPS
// if($_SERVER["HTTPS"] != "on") {
//     header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
//     exit();
// }

//Init vars
$siteName = "j4Sail";
$pageName = "";
$pageTitle = "";
$pageDescription = "";
$pageAuthor = "";
$pageKeywords = "";
$bodyClass = ""; //Auto populated based on page name
$parentMenu = "";

switch($pageFileName) {
    case 'php-index-p.php':
        $pageName .= "Home";
		$parentMenu = "";
		$pageDescription = "j4Sail Multi-Purpose Lightweight HTML5 Template";
        $pageAuthor = "j4Sail Dev";
        $pageKeywords = "Multi-Purpose, Lightweight, Modern, Clean, Responsive, Minimalistic";
    break;

    case 'php-index-2-p.php':
        $pageName .= "Home 2";
		$parentMenu = "Home";
		$pageDescription = "j4Sail Multi-Purpose Lightweight HTML5 Template";
        $pageAuthor = "j4Sail Dev";
        $pageKeywords = "Multi-Purpose, Lightweight, Modern, Clean, Responsive, Minimalistic";
    break;

    case 'php-about-p.php':
        $pageName .= "About Us";
		$parentMenu = "";
		$pageDescription = "j4Sail Multi-Purpose Lightweight HTML5 Template";
        $pageAuthor = "j4Sail Dev";
        $pageKeywords = "Multi-Purpose, Lightweight, Modern, Clean, Responsive, Minimalistic";
    break;

    case 'php-contact-p.php':
        $pageName .= "Contact Us";
		$parentMenu = "";
		$pageDescription = "j4Sail Multi-Purpose Lightweight HTML5 Template";
        $pageAuthor = "j4Sail Dev";
        $pageKeywords = "Multi-Purpose, Lightweight, Modern, Clean, Responsive, Minimalistic";
    break;

    case 'php-inquire-p.php':
        $pageName .= "Inquire Now";
		$parentMenu = "";
		$pageDescription = "j4Sail Multi-Purpose Lightweight HTML5 Template";
        $pageAuthor = "j4Sail Dev";
        $pageKeywords = "Multi-Purpose, Lightweight, Modern, Clean, Responsive, Minimalistic";;
    break;

    case 'php-gallery-p.php':
        $pageName .= "Gallery";
		$parentMenu = "";
		$pageDescription = "j4Sail Multi-Purpose Lightweight HTML5 Template";
        $pageAuthor = "j4Sail Dev";
        $pageKeywords = "Multi-Purpose, Lightweight, Modern, Clean, Responsive, Minimalistic";
    break;

    case 'php-careers-p.php':
        $pageName .= "Careers";
		$parentMenu = "";
		$pageDescription = "j4Sail Multi-Purpose Lightweight HTML5 Template";
        $pageAuthor = "j4Sail Dev";
        $pageKeywords = "Multi-Purpose, Lightweight, Modern, Clean, Responsive, Minimalistic";
    break;

    case 'php-our-team-p.php':
        $pageName .= "Our Team";
		$parentMenu = "";
		$pageDescription = "j4Sail Multi-Purpose Lightweight HTML5 Template";
        $pageAuthor = "j4Sail Dev";
        $pageKeywords = "Multi-Purpose, Lightweight, Modern, Clean, Responsive, Minimalistic";
    break;

    case 'php-faq-p.php':
        $pageName .= "FAQ";
		$parentMenu = "";
		$pageDescription = "j4Sail Multi-Purpose Lightweight HTML5 Template";
        $pageAuthor = "j4Sail Dev";
        $pageKeywords = "Multi-Purpose, Lightweight, Modern, Clean, Responsive, Minimalistic";
    break;

    case 'php-privacy-p.php':
        $pageName .= "Privacy Policy";
		$parentMenu = "";
		$pageDescription = "j4Sail Multi-Purpose Lightweight HTML5 Template";
        $pageAuthor = "j4Sail Dev";
        $pageKeywords = "Multi-Purpose, Lightweight, Modern, Clean, Responsive, Minimalistic";
    break;

    case 'php-404-p.php':
        $pageName .= "Error 404";
		$parentMenu = "";
		$pageDescription = "j4Sail Multi-Purpose Lightweight HTML5 Template";
        $pageAuthor = "j4Sail Dev";
        $pageKeywords = "Multi-Purpose, Lightweight, Modern, Clean, Responsive, Minimalistic";
    break;

    case 'php-search.php':
        $pageName .= "Search";
		$parentMenu = "";
		$pageDescription = "j4Sail Multi-Purpose Lightweight HTML5 Template";
        $pageAuthor = "j4Sail Dev";
        $pageKeywords = "Multi-Purpose, Lightweight, Modern, Clean, Responsive, Minimalistic";
    break;

    case 'php-shop-p.php':
        $pageName .= "Shop";
		$parentMenu = "";
		$pageDescription = "j4Sail Multi-Purpose Lightweight HTML5 Template";
        $pageAuthor = "j4Sail Dev";
        $pageKeywords = "Multi-Purpose, Lightweight, Modern, Clean, Responsive, Minimalistic";
    break;

    case 'php-shop-2-p.php':
        $pageName .= "Shop";
		$parentMenu = "";
		$pageDescription = "j4Sail Multi-Purpose Lightweight HTML5 Template";
        $pageAuthor = "j4Sail Dev";
        $pageKeywords = "Multi-Purpose, Lightweight, Modern, Clean, Responsive, Minimalistic";
    break;

    case 'php-product-detail-p.php':
        $pageName .= "Product Detail";
		$parentMenu = "Shop";
		$pageDescription = "j4Sail Multi-Purpose Lightweight HTML5 Template";
        $pageAuthor = "j4Sail Dev";
        $pageKeywords = "Multi-Purpose, Lightweight, Modern, Clean, Responsive, Minimalistic";
    break;

    case 'php-cart-p.php':
        $pageName .= "Cart";
		$parentMenu = "";
		$pageDescription = "j4Sail Multi-Purpose Lightweight HTML5 Template";
        $pageAuthor = "j4Sail Dev";
        $pageKeywords = "Multi-Purpose, Lightweight, Modern, Clean, Responsive, Minimalistic";
    break;

    case 'php-checkout-p.php':
        $pageName .= "Checkout";
		$parentMenu = "";
		$pageDescription = "j4Sail Multi-Purpose Lightweight HTML5 Template";
        $pageAuthor = "j4Sail Dev";
        $pageKeywords = "Multi-Purpose, Lightweight, Modern, Clean, Responsive, Minimalistic";
    break;

    case 'php-login-p.php':
        $pageName .= "Login";
		$parentMenu = "";
		$pageDescription = "j4Sail Multi-Purpose Lightweight HTML5 Template";
        $pageAuthor = "j4Sail Dev";
        $pageKeywords = "Multi-Purpose, Lightweight, Modern, Clean, Responsive, Minimalistic";
    break;

    case 'php-blog-p.php':
        $pageName .= "Blog";
		$parentMenu = "";
		$pageDescription = "j4Sail Multi-Purpose Lightweight HTML5 Template";
        $pageAuthor = "j4Sail Dev";
        $pageKeywords = "Multi-Purpose, Lightweight, Modern, Clean, Responsive, Minimalistic";
    break;

    case 'php-blog-detail-p.php':
        $pageName .= "Blog Detail";
		$parentMenu = "Blog";
		$pageDescription = "j4Sail Multi-Purpose Lightweight HTML5 Template";
        $pageAuthor = "j4Sail Dev";
        $pageKeywords = "Multi-Purpose, Lightweight, Modern, Clean, Responsive, Minimalistic";
    break;

    case 'php-projects-p.php':
        $pageName .= "Projects";
		$parentMenu = "Projects";
		$pageDescription = "j4Sail Multi-Purpose Lightweight HTML5 Template";
        $pageAuthor = "j4Sail Dev";
        $pageKeywords = "Multi-Purpose, Lightweight, Modern, Clean, Responsive, Minimalistic";
    break;

    case 'php-project-detail-p.php':
        $pageName .= "Project Detail";
		$parentMenu = "";
		$pageDescription = "j4Sail Multi-Purpose Lightweight HTML5 Template";
        $pageAuthor = "j4Sail Dev";
        $pageKeywords = "Multi-Purpose, Lightweight, Modern, Clean, Responsive, Minimalistic";
    break;

    case '__-p.php':
        $pageName .= "__";
		$parentMenu = "";
		$pageDescription = "j4Sail Multi-Purpose Lightweight HTML5 Template";
        $pageAuthor = "j4Sail Dev";
        $pageKeywords = "Multi-Purpose, Lightweight, Modern, Clean, Responsive, Minimalistic";
    break;

    default:
        $pageName .= "Blank Page";
        $parentMenu = "";
        $pageDescription = "";
        $pageAuthor = "j4Sail Dev";
        $pageKeywords = "Starter, Blank, Empty";
    break;

} //end of switch($pageFileName)

$pageTitle = $siteName . ' - ' . $pageName;
$bodyClass = strtolower(str_replace(" ", "_", $pageName));
$parentMenuClass = $parentMenu != "" ? strtolower(str_replace(" ", "_", $parentMenu)) . "_sub" : "";
?>