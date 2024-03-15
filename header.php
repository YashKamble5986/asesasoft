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
    <title>Web Design and Development Company in Pune – Asesa Soft</title>
    <meta name="description" content="Asesa Soft is the leading Web Design and Development Company in Pune, India. Offering custom ecommerce website solutions. Responsive & modern Web Designs.">
    <meta name="keywords" content="web development company in pune, custom website solutions, best web design company in pune, web design company in pune, best web development company in pune">
    <meta property="og:title" content="Web Design and Development Company in Pune – Asesa Soft">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/">
    <meta property="og:description" content="Asesa Soft is the leading Web Design and Development Company in Pune, India. Offering custom ecommerce website solutions. Responsive & modern Web Designs. ">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Web Design and Development Company in Pune – Asesa Soft">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Asesa Soft is the leading Web Design and Development Company in Pune, India. Offering custom ecommerce website solutions. Responsive & modern Web Designs. ">
    <meta name="twitter:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">
    <meta name="twitter:image:alt" content="Asesa Soft - Web Design and Development Company">

  <?php   } elseif ($page == 'about-agency.php') { ?>
    <title>Leading Web Design Company in Pune, India | Asesa Soft</title>
    <meta name="description" content="Asesa Soft is a website design, website development, eCommerce marketplace development and digital marketing agency located in Pune, India.">
    <meta property="og:title" content="Leading Web Design Company in Pune, India | Asesa Soft">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/about-agency">
    <meta property="og:description" content="Asesa Soft is a website design, website development, eCommerce marketplace development and digital marketing agency located in Pune, India.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Leading Web Design Company in Pune, India | Asesa Soft">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Asesa Soft is a website design, website development, eCommerce marketplace development and digital marketing agency located in Pune, India.">
    <meta name="twitter:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">
    <meta name="twitter:image:alt" content="Leading Web Design Company in Pune, India">


  <?php    } elseif ($page == 'our-work.php') { ?>
    <title>Experience the best website Development Company.</title>
    <meta name="description" content="At Asesa, our team of design professionals and developers create beautiful, functional, custom websites that help clients grow their business.">
    <meta property="og:title" content="Experience the best website Development Company">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/our-work">
    <meta property="og:description" content="At Asesa, our team of design professionals and developers create beautiful, functional, custom websites that help clients grow their business.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Experience the best website Development Company">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="At Asesa, our team of design professionals and developers create beautiful, functional, custom websites that help clients grow their business.">
    <meta name="twitter:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">
    <meta name="twitter:image:alt" content="Experience the best website Development Company">

  <?php    } elseif ($page == 'digital-marketing-agency.php') {    ?>
    <title>Top Digital Marketing Company in Pune – Asesa Soft</title>
    <meta name="description" content="As a leading digital marketing company in pune, we provide comprehensive digital marketing services. SEO Services. PPC and Social Media Marketing.">
    <meta property="og:title" content="Top Digital Marketing Company in Pune – Asesa Soft">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/digital-marketing-agency">
    <meta property="og:description" content="As a leading digital marketing company in Pune, we provide comprehensive digital marketing services. SEO Services. PPC and Social Media Marketing.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Top Digital Marketing Company in Pune – Asesa Soft">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="As a leading digital marketing company in pune, we provide comprehensive digital marketing services. SEO Services. PPC and Social Media Marketing.">
    <meta name="twitter:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">
    <meta name="twitter:image:alt" content="Digital Marketing Company in Pune">

  <?php    } elseif ($page == 'ecommerce-website-development.php') {   ?>
    <title>Top eCommerce Website Development Company in Pune</title>
    <meta name="description" content="Asesa Soft is the best ecommerce web development company in Pune, India. We provide high quality custom eCommerce solutions. Shopify and woo commerce web development.">
    <meta property="og:title" content="Top eCommerce Website Development Company in Pune">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/ecommerce-website-development">
    <meta property="og:description" content="Asesa Soft is the best ecommerce web development company in Pune, India. We provide high quality custom eCommerce solutions. Shopify and woo commerce web development.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Top eCommerce Website Development Company in Pune">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Asesa Soft is the best ecommerce web development company in Pune, India. We provide high quality custom eCommerce solutions. Shopify and woo commerce web development.">
    <meta name="twitter:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">
    <meta name="twitter:image:alt" content="eCommerce Website Development Company in Pune">

  <?php    } elseif ($page == 'website-design-and-development-company.php') {  ?>
    <title>Web Design Company in Pune – Web Development Company</title>
    <meta name="description" content="Asesa Soft is an affordable website design and development company in Pune. We specialize in creating custom website designs, and web development.">
    <meta property="og:title" content="Web Design Company in Pune – Web Development Company">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/website-design-and-development-company">
    <meta property="og:description" content="Asesa Soft is an affordable website design and development company in Pune. We specialize in creating custom website designs, and web development.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Web Design Company in Pune – Web Development Company">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Asesa Soft is an affordable website design and development company in Pune. We specialize in creating custom website designs, and web development.">
    <meta name="twitter:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">
    <meta name="twitter:image:alt" content="Web Design and Development Company in Pune">


  <?php   } elseif ($page == 'portfolio.php') {    ?>
    <title>Web Design and Development Portfolio | Asesa Soft</title>
    <meta name="description" content="Explore our portfolio of web development projects. See how we helped our clients to achieve their business goals through custom website design and development. Get inspired and contact us to start your project today." />
    <meta property="og:title" content="Web Design and Development Portfolio | Asesa Soft">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/portfolio">
    <meta property="og:description" content="Explore our portfolio of web development projects. See how we helped our clients to achieve their business goals through custom website design and development. ">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Web Design and Development Portfolio | Asesa Soft">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Explore our portfolio of web development projects. See how we helped our clients to achieve their business goals through custom website design and development. ">
    <meta name="twitter:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">
    <meta name="twitter:image:alt" content="Web Design and Development Portfolio">

  <?php   } elseif ($page == 'knowledge-base.php') {    ?>
    <title>Explore Our Comprehensive Knowledge Base | Asesa Soft</title>
    <meta name="description" content="Welcome to our knowledge base, where you'll find some of the most important and useful insights from the web and digital world.">
    <meta name="keywords" content="Knowledge Hub, Digital marketing, Website development, web design, Tips, News">

  <?php   } elseif ($page == 'design-work.php') { ?>

    <title>Top Notch Creative Design Services for Marketing Collaterals</title>
    <meta name="description" content="We design marketing collateral that's strategically designed, develops an emotional connection with your customers & reflects the spirit of your company.">
    <meta property="og:title" content="Top Notch Creative Design Services for Marketing Collaterals">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/design-work">
    <meta property="og:description" content="We design marketing collateral that's strategically designed, develops an emotional connection with your customers & reflects the spirit of your company.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Top Notch Creative Design Services for Marketing Collaterals">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="We design marketing collateral that's strategically designed, develops an emotional connection with your customers & reflects the spirit of your company.">
    <meta name="twitter:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">
    <meta name="twitter:image:alt" content="Top Notch Creative Design Services for Marketing Collaterals">


  <?php    } elseif ($page == 'contact-us.php') { ?>
    <title>Contact us for Web Development Services in Pune, India </title>
    <meta name="description" content="Work with the best web development company in Pune to get effective web design services for your business. Call Now +91 9970099596, +91 97307 53630">
    <meta property="og:title" content="Contact us for Web Development Services in Pune, India ">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/contact-us">
    <meta property="og:description" content="Work with the best web development company in Pune to get effective web design services for your business. Call Now +91 8237488196, +91 9970099596   ">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Contact us for Web Development Services in Pune, India ">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Work with the best web development company in Pune to get effective web design services for your business. Call Now +91 8237488196, +91 9970099596 ">
    <meta name="twitter:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">
    <meta name="twitter:image:alt" content="Contact us for Web Development Services in Pune">

  <?php    } elseif ($page == 'thank-you.php') { ?>
    <title>Thank You - Asesa Soft</title>
    <!-- Event snippet for Asesa Soft - New Lead Form Contact conversion page -->
    <script>
      gtag('event', 'conversion', {
        'send_to': 'AW-453932929/xISTCOGS5o8YEIHvudgB'
      });
    </script>

  <?php    } elseif ($page == 'blogs.php') { ?>
    <title>Web Development and Digital Marketing Blogs - Asesa Soft</title>
    <meta name="description" content="Web design and development, digital marketing, and more - Know what’s happening latest in the digital world.">
    <meta property="og:title" content="Web Development and Digital Marketing Blogs - Asesa Soft">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blogs">
    <meta property="og:description" content="Web design and development, digital marketing, and more - Know what’s happening latest in the digital world.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Web Development and Digital Marketing Blogs - Asesa Soft">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Web design and development, digital marketing, and more - Know what’s happening latest in the digital world.">
    <meta name="twitter:image" content="https://asesasoft.com/images/Asesa-OG-Tag.jpg">
    <meta name="twitter:image:alt" content="Web Development and Digital Marketing Blogs">


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
    <meta property="og:title" content="Ecommerce Best Practices: Designing an Online Store">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/ecommerce-best-practices-and-tips">
    <meta property="og:description" content="Learn the best practices for designing an ecommerce store that engages customers and drives sales. ">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/E-commerce-Best-Practices-Designing-an-Online-Store.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ecommerce Best Practices: Designing an Online Store">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Learn the best practices for designing an ecommerce store that engages customers and drives sales. ">
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/E-commerce-Best-Practices-Designing-an-Online-Store.webp">
    <meta name="twitter:image:alt" content="E-commerce Best Practices: Designing an Online Store">
    <!--schema tag-->
    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": {
          "@type": "Person",
          "name": "Mahadev Mahimkar"
        },
        "headline": "E-commerce Best Practices: Designing an Online Store",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/E-commerce-Best-Practices-Designing-an-Online-Store.webp"
        },
        "datePublished": "2023-01-30T18:30:00.000Z",
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
        "keywords": "E-commerce Best Practices, Online Store, ecommerce website, ecommerce platforms, custom design, Ecommerce Best Practices and Tips",
        "mainEntityOfPage": "https://asesasoft.com/blog/ecommerce-best-practices-and-tips",
        "description": "Learn the best practices for designing an ecommerce store that engages customers and drives sales."
      }
    </script>
    <!--FAQs-->
    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "Q. What are the best e-commerce platforms?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The best e-commerce platforms will vary depending on the specific needs and requirements of a business. Some popular e-commerce platforms include: Shopify, WooCommerce, Magento, BigCommerce and Squarespace."
            }
          },
          {
            "@type": "Question",
            "name": "Q. How long does it take to build an e-commerce website?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The time it takes to build an e-commerce website can vary greatly depending on a number of factors such as the complexity of the website, the number of products, the design and functionality requirements, and the resources available.  A simple website with a limited number of products and basic functionality can take a few weeks to build. However, a more complex website with a large number of products, advanced functionality and custom design elements can take several months to build."
            }
          },
          {
            "@type": "Question",
            "name": "Q. How much does it cost to design an e-commerce website?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The cost of designing an e-commerce website can vary greatly depending on a number of factors such as the complexity of the website, the number of products, the design and functionality requirements, and the resources available.  If you are building a website from scratch, the cost can be much higher. It can cost anywhere from a few thousand dollars/rupees for a simple website with limited functionality, to tens of thousands of dollars/rupees for a more complex website with advanced features and custom design elements."
            }
          }
        ]
      }
    </script>
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
    <meta property="og:title" content="11 Difference Between B2B and B2C eCommerce Websites [Updated 2023]">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/11-difference-between-b2b-and-b2c-ecommerce-websites">
    <meta property="og:description" content="Discover the 11 key differences between B2B and B2C eCommerce websites, updated for 2023. Learn about the unique challenges and opportunities for both types of websites.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/B2B-and-B2C1.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="11 Difference Between B2B and B2C eCommerce Websites [Updated 2023]">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Discover the 11 key differences between B2B and B2C eCommerce websites, updated for 2023. Learn about the unique challenges and opportunities for both types of websites.">
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/B2B-and-B2C1.webp">
    <meta name="twitter:image:alt" content="Between B2B and B2C eCommerce Websites">
    <!--Blog Posting-->
    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": {
          "@type": "Person",
          "name": "Pravin Bhosale"
        },
        "headline": "11 Difference Between B2B and B2C eCommerce Websites [Updated 2023]",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/B2B-and-B2C1.webp"
        },
        "datePublished": "2023-01-31T18:30:00.000Z",
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
        "keywords": "Difference Between B2B and B2C eCommerce Websites, B2B eCommerce website, B2C businesses, B2B and B2C eCommerce, B2C eCommerce, B2B Websites",
        "mainEntityOfPage": "https://asesasoft.com/blog/11-difference-between-b2b-and-b2c-ecommerce-websites",
        "description": "Discover the 11 key differences between B2B and B2C eCommerce websites, updated for 2023. Learn about the unique challenges and opportunities for both types of websites."
      }
    </script>
    <!--FAQs-->
    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "What are the key considerations when developing a B2C eCommerce website?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "When developing a B2C eCommerce website, it's important to focus on creating a user-friendly and visually appealing site, with easy navigation, detailed product descriptions and high-quality images. Additionally, it's important to ensure that the checkout process is simple and secure and that various payment options are available."
            }
          },
          {
            "@type": "Question",
            "name": "How do I ensure that my B2B eCommerce website is secure?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "To ensure the security of your B2B eCommerce website, it's important to implement SSL encryption and to regularly update your website software to patch any security vulnerabilities. You should also require strong passwords and consider using multi-factor authentication for account access."
            }
          },
          {
            "@type": "Question",
            "name": "How do I ensure that my B2C eCommerce website is mobile-friendly?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "To ensure that your B2C eCommerce website is mobile-friendly, it's important to use a responsive design that automatically adapts to different screen sizes. Additionally, you should also test your website on various mobile devices to ensure that all elements of the site are accessible and easy to use."
            }
          },
          {
            "@type": "Question",
            "name": "How can I integrate my eCommerce website with other business systems?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "To integrate your eCommerce website with other business systems, you can use various technologies such as APIs (Application Programming Interface) or middleware platforms to connect different systems and automate data exchange. Additionally, you can also consider using pre-built integrations or plugins that can be easily added to your website."
            }
          }
        ]
      }
    </script>

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

    <title>Ecommerce Website Development Case Study | Satvyk Health Store</title>
    <meta name="description" content="Our ecommerce web development team have years of expertise in building eCommerce solutions. Check out Satvyk Health Store website.">
    <meta property="og:title" content="Ecommerce Website Development Case Study | Satvyk Health Store">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/project-satvyk">
    <meta property="og:description" content="Our ecommerce web development team have years of expertise in building eCommerce solutions. Check out Satvyk Health Store website.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/work/satvyk-home.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ecommerce Website Development Case Study | Satvyk Health Store">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Our ecommerce web development team have years of expertise in building eCommerce solutions. Check out Satvyk Health Store website.">
    <meta name="twitter:image" content="https://asesasoft.com/images/work/satvyk-home.webp">
    <meta name="twitter:image:alt" content="Ecommerce Website Development Case Study | Satvyk Health Store">


  <?php    } elseif ($page == 'project-organicgyaan.php') { ?>

    <title>Ecommerce Web Development Case Study | Organic Gyaan</title>
    <meta name="description" content="Our ecommerce web development team have years of expertise in building eCommerce solutions. Check out organic Gyaan online store.">
    <meta property="og:title" content="Ecommerce Web Development Case Study | Organic Gyaan">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/project-organicgyaan">
    <meta property="og:description" content="Our ecommerce web development team have years of expertise in building eCommerce solutions. Check out organic Gyaan online store.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/work/organicgyaan-2.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ecommerce Web Development Case Study | Organic Gyaan">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Our ecommerce web development team have years of expertise in building eCommerce solutions. Check out organic Gyaan online store.">
    <meta name="twitter:image" content="https://asesasoft.com/images/work/organicgyaan-2.webp">
    <meta name="twitter:image:alt" content="Ecommerce Web Development Case Study | Organic Gyaan">


  <?php    } elseif ($page == 'project-jajoo-enterprises.php') { ?>
    <title>Website Design and Development Case Study - Jajoo Enterprises</title>
    <meta name="description" content="Our web design and development team have years of expertise in website development solutions. Check out the complete portfolio.">
    <meta property="og:title" content="Website Design and Development Case Study - Jajoo Enterprises">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/project-jajoo-enterprises">
    <meta property="og:description" content="Our web design and development team have years of expertise in website development solutions. Check out the complete portfolio.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/work/jajoo-enterprises-home.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Website Design and Development Case Study - Jajoo Enterprises">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Our web design and development team have years of expertise in website development solutions. Check out the complete portfolio.">
    <meta name="twitter:image" content="https://asesasoft.com/images/work/jajoo-enterprises-home.webp">
    <meta name="twitter:image:alt" content="Website Design and Development Case Study - Jajoo Enterprises">


  <?php    } elseif ($page == 'project-mm-advisory.php') { ?>
    <title>Case Study – Web Design and Development | M. M. Advisory</title>
    <meta name="description" content="Our website development team have years of expertise in website development solutions. Check out M. M. Advisory business website.">
    <meta property="og:title" content="Case Study – Web Design and Development | M. M. Advisory">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/project-twenticy">
    <meta property="og:description" content="Our website development team have years of expertise in website development solutions. Check out M. M. Advisory business website.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/work/Furniture-A5-Flyer.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Case Study – Web Design and Development | M. M. Advisory">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Our website development team have years of expertise in website development solutions. Check out M. M. Advisory business website.">
    <meta name="twitter:image" content="https://asesasoft.com/images/work/Furniture-A5-Flyer.jpg">
    <meta name="twitter:image:alt" content="Case Study – Web Design and Development | M. M. Advisory">

  <?php    } elseif ($page == 'project-aurisen-studio.php') { ?>
    <title>Website Design and Development Case Study - Aurisen Studio</title>
    <meta name="description" content="Website design and development solutions for Aurisen Studio. Check out the complete portfolio.">
    <meta property="og:title" content="Website Design and Development Case Study - Aurisen Studio">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/project-aurisen-studio">
    <meta property="og:description" content="Website design and development solutions for Aurisen Studio. Check out the complete portfolio.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/work/Aurisen-Studio-Home.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Website Design and Development Case Study - Aurisen Studio">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Website design and development solutions for Aurisen Studio. Check out the complete portfolio.">
    <meta name="twitter:image" content="https://asesasoft.com/images/work/Aurisen-Studio-Home.webp">
    <meta name="twitter:image:alt" content="Website Design and Development Case Study - Aurisen Studio">


  <?php    } elseif ($page == 'project-the-tuition-arena.php') { ?>

    <title>Web Design and Development Case Study - Educational Platform</title>
    <meta name="description" content="Website design and development services for The Tuition Arena. Check out the exclusive work portfolio.">
    <meta property="og:title" content="Web Design and Development Case Study - Educational Platform">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/project-the-tuition-arena">
    <meta property="og:description" content="Website design and development services for The Tuition Arena. Check out the exclusive work portfolio.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/work/Tuition-Arena-Home.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Web Design and Development Case Study - Educational Platform">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Website design and development services for The Tuition Arena. Check out the exclusive work portfolio.">
    <meta name="twitter:image" content="https://asesasoft.com/images/work/Tuition-Arena-Home.webp">
    <meta name="twitter:image:alt" content="Web Design and Development Case Study - Educational Platform">


  <?php    } elseif ($page == 'project-adrish.php') { ?>

    <title>Ecommerce Website Development Case Study | Adrish Zerowaste</title>
    <meta name="description" content="Our ecommerce web development team have years of expertise in building eCommerce solutions. Check out the exclusive work portfolio.">
    <meta property="og:title" content="Ecommerce Website Development Case Study | Adrish Zerowaste">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/project-adrish">
    <meta property="og:description" content="Our ecommerce web development team have years of expertise in building eCommerce solutions. Check out the exclusive work portfolio.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/work/Adrish-home.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ecommerce Website Development Case Study | Adrish Zerowaste">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Our ecommerce web development team have years of expertise in building eCommerce solutions. Check out the exclusive work portfolio.">
    <meta name="twitter:image" content="https://asesasoft.com/images/work/Adrish-home.webp">
    <meta name="twitter:image:alt" content="Ecommerce Website Development Case Study | Adrish Zerowaste">
  <?php    } elseif ($page == 'project-twenticy.php') { ?>
    <title>Case Study – Creative Design Services | Twenty Ci</title>
    <meta name="description" content="We work as vendor for them for all their design related work, especially for the Postcard designs.">
    <meta property="og:title" content="Case Study – Creative Design Services | Twenty Ci">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/project-twenticy">
    <meta property="og:description" content="We work as vendor for them for all their design related work, especially for the Postcard designs.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/work/Furniture-A5-Flyer.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Case Study – Creative Design Services | Twenty Ci">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="We work as vendor for them for all their design related work, especially for the Postcard designs.">
    <meta name="twitter:image" content="https://asesasoft.com/images/work/Furniture-A5-Flyer.jpg">
    <meta name="twitter:image:alt" content="Case Study – Creative Design Services | Twenty Ci">

  <?php    } elseif ($page == 'project-transtrade.php') { ?>
    <title>Web Design and Development Case Study – Transtrade</title>
    <meta name="description" content="Website design and development services for Transtrade. Check out the exclusive work portfolio.">
    <meta property="og:title" content="Web Design and Development Case Study – Transtrade">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/project-transtrade">
    <meta property="og:description" content="Website design and development services for Transtrade. Check out the exclusive work portfolio.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/work/Transtrade-Home.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Web Design and Development Case Study – Transtrade">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Website design and development services for Transtrade. Check out the exclusive work portfolio.">
    <meta name="twitter:image" content="https://asesasoft.com/images/work/Transtrade-Home.webp">
    <meta name="twitter:image:alt" content="Web Design and Development Case Study – Transtrade">

  <?php    } elseif ($page == 'project-siddhagiri-naturals.php') { ?>
    <title>Ecommerce Web Development Case Study | Siddhagiri Naturals</title>
    <meta name="description" content="Our ecommerce web design and development team have years of expertise in building eCommerce solutions. Check out Siddhagiri Naturals online store.">
    <meta property="og:title" content="Ecommerce Web Design and Development Case Study | Siddhagiri Naturals">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/project-siddhagiri-naturals">
    <meta property="og:description" content="Our ecommerce web design and development team have years of expertise in building eCommerce solutions. Check out Siddhagiri Naturals online store.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/work/siddhagiri-home.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ecommerce Web Design and Development Case Study | Siddhagiri Naturals">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Our ecommerce web design and development team have years of expertise in building eCommerce solutions. Check out Siddhagiri Naturals online store.">
    <meta name="twitter:image" content="https://asesasoft.com/images/work/siddhagiri-home.webp">
    <meta name="twitter:image:alt" content="Ecommerce Web Design and Development Case Study | Siddhagiri Naturals">


  <?php    } elseif ($page == 'comparing-woocommerce-and-bigcommerce.php') { ?>
    <title>Comparing WooCommerce and BigCommerce for E-commerce Needs</title>
    <meta name="description" content="Discover the key differences and advantages between WooCommerce and BigCommerce for your e-commerce needs. Exploring Features, Scalability, Customization options, and more.">
    <meta property="og:title" content="Comparing WooCommerce and BigCommerce for E-commerce Needs">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/comparing-woocommerce-and-bigcommerce">
    <meta property="og:description" content="Discover the key differences and advantages between WooCommerce and BigCommerce for your e-commerce needs. Exploring Features, Scalability, Customization options, and more. ">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/comparing-woocommerce-and-bigcommerce-for-ecommerce-needs.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Comparing WooCommerce and BigCommerce for E-commerce Needs">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Discover the key differences and advantages between WooCommerce and BigCommerce for your e-commerce needs. Exploring Features, Scalability, Customization options, and more. ">
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/comparing-woocommerce-and-bigcommerce-for-ecommerce-needs.webp">
    <meta name="twitter:image:alt" content="Comparing WooCommerce and BigCommerce for E-commerce Needs">
    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": [{
          "@type": "Person",
          "name": "Pravin Bhosale"
        }],
        "headline": "Custom Web Development: Comparing WooCommerce and BigCommerce for E-commerce Needs",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/comparing-woocommerce-and-bigcommerce-for-ecommerce-needs.webp"
        },
        "datePublished": "2023-05-11T18:30:00.000Z",
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
        "keywords": "Comparing WooCommerce and BigCommerce, WooCommerce and BigCommerce, E-commerce Website, WooCommerce, BigCommerce, custom web development, business, eCommerce, eCommerce business, e-commerce platform, online store, e-commerce solution",
        "mainEntityOfPage": "https://asesasoft.com/blog/comparing-woocommerce-and-bigcommerce",
        "description": "Discover the key differences and advantages between WooCommerce and BigCommerce for your e-commerce needs. Exploring Features, Scalability, Customization options, and more."
      }
    </script>



  <?php    } elseif ($page == '10-tips-for-creating-an-effective-calltoaction-on-your-website-2023.php') { ?>
    <title>10 Tips For Creating An Effective Call-To-Action On Your Website 2023</title>
    <meta name="description" content="Maximize User Engagement and Conversion Rates with These Expert Tips! Learn How to Craft Compelling Call-To-Action Elements for Your Website in 2023. Drive Action, Boost Conversions.">
    <meta property="og:title" content="10 Tips For Creating An Effective Call-To-Action On Your Website 2023">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/10-tips-for-creating-an-effective-calltoaction-on-your-website-2023">
    <meta property="og:description" content="Maximize User Engagement and Conversion Rates with These Expert Tips! Learn How to Craft Compelling Call-To-Action Elements for Your Website in 2023. Drive Action, Boost Conversions.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/10-tips-for-creating-an-effective-calltoaction-on-your-website-2023.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="10 Tips For Creating An Effective Call-To-Action On Your Website 2023">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Maximize User Engagement and Conversion Rates with These Expert Tips! Learn How to Craft Compelling Call-To-Action Elements for Your Website in 2023. Drive Action, Boost Conversions.">
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/10-tips-for-creating-an-effective-calltoaction-on-your-website-2023.webp">
    <meta name="twitter:image:alt" content="10 Tips For Creating An Effective Call-To-Action">

    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": [{
          "@type": "Person",
          "name": "Mahadev Mahimkar"
        }],
        "headline": "10 Tips For Creating An Effective Call-To-Action On Your Website 2023",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/10-tips-for-creating-an-effective-calltoaction-on-your-website-2023.webp"
        },
        "datePublished": "2023-08-27T18:30:00.000Z",
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
        "keywords": "call-to-action, website design, CTA button, website design and development, landing page, user experience, best practices, E-commerce checkout, responsive design",
        "mainEntityOfPage": "https://asesasoft.com/blog/10-tips-for-creating-an-effective-calltoaction-on-your-website-2023",
        "description": "Maximize User Engagement and Conversion Rates with These Expert Tips! Learn How to Craft Compelling Call-To-Action Elements for Your Website in 2023. Drive Action, Boost Conversions."
      }
    </script>

    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "How can I craft a captivating call to action that leaves a lasting impression?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Choose verbs, write in continuos tense, and make your call to action button highlighted."
            }
          },
          {
            "@type": "Question",
            "name": "What makes a call to action irresistible?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Paint a picture of dreams fulfilled, where the action is the gateway to wishes distilled. Let your call to action resonate with you audience’s solution that they are seeking for."
            }
          },
          {
            "@type": "Question",
            "name": "How can I infuse my call to action with a sense of urgency and excitement?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Keep a count down clock. Create urgency in time, season or stock."
            }
          }
        ]
      }
    </script>




  <?php    } elseif ($page == 'hiring-a-professional-web-development-agency-is-it-worth-the-investment.php') { ?>
    <title>Hiring a Professional Web Development Agency: Is It Worth the Investment?</title>
    <meta name="description" content="Discover the Benefits of Engaging a Professional Web Development Agency for Your Business. Explore Whether the Investment Translates to Enhanced Online Presence, Functionality, and Long-Term Success. Learn More!">
    <meta property="og:title" content="Hiring a Professional Web Development Agency: Is It Worth the Investment?">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/hiring-a-professional-web-development-agency-is-it-worth-the-investment">
    <meta property="og:description" content="Discover the Benefits of Engaging a Professional Web Development Agency for Your Business. Explore Whether the Investment Translates to Enhanced Online Presence, Functionality, and Long-Term Success. Learn More! ">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/top-reasons-to-invest-in-professional-website-development.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Hiring a Professional Web Development Agency: Is It Worth the Investment?">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Discover the Benefits of Engaging a Professional Web Development Agency for Your Business. Explore Whether the Investment Translates to Enhanced Online Presence, Functionality, and Long-Term Success. Learn More! ">
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/top-reasons-to-invest-in-professional-website-development.webp">
    <meta name="twitter:image:alt" content="Hiring a Professional Web Development Agency: Is It Worth the Investment?">

    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": [{
          "@type": "Person",
          "name": "Yogesh Salavi"
        }],
        "headline": "Hiring a Professional Web Development Agency: Is It Worth the Investment?",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/top-reasons-to-invest-in-professional-website-development.webp"
        },
        "datePublished": "2023-08-26T18:30:00.000Z",
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
        "keywords": "Hiring a Professional Web Development Agency, Professional Website Development, web development agencies, professional website development company",
        "mainEntityOfPage": "https://asesasoft.com/blog/hiring-a-professional-web-development-agency-is-it-worth-the-investment",
        "description": "Discover the Benefits of Engaging a Professional Web Development Agency for Your Business. Explore Whether the Investment Translates to Enhanced Online Presence, Functionality, and Long-Term Success. Learn More!"
      }
    </script>

    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "How much does it cost to hire a web development agency?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The cost of hiring a web development agency varies depending on the scope and complexity of your project. It's best to request quotes from several agencies and compare their services and pricing before making a decision."
            }
          },
          {
            "@type": "Question",
            "name": "Can I update my website content after it's developed?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, a professional web development agency can create a content management system (CMS) that allows you to update and manage your website's content easily."
            }
          },
          {
            "@type": "Question",
            "name": "Will my website be optimized for search engines?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The time required to build a custom website depends on its complexity and features. It can take anywhere from 15 days to 3-4 months to complete."
            }
          },
          {
            "@type": "Question",
            "name": "How long does it take to build a custom website?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The time required to build a custom website depends on its complexity and features. It can take anywhere from 15 days to 3-4 months to complete."
            }
          },
          {
            "@type": "Question",
            "name": "Can a web development agency help with website security?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, a reliable web development agency will implement security measures to safeguard your website from potential cyber threats and ensure the safety of your data and users."
            }
          }
        ]
      }
    </script>




  <?php    } elseif ($page == 'how-to-choose-the-right-hosting-provider-for-your-website.php') { ?>
    <title>How to Choose the Right Hosting Provider for Your Website</title>
    <meta name="description" content="Discover essential tips and expert insights on selecting the perfect hosting provider for your website. Make an informed choice with our comprehensive guide to finding the ideal web hosting solution that suits your needs.">
    <meta property="og:title" content="How to Choose the Right Hosting Provider for Your Website">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/how-to-choose-the-right-hosting-provider-for-your-website">
    <meta property="og:description" content="Discover essential tips and expert insights on selecting the perfect hosting provider for your website. Make an informed choice with our comprehensive guide to finding the ideal web hosting solution that suits your needs.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/how-to-choose-the-right-hosting-provider-for-your-website.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Choose the Right Hosting Provider for Your Website">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Discover essential tips and expert insights on selecting the perfect hosting provider for your website. Make an informed choice with our comprehensive guide to finding the ideal web hosting solution that suits your needs.">
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/how-to-choose-the-right-hosting-provider-for-your-website.webp">
    <meta name="twitter:image:alt" content="How to Choose the Right Hosting Provider for Your Website">

    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": [{
          "@type": "Person",
          "name": "Pravin Bhosale"
        }],
        "headline": "How to Choose the Right Hosting Provider for Your Website",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/how-to-choose-the-right-hosting-provider-for-your-website.webp"
        },
        "datePublished": "2023-08-27T18:30:00.000Z",
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
        "keywords": "web hosting, how to choose a hosting provider, hosting provider, affordable web hosting, website hosting, managed hosting services, hosting services, reliable hosting for small business, best web hosting providers",
        "mainEntityOfPage": "https://asesasoft.com/blog/how-to-choose-the-right-hosting-provider-for-your-website",
        "description": "Discover essential tips and expert insights on selecting the perfect hosting provider for your website. Make an informed choice with our comprehensive guide to finding the ideal web hosting solution that suits your needs."
      }
    </script>

    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "What questions should I ask a hosting provider before making a decision?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Before finalizing a hosting provider, it's essential to gather relevant information by asking the right questions. Here are some important inquiries to make:\n\n● What is the uptime guarantee, and how is it measured?\n\n● What level of customer support is provided?\n\n● What security measures are in place?\n\n● Are there any limitations or restrictions?\n\n● Can I easily upgrade or downgrade my hosting plan?\n\n● Are there any additional features or services included?"
            }
          },
          {
            "@type": "Question",
            "name": "How to choose a hosting provider for my business?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "To choose the right hosting type, consider factors such as your website's size, anticipated traffic, scalability needs, budget, technical expertise, and specific requirements (e.g., e-commerce functionality or CMS preferences)."
            }
          },
          {
            "@type": "Question",
            "name": "What factors should I check with while deciding my hosting providing?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Reliability and uptime: Look for a provider with a strong uptime guarantee (ideally 99.9% or higher) to ensure your website remains accessible to visitors. Check customer reviews and uptime reports to gauge reliability.\n\nPerformance and speed: Opt for a hosting provider that offers fast loading times. This impacts user experience and search engine rankings. Consider providers with robust server infrastructure, content delivery networks (CDNs), and caching mechanisms.\n\nSecurity: Verify that the hosting provider implements robust security measures such as SSL certificates, firewalls, malware scanning, and regular backups to protect your website and visitor data."
            }
          }
        ]
      }
    </script>







  <?php    } elseif ($page == '9-benefits-of-ab-testing-your-website-design.php') { ?>
    <title>9 Benefits of A/B Testing Your Website Design in 2023 [Updated]</title>
    <meta name="description" content="Boost your website's performance in 2023 with A/B testing. we'll explore the 9 benefits of A/B testing your website design, from increased conversion rates to better user experience.">
    <meta property="og:title" content="9 Benefits of A/B Testing Your Website Design in 2023 [Updated]">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/9-benefits-of-ab-testing-your-website-design">
    <meta property="og:description" content="Boost your website's performance in 2023 with A/B testing. we'll explore the 9 benefits of A/B testing your website design, from increased conversion rates to better user experience.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/9-benefits-of-ab-testing-your-website-design1.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="9 Benefits of A/B Testing Your Website Design in 2023 [Updated]">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Boost your website's performance in 2023 with A/B testing. we'll explore the 9 benefits of A/B testing your website design, from increased conversion rates to better user experience.">
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/9-benefits-of-ab-testing-your-website-design1.webp">
    <meta name="twitter:image:alt" content="9 Benefits of A/B Testing Your Website Design">
    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": [{
          "@type": "Person",
          "name": "Mahadev Mahimkar"
        }],
        "headline": "9 Benefits of A/B Testing Your Website Design in 2023 [Updated]",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/9-benefits-of-ab-testing-your-website-design1.webp"
        },
        "datePublished": "2023-05-11T18:30:00.000Z",
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
        "keywords": "A/B Testing, Benefits of A/B Testing, Website Design, Website Design in 2023",
        "mainEntityOfPage": "https://asesasoft.com/blog/9-benefits-of-ab-testing-your-website-design",
        "description": "Boost your website's performance in 2023 with A/B testing. we'll explore the 9 benefits of A/B testing your website design, from increased conversion rates to better user experience."
      }
    </script>



  <?php    } elseif ($page == 'project-siddhagiri-matham.php') { ?>
    <title>Case Study – Custom website design | Siddhagiri Matham
    </title>
    <meta name="description" content="Looking for inspiration for your custom website design project? Check out our complete case study showcasing our work for Siddhagiri Matham.">
    <meta property="og:title" content="Case Study – Custom website design | Siddhagiri Matham">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/project-siddhagiri-matham">
    <meta property="og:description" content="Looking for inspiration for your custom website design project? Check out our complete case study showcasing our work for Siddhagiri Matham. ">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/work/sumanglamSub.webp">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Case Study – Custom website design | Siddhagiri Matham">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Looking for inspiration for your custom website design project? Check out our complete case study showcasing our work for Siddhagiri Matham. ">
    <meta name="twitter:image" content="https://asesasoft.com/images/work/sumanglamSub.webp">
    <meta name="twitter:image:alt" content="Custom website design to highlight the Matham's legacy, culture, and humanitarian work.">


  <?php    } elseif ($page == 'how-to-build-brand-awareness-and-loyalty-using-a-website.php') { ?>
    <title>How to build brand awareness and loyalty using a website?</title>
    <meta name="description" content="Build brand awareness and loyalty with your website. Learn practical tips for creating a compelling online experience that resonates with your audience.">
    <meta property="og:title" content="How to build brand awareness and loyalty using a website?">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/how-to-build-brand-awareness-and-loyalty-using-a-website">
    <meta property="og:description" content="Build brand awareness and loyalty with your website. Learn practical tips for creating a compelling online experience that resonates with your audience.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://asesasoft.com/images/How-to-build-brand-awareness-and-loyalty-using-a-website.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to build brand awareness and loyalty using a website?">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Build brand awareness and loyalty with your website. Learn practical tips for creating a compelling online experience that resonates with your audience.">
    <meta name="twitter:image" content="https://asesasoft.com/images/How-to-build-brand-awareness-and-loyalty-using-a-website.webp">
    <meta name="twitter:image:alt" content="How to build brand awareness and loyalty using a website?">
    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": {
          "@type": "Person",
          "name": "Mahadev Mahimkar"
        },
        "headline": "Using Your Website to Build Brand Awareness and Loyalty",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/How-to-build-brand-awareness-and-loyalty-using-a-website.webp"
        },
        "datePublished": "2023-04-13T18:30:00.000Z",
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
        "keywords": "Brand Awareness, target audience, Website Branding, business website, business website Design, Website design, User experience, Brand consistency, Content marketing",
        "mainEntityOfPage": "https://asesasoft.com/blog/how-to-build-brand-awareness-and-loyalty-using-a-website",
        "description": "Build brand awareness and loyalty with your website. Learn practical tips for creating a compelling online experience that resonates with your audience."
      }
    </script>

  <?php    } elseif ($page == 'ecommerce-app-development-guide-2023.php') { ?>
    <title>App Development For E-commerce: Everything You Need To Know in 202</title>
    <meta name="description" content="Learn everything you need to know about app development for e-commerce in 2023. Comprehensive guide to start building your own e-commerce app with confidence.">
    <meta property="og:title" content="App Development For E-commerce: Everything You Need To Know in 2023">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/ecommerce-app-development-guide-2023">
    <meta property="og:description" content="Learn everything you need to know about app development for e-commerce in 2023. Comprehensive guide to start building your own e-commerce app with confidence.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://asesasoft.com/images/App%20Development%20For%20E-commerce%20Everything%20You%20Need%20To%20Know%20in%202023.webp">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="App Development For E-commerce: Everything You Need To Know in 2023">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Learn everything you need to know about app development for e-commerce in 2023. Comprehensive guide to start building your own e-commerce app with confidence.">
    <meta name="twitter:image" content="https://asesasoft.com/images/App%20Development%20For%20E-commerce%20Everything%20You%20Need%20To%20Know%20in%202023.webp">
    <meta name="twitter:image:alt" content="Ecommerce App Development Guide 2023">

    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": {
          "@type": "Person",
          "name": "Yogesh Salvi"
        },
        "headline": "App Development For E-commerce: Everything You Need To Know in 2023",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/App%20Development%20For%20E-commerce%20Everything%20You%20Need%20To%20Know%20in%202023.webp"
        },
        "datePublished": "2023-04-09T18:30:00.000Z",
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
        "keywords": "eCommerce app, eCommerce app Development, App Development, App development guide, App development Trend,, e-commerce apps",
        "mainEntityOfPage": "https://asesasoft.com/blog/ecommerce-app-development-guide-2023",
        "description": "Learn everything you need to know about app development for e-commerce in 2023. Comprehensive guide to start building your own e-commerce app with confidence."
      }
    </script>

    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "What are the key features of an eCommerce app?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Common features of an eCommerce app include a product catalogue, shopping cart, payment processing, and a user account system. Additional features such as push notifications, customer reviews, and order tracking may also be included."
            }
          },
          {
            "@type": "Question",
            "name": "How much does it cost to develop an eCommerce app?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The cost of developing an eCommerce app can vary greatly depending on factors such as the complexity of the app, the number of features included, and the experience of the development team. On average, the cost can range from 1,00,000 to 4,00,000 INR or more."
            }
          },
          {
            "@type": "Question",
            "name": "How long does it take to develop an eCommerce app?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The development time for an eCommerce app can also vary depending on factors such as the complexity of the app, the number of features included, and the experience of the development team. On average, it can take anywhere from 2-3 months to over a year to fully develop and launch an eCommerce app."
            }
          }
        ]
      }
    </script>



  <?php    } elseif ($page == 'privacy-policy.php') { ?>
    <title>Our Commitment to Your Privacy: Read Our Privacy Policy</title>
    <meta name="description" content="This Privacy Policy applies to the Asesasoft.com">

    <!-- ============================== 1 ================================== -->
  <?php    } elseif ($page == 'a-guide-to-progressive-web-apps.php') {   ?>
    <title>A Guide to Progressive Web Apps (PWA)</title>
    <meta name="description" content="Discover the power of Progressive Web Apps (PWA) with our comprehensive guide, exploring how to create fast, reliable, and engaging web experiences that work seamlessly across devices.">
    <meta property="og:title" content="A Guide to Progressive Web Apps (PWA)">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/a-guide-to-progressive-web-apps">
    <meta property="og:description" content="Discover the power of Progressive Web Apps (PWA) with our comprehensive guide, exploring how to create fast, reliable, and engaging web experiences that work seamlessly across devices.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/progressive-web-apps-pwa--the-complete-guide.webp">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="A Guide to Progressive Web Apps (PWA)">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Discover the power of Progressive Web Apps (PWA) with our comprehensive guide, exploring how to create fast, reliable, and engaging web experiences that work seamlessly across devices.">
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/progressive-web-apps-pwa--the-complete-guide.webp">
    <meta name="twitter:image:alt" content="A Guide to Progressive Web Apps ">

    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": [{
          "@type": "Person",
          "name": "Pravin Bhosale"
        }],
        "headline": "A Guide to Progressive Web Apps (PWA)",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/progressive-web-apps-pwa--the-complete-guide.webp"
        },
        "datePublished": "2023-10-30T18:30:00.000Z",
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
        "keywords": "Progressive Web Apps, PWA, Mobile web development, Offline capabilities, web development",
        "mainEntityOfPage": "https://asesasoft.com/blog/a-guide-to-progressive-web-apps",
        "description": "Discover the power of Progressive Web Apps (PWA) with our comprehensive guide, exploring how to create fast, reliable, and engaging web experiences that work seamlessly across devices."
      }
    </script>

    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "What exactly is a Progressive Web App (PWA)?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "A Progressive Web App, or PWA, is a web application that combines the best features of both web and mobile apps. It offers a seamless user experience, including offline functionality and push notifications."
            }
          },
          {
            "@type": "Question",
            "name": "How do PWAs benefit businesses?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "PWAs enhance user engagement, reduce bounce rates, and improve SEO rankings. They also eliminate the need for users to download and install apps from app stores."
            }
          },
          {
            "@type": "Question",
            "name": "Are PWAs replacing native apps?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "PWAs are not necessarily replacing native apps but are offering an alternative approach. Whether to choose a PWA or a native app depends on the specific requirements of a project."
            }
          },
          {
            "@type": "Question",
            "name": "Is it challenging to develop a PWA?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Developing a PWA can be complex, but following best practices and understanding the process can make it more manageable."
            }
          },
          {
            "@type": "Question",
            "name": "What are the key security considerations for PWAs?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Key security considerations for PWAs include implementing HTTPS, content security policies (CSP), and respecting user data privacy to ensure a safe browsing experience."
            }
          }
        ]
      }
    </script>

    <!-- ============================== 1 END ================================== -->

    <!-- =============================== 2 START ================================= -->
  <?php    } elseif ($page == 'voice-user-interface-design.php') {   ?>
    <title>Everything You Need To Know About Voice User Interface (VUI) Design</title>
    <meta name="description" content="Explore the world of Voice User Interface (VUI) Design in our comprehensive blog, covering everything you need to know about creating engaging and intuitive voice-driven experiences.">
    <meta property="og:title" content="Everything You Need To Know About Voice User Interface (VUI) Design">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/voice-user-interface-design">
    <meta property="og:description" content="Explore the world of Voice User Interface (VUI) Design in our comprehensive blog, covering everything you need to know about creating engaging and intuitive voice-driven experiences.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/Voice-User-Interface-Design.webp">


    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Everything You Need To Know About Voice User Interface (VUI) Design">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Explore the world of Voice User Interface (VUI) Design in our comprehensive blog, covering everything you need to know about creating engaging and intuitive voice-driven experiences.">
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/Voice-User-Interface-Design.webp">
    <meta name="twitter:image:alt" content="Voice User Interface (VUI) Design">

    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": [{
          "@type": "Person",
          "name": "Mahadev Mahimkar"
        }],
        "headline": "Everything You Need To Know About Voice User Interface (VUI) Design",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/Voice-User-Interface-Design.webp"
        },
        "datePublished": "2023-10-29T18:30:00.000Z",
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
        "keywords": "VUI, Voice commands, Speech recognition, UX Design, Voice User Interface",
        "mainEntityOfPage": "https://asesasoft.com/blog/voice-user-interface-design",
        "description": "Explore the world of Voice User Interface (VUI) Design in our comprehensive blog, covering everything you need to know about creating engaging and intuitive voice-driven experiences."
      }
    </script>

    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "What are the different types of VUIs?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "There are two main types of VUIs: command-based VUIs and conversational VUIs. Command-based VUIs require users to issue specific commands, such as \"Play music\" or \"Set a timer.\"\n\nConversational VUIs allow users to have more natural conversations with the device, such as \"What's the weather like today?\" or \"What's the latest news?\""
            }
          },
          {
            "@type": "Question",
            "name": "What are the challenges of VUI design?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "One of the biggest challenges of VUI design is the accuracy of speech recognition technology. Speech recognition technology is still not perfect, and it can sometimes misunderstand what the user is saying. This can lead to frustration and decreased usability.\n\nAnother challenge of VUI design is the need for natural language understanding. Natural language understanding is the ability to understand the meaning of what the user is saying, even if they use different words or phrases. This is a complex task, and it's one that VUI designers are still working to improve."
            }
          },
          {
            "@type": "Question",
            "name": "What are the future trends in VUI design?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "One of the most promising trends in VUI design is the use of machine learning. Machine learning can be used to improve the accuracy of speech recognition and natural language understanding. This will make VUIs more usable and more natural to interact with.\n\nAnother trend in VUI design is the use of augmented reality. Augmented reality can be used to overlay digital information in the real world. This could be used to help users interact with VUIs in a more natural way."
            }
          }
        ]
      }
    </script>

    <!-- ============================== 2 END ================================== -->

    <!-- =============================== 3 START ================================= -->
  <?php    } elseif ($page == 'how-to-boost-your-websites-performance-in-2024.php') {   ?>
    <title>How To Boost Your Website's Performance in 2024</title>
    <meta name="description" content="Discover the latest strategies and tools to turbocharge your website's performance in 2024. Improve speed, user experience, and SEO rankings with our expert tips.">
    <meta property="og:title" content="How To Boost Your Website's Performance in 2024">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/how-to-boost-your-websites-performance-in-2024">
    <meta property="og:description" content="Discover the latest strategies and tools to turbocharge your website's performance in 2024. Improve speed, user experience, and SEO rankings with our expert tips.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/How-to-Improve-Website-Performance-in-2024.webp">


    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="How To Boost Your Website's Performance in 2024">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Discover the latest strategies and tools to turbocharge your website's performance in 2024. Improve speed, user experience, and SEO rankings with our expert tips.">
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/How-to-Improve-Website-Performance-in-2024.webp">
    <meta name="twitter:image:alt" content="How to Improve Website Performance in 2024 ">


    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": [{
          "@type": "Person",
          "name": "Yogesh Salvi"
        }],
        "headline": "How To Boost Your Website's Performance in 2024 [Expert Tips For Optimal Optimization]",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/How-to-Improve-Website-Performance-in-2024.webp"
        },
        "datePublished": "2023-11-01T18:30:00.000Z",
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
        "keywords": "How to Improve Website Performance, Performance optimization, Page speed, Caching, SEO, Website Redesign",
        "mainEntityOfPage": "https://asesasoft.com/blog/how-to-boost-your-websites-performance-in-2024",
        "description": "Discover the latest strategies and tools to turbocharge your website's performance in 2024. Improve speed, user experience, and SEO rankings with our expert tips."
      }
    </script>

    <!-- ============================== 3 END ================================== -->

    <!-- =============================== 4 START ================================= -->
  <?php    } elseif ($page == 'top-5-strategies-for-chatbot-integration-in-web-design.php') {   ?>
    <title>Top 5 Strategies for Chatbot Integration in Web Design</title>
    <meta name="description" content="Discover the most effective strategies for seamless chatbot integration in web design! Explore our top 5 tips to enhance user engagement and streamline customer interactions on your website.">
    <meta property="og:title" content="Top 5 Strategies for Chatbot Integration in Web Design">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/top-5-strategies-for-chatbot-integration-in-web-design">
    <meta property="og:description" content="Discover the most effective strategies for seamless chatbot integration in web design! Explore our top 5 tips to enhance user engagement and streamline customer interactions on your website.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/top-5-strategies-for-chatbot-integration-in-web-design.webp">



    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Top 5 Strategies for Chatbot Integration in Web Design">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Discover the most effective strategies for seamless chatbot integration in web design! Explore our top 5 tips to enhance user engagement and streamline customer interactions on your website.">
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/top-5-strategies-for-chatbot-integration-in-web-design.webp">
    <meta name="twitter:image:alt" content="Chatbot Integration in Web Design">


    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": [{
          "@type": "Person",
          "name": "Pravin Bhosale"
        }],
        "headline": "The Top 5 Strategies for Chatbot Integration in Web Design",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/top-5-strategies-for-chatbot-integration-in-web-design.webp"
        },
        "datePublished": "2023-11-01T18:30:00.000Z",
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
        "keywords": "Chatbot, Conversational UI, AI integration, chatbot integration, web designing",
        "mainEntityOfPage": "https://asesasoft.com/blog/top-5-strategies-for-chatbot-integration-in-web-design",
        "description": "Discover the most effective strategies for seamless chatbot integration in web design! Explore our top 5 tips to enhance user engagement and streamline customer interactions on your website."
      }
    </script>

    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "Why is the placement of the chatbot important in web design?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The placement of the chatbot is crucial because it directly impacts user engagement and accessibility. When strategically placed, such as on the homepage or in a corner, the chatbot is easily noticeable and accessible to visitors, allowing them to seek assistance or engage with your website effortlessly."
            }
          },
          {
            "@type": "Question",
            "name": "How can a chatbot enhance user experiences through personalization?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Chatbots enhance user experiences through personalization by collecting and utilizing user data during interactions. By knowing a user's name and preferences, the chatbot can tailor responses and recommendations, making the interaction more engaging and relevant to the individual's needs. Personalization fosters a sense of being understood and valued, which can positively impact user satisfaction."
            }
          },
          {
            "@type": "Question",
            "name": "Why is it essential to provide multilingual support through a chatbot?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Multilingual support through a chatbot is essential for expanding your website's reach and catering to a global audience. By offering conversations in multiple languages, you eliminate language barriers, ensuring that users from diverse backgrounds can engage with your website comfortably. This inclusivity not only broadens your audience but also enhances trust and user experiences for international visitors."
            }
          }
        ]
      }
    </script>

    <!-- ============================== 4 END ================================== -->

    <!-- =============================== 5 START ================================= -->
  <?php    } elseif ($page == 'top-7-tips-for-user-experience-ux-design.php') {   ?>
    <title>Top 7 Tips for User Experience (UX) Design</title>
    <meta name="description" content="Enhance user satisfaction and boost engagement with our Top 7 Tips for User Experience (UX) Design. Learn proven strategies to create intuitive, user-friendly interfaces in this insightful blog">
    <meta property="og:title" content="Top 7 Tips for User Experience (UX) Design">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/top-7-tips-for-user-experience-ux-design">
    <meta property="og:description" content="Enhance user satisfaction and boost engagement with our Top 7 Tips for User Experience (UX) Design. Learn proven strategies to create intuitive, user-friendly interfaces in this insightful blog.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/the-top-7-tips-for-user-experience-ux-design.webp">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Top 7 Tips for User Experience (UX) Design">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Enhance user satisfaction and boost engagement with our Top 7 Tips for User Experience (UX) Design. Learn proven strategies to create intuitive, user-friendly interfaces in this insightful blog.">
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/the-top-7-tips-for-user-experience-ux-design.webp">
    <meta name="twitter:image:alt" content="Top 7 Tips for User Experience (UX) Design">



    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": [{
          "@type": "Person",
          "name": "Pravin Bhosale"
        }],
        "headline": "The Top 7 Tips for User Experience (UX) Design",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/the-top-7-tips-for-user-experience-ux-design.webp"
        },
        "datePublished": "2023-11-06T18:30:00.000Z",
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
        "keywords": "User Experience (UX) Design, UX design, User research, User testing, Usability, user interface",
        "mainEntityOfPage": "https://asesasoft.com/blog/top-7-tips-for-user-experience-ux-design",
        "description": "Enhance user satisfaction and boost engagement with our Top 7 Tips for User Experience (UX) Design. Learn proven strategies to create intuitive, user-friendly interfaces in this insightful blog."
      }
    </script>

    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "How do I improve user experience in UX?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Start by understanding your users and their needs. Implement changes based on feedback and always be ready to adapt."
            }
          },
          {
            "@type": "Question",
            "name": "What are the 5 key principles of user experience design?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The five key principles are Usability, Consistency, Accessibility, Feedback, and Simplicity."
            }
          },
          {
            "@type": "Question",
            "name": "What are the 4 C's of UX design?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The four C's are Clarity, Consistency, Comfort, and Context."
            }
          }
        ]
      }
    </script>

    <!-- ============================== 5 END ================================== -->

    <!-- =============================== 6 START ================================= -->
  <?php    } elseif ($page == 'top-7-website-redesign-strategies-to-boost-your-online-presence.php') {   ?>
    <title>Top 7 Website Redesign Strategies to Boost Your Online Presence</title>
    <meta name="description" content="Discover the Top 7 Website Redesign Strategies to Supercharge Your Online Presence! Learn how to revamp your site for success and increased visibility in this insightful blog.">

    <meta property="og:title" content="Top 7 Website Redesign Strategies to Boost Your Online Presence">
    <meta property="og:site_name" content="Asesa Soft">
    <meta property="og:url" content="https://asesasoft.com/blog/top-7-website-redesign-strategies-to-boost-your-online-presence">
    <meta property="og:description" content="Discover the Top 7 Website Redesign Strategies to Supercharge Your Online Presence! Learn how to revamp your site for success and increased visibility in this insightful blog.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://asesasoft.com/images/blogs/top-7-website-redesign-strategies-to-boost-your-online-presence.webp">


    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Top 7 Website Redesign Strategies to Boost Your Online Presence">
    <meta name="twitter:site" content="@asesasoft">
    <meta name="twitter:description" content="Discover the Top 7 Website Redesign Strategies to Supercharge Your Online Presence! Learn how to revamp your site for success and increased visibility in this insightful blog.">
    <meta name="twitter:image" content="https://asesasoft.com/images/blogs/top-7-website-redesign-strategies-to-boost-your-online-presence.webp">
    <meta name="twitter:image:alt" content="Top 7 Website Redesign Strategies">

    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "author": [{
          "@type": "Person",
          "name": "Yogesh Salavi"
        }],
        "headline": "The Top 7 Website Redesign Strategies to Boost Your Online Presence",
        "image": {
          "@type": "ImageObject",
          "url": "https://asesasoft.com/images/blogs/top-7-website-redesign-strategies-to-boost-your-online-presence.webp"
        },
        "datePublished": "2023-11-06T18:30:00.000Z",
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
        "keywords": "Website audit, Content restructuring, Rebranding, Top 7 Website Redesign Strategies, website redesign, online presence",
        "mainEntityOfPage": "https://asesasoft.com/blog/top-7-website-redesign-strategies-to-boost-your-online-presence",
        "description": "Discover the Top 7 Website Redesign Strategies to Supercharge Your Online Presence! Learn how to revamp your site for success and increased visibility in this insightful blog."
      }
    </script>


    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "How often should I consider redesigning my website for a better online presence?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The frequency of website redesigns can vary depending on your industry and goals. In general, it's advisable to revisit your website design every 2-3 years to keep it fresh and in line with current trends. However, if you notice a decline in performance or changes in your business, it may be time to consider a redesign sooner."
            }
          },
          {
            "@type": "Question",
            "name": "What are the key indicators that suggest it's time for a website redesign?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Watch for decreasing traffic, high bounce rates, outdated design, slow loading times, and a lack of mobile responsiveness. If your site struggles to convert visitors into customers or doesn't align with your branding and messaging, it's definitely time for a redesign."
            }
          },
          {
            "@type": "Question",
            "name": "How can I ensure a website redesign won't negatively impact my search engine rankings?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "To protect your search engine rankings during a redesign, implement 301 redirects for any changed URLs, maintain your existing sitemap, and update your robots.txt file as needed. Additionally, perform thorough SEO audits before and after the redesign to address any issues that might arise. Consulting with SEO experts can be invaluable in this process."
            }
          }
        ]
      }
    </script>

    <!-- ============================== 6 END ================================== -->

  <?php    }  ?>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name='theme-color' content='#005248' />
  <meta name="author" content="Asesa Soft">
  <meta name="author" content="www.asesasoft.com" />
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <meta name="audience" content="all" />
  <meta name="googlebot" content="all" />
  <meta name="country" content="india" />
  <meta name="geo.placename" content="Pune" />
  <meta name="geo.region" content="IN-MH" />
  <meta name="og:locale" content="en_IN" />
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
  <link rel='icon' type='image/png' href="./favicon-32x32.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="../../images/apple-icon-180x180.png">
  <link rel='stylesheet' href='./css/bootstrap.css' />

  <link rel='stylesheet' href='./css/style.css' />
  <link rel='stylesheet' href='./css/style2023.css' />
  <link rel='stylesheet' href='./css/style2024.css' />
  <link rel='stylesheet' href='./css/newStyle.css' />
  <link rel='stylesheet' href='./css/responsive.css' />
  <link rel='stylesheet' href='./css/owl.carousel.min.css' />
  <link rel="stylesheet" href="./css/Fontawesome/font-awesome.min.css" />
  <!-- Maginfic Popup -->
  <link rel="stylesheet" href="./css/magnific-popup.css" defer />
  <!-- social share -->
  <link rel="stylesheet" href="./css/jssocials.css" />
  <script src='./js/jquery.js'></script>
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

  <?php if ($page != 'thank-you.php') { ?>
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
  <?php } ?>

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
        <a class="navbar-brand p-0 d-flex" href="/"><img src='../../images/Logo.svg' alt='Asesasoft' class='img-fluid logo w-140' /></a>
        <button class="navbar-toggler p-0" style='outline: 0;' type="button" aria-expanded="false">
          <span class="navbar-toggler-icon d-flex align-items-center justify-content-end"><img src='../../images/menu.svg' class='img-fluid' alt='Menu Icon' /></span>
        </button>
        <div class="collapse navbar-collapse navColNew" id="navbar">
          <ul class="navbar-nav ml-auto d-none d-lg-flex pl-md-5 pl-lg-0">
            <li class="nav-item text-right closeIcon pt-3 desk_hide pb-5">
              <a class="nav-link w-100" style="color: #F5A61C;font-size: 36px;position: absolute;right: 85px;" href="#">&times;</a>
            </li>
            <li class="nav-item">
              <!--active-->
              <a class="nav-link fs16 <?php if ($page == '' || $page == 'website-design-and-development-company.php' || $page == 'ecommerce-website-development.php' || $page == 'digital-marketing-agency.php') {
                                        echo 'active';
                                      } ?>" href="#" data-toggle='collapse' data-target='#service'>Services <img src='../../images/down-arrow.svg' class='img-fluid pl-2' alt='down-arrow' /></a>
              <div class="collapse dropdown_content dropdown_content_service" id='service'>
                <!-- <div class="row p-md-3 justify-content-between">
                                    <div class="col-md-1 d-none d-lg-block">
                                        <p class='v_text mt-2'>OUR SERVICES</p>
                                    </div>
                                    <div class="col-md-3 border-right d-flex align-items-center flex-column">
                                        <div>
                                            <h4 class='dropdown_heder'>Digital Marketing</h4>
                                            <ul class="nav">
                                                <li class="m-0"><a class="dropdown-item" href="./digital-marketing-agency.php">Search Engine Optimization</a></li>
                                                <li class="m-0"><a class="dropdown-item" href="./digital-marketing-agency.php">Social Media Marketing</a></li>
                                                <li class="m-0"><a class="dropdown-item" href="./digital-marketing-agency.php">PPC & Paid Promotions</a></li>
                                            </ul>
                                            <div class='mt-4'>
                                                <a href="./digital-marketing-agency.php" class='montserrat_bold hover_link' style='font-size: 14px;'>Read More <img src="./images/chevron-right.png" class='pl-2 img-fluid nav_hover_img' alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 border-right d-flex align-items-center flex-column">
                                        <div>
                                            <h4 class='dropdown_heder'>eCommerce Solution</h4>
                                            <ul class="nav d-block">
                                                <li class="m-0"><a class="dropdown-item" href="./ecommerce-website-development.php">eCommerce Consulting</a></li>
                                                <li class="m-0"><a class="dropdown-item" href="./ecommerce-website-development.php">Custom eCommerce</a></li>
                                                <li class="m-0"><a class="dropdown-item" href="./ecommerce-website-development.php">Shopify Development</a></li>
                                            </ul>
                                            <div class='mt-4'>
                                                <a href="./ecommerce-website-development.php" class='montserrat_bold hover_link' style='font-size: 14px;'>Read More <img src="./images/chevron-right.png" class='pl-2 img-fluid nav_hover_img' alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h4 class='dropdown_heder'>Web Design & Development</h4>
                                        <a class="dropdown-item" href="./website-design-and-development-company.php">UI/UX</a>
                                        <a class="dropdown-item" href="./website-design-and-development-company.php">Web Applications</a>
                                        <a class="dropdown-item" href="./website-design-and-development-company.php">Corporate Websites</a>
                                        <div class='mt-4'>
                                            <a href="./website-design-and-development-company.php" class='montserrat_bold hover_link' style='font-size: 14px;'>Read More <img src="./images/chevron-right.png" class='pl-2 img-fluid nav_hover_img' alt=""></a>
                                        </div>
                                    </div>
                                </div> -->
                <div class="serviceDrpDwn">
                  <div class="linkItm <?php if ($page == '' || $page == 'custom-app-development.php') {
                                        echo 'active';
                                      } ?>">
                    <a href="../../custom-app-development.php">
                    Application Development
                    </a>
                  </div>
                  <div class="divider"></div>
                  <div class="linkItm <?php if ($page == '' || $page == 'website-design-and-development-company.php') {
                                        echo 'active';
                                      } ?>">
                    <a href="../../website-design-and-development-company.php">
                      Web Design & Development
                    </a>
                  </div>
                  <div class="divider"></div>
                  <div class="linkItm <?php if ($page == '' || $page == 'ecommerce-website-development.php') {
                                        echo 'active';
                                      } ?>">
                    <a href="../../ecommerce-website-development.php">
                      eCommerce Solutions
                    </a>
                  </div>


                  <!-- <div class="divider"></div>
                  <div class="linkItm active">
                    <a href="#">
                      Mobile App Development
                    </a>
                  </div> -->
                  <div class="divider"></div>
                  <div class="linkItm <?php if ($page == '' || $page == 'digital-marketing-agency.php') {
                                        echo 'active';
                                      } ?>">
                    <a href="../../digital-marketing-agency.php">
                    Digital Marketing Services
                    </a>
                  </div>
                  
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link fs16 <?php if ($page == '' || $page == 'portfolio.php') {
                                        echo 'active';
                                      } ?>" href="../../portfolio.php">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs16 <?php if ($page == '' || $page == 'our-work.php') {
                                        echo 'active';
                                      } ?>" href="../../our-work.php">Case Studies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs16 <?php if ($page == '' || $page == 'about-agency.php') {
                                        echo 'active';
                                      } ?>" href="../../about-agency.php">About Us</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link fs16 <?php if ($page == '' || $page == 'blogs.php') {
                                        echo 'active';
                                      } ?>" href="../../blogs.php">Blogs</a>
            </li>
            <li class="nav-item c_bg">
              <span class='v_line '></span>
              <a class="nav-link fs16 <?php if ($page == '' || $page == 'contact-us.php') {
                                        echo 'active';
                                      } ?>" href="../../contact-us.php">Contact</a>
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
                    <li><a href="../../custom-app-development.php" class="nav-link">Application Development</a></li>
                    <li><a href="../../website-design-and-development-company.php" class="nav-link">UI/UX Design & Web Engineering</a></li>
                    <li><a href="../../ecommerce-website-development.php" class="nav-link">eCommerce Development</a></li>
                    <li><a href="../../digital-marketing-agency.php" class="nav-link">Digital Marketing Solutions</a></li>
                    <!-- <li><a href="#" class="nav-link">Mobile App Development</a></li> -->
                  </ul>
                </div>
              </li>
              <li><a href="../../portfolio.php" class="pl-3 mobileNavHeader">Portfolio</a></li>
              <li><a href="../../our-work.php" class="pl-3 mobileNavHeader">Case Studies</a></li>
              <!-- <li>
                <h5 class="mobileNavHeader pl-3 title_after pos_relative arpArr">About</h5>
                <div id="mobile_service">
                  <ul style="list-style: none;padding-left: 20px;">
                    <li><a href="../../about-agency.php" class="nav-link">About Us</a></li>
                    <li><a href="../../knowledge-base.php" class="nav-link">Knowledge Hub</a></li>
                  </ul>
                </div>
              </li> -->

              <!-- 
              <li>
                <h5 class="mobileNavHeader pl-3"><a class="text-white" href="./about-agency.php">About Agency</a></h5>
              </li> -->
              <!-- <li>
                <h5 class="mobileNavHeader pl-3"><a class="text-white" href="./blogs.php">Blogs</a></h5>
              </li> -->
              <!-- <li>
                <h5 class="mobileNavHeader pl-3"><a class="text-white" href="./knowledge-base.php">Knowledge Hub</a></h5>
              </li> -->
              <li class='d-none'><a href="" class="nav-link">Careers</a></li>
              <li>
                <h6 class="mobileNavHeader"><a href="./about-agency.php" class="pl-3 mobileNavHeader mt-3">About Us</a></h6>
              </li>
              <li>
                <h6 class="mobileNavHeader"><a href="./blogs.php" class="pl-3 mobileNavHeader mt-3">Blogs</a></h6>
              </li>
              <li>
                <h6 class="mobileNavHeader"><a href="./contact-us.php" class="pl-3 mobileNavHeader mt-3">Contact</a></h6>
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