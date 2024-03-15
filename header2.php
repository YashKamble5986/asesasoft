<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  $link = $_SERVER['PHP_SELF'];
  $link_array = explode('/', $link);
  $page = end($link_array);
  // echo $page;
  // Program to display complete URL
  $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']
    === 'on' ? "https" : "http") . "://" .
    $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
  if ($_SERVER['PHP_SELF'] == '/index.php') {
    $url = str_replace("/index.php", "", "$url");
  } else {
    $url = str_replace(".php", "", "$url");
  }

  ?>
  <?php if ($page == '' || $page == 'index.php') { ?>
    <title>Digital Marketing Agency Leading Businesses to Brands – Asesa Soft</title>
    <meta name="description" content="Offering top digital marketing techniques to support startups and establishing brands by building marketing execution strategies that grow businesses.">
    <meta name="keywords" content="Digital Marketing, Digital Marketing Agency, Digital Marketing Services, Digital Marketing Company, Digital Marketing Company in Pune, Digital Marketing Agency in India, Digital Marketing Agency Mumbai, Digital Marketing Solutions, Web Design Company, Web Design Services, Web Design Company in Mumbai, Web Design Company in Pune, Web Development Company, Website Development Company in Pune, Web Development Company in Mumbai">
    <meta property="og:title" content="Digital Marketing Agency Leading Businesses to Brands – Asesa Soft">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://www.asesasoft.com">
    <meta property="og:description" content="Offering top digital marketing techniques to support startups and establishing brands by building marketing execution strategies that grow businesses.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@asesasoft" />
    <meta name="twitter:creator" content="@asesasoft" />
    <meta name="twitter:title" content="Digital Marketing Agency Leading Businesses to Brands – Asesa Soft" />
    <meta name="twitter:description" content="Offering top digital marketing techniques to support startups and establishing brands by building marketing execution strategies that grow businesses." />
    <meta name="twitter:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg" />

  <?php   } elseif ($page == 'about-agency.php') { ?>
    <title>Best Website and eCommerce Development Company – Asesa Soft</title>
    <meta name="description" content="Asesa Soft offers the best website design and development to create a customer-focused, productive, responsive web presence with entire site deployment process.">
    <meta name="keywords" content="Web Development Company in Pune, Website Development Company in Pune, Best Web Development Company, Web Development Company in Mumbai, Best Web Development Company, Web Development Company near me, Best Website Development Company, Web Design Agency, Web Design Company in Mumbai, Web Design Company in Pune, Best Web Design Company">
    <meta property="og:title" content="Best Website and eCommerce Development Company – Asesa Soft">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/about-agency">
    <meta property="og:description" content="Asesa Soft offers the best website design and development to create a customer-focused, productive, responsive web presence with entire site deployment process.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@asesasoft" />
    <meta name="twitter:creator" content="@asesasoft" />
    <meta name="twitter:title" content="Best Website and eCommerce Development Company – Asesa Soft" />
    <meta name="twitter:description" content="Asesa Soft offers the best website design and development to create a customer-focused, productive, responsive web presence with entire site deployment process." />
    <meta name="twitter:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg" />

  <?php    } elseif ($page == 'our-work.php') { ?>
    <title>Experience the best website Development Company.</title>
    <meta name="description" content="At Asesa, our team of design professionals and developers create beautiful, functional, custom websites that help clients grow their business.">
    <meta name="keywords" content="Web Design, Website Designs, Website Development, Ecommerce website development, Ecommerce solutions, Ecommerce development, Ecommerce Development Company, Ecommerce services, Ecommerce development services, Ecommerce website Development Company, Ecommerce services provider, Ecommerce agency, Ecommerce digital marketing">
    <meta property="og:title" content="Experience the best website Development Company. ">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/our-work">
    <meta property="og:description" content="At Asesa, our team of design professionals and developers create beautiful, functional, custom websites that help clients grow their business.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/work/work-left.webp">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@asesasoft" />
    <meta name="twitter:creator" content="@asesasoft" />
    <meta name="twitter:title" content="Experience the best website Development Company" />
    <meta name="twitter:description" content="At Asesa, our team of design professionals and developers create beautiful, functional, custom websites that help clients grow their business." />
    <meta name="twitter:image" content="https://asesasoft.com/images/work/work-left.webp" />

  <?php    } elseif ($page == 'digital-marketing-agency.php') {    ?>
    <title>Digital Marketing Agency that Delivers Results</title>
    <meta name="description" content="As a leading digital marketing agency, we provide comprehensive digital marketing services to help you attract and engage with customers online.">
    <meta name="keywords" content="Digital Marketing Agency, Digital Marketing Services, Digital Marketing Company, Digital Marketing Agency Mumbai, Digital Marketing Company in Pune, Digital Marketing Agency in India, Digital Marketing Agency near Me, Digital Marketing Agency in Pune, Best Digital Marketing Agency in Mumbai, Top Digital Marketing Agency in Mumbai, SEO Company in Mumbai, SEO Company in Pune, SEO Services in Mumbai, Best SEO Company in Mumbai, Best SEO Agency in Mumbai, Social Media Marketing Agency, Social Media Marketing Agency Mumbai, Social Media Marketing Agency Pune, Pay Per Click Advertising in Pune">
    <meta property="og:title" content="Digital Marketing Agency that Delivers Results">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/digital-marketing-agency">
    <meta property="og:description" content="As a leading digital marketing agency, we provide comprehensive digital marketing services to help you attract and engage with customers online.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@asesasoft" />
    <meta name="twitter:creator" content="@asesasoft" />
    <meta name="twitter:title" content="Digital Marketing Agency that Delivers Results" />
    <meta name="twitter:description" content="As a leading digital marketing agency, we provide comprehensive digital marketing services to help you attract and engage with customers online." />
    <meta name="twitter:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg" />

  <?php    } elseif ($page == 'ecommerce-website-development.php') {   ?>
    <title>Ecommerce Website Development and Ecommerce Solutions</title>
    <meta name="description" content="We offer everything you need to build and grow an e-commerce business. We provide a wide range of services for all types of platforms and expertise.">
    <meta name="keywords" content="Ecommerce website development, Ecommerce solutions, Ecommerce development, Ecommerce Development Company, Ecommerce services, Ecommerce development services, Ecommerce website Development Company, Ecommerce website development services, Ecommerce web Development Company, Ecommerce website Development Company in pune, Best ecommerce website Development Company, Custom ecommerce development, Ecommerce website Development Company in Mumbai, Ecommerce website design, Ecommerce website Design Company, Ecommerce website designing services, E commerce services, Building an ecommerce website, Ecommerce services provider">
    <meta property="og:title" content="Ecommerce Website Development and Ecommerce Solutions">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/ecommerce-website-development">
    <meta property="og:description" content="We offer everything you need to build and grow an e-commerce business. We provide a wide range of services for all types of platforms and expertise. ">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@asesasoft" />
    <meta name="twitter:creator" content="@asesasoft" />
    <meta name="twitter:title" content="Ecommerce Website Development and Ecommerce Solutions" />
    <meta name="twitter:description" content="We offer everything you need to build and grow an e-commerce business. We provide a wide range of services for all types of platforms and expertise." />
    <meta name="twitter:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg" />
  <?php    } elseif ($page == 'website-design-and-development-company.php') {  ?>
    <title>Affordable Website Design with a trending approach.</title>
    <meta name="description" content="Asesa Soft is an affordable website development company. We specialize in creating custom website design, web development.">
    <meta name="keywords" content="Web Design Company, Website Design Company, Web design services, Website Design Company in Mumbai, Web design agency, Web Design Company in Mumbai, Web Design Company in Pune, Website Design Company in Pune, Web Development Company, Website Development Company, Web Development Service, Web Development Company in Pune, Website Development Company in Pune, Web Development Company in Mumbai, Website Design and Development Company, Custom Web Development Services">
    <meta property="og:title" content="Affordable Website Design with a trending approach">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/website-design-and-development-company">
    <meta property="og:description" content="Asesa Soft is an affordable website development company. We specialize in creating custom website design, web development.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@asesasoft" />
    <meta name="twitter:creator" content="@asesasoft" />
    <meta name="twitter:title" content="Affordable Website Design with a trending approach" />
    <meta name="twitter:description" content="Asesa Soft is an affordable website development company. We specialize in creating custom website design, web development." />
    <meta name="twitter:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg" />

  <?php   } elseif ($page == 'knowledge-base.php') {    ?>
    <title>Asesa Soft - Knowledge Hub</title>
    <meta name="description" content="Welcome to our knowledge base, where you'll find some of the most important and useful insights from the web and digital world.">
    <meta name="keywords" content="Knowledge Hub, Digital marketing, Website development, web design, Tips, News">

  <?php   } elseif ($page == 'design-work.php') { ?>

    <title>Top Notch Design Services for Marketing Collaterals</title>
    <meta name="description" content="We design marketing collateral that's strategically designed, develops an emotional connection with your customers & reflects the spirit of your company.">
    <meta name="keywords" content="Branding, Marketing Collateral Designs, Social Media & Digital Designs, Print Design, White Paper Design, web design, website design">

    <meta property="og:title" content="Top Notch Design Services for Marketing Collaterals">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/design-work">
    <meta property="og:description" content="We design marketing collateral that's strategically designed, develops an emotional connection with your customers & reflects the spirit of your company.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/work/Furniture-A5-Flyer-design.jpg">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@asesasoft" />
    <meta name="twitter:creator" content="@asesasoft" />
    <meta name="twitter:title" content="Top Notch Design Services for Marketing Collaterals" />
    <meta name="twitter:description" content="We design marketing collateral that's strategically designed, develops an emotional connection with your customers &amp; reflects the spirit of your company." />
    <meta name="twitter:image" content="https://asesasoft.com/images/work/Furniture-A5-Flyer-design.jpg" />

  <?php    } elseif ($page == 'contact-us.php') { ?>

    <title>Digital Marketing Agency at Your Service</title>
    <meta name="description" content="We at Asesa Soft offer Digital Marketing services to entrepreneurs, enterprises, and organizations. Our primary goal is to be a partner to our clients.">
    <meta name="keywords" content="Digital Marketing, Digital Marketing Agency, Digital Marketing Company, Web Design, Website Development, Web Design Company, Ecommerce Website Development Company">

    <meta property="og:title" content="Digital Marketing Agency at Your Service">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/contact-us">
    <meta property="og:description" content="We at Asesa Soft offer Digital Marketing services to entrepreneurs, enterprises, and organizations. Our primary goal is to be a partner to our clients.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@asesasoft" />
    <meta name="twitter:creator" content="@asesasoft" />
    <meta name="twitter:title" content="Digital Marketing Agency at Your Service" />
    <meta name="twitter:description" content="We at Asesa Soft offer Digital Marketing services to entrepreneurs, enterprises, and organizations. Our primary goal is to be a partner to our clients." />
    <meta name="twitter:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg" />

  <?php    } elseif ($page == 'thank-you.php') { ?>
    <title>Thank You - Asesa Soft</title>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-453932929"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'AW-453932929');
    </script>
    <!-- Event snippet for Asesa Soft - Contact conversion page -->
    <script>
      gtag('event', 'conversion', {
        'send_to': 'AW-453932929/AVkZCO-j4akDEIHvudgB'
      });
    </script>

  <?php    } elseif ($page == 'blogs.php') { ?>
    <title>Asesa Soft - Web Development and Digital Marketing Blogs</title>
    <meta name="description" content="Web development, digital marketing, and more - Know what’s happening latest in the digital world.">
    <meta name="keywords" content="Web development, digital marketing, Ecommerce, web design, digital marketing news, custom web design, technology updates, industry news, digital marketing blogs, ecommerce blogs, web design blogs">

    <meta property="og:title" content="Asesa Soft - Web Development and Digital Marketing Blogs">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blogs">
    <meta property="og:description" content="Web development, digital marketing, and more - Know what’s happening latest in the digital world.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/eCommerce-blog.jpg">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@asesasoft" />
    <meta name="twitter:creator" content="@asesasoft" />
    <meta name="twitter:title" content="Asesa Soft - Web Development and Digital Marketing Blogs" />
    <meta name="twitter:description" content="Web development, digital marketing, and more - Know what’s happening latest in the digital world." />
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/eCommerce-blog.jpg" />

  <?php    } elseif ($page == 'growth-of-5G-and-its-impact-on-web-design-and-development.php') { ?>
    <title>The Growth of 5G and Its Impact on Web Design and Development</title>
    <meta name="description" content="Stay up-to-date on the latest technology trends with this in-depth look at the growth of 5G and its impact on web design and development." />
    <meta property="og:title" content="The Growth of 5G and Its Impact on Web Design and Development">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/growth-of-5G-and-its-impact-on-web-design-and-development">
    <meta property="og:description" content="Stay up-to-date on the latest technology trends with this in-depth look at the growth of 5G and its impact on web design and development.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/the-Growth-f-5G-and-Its-Impact-on-Web-Design-and-Development.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="The Growth of 5G and Its Impact on Web Design and Development">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Stay up-to-date on the latest technology trends with this in-depth look at the growth of 5G and its impact on web design and development.">
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/the-Growth-f-5G-and-Its-Impact-on-Web-Design-and-Development.webp">
    <meta name="twitter:image:alt" content="Growth of 5G and Its Impact on Web Design and Development">
    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": {
          "@type": "Organization",
          "name": "Asesa Soft"
        },
        "headline": "The Growth of 5G and Its Impact on Web Design and Development.",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/the-Growth-f-5G-and-Its-Impact-on-Web-Design-and-Development.webp"
        },
        "datePublished": "2023-01-06T18:30:00.000Z",
        "publisher": {
          "@type": "Organization",
          "name": "Asesa Soft",
          "logo": {
            "@type": "ImageObject",
            "url": "https://asesasoft.com/images/Logo.svg"
          },
          "address": "First Floor, Teerth Technospace, Bangalore - Mumbai Highway, Baner, Pune, Maharashtra 411045",
          "location": "India"
        },
        "keywords": "5G, Web Design and Development, 5G networks, Internet of Things, IoT, web applications, Web designers and developers, 5G and the Future of Web Design and Development, virtual and augmented reality, VR and AR, 5G Technology",
        "mainEntityOfPage": "https://asesasoft.com/blog/growth-of-5G-and-its-impact-on-web-design-and-development",
        "description": "Stay up-to-date on the latest technology trends with this in-depth look at the growth of 5G and its impact on web design and development."
      }
    </script>

  <?php    } elseif ($page == 'ecommerce-best-practices-and-tips.php') { ?>
    <title>Ecommerce Best Practices: Designing an Online Store</title>
    <meta name="description" content="Learn the best practices for designing an ecommerce store that engages customers and drives sales. " />
  <?php    } elseif ($page == 'top-10-ways-a-custom-website-will-deliver-roi.php') { ?>
    <title>Top 10 Ways a Custom Website Will Deliver ROI</title>
    <meta name="description" content="Discover the top 10 ways a custom website can deliver a strong return on investment for your business." />
    <meta property="og:title" content="Top 10 Ways a Custom Website Will Deliver ROI">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/top-10-ways-a-custom-website-will-deliver-roi">
    <meta property="og:description" content="Discover the top 10 ways a custom website can deliver a strong return on investment for your business.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/Top-10-Ways-a-Custom-Website-Will-Deliver-ROI.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Top 10 Ways a Custom Website Will Deliver ROI">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Discover the top 10 ways a custom website can deliver a strong return on investment for your business.">
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/Top-10-Ways-a-Custom-Website-Will-Deliver-ROI.jpg">
    <meta name="twitter:image:alt" content="Top 10 Ways a Custom Website Will Deliver ROI">
    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": {
          "@type": "Organization",
          "name": "Asesa Soft"
        },
        "headline": "Top 10 Ways a Custom Website Will Deliver ROI",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/Top-10-Ways-a-Custom-Website-Will-Deliver-ROI.jpg"
        },
        "datePublished": "2023-01-06T18:30:00.000Z",
        "publisher": {
          "@type": "Organization",
          "name": "Asesa Soft",
          "logo": {
            "@type": "ImageObject",
            "url": "https://asesasoft.com/images/Logo.svg"
          },
          "address": "First Floor, Teerth Technospace, Bangalore - Mumbai Highway, Baner, Pune, Maharashtra 411045",
          "location": "India"
        },
        "keywords": "Custom Website, Custom Website Design, ROI, custom features website, custom landing pages",
        "mainEntityOfPage": "https://asesasoft.com/blog/top-10-ways-a-custom-website-will-deliver-roi",
        "description": "Discover the top 10 ways a custom website can deliver a strong return on investment for your business."
      }
    </script>

  <?php    } elseif ($page == '11-difference-between-b2b-and-b2c-ecommerce-websites.php') { ?>
    <title>11 Difference Between B2B and B2C eCommerce Websites [Updated 2023]</title>
    <meta name="description" content="Discover the 11 key differences between B2B and B2C eCommerce websites, updated for 2023. Learn about the unique challenges and opportunities for both types of websites." />

  <?php    } elseif ($page == 'why-startup-needs-business-website-now.php') { ?>
    <title>Why Startups Need a Business Website Now</title>
    <meta name="description" content="Find out why startups need a business website now. Learn about the benefits of having a website for your startup and how it can help you succeed.">
    <meta property="og:title" content="Why Startups Need a Business Website Now">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/why-startup-needs-business-website-now">
    <meta property="og:description" content="Find out why startups need a business website now. Learn about the benefits of having a website for your startup and how it can help you succeed.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/Why-Startups-Need-a-Business-Website-Now.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Why Startups Need a Business Website Now">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Find out why startups need a business website now. Learn about the benefits of having a website for your startup and how it can help you succeed.">
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/Why-Startups-Need-a-Business-Website-Now.jpg">
    <meta name="twitter:image:alt" content="Why Startups Need a Business Website Now">
    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": {
          "@type": "Organization",
          "name": "Asesa Soft"
        },
        "headline": "Why Startups Need a Business Website Now",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/Why-Startups-Need-a-Business-Website-Now.jpg"
        },
        "datePublished": "2023-01-10T18:30:00.000Z",
        "publisher": {
          "@type": "Organization",
          "name": "Asesa Soft",
          "logo": {
            "@type": "ImageObject",
            "url": "https://asesasoft.com/images/Logo.svg"
          },
          "address": "First Floor, Teerth Technospace, Bangalore - Mumbai Highway, Baner, Pune, Maharashtra 411045",
          "location": "India"
        },
        "keywords": "Startups, Business Website, Business, Website design, web development, E-commerce, E-commerce website design, custom website design",
        "mainEntityOfPage": "https://asesasoft.com/blog/why-startup-needs-business-website-now",
        "description": "Find out why startups need a business website now. Learn about the benefits of having a website for your startup and how it can help you succeed."
      }
    </script>
  <?php    } elseif ($page == 'what-makes-a-good-website-design-and-why-it-matters.php') { ?>
    <title>What Makes a Good Website Design and Why it Matters [Updated 2022]</title>
    <meta name="description" content="What makes a good website? So, here’s something that you should consider while designing your website." />
    <meta name="keywords" content="Website Design, web design, principles of Good website design, Factors of Good Website Design, Examples of call to action, website design ideas, website design ideas for beginners, website design process, website design techniques, website design guidelines, web design tips 2022, Website navigation, web designer, graphic content" />
    <meta property="og:title" content="What Makes a Good Website Design and Why it Matters [Updated 2022]">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/what-makes-a-good-website-design-and-why-it-matters">
    <meta property="og:description" content="What makes a good website? So, here’s something that you should consider while designing your website.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/What-makes-a-good-website-thumbnail.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="What Makes a Good Website Design and Why it Matters [Updated 2022]">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="What makes a good website? So, here’s something that you should consider while designing your website.">
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/What-makes-a-good-website-thumbnail.webp">
    <meta name="twitter:image:alt" content="What Makes a Good Website Design">
    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": {
          "@type": "Organization",
          "name": "Asesa Soft"
        },
        "headline": "What Makes a Good Website Design and Why it Matters [Updated 2022]",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/blog/what-makes-a-good-website-design-and-why-it-matters"
        },
        "datePublished": "2022-09-01T18:30:00.000Z",
        "publisher": {
          "@type": "Organization",
          "name": "Asesa Soft",
          "logo": {
            "@type": "ImageObject",
            "url": "https://asesasoft.com/images/Logo.svg"
          },
          "address": "First Floor, Teerth Technospace, Baner, Bangalore Mumbai Highway, Pune 411 045",
          "location": "India"
        },
        "keywords": "Website Design, web design, principles of Good website design, Factors of Good Website Design, Examples of call to action, website design ideas, website design ideas for beginners, website design process, website design techniques, website design guidelines, web design tips 2022, Website navigation, web designer, graphic content",
        "dateModified": "2022-09-01T18:30:00.000Z",
        "mainEntityOfPage": "https://asesasoft.com/blog/what-makes-a-good-website-design-and-why-it-matters",
        "description": "What makes a good website? So, here’s something that you should consider while designing your website."
      }
    </script>

  <?php    } elseif ($page == 'outstanding-ecommerce-website-design-tips.php') { ?>

    <title>Outstanding eCommerce Website Design Tips</title>
    <meta name="description" content="Wondering where to begin? Here are some tips for ecommerce website development to kickstart the process">
    <meta name="keywords" content="Ecommerce Website Development, Ecommerce Website Development Company, Ecommerce Website Development Services, Ecommerce Web Development Company, Ecommerce Development Services, Ecommerce Solutions, Custom Ecommerce Development, Ecommerce Website Design, Building an Ecommerce Website, Ecommerce Development">

    <meta property="og:title" content="Outstanding eCommerce Website Design Tips">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/outstanding-ecommerce-website-design-tips">
    <meta property="og:description" content="Wondering where to begin? Here are some tips for eCommerce website development to kickstart the process">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/eCommerce-blog.jpg">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@asesasoft" />
    <meta name="twitter:creator" content="@asesasoft" />
    <meta name="twitter:title" content="Outstanding eCommerce Website Design Tips" />
    <meta name="twitter:description" content="Wondering where to begin? Here are some tips for ecommerce website development to kickstart the process" />
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/eCommerce-blog.jpg" />

    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": {
          "@type": "Organization",
          "name": "Asesa Soft"
        },
        "headline": "Design an outstanding E-Commerce Website with these ultimate tips",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/eCommerce-blog.jpg"
        },
        "datePublished": "2022-01-31T18:30:00.000Z",
        "publisher": {
          "@type": "Organization",
          "name": "Asesa Soft",
          "logo": {
            "@type": "ImageObject",
            "url": "https://asesasoft.com/images/Logo.svg"
          },
          "address": "201, Second Floor, Vishwa Prestige, Devkar Panand Chowk, Kolhapur.",
          "location": "Pune, Mumbai"
        },
        "keywords": "Ecommerce, ecommerce business, ecommerce websites, Ecommerce Website Development, Ecommerce Website Development Company, Ecommerce Website Development Services, Ecommerce Web Development Company, Ecommerce Development Services, Ecommerce Solutions, Custom Ecommerce Development, Ecommerce Website Design, Building an Ecommerce Website, Ecommerce Development, eCommerce web design, eCommerce web Development Company, eCommerce development agency, eCommerce Solutions, eCommerce solution provider",
        "dateModified": "2022-01-31T18:30:00.000Z",
        "mainEntityOfPage": "https://asesasoft.com/blog/outstanding-ecommerce-website-design-tips",
        "description": "Wondering where to begin? Here are some tips for ecommerce website development to kickstart the process"
      }
    </script>
  <?php    } elseif ($page == '7-hottest-web-development-trends.php') { ?>
    <title>Top 7 Web Development Trends To Watch For In The Future.</title>
    <meta name="description" content="Stay ahead of the curve with the latest web development trends! Our guide covers the top 7 trends to watch out for in the coming years." />
    <meta property="og:title" content="Top 7 Web Development Trends To Watch For In The Future.">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/7-hottest-web-development-trends">
    <meta property="og:description" content="Stay ahead of the curve with the latest web development trends! Our guide covers the top 7 trends to watch out for in the coming years.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/7-Hottest-Web-Development-Trends.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Top 7 Web Development Trends To Watch For In The Future.">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Stay ahead of the curve with the latest web development trends! Our guide covers the top 7 trends to watch out for in the coming years.">
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/7-Hottest-Web-Development-Trends.jpg">
    <meta name="twitter:image:alt" content="7 Hottest Web Development Trends">

    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": {
          "@type": "Organization",
          "name": "Asesa Soft"
        },
        "headline": "7 Hottest Web Development Trends to Watch Out For In the Coming Years!",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/7-Hottest-Web-Development-Trends.jpg"
        },
        "datePublished": "2022-12-22T18:30:00.000Z",
        "publisher": {
          "@type": "Organization",
          "name": "Asesa Soft",
          "logo": {
            "@type": "ImageObject",
            "url": "https://asesasoft.com/images/Logo.svg"
          },
          "address": "First Floor, Teerth Technospace, Bangalore - Mumbai Highway, Baner, Pune, Maharashtra 411045",
          "location": "India"
        },
        "keywords": "Web Development Trends, 7 Hottest Web Development Trends, trends in web development",
        "mainEntityOfPage": "https://asesasoft.com/blog/7-hottest-web-development-trends",
        "description": "Stay ahead of the curve with the latest web development trends! Our guide covers the top 7 trends to watch out for in the coming years."
      }
    </script>


  <?php    } elseif ($page == 'shopify-web-development-guide.php') { ?>
    <title>The Ultimate Comprehensive Shopify Web Development Guide</title>
    <meta name="description" content="Learn how to create and customize a professional online store using Shopify in our comprehensive web development guide." />
    <meta property="og:title" content="The Ultimate Comprehensive Shopify Web Development Guide">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/shopify-web-development-guide">
    <meta property="og:description" content="Learn how to create and customize a professional online store using Shopify in our comprehensive web development guide.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/Ultimate-Comprehensive-Shopify-Web-Development-Guide.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="The Ultimate Comprehensive Shopify Web Development Guide">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Learn how to create and customize a professional online store using Shopify in our comprehensive web development guide.">
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/Ultimate-Comprehensive-Shopify-Web-Development-Guide.webp">
    <meta name="twitter:image:alt" content="Ultimate Comprehensive Shopify Web Development Guide">

    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": {
          "@type": "Organization",
          "name": "Asesa Soft"
        },
        "headline": "The Ultimate Comprehensive Shopify Web Development Guide",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/Ultimate-Comprehensive-Shopify-Web-Development-Guide.webp"
        },
        "datePublished": "2022-12-22T18:30:00.000Z",
        "publisher": {
          "@type": "Organization",
          "name": "Asesa Soft",
          "logo": {
            "@type": "ImageObject",
            "url": "https://asesasoft.com/images/Logo.svg"
          },
          "address": "First Floor, Teerth Technospace, Bangalore - Mumbai Highway, Baner, Pune, Maharashtra 411045",
          "location": "India"
        },
        "keywords": "Shopify Web Development, Shopify Web Development Guide, Shopify web development company",
        "mainEntityOfPage": "https://asesasoft.com/blog/shopify-web-development-guide",
        "description": "Learn how to create and customize a professional online store using Shopify in our comprehensive web development guide."
      }
    </script>


  <?php    } elseif ($page == '6-genuine-digital-marketing-tips-for-business-growth.php') { ?>
    <title>6 Genuine Digital Marketing Tips for Business Growth [Updated For 2023]</title>
    <meta name="keywords" content="digital marketing, digital marketing tips, search engine optimization, social media marketing, seo, content marketing, email marketing, ppc. digital marketing for business growth, smo" />
    <meta name="description" content="This article discusses some easy-to-implement digital marketing tips that have proven to be effective in terms of ROI and customer reach." />
    <meta property="og:title" content="6 Genuine Digital Marketing Tips for Business Growth [Updated For 2023]">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/6-genuine-digital-marketing-tips-for-business-growth">
    <meta property="og:description" content="This article discusses some easy-to-implement digital marketing tips that have proven to be effective in terms of ROI and customer reach.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/6-genuine-digital-marketing-tips-for-business-growth-updated-for-2023.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="6 Genuine Digital Marketing Tips for Business Growth [Updated For 2023]">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="This article discusses some easy-to-implement digital marketing tips that have proven to be effective in terms of ROI and customer reach.">
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/6-genuine-digital-marketing-tips-for-business-growth-updated-for-2023.webp">
    <meta name="twitter:image:alt" content="digital marketing tips">
    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": {
          "@type": "Organization",
          "name": "Asesa Soft"
        },
        "headline": "6 Genuine Digital Marketing Tips For Business Growth [Updated For 2023]",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/6-genuine-digital-marketing-tips-for-business-growth-updated-for-2023.webp"
        },
        "datePublished": "2022-08-08T18:30:00.000Z",
        "publisher": {
          "@type": "Organization",
          "name": "Asesa Soft",
          "logo": {
            "@type": "ImageObject",
            "url": "https://asesasoft.com/images/Logo.svg"
          },
          "address": "First Floor, Teerth Technospace, Baner, Bangalore Mumbai Highway, Pune 411 045",
          "location": "India"
        },
        "keywords": "digital marketing, digital marketing tips, search engine optimization, social media marketing, seo, content marketing, email marketing, ppc. digital marketing for business growth, smo",
        "dateModified": "2022-08-08T18:30:00.000Z",
        "mainEntityOfPage": "https://asesasoft.com/blog/6-genuine-digital-marketing-tips-for-business-growth",
        "description": "This article discusses some easy-to-implement digital marketing tips that have proven to be effective in terms of ROI and customer reach."
      }
    </script>

  <?php   } elseif ($page == 'what-is-website-design-and-how-is-it-useful-to-your-business.php') { ?>

    <title>What is website design and how is it useful to your business?</title>
    <meta name="description" content="The importance of website design and how it helps in making business profitable.">
    <meta name="keywords" content="Website design, web design, web Design Company, Website Design Company, Web design services, Web design agency, Best web Design Company">

    <meta property="og:title" content="What is website design and how is it useful to your business?">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/what-is-website-design-and-how-is-it-useful-to-your-business">
    <meta property="og:description" content="The importance of website design and how it helps in making business profitable.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/web-design-blog.jpg">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@asesasoft" />
    <meta name="twitter:creator" content="@asesasoft" />
    <meta name="twitter:title" content="What is website design and how is it useful to your business?" />
    <meta name="twitter:description" content="The importance of website design and how it helps in making business profitable." />
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/web-design-blog.jpg" />
    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": {
          "@type": "Organization",
          "name": "Asesa Soft"
        },
        "headline": "What is website design and how is it useful to your business?",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/web-design-blog.jpg"
        },
        "datePublished": "2022-01-31T18:30:00.000Z",
        "publisher": {
          "@type": "Organization",
          "name": "Asesa Soft",
          "logo": {
            "@type": "ImageObject",
            "url": "https://asesasoft.com/images/Logo.svg"
          },
          "address": "First Floor, Teerth Technospace, Bangalore - Mumbai Highway, Baner, Pune, Maharashtra 411045.",
          "location": "India"
        },
        "keywords": "Website design,  creative website design, best website design, web Design Company, Web design agency",
        "dateModified": "2022-11-10T18:30:00.000Z",
        "mainEntityOfPage": "https://asesasoft.com/blog/what-is-website-design-and-how-is-it-useful-to-your-business",
        "description": "The importance of website design and how it helps in making business profitable."
      }
    </script>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "What is a website useful for?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Without having a functional website, a business might not be able to justify its legitimacy. Hence, this becomes essential to formulate a website so that more and more customers can trust you as a brand."
            }
          },
          {
            "@type": "Question",
            "name": "Why is it important to have a good web design?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "A good and catchy website design helps in attracting the eyes of the customers. The appealing designs make them want to buy the products from your website and this way your Average Order Value increases with an increase in your overall revenue."
            }
          },
          {
            "@type": "Question",
            "name": "What are the types of web design?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Liquid Design,\n\nFixed Design,\n\nResponsive Design,\n\nStatic Website,\n\nDynamic Website and more."
            }
          }
        ]
      }
    </script>

  <?php    } elseif ($page == 'how-custom-web-design-benefits-your-business.php') {    ?>

    <title>7 Benefits of custom web design for businesses!</title>
    <meta name="description" content="Read our exclusive blog for the benefits of custom website design and development">
    <meta name="keywords" content="Custom Web Design, website designs, custom website design and development, web design, web Design Company">

    <meta property="og:title" content="7 Benefits of custom web design for businesses!">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/how-custom-web-design-benefits-your-business">
    <meta property="og:description" content="Read our exclusive blog for the benefits of custom website design and development">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/custom-web-design-blog.jpg">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@asesasoft" />
    <meta name="twitter:creator" content="@asesasoft" />
    <meta name="twitter:title" content="7 Benefits of custom web design for businesses!" />
    <meta name="twitter:description" content="Read our exclusive blog for the benefits of custom website design and development" />
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/custom-web-design-blog.jpg" />
    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": {
          "@type": "Organization",
          "name": "Asesa Soft"
        },
        "headline": "7 Benefits of custom web design for businesses!",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/custom-web-design-blog.jpg"
        },
        "datePublished": "2021-12-31T18:30:00.000Z",
        "publisher": {
          "@type": "Organization",
          "name": "Asesa Soft",
          "logo": {
            "@type": "ImageObject",
            "url": "https://asesasoft.com/images/Logo.svg"
          },
          "address": "First Floor, Teerth Technospace, Baner, Bangalore Mumbai Highway, Pune 411 045",
          "location": "Pune, Mumbai"
        },
        "keywords": "Custom Web Design, website designs, custom website design and development, web design, web Design Company, Benefits of Custom Web Design, web Design Agency, custom website, custom website development, custom web development services, web development service",
        "dateModified": "2022-10-10T18:30:00.000Z",
        "mainEntityOfPage": "https://asesasoft.com/blog/how-custom-web-design-benefits-your-business",
        "description": "Read our exclusive blog for the benefits of custom website design and development"
      }
    </script>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "1. Why does your business need a custom website design?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "A custom website is needed so that your website can stand out from your competitors and you can generate exactly what is required. Furthermore, a custom website helps in branding. Customers are usually impressed at first sight by gazing at custom websites. To achieve these goals you must hire the best website design company."
            }
          },
          {
            "@type": "Question",
            "name": "2. How does a good website benefit a business?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "A website is something that benefits your business. It not just helps in the online visibility and discoverability of your business but also enhances brand recognition."
            }
          },
          {
            "@type": "Question",
            "name": "3. Are custom websites better for SEO?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "To be eligible for online success, your website needs to rank higher on SERPs. With custom websites, the latest and the best SEO practices can be incorporated into your business. This will give your website the best chance for success in search rankings."
            }
          },
          {
            "@type": "Question",
            "name": "4. Is it better to create your website or use WordPress?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "A custom website is more SEO friendly than a WordPress website. This is because a custom website can rank higher on SERPs rather than ones that are built with templates. This will ensure greater leads and conversions on the internet. A custom website has much more quirky designs than the website design WordPress."
            }
          }
        ]
      }
    </script>

  <?php    } elseif ($page == 'how-to-create-your-business-as-a-brand-why-branding-is-important.php') { ?>

    <title>How to Create your Business as a 'Brand', Why Branding is Important?</title>
    <meta name="description" content="Learn how can you create brand for your business? In simple steps.">
    <meta name="keywords" content="Business, business branding, Why Branding is Important, Branding, social media marketing, email marketing, Google AdSense, digital branding">

    <meta property="og:title" content="How to Create your Business as a 'Brand', Why Branding is Important?">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/how-to-create-your-business-as-a-brand-why-branding-is-important">
    <meta property="og:description" content="Learn how can you create brand for your business? In simple steps.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/blog-branding.jpg">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@asesasoft" />
    <meta name="twitter:creator" content="@asesasoft" />
    <meta name="twitter:title" content="How to Create your Business as a 'Brand', Why Branding is Important?" />
    <meta name="twitter:description" content="Learn how can you create brand for your business? In simple steps." />
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/blog-branding.jpg" />
    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": {
          "@type": "Organization",
          "name": "Asesa Soft"
        },
        "headline": "How to Create your Business as a 'Brand', Why Branding is Important?",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/blog-branding.jpg"
        },
        "datePublished": "2021-12-31T18:30:00.000Z",
        "publisher": {
          "@type": "Organization",
          "name": "Asesa Soft",
          "logo": {
            "@type": "ImageObject",
            "url": "https://asesasoft.com/images/Logo.svg"
          },
          "address": "201, Second Floor, Vishwa Prestige, Devkar Panand Chowk, Kolhapur.",
          "location": "Pune, Mumbai"
        },
        "keywords": "Business, business branding, Why Branding is Important, Branding, social media marketing, email marketing, Google AdSense, digital branding,",
        "dateModified": "2021-12-31T18:30:00.000Z",
        "mainEntityOfPage": "https://asesasoft.com/blog/how-to-create-your-business-as-a-brand-why-branding-is-important",
        "description": "Learn how can you create brand for your business? In simple steps."
      }
    </script>
  <?php    } elseif ($page == 'why-website-design-and-development-is-one-of-the-most-important-aspects-in-business.php') {    ?>
    <title>Why Website Design & Development is One of the Most Important Aspects in Business</title>
    <meta name="description" content="5 Reasons Why Web Designing & Development Plays Vital In Business Growth" />
    <meta name="keywords" content="Website Design and Development, Small business website development, Customized website development, Creative website design, Website development, Website Development Company, Website development services" />
    <meta property="og:title" content="Why Website Design & Development is One of the Most Important Aspects in Business">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/why-website-design-and-development-is-one-of-the-most-important-aspects-in-business">
    <meta property="og:description" content="5 Reasons Why Web Designing & Development Plays Vital In Business Growth">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/Asesa-blog-image--june-22.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Why Website Design & Development is One of the Most Important Aspects in Business">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="5 Reasons Why Web Designing & Development Plays Vital In Business Growth">
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/Asesa-blog-image--june-22.webp">
    <meta name="twitter:image:alt" content="Importance of website design and  development">
    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": {
          "@type": "Organization",
          "name": "Asesa Soft"
        },
        "headline": "Why Website Design & Development is One of the Most Important Aspects in Business",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/Asesa-blog-image--june-22.webp"
        },
        "datePublished": "2022-06-22T18:30:00.000Z",
        "publisher": {
          "@type": "Organization",
          "name": "Asesa Soft",
          "logo": {
            "@type": "ImageObject",
            "url": "https://asesasoft.com/images/Logo.svg"
          },
          "address": "First Floor, Teerth Technospace, Baner, Bangalore Mumbai Highway, Pune 411 045",
          "location": "India"
        },
        "keywords": "Website Design and Development, Small business website development, Customized website development, Creative website design, Website development, Website Development Company, Website development services",
        "dateModified": "2022-06-23T18:30:00.000Z",
        "mainEntityOfPage": "https://asesasoft.com/blog/why-website-design-and-development-is-one-of-the-most-important-aspects-in-business",
        "description": "5 Reasons Why Web Designing & Development Plays Vital In Business Growth"
      }
    </script>
  <?php    } elseif ($page == '11-simple-steps-to-the-ecommerce-website-development-process.php') { ?>
    <title>11 Quick Tips to start an eCommerce Website</title>
    <meta name="description" content="Step by step guide for Ecommerce Website Development process from scratch to profit.">
    <meta name="keywords" content="Custom website, Web design services, Custom website design, Ecommerce website development, Website development for ecommerce, Build a ecommerce website, Creating a ecommerce website, Shopify website development, Ecommerce Web Design, Ecommerce web development, Shopify development" />
    <meta property="og:title" content="11 Quick Tips to start an eCommerce Website">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/11-simple-steps-to-the-ecommerce-website-development-process">
    <meta property="og:description" content="Step by step guide for Ecommerce Website Development process from scratch to profit.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/11-simple-steps-to-the-ecommerce-website-development-process.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="11 Quick Tips to start an eCommerce Website">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Step by step guide for Ecommerce Website Development process from scratch to profit.">
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/11-simple-steps-to-the-ecommerce-website-development-process.webp">
    <meta name="twitter:image:alt" content="Ecommerce Website Development process ">
    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": {
          "@type": "Organization",
          "name": "Asesa Soft"
        },
        "headline": "11 Simple Steps To The eCommerce Website Development Process",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/11-simple-steps-to-the-ecommerce-website-development-process.webp"
        },
        "datePublished": "2022-08-03T18:30:00.000Z",
        "publisher": {
          "@type": "Organization",
          "name": "Asesa Soft",
          "logo": {
            "@type": "ImageObject",
            "url": "https://asesasoft.com/images/Logo.svg"
          },
          "address": "First Floor, Teerth Technospace, Baner, Bangalore Mumbai Highway, Pune 411 045",
          "location": "India"
        },
        "keywords": "Custom website, Web design services, Custom website design, Ecommerce website development,  Website development for ecommerce, Build a ecommerce website, Creating a ecommerce website,  Shopify website development, Ecommerce Web Design, Ecommerce web development, Shopify development",
        "dateModified": "2022-08-03T18:30:00.000Z",
        "mainEntityOfPage": "https://asesasoft.com/blog/11-simple-steps-to-the-ecommerce-website-development-process",
        "description": "Step by step guide for Ecommerce Website Development process from scratch to profit."
      }
    </script>

  <?php    } elseif ($page == 'project-satvyk.php') { ?>

    <title>Ecommerce Website Development Work | Satvyk Health Store</title>
    <meta name="description" content="Our ecommerce development team have years of expertise in building eCommerce solutions. Check out Satvyk Health Store website.">
    <meta name="keywords" content="Ecommerce, ecommerce website, ecommerce website development, eCommerce solutions, Siddhagiri Satvyk">

    <meta property="og:title" content="Ecommerce Website Development Work | Satvyk Health Store">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/project-satvyk">
    <meta property="og:description" content="Our ecommerce development team have years of expertise in building eCommerce solutions. Check out Satvyk Health Store website.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/work/satvyk-home.webp">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@asesasoft" />
    <meta name="twitter:creator" content="@asesasoft" />
    <meta name="twitter:title" content="Ecommerce Website Development Work | Satvyk Health Store" />
    <meta name="twitter:description" content="Our ecommerce development team have years of expertise in building eCommerce solutions. Check out Satvyk Health Store website." />
    <meta name="twitter:image" content="https://asesasoft.com/images/work/satvyk-home.webp" />

  <?php    } elseif ($page == 'project-organicgyaan.php') { ?>

    <title>Ecommerce Website Development Work | Organic Gyaan</title>
    <meta name="description" content="Our ecommerce development team have years of expertise in building eCommerce solutions. Check out organic Gyaan online store.">
    <meta name="keywords" content="Ecommerce, ecommerce website design and development, ecommerce website development, eCommerce solutions, organic Gyaan">

    <meta property="og:title" content="Ecommerce Website Development Work | Organic Gyaan">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/project-organicgyaan">
    <meta property="og:description" content="Our ecommerce development team have years of expertise in building eCommerce solutions. Check out organic Gyaan online store.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/work/organicgyaan-2.webp">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@asesasoft" />
    <meta name="twitter:creator" content="@asesasoft" />
    <meta name="twitter:title" content="Ecommerce Website Development Work | Organic Gyaan" />
    <meta name="twitter:description" content="Our ecommerce development team have years of expertise in building eCommerce solutions. Check out organic Gyaan online store." />
    <meta name="twitter:image" content="https://asesasoft.com/images/work/organicgyaan-2.webp" />

  <?php    } elseif ($page == 'project-jajoo-enterprises.php') { ?>
    <title>Website Design and Development Work - Jajoo Enterprises</title>
    <meta name="description" content="Our web development team have years of expertise in website development solutions. Check out the complete portfolio.">
    <meta name="keywords" content="Web development, website development, Website Design and Development, CUSTOM UI/UX, web design">

    <meta property="og:title" content="Website Design and Development Work - Jajoo Enterprises">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/project-jajoo-enterprises">
    <meta property="og:description" content="Our web development team have years of expertise in website development solutions. Check out the complete portfolio.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/work/jajoo-enterprises-home.webp">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@asesasoft" />
    <meta name="twitter:creator" content="@asesasoft" />
    <meta name="twitter:title" content="Website Design and Development Work - Jajoo Enterprises" />
    <meta name="twitter:description" content="Our web development team have years of expertise in website development solutions. Check out the complete portfolio." />
    <meta name="twitter:image" content="https://asesasoft.com/images/work/jajoo-enterprises-home.webp" />

  <?php    } elseif ($page == 'project-mm-advisory.php') { ?>
    <title>Website Design and Development Work - M. M. Advisory</title>
    <meta name="description" content="Our web development team have years of expertise in website development solutions. Check out M. M. Advisory business website.">
    <meta name="keywords" content="Web development, website development, Website design, website redesigning, corporate website, business website">

    <meta property="og:title" content="Website Design and Development Work - M. M. Advisory">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/project-mm-advisory">
    <meta property="og:description" content="Our web development team have years of expertise in website development solutions. Check out M. M. Advisory business website.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/work/mm-advisory-Home.webp">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@asesasoft" />
    <meta name="twitter:creator" content="@asesasoft" />
    <meta name="twitter:title" content="Website Design and Development Work - M. M. Advisory" />
    <meta name="twitter:description" content="Our web development team have years of expertise in website development solutions. Check out M. M. Advisory business website." />
    <meta name="twitter:image" content="https://asesasoft.com/images/work/mm-advisory-Home.webp" />

  <?php    } elseif ($page == 'project-aurisen-studio.php') { ?>

    <title>Website Design and Development Work - Aurisen Studio</title>
    <meta name="description" content="Website design and development solutions for Aurisen Studio. Check out the complete portfolio.">
    <meta name="keywords" content="Custom UI/UX design and development, UI/UX, Website design and development solutions, web design">

    <meta property="og:title" content="Website Design and Development Work - Aurisen Studio">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/project-aurisen-studio">
    <meta property="og:description" content="Website design and development solutions for Aurisen Studio. Check out the complete portfolio.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/work/Aurisen-Studio-Home.webp">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@asesasoft" />
    <meta name="twitter:creator" content="@asesasoft" />
    <meta name="twitter:title" content="Website Design and Development Work - Aurisen Studio" />
    <meta name="twitter:description" content="Website design and development solutions for Aurisen Studio. Check out the complete portfolio." />
    <meta name="twitter:image" content="https://asesasoft.com/images/work/Aurisen-Studio-Home.webp" />

  <?php    } elseif ($page == 'project-the-tuition-arena.php') { ?>

    <title>Web Design and Development Work – The Tuition Arena</title>
    <meta name="description" content="Website design and development solutions for The Tuition Arena. Check out the exclusive work portfolio.">
    <meta name="keywords" content="Web Design and Development, Website design and development solutions, custom website development, custom web development services">

    <meta property="og:title" content="Web Design and Development Work – The Tuition Arena">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/project-the-tuition-arena">
    <meta property="og:description" content="Website design and development solutions for The Tuition Arena. Check out the exclusive work portfolio.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/work/Tuition-Arena-Home.webp">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@asesasoft" />
    <meta name="twitter:creator" content="@asesasoft" />
    <meta name="twitter:title" content="Web Design and Development Work – The Tuition Arena" />
    <meta name="twitter:description" content="Website design and development solutions for The Tuition Arena. Check out the exclusive work portfolio." />
    <meta name="twitter:image" content="https://asesasoft.com/images/work/Tuition-Arena-Home.webp" />

  <?php    } elseif ($page == 'project-adrish.php') { ?>

    <title>Ecommerce Website Development Work | Adrish Zerowaste</title>
    <meta name="description" content="Our ecommerce development team have years of expertise in building eCommerce solutions. Check out the exclusive work portfolio.">
    <meta name="keywords" content="Ecommerce website development, ecommerce solutions, ecommerce development, ecommerce Development Company, ecommerce services, ecommerce development services, ecommerce website Development Company">

    <meta property="og:title" content="Ecommerce Website Development Work | Adrish Zerowaste">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/project-adrish">
    <meta property="og:description" content="Our ecommerce development team have years of expertise in building eCommerce solutions. Check out the exclusive work portfolio.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/work/Adrish-home.webp">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@asesasoft" />
    <meta name="twitter:creator" content="@asesasoft" />
    <meta name="twitter:title" content="Ecommerce Website Development Work | Adrish Zerowaste" />
    <meta name="twitter:description" content="Our ecommerce development team have years of expertise in building eCommerce solutions. Check out the exclusive work portfolio." />
    <meta name="twitter:image" content="https://asesasoft.com/images/work/Adrish-home.webp" />

  <?php    } elseif ($page == 'project-twenticy.php') { ?>
    <title>Design Services Work | Twenty Ci</title>
    <meta name="description" content="We work as vendor for them for all their design related work, especially for the Postcard designs.">
    <meta name="keywords" content="Design Services, Postcard Design, Letter Design, Marketing Collateral Design">

    <meta property="og:title" content="Design Services Work | Twenty Ci">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/project-twenticy">
    <meta property="og:description" content="We work as vendor for them for all their design related work, especially for the Postcard designs. ">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/work/Furniture-A5-Flyer.jpg">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@asesasoft" />
    <meta name="twitter:creator" content="@asesasoft" />
    <meta name="twitter:title" content="Design Services Work | Twenty Ci" />
    <meta name="twitter:description" content="We work as vendor for them for all their design related work, especially for the Postcard designs." />
    <meta name="twitter:image" content="https://asesasoft.com/images/work/Furniture-A5-Flyer.jpg" />

  <?php    } elseif ($page == 'project-transtrade.php') { ?>
    <title>Web Design and Development Work – Transtrade</title>
    <meta name="description" content="Website design and development solutions for Transtrade. Check out the exclusive work portfolio.">
    <meta name="keywords" content="Front - End Development, Web Design and Development, Website design and development solutions, custom website development, custom web development services">

    <meta property="og:title" content="Web Design and Development Work – Transtrade">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/project-transtrade">
    <meta property="og:description" content="Website design and development solutions for Transtrade. Check out the exclusive work portfolio.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/work/Transtrade-Home.webp">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@asesasoft" />
    <meta name="twitter:creator" content="@asesasoft" />
    <meta name="twitter:title" content="Web Design and Development Work – Transtrade" />
    <meta name="twitter:description" content="Website design and development solutions for Transtrade. Check out the exclusive work portfolio." />
    <meta name="twitter:image" content="https://asesasoft.com/images/work/Transtrade-Home.webp" />

  <?php    } elseif ($page == 'project-siddhagiri-naturals.php') { ?>
    <title>Ecommerce Web Design and Development Work | Siddhagiri Naturals</title>
    <meta name="description" content="Our ecommerce web design and development team have years of expertise in building eCommerce solutions. Check out Siddhagiri Naturals online store.">
    <meta name="keywords" content="Ecommerce Development Company, Ecommerce services, Ecommerce development services, Ecommerce website Development Company, Ecommerce website development companies, Ecommerce website development services, Ecommerce web Development Company">

    <meta property="og:title" content="Ecommerce Web Design and Development Work | Siddhagiri Naturals">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/project-siddhagiri-naturals">
    <meta property="og:description" content="Our eCommerce web design and development team have years of expertise in building eCommerce solutions. Check out Siddhagiri Naturals online store.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/work/siddhagiri-home.webp">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@asesasoft" />
    <meta name="twitter:creator" content="@asesasoft" />
    <meta name="twitter:title" content="Ecommerce Web Design and Development Work | Siddhagiri Naturals" />
    <meta name="twitter:description" content="Our ecommerce web design and development team have years of expertise in building eCommerce solutions. Check out Siddhagiri Naturals online store." />
    <meta name="twitter:image" content="https://asesasoft.com/images/work/siddhagiri-home.webp" />

  <?php    } elseif ($page == 'privacy-policy.php') { ?>
    <title>Privacy Policy – Asesa Soft</title>
    <meta name="description" content="This Privacy Policy applies to the Asesasoft.com">
    <meta name="keywords" content="Privacy Policy, website Privacy Policy, web design and Development Company, Asesa Soft">

    <meta property="og:title" content="Privacy Policy – Asesa Soft">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/privacy-policy">
    <meta property="og:description" content="This Privacy Policy applies to the Asesasoft.com">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@asesasoft" />
    <meta name="twitter:creator" content="@asesasoft" />
    <meta name="twitter:title" content="Privacy Policy – Asesa Soft" />
    <meta name="twitter:description" content="This Privacy Policy applies to the Asesasoft.com" />
    <meta name="twitter:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg" />

  <?php    }  ?>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name='theme-color' content='#1E439C' />
  <meta name="author" content="Asesa Soft">
  <meta name="author" content="www.asesasoft.com" />
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <meta name="audience" content="all" />
  <meta name="googlebot" content="all" />
  <meta name="country" content="india" />
  <meta name="geo.placename" content="india" />
  <meta name="geo.region" content="IN-MH" />
  <meta name="og:locale" content="en_IN" />
  <meta name="og:country-code" content="india" />
  <meta name="language" content="english" />
  <meta name="distribution" content="web">
  <link rel="alternate" href="https://asesasoft.com" hreflang="en-in" />
  <meta http-equiv="content-language" content="en-in">
  <meta name="facebook-domain-verification" content="pw6vujmzvekuvvfnxepswskqbe5pex" />
  <meta name="google-site-verification" content="Bw0b5Pa2j3NnvJMgw2ct9-Cptc4-zTnXNQFUrqcnSaE">
  <meta content="https://www.facebook.com/asesasoft" property="og:see_also">
  <meta content="https://www.instagram.com/asesasoft/" property="og:see_also">
  <meta content="https://twitter.com/asesasoft" property="og:see_also">
  <meta content="https://www.linkedin.com/company/asesa-soft" property="og:see_also">
  <link rel="canonical" href="<?php echo $url; ?>" />
  <!--<title>Asesasoft</title>-->
  <link rel='icon' type='image/png' href="../favicon-32x32.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="../images/apple-icon-180x180.png">
  <link rel='stylesheet' href='../css/bootstrap.css' />
  <link rel='stylesheet' href='../css/style.css' />
  <link rel='stylesheet' href='../css/style2023.css' />
  <link rel='stylesheet' href='../css/responsive.css' />
  <link rel='stylesheet' href='../css/owl.carousel.min.css' />
  <link rel="stylesheet" href="../css/Fontawesome/font-awesome.min.css" />
  <!-- Maginfic Popup -->
  <link rel="stylesheet" href="../css/magnific-popup.css" defer />
  <!-- social share -->
  <link rel="stylesheet" href="../css/jssocials.css" />
  <script src='../js/jquery.js'></script>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-74384421-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-74384421-1');
  </script>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-453932929"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-453932929');
  </script>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MXTWFJJ');
  </script>
  <!-- End Google Tag Manager -->
  <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" defer>
  </script>

  <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Organization",
      "name": "Asesa Soft",
      "url": "https://asesasoft.com/",
      "logo": "https://asesasoft.com/images/Logo.svg",
      "image": "https://asesasoft.com/images/Asesa-OG-Tag.jpg",
      "email": "info@asesasoft.com",
      "description": "Asesa Soft is the leading Web Design and Development Company in Pune, India. Offering custom ecommerce website solutions. Responsive & modern Web Designs.",
      "address": "",
      "telephone": "",
      "sameAs": [
        "https://in.pinterest.com/asesasoft/",
        "https://www.linkedin.com/company/asesa-soft",
        "https://twitter.com/asesasoft",
        "https://www.instagram.com/asesasoft/",
        "https://www.facebook.com/asesasoft"
      ]
    }
  </script>

  <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "WebSite",
      "name": "Asesa Soft",
      "url": "https://asesasoft.com/",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "{search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "LocalBusiness",
      "name": "Asesa Soft",
      "address": "First Floor, Teerth Technospace, Bangalore - Mumbai Highway, Baner, Pune, Maharashtra 411045",
      "image": "https://asesasoft.com/images/Asesa-OG-Tag.jpg",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.5",
        "ratingCount": "5",
        "reviewCount": "6"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "16.6882095",
        "longitude": "74.2196555"
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "opens": "10:00",
        "closes": "18:30",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday"
        ]
      },
      "telephone": "99700 99596",
      "priceRange": "₹₹₹₹",
      "url": "https://asesasoft.com/"
    }
  </script>


  <!-- Facebook Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '166620955102412');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" class='d-none' alt='facebook pic' src="https://www.facebook.com/tr?id=166620955102412&ev=PageView&noscript=1" /></noscript>
  <!-- End Facebook Pixel Code -->
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MXTWFJJ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header>
    <nav class="navbar navbar-expand-lg px-0" id='navContainer'>
      <div class="container">
        <a class="navbar-brand p-0 d-flex" href="/"><img src='../images/Logo.svg' alt='Asesasoft' class='img-fluid logo w-140' /></a>
        <button class="navbar-toggler p-0" style='outline: 0;' type="button" aria-expanded="false">
          <span class="navbar-toggler-icon d-flex align-items-center justify-content-end"><img src='../images/menu.svg' class='img-fluid' alt='Menu Icon' /></span>
        </button>
        <div class="collapse navbar-collapse navColNew" id="navbar">
          <ul class="navbar-nav ml-auto d-none d-lg-flex pl-md-5 pl-lg-0">
            <li class="nav-item text-right closeIcon pt-3 desk_hide pb-5">
              <a class="nav-link w-100" style="color: #F5A61C;font-size: 36px;position: absolute;right: 85px;" href="#">&times;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs16" href="#" data-toggle='collapse' data-target='#service'>Services <img src='../images/down-arrow.svg' class='img-fluid pl-2' alt='down-arrow' /></a>
              <div class="collapse dropdown_content dropdown_content_service" id='service'>
                <!-- <div class="row p-md-3 justify-content-between">
                                    <div class="col-md-1 d-none d-lg-block">
                                        <p class='v_text mt-2'>OUR SERVICES</p>
                                    </div>
                                    <div class="col-md-3 border-right d-flex align-items-center flex-column">
                                        <div>
                                            <h4 class='dropdown_heder'>Digital Marketing</h4>
                                            <ul class="nav">
                                                <li class="m-0"><a class="dropdown-item" href="../digital-marketing-agency.php">Search Engine Optimization</a></li>
                                                <li class="m-0"><a class="dropdown-item" href="../digital-marketing-agency.php">Social Media Marketing</a></li>
                                                <li class="m-0"><a class="dropdown-item" href="../digital-marketing-agency.php">PPC & Paid Promotions</a></li>
                                            </ul>
                                            <div class='mt-4'>
                                                <a href="../digital-marketing-agency.php" class='montserrat_bold hover_link' style='font-size: 14px;'>Read More <img src="../images/chevron-right.png" class='pl-2 img-fluid nav_hover_img' alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 border-right d-flex align-items-center flex-column">
                                        <div>
                                            <h4 class='dropdown_heder'>eCommerce Solution</h4>
                                            <ul class="nav d-block">
                                                <li class="m-0"><a class="dropdown-item" href="../ecommerce-website-development.php">eCommerce Consulting</a></li>
                                                <li class="m-0"><a class="dropdown-item" href="../ecommerce-website-development.php">Custom eCommerce</a></li>
                                                <li class="m-0"><a class="dropdown-item" href="../ecommerce-website-development.php">Shopify Development</a></li>
                                            </ul>
                                            <div class='mt-4'>
                                                <a href="../ecommerce-website-development.php" class='montserrat_bold hover_link' style='font-size: 14px;'>Read More <img src="../images/chevron-right.png" class='pl-2 img-fluid nav_hover_img' alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h4 class='dropdown_heder'>Web Design & Development</h4>
                                        <a class="dropdown-item" href="../website-design-and-development-company.php">UI/UX</a>
                                        <a class="dropdown-item" href="../website-design-and-development-company.php">Web Applications</a>
                                        <a class="dropdown-item" href="../website-design-and-development-company.php">Corporate Websites</a>
                                        <div class='mt-4'>
                                            <a href="../website-design-and-development-company.php" class='montserrat_bold hover_link' style='font-size: 14px;'>Read More <img src="../images/chevron-right.png" class='pl-2 img-fluid nav_hover_img' alt=""></a>
                                        </div>
                                    </div>
                                </div> -->
                <div class="serviceDrpDwn">
                  <div class="linkItm">
                    <a href="../ecommerce-website-development.php">
                      eCommerce Solutions
                    </a>
                  </div>
                  <div class="divider"></div>
                  <div class="linkItm">
                    <a href="../website-design-and-development-company.php">
                      Web Design & Development
                    </a>
                  </div>
                  <!-- <div class="divider"></div>
                  <div class="linkItm active">
                    <a href="#">
                      Mobile App Development
                    </a>
                  </div> -->
                  <div class="divider"></div>
                  <div class="linkItm">
                    <a href="../digital-marketing-agency.php">
                      Digital Marketing Services
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link fs16" href="../portfolio.php">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs16" href="../our-work.php">Case Studies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs16" data-target="#about" role="button" data-toggle="collapse" aria-expanded="false">
                About <img src='../images/down-arrow.svg' class='img-fluid pl-2' alt='down-arrow' />
              </a>
              <div class="collapse dropdown_content dropdown_content_about" id='about'>
                <!-- <div class="row p-md-3 justify-content-center">
                                    <div class="col-md-1 tab_mobile_hide pl-0">
                                        <p style='writing-mode: vertical-rl;' class='v_text mt-2'>About Agency</p>
                                    </div>
                                    <div class="col-md-5 border-right d-flex justify-content-center">
                                        <div>
                                            <h4 class='dropdown_heder'>The Agency</h4>
                                            <h6 class="dropdown-item mb-0"><a href="../about-agency.php">About Us</a></h6>
                                            <h6 class="dropdown-item mb-0"><a href="../about-agency.php">Our Values</a></h6>
                                            <h6 class="dropdown-item mb-0"><a href="../about-agency.php">People</a></h6>      
                                            <div class='mt-4'>
                                                <a href="../about-agency.php" class='montserrat_bold hover_link' style='font-size: 14px;'>Read More <img src="../images/chevron-right.png" class='pl-2 img-fluid nav_hover_img' alt=""></a>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="col-md-5 d-flex justify-content-center">
                                        <div>
                                            <h4 class='dropdown_heder'>Resources</h4>
                                            <a class="dropdown-item" style='color: #4976FF;cursor: pointer;' href="../blogs.php">Blogs</a>
                                            <a class="dropdown-item" style='color: #4976FF;cursor: pointer;' href="../knowledge-base.php">Knowledge Hub</a>
                                            <a class="dropdown-item d-none" style='color: #4976FF;cursor: pointer;' href="#">Careers</a>
                                        </div>
                                    </div>
                                </div> -->
                <div class="serviceDrpDwn">
                  <div class="linkItm">
                    <a href="../about-agency.php">
                      About Us
                    </a>
                  </div>
                  <div class="divider"></div>
                  <div class="linkItm">
                    <a href="../blogs.php">
                      Blogs
                    </a>
                  </div>
                  <div class="divider"></div>
                  <div class="linkItm active">
                    <a href="#">
                      Knowledge Hub
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item c_bg">
              <span class='v_line '></span>
              <a class="nav-link fs16 " href="../contact-us.php">Contact</a>
            </li>
          </ul>
          <div class="d-lg-none">
            <div class="nav-item text-right closeIcon pt-3 d-lg-none mb-5">
              <a class="w-100" style="color: #F5A61C;font-size: 36px;position: absolute;right: 20px;top: 0;" href="#">&times;</a>
            </div>
            <ul class="mobileNav nav d-block pl-5 ml-3">
              <li>
                <h5 class="mobileNavHeader pl-3 title_after pos_relative arpArr">Services</h5>
                <div id="mobile_service">
                  <ul style="list-style: none;padding-left: 20px;">
                    <li><a href="../digital-marketing-agency.php" class="nav-link">Digital Marketing</a></li>
                    <li><a href="../ecommerce-website-development.php" class="nav-link">Ecommerce Solution</a></li>
                    <li><a href="../website-design-and-development-company.php" class="nav-link">Web Design & Development</a></li>
                    <!-- <li><a href="#" class="nav-link">Mobile App Development</a></li> -->
                  </ul>
                </div>
              </li>
              <li><a href="../portfolio.php" class="pl-3 mobileNavHeader">Portfolio</a></li>
              <li><a href="../our-work.php" class="pl-3 mobileNavHeader">Case Studies</a></li>
              <li>
                <h5 class="mobileNavHeader pl-3 title_after pos_relative arpArr">About</h5>
                <div id="mobile_service">
                  <ul style="list-style: none;padding-left: 20px;">
                    <li><a href="../about-agency.php" class="nav-link">About Us</a></li>
                    <li><a href="../blogs.php" class="nav-link">Blogs</a></li>
                    <li><a href="../knowledge-base.php" class="nav-link">Knowledge Hub</a></li>
                  </ul>
                </div>
              </li>
