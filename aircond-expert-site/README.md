# Aircond Expert — Website

A multi-page PHP website built from the homepage design. Shared header/footer so the
design is edited in one place, dynamic service pages, a working contact form, clean URLs
and a custom 404 page.

## Structure
```
/                     index.php            Homepage
/services/            services.php         Services hub
/services/<slug>/     service.php          Dynamic service page (reads data/services.php)
/about/               about.php
/coverage/            coverage.php
/amc/                 amc.php
/contact/             contact.php          Form posts to /api/contact.php
/privacy/ /terms/ /pdpa/ /cookie/          Legal pages
404                   404.php              Custom not-found page

inc/header.php        Shared header (nav, logo, meta) used by every page
inc/footer.php        Shared footer + CTA + JS include
data/services.php     All service content lives here (add a service = new page)
api/config.php        Email + log settings (edit before going live)
api/contact.php       Handles the contact form (email + local backup + spam honeypot)
assets/css/style.css  All styling (auto cache-busted)
assets/js/main.js     Menu, slider, counters, booking form
assets/img/           Put your photos here (filenames listed below)
.htaccess             Clean URLs, trailing slash, 404, HTTPS, caching, security
robots.txt sitemap.xml
```

## Deploy (cPanel)
1. Upload everything inside this folder into `public_html` (keep the folder structure).
2. Enable "Show Hidden Files" so `.htaccess` uploads too.
3. Make sure SSL is active, then the HTTPS redirect in `.htaccess` will work.
4. Edit `api/config.php` and set your real `to_email` / `from_email`.
5. Replace the domain `www.aircondexpert.my` in `inc/header.php`, page files and `sitemap.xml` with your real domain.

## Add your images (assets/img/)
hero.jpg, about-team.jpg, favicon.png
aircond-service.jpg, chemical-wash.jpg, aircond-repair.jpg, installation.jpg, gas-top-up.jpg, general-cleaning.jpg
work-1.jpg ... work-6.jpg, review-1.jpg ... review-6.jpg

## Add a new service
Open `data/services.php`, copy one block, change the slug and content.
The page `/services/your-slug/` and the menu/footer links work automatically.
