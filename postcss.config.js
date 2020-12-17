module.exports = {
  plugins: [
    require("tailwindcss"),
    require("autoprefixer"),
    // require("@fullhuman/postcss-purgecss")({
    //   content: [
    //     './assets/css/*.css',
    //     './inc/template-function.php',
    //   ],
    //   defaultExtractor: (content) => content.match(/[A-Za-z0-9-_:/]+/g) || [],
    // }),
  ],
};