<!-- 
              <li>
                <h5 class="mobileNavHeader pl-3"><a class="text-white" href="../about-agency.php">About Agency</a></h5>
              </li> -->
              <!-- <li>
                <h5 class="mobileNavHeader pl-3"><a class="text-white" href="../blogs.php">Blogs</a></h5>
              </li> -->
              <!-- <li>
                <h5 class="mobileNavHeader pl-3"><a class="text-white" href="../knowledge-base.php">Knowledge Hub</a></h5>
              </li> -->
              <li class='d-none'><a href="" class="nav-link">Careers</a></li>
              <li>
                <h6 class="mobileNavHeader"><a href="../contact-us.php" class="pl-3 mobileNavHeader mt-3">Contact</a></h6>
              </li>
            </ul>
          </div>
          <ul class="nav py-4 d-lg-none pl-5 socialMedia w-100" style='margin-left: 34px;'>
            <li><a target="_blank" style="color: #FFFFFF;" href="https://www.facebook.com/asesasoft"><i class="fa fa-facebook"></i></a></li>
            <li><a target="_blank" style="color: #FFFFFF;" href="https://www.instagram.com/asesasoft/"><i class="fa fa-instagram"></i></a></li>
            <li><a target="_blank" style="color: #FFFFFF;" href="https://twitter.com/asesasoft"><i class="fa fa-twitter"></i></a></li>
            <li><a target="_blank" style="color: #FFFFFF;" href="https://www.linkedin.com/company/asesa-soft"><i class="fa fa-linkedin"></i></a></li>
            <li><a target="_blank" style="color: #FFFFFF;" href="https://in.pinterest.com/asesasoft/"><i class="fa fa-pinterest"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <script>
    $(window).scroll(function() {
      if ($(window).width() <= 455) {
        var position = $(document).scrollTop();
        if (position >= 150) {
          $('.logo').css('width', '88px');
        } else {
          $('.logo').css('width', '92');
        }
      }
      if ($(window).width() >= 768) {
        var position = $(document).scrollTop();
        if (position >= 100) {
          $('.logo').css('width', '104px');
        } else {
          $('.logo').css('width', '140px');
        }
      }
    })

    $(window).scroll(function() {
      var position = $(document).scrollTop();
      if (position >= 50) {
        $('.navbar').addClass('after_scroll_navbar');
        $('.v_line').hide();
        $('.c_bg').addClass('scroll_after');
        $('.nav-link').css('font-size', '16px')
      } else {
        $('.navbar').removeClass('after_scroll_navbar');
        $('.v_line').show();
        $('.nav-link').css('font-size', '16px')
      }
    })
    $('.navbar-toggler-icon').click(function() {
      $('#navbar').css('width', '100%');
    })
    $('.closeIcon').click(function() {
      $('#navbar').css('width', '0');
    })
  </script>