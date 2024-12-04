# Ramiz Web Dev WordPress Child Theme

**A powerful and customizable WordPress child theme for the Astra theme. Developed by [Ramiz Web Dev](https://ramizwebdev.com) to deliver high-quality, branded websites for businesses and developers.**

---

## 🚀 Features
- **Custom Branding**: Replace WordPress and Astra branding with your own.
- **Support Widgets**: Includes a dynamic dashboard widget for support and updates.
- **Custom Login Page**: Personalized login page with your logo and branding.
- **Lightweight and Optimized**: Designed to be fast, SEO-friendly, and scalable.
- **Dynamic Offers Section**: Display real-time offers and ads using a REST API.

---

## 🎯 Perfect For:
- Businesses needing branded websites.
- WordPress developers who customize Astra-based sites.
- Agencies seeking a lightweight, scalable child theme.

---

## 📂 File Structure
```plaintext
ramizwebdev-wordpress-child-theme/
│
├── core/
│   ├── branding.php         # Functions for custom branding
│   ├── support.php          # Dashboard widgets and support functions
│
├── style.css                # Child theme styles
├── functions.php            # Main child theme functions
└── README.md                # Documentation

## 🔄 Using This Child Theme with Other Parent Themes

This child theme is designed specifically for the Astra theme. If you want to use it for a different parent theme, you must update the `Template` field in the `style.css` file.

### Steps to Customize:
1. Open the `style.css` file in the root directory of this theme.
2. Locate the `Template` field, which specifies the folder name of the parent theme.
   ```css
   Template: twentytwentyone
   
