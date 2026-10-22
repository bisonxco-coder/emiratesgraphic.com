# Luvea HTML Email Template

This folder contains a **client-safe HTML email** (table-based, responsive, Outlook-friendly) based on the provided screenshot.

## Files

- `email-template.html`: the production-ready template

## Quick customize (search/replace)

- **Merge tags used** (simple placeholders you can replace or map in your ESP):
  - `{{logo_mark_url}}`
  - `{{hero_image_url}}`
  - `{{cta_url}}`
  - `{{facebook_url}}`, `{{youtube_url}}`, `{{instagram_url}}`
  - `{{facebook_icon_url}}`, `{{youtube_icon_url}}`, `{{instagram_icon_url}}`
  - `{{support_email}}`
- **Unsubscribe**:
  - Keep `%%unsubscribe%%` if your ESP uses merge tags
  - Or replace with your real unsubscribe URL

## Notes (compatibility/performance)

- Uses **100% inline styles** (no `<style>` block), so it’s easy to paste into most ESP editors.
- Button is **bulletproof** (VML for Outlook + regular HTML for other clients).
- Avoids web fonts for maximum deliverability and consistent rendering.

