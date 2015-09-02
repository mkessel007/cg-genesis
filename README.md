# ClickGiant Base Child Theme for Genesis

Github project link: https://github.com/jonrivers/cg-genesis


## Installation Instructions

1. Load critical styles first (base_dev.css is just the Genesis default stylesheet)
2. Add theme styles as normal (using styles.css)
3. Plays nicely and made to streamline Wordpress performance optimizations with with https://github.com/jonrivers/cg-soil


## Production Instructions
1. Minify base_dev.css using http://refresh-sf.com/
2. Copy and paste minified contents into base.css
3. Update functions.php to reference base.css instead of base_dev.css

## Dependencies
1. Mobble (commented out in templates; plugin required to uncomment)
2. ClickGiant Soil (commented out in functions.php; plugin required to uncomment)

## Recommended Genesis Plugins
1. Genesis Simple Sidebars (for dynamic sidebars not used in page templates)
2. Genesis Simple Social Share
3. Genesis Simple Edits

## Recommended Tooling for Staging & Production
1. Wordpress SEO
2. Better Search Replace
3. EWWW Image Optimizer
4. Force Regnerate Thumbnails

## Performance Optimization Tools
1. W3 Total Cache
2. Async JS/CSS
