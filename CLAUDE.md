# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a static landing page for the Remote Commons Digital Nomad Visa Whitepaper. The site is a simple PHP/HTML/CSS application that serves a single-page website with an embedded Brevo (formerly Sendinblue) email signup form to deliver the whitepaper PDF to interested users.

## Architecture

**Single-Page Application:**
- `index.php` - Main landing page containing all HTML structure, embedded Brevo form integration, and inline JavaScript
- `assets/styles.css` - All styling including responsive design breakpoints and Brevo form customizations
- `assets/` - Contains all static assets (logo, favicon, PDF cover image, author photo)

**Key Components:**
- Header with logo and tagline
- Top section with PDF cover image and introduction (responsive flex layout)
- Bottom section with whitepaper details and feature list
- Embedded Brevo form for email collection and PDF delivery
- Author bio section with photo

**Form Integration:**
- Uses Brevo (Sendinblue) hosted form at https://sibforms.com/
- Cloudflare Turnstile captcha integration
- Form submits to Brevo endpoint for automated email delivery
- Custom styling overrides to match site design

## Development

**Local Setup:**
This appears to be a local development site (remotecommons.local) running on a standard PHP server. To run locally:
- Ensure PHP is installed
- Serve from the project root directory
- Access via configured local domain (remotecommons.local)

**File Structure:**
- Root contains only `index.php` (single entry point)
- All assets are in `/assets/` directory
- PDF whitepaper excluded via `.gitignore` (not committed to repo)

## Styling Considerations

**Responsive Design:**
- Desktop breakpoint: 769px+ (side-by-side PDF cover and intro)
- Mobile breakpoint: max-width 768px (stacked layout, reduced padding)
- Mobile-specific Brevo form adjustments in media query

**Brevo Form Customization:**
- Entry specifications hidden via `.entry__specification { display: none !important; }`
- Mobile-specific container width and padding overrides
- Custom color scheme (#ffdd4a button, #EFF2F7 background)

## Key Technical Details

**Form Fields:**
- FIRSTNAME - User's name (required)
- EMAIL - Email address for PDF delivery (required)
- Cloudflare Turnstile captcha (site key: 0x4AAAAAAB453ah9S9YzuZSO)
- Honeypot field (email_address_check) for spam prevention

**External Dependencies:**
- Brevo form JavaScript: https://sibforms.com/forms/end-form/build/main.js
- Brevo styles: https://sibforms.com/forms/end-form/build/sib-styles.css
- Cloudflare Turnstile: https://challenges.cloudflare.com/turnstile/v0/api.js
- Roboto font loaded from Brevo CDN

**Form Action Endpoint:**
https://610797ae.sibforms.com/serve/MUIFAIjSR6PpHBGHP_XeDRgdLW1vkwDH6oRbYPn1GQQb37VLOGLGm0Jl8UIcyY3mkmmxVw1Q59eHcX4oBlwIS-hVpe_kzqok_BMzK8gwotJXdKufLACMDazPK8XVEtpnRA-4VURydOWwRbU9SG1OuL_7a3VlNmVEvxycvGuePY4_k9w1vz6kj4Za4Wq6tER9K118TOpDrQ_8glz0

## Content Structure

The whitepaper landing page features:
- Digital Nomad Visa Whitepaper by Lily Szabo and Leanna Lee
- Published December 2023
- 60-page primer covering demographics, history, visa directory, policy recommendations
- Author section featuring Lily Szabo (CNXlocal, Amagi Village Podcast)
