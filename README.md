# GT Fitness — Responsive Product Landing Page

**Course:** ITST 302 – Client-Server Technologies
**Activity:** Week 5 Mini Project 04
**Business:** GT Fitness, San Isidro Ilaya, Brgy. Maslun, Liliw, Laguna, Philippines
**Facebook:** https://www.facebook.com/profile.php?id=61558571424663

---

## 1. Introduction

A **product landing page** is a single, focused web page built to introduce a business, product,
or service to visitors and guide them toward one clear action — in this case, joining the gym.
Unlike a full multi-page website, a landing page puts everything a visitor needs (what the
business offers, what it costs, and how to reach it) on one scrollable page.

Landing pages matter for small, local businesses like GT Fitness because most potential members
currently only find the gym through word of mouth or a Facebook page. A landing page gives the
gym a permanent, professional online presence that works even when the Facebook page isn't
actively being checked, and it makes membership pricing and services clear before someone ever
walks in.

**Purpose of this project:** build a real, responsive landing page for GT Fitness using Laravel
Blade Components and Tailwind CSS, based on the gym's actual location, pricing, equipment, and
branding, while practicing component-based frontend architecture.

## 2. Objectives

- Build a fully responsive interface using Tailwind CSS utility classes.
- Create reusable Blade Components (navbar, hero, feature card, pricing card, testimonial card,
  button, footer) to avoid duplicated markup.
- Apply responsive layouts using CSS Grid and Flexbox across desktop, tablet, and mobile.
- Organize the Laravel frontend following the `layouts / components / pages` convention.
- Apply a consistent, intentional visual identity (color, type, spacing) rather than a generic
  template look.
- Document the frontend architecture and component design in this README.

## 3. Responsive Web Design

- **Mobile-first mindset:** base utility classes target small screens; `sm:`, `lg:` breakpoints
  progressively enhance the layout for tablet and desktop.
- **Breakpoints used:** `sm` (≥640px) for the features grid, `lg` (≥1024px) for the navbar switch
  between the hamburger menu and full inline links, and the About/Gallery grid layouts.
- **Flexbox:** used in the navbar, button groups, CTA section, and stat rows for alignment along
  one axis.
- **CSS Grid:** used for the features grid, pricing cards, gallery, testimonials, and the footer's
  four-column layout, collapsing to a single column on mobile.
- **UX:** the hamburger menu on mobile keeps navigation reachable without crowding the header;
  sticky header keeps "Join Now" always one tap away.

Responsive design is important here because most people who'd search for a nearby gym on their
phone will land on this page first — if it doesn't work cleanly on a small screen, the gym loses
a potential member before they even see the pricing.

## 4. Tailwind CSS

- **Utility-first CSS:** instead of writing custom CSS classes, styling is composed directly in
  markup, e.g. `class="font-display font-semibold text-4xl sm:text-5xl mb-14"`.
- **Advantages used in this project:** fast iteration on spacing/color without leaving the Blade
  file, and a custom theme (`tailwind.config`) extending Tailwind with the gym's actual brand
  colors (`ink`, `surface`, `bone`, `red`, `turf`) and fonts (`Oswald` for display, `Inter` for
  body) so utility classes stay on-brand.
- **Responsive utility classes example:** `grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3` on the
  services section — one column on phones, two on tablets, three on desktop.
- **Component styling example:** the `<x-button>` component computes its class string in PHP
  (`$variants` array) so every button on the page shares identical padding, type, and hover
  behavior no matter where it's used.

## 5. Blade Components

Blade Components let a single Blade file define a piece of UI once, then be reused anywhere with
`<x-component-name>` and passed data through props. This project uses:

```
components/
├── navbar.blade.php
├── hero.blade.php
├── feature-card.blade.php
├── pricing-card.blade.php
├── testimonial-card.blade.php
├── button.blade.php
└── footer.blade.php
```

Example — the pricing card is defined once and reused three times with different props:

```blade
<x-pricing-card name="Monthly" price="700" unit="month">
    <li>Unlimited visits, 30 days</li>
</x-pricing-card>
```

**Why this matters:** without components, each of the three pricing cards (and six feature cards)
would require copy-pasting the same markup and manually keeping the styling in sync. If GT Fitness
later changes its pricing card design, it only needs to change one file. This is the core benefit
of modular UI development — lower duplication, easier maintenance, and consistent design.

## 6. User Interface Design

- **Color palette:** `#0D0F0C` (ink/background), `#1A1D18` (surface/cards), `#E8E6DF` (bone/text),
  `#C81E1E` (red, taken from the gym's real signage and logo), `#2F9E44` (turf green, echoing the
  actual artificial turf flooring in the gym).
- **Typography:** Oswald (condensed, bold) for headlines and labels to match the gym's bold
  stenciled signage; Inter for body copy for readability.
- **Iconography:** simple stroke-based SVG icons (dumbbell, heartbeat, trainer, clipboard, grid,
  clock) rather than a heavy icon library, matching the page's stripped-down aesthetic.
- **Button styles:** flat, hard-edged (no rounded pills) in three variants — primary (solid red),
  outline, and ghost — reflecting an industrial, no-gimmicks gym rather than a polished SaaS app.
- **Card design:** flat surfaces with a colored top or left border instead of drop shadows, again
  avoiding the generic "SaaS card" look.
- **Layout consistency:** every section follows the same rhythm — a small red uppercase label,
  a large Oswald heading, then content — so a visitor always knows where a new topic starts.

These choices work together to feel like an actual neighborhood gym rather than a fitness app
template, which matches the real subject and audience (local residents of Liliw, not a global
SaaS market).

## 7. Folder Structure

```
resources/views/layouts/    → shared page shell (app.blade.php): head, fonts, navbar, footer slot
resources/views/components/ → reusable Blade Components listed above
resources/views/pages/      → actual page content (home.blade.php) that fills the layout's slot
public/images/              → gym logo and real equipment/facility photos used across the page
```

- `layouts` holds the one file every page extends, keeping `<head>`, fonts, and global chrome
  (navbar/footer) in a single place.
- `components` holds small, reusable, prop-driven pieces of UI.
- `pages` holds the actual page-specific content that gets slotted into the layout.
- `public/images` holds the static gym photography referenced from the Blade views.

## 8. Screenshots

See `/screenshots` folder for Desktop, Tablet, and Mobile views, plus individual section
captures (Navbar, Hero, Features, Pricing, Testimonials, Footer) and the Blade Components folder
and GitHub repository.

## 9. Before-and-After

See `/documentation` folder for the early wireframe/prototype versus the final polished,
responsive version.

## Notes on Content

All prices (₱60 daily, ₱350 for 15 days, ₱700 monthly), the address (San Isidro Ilaya, Brgy.
Maslun, Liliw), the two-year operating history, and the Facebook link were provided directly by
the project owner as real, publicly shareable information about the business. Trainer names were
not included since none were provided as publicly available. Sample testimonials are placeholder
content written for this project and should be swapped for real member quotes (with permission)
before this page goes live for the actual business.
