const mix = require("laravel-mix");

mix
  .js("resources/js/app.js", "public/js")
  .js("resources/assets/vendor/js/bootstrap.js", "public/js")
  .js("resources/assets/vendor/js/helpers.js", "public/js")
  .js("resources/assets/vendor/js/menu.js", "public/js")
  .js("resources/assets/vendor/libs/apex-charts/apexcharts.js", "public/js")
  .js("resources/assets/vendor/libs/highlight/highlight.js", "public/js")
  .js("resources/assets/vendor/libs/jquery/jquery.js", "public/js")
  .js("resources/assets/vendor/libs/masonry/masonry.js", "public/js")
  .js(
    "resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js",
    "public/js"
  )
  .js("resources/assets/vendor/libs/popper/popper.js", "public/js");
mix
  .copyDirectory("resources/assets/css", "public/css")
  .copyDirectory("resources/assets/js", "public/js");

mix
  .sass(
    "resources/assets/vendor/libs/apex-charts/apex-charts.scss",
    "public/css"
  )
  .sass("resources/assets/vendor/fonts/boxicons.scss", "public/css")
  .sass(
    "resources/assets/vendor/libs/highlight/highlight-github.scss",
    "public/css"
  )
  .sass("resources/assets/vendor/libs/highlight/highlight.scss", "public/css")
  .sass(
    "resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.scss",
    "public/css"
  )
  .sass("resources/assets/vendor/scss/_bootstrap-extended.scss", "public/css")
  .sass("resources/assets/vendor/scss/_bootstrap.scss", "public/css")
  .sass("resources/assets/vendor/scss/_colors.scss", "public/css")
  .sass("resources/assets/vendor/scss/_components.scss", "public/css")
  .sass("resources/assets/vendor/scss/core.scss", "public/css")
  .sass("resources/assets/vendor/scss/theme-default.scss", "public/css")
  .sass(
    "resources/assets/vendor/scss/pages/page-account-settings.scss",
    "public/css/pages"
  )
  .sass("resources/assets/vendor/scss/pages/page-auth.scss", "public/css/pages")
  .sass(
    "resources/assets/vendor/scss/pages/page-icons.scss",
    "public/css/pages"
  )
  .sass("resources/assets/vendor/scss/pages/page-misc.scss", "public/css/pages")
  .sass("resources/assets/vendor/scss/_theme/_common.scss", "public/css/_theme")
  .sass(
    "resources/assets/vendor/scss/_custom-variables/_bootstrap-extended.scss",
    "public/css/_custom-variables"
  )
  .sass(
    "resources/assets/vendor/scss/_custom-variables/_components.scss",
    "public/css/_custom-variables"
  )
  .sass(
    "resources/assets/vendor/scss/_custom-variables/_libs",
    "public/css/_custom-variables"
  )
  .sass(
    "resources/assets/vendor/scss/_custom-variables/_pages.scss",
    "public/css/_custom-variables"
  )
  .sass(
    "resources/assets/vendor/scss/_custom-variables/_support.scss",
    "public/css/_custom-variables"
  )
  .sass(
    "resources/assets/vendor/scss/_components/mixins/_app-brand.scss",
    "public/css/_components/mixins"
  )
  .sass(
    "resources/assets/vendor/scss/_components/mixins/_avatar.scss",
    "public/css/_components/mixins"
  )
  .sass(
    "resources/assets/vendor/scss/_components/mixins/_footer.scss",
    "public/css/_components/mixins"
  )
  .sass(
    "resources/assets/vendor/scss/_components/mixins/_menu.scss",
    "public/css/_components/mixins"
  )
  .sass(
    "resources/assets/vendor/scss/_components/mixins/_misc.scss",
    "public/css/_components/mixins"
  )
  .sass(
    "resources/assets/vendor/scss/_components/mixins/_navbar.scss",
    "public/css/_components/mixins"
  )
  .sass(
    "resources/assets/vendor/scss/_components/mixins/_text-divider.scss",
    "public/css/_components/mixins"
  )
  .sass(
    "resources/assets/vendor/scss/_components/_app-brand.scss",
    "public/css/_components"
  )
  .sass(
    "resources/assets/vendor/scss/_components/_avatar.scss",
    "public/css/_components"
  )
  .sass(
    "resources/assets/vendor/scss/_components/_base.scss",
    "public/css/_components"
  )
  .sass(
    "resources/assets/vendor/scss/_components/_common.scss",
    "public/css/_components"
  )
  .sass(
    "resources/assets/vendor/scss/_components/_footer.scss",
    "public/css/_components"
  )
  .sass(
    "resources/assets/vendor/scss/_components/_include.scss",
    "public/css/_components"
  )
  .sass(
    "resources/assets/vendor/scss/_components/_layout.scss",
    "public/css/_components"
  )
  .sass(
    "resources/assets/vendor/scss/_components/_menu.scss",
    "public/css/_components"
  )
  .sass(
    "resources/assets/vendor/scss/_components/_mixins.scss",
    "public/css/_components"
  )
  .sass(
    "resources/assets/vendor/scss/_components/_text-divider.scss",
    "public/css/_components"
  )
  .sass(
    "resources/assets/vendor/scss/_components/_variables.scss",
    "public/css/_components"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_accordion.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_alert.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_badge.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_breadcrumb.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_button-group.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_buttons.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_card.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_carousel.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_close.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_dropdown.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_forms.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_functions.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_include.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_list-group.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_mixins.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_modal.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_nav.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_navbar.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_offcanvas.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_pagination.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_popover.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_progress.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_reboot.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_root.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_spinners.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_tables.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_tooltip.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_toasts.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_type.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_utilities-ltr.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_utilities.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/_variables.scss",
    "public/css/_bootstrap-extended"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/forms/_floating-labels.scss",
    "public/css/_bootstrap-extended/forms"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/forms/_form-control.scss",
    "public/css/_bootstrap-extended/forms"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/forms/_form-range.scss",
    "public/css/_bootstrap-extended/forms"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/forms/_form-select.scss",
    "public/css/_bootstrap-extended/forms"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/forms/_input-group.scss",
    "public/css/_bootstrap-extended/forms"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/forms/_labels.scss",
    "public/css/_bootstrap-extended/forms"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/forms/_validation.scss",
    "public/css/_bootstrap-extended/forms"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/mixins/_alert.scss",
    "public/css/_bootstrap-extended/mixins"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/mixins/_badge.scss",
    "public/css/_bootstrap-extended/mixins"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/mixins/_buttons.scss",
    "public/css/_bootstrap-extended/mixins"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/mixins/_caret.scss",
    "public/css/_bootstrap-extended/mixins"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/mixins/_dropdown.scss",
    "public/css/_bootstrap-extended/mixins"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/mixins/_forms.scss",
    "public/css/_bootstrap-extended/mixins"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/mixins/_list-group.scss",
    "public/css/_bootstrap-extended/mixins"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/mixins/_misc.scss",
    "public/css/_bootstrap-extended/mixins"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/mixins/_navs.scss",
    "public/css/_bootstrap-extended/mixins"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/mixins/_pagination.scss",
    "public/css/_bootstrap-extended/mixins"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/mixins/_progress.scss",
    "public/css/_bootstrap-extended/mixins"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/mixins/_table-variants.scss",
    "public/css/_bootstrap-extended/mixins"
  )
  .sass(
    "resources/assets/vendor/scss/_bootstrap-extended/mixins/_toasts.scss",
    "public/css/_bootstrap-extended/mixins"
  );
