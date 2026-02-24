# Mauli Puja Bhandar

Landing page for **Mauli Puja Bhandar** — Kolhapur's trusted destination for authentic puja samagri, brass idols, and spiritual accessories.

**Live:** [maulipujabhandar.shop](https://maulipujabhandar.shop)

---

## Tech Stack

| Layer     | Technology                                                        |
| --------- | ----------------------------------------------------------------- |
| Backend   | PHP (section-based includes)                                      |
| Framework | [Bootstrap 5.3](https://getbootstrap.com/)                       |
| Icons     | [Remix Icon 4.1](https://remixicon.com/) (CDN)                   |
| Fonts     | [Manrope](https://fonts.google.com/specimen/Manrope), [Noto Serif Devanagari](https://fonts.google.com/noto/specimen/Noto+Serif+Devanagari) |
| Images    | [Cloudinary](https://cloudinary.com/)                             |
| Maps      | Google Maps Embed                                                 |

## Project Structure

```
maulipujabhandar/
├── assets/
│   ├── css/
│   │   └── style.css          # Custom styles + responsive rules
│   ├── favicon.ico
│   └── logo-mauli.png
├── sections/
│   ├── head.php               # DOCTYPE, meta tags, CDN links
│   ├── nav.php                # Sticky navbar + offcanvas mobile menu
│   ├── hero.php               # Hero banner + trust badges
│   ├── intro.php              # Introduction + category preview cards
│   ├── categories.php         # Sacred collection grid
│   ├── gallery.php            # Product & store photo gallery
│   ├── legacy.php             # About / story section
│   ├── location.php           # Google Maps, address, hours, phone
│   └── footer.php             # Footer + scripts
├── index.php                  # Main entry — includes all sections
└── README.md
```

## Sections

| Section        | Description                                                          |
| -------------- | -------------------------------------------------------------------- |
| **Hero**       | Full-width banner with Hindi/English title and CTA                   |
| **Trust Badges** | Authentic Quality, Serving Kolhapur, Wide Variety                  |
| **Intro**      | "Where Tradition Meets Devotion" + 4 category preview cards          |
| **Categories** | Sacred collection — Daily Essentials, Festival Specials, Havan Samagri, Divine Idols |
| **Gallery**    | 8-image grid with hover zoom overlay                                 |
| **Legacy**     | Store story, established 2021, Bhagavad Gita quote                   |
| **Location**   | Google Maps embed, address, phone, opening hours                     |
| **Footer**     | Brand, WhatsApp link, copyright                                      |

## Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/akaashchitragar/mauli-puja-bhandar.git
   ```

2. Serve with any PHP server:
   ```bash
   cd mauli-puja-bhandar
   php -S localhost:8000
   ```

3. Open [http://localhost:8000](http://localhost:8000) in your browser.

> No build step, no dependencies to install. Just PHP and a browser.

## Design

- **Primary color:** `#f58019` (saffron orange)
- **Dark background:** `#221810` (warm dark brown)
- **Accent:** `#CFB53B` (gold)
- Subtle mandala dot pattern overlay
- SVG cross pattern background
- Fully responsive — mobile, tablet, desktop

---

Designed & Developed by [WebArt4U](https://webart4u.com)